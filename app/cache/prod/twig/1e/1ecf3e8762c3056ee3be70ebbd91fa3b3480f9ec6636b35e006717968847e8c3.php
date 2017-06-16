<?php

/* open-course/lesson-play.html.twig */
class __TwigTemplate_843106af1a03a35fd70eb3f521a793e82426edc3f6244faff3ea143304f21059 extends Twig_Template
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
        if (((array_key_exists("lesson", $context)) ? (_twig_default_filter((isset($context["lesson"]) ? $context["lesson"] : null), null)) : (null))) {
            // line 2
            echo "  <div class=\"watermarkEmbedded\" ></div>
  <div id=\"lesson-preview-iframe\" class=\"lesson-content embed-responsive embed-responsive-16by9\" style=\"display:none;\"></div>
  <div id=\"lesson-preview-player\" class=\"lesson-content embed-responsive embed-responsive-16by9\" style=\"display:none;\"
    data-balloon-player=\"1\"
    ";
            // line 6
            if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.video_watermark") && $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.video_watermark_image"))) {
                // line 7
                echo "      data-watermark=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFileUrl($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.video_watermark_image"), null), "html", null, true);
                echo "\"
    ";
            }
            // line 9
            echo "    ";
            if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.video_fingerprint") && $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()))) {
                // line 10
                echo "      data-fingerprint=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("cloud_video_fingerprint", array("userId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()))), "html", null, true);
                echo "\"
    ";
            }
            // line 12
            echo "  ></div>
  <div id=\"lesson-preview-swf-player\" class=\"lesson-content embed-responsive embed-responsive-16by9\" style=\"display:none;height:100%;\"></div>

  <input type=\"hidden\" id=\"firstLesson\" data-url=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_lesson_show", array("courseId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "courseId", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
            echo "\">
";
        }
        // line 17
        echo "
<div class=\"mask\" ";
        // line 18
        if ((isset($context["lesson"]) ? $context["lesson"] : null)) {
            echo "style=\"display:none\"";
        }
        echo " id=\"media-error-dialog\">
  <div class=\"modal-dialog\" style=\"width:230px;margin:22% auto;\">
    <div class=\"modal-content\">

      <div class=\"modal-body clearfix\">
        <i class=\"es-icon es-icon-info\" style=\"font-size: 22px;\"></i>
        <span class=\"media-error\">";
        // line 24
        if ( !(isset($context["lesson"]) ? $context["lesson"] : null)) {
            echo "视频编辑中，请稍后再试";
        } else {
            echo "该课时资源文件被删除";
        }
        echo "</span>
      </div>
    </div>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "open-course/lesson-play.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 24,  57 => 18,  54 => 17,  49 => 15,  44 => 12,  38 => 10,  35 => 9,  29 => 7,  27 => 6,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "open-course/lesson-play.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/open-course/lesson-play.html.twig");
    }
}
