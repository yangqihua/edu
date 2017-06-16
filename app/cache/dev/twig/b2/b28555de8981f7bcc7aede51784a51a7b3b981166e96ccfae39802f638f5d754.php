<?php

/* es-bar/left-list/wechat-consult.html.twig */
class __TwigTemplate_16340a6620d74e99e6ed44f3b02393e9beca4bbc0b4876f0d922f2f56e60b0c9 extends Twig_Template
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
        $__internal_c41a330c6996531bd9df03b5fbc18c5ddcd7dc7d8659575245997702b090dc55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c41a330c6996531bd9df03b5fbc18c5ddcd7dc7d8659575245997702b090dc55->enter($__internal_c41a330c6996531bd9df03b5fbc18c5ddcd7dc7d8659575245997702b090dc55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "es-bar/left-list/wechat-consult.html.twig"));

        // line 1
        if ( !twig_test_empty($this->getAttribute(($context["consult"] ?? $this->getContext($context, "consult")), "webchatURI", array()))) {
            // line 2
            echo "  <li class=\"popover-btn bar-weixin-btn\" data-container=\".bar-weixin-btn\" data-content-element=\"#bar-weixin-content\">
    <a><i class=\"es-icon es-icon-weixin\"></i></a>
  </li>
";
        }
        
        $__internal_c41a330c6996531bd9df03b5fbc18c5ddcd7dc7d8659575245997702b090dc55->leave($__internal_c41a330c6996531bd9df03b5fbc18c5ddcd7dc7d8659575245997702b090dc55_prof);

    }

    public function getTemplateName()
    {
        return "es-bar/left-list/wechat-consult.html.twig";
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
        return new Twig_Source("{% if consult.webchatURI is not empty %}
  <li class=\"popover-btn bar-weixin-btn\" data-container=\".bar-weixin-btn\" data-content-element=\"#bar-weixin-content\">
    <a><i class=\"es-icon es-icon-weixin\"></i></a>
  </li>
{% endif %}", "es-bar/left-list/wechat-consult.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/es-bar/left-list/wechat-consult.html.twig");
    }
}
