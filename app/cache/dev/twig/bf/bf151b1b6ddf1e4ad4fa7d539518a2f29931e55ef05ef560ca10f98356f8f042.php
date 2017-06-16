<?php

/* classroom/class-grid.html.twig */
class __TwigTemplate_05c594889cb9fdebab227dbdb5283ecde214788e78a11595a558faeee171cddc extends Twig_Template
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
        $__internal_8a69a837add98c666172e3ebc4d3a2cebe6eca3b52a26b155006f3ef0940a5f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a69a837add98c666172e3ebc4d3a2cebe6eca3b52a26b155006f3ef0940a5f4->enter($__internal_8a69a837add98c666172e3ebc4d3a2cebe6eca3b52a26b155006f3ef0940a5f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "classroom/class-grid.html.twig"));

        // line 1
        echo "<div class=\"class-item\">
  <div class=\"class-img-wrap\">
    <a class=\"class-img\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute(($context["classroom"] ?? $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
        echo "\">
      ";
        // line 4
        echo $this->env->getExtension('AppBundle\Twig\WebExtension')->makeLazyImg($this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute(($context["classroom"] ?? $this->getContext($context, "classroom")), "middlePicture", array()), "classroom.png"), "img-responsive", $this->getAttribute(($context["classroom"] ?? $this->getContext($context, "classroom")), "title", array()), "lazyload_class.png");
        echo "
    </a>
    <div class=\"mask\">
      ";
        // line 7
        $context["classroomMember"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("ClassroomMember", array("classroomId" => $this->getAttribute(($context["classroom"] ?? $this->getContext($context, "classroom")), "id", array()), "userId" => (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "id", array()), 0)) : (0))));
        // line 8
        echo "
      ";
        // line 9
        if (((array_key_exists("classroomMember", $context)) ? (_twig_default_filter(($context["classroomMember"] ?? $this->getContext($context, "classroomMember")), false)) : (false))) {
            // line 10
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute(($context["classroom"] ?? $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("继续学习"), "html", null, true);
            echo "</a>
      ";
        } else {
            // line 12
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute(($context["classroom"] ?? $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("立即加入"), "html", null, true);
            echo "</a>
      ";
        }
        // line 14
        echo "    </div>
  </div>
  <h3><a class=\"link-dark\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute(($context["classroom"] ?? $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["classroom"] ?? $this->getContext($context, "classroom")), "title", array()), "html", null, true);
        echo "</a></h3>
  <div class=\"metas\">";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("共有%courseNum%门课程", array("%courseNum%" => sprintf("<span>%d</span>", $this->getAttribute(($context["classroom"] ?? $this->getContext($context, "classroom")), "courseNum", array()))));
        echo "</div>
</div>";
        
        $__internal_8a69a837add98c666172e3ebc4d3a2cebe6eca3b52a26b155006f3ef0940a5f4->leave($__internal_8a69a837add98c666172e3ebc4d3a2cebe6eca3b52a26b155006f3ef0940a5f4_prof);

    }

    public function getTemplateName()
    {
        return "classroom/class-grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 17,  63 => 16,  59 => 14,  51 => 12,  43 => 10,  41 => 9,  38 => 8,  36 => 7,  30 => 4,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"class-item\">
  <div class=\"class-img-wrap\">
    <a class=\"class-img\" href=\"{{ path('classroom_show', {id:classroom.id}) }}\">
      {{ lazy_img(filepath(classroom.middlePicture, 'classroom.png'), 'img-responsive', classroom.title, 'lazyload_class.png') }}
    </a>
    <div class=\"mask\">
      {% set classroomMember = data('ClassroomMember', {classroomId:classroom.id, userId: app.user.id|default(0)}) %}

      {% if classroomMember|default(false) %}
        <a href=\"{{ path('classroom_show', {id:classroom.id}) }}\" class=\"btn btn-warning\">{{ '继续学习'|trans }}</a>
      {% else %}
        <a href=\"{{ path('classroom_show', {id:classroom.id}) }}\" class=\"btn btn-warning\">{{ '立即加入'|trans }}</a>
      {% endif %}
    </div>
  </div>
  <h3><a class=\"link-dark\" href=\"{{ path('classroom_show', {id:classroom.id}) }}\">{{ classroom.title }}</a></h3>
  <div class=\"metas\">{{ '共有%courseNum%门课程'|trans({'%courseNum%': '<span>%d</span>'|format(classroom.courseNum) })|raw }}</div>
</div>", "classroom/class-grid.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/classroom/class-grid.html.twig");
    }
}
