<?php

/* login/ajax.html.twig */
class __TwigTemplate_fe7db04c874790ab80aedee4089fe3e3ce542a73ff8b68c6fb95ba2515d09c74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bootstrap-modal-layout.html.twig", "login/ajax.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["modal_class"] = "login-modal";
        // line 4
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/jquery-validation.js", 1 => "app/js/auth/login-ajax/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("登录%name%", array("%name%" => $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.name"))), "html", null, true);
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<form id=\"login-ajax-form\" class=\"form-vertical form-vertical-small\" method=\"post\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\">

  <div class=\"alert alert-danger\" style=\"display:none;\"></div>

  <div class=\"form-group mbl\">
    <label class=\"control-label hidden\" for=\"ajax-username\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("邮箱/手机/用户名"), "html", null, true);
        echo "</label>
    <div class=\"controls\">
      <input class=\"form-control input-lg\" type=\"text\" id=\"ajax-username\" name=\"_username\" placeholder=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("邮箱/手机/用户名"), "html", null, true);
        echo "\" />
    </div>
  </div>

  <div class=\"form-group mbl\">
    <label class=\"control-label hidden\" for=\"ajax-password\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("密码"), "html", null, true);
        echo "</label>
    <div class=\"controls\">
      <input class=\"form-control input-lg\" type=\"password\" id=\"ajax-password\" name=\"_password\" placeholder=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("密码"), "html", null, true);
        echo "\" />
    </div>
  </div>

  <div class=\"form-group mbl color-gray\">
    <input type=\"checkbox\" name=\"_remember_me\" checked=\"checked\"> ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("记住密码"), "html", null, true);
        echo "
  </div>

  <div class=\"form-group\">
    <button type=\"button\" class=\"btn btn-primary btn-lg btn-block js-submit-login-ajax\" data-loading-text=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在登录"), "html", null, true);
        echo "...\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("登录"), "html", null, true);
        echo "</button>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>

";
    }

    // line 38
    public function block_footer($context, array $blocks = array())
    {
        // line 39
        echo "<div class=\"text-left text-sm\">
  <a class=\"link-primary\" href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("password_reset");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("找回密码"), "html", null, true);
        echo "</a>
  <span class=\"color-gray mhs\">|</span>
  <span class=\"color-gray\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("还没有注册帐号？"), "html", null, true);
        echo "</span>
  <a class=\"link-primary\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register", array("goto" => (isset($context["_target_path"]) ? $context["_target_path"] : null))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("立即注册"), "html", null, true);
        echo "</a>
</div>

";
        // line 46
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("login_bind.enabled")) {
            // line 47
            echo "  <div class=\"social-login\">
    <span>
      ";
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Login:oauth2LoginsBlock", array("targetPath" => (isset($context["_target_path"]) ? $context["_target_path"] : null))));
            echo "
    </span>
    <div class=\"line\"></div>
  </div>
";
        }
        // line 54
        echo "

";
    }

    public function getTemplateName()
    {
        return "login/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 54,  133 => 49,  129 => 47,  127 => 46,  119 => 43,  115 => 42,  108 => 40,  105 => 39,  102 => 38,  94 => 33,  86 => 30,  79 => 26,  71 => 21,  66 => 19,  58 => 14,  53 => 12,  44 => 7,  41 => 6,  35 => 2,  31 => 1,  29 => 4,  27 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "login/ajax.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/login/ajax.html.twig");
    }
}
