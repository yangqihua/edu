<?php

/* layout.html.twig */
class __TwigTemplate_582c564ed9c0d2cbfb0bf1e274b3add31639901daed3e9def417b9c0f2de78a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'head_scripts' => array($this, 'block_head_scripts'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'full_content' => array($this, 'block_full_content'),
            'top_content' => array($this, 'block_top_content'),
            'content' => array($this, 'block_content'),
            'bottom_content' => array($this, 'block_bottom_content'),
            'footer' => array($this, 'block_footer'),
            'footer_mobile' => array($this, 'block_footer_mobile'),
            'bottom' => array($this, 'block_bottom'),
            'esBar' => array($this, 'block_esBar'),
            'floatConsult' => array($this, 'block_floatConsult'),
            'footer_script' => array($this, 'block_footer_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a38718f1d870dc52c7a128d9d85b900f31a0d1400a28a35d6fb42552d50af8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a38718f1d870dc52c7a128d9d85b900f31a0d1400a28a35d6fb42552d50af8f->enter($__internal_0a38718f1d870dc52c7a128d9d85b900f31a0d1400a28a35d6fb42552d50af8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "layout.html.twig", 1);
        // line 2
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>
<html class=\"lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>
<html class=\"lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>
<html class=\"lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html> <!--<![endif]-->
";
        // line 12
        $context["mobile"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->isShowMobilePage();
        // line 13
        echo "<html lang=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "getLocale", array(), "method"), "html", null, true);
        echo "\" ";
        if ((($context["mobile"] ?? $this->getContext($context, "mobile")) && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("theme.code", "jianmo") == "jianmo"))) {
            echo " class=\"es-mobile\"";
        }
        echo ">
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,Chrome=1\">
  <meta name=\"renderer\" content=\"webkit\">
  <meta name=\"viewport\"
    content=\"width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no\">
  <title>";
        // line 21
        $this->displayBlock('title', $context, $blocks);
        // line 24
        echo "</title>
  <meta name=\"keywords\"
    content=\"
";
        // line 27
        ob_start();
        $this->displayBlock('keywords', $context, $blocks);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "\"/>
  <meta name=\"description\"
    content=\"";
        // line 29
        ob_start();
        $this->displayBlock('description', $context, $blocks);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "\"/>
  <meta content=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\" name=\"csrf-token\"/>
  <meta content=\"";
        // line 31
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "isLogin", array(), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "isLogin", array(), "method"), 0)) : (0)), "html", null, true);
        echo "\" name=\"is-login\"/>
  <meta content=\"";
        // line 32
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("login_bind.weixinmob_enabled"), 0), "html", null, true);
        echo "\" name=\"is-open\"/>
  ";
        // line 33
        echo $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("login_bind.verify_code", "");
        echo "
  ";
        // line 34
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.favicon")) {
            // line 35
            echo "    <link rel=\"icon\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.favicon")), "html", null, true);
            echo "\" type=\"image/x-icon\"/>
    <link rel=\"shortcut icon\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.favicon")), "html", null, true);
            echo "\" type=\"image/x-icon\" media=\"screen\"/>
  ";
        }
        // line 38
        echo "
  <!--[if lt IE 9]>
  <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/libs/html5shiv.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/es5-shim/es5-shim.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/es5-shim/es5-sham.js"), "html", null, true);
        echo "\"></script>
  <![endif]-->

  ";
        // line 45
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 50
        echo "
  ";
        // line 51
        $this->displayBlock('head_scripts', $context, $blocks);
        // line 52
        echo "
  ";
        // line 53
        $context["currentTheme"] = $this->env->getExtension('AppBundle\Twig\ThemeExtension')->getCurrentTheme();
        // line 54
        echo "  ";
        if (((array_key_exists("isEditColor", $context)) ? (_twig_default_filter(($context["isEditColor"] ?? $this->getContext($context, "isEditColor")), 0)) : (0))) {
            // line 55
            echo "    ";
            $context["maincolor"] = (($this->getAttribute($this->getAttribute(($context["currentTheme"] ?? null), "config", array(), "any", false, true), "maincolor", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["currentTheme"] ?? null), "config", array(), "any", false, true), "maincolor", array()), (($this->getAttribute($this->getAttribute(($context["currentTheme"] ?? null), "config", array(), "any", false, true), "color", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["currentTheme"] ?? null), "config", array(), "any", false, true), "color", array()), "default")) : ("default")))) : ((($this->getAttribute($this->getAttribute(($context["currentTheme"] ?? null), "config", array(), "any", false, true), "color", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["currentTheme"] ?? null), "config", array(), "any", false, true), "color", array()), "default")) : ("default"))));
            // line 56
            echo "    ";
            $context["navigationcolor"] = (($this->getAttribute($this->getAttribute(($context["currentTheme"] ?? null), "config", array(), "any", false, true), "navigationcolor", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["currentTheme"] ?? null), "config", array(), "any", false, true), "navigationcolor", array()), "default")) : ("default"));
            // line 57
            echo "  ";
        } else {
            // line 58
            echo "    ";
            $context["maincolor"] = (($this->getAttribute($this->getAttribute(($context["currentTheme"] ?? null), "confirmConfig", array(), "any", false, true), "maincolor", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["currentTheme"] ?? null), "confirmConfig", array(), "any", false, true), "maincolor", array()), (($this->getAttribute($this->getAttribute(($context["currentTheme"] ?? null), "confirmConfig", array(), "any", false, true), "color", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["currentTheme"] ?? null), "confirmConfig", array(), "any", false, true), "color", array()), "default")) : ("default")))) : ((($this->getAttribute($this->getAttribute(($context["currentTheme"] ?? null), "confirmConfig", array(), "any", false, true), "color", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["currentTheme"] ?? null), "confirmConfig", array(), "any", false, true), "color", array()), "default")) : ("default"))));
            // line 59
            echo "    ";
            $context["navigationcolor"] = (($this->getAttribute($this->getAttribute(($context["currentTheme"] ?? null), "confirmConfig", array(), "any", false, true), "navigationcolor", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["currentTheme"] ?? null), "confirmConfig", array(), "any", false, true), "navigationcolor", array()), "default")) : ("default"));
            // line 60
            echo "  ";
        }
        // line 61
        echo "
