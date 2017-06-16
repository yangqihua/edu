<?php

/* es-bar/left-list/my-learn-result.html.twig */
class __TwigTemplate_e902c79ffe9b96c04f96c9166216361e150a9ab8013c97f2d436f5167ad86cb0 extends Twig_Template
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
        echo "<li data-id=\"#bar-homework\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("我的考试/作业"), "html", null, true);
        echo "\" data-trigger=\"hover\" data-container=\".es-bar\">
  <a href=\"javascript:;\" data-url=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esbar_my_practice", array("status" => "finished"));
        echo "\">
    <i class=\"es-icon es-icon-edit\"></i>
  </a>
</li>";
    }

    public function getTemplateName()
    {
        return "es-bar/left-list/my-learn-result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "es-bar/left-list/my-learn-result.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/es-bar/left-list/my-learn-result.html.twig");
    }
}
