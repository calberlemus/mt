<?php

/* themes/custom/mt/templates/input/form-element.html.twig */
class __TwigTemplate_9f977aafc14bb206949a579d5f08a9931e5a39cf980ecc9ec2f3bf782a248307 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 47);
        $filters = array("clean_class" => 50);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set'),
                array('clean_class'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 47
        $context["classes"] = array(0 => "form-item", 1 => "js-form-item", 2 => ("form-type-" . \Drupal\Component\Utility\Html::getClass(        // line 50
(isset($context["type"]) ? $context["type"] : null))), 3 => ("js-form-type-" . \Drupal\Component\Utility\Html::getClass(        // line 51
(isset($context["type"]) ? $context["type"] : null))), 4 => ("form-item-" . \Drupal\Component\Utility\Html::getClass(        // line 52
(isset($context["name"]) ? $context["name"] : null))), 5 => ("js-form-item-" . \Drupal\Component\Utility\Html::getClass(        // line 53
(isset($context["name"]) ? $context["name"] : null))), 6 => ((!twig_in_filter(        // line 54
(isset($context["title_display"]) ? $context["title_display"] : null), array(0 => "after", 1 => "before"))) ? ("form-no-label") : ("")), 7 => (((        // line 55
(isset($context["disabled"]) ? $context["disabled"] : null) == "disabled")) ? ("form-disabled") : ("")), 8 => ((        // line 56
(isset($context["is_form_group"]) ? $context["is_form_group"] : null)) ? ("form-group") : ("")), 9 => ((        // line 57
(isset($context["is_radio"]) ? $context["is_radio"] : null)) ? ("radio") : ("")), 10 => ((        // line 58
(isset($context["is_checkbox"]) ? $context["is_checkbox"] : null)) ? ("checkbox") : ("")), 11 => ((        // line 59
(isset($context["is_autocomplete"]) ? $context["is_autocomplete"] : null)) ? ("form-autocomplete") : ("")), 12 => ((        // line 60
(isset($context["errors"]) ? $context["errors"] : null)) ? ("error has-error") : ("")), 13 => ((twig_in_filter(        // line 61
(isset($context["type"]) ? $context["type"] : null), array(0 => "textfield", 1 => "email", 2 => "password", 3 => "textarea", 4 => "search"))) ? ("mui-textfield mui-textfield--float-label") : (("mui-" . \Drupal\Component\Utility\Html::getClass((isset($context["type"]) ? $context["type"] : null))))));
        // line 64
        $context["description_classes"] = array(0 => "description", 1 => "help-block", 2 => (((        // line 67
(isset($context["description_display"]) ? $context["description_display"] : null) == "invisible")) ? ("visually-hidden") : ("")));
        // line 70
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
  ";
        // line 71
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        echo "
  
  ";
        // line 73
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
        echo "
  
  
  <div";
        // line 76
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["description"]) ? $context["description"] : null), "attributes", array()), "addClass", array(0 => (isset($context["description_classes"]) ? $context["description_classes"] : null)), "method"), "html", null, true));
        echo ">
    ";
        // line 77
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content", array()), "html", null, true));
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/mt/templates/input/form-element.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 77,  76 => 76,  70 => 73,  65 => 71,  60 => 70,  58 => 67,  57 => 64,  55 => 61,  54 => 60,  53 => 59,  52 => 58,  51 => 57,  50 => 56,  49 => 55,  48 => 54,  47 => 53,  46 => 52,  45 => 51,  44 => 50,  43 => 47,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation for a form element.
 *
 * Available variables:
 * - attributes: HTML attributes for the containing element.
 * - required: The required marker, or empty if the associated form element is
 *   not required.
 * - type: The type of the element.
 * - name: The name of the element.
 * - label: A rendered label element.
 * - label_display: Label display setting. It can have these values:
 *   - before: The label is output before the element. This is the default.
 *     The label includes the #title and the required marker, if #required.
 *   - after: The label is output after the element. For example, this is used
 *     for radio and checkbox #type elements. If the #title is empty but the
 *     field is #required, the label will contain only the required marker.
 *   - invisible: Labels are critical for screen readers to enable them to
 *     properly navigate through forms but can be visually distracting. This
 *     property hides the label for everyone except screen readers.
 *   - attribute: Set the title attribute on the element to create a tooltip but
 *     output no label element. This is supported only for checkboxes and radios
 *     in \\Drupal\\Core\\Render\\Element\\CompositeFormElementTrait::preRenderCompositeFormElement().
 *     It is used where a visual label is not needed, such as a table of
 *     checkboxes where the row and column provide the context. The tooltip will
 *     include the title and required marker.
 * - description: (optional) A list of description properties containing:
 *    - content: A description of the form element, may not be set.
 *    - attributes: (optional) A list of HTML attributes to apply to the
 *      description content wrapper. Will only be set when description is set.
 * - description_display: Description display setting. It can have these values:
 *   - before: The description is output before the element.
 *   - after: The description is output after the element. This is the default
 *     value.
 *   - invisible: The description is output after the element, hidden visually
 *     but available to screen readers.
 * - disabled: True if the element is disabled.
 * - title_display: Title display setting.
 *
 * @ingroup templates
 *
 * @see template_preprocess_form_element()
 */
#}
{%
  set classes = [
    'form-item',
    'js-form-item',
    'form-type-' ~ type|clean_class,
    'js-form-type-' ~ type|clean_class,
    'form-item-' ~ name|clean_class,
    'js-form-item-' ~ name|clean_class,
    title_display not in ['after', 'before'] ? 'form-no-label',
    disabled == 'disabled' ? 'form-disabled',
    is_form_group ? 'form-group',
    is_radio ? 'radio',
    is_checkbox ? 'checkbox',
    is_autocomplete ? 'form-autocomplete',
    errors ? 'error has-error',
    type in ['textfield', 'email', 'password', 'textarea', 'search'] ? 'mui-textfield mui-textfield--float-label' : 'mui-' ~ type|clean_class,
  ]
%}{%
  set description_classes = [
    'description',
    'help-block',
    description_display == 'invisible' ? 'visually-hidden',
  ]
%}
<div{{ attributes.addClass(classes) }}>
  {{ children }}
  
  {{ label }}
  
  
  <div{{ description.attributes.addClass(description_classes) }}>
    {{ description.content }}
  </div>
</div>
";
    }
}
