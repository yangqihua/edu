<?php

/* open-course-manage/students.html.twig */
class __TwigTemplate_09b20a66ef3612e4f84502bdd0f9c3c1517f6a6c78d9e55fa004a8c44f6b485f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("open-course-manage/layout.html.twig", "open-course-manage/students.html.twig", 1);
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
        $context["side_nav"] = "students";
        // line 4
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/classroom-manage/students-manage/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.user_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员")), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员"), "html", null, true);
        }
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("管理"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "
  <div class=\"panel panel-default panel-col\">
    <div class=\"panel-heading\">
      ";
        // line 10
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.user_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员")), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("管理"), "html", null, true);
        echo "
      ";
        // line 11
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "isAdmin", array(), "method") || $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.teacher_export_student", false))) {
            // line 12
            echo "        <a class=\"btn btn-info btn-sm pull-right mhs\" id=\"export-students-btn\" href=\"javascript:;\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_manage_student_export_csv", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "userType" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "userType"), "method"), "isNotified" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "isNotified"), "method"))), "html", null, true);
            echo "\" data-datas-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_manage_student_export_datas", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "userType" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "userType"), "method"), "isNotified" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "isNotified"), "method"))), "html", null, true);
            echo "\" data-loading-text=\"正在导出\"><i
              class=\"glyphicon glyphicon-export\"></i> 导出";
            // line 13
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.user_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员")), "html", null, true);
            echo "</a>
      ";
        }
        // line 15
        echo "    </div>

    <div class=\"panel-body\">
      <ul class=\"nav nav-tabs\">
        <li ";
        // line 19
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "userType"), "method") == "login")) {
            echo "class=\"active\"";
        }
        echo ">
          <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_manage_students", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "userType" => "login")), "html", null, true);
        echo "\">已登录</a>
        </li>
        <li ";
        // line 22
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "userType"), "method") == "unlogin")) {
            echo "class=\"active\"";
        }
        echo ">
          <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_manage_students", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "userType" => "unlogin")), "html", null, true);
        echo "\">未登录</a>
        </li>
      </ul>
      
      ";
        // line 27
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "userType"), "method") == "unlogin")) {
            // line 28
            echo "        ";
            $this->loadTemplate("open-course-manage/student-unlogin-list.html.twig", "open-course-manage/students.html.twig", 28)->display($context);
            // line 29
            echo "      ";
        } else {
            // line 30
            echo "        ";
            $this->loadTemplate("open-course-manage/student-login-list.html.twig", "open-course-manage/students.html.twig", 30)->display($context);
            // line 31
            echo "      ";
        }
        // line 32
        echo "
      ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
    </div>
  </div>

";
    }

    public function getTemplateName()
    {
        return "open-course-manage/students.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 33,  118 => 32,  115 => 31,  112 => 30,  109 => 29,  106 => 28,  104 => 27,  97 => 23,  91 => 22,  86 => 20,  80 => 19,  74 => 15,  69 => 13,  62 => 12,  60 => 11,  55 => 10,  50 => 7,  47 => 6,  34 => 2,  30 => 1,  28 => 4,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "open-course-manage/students.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/open-course-manage/students.html.twig");
    }
}
