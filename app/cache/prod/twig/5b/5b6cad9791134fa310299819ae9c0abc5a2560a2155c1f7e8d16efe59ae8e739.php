<?php

/* activity/text/preview.html.twig */
class __TwigTemplate_a9c846384a584208f485ed41b18eb11788f42fdd08b5a5167ca5fcb30b0b536d extends Twig_Template
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
        // line 1
        $this->loadTemplate("activity/text/show.html.twig", "activity/text/preview.html.twig", 1)->display($context);
    }

    public function getTemplateName()
    {
        return "activity/text/preview.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "activity/text/preview.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/activity/text/preview.html.twig");
    }
}
