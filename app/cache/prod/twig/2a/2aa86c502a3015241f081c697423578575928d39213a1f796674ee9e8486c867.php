<?php

/* classroom/dashboard-nav.html.twig */
class __TwigTemplate_27e3f8c94ba0441bc70d2c9b6e213f7061f88ba45dfe22a32d090ef142a24eeb extends Twig_Template
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
        echo "<div class=\"nav-btn-tab\">
  <ul class=\"nav nav-tabs\" role=\"tablist\">
    <li role=\"presentation\" class=\"";
        // line 3
        if (((isset($context["nav"]) ? $context["nav"] : null) == "introduction")) {
            echo "active";
        }
        echo "\"><a  href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_introductions", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("介绍"), "html", null, true);
        echo "</a></li>

    ";
        // line 5
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->isPluginInstalled("ClassroomPlan")) {
            // line 6
            echo "      ";
            $context["classroomPlan"] = _twig_default_filter($this->env->getExtension('AppBundle\Twig\DataExtension')->getData("GetClassroomPlanByClassroomId", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), null);
            // line 7
            echo "      ";
            if (((((array_key_exists("classroomPlan", $context)) ? (_twig_default_filter((isset($context["classroomPlan"]) ? $context["classroomPlan"] : null), null)) : (null)) && ($this->getAttribute((isset($context["classroomPlan"]) ? $context["classroomPlan"] : null), "status", array()) == "published")) && $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()))) {
                // line 8
                echo "        ";
                $context["planMember"] = _twig_default_filter($this->env->getExtension('AppBundle\Twig\DataExtension')->getData("UserClassroomPlanTaskNumInfo", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "userId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()))), null);
                // line 9
                echo "      ";
            }
            // line 10
            echo "    ";
        }
        // line 11
        echo "    ";
        if ( !((array_key_exists("planMember", $context)) ? (_twig_default_filter((isset($context["planMember"]) ? $context["planMember"] : null), null)) : (null))) {
            // line 12
            echo "      <li role=\"presentation\" class=\"";
            if (((isset($context["nav"]) ? $context["nav"] : null) == "course")) {
                echo "active";
            }
            echo "\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_courses", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程"), "html", null, true);
            echo " <small >(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "courseNum", array()), "html", null, true);
            echo ")</small></a></li>
    ";
        }
        // line 14
        echo "
    ";
        // line 15
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->isPluginInstalled("ClassroomPlan")) {
            // line 16
            echo "      ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ClassroomPlanBundle:ClassroomPlan:planNav", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "nav" => (isset($context["nav"]) ? $context["nav"] : null))));
            echo "
    ";
        }
        // line 18
        echo "  ";
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "showable", array()) || ( !$this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "showable", array()) && (isset($context["member"]) ? $context["member"] : null)))) {
            // line 19
            echo "    <li role=\"presentation\" class=\"";
            if (((isset($context["nav"]) ? $context["nav"] : null) == "review")) {
                echo "active";
            }
            echo "\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_reviews", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("评价"), "html", null, true);
            echo " <small >(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "ratingNum", array()), "html", null, true);
            echo ")</small></a></li>

    <li role=\"presentation\" class=\"";
            // line 21
            if (((isset($context["nav"]) ? $context["nav"] : null) == "thread")) {
                echo "active";
            }
            echo "\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_threads", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("话题"), "html", null, true);
            echo " <small >(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "threadNum", array()), "html", null, true);
            echo ")</small></a></li>

    <li role=\"presentation\" class=\"";
            // line 23
            if (((isset($context["nav"]) ? $context["nav"] : null) == "note")) {
                echo "active";
            }
            echo "\"><a  href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_course_notes_list", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("笔记"), "html", null, true);
            echo " <small >(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "noteNum", array()), "html", null, true);
            echo ")</small></a></li>
  ";
        }
        // line 25
        echo "
    <li role=\"presentation\" class=\"";
        // line 26
        if (((isset($context["nav"]) ? $context["nav"] : null) == "teachers")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_teachers", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("师资"), "html", null, true);
        echo "</a></li>

  </ul>
  
  ";
        // line 30
        if ((isset($context["canManageClassroom"]) ? $context["canManageClassroom"] : null)) {
            // line 31
            echo "  <div class=\"btnbar hidden-xs\">
    <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("announcement_add", array("targetType" => "classroom", "targetId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-link\">
      <i class=\"es-icon es-icon-anonymous-iconfont\"></i>";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("公告"), "html", null, true);
            echo "
    </a>
  </div>
  ";
        }
        // line 37
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "classroom/dashboard-nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 37,  147 => 33,  143 => 32,  140 => 31,  138 => 30,  125 => 26,  122 => 25,  109 => 23,  96 => 21,  82 => 19,  79 => 18,  73 => 16,  71 => 15,  68 => 14,  54 => 12,  51 => 11,  48 => 10,  45 => 9,  42 => 8,  39 => 7,  36 => 6,  34 => 5,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "classroom/dashboard-nav.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/classroom/dashboard-nav.html.twig");
    }
}
