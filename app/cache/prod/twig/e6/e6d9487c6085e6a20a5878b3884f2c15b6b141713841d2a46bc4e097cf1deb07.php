<?php

/* user/courses_favorited.html.twig */
class __TwigTemplate_c378a324c42e00c57ac580c0597364756d0d582249867439af29699511b200c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("user/layout.html.twig", "user/courses_favorited.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "user/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["pageNav"] = "favorited";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "  <div class=\"course-list\">
    <div class=\"row\">
      ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["courseFavorites"] ?? null));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["_key"] => $context["courseFavorite"]) {
            if ($context["courseFavorite"]) {
                // line 11
                echo "        ";
                if (($this->getAttribute($context["courseFavorite"], "type", array()) == "course")) {
                    // line 12
                    echo "          ";
                    $context["courseSet"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("CourseSet", array("id" => $this->getAttribute($context["courseFavorite"], "courseSetId", array())));
                    // line 13
                    echo "          <div class=\"col-lg-3 col-md-4 col-xs-6\">
            ";
                    // line 14
                    $this->loadTemplate("course/widgets/course-grid.html.twig", "user/courses_favorited.html.twig", 14)->display(array_merge($context, array("courseSet" => ($context["courseSet"] ?? null))));
                    // line 15
                    echo "          </div>
        ";
                } elseif (($this->getAttribute(                // line 16
$context["courseFavorite"], "type", array()) == "openCourse")) {
                    // line 17
                    echo "          ";
                    $context["course"] = _twig_default_filter($this->env->getExtension('AppBundle\Twig\DataExtension')->getData("OpenCourse", array("courseId" => $this->getAttribute($context["courseFavorite"], "courseId", array()))), null);
                    // line 18
                    echo "          ";
                    if (($context["course"] ?? null)) {
                        // line 19
                        echo "            <div class=\"col-lg-3 col-md-4 col-xs-6\">
              ";
                        // line 20
                        $this->loadTemplate("open-course/widget/open-course-grid.html.twig", "user/courses_favorited.html.twig", 20)->display($context);
                        // line 21
                        echo "            </div>
          ";
                    }
                    // line 23
                    echo "        ";
                }
                // line 24
                echo "        
      ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        if (!$context['_iterated']) {
            // line 26
            echo "          <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无收藏课程！"), "html", null, true);
            echo "</div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['courseFavorite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    </div>
  </div>
  <nav class=\"text-center\">
    ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? null), "paginator", array(0 => ($context["paginator"] ?? null)), "method"), "html", null, true);
        echo "
  </nav>
";
    }

    public function getTemplateName()
    {
        return "user/courses_favorited.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 31,  110 => 28,  101 => 26,  91 => 24,  88 => 23,  84 => 21,  82 => 20,  79 => 19,  76 => 18,  73 => 17,  71 => 16,  68 => 15,  66 => 14,  63 => 13,  60 => 12,  57 => 11,  45 => 10,  41 => 8,  38 => 7,  32 => 3,  28 => 1,  26 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "user/courses_favorited.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/user/courses_favorited.html.twig");
    }
}
