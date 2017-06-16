<?php

/* course-set/archive/index.html.twig */
class __TwigTemplate_afb135715e8b5b40ba2e43b939cc9926772b5455eef2d0e42fed8a1df143c75a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "course-set/archive/index.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程存档"), "html", null, true);
        echo " -";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_keywords($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程存档"), "html", null, true);
    }

    // line 5
    public function block_description($context, array $blocks = array())
    {
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "  <div class=\"es-section\">
    <div class=\"section-header\"><h1>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程存档"), "html", null, true);
        echo "</h1></div>
    ";
        // line 10
        if (($context["courseSets"] ?? null)) {
            // line 11
            echo "      <ul class=\"media-list\">
        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["courseSets"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["courseSet"]) {
                // line 13
                echo "          ";
                $context["teacher"] = (($this->getAttribute(($context["users"] ?? null), $this->getAttribute($context["courseSet"], "creator", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["users"] ?? null), $this->getAttribute($context["courseSet"], "creator", array()), array(), "array"), null)) : (null));
                // line 14
                echo "          ";
                $context["tags"] = $this->getAttribute($context["courseSet"], "tags", array());
                // line 15
                echo "          <li class=\"media\">
            <h4>
              <a href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_archive_show", array("courseSetId" => $this->getAttribute($context["courseSet"], "id", array()))), "html", null, true);
                echo "\">
                ";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["courseSet"], "title", array()), "html", null, true);
                echo "
              </a>
            </h4>
            <div class=\"fsn color-gray\">
              ";
                // line 22
                if (($context["teacher"] ?? null)) {
                    // line 23
                    echo "                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("教师："), "html", null, true);
                    echo " <a class=\"teacher-nickname mrl\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute(($context["teacher"] ?? null), "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["teacher"] ?? null), "nickname", array()), "html", null, true);
                    echo "</a>
              ";
                }
                // line 25
                echo "              ";
                if (($context["tags"] ?? null)) {
                    // line 26
                    echo "                <span class=\"color-gray\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("标签："), "html", null, true);
                    echo "</span>
                ";
                    // line 27
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                        // line 28
                        echo "                  <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_show", array("name" => $this->getAttribute($context["tag"], "name", array()))), "html", null, true);
                        echo "\" class=\"mrs\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
                        echo "</a>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 30
                    echo "              ";
                }
                // line 31
                echo "            </div>
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['courseSet'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "      </ul>
    ";
        } else {
            // line 36
            echo "      <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("目前暂时无课程"), "html", null, true);
            echo "</div>
    ";
        }
        // line 38
        echo "    <nav class=\"text-center\">
      ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? null), "paginator", array(0 => ($context["paginator"] ?? null)), "method"), "html", null, true);
        echo "
    </nav>
  </div>
";
    }

    public function getTemplateName()
    {
        return "course-set/archive/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 39,  146 => 38,  140 => 36,  136 => 34,  128 => 31,  125 => 30,  114 => 28,  110 => 27,  105 => 26,  102 => 25,  92 => 23,  90 => 22,  83 => 18,  79 => 17,  75 => 15,  72 => 14,  69 => 13,  65 => 12,  62 => 11,  60 => 10,  56 => 9,  53 => 8,  50 => 7,  45 => 5,  39 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course-set/archive/index.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/course-set/archive/index.html.twig");
    }
}
