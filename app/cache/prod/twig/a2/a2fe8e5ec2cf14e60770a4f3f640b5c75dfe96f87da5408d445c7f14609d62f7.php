<?php

/* article/widget/list-item.html.twig */
class __TwigTemplate_f25a03036fbef30a49e4b1e11ff3431ff7b791b7554a393ae457b43167ac262d extends Twig_Template
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
        echo "<article class=\"article-item\">
  <div class=\"article-metas clearfix\">
    <div class=\"pull-left\">
      <div class=\"date\">
        <div class=\"day\">";
        // line 5
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["article"] ?? null), "publishedTime", array()), "d"), "html", null, true);
        echo "</div>
        <div class=\"month\">";
        // line 6
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["article"] ?? null), "publishedTime", array()), "m"), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("月"), "html", null, true);
        echo "</div>
      </div>
    </div>
    <div class=\"metas-body\">
      <p>
        <a class=\"link-dark\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_category", array("categoryCode" => $this->getAttribute(($context["category"] ?? null), "code", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? null), "name", array()), "html", null, true);
        echo "</a>
      </p>
      <h2 class=\"title\">
        <a class=\"link-dark\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_detail", array("id" => $this->getAttribute(($context["article"] ?? null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? null), "title", array()), "html", null, true);
        echo "</a>
      </h2>
    </div>
  </div>
  ";
        // line 18
        if ($this->getAttribute(($context["article"] ?? null), "thumb", array())) {
            // line 19
            echo "  <div class=\"media\">
    <div class=\"media-left\">
      <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_detail", array("id" => $this->getAttribute(($context["article"] ?? null), "id", array()))), "html", null, true);
            echo "\">
        <img class=\"thumb-img\"  src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute(($context["article"] ?? null), "thumb", array()), ""), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? null), "title", array()), "html", null, true);
            echo "\"></a>
    </div>
    <div class=\"media-body\">";
            // line 24
            echo $this->env->getExtension('AppBundle\Twig\WebExtension')->plainTextFilter($this->getAttribute(($context["article"] ?? null), "body", array()), 150);
            echo "</div>
  </div>
  ";
        } else {
            // line 27
            echo "    <div class=\"content\">
      ";
            // line 28
            echo $this->env->getExtension('AppBundle\Twig\WebExtension')->plainTextFilter($this->getAttribute(($context["article"] ?? null), "body", array()), 150);
            echo "
    </div>
  ";
        }
        // line 31
        echo "</article>";
    }

    public function getTemplateName()
    {
        return "article/widget/list-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 31,  81 => 28,  78 => 27,  72 => 24,  65 => 22,  61 => 21,  57 => 19,  55 => 18,  46 => 14,  38 => 11,  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "article/widget/list-item.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/article/widget/list-item.html.twig");
    }
}
