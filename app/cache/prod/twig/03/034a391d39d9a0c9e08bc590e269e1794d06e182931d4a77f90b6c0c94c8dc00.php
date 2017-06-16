<?php

/* open-course/open-course-show.html.twig */
class __TwigTemplate_41d3b81256bc2e7cc5fc438e1fef58187b64f643c67a3b357a9a61751c711224 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "open-course/open-course-show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'content' => array($this, 'block_content'),
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
        // line 4
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_keywords($context, array $blocks = array())
    {
        // line 8
        echo "  ";
        $context["tags"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("Tags", array("tagIds" => (isset($context["tagIds"]) ? $context["tagIds"] : null)));
        // line 9
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo ",";
            }
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            $this->displayParentBlock("keywords", $context, $blocks);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 12
    public function block_description($context, array $blocks = array())
    {
        // line 13
        echo "  ";
        if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "about", array())) {
            // line 14
            echo "    ";
            echo $this->env->getExtension('AppBundle\Twig\WebExtension')->plainTextFilter(_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getPurifyAndTrimHtml($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "about", array())), ""), 100);
            echo "
  ";
        } else {
            // line 16
            echo "    ";
            $this->displayParentBlock("description", $context, $blocks);
            echo "
  ";
        }
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        // line 21
        echo "  <ol class=\"breadcrumb open-course-breadcrumb\">
    <li><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">首页</a></li>
    <li><a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_explore");
        echo "\" >公开课</a></li>
    <li>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo "</li>
  </ol>
  ";
        // line 27
        echo "  <div class=\"open-course-header\">
    <div class=\"row\">

      ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:OpenCourse:header", array("course" => (isset($context["course"]) ? $context["course"] : null), "lessonId" => ((array_key_exists("lessonId", $context)) ? (_twig_default_filter((isset($context["lessonId"]) ? $context["lessonId"] : null), null)) : (null)))));
        echo "

      <div class=\"col-md-3 open-course-tab js-open-course-tab\">
        <ul class=\"clearfix\">
          <li class=\"tab-header active\"><i class=\"es-icon es-icon-staroutline prm\"></i>推荐课程</li>
          ";
        // line 38
        echo "        </ul>
        <div id=\"content\">
          <ul id=\"recommand-tab\">
            ";
        // line 41
        $this->loadTemplate("open-course/recommend-course-list.html.twig", "open-course/open-course-show.html.twig", 41)->display($context);
        // line 42
        echo "          </ul>
          ";
        // line 46
        echo "        </div>
      </div>
    </div>
  </div>
  ";
        // line 51
        echo "
  ";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:OpenCourse:infoBar", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "as" => (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "as"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "as"), "method"), "")) : ("")))));
        echo "

  <div class=\"open-course-detail row\">
    <div class=\"col-md-9\">
      <div class=\"es-section gray-darker editor-text\">
        ";
        // line 57
        if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "about", array())) {
            // line 58
            echo "          ";
            echo $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "about", array());
            echo "
        ";
        } else {
            // line 60
            echo "          <div class=\"empty\">暂无简介</div>
        ";
        }
        // line 62
        echo "      </div>
      ";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:OpenCourse:comment", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "as" => (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "as"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "as"), "method"), "")) : ("")))));
        echo "
    </div>

    ";
        // line 67
        echo "    <div class=\"col-md-3 hidden-sm hidden-xs\">
      ";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:OpenCourse:teachers", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))));
        echo "
\t    ";
        // line 69
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()))) {
            // line 70
            echo "\t\t    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:OpenCourse:materialList", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))));
            echo "
\t    ";
        }
        // line 72
        echo "    </div>
    ";
        // line 74
        echo "  </div>
  ";
        // line 75
        $this->loadTemplate("common/weixin-share.html.twig", "open-course/open-course-show.html.twig", 75)->display(array_merge($context, array("title" => $this->getAttribute(        // line 76
(isset($context["course"]) ? $context["course"] : null), "title", array()), "desc" => $this->env->getExtension('AppBundle\Twig\WebExtension')->getPurifyAndTrimHtml(strip_tags($this->getAttribute(        // line 77
(isset($context["course"]) ? $context["course"] : null), "about", array()))), "link" => $this->getAttribute($this->getAttribute(        // line 78
(isset($context["app"]) ? $context["app"] : null), "request", array()), "uri", array()), "imgUrl" => $this->env->getExtension('AppBundle\Twig\WebExtension')->getFurl($this->getAttribute(        // line 79
(isset($context["course"]) ? $context["course"] : null), "largePicture", array()), "course.png"))));
        // line 81
        echo "
  ";
        // line 82
        $this->env->getExtension('AppBundle\Twig\WebExtension')->loadScript("open-course/open-course");
        // line 83
        echo "  ";
        $this->loadTemplate("seajs_loader_compatible.html.twig", "open-course/open-course-show.html.twig", 83)->display(array_merge($context, array("topxiawebbundle" => true)));
    }

    public function getTemplateName()
    {
        return "open-course/open-course-show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 83,  220 => 82,  217 => 81,  215 => 79,  214 => 78,  213 => 77,  212 => 76,  211 => 75,  208 => 74,  205 => 72,  199 => 70,  197 => 69,  193 => 68,  190 => 67,  184 => 63,  181 => 62,  177 => 60,  171 => 58,  169 => 57,  161 => 52,  158 => 51,  152 => 46,  149 => 42,  147 => 41,  142 => 38,  134 => 30,  129 => 27,  124 => 24,  120 => 23,  116 => 22,  113 => 21,  110 => 20,  102 => 16,  96 => 14,  93 => 13,  90 => 12,  49 => 9,  46 => 8,  43 => 7,  34 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "open-course/open-course-show.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/open-course/open-course-show.html.twig");
    }
}
