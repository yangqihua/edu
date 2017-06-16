<?php

/* course/widgets/course-set-price.html.twig */
class __TwigTemplate_319b8879913c9bd3817d7b9f5ba2c9a898d6f2e311bcbd0e8df0e2ddefd55d4f extends Twig_Template
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
        $__internal_53444783b6248a6f697d989e10c0b3c3ade30800fccdb30ccd6de7dc00343223 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53444783b6248a6f697d989e10c0b3c3ade30800fccdb30ccd6de7dc00343223->enter($__internal_53444783b6248a6f697d989e10c0b3c3ade30800fccdb30ccd6de7dc00343223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/widgets/course-set-price.html.twig"));

        // line 1
        $context["shows"] = ((array_key_exists("shows", $context)) ? (_twig_default_filter(($context["shows"] ?? $this->getContext($context, "shows")), array(0 => "full"))) : (array(0 => "full")));
        // line 2
        $context["priceType"] = ((($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.coin_enabled") && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.price_type") == "Coin"))) ? ("coin") : ("default"));
        // line 3
        echo "
<span class=\"course-price-widget\">

  ";
        // line 6
        if ($this->getAttribute(($context["courseSet"] ?? $this->getContext($context, "courseSet")), "discountId", array())) {
            // line 7
            echo "    ";
            if ((twig_in_filter("full", ($context["shows"] ?? $this->getContext($context, "shows"))) || twig_in_filter("price", ($context["shows"] ?? $this->getContext($context, "shows"))))) {
                // line 8
                echo "      ";
                if ((($context["priceType"] ?? $this->getContext($context, "priceType")) == "coin")) {
                    // line 9
                    echo "        <span class=\"price\">";
                    echo twig_escape_filter($this->env, ($this->getAttribute(($context["courseSet"] ?? $this->getContext($context, "courseSet")), "minCoursePrice", array()) * $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.cash_rate")), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.coin_name", $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("虚拟币")), "html", null, true);
                    echo "</span>
      ";
                } else {
                    // line 11
                    echo "        <span class=\"price\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%price%元", array("%price%" => $this->getAttribute(($context["courseSet"] ?? $this->getContext($context, "courseSet")), "minCoursePrice", array()))), "html", null, true);
                    echo "</span>
      ";
                }
                // line 13
                echo "    ";
            }
            // line 14
            echo "
    ";
            // line 15
            if ((twig_in_filter("full", ($context["shows"] ?? $this->getContext($context, "shows"))) || twig_in_filter("discount", ($context["shows"] ?? $this->getContext($context, "shows"))))) {
                // line 16
                echo "      <span class=\"discount\">
        ";
                // line 17
                if (($this->getAttribute(($context["courseSet"] ?? $this->getContext($context, "courseSet")), "discount", array()) == 0)) {
                    // line 18
                    echo "          ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("限免"), "html", null, true);
                    echo "
        ";
                } else {
                    // line 20
                    echo "          ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%discount%折", array("%discount%" => twig_round($this->getAttribute(($context["courseSet"] ?? $this->getContext($context, "courseSet")), "discount", array()), 2, "common"))), "html", null, true);
                    echo "
        ";
                }
                // line 22
                echo "      </span>
    ";
            }
            // line 24
            echo "    
  ";
        } else {
            // line 26
            echo "    ";
            if ((twig_in_filter("full", ($context["shows"] ?? $this->getContext($context, "shows"))) || twig_in_filter("price", ($context["shows"] ?? $this->getContext($context, "shows"))))) {
                // line 27
                echo "      ";
                if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.coin_enabled") && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.price_type") == "Coin"))) {
                    // line 28
                    echo "        ";
                    if (($this->getAttribute(($context["courseSet"] ?? $this->getContext($context, "courseSet")), "minCoursePrice", array()) > 0)) {
                        echo " 
          <span class=\"price\">";
                        // line 29
                        echo twig_escape_filter($this->env, ($this->getAttribute(($context["courseSet"] ?? $this->getContext($context, "courseSet")), "minCoursePrice", array()) * $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.cash_rate")), "html", null, true);
                        echo "
          ";
                        // line 30
                        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.coin_name", $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("虚拟币")), "html", null, true);
                        echo "</span>
        ";
                    } else {
                        // line 31
                        echo " 
          <span class=\"free\">";
                        // line 32
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("免费"), "html", null, true);
                        echo "</span> 
        ";
                    }
                    // line 34
                    echo "      ";
                } else {
                    // line 35
                    echo "        ";
                    if (($this->getAttribute(($context["courseSet"] ?? $this->getContext($context, "courseSet")), "minCoursePrice", array()) > 0)) {
                        // line 36
                        echo "          <span class=\"price\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%price%元", array("%price%" => $this->getAttribute(($context["courseSet"] ?? $this->getContext($context, "courseSet")), "minCoursePrice", array()))), "html", null, true);
                        echo "</span>
        ";
                    } else {
                        // line 37
                        echo " 
          <span class=\"free\">";
                        // line 38
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("免费"), "html", null, true);
                        echo "</span> 
        ";
                    }
                    // line 39
                    echo " 
      ";
                }
                // line 41
                echo "    ";
            }
            // line 42
            echo "  ";
        }
        // line 43
        echo "</span>";
        
        $__internal_53444783b6248a6f697d989e10c0b3c3ade30800fccdb30ccd6de7dc00343223->leave($__internal_53444783b6248a6f697d989e10c0b3c3ade30800fccdb30ccd6de7dc00343223_prof);

    }

    public function getTemplateName()
    {
        return "course/widgets/course-set-price.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 43,  141 => 42,  138 => 41,  134 => 39,  129 => 38,  126 => 37,  120 => 36,  117 => 35,  114 => 34,  109 => 32,  106 => 31,  101 => 30,  97 => 29,  92 => 28,  89 => 27,  86 => 26,  82 => 24,  78 => 22,  72 => 20,  66 => 18,  64 => 17,  61 => 16,  59 => 15,  56 => 14,  53 => 13,  47 => 11,  39 => 9,  36 => 8,  33 => 7,  31 => 6,  26 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set shows = shows|default(['full']) %}
{% set priceType = (setting('coin.coin_enabled') and setting('coin.price_type') == 'Coin') ? 'coin' : 'default'  %}

<span class=\"course-price-widget\">

  {% if courseSet.discountId %}
    {% if 'full' in shows or 'price' in shows %}
      {% if priceType == 'coin' %}
        <span class=\"price\">{{ courseSet.minCoursePrice * setting('coin.cash_rate')}} {{setting('coin.coin_name', '虚拟币'|trans)}}</span>
      {% else %}
        <span class=\"price\">{{'%price%元'|trans({'%price%': courseSet.minCoursePrice})}}</span>
      {% endif %}
    {% endif %}

    {% if 'full' in shows or 'discount' in shows %}
      <span class=\"discount\">
        {% if (courseSet.discount == 0) %}
          {{'限免'|trans}}
        {% else  %}
          {{'%discount%折'|trans({'%discount%': courseSet.discount|round(2, 'common') })}}
        {% endif %}
      </span>
    {% endif %}
    
  {% else %}
    {% if 'full' in shows or 'price' in shows %}
      {% if setting('coin.coin_enabled') and setting('coin.price_type') == 'Coin' %}
        {% if courseSet.minCoursePrice > 0 %} 
          <span class=\"price\">{{ courseSet.minCoursePrice * setting('coin.cash_rate')}}
          {{setting('coin.coin_name', '虚拟币'|trans)}}</span>
        {% else %} 
          <span class=\"free\">{{'免费'|trans}}</span> 
        {% endif  %}
      {% else %}
        {% if courseSet.minCoursePrice > 0 %}
          <span class=\"price\">{{'%price%元'|trans({'%price%': courseSet.minCoursePrice})}}</span>
        {% else %} 
          <span class=\"free\">{{'免费'|trans}}</span> 
        {% endif %} 
      {% endif %}
    {% endif %}
  {% endif %}
</span>", "course/widgets/course-set-price.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/course/widgets/course-set-price.html.twig");
    }
}
