<?php

/* seajs_loader_compatible.html.twig */
class __TwigTemplate_450aae18121f786bee363c2c351270bedf470433080aeb5289690017cd43b94c extends Twig_Template
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
        // line 2
        if (((array_key_exists("topxiawebbundle", $context)) ? (_twig_default_filter(($context["topxiawebbundle"] ?? null), false)) : (false))) {
            // line 3
            echo "  ";
            $this->loadTemplate("seajs_boot_compatible.html.twig", "seajs_loader_compatible.html.twig", 3)->display(array_merge($context, array("script_main" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/topxiaweb/js/app-compatible.js"))));
        } elseif (((        // line 4
array_key_exists("topxiaadminbundle", $context)) ? (_twig_default_filter(($context["topxiaadminbundle"] ?? null), false)) : (false))) {
            // line 5
            echo "  ";
            $this->loadTemplate("seajs_boot_compatible.html.twig", "seajs_loader_compatible.html.twig", 5)->display(array_merge($context, array("script_main" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/topxiaadmin/js/admin-app-compatible.js"))));
        }
    }

    public function getTemplateName()
    {
        return "seajs_loader_compatible.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 5,  24 => 4,  21 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "seajs_loader_compatible.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/seajs_loader_compatible.html.twig");
    }
}
