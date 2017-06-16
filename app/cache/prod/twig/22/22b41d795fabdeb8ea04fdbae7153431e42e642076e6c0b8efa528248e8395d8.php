<?php

/* css_loader.html.twig */
class __TwigTemplate_8efc8b7e42d59cb63fc0f840639581c711b9c5b1ce561e97ccece21747c37e7c extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->css());
        foreach ($context['_seq'] as $context["_key"] => $context["path"]) {
            // line 2
            echo "  ";
            if ((is_string($__internal_e669891c2ae08ae631ed1d36176d95720e01000f1588c92ce41237f513c08b82 = $context["path"]) && is_string($__internal_12400eb291f0c3fab4d01eb782c9c4cc25af3c4b37633e8a8beb8d08fbe5d3ef = "http://") && ('' === $__internal_12400eb291f0c3fab4d01eb782c9c4cc25af3c4b37633e8a8beb8d08fbe5d3ef || 0 === strpos($__internal_e669891c2ae08ae631ed1d36176d95720e01000f1588c92ce41237f513c08b82, $__internal_12400eb291f0c3fab4d01eb782c9c4cc25af3c4b37633e8a8beb8d08fbe5d3ef)))) {
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
        return array (  32 => 5,  26 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "css_loader.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/css_loader.html.twig");
    }
}
