<?php

/* es-bar/list-content/practice.html.twig */
class __TwigTemplate_3f1807109eecfe569ee6a1dcdae1d5d794ff13647ac8ddf640ed61c52252677d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("es-bar/layout.html.twig", "es-bar/list-content/practice.html.twig", 1);
        $this->blocks = array(
            'esBarTitle' => array($this, 'block_esBarTitle'),
            'esBarBody' => array($this, 'block_esBarBody'),
            'myPractice' => array($this, 'block_myPractice'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "es-bar/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf89fbc4b1fbcd80a6bf2f6099ed94595549ac810e9e1710d9a1ae03e3175524 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf89fbc4b1fbcd80a6bf2f6099ed94595549ac810e9e1710d9a1ae03e3175524->enter($__internal_cf89fbc4b1fbcd80a6bf2f6099ed94595549ac810e9e1710d9a1ae03e3175524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "es-bar/list-content/practice.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf89fbc4b1fbcd80a6bf2f6099ed94595549ac810e9e1710d9a1ae03e3175524->leave($__internal_cf89fbc4b1fbcd80a6bf2f6099ed94595549ac810e9e1710d9a1ae03e3175524_prof);

    }

    // line 2
    public function block_esBarTitle($context, array $blocks = array())
    {
        $__internal_634891ca9df3c8126ebc507af49263a94d28970772abf1e8b461e732f0586dbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_634891ca9df3c8126ebc507af49263a94d28970772abf1e8b461e732f0586dbb->enter($__internal_634891ca9df3c8126ebc507af49263a94d28970772abf1e8b461e732f0586dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esBarTitle"));

        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("我的考试/作业"), "html", null, true);
        echo "
";
        
        $__internal_634891ca9df3c8126ebc507af49263a94d28970772abf1e8b461e732f0586dbb->leave($__internal_634891ca9df3c8126ebc507af49263a94d28970772abf1e8b461e732f0586dbb_prof);

    }

    // line 6
    public function block_esBarBody($context, array $blocks = array())
    {
        $__internal_a84ec2b74ed03dedec7219ada04faa470971f1975bb4d2ceb7444f78ddff6dce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a84ec2b74ed03dedec7219ada04faa470971f1975bb4d2ceb7444f78ddff6dce->enter($__internal_a84ec2b74ed03dedec7219ada04faa470971f1975bb4d2ceb7444f78ddff6dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esBarBody"));

        // line 7
        echo "  <div class=\"text-center\">
    <div class=\"btn-group btn-action\">
      <a href=\"javascript:;\" data-url=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esbar_my_practice", array("status" => "finished"));
        echo "\" class=\"btn btn-primary ";
        if ((((array_key_exists("esBarMenu", $context)) ? (_twig_default_filter(($context["esBarMenu"] ?? $this->getContext($context, "esBarMenu")), "")) : ("")) == "finished")) {
            echo "active";
        }
        echo "\" id=\"bar-practice-finish\"><span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已批阅"), "html", null, true);
        echo "</span></a>
      <a href=\"javascript:;\" data-url=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esbar_my_practice", array("status" => "reviewing"));
        echo "\" class=\"btn btn-primary ";
        if ((((array_key_exists("esBarMenu", $context)) ? (_twig_default_filter(($context["esBarMenu"] ?? $this->getContext($context, "esBarMenu")), "")) : ("")) != "finished")) {
            echo "active";
        }
        echo "\" id=\"bar-practice-review\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已提交"), "html", null, true);
        echo "</a>
    </div>
  </div>
  <div class=\"bar-homework\">
    ";
        // line 14
        $this->displayBlock('myPractice', $context, $blocks);
        // line 17
        echo "  </div>
";
        
        $__internal_a84ec2b74ed03dedec7219ada04faa470971f1975bb4d2ceb7444f78ddff6dce->leave($__internal_a84ec2b74ed03dedec7219ada04faa470971f1975bb4d2ceb7444f78ddff6dce_prof);

    }

    // line 14
    public function block_myPractice($context, array $blocks = array())
    {
        $__internal_984c7eec20b86607edf96a52c95166fef15ddf06a601ed0ead67e275b1bb48ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_984c7eec20b86607edf96a52c95166fef15ddf06a601ed0ead67e275b1bb48ac->enter($__internal_984c7eec20b86607edf96a52c95166fef15ddf06a601ed0ead67e275b1bb48ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "myPractice"));

        // line 15
        echo "
    ";
        
        $__internal_984c7eec20b86607edf96a52c95166fef15ddf06a601ed0ead67e275b1bb48ac->leave($__internal_984c7eec20b86607edf96a52c95166fef15ddf06a601ed0ead67e275b1bb48ac_prof);

    }

    public function getTemplateName()
    {
        return "es-bar/list-content/practice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 15,  95 => 14,  87 => 17,  85 => 14,  72 => 10,  62 => 9,  58 => 7,  52 => 6,  42 => 3,  36 => 2,  11 => 1,);
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
    {{'我的考试/作业'|trans}}
{% endblock %}

{% block esBarBody %}
  <div class=\"text-center\">
    <div class=\"btn-group btn-action\">
      <a href=\"javascript:;\" data-url=\"{{ path('esbar_my_practice',{status:'finished'}) }}\" class=\"btn btn-primary {% if esBarMenu|default('') == 'finished'%}active{% endif %}\" id=\"bar-practice-finish\"><span>{{'已批阅'|trans}}</span></a>
      <a href=\"javascript:;\" data-url=\"{{ path('esbar_my_practice',{status:'reviewing'}) }}\" class=\"btn btn-primary {% if esBarMenu|default('') != 'finished' %}active{% endif %}\" id=\"bar-practice-review\">{{'已提交'|trans}}</a>
    </div>
  </div>
  <div class=\"bar-homework\">
    {% block myPractice %}

    {% endblock %}
  </div>
{% endblock %}", "es-bar/list-content/practice.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/es-bar/list-content/practice.html.twig");
    }
}
