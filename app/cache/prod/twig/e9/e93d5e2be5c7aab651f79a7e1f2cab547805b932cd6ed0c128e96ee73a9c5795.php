<?php

/* es-bar/list-content/study-place/my-course.html.twig */
class __TwigTemplate_6e3b4bfdde09306634f45615b6b7230b267e9b4fbe4a689bb8128c8160c1d554 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("es-bar/list-content/study-place.html.twig", "es-bar/list-content/study-place/my-course.html.twig", 1);
        $this->blocks = array(
            'myStudyPlace' => array($this, 'block_myStudyPlace'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "es-bar/list-content/study-place.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["esBarMenu"] = "course";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_myStudyPlace($context, array $blocks = array())
    {
        // line 4
        if ((isset($context["courses"]) ? $context["courses"] : null)) {
            // line 5
            echo "  <!-- 课程 -->
  <ul class=\"course-grids\">
    ";
            // line 7
            $context["courseCount"] = 15;
            // line 8
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 9
                echo "      ";
                $context["courseCount"] = $this->getAttribute($context["loop"], "length", array());
                // line 10
                echo "      ";
                $context["courseSet"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("CourseSet", array("id" => $this->getAttribute($context["course"], "courseSetId", array())));
                // line 11
                echo "      <li class=\"course-grid mt0\">
        <a href=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                echo "\" class=\"grid-body\" style=\"width: auto\">
          <div class=\"course-grid-img\">
            <img src=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->env->getExtension('AppBundle\Twig\AppExtension')->courseSetCover((isset($context["courseSet"]) ? $context["courseSet"] : null), "middle"), "courseSet.png"), "html", null, true);
                echo "\" class=\"img-responsive thumb\">
            <div class=\"course-grid-mask\">
              <span class=\"btn btn-warning btn-sm course-grid-btn-learn\">
                继续学习
              </span>
            </div>
          </div>
          <div class=\"progress progress-sm mb0\">
            <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "percent", array()), "html", null, true);
                echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "percent", array()), "html", null, true);
                echo "%\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"\" data-original-title=\"40%\">
            </div>
          </div>
          <div class=\"title\">
             ";
                // line 26
                echo $this->env->getExtension('AppBundle\Twig\WebExtension')->subTextFilter($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "title", array()), 6);
                echo "
             <span class=\"pull-right color-primary text-12\" >
              <span class=\"gray-light mrs\">|</span>
              ";
                // line 29
                echo $this->env->getExtension('AppBundle\Twig\WebExtension')->subTextFilter($this->getAttribute($context["course"], "title", array()), 6);
                echo "
            </span>
          </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "  </ul>
  ";
            // line 37
            if (((isset($context["courseCount"]) ? $context["courseCount"] : null) >= 15)) {
                // line 38
                echo "    <p class=\"text-center\"><a class=\"link-dark\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_courses_learning");
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("更多"), "html", null, true);
                echo "<i class=\"es-icon es-icon-angledoubleright\"></i></a></p>
  ";
            }
        } else {
            // line 41
            echo "  <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无课程"), "html", null, true);
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "es-bar/list-content/study-place/my-course.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 41,  126 => 38,  124 => 37,  121 => 36,  100 => 29,  94 => 26,  85 => 22,  74 => 14,  69 => 12,  66 => 11,  63 => 10,  60 => 9,  42 => 8,  40 => 7,  36 => 5,  34 => 4,  31 => 3,  27 => 1,  25 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "es-bar/list-content/study-place/my-course.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/es-bar/list-content/study-place/my-course.html.twig");
    }
}
