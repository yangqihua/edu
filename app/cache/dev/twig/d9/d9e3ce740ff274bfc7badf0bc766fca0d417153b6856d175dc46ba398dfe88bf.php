<?php

/* es-bar/left-list/study-center.html.twig */
class __TwigTemplate_06d1e5c6c9ce5662cc9b83e3dfd41e98c37ebd0f15e3b8d59dc80eb6c8e8a555 extends Twig_Template
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
        $__internal_c78560f6f5c0dc421b6221493f6a29b1c7b94e0d19a9253476fb63b87ea59471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c78560f6f5c0dc421b6221493f6a29b1c7b94e0d19a9253476fb63b87ea59471->enter($__internal_c78560f6f5c0dc421b6221493f6a29b1c7b94e0d19a9253476fb63b87ea59471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "es-bar/left-list/study-center.html.twig"));

        // line 1
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) && $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "isLogin", array(), "method"))) {
            // line 2
            echo "  ";
            $context["RecentLiveTasks"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("RecentLiveTasks", array("userId" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "count" => 2));
            // line 3
            echo "  <li data-id=\"#bar-user-center\" class=\"bar-user\">
    <a href=\"javascript:;\" data-url=\"";
            // line 4
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esbar_my_study_center");
            echo "\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学<br>习<br>中<br>心");
            echo "
      ";
            // line 5
            if (($context["RecentLiveTasks"] ?? $this->getContext($context, "RecentLiveTasks"))) {
                // line 6
                echo "        <span class=\"dot\"></span>
      ";
            }
            // line 8
            echo "    </a>
  </li>
";
        } else {
            // line 11
            echo "  <li data-id=\"#bar-user-center\" class=\"bar-user\">
    <a href=\"javascript:;\" data-url=\"";
            // line 12
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esbar_my_study_center");
            echo "\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学<br>习<br>中<br>心");
            echo "</a>
  </li>
";
        }
        
        $__internal_c78560f6f5c0dc421b6221493f6a29b1c7b94e0d19a9253476fb63b87ea59471->leave($__internal_c78560f6f5c0dc421b6221493f6a29b1c7b94e0d19a9253476fb63b87ea59471_prof);

    }

    public function getTemplateName()
    {
        return "es-bar/left-list/study-center.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 12,  47 => 11,  42 => 8,  38 => 6,  36 => 5,  30 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if app.user and app.user.isLogin() %}
  {% set RecentLiveTasks = data('RecentLiveTasks',{userId : app.user.id, count:2}) %}
  <li data-id=\"#bar-user-center\" class=\"bar-user\">
    <a href=\"javascript:;\" data-url=\"{{ path('esbar_my_study_center') }}\">{{'学<br>习<br>中<br>心'|trans|raw}}
      {% if RecentLiveTasks %}
        <span class=\"dot\"></span>
      {% endif %}
    </a>
  </li>
{% else %}
  <li data-id=\"#bar-user-center\" class=\"bar-user\">
    <a href=\"javascript:;\" data-url=\"{{ path('esbar_my_study_center') }}\">{{'学<br>习<br>中<br>心'|trans|raw}}</a>
  </li>
{% endif %}", "es-bar/left-list/study-center.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/es-bar/left-list/study-center.html.twig");
    }
}
