<?php

/* BazingaJsTranslationBundle::getTranslations.js.twig */
class __TwigTemplate_b17b814e45d21cf607abc3f5c46adf8cc64a21a5947bfc527a70121601738e5c extends Twig_Template
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
        $__internal_f3dfd51dae9f887c472667b113e68e30bb21b8697df7e61efc1ab3c1a3b5a802 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3dfd51dae9f887c472667b113e68e30bb21b8697df7e61efc1ab3c1a3b5a802->enter($__internal_f3dfd51dae9f887c472667b113e68e30bb21b8697df7e61efc1ab3c1a3b5a802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BazingaJsTranslationBundle::getTranslations.js.twig"));

        // line 1
        echo "(function (Translator) {
";
        // line 2
        if (($context["include_config"] ?? $this->getContext($context, "include_config"))) {
            // line 3
            echo "    Translator.fallback      = '";
            echo twig_escape_filter($this->env, ($context["fallback"] ?? $this->getContext($context, "fallback")), "js", null, true);
            echo "';
    Translator.defaultDomain = '";
            // line 4
            echo twig_escape_filter($this->env, ($context["defaultDomain"] ?? $this->getContext($context, "defaultDomain")), "js", null, true);
            echo "';
";
        }
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["translations"] ?? $this->getContext($context, "translations")));
        foreach ($context['_seq'] as $context["locale"] => $context["domains"]) {
            // line 7
            echo "    // ";
            echo twig_escape_filter($this->env, $context["locale"], "js", null, true);
            echo "
";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["domains"]);
            foreach ($context['_seq'] as $context["domain"] => $context["messages"]) {
                // line 9
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["key"] => $context["message"]) {
                    // line 10
                    echo "    Translator.add(";
                    echo twig_jsonencode_filter($context["key"]);
                    echo ", ";
                    echo twig_jsonencode_filter($context["message"]);
                    echo ", \"";
                    echo twig_escape_filter($this->env, $context["domain"], "js", null, true);
                    echo "\", \"";
                    echo twig_escape_filter($this->env, $context["locale"], "js", null, true);
                    echo "\");
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['domain'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['locale'], $context['domains'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "})(Translator);
";
        
        $__internal_f3dfd51dae9f887c472667b113e68e30bb21b8697df7e61efc1ab3c1a3b5a802->leave($__internal_f3dfd51dae9f887c472667b113e68e30bb21b8697df7e61efc1ab3c1a3b5a802_prof);

    }

    public function getTemplateName()
    {
        return "BazingaJsTranslationBundle::getTranslations.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 14,  54 => 10,  50 => 9,  46 => 8,  41 => 7,  37 => 6,  32 => 4,  27 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("(function (Translator) {
{% if include_config %}
    Translator.fallback      = '{{ fallback }}';
    Translator.defaultDomain = '{{ defaultDomain }}';
{% endif %}
{% for locale, domains in translations %}
    // {{ locale }}
{% for domain, messages in domains %}
{% for key, message in messages %}
    Translator.add({{ key|json_encode|raw }}, {{ message|json_encode|raw }}, \"{{ domain }}\", \"{{ locale }}\");
{% endfor %}
{% endfor %}
{% endfor %}
})(Translator);
", "BazingaJsTranslationBundle::getTranslations.js.twig", "/Users/yangqihua/Sites/edusoho/vendor/willdurand/js-translation-bundle/Bazinga/Bundle/JsTranslationBundle/Resources/views/getTranslations.js.twig");
    }
}
