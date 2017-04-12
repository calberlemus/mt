/**
 * @file
 * Dialog API inspired by HTML5 dialog element.
 *
 * @see http://www.whatwg.org/specs/web-apps/current-work/multipage/commands.html#the-dialog-element
 */

(function ($, Drupal, drupalSettings) {

  'use strict';

  /**
   * Default dialog options.
   *
   * @type {object}
   *
   * @prop {bool} [autoOpen=true]
   * @prop {string} [dialogClass='']
   * @prop {string} [buttonClass='button']
   * @prop {string} [buttonPrimaryClass='button--primary']
   * @prop {function} close
   */
  drupalSettings.dialog = {
    autoOpen: true,
    dialogClass: '',
    // Drupal-specific extensions: see dialog.jquery-ui.js.
    buttonClass: 'button',
    buttonPrimaryClass: 'button--primary',
    // When using this API directly (when generating dialogs on the client
    // side), you may want to override this method and do
    // `jQuery(event.target).remove()` as well, to remove the dialog on
    // closing.
    close: function (event) {
      Drupal.detachBehaviors(event.target, null, 'unload');
    }
  };

  /**
   * @typedef {object} Drupal.dialog~dialogDefinition
   *
   * @prop {boolean} open
   *   Is the dialog open or not.
   * @prop {*} returnValue
   *   Return value of the dialog.
   * @prop {function} show
   *   Method to display the dialog on the page.
   * @prop {function} showModal
   *   Method to display the dialog as a modal on the page.
   * @prop {function} close
   *   Method to hide the dialog from the page.
   */

  /**
   * Polyfill HTML5 dialog element with jQueryUI.
   *
   * @param {HTMLElement} element
   * @param {object} options
   *   jQuery UI options to be passed to the dialog.
   *
   * @return {Drupal.dialog~dialogDefinition}
   */
  Drupal.dialog = function (element, options) {
    var $element = $(element);

    function openDialog(settings) {
      settings = $.extend({}, drupalSettings.dialog, options, settings);
      // Trigger a global event to allow scripts to bind events to the dialog.
      $(window).trigger('dialog:beforecreate', [dialog, $element, settings]);
      $element
        .modal(settings)
        .on('shown.bs.modal.drupal', function () {
          dialog.open = true;
          $(window).trigger('dialog:aftercreate', [dialog, $element, settings]);
        })
      ;
    }

    function closeDialog(value) {
      $(window).trigger('dialog:beforeclose', [dialog, $element]);
      $element
        .on('hidden.bs.modal.drupal', function () {
          dialog.returnValue = value;
          dialog.open = false;
          $(window).trigger('dialog:afterclose', [dialog, $element]);
        })
        .modal('hide');
    }

    var dialog = {
      open: false,
      returnValue: void(0),
      show: function () {
        openDialog({show: false});
      },
      showModal: function () {
        openDialog({show: true});
      },
      close: closeDialog
    };

    return dialog;
  };

})(jQuery, Drupal, drupalSettings);
;
!function(o,t){"use strict";t.behaviors.dialog={attach:function(e,a){var n=o(e);o("#drupal-modal").length||o(t.theme.bootstrapModal()).appendTo("body");var i=n.closest(".modal");i.length&&(i.modal("option","drupalAutoButtons")&&i.trigger("dialogButtonsChange"),t.behaviors.dialog.focus(i));var l=a.dialog.close;a.dialog.close=function(t){l.apply(a.dialog,arguments),o(t.target).remove()}},focus:function(o){o.find(".modal-body input:visible:first").trigger("focus")},prepareDialogButtons:function(t){var e=[],a=t.find(".form-actions :input[type=submit]");return a.each(function(){var t=o(this).css({display:"block",width:0,height:0,padding:0,border:0});e.push({text:t.html()||t.attr("value"),"class":t.attr("class"),click:function(o){t.trigger("mousedown").trigger("mouseup").trigger("click"),o.preventDefault()}})}),e}},t.AjaxCommands.prototype.openDialog=function(e,a,n){if(!a.selector)return!1;var i=o(a.selector);i.length||(i=o(t.theme.bootstrapModal({id:a.selector.replace(/^#/,"")})).appendTo("body"));var l=i.attr("id");a.selector==="#"+l?a.selector="#"+l+"--body":e.wrapper||(e.wrapper=l+"--body"),a.command="insert",a.method="html",e.commands.insert(e,a,n);var r="modal-content "+o(a.data).filter(function(){return 1===this.nodeType}).attr("class");i.find(".modal-content").attr("class",r),a.dialogOptions=a.dialogOptions||{};var d=t.dialog(i.get(0),a.dialogOptions);a.dialogOptions.modal?d.showModal():d.show(),i.parent().find(".ui-dialog-buttonset").addClass("form-actions")},t.AjaxCommands.prototype.closeDialog=function(e,a,n){var i=o(a.selector);i.length&&(t.dialog(i.get(0)).close(),a.persist||setTimeout(function(){i.remove()},1e3)),i.off("dialogButtonsChange")},t.AjaxCommands.prototype.setDialogOption=function(t,e,a){var n=o(e.selector);n.length&&n.modal("option",e.optionName,e.optionValue)},o(window).on("dialog:beforecreate",function(e,a,n,i){if(i.title){var l=n.find(".modal-header");l[0]||(l=o(t.theme.bootstrapModalHeader()).prependTo(n.find(".modal-content"))),l.find(".modal-title").text(i.title)}if(n.find(".modal-footer").remove(),i.buttons&&i.buttons.length){var r=o(t.theme.bootstrapModalFooter("",!0)).appendTo(n.find(".modal-content"));for(var d in i.buttons)if(i.buttons.hasOwnProperty(d)){var s=i.buttons[d];o('<button class="'+s["class"]+'">'+s.text+"</button>").appendTo(r).on("click",s.click)}}}),o(window).on("dialog:aftercreate",function(o,e,a,n){t.behaviors.dialog.focus(a),a.on("click.dialog",".dialog-cancel",function(o){e.close("cancel"),o.preventDefault(),o.stopPropagation()})}),o(window).on("dialog:beforeclose",function(o,t,e){e.off(".modal.drupal")})}(jQuery,Drupal);;
