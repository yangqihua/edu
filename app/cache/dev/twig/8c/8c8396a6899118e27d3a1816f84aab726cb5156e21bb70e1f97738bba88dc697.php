<?php

/* teacher/teacher-item.html.twig */
class __TwigTemplate_b6b0dd010cd5f4a5bd26cf7a6997d7dde162c82de3d92bece91ce72816431e0d extends Twig_Template
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
        $__internal_caf4db6999b36448d65cb98c76c9ae407d4d67713b31328bb94499fc364c7ba4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caf4db6999b36448d65cb98c76c9ae407d4d67713b31328bb94499fc364c7ba4->enter($__internal_caf4db6999b36448d65cb98c76c9ae407d4d67713b31328bb94499fc364c7ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "teacher/teacher-item.html.twig"));

        // line 1
        echo "<div class=\"teacher-item\">
  <div class=\"teacher-top\">
    <a class=\"teacher-img\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute(($context["teacher"] ?? $this->getContext($context, "teacher")), "id", array()))), "html", null, true);
        echo "\">
      <img class=\"avatar-lg\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute(($context["teacher"] ?? $this->getContext($context, "teacher")), "largeAvatar", array()), "avatar.png"), "html", null, true);
        echo "\" alt=\"\">
    </a>
    <h3 class=\"title\">
      <a class=\"link-dark\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute(($context["teacher"] ?? $this->getContext($context, "teacher")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["teacher"] ?? $this->getContext($context, "teacher")), "nickname", array()), "html", null, true);
        echo "</a>
    </h3>
    <div class=\"position\">
      ";
        // line 10
        if ($this->getAttribute(($context["teacher"] ?? $this->getContext($context, "teacher")), "title", array())) {
            // line 11
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["teacher"] ?? $this->getContext($context, "teacher")), "title", array()), "html", null, true);
            echo "
      ";
        } else {
            // line 13
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无头衔"), "html", null, true);
            echo "
      ";
        }
        // line 15
        echo "    </div>
  </div>
  <div class=\"teacher-bottom\">
    <div class=\"about\">
      ";
        // line 19
        if ($this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "about", array())) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('AppBundle\Twig\WebExtension')->plainTextFilter($this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "about", array()), 30);
            echo "
      ";
        } else {
            // line 22
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无简介"), "html", null, true);
            echo "
      ";
        }
        // line 24
        echo "    </div>
    <div class=\"metas\">
      ";
        // line 26
        if (( !$this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) || ($this->getAttribute(($context["teacher"] ?? $this->getContext($context, "teacher")), "id", array()) != $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array())))) {
            // line 27
            echo "        <a class=\"btn btn-primary btn-sm follow-btn\" href=\"javascript:;\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_follow", array("id" => $this->getAttribute(($context["teacher"] ?? $this->getContext($context, "teacher")), "id", array()))), "html", null, true);
            echo "\" ";
            if (($context["isFollowed"] ?? $this->getContext($context, "isFollowed"))) {
                echo " style=\"display:none;\"";
            }
            echo " data-loggedin=";
            if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) && $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "isLogin", array(), "method"))) {
                echo "\"1\"";
            } else {
                echo "\"0\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关注"), "html", null, true);
            echo "</a>
        <a class=\"btn btn-default btn-sm unfollow-btn\" href=\"javascript:;\" data-url=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_unfollow", array("id" => $this->getAttribute(($context["teacher"] ?? $this->getContext($context, "teacher")), "id", array()))), "html", null, true);
            echo "\" ";
            if ( !($context["isFollowed"] ?? $this->getContext($context, "isFollowed"))) {
                echo " style=\"display:none;\" ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已关注"), "html", null, true);
            echo "</a>
        <a class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\"  data-url=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_create", array("toId" => $this->getAttribute(($context["teacher"] ?? $this->getContext($context, "teacher")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("私信"), "html", null, true);
            echo "</a>
      ";
        }
        // line 31
        echo "    </div>
  </div>
</div>
";
        
        $__internal_caf4db6999b36448d65cb98c76c9ae407d4d67713b31328bb94499fc364c7ba4->leave($__internal_caf4db6999b36448d65cb98c76c9ae407d4d67713b31328bb94499fc364c7ba4_prof);

    }

    public function getTemplateName()
    {
        return "teacher/teacher-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 31,  111 => 29,  101 => 28,  84 => 27,  82 => 26,  78 => 24,  72 => 22,  66 => 20,  64 => 19,  58 => 15,  52 => 13,  46 => 11,  44 => 10,  36 => 7,  30 => 4,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"teacher-item\">
  <div class=\"teacher-top\">
    <a class=\"teacher-img\" href=\"{{ path('user_show', {id:teacher.id}) }}\">
      <img class=\"avatar-lg\" src=\"{{ filepath(teacher.largeAvatar, 'avatar.png') }}\" alt=\"\">
    </a>
    <h3 class=\"title\">
      <a class=\"link-dark\" href=\"{{ path('user_show', {id:teacher.id}) }}\">{{ teacher.nickname }}</a>
    </h3>
    <div class=\"position\">
      {% if teacher.title %}
        {{ teacher.title }}
      {% else %}
        {{'暂无头衔'|trans}}
      {% endif %}
    </div>
  </div>
  <div class=\"teacher-bottom\">
    <div class=\"about\">
      {% if profile.about %}
        {{ profile.about|plain_text(30) }}
      {% else %}
        {{'暂无简介'|trans}}
      {% endif %}
    </div>
    <div class=\"metas\">
      {% if not app.user or (teacher.id != app.user.id) %}
        <a class=\"btn btn-primary btn-sm follow-btn\" href=\"javascript:;\" data-url=\"{{ path('user_follow', {id:teacher.id}) }}\" {% if isFollowed %} style=\"display:none;\"{% endif %} data-loggedin={% if app.user and app.user.isLogin() %}\"1\"{% else %}\"0\"{% endif %}>{{'关注'|trans}}</a>
        <a class=\"btn btn-default btn-sm unfollow-btn\" href=\"javascript:;\" data-url=\"{{ path('user_unfollow', {id:teacher.id}) }}\" {% if not isFollowed %} style=\"display:none;\" {% endif %}>{{'已关注'|trans}}</a>
        <a class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\"  data-url=\"{{path('message_create', {toId:teacher.id})}}\">{{'私信'|trans}}</a>
      {% endif %}
    </div>
  </div>
</div>
", "teacher/teacher-item.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/teacher/teacher-item.html.twig");
    }
}
