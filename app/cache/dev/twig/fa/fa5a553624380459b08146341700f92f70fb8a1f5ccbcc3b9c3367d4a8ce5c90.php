<?php

/* default/script-webpack.html.twig */
class __TwigTemplate_9473d2e9d1b140037e0cd3f592d40da7618dd10a4ce77fae5eaa8c8c07663558 extends Twig_Template
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
        $__internal_ea64f4628ba89b7ba2502176c9811ff148f949dd4c0c5e71407748ecaa036294 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea64f4628ba89b7ba2502176c9811ff148f949dd4c0c5e71407748ecaa036294->enter($__internal_ea64f4628ba89b7ba2502176c9811ff148f949dd4c0c5e71407748ecaa036294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/script-webpack.html.twig"));

        // line 1
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/vendor.js", 1 => "app/js/common.js", 2 => "app/js/main.js"), 1000);
        
        $__internal_ea64f4628ba89b7ba2502176c9811ff148f949dd4c0c5e71407748ecaa036294->leave($__internal_ea64f4628ba89b7ba2502176c9811ff148f949dd4c0c5e71407748ecaa036294_prof);

    }

    public function getTemplateName()
    {
        return "default/script-webpack.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% do script(['libs/vendor.js','app/js/common.js','app/js/main.js'], 1000) %}", "default/script-webpack.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/default/script-webpack.html.twig");
    }
}
