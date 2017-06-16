<?php

/* css_loader.html.twig */
class __TwigTemplate_6749b9c4b1db27c0191bb00cb8fa5b5cff6182d657e17f4f11b2e88c7381e304 extends Twig_Template
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
        $__internal_56b2731df373d9b852678177d4aa9674fca7a54a91f29c6f80f96adf557db011 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56b2731df373d9b852678177d4aa9674fca7a54a91f29c6f80f96adf557db011->enter($__internal_56b2731df373d9b852678177d4aa9674fca7a54a91f29c6f80f96adf557db011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "css_loader.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->css());
        foreach ($context['_seq'] as $context["_key"] => $context["path"]) {
            // line 2
            echo "  ";
            if ((is_string($__internal_18e1b83a281783a24b6e5ab9f7d688d1e360fa9b3674ba394d25a53d366f2f9c = $context["path"]) && is_string($__internal_448afb99736456e44f8cb5f53b19a7e7ad8320f6509439d200da0022d2239365 = "http://") && ('' === $__internal_448afb99736456e44f8cb5f53b19a7e7ad8320f6509439d200da0022d2239365 || 0 === strpos($__internal_18e1b83a281783a24b6e5ab9f7d688d1e360fa9b3674ba394d25a53d366f2f9c, $__internal_448afb99736456e44f8cb5f53b19a7e7ad8320f6509439d200da0022d2239365)))) {
                // line 3
                echo "    <link href=\"";
                echo twig_escape_filter($this->env, $context["path"], "html", null, true);
                echo "\" rel=\"stylesheet\" />
  ";
            } else {
                // line 5
                echo "    <link href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("static-dist/" . $context["path"])), "html", null, true);
                echo "\" rel=\"stylesheet\" />
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['path'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_56b2731df373d9b852678177d4aa9674fca7a54a91f29c6f80f96adf557db011->leave($__internal_56b2731df373d9b852678177d4aa9674fca7a54a91f29c6f80f96adf557db011_prof);

    }

    public function getTemplateName()
    {
        return "css_loader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 3,  26 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for path in css() %}
  {% if path starts with 'http://' %}
    <link href=\"{{ path }}\" rel=\"stylesheet\" />
  {% else %}
    <link href=\"{{ asset('static-dist/' ~ path) }}\" rel=\"stylesheet\" />
  {% endif %}
{% endfor %}", "css_loader.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/css_loader.html.twig");
    }
}
