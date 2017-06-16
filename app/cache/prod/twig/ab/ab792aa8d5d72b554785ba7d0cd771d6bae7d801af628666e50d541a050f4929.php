<?php

/* message/send-message-modal.html.twig */
class __TwigTemplate_66a9a9b00f90debf2dae55ec5cc1a4fd8d681862d68712d56d7f2490a05c9211 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("old-bootstrap-modal-layout.html.twig", "message/send-message-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "old-bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 39
        $context["hide_footer"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("发送私信"), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "  <form id=\"message-create-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_create", array("toId" => (isset($context["userId"]) ? $context["userId"] : null))), "html", null, true);
        echo "\">
    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"message_receiver\" class=\"required\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("收件人"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"message_receiver\" name=\"message[receiver]\" required=\"required\" class=\"form-control\" rows=\"1\" data-url=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_check_receiver");
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "receiver", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"message_content\" class=\"required\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("内容"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <textarea id=\"message_content\" name=\"message[content]\" required=\"required\" class=\"form-control\" rows=\"5\"></textarea>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-offset-2 col-md-8 controls\">
        <button class=\"btn btn-primary\" type=\"submit\" data-loading-text=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("发送中..."), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("发送"), "html", null, true);
        echo "</button>
      </div>
    </div>

    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  </form>
  ";
        // line 33
        $this->loadTemplate("seajs_loader_compatible.html.twig", "message/send-message-modal.html.twig", 33)->display(array_merge($context, array("topxiawebbundle" => true)));
        // line 34
        echo "  <script>
    app.lazyLoad = function() { app.load('user/message-send-modal') };
  </script>
";
    }

    public function getTemplateName()
    {
        return "message/send-message-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 34,  91 => 33,  86 => 31,  77 => 27,  65 => 18,  54 => 12,  48 => 9,  41 => 6,  38 => 5,  32 => 3,  28 => 1,  26 => 39,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "message/send-message-modal.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/message/send-message-modal.html.twig");
    }
}
