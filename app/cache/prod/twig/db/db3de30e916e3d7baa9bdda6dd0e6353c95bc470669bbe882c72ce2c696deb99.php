<?php

/* message/template/conversation-text.tpl.html.twig */
class __TwigTemplate_e71b11c993eff1201e6a7a80cf5f08304a7f6cb348a58437fe8659cd28e34250 extends Twig_Template
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
        echo "<li class=\"media\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_conversation_show", array("conversationId" => $this->getAttribute((isset($context["conversation"]) ? $context["conversation"] : null), "id", array()))), "html", null, true);
        echo "\">
  ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_avatar", array(0 => (isset($context["fromUser"]) ? $context["fromUser"] : null), 1 => "pull-left media-object"), "method"), "html", null, true);
        echo "
  <div class=\"media-body\">
    <h4 class=\"media-heading\">
      ";
        // line 5
        if (($this->getAttribute((isset($context["conversation"]) ? $context["conversation"] : null), "latestMessageUserId", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()))) {
            // line 6
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("发给"), "html", null, true);
            echo "
      ";
        }
        // line 8
        echo "      ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_link", array(0 => (isset($context["fromUser"]) ? $context["fromUser"] : null)), "method"), "html", null, true);
        echo ":
      ";
        // line 9
        echo $this->env->getExtension('AppBundle\Twig\WebExtension')->plainTextFilter($this->getAttribute((isset($context["conversation"]) ? $context["conversation"] : null), "latestMessageContent", array()), 40);
        echo "

      ";
        // line 11
        if (($this->getAttribute((isset($context["conversation"]) ? $context["conversation"] : null), "unreadNum", array()) > 0)) {
            // line 12
            echo "        <span class=\"text-warning\">(";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%unreadNum%条未读", array("%unreadNum%" => $this->getAttribute((isset($context["conversation"]) ? $context["conversation"] : null), "unreadNum", array()))), "html", null, true);
            echo ")</span>
      ";
        }
        // line 14
        echo "    </h4>

    <div class=\"conversation-footer clearfix\">
      <span class=\"pull-left\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->smarttimeFilter($this->getAttribute((isset($context["conversation"]) ? $context["conversation"] : null), "latestMessageTime", array())), "html", null, true);
        echo "</span>
      <span class=\"pull-right\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("共%messageNum%条", array("%messageNum%" => $this->getAttribute((isset($context["conversation"]) ? $context["conversation"] : null), "messageNum", array()))), "html", null, true);
        echo "</span>
      <div class=\"actions pull-right\">
        <a class=\"delete-conversation-btn color-gray\" href=\"javascript:\" data-url=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_conversation_delete", array("conversationId" => $this->getAttribute((isset($context["conversation"]) ? $context["conversation"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
        echo "</a>
        <span class=\"color-gray mhm\">|</span>
      </div>
    </div>
  </div>
</li>";
    }

    public function getTemplateName()
    {
        return "message/template/conversation-text.tpl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 20,  65 => 18,  61 => 17,  56 => 14,  50 => 12,  48 => 11,  43 => 9,  38 => 8,  32 => 6,  30 => 5,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "message/template/conversation-text.tpl.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/message/template/conversation-text.tpl.html.twig");
    }
}
