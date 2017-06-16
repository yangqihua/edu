<?php

/* register/index.html.twig */
class __TwigTemplate_0d33b3b7b4013c47c47e38d35eb686972c3c3bdf8812778906c2500862aa3d13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "register/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["bodyClass"] = "register";
        // line 4
        $context["parameter"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->getParametersFromUrl($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "uri", array()));
        // line 5
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("login_bind.weixinmob_enabled") == "1")) {
            // line 6
            $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/bootstrap-datetimepicker.js", 1 => "libs/jquery-validation.js", 2 => "app/js/auth/register/index.js", 3 => "app/js/auth/is-weixin/index.js"));
        } else {
            // line 8
            $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/bootstrap-datetimepicker.js", 1 => "libs/jquery-validation.js", 2 => "app/js/auth/register/index.js"));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("注册"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "  <div class=\"es-section login-section\">
    <div class=\"logon-tab clearfix\">
      <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login", array("goto" => (isset($context["_target_path"]) ? $context["_target_path"] : null))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("登录帐号"), "html", null, true);
        echo "</a>
      <a class=\"active\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("注册帐号"), "html", null, true);
        echo "</a>
    </div>
    <div class=\"login-main\">
      ";
        // line 18
        if ((isset($context["isRegisterEnabled"]) ? $context["isRegisterEnabled"] : null)) {
            // line 19
            echo "        <form id=\"register-form\" method=\"post\" action=\"\">
          ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
            echo "

          ";
            // line 22
            if (((isset($context["inviteCode"]) ? $context["inviteCode"] : null) != null)) {
                // line 23
                echo "            <div class=\"alert alert-info alert-sm\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("您正在通过<span class=\"color-gray mhs\">%inviteUser%</span>的邀请注册。", array("%inviteUser%" => $this->getAttribute((isset($context["inviteUser"]) ? $context["inviteUser"] : null), "nickname", array())));
                echo "</div>
          ";
            }
            // line 25
            echo "
          ";
            // line 26
            if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("auth.register_mode") == "email")) {
                // line 27
                echo "            <div class=\"form-group mbl\">
              <label class=\"control-label required\" for=\"register_email\">";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("邮箱地址"), "html", null, true);
                echo "</label>
              <div class=\"controls\">
                <input type=\"email\" id=\"register_email\" name=\"email\"  class=\"form-control input-lg\" data-url=\"";
                // line 30
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register_email_check");
                echo "\" placeholder=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("填写你常用的邮箱作为登录帐号"), "html", null, true);
                echo "\">
                <p class=\"help-block\"></p>
              </div>
            </div>
          ";
            } elseif (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("auth.register_mode") == "mobile")) {
                // line 35
                echo "            <div class=\"form-group mbl\">
              <label class=\"control-label required\" for=\"register_mobile\">";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("手机号码"), "html", null, true);
                echo "</label>
              <div class=\"controls\">
                <input type=\"number\" id=\"register_mobile\" name=\"verifiedMobile\"  class=\"form-control input-lg\" data-url=\"";
                // line 38
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register_mobile_check");
                echo "\" placeholder=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("填写你常用的手机号码作为登录帐号"), "html", null, true);
                echo "\">
                <p class=\"help-block\"></p>
              </div>
            </div>
          ";
            } else {
                // line 43
                echo "            <div class=\"form-group mbl\">
              <label class=\"control-label required\" for=\"register_emailOrmobile\">";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("手机/邮箱"), "html", null, true);
                echo "</label>
              <div class=\"controls\">
                <input type=\"text\" id=\"register_emailOrMobile\" name=\"emailOrMobile\"  class=\"form-control input-lg\" data-url=\"";
                // line 46
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register_email_or_mobile_check");
                echo "\" placeholder=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("填写你常用的邮箱或手机号码作为登录帐号"), "html", null, true);
                echo "\">
                <p class=\"help-block\"></p>
              </div>
            </div>
          ";
            }
            // line 51
            echo "
          <div class=\"form-group mbl\">
            <label class=\"control-label required\" for=\"register_nickname\">";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("用户名"), "html", null, true);
            echo "</label>
            <div class=\"controls\">
              <input type=\"text\" id=\"register_nickname\" name=\"nickname\" required=\"required\" class=\"form-control input-lg\" data-url=\"";
            // line 55
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register_nickname_check");
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("中、英文均可，最长18个英文或9个汉字"), "html", null, true);
            echo "\">
              <p class=\"help-block\"></p>
            </div>
          </div>

          <div class=\"form-group mbl\">
            <label class=\"control-label required\" for=\"register_password\">";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("密码"), "html", null, true);
            echo "</label>
            <div class=\"controls\">
              <input type=\"password\" id=\"register_password\" name=\"password\" required=\"required\" class=\"form-control input-lg\" placeholder=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("5-20位英文、数字、符号，区分大小写"), "html", null, true);
            echo "\">
              <p class=\"help-block\"></p>
            </div>
          </div>
          ";
            // line 67
            if (((_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("auth.captcha_enabled"), 0) == 1) && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("auth.register_mode") != "mobile"))) {
                // line 68
                echo "            <div class=\"form-group mbl js-captcha\">
              <label class=\"control-label required\" for=\"captcha_code\">";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("验证码"), "html", null, true);
                echo "</label>
              <div class=\"controls row\">
                <div class = \"col-xs-7\">
                  <input type=\"text\" class=\"form-control input-lg\" id=\"captcha_code\" name=\"captcha_code\" maxlength=\"5\" placeholder=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("验证码"), "html", null, true);
                echo "\" data-url=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register_captcha_check");
                echo "\" >
                  <p class=\"help-block\"></p>
                </div>
                <div class=\"col-xs-5\">
                  <img src=\"";
                // line 76
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register_captcha_num");
                echo "\" data-url=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register_captcha_num");
                echo "\" id=\"getcode_num\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("看不清，点击换一张"), "html", null, true);
                echo "\" style=\"cursor:pointer;height:40px;width:100%\">
                </div>
                
              </div>
            </div>
          ";
            }
            // line 82
            echo "          ";
            if ((($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("auth.register_mode") == "email_or_mobile") || ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("auth.register_mode") == "mobile"))) {
                // line 83
                echo "            <div class=\"form-group mbl ";
                if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("auth.register_mode") != "mobile")) {
                    echo "hidden";
                }
                echo " email_mobile_msg\">
              <label class=\"control-label required\" for=\"sms_code\">";
                // line 84
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("短信验证码"), "html", null, true);
                echo "</label>
              <div class=\"controls row\" >
                <div class = \"col-xs-7\" >
                  <input type=\"number\" class=\"form-control input-lg\" id=\"sms_code\" name=\"sms_code\" placeholder=\"";
                // line 87
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("填写你的短信验证码"), "html", null, true);
                echo "\"  data-url=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edu_cloud_sms_check", array("type" => "sms_registration"));
                echo "\">
                  <p class=\"help-block\"> </p>
                </div>
                <div class=\"col-xs-5\">
                  <a href=\"#modal\" data-toggle=\"modal\" class=\"btn btn-default btn-lg js-sms-send disabled\" data-url=\"";
                // line 91
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register_captcha_modal");
                echo "\" data-sms-url=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edu_cloud_sms_send");
                echo "\">
                    <span id=\"js-time-left\"></span>
                    <span id=\"js-fetch-btn-text\">";
                // line 93
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("获取短信验证码"), "html", null, true);
                echo "</span>
                </a>
                </div>
              </div>
            </div>
          ";
            }
            // line 99
            echo "          ";
            if (((_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("invite.invite_code_setting"), 0) == 1) && ((isset($context["inviteCode"]) ? $context["inviteCode"] : null) == null))) {
                // line 100
                echo "          <div class=\"form-group mbl\">
            <label class=\"control-label required\" for=\"invite_code\">";
                // line 101
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("邀请码"), "html", null, true);
                echo "<span class=\"color-success\">（";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("选填"), "html", null, true);
                echo "）</span></label>
            <div class=\"controls\">
              <input type=\"text\" name=\"invite_code\" class=\"form-control input-lg invitecode\" data-url=\"";
                // line 103
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("invitecode_check");
                echo "\" placeholder=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("如果您有邀请码，请填写您的邀请码"), "html", null, true);
                echo "\">
            </div>
          </div>
          ";
            }
            // line 107
            echo "
          ";
            // line 108
            if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("auth.user_terms") == "opened")) {
                // line 109
                echo "            <div class=\"form-group mbl\">
              <div class=\"controls\">
                <label>
                  <input type=\"checkbox\" id=\"user_terms\" checked=\"checked\" name=\"userterms\"> ";
                // line 112
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("我已阅读并同意"), "html", null, true);
                echo "<a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_terms");
                echo "\" target=\"_blank\">《";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("服务协议"), "html", null, true);
                echo "》</a>
                </label>
              </div>
            </div>
          ";
            }
            // line 117
            echo "
          <div class=\"form-group mbl\">
            <div class=\"controls\">
              <button type=\"submit\" id=\"register-btn\" data-submiting-text=\"";
            // line 120
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在提交"), "html", null, true);
            echo "\" class=\"btn btn-primary btn-lg btn-block\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("注册"), "html", null, true);
            echo "</button>
            </div>
          </div>

          <input type=\"hidden\" name=\"captcha_enabled\" value=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("auth.captcha_enabled"), "html", null, true);
            echo "\" />
          <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 125
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
            echo "\">
          ";
            // line 126
            if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "inviteCode", 1 => ""), "method")) {
                // line 127
                echo "          <input type=\"hidden\" id=\"invite_code\" name=\"invite_code\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "inviteCode", 1 => ""), "method"), "html", null, true);
                echo "\">
          ";
            }
            // line 129
            echo "
        </form>

        ";
            // line 132
            if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("login_bind.enabled")) {
                // line 133
                echo "          <div class=\"social-login\">
            <span>
              ";
                // line 135
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Login:oauth2LoginsBlock", array("targetPath" => (isset($context["_target_path"]) ? $context["_target_path"] : null), "inviteCode" => ((array_key_exists("inviteCode", $context)) ? (_twig_default_filter((isset($context["inviteCode"]) ? $context["inviteCode"] : null), "")) : ("")))));
                echo "
            </span>
            <div class=\"line\"></div>
          </div>
        ";
            }
            // line 140
            echo "      ";
        } else {
            // line 141
            echo "        <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("系统暂时关闭注册，请联系管理员"), "html", null, true);
            echo "</div>
      ";
        }
        // line 143
        echo "    </div>
  </div>
