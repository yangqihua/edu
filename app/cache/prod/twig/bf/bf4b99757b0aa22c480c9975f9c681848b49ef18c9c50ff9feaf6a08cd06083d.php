<?php

/* group/layout.html.twig */
class __TwigTemplate_7e667fd9db49a274890068a41c0aeba35f68b8f47251982c9664c60305fca0f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "group/layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'group_body' => array($this, 'block_group_body'),
            'group_main' => array($this, 'block_group_main'),
            'group_side' => array($this, 'block_group_side'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["bodyClass"] = "group-page";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "- ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "  ";
        $this->loadTemplate("group/group-header.html.twig", "group/layout.html.twig", 5)->display(array_merge($context, array("groupinfo" => ($context["groupinfo"] ?? null), "is_groupmember" => ((array_key_exists("is_groupmember", $context)) ? (_twig_default_filter(($context["is_groupmember"] ?? null), "")) : ("")))));
        // line 6
        echo "  ";
        $this->displayBlock('group_body', $context, $blocks);
        // line 17
        echo "  ";
        $this->loadTemplate("common/weixin-share.html.twig", "group/layout.html.twig", 17)->display(array_merge($context, array("title" => $this->getAttribute(        // line 18
($context["groupinfo"] ?? null), "title", array()), "desc" => $this->getAttribute(        // line 19
($context["groupinfo"] ?? null), "about", array()), "link" => $this->getAttribute($this->getAttribute(        // line 20
($context["app"] ?? null), "request", array()), "uri", array()), "imgUrl" => $this->env->getExtension('AppBundle\Twig\WebExtension')->getFurl($this->getAttribute(        // line 21
($context["groupinfo"] ?? null), "logo", array()), "course.png"))));
    }

    // line 6
    public function block_group_body($context, array $blocks = array())
    {
        // line 7
        echo "    <div class=\"row\">
      <div class=\"col-md-9 group-main\">
        ";
        // line 9
        $this->displayBlock('group_main', $context, $blocks);
        // line 10
        echo "      </div>

      <div class=\"col-md-3 group-side\">
        ";
        // line 13
        $this->displayBlock('group_side', $context, $blocks);
        // line 14
        echo "      </div>
    </div>
  ";
    }

    // line 9
    public function block_group_main($context, array $blocks = array())
    {
    }

    // line 13
    public function block_group_side($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "group/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 13,  82 => 9,  76 => 14,  74 => 13,  69 => 10,  67 => 9,  63 => 7,  60 => 6,  56 => 21,  55 => 20,  54 => 19,  53 => 18,  51 => 17,  48 => 6,  45 => 5,  42 => 4,  35 => 2,  31 => 1,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "group/layout.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/group/layout.html.twig");
    }
}
