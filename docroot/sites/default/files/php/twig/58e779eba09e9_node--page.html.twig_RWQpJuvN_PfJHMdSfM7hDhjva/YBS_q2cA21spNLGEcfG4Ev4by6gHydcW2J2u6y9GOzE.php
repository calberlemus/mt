<?php

/* themes/contrib/aklas/templates/node--page.html.twig */
class __TwigTemplate_6ea4f25457ef935e294b792a0451000ccf0e336046569db21518d270184f5277 extends Twig_Template
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
        $tags = array("if" => 69, "trans" => 94);
        $filters = array("render" => 69, "without" => 102);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'trans'),
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

        // line 68
        echo "<article";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
  ";
        // line 69
        if ($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "body", array()))) {
            // line 70
            echo "    <div class=\"container\">
      ";
            // line 71
            if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_image", array())) {
                // line 72
                echo "        <div class=\"featured-image\">
          ";
                // line 73
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_image", array()), "html", null, true));
                echo "
        </div>
      ";
            }
            // line 76
            echo "      <div class=\"article-inner\">
        ";
            // line 77
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
            echo "
        ";
            // line 78
            if ( !(isset($context["page"]) ? $context["page"] : null)) {
                // line 79
                echo "          <h2";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true));
                echo ">
            <a href=\"";
                // line 80
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true));
                echo "\" rel=\"bookmark\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
                echo "</a>
          </h2>
        ";
            }
            // line 83
            echo "
        ";
            // line 84
            if (((isset($context["page"]) ? $context["page"] : null) && (isset($context["node_title"]) ? $context["node_title"] : null))) {
                // line 85
                echo "          <h2";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true));
                echo ">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
                echo "</h2>
        ";
            }
            // line 87
            echo "
        ";
            // line 88
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
            echo "


        ";
            // line 91
            if ((isset($context["display_submitted"]) ? $context["display_submitted"] : null)) {
                // line 92
                echo "          <footer>
            <div";
                // line 93
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["author_attributes"]) ? $context["author_attributes"] : null), "html", null, true));
                echo ">
              ";
                // line 94
                echo t("By @author_name
              @date", array("@author_name" => (isset($context["author_name"]) ? $context["author_name"] : null), "@date" =>                 // line 95
(isset($context["date"]) ? $context["date"] : null), ));
                // line 96
                echo "              ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["metadata"]) ? $context["metadata"] : null), "html", null, true));
                echo "
            </div>
          </footer>
        ";
            }
            // line 100
            echo "
        <div";
            // line 101
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content_attributes"]) ? $context["content_attributes"] : null), "html", null, true));
            echo ">
          ";
            // line 102
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without((isset($context["content"]) ? $context["content"] : null), "field_image", "field_builder"), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 107
        echo "
  ";
        // line 108
        if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_builder", array())) {
            // line 109
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_builder", array()), "html", null, true));
            echo "
  ";
        }
        // line 111
        echo "</article>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/aklas/templates/node--page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 111,  149 => 109,  147 => 108,  144 => 107,  136 => 102,  132 => 101,  129 => 100,  121 => 96,  119 => 95,  117 => 94,  113 => 93,  110 => 92,  108 => 91,  102 => 88,  99 => 87,  91 => 85,  89 => 84,  86 => 83,  78 => 80,  73 => 79,  71 => 78,  67 => 77,  64 => 76,  58 => 73,  55 => 72,  53 => 71,  50 => 70,  48 => 69,  43 => 68,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation to display a node.
 *
 * Available variables:
 * - node: The node entity with limited access to object properties and methods.
     Only \"getter\" methods (method names starting with \"get\", \"has\", or \"is\")
     and a few common methods such as \"id\" and \"label\" are available. Calling
     other methods (such as node.delete) will result in an exception.
 * - label: The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: Themed creation date field.
 * - author_name: Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - node: The current template type (also known as a \"theming hook\").
 *   - node--type-[type]: The current node type. For example, if the node is an
 *     \"Article\" it would result in \"node--type-article\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a
 *     teaser would result in: \"node--view-mode-teaser\", and
 *     full: \"node--view-mode-full\".
 *   The following are controlled through the node publishing options.
 *   - node--promoted: Appears on nodes promoted to the front page.
 *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in
 *     teaser listings.
 *   - node--unpublished: Appears on unpublished nodes visible only to site
 *     admins.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 * - readmore: Flag for more state. Will be true if the teaser content of the
 *   node cannot hold the main body content.
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_node()
 *
 * @todo Remove the id attribute (or make it a class), because if that gets
 *   rendered twice on a page this is invalid CSS for example: two lists
 *   in different view modes.
 *
 * @ingroup themeable
 */
#}
<article{{ attributes }}>
  {% if content.body|render %}
    <div class=\"container\">
      {% if( content.field_image ) %}
        <div class=\"featured-image\">
          {{ content.field_image }}
        </div>
      {% endif %}
      <div class=\"article-inner\">
        {{ title_prefix }}
        {% if not page %}
          <h2{{ title_attributes }}>
            <a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a>
          </h2>
        {% endif %}

        {% if page and node_title %}
          <h2{{ title_attributes }}>{{ label }}</h2>
        {% endif %}

        {{ title_suffix }}


        {% if display_submitted %}
          <footer>
            <div{{ author_attributes }}>
              {% trans %}By {{ author_name }}
              {{ date }}{% endtrans %}
              {{ metadata }}
            </div>
          </footer>
        {% endif %}

        <div{{ content_attributes }}>
          {{ content|without('field_image', 'field_builder') }}
        </div>
      </div>
    </div>
  {% endif %}

  {% if content.field_builder %}
    {{ content.field_builder }}
  {% endif %}
</article>
";
    }
}
