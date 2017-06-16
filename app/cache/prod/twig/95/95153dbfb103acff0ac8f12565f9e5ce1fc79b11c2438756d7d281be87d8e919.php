<?php

/* course/order/buy-modal.html.twig */
class __TwigTemplate_a99dedca7a858f43c5262e1a7a2665ec708499b62894e688b87e3756d91a34c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bootstrap-modal-layout.html.twig", "course/order/buy-modal.html.twig", 1);
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
        // line 2
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/bootstrap-datetimepicker.js", 1 => "libs/jquery-validation.js", 2 => "app/js/course/buy-modal/index.js"));
        // line 3
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->isPluginInstalled("Vip")) {
            // line 4
            $context["vipStatus"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("VipStatus", array("userId" => $this->getAttribute(($context["user"] ?? null), "id", array()), "levelId" => $this->getAttribute(($context["course"] ?? null), "vipLevelId", array())));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "  ";
        if ($this->getAttribute(($context["course"] ?? null), "isFree", array())) {
            // line 9
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("加入课程"), "html", null, true);
            echo "
  ";
        } else {
            // line 11
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("购买课程"), "html", null, true);
            echo "
  ";
        }
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "  <form id=\"course-buy-form\" class=\"form-horizontal\" method=\"post\"
  action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_info_fill", array("id" => $this->getAttribute(($context["user"] ?? null), "id", array()))), "html", null, true);
        echo "\"
  >
    <div class=\"form-group\">
      <div class=\"col-sm-3 control-label\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程名称"), "html", null, true);
        echo "</div>
      <div class=\"col-sm-9 form-control-static \">
      \t<span class=\"form-control-static color-gray\">《";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "title", array()), "html", null, true);
        echo "》 - ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? null), "title", array()), "html", null, true);
        echo " </span>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-sm-3 control-label\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("价格"), "html", null, true);
        echo "</div>
      <div class=\"col-sm-9 controls color-warning\">
      \t<span class=\"form-control-static\">
          ";
        // line 30
        if (($this->getAttribute(($context["course"] ?? null), "isFree", array()) || ((array_key_exists("vipStatus", $context)) ? (_twig_default_filter(($context["vipStatus"] ?? null), 0)) : (0)))) {
            // line 31
            echo "            <strong class=\"money\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("免费"), "html", null, true);
            echo "</strong>
          ";
        } else {
            // line 33
            echo "            ";
            if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.coin_enabled") && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.price_type") == "Coin"))) {
                // line 34
                echo "              <strong class=\"money\">";
                echo twig_escape_filter($this->env, ($this->getAttribute(($context["course"] ?? null), "price", array()) * $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.cash_rate")), "html", null, true);
                echo "</strong>
              <span class=\"color-gray\">";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.coin_name"), "html", null, true);
                echo "</span>
            ";
            } else {
                // line 37
                echo "              <strong class=\"money\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? null), "price", array()), "html", null, true);
                echo "</strong>
              <span class=\"color-gray\">";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("元"), "html", null, true);
                echo "</span>
            ";
            }
            // line 40
            echo "          ";
        }
        // line 41
        echo "      \t</span>
      </div>
    </div>
    <input type=\"hidden\" name=\"targetUrl\" value=
      ";
        // line 45
        if (((array_key_exists("vipStatus", $context)) ? (_twig_default_filter(($context["vipStatus"] ?? null), 0)) : (0))) {
            // line 46
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vip_course_join", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
            echo "
      ";
        } else {
            // line 48
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order_show", array("targetId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "targetType" => "course")), "html", null, true);
            echo "
      ";
        }
        // line 50
        echo "    />
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">

    ";
        // line 53
        $context["isBuyFillUserinfo"] = _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.buy_fill_userinfo"), false);
        // line 54
        echo "    ";
        $context["userinfoFieldsSetting"] = _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.userinfoFields"), array());
        // line 55
        echo "    ";
        $this->loadTemplate("user/fill-userinfo-fields-block.html.twig", "course/order/buy-modal.html.twig", 55)->display(array_merge($context, array("isBuyFillUserinfo" => ($context["isBuyFillUserinfo"] ?? null), "userinfoFieldsSetting" => ($context["userinfoFieldsSetting"] ?? null), "userFields" => ($context["userFields"] ?? null), "user" => ($context["user"] ?? null), "showNavTip" => 1)));
        // line 56
        echo "
  </form>
";
    }

    // line 60
    public function block_footer($context, array $blocks = array())
    {
        // line 61
        echo "  <button id=\"course-pay\" class=\"btn btn-primary\" type=\"button\" data-loading-text=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在创建订单"), "html", null, true);
        echo "...\" data-toggle=\"form-submit\" data-target=\"#course-buy-form\">
      ";
        // line 62
        if (($this->getAttribute(($context["course"] ?? null), "isFree", array()) || ((array_key_exists("vipStatus", $context)) ? (_twig_default_filter(($context["vipStatus"] ?? null), 0)) : (0)))) {
            // line 63
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("免费加入"), "html", null, true);
            echo "
      ";
        } else {
            // line 65
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("去支付"), "html", null, true);
            echo "
      ";
        }
        // line 67
        echo "  </button>
";
    }

    public function getTemplateName()
    {
        return "course/order/buy-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 67,  183 => 65,  177 => 63,  175 => 62,  170 => 61,  167 => 60,  161 => 56,  158 => 55,  155 => 54,  153 => 53,  148 => 51,  145 => 50,  139 => 48,  133 => 46,  131 => 45,  125 => 41,  122 => 40,  117 => 38,  112 => 37,  107 => 35,  102 => 34,  99 => 33,  93 => 31,  91 => 30,  85 => 27,  75 => 22,  70 => 20,  64 => 17,  61 => 16,  58 => 15,  50 => 11,  44 => 9,  41 => 8,  38 => 7,  34 => 1,  31 => 4,  29 => 3,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/order/buy-modal.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/course/order/buy-modal.html.twig");
    }
}
