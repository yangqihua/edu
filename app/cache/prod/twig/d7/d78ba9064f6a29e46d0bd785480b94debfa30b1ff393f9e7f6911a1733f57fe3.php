<?php

/* admin/app/center.html.twig */
class __TwigTemplate_beb9f8cb0e601a1f31ccdf80febc3875d1797f3c26f02cd736d046ab76c8362c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/app/center.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["menu"] = "admin_app_center";
        // line 5
        $context["script_controller"] = "app/center";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "  <div class=\"mbl btn-group\">
    <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_app_center", array("postStatus" => "all"));
        echo "\" type=\"button\"
       class=\"btn btn-default btn-sm ";
        // line 10
        if (((isset($context["type"]) ? $context["type"] : null) == "all")) {
            echo " btn-primary";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("全部"), "html", null, true);
        echo "</a>
    <a href=\" ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_app_center", array("postStatus" => "theme"));
        echo "\" type=\"button\"
       class=\"btn btn-default btn-sm ";
        // line 12
        if (((isset($context["type"]) ? $context["type"] : null) == "theme")) {
            echo "btn-primary";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("主题"), "html", null, true);
        echo "</a>
    <a href=\" ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_app_center", array("postStatus" => "app"));
        echo "\" type=\"button\"
       class=\"btn btn-default btn-sm ";
        // line 14
        if (((isset($context["type"]) ? $context["type"] : null) == "app")) {
            echo "btn-primary";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("应用"), "html", null, true);
        echo "</a>
  </div>

  <div class=\"checkbox-group appTypeChoices\" RepeatDirection=\"Horizontal\" id=\"appTypeChoices\" name=\"appTypeChoices\"
       style=\"float:right;margin-top:-45px;\">
    <div class=\"sortedCourses\">
      <input type=\"checkbox\" name=\"appTypeChoices\" id=\"installedApps\"
             value=\"installedApps\" ";
        // line 21
        if ((((array_key_exists("appTypeChoices", $context)) ? (_twig_default_filter((isset($context["appTypeChoices"]) ? $context["appTypeChoices"] : null), null)) : (null)) == "installedApps")) {
            echo " data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_app_center", array("postStatus" => (isset($context["type"]) ? $context["type"] : null), "showType" => "unhidden")), "html", null, true);
            echo "\"  checked ";
        } else {
            echo " data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_app_center", array("postStatus" => (isset($context["type"]) ? $context["type"] : null), "showType" => "hidden")), "html", null, true);
            echo "\" ";
        }
        echo ">
      ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("隐藏已购应用"), "html", null, true);
        echo "
      <input type=\"hidden\" name=\"type\" value='";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "' id=\"type\">
    </div>
  </div>

  ";
        // line 27
        if ((((array_key_exists("status", $context)) ? (_twig_default_filter((isset($context["status"]) ? $context["status"] : null), null)) : (null)) == "error")) {
            // line 28
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("AccessKey或者SecretKey设置不正确，会影响到系统正常的运行，"), "html", null, true);
            echo "<a
          href=\"";
            // line 29
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_cloud");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请修改设置。"), "html", null, true);
            echo "</a></div>
  ";
        } elseif ((((        // line 30
array_key_exists("status", $context)) ? (_twig_default_filter((isset($context["status"]) ? $context["status"] : null), null)) : (null)) == "unlink")) {
            // line 31
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("您的服务器无法连接到更新服务器，请检查网络连接状况。"), "html", null, true);
            echo "</div>
  ";
        } else {
            // line 33
            echo "    <table class=\"table table-striped table-hover\" id=\"app-table-container\">
      <thead>

      </thead>
      <tbody>

      ";
            // line 39
            if (((isset($context["type"]) ? $context["type"] : null) == "all")) {
                // line 40
                echo "        ";
                $context["apps"] = (isset($context["apps"]) ? $context["apps"] : null);
                // line 41
                echo "      ";
            } elseif (((isset($context["type"]) ? $context["type"] : null) == "theme")) {
                // line 42
                echo "        ";
                $context["apps"] = (isset($context["theme"]) ? $context["theme"] : null);
                // line 43
                echo "      ";
            } elseif (((isset($context["type"]) ? $context["type"] : null) == "app")) {
                // line 44
                echo "        ";
                $context["apps"] = (isset($context["allApp"]) ? $context["allApp"] : null);
                // line 45
                echo "      ";
            }
            // line 46
            echo "
      ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["apps"]) ? $context["apps"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
                // line 48
                echo "        ";
                $context["installedApp"] = (($this->getAttribute((isset($context["installedApps"]) ? $context["installedApps"] : null), $this->getAttribute($context["app"], "code", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["installedApps"]) ? $context["installedApps"] : null), $this->getAttribute($context["app"], "code", array()), array(), "array"), null)) : (null));
                // line 49
                echo "
        ";
                // line 50
                if ((((array_key_exists("appTypeChoices", $context)) ? (_twig_default_filter((isset($context["appTypeChoices"]) ? $context["appTypeChoices"] : null), null)) : (null)) == "installedApps")) {
                    // line 51
                    echo "
          ";
                    // line 52
                    if ((((($this->getAttribute($context["app"], "purchased", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["app"], "purchased", array()), false)) : (false)) == true) || (isset($context["installedApp"]) ? $context["installedApp"] : null))) {
                        // line 53
                        echo "
            ";
                        // line 54
                        if ((isset($context["installedApp"]) ? $context["installedApp"] : null)) {
                            // line 55
                            echo "            ";
                        } else {
                            // line 56
                            echo "              <tr>
                <td>
                  ";
                            // line 58
                            $this->loadTemplate("admin/app/app-detail.html.twig", "admin/app/center.html.twig", 58)->display($context);
                            // line 59
                            echo "                  <div class=\"right-info pull-right\">
                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal\"
                       data-url=\"";
                            // line 61
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_app_package_update_modal", array("id" => $this->getAttribute($context["app"], "latestPackageId", array()), "type" => "install")), "html", null, true);
                            echo "\"
                       class=\"btn btn-primary app-btn\" data-keyboard=\"false\" data-backdrop=\"static\">";
                            // line 62
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("安装"), "html", null, true);
                            echo "</a>
                  </div>
                </td>
              </tr>
            ";
                        }
                        // line 67
                        echo "          ";
                    } else {
                        // line 68
                        echo "            <tr>
              <td>
                ";
                        // line 70
                        $this->loadTemplate("admin/app/app-detail.html.twig", "admin/app/center.html.twig", 70)->display($context);
                        // line 71
                        echo "
                <div class=\"right-info pull-right\">
                  ";
                        // line 73
                        if (((($this->getAttribute($context["app"], "userAccess", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["app"], "userAccess", array()), null)) : (null)) == "impossible")) {
                            // line 74
                            echo "                    <a href=\"http://open.edusoho.com\" class=\"user-access\" target=_blank>";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("商业专属"), "html", null, true);
                            echo "</a>
                  ";
                        } else {
                            // line 76
                            echo "                    ";
                            if (($this->getAttribute($context["app"], "price", array()) == 0)) {
                                // line 77
                                echo "                      <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal\"
                         data-url=\"";
                                // line 78
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_app_package_update_modal", array("id" => $this->getAttribute($context["app"], "latestPackageId", array()), "type" => "install")), "html", null, true);
                                echo "\"
                         class=\"btn btn-primary app-btn\" data-keyboard=\"false\"
                         data-backdrop=\"static\">";
                                // line 80
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("安装"), "html", null, true);
                                echo "</a>
                    ";
                            } else {
                                // line 82
                                echo "                      <a href=\"http://open.edusoho.com/app/";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "code", array()), "html", null, true);
                                echo "\" class=\"btn btn-warning app-btn\"
                         target=\"_blank\">";
                                // line 83
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("购买"), "html", null, true);
                                echo "</a>
                    ";
                            }
                            // line 85
                            echo "                    <p class=\"mtm\"><span class=\"text-muted\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("价格："), "html", null, true);
                            echo "</span><span
                          class=\"price\"> ¥ ";
                            // line 86
                            if (($this->getAttribute($context["app"], "price", array()) > 0)) {
                                echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "price", array()), "html", null, true);
                            } else {
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("免费"), "html", null, true);
                            }
                            echo "</span>
                    </p>
                  ";
                        }
                        // line 89
                        echo "                </div>
              </td>
            </tr>
          ";
                    }
                    // line 93
                    echo "
        ";
                } else {
                    // line 95
                    echo "          <tr>
            <td>
              ";
                    // line 97
                    $this->loadTemplate("admin/app/app-detail.html.twig", "admin/app/center.html.twig", 97)->display($context);
                    // line 98
                    echo "              <div class=\"right-info pull-right\">

                ";
                    // line 100
                    if ((((($this->getAttribute($context["app"], "purchased", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["app"], "purchased", array()), false)) : (false)) == true) || (isset($context["installedApp"]) ? $context["installedApp"] : null))) {
                        // line 101
                        echo "
                  ";
                        // line 102
                        if ((isset($context["installedApp"]) ? $context["installedApp"] : null)) {
                            // line 103
                            echo "                    ";
                            if ((($this->getAttribute($context["app"], "ontrial", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["app"], "ontrial", array()), false)) : (false))) {
                                // line 104
                                echo "                      <p><a href=\"javascript:;\" class=\"btn btn-default disabled app-btn\">";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("试用中"), "html", null, true);
                                echo "</a></p>
                      <p><a href=\"http://open.edusoho.com/app/";
                                // line 105
                                echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "code", array()), "html", null, true);
                                echo "\" class=\"btn btn-warning app-btn\"
                            target=\"_blank\">";
                                // line 106
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("购买"), "html", null, true);
                                echo "</a></p>
                    ";
                            } else {
                                // line 108
                                echo "                      <a href=\"javascript:;\" class=\"btn btn-default disabled app-btn\">";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已购买"), "html", null, true);
                                echo "</a>
                    ";
                            }
                            // line 110
                            echo "                  ";
                        } else {
                            // line 111
                            echo "                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal\"
                       data-url=\"";
                            // line 112
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_app_package_update_modal", array("id" => $this->getAttribute($context["app"], "latestPackageId", array()), "type" => "install")), "html", null, true);
                            echo "\"
                       class=\"btn btn-primary app-btn\" data-keyboard=\"false\" data-backdrop=\"static\">";
                            // line 113
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("安装"), "html", null, true);
                            echo "</a>
                  ";
                        }
                        // line 115
                        echo "
                  <p class=\"mtm\"><span class=\"text-muted\">";
                        // line 116
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("价格："), "html", null, true);
                        echo "</span><span
                        class=\"price\"> ¥ ";
                        // line 117
                        if (($this->getAttribute($context["app"], "price", array()) > 0)) {
                            echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "price", array()), "html", null, true);
                        } else {
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("免费"), "html", null, true);
                        }
                        echo "</span>
                  </p>
                ";
                    } else {
                        // line 120
                        echo "
                  ";
                        // line 121
                        if ($this->getAttribute($context["app"], "buyable", array(), "any", true, true)) {
                            // line 122
                            echo "                    ";
                            $context["triable"] = (($this->getAttribute($context["app"], "triable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["app"], "triable", array()), false)) : (false));
                            // line 123
                            echo "                    ";
                            if ((isset($context["triable"]) ? $context["triable"] : null)) {
                                // line 124
                                echo "                      <p><a href=\"#\" data-toggle=\"modal\" data-target=\"#modal\"
                            data-url=\"";
                                // line 125
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_app_package_update_modal", array("id" => $this->getAttribute($context["app"], "latestPackageId", array()), "type" => "install")), "html", null, true);
                                echo "\"
                            class=\"btn btn-primary app-btn\" data-keyboard=\"false\"
                            data-backdrop=\"static\">";
                                // line 127
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("试用"), "html", null, true);
                                echo "</a></p>
                    ";
                            }
                            // line 129
                            echo "                    ";
                            if ($this->getAttribute($context["app"], "buyable", array())) {
                                // line 130
                                echo "                      <p><a href=\"http://open.edusoho.com/app/";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "code", array()), "html", null, true);
                                echo "\" class=\"btn btn-warning app-btn\"
                            target=\"_blank\">";
                                // line 131
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("购买"), "html", null, true);
                                echo "</a></p>
                    ";
                            } else {
                                // line 133
                                echo "                      <a href=\"http://open.edusoho.com/app/";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "code", array()), "html", null, true);
                                echo "\" class=\"btn btn-warning app-btn\"
                         target=\"_blank\">";
                                // line 134
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("查看详情"), "html", null, true);
                                echo "</a>
                    ";
                            }
                            // line 136
                            echo "                    <p class=\"mtm\"><span class=\"text-muted\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("价格："), "html", null, true);
                            echo "</span><span
                          class=\"price\"> ¥ ";
                            // line 137
                            if (($this->getAttribute($context["app"], "price", array()) > 0)) {
                                echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "price", array()), "html", null, true);
                            } else {
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("免费"), "html", null, true);
                            }
                            echo "</span>
                    </p>
                  ";
                        } else {
                            // line 140
                            echo "                    ";
                            if (((($this->getAttribute($context["app"], "userAccess", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["app"], "userAccess", array()), null)) : (null)) == "impossible")) {
                                // line 141
                                echo "                      <a href=\"http://www.edusoho.com/product/system\" class=\"user-access\"
                         target=_blank>";
                                // line 142
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("商业专属"), "html", null, true);
                                echo "</a>
                    ";
                            } else {
                                // line 144
                                echo "                      ";
                                if (($this->getAttribute($context["app"], "price", array()) == 0)) {
                                    // line 145
                                    echo "                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal\"
                           data-url=\"";
                                    // line 146
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_app_package_update_modal", array("id" => $this->getAttribute($context["app"], "latestPackageId", array()), "type" => "install")), "html", null, true);
                                    echo "\"
                           class=\"btn btn-primary app-btn\" data-keyboard=\"false\"
                           data-backdrop=\"static\">";
                                    // line 148
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("安装"), "html", null, true);
                                    echo "</a>
                      ";
                                } else {
                                    // line 150
                                    echo "                        <a href=\"http://open.edusoho.com/app/";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "code", array()), "html", null, true);
                                    echo "\" class=\"btn btn-warning app-btn\"
                           target=\"_blank\">";
                                    // line 151
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("购买"), "html", null, true);
                                    echo "</a>
                      ";
                                }
                                // line 153
                                echo "                      <p class=\"mtm\"><span class=\"text-muted\">";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("价格："), "html", null, true);
                                echo "</span><span
                            class=\"price\"> ¥ ";
                                // line 154
                                if (($this->getAttribute($context["app"], "price", array()) > 0)) {
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "price", array()), "html", null, true);
                                } else {
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("免费"), "html", null, true);
                                }
                                echo "</span>
                      </p>
                    ";
                            }
                            // line 157
                            echo "                  ";
                        }
                        // line 158
                        echo "                ";
                    }
                    // line 159
                    echo "
              </div>
            </td>
          </tr>
        ";
                }
                // line 164
                echo "      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['app'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            echo "      </tbody>
    </table>
  ";
        }
    }

    public function getTemplateName()
    {
        return "admin/app/center.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  501 => 165,  487 => 164,  480 => 159,  477 => 158,  474 => 157,  464 => 154,  459 => 153,  454 => 151,  449 => 150,  444 => 148,  439 => 146,  436 => 145,  433 => 144,  428 => 142,  425 => 141,  422 => 140,  412 => 137,  407 => 136,  402 => 134,  397 => 133,  392 => 131,  387 => 130,  384 => 129,  379 => 127,  374 => 125,  371 => 124,  368 => 123,  365 => 122,  363 => 121,  360 => 120,  350 => 117,  346 => 116,  343 => 115,  338 => 113,  334 => 112,  331 => 111,  328 => 110,  322 => 108,  317 => 106,  313 => 105,  308 => 104,  305 => 103,  303 => 102,  300 => 101,  298 => 100,  294 => 98,  292 => 97,  288 => 95,  284 => 93,  278 => 89,  268 => 86,  263 => 85,  258 => 83,  253 => 82,  248 => 80,  243 => 78,  240 => 77,  237 => 76,  231 => 74,  229 => 73,  225 => 71,  223 => 70,  219 => 68,  216 => 67,  208 => 62,  204 => 61,  200 => 59,  198 => 58,  194 => 56,  191 => 55,  189 => 54,  186 => 53,  184 => 52,  181 => 51,  179 => 50,  176 => 49,  173 => 48,  156 => 47,  153 => 46,  150 => 45,  147 => 44,  144 => 43,  141 => 42,  138 => 41,  135 => 40,  133 => 39,  125 => 33,  119 => 31,  117 => 30,  111 => 29,  106 => 28,  104 => 27,  97 => 23,  93 => 22,  81 => 21,  67 => 14,  63 => 13,  55 => 12,  51 => 11,  43 => 10,  39 => 9,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/app/center.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/admin/app/center.html.twig");
    }
}
