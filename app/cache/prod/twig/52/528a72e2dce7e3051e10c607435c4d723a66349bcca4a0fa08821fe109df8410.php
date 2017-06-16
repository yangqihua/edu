<?php

/* open-course-manage/student-login-list.html.twig */
class __TwigTemplate_04bcb147c91e49cacada23a931daef12446ec46c6f93c4d5c7063121ce361436 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "open-course-manage/student-login-list.html.twig", 1);
        // line 2
        echo "
<form class=\"form-inline well well-sm \" action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_manage_students", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"get\" novalidate>
  <div class=\"form-group col-md-7\">
    <input class=\"form-control \" type=\"text\" style=\"width:45%\" placeholder=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请输入用户名"), "html", null, true);
        echo "\" name=\"keyword\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\">

    <input type=\"hidden\" name=\"userType\" value=\"login\"/>

    ";
        // line 9
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "liveOpen") && $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("cloud_sms.sms_enabled")) && (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("cloud_sms.sms_live_play_one_day") == "on") || ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("cloud_sms.sms_live_play_one_hour") == "on")))) {
            // line 10
            echo "      <select class=\"form-control\" name=\"isNotified\">
        ";
            // line 11
            echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions(array(0 => "全部学员", 1 => "设置提醒的学员"), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "isNotified"), "method"));
            echo "
      </select>&nbsp;&nbsp;
    ";
        }
        // line 14
        echo "    <button class=\"btn btn-primary\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("搜索"), "html", null, true);
        echo "</button>
  </div>
  <div class=\"clearfix\"></div>
</form>

<table class=\"table table-striped\" id=\"course-student-list\">
  <thead>
    <tr>
      <th width=\"30%\">";
        // line 22
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.user_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员")), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员"), "html", null, true);
        }
        echo "</th>
      <th width=\"20%\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最近进入"), "html", null, true);
        echo "</th>
      <th width=\"20%\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("手机号"), "html", null, true);
        echo "</th>
      ";
        // line 25
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "liveOpen") && $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("cloud_sms.sms_enabled")) && (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("cloud_sms.sms_live_play_one_day") == "on") || ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("cloud_sms.sms_live_play_one_hour") == "on")))) {
            // line 26
            echo "        <th>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("是否提醒"), "html", null, true);
            echo "</th>
      ";
        }
        // line 28
        echo "      <th>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("操作"), "html", null, true);
        echo "</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["students"]) ? $context["students"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 33
            echo "      ";
            $context["user"] = $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["student"], "userId", array()), array(), "array");
            // line 34
            echo "      <tr id=\"student-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true);
            echo "-tr\">
        <td class=\"media\" style=\"vertical-align: middle;\">
          ";
            // line 36
            echo $context["web_macro"]->getuser_avatar((isset($context["user"]) ? $context["user"] : null), "pull-left", "avatar-sm");
            echo "
          <a class=\"link-primary\" target=\"_blank\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
            echo "</a>
          <div class=\"color-gray text-sm\">";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("加入时间："), "html", null, true);
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["student"], "createdTime", array()), "Y-n-d H:i"), "html", null, true);
            echo "</div>
        </td>

        <td style=\"vertical-align: middle;\">
          ";
            // line 42
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["student"], "lastEnterTime", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "
        </td>

        <td style=\"vertical-align: middle;\">";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "mobile", array()), "html", null, true);
            echo "</td>

        ";
            // line 47
            if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "liveOpen") && $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("cloud_sms.sms_enabled")) && (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("cloud_sms.sms_live_play_one_day") == "on") || ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("cloud_sms.sms_live_play_one_hour") == "on")))) {
                // line 48
                echo "          <td style=\"vertical-align: middle;\">
            ";
                // line 49
                if ($this->getAttribute($context["student"], "isNotified", array())) {
                    echo "已设置提醒";
                } else {
                    echo "未设置";
                }
                // line 50
                echo "          </td>
        ";
            }
            // line 52
            echo "        
        <td style=\"vertical-align: middle;\">
          <div class=\"btn-group\">
            ";
            // line 55
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()) != $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))) {
                // line 56
                echo "              <button class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_create", array("toId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("发私信"), "html", null, true);
                echo "</button>
            ";
            }
            // line 58
            echo "            ";
            if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "isAdmin", array(), "method")) {
                // line 59
                echo "              <button class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_manage_students_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("查看资料"), "html", null, true);
                echo "</button>
            ";
            }
            // line 61
            echo "          </div>
        </td>
      </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 65
            echo "      <tr class=\"empty\"><td colspan=\"20\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无记录"), "html", null, true);
            echo "</td></tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "  </tbody>
</table>


";
    }

    public function getTemplateName()
    {
        return "open-course-manage/student-login-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 67,  185 => 65,  177 => 61,  169 => 59,  166 => 58,  158 => 56,  156 => 55,  151 => 52,  147 => 50,  141 => 49,  138 => 48,  136 => 47,  131 => 45,  125 => 42,  117 => 38,  111 => 37,  107 => 36,  101 => 34,  98 => 33,  93 => 32,  85 => 28,  79 => 26,  77 => 25,  73 => 24,  69 => 23,  61 => 22,  49 => 14,  43 => 11,  40 => 10,  38 => 9,  29 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "open-course-manage/student-login-list.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/open-course-manage/student-login-list.html.twig");
    }
}
