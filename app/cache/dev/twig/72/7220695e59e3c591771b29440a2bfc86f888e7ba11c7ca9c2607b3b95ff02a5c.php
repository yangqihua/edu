<?php

/* es-bar/list-content/notification.html.twig */
class __TwigTemplate_4d980e76a0acc98544a303ea0fdfb6a590c4f46ca3d1e7ca915e856efe83aaf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("es-bar/layout.html.twig", "es-bar/list-content/notification.html.twig", 1);
        $this->blocks = array(
            'esBarTitle' => array($this, 'block_esBarTitle'),
            'esBarBody' => array($this, 'block_esBarBody'),
            'myMessage' => array($this, 'block_myMessage'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "es-bar/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_daaf3e02092bc966e547c2fa4c069f22ac1f4a148f308b41ea4bca37aa35b999 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daaf3e02092bc966e547c2fa4c069f22ac1f4a148f308b41ea4bca37aa35b999->enter($__internal_daaf3e02092bc966e547c2fa4c069f22ac1f4a148f308b41ea4bca37aa35b999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "es-bar/list-content/notification.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_daaf3e02092bc966e547c2fa4c069f22ac1f4a148f308b41ea4bca37aa35b999->leave($__internal_daaf3e02092bc966e547c2fa4c069f22ac1f4a148f308b41ea4bca37aa35b999_prof);

    }

    // line 2
    public function block_esBarTitle($context, array $blocks = array())
    {
        $__internal_6c19ac2a8f84d9abbe9526216213ff1c40a4cb91d4154ac0176065e101a72a96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c19ac2a8f84d9abbe9526216213ff1c40a4cb91d4154ac0176065e101a72a96->enter($__internal_6c19ac2a8f84d9abbe9526216213ff1c40a4cb91d4154ac0176065e101a72a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esBarTitle"));

        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("通知"), "html", null, true);
        echo "
";
        
        $__internal_6c19ac2a8f84d9abbe9526216213ff1c40a4cb91d4154ac0176065e101a72a96->leave($__internal_6c19ac2a8f84d9abbe9526216213ff1c40a4cb91d4154ac0176065e101a72a96_prof);

    }

    // line 6
    public function block_esBarBody($context, array $blocks = array())
    {
        $__internal_7f25e124480b4be59960a8ef78184f8fa63c826bbb665199f8e58a3d6fe789aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f25e124480b4be59960a8ef78184f8fa63c826bbb665199f8e58a3d6fe789aa->enter($__internal_7f25e124480b4be59960a8ef78184f8fa63c826bbb665199f8e58a3d6fe789aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esBarBody"));

        // line 7
        echo "  <ul class=\"bar-message\">
    ";
        // line 8
        $this->displayBlock('myMessage', $context, $blocks);
        // line 11
        echo "  </ul>
";
        
        $__internal_7f25e124480b4be59960a8ef78184f8fa63c826bbb665199f8e58a3d6fe789aa->leave($__internal_7f25e124480b4be59960a8ef78184f8fa63c826bbb665199f8e58a3d6fe789aa_prof);

    }

    // line 8
    public function block_myMessage($context, array $blocks = array())
    {
        $__internal_8563020795745a2b06217d4f13a6055b750b57adc8be89932ecd4bead78d930e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8563020795745a2b06217d4f13a6055b750b57adc8be89932ecd4bead78d930e->enter($__internal_8563020795745a2b06217d4f13a6055b750b57adc8be89932ecd4bead78d930e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "myMessage"));

        // line 9
        echo "
    ";
        
        $__internal_8563020795745a2b06217d4f13a6055b750b57adc8be89932ecd4bead78d930e->leave($__internal_8563020795745a2b06217d4f13a6055b750b57adc8be89932ecd4bead78d930e_prof);

    }

    public function getTemplateName()
    {
        return "es-bar/list-content/notification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 9,  71 => 8,  63 => 11,  61 => 8,  58 => 7,  52 => 6,  42 => 3,  36 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'es-bar/layout.html.twig' %}
{% block esBarTitle %}
    {{'通知'|trans}}
{% endblock %}

{% block esBarBody %}
  <ul class=\"bar-message\">
    {% block myMessage %}

    {% endblock %}
  </ul>
{% endblock %}
", "es-bar/list-content/notification.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/es-bar/list-content/notification.html.twig");
    }
}
