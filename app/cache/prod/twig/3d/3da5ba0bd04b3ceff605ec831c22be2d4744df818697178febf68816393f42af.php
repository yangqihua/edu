<?php

/* course/widgets/belong-classroom.html.twig */
class __TwigTemplate_c33d4709caf2ba80e0e1d4c49ee2d5a239ed0772640df79a7bdfbff7291cdd37 extends Twig_Template
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
        $context["classroom"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("Classroom", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array())));
        // line 2
        if (((array_key_exists("classroom", $context)) ? (_twig_default_filter((isset($context["classroom"]) ? $context["classroom"] : null), null)) : (null))) {
            // line 3
            echo "  <div class=\"panel panel-default belongs-class\">
    <div class=\"panel-heading\">
      <h3 class=\"panel-title\"> <i class=\"es-icon es-icon-locallibrary\"></i>
        ";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("所属%name%", array("%name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")))), "html", null, true);
            echo "
      </h3>
    </div>
    <div class=\"panel-body\">
        <div class=\"media\">
          <div class=\"media-left\">
            <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "smallPicture", array()), "classroom.png"), "html", null, true);
            echo "\" alt=\"\"></a>
          </div>
          <div class=\"media-body\">
            <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
            echo "</a>
          </div>
        </div>
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "course/widgets/belong-classroom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 15,  37 => 12,  28 => 6,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/widgets/belong-classroom.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/course/widgets/belong-classroom.html.twig");
    }
}
