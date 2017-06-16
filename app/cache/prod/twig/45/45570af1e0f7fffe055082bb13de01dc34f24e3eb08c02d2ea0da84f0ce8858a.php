<?php

/* admin/edu-cloud/key-license-info.html.twig */
class __TwigTemplate_00f2238195c6d147746768b1edb729c4d04c0c9cd56c707fb1df476d1aa6dbd5 extends Twig_Template
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
        if ((($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "error", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "error", array()), null)) : (null))) {
            // line 2
            echo "
  <div class=\"form-group\">
    <div class=\"col-md-6 col-md-offset-3\">
      <div class=\"alert alert-danger key-error-alert\">
        ";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->removeCopyright($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("授权码不正确，请重新设置！如您是商业用户，请联系EduSoho官方。")), "html", null, true);
            echo "
      </div>
    </div>
  </div>

";
        } else {
            // line 12
            echo "
  ";
            // line 13
            if ( !(($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "licenseDomains", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "licenseDomains", array()), null)) : (null))) {
                // line 14
                echo "
  <div class=\"form-group\">
    <label class=\"col-md-3 control-label\">";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("授权域名"), "html", null, true);
                echo "</label>
    <div class=\"col-md-6\">
      <p class=\"form-control-static\">";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "server", array()), "get", array(0 => "HTTP_HOST"), "method"), "html", null, true);
                echo " <span class=\"text-warning\">(";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("尚未授权"), "html", null, true);
                echo ")</span></p>
      <p class=\"help-block\">";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("域名绑定后，才能在应用中心购买应用；域名一旦绑定后，就不可更改！"), "html", null, true);
                echo "</p>
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-6 col-md-offset-3\">
      <button type=\"button\" class=\"btn btn-sm btn-warning key-bind-btn\" data-url=\"";
                // line 25
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_cloud_key_bind");
                echo "\" data-loading-text=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在绑定域名，请稍等..."), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("绑定授权域名"), "html", null, true);
                echo "</button>
    </div>
  </div>

  ";
            } else {
                // line 30
                echo "
    <div class=\"form-group\">
      <label class=\"col-md-3 control-label\">";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("授权信息"), "html", null, true);
                echo "</label>
      <div class=\"col-md-6\">
        <p class=\"form-control-static\">";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "levelName", array()), "html", null, true);
                echo "</p>
      </div>
    </div>

    <div class=\"form-group\">
      <label class=\"col-md-3 control-label\">";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("授权域名"), "html", null, true);
                echo "</label>
      <div class=\"col-md-6\">
        <p class=\"form-control-static text-success\">";
                // line 41
                if (((($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "licenseDomainCount", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "licenseDomainCount", array()), 1)) : (1)) == 1)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "licenseDomains", array()), "html", null, true);
                } else {
                    echo "<span class=\"license-domain\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "licenseDomains", array()), ";"));
                    foreach ($context['_seq'] as $context["_key"] => $context["doman"]) {
                        echo twig_escape_filter($this->env, $context["doman"], "html", null, true);
                        echo "
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doman'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 42
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "licenseDomainCount", array()), "html", null, true);
                    echo "个</span>";
                }
                echo "</p>
        ";
                // line 43
                if (!twig_in_filter((isset($context["currentHost"]) ? $context["currentHost"] : null), twig_split_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "licenseDomains", array()), ";"))) {
                    // line 44
                    echo "          <div class=\"alert alert-danger\">
            ";
                    // line 45
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("当前域名 %currentHost% 与授权域名不符，将会影响%EduSoho%系统功能的使用；请使用授权域名访问此系统。", array("%currentHost%" => (isset($context["currentHost"]) ? $context["currentHost"] : null), "%EduSoho%" => $this->env->getExtension('AppBundle\Twig\WebExtension')->removeCopyright("EduSoho"))), "html", null, true);
                    echo "
          </div>
        ";
                }
                // line 48
                echo "      </div>
    </div>



    ";
                // line 53
                if ((($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "copyright", array()) && ($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "thirdCopyright", array()) != 2)) && twig_in_filter((isset($context["currentHost"]) ? $context["currentHost"] : null), twig_split_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "licenseDomains", array()), ";")))) {
                    // line 54
                    echo "      <div class=\"form-group\">
        <label class=\"col-md-3 control-label\">";
                    // line 55
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("版权名称"), "html", null, true);
                    echo "</label>
        <div class=\"col-md-6\">
          <input id=\"field-copyrightName\" class=\"form-control\" type=\"text\" name=\"copyrightName\" value=\"";
                    // line 57
                    echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.name", ""), "html", null, true);
                    echo "\">
          <p class=\"help-block\">";
                    // line 58
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("填写版权名称后，网站前台页面底部将会显示“Powered By 你的版权名称”，为空则不显示版权信息。"), "html", null, true);
                    echo "</p>
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-6 col-md-offset-3\">
          <button class=\"btn btn-primary save-copyright-btn\" data-url=\"";
                    // line 64
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_cloud_key_copyright");
                    echo "\" data-loading-text=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在保存..."), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("保存版权名称"), "html", null, true);
                    echo "</button>
        </div>
      </div>
    ";
                } else {
                    // line 68
                    echo "    <div class=\"form-group\">
        <label class=\"col-md-3 control-label\">";
                    // line 69
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("版权信息"), "html", null, true);
                    echo "</label>
        <div class=\"col-md-6\">
          <p class=\"form-control-static\">";
                    // line 71
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未去除版权信息"), "html", null, true);
                    echo "</p>
        </div>
      </div>
    ";
                }
                // line 75
                echo "



  ";
            }
            // line 80
            echo "
";
        }
        // line 82
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/edu-cloud/key-license-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 82,  195 => 80,  188 => 75,  181 => 71,  176 => 69,  173 => 68,  162 => 64,  153 => 58,  149 => 57,  144 => 55,  141 => 54,  139 => 53,  132 => 48,  126 => 45,  123 => 44,  121 => 43,  114 => 42,  99 => 41,  94 => 39,  86 => 34,  81 => 32,  77 => 30,  65 => 25,  56 => 19,  50 => 18,  45 => 16,  41 => 14,  39 => 13,  36 => 12,  27 => 6,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/edu-cloud/key-license-info.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/admin/edu-cloud/key-license-info.html.twig");
    }
}
