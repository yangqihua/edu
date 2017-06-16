<?php

/* admin/app/app-detail.html.twig */
class __TwigTemplate_b74e741d90f454ca622958a6d9a1e43fa7e1f6ad7c41361404bad0834ab2d3b6 extends Twig_Template
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
        echo "<img src=\"http://open.edusoho.com/files/product/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "icon", array()), "html", null, true);
        echo "\" class=\"app-img pull-left mrl mtm\"/>
<div class=\"mtm\">

  <h4>
    <a target=\"_blank\" href=\"http://open.edusoho.com/app/";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "id", array()), "html", null, true);
        echo "\">
      <strong class=\"text-primary\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "name", array()), "html", null, true);
        echo "</strong>
      ";
        // line 7
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "licensed", array())) {
            // line 8
            echo "        <span class=\"label label-success mls\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("商业版"), "html", null, true);
            echo "</span>
      ";
        }
        // line 10
        echo "    </a>
  </h4>

</div>

<div class=\"info mtm mbm clearfix\">
  <div class=\"left-info pull-left\">

    <div class=\"text-muted\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("作者："), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "developerName", array()), "html", null, true);
        echo "</div>
    <div class=\"mts text-muted\">";
        // line 19
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "type", array()) == "theme")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("主题"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("应用"), "html", null, true);
        }
        // line 20
        echo "    </div>
  </div>

  <div class=\"middle-info pull-left short-long-text\">
    <div class=\"short-text text-muted\">";
        // line 24
        echo $this->env->getExtension('AppBundle\Twig\WebExtension')->plainTextFilter($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "description", array()), 80);
        echo " <span
          class=\"trigger\">(";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("展开"), "html", null, true);
        echo ")</span></div>
    <div class=\"long-text text-muted\">";
        // line 26
        echo $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "description", array());
        echo " <span class=\"trigger\">(";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("收起"), "html", null, true);
        echo ")</span></div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "admin/app/app-detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 26,  75 => 25,  71 => 24,  65 => 20,  59 => 19,  53 => 18,  43 => 10,  37 => 8,  35 => 7,  31 => 6,  27 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/app/app-detail.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/admin/app/app-detail.html.twig");
    }
}
