<?php

/* default/stylesheet-webpack.html.twig */
class __TwigTemplate_59f37835a32ee497a9833092526b617c1e384be863f578594412822c5e0c94d0 extends Twig_Template
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
        $__internal_151f595a6309229e93aba12b7fe9bf1e4ccf6e012c0532279dc16d05a32a4191 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_151f595a6309229e93aba12b7fe9bf1e4ccf6e012c0532279dc16d05a32a4191->enter($__internal_151f595a6309229e93aba12b7fe9bf1e4ccf6e012c0532279dc16d05a32a4191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/stylesheet-webpack.html.twig"));

        // line 1
        if (((array_key_exists("isEditColor", $context)) ? (_twig_default_filter(($context["isEditColor"] ?? $this->getContext($context, "isEditColor")), 0)) : (0))) {
            // line 2
            echo "  ";
            $context["maincolor"] = (($this->getAttribute($this->getAttribute(($context["config"] ?? null), "config", array(), "any", false, true), "maincolor", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["config"] ?? null), "config", array(), "any", false, true), "maincolor", array()), "default")) : ("default"));
            // line 3
            echo "  ";
            $context["navigationcolor"] = (($this->getAttribute($this->getAttribute(($context["config"] ?? null), "config", array(), "any", false, true), "navigationcolor", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["config"] ?? null), "config", array(), "any", false, true), "navigationcolor", array()), "default")) : ("default"));
        } else {
            // line 5
            echo "  ";
            $context["maincolor"] = (($this->getAttribute($this->getAttribute(($context["config"] ?? null), "confirmConfig", array(), "any", false, true), "maincolor", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["config"] ?? null), "confirmConfig", array(), "any", false, true), "maincolor", array()), "default")) : ("default"));
            // line 6
            echo "  ";
            $context["navigationcolor"] = (($this->getAttribute($this->getAttribute(($context["config"] ?? null), "confirmConfig", array(), "any", false, true), "navigationcolor", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["config"] ?? null), "confirmConfig", array(), "any", false, true), "navigationcolor", array()), "default")) : ("default"));
        }
        // line 8
        echo "
<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/libs/vendor.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/libs/app-bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />";
        
        $__internal_151f595a6309229e93aba12b7fe9bf1e4ccf6e012c0532279dc16d05a32a4191->leave($__internal_151f595a6309229e93aba12b7fe9bf1e4ccf6e012c0532279dc16d05a32a4191_prof);

    }

    public function getTemplateName()
    {
        return "default/stylesheet-webpack.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 11,  45 => 10,  41 => 9,  38 => 8,  34 => 6,  31 => 5,  27 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if isEditColor|default(0) %}
  {% set maincolor = config.config.maincolor|default('default') %}
  {% set navigationcolor = config.config.navigationcolor|default('default') %}
{% else %}
  {% set maincolor = config.confirmConfig.maincolor|default('default') %}
  {% set navigationcolor = config.confirmConfig.navigationcolor|default('default') %}
{% endif %}

<link href=\"{{ asset('static-dist/libs/vendor.css') }}\" rel=\"stylesheet\" />
<link href=\"{{ asset('static-dist/libs/app-bootstrap.css') }}\" rel=\"stylesheet\" />
<link href=\"{{ asset('static-dist/app/css/main.css') }}\" rel=\"stylesheet\" />", "default/stylesheet-webpack.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/default/stylesheet-webpack.html.twig");
    }
}
