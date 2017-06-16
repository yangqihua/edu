<?php

/* classroom/classroom-join-header.html.twig */
class __TwigTemplate_d27c3a9e672aa76df652ab0fc0b69c6df8c8f2db775581a911b413648cf7ad88 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "classroom/classroom-join-header.html.twig", 1);
        // line 2
        $context["memberDeadline"] = (($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "deadline", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "deadline", array()), 0)) : (0));
        // line 3
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/classroom/join-header/index.js"));
        // line 4
        echo "
<section class=\"class-header after ";
        // line 5
        if (twig_in_filter("auditor", $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()))) {
            echo " auditor";
        }
        echo "\">
  <div class=\"container\">

    <ol class=\"breadcrumb breadcrumb-o\">
      <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("首页"), "html", null, true);
        echo "</a></li>
      ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
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
        // line 13
        echo "      <li class=\"active\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
        echo "</li>
    </ol>

    ";
        // line 16
        if (((($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "locked", array()), "0")) : ("0")) == "1")) {
            // line 17
            echo "      <div class=\"alert alert-warning\">
        您的退款申请已提交，请等待管理员的处理。
        <button class=\"btn btn-warning btn-sm cancel-refund\" data-url=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order_cancel_refund", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "targetType" => "classroom")), "html", null, true);
            echo "\">
          取消退款，继续学习！
        </button>
      </div>
    ";
        }
        // line 24
        echo "
    ";
        // line 25
        if ((((array_key_exists("vipChecked", $context)) ? (_twig_default_filter((isset($context["vipChecked"]) ? $context["vipChecked"] : null), "ok")) : ("ok")) != "ok")) {
            // line 26
            echo "      <div class=\"alert alert-danger alert-dismissable\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
        ";
            // line 28
            if (((isset($context["vipChecked"]) ? $context["vipChecked"] : null) == "not_member")) {
                // line 29
                echo "          ";
                echo twig_escape_filter($this->env, (("您已经不是会员，不能学习此" . _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), "班级")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("！")), "html", null, true);
                echo "
          ";
                // line 30
                if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) > 0)) {
                    // line 31
                    echo "            ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请重新"), "html", null, true);
                    echo "<a class=\"alert-link\" href=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vip");
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开通会员"), "html", null, true);
                    echo "</a>
          ";
                } else {
                    // line 33
                    echo "            <a class=\"alert-link js-exit\" href=\"javascript:;\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_exit", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
                    echo "\"
              data-go=\"";
                    // line 34
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("退出"), "html", null, true);
                    echo "</a>
          ";
                }
                // line 35
                echo "！
        ";
            } elseif ((            // line 36
(isset($context["vipChecked"]) ? $context["vipChecked"] : null) == "member_expired")) {
                // line 37
                echo "          ";
                echo twig_escape_filter($this->env, (("您的会员已过期，不能学习此" . _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), "班级")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("，请先")), "html", null, true);
                echo "<a class=\"alert-link\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vip_renew");
                echo "\"
          target=\"_blank\">";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("续费"), "html", null, true);
                echo "</a>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("。"), "html", null, true);
                echo "
        ";
            } elseif ((            // line 39
(isset($context["vipChecked"]) ? $context["vipChecked"] : null) == "level_low")) {
                // line 40
                echo "          ";
                echo twig_escape_filter($this->env, (("会员等级不够，不能学习此" . _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), "班级")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("。请先")), "html", null, true);
                echo "<a class=\"alert-link\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vip_upgrade");
                echo "\"
          target=\"_blank\">";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("升级会员"), "html", null, true);
                echo "</a>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("。"), "html", null, true);
                echo "
        ";
            } else {
                // line 43
                echo "          ";
                echo twig_escape_filter($this->env, (("该" . _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), "班级")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已不支持会员免费学，")), "html", null, true);
                echo "<a class=\"alert-link js-exit\" href=\"javascript:;\"
          data-url=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_exit", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
                echo "\"
          data-go=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("退出"), "html", null, true);
                echo "</a>
        ";
            }
            // line 47
            echo "      </div>
    ";
        }
        // line 49
        echo "
    <div class=\"class-header-mian\">
      <div class=\"class-bg-layer\"></div>
      <div class=\"class-header-bg clearfix\">
        <div class=\"class-img\">
          <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\">
            <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "largePicture", array()), "classroom.png"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
        echo "\"
              href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\">
          </a>
        </div>
        <div class=\"class-info\">
          <h2 class=\"title\">
            ";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
        echo "
            <span class=\"es-qrcode top\" data-url=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_qrcode", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\">
              <i class=\"es-icon es-icon-qrcode\"></i>
              <span class=\"qrcode-popover\">
                <img src=\"\" alt=\"\">
                ";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("扫二维码继续学习"), "html", null, true);
        echo "
                ";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("二维码时效为半小时"), "html", null, true);
        echo "
              </span>
            </span>
          </h2>
          <div class=\"metas\">
            <div class=\"score\">
              ";
        // line 73
        echo $context["web_macro"]->getstar($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "rating", array()));
        echo "
              <span>(";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "ratingNum", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("评价"), "html", null, true);
        echo ")</span>
            </div>
            ";
        // line 76
        if (($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()) == "auditor")) {
            // line 77
            echo "              <div class=\"price\">
                ";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("价格："), "html", null, true);
            echo " <span>";
            if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.coin_enabled") && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.price_type") == "Coin"))) {
                // line 79
                echo "                      ";
                if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) > 0)) {
                    // line 80
                    echo "                    ";
                    echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) * $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.cash_rate")), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.coin_name"), "html", null, true);
                    echo "
                  ";
                } else {
                    // line 82
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("免费"), "html", null, true);
                    echo "
                  ";
                }
                // line 84
                echo "                  ";
            } else {
                // line 85
                echo "                    ";
                if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) > 0)) {
                    // line 86
                    echo "                      ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()), "html", null, true);
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("元"), "html", null, true);
                    echo "
                    ";
                } else {
                    // line 88
                    echo "                      ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("免费"), "html", null, true);
                    echo "
                    ";
                }
                // line 90
                echo "                  ";
            }
            echo "</span>
              </div>
            ";
        }
        // line 93
        echo "          </div>

          <div class=\"hidden-sm fsn\">
            ";
        // line 96
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "expiryMode", array()) != "forever")) {
            // line 97
            echo "              ";
            if ((twig_in_filter("student", $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array())) || twig_in_filter("member", $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array())))) {
                // line 98
                echo "                <span class=\"mrm\">班级有效期</span>
                <span>";
                // line 99
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["memberDeadline"]) ? $context["memberDeadline"] : null), "Y-m-d"), "html", null, true);
                echo "</span>
              ";
            }
            // line 101
            echo "            ";
        }
        // line 102
        echo "          </div>

          <div class=\"class-serve hidden-sm hidden-xs\">
            <div class=\"serve-frame\">
              ";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("承诺服务"), "html", null, true);
        echo "
            </div>
            ";
        // line 108
        $this->loadTemplate("classroom/service-block.html.twig", "classroom/classroom-join-header.html.twig", 108)->display(array_merge($context, array("services" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "service", array()))));
        // line 109
        echo "          </div>
        </div>

        <div class=\"class-operation\">
          ";
        // line 113
        if (((((isset($context["memberDeadline"]) ? $context["memberDeadline"] : null) != 0) && (twig_date_converter($this->env, (isset($context["memberDeadline"]) ? $context["memberDeadline"] : null)) < twig_date_converter($this->env))) && (twig_in_filter("student", $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array())) || twig_in_filter("member", $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()))))) {
            // line 114
            echo "            <div class=\"class-deadline\">
              ";
            // line 115
            if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "expiryMode", array()) == "date")) {
                // line 116
                echo "                <div class=\"alert alert-warning\">你的班级已过有效期，无法继续学习</div>
              ";
            } elseif (($this->getAttribute(            // line 117
(isset($context["classroom"]) ? $context["classroom"] : null), "expiryMode", array()) == "days")) {
                // line 118
                echo "                <div class=\"alert alert-warning\">你的班级已过有效期，无法继续学习，请<a
                    href=\"";
                // line 119
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_member_deadline_reach", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
                echo "\">
                    ";
                // line 120
                if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "buyable", array()) == 1)) {
                    // line 121
                    echo "                      ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("重新购买"), "html", null, true);
                    echo "
                    ";
                } else {
                    // line 123
                    echo "                      ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("重新加入"), "html", null, true);
                    echo "
                    ";
                }
                // line 125
                echo "                  </a></div>
              ";
            }
            // line 127
            echo "            </div>
          ";
        }
        // line 129
        echo "
          <ul class=\"class-data clearfix ";
        // line 130
        if (((isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : null) && twig_in_filter("auditor", $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array())))) {
            echo "hidden-sm";
        } else {
            echo "two-col";
        }
        echo "\">
            <li>
              <p><i class=\"es-icon es-icon-person\"></i></p>
              <p>";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员"), "html", null, true);
        echo "(";
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "studentNum", array()) + $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "auditorNum", array())), "html", null, true);
        echo ")</p>
            </li>
            <li>
            <span class=\"es-share top\">
              <a class=\"dropdown-toggle\" href=\"\" data-toggle=\"dropdown\" aria-labelledby=\"dropdownMenu1\">
                <p><i class=\"es-icon es-icon-share\"></i></p>
                <p>";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("分享"), "html", null, true);
        echo "</p>
              </a>
              ";
        // line 141
        $this->loadTemplate("common/share-dropdown.html.twig", "classroom/classroom-join-header.html.twig", 141)->display(array_merge($context, array("type" => "classroom")));
        echo " 
            </span>
            </li>
            ";
        // line 144
        if (((twig_in_filter("auditor", $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array())) && (isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : null)) && $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "showable", array()))) {
            // line 145
            echo "              <li class=\"hidden-xs color-warning icon-vip\" title=\"会员";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "\"
                data-content=\"";
            // line 146
            $this->loadTemplate("course/header/parts/normal-header-vip.html.twig", "classroom/classroom-join-header.html.twig", 146)->display(array_merge($context, array("courseVip" => (isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : null), "userVipStatus" => (isset($context["checkMemberLevelResult"]) ? $context["checkMemberLevelResult"] : null))));
            echo "\"
                data-original-title=\"会员";
            // line 147
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "\">
                <i class=\"es-icon es-icon-crown\"></i><br>
                ";
            // line 149
            $this->loadTemplate("course/header/parts/normal-header-vip-link.html.twig", "classroom/classroom-join-header.html.twig", 149)->display(array_merge($context, array("userVipStatus" => (isset($context["checkMemberLevelResult"]) ? $context["checkMemberLevelResult"] : null), "level" => (isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : null))));
            // line 150
            echo "              </li>
            ";
        }
        // line 152
        echo "          </ul>
          
          ";
        // line 154
        if (twig_in_filter("auditor", $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()))) {
            // line 155
            echo "            <div class=\"class-auditor hidden-sm\">
              ";
            // line 156
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("您现在是"), "html", null, true);
            echo "<span class=\"color-warning\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("旁听生"), "html", null, true);
            echo "</span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("，不能完整学习"), "html", null, true);
            echo "<i
                class=\"es-icon es-icon-help color-primary\"
                data-toggle=\"tooltip\" data-placement=\"top\" title=\"\"
                data-original-title=\"";
            // line 159
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("旁听生只能参与话题讨论，正式学员可以完整地学习所有内容，享受所有教学服务"), "html", null, true);
            echo "\"></i><br>

              ";
            // line 161
            if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "showable", array()) && ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "status", array()) != "closed"))) {
                // line 162
                echo "                <div class=\"btn-buy\">
                  ";
                // line 163
                $this->loadTemplate("classroom/part/classroom-buy-btn.html.twig", "classroom/classroom-join-header.html.twig", 163)->display(array_merge($context, array("isAuditor" => true)));
                // line 164
                echo "                </div>
              ";
            }
            // line 166
            echo "
            </div>
          ";
        }
        // line 169
        echo "        </div>

        ";
        // line 171
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->isPermitRole($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "Manage") && $this->env->getExtension('AppBundle\Twig\PermissionExtension')->hasPermission("admin_classroom_content_manage"))) {
            // line 172
            echo "          <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default setting hidden-xs hidden-sm\"
            title=\"";
            // line 173
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%name%管理", array("%name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")))), "html", null, true);
            echo "\">
            <i class=\"es-icon es-icon-setting\"></i>
          </a>
        ";
        } elseif ($this->env->getExtension('AppBundle\Twig\WebExtension')->isPermitRole($this->getAttribute(        // line 176
(isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "Handle")) {
            // line 177
            echo "          <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage_testpaper", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "status" => "reviewing")), "html", null, true);
            echo "\" class=\"btn btn-default setting hidden-xs hidden-sm\"
            title=\"";
            // line 178
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%name%管理", array("%name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")))), "html", null, true);
            echo "\">
            <i class=\"es-icon es-icon-setting\"></i>
          </a>
        ";
        }
        // line 182
        echo "        ";
        if ((($this->env->getExtension('AppBundle\Twig\WebExtension')->isPermitRole($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "Take", true) &&  !((array_key_exists("isclassroomteacher", $context)) ? (_twig_default_filter((isset($context["isclassroomteacher"]) ? $context["isclassroomteacher"] : null), false)) : (false))) &&  !$this->getAttribute((isset($context["member"]) ? $context["member"] : null), "locked", array()))) {
            // line 183
            echo "          ";
            if (!twig_in_filter("headTeacher", $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()))) {
                // line 184
                echo "            <a type=\"button\"
              ";
                // line 185
                if ((twig_in_filter("student", $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array())) && ($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "orderId", array()) > 0))) {
                    // line 186
                    echo "                class=\"btn btn-default setting hidden-xs hidden-sm\"
                href=\"#modal\"
                data-toggle=\"modal\"
                data-url=\"";
                    // line 189
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order_refund", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "targetType" => "classroom")), "html", null, true);
                    echo "\"
              ";
                } else {
                    // line 191
                    echo "                class=\"btn btn-default setting hidden-xs hidden-sm\"
                href=\"";
                    // line 192
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_exit", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
                    echo "\" id=\"quit\"
              ";
                }
                // line 194
                echo "            >
              <i class=\"es-icon es-icon-exit\"></i>
            </a>
          ";
            }
            // line 198
            echo "        ";
        }
        // line 199
        echo "      </div>
    </div>
  </div>
