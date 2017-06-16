<?php

/* common/consult-supplier.html.twig */
class __TwigTemplate_9179047a0978c2f2c4495cc1f13ac322a4fa8e56f6dc7eb7c38738f1cda6f003 extends Twig_Template
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
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("consult.enabled", 0)) {
            // line 2
            echo "  ";
            $context["consult"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("consult");
            // line 3
            echo "  ";
            if ( !twig_test_empty((($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "supplier", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "supplier", array()))) : ("")))) {
                // line 4
                echo "    ";
                echo $this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "supplier", array());
                echo "
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "common/consult-supplier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "common/consult-supplier.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/common/consult-supplier.html.twig");
    }
}
