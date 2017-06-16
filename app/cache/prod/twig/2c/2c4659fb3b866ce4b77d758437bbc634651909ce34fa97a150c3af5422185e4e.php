<?php

/* es-bar/list-content/study-center/study-mission.html.twig */
class __TwigTemplate_b0c3617284d3354068684b85ef122410579ef0e41ffec30ddb3af283454f4a20 extends Twig_Template
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
        echo "<div class=\"text-line gray small\">
  <h5><span>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学习任务"), "html", null, true);
        echo "</span></h5>
  <div class=\"line\"></div>
</div>

";
        // line 6
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "id", array()), 0)) : (0))) {
            // line 7
            echo "  ";
            $context["studyMissions"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("StudyCenterMissions", array("userId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()), "count" => 5, "missionCount" => 3));
            // line 8
            echo "  ";
            $context["classrooms"] = (($this->getAttribute((isset($context["studyMissions"]) ? $context["studyMissions"] : null), "classrooms", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["studyMissions"]) ? $context["studyMissions"] : null), "classrooms", array()), null)) : (null));
            // line 9
            echo "  ";
            $context["courses"] = (($this->getAttribute((isset($context["studyMissions"]) ? $context["studyMissions"] : null), "courses", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["studyMissions"]) ? $context["studyMissions"] : null), "courses", array()), null)) : (null));
        }
        // line 11
        echo "
