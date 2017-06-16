<?php

/* open-course-manage/base-info.html.twig */
class __TwigTemplate_dc3646dfa009bfde3f9b467503286c608f7ce0096e6ea64e95127b7542b01832 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("open-course-manage/layout.html.twig", "open-course-manage/base-info.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "open-course-manage/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["side_nav"] = "base";
        // line 4
        $context["script_arguments"] = array("categoryUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_all"), "tagMatchUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_match"));
        // line 8
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/es-ckeditor/ckeditor.js", 1 => "libs/bootstrap-datetimepicker.js", 2 => "libs/jquery-validation.js", 3 => "app/js/open-course-manage/base/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("基本信息"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 10
    public function block_main($context, array $blocks = array())
    {
        // line 11
        echo "  <div class=\"panel panel-default panel-col\">
    <div class=\"panel-heading\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("基本信息"), "html", null, true);
        echo "</div>
    <div class=\"panel-body\">
      ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "
      <form class=\"form-horizontal\" id=\"course-form\" method=\"post\">

        <div class=\"form-group\">
          <label class=\"col-md-2 control-label\" for=\"course_title\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("标题"), "html", null, true);
        echo "</label>
          <div class=\"col-md-8 controls\">
            <input type=\"text\" id=\"course_title\" name=\"title\" class=\"form-control\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "")) : ("")), "html", null, true);
        echo "\">
            <div class=\"help-block\" style=\"display:none;\"></div>
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"col-md-2 control-label\" for=\"course_subtitle\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("副标题"), "html", null, true);
        echo "</label>
          <div class=\"col-md-8 controls\">
            <textarea id=\"course_subtitle\" name=\"subtitle\" class=\"form-control\">";
        // line 28
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "subtitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "subtitle", array()), "")) : ("")), "html", null, true);
        echo "</textarea>
            <div class=\"help-block\" style=\"display:none;\"></div>
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"col-md-2 control-label\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("标签"), "html", null, true);
        echo "</label>
          <div class=\"col-md-8 controls\">
            <input type=\"text\" id=\"course_tags\" name=\"tags\" class=\"width-full select2-offscreen\" tabindex=\"-1\"
              value=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_join_filter((isset($context["tags"]) ? $context["tags"] : null), ","), "html", null, true);
        echo "\" data-explain=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("将会应用于按标签搜索课程、相关课程的提取等"), "html", null, true);
        echo "\">
            <div class=\"help-block\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("将会应用于按标签搜索课程、相关课程的提取等"), "html", null, true);
        echo "</div>
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"col-md-2 control-label\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("分类"), "html", null, true);
        echo "</label>
          <div class=\"col-md-8 controls\">
            <select id=\"course_categoryId\" name=\"categoryId\" class=\"form-control width-input width-input-large\">
              ";
        // line 46
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions($this->env->getExtension('AppBundle\Twig\WebExtension')->getCategoryChoices("course"), $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "categoryId", array()), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("分类")));
        echo "
            </select>
            <div class=\"help-block\" style=\"display:none;\"></div>
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\"><label>";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程简介"), "html", null, true);
        echo "</label></div>
          <div class=\"col-md-8 controls\">
            <textarea name=\"about\" rows=\"10\" id=\"course-about-field\" class=\"form-control\"
              data-image-upload-url=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editor_upload", array("token" => $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("course"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "about", array()), "html", null, true);
        echo "</textarea>
            <div class=\"help-block\">";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("为正常使用IFrame，请在【管理后台】-【系统】-【安全设置】-【IFrame白名单】中进行设置"), "html", null, true);
        echo "</div>
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-offset-2 col-md-8 controls\">
            <button class=\"btn btn-fat btn-primary\" id=\"course-create-btn\" type=\"submit\">";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("保存"), "html", null, true);
        echo "</button>
          </div>
        </div>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">

      </form>
    </div>
  </div>

";
    }

    public function getTemplateName()
    {
        return "open-course-manage/base-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 67,  147 => 63,  138 => 57,  132 => 56,  126 => 53,  116 => 46,  110 => 43,  102 => 38,  96 => 37,  90 => 34,  81 => 28,  76 => 26,  67 => 20,  62 => 18,  55 => 14,  50 => 12,  47 => 11,  44 => 10,  36 => 2,  32 => 1,  30 => 8,  28 => 4,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "open-course-manage/base-info.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/open-course-manage/base-info.html.twig");
    }
}
