<?php

/* es-bar/list-content/practice/practice.html.twig */
class __TwigTemplate_7dcd10e77e00a105c866084d7654169a89a866bbf8b363bf95ba1a4fc0af0eaa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("es-bar/list-content/practice.html.twig", "es-bar/list-content/practice/practice.html.twig", 1);
        $this->blocks = array(
            'myPractice' => array($this, 'block_myPractice'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "es-bar/list-content/practice.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["esBarMenu"] = (isset($context["status"]) ? $context["status"] : null);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_myPractice($context, array $blocks = array())
    {
        // line 4
        echo "  <div class=\"text-line gray small\">
    <h5><span>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("考试"), "html", null, true);
        echo "</span></h5>
    <div class=\"line\"></div>
  </div>

  <ul class=\"list-unstyled\">
    ";
        // line 10
        if ((isset($context["testPaperResults"]) ? $context["testPaperResults"] : null)) {
            // line 11
            echo "      ";
            $context["testCount"] = 10;
            // line 12
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["testPaperResults"]) ? $context["testPaperResults"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["testPaperResult"]) {
                // line 13
                echo "        ";
                $context["testCount"] = $this->getAttribute($context["loop"], "length", array());
                // line 14
                echo "        ";
                $context["task"] = (($this->getAttribute((isset($context["tasks"]) ? $context["tasks"] : null), $this->getAttribute($context["testPaperResult"], "lessonId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["tasks"]) ? $context["tasks"] : null), $this->getAttribute($context["testPaperResult"], "lessonId", array()), array(), "array"), null)) : (null));
                // line 15
                echo "        <li>
          <i class=\"es-icon es-icon-chevronright\"></i>
          <a target=\"_blank\" href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("testpaper_result_show", array("resultId" => $this->getAttribute($context["testPaperResult"], "id", array()), "action" => "result")), "html", null, true);
                echo "\"
            class=\"color-gray\">";
                // line 18
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "title", array()), $this->getAttribute($context["testPaperResult"], "paperName", array()))) : ($this->getAttribute($context["testPaperResult"], "paperName", array()))), "html", null, true);
                echo "</a>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testPaperResult'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "      ";
            if (((isset($context["testCount"]) ? $context["testCount"] : null) >= 10)) {
                // line 22
                echo "        <li class=\"text-center\">
          <a class=\"color-gray\" href=\"";
                // line 23
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_testpaper_list");
                echo "\" target=\"_blank\">
            ";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("更多"), "html", null, true);
                echo "<i class=\"es-icon es-icon-angledoubleright\"></i>
          </a>
        </li>
      ";
            }
            // line 28
            echo "    ";
        } else {
            // line 29
            echo "      <li class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无考试"), "html", null, true);
            echo "</li>
    ";
        }
        // line 31
        echo "  </ul>

  <div class=\"text-line gray small\">
    <h5><span>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("作业"), "html", null, true);
        echo "</span></h5>
    <div class=\"line\"></div>
  </div>

  <ul class=\"list-unstyled\">
    ";
        // line 39
        if ((isset($context["homeworkResults"]) ? $context["homeworkResults"] : null)) {
            // line 40
            echo "      ";
            $context["homeworkCount"] = 10;
            // line 41
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["homeworkResults"]) ? $context["homeworkResults"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["homeworkResult"]) {
                // line 42
                echo "        ";
                $context["homeworkCount"] = $this->getAttribute($context["loop"], "length", array());
                // line 43
                echo "        ";
                $context["task"] = $this->getAttribute((isset($context["tasks"]) ? $context["tasks"] : null), $this->getAttribute($context["homeworkResult"], "lessonId", array()), array(), "array");
                // line 44
                echo "        ";
                $context["course"] = $this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["homeworkResult"], "courseId", array()), array(), "array");
                // line 45
                echo "        <li>
          <i class=\"es-icon es-icon-chevronright\"></i>
          <a target=\"_blank\" class=\"color-gray\" href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homework_result_show", array("resultId" => $this->getAttribute($context["homeworkResult"], "id", array()), "action" => "result")), "html", null, true);
                echo "\">
            ";
                // line 48
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "title", array()), "")) : ("")), "html", null, true);
                echo "
          </a>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['homeworkResult'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "      ";
            if (((isset($context["homeworkCount"]) ? $context["homeworkCount"] : null) >= 10)) {
                // line 53
                echo "        <li class=\"text-center\">
          <a class=\"color-gray\" href=\"";
                // line 54
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_homework_list");
                echo "\" target=\"_blank\">
            ";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("更多"), "html", null, true);
                echo "<i class=\"es-icon es-icon-angledoubleright\"></i>
          </a>
        </li>
      ";
            }
            // line 59
            echo "    ";
        } else {
            // line 60
            echo "      <li class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无作业"), "html", null, true);
            echo "</li>
    ";
        }
        // line 62
        echo "  </ul>

";
    }

    public function getTemplateName()
    {
        return "es-bar/list-content/practice/practice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 62,  216 => 60,  213 => 59,  206 => 55,  202 => 54,  199 => 53,  196 => 52,  178 => 48,  174 => 47,  170 => 45,  167 => 44,  164 => 43,  161 => 42,  143 => 41,  140 => 40,  138 => 39,  130 => 34,  125 => 31,  119 => 29,  116 => 28,  109 => 24,  105 => 23,  102 => 22,  99 => 21,  82 => 18,  78 => 17,  74 => 15,  71 => 14,  68 => 13,  50 => 12,  47 => 11,  45 => 10,  37 => 5,  34 => 4,  31 => 3,  27 => 1,  25 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "es-bar/list-content/practice/practice.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/es-bar/list-content/practice/practice.html.twig");
    }
}
