<?php

/* open-course-manage/open-course-pick-modal.html.twig */
class __TwigTemplate_d6b1f39c856ee785f16bc24c64edbf5488a780ad935ffc0eb0efb6ca278f2e5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bootstrap-modal-layout.html.twig", "open-course-manage/open-course-pick-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["modal_class"] = "modal-lg";
        // line 4
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/open-course-manage/pick/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "选择课程";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
";
        // line 9
        echo "
<form class=\"form-inline form-search\" role=\"search-form\" data-url=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_course_search", array("id" => (isset($context["courseId"]) ? $context["courseId"] : null), "filter" => (isset($context["filter"]) ? $context["filter"] : null))), "html", null, true);
        echo "\">
  <div class=\"form-group \">
    <input type=\"text\" class=\"form-control\" name=\"key\" id=\"enterSearch\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "key"), "method"), "html", null, true);
        echo "\" placeholder=\"按课程标题或关键字\">
  </div>
  <button type=\"button\" class=\"btn btn-primary\"  id=\"search\" >搜索</button>
  <a class=\"btn btn-primary\" id=\"all-courses\" data-url=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_manage_course_pick", array("id" => (isset($context["courseId"]) ? $context["courseId"] : null), "filter" => (isset($context["filter"]) ? $context["filter"] : null))), "html", null, true);
        echo "\">清除搜索</a>
</form>

<div class=\"row mtl\">
  <div class=\"col-md-12\">
    <div class=\"courses-list\">
      ";
        // line 21
        $this->loadTemplate("open-course-manage/course-select-list.html.twig", "open-course-manage/open-course-pick-modal.html.twig", 21)->display($context);
        // line 22
        echo "    </div>
  </div>
</div>

";
    }

    // line 28
    public function block_footer($context, array $blocks = array())
    {
        // line 29
        echo "  <button id=\"sure\" class=\"btn btn-primary pull-right\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_recommended_course_select", array("id" => (isset($context["courseId"]) ? $context["courseId"] : null))), "html", null, true);
        echo "\">添加</button>
  <button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">取消</button>
";
    }

    public function getTemplateName()
    {
        return "open-course-manage/open-course-pick-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 29,  80 => 28,  72 => 22,  70 => 21,  61 => 15,  55 => 12,  50 => 10,  47 => 9,  44 => 7,  41 => 6,  35 => 2,  31 => 1,  29 => 4,  27 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "open-course-manage/open-course-pick-modal.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/open-course-manage/open-course-pick-modal.html.twig");
    }
}
