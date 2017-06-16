<?php

/* default/stylesheet.html.twig */
class __TwigTemplate_f7a7216d55875d689bc19cc2150e8b6999606c154afe4ff06e7e2158f22351b2 extends Twig_Template
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
        if (((array_key_exists("isEditColor", $context)) ? (_twig_default_filter(($context["isEditColor"] ?? null), 0)) : (0))) {
            // line 2
            echo "\t";
            $context["maincolor"] = (($this->getAttribute($this->getAttribute(($context["config"] ?? null), "config", array(), "any", false, true), "maincolor", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["config"] ?? null), "config", array(), "any", false, true), "maincolor", array()), "default")) : ("default"));
            // line 3
            echo "\t";
            $context["navigationcolor"] = (($this->getAttribute($this->getAttribute(($context["config"] ?? null), "config", array(), "any", false, true), "navigationcolor", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["config"] ?? null), "config", array(), "any", false, true), "navigationcolor", array()), "default")) : ("default"));
        } else {
            // line 5
            echo "\t";
            $context["maincolor"] = (($this->getAttribute($this->getAttribute(($context["config"] ?? null), "confirmConfig", array(), "any", false, true), "maincolor", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["config"] ?? null), "confirmConfig", array(), "any", false, true), "maincolor", array()), "default")) : ("default"));
            // line 6
            echo "\t";
            $context["navigationcolor"] = (($this->getAttribute($this->getAttribute(($context["config"] ?? null), "confirmConfig", array(), "any", false, true), "navigationcolor", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["config"] ?? null), "confirmConfig", array(), "any", false, true), "navigationcolor", array()), "default")) : ("default"));
        }
        // line 8
        echo "
";
        // line 9
        if ((($context["maincolor"] ?? null) == "default")) {
            // line 10
            echo "\t<link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/v2/bootstrap/css/bootstrap.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
";
        } else {
            // line 12
            echo "\t<link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("assets/v2/bootstrap/css/bootstrap-" . ($context["maincolor"] ?? null)) . ".css")), "html", null, true);
            echo "\" rel=\"stylesheet\" />
";
        }
        // line 14
        echo "
<link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/common.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/font-awesome.min.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/v2/css/es-icon.css"), "html", null, true);
        echo "\" />

";
        // line 19
        if ((($context["maincolor"] ?? null) == "default")) {
            // line 20
            echo "\t<link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/v2/css/main.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
";
        } else {
            // line 22
            echo "\t<link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("assets/v2/css/main-" . ($context["maincolor"] ?? null)) . ".css")), "html", null, true);
            echo "\" rel=\"stylesheet\" />
";
        }
        // line 24
        echo "
";
        // line 25
        $context["locale"] = $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "getLocale", array(), "method");
        // line 26
        if ((($context["locale"] ?? null) != "zh_CN")) {
            // line 27
            echo "<link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("assets/v2/css/i18n/" . ($context["locale"] ?? null)) . ".css")), "html", null, true);
            echo "\" rel=\"stylesheet\" />
";
        }
        // line 29
        echo "
";
        // line 30
        if ((($context["navigationcolor"] ?? null) != "default")) {
            // line 31
            echo "\t<link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("assets/v2/css/header-" . ($context["navigationcolor"] ?? null)) . ".css")), "html", null, true);
            echo "\" rel=\"stylesheet\" />
";
        }
        // line 33
        echo "
";
        // line 34
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "getLocale", array(), "method") == "ug_CN")) {
            // line 35
            echo "\t<link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/rtl/css/rtl.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
";
        }
    }

    public function getTemplateName()
    {
        return "default/stylesheet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 35,  109 => 34,  106 => 33,  100 => 31,  98 => 30,  95 => 29,  89 => 27,  87 => 26,  85 => 25,  82 => 24,  76 => 22,  70 => 20,  68 => 19,  63 => 17,  59 => 16,  55 => 15,  52 => 14,  46 => 12,  40 => 10,  38 => 9,  35 => 8,  31 => 6,  28 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/stylesheet.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/default/stylesheet.html.twig");
    }
}
