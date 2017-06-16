<?php

/* user/fill-userinfo-fields-block.html.twig */
class __TwigTemplate_057cd5cf5ef9635c0ec1990b0037f6a5e60f170ab1e7319482ba8d5629989d24 extends Twig_Template
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
        if (((array_key_exists("isBuyFillUserinfo", $context)) ? (_twig_default_filter(($context["isBuyFillUserinfo"] ?? null), false)) : (false))) {
            // line 2
            echo "  ";
            if (($context["userinfoFieldsSetting"] ?? null)) {
                // line 3
                echo "    ";
                if (((array_key_exists("showNavTip", $context)) ? (_twig_default_filter(($context["showNavTip"] ?? null), true)) : (true))) {
                    // line 4
                    echo "      <div class=\"help-block\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("温情提示：如果您的资料有变更，请在此修改，以便更好的为您服务！"), "html", null, true);
                    echo "</div>
      <hr>
    ";
                }
                // line 7
                echo "
    ";
                // line 8
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["userinfoFieldsSetting"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 9
                    echo "      ";
                    $context["defaultFields"] = $this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("userInfoFields");
                    // line 10
                    echo "      ";
                    if (($context["field"] == "truename")) {
                        // line 11
                        echo "        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label\" for=\"truename\">";
                        // line 12
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["defaultFields"] ?? null), "truename", array()), "html", null, true);
                        echo "</label>
          <div class=\"col-sm-6 controls\">
            ";
                        // line 14
                        if ((($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "approvalStatus", array()) == "approved") && $this->getAttribute(($context["user"] ?? null), "truename", array()))) {
                            // line 15
                            echo "              <div class=\"form-control-static\">";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "truename", array()), "html", null, true);
                            echo "
                <small class=\"color-success\">(";
                            // line 16
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已认证"), "html", null, true);
                            echo ")</small>
              </div>
            ";
                        } elseif ((($this->getAttribute($this->getAttribute(                        // line 18
($context["app"] ?? null), "user", array()), "approvalStatus", array()) == "approving") && $this->getAttribute(($context["user"] ?? null), "truename", array()))) {
                            // line 19
                            echo "              <div class=\"form-control-static\">";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "truename", array()), "html", null, true);
                            echo "
                <small class=\"text-warning\">(";
                            // line 20
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("实名认证中"), "html", null, true);
                            echo ")</small>
              </div>
            ";
                        } else {
                            // line 23
                            echo "              <input class=\"form-control\" id=\"truename\" type=\"text\" name=\"truename\" value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "truename", array()), "html", null, true);
                            echo "\">
            ";
                        }
                        // line 25
                        echo "          </div>
        </div>
      ";
                    }
                    // line 28
                    echo "
      ";
                    // line 29
                    if (($context["field"] == "email")) {
                        // line 30
                        echo "        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label\" for=\"email\">";
                        // line 31
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["defaultFields"] ?? null), "email", array()), "html", null, true);
                        echo "</label>
          <div class=\"col-sm-6 controls\">
            ";
                        // line 33
                        $context["emailArr"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "email", array()), "@");
                        // line 34
                        echo "            ";
                        if (($this->getAttribute(($context["emailArr"] ?? null), 1, array(), "array") != "edusoho.net")) {
                            // line 35
                            echo "              <div class=\"form-control-static\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "email", array()), "html", null, true);
                            echo "</div>
            ";
                        } else {
                            // line 37
                            echo "              <input class=\"form-control\" id=\"email\" type=\"text\" name=\"email\" value=\"\"
                     data-url=\"";
                            // line 38
                            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register_email_check");
                            echo "\"/>
            ";
                        }
                        // line 40
                        echo "          </div>
        </div>
      ";
                    }
                    // line 43
                    echo "
      ";
                    // line 44
                    if (($context["field"] == "mobile")) {
                        // line 45
                        echo "        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label\" for=\"mobile\">";
                        // line 46
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["defaultFields"] ?? null), "mobile", array()), "html", null, true);
                        echo "</label>
          <div class=\"col-sm-6 controls\">
            ";
                        // line 48
                        if ((($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "verifiedMobile", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "verifiedMobile", array()), "")) : (""))) {
                            // line 49
                            echo "              <div class=\"form-control-static\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->blur_phone_number($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "verifiedMobile", array())), "html", null, true);
                            echo "
                <small class=\"color-success\">(";
                            // line 50
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已绑定"), "html", null, true);
                            echo ")</small>
              </div>
            ";
                        } else {
                            // line 53
                            echo "              <input class=\"form-control\" id=\"mobile\" type=\"text\" name=\"mobile\" value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "mobile", array()), "html", null, true);
                            echo "\"
                     data-url=\"";
                            // line 54
                            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register_mobile_check");
                            echo "\">
            ";
                        }
                        // line 56
                        echo "          </div>
        </div>
      ";
                    }
                    // line 59
                    echo "
      ";
                    // line 60
                    if (($context["field"] == "qq")) {
                        // line 61
                        echo "        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label\" for=\"qq\">";
                        // line 62
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["defaultFields"] ?? null), "qq", array()), "html", null, true);
                        echo "</label>
          <div class=\"col-sm-6 controls\">
            <input class=\"form-control\" id=\"qq\" type=\"text\" name=\"qq\" value=\"";
                        // line 64
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "qq", array()), "html", null, true);
                        echo "\">
          </div>
        </div>
      ";
                    }
                    // line 68
                    echo "
      ";
                    // line 69
                    if (($context["field"] == "company")) {
                        // line 70
                        echo "        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label\" for=\"company\">";
                        // line 71
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["defaultFields"] ?? null), "company", array()), "html", null, true);
                        echo "</label>
          <div class=\"col-sm-6 controls\">
            <input class=\"form-control\" id=\"company\" type=\"text\" name=\"company\" value=\"";
                        // line 73
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "company", array()), "html", null, true);
                        echo "\">
          </div>
        </div>
      ";
                    }
                    // line 77
                    echo "
      ";
                    // line 78
                    if (($context["field"] == "job")) {
                        // line 79
                        echo "        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label\" for=\"job\">";
                        // line 80
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["defaultFields"] ?? null), "job", array()), "html", null, true);
                        echo "</label>
          <div class=\"col-sm-6 controls\">
            <input class=\"form-control\" id=\"job\" type=\"text\" name=\"job\" value=\"";
                        // line 82
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "job", array()), "html", null, true);
                        echo "\">
          </div>
        </div>
      ";
                    }
                    // line 86
                    echo "
      ";
                    // line 87
                    if (($context["field"] == "idcard")) {
                        // line 88
                        echo "        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label required\" for=\"idcard\">";
                        // line 89
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["defaultFields"] ?? null), "idcard", array()), "html", null, true);
                        echo "</label>
          <div class=\"col-sm-6 controls\">
            ";
                        // line 91
                        if ((($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "approvalStatus", array()) == "approved") && $this->getAttribute(($context["user"] ?? null), "idcard", array()))) {
                            // line 92
                            echo "              <div class=\"form-control-static\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->blur_idcard_number($this->getAttribute(($context["user"] ?? null), "idcard", array())), "html", null, true);
                            echo "
                <small class=\"color-success\">(";
                            // line 93
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已认证"), "html", null, true);
                            echo ")</small>
              </div>
            ";
                        } elseif ((($this->getAttribute($this->getAttribute(                        // line 95
($context["app"] ?? null), "user", array()), "approvalStatus", array()) == "approving") && $this->getAttribute(($context["user"] ?? null), "idcard", array()))) {
                            // line 96
                            echo "              <div class=\"form-control-static\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->blur_idcard_number($this->getAttribute(($context["user"] ?? null), "idcard", array())), "html", null, true);
                            echo "
                <small class=\"text-warning\">(";
                            // line 97
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("实名认证中"), "html", null, true);
                            echo ")</small>
              </div>
            ";
                        } else {
                            // line 100
                            echo "              <input type=\"text\" id=\"idcard\" name=\"";
                            echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                            echo "\" class=\"form-control\" value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "idcard", array()), "html", null, true);
                            echo "\">
            ";
                        }
                        // line 102
                        echo "          </div>
        </div>
      ";
                    }
                    // line 105
                    echo "
      ";
                    // line 106
                    if (($context["field"] == "gender")) {
                        // line 107
                        echo "        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label required\" for=\"gender\">";
                        // line 108
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["defaultFields"] ?? null), "gender", array()), "html", null, true);
                        echo "</label>
          <div class=\"col-sm-6\">
            <div class=\"checkbox-inline\" style=\"padding-left: 0\">
              <input type=\"radio\" id=\"gender_0\" name=\"gender\" value=\"male\"
                     ";
                        // line 112
                        if (($this->getAttribute(($context["user"] ?? null), "gender", array()) == "male")) {
                            echo "checked=true";
                        }
                        echo ">
              <span for=\"profile_gender_0\" class=\"required mrl\">";
                        // line 113
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("男"), "html", null, true);
                        echo "</span>
              <input type=\"radio\" id=\"gender_1\" name=\"gender\" value=\"female\"
                     ";
                        // line 115
                        if (($this->getAttribute(($context["user"] ?? null), "gender", array()) == "female")) {
                            echo "checked=true";
                        }
                        echo ">
              <span for=\"profile_gender_1\" class=\"required\">";
                        // line 116
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("女"), "html", null, true);
                        echo "</span>
            </div>
          </div>
        </div>
      ";
                    }
                    // line 121
                    echo "
      ";
                    // line 122
                    if (($context["field"] == "weixin")) {
                        // line 123
                        echo "        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label required\" for=\"weixin\">";
                        // line 124
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["defaultFields"] ?? null), "weixin", array()), "html", null, true);
                        echo "</label>
          <div class=\"col-sm-6 controls\">
            <input type=\"text\" id=\"weixin\" name=\"";
                        // line 126
                        echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                        echo "\" class=\"form-control\" value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "weixin", array()), "html", null, true);
                        echo "\">
          </div>
        </div>
      ";
                    }
                    // line 130
                    echo "
      ";
                    // line 131
                    if (($context["field"] == "weibo")) {
                        // line 132
                        echo "        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label required\" for=\"weibo\">";
                        // line 133
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["defaultFields"] ?? null), "weibo", array()), "html", null, true);
                        echo "</label>
          <div class=\"col-sm-6 controls\">
            <input type=\"text\" id=\"weibo\" name=\"";
                        // line 135
                        echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                        echo "\" class=\"form-control\" value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "weibo", array()), "html", null, true);
                        echo "\">
          </div>
        </div>
      ";
                    }
                    // line 139
                    echo "
      ";
                    // line 140
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["userFields"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["userField"]) {
                        // line 141
                        echo "        ";
                        if (($context["field"] == $this->getAttribute($context["userField"], "fieldName", array()))) {
                            // line 142
                            echo "          ";
                            if (($this->getAttribute($context["userField"], "type", array()) == "text")) {
                                // line 143
                                echo "            <div class=\"form-group\">
              <label for=\"";
                                // line 144
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" class=\"col-sm-3 control-label \">";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "title", array()), "html", null, true);
                                echo "</label>
              <div class=\"col-sm-6 controls\">
                  <textarea id=\"";
                                // line 146
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" name=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\"
                            class=\"field-";
                                // line 147
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "type", array()), "html", null, true);
                                echo " form-control\"
                            data-image-upload-url=\"";
                                // line 148
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editor_upload", array("token" => $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("user"))), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, (($this->getAttribute(($context["user"] ?? null), $this->getAttribute($context["userField"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["user"] ?? null), $this->getAttribute($context["userField"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                                echo "</textarea>
                <div class=\"help-block\" style=\"display:none;\"></div>
              </div>
            </div>

          ";
                            } elseif (($this->getAttribute(                            // line 153
$context["userField"], "type", array()) == "int")) {
                                // line 154
                                echo "            <div class=\"form-group\">
              <label for=\"";
                                // line 155
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" class=\"col-sm-3 control-label\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "title", array()), "html", null, true);
                                echo "</label>
              <div class=\"col-sm-6 controls\">
                <input type=\"text\" id=\"";
                                // line 157
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" placeholder=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最大值为9位整数"), "html", null, true);
                                echo "\"
                       name=\"";
                                // line 158
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" class=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "type", array()), "html", null, true);
                                echo "  form-control\"
                       data-widget-cid=\"widget-5\" data-explain=\"\" value=\"";
                                // line 159
                                echo twig_escape_filter($this->env, (($this->getAttribute(($context["user"] ?? null), $this->getAttribute($context["userField"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["user"] ?? null), $this->getAttribute($context["userField"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                                echo "\">
                <div class=\"help-block\" style=\"display:none;\"></div>
              </div>
            </div>

          ";
                            } elseif (($this->getAttribute(                            // line 164
$context["userField"], "type", array()) == "float")) {
                                // line 165
                                echo "            <div class=\"form-group\">
              <label for=\"";
                                // line 166
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" class=\"col-sm-3 control-label\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "title", array()), "html", null, true);
                                echo "</label>
              <div class=\" col-sm-6 controls\">
                <input type=\"text\" id=\"";
                                // line 168
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" placeholder=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("保留到2位小数"), "html", null, true);
                                echo "\"
                       name=\"";
                                // line 169
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" class=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "type", array()), "html", null, true);
                                echo " form-control\"
                       data-widget-cid=\"widget-5\" data-explain=\"\" value=\"";
                                // line 170
                                echo twig_escape_filter($this->env, (($this->getAttribute(($context["user"] ?? null), $this->getAttribute($context["userField"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["user"] ?? null), $this->getAttribute($context["userField"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                                echo "\">
                <div class=\"help-block\" style=\"display:none;\"></div>
              </div>
            </div>

          ";
                            } elseif (($this->getAttribute(                            // line 175
$context["userField"], "type", array()) == "date")) {
                                // line 176
                                echo "            <div class=\"form-group\">
              <label for=\"";
                                // line 177
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" class=\"col-sm-3 control-label\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "title", array()), "html", null, true);
                                echo "</label>
              <div class=\" col-sm-6 controls\">
                <input type=\"text\" id=\"";
                                // line 179
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" name=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\"
                       class=\"";
                                // line 180
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "type", array()), "html", null, true);
                                echo "  form-control\" data-widget-cid=\"widget-5\" data-explain=\"\"
                       value=\"";
                                // line 181
                                echo twig_escape_filter($this->env, (($this->getAttribute(($context["user"] ?? null), $this->getAttribute($context["userField"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["user"] ?? null), $this->getAttribute($context["userField"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                                echo "\">
                <div class=\"help-block\" style=\"display:none;\"></div>
              </div>
            </div>

          ";
                            } elseif (($this->getAttribute(                            // line 186
$context["userField"], "type", array()) == "varchar")) {
                                // line 187
                                echo "            <div class=\"form-group\">
              <label for=\"";
                                // line 188
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" class=\"col-sm-3 control-label\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "title", array()), "html", null, true);
                                echo "</label>
              <div class=\"col-sm-6  controls\">
                <input type=\"text\" id=\"";
                                // line 190
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" name=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" class=\"form-control\"
                       data-widget-cid=\"widget-5\" data-explain=\"\" value=\"";
                                // line 191
                                echo twig_escape_filter($this->env, (($this->getAttribute(($context["user"] ?? null), $this->getAttribute($context["userField"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["user"] ?? null), $this->getAttribute($context["userField"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                                echo "\">
                <div class=\"help-block\" style=\"display:none;\"></div>
              </div>
            </div>
          ";
                            }
                            // line 196
                            echo "
        ";
                        }
                        // line 198
                        echo "      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userField'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 199
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 200
                echo "  ";
            }
        }
        // line 202
        echo "
";
    }

    public function getTemplateName()
    {
        return "user/fill-userinfo-fields-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  547 => 202,  543 => 200,  537 => 199,  531 => 198,  527 => 196,  519 => 191,  513 => 190,  506 => 188,  503 => 187,  501 => 186,  493 => 181,  489 => 180,  483 => 179,  476 => 177,  473 => 176,  471 => 175,  463 => 170,  457 => 169,  451 => 168,  444 => 166,  441 => 165,  439 => 164,  431 => 159,  425 => 158,  419 => 157,  412 => 155,  409 => 154,  407 => 153,  397 => 148,  393 => 147,  387 => 146,  380 => 144,  377 => 143,  374 => 142,  371 => 141,  367 => 140,  364 => 139,  355 => 135,  350 => 133,  347 => 132,  345 => 131,  342 => 130,  333 => 126,  328 => 124,  325 => 123,  323 => 122,  320 => 121,  312 => 116,  306 => 115,  301 => 113,  295 => 112,  288 => 108,  285 => 107,  283 => 106,  280 => 105,  275 => 102,  267 => 100,  261 => 97,  256 => 96,  254 => 95,  249 => 93,  244 => 92,  242 => 91,  237 => 89,  234 => 88,  232 => 87,  229 => 86,  222 => 82,  217 => 80,  214 => 79,  212 => 78,  209 => 77,  202 => 73,  197 => 71,  194 => 70,  192 => 69,  189 => 68,  182 => 64,  177 => 62,  174 => 61,  172 => 60,  169 => 59,  164 => 56,  159 => 54,  154 => 53,  148 => 50,  143 => 49,  141 => 48,  136 => 46,  133 => 45,  131 => 44,  128 => 43,  123 => 40,  118 => 38,  115 => 37,  109 => 35,  106 => 34,  104 => 33,  99 => 31,  96 => 30,  94 => 29,  91 => 28,  86 => 25,  80 => 23,  74 => 20,  69 => 19,  67 => 18,  62 => 16,  57 => 15,  55 => 14,  50 => 12,  47 => 11,  44 => 10,  41 => 9,  37 => 8,  34 => 7,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "user/fill-userinfo-fields-block.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/user/fill-userinfo-fields-block.html.twig");
    }
}
