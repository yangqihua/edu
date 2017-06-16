<?php

/* course/block/related-courses.html.twig */
class __TwigTemplate_648d1cd864099f4471fb16216b86e412de547187b4264d99b0355893e715a0f2 extends Twig_Template
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
        if (_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.relatedCourses"), 0)) {
            // line 2
            echo "  ";
            $context["relatedCourseSets"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("RelatedCourseSets", array("courseSetId" => (isset($context["courseSetId"]) ? $context["courseSetId"] : null), "count" => 4));
            // line 3
            echo "  ";
            if ( !twig_test_empty((isset($context["relatedCourseSets"]) ? $context["relatedCourseSets"] : null))) {
                // line 4
                echo "    <div class=\"panel panel-default hidden-xs pt10\">
      ";
                // line 5
                $this->loadTemplate("course-set/block/course-block-list.html.twig", "course/block/related-courses.html.twig", 5)->display(array_merge($context, array("courseSets" => (isset($context["relatedCourseSets"]) ? $context["relatedCourseSets"] : null), "ref" => "relatedCourseSets")));
                // line 6
                echo "    </div>
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "course/block/related-courses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 6,  30 => 5,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/block/related-courses.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/course/block/related-courses.html.twig");
    }
}
