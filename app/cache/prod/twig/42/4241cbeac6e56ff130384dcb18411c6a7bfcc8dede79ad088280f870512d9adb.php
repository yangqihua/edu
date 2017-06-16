<?php

/* courseset-manage/create.html.twig */
class __TwigTemplate_b0f904beb819425afb20074788602a1dc00ff4131b8d67aeeda6bbe71084dd38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "courseset-manage/create.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/jquery-validation.js", 1 => "app/js/courseset/create/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("创建课程"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "  <div class=\"row\">
    <div class=\"panel panel-default panel-page panel-create-course\">
      <div class=\"panel-heading\">
        <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("创建课程"), "html", null, true);
        echo "</h2>
      </div>
      ";
        // line 13
        if ((( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "largeAvatar", array()) ||  !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "title", array())) ||  !$this->getAttribute((isset($context["userProfile"]) ? $context["userProfile"] : null), "about", array()))) {
            // line 14
            echo "        ";
            $this->loadTemplate("settings/user-profile.html.twig", "courseset-manage/create.html.twig", 14)->display($context);
            // line 15
            echo "      ";
        } else {
            // line 16
            echo "        <form id=\"courseset-create-form\" class=\"form-horizontal\" action=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_create");
            echo "\"
              method=\"post\">
          ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
            echo "
          <div class=\"course-piece\">";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("选择类型"), "html", null, true);
            echo "</div>
          <div class=\"form-group\">
            <div class=\"col-md-3\">
              <div class=\"course-select js-courseSetType active\" data-type=\"normal\"><i
                    class=\"es-icon es-icon-putongkecheng \"></i>
                <div class=\"course-type\">普通课程</div>
                <div class=\"course-intro\">支持视频、图文、PPT等各种形式，支持作业、笔记等多个学习工具的课程</div>
              </div>
            </div>
            <div class=\"col-md-3\">
              ";
            // line 29
            if ( !$this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("live-course.live_course_enabled")) {
                // line 30
                echo "                <div class=\"course-select disabled\" data-toggle=\"tooltip\" data-placement=\"top\"
                   title=\"云直播开启后可用\" data-type=\"live\">
              ";
            } else {
                // line 33
                echo "                <div class=\"course-select js-courseSetType\" data-type=\"live\">
              ";
            }
            // line 35
            echo "                  <i class=\"es-icon es-icon-zhibokecheng \"></i>
                  <div class=\"course-type\">直播课程</div>
                  <div class=\"course-intro\">以直播为教学形式的，支持多个学习工具的课程</div>
                </div>
              </div>

              <div class=\"col-md-3\">
                <div class=\"course-select js-courseSetType\" data-type=\"open\">
                  <i class=\"es-icon es-icon-lubogongkaike\"></i>
                  <div class=\"course-type\">录播公开课</div>
                  <div class=\"course-intro\">免费、无门槛观看的视频课程，主要用于营销推广</div>
                </div>
              </div>

              <div class=\"col-md-3\">
                ";
            // line 50
            if ( !$this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("live-course.live_course_enabled")) {
                // line 51
                echo "                  <div class=\"course-select disabled\" data-toggle=\"tooltip\" data-placement=\"top\"
                     title=\"云直播开启后可用\" data-type=\"liveOpen\">
                ";
            } else {
                // line 54
                echo "                  <div class=\"course-select js-courseSetType\" data-type=\"liveOpen\">
                ";
            }
            // line 56
            echo "                    <i class=\"es-icon es-icon-zhibokecheng2\"></i>
                    <div class=\"course-type\">直播公开课</div>
                    <div class=\"course-intro\">免费、无门槛参与的直播课程，主要用于营销推广</div>
                  </div>
                </div>
              </div>
              ";
            // line 62
            $this->loadTemplate("org/course-create-org-tree-select.html.twig", "courseset-manage/create.html.twig", 62)->display($context);
            // line 63
            echo "              <div class=\"course-title form-group\">
                <div class=\"col-md-2 controls-label text-lg\">
                  <div class=\"course-piece title\">";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程标题"), "html", null, true);
            echo "</div>
                </div>
                <div class=\"col-md-10 controls\">
                  <input type=\"text\" id=\"course_title\" name=\"title\" required=\"required\" class=\"form-control\"
                         data-widget-cid=\"widget-1\" data-explain=\"\">
                  <div class=\"help-block\" style=\"display:none;\"></div>
                </div>
              </div>
              <div class=\"text-center\">
                ";
            // line 74
            if ( !$this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.owned")) {
                // line 75
                echo "                  <span class=\"mrm\">
                <a href=\"http://www.qiqiuyu.com/course/22\" class=\"color-gray\" target=\"_blank\">";
                // line 76
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("如何创建课程？"), "html", null, true);
                echo "</a>
              </span>
                ";
            }
            // line 79
            echo "                <button id=\"courseset-create-btn\" data-loading-text=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在创建..."), "html", null, true);
            echo "\"
                       class=\"btn btn-fat btn-primary\" type=\"submit\">";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("创建"), "html", null, true);
            echo "</button>
                <a class=\"btn btn-fat btn-link\" href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "headers", array()), "get", array(0 => "Referer"), "method"), "html", null, true);
            echo "\">取消</a>
              </div>
              <input type=\"hidden\" name=\"type\" value=\"normal\"/>
              <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
            echo "\"></div>
          </div>
        </form>
      ";
        }
        // line 88
        echo "    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "courseset-manage/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 88,  175 => 84,  169 => 81,  165 => 80,  160 => 79,  154 => 76,  151 => 75,  149 => 74,  137 => 65,  133 => 63,  131 => 62,  123 => 56,  119 => 54,  114 => 51,  112 => 50,  95 => 35,  91 => 33,  86 => 30,  84 => 29,  71 => 19,  67 => 18,  61 => 16,  58 => 15,  55 => 14,  53 => 13,  48 => 11,  43 => 8,  40 => 7,  32 => 3,  28 => 1,  26 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "courseset-manage/create.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/courseset-manage/create.html.twig");
    }
}
