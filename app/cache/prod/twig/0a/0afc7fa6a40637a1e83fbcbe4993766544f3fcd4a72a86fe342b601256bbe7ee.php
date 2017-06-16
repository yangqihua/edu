<?php

/* article/part/list-header-nav.html.twig */
class __TwigTemplate_3cac7c1d7c83a8573726af6c68436974b5dd2abef246765037f482025f86e957 extends Twig_Template
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
        $context["currentNavCategory"] = ((array_key_exists("categoryCode", $context)) ? (_twig_default_filter(($context["categoryCode"] ?? null), null)) : (null));
        // line 2
        $context["rootCategory"] = (($this->getAttribute(($context["rootCategory"] ?? null), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["rootCategory"] ?? null), "code", array()), null)) : (null));
        // line 3
        echo "<ul class=\"clearfix\">
  <li ";
        // line 4
        if ( !($context["currentNavCategory"] ?? null)) {
            echo " role=\"presentation\" class=\"active\" ";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_show");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%article_name%频道", array("%article_name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("article.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("资讯")))), "html", null, true);
        echo "</a></li>
  ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categoryTree"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 6
            echo "    ";
            if ((($this->getAttribute($context["cat"], "parentId", array()) == 0) && ($this->getAttribute($context["cat"], "published", array()) == 1))) {
                // line 7
                echo "       <li class=\"";
                if ((($context["rootCategory"] ?? null) == $this->getAttribute($context["cat"], "code", array()))) {
                    echo "active";
                }
                echo "\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_category", array("categoryCode" => $this->getAttribute($context["cat"], "code", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "name", array()), "html", null, true);
                echo "</a></li>
    ";
            }
            // line 9
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "article/part/list-header-nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 10,  55 => 9,  43 => 7,  40 => 6,  36 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "article/part/list-header-nav.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/article/part/list-header-nav.html.twig");
    }
}
