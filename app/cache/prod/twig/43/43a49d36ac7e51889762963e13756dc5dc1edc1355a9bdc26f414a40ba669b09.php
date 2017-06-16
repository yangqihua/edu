<?php

/* open-course-manage/student-unlogin-list.html.twig */
class __TwigTemplate_cad660d0595a17f8ffceb67643226a5f0ba2efae1a7196f9bb1503765fd683da extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "open-course-manage/student-unlogin-list.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("cloud_sms.sms_enabled") && (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("cloud_sms.sms_live_play_one_day") == "on") || ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("cloud_sms.sms_live_play_one_hour") == "on")))) {
            // line 4
            echo "  <form class=\"form-inline well well-sm \" action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_manage_students", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\" method=\"get\" novalidate>
    <div class=\"form-group col-md-7\">
      <input type=\"hidden\" name=\"userType\" value=\"unlogin\"/>
      <select class=\"form-control\" name=\"isNotified\">
        ";
            // line 8
            echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions(array(0 => "全部学员", 1 => "设置提醒的学员"), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "isNotified"), "method"));
            echo "
      </select>&nbsp;&nbsp;
      <button class=\"btn btn-primary\">";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("搜索"), "html", null, true);
            echo "</button>
    </div>
    <div class=\"clearfix\"></div>
  </form>
";
        }
        // line 15
        echo "
<table class=\"table table-striped\" id=\"course-student-list\">
  <thead>
    <tr>
      <th width=\"30%\">IP</th>
      <th width=\"20%\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最近进入"), "html", null, true);
        echo "</th>
      ";
        // line 21
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "liveOpen") && $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("cloud_sms.sms_enabled")) && (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("cloud_sms.sms_live_play_one_day") == "on") || ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("cloud_sms.sms_live_play_one_hour") == "on")))) {
            // line 22
            echo "        <th width=\"20%\">手机号</th>
        <th width=\"20%\">是否提醒</th>
      ";
        }
        // line 25
        echo "    </tr>
  </thead>
  <tbody>
    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["students"]) ? $context["students"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 29
            echo "      <tr id=\"student-tr\">
        <td class=\"media\" style=\"vertical-align: middle;\">
          ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "ip", array()), "html", null, true);
            echo "
        </td>
        <td style=\"vertical-align: middle;\">
          ";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["student"], "lastEnterTime", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "
        </td>

        ";
            // line 37
            if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "liveOpen") && $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("cloud_sms.sms_enabled")) && (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("cloud_sms.sms_live_play_one_day") == "on") || ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("cloud_sms.sms_live_play_one_hour") == "on")))) {
                // line 38
                echo "          <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "mobile", array()), "html", null, true);
                echo "</td>
          <td style=\"vertical-align: middle;\">
            ";
                // line 40
                if ($this->getAttribute($context["student"], "isNotified", array())) {
                    echo "已设置提醒";
                } else {
                    echo "未设置";
                }
                // line 41
                echo "          </td>
        ";
            }
            // line 43
            echo "        
      </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 46
            echo "      <tr class=\"empty\"><td colspan=\"20\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无记录"), "html", null, true);
            echo "</td></tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "  </tbody>
</table>

";
    }

    public function getTemplateName()
    {
        return "open-course-manage/student-unlogin-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 48,  116 => 46,  109 => 43,  105 => 41,  99 => 40,  93 => 38,  91 => 37,  85 => 34,  79 => 31,  75 => 29,  70 => 28,  65 => 25,  60 => 22,  58 => 21,  54 => 20,  47 => 15,  39 => 10,  34 => 8,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "open-course-manage/student-unlogin-list.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/open-course-manage/student-unlogin-list.html.twig");
    }
}
