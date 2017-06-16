<?php

/* classroom/introduction.html.twig */
class __TwigTemplate_8d9ed3e4c91939210d366d873e4802a0fd9cfb4047527d2096d234ca29a63a4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("classroom/content-layout.html.twig", "classroom/introduction.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'keywords' => array($this, 'block_keywords'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "classroom/content-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["nav"] = "introduction";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        echo $this->env->getExtension('AppBundle\Twig\WebExtension')->plainTextFilter(((array_key_exists("classroomDescription", $context)) ? (_twig_default_filter((isset($context["classroomDescription"]) ? $context["classroomDescription"] : null), "")) : ("")), 100);
    }

    // line 5
    public function block_keywords($context, array $blocks = array())
    {
        $this->displayParentBlock("keywords", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "  <div class=\"class-about\">
    ";
        // line 10
        $context["eventReportParams"] = array("user-id" => (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "id", array()), 0)) : (0)));
        // line 11
        echo "    ";
        $this->loadTemplate("event_report.html.twig", "classroom/introduction.html.twig", 11)->display(array_merge($context, array("eventName" => "classroom.view", "subjectType" => "classroom", "subjectId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "eventReportParams" => (isset($context["eventReportParams"]) ? $context["eventReportParams"] : null))));
        // line 12
        echo "    ";
        if (twig_test_empty((isset($context["introduction"]) ? $context["introduction"] : null))) {
            // line 13
            echo "      <p class=\"mvl tac color-gray\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无介绍！"), "html", null, true);
            echo "</p>
    ";
        } else {
            // line 15
            echo "      ";
            echo (isset($context["introduction"]) ? $context["introduction"] : null);
            echo "
    ";
        }
        // line 17
        echo "  </div>

";
    }

    public function getTemplateName()
    {
        return "classroom/introduction.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 17,  72 => 15,  66 => 13,  63 => 12,  60 => 11,  58 => 10,  55 => 9,  52 => 8,  46 => 5,  40 => 4,  34 => 2,  30 => 1,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "classroom/introduction.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/classroom/introduction.html.twig");
    }
}
