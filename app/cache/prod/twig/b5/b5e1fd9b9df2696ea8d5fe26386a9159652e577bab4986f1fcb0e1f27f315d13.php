<?php

/* open-course-manage/lesson-list.html.twig */
class __TwigTemplate_b724b5e78035e2aac6da4f22e037aee404baa86992b8d811aa910d372cd7c3bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("open-course-manage/layout.html.twig", "open-course-manage/lesson-list.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "open-course-manage/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["side_nav"] = "lesson";
        // line 4
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/open-course-manage/lesson/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课时管理"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "
<div class=\"panel panel-default panel-col lesson-manage-panel\" data-file-status-url=";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_manage_file_status");
        echo ">
  <div class=\"panel-heading\">
    <div class=\"pull-right\">
      <button class=\"btn btn-info btn-sm\" ";
        // line 11
        if ((isset($context["items"]) ? $context["items"] : null)) {
            echo "disabled=\"disabled\"";
        }
        echo " id=\"lesson-create-btn\" data-backdrop=\"static\" data-keyboard=\"false\" data-url=\"";
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "open")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_manage_lesson_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        }
        echo "\"><i class=\"glyphicon glyphicon-plus\"></i> ";
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "open")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课时"), "html", null, true);
        }
        echo "</button>
    </div>
    ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课时管理"), "html", null, true);
        echo "
  </div>

  <div class=\"alert alert-warning only-one-lesson-notify\" ";
        // line 16
        if ((isset($context["items"]) ? $context["items"] : null)) {
            echo "style=\"display:none;\"";
        }
        echo ">公开课当前仅支持添加一个课时！</div>

  ";
        // line 18
        if (twig_test_empty((isset($context["items"]) ? $context["items"] : null))) {
            // line 19
            echo "
   <div class=\"empty\">";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无课时内容！"), "html", null, true);
            echo "</div>

   ";
        }
        // line 23
        echo "
  <div class=\"panel-body\">
    <ul class=\"lesson-list sortable-list\" id=\"course-item-list\" data-sort-url=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_manage_lesson_sort", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">
      ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
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
        foreach ($context['_seq'] as $context["id"] => $context["item"]) {
            // line 27
            echo "        
        ";
            // line 28
            if (twig_in_filter("lesson", $context["id"])) {
                // line 29
                echo "          ";
                $this->loadTemplate("open-course-manage/lesson-list-item.html.twig", "open-course-manage/lesson-list.html.twig", 29)->display(array_merge($context, array("lesson" => $context["item"], "file" => (($this->getAttribute((isset($context["files"]) ? $context["files"] : null), $this->getAttribute($context["item"], "mediaId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["files"]) ? $context["files"] : null), $this->getAttribute($context["item"], "mediaId", array()), array(), "array"), null)) : (null)))));
                // line 30
                echo "        ";
            }
            // line 31
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
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
    </ul>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "open-course-manage/lesson-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 32,  129 => 31,  126 => 30,  123 => 29,  121 => 28,  118 => 27,  101 => 26,  97 => 25,  93 => 23,  87 => 20,  84 => 19,  82 => 18,  75 => 16,  69 => 13,  54 => 11,  48 => 8,  45 => 7,  42 => 6,  34 => 2,  30 => 1,  28 => 4,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "open-course-manage/lesson-list.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/open-course-manage/lesson-list.html.twig");
    }
}
