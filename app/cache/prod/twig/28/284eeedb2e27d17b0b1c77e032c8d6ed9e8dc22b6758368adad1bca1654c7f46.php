<?php

/* classroom/part/classroom-buy-btn.html.twig */
class __TwigTemplate_06fd645fcac912a4c543355528895b651a3b1ecae93d440a4c75c226843e3920 extends Twig_Template
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
        $context["isAuditor"] = ((array_key_exists("isAuditor", $context)) ? (_twig_default_filter((isset($context["isAuditor"]) ? $context["isAuditor"] : null), false)) : (false));
        // line 2
        if (((($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "status", array()), "draft")) : ("draft")) != "published")) {
            // line 3
            echo "  <div class=\"text-12 color-gray\">班级还未发布，不允许加入和购买</div>
";
        } else {
            // line 5
            echo "  ";
            if ((($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "expiryMode", array()) == "date") && (twig_date_converter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "expiryValue", array())) < twig_date_converter($this->env)))) {
                // line 6
                echo "    <button type=\"button\" style=\"pointer-events:auto\" class=\"btn btn-default disabled btn-lg\" data-toggle=\"tooltip\" data-placement=\"top\">
      ";
                // line 7
                if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "buyable", array()) == 1)) {
                    // line 8
                    echo "        ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已超过有效期，无法购买"), "html", null, true);
                    echo "
      ";
                } else {
                    // line 10
                    echo "        ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已超过有效期，无法加入"), "html", null, true);
                    echo "
      ";
                }
                // line 12
                echo "    </button>
  ";
            } else {
                // line 14
                echo "    ";
                if (_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.buy_fill_userinfo"), false)) {
                    // line 15
                    echo "      ";
                    if (((isset($context["checkMemberLevelResult"]) ? $context["checkMemberLevelResult"] : null) == "ok")) {
                        // line 16
                        echo "        <a class=\"btn btn-primary btn-lg\" href=\"#modal\" data-toggle=\"modal\"
          data-url=\"";
                        // line 17
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_buy", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%memberLevel%，免费学", array("%memberLevel%" => $this->getAttribute((isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : null), "name", array()))), "html", null, true);
                        echo "</a>
      ";
                    } else {
                        // line 19
                        echo "        ";
                        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "buyable", array()) == 1)) {
                            // line 20
                            echo "          ";
                            if ( !(isset($context["isAuditor"]) ? $context["isAuditor"] : null)) {
                                // line 21
                                echo "            <a class=\"btn btn-link\" href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_become_auditor", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("进去逛逛"), "html", null, true);
                                echo "</a>
          ";
                            }
                            // line 23
                            echo "          <a class=\"btn btn-primary btn-lg\" href=\"#modal\" data-toggle=\"modal\"
            data-url=\"";
                            // line 24
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_buy", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("加入购买"), "html", null, true);
                            echo "</a>
        ";
                        } else {
                            // line 26
                            echo "          <button type=\"button\" style=\"pointer-events:auto\" class=\"btn btn-default disabled btn-lg\" data-toggle=\"tooltip\" data-placement=\"top\"
            title=\"";
                            // line 27
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("该%name%无法在线购买，若需帮助请联系客服", array("%name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("无法购买"), "html", null, true);
                            echo "</button>
        ";
                        }
                        // line 29
                        echo "      ";
                    }
                    // line 30
                    echo "    ";
                } else {
                    // line 31
                    echo "      ";
                    if ((($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) > 0) && (( !(isset($context["canFreeJoin"]) ? $context["canFreeJoin"] : null) && ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "vipLevelId", array()) == 0)) || twig_in_filter((isset($context["checkMemberLevelResult"]) ? $context["checkMemberLevelResult"] : null), array(0 => "not_member", 1 => "not_login", 2 => "member_expired", 3 => "level_low"))))) {
                        // line 32
                        echo "        ";
                        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "buyable", array()) == 1)) {
                            // line 33
                            echo "          ";
                            if ( !(isset($context["isAuditor"]) ? $context["isAuditor"] : null)) {
                                // line 34
                                echo "            <a class=\"btn btn-link\" href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_become_auditor", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("进去逛逛"), "html", null, true);
                                echo "</a>
          ";
                            }
                            // line 36
                            echo "          <a class=\"btn btn-primary btn-lg\" href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order_show", array("targetId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "targetType" => "classroom")), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("加入购买"), "html", null, true);
                            echo "</a>
        ";
                        } else {
                            // line 38
                            echo "          <button type=\"button\" style=\"pointer-events:auto\" class=\"btn btn-default disabled btn-lg\" data-toggle=\"tooltip\" data-placement=\"top\"
            title=\"";
                            // line 39
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("该%name%无法在线购买，若需帮助请联系客服", array("%name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), "班级"))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("无法购买"), "html", null, true);
                            echo "</button>
        ";
                        }
                        // line 41
                        echo "      ";
                    } elseif (twig_in_filter((isset($context["checkMemberLevelResult"]) ? $context["checkMemberLevelResult"] : null), array(0 => "not_member", 1 => "member_expired"))) {
                        // line 42
                        echo "        <a href=\"";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vip_buy");
                        echo "\"
          class=\"btn btn-primary btn-lg\">";
                        // line 43
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%memberLevel%，免费学", array("%memberLevel%" => $this->getAttribute((isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : null), "name", array()))), "html", null, true);
                        echo "</a>

      ";
                    } elseif ((                    // line 45
(isset($context["checkMemberLevelResult"]) ? $context["checkMemberLevelResult"] : null) == "level_low")) {
                        // line 46
                        echo "        <a class=\"btn btn-primary btn-lg\"
          href=\"";
                        // line 47
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vip_upgrade", array("level" => $this->getAttribute((isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : null), "id", array()))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%memberLevel%，免费学", array("%memberLevel%" => $this->getAttribute((isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : null), "name", array()))), "html", null, true);
                        echo "</a>

      ";
                    } elseif ((                    // line 49
(isset($context["checkMemberLevelResult"]) ? $context["checkMemberLevelResult"] : null) == "ok")) {
                        // line 50
                        echo "        <a class=\"btn btn-primary btn-lg\"
          href=\"";
                        // line 51
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_vip_buy", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%memberLevel%，免费学", array("%memberLevel%" => $this->getAttribute((isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : null), "name", array()))), "html", null, true);
                        echo "</a>

      ";
                    } else {
                        // line 54
                        echo "        ";
                        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "buyable", array()) == 1)) {
                            // line 55
                            echo "          <a class=\"btn btn-primary btn-lg\" href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order_show", array("targetId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "targetType" => "classroom")), "html", null, true);
                            echo "\"
            ";
                            // line 56
                            if ((((isset($context["canFreeJoin"]) ? $context["canFreeJoin"] : null) && $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) && ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) > 0))) {
                                // line 57
                                echo "              data-toggle=\"tooltip\"
              data-placement=\"top\"
              title=\"";
                                // line 59
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("您之前已购买了本%name%的所有收费课程，可免费学习！", array("%name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")))), "html", null, true);
                                echo "\"
            ";
                            }
                            // line 61
                            echo "          >";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("免费加入"), "html", null, true);
                            echo "</a>
        ";
                        } else {
                            // line 63
                            echo "          <button type=\"button\" style=\"pointer-events:auto\" class=\"btn btn-default disabled btn-lg\" data-toggle=\"tooltip\" data-placement=\"top\"
            title=\"";
                            // line 64
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("该%name%无法在线购买，若需帮助请联系客服", array("%name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("无法购买"), "html", null, true);
                            echo "</button>
        ";
                        }
                        // line 66
                        echo "      ";
                    }
                    // line 67
                    echo "    ";
                }
                // line 68
                echo "  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "classroom/part/classroom-buy-btn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 68,  218 => 67,  215 => 66,  208 => 64,  205 => 63,  199 => 61,  194 => 59,  190 => 57,  188 => 56,  183 => 55,  180 => 54,  172 => 51,  169 => 50,  167 => 49,  160 => 47,  157 => 46,  155 => 45,  150 => 43,  145 => 42,  142 => 41,  135 => 39,  132 => 38,  124 => 36,  116 => 34,  113 => 33,  110 => 32,  107 => 31,  104 => 30,  101 => 29,  94 => 27,  91 => 26,  84 => 24,  81 => 23,  73 => 21,  70 => 20,  67 => 19,  60 => 17,  57 => 16,  54 => 15,  51 => 14,  47 => 12,  41 => 10,  35 => 8,  33 => 7,  30 => 6,  27 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "classroom/part/classroom-buy-btn.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/classroom/part/classroom-buy-btn.html.twig");
    }
}
