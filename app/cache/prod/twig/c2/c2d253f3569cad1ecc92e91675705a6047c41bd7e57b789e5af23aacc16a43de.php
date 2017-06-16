<?php

/* user/card-show.html.twig */
class __TwigTemplate_da8623ccbda1bf6fe5361c9c966e0ed5b84ed880aa6644cf031ea2d98e472a6b extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "user/card-show.html.twig", 1);
        // line 2
        echo "
<div id=\"user-card-";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true);
        echo "\" class=\"js-card-content\" data-user-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true);
        echo "\">
  <div class=\"card-header media-middle\">
    <div class=\"media\">
      <div class=\"media-left\">
        <div class=\"user-avatar\">
          ";
        // line 8
        echo $context["web_macro"]->getuser_avatar((isset($context["user"]) ? $context["user"] : null), "", "avatar-md", false);
        echo "
          ";
        // line 9
        if (twig_in_filter("ROLE_TEACHER", $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "roles", array()))) {
            // line 10
            echo "            <span class=\"icon-user-status\"><i class=\"es-icon es-icon-school\"></i></span
          >
          ";
        } elseif ($this->env->getExtension('AppBundle\Twig\WebExtension')->isPluginInstalled("vip")) {
            // line 13
            echo "            ";
            $context["userVip"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->getUserVipLevel($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()));
            // line 14
            echo "              ";
            if ((((isset($context["userVip"]) ? $context["userVip"] : null) && (isset($context["levels"]) ? $context["levels"] : null)) && (twig_date_format_filter($this->env, $this->getAttribute((isset($context["userVip"]) ? $context["userVip"] : null), "deadline", array()), "Y-m-d") > twig_date_format_filter($this->env, (isset($context["nowTime"]) ? $context["nowTime"] : null), "Y-m-d")))) {
                // line 15
                echo "                <span class=\"icon-user-status\"><img src=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["levels"]) ? $context["levels"] : null), $this->getAttribute((isset($context["userVip"]) ? $context["userVip"] : null), "levelId", array()), array(), "array", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["levels"]) ? $context["levels"] : null), $this->getAttribute((isset($context["userVip"]) ? $context["userVip"] : null), "levelId", array()), array(), "array", false, true), "icon", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/v2/img/vip/vip_bronze.jpg"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/v2/img/vip/vip_bronze.jpg"))), "html", null, true);
                echo "\" alt=\"\"></span>
              ";
            }
            // line 17
            echo "            ";
        }
        // line 18
        echo "        </div>
      </div>
      <div class=\"media-body\">
        <div class=\"title\">
          ";
        // line 22
        echo $context["web_macro"]->getuser_link((isset($context["user"]) ? $context["user"] : null), "", false);
        echo "
        </div>
        <div class=\"content\">
          ";
        // line 25
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "title", array())) {
            // line 26
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "title", array()), "html", null, true);
            echo "
          ";
        }
        // line 28
        echo "        </div>
      </div>
    </div>
    ";
        // line 31
        if (( !$this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()) != $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array())))) {
            // line 32
            echo "      <div class=\"metas\">
        <a class=\"btn btn-primary btn-xs follow-btn\" href=\"javascript:;\" data-url=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_follow", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
            echo "\" ";
            if ((isset($context["isFollowed"]) ? $context["isFollowed"] : null)) {
                echo " style=\"display:none;\"";
            }
            echo " data-loggedin=";
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "isLogin", array(), "method"))) {
                echo "\"1\"";
            } else {
                echo "\"0\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关注"), "html", null, true);
            echo "</a>
        <a class=\"btn btn-default btn-xs unfollow-btn\" href=\"javascript:;\"  data-url=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_unfollow", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
            echo "\" ";
            if ( !(isset($context["isFollowed"]) ? $context["isFollowed"] : null)) {
                echo "style=\"display:none;\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已关注"), "html", null, true);
            echo "</a>
        <a class=\"btn btn-default btn-xs direct-message-btn\" herf=\"javascript:;\" data-toggle=\"modal\" data-backdrop=\"static\" data-target=\"#modal\" data-url=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_create", array("toId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("私信"), "html", null, true);
            echo "</a>
      </div>
    ";
        }
        // line 38
        echo "  </div>
  <div class=\"card-body\">
    ";
        // line 40
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "signature", array())) {
            // line 41
            echo "      ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "signature", array()), "html", null, true);
            echo "
    ";
        } else {
            // line 43
            echo "      ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("还没有签名"), "html", null, true);
            echo "
    ";
        }
        // line 45
        echo "  </div>
  <div class=\"card-footer clearfix\">
    <span><a class=\"link-dark\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_learn", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "learningNum", array()), "html", null, true);
        echo "<br>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("在学"), "html", null, true);
        echo "</a></span>
    <span><a class=\"link-dark\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_following", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "followingNum", array()), "html", null, true);
        echo "<br>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关注"), "html", null, true);
        echo "</a></span>
    <span><a class=\"link-dark\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_follower", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "followerNum", array()), "html", null, true);
        echo "<br>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("粉丝"), "html", null, true);
        echo "</a></span>
  </div>

</div>

";
    }

    public function getTemplateName()
    {
        return "user/card-show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 49,  154 => 48,  146 => 47,  142 => 45,  136 => 43,  130 => 41,  128 => 40,  124 => 38,  116 => 35,  106 => 34,  90 => 33,  87 => 32,  85 => 31,  80 => 28,  74 => 26,  72 => 25,  66 => 22,  60 => 18,  57 => 17,  51 => 15,  48 => 14,  45 => 13,  40 => 10,  38 => 9,  34 => 8,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "user/card-show.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/user/card-show.html.twig");
    }
}
