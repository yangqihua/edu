<?php

/* site-hint.html.twig */
class __TwigTemplate_c870847669779ce7c9840873e43dcd2cb81c870a3777dd5aa51bb9d43f22a7d5 extends Twig_Template
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
        $__internal_a49503c60fbd9749534e958065e30a90572aa4392da57c418a1f10fb6f3d52a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a49503c60fbd9749534e958065e30a90572aa4392da57c418a1f10fb6f3d52a5->enter($__internal_a49503c60fbd9749534e958065e30a90572aa4392da57c418a1f10fb6f3d52a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "site-hint.html.twig"));

        // line 1
        if (((($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) && ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "setup", array()) == 0)) && ( !array_key_exists("hideSetupHint", $context) || (($context["hideSetupHint"] ?? $this->getContext($context, "hideSetupHint")) != true))) &&  !$this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "cookies", array()), "get", array(0 => "close_set_email_alert"), "method"))) {
            // line 2
            echo "\t";
            $this->loadTemplate("email-setting.html.twig", "site-hint.html.twig", 2)->display($context);
        } else {
            // line 4
            echo "\t";
            $asm89CacheStrategy3 = $this->env->getExtension('Asm89\Twig\CacheExtension\Extension')->getCacheStrategy();
            $asm89Key3 = $asm89CacheStrategy3->generateKey("layout/announcement", 600            );
            $asm89CacheBody3 = $asm89CacheStrategy3->fetchBlock($asm89Key3);
            if ($asm89CacheBody3 === false) {
                ob_start();
                    // line 5
                    echo "\t\t";
                    $this->loadTemplate("announcement/announcement.html.twig", "site-hint.html.twig", 5)->display($context);
                    // line 6
                    echo "\t";
                
                $asm89CacheBody3 = ob_get_clean();
                $asm89CacheStrategy3->saveBlock($asm89Key3, $asm89CacheBody3);
            }
            echo $asm89CacheBody3;
        }
        
        $__internal_a49503c60fbd9749534e958065e30a90572aa4392da57c418a1f10fb6f3d52a5->leave($__internal_a49503c60fbd9749534e958065e30a90572aa4392da57c418a1f10fb6f3d52a5_prof);

    }

    public function getTemplateName()
    {
        return "site-hint.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  28 => 4,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if app.user and app.user.setup == 0 and (hideSetupHint is not defined or hideSetupHint != true) and not app.request.cookies.get('close_set_email_alert') %}
\t{% include 'email-setting.html.twig' %}
{% else %}
\t{% cache 'layout/announcement' 600 %}
\t\t{% include 'announcement/announcement.html.twig' %}
\t{% endcache %}
{% endif %}", "site-hint.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/site-hint.html.twig");
    }
}
