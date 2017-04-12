<?php

/* themes/contrib/aklas/templates/user.html.twig */
class __TwigTemplate_48455944e56919edd4a645f22fd8c07ad77dda8d8e5a0f9d7e7734b8b27b9044 extends Twig_Template
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
        $tags = array("if" => 20);
        $filters = array("render" => 26, "without" => 32);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('render', 'without'),
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

        // line 19
        echo "<article";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "profile"), "method"), "html", null, true));
        echo ">
  ";
        // line 20
        if (((isset($context["content"]) ? $context["content"] : null) && (((isset($context["view_mode"]) ? $context["view_mode"] : null) == "default") || ((isset($context["view_mode"]) ? $context["view_mode"] : null) == "full")))) {
            // line 21
            echo "    <div class=\"media\">
      <div class=\"media-left\">
        ";
            // line 23
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "user_picture", array()), "html", null, true));
            echo "
      </div>
      <div class=\"media-body\">
        ";
            // line 26
            if ($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "member_for", array()))) {
                // line 27
                echo "          <div class=\"member-for\">
            ";
                // line 28
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "member_for", array()), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 31
            echo "
        ";
            // line 32
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without((isset($context["content"]) ? $context["content"] : null), "user_picture", "member_for"), "html", null, true));
            echo "
      </div>
    </div>
  ";
        } else {
            // line 36
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        }
        // line 38
        echo "</article>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/aklas/templates/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 38,  81 => 36,  74 => 32,  71 => 31,  65 => 28,  62 => 27,  60 => 26,  54 => 23,  50 => 21,  48 => 20,  43 => 19,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override to present all user data.
 *
 * This template is used when viewing a registered user's page,
 * e.g., example.com/user/123. 123 being the user's ID.
 *
 * Available variables:
 * - content: A list of content items. Use 'content' to print all content, or
 *   print a subset such as 'content.field_example'. Fields attached to a user
 *   such as 'user_picture' are available as 'content.user_picture'.
 * - attributes: HTML attributes for the container element.
 * - user: A Drupal User entity.
 *
 * @see template_preprocess_user()
 */
#}
<article{{ attributes.addClass('profile') }}>
  {% if content and (view_mode == 'default' or view_mode == 'full') %}
    <div class=\"media\">
      <div class=\"media-left\">
        {{ content.user_picture }}
      </div>
      <div class=\"media-body\">
        {% if content.member_for|render %}
          <div class=\"member-for\">
            {{ content.member_for }}
          </div>
        {% endif %}

        {{ content|without('user_picture', 'member_for') }}
      </div>
    </div>
  {% else %}
    {{- content -}}
  {% endif %}
</article>
";
    }
}
