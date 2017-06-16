<?php

/* article/part/list-main.html.twig */
class __TwigTemplate_df2539d596de43f2c9fa31b64e6570322edb5b6f37102de0e1e871ed6bf43f16 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "article/part/list-main.html.twig", 1);
        // line 2
        echo "
<section class=\"es-section\">
  <div class=\"article-list\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 6
            echo "      ";
            $context["category"] = (($this->getAttribute(($context["categories"] ?? null), $this->getAttribute($context["article"], "categoryId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["categories"] ?? null), $this->getAttribute($context["article"], "categoryId", array()), array(), "array"))) : (""));
            // line 7
            echo "      ";
            if ( !twig_test_empty(($context["category"] ?? null))) {
                // line 8
                echo "        ";
                $this->loadTemplate("article/widget/list-item.html.twig", "article/part/list-main.html.twig", 8)->display($context);
                // line 9
                echo "      ";
            }
            // line 10
            echo "    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 11
            echo "      <div class=\"empty tac color-gray mvl\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("还没有任何资讯"), "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "  </div>
  ";
        // line 14
        echo $context["web_macro"]->getpaginator(($context["paginator"] ?? null));
        echo "
</section>
";
    }

    public function getTemplateName()
    {
        return "article/part/list-main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 14,  78 => 13,  69 => 11,  56 => 10,  53 => 9,  50 => 8,  47 => 7,  44 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "article/part/list-main.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/article/part/list-main.html.twig");
    }
}
