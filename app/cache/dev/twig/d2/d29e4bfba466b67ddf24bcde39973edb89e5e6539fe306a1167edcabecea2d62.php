<?php

/* default/navigation-li.html.twig */
class __TwigTemplate_a0e8f5eeee9ed563729ac5d8df56da190829082e71f5fc8c386c6894403263de extends Twig_Template
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
        $__internal_71b91728838994c1cd1084049f06e5f9585ed2424d94c6bc0a3ee288834c5ea3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71b91728838994c1cd1084049f06e5f9585ed2424d94c6bc0a3ee288834c5ea3->enter($__internal_71b91728838994c1cd1084049f06e5f9585ed2424d94c6bc0a3ee288834c5ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/navigation-li.html.twig"));

        // line 1
        echo "<li class=\"";
        if (($context["subNavs"] ?? $this->getContext($context, "subNavs"))) {
            echo "nav-hover";
        }
        if ((($context["siteNav"] ?? $this->getContext($context, "siteNav")) && (($context["siteNav"] ?? $this->getContext($context, "siteNav")) == $this->getAttribute(($context["nav"] ?? $this->getContext($context, "nav")), "url", array())))) {
            echo " active ";
        }
        echo "\">
  <a href=\"";
        // line 2
        if ($this->getAttribute(($context["nav"] ?? $this->getContext($context, "nav")), "url", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->navigationUrlFilter($this->getAttribute(($context["nav"] ?? $this->getContext($context, "nav")), "url", array())), "html", null, true);
        } else {
            echo "javascript:;";
        }
        echo "\" ";
        if ($this->getAttribute(($context["nav"] ?? $this->getContext($context, "nav")), "isNewWin", array())) {
            echo "target=\"_blank\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["nav"] ?? $this->getContext($context, "nav")), "name", array()), "html", null, true);
        echo " ";
        if (($context["subNavs"] ?? $this->getContext($context, "subNavs"))) {
            echo " <b class=\"caret\"></b>";
        }
        echo "</a>
  ";
        // line 3
        if (($context["subNavs"] ?? $this->getContext($context, "subNavs"))) {
            // line 4
            echo "    <ul class=\"dropdown-menu\" role=\"menu\">
      ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["subNavs"] ?? $this->getContext($context, "subNavs")));
            foreach ($context['_seq'] as $context["_key"] => $context["subNav"]) {
                if ($this->getAttribute($context["subNav"], "isOpen", array())) {
                    // line 6
                    echo "        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->navigationUrlFilter($this->getAttribute($context["subNav"], "url", array())), "html", null, true);
                    echo "\"  ";
                    if ($this->getAttribute($context["subNav"], "isNewWin", array())) {
                        echo "target=\"_blank\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["subNav"], "name", array()), "html", null, true);
                    echo "</a></li>
      ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subNav'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "    </ul>
  ";
        }
        // line 10
        echo "</li>";
        
        $__internal_71b91728838994c1cd1084049f06e5f9585ed2424d94c6bc0a3ee288834c5ea3->leave($__internal_71b91728838994c1cd1084049f06e5f9585ed2424d94c6bc0a3ee288834c5ea3_prof);

    }

    public function getTemplateName()
    {
        return "default/navigation-li.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 10,  76 => 8,  60 => 6,  55 => 5,  52 => 4,  50 => 3,  32 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<li class=\"{% if subNavs %}nav-hover{% endif %}{% if siteNav and siteNav == nav.url %} active {% endif %}\">
  <a href=\"{% if nav.url %}{{ nav.url|navigation_url }}{% else %}javascript:;{% endif %}\" {% if nav.isNewWin %}target=\"_blank\"{% endif %}>{{ nav.name }} {% if subNavs %} <b class=\"caret\"></b>{% endif %}</a>
  {% if subNavs %}
    <ul class=\"dropdown-menu\" role=\"menu\">
      {% for subNav in subNavs if subNav.isOpen %}
        <li><a href=\"{{ subNav.url|navigation_url }}\"  {% if subNav.isNewWin %}target=\"_blank\"{% endif %}>{{ subNav.name }}</a></li>
      {% endfor %}
    </ul>
  {% endif %}
</li>", "default/navigation-li.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/default/navigation-li.html.twig");
    }
}
