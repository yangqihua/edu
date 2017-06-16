<?php

/* open-course/explore.html.twig */
class __TwigTemplate_dadc100fe81c9d03266461866fecc19312fd4a079682ef5694a146f3922f6ada extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "open-course/explore.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'top_content' => array($this, 'block_top_content'),
            'content' => array($this, 'block_content'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["bodyClass"] = "bg-blank open-course-list";
        // line 3
        $context["mobile"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->isShowMobilePage();
        // line 4
        $context["siteNav"] = "open/course/explore";
        // line 5
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/echo-js.js", 1 => "app/js/open-course/open-course-explore/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo " 公开课 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_top_content($context, array $blocks = array())
    {
        // line 9
        echo "  <div class=\"es-banner\">
    <div class=\"container\">
      <div class=\"title\">
        公开课列表
      </div>
      <div class=\"more\">
        <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_explore");
        echo "\">
          ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("查看课程"), "html", null, true);
        echo "
        </a>
        <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_explore");
        echo "\">
          ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("查看班级"), "html", null, true);
        echo "
        </a>
      </div>
    </div>
  </div>
  ";
        // line 24
        if ((isset($context["mobile"]) ? $context["mobile"] : null)) {
            // line 25
            echo "    ";
            $this->loadTemplate("course-set/search-mobile.html.twig", "open-course/explore.html.twig", 25)->display($context);
            // line 26
            echo "  ";
        }
    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        // line 29
        echo "  <div class=\"open-course-list\">
    <div class=\"row course-list es-open-course-list\">
      ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            if ($context["course"]) {
                // line 32
                echo "        ";
                $context["lessons"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("OpenCourseLessons", array("courseId" => $this->getAttribute($context["course"], "id", array()), "count" => 1));
                // line 33
                echo "        <div class=\"col-md-4 col-xs-6\">
          <div class=\"course-item\">
            <div class=\"course-img\">
              <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_show", array("courseId" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                echo "\" target=\"_blank\"
                target=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                echo "\">
                ";
                // line 38
                if (($this->getAttribute($context["course"], "type", array()) == "liveOpen")) {
                    // line 39
                    echo "                  <span class=\"tags\">
            <span class=\"tag-live\"></span>
          </span>
                ";
                }
                // line 43
                echo "                ";
                echo $this->env->getExtension('AppBundle\Twig\WebExtension')->makeLazyImg($this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute($context["course"], "middlePicture", array()), "course.png"), "img-responsive", $this->getAttribute($context["course"], "title", array()));
                echo "
              </a>
              ";
                // line 45
                if ((($this->getAttribute($context["course"], "type", array()) == "liveOpen") && (isset($context["lessons"]) ? $context["lessons"] : null))) {
                    // line 46
                    echo "                <div class=\"mask\">
                  ";
                    // line 47
                    if ((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["lessons"]) ? $context["lessons"] : null), 0, array(), "array"), "startTime", array()), "Y-m-d") == twig_date_format_filter($this->env, "now", "Y-m-d"))) {
                        // line 48
                        echo "                    <i class=\"es-icon es-icon-videocam prs hidden-xs\"></i>";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["lessons"]) ? $context["lessons"] : null), 0, array(), "array"), "startTime", array()), "H:i"), "html", null, true);
                        echo " 直播
                  ";
                    } else {
                        // line 50
                        echo "                    <i class=\"es-icon es-icon-videocam prs hidden-xs\"></i>";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["lessons"]) ? $context["lessons"] : null), 0, array(), "array"), "startTime", array()), "Y-m-d H:i"), "html", null, true);
                        echo " 直播
                  ";
                    }
                    // line 52
                    echo "                </div>
              ";
                }
                // line 54
                echo "            </div>
            <div class=\"course-info clearfix\">
              <div class=\"title\">
                <a class=\"link-dark\" href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_show", array("courseId" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                echo "\" target=\"_blank\"
                  title=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                echo "\">
                  ";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                echo "
                </a>
              </div>
              <div class=\"metas pull-right\">
                <span class=\"num\"><i class=\"es-icon es-icon-removeredeye\"></i>";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "hitNum", array()), "html", null, true);
                echo "</span>
                <span class=\"comment\"><i class=\"es-icon es-icon-textsms\"></i>";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "postNum", array()), "html", null, true);
                echo "</span>
              </div>
            </div>

          </div>
        </div>
      ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 71
            echo "        <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无公开课"), "html", null, true);
            echo "</div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "    </div>
    ";
        // line 74
        if ( !(isset($context["mobile"]) ? $context["mobile"] : null)) {
            // line 75
            echo "      ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
            echo "
    ";
        }
        // line 77
        echo "  </div>
";
    }

    // line 80
    public function block_bottom($context, array $blocks = array())
    {
        // line 81
        echo "  ";
        $this->loadTemplate("mobile/footer-tool-bar.html.twig", "open-course/explore.html.twig", 81)->display(array_merge($context, array("mobile_tool_bar" => "course")));
    }

    public function getTemplateName()
    {
        return "open-course/explore.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 81,  217 => 80,  212 => 77,  206 => 75,  204 => 74,  201 => 73,  192 => 71,  179 => 64,  175 => 63,  168 => 59,  164 => 58,  160 => 57,  155 => 54,  151 => 52,  145 => 50,  139 => 48,  137 => 47,  134 => 46,  132 => 45,  126 => 43,  120 => 39,  118 => 38,  114 => 37,  110 => 36,  105 => 33,  102 => 32,  96 => 31,  92 => 29,  89 => 28,  84 => 26,  81 => 25,  79 => 24,  71 => 19,  67 => 18,  62 => 16,  58 => 15,  50 => 9,  47 => 8,  40 => 7,  36 => 1,  34 => 5,  32 => 4,  30 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "open-course/explore.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/open-course/explore.html.twig");
    }
}
