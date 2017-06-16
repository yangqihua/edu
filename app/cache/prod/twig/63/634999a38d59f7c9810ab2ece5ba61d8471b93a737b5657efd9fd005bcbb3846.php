<?php

/* classroom/classroom-header.html.twig */
class __TwigTemplate_4045f926e4195f9c68978eec0950749b6f40c29d9820a6d64a6efc36abbd7882 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "classroom/classroom-header.html.twig", 1);
        // line 2
        echo "
<section class=\"class-header before\">
  <div class=\"container\">
    ";
        // line 5
        if (((($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "locked", array()), "0")) : ("0")) == "1")) {
            // line 6
            echo "      <div class=\"alert alert-warning\">
        ";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("您的退款申请已提交，请等待管理员的处理。"), "html", null, true);
            echo "
        <button class=\"btn btn-warning btn-sm cancel-refund\"
          data-url=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order_cancel_refund", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "targetType" => "classroom")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("取消退款，继续学习！"), "html", null, true);
            echo "</button>
      </div>
    ";
        }
        // line 12
        echo "
    <ol class=\"breadcrumb breadcrumb-o\">
      <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("首页"), "html", null, true);
        echo "</a></li>
      ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 16
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_explore", array("category" => $this->getAttribute($context["breadcrumb"], "code", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["breadcrumb"], "name", array()), "html", null, true);
            echo "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "      <li class=\"active\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
        echo "</li>
    </ol>

    <div class=\"class-header-mian\">
      <div class=\"class-bg-layer\"></div>
      <div class=\"class-header-bg clearfix\">
        <div class=\"class-img\">
          <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\">
            <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "largePicture", array()), "classroom.png"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
        echo "\"
              href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\">
          </a>
          ";
        // line 29
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "status", array()) == "closed")) {
            // line 30
            echo "            <span class=\"label label-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已关闭"), "html", null, true);
            echo "</span>
          ";
        }
        // line 32
        echo "        </div>
        <div class=\"class-info\">
          <h2 class=\"title\">
            ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
        echo "
            <span class=\"es-qrcode top\" data-url=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_qrcode", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\">
              <i class=\"es-icon es-icon-qrcode\"></i>
              <span class=\"qrcode-popover\">
                <img src=\"\" alt=\"\">
                ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("扫二维码继续学习"), "html", null, true);
        echo "
                ";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("二维码时效为半小时"), "html", null, true);
        echo "
              </span>
            </span>
          </h2>
          <div class=\"metas\">
            <div class=\"score\">
              ";
        // line 47
        echo $context["web_macro"]->getstar($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "rating", array()));
        echo "
              <span>(";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "ratingNum", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("评价"), "html", null, true);
        echo ")</span>
            </div>
            <div class=\"price\">
              ";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("价格："), "html", null, true);
        echo "
              <span>
                ";
        // line 53
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.coin_enabled") && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.price_type") == "Coin"))) {
            // line 54
            echo "                  ";
            if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) > 0)) {
                // line 55
                echo "                    ";
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) * $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.cash_rate")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.coin_name"), "html", null, true);
                echo "
                  ";
            } else {
                // line 57
                echo "                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("免费"), "html", null, true);
                echo "
                  ";
            }
            // line 59
            echo "                ";
        } else {
            // line 60
            echo "                  ";
            if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) > 0)) {
                // line 61
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()), "html", null, true);
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("元"), "html", null, true);
                echo "
                  ";
            } else {
                // line 63
                echo "                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("免费"), "html", null, true);
                echo "
                  ";
            }
            // line 65
            echo "                ";
        }
        // line 66
        echo "              </span>
            </div>
          </div>

          <div class=\"fsxl hidden-sm mt5 mb10 ml20\">
            ";
        // line 71
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "expiryMode", array()) == "date")) {
            // line 72
            echo "              <span class=\"mrm\">班级有效期：</span><span>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "expiryValue", array()), "Y-m-d"), "html", null, true);
            echo "</span>
            ";
        } elseif (($this->getAttribute(        // line 73
(isset($context["classroom"]) ? $context["classroom"] : null), "expiryMode", array()) == "days")) {
            // line 74
            echo "              <span class=\"mrm\">班级有效天数：</span><span>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "expiryValue", array()), "html", null, true);
            echo "天</span>
            ";
        }
        // line 76
        echo "          </div>

          <ul class=\"class-data hidden-sm clearfix ";
        // line 78
        if ((isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : null)) {
            echo "active";
        }
        echo "\">
            <li>
              <p><i class=\"es-icon es-icon-person\"></i></p>
              <p>";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员"), "html", null, true);
        echo "(";
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "studentNum", array()) + $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "auditorNum", array())), "html", null, true);
        echo ")</p>
            </li>
            <li>
              <p><i class=\"es-icon es-icon-book\"></i></p>
              <p>";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程"), "html", null, true);
        echo "(";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "courseNum", array()), "html", null, true);
        echo ")</p>
            </li>
            <li>
              <span class=\"es-share top\">
                <a class=\"dropdown-toggle\" href=\"\" data-toggle=\"dropdown\" aria-labelledby=\"dropdownMenu1\">
                  <p><i class=\"es-icon es-icon-share\"></i></p>
                  <p>";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("分享"), "html", null, true);
        echo "</p>
                </a>
                ";
        // line 93
        $this->loadTemplate("common/share-dropdown.html.twig", "classroom/classroom-header.html.twig", 93)->display(array_merge($context, array("type" => "classroom")));
        // line 94
        echo "              </span>
            </li>
            ";
        // line 96
        if (((isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : null) && $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "showable", array()))) {
            // line 97
            echo "              <li
                class=\"hidden-xs color-warning icon-vip\"
                title=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("会员%name%", array("%name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")))), "html", null, true);
            echo "\"
                data-content=\"";
            // line 100
            $this->loadTemplate("course/header/parts/normal-header-vip.html.twig", "classroom/classroom-header.html.twig", 100)->display(array_merge($context, array("courseVip" => (isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : null), "userVipStatus" => (isset($context["checkMemberLevelResult"]) ? $context["checkMemberLevelResult"] : null))));
            echo "\"
                data-original-title=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("会员%name%", array("%name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")))), "html", null, true);
            echo "\"
                title=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("会员%name%", array("%name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")))), "html", null, true);
            echo "\">
                <i class=\"es-icon es-icon-crown\"></i><br>
                ";
            // line 104
            $this->loadTemplate("course/header/parts/normal-header-vip-link.html.twig", "classroom/classroom-header.html.twig", 104)->display(array_merge($context, array("userVipStatus" => (isset($context["checkMemberLevelResult"]) ? $context["checkMemberLevelResult"] : null), "level" => (isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : null))));
            // line 105
            echo "              </li>
            ";
        }
        // line 107
        echo "          </ul>

          <div class=\"bottom-metas clearfix\">
            <div class=\"class-serve hidden-sm hidden-xs\">
              <div class=\"serve-frame\">
                ";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("承诺服务"), "html", null, true);
        echo "
              </div>
              ";
        // line 114
        $this->loadTemplate("classroom/service-block.html.twig", "classroom/classroom-header.html.twig", 114)->display(array_merge($context, array("services" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "service", array()))));
        // line 115
        echo "            </div>

            ";
        // line 117
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "showable", array()) && ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "status", array()) != "closed"))) {
            // line 118
            echo "              <div class=\"btn-buy\">
                ";
            // line 119
            $this->loadTemplate("classroom/part/classroom-buy-btn.html.twig", "classroom/classroom-header.html.twig", 119)->display($context);
            // line 120
            echo "
              </div>
            ";
        }
        // line 123
        echo "
          </div>
        </div>

        ";
        // line 127
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->isPermitRole($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "Manage") && $this->env->getExtension('AppBundle\Twig\PermissionExtension')->hasPermission("admin_classroom_content_manage"))) {
            // line 128
            echo "          <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default setting hidden-xs hidden-sm\"
            title=\"";
            // line 129
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%name%管理", array("%name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")))), "html", null, true);
            echo "\">
            <i class=\"es-icon es-icon-setting\"></i>
          </a>
        ";
        }
        // line 133
        echo "
      </div>
    </div>
  </div>
</section>

";
    }

    public function getTemplateName()
    {
        return "classroom/classroom-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 133,  326 => 129,  321 => 128,  319 => 127,  313 => 123,  308 => 120,  306 => 119,  303 => 118,  301 => 117,  297 => 115,  295 => 114,  290 => 112,  283 => 107,  279 => 105,  277 => 104,  272 => 102,  268 => 101,  264 => 100,  260 => 99,  256 => 97,  254 => 96,  250 => 94,  248 => 93,  243 => 91,  232 => 85,  223 => 81,  215 => 78,  211 => 76,  205 => 74,  203 => 73,  198 => 72,  196 => 71,  189 => 66,  186 => 65,  180 => 63,  173 => 61,  170 => 60,  167 => 59,  161 => 57,  153 => 55,  150 => 54,  148 => 53,  143 => 51,  136 => 48,  132 => 47,  123 => 41,  119 => 40,  112 => 36,  108 => 35,  103 => 32,  97 => 30,  95 => 29,  90 => 27,  84 => 26,  80 => 25,  69 => 18,  58 => 16,  54 => 15,  48 => 14,  44 => 12,  36 => 9,  31 => 7,  28 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "classroom/classroom-header.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/classroom/classroom-header.html.twig");
    }
}
