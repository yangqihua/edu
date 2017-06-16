<?php

/* course/task-list/parts/task-length.html.twig */
class __TwigTemplate_8ad391e3e036952f6d0d37bec5b90e8fe0c799480f5b3a6fd7ad14014cb24bbf extends Twig_Template
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
        echo "<span class=\"right-menu color-gray ";
        if ( !(isset($context["member"]) ? $context["member"] : null)) {
            echo " mouse-leave ";
        }
        echo "\">
  ";
        // line 2
        if ($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "watchLimitRemaining", array(), "any", true, true)) {
            // line 3
            echo "    <span class=\"hidden-xs mr20\">  剩余观看时长：";
            echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "watchLimitRemaining", array()) > 0)) ? ($this->env->getExtension('AppBundle\Twig\WebExtension')->durationTextFilter($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "watchLimitRemaining", array()))) : (0)), "html", null, true);
            echo " </span>
  ";
        }
        // line 5
        echo "
  ";
        // line 6
        $context["meta"] = $this->env->getExtension('AppBundle\Twig\ActivityExtension')->getActivityMeta($this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "activity", array()), "mediaType", array()));
        // line 7
        echo "  ";
        if (($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "type", array()) == "live")) {
            // line 8
            echo "    ";
            $context["now"] = $this->getAttribute(twig_date_converter($this->env), "timestamp", array());
            // line 9
            echo "    ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "activity", array()), "ext", array()), "replayStatus", array()) != twig_constant("Biz\\Course\\Service\\LiveReplayService::REPLAY_UNGENERATE_STATUS"))) {
                // line 10
                echo "      ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("回放"), "html", null, true);
                echo "
    ";
            } elseif ((            // line 11
(isset($context["now"]) ? $context["now"] : null) < $this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "activity", array()), "startTime", array()))) {
                // line 12
                echo "      ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "activity", array()), "startTime", array()), "m-d H:i"), "html", null, true);
                echo "
    ";
            } elseif ((($this->getAttribute($this->getAttribute(            // line 13
(isset($context["task"]) ? $context["task"] : null), "activity", array()), "startTime", array()) < (isset($context["now"]) ? $context["now"] : null)) && ((isset($context["now"]) ? $context["now"] : null) < $this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "activity", array()), "endTime", array())))) {
                // line 14
                echo "      ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在直播中"), "html", null, true);
                echo "
    ";
            } elseif ((            // line 15
(isset($context["now"]) ? $context["now"] : null) > $this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "activity", array()), "endTime", array()))) {
                // line 16
                echo "      ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("直播结束"), "html", null, true);
                echo "
    ";
            }
            // line 18
            echo "  ";
        } else {
            // line 19
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\ActivityExtension')->lengthFormat((($this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "activity", array(), "any", false, true), "length", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "activity", array(), "any", false, true), "length", array()), 0)) : (0))), "html", null, true);
            echo "
  ";
        }
        // line 21
        echo "  <i class=\"es-icon es-icon ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "icon", array()), "html", null, true);
        echo "\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "name", array()), "html", null, true);
        echo "任务\" data-container=\"body\"></i>
</span>";
    }

    public function getTemplateName()
    {
        return "course/task-list/parts/task-length.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 21,  78 => 19,  75 => 18,  69 => 16,  67 => 15,  62 => 14,  60 => 13,  55 => 12,  53 => 11,  48 => 10,  45 => 9,  42 => 8,  39 => 7,  37 => 6,  34 => 5,  28 => 3,  26 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/task-list/parts/task-length.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/course/task-list/parts/task-length.html.twig");
    }
}
