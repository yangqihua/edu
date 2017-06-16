<?php

/* es-bar/left-list/my-learn-place.html.twig */
class __TwigTemplate_4005560b7e36bdd8fa96f311d84657933fdbb3ce2ca03b9a2e0842110b0f08ec extends Twig_Template
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
        $__internal_9096107197217d8c177ee689264b6b738116ea7c68f79add65869e0658a57102 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9096107197217d8c177ee689264b6b738116ea7c68f79add65869e0658a57102->enter($__internal_9096107197217d8c177ee689264b6b738116ea7c68f79add65869e0658a57102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "es-bar/left-list/my-learn-place.html.twig"));

        // line 1
        echo "<li data-id=\"#bar-course-list\" data-placement=\"left\" data-toggle=\"tooltip\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("我的课程/%name%", array("%name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")))), "html", null, true);
        echo "\" data-trigger=\"hover\" data-container=\".es-bar\">
  <a data-url=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esbar_my_course");
        echo "\" href=\"javascript:;\">
    <i class=\"es-icon es-icon-book\">
    </i>
  </a>
</li>";
        
        $__internal_9096107197217d8c177ee689264b6b738116ea7c68f79add65869e0658a57102->leave($__internal_9096107197217d8c177ee689264b6b738116ea7c68f79add65869e0658a57102_prof);

    }

    public function getTemplateName()
    {
        return "es-bar/left-list/my-learn-place.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<li data-id=\"#bar-course-list\" data-placement=\"left\" data-toggle=\"tooltip\" title=\"{{'我的课程/%name%'|trans({'%name%': setting('classroom.name')|default('班级'|trans)}) }}\" data-trigger=\"hover\" data-container=\".es-bar\">
  <a data-url=\"{{ path('esbar_my_course') }}\" href=\"javascript:;\">
    <i class=\"es-icon es-icon-book\">
    </i>
  </a>
</li>", "es-bar/left-list/my-learn-place.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/es-bar/left-list/my-learn-place.html.twig");
    }
}
