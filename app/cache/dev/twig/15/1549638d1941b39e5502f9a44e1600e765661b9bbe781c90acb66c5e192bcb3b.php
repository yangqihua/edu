<?php

/* js_loader.html.twig */
class __TwigTemplate_ddfcf7377cfca83654afbf4ec4db2bbfd0350d1679bff13f93c4293d9199c948 extends Twig_Template
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
        $__internal_bcecda0c094ac0fc17cced1e01f91e3fe5a6f828cbb1f564c797bd32223ad337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcecda0c094ac0fc17cced1e01f91e3fe5a6f828cbb1f564c797bd32223ad337->enter($__internal_bcecda0c094ac0fc17cced1e01f91e3fe5a6f828cbb1f564c797bd32223ad337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "js_loader.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script());
        foreach ($context['_seq'] as $context["_key"] => $context["path"]) {
            // line 2
            echo "  ";
            if (twig_in_filter("//", $context["path"])) {
                // line 3
                echo "    ";
                if (twig_in_filter("js-sdk", $context["path"])) {
                    // line 4
                    echo "      <script src=\"";
                    echo twig_escape_filter($this->env, (($context["path"] . "?") . twig_round(($this->getAttribute(twig_date_converter($this->env), "timestamp", array()) / 100))), "html", null, true);
                    echo "\"></script>
    ";
                } else {
                    // line 6
                    echo "      <script src=\"";
                    echo twig_escape_filter($this->env, (($context["path"] . "?") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetVersion("")), "html", null, true);
                    echo "\"></script>
    ";
                }
                // line 8
                echo "  ";
            } else {
                // line 9
                echo "    <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("static-dist/" . $context["path"])), "html", null, true);
                echo "\"></script>
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['path'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_bcecda0c094ac0fc17cced1e01f91e3fe5a6f828cbb1f564c797bd32223ad337->leave($__internal_bcecda0c094ac0fc17cced1e01f91e3fe5a6f828cbb1f564c797bd32223ad337_prof);

    }

    public function getTemplateName()
    {
        return "js_loader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  44 => 8,  38 => 6,  32 => 4,  29 => 3,  26 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for path in script()  %}
  {% if '//' in path %}
    {% if 'js-sdk' in path %}
      <script src=\"{{ path ~ '?' ~ (date().timestamp / 100)|round }}\"></script>
    {% else %}
      <script src=\"{{ path ~ '?' ~ asset_version('')}}\"></script>
    {% endif %}
  {% else %}
    <script src=\"{{ asset('static-dist/' ~ path) }}\"></script>
  {% endif %}
{% endfor %}", "js_loader.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/js_loader.html.twig");
    }
}
