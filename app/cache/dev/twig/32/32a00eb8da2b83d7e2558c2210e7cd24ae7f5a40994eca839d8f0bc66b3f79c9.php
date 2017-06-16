<?php

/* default/middle-banner.html.twig */
class __TwigTemplate_cecd0043302422f152e588d47a2c44c9fc5efb6b69a8eb779bd35aa228f9740a extends Twig_Template
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
        $__internal_033ad2868efbb1eacf842f00800ab587007c77d7a7e028c1e545c2c372903bef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_033ad2868efbb1eacf842f00800ab587007c77d7a7e028c1e545c2c372903bef->enter($__internal_033ad2868efbb1eacf842f00800ab587007c77d7a7e028c1e545c2c372903bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/middle-banner.html.twig"));

        // line 1
        echo "  <!-- 特性 --> 
  ";
        // line 2
        echo $this->env->getExtension('AppBundle\Twig\BlockExtension')->showBlock("jianmo:middle_banner");
        
        $__internal_033ad2868efbb1eacf842f00800ab587007c77d7a7e028c1e545c2c372903bef->leave($__internal_033ad2868efbb1eacf842f00800ab587007c77d7a7e028c1e545c2c372903bef_prof);

    }

    public function getTemplateName()
    {
        return "default/middle-banner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("  <!-- 特性 --> 
  {{ block_show('jianmo:middle_banner') }}", "default/middle-banner.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/default/middle-banner.html.twig");
    }
}