</section>


";
    }

    public function getTemplateName()
    {
        return "classroom/classroom-join-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  531 => 199,  528 => 198,  522 => 194,  517 => 192,  514 => 191,  509 => 189,  504 => 186,  502 => 185,  499 => 184,  496 => 183,  493 => 182,  486 => 178,  481 => 177,  479 => 176,  473 => 173,  468 => 172,  466 => 171,  462 => 169,  457 => 166,  453 => 164,  451 => 163,  448 => 162,  446 => 161,  441 => 159,  431 => 156,  428 => 155,  426 => 154,  422 => 152,  418 => 150,  416 => 149,  411 => 147,  407 => 146,  402 => 145,  400 => 144,  394 => 141,  389 => 139,  378 => 133,  368 => 130,  365 => 129,  361 => 127,  357 => 125,  351 => 123,  345 => 121,  343 => 120,  339 => 119,  336 => 118,  334 => 117,  331 => 116,  329 => 115,  326 => 114,  324 => 113,  318 => 109,  316 => 108,  311 => 106,  305 => 102,  302 => 101,  297 => 99,  294 => 98,  291 => 97,  289 => 96,  284 => 93,  277 => 90,  271 => 88,  264 => 86,  261 => 85,  258 => 84,  252 => 82,  244 => 80,  241 => 79,  237 => 78,  234 => 77,  232 => 76,  226 => 74,  222 => 73,  213 => 67,  209 => 66,  202 => 62,  198 => 61,  190 => 56,  184 => 55,  180 => 54,  173 => 49,  169 => 47,  162 => 45,  158 => 44,  153 => 43,  146 => 41,  139 => 40,  137 => 39,  131 => 38,  124 => 37,  122 => 36,  119 => 35,  112 => 34,  107 => 33,  97 => 31,  95 => 30,  90 => 29,  88 => 28,  84 => 26,  82 => 25,  79 => 24,  71 => 19,  67 => 17,  65 => 16,  58 => 13,  47 => 11,  43 => 10,  37 => 9,  28 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "classroom/classroom-join-header.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/classroom/classroom-join-header.html.twig");
    }
}
