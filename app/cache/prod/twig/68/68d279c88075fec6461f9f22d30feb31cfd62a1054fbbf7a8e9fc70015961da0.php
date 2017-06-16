<?php

/* es-bar/list-content/study-center/live.html.twig */
class __TwigTemplate_20597b76d379a82e2a2ceca71032f5ffb827205748e73d232ded6297137b1c27 extends Twig_Template
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
        $context["RecentLiveTasks"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("RecentLiveTasks", array("userId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()), "count" => 2));
        // line 2
        if ((isset($context["RecentLiveTasks"]) ? $context["RecentLiveTasks"] : null)) {
            // line 3
            echo "  <div class=\"text-line gray small\">
    <h5><span>";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("预告板"), "html", null, true);
            echo "</span></h5>
    <div class=\"line\"></div>
  </div>

  <ul class=\"bar-preview\">
    ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["RecentLiveTasks"]) ? $context["RecentLiveTasks"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["recentLiveLesson"]) {
                // line 10
                echo "      <li>
        <p class=\"text-overflow\"><i class=\"es-icon es-icon-calendar\"></i><a target=\"_blank\" class=\"link-dark\" href=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_show", array("courseId" => $this->getAttribute($context["recentLiveLesson"], "courseId", array()), "id" => $this->getAttribute($context["recentLiveLesson"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["recentLiveLesson"], "title", array()), "html", null, true);
                echo "</a></p>
        <p class=\"date\">";
                // line 12
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["recentLiveLesson"], "startTime", array()), "Y-m-d H:i:s"), "html", null, true);
                echo "</p>
      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recentLiveLesson'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "  </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "es-bar/list-content/study-center/live.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 15,  47 => 12,  41 => 11,  38 => 10,  34 => 9,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "es-bar/list-content/study-center/live.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/es-bar/list-content/study-center/live.html.twig");
    }
}
