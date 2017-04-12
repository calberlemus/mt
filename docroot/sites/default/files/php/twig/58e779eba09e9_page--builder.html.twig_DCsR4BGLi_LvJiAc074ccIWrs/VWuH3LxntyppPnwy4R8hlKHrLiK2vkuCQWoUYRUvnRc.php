<?php

/* themes/custom/mt/templates/system/page--builder.html.twig */
class __TwigTemplate_b18cf5d9037409061722fab99f3219e2fc32df7d675b374113256e25e2de3d33 extends Twig_Template
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
        $tags = array("if" => 66);
        $filters = array("t" => 68, "without" => 121);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t', 'without'),
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

        // line 48
        echo "<div class=\"layout-container\">

  <header id=\"header\">
    <div class=\"fluid-container\">
      <div class=\"header-page-title-group\">
        <div id=\"header-container\" class=\"header-container\">

          <div class=\"row\">
            <div class=\"header-top\">
              <div class=\"col-md-2 col-sm-3\">
                ";
        // line 58
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
              </div>
              <div class=\"col-md-8 col-md-push-2 col-sm-6 col-sm-push-3\">
                <div class=\"row\">
                  <div class=\"col-md-9\">
                    <div id=\"main-menu\">";
        // line 63
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true));
        echo "</div>
                    <div class=\"navbar-header\">        
                    ";
        // line 66
        echo "                    ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 67
            echo "                      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
                        <span class=\"sr-only\">";
            // line 68
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Toggle navigation")));
            echo "</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                      </button>
                    ";
        }
        // line 74
        echo "                  </div>
            
                  ";
        // line 77
        echo "                  ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 78
            echo "                    <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
                      ";
            // line 79
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()), "html", null, true));
            echo "
                    </div>
                  ";
        }
        // line 82
        echo "                     
                  <div class=\"col-md-3\">
                    ";
        // line 84
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_icons", array()), "html", null, true));
        echo "
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  ";
        // line 95
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_title", array()) &&  !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slider", array()))) {
            // line 96
            echo "    <div class=\"page-title-wrapper\">
      <div class=\"page-title-inner\">
        <div class=\"fluid-container\">
          ";
            // line 99
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_title", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 104
        echo "
  ";
        // line 105
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slider", array())) {
            // line 106
            echo "    <div id=\"section-slider\">
      <div class=\"section-slider-inner\">
        ";
            // line 108
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slider", array()), "html", null, true));
            echo "
      </div>
    </div>
  ";
        }
        // line 112
        echo "

  <main class=\"main-page-builder\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 116
        echo "    <div class=\"fluid-container\">
      ";
        // line 117
        if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "secondary_menu", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()))) {
            // line 118
            echo "        ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
            echo "
        ";
            // line 119
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
            echo "
      ";
        }
        // line 121
        echo "      ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "aklas_content"), "html", null, true));
        echo "
    </div>

    <div class=\"main-builder-content\">
      ";
        // line 125
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "aklas_content", array()), "html", null, true));
        echo "
    </div>


  </main>
  ";
        // line 130
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom", array())) {
            // line 131
            echo "    <div class=\"content-bottom-wrapper\">
      ";
            // line 132
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom", array()), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 135
        echo "
  ";
        // line 136
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_left", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_right", array()))) {
            // line 137
            echo "    <footer id=\"footer\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"footer-left col-md-7\">
            <div class=\"footer-left-inner\">
              ";
            // line 142
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_left", array()), "html", null, true));
            echo "
            </div>

          </div>
          <div class=\"footer-right col-md-5\">
            <div class=\"footer-right-inner\">
              ";
            // line 148
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_right", array()), "html", null, true));
            echo "
              <a id=\"scroll-to-top\" href=\"#top\"></a>
            </div>

          </div>
        </div>
      </div>

    </footer>
  ";
        }
        // line 158
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/mt/templates/system/page--builder.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 158,  216 => 148,  207 => 142,  200 => 137,  198 => 136,  195 => 135,  189 => 132,  186 => 131,  184 => 130,  176 => 125,  168 => 121,  163 => 119,  158 => 118,  156 => 117,  153 => 116,  148 => 112,  141 => 108,  137 => 106,  135 => 105,  132 => 104,  124 => 99,  119 => 96,  117 => 95,  103 => 84,  99 => 82,  93 => 79,  90 => 78,  87 => 77,  83 => 74,  74 => 68,  71 => 67,  68 => 66,  63 => 63,  55 => 58,  43 => 48,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - messages: Status and error messages. Should be displayed prominently.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 *
 * @ingroup themeable
 */
#}
<div class=\"layout-container\">

  <header id=\"header\">
    <div class=\"fluid-container\">
      <div class=\"header-page-title-group\">
        <div id=\"header-container\" class=\"header-container\">

          <div class=\"row\">
            <div class=\"header-top\">
              <div class=\"col-md-2 col-sm-3\">
                {{ page.header }}
              </div>
              <div class=\"col-md-8 col-md-push-2 col-sm-6 col-sm-push-3\">
                <div class=\"row\">
                  <div class=\"col-md-9\">
                    <div id=\"main-menu\">{{ page.primary_menu }}</div>
                    <div class=\"navbar-header\">        
                    {# .btn-navbar is used as the toggle for collapsed navbar content #}
                    {% if page.navigation_collapsible %}
                      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
                        <span class=\"sr-only\">{{ 'Toggle navigation'|t }}</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                      </button>
                    {% endif %}
                  </div>
            
                  {# Navigation (collapsible) #}
                  {% if page.navigation_collapsible %}
                    <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
                      {{ page.navigation_collapsible }}
                    </div>
                  {% endif %}
                     
                  <div class=\"col-md-3\">
                    {{ page.header_icons }}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  {% if page.page_title and  not page.slider %}
    <div class=\"page-title-wrapper\">
      <div class=\"page-title-inner\">
        <div class=\"fluid-container\">
          {{ page.page_title }}
        </div>
      </div>
    </div>
  {% endif %}

  {% if page.slider %}
    <div id=\"section-slider\">
      <div class=\"section-slider-inner\">
        {{ page.slider }}
      </div>
    </div>
  {% endif %}


  <main class=\"main-page-builder\">
    <a id=\"main-content\" tabindex=\"-1\"></a>{# link is in html.html.twig #}
    <div class=\"fluid-container\">
      {% if(page.secondary_menu or page.highlighted or page.help) %}
        {{ page.highlighted }}
        {{ page.help }}
      {% endif %}
      {{ page.content|without('aklas_content') }}
    </div>

    <div class=\"main-builder-content\">
      {{ page.content.aklas_content }}
    </div>


  </main>
  {% if page.content_bottom %}
    <div class=\"content-bottom-wrapper\">
      {{ page.content_bottom }}
    </div>
  {% endif %}

  {% if page.footer_left or page.footer_right %}
    <footer id=\"footer\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"footer-left col-md-7\">
            <div class=\"footer-left-inner\">
              {{ page.footer_left }}
            </div>

          </div>
          <div class=\"footer-right col-md-5\">
            <div class=\"footer-right-inner\">
              {{ page.footer_right }}
              <a id=\"scroll-to-top\" href=\"#top\"></a>
            </div>

          </div>
        </div>
      </div>

    </footer>
  {% endif %}

</div>{# /.layout-container #}
";
    }
}
