<?php

/* es-bar/list-content/notification.html.twig */
class __TwigTemplate_18040bccf44e1fba54bfb01586dd1339ee44e4c40871bb6ec720d1cee25dfc35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("es-bar/layout.html.twig", "es-bar/list-content/notification.html.twig", 1);
        $this->blocks = array(
            'esBarTitle' => array($this, 'block_esBarTitle'),
            'esBarBody' => array($this, 'block_esBarBody'),
            'myMessage' => array($this, 'block_myMessage'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "es-bar/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_esBarTitle($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("通知"), "html", null, true);
        echo "
";
    }

    // line 6
    public function block_esBarBody($context, array $blocks = array())
    {
        // line 7
        echo "  <ul class=\"bar-message\">
    ";
        // line 8
        $this->displayBlock('myMessage', $context, $blocks);
        // line 11
        echo "  </ul>
";
    }

    // line 8
    public function block_myMessage($context, array $blocks = array())
    {
        // line 9
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "es-bar/list-content/notification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 9,  53 => 8,  48 => 11,  46 => 8,  43 => 7,  40 => 6,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "es-bar/list-content/notification.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/es-bar/list-content/notification.html.twig");
    }
}