";
    }

    // line 147
    public function block_bottom($context, array $blocks = array())
    {
        // line 148
        echo "  ";
        $this->loadTemplate("mobile/footer-tool-bar.html.twig", "register/index.html.twig", 148)->display(array_merge($context, array("mobile_tool_bar" => "register")));
    }

    public function getTemplateName()
    {
        return "register/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  364 => 148,  361 => 147,  355 => 143,  349 => 141,  346 => 140,  338 => 135,  334 => 133,  332 => 132,  327 => 129,  321 => 127,  319 => 126,  315 => 125,  311 => 124,  302 => 120,  297 => 117,  285 => 112,  280 => 109,  278 => 108,  275 => 107,  266 => 103,  259 => 101,  256 => 100,  253 => 99,  244 => 93,  237 => 91,  228 => 87,  222 => 84,  215 => 83,  212 => 82,  199 => 76,  190 => 72,  184 => 69,  181 => 68,  179 => 67,  172 => 63,  167 => 61,  156 => 55,  151 => 53,  147 => 51,  137 => 46,  132 => 44,  129 => 43,  119 => 38,  114 => 36,  111 => 35,  101 => 30,  96 => 28,  93 => 27,  91 => 26,  88 => 25,  82 => 23,  80 => 22,  75 => 20,  72 => 19,  70 => 18,  64 => 15,  58 => 14,  54 => 12,  51 => 11,  43 => 2,  39 => 1,  36 => 8,  33 => 6,  31 => 5,  29 => 4,  27 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "register/index.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/register/index.html.twig");
    }
}
