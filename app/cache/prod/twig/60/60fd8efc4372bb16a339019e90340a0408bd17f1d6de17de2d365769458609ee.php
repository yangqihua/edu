<?php

/* open-course-manage/lesson-list-item.html.twig */
class __TwigTemplate_7a2641fff0021d65f1ce9d87494c9a3aaf0a88f3934a037e8b3ee4b555b53ece extends Twig_Template
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
        echo "<li class=\"item-lesson clearfix\" id=\"lesson-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()), "html", null, true);
        echo "\" data-file-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "mediaId", array()), "html", null, true);
        echo "\" data-lesson-type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()), "html", null, true);
        echo "\" style=\"word-break: break-all;\" >
  <div class=\"item-line\"></div>
  <div class=\"item-content\">
    ";
        // line 4
        $context["mediaStatus"] = (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "mediaStatus", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "mediaStatus", array()), null)) : (null));
        // line 5
        echo "
    ";
        // line 6
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "video")) {
            // line 7
            echo "      ";
            if (((isset($context["mediaStatus"]) ? $context["mediaStatus"] : null) == "waiting")) {
                // line 8
                echo "      <i class=\"fa fa-file-video-o color-warning\"></i>
      ";
            } elseif ((            // line 9
(isset($context["mediaStatus"]) ? $context["mediaStatus"] : null) == "doing")) {
                // line 10
                echo "      <i class=\"fa fa-file-video-o text-info\"></i>
      ";
            } elseif ((            // line 11
(isset($context["mediaStatus"]) ? $context["mediaStatus"] : null) == "error")) {
                // line 12
                echo "      <i class=\"fa fa-file-video-o color-danger\"></i>
      ";
            } else {
                // line 14
                echo "      <i class=\"fa fa-file-video-o color-success\"></i>
      ";
            }
            // line 16
            echo "    ";
        } elseif (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "liveOpen")) {
            // line 17
            echo "      ";
            if (((isset($context["mediaStatus"]) ? $context["mediaStatus"] : null) == "waiting")) {
                // line 18
                echo "      <i class=\"fa fa-video-camera color-warning\"></i>
      ";
            } elseif ((            // line 19
(isset($context["mediaStatus"]) ? $context["mediaStatus"] : null) == "doing")) {
                // line 20
                echo "      <i class=\"fa fa-video-camera text-info\"></i>
      ";
            } elseif ((            // line 21
(isset($context["mediaStatus"]) ? $context["mediaStatus"] : null) == "error")) {
                // line 22
                echo "      <i class=\"fa fa-video-camera color-danger\"></i>
      ";
            } else {
                // line 24
                echo "      <i class=\"fa fa-video-camera color-success\"></i>
      ";
            }
            // line 26
            echo "    ";
        } else {
            // line 27
            echo "      <i class=\"fa fa-file-powerpoint-o color-success\"></i>
    ";
        }
        // line 29
        echo "    课时 <span class=\"number\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "number", array()), "html", null, true);
        echo "</span>：

    ";
        // line 31
        if (((!twig_in_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()), array(0 => "liveOpen")) && ($this->getAttribute(        // line 32
(isset($context["lesson"]) ? $context["lesson"] : null), "mediaSource", array()) == "self")) && (($this->getAttribute(        // line 33
(isset($context["lesson"]) ? $context["lesson"] : null), "mediaId", array()) &&  !((array_key_exists("file", $context)) ? (_twig_default_filter((isset($context["file"]) ? $context["file"] : null), false)) : (false))) ||  !$this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "mediaId", array())))) {
            // line 35
            echo "      <span class=\"label label-danger fileDeletedLesson\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课时文件已删除"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("无效课时"), "html", null, true);
            echo "</span>
    ";
        }
        // line 37
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "title", array()), "html", null, true);
        echo "

    ";
        // line 39
        if (twig_in_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()), array(0 => "video", 1 => "audio"))) {
            // line 40
            echo "      <span class=\"color-gray\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->durationFilter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "length", array())), "html", null, true);
            echo "</span>
    ";
        }
        // line 42
        echo "
    ";
        // line 43
        if (twig_in_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()), array(0 => "live"))) {
            // line 44
            echo "      <span class=\"color-gray\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->dateformatFilter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "startTime", array())), "html", null, true);
            echo "</span>
    ";
        }
        // line 46
        echo "
    <span data-role=\"mediaStatus\"></span>
    ";
        // line 48
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) != "testpaper")) {
            // line 49
            echo "      ";
            $context["mediaTypeName"] = ((($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "video")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("视频")) : (((($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "audio")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("音频")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("文件")))));
            // line 50
            echo "      ";
            if (((isset($context["mediaStatus"]) ? $context["mediaStatus"] : null) == "waiting")) {
                // line 51
                echo "        <span class=\"color-warning\">(正在等待";
                echo twig_escape_filter($this->env, (isset($context["mediaTypeName"]) ? $context["mediaTypeName"] : null), "html", null, true);
                echo "格式转换)</span>
      ";
            } elseif ((            // line 52
(isset($context["mediaStatus"]) ? $context["mediaStatus"] : null) == "doing")) {
                // line 53
                echo "        <span class=\"text-info\">(正在转换";
                echo twig_escape_filter($this->env, (isset($context["mediaTypeName"]) ? $context["mediaTypeName"] : null), "html", null, true);
                echo "格式)</span>
      ";
            } elseif ((            // line 54
(isset($context["mediaStatus"]) ? $context["mediaStatus"] : null) == "error")) {
                // line 55
                echo "        <span class=\"color-danger\">(";
                echo twig_escape_filter($this->env, (isset($context["mediaTypeName"]) ? $context["mediaTypeName"] : null), "html", null, true);
                echo "格式转换失败)</span>
      ";
            }
            // line 57
            echo "    ";
        }
        // line 58
        echo "
    ";
        // line 59
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "status", array()) == "unpublished")) {
            // line 60
            echo "      <span class=\"unpublish-warning color-warning\">(";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未发布"), "html", null, true);
            echo ")</span>
    ";
        }
        // line 62
        echo "
    ";
        // line 63
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "materialNum", array()) > 0)) {
            // line 64
            echo "      <span data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("资料"), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-paperclip mls color-gray\"></i></span>
    ";
        }
        // line 66
        echo "  </div>
  
  <div class=\"item-actions\">
    <a class=\"btn btn-link\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\" data-url=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_manage_lesson_edit", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
        echo "\" >
      <span class=\"es-icon es-icon-edit prs\"></span>";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编辑"), "html", null, true);
        echo "
    </a>
    
    <span class=\"dropdown\">
      <a class=\"dropdown-toggle dropdown-more\" id=\"dropdown-more\" data-toggle=\"dropdown\" href=\"#\"><i class=\"es-icon es-icon-keyboardarrowdown\" style=\"margin-right:3px\" aria-haspopup=\"true\" aria-expanded=\"false\"></i>";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("更多"), "html", null, true);
        echo "</a>

      <ul class=\"dropdown-menu pull-right dropdown-menu-more\" role=\"menu\" style=\"margin-top:12px;min-width:144px\" aria-labelledby=\"dLabel\" style=\"display:none;\">

        ";
        // line 78
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "open")) {
            // line 79
            echo "          <li>
            <a href=\"javascript:;\" data-toggle=\"modal\"  data-target=\"#modal\" data-url=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_manage_material", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
            echo "\">
            <span class=\"glyphicon glyphicon-paperclip prs\"></span>";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("添加资料"), "html", null, true);
            echo "</a>
          </li>
          <li class=\"divider\"></li>
        ";
        }
        // line 85
        echo "        
        <li class=\"";
        // line 86
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "status", array()) == "published")) {
            echo "hidden ";
        }
        echo "\">
          <a href=\"javascript:;\" class=\"publish-lesson-btn\" data-url=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_manage_lesson_publish", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
        echo "\">
            <span class=\"glyphicon glyphicon-ok-circle prs\"></span>";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("发布"), "html", null, true);
        echo "
          </a>
        </li>
        
        <li class=\"";
        // line 92
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "status", array()) == "unpublished")) {
            echo "hidden ";
        }
        echo "\">
          <a href=\"javascript:;\" class=\"unpublish-lesson-btn\" data-url=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_manage_lesson_unpublish", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
        echo "\">
            <span class=\"glyphicon glyphicon-remove-circle prs\"></span>";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("取消发布"), "html", null, true);
        echo "
          </a>
        </li>

        <li class=\"";
        // line 98
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "status", array()) == "published")) {
            echo "hidden ";
        }
        echo "\">
          <a href=\"javascript:;\" class=\"delete-lesson-btn\" data-url=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_manage_lesson_delete", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
        echo "\">
            <span class=\"glyphicon glyphicon-trash prs\"></span>";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
        echo "
          </a>
        </li>
      </ul>
    </span>
  </div>

