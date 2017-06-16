<?php

/* open-course-manage/open-course-marketing.html.twig */
class __TwigTemplate_69e93c0a4b8b03dd6d18d12dbc315c1a2b1e1a5f2d62cac936c63370d4d6b899 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("open-course-manage/layout.html.twig", "open-course-manage/open-course-marketing.html.twig", 1);
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
        $context["side_nav"] = "marketing";
        // line 4
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/open-course-manage/recommend-course/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("推荐设置"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
<style>

.course-grid {
    display: inline-block;
    vertical-align: top;
    margin: 15px 15px 15px 0;
    border: 1px solid #e1e1e1;
    border-radius: 4px;
}

.course-grid .add-course {
    font-size: 80px;
    height: 148px;
    text-align: center;
    padding-top: 30px;
}
.sort{
    padding-top: 50px;
    padding-right: 20px;
    padding-left: 20px;
}

.price{
  color: #e57259;
  font-size: 16px;
}
</style>

<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("推荐设置"), "html", null, true);
        echo "
    <button class=\"btn btn-success btn-sm panel-bar\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_manage_course_pick", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array(), "array"))), "html", null, true);
        echo "\">添加课程</button>
  </div>

  <div class=\"panel-body\">
    <form class=\"form-horizontal\" id=\"recommend-course-form\" method=\"post\" action=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_manage_marketing", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">
      ";
        // line 44
        $context["openCourse"] = (isset($context["course"]) ? $context["course"] : null);
        // line 45
        echo "      ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

      <div class=\"form-group\" id=\"courses-form-group\">
        <div class=\"col-md-12 controls\">
          <ul class=\"course-list-group sortable-list course-wide-list courses-selected\" id=\"course-list-group\" data-role=\"list\" >

            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courseSets"]) ? $context["courseSets"] : null));
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
        foreach ($context['_seq'] as $context["recommendId"] => $context["courseSet"]) {
            // line 52
            echo "              ";
            $context["showUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute($context["courseSet"], "defaultCourseId", array())));
            // line 53
            echo "
              <li class=\"course-item item-";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["courseSet"], "id", array()), "html", null, true);
            echo " clearfix\" data-role=\"item\" >
                <input type=\"hidden\" name=\"recommendIds[]\" value=\"";
            // line 55
            echo twig_escape_filter($this->env, $context["recommendId"], "html", null, true);
            echo "\" />
                
                <span class=\"glyphicon glyphicon-resize-vertical sort-handle sort\"></span>
                <a class=\"course-picture-link\" href=\"";
            // line 58
            echo twig_escape_filter($this->env, (isset($context["showUrl"]) ? $context["showUrl"] : null), "html", null, true);
            echo "\" target=\"_blank\">
                  <img class=\"course-picture\" src=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->env->getExtension('AppBundle\Twig\AppExtension')->courseSetCover($context["courseSet"], "middle"), "courseSet.png"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["courseSet"], "title", array()), "html", null, true);
            echo "\">
                </a>

                <button class=\"close delete-btn pull-right mrl mts mll\" data-role=\"item-delete\" type=\"button\" title=\"删除\" style=\"font-size:35px;\" data-cancel-url=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_manage_recommend_course_delete", array("id" => $this->getAttribute((isset($context["openCourse"]) ? $context["openCourse"] : null), "id", array()), "recommendId" => $context["recommendId"])), "html", null, true);
            echo "\" data-recommend-id=\"";
            echo twig_escape_filter($this->env, $context["recommendId"], "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["courseSet"], "id", array()), "html", null, true);
            echo "\">× </button>

                <div class=\"course-body\">
                  <div style=\"float:right;\" class=\"color-gray mrm mls\">
                    ";
            // line 66
            $this->loadTemplate("open-course-manage/course-set-price-interval.html.twig", "open-course-manage/open-course-marketing.html.twig", 66)->display($context);
            // line 67
            echo "                  </div>

                  <h4 class=\"course-title\"><a href=\"";
            // line 69
            echo twig_escape_filter($this->env, (isset($context["showUrl"]) ? $context["showUrl"] : null), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["courseSet"], "title", array()), "html", null, true);
            echo "</a>
                  ";
            // line 70
            if ((($this->getAttribute($context["courseSet"], "type", array()) == "normal") || ($this->getAttribute($context["courseSet"], "type", array()) == "live"))) {
                // line 71
                echo "                    ";
                if (($this->getAttribute($context["courseSet"], "serializeMode", array()) == "serialized")) {
                    // line 72
                    echo "                      <span class=\"label label-success \">更新中</span>
                    ";
                } elseif (($this->getAttribute(                // line 73
$context["courseSet"], "serializeMode", array()) == "finished")) {
                    // line 74
                    echo "                      <span class=\"label label-warning \">已完结</span>
                    ";
                }
                // line 76
                echo "                  ";
            }
            // line 77
            echo "
                  ";
            // line 78
            if (($this->getAttribute($context["courseSet"], "type", array()) == "live")) {
                // line 79
                echo "                    ";
                $context["task"] = (($this->getAttribute($context["courseSet"], "task", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($context["courseSet"], "task", array(), "array"), null)) : (null));
                // line 80
                echo "                    ";
                if ((((isset($context["task"]) ? $context["task"] : null) && (twig_date_format_filter($this->env, "now", "U") >= $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "startTime", array()))) && (twig_date_format_filter($this->env, "now", "U") <= $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "endTime", array())))) {
                    // line 81
                    echo "                      <span class=\"label label-warning\">正在直播中</span>
                    ";
                } else {
                    // line 83
                    echo "                      <span class=\"label label-success\">直播</span>
                    ";
                }
                // line 85
                echo "                  ";
            }
            // line 86
            echo "                  </h4>

                  ";
            // line 88
            if (($this->getAttribute($context["courseSet"], "type", array()) == "live")) {
                // line 89
                echo "                    ";
                $context["task"] = (($this->getAttribute($context["courseSet"], "task", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["courseSet"], "task", array()), null)) : (null));
                // line 90
                echo "                    ";
                if ((isset($context["task"]) ? $context["task"] : null)) {
                    // line 91
                    echo "                      <div class=\"live-course-lesson mbm\">
                        <span class=\"color-success fsm mrm\">";
                    // line 92
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "startTime", array()), "n月j日 H:i"), "html", null, true);
                    echo " ~ ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "endTime", array()), "H:i"), "html", null, true);
                    echo "</span>
                        <span class=\"color-gray fsm mrm\">第";
                    // line 93
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "number", array()), "html", null, true);
                    echo "任务</span>
                      </div>
                    ";
                }
                // line 96
                echo "                  ";
            } else {
                // line 97
                echo "                    <div class=\"course-about ellipsis\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "subtitle", array()), "html", null, true);
                echo "</div>
                  ";
            }
            // line 99
            echo "
                  <div class=\"course-footer clearfix\">
                    ";
            // line 101
            $context["teacher"] = $this->getAttribute((isset($context["users"]) ? $context["users"] : null), _twig_default_filter(twig_first($this->env, $this->getAttribute($context["courseSet"], "teacherIds", array())), $this->getAttribute($context["courseSet"], "creator", array())), array(), "array");
            // line 102
            echo "                    ";
            if ((isset($context["teacher"]) ? $context["teacher"] : null)) {
                // line 103
                echo "                      <div class=\"teacher\">
                        <a href=\"";
                // line 104
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "id", array()))), "html", null, true);
                echo "\" target=\"_blank\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "smallAvatar", array()), "avatar.png"), "html", null, true);
                echo "\" class=\"teacher-avatar\"></a>
                        <a class=\"teacher-nickname ellipsis\" target=\"_blank\"  href=\"";
                // line 105
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "nickname", array()), "html", null, true);
                echo "</a>
                        <span class=\"teacher-title ellipsis\">";
                // line 106
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "title", array()), "html", null, true);
                echo "</span>
                      </div>
                    ";
            }
            // line 109
            echo "
                    <div class=\"course-metas\">  

                      ";
            // line 112
            if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.show_student_num_enabled", "1") == 1)) {
                // line 113
                echo "                        <span class=\"color-gray text-sm\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["courseSet"], "studentNum", array()), "html", null, true);
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.user_name", "学员"), "html", null, true);
                echo "</span>
                        ";
                // line 115
                echo "                      ";
            }
            echo "  

                      ";
            // line 120
            echo "                      ";
            // line 132
            echo "                    </div>

                  </div>

                </div>
              </li>

            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['recommendId'], $context['courseSet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "
          </ul>
        </div>  
      </div>

      ";
        // line 145
        if ((isset($context["courseSets"]) ? $context["courseSets"] : null)) {
            // line 146
            echo "        <div class=\"form-group\">
          <div class=\"col-md-offset-9 col-md-3 controls\">
            <button type=\"submit\" class=\"btn btn-fat btn-primary pull-right\">保存修改</button>
          </div>  
        </div>
      ";
        } else {
            // line 152
            echo "        <div class=\"empty\">赶紧添加课程吧！</div>
      ";
        }
        // line 154
        echo "
      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">

    </form>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "open-course-manage/open-course-marketing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  343 => 155,  340 => 154,  336 => 152,  328 => 146,  326 => 145,  319 => 140,  298 => 132,  296 => 120,  290 => 115,  284 => 113,  282 => 112,  277 => 109,  271 => 106,  265 => 105,  259 => 104,  256 => 103,  253 => 102,  251 => 101,  247 => 99,  241 => 97,  238 => 96,  232 => 93,  226 => 92,  223 => 91,  220 => 90,  217 => 89,  215 => 88,  211 => 86,  208 => 85,  204 => 83,  200 => 81,  197 => 80,  194 => 79,  192 => 78,  189 => 77,  186 => 76,  182 => 74,  180 => 73,  177 => 72,  174 => 71,  172 => 70,  166 => 69,  162 => 67,  160 => 66,  149 => 62,  141 => 59,  137 => 58,  131 => 55,  127 => 54,  124 => 53,  121 => 52,  104 => 51,  94 => 45,  92 => 44,  88 => 43,  81 => 39,  77 => 38,  45 => 8,  42 => 7,  34 => 2,  30 => 1,  28 => 4,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "open-course-manage/open-course-marketing.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/open-course-manage/open-course-marketing.html.twig");
    }
}
