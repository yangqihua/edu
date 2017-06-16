<?php

/* open-course/open-course-header.html.twig */
class __TwigTemplate_2aff75d3d2db72c68b3a39efc14f72a92cc2d524b464e4a74ca5a4223a868b37 extends Twig_Template
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
        echo "<div class=\"col-md-9 open-course-views\" data-get-recommend-course-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_ad_modal_recommend_course", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "num" => 3)), "html", null, true);
        echo "\">
  ";
        // line 2
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "liveOpen")) {
            // line 3
            echo "    ";
            $this->loadTemplate("open-course/live-open-course-header.html.twig", "open-course/open-course-header.html.twig", 3)->display($context);
            // line 4
            echo "  ";
        } else {
            // line 5
            echo "    ";
            $this->loadTemplate("open-course/lesson-play.html.twig", "open-course/open-course-header.html.twig", 5)->display($context);
            // line 6
            echo "  ";
        }
        // line 7
        echo "  
  <div class=\"mask modal fade\" id=\"open-course-ad-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"openCourseADModal\">
    <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
          <h4 class=\"modal-title\" id=\"open-course-ad-modal-title\">课时学习完成</h4>
        </div>
        <div class=\"modal-body\">
          <div class='empty'>如果喜欢课程内容，赶紧分享给好友吧</div>
        </div>
        <div class=\"modal-footer\">
          <div class=\"es-share top\">
            <a href=\"javascript:;\" class=\"btn-link color-gray prl js-player-replay\"><i class=\"es-icon es-icon-refresh prs\"></i>重播</a>
            <a href=\"\" class=\"btn btn-lg share-btn dropdown-toggle mrm\" data-toggle=\"dropdown\">
              <i class=\"es-icon es-icon-share prs\"></i>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("分享"), "html", null, true);
        echo "</a>
            ";
        // line 23
        $this->loadTemplate("common/share-dropdown.html.twig", "open-course/open-course-header.html.twig", 23)->display(array_merge($context, array("type" => "open_course")));
        // line 24
        echo "            ";
        // line 29
        echo "          </div>
        </div>
      </div>

    </div>
  </div>
</div>
";
        // line 36
        $this->env->getExtension('AppBundle\Twig\WebExtension')->loadScript("open-course/open-course-header");
        // line 37
        $this->loadTemplate("seajs_loader_compatible.html.twig", "open-course/open-course-header.html.twig", 37)->display(array_merge($context, array("topxiawebbundle" => true)));
        // line 38
        echo "





";
    }

    public function getTemplateName()
    {
        return "open-course/open-course-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 38,  74 => 37,  72 => 36,  63 => 29,  61 => 24,  59 => 23,  55 => 22,  38 => 7,  35 => 6,  32 => 5,  29 => 4,  26 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "open-course/open-course-header.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/open-course/open-course-header.html.twig");
    }
}
