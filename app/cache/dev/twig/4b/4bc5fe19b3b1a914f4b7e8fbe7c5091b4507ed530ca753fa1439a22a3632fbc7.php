<?php

/* default/top-navigation.html.twig */
class __TwigTemplate_7a0692c88f5a565d5fa30c4bf169d1ab0814ecb833332419dd886046bf739835 extends Twig_Template
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
        $__internal_1ec0a3c8a5a1f2af5748b91ebeffab4117edd1e3102194d9033255fa94184bee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ec0a3c8a5a1f2af5748b91ebeffab4117edd1e3102194d9033255fa94184bee->enter($__internal_1ec0a3c8a5a1f2af5748b91ebeffab4117edd1e3102194d9033255fa94184bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/top-navigation.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["navigations"] ?? $this->getContext($context, "navigations")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["_key"] => $context["nav"]) {
            if ($this->getAttribute($context["nav"], "isOpen", array())) {
                // line 2
                echo "  ";
                $context["subNavs"] = (($this->getAttribute($context["nav"], "children", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["nav"], "children", array()), array())) : (array()));
                // line 3
                echo "  ";
                if ((($this->getAttribute($context["loop"], "index", array()) == 6) &&  !((array_key_exists("isMobile", $context)) ? (_twig_default_filter(($context["isMobile"] ?? $this->getContext($context, "isMobile")), false)) : (false)))) {
                    // line 4
                    echo "    <li class=\"nav-more nav-hover\">
      <a class=\"more\">
        <i class=\"es-icon es-icon-morehoriz\"></i>
      </a>
      <ul class=\"dropdown-menu\" role=\"menu\">
        ";
                    // line 9
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["navigations"] ?? $this->getContext($context, "navigations")), 5, null));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    foreach ($context['_seq'] as $context["_key"] => $context["nav"]) {
                        if ($this->getAttribute($context["nav"], "isOpen", array())) {
                            // line 10
                            echo "          ";
                            $context["subNavs"] = (($this->getAttribute($context["nav"], "children", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["nav"], "children", array()), array())) : (array()));
                            // line 11
                            echo "
          ";
                            // line 12
                            $this->loadTemplate("default/navigation-li.html.twig", "default/top-navigation.html.twig", 12)->display($context);
                            // line 13
                            echo "        ";
                            ++$context['loop']['index0'];
                            ++$context['loop']['index'];
                            $context['loop']['first'] = false;
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nav'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 14
                    echo "      </ul>
    </li>
  ";
                }
                // line 17
                echo "
  ";
                // line 18
                if ((($this->getAttribute($context["loop"], "index", array()) < 6) || ((array_key_exists("isMobile", $context)) ? (_twig_default_filter(($context["isMobile"] ?? $this->getContext($context, "isMobile")), false)) : (false)))) {
                    // line 19
                    echo "    ";
                    $this->loadTemplate("default/navigation-li.html.twig", "default/top-navigation.html.twig", 19)->display($context);
                    // line 20
                    echo "  ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nav'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_1ec0a3c8a5a1f2af5748b91ebeffab4117edd1e3102194d9033255fa94184bee->leave($__internal_1ec0a3c8a5a1f2af5748b91ebeffab4117edd1e3102194d9033255fa94184bee_prof);

    }

    public function getTemplateName()
    {
        return "default/top-navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 20,  85 => 19,  83 => 18,  80 => 17,  75 => 14,  65 => 13,  63 => 12,  60 => 11,  57 => 10,  46 => 9,  39 => 4,  36 => 3,  33 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for nav in navigations if nav.isOpen %}
  {% set subNavs = nav.children|default([]) %}
  {% if  loop.index == 6  and not isMobile|default(false) %}
    <li class=\"nav-more nav-hover\">
      <a class=\"more\">
        <i class=\"es-icon es-icon-morehoriz\"></i>
      </a>
      <ul class=\"dropdown-menu\" role=\"menu\">
        {% for nav in navigations[5:]  if nav.isOpen %}
          {% set subNavs = nav.children|default([]) %}

          {% include 'default/navigation-li.html.twig' %}
        {% endfor %}
      </ul>
    </li>
  {% endif %}

  {% if loop.index < 6 or isMobile|default(false) %}
    {% include 'default/navigation-li.html.twig' %}
  {% endif %}
{% endfor %}
", "default/top-navigation.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/default/top-navigation.html.twig");
    }
}
