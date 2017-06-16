<?php

/* admin/developer-setting/index.html.twig */
class __TwigTemplate_2a2707541868aae08444b6d60d20b306486623139c9b59647137a1024c5867b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/developer-setting/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["menu"] = "admin_setting_message";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开发者设置"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"page-header\"><h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开发者设置"), "html", null, true);
        echo "</h1></div>

";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? null), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" method=\"post\" novalidate>

  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("调试"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      ";
        // line 19
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("debug", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭")), $this->getAttribute(($context["developerSetting"] ?? null), "debug", array()));
        echo "
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("应用中心API地址"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      <input class=\"form-control\" type=\"text\" name=\"app_api_url\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["developerSetting"] ?? null), "app_api_url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["developerSetting"] ?? null), "app_api_url", array()), "")) : ("")), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("云服务API地址"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      <input class=\"form-control\" type=\"text\" name=\"cloud_api_server\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["developerSetting"] ?? null), "cloud_api_server", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["developerSetting"] ?? null), "cloud_api_server", array()), "")) : ("")), "html", null, true);
        echo "\">
    </div>
  </div>

";
        // line 49
        echo "
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label>Push API";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("地址"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      <input class=\"form-control\" type=\"text\" name=\"cloud_api_tui_server\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["developerSetting"] ?? null), "cloud_api_tui_server", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["developerSetting"] ?? null), "cloud_api_tui_server", array()), "")) : ("")), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label>Event API";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("地址"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      <input class=\"form-control\" type=\"text\" name=\"cloud_api_event_server\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["developerSetting"] ?? null), "cloud_api_event_server", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["developerSetting"] ?? null), "cloud_api_event_server", array()), "")) : ("")), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label>";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("IMAPI地址"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      <input class=\"form-control\" type=\"text\" name=\"cloud_api_im_server\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["developerSetting"] ?? null), "cloud_api_im_server", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["developerSetting"] ?? null), "cloud_api_im_server", array()), "http://imapi.edusoho.net/v1/")) : ("http://imapi.edusoho.net/v1/")), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label>";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("气球云SDK的CDN地址"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      <input class=\"form-control\" type=\"text\" name=\"cloud_sdk_cdn\" value=\"";
        // line 82
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["developerSetting"] ?? null), "cloud_sdk_cdn", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["developerSetting"] ?? null), "cloud_sdk_cdn", array()), "")) : ("")), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label>";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("HLS加密视频"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      ";
        // line 91
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("hls_encrypted", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭")), $this->getAttribute(($context["developerSetting"] ?? null), "hls_encrypted", array()));
        echo "
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label>";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("是否无外网"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      ";
        // line 100
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("without_network", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("是"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("否")), (($this->getAttribute(($context["developerSetting"] ?? null), "without_network", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["developerSetting"] ?? null), "without_network", array()), 0)) : (0)));
        echo "
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"controls col-md-offset-3 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提交"), "html", null, true);
        echo "</button>
    </div>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">

</form>

<div class=\"alert alert-warning\">
  <h4>";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("注意事项"), "html", null, true);
        echo "</h4>
  <ul>
    <li>";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("此页设置，仅供调试使用，请勿随意修改参数，不然将造成系统不可预知的错误。"), "html", null, true);
        echo "</li>
    <li>";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请保持："), "html", null, true);
        echo "<br>
      ";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("「调试」：关闭"), "html", null, true);
        echo "<br>
      ";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("「应用中心API地址」：空"), "html", null, true);
        echo "<br>
      ";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("「云服务API地址」："), "html", null, true);
        echo "　http://api.edusoho.net ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("或 空"), "html", null, true);
        echo "<br>
      ";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("「IMAPI地址」："), "html", null, true);
        echo "　http://imapi.edusoho.net/v1/ ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("或 空"), "html", null, true);
        echo "<br>
      ";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("「HLS加密视频」：　开启"), "html", null, true);
        echo "
    </li>
  </ul>
</div>

";
    }

    public function getTemplateName()
    {
        return "admin/developer-setting/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 123,  238 => 122,  232 => 121,  228 => 120,  224 => 119,  220 => 118,  216 => 117,  211 => 115,  203 => 110,  196 => 106,  187 => 100,  181 => 97,  172 => 91,  166 => 88,  157 => 82,  151 => 79,  142 => 73,  136 => 70,  127 => 64,  121 => 61,  112 => 55,  106 => 52,  101 => 49,  94 => 37,  88 => 34,  79 => 28,  73 => 25,  64 => 19,  58 => 16,  49 => 10,  43 => 8,  40 => 7,  32 => 3,  28 => 1,  26 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/developer-setting/index.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/admin/developer-setting/index.html.twig");
    }
}
