<?php

/* open-course-manage/course-select-list.html.twig */
class __TwigTemplate_c962677049d4d25ed256f863f4a7b2ac7febb8b51a902403569719afb51060fa extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "open-course-manage/course-select-list.html.twig", 1);
        // line 2
        echo "<style>
.course-wide-list .enabled:hover{

    background: #eee;
    border-color: #ddd;
}

.course-wide-list .enabled{

    cursor: default;
    background: #eee;
}

</style>
<ul class=\"course-wide-list\">
  ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courseSets"]) ? $context["courseSets"] : null));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["courseSet"]) {
            // line 18
            echo "    <li class=\"course-item clearfix\"   data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["courseSet"], "id", array()), "html", null, true);
            echo "\" >
      <a class=\"course-picture-link\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute($context["courseSet"], "defaultCourseId", array()))), "html", null, true);
            echo "\" target=\"_blank\">
        <img class=\"course-picture\" src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->env->getExtension('AppBundle\Twig\AppExtension')->courseSetCover($context["courseSet"], "middle"), "course.png"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["courseSet"], "title", array()), "html", null, true);
            echo "\">
      </a>
      <div class=\"course-body\">
        <div style=\"float:right;\" class=\"color-gray mrm mls\">
          ";
            // line 24
            $this->loadTemplate("open-course-manage/course-set-price-interval.html.twig", "open-course-manage/course-select-list.html.twig", 24)->display($context);
            // line 25
            echo "
          ";
            // line 26
            if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.show_student_num_enabled", "1") == 1)) {
                // line 27
                echo "            <span class=\"divider\"></span>
            <span class=\"color-gray mrm mls\"><strong>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["courseSet"], "studentNum", array()), "html", null, true);
                echo "</strong>";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "user_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "user_name", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员"))), "html", null, true);
                echo "</span>
          ";
            }
            // line 30
            echo "
        </div>

        <h4 class=\"course-title\"><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute($context["courseSet"], "defaultCourseId", array()))), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["courseSet"], "title", array()), "html", null, true);
            echo "</a>
        ";
            // line 34
            if (($this->getAttribute($context["courseSet"], "serializeMode", array()) == "serialized")) {
                // line 35
                echo "          <span class=\"label label-success \">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("更新中"), "html", null, true);
                echo "</span>
        ";
            } elseif (($this->getAttribute(            // line 36
$context["courseSet"], "serializeMode", array()) == "finished")) {
                // line 37
                echo "          <span class=\"label label-warning \">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已完结"), "html", null, true);
                echo "</span>
        ";
            }
            // line 39
            echo "
        ";
            // line 40
            if (($this->getAttribute($context["courseSet"], "type", array()) == "live")) {
                // line 41
                echo "            ";
                $context["task"] = (($this->getAttribute($context["courseSet"], "task", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($context["courseSet"], "task", array(), "array"), null)) : (null));
                // line 42
                echo "            ";
                if ((((isset($context["task"]) ? $context["task"] : null) && (twig_date_format_filter($this->env, "now", "U") >= $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "startTime", array()))) && (twig_date_format_filter($this->env, "now", "U") <= $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "endTime", array())))) {
                    // line 43
                    echo "              <span class=\"label label-warning\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在直播中"), "html", null, true);
                    echo "</span>
            ";
                } else {
                    // line 45
                    echo "              <span class=\"label label-success\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("直播"), "html", null, true);
                    echo "</span>
            ";
                }
                // line 47
                echo "        ";
            }
            // line 48
            echo "        </h4>

        ";
            // line 50
            if (($this->getAttribute($context["courseSet"], "type", array()) == "live")) {
                // line 51
                echo "          ";
                $context["task"] = (($this->getAttribute($context["courseSet"], "task", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["courseSet"], "task", array()), null)) : (null));
                // line 52
                echo "          ";
                if ((isset($context["task"]) ? $context["task"] : null)) {
                    // line 53
                    echo "            <div class=\"live-course-lesson mbm\">
              <span class=\"color-success fsm mrm\">";
                    // line 54
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "startTime", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("n月j日 H:i")), "html", null, true);
                    echo " ~ ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "endTime", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("n月j日 H:i")), "html", null, true);
                    echo "</span>
              <span class=\"color-gray fsm mrm\">";
                    // line 55
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("第%number%任务", array("%number%" => $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "number", array()))), "html", null, true);
                    echo "</span>
            </div>
          ";
                }
                // line 58
                echo "        ";
            } else {
                // line 59
                echo "          <div class=\"course-about ellipsis\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["courseSet"], "subtitle", array()), "html", null, true);
                echo "</div>
        ";
            }
            // line 61
            echo "
        <div class=\"course-footer clearfix\">
          ";
            // line 63
            $context["teacher"] = $this->getAttribute((isset($context["users"]) ? $context["users"] : null), _twig_default_filter(twig_first($this->env, $this->getAttribute($context["courseSet"], "teacherIds", array())), $this->getAttribute($context["courseSet"], "creator", array())), array(), "array");
            // line 64
            echo "          ";
            if ((isset($context["teacher"]) ? $context["teacher"] : null)) {
                // line 65
                echo "            <div class=\"teacher\">
              <a href=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "id", array()))), "html", null, true);
                echo "\" target=\"_blank\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "smallAvatar", array()), "course.png"), "html", null, true);
                echo "\" class=\"teacher-avatar\"></a>
              <a class=\"teacher-nickname ellipsis\" target=\"_blank\"  href=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "nickname", array()), "html", null, true);
                echo "</a>
              <span class=\"teacher-title ellipsis\">";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "title", array()), "html", null, true);
                echo "</span>
            </div>
          ";
            }
            // line 71
            echo "
          <div class=\"course-metas-";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["courseSet"], "id", array()), "html", null, true);
            echo "\" style=\"display:none;\">
            <span class=\"es-icon es-icon-done pull-right\" style=\"z-index:100;color:#02b980;font-size:30px;\"></span>
          </div>

        </div>
      </div>
    </li>
  ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 80
            echo "    <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("找不到相关课程！"), "html", null, true);
            echo "</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['courseSet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "</ul>