";
        // line 12
        if ((((array_key_exists("classrooms", $context)) ? (_twig_default_filter((isset($context["classrooms"]) ? $context["classrooms"] : null), false)) : (false)) || ((array_key_exists("courses", $context)) ? (_twig_default_filter((isset($context["courses"]) ? $context["courses"] : null), false)) : (false)))) {
            // line 13
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["classrooms"]) ? $context["classrooms"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["classroom"]) {
                if ((isset($context["classrooms"]) ? $context["classrooms"] : null)) {
                    // line 14
                    echo "    <div class=\"bar-task\">
      <div class=\"bar-task-header\">
        <div class=\"title\">
          ";
                    // line 17
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")), "html", null, true);
                    echo ":";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "title", array()), "html", null, true);
                    echo "
          <span>";
                    // line 18
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["classroom"], "learnedTaskNum", array()) . "/") . $this->getAttribute($context["classroom"], "allTaskNum", array())), "html", null, true);
                    echo "</span>
        </div>
      </div>

      <ul class=\"bar-time-line\">
        ";
                    // line 23
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["classroom"], "tasks", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                        if ($context["task"]) {
                            // line 24
                            echo "          ";
                            // line 25
                            echo "          ";
                            $context["lock"] = (($this->getAttribute($context["task"], "lock", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["task"], "lock", array()), false)) : (false));
                            // line 26
                            echo "          <li>
            <span class=\"es-icon
              ";
                            // line 28
                            if ((isset($context["lock"]) ? $context["lock"] : null)) {
                                // line 29
                                echo "                es-icon-lock
              ";
                            } elseif ( !(($this->getAttribute(                            // line 30
$context["task"], "result", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["task"], "result", array()), null)) : (null))) {
                                // line 31
                                echo "                es-icon-undone-check
              ";
                            } elseif (($this->getAttribute($this->getAttribute(                            // line 32
$context["task"], "result", array()), "status", array()) == "start")) {
                                // line 33
                                echo "                es-icon-doing
              ";
                            } elseif (($this->getAttribute($this->getAttribute(                            // line 34
$context["task"], "result", array()), "status", array()) == "finish")) {
                                // line 35
                                echo "                es-icon-iccheckcircleblack24px
              ";
                            }
                            // line 37
                            echo "            \"></span>

            ";
                            // line 39
                            if ((isset($context["lock"]) ? $context["lock"] : null)) {
                                // line 40
                                echo "              ";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("任务%number%-%title%", array("%number%" => $this->getAttribute($context["task"], "number", array()), "%title%" => $this->getAttribute($context["task"], "title", array()))), "html", null, true);
                                echo "
            ";
                            } else {
                                // line 42
                                echo "              <a class=\"link-dark\"
                ";
                                // line 43
                                if ( !(isset($context["lock"]) ? $context["lock"] : null)) {
                                    echo " href=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_show", array("courseId" => $this->getAttribute($context["task"], "courseId", array()), "id" => $this->getAttribute($context["task"], "id", array()))), "html", null, true);
                                    echo "\" ";
                                }
                                // line 44
                                echo "                title=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "title", array()), "html", null, true);
                                echo "\"
                target=\"_blank\">";
                                // line 45
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("任务%number%-%title%", array("%number%" => $this->getAttribute($context["task"], "number", array()), "%title%" => $this->getAttribute($context["task"], "title", array()))), "html", null, true);
                                echo "</a>
            ";
                            }
                            // line 47
                            echo "          </li>
        ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 49
                    echo "      </ul>
    </div>
  ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classroom'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(((array_key_exists("courses", $context)) ? (_twig_default_filter((isset($context["courses"]) ? $context["courses"] : null), null)) : (null)));
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 53
                echo "    ";
                if ($this->getAttribute($context["course"], "tasks", array(), "array")) {
                    // line 54
                    echo "      <div class=\"bar-task\">
        <div class=\"bar-task-header\">
          <div class=\"title\">
            ";
                    // line 57
                    $context["courseSet"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("CourseSet", array("id" => $this->getAttribute($context["course"], "courseSetId", array())));
                    // line 58
                    echo "            ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程:%title%", array("%title%" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "title", array()))), "html", null, true);
                    echo "
            <span>";
                    // line 59
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["course"], "finishTaskNum", array()) . "/") . $this->getAttribute($context["course"], "taskNum", array())), "html", null, true);
                    echo "</span>
          </div>
        </div>

        <ul class=\"bar-time-line\">

          ";
                    // line 65
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["course"], "tasks", array(), "array"));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                        // line 66
                        echo "            ";
                        $context["task_lock"] = (($this->getAttribute($context["course"], "learnMode", array()) == "lockMode") && (($this->getAttribute($context["loop"], "index", array()) != 1) && $this->getAttribute($context["task"], "lock", array())));
                        // line 67
                        echo "            <li><span class=\"es-icon
            ";
                        // line 68
                        if ((isset($context["task_lock"]) ? $context["task_lock"] : null)) {
                            // line 69
                            echo "            es-icon-lock
            ";
                        } elseif ( !(($this->getAttribute(                        // line 70
$context["task"], "result", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["task"], "result", array()), null)) : (null))) {
                            // line 71
                            echo "            es-icon-undone-check
            ";
                        } elseif (($this->getAttribute($this->getAttribute(                        // line 72
$context["task"], "result", array()), "status", array()) == "start")) {
                            // line 73
                            echo "            es-icon-doing
            ";
                        } elseif (($this->getAttribute($this->getAttribute(                        // line 74
$context["task"], "result", array()), "status", array()) == "finish")) {
                            // line 75
                            echo "            es-icon-iccheckcircleblack24px
            ";
                        }
                        // line 77
                        echo "            left-menu\"></span>
            ";
                        // line 78
                        if (twig_test_empty((isset($context["task_lock"]) ? $context["task_lock"] : null))) {
                            // line 79
                            echo "              <a class=\"link-dark\" href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_show", array("courseId" => $this->getAttribute($context["task"], "courseId", array()), "id" => $this->getAttribute($context["task"], "id", array()))), "html", null, true);
                            echo "\"
                title=\"";
                            // line 80
                            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "title", array()), "html", null, true);
                            echo "\"
                target=\"_blank\">";
                            // line 81
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("任务%number%-%title%", array("%number%" => $this->getAttribute($context["task"], "number", array()), "%title%" => $this->getAttribute($context["task"], "title", array()))), "html", null, true);
                            echo "</a></li>
            ";
                        } else {
                            // line 83
                            echo "              ";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("任务%number%-%title%", array("%number%" => $this->getAttribute($context["task"], "number", array()), "%title%" => $this->getAttribute($context["task"], "title", array()))), "html", null, true);
                            echo "</li>
            ";
                        }
                        // line 85
                        echo "          ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 86
                    echo "        </ul>
      </div>
    ";
                }
                // line 89
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 91
            echo "  <span class=\"\"></span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂未发现还有未学习任务。"), "html", null, true);
            echo "<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_explore");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("去逛逛"), "html", null, true);
            echo ">></a>

";
        }
    }

    public function getTemplateName()
    {
        return "es-bar/list-content/study-center/study-mission.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 91,  271 => 89,  266 => 86,  252 => 85,  246 => 83,  241 => 81,  237 => 80,  232 => 79,  230 => 78,  227 => 77,  223 => 75,  221 => 74,  218 => 73,  216 => 72,  213 => 71,  211 => 70,  208 => 69,  206 => 68,  203 => 67,  200 => 66,  183 => 65,  174 => 59,  169 => 58,  167 => 57,  162 => 54,  159 => 53,  154 => 52,  145 => 49,  137 => 47,  132 => 45,  127 => 44,  121 => 43,  118 => 42,  112 => 40,  110 => 39,  106 => 37,  102 => 35,  100 => 34,  97 => 33,  95 => 32,  92 => 31,  90 => 30,  87 => 29,  85 => 28,  81 => 26,  78 => 25,  76 => 24,  71 => 23,  63 => 18,  57 => 17,  52 => 14,  46 => 13,  44 => 12,  41 => 11,  37 => 9,  34 => 8,  31 => 7,  29 => 6,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "es-bar/list-content/study-center/study-mission.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/es-bar/list-content/study-center/study-mission.html.twig");
    }
}
