<?php

/* message/template/message-item-text.tpl.html.twig */
class __TwigTemplate_ccf7da8b58791091b0c79de5d9c0c5156f1a6aa5e955cb28e8a034af6b80ef23 extends Twig_Template
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
        $context["messageFrom"] = ((($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "fromId", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()))) ? ("me") : ("she"));
        // line 2
        echo "<li class=\"media message-";
        echo twig_escape_filter($this->env, (isset($context["messageFrom"]) ? $context["messageFrom"] : null), "html", null, true);
        echo "\" parent-url=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message");
        echo "\">
  ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_avatar", array(0 => $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "createdUser", array()), 1 => (((((isset($context["messageFrom"]) ? $context["messageFrom"] : null) == "me")) ? ("pull-right") : ("pull-left")) . " media-object"), 2 => "", 3 => false), "method"), "html", null, true);
        echo "
  <div class=\"media-body\">
    <div class=\"popover ";
        // line 5
        if (($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "fromId", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()))) {
            echo "left";
        } else {
            echo "right";
        }
        echo "\">
      <div class=\"arrow\"></div>
      <div class=\"popover-content\">
        <div class=\"message-content\">
          ";
        // line 9
        if (((isset($context["messageFrom"]) ? $context["messageFrom"] : null) == "me")) {
            // line 10
            echo "            <strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("我："), "html", null, true);
            echo "</strong>
          ";
        } else {
            // line 12
            echo "            <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_link", array(0 => $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "createdUser", array())), "method"), "html", null, true);
            echo "：</strong>
          ";
        }
        // line 14
        echo "          ";
        echo nl2br($this->env->getExtension('AppBundle\Twig\WebExtension')->spaceToNbsp($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "content", array())));
        echo "
        </div>
        <div class=\"message-footer\">
          <span class=\"color-gray\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->smarttimeFilter($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "createdTime", array())), "html", null, true);
        echo "</span>
          <div class=\"message-actions\">
            <a class=\"color-gray delete-message\" href=\"javascript:\" data-url=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_delete", array("conversationId" => $this->getAttribute((isset($context["conversation"]) ? $context["conversation"] : null), "id", array()), "messageId" => $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "id", array()))), "html", null, true);
        echo "\"
            >";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
        echo "</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</li>
";
    }

    public function getTemplateName()
    {
        return "message/template/message-item-text.tpl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 20,  70 => 19,  65 => 17,  58 => 14,  52 => 12,  46 => 10,  44 => 9,  33 => 5,  28 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "message/template/message-item-text.tpl.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/message/template/message-item-text.tpl.html.twig");
    }
}
