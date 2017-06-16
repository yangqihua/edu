<?php

/* course-set/block/course-block-list.html.twig */
class __TwigTemplate_344a20764282fc6e748074a5e9c8c3f4c19e45661c195f32c86d097b02af454a extends Twig_Template
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
        echo "<div class=\"course-list\">
    <div class=\"row\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courseSets"]) ? $context["courseSets"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["courseSet"]) {
            // line 4
            echo "            <div class=\"col-lg-3 col-md-4 col-xs-6\">
                <div class=\"course-item\">
                  <div class=\"course-img\">
                    <a ";
            // line 7
            if (((array_key_exists("ref", $context)) ? (_twig_default_filter((isset($context["ref"]) ? $context["ref"] : null))) : (""))) {
                echo " href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute($context["courseSet"], "defaultCourseId", array()), "ref" => (isset($context["ref"]) ? $context["ref"] : null))), "html", null, true);
                echo "\" ";
            } else {
                echo " href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute($context["courseSet"], "defaultCourseId", array()))), "html", null, true);
                echo "\" ";
            }
            echo " target=\"_blank\">
                      ";
            // line 8
            if (($this->getAttribute($context["courseSet"], "discountId", array()) > 0)) {
                // line 9
                echo "                        ";
                if (($this->getAttribute($context["courseSet"], "discount", array()) == 0)) {
                    // line 10
                    echo "                          <!-- 限免 -->
                          <span class=\"tag-discount free\"></span>
                        ";
                } else {
                    // line 13
                    echo "                          <!-- 折扣 -->
                          <span class=\"tag-discount\"></span>
                        ";
                }
                // line 16
                echo "                      ";
            }
            // line 17
            echo "                      ";
            if (($this->getAttribute($context["courseSet"], "serializeMode", array()) == "serialized")) {
                // line 18
                echo "                        <span class=\"tags\"><span class=\"tag-serialing\"></span></span>
                      ";
            } elseif (($this->getAttribute(            // line 19
$context["courseSet"], "serializeMode", array()) == "finished")) {
                // line 20
                echo "                        <span class=\"tags\"><span class=\"tag-finished\"></span></span>
                      ";
            }
            // line 22
            echo "                      ";
            if (($this->getAttribute($context["courseSet"], "type", array()) == "live")) {
                // line 23
                echo "                        <span class=\"tags\">
                          <span class=\"tag-live\"></span>
                        </span>
                      ";
            }
            // line 27
            echo "                      ";
            echo $this->env->getExtension('AppBundle\Twig\WebExtension')->makeLazyImg($this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->env->getExtension('AppBundle\Twig\AppExtension')->courseSetCover($context["courseSet"], "large"), "courseSet.png"), "img-responsive", $this->getAttribute($context["courseSet"], "title", array()));
            echo "
                    </a>
                  </div>
                  <div class=\"course-info\">
                    <div class=\"title\">
                      <a class=\"link-dark\" ";
            // line 32
            if (((array_key_exists("ref", $context)) ? (_twig_default_filter((isset($context["ref"]) ? $context["ref"] : null))) : (""))) {
                echo " href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute($context["courseSet"], "defaultCourseId", array()), "ref" => (isset($context["ref"]) ? $context["ref"] : null))), "html", null, true);
                echo "\" ";
            } else {
                echo " href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute($context["courseSet"], "defaultCourseId", array()))), "html", null, true);
                echo "\" ";
            }
            // line 33
            echo "                       target=\"_blank\">
                        ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["courseSet"], "title", array()), "html", null, true);
            echo "
                      </a>
                    </div>
                    <div class=\"metas clearfix\">
                      ";
            // line 38
            if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.show_student_num_enabled", "1") == 1)) {
                // line 39
                echo "                        <span class=\"num\"><i class=\"es-icon es-icon-people\"></i>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["courseSet"], "studentNum", array()), "html", null, true);
                echo "</span>
                      ";
            }
            // line 41
            echo "                      <span class=\"comment\"><i class=\"es-icon es-icon-textsms\"></i>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["courseSet"], "ratingNum", array()), "html", null, true);
            echo "</span>
                      ";
            // line 42
            $context["course"] = (($this->getAttribute($context["courseSet"], "course", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["courseSet"], "course", array()), null)) : (null));
            // line 43
            echo "                        ";
            if ((isset($context["course"]) ? $context["course"] : null)) {
                // line 44
                echo "                          ";
                $this->loadTemplate("course/widgets/price.html.twig", "course-set/block/course-block-list.html.twig", 44)->display(array_merge($context, array("shows" => "price")));
                // line 45
                echo "                        ";
            }
            // line 46
            echo "                    </div>
                  </div>
                </div>
            </div>
        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['courseSet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "course-set/block/course-block-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 51,  149 => 46,  146 => 45,  143 => 44,  140 => 43,  138 => 42,  133 => 41,  127 => 39,  125 => 38,  118 => 34,  115 => 33,  105 => 32,  96 => 27,  90 => 23,  87 => 22,  83 => 20,  81 => 19,  78 => 18,  75 => 17,  72 => 16,  67 => 13,  62 => 10,  59 => 9,  57 => 8,  45 => 7,  40 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course-set/block/course-block-list.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/course-set/block/course-block-list.html.twig");
    }
}
