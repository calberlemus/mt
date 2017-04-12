<?php

/* themes/contrib/aklas/templates/node.html.twig */
class __TwigTemplate_2e5b525bb090060750a54e5624430c4d4da087251b206424ba9ec1b30ed759d2 extends Twig_Template
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
        $tags = array("if" => 70, "trans" => 101);
        $filters = array("render" => 70, "without" => 122);
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
        echo "
<article";
        // line 69
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
  ";
        // line 70
        if ($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_image", array()))) {
            // line 71
            echo "    <div class=\"featured-image\">
      ";
            // line 72
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_image", array()), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 75
        echo "  <div class=\"article-inner\">
    ";
        // line 76
        if ((isset($context["display_submitted"]) ? $context["display_submitted"] : null)) {
            // line 77
            echo "    <div class=\"node-created\">
      <div class=\"node-created-inner\">
        <span class=\"date\">";
            // line 79
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["created_date"]) ? $context["created_date"] : null), "html", null, true));
            echo "</span>
        <span class=\"month\">";
            // line 80
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["created_month"]) ? $context["created_month"] : null), "html", null, true));
            echo "</span>
      </div>
    </div>
    ";
        }
        // line 84
        echo "    ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
    ";
        // line 85
        if ( !(isset($context["page"]) ? $context["page"] : null)) {
            // line 86
            echo "      <h2";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true));
            echo ">
        <a href=\"";
            // line 87
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true));
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</a>
      </h2>
    ";
        }
        // line 90
        echo "
    ";
        // line 91
        if (((isset($context["page"]) ? $context["page"] : null) && (isset($context["node_title"]) ? $context["node_title"] : null))) {
            // line 92
            echo "      <h2";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</h2>
    ";
        }
        // line 94
        echo "
    ";
        // line 95
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "


    ";
        // line 98
        if ((isset($context["display_submitted"]) ? $context["display_submitted"] : null)) {
            // line 99
            echo "      <footer>
        <div";
            // line 100
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["author_attributes"]) ? $context["author_attributes"] : null), "addClass", array(0 => "node-submitted"), "method"), "html", null, true));
            echo ">
          ";
            // line 101
            echo t("<span
            class=\"node-submitted-item author-name\">Written by: @author_name</span> <span
            class=\"node-submitted-item comment-count\">@comment_count
            Comments</span>", array("@author_name" =>             // line 102
(isset($context["author_name"]) ? $context["author_name"] : null), "@comment_count" =>             // line 103
(isset($context["comment_count"]) ? $context["comment_count"] : null), ));
            // line 106
            echo "          ";
            if ($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_tags", array()))) {
                // line 107
                echo "            <div class=\"tags\">
              ";
                // line 108
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_tags", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 111
            echo "          ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["metadata"]) ? $context["metadata"] : null), "html", null, true));
            echo "
        </div>
      </footer>
    ";
        }
        // line 115
        echo "
    ";
        // line 116
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "body", array()), "html", null, true));
        echo "

  </div>

  <div";
        // line 120
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content_attributes"]) ? $context["content_attributes"] : null), "html", null, true));
        echo ">
    ";
        // line 121
        if ((isset($context["page"]) ? $context["page"] : null)) {
            // line 122
            echo "      ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without((isset($context["content"]) ? $context["content"] : null), "field_image", "body", "comment", "field_tags"), "html", null, true));
            echo "
      ";
            // line 123
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_tags", array()), "html", null, true));
            echo "
      ";
            // line 124
            if (($this->env->getExtension('drupal_core')->renderVar((isset($context["about_author"]) ? $context["about_author"] : null)) && (isset($context["display_submitted"]) ? $context["display_submitted"] : null))) {
                // line 125
                echo "        <div class=\"about-author\">
          <div class=\"author-name\">";
                // line 126
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["author_name"]) ? $context["author_name"] : null), "html", null, true));
                echo "</div>
          ";
                // line 127
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["about_author"]) ? $context["about_author"] : null), "html", null, true));
                echo "
        </div>
      ";
            }
            // line 130
            echo "
    ";
        } else {
            // line 132
            echo "      ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without((isset($context["content"]) ? $context["content"] : null), "field_image", "field_tags", "body", "comment"), "html", null, true));
            echo "
    ";
        }
        // line 134
        echo "    ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "comment", array()), "html", null, true));
        echo "
  </div>

</article>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/aklas/templates/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 134,  203 => 132,  199 => 130,  193 => 127,  189 => 126,  186 => 125,  184 => 124,  180 => 123,  175 => 122,  173 => 121,  169 => 120,  162 => 116,  159 => 115,  151 => 111,  145 => 108,  142 => 107,  139 => 106,  137 => 103,  136 => 102,  132 => 101,  128 => 100,  125 => 99,  123 => 98,  117 => 95,  114 => 94,  106 => 92,  104 => 91,  101 => 90,  93 => 87,  88 => 86,  86 => 85,  81 => 84,  74 => 80,  70 => 79,  66 => 77,  64 => 76,  61 => 75,  55 => 72,  52 => 71,  50 => 70,  46 => 69,  43 => 68,);
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
  {% if content.field_image|render %}
    <div class=\"featured-image\">
      {{ content.field_image }}
    </div>
  {% endif %}
  <div class=\"article-inner\">
    {% if display_submitted %}
    <div class=\"node-created\">
      <div class=\"node-created-inner\">
        <span class=\"date\">{{ created_date }}</span>
        <span class=\"month\">{{ created_month }}</span>
      </div>
    </div>
    {% endif %}
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
        <div{{ author_attributes.addClass('node-submitted') }}>
          {% trans %}<span
            class=\"node-submitted-item author-name\">Written by: {{ author_name }}</span> <span
            class=\"node-submitted-item comment-count\">{{ comment_count }}
            Comments</span>
          {% endtrans %}
          {% if content.field_tags|render %}
            <div class=\"tags\">
              {{ content.field_tags }}
            </div>
          {% endif %}
          {{ metadata }}
        </div>
      </footer>
    {% endif %}

    {{ content.body }}

  </div>

  <div{{ content_attributes }}>
    {% if page %}
      {{ content|without('field_image', 'body', 'comment', 'field_tags') }}
      {{ content.field_tags }}
      {% if about_author|render and display_submitted %}
        <div class=\"about-author\">
          <div class=\"author-name\">{{ author_name }}</div>
          {{ about_author }}
        </div>
      {% endif %}

    {% else %}
      {{ content|without('field_image', 'field_tags', 'body', 'comment') }}
    {% endif %}
    {{ content.comment }}
  </div>

</article>
";
    }
}
