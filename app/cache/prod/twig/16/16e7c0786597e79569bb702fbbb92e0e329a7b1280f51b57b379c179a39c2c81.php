<?php

/* user/layout.html.twig */
class __TwigTemplate_3f23a7f7b19456b62f31e42f4820318a8d36dbc53ef00a3b1fc9abacafb64be4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "user/layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'top_content' => array($this, 'block_top_content'),
            'content' => array($this, 'block_content'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 6
        $context["bodyClass"] = "userpage bg-blank";
        // line 7
        $context["pageNav"] = ((array_key_exists("pageNav", $context)) ? (_twig_default_filter(($context["pageNav"] ?? null), null)) : (null));
        // line 9
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/echo-js.js", 1 => "libs/jquery-blurr.js", 2 => "app/js/user/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        if ((($context["pageNav"] ?? null) == "teach")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("在教课程"), "html", null, true);
            echo " - ";
        } elseif ((($context["pageNav"] ?? null) == "learn")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("在学课程"), "html", null, true);
            echo " - ";
        } elseif ((($context["pageNav"] ?? null) == "favorited")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("收藏的课程"), "html", null, true);
            echo " - ";
        } elseif ((($context["pageNav"] ?? null) == "group")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("加入的小组"), "html", null, true);
            echo " - ";
        } elseif ((($context["pageNav"] ?? null) == "friend")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关注/粉丝"), "html", null, true);
            echo " - ";
        } else {
            echo "";
        }
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%nickname%的个人主页", array("%nickname%" => $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("user.nickname"))), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_keywords($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "title", array()), "html", null, true);
    }

    // line 5
    public function block_description($context, array $blocks = array())
    {
        echo $this->env->getExtension('AppBundle\Twig\WebExtension')->plainTextFilter((($this->getAttribute(($context["user"] ?? null), "about", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["user"] ?? null), "about", array()), "")) : ("")), 100);
    }

    // line 11
    public function block_top_content($context, array $blocks = array())
    {
        // line 12
        echo "  ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:User:headerBlock", array("user" => ($context["user"] ?? null))));
        echo "
";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "  <ul class=\"nav nav-tabs clearfix\">
    <li ";
        // line 17
        if ((($context["pageNav"] ?? null) == "about")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_about", array("id" => $this->getAttribute(($context["user"] ?? null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("个人介绍"), "html", null, true);
        echo "</a></li>
  \t";
        // line 18
        if (twig_in_filter("ROLE_TEACHER", $this->getAttribute(($context["user"] ?? null), "roles", array()))) {
            // line 19
            echo "\t    <li ";
            if ((($context["pageNav"] ?? null) == "teach")) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_teach", array("id" => $this->getAttribute(($context["user"] ?? null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("在教课程"), "html", null, true);
            echo "</a></li>
    ";
        }
        // line 21
        echo "
    ";
        // line 22
        if (twig_in_filter("ROLE_TEACHER", $this->getAttribute(($context["user"] ?? null), "roles", array()))) {
            // line 23
            echo "      <li ";
            if ((($context["pageNav"] ?? null) == "teaching")) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_teaching_classrooms", array("id" => $this->getAttribute(($context["user"] ?? null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("在教%name%", array("%name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")))), "html", null, true);
            echo "</a></li>
    ";
        }
        // line 25
        echo "    <li ";
        if ((($context["pageNav"] ?? null) == "learn")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_learn", array("id" => $this->getAttribute(($context["user"] ?? null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("在学课程"), "html", null, true);
        echo "</a></li>
    <li ";
        // line 26
        if ((($context["pageNav"] ?? null) == "learning")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_learning_classrooms", array("id" => $this->getAttribute(($context["user"] ?? null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("在学%name%", array("%name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")))), "html", null, true);
        echo "</a></li>


    <li ";
        // line 29
        if ((($context["pageNav"] ?? null) == "favorited")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_favorited", array("id" => $this->getAttribute(($context["user"] ?? null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("收藏课程"), "html", null, true);
        echo "</a></li>
    <li ";
        // line 30
        if ((($context["pageNav"] ?? null) == "group")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_group", array("id" => $this->getAttribute(($context["user"] ?? null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("加入小组"), "html", null, true);
        echo "</a></li>
    <li ";
        // line 31
        if ((($context["pageNav"] ?? null) == "friend")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_following", array("id" => $this->getAttribute(($context["user"] ?? null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关注"), "html", null, true);
        echo "&nbsp;/&nbsp;";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("粉丝"), "html", null, true);
        echo "</a></li>
  </ul>
  ";
        // line 33
        $this->displayBlock('main', $context, $blocks);
    }

    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "user/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 33,  178 => 31,  168 => 30,  158 => 29,  146 => 26,  135 => 25,  123 => 23,  121 => 22,  118 => 21,  106 => 19,  104 => 18,  94 => 17,  91 => 16,  88 => 15,  81 => 12,  78 => 11,  72 => 5,  66 => 4,  40 => 3,  36 => 1,  34 => 9,  32 => 7,  30 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "user/layout.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/user/layout.html.twig");
    }
}
