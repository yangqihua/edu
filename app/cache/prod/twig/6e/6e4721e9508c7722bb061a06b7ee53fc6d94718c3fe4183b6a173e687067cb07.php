<?php

/* admin/edu-cloud/key.html.twig */
class __TwigTemplate_c66d99d6830c1b18ead61ba4f3c8477464ca63ff216c2b03fef719e5ab8534b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/edu-cloud/layout.html.twig", "admin/edu-cloud/key.html.twig", 1);
        $this->blocks = array(
            'maincontent' => array($this, 'block_maincontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/edu-cloud/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["submenu"] = "key";
        // line 5
        $context["script_controller"] = "setting/cloud-key";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_maincontent($context, array $blocks = array())
    {
        // line 8
        echo "  ";
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->isTrial()) {
            // line 9
            echo "    <div class=\"row form-group\">
      <div class=\"help-block\">
        </br></br>
        <script>
          var _hmt = _hmt || [];
        </script>
        <script charset=\"utf-8\" src=\"http://wpa.b.qq.com/cgi/wpa.php\"></script>

        <p style = \"text-align:center;font-size:16px\">";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("当前版本为试用版,不能进行更多操作。如需购买授权版,请联系销售人员。"), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("电话："), "html", null, true);
            echo "4008041114 ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("或 "), "html", null, true);
            echo "
        <span id=\"BizQQWPA\" onclick=\"_hmt.push(['_trackEvent', 'advisory', 'click', 'qq'])\"><a id=\"BizQQWPA\" href=\"javascript:\" style='text-decoration:none;'>QQ：800023860 </a>。</span>
        </p>
        <script type=\"text/javascript\">
            BizQQWPA.addCustom({aty: '0', a: '0', nameAccount: 800023860, selector: 'BizQQWPA'}); 
        </script>
        </br>
      </div>
    </div>
    <hr>
  ";
        } else {
            // line 28
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
            echo "
    <div class=\"page-header clearfix\">
      <h1 class=\"pull-left\">";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("套餐信息"), "html", null, true);
            echo "</h1>
    </div>
    ";
            // line 32
            if ((($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "level", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "level", array()), null)) : (null))) {
                // line 33
                echo "    <form class=\"form-horizontal\" id=\"cloud-edition-form\" method=\"post\" novalidate>
      <div class=\"form-group\">
        <label class=\"col-md-3 control-label\">";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("套餐名称："), "html", null, true);
                echo "</label>
        <div class=\"col-md-6\">
          <p class=\"form-control-static\">";
                // line 37
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "levelName", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "levelName", array()), null)) : (null)), "html", null, true);
                echo "
          </p>
        </div>
      </div>
      ";
                // line 41
                if (((($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "startDate", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "startDate", array()), null)) : (null)) && (($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "endDate", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "endDate", array()), null)) : (null)))) {
                    // line 42
                    echo "      <div class=\"form-group\">
        <label class=\"col-md-3 control-label\">";
                    // line 43
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("服务期限："), "html", null, true);
                    echo "</label>
        <div class=\"col-md-6\">
          <p class=\"form-control-static\">
            ";
                    // line 46
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "startDate", array()), "Y.m.d"), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "endDate", array()), "Y.m.d"), "html", null, true);
                    echo "
          </p>
        </div>
      </div>
      ";
                }
                // line 51
                echo "      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
                echo "\">
    </form>
    ";
            } elseif (((($this->getAttribute(            // line 53
(isset($context["info"]) ? $context["info"] : null), "error", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "error", array()), null)) : (null)) == "error")) {
                // line 54
                echo "      ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("网络问题，无法连接到EduSoho开放云平台，暂时无法获取信息"), "html", null, true);
                echo "
    ";
            } else {
                // line 56
                echo "      ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("尚未购买套餐，点击"), "html", null, true);
                echo "<a href=\"http://www.edusoho.com/services/price?type=price\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("这里"), "html", null, true);
                echo "</a>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("了解详情"), "html", null, true);
                echo "
    ";
            }
            // line 58
            echo "
    <div class=\"page-header clearfix\">
      <h1 class=\"pull-left\">";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("授权码"), "html", null, true);
            echo "</h1>
    </div>
    <form class=\"form-horizontal\" id=\"cloud-setting-form\" method=\"post\" novalidate>
      <div class=\"form-group\">
        <label class=\"col-md-3 control-label\">AccessKey</label>
        <div class=\"col-md-6\">
          <p class=\"form-control-static\">";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.cloud_access_key"), "html", null, true);
            echo "</p>
        </div>
      </div>

      <div class=\"form-group\">
        <label class=\"col-md-3 control-label\">SecretKey</label>
        <div class=\"col-md-6\">
          <p class=\"form-control-static\">
            ";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.cloud_secret_key"), "html", null, true);
            echo "
          </p>
        </div>
      </div>
      ";
            // line 78
            if ((_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("developer.debug"), 0) || ((($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "level", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "level", array()))) : ("")) == "none"))) {
                // line 79
                echo "      <div class=\"form-group\">
        <div class=\"col-md-6 col-md-offset-3\">
          <a href=\"";
                // line 81
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_cloud_key_update");
                echo "\" class=\"btn btn-sm btn-default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("设置新的授权码"), "html", null, true);
                echo "</a>
          </div>
      </div>
      ";
            }
            // line 85
            echo "
      <div class=\"form-group\" id=\"loading-text\">
        <div class=\"col-md-6 col-md-offset-3\">
          <p class=\"text-warning\"><strong>";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在读取授权信息，请稍等..."), "html", null, true);
            echo "</strong></p>
        </div>
      </div>

      <div id=\"key-license-info\" data-url=\"";
            // line 92
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_cloud_key_info");
            echo "\">
        
      </div>

      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
            echo "\">
    </form>
  ";
        }
    }

    public function getTemplateName()
    {
        return "admin/edu-cloud/key.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 96,  198 => 92,  191 => 88,  186 => 85,  177 => 81,  173 => 79,  171 => 78,  164 => 74,  153 => 66,  144 => 60,  140 => 58,  130 => 56,  124 => 54,  122 => 53,  116 => 51,  106 => 46,  100 => 43,  97 => 42,  95 => 41,  88 => 37,  83 => 35,  79 => 33,  77 => 32,  72 => 30,  66 => 28,  49 => 17,  39 => 9,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/edu-cloud/key.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/admin/edu-cloud/key.html.twig");
    }
}
