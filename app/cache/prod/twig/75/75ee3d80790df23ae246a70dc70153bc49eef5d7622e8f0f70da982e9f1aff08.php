<?php

/* open-course/recommend-course-list.html.twig */
class __TwigTemplate_92c6bed93ee5fb1c28711a80a5895a02891e55ffc5a437fa7ab375145abb7902 extends Twig_Template
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
        $context["recommendCourses"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("RecommendOpenCourses", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "count" => 5));
        // line 2
        echo "
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recommendCourses"]) ? $context["recommendCourses"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            if ($context["course"]) {
                // line 5
                echo "\t";
                if ((($this->getAttribute($context["course"], "type", array()) == "open") || ($this->getAttribute($context["course"], "type", array()) == "liveOpen"))) {
                    // line 6
                    echo "\t\t";
                    $context["showUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_show", array("courseId" => $this->getAttribute($context["course"], "id", array())));
                    // line 7
                    echo "\t";
                } else {
                    // line 8
                    echo "\t\t";
                    $context["courseSet"] = $context["course"];
                    // line 9
                    echo "\t\t";
                    $context["showUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "defaultCourseId", array())));
                    // line 10
                    echo "\t";
                }
                // line 11
                echo "
\t<li class=\"tab-recommand clearfix\">
\t\t<a href=\"";
                // line 13
                echo twig_escape_filter($this->env, (isset($context["showUrl"]) ? $context["showUrl"] : null), "html", null, true);
                echo "\" target=\"_blank\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                echo "\">
      <img class=\"img-responsive\" src=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->env->getExtension('AppBundle\Twig\AppExtension')->courseSetCover($context["course"], "small")), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                echo "\">
    </a>
\t\t<div class=\"open-course-info\">
\t\t  <a class=\"title\" href=\"";
                // line 17
                echo twig_escape_filter($this->env, (isset($context["showUrl"]) ? $context["showUrl"] : null), "html", null, true);
                echo "\" target=\"_blank\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                echo "</a>
\t\t  <div class=\"num\">";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "studentNum", array()), "html", null, true);
                echo "人在学习</div>
\t\t</div>
\t</li>
";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 22
            echo "\t<li><div class=\"empty\">暂无推荐课程</div></li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "open-course/recommend-course-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 22,  74 => 18,  66 => 17,  58 => 14,  52 => 13,  48 => 11,  45 => 10,  42 => 9,  39 => 8,  36 => 7,  33 => 6,  30 => 5,  24 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "open-course/recommend-course-list.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/open-course/recommend-course-list.html.twig");
    }
}
