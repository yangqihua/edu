<?php

/* es-bar/list-content/study-center.html.twig */
class __TwigTemplate_29e3243a237674d9735fa055dfcfc5896e3b3f1d216c570cea3bacb1050da2c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("es-bar/layout.html.twig", "es-bar/list-content/study-center.html.twig", 1);
        $this->blocks = array(
            'esBarTitle' => array($this, 'block_esBarTitle'),
            'esBarBody' => array($this, 'block_esBarBody'),
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

    // line 4
    public function block_esBarTitle($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学习中心"), "html", null, true);
        echo "
";
    }

    // line 8
    public function block_esBarBody($context, array $blocks = array())
    {
        // line 9
        echo "  <!-- 用户 -->
  ";
        // line 10
        $this->loadTemplate("es-bar/list-content/study-center/user.html.twig", "es-bar/list-content/study-center.html.twig", 10)->display($context);
        // line 11
        echo "

  <!-- 直播预告 -->
  ";
        // line 14
        $this->loadTemplate("es-bar/list-content/study-center/live.html.twig", "es-bar/list-content/study-center.html.twig", 14)->display($context);
        // line 15
        echo "
  <!-- 学习任务 -->
  ";
        // line 17
        $this->loadTemplate("es-bar/list-content/study-center/study-mission.html.twig", "es-bar/list-content/study-center.html.twig", 17)->display($context);
    }

    public function getTemplateName()
    {
        return "es-bar/list-content/study-center.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 17,  54 => 15,  52 => 14,  47 => 11,  45 => 10,  42 => 9,  39 => 8,  32 => 5,  29 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "es-bar/list-content/study-center.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/es-bar/list-content/study-center.html.twig");
    }
}