</head>
<body class=\"";
        // line 63
        echo twig_escape_filter($this->env, ("es-main-" . ($context["maincolor"] ?? $this->getContext($context, "maincolor"))), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ("es-nav-" . ($context["navigationcolor"] ?? $this->getContext($context, "navigationcolor"))), "html", null, true);
        echo " ";
        if (((array_key_exists("bodyClass", $context)) ? (_twig_default_filter(($context["bodyClass"] ?? $this->getContext($context, "bodyClass")), "")) : (""))) {
            echo twig_escape_filter($this->env, ($context["bodyClass"] ?? $this->getContext($context, "bodyClass")), "html", null, true);
        }
        echo "\">

<!--[if lt IE 9]>
<script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/libs/fix-ie.js"), "html", null, true);
        echo "\"></script>
";
        // line 67
        $this->loadTemplate("default/ie8-alert.html.twig", "layout.html.twig", 67)->display($context);
        // line 68
        echo "<![endif]-->

";
        // line 70
        $this->displayBlock('body', $context, $blocks);
        // line 122
        echo "
";
        // line 123
        $this->displayBlock('footer_script', $context, $blocks);
        // line 126
        echo "
";
        // line 127
        $this->loadTemplate("script_boot.html.twig", "layout.html.twig", 127)->display($context);
        // line 128
        echo "</body>
