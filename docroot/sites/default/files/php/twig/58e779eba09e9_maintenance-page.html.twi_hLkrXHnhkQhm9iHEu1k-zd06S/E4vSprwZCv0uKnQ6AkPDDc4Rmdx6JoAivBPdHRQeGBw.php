<?php

/* core/modules/system/templates/maintenance-page.html.twig */
class __TwigTemplate_3d720a7d8753056c26eaf58f588cf0cde8c781021128642b18a6aec8af5bb947 extends Twig_Template
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
        $tags = array("if" => 15);
        $filters = array("t" => 16);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t'),
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

        // line 14
        echo "<header role=\"banner\">
  ";
        // line 15
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            // line 16
            echo "    <a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true));
            echo "\" title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" rel=\"home\">
      <img src=\"";
            // line 17
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["logo"]) ? $context["logo"] : null), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\"/>
    </a>
  ";
        }
        // line 20
        echo "
  ";
        // line 21
        if (((isset($context["site_name"]) ? $context["site_name"] : null) || (isset($context["site_slogan"]) ? $context["site_slogan"] : null))) {
            // line 22
            echo "    ";
            if ((isset($context["site_name"]) ? $context["site_name"] : null)) {
                // line 23
                echo "      <h1>
        <a href=\"";
                // line 24
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
                echo "\" rel=\"home\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
                echo "</a>
      </h1>
    ";
            }
            // line 27
            echo "
    ";
            // line 28
            if ((isset($context["site_slogan"]) ? $context["site_slogan"] : null)) {
                // line 29
                echo "      <div>";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_slogan"]) ? $context["site_slogan"] : null), "html", null, true));
                echo "</div>
    ";
            }
            // line 31
            echo "  ";
        }
        // line 32
        echo "</header>

<main role=\"main\">
  ";
        // line 35
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 36
            echo "    <h1>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</h1>
  ";
        }
        // line 38
        echo "
  ";
        // line 39
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "

  ";
        // line 41
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
</main>

";
        // line 44
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 45
            echo "  <aside role=\"complementary\">
    ";
            // line 46
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
  </aside>
";
        }
        // line 49
        echo "
";
        // line 50
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 51
            echo "  <aside role=\"complementary\">
    ";
            // line 52
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
  </aside>
";
        }
        // line 55
        echo "
";
        // line 56
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 57
            echo "  <footer role=\"contentinfo\">
    ";
            // line 58
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
  </footer>
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/maintenance-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 58,  155 => 57,  153 => 56,  150 => 55,  144 => 52,  141 => 51,  139 => 50,  136 => 49,  130 => 46,  127 => 45,  125 => 44,  119 => 41,  114 => 39,  111 => 38,  105 => 36,  103 => 35,  98 => 32,  95 => 31,  89 => 29,  87 => 28,  84 => 27,  74 => 24,  71 => 23,  68 => 22,  66 => 21,  63 => 20,  55 => 17,  48 => 16,  46 => 15,  43 => 14,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation to display a single Drupal page while offline.
 *
 * All available variables are mirrored in page.html.twig.
 * Some may be blank but they are provided for consistency.
 *
 * @see template_preprocess_maintenance_page()
 *
 * @ingroup themeable
 */
#}
<header role=\"banner\">
  {% if logo %}
    <a href=\"{{ front_page }}\" title=\"{{ 'Home'|t }}\" rel=\"home\">
      <img src=\"{{ logo }}\" alt=\"{{ 'Home'|t }}\"/>
    </a>
  {% endif %}

  {% if site_name or site_slogan %}
    {% if site_name %}
      <h1>
        <a href=\"{{ front_page }}\" title=\"{{ 'Home'|t }}\" rel=\"home\">{{ site_name }}</a>
      </h1>
    {% endif %}

    {% if site_slogan %}
      <div>{{ site_slogan }}</div>
    {% endif %}
  {% endif %}
</header>

<main role=\"main\">
  {% if title %}
    <h1>{{ title }}</h1>
  {% endif %}

  {{ page.highlighted }}

  {{ page.content }}
</main>

{% if page.sidebar_first %}
  <aside role=\"complementary\">
    {{ page.sidebar_first }}
  </aside>
{% endif %}

{% if page.sidebar_second %}
  <aside role=\"complementary\">
    {{ page.sidebar_second }}
  </aside>
{% endif %}

{% if page.footer %}
  <footer role=\"contentinfo\">
    {{ page.footer }}
  </footer>
{% endif %}
";
    }
}