</li>";
    }

    public function getTemplateName()
    {
        return "open-course-manage/lesson-list-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 100,  271 => 99,  265 => 98,  258 => 94,  254 => 93,  248 => 92,  241 => 88,  237 => 87,  231 => 86,  228 => 85,  221 => 81,  217 => 80,  214 => 79,  212 => 78,  205 => 74,  198 => 70,  194 => 69,  189 => 66,  183 => 64,  181 => 63,  178 => 62,  172 => 60,  170 => 59,  167 => 58,  164 => 57,  158 => 55,  156 => 54,  151 => 53,  149 => 52,  144 => 51,  141 => 50,  138 => 49,  136 => 48,  132 => 46,  126 => 44,  124 => 43,  121 => 42,  115 => 40,  113 => 39,  107 => 37,  99 => 35,  97 => 33,  96 => 32,  95 => 31,  89 => 29,  85 => 27,  82 => 26,  78 => 24,  74 => 22,  72 => 21,  69 => 20,  67 => 19,  64 => 18,  61 => 17,  58 => 16,  54 => 14,  50 => 12,  48 => 11,  45 => 10,  43 => 9,  40 => 8,  37 => 7,  35 => 6,  32 => 5,  30 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "open-course-manage/lesson-list-item.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/open-course-manage/lesson-list-item.html.twig");
    }
}
