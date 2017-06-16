<?php

/* @Twig/Exception/error404.html.twig */
class __TwigTemplate_2e4dd5afa1cadddb3d7036d7699f6306e970a26f616a96de0c00afd86537f3f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle:Exception:layout.html.twig", "@Twig/Exception/error404.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle:Exception:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "页面找不到 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "  <div class=\"container\">
    <div class=\"panel panel-default error-panel\">
      <div class=\"panel-heading\">
        <span class=\"error-title\">404</span>该内容不存在或已被删除！
      </div>
      <div class=\"panel-body\">
        <div class=\"well\">
          <p>该内容似乎已经被删除，或者已被网校遗忘。</p>
          <p>请确认您的来源链接是否正确？
            课程、";
        // line 14
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo "是否存在？</p>
          <p><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage", array("ref" => 404));
        echo "\">返回首页 ></a></p>
          <span class=\"error-404-icon hidden-xs\"></span>
        </div>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 15,  50 => 14,  39 => 5,  36 => 4,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Twig/Exception/error404.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/TwigBundle/views/Exception/error404.html.twig");
    }
}
