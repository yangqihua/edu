<?php

/* default/header.html.twig */
class __TwigTemplate_951c73a77f188ed8b918f4f9c8a5f06d8d2781a2f4eedcd72779e568722435e5 extends Twig_Template
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
        $__internal_62e11a03f21583155cfe2afad831c04ab9052b274c50071d019b4904ca4e541e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62e11a03f21583155cfe2afad831c04ab9052b274c50071d019b4904ca4e541e->enter($__internal_62e11a03f21583155cfe2afad831c04ab9052b274c50071d019b4904ca4e541e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/header.html.twig"));

        // line 1
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/default/header/index.js"));
        // line 2
        echo "
<header class=\"es-header navbar\">
  <div class=\"navbar-header\">
    <div class=\"visible-xs  navbar-mobile\">
      <a href=\"javascript:;\" class=\"navbar-more js-navbar-more\">
        <i class=\"es-icon es-icon-menu\"></i>
      </a>
      <div class=\"html-mask\"></div>
      <div class=\"nav-mobile\">
        <form class=\"navbar-form\" action=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search");
        echo "\" method=\"get\">
          <div class=\"form-group\">
            <input class=\"form-control\" placeholder=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("搜索"), "html", null, true);
        echo "\" name=\"q\">
            <button class=\"button es-icon es-icon-search\"></button>
          </div>
        </form>

        <ul class=\"nav navbar-nav\">
          ";
        // line 19
        $context["navigations"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("NavigationsTree", array());
        // line 20
        echo "          ";
        $this->loadTemplate("default/top-navigation.html.twig", "default/header.html.twig", 20)->display(array_merge($context, array("navigations" => ($context["navigations"] ?? $this->getContext($context, "navigations")), "siteNav" => ((array_key_exists("siteNav", $context)) ? (_twig_default_filter(($context["siteNav"] ?? $this->getContext($context, "siteNav")), null)) : (null)), "isMobile" => true)));
        // line 21
        echo "        </ul>
      </div>
    </div>
    <div class=\"M_header-back js-back\">
      <a><i class=\"es-icon es-icon-chevronleft\"></i></a>
    </div>
    <a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"navbar-brand\">
      ";
        // line 28
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.logo")) {
            // line 29
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath(("../" . $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.logo")), ""), "html", null, true);
            echo "\">
      ";
        } else {
            // line 31
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.name", "EDUSOHO"), "html", null, true);
            echo "
      ";
        }
        // line 33
        echo "    </a>
  </div>
  <nav class=\"collapse navbar-collapse\">
    <ul class=\"nav navbar-nav clearfix hidden-xs \" id=\"nav\">
      ";
        // line 37
        $this->loadTemplate("default/top-navigation.html.twig", "default/header.html.twig", 37)->display(array_merge($context, array("navigations" => ($context["navigations"] ?? $this->getContext($context, "navigations")), "siteNav" => ((array_key_exists("siteNav", $context)) ? (_twig_default_filter(($context["siteNav"] ?? $this->getContext($context, "siteNav")), null)) : (null)), "isMobile" => false)));
        // line 38
        echo "    </ul>
    <div class=\"navbar-user ";
        // line 39
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("esBar.enabled", 0)) {
            echo " left ";
        }
        echo "\">
      <ul class=\"nav user-nav\">
        ";
        // line 41
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 42
            echo "          <li class=\"user-avatar-li nav-hover\">
            <a href=\"javascript:;\" class=\"dropdown-toggle\">
              <img class=\"avatar-xs\" src=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "smallAvatar", array()), "avatar.png"), "html", null, true);
            echo "\">
            </a>
            <ul class=\"dropdown-menu\" role=\"menu\">
              <li role=\"presentation\" class=\"dropdown-header\">";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "nickname", array()), "html", null, true);
            echo "</li>
              <li><a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\"><i class=\"es-icon es-icon-person\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("个人主页"), "html", null, true);
            echo "</a></li>
              <li><a href=\"";
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("settings");
            echo "\"><i class=\"es-icon es-icon-setting\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("个人设置"), "html", null, true);
            echo "</a></li>
              <li class=\"hidden-lg user-nav-li-my\">
                <a href=\"";
            // line 51
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my");
            echo "\">
                  <i class=\"es-icon es-icon-eventnote\"></i>";
            // line 52
            if (twig_in_filter("ROLE_TEACHER", $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "roles", array()))) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("我的教学"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("我的学习"), "html", null, true);
            }
            // line 53
            echo "                </a>
              </li>
              <li><a href=\"";
            // line 55
            if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.coin_enabled")) {
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_coin");
            } else {
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_bill");
            }
            echo "\"><i class=\"es-icon es-icon-accountwallet\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("账户中心"), "html", null, true);
            echo "</a></li>

              ";
            // line 57
            if ($this->env->getExtension('AppBundle\Twig\PermissionExtension')->hasPermission("admin")) {
                echo "<li><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin");
                echo "\"><i class=\"es-icon es-icon-dashboard\"></i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("管理后台"), "html", null, true);
                echo "</a></li>
              ";
            }
            // line 59
            echo "
              <li class=\"hidden-lg\"><a href=\"";
            // line 60
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notification");
            echo "\"><span class=\"pull-right num\">";
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "newNotificationNum", array()) > 0)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "newNotificationNum", array()), "html", null, true);
            }
            echo "</span><i class=\"es-icon es-icon-notificationson\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("通知"), "html", null, true);
            echo "</a></li>
              <li class=\"hidden-lg\"><a href=\"";
            // line 61
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message");
            echo "\"><span class=\"pull-right num\">";
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "newMessageNum", array()) > 0)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "newMessageNum", array()), "html", null, true);
            }
            echo "</span><i class=\"es-icon es-icon-mail\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("私信"), "html", null, true);
            echo "</a></li>
              ";
            // line 62
            if (($context["mobile"] ?? $this->getContext($context, "mobile"))) {
                // line 63
                echo "                <li class=\"mobile-switch js-switch-pc visible-xs\"><a href=\"javascript:;\">
                  <i class=\"es-icon es-icon-qiehuan\"></i>";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("切换电脑版"), "html", null, true);
                echo "</a></li>
              ";
            } elseif (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("wap.enabled") == 1)) {
                // line 66
                echo "                <li class=\"mobile-switch js-switch-mobile visible-xs\"><a href=\"javascript:;\">
                  <i class=\"es-icon es-icon-qiehuan\"></i>";
                // line 67
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("切换触屏版"), "html", null, true);
                echo "</a></li>
              ";
            }
            // line 69
            echo "              <li class=\"user-nav-li-logout\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\"><i class=\"es-icon es-icon-power\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("退出登录"), "html", null, true);
            echo "</a></li>
            </ul>
          </li>
          <li class=\"visible-lg\">
            <a href=\"";
            // line 73
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my");
            echo "\">
              ";
            // line 74
            if (twig_in_filter("ROLE_TEACHER", $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "roles", array()))) {
                // line 75
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("我的教学"), "html", null, true);
                echo "
              ";
            } else {
                // line 77
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("我的学习"), "html", null, true);
                echo "
              ";
            }
            // line 79
            echo "            </a>
          </li>
          <li class=\"visible-lg nav-hover\">

            ";
            // line 83
            if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("esBar.enabled", 0) && ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "newMessageNum", array()) > 0))) {
                // line 84
                echo "              <a class=\"hasmessage\"><i class=\"es-icon es-icon-mail\"></i><span class=\"dot\"></span></a>
            ";
            } elseif (( !$this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("esBar.enabled", 0) && (($this->getAttribute($this->getAttribute(            // line 85
($context["app"] ?? $this->getContext($context, "app")), "user", array()), "newNotificationNum", array()) > 0) || ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "newMessageNum", array()) > 0)))) {
                // line 86
                echo "              <a class=\"hasmessage\"><i class=\"es-icon es-icon-mail\"></i><span class=\"dot\"></span></a>
            ";
            } else {
                // line 88
                echo "              <a><i class=\"es-icon es-icon-mail\"></i></a>
            ";
            }
            // line 90
            echo "
            <ul class=\"dropdown-menu\" role=\"menu\">
              ";
            // line 92
            if ( !$this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("esBar.enabled", 0)) {
                // line 93
                echo "                <li>
                  <a href=\"";
                // line 94
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notification");
                echo "\">
                    <span class=\"pull-right num\">";
                // line 95
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "newNotificationNum", array()) > 0)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "newNotificationNum", array()), "html", null, true);
                }
                echo "</span>
                    <i class=\"es-icon es-icon-notificationson\"></i>";
                // line 96
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("通知"), "html", null, true);
                echo "
                  </a>
                </li>
              ";
            }
            // line 100
            echo "              <li>
                <a href=\"";
            // line 101
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message");
            echo "\">
                  <span class=\"pull-right num\">";
            // line 102
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "newMessageNum", array()) > 0)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "newMessageNum", array()), "html", null, true);
            }
            echo "</span>
                  <i class=\"es-icon es-icon-mail\"></i>";
            // line 103
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("私信"), "html", null, true);
            echo "
                </a>
              </li>
            </ul>
          </li>
        ";
        } else {
            // line 109
            echo "          <li class=\"user-avatar-li nav-hover visible-xs\">
            <a href=\"javascript:;\" class=\"dropdown-toggle\">
              <img class=\"avatar-xs\" src=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/default/avatar.png"), "html", null, true);
            echo "\">
            </a>
            <ul class=\"dropdown-menu\" role=\"menu\">
              <li class=\"user-nav-li-login\"><a href=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login", array("goto" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter(($context["_target_path"] ?? $this->getContext($context, "_target_path")), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))))), "html", null, true);
            echo "\">
                <i class=\"es-icon es-icon-denglu\"></i>
                ";
            // line 116
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("登录"), "html", null, true);
            echo "</a></li>
              <li class=\"user-nav-li-register\"><a href=\"";
            // line 117
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register", array("goto" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter(($context["_target_path"] ?? $this->getContext($context, "_target_path")), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))))), "html", null, true);
            echo "\">
                <i class=\"es-icon es-icon-zhuce\"></i>
                ";
            // line 119
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("注册"), "html", null, true);
            echo "</a></li>
              ";
            // line 120
            if (($context["mobile"] ?? $this->getContext($context, "mobile"))) {
                // line 121
                echo "                <li class=\"mobile-switch js-switch-pc\"><a href=\"javascript:;\">
                  <i class=\"es-icon es-icon-qiehuan\"></i>
                  ";
                // line 123
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("切换电脑版"), "html", null, true);
                echo "</a></li>
              ";
            } elseif (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("wap.enabled") == 1)) {
                // line 125
                echo "                <li class=\"mobile-switch js-switch-mobile\"><a href=\"javascript:;\">
                  <i class=\"es-icon es-icon-qiehuan\"></i>              
                  ";
                // line 127
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("切换触屏版"), "html", null, true);
                echo "</a></li>
              ";
            }
            // line 129
            echo "            </ul>
          </li>
          <li class=\"hidden-xs\"><a href=\"";
            // line 131
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login", array("goto" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter(($context["_target_path"] ?? $this->getContext($context, "_target_path")), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("登录"), "html", null, true);
            echo "</a></li>
          <li class=\"hidden-xs\"><a href=\"";
            // line 132
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register", array("goto" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter(($context["_target_path"] ?? $this->getContext($context, "_target_path")), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("注册"), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 134
        echo "        ";
        // line 135
        echo "      </ul>
      <form class=\"navbar-form navbar-right hidden-xs hidden-sm\" action=\"";
        // line 136
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search");
        echo "\" method=\"get\">
        <div class=\"form-group\">
          <input class=\"form-control js-search\" name=\"q\" placeholder=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("搜索"), "html", null, true);
        echo "\">
          <button class=\"button es-icon es-icon-search\"></button>
        </div>
      </form>
    </div>
  </nav>
