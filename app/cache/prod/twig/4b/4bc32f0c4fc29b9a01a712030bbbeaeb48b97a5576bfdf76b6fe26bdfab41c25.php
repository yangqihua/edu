<?php

/* activity/text/finish-condition.html.twig */
class __TwigTemplate_4988fe7e20952aded6e540380f91a3e7a2ea5c99e44a81acbb8cbe88916bcd9d extends Twig_Template
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
        echo "<p class=\"gray-darker mbs\">满足以下条件:</p>至少观看";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "finishDetail", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "finishDetail", array()), 0)) : (0)), "html", null, true);
        echo "分钟。
";
    }

    public function getTemplateName()
    {
        return "activity/text/finish-condition.html.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("", "activity/text/finish-condition.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/activity/text/finish-condition.html.twig");
    }
}
