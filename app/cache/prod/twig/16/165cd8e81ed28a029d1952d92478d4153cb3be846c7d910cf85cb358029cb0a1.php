<?php

/* open-course-manage/layout.html.twig */
class __TwigTemplate_63114cc87360e1f214be19d94a716a907093ed8759f76bb728345b3c15240a66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "open-course-manage/layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'side' => array($this, 'block_side'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程管理"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "  ";
        $this->loadTemplate("open-course-manage/header.html.twig", "open-course-manage/layout.html.twig", 6)->display($context);
        // line 7
        echo "
  <div class=\"row\">
    <div class=\"col-md-3\">
      ";
        // line 10
        $this->displayBlock('side', $context, $blocks);
        // line 70
        echo "    </div>
    <div class=\"col-md-9\">
      ";
        // line 72
        $this->displayBlock('main', $context, $blocks);
        // line 73
        echo "    </div>
  </div>
";
    }

    // line 10
    public function block_side($context, array $blocks = array())
    {
        // line 11
        echo "        ";
        $context["side_nav"] = ((array_key_exists("side_nav", $context)) ? (_twig_default_filter((isset($context["side_nav"]) ? $context["side_nav"] : null), null)) : (null));
        // line 12
        echo "        <div class=\"sidenav locked\">
          <ul class=\"list-group\">
            <li class=\"list-group-heading\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程信息"), "html", null, true);
        echo "</li>
            <li class=\"list-group-item ";
        // line 15
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "base")) {
            echo "active";
        }
        echo "\">
              <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_manage_base", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">
                <span ";
        // line 17
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo " ></span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("基本信息"), "html", null, true);
        echo "
              </a>
            </li>
            <li class=\"list-group-item ";
        // line 20
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "picture")) {
            echo "active";
        }
        echo "\">
              <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_manage_picture", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">
                <span ";
        // line 22
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo " ></span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程图片"), "html", null, true);
        echo "
              </a>
            </li>
            ";
        // line 25
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "liveOpen")) {
            // line 26
            echo "              <li class=\"list-group-item ";
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "liveTimeSet")) {
                echo "active";
            }
            echo "\">
                <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_manage_live_time_set", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\">
                  <span ";
            // line 28
            if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
                echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
            }
            echo " ></span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("直播时间设置"), "html", null, true);
            echo "
                </a>
              </li>
              <li class=\"list-group-item ";
            // line 31
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "replay")) {
                echo "active";
            }
            echo "\" >
                <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("live_open_course_manage_replay", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\">
                <span ";
            // line 33
            if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
                echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
            }
            echo "></span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("录播管理"), "html", null, true);
            echo "</a>
              </li>
            ";
        }
        // line 36
        echo "            ";
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "open")) {
            // line 37
            echo "              <li class=\"list-group-item ";
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "lesson")) {
                echo "active";
            }
            echo "\">
                <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_manage_lesson", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\">
                  <span ";
            // line 39
            if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
                echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
            }
            echo " ></span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课时管理"), "html", null, true);
            echo "
                </a>
              </li>
              <li class=\"list-group-item ";
            // line 42
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "files")) {
                echo "active";
            }
            echo "\">
                <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_manage_files", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\">
                  <span ";
            // line 44
            if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
                echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
            }
            echo " ></span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("文件管理"), "html", null, true);
            echo "
                </a>
              </li>
            ";
        }
        // line 48
        echo "          </ul>

          <ul class=\"list-group\">
            <li class=\"list-group-heading\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程设置"), "html", null, true);
        echo "</li>
            <li class=\"list-group-item ";
        // line 52
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "marketing")) {
            echo "active";
        }
        echo "\">
              <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_manage_marketing", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">
                <span></span>";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("推荐设置"), "html", null, true);
        echo "
              </a>
            </li>
            <li class=\"list-group-item ";
        // line 57
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "teachers")) {
            echo "active";
        }
        echo "\">
              <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_manage_teachers", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">
                <span ";
        // line 59
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo "></span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("教师设置"), "html", null, true);
        echo "
              </a>
            </li>
            <li class=\"list-group-item ";
        // line 62
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "students")) {
            echo "active";
        }
        echo "\">
              <a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_manage_students", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "userType" => "login")), "html", null, true);
        echo "\">
                <span></span>";
        // line 64
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.user_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员")), "html", null, true);
        }
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("管理"), "html", null, true);
        echo "
              </a>
            </li>
          </ul>
        </div>
      ";
    }

    // line 72
    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "open-course-manage/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 72,  261 => 64,  257 => 63,  251 => 62,  241 => 59,  237 => 58,  231 => 57,  225 => 54,  221 => 53,  215 => 52,  211 => 51,  206 => 48,  195 => 44,  191 => 43,  185 => 42,  175 => 39,  171 => 38,  164 => 37,  161 => 36,  151 => 33,  147 => 32,  141 => 31,  131 => 28,  127 => 27,  120 => 26,  118 => 25,  108 => 22,  104 => 21,  98 => 20,  88 => 17,  84 => 16,  78 => 15,  74 => 14,  70 => 12,  67 => 11,  64 => 10,  58 => 73,  56 => 72,  52 => 70,  50 => 10,  45 => 7,  42 => 6,  39 => 5,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "open-course-manage/layout.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/open-course-manage/layout.html.twig");
    }
}