</header>";
        
        $__internal_62e11a03f21583155cfe2afad831c04ab9052b274c50071d019b4904ca4e541e->leave($__internal_62e11a03f21583155cfe2afad831c04ab9052b274c50071d019b4904ca4e541e_prof);

    }

    public function getTemplateName()
    {
        return "default/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  374 => 138,  369 => 136,  366 => 135,  364 => 134,  357 => 132,  351 => 131,  347 => 129,  342 => 127,  338 => 125,  333 => 123,  329 => 121,  327 => 120,  323 => 119,  318 => 117,  314 => 116,  309 => 114,  303 => 111,  299 => 109,  290 => 103,  284 => 102,  280 => 101,  277 => 100,  270 => 96,  264 => 95,  260 => 94,  257 => 93,  255 => 92,  251 => 90,  247 => 88,  243 => 86,  241 => 85,  238 => 84,  236 => 83,  230 => 79,  224 => 77,  218 => 75,  216 => 74,  212 => 73,  202 => 69,  197 => 67,  194 => 66,  189 => 64,  186 => 63,  184 => 62,  174 => 61,  164 => 60,  161 => 59,  152 => 57,  141 => 55,  137 => 53,  131 => 52,  127 => 51,  120 => 49,  114 => 48,  110 => 47,  104 => 44,  100 => 42,  98 => 41,  91 => 39,  88 => 38,  86 => 37,  80 => 33,  74 => 31,  68 => 29,  66 => 28,  62 => 27,  54 => 21,  51 => 20,  49 => 19,  40 => 13,  35 => 11,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% do script(['app/js/default/header/index.js']) %}

<header class=\"es-header navbar\">
  <div class=\"navbar-header\">
    <div class=\"visible-xs  navbar-mobile\">
      <a href=\"javascript:;\" class=\"navbar-more js-navbar-more\">
        <i class=\"es-icon es-icon-menu\"></i>
      </a>
      <div class=\"html-mask\"></div>
      <div class=\"nav-mobile\">
        <form class=\"navbar-form\" action=\"{{ path('search') }}\" method=\"get\">
          <div class=\"form-group\">
            <input class=\"form-control\" placeholder=\"{{'搜索'|trans}}\" name=\"q\">
            <button class=\"button es-icon es-icon-search\"></button>
          </div>
        </form>

        <ul class=\"nav navbar-nav\">
          {% set navigations = data('NavigationsTree', {}) %}
          {% include 'default/top-navigation.html.twig' with {navigations: navigations,siteNav: siteNav|default(null), isMobile: true} %}
        </ul>
      </div>
    </div>
    <div class=\"M_header-back js-back\">
      <a><i class=\"es-icon es-icon-chevronleft\"></i></a>
    </div>
    <a href=\"{{ path('homepage') }}\" class=\"navbar-brand\">
      {% if setting('site.logo') %}
        <img src=\"{{ filepath('../' ~ setting('site.logo'),'') }}\">
      {% else %}
        {{ setting('site.name', 'EDUSOHO') }}
      {% endif %}
    </a>
  </div>
  <nav class=\"collapse navbar-collapse\">
    <ul class=\"nav navbar-nav clearfix hidden-xs \" id=\"nav\">
      {% include 'default/top-navigation.html.twig' with {navigations: navigations,siteNav: siteNav|default(null), isMobile: false} %}
    </ul>
    <div class=\"navbar-user {% if setting('esBar.enabled', 0) %} left {% endif %}\">
      <ul class=\"nav user-nav\">
        {% if app.user %}
          <li class=\"user-avatar-li nav-hover\">
            <a href=\"javascript:;\" class=\"dropdown-toggle\">
              <img class=\"avatar-xs\" src=\"{{ filepath(app.user.smallAvatar, 'avatar.png') }}\">
            </a>
            <ul class=\"dropdown-menu\" role=\"menu\">
              <li role=\"presentation\" class=\"dropdown-header\">{{ app.user.nickname }}</li>
              <li><a href=\"{{ path('user_show', {id:app.user.id}) }}\"><i class=\"es-icon es-icon-person\"></i>{{'个人主页'|trans}}</a></li>
              <li><a href=\"{{ path('settings') }}\"><i class=\"es-icon es-icon-setting\"></i>{{'个人设置'|trans}}</a></li>
              <li class=\"hidden-lg user-nav-li-my\">
                <a href=\"{{ path('my') }}\">
                  <i class=\"es-icon es-icon-eventnote\"></i>{% if 'ROLE_TEACHER' in app.user.roles %}{{'我的教学'|trans}}{% else %}{{'我的学习'|trans}}{% endif %}
                </a>
              </li>
              <li><a href=\"{% if setting('coin.coin_enabled') %}{{path('my_coin')}}{% else %}{{path('my_bill')}}{% endif %}\"><i class=\"es-icon es-icon-accountwallet\"></i>{{'账户中心'|trans}}</a></li>

              {% if has_permission('admin') %}<li><a href=\"{{ path('admin') }}\"><i class=\"es-icon es-icon-dashboard\"></i>{{'管理后台'|trans}}</a></li>
              {% endif %}

              <li class=\"hidden-lg\"><a href=\"{{ path('notification') }}\"><span class=\"pull-right num\">{% if app.user.newNotificationNum > 0 %}{{ app.user.newNotificationNum }}{% endif %}</span><i class=\"es-icon es-icon-notificationson\"></i>{{'通知'|trans}}</a></li>
              <li class=\"hidden-lg\"><a href=\"{{ path('message') }}\"><span class=\"pull-right num\">{% if app.user.newMessageNum > 0 %}{{ app.user.newMessageNum }}{% endif %}</span><i class=\"es-icon es-icon-mail\"></i>{{'私信'|trans}}</a></li>
              {% if mobile %}
                <li class=\"mobile-switch js-switch-pc visible-xs\"><a href=\"javascript:;\">
                  <i class=\"es-icon es-icon-qiehuan\"></i>{{'切换电脑版'|trans}}</a></li>
              {% elseif setting('wap.enabled') == 1 %}
                <li class=\"mobile-switch js-switch-mobile visible-xs\"><a href=\"javascript:;\">
                  <i class=\"es-icon es-icon-qiehuan\"></i>{{'切换触屏版'|trans}}</a></li>
              {% endif %}
              <li class=\"user-nav-li-logout\"><a href=\"{{ path('logout') }}\"><i class=\"es-icon es-icon-power\"></i>{{'退出登录'|trans}}</a></li>
            </ul>
          </li>
          <li class=\"visible-lg\">
            <a href=\"{{ path('my') }}\">
              {% if 'ROLE_TEACHER' in app.user.roles %}
                {{'我的教学'|trans}}
              {% else %}
                {{'我的学习'|trans}}
              {% endif %}
            </a>
          </li>
          <li class=\"visible-lg nav-hover\">

            {% if setting('esBar.enabled', 0) and app.user.newMessageNum > 0 %}
              <a class=\"hasmessage\"><i class=\"es-icon es-icon-mail\"></i><span class=\"dot\"></span></a>
            {% elseif ( not setting('esBar.enabled', 0)) and ( app.user.newNotificationNum > 0 or app.user.newMessageNum > 0) %}
              <a class=\"hasmessage\"><i class=\"es-icon es-icon-mail\"></i><span class=\"dot\"></span></a>
            {% else %}
              <a><i class=\"es-icon es-icon-mail\"></i></a>
            {% endif %}

            <ul class=\"dropdown-menu\" role=\"menu\">
              {% if not setting('esBar.enabled', 0) %}
                <li>
                  <a href=\"{{ path('notification') }}\">
                    <span class=\"pull-right num\">{% if app.user.newNotificationNum > 0 %}{{ app.user.newNotificationNum }}{% endif %}</span>
                    <i class=\"es-icon es-icon-notificationson\"></i>{{'通知'|trans}}
                  </a>
                </li>
              {% endif %}
              <li>
                <a href=\"{{ path('message') }}\">
                  <span class=\"pull-right num\">{% if app.user.newMessageNum > 0 %}{{ app.user.newMessageNum }}{% endif %}</span>
                  <i class=\"es-icon es-icon-mail\"></i>{{'私信'|trans}}
                </a>
              </li>
            </ul>
          </li>
        {% else %}
          <li class=\"user-avatar-li nav-hover visible-xs\">
            <a href=\"javascript:;\" class=\"dropdown-toggle\">
              <img class=\"avatar-xs\" src=\"{{ asset('assets/img/default/avatar.png') }}\">
            </a>
            <ul class=\"dropdown-menu\" role=\"menu\">
              <li class=\"user-nav-li-login\"><a href=\"{{ path('login', {goto:_target_path|default(app.request.server.get('REQUEST_URI'))}) }}\">
                <i class=\"es-icon es-icon-denglu\"></i>
                {{'登录'|trans}}</a></li>
              <li class=\"user-nav-li-register\"><a href=\"{{ path('register', {goto:_target_path|default(app.request.server.get('REQUEST_URI'))}) }}\">
                <i class=\"es-icon es-icon-zhuce\"></i>
                {{'注册'|trans}}</a></li>
              {% if mobile %}
                <li class=\"mobile-switch js-switch-pc\"><a href=\"javascript:;\">
                  <i class=\"es-icon es-icon-qiehuan\"></i>
                  {{'切换电脑版'|trans}}</a></li>
              {% elseif setting('wap.enabled') == 1  %}
                <li class=\"mobile-switch js-switch-mobile\"><a href=\"javascript:;\">
                  <i class=\"es-icon es-icon-qiehuan\"></i>              
                  {{'切换触屏版'|trans}}</a></li>
              {% endif %}
            </ul>
          </li>
          <li class=\"hidden-xs\"><a href=\"{{ path('login', {goto:_target_path|default(app.request.server.get('REQUEST_URI'))}) }}\">{{'登录'|trans}}</a></li>
          <li class=\"hidden-xs\"><a href=\"{{ path('register', {goto:_target_path|default(app.request.server.get('REQUEST_URI'))}) }}\">{{'注册'|trans}}</a></li>
        {% endif %}
        {# {% include 'TopxiaWebBundle:Default:switch-language.html.twig' %} #}
      </ul>
      <form class=\"navbar-form navbar-right hidden-xs hidden-sm\" action=\"{{ path('search') }}\" method=\"get\">
        <div class=\"form-group\">
          <input class=\"form-control js-search\" name=\"q\" placeholder=\"{{'搜索'|trans}}\">
          <button class=\"button es-icon es-icon-search\"></button>
        </div>
      </form>
    </div>
  </nav>
</header>", "default/header.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/default/header.html.twig");
    }
}
