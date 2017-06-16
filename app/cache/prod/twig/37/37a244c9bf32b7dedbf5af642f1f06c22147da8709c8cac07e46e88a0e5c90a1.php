<?php

/* @root/src/AppBundle/Extensions/NotificationTemplate/default.tpl.html.twig */
class __TwigTemplate_df8927c89e3459172373ec42768d5dfd55f006bb81e48070b07aec27b45eab89 extends Twig_Template
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
        echo "<li class=\"media\">
  <div class=\"pull-left\">
    <span class=\"glyphicon glyphicon-volume-down media-object\"></span>
  </div>
  <div class=\"media-body\">
    <div class=\"notification-body\">
      ";
        // line 7
        echo $this->env->getExtension('AppBundle\Twig\WebExtension')->getPurifyHtml($this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "content", array()), "message", array()));
        echo "
    </div>
    <div class=\"notification-footer\">
     ";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->dateformatFilter($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "createdTime", array())), "html", null, true);
        echo "  
    </div>
  </div>
</li>";
    }

    public function getTemplateName()
    {
        return "@root/src/AppBundle/Extensions/NotificationTemplate/default.tpl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 10,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@root/src/AppBundle/Extensions/NotificationTemplate/default.tpl.html.twig", "/Users/yangqihua/Sites/edusoho/src/AppBundle/Extensions/NotificationTemplate/default.tpl.html.twig");
    }
}
