<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_94fcf76c8e004a3fb9a49c8b43a6df310c37302004cd648551a985a6f4244b66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4fc163a8921a4c9b0423af506579e19d72c5fa138e3f9d301303aa1bb72bff7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4fc163a8921a4c9b0423af506579e19d72c5fa138e3f9d301303aa1bb72bff7->enter($__internal_c4fc163a8921a4c9b0423af506579e19d72c5fa138e3f9d301303aa1bb72bff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4fc163a8921a4c9b0423af506579e19d72c5fa138e3f9d301303aa1bb72bff7->leave($__internal_c4fc163a8921a4c9b0423af506579e19d72c5fa138e3f9d301303aa1bb72bff7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f5ec4112c297ecb140294423d433fe531e10a01634f96813fb2d1e195da47e8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5ec4112c297ecb140294423d433fe531e10a01634f96813fb2d1e195da47e8f->enter($__internal_f5ec4112c297ecb140294423d433fe531e10a01634f96813fb2d1e195da47e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f5ec4112c297ecb140294423d433fe531e10a01634f96813fb2d1e195da47e8f->leave($__internal_f5ec4112c297ecb140294423d433fe531e10a01634f96813fb2d1e195da47e8f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_aabae328df6d3261284b419689166f2fd855a97f341c82477dc621db779aa40f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aabae328df6d3261284b419689166f2fd855a97f341c82477dc621db779aa40f->enter($__internal_aabae328df6d3261284b419689166f2fd855a97f341c82477dc621db779aa40f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_aabae328df6d3261284b419689166f2fd855a97f341c82477dc621db779aa40f->leave($__internal_aabae328df6d3261284b419689166f2fd855a97f341c82477dc621db779aa40f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_43e4110dcb889f00d595429a1e32dcbf3cfc784d8c62580b25a9f67a0986b402 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43e4110dcb889f00d595429a1e32dcbf3cfc784d8c62580b25a9f67a0986b402->enter($__internal_43e4110dcb889f00d595429a1e32dcbf3cfc784d8c62580b25a9f67a0986b402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_43e4110dcb889f00d595429a1e32dcbf3cfc784d8c62580b25a9f67a0986b402->leave($__internal_43e4110dcb889f00d595429a1e32dcbf3cfc784d8c62580b25a9f67a0986b402_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/yangqihua/Sites/edusoho/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
