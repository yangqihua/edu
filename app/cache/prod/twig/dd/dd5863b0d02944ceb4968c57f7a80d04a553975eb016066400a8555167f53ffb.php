<?php

/* user/about.html.twig */
class __TwigTemplate_6e21acfe364fa252c0ee42ba6aa5f14dda1ff5395bb0bcfb88962da54102a628 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("user/layout.html.twig", "user/about.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "user/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["pageNav"] = ($context["type"] ?? null);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "  <div class=\"editor-text\">
\t ";
        // line 9
        if ($this->getAttribute(($context["userProfile"] ?? null), "about", array())) {
            echo $this->getAttribute(($context["userProfile"] ?? null), "about", array());
        } else {
            echo "<div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无介绍！"), "html", null, true);
            echo "</div>";
        }
        // line 10
        echo "  </div>
";
    }

    public function getTemplateName()
    {
        return "user/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 10,  44 => 9,  41 => 8,  38 => 7,  32 => 3,  28 => 1,  26 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "user/about.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/user/about.html.twig");
    }
}