</html>";
        
        $__internal_0a38718f1d870dc52c7a128d9d85b900f31a0d1400a28a35d6fb42552d50af8f->leave($__internal_0a38718f1d870dc52c7a128d9d85b900f31a0d1400a28a35d6fb42552d50af8f_prof);

    }

    // line 21
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e7db6a31d35e2598242b1ec6b23057ab34a54398eeef475a093b3516dd6e7a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e7db6a31d35e2598242b1ec6b23057ab34a54398eeef475a093b3516dd6e7a9->enter($__internal_1e7db6a31d35e2598242b1ec6b23057ab34a54398eeef475a093b3516dd6e7a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.name", "EduSoho"), "html", null, true);
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.slogan")) {
            echo " - ";
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.slogan"), "html", null, true);
        }
        if ((($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.owned", "0") != "1") || (_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.thirdCopyright"), 0) == 2))) {
            echo " - Powered By EduSoho";
        }
        
        $__internal_1e7db6a31d35e2598242b1ec6b23057ab34a54398eeef475a093b3516dd6e7a9->leave($__internal_1e7db6a31d35e2598242b1ec6b23057ab34a54398eeef475a093b3516dd6e7a9_prof);

    }

    // line 27
    public function block_keywords($context, array $blocks = array())
    {
        $__internal_7ca59dfba6c65f64402e373b6f3ad437884b7b55f7314894db897a2f6d03a326 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ca59dfba6c65f64402e373b6f3ad437884b7b55f7314894db897a2f6d03a326->enter($__internal_7ca59dfba6c65f64402e373b6f3ad437884b7b55f7314894db897a2f6d03a326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.seo_keywords"), "html", null, true);
        
        $__internal_7ca59dfba6c65f64402e373b6f3ad437884b7b55f7314894db897a2f6d03a326->leave($__internal_7ca59dfba6c65f64402e373b6f3ad437884b7b55f7314894db897a2f6d03a326_prof);

    }

    // line 29
    public function block_description($context, array $blocks = array())
    {
        $__internal_ca8328a802199441f127edccfc8da446c40ac99e9b0e8057ca5d5ec506231e26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca8328a802199441f127edccfc8da446c40ac99e9b0e8057ca5d5ec506231e26->enter($__internal_ca8328a802199441f127edccfc8da446c40ac99e9b0e8057ca5d5ec506231e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.seo_description"), "html", null, true);
        
        $__internal_ca8328a802199441f127edccfc8da446c40ac99e9b0e8057ca5d5ec506231e26->leave($__internal_ca8328a802199441f127edccfc8da446c40ac99e9b0e8057ca5d5ec506231e26_prof);

    }

    // line 45
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d4c93d5de25bacb64103def757c84bbb5f65b6cebb643bf6beffb86b4959abe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4c93d5de25bacb64103def757c84bbb5f65b6cebb643bf6beffb86b4959abe1->enter($__internal_d4c93d5de25bacb64103def757c84bbb5f65b6cebb643bf6beffb86b4959abe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 46
        echo "    ";
        $context["currentTheme"] = $this->env->getExtension('AppBundle\Twig\ThemeExtension')->getCurrentTheme();
        // line 47
        echo "    ";
        $this->loadTemplate("css_loader.html.twig", "layout.html.twig", 47)->display($context);
        // line 48
        echo "    ";
        $this->loadTemplate("default/stylesheet-webpack.html.twig", "layout.html.twig", 48)->display(array_merge($context, array("config" => ($context["currentTheme"] ?? $this->getContext($context, "currentTheme")), "isEditColor" => ((array_key_exists("isEditColor", $context)) ? (_twig_default_filter(($context["isEditColor"] ?? $this->getContext($context, "isEditColor")), false)) : (false)))));
        // line 49
        echo "  ";
        
        $__internal_d4c93d5de25bacb64103def757c84bbb5f65b6cebb643bf6beffb86b4959abe1->leave($__internal_d4c93d5de25bacb64103def757c84bbb5f65b6cebb643bf6beffb86b4959abe1_prof);

    }

    // line 51
    public function block_head_scripts($context, array $blocks = array())
    {
        $__internal_855cba1eabff36cd0b5ead470ad597a11aad6373c00822663b6651a2af0e4a5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_855cba1eabff36cd0b5ead470ad597a11aad6373c00822663b6651a2af0e4a5f->enter($__internal_855cba1eabff36cd0b5ead470ad597a11aad6373c00822663b6651a2af0e4a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_scripts"));

        
        $__internal_855cba1eabff36cd0b5ead470ad597a11aad6373c00822663b6651a2af0e4a5f->leave($__internal_855cba1eabff36cd0b5ead470ad597a11aad6373c00822663b6651a2af0e4a5f_prof);

    }

    // line 70
    public function block_body($context, array $blocks = array())
    {
        $__internal_629136bd3452d4f947da621b2ba2f704171ad898e0bd70a94e0e5a0663d13f90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_629136bd3452d4f947da621b2ba2f704171ad898e0bd70a94e0e5a0663d13f90->enter($__internal_629136bd3452d4f947da621b2ba2f704171ad898e0bd70a94e0e5a0663d13f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 71
        echo "  <div class=\"es-wrap\">

    ";
        // line 73
        $this->displayBlock('header', $context, $blocks);
        // line 77
        echo "
    ";
        // line 78
        $this->displayBlock('full_content', $context, $blocks);
        // line 87
        echo "
    ";
        // line 88
        $this->displayBlock('footer', $context, $blocks);
        // line 91
        echo "
    ";
        // line 92
        $this->displayBlock('footer_mobile', $context, $blocks);
        // line 94
        echo "
    ";
        // line 95
        $this->displayBlock('bottom', $context, $blocks);
        // line 96
        echo "  </div>

  ";
        // line 98
        $this->displayBlock('esBar', $context, $blocks);
        // line 103
        echo "
  ";
        // line 104
        $this->displayBlock('floatConsult', $context, $blocks);
        // line 117
        echo "
  <div id=\"login-modal\" class=\"modal\" data-url=\"";
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_ajax");
        echo "\"></div>
  <div id=\"modal\" class=\"modal\"></div>
  <div id=\"attachment-modal\" class=\"modal\"></div>
";
        
        $__internal_629136bd3452d4f947da621b2ba2f704171ad898e0bd70a94e0e5a0663d13f90->leave($__internal_629136bd3452d4f947da621b2ba2f704171ad898e0bd70a94e0e5a0663d13f90_prof);

    }

    // line 73
    public function block_header($context, array $blocks = array())
    {
        $__internal_8907348c754a84bf18cd5d6833921d7faf00ffbddc08af6328a8cabaa39012b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8907348c754a84bf18cd5d6833921d7faf00ffbddc08af6328a8cabaa39012b8->enter($__internal_8907348c754a84bf18cd5d6833921d7faf00ffbddc08af6328a8cabaa39012b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 74
        echo "      ";
        $this->loadTemplate("site-hint.html.twig", "layout.html.twig", 74)->display($context);
        // line 75
        echo "      ";
        $this->loadTemplate("default/header.html.twig", "layout.html.twig", 75)->display($context);
        // line 76
        echo "    ";
        
        $__internal_8907348c754a84bf18cd5d6833921d7faf00ffbddc08af6328a8cabaa39012b8->leave($__internal_8907348c754a84bf18cd5d6833921d7faf00ffbddc08af6328a8cabaa39012b8_prof);

    }

    // line 78
    public function block_full_content($context, array $blocks = array())
    {
        $__internal_5f157ea8782900c1b4f09a2eea74041fd9d2d46d491a33e4751340aea288fabf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f157ea8782900c1b4f09a2eea74041fd9d2d46d491a33e4751340aea288fabf->enter($__internal_5f157ea8782900c1b4f09a2eea74041fd9d2d46d491a33e4751340aea288fabf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "full_content"));

        // line 79
        echo "      ";
        $this->displayBlock('top_content', $context, $blocks);
        // line 80
        echo "
      <div id=\"content-container\" class=\"container\">
        ";
        // line 82
        $this->displayBlock('content', $context, $blocks);
        // line 83
        echo "      </div>

      ";
        // line 85
        $this->displayBlock('bottom_content', $context, $blocks);
        // line 86
        echo "    ";
        
        $__internal_5f157ea8782900c1b4f09a2eea74041fd9d2d46d491a33e4751340aea288fabf->leave($__internal_5f157ea8782900c1b4f09a2eea74041fd9d2d46d491a33e4751340aea288fabf_prof);

    }

    // line 79
    public function block_top_content($context, array $blocks = array())
    {
        $__internal_2b61b713ad406cf6813eff913fed4e0d4bb76a8967799bfb24f41ec084c7f77b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b61b713ad406cf6813eff913fed4e0d4bb76a8967799bfb24f41ec084c7f77b->enter($__internal_2b61b713ad406cf6813eff913fed4e0d4bb76a8967799bfb24f41ec084c7f77b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top_content"));

        
        $__internal_2b61b713ad406cf6813eff913fed4e0d4bb76a8967799bfb24f41ec084c7f77b->leave($__internal_2b61b713ad406cf6813eff913fed4e0d4bb76a8967799bfb24f41ec084c7f77b_prof);

    }

    // line 82
    public function block_content($context, array $blocks = array())
    {
        $__internal_9ef4070c041dcd0661dd3b599d17a1e3d70591428948880288710aa072411fd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ef4070c041dcd0661dd3b599d17a1e3d70591428948880288710aa072411fd0->enter($__internal_9ef4070c041dcd0661dd3b599d17a1e3d70591428948880288710aa072411fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_9ef4070c041dcd0661dd3b599d17a1e3d70591428948880288710aa072411fd0->leave($__internal_9ef4070c041dcd0661dd3b599d17a1e3d70591428948880288710aa072411fd0_prof);

    }

    // line 85
    public function block_bottom_content($context, array $blocks = array())
    {
        $__internal_d9cd9a5305419e0e93bd2b8db3e252be15fd88e9bfe797cc74fb7badba5110c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9cd9a5305419e0e93bd2b8db3e252be15fd88e9bfe797cc74fb7badba5110c3->enter($__internal_d9cd9a5305419e0e93bd2b8db3e252be15fd88e9bfe797cc74fb7badba5110c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bottom_content"));

        
        $__internal_d9cd9a5305419e0e93bd2b8db3e252be15fd88e9bfe797cc74fb7badba5110c3->leave($__internal_d9cd9a5305419e0e93bd2b8db3e252be15fd88e9bfe797cc74fb7badba5110c3_prof);

    }

    // line 88
    public function block_footer($context, array $blocks = array())
    {
        $__internal_728c90eb30f7dbd879f8acc86b12efd74f397f0e0cdddcac98ab5ca38356b06e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_728c90eb30f7dbd879f8acc86b12efd74f397f0e0cdddcac98ab5ca38356b06e->enter($__internal_728c90eb30f7dbd879f8acc86b12efd74f397f0e0cdddcac98ab5ca38356b06e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 89
        echo "      ";
        $this->loadTemplate("default/footer.html.twig", "layout.html.twig", 89)->display($context);
        // line 90
        echo "    ";
        
        $__internal_728c90eb30f7dbd879f8acc86b12efd74f397f0e0cdddcac98ab5ca38356b06e->leave($__internal_728c90eb30f7dbd879f8acc86b12efd74f397f0e0cdddcac98ab5ca38356b06e_prof);

    }

    // line 92
    public function block_footer_mobile($context, array $blocks = array())
    {
        $__internal_e92dc5fdde3a8f7b428e243df59824c337c2623747dbcdd88243537cafdefc35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e92dc5fdde3a8f7b428e243df59824c337c2623747dbcdd88243537cafdefc35->enter($__internal_e92dc5fdde3a8f7b428e243df59824c337c2623747dbcdd88243537cafdefc35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer_mobile"));

        // line 93
        echo "    ";
        
        $__internal_e92dc5fdde3a8f7b428e243df59824c337c2623747dbcdd88243537cafdefc35->leave($__internal_e92dc5fdde3a8f7b428e243df59824c337c2623747dbcdd88243537cafdefc35_prof);

    }

    // line 95
    public function block_bottom($context, array $blocks = array())
    {
        $__internal_be8a016854c78e04dbc0d6fbd2ff99dfc5e6b8675c4289baa6b92d67967aa4b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be8a016854c78e04dbc0d6fbd2ff99dfc5e6b8675c4289baa6b92d67967aa4b7->enter($__internal_be8a016854c78e04dbc0d6fbd2ff99dfc5e6b8675c4289baa6b92d67967aa4b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bottom"));

        
        $__internal_be8a016854c78e04dbc0d6fbd2ff99dfc5e6b8675c4289baa6b92d67967aa4b7->leave($__internal_be8a016854c78e04dbc0d6fbd2ff99dfc5e6b8675c4289baa6b92d67967aa4b7_prof);

    }

    // line 98
    public function block_esBar($context, array $blocks = array())
    {
        $__internal_ca00ab396902f29556a07a10791a9a0b8d9220f0c385301f7bab5916a42a1804 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca00ab396902f29556a07a10791a9a0b8d9220f0c385301f7bab5916a42a1804->enter($__internal_ca00ab396902f29556a07a10791a9a0b8d9220f0c385301f7bab5916a42a1804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esBar"));

        // line 99
        echo "    ";
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("esBar.enabled", 0)) {
            // line 100
            echo "      ";
            $this->loadTemplate("es-bar/index.html.twig", "layout.html.twig", 100)->display($context);
            // line 101
            echo "    ";
        }
        // line 102
        echo "  ";
        
        $__internal_ca00ab396902f29556a07a10791a9a0b8d9220f0c385301f7bab5916a42a1804->leave($__internal_ca00ab396902f29556a07a10791a9a0b8d9220f0c385301f7bab5916a42a1804_prof);

    }

    // line 104
    public function block_floatConsult($context, array $blocks = array())
    {
        $__internal_8676c94f81ce42093dc7f764973403387f6f3e26b8c07c4141bdec868cfb4ba5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8676c94f81ce42093dc7f764973403387f6f3e26b8c07c4141bdec868cfb4ba5->enter($__internal_8676c94f81ce42093dc7f764973403387f6f3e26b8c07c4141bdec868cfb4ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "floatConsult"));

        // line 105
        echo "
    ";
        // line 106
        $context["cloud_consult"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("cloud_consult", "");
        // line 107
        echo "    ";
        if ((((($context["cloud_consult"] ?? $this->getContext($context, "cloud_consult")) && (($this->getAttribute(($context["cloud_consult"] ?? null), "cloud_consult_setting_enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["cloud_consult"] ?? null), "cloud_consult_setting_enabled", array()), 0)) : (0))) && (($this->getAttribute(($context["cloud_consult"] ?? null), "cloud_consult_is_buy", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["cloud_consult"] ?? null), "cloud_consult_is_buy", array()), 0)) : (0))) && (($this->getAttribute(($context["cloud_consult"] ?? null), "cloud_consult_js", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["cloud_consult"] ?? null), "cloud_consult_js", array()), "")) : ("")))) {
            // line 108
            echo "      ";
            echo $this->getAttribute(($context["cloud_consult"] ?? $this->getContext($context, "cloud_consult")), "cloud_consult_js", array());
            echo "
    ";
        }
        // line 110
        echo "
    ";
        // line 111
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("consult.enabled", 0) && (((array_key_exists("consultDisplay", $context)) ? (_twig_default_filter(($context["consultDisplay"] ?? $this->getContext($context, "consultDisplay")), false)) : (false)) || (((array_key_exists("siteNav", $context)) ? (_twig_default_filter(($context["siteNav"] ?? $this->getContext($context, "siteNav")))) : ("")) == "/")))) {
            // line 112
            echo "      ";
            if ( !$this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("esBar.enabled", 0)) {
                // line 113
                echo "        ";
                $this->loadTemplate("float-consult.html.twig", "layout.html.twig", 113)->display($context);
                // line 114
                echo "      ";
            }
            // line 115
            echo "    ";
        }
        // line 116
        echo "  ";
        
        $__internal_8676c94f81ce42093dc7f764973403387f6f3e26b8c07c4141bdec868cfb4ba5->leave($__internal_8676c94f81ce42093dc7f764973403387f6f3e26b8c07c4141bdec868cfb4ba5_prof);

    }

    // line 123
    public function block_footer_script($context, array $blocks = array())
    {
        $__internal_0033d19dbaafbf1b1a1566380f708e55eced854e5142aa0de7f4a37cbf2f7417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0033d19dbaafbf1b1a1566380f708e55eced854e5142aa0de7f4a37cbf2f7417->enter($__internal_0033d19dbaafbf1b1a1566380f708e55eced854e5142aa0de7f4a37cbf2f7417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer_script"));

        // line 124
        echo "  ";
        $this->loadTemplate("default/script-webpack.html.twig", "layout.html.twig", 124)->display($context);
        
        $__internal_0033d19dbaafbf1b1a1566380f708e55eced854e5142aa0de7f4a37cbf2f7417->leave($__internal_0033d19dbaafbf1b1a1566380f708e55eced854e5142aa0de7f4a37cbf2f7417_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  540 => 124,  534 => 123,  527 => 116,  524 => 115,  521 => 114,  518 => 113,  515 => 112,  513 => 111,  510 => 110,  504 => 108,  501 => 107,  499 => 106,  496 => 105,  490 => 104,  483 => 102,  480 => 101,  477 => 100,  474 => 99,  468 => 98,  457 => 95,  450 => 93,  444 => 92,  437 => 90,  434 => 89,  428 => 88,  417 => 85,  406 => 82,  395 => 79,  388 => 86,  386 => 85,  382 => 83,  380 => 82,  376 => 80,  373 => 79,  367 => 78,  360 => 76,  357 => 75,  354 => 74,  348 => 73,  337 => 118,  334 => 117,  332 => 104,  329 => 103,  327 => 98,  323 => 96,  321 => 95,  318 => 94,  316 => 92,  313 => 91,  311 => 88,  308 => 87,  306 => 78,  303 => 77,  301 => 73,  297 => 71,  291 => 70,  280 => 51,  273 => 49,  270 => 48,  267 => 47,  264 => 46,  258 => 45,  246 => 29,  234 => 27,  220 => 22,  214 => 21,  206 => 128,  204 => 127,  201 => 126,  199 => 123,  196 => 122,  194 => 70,  190 => 68,  188 => 67,  184 => 66,  172 => 63,  168 => 61,  165 => 60,  162 => 59,  159 => 58,  156 => 57,  153 => 56,  150 => 55,  147 => 54,  145 => 53,  142 => 52,  140 => 51,  137 => 50,  135 => 45,  129 => 42,  125 => 41,  121 => 40,  117 => 38,  112 => 36,  107 => 35,  105 => 34,  101 => 33,  97 => 32,  93 => 31,  89 => 30,  83 => 29,  76 => 27,  71 => 24,  69 => 21,  54 => 13,  52 => 12,  41 => 2,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"macro.html.twig\" as web_macro %}
<!DOCTYPE html>
<!--[if lt IE 7]>
<html class=\"lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>
<html class=\"lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>
<html class=\"lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html> <!--<![endif]-->
{# returns app.request.locale if available and app.request.defaultLocale if app.request.locale is not set#}
{% set mobile = is_show_mobile_page() %}
<html lang=\"{{ app.request.getLocale() }}\" {% if mobile  and setting('theme.code', 'jianmo') == 'jianmo' %} class=\"es-mobile\"{% endif %}>
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,Chrome=1\">
  <meta name=\"renderer\" content=\"webkit\">
  <meta name=\"viewport\"
    content=\"width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no\">
  <title>
    {%- block title -%}
      {{ setting('site.name', 'EduSoho') }}{% if setting('site.slogan') %} - {{ setting('site.slogan') }}{% endif %}{% if  setting('copyright.owned','0') != '1' or setting('copyright.thirdCopyright')|default(0) == 2 %} - Powered By EduSoho{% endif %}
    {%- endblock -%}
  </title>
  <meta name=\"keywords\"
    content=\"
{% spaceless %}{% block keywords %}{{ setting('site.seo_keywords') }}{% endblock %}{% endspaceless %}\"/>
  <meta name=\"description\"
    content=\"{% spaceless %}{% block description %}{{ setting('site.seo_description') }}{% endblock %}{% endspaceless %}\"/>
  <meta content=\"{{ csrf_token('site') }}\" name=\"csrf-token\"/>
  <meta content=\"{{ app.user.isLogin()|default(0) }}\" name=\"is-login\"/>
  <meta content=\"{{ setting('login_bind.weixinmob_enabled')|default(0) }}\" name=\"is-open\"/>
  {{ setting('login_bind.verify_code', '')|raw }}
  {% if setting('site.favicon') %}
    <link rel=\"icon\" href=\"{{ asset(setting('site.favicon')) }}\" type=\"image/x-icon\"/>
    <link rel=\"shortcut icon\" href=\"{{ asset(setting('site.favicon')) }}\" type=\"image/x-icon\" media=\"screen\"/>
  {% endif %}

  <!--[if lt IE 9]>
  <script src=\"{{ asset('static-dist/libs/html5shiv.js') }}\"></script>
  <script src=\"{{ asset('static-dist/es5-shim/es5-shim.js') }}\"></script>
  <script src=\"{{ asset('static-dist/es5-shim/es5-sham.js') }}\"></script>
  <![endif]-->

  {% block stylesheets %}
    {% set currentTheme = current_theme() %}
    {% include 'css_loader.html.twig' %}
    {% include 'default/stylesheet-webpack.html.twig' with {config: currentTheme, isEditColor: isEditColor|default(false)} %}
  {% endblock %}

  {% block head_scripts %}{% endblock %}

  {% set currentTheme = current_theme() %}
  {% if isEditColor|default(0) %}
    {% set maincolor = currentTheme.config.maincolor|default(currentTheme.config.color|default('default')) %}
    {% set navigationcolor = currentTheme.config.navigationcolor|default('default') %}
  {% else %}
    {% set maincolor = currentTheme.confirmConfig.maincolor|default(currentTheme.confirmConfig.color|default('default')) %}
    {% set navigationcolor = currentTheme.confirmConfig.navigationcolor|default('default') %}
  {% endif %}

</head>
<body class=\"{{ 'es-main-' ~ maincolor }} {{ 'es-nav-' ~ navigationcolor }} {% if bodyClass|default('') %}{{ bodyClass }}{% endif %}\">

<!--[if lt IE 9]>
<script src=\"{{ asset('static-dist/libs/fix-ie.js') }}\"></script>
{% include 'default/ie8-alert.html.twig' %}
<![endif]-->

{% block body %}
  <div class=\"es-wrap\">

    {% block header %}
      {% include 'site-hint.html.twig' %}
      {% include 'default/header.html.twig' %}
    {% endblock %}

    {% block full_content %}
      {% block top_content %}{% endblock %}

      <div id=\"content-container\" class=\"container\">
        {% block content %}{% endblock %}
      </div>

      {% block bottom_content %}{% endblock %}
    {% endblock %}

    {% block footer %}
      {% include 'default/footer.html.twig' %}
    {% endblock %}

    {% block footer_mobile %}
    {% endblock %}

    {% block bottom %}{% endblock %}
  </div>

  {% block esBar %}
    {% if setting('esBar.enabled', 0) %}
      {% include 'es-bar/index.html.twig' %}
    {% endif %}
  {% endblock %}

  {% block floatConsult %}

    {% set cloud_consult = setting('cloud_consult', '') %}
    {% if cloud_consult and cloud_consult.cloud_consult_setting_enabled |default(0) and cloud_consult.cloud_consult_is_buy |default(0) and cloud_consult.cloud_consult_js |default('') %}
      {{ cloud_consult.cloud_consult_js | raw }}
    {% endif %}

    {% if setting('consult.enabled', 0) and (consultDisplay|default(false) or siteNav|default() == '/' ) %}
      {% if not setting('esBar.enabled',0) %}
        {% include 'float-consult.html.twig' %}
      {% endif %}
    {% endif %}
  {% endblock %}

  <div id=\"login-modal\" class=\"modal\" data-url=\"{{ path('login_ajax') }}\"></div>
  <div id=\"modal\" class=\"modal\"></div>
  <div id=\"attachment-modal\" class=\"modal\"></div>
{% endblock %}

{% block footer_script %}
  {% include 'default/script-webpack.html.twig' %}
{% endblock %}

{% include 'script_boot.html.twig' %}
</body>
</html>", "layout.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/layout.html.twig");
    }
}
