<?php

/* course/tabs/tasks.html.twig */
class __TwigTemplate_5d27a6f24281777a8234ec694b54f96d948412a99ec86e971a1b4ec96d77ea1d extends Twig_Template
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
        $this->loadTemplate((("course/task-list/" . $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "courseType", array())) . "-task-list.html.twig"), "course/tabs/tasks.html.twig", 1)->display($context);
        // line 2
        echo "
";
    }

    public function getTemplateName()
    {
        return "course/tabs/tasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/tabs/tasks.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/course/tabs/tasks.html.twig");
    }
}
