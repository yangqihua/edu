<?php

/* classroom/course/list.html.twig */
class __TwigTemplate_eb7b3de63428e2af8a92b8494e09cd0454491145eb3f891a68f6bea38cc3467c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("classroom/content-layout.html.twig", "classroom/course/list.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "classroom/content-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["nav"] = "course";
        // line 5
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/echo-js.js", 1 => "app/js/classroom/course-list/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 3
    public function block_description($context, array $blocks = array())
    {
        echo $this->env->getExtension('AppBundle\Twig\WebExtension')->plainTextFilter(((array_key_exists("classroomDescription", $context)) ? (_twig_default_filter((isset($context["classroomDescription"]) ? $context["classroomDescription"] : null), "")) : ("")), 100);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
  ";
        // line 9
        if (((array_key_exists("isCourseMember", $context)) ? (_twig_default_filter((isset($context["isCourseMember"]) ? $context["isCourseMember"] : null), false)) : (false))) {
            // line 10
            echo "    ";
            $context["courseShowPath"] = "my_course_show";
            // line 11
            echo "  ";
        } else {
            // line 12
            echo "    ";
            $context["courseShowPath"] = "course_show";
            // line 13
            echo "  ";
        }
        // line 14
        echo "
  <div class=\"class-course-list\">
    ";
        // line 16
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
            // line 17
            echo "      <div class=\"course-item\">
        <div class=\"media\">
          <a class=\"media-left\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["courseShowPath"]) ? $context["courseShowPath"] : null), array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\">
            ";
            // line 20
            echo $this->env->getExtension('AppBundle\Twig\WebExtension')->makeLazyImg($this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->env->getExtension('AppBundle\Twig\AppExtension')->courseCover($context["course"], "middle"), "course.png"), "", "");
            echo "
          </a>
          <div class=\"media-body\">
            <div class=\"title\">
              <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["courseShowPath"]) ? $context["courseShowPath"] : null), array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\">
                ";
            // line 25
            if (((($this->getAttribute($context["course"], "courseNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["course"], "courseNum", array()), 1)) : (1)) > 1)) {
                // line 26
                echo "                  ";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["course"], "courseSet", array()), "title", array()) . " - ") . $this->getAttribute($context["course"], "title", array())), "html", null, true);
                echo "
                ";
            } else {
                // line 28
                echo "                  ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["course"], "courseSet", array()), "title", array()), "html", null, true);
                echo "
                ";
            }
            // line 30
            echo "              </a>
            </div>
            <div class=\"score\">
              ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "star", array(0 => $this->getAttribute($context["course"], "rating", array())), "method"), "html", null, true);
            echo "
            </div>
            <div class=\"price hidden-xs\">
                ";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("原价："), "html", null, true);
            echo "
                ";
            // line 37
            $this->loadTemplate("course/widgets/price.html.twig", "classroom/course/list.html.twig", 37)->display(array_merge($context, array("courseSet" => $this->getAttribute($context["course"], "courseSet", array()), "shows" => "originPrice")));
            // line 38
            echo "            </div>
            <span class=\"course-show\">
              <i class=\"es-icon es-icon-keyboardarrowdown\" data-lesson-url=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classrom_course_tasks_list", array("courseId" => $this->getAttribute($context["course"], "id", array()), "classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\"></i>
            </span>
          </div>
        </div>

      </div>
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
        // line 47
        echo "
  </div>
";
    }

    public function getTemplateName()
    {
        return "classroom/course/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 47,  142 => 40,  138 => 38,  136 => 37,  132 => 36,  126 => 33,  121 => 30,  115 => 28,  109 => 26,  107 => 25,  103 => 24,  96 => 20,  92 => 19,  88 => 17,  71 => 16,  67 => 14,  64 => 13,  61 => 12,  58 => 11,  55 => 10,  53 => 9,  50 => 8,  47 => 7,  41 => 3,  35 => 2,  31 => 1,  29 => 5,  27 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "classroom/course/list.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/classroom/course/list.html.twig");
    }
}
