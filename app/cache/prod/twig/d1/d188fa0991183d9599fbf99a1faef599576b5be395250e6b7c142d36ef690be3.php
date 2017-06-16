<?php

/* course-set/archive/course.html.twig */
class __TwigTemplate_401ee99fd6ebd0f62b2066ca4f7aa9a798713c9704c4ecbf71462674df332ebd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "course-set/archive/course.html.twig", 1);
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? null), "title", array()), "html", null, true);
        echo " -";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 6
    public function block_keywords($context, array $blocks = array())
    {
        // line 7
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
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
            echo "
    ";
            // line 8
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo ",";
                echo "
    ";
            }
            // line 10
            echo "  ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 13
    public function block_description($context, array $blocks = array())
    {
        // line 14
        echo "  ";
        echo twig_escape_filter($this->env, ((array_key_exists("courseDescription", $context)) ? (_twig_default_filter(($context["courseDescription"] ?? null), "")) : ("")), "html", null, true);
        echo "
";
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo "  <div class=\"es-row-wrap container-gap\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"page-header\"><h1>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "title", array()), "html", null, true);
        echo "</h1></div>
      </div>
    </div>
    <div class=\"row article-row\">
      <div class=\"col-md-8 mbl\">
        <dl class=\"course-infos\">
          <dt class=\"thread-title\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("简介"), "html", null, true);
        echo "</dt>
          <dd class=\"thread-body\">";
        // line 28
        echo $this->getAttribute(($context["course"] ?? null), "about", array());
        echo "</dd>
          ";
        // line 29
        if (($context["category"] ?? null)) {
            // line 30
            echo "            <dt>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("分类"), "html", null, true);
            echo "</dt>
            <dd class=\"mbm\">
              <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_explore", array("category" => (($this->getAttribute(($context["category"] ?? null), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["category"] ?? null), "code", array()), $this->getAttribute(($context["category"] ?? null), "id", array()))) : ($this->getAttribute(($context["category"] ?? null), "id", array()))))), "html", null, true);
            echo "\"
                target=\"_blank\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? null), "name", array()), "html", null, true);
            echo "</a>
            </dd>
          ";
        }
        // line 36
        echo "          ";
        if ($this->getAttribute(($context["course"] ?? null), "goals", array())) {
            // line 37
            echo "            <dt>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程目标"), "html", null, true);
            echo "</dt>
            <dd>
              <ul>
                ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["course"] ?? null), "goals", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["goal"]) {
                // line 41
                echo "                  <li>";
                echo twig_escape_filter($this->env, $context["goal"], "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['goal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "              </ul>
            </dd>
          ";
        }
        // line 46
        echo "          ";
        if ($this->getAttribute(($context["course"] ?? null), "audiences", array())) {
            // line 47
            echo "            <dt>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("适合人群"), "html", null, true);
            echo "</dt>
            <dd>
              <ul>
                ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["course"] ?? null), "audiences", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["audience"]) {
                // line 51
                echo "                  <li>";
                echo twig_escape_filter($this->env, $context["audience"], "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['audience'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "              </ul>
            </dd>
          ";
        }
        // line 56
        echo "        </dl>
        ";
        // line 57
        if (($context["tags"] ?? null)) {
            // line 58
            echo "          <div class=\"mtm\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程标签："), "html", null, true);
            echo "
            ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 60
                echo "              <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_show", array("name" => $this->getAttribute($context["tag"], "name", array()))), "html", null, true);
                echo "\" class=\"mrs\"><span
                  class=\"label label-info\">";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
                echo "</span></a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "          </div>
        ";
        }
        // line 65
        echo "        <a class=\"btn btn-primary mtl nav-btn\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
        echo "\"><span
            class=\"glyphicon glyphicon-play\"></span> ";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("查看课程"), "html", null, true);
        echo "</a>
      </div>
      <div class=\"col-md-4\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\">";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("任务列表"), "html", null, true);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            ";
        // line 74
        if (($context["tasks"] ?? null)) {
            // line 75
            echo "              <ul class=\"media-list\">
                ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tasks"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                // line 77
                echo "                  <li class=\"media\">
                    <div class=\"media-body\"><a
                        href=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_archive_task", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "taskId" => $this->getAttribute($context["task"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("第%number%任务: %title%", array("%number%" => $this->getAttribute($context["task"], "number", array()), "%title%" => $this->getAttribute($context["task"], "title", array()))), "html", null, true);
                echo "</a>
                    </div>
                  </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "              </ul>
            ";
        } else {
            // line 85
            echo "              <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程暂无相关课时"), "html", null, true);
            echo "</div>
            ";
        }
        // line 87
        echo "          </div>
        </div>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "course-set/archive/course.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 87,  277 => 85,  273 => 83,  261 => 79,  257 => 77,  253 => 76,  250 => 75,  248 => 74,  242 => 71,  234 => 66,  229 => 65,  225 => 63,  217 => 61,  212 => 60,  208 => 59,  203 => 58,  201 => 57,  198 => 56,  193 => 53,  184 => 51,  180 => 50,  173 => 47,  170 => 46,  165 => 43,  156 => 41,  152 => 40,  145 => 37,  142 => 36,  136 => 33,  132 => 32,  126 => 30,  124 => 29,  120 => 28,  116 => 27,  107 => 21,  102 => 18,  99 => 17,  92 => 14,  89 => 13,  73 => 10,  67 => 8,  46 => 7,  43 => 6,  34 => 3,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course-set/archive/course.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/course-set/archive/course.html.twig");
    }
}
