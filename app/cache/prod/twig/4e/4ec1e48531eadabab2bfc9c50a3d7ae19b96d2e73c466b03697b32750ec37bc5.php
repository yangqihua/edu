<?php

/* user/group.html.twig */
class __TwigTemplate_ad3407865b5fcc7806866f0a2c79855b463d5adeb4a1c25c54f6a7cbca3c2449 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("user/layout.html.twig", "user/group.html.twig", 1);
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
        $context["pageNav"] = "group";
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
        echo "  ";
        if (($context["adminGroups"] ?? null)) {
            // line 9
            echo "    <div class=\"es-piece\">
      <div class=\"piece-header\">
        ";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("管理小组"), "html", null, true);
            echo "
      </div>
      ";
            // line 13
            $this->loadTemplate("my/learning/group/groups-ul.html.twig", "user/group.html.twig", 13)->display(array_merge($context, array("groups" => ($context["adminGroups"] ?? null))));
            // line 14
            echo "    </div>
    <hr>
  ";
        }
        // line 17
        echo "  <div class=\"es-piece\">
    <div class=\"piece-header\">
      ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("加入小组"), "html", null, true);
        echo "
    </div>
    ";
        // line 21
        $this->loadTemplate("my/learning/group/groups-ul.html.twig", "user/group.html.twig", 21)->display(array_merge($context, array("groups" => ($context["groups"] ?? null))));
        // line 22
        echo "  </div>
  ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? null), "paginator", array(0 => ($context["paginator"] ?? null)), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "user/group.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 23,  71 => 22,  69 => 21,  64 => 19,  60 => 17,  55 => 14,  53 => 13,  48 => 11,  44 => 9,  41 => 8,  38 => 7,  32 => 3,  28 => 1,  26 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "user/group.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/user/group.html.twig");
    }
}
