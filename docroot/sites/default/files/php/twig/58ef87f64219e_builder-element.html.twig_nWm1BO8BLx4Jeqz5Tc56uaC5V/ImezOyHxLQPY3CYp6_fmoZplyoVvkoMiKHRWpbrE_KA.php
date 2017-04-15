<?php

/* modules/contrib/tabvn/builder/templates/builder-element.html.twig */
class __TwigTemplate_a3893d4a10519b6746a3b891755f9097ea2955fb7b15b6a81ff42f500eb4720e extends Twig_Template
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
        $tags = array("if" => 3);
        $filters = array("t" => 5);
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

        // line 1
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
    <div class=\"";
        // line 2
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["inner_class_css"]) ? $context["inner_class_css"] : null), "html", null, true));
        echo "\">
        ";
        // line 3
        if ((isset($context["links"]) ? $context["links"] : null)) {
            // line 4
            echo "            <div class=\"builder-action-links-wrapper\">
                <div class=\"builder-element-tag\"><span title=\"";
            // line 5
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Drag to re-order")));
            echo "\" class=\"icon-move\"></span>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["delta"]) ? $context["delta"] : null), "html", null, true));
            echo "</div>
                ";
            // line 6
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["links"]) ? $context["links"] : null), "html", null, true));
            echo "
            </div>
        ";
        }
        // line 9
        echo "        <div class=\"builder-element-inside\">
            <div class=\"";
        // line 10
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children_wrapper_class"]) ? $context["children_wrapper_class"] : null), "html", null, true));
        echo "\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        echo "</div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/tabvn/builder/templates/builder-element.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 10,  69 => 9,  63 => 6,  57 => 5,  54 => 4,  52 => 3,  48 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "<div{{ attributes.addClass(classes) }}>
    <div class=\"{{ inner_class_css }}\">
        {% if(links) %}
            <div class=\"builder-action-links-wrapper\">
                <div class=\"builder-element-tag\"><span title=\"{{ 'Drag to re-order'|t }}\" class=\"icon-move\"></span>{{ delta }}</div>
                {{ links }}
            </div>
        {% endif %}
        <div class=\"builder-element-inside\">
            <div class=\"{{ children_wrapper_class }}\">{{ children }}</div>
        </div>
    </div>
</div>
";
    }
}
