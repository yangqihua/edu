<?php

/* user/friend.html.twig */
class __TwigTemplate_f94c115153caa5889be8be630bc8b7c534d38e97eccffdff74370c8813031406 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("user/layout.html.twig", "user/friend.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "user/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["pageNav"] = "friend";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "

<ul class=\"nav nav-pills mbl\">
  <li ";
        // line 11
        if ((($context["friendNav"] ?? null) == "following")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_following", array("id" => $this->getAttribute(($context["user"] ?? null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关注"), "html", null, true);
        echo "</a></li>
  <li ";
        // line 12
        if ((($context["friendNav"] ?? null) == "follower")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_follower", array("id" => $this->getAttribute(($context["user"] ?? null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("粉丝"), "html", null, true);
        echo "</a></li>
</ul>

<div class=\"row\">
  ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["friends"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["friend"]) {
            if (($context["friends"] ?? null)) {
                // line 17
                echo "    ";
                $context["isFollowed"] = _twig_default_filter(twig_in_filter($this->getAttribute($context["friend"], "id", array()), ($context["myfollowings"] ?? null)), false);
                // line 18
                echo "    <div class=\"col-md-3\">
      <div class=\"teacher-item\">
        <div class=\"teacher-top\">
          <a class=\"teacher-img\" href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["friend"], "id", array()))), "html", null, true);
                echo "\">
            <img class=\"avatar-lg\" src=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute($context["friend"], "largeAvatar", array()), "avatar.png"), "html", null, true);
                echo "\" alt=\"\">
          </a>
          <h3 class=\"title\">
            <a class=\"link-dark\" href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["friend"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "nickname", array()), "html", null, true);
                echo "</a>
          </h3>
          <div class=\"position\">
            ";
                // line 28
                if ($this->getAttribute($context["friend"], "title", array())) {
                    // line 29
                    echo "              ";
                    echo $this->env->getExtension('AppBundle\Twig\WebExtension')->subTextFilter($this->getAttribute($context["friend"], "title", array()), 12);
                    echo "
            ";
                } else {
                    // line 31
                    echo "              ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无头衔"), "html", null, true);
                    echo "
            ";
                }
                // line 33
                echo "          </div>
        </div>

        <div class=\"teacher-bottom\">
          <div class=\"about\">
            ";
                // line 38
                if ((($this->getAttribute(($context["allUserProfile"] ?? null), $this->getAttribute($context["friend"], "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["allUserProfile"] ?? null), $this->getAttribute($context["friend"], "id", array()), array(), "array"), "")) : (""))) {
                    // line 39
                    echo "              ";
                    echo $this->env->getExtension('AppBundle\Twig\WebExtension')->subTextFilter($this->getAttribute($this->getAttribute(($context["allUserProfile"] ?? null), $this->getAttribute($context["friend"], "id", array()), array(), "array"), "about", array()), 30);
                    echo "
            ";
                }
                // line 41
                echo "          </div>
          <div class=\"metas\">
            ";
                // line 43
                if (( !$this->getAttribute(($context["app"] ?? null), "user", array()) || ($this->getAttribute($context["friend"], "id", array()) != $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array())))) {
                    // line 44
                    echo "              <a class=\"btn btn-primary btn-sm follow-btn\" href=\"javascript:;\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_follow", array("id" => $this->getAttribute($context["friend"], "id", array()))), "html", null, true);
                    echo "\" ";
                    if (($context["isFollowed"] ?? null)) {
                        echo " style=\"display:none;\"";
                    }
                    echo " data-loggedin=";
                    if (($this->getAttribute(($context["app"] ?? null), "user", array()) && $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "isLogin", array(), "method"))) {
                        echo "\"1\"";
                    } else {
                        echo "\"0\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关注"), "html", null, true);
                    echo "</a>
              <a class=\"btn btn-default btn-sm unfollow-btn\" href=\"javascript:;\" data-url=\"";
                    // line 45
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_unfollow", array("id" => $this->getAttribute($context["friend"], "id", array()))), "html", null, true);
                    echo "\" ";
                    if ( !($context["isFollowed"] ?? null)) {
                        echo " style=\"display:none;\" ";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已关注"), "html", null, true);
                    echo "</a>
              <a class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\"  data-url=\"";
                    // line 46
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_create", array("toId" => $this->getAttribute($context["friend"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("私信"), "html", null, true);
                    echo "</a>
            ";
                }
                // line 48
                echo "          </div>
        </div>
      </div>
    </div>
  ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 53
            echo "    ";
            if ((($context["friendNav"] ?? null) == "following")) {
                // line 54
                echo "      <div class=\"empty\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无关注！"), "html", null, true);
                echo "</div>
    ";
            } elseif ((            // line 55
($context["friendNav"] ?? null) == "follower")) {
                // line 56
                echo "      <div class=\"empty\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无粉丝！"), "html", null, true);
                echo "</div>
    ";
            }
            // line 58
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friend'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "</div>
";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? null), "paginator", array(0 => ($context["paginator"] ?? null)), "method"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "user/friend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 60,  202 => 59,  196 => 58,  190 => 56,  188 => 55,  183 => 54,  180 => 53,  170 => 48,  163 => 46,  153 => 45,  136 => 44,  134 => 43,  130 => 41,  124 => 39,  122 => 38,  115 => 33,  109 => 31,  103 => 29,  101 => 28,  93 => 25,  87 => 22,  83 => 21,  78 => 18,  75 => 17,  69 => 16,  56 => 12,  46 => 11,  41 => 8,  38 => 7,  32 => 3,  28 => 1,  26 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "user/friend.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/user/friend.html.twig");
    }
}
