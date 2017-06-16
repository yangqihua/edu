<?php

/* es-bar/left-list/qq-consult.html.twig */
class __TwigTemplate_f0b8e0b6ea14863f70f6559521c8618c628f36e8cd10c94f708c254a28b28f23 extends Twig_Template
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
        $__internal_45df0018a0db952a86d7dbf6135ceac5a69af0b0daa4316c3a962e4a36c4c0ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45df0018a0db952a86d7dbf6135ceac5a69af0b0daa4316c3a962e4a36c4c0ca->enter($__internal_45df0018a0db952a86d7dbf6135ceac5a69af0b0daa4316c3a962e4a36c4c0ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "es-bar/left-list/qq-consult.html.twig"));

        // line 1
        if ((($context["consultQqs"] ?? $this->getContext($context, "consultQqs")) || ($context["consultQqGroups"] ?? $this->getContext($context, "consultQqGroups")))) {
            // line 2
            echo "  <li class=\"popover-btn bar-qq-btn\" data-container=\".bar-qq-btn\" data-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("QQ客服及QQ群"), "html", null, true);
            echo "\" data-content-element=\"#bar-qq-content\">
    <a><i class=\"es-icon es-icon-qq\"></i></a>
  </li>
";
        }
        
        $__internal_45df0018a0db952a86d7dbf6135ceac5a69af0b0daa4316c3a962e4a36c4c0ca->leave($__internal_45df0018a0db952a86d7dbf6135ceac5a69af0b0daa4316c3a962e4a36c4c0ca_prof);

    }

    public function getTemplateName()
    {
        return "es-bar/left-list/qq-consult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if consultQqs or consultQqGroups %}
  <li class=\"popover-btn bar-qq-btn\" data-container=\".bar-qq-btn\" data-title=\"{{'QQ客服及QQ群'|trans}}\" data-content-element=\"#bar-qq-content\">
    <a><i class=\"es-icon es-icon-qq\"></i></a>
  </li>
{% endif %}", "es-bar/left-list/qq-consult.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/es-bar/left-list/qq-consult.html.twig");
    }
}
