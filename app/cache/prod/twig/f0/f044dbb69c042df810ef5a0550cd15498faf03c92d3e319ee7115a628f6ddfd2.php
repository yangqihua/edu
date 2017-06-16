<?php

/* article/list.html.twig */
class __TwigTemplate_38f9e2ae9d5587f4bdbab2608ded1ad6b7d59403192c3b83e519ab9ae765d818 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "article/list.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 10
        $context["bodyClass"] = "artcile-cat-page";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        if ($this->getAttribute(($context["category"] ?? null), "seoTitle", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? null), "seoTitle", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? null), "name", array()), "html", null, true);
        }
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_keywords($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? null), "seoKeyword", array()), "html", null, true);
    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? null), "seoDesc", array()), "html", null, true);
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "
  ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Article:categoryNav", array("categoryCode" => ($context["categoryCode"] ?? null))));
        echo "

  <div class=\"article-list-body row\">
    <div class=\"col-md-8 article-list-main\">
      ";
        // line 18
        $this->loadTemplate("article/part/list-main.html.twig", "article/list.html.twig", 18)->display($context);
        // line 19
        echo "    </div>
    
    <aside class=\"col-md-4 article-sidebar\">
      ";
        // line 22
        $this->loadTemplate("article/widget/sidebar.html.twig", "article/list.html.twig", 22)->display($context);
        // line 23
        echo "    </aside>
  </div>

";
    }

    public function getTemplateName()
    {
        return "article/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 23,  78 => 22,  73 => 19,  71 => 18,  64 => 14,  61 => 13,  58 => 12,  52 => 7,  46 => 5,  34 => 3,  30 => 1,  28 => 10,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "article/list.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/article/list.html.twig");
    }
}
