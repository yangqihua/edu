<?php

/* es-bar/layout.html.twig */
class __TwigTemplate_7fa65feb4bc89de7ff5cced266a4cee948f0ac63bcf12a234753685490d2e5b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'esBarTitle' => array($this, 'block_esBarTitle'),
            'esBarBody' => array($this, 'block_esBarBody'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aa6d399ce0e93ee46b4b0190188cf8c03a3ff8f1e91ccacc96bf8e21e029607b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa6d399ce0e93ee46b4b0190188cf8c03a3ff8f1e91ccacc96bf8e21e029607b->enter($__internal_aa6d399ce0e93ee46b4b0190188cf8c03a3ff8f1e91ccacc96bf8e21e029607b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "es-bar/layout.html.twig"));

        // line 1
        echo "<div class=\"bar-main-header\">
  <a href=\"javascript:;\" class=\"js-bar-shrink link-dark\"><i class=\"es-icon es-icon-arrowforward\"></i></a>
  ";
        // line 3
        $this->displayBlock('esBarTitle', $context, $blocks);
        // line 6
        echo "</div>

<div class=\"bar-main-body\">
  ";
        // line 9
        $this->displayBlock('esBarBody', $context, $blocks);
        // line 12
        echo "</div>
";
        
        $__internal_aa6d399ce0e93ee46b4b0190188cf8c03a3ff8f1e91ccacc96bf8e21e029607b->leave($__internal_aa6d399ce0e93ee46b4b0190188cf8c03a3ff8f1e91ccacc96bf8e21e029607b_prof);

    }

    // line 3
    public function block_esBarTitle($context, array $blocks = array())
    {
        $__internal_c5267c2dfd2489210349a3eec744e62cc561652f98224b8b86cc3352d6988975 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5267c2dfd2489210349a3eec744e62cc561652f98224b8b86cc3352d6988975->enter($__internal_c5267c2dfd2489210349a3eec744e62cc561652f98224b8b86cc3352d6988975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esBarTitle"));

        // line 4
        echo "
  ";
        
        $__internal_c5267c2dfd2489210349a3eec744e62cc561652f98224b8b86cc3352d6988975->leave($__internal_c5267c2dfd2489210349a3eec744e62cc561652f98224b8b86cc3352d6988975_prof);

    }

    // line 9
    public function block_esBarBody($context, array $blocks = array())
    {
        $__internal_3def54e7bb4d1eee3bcc341b2f7ae9323d07d39c40862f6ce9f5bcb81e974341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3def54e7bb4d1eee3bcc341b2f7ae9323d07d39c40862f6ce9f5bcb81e974341->enter($__internal_3def54e7bb4d1eee3bcc341b2f7ae9323d07d39c40862f6ce9f5bcb81e974341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esBarBody"));

        // line 10
        echo "
  ";
        
        $__internal_3def54e7bb4d1eee3bcc341b2f7ae9323d07d39c40862f6ce9f5bcb81e974341->leave($__internal_3def54e7bb4d1eee3bcc341b2f7ae9323d07d39c40862f6ce9f5bcb81e974341_prof);

    }

    public function getTemplateName()
    {
        return "es-bar/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  65 => 10,  59 => 9,  51 => 4,  45 => 3,  37 => 12,  35 => 9,  30 => 6,  28 => 3,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"bar-main-header\">
  <a href=\"javascript:;\" class=\"js-bar-shrink link-dark\"><i class=\"es-icon es-icon-arrowforward\"></i></a>
  {% block esBarTitle %}

  {% endblock %}
</div>

<div class=\"bar-main-body\">
  {% block esBarBody %}

  {% endblock %}
</div>
", "es-bar/layout.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/es-bar/layout.html.twig");
    }
}
