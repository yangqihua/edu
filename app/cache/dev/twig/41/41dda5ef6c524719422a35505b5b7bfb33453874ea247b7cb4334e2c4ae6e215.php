<?php

/* es-bar/left-list/phone-consult.html.twig */
class __TwigTemplate_921e0fb8a715e918b83b7be9e5aa3adfbee0448aec54313fee6e1c887c68efa2 extends Twig_Template
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
        $__internal_e632b2c3295efd1f31cb0f3eac677600a46cb25cddceab2afd9c0c1894ba6bf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e632b2c3295efd1f31cb0f3eac677600a46cb25cddceab2afd9c0c1894ba6bf3->enter($__internal_e632b2c3295efd1f31cb0f3eac677600a46cb25cddceab2afd9c0c1894ba6bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "es-bar/left-list/phone-consult.html.twig"));

        // line 1
        if ((($context["consultPhones"] ?? $this->getContext($context, "consultPhones")) ||  !twig_test_empty($this->getAttribute(($context["consult"] ?? $this->getContext($context, "consult")), "worktime", array())))) {
            // line 2
            echo "  <li class=\"popover-btn bar-phone-btn\" data-container=\".bar-phone-btn\" data-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("电话客服"), "html", null, true);
            echo "\" data-content-element=\"#bar-phone-content\">
    <a><i class=\"es-icon es-icon-phone\"></i></a>
  </li>
";
        }
        
        $__internal_e632b2c3295efd1f31cb0f3eac677600a46cb25cddceab2afd9c0c1894ba6bf3->leave($__internal_e632b2c3295efd1f31cb0f3eac677600a46cb25cddceab2afd9c0c1894ba6bf3_prof);

    }

    public function getTemplateName()
    {
        return "es-bar/left-list/phone-consult.html.twig";
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
        return new Twig_Source("{% if consultPhones or consult.worktime is not empty %}
  <li class=\"popover-btn bar-phone-btn\" data-container=\".bar-phone-btn\" data-title=\"{{'电话客服'|trans}}\" data-content-element=\"#bar-phone-content\">
    <a><i class=\"es-icon es-icon-phone\"></i></a>
  </li>
{% endif %}", "es-bar/left-list/phone-consult.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/es-bar/left-list/phone-consult.html.twig");
    }
}
