<?php

/* article/part/category.html.twig */
class __TwigTemplate_ec113d8290c2f2c8a382f1378f6128791c9b469471df9cd0d575bf393054fff8 extends Twig_Template
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
        $context["nextCode"] = "";
        // line 2
        echo "<div class=\"es-tabs article-list-header\">
  <div class=\"tab-header\">
    <ul class=\"clearfix\">
      <li class=\"";
        // line 5
        if (twig_test_empty(($context["categoryCode"] ?? null))) {
            echo "active";
        }
        echo "\"><a
          href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_show");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%article_name%频道", array("%article_name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("article.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("资讯")))), "html", null, true);
        echo "</a></li>
      ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rootCategories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cateogory"]) {
            // line 8
            echo "        ";
            if (($this->getAttribute($context["cateogory"], "parentId", array()) == 0)) {
                // line 9
                echo "          <li class=\"";
                if (twig_in_filter($this->getAttribute($context["cateogory"], "id", array()), ($context["activeIds"] ?? null))) {
                    $context["nextCode"] = $this->getAttribute($context["cateogory"], "code", array());
                    echo "active";
                }
                echo "\"><a
              href=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_category", array("categoryCode" => $this->getAttribute($context["cateogory"], "code", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cateogory"], "name", array()), "html", null, true);
                echo "</a></li>
        ";
            }
            // line 12
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cateogory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    </ul>
  </div>

  ";
        // line 16
        if (($context["categories"] ?? null)) {
            // line 17
            echo "    <div class=\"tab-body\">
      ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["l"] => $context["cs"]) {
                if ($context["cs"]) {
                    // line 19
                    echo "        <ul class=\"clearfix\">
          ";
                    // line 20
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["cs"]);
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
                    foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                        // line 21
                        echo "            ";
                        if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                            // line 22
                            echo "              <li class=\"all\"><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_category", array("categoryCode" => ($context["nextCode"] ?? null))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("全部"), "html", null, true);
                            echo "</a></li>
            ";
                        }
                        // line 24
                        echo "            <li class=\"";
                        if (twig_in_filter($this->getAttribute($context["c"], "id", array()), ($context["activeIds"] ?? null))) {
                            $context["nextCode"] = $this->getAttribute($context["c"], "code", array());
                            echo "active";
                        }
                        echo "\"><a
                href=\"";
                        // line 25
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_category", array("categoryCode" => $this->getAttribute($context["c"], "code", array()))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "name", array()), "html", null, true);
                        echo "</a></li>
          ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 27
                    echo "        </ul>
      ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['l'], $context['cs'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "    </div>
  ";
        }
        // line 31
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "article/part/category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 31,  146 => 29,  138 => 27,  120 => 25,  112 => 24,  104 => 22,  101 => 21,  84 => 20,  81 => 19,  76 => 18,  73 => 17,  71 => 16,  66 => 13,  60 => 12,  53 => 10,  45 => 9,  42 => 8,  38 => 7,  32 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "article/part/category.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/article/part/category.html.twig");
    }
}
