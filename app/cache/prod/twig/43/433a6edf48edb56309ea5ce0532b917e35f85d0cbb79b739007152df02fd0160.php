<?php

/* css_loader.html.twig */
class __TwigTemplate_a5379e77f9f282eb2413d4c314cfed1455b62c62ba84faeadf7f33350d1c16c1 extends Twig_Template
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
            if ((is_string($__internal_b79b6860c01e3aa18df4cfb82845319950cd961a30ce35347a1dbb135bac2db6 = $context["path"]) && is_string($__internal_f45f9ddb081419ce74065a69617278aa333c5ecfbb0e3d119e71a710a5a7514b = "http://") && ('' === $__internal_f45f9ddb081419ce74065a69617278aa333c5ecfbb0e3d119e71a710a5a7514b || 0 === strpos($__internal_b79b6860c01e3aa18df4cfb82845319950cd961a30ce35347a1dbb135bac2db6, $__internal_f45f9ddb081419ce74065a69617278aa333c5ecfbb0e3d119e71a710a5a7514b)))) {
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
