/**
 * @file
 * Extends the Drupal AJAX functionality to integrate the dialog API.
 */

(function ($, Drupal) {
  'use strict';

  /**
   * Initialize dialogs for Ajax purposes.
   *
   * @type {Drupal~behavior}
   */
  Drupal.behaviors.dialog = {
    attach: function (context, settings) {
      var $context = $(context);

      // Provide a known 'drupal-modal' DOM element for Drupal-based modal
      // dialogs. Non-modal dialogs are responsible for creating their own
      // elements, since there can be multiple non-modal dialogs at a time.
      if (!$('#drupal-modal').length) {
        $(Drupal.theme.bootstrapModal()).appendTo('body');
      }

      // Special behaviors specific when attaching content within a dialog.
      // These behaviors usually fire after a validation error inside a dialog.
      var $dialog = $context.closest('.modal');
      if ($dialog.length) {
        // Remove and replace the dialog buttons with those from the new form.
        if ($dialog.modal('option', 'drupalAutoButtons')) {
          // Trigger an event to detect/sync changes to buttons.
          $dialog.trigger('dialogButtonsChange');
        }

        // Attempt to force focus on the first visible input (not :input) in
        // the modal body when the behavior is run.
        Drupal.behaviors.dialog.focus($dialog);
      }

      var originalClose = settings.dialog.close;
      // Overwrite the close method to remove the dialog on closing.
      settings.dialog.close = function (event) {
        originalClose.apply(settings.dialog, arguments);
        $(event.target).remove();
      };
    },

    /**
     * Attempt to focus the first visible input (not :input) in the modal body.
     *
     * @param {jQuery} $dialog
     *   An jQuery object containing the element that is the dialog target.
     */
    focus: function ($dialog) {
      $dialog.find('.modal-body input:visible:first').trigger('focus');
    },

    /**
     * Scan a dialog for any primary buttons and move them to the button area.
     *
     * @param {jQuery} $dialog
     *   An jQuery object containing the element that is the dialog target.
     *
     * @return {Array}
     *   An array of buttons that need to be added to the button area.
     */
    prepareDialogButtons: function ($dialog) {
      var buttons = [];
      var $buttons = $dialog.find('.form-actions :input[type=submit]');
      $buttons.each(function () {
        // Hidden form buttons need special attention. For browser consistency,
        // the button needs to be "visible" in order to have the enter key fire
        // the form submit event. So instead of a simple "hide" or
        // "display: none", we set its dimensions to zero.
        // See http://mattsnider.com/how-forms-submit-when-pressing-enter/
        var $originalButton = $(this).css({
          display: 'block',
          width: 0,
          height: 0,
          padding: 0,
          border: 0
        });
        buttons.push({
          text: $originalButton.html() || $originalButton.attr('value'),
          class: $originalButton.attr('class'),
          click: function (e) {
            $originalButton.trigger('mousedown').trigger('mouseup').trigger('click');
            e.preventDefault();
          }
        });
      });
      return buttons;
    }
  };

  /**
   * Command to open a dialog.
   *
   * @param {Drupal.Ajax} ajax
   * @param {object} response
   * @param {number} [status]
   *
   * @return {bool|undefined}
   */
  Drupal.AjaxCommands.prototype.openDialog = function (ajax, response, status) {
    if (!response.selector) {
      return false;
    }

    var $dialog = $(response.selector);
    if (!$dialog.length) {
      // Create the element if needed.
      $dialog = $(Drupal.theme.bootstrapModal({ id: response.selector.replace(/^#/, '') })).appendTo('body');
    }
    // Set up the wrapper, if there isn't one.
    var id = $dialog.attr('id');
    if (response.selector === '#' + id) {
      response.selector = '#' + id + '--body';
    }
    else if (!ajax.wrapper) {
      ajax.wrapper = id + '--body';
    }

    // Use the ajax.js insert command to populate the dialog contents.
    response.command = 'insert';
    response.method = 'html';
    ajax.commands.insert(ajax, response, status);

    var clases = 'modal-content ' + $(response.data).filter(function() {
      return this.nodeType === 1;
    }).attr('class');
    $dialog.find('.modal-content').attr('class', clases);

    // Open the dialog itself.
    response.dialogOptions = response.dialogOptions || {};
    var dialog = Drupal.dialog($dialog.get(0), response.dialogOptions);
    if (response.dialogOptions.modal) {
      dialog.showModal();
    }
    else {
      dialog.show();
    }

    // Add the standard Drupal class for buttons for style consistency.
    $dialog.parent().find('.ui-dialog-buttonset').addClass('form-actions');
  };

  /**
   * Command to close a dialog.
   *
   * If no selector is given, it defaults to trying to close the modal.
   *
   * @param {Drupal.Ajax} [ajax]
   * @param {object} response
   * @param {string} response.selector
   * @param {bool} response.persist
   * @param {number} [status]
   */
  Drupal.AjaxCommands.prototype.closeDialog = function (ajax, response, status) {
    var $dialog = $(response.selector);
    if ($dialog.length) {
      Drupal.dialog($dialog.get(0)).close();
      if (!response.persist) {
        // Wrap this in a timer so animations can finish.
        setTimeout(function() {
          $dialog.remove();
        }, 1000);
      }
    }

    // Unbind dialogButtonsChange.
    $dialog.off('dialogButtonsChange');
  };

  /**
   * Command to set a dialog property.
   *
   * JQuery UI specific way of setting dialog options.
   *
   * @param {Drupal.Ajax} [ajax]
   * @param {object} response
   * @param {string} response.selector
   * @param {string} response.optionsName
   * @param {string} response.optionValue
   * @param {number} [status]
   */
  Drupal.AjaxCommands.prototype.setDialogOption = function (ajax, response, status) {
    var $dialog = $(response.selector);
    if ($dialog.length) {
      $dialog.modal('option', response.optionName, response.optionValue);
    }
  };

  /**
   * Binds a listener on dialog before creation to setup title and buttons.
   *
   * @param {jQuery.Event} e
   * @param {Drupal.dialog} dialog
   * @param {jQuery} $element
   * @param {object} settings
   */
  $(window).on('dialog:beforecreate', function (e, dialog, $element, settings) {
    // Replace title.
    if (settings.title) {
      var $header = $element.find('.modal-header');
      if (!$header[0]) {
        $header = $(Drupal.theme.bootstrapModalHeader()).prependTo($element.find('.modal-content'));
      }
      $header.find('.modal-title').text(settings.title);
    }

    // Remove any existing buttons.
    $element.find('.modal-footer').remove();

    // Add new buttons.
    if (settings.buttons && settings.buttons.length) {
      var $footer = $(Drupal.theme.bootstrapModalFooter('', true)).appendTo($element.find('.modal-content'));
      for (var i in settings.buttons) {
        if (!settings.buttons.hasOwnProperty(i)) continue;
        var button = settings.buttons[i];
        $('<button class="' + button.class + '">' + button.text + '</button>')
          .appendTo($footer)
          .on('click', button.click);
      }
    }
  });

  /**
   * Binds a listener on dialog creation to handle the cancel link.
   *
   * @param {jQuery.Event} e
   * @param {Drupal.dialog} dialog
   * @param {jQuery} $element
   * @param {object} settings
   */
  $(window).on('dialog:aftercreate', function (e, dialog, $element, settings) {
    Drupal.behaviors.dialog.focus($element);
    $element.on('click.dialog', '.dialog-cancel', function (e) {
      dialog.close('cancel');
      e.preventDefault();
      e.stopPropagation();
    });
  });

  /**
   * Removes all 'dialog' listeners.
   *
   * @param {jQuery.Event} e
   * @param {Drupal.dialog} dialog
   * @param {jQuery} $element
   */
  $(window).on('dialog:beforeclose', function (e, dialog, $element) {
    $element.off('.modal.drupal');
  });

})(jQuery, Drupal);
