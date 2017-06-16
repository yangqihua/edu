<?php

/* open-course-manage/course-set-price-interval.html.twig */
class __TwigTemplate_b8ad3634311aad0d6f343d90440bc41105e0aa8a3e994645bbb26db1bdbbbb8e extends Twig_Template
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
        $context["minPrice"] = $this->env->getExtension('AppBundle\Twig\AppExtension')->currency($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "minCoursePrice", array()));
        // line 2
        $context["maxPrice"] = $this->env->getExtension('AppBundle\Twig\AppExtension')->currency($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "maxCoursePrice", array()));
        // line 3
        echo "
";
        // line 4
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.coin_enabled") && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.price_type") == "Coin"))) {
            // line 5
            echo "    <span class=\"course-price course-price-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "html", null, true);
            echo "\" style=\"display:inline\">
    ";
            // line 6
            if ((((isset($context["minPrice"]) ? $context["minPrice"] : null) == 0) && ((isset($context["maxPrice"]) ? $context["maxPrice"] : null) == 0))) {
                // line 7
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("免费"), "html", null, true);
                echo "
    ";
            } else {
                // line 9
                echo "        ";
                $context["minCoinPrice"] = ((isset($context["minPrice"]) ? $context["minPrice"] : null) * $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.cash_rate"));
                // line 10
                echo "        ";
                $context["maxCoinPrice"] = ((isset($context["maxPrice"]) ? $context["maxPrice"] : null) * $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.cash_rate"));
                // line 11
                echo "        ";
                // line 16
                echo "    ";
            }
            // line 17
            echo "  </span>
";
        } else {
            // line 19
            echo "    <span class=\"course-price course-price-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "html", null, true);
            echo "\">
    ";
            // line 20
            if ((((isset($context["minPrice"]) ? $context["minPrice"] : null) == 0) && ((isset($context["maxPrice"]) ? $context["maxPrice"] : null) == 0))) {
                // line 21
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("免费"), "html", null, true);
                echo "
    ";
            } else {
                // line 23
                echo "        ";
                if (((isset($context["minPrice"]) ? $context["minPrice"] : null) != (isset($context["maxPrice"]) ? $context["maxPrice"] : null))) {
                    // line 24
                    echo "            ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("价格 : %minPrice%元 - %maxPrice%元", array("%minPrice%" => (isset($context["minPrice"]) ? $context["minPrice"] : null), "%maxPrice%" => (isset($context["maxPrice"]) ? $context["maxPrice"] : null))), "html", null, true);
                    echo "
        ";
                } else {
                    // line 26
                    echo "            ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("价格 : %minPrice%元", array("%minPrice%" => (isset($context["minPrice"]) ? $context["minPrice"] : null))), "html", null, true);
                    echo "
        ";
                }
                // line 28
                echo "    ";
            }
            // line 29
            echo "  </span>
";
        }
    }

    public function getTemplateName()
    {
        return "open-course-manage/course-set-price-interval.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 29,  84 => 28,  78 => 26,  72 => 24,  69 => 23,  63 => 21,  61 => 20,  56 => 19,  52 => 17,  49 => 16,  47 => 11,  44 => 10,  41 => 9,  35 => 7,  33 => 6,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "open-course-manage/course-set-price-interval.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/open-course-manage/course-set-price-interval.html.twig");
    }
}