";
        // line 84
        if (((array_key_exists("paginator", $context)) ? (_twig_default_filter((isset($context["paginator"]) ? $context["paginator"] : null), null)) : (null))) {
            // line 85
            echo "  ";
            if ((((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "")) : ("")) == "ajax_pagination")) {
                // line 86
                echo "    ";
                echo $context["web_macro"]->getajax_paginator(((array_key_exists("paginator", $context)) ? (_twig_default_filter((isset($context["paginator"]) ? $context["paginator"] : null), null)) : (null)));
                echo "
  ";
            } else {
                // line 88
                echo "    ";
                echo $context["web_macro"]->getpaginator(((array_key_exists("paginator", $context)) ? (_twig_default_filter((isset($context["paginator"]) ? $context["paginator"] : null), null)) : (null)));
                echo "
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "open-course-manage/course-select-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 88,  251 => 86,  248 => 85,  246 => 84,  242 => 82,  233 => 80,  212 => 72,  209 => 71,  203 => 68,  197 => 67,  191 => 66,  188 => 65,  185 => 64,  183 => 63,  179 => 61,  173 => 59,  170 => 58,  164 => 55,  158 => 54,  155 => 53,  152 => 52,  149 => 51,  147 => 50,  143 => 48,  140 => 47,  134 => 45,  128 => 43,  125 => 42,  122 => 41,  120 => 40,  117 => 39,  111 => 37,  109 => 36,  104 => 35,  102 => 34,  96 => 33,  91 => 30,  84 => 28,  81 => 27,  79 => 26,  76 => 25,  74 => 24,  65 => 20,  61 => 19,  56 => 18,  38 => 17,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "open-course-manage/course-select-list.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/open-course-manage/course-select-list.html.twig");
    }
}
