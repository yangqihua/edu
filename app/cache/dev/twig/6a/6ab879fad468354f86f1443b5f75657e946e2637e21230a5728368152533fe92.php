<?php

/* default/course-grid-with-condition-index.html.twig */
class __TwigTemplate_c0faec554ff6c4496955c5c17775a589f3fe5cd55225a5c548e8623daaff9b8c extends Twig_Template
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
        $__internal_4bd36735a875bd9538386e92d8901eddc03968783b7969557ec6c85ba59d6734 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bd36735a875bd9538386e92d8901eddc03968783b7969557ec6c85ba59d6734->enter($__internal_4bd36735a875bd9538386e92d8901eddc03968783b7969557ec6c85ba59d6734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/course-grid-with-condition-index.html.twig"));

        // line 1
        echo "<section class=\"course-list-section ";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["config"] ?? null), "background", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "background", array()), "")) : ("")), "html", null, true);
        echo "\" id=\"course-list-section\">

  ";
        // line 3
        $context["count"] = (($this->getAttribute(($context["config"] ?? null), "count", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "count", array()), 12)) : (12));
        // line 4
        echo "  ";
        $context["categoryId"] = (($this->getAttribute(($context["config"] ?? null), "categoryId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "categoryId", array()), 0)) : (0));
        // line 5
        echo "  ";
        $context["orderBy"] = (($this->getAttribute(($context["config"] ?? null), "orderBy", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "orderBy", array()), "latest")) : ("latest"));
        // line 6
        echo "  ";
        if ((($context["orderBy"] ?? $this->getContext($context, "orderBy")) == "latest")) {
            // line 7
            echo "    ";
            $context["courseSets"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("LatestCourseSets", array("count" => ($context["count"] ?? $this->getContext($context, "count")), "categoryId" => ($context["categoryId"] ?? $this->getContext($context, "categoryId"))));
            // line 8
            echo "  ";
        } elseif ((($context["orderBy"] ?? $this->getContext($context, "orderBy")) == "recommendedSeq")) {
            // line 9
            echo "    ";
            $context["courseSets"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("RecommendCourseSets", array("count" => ($context["count"] ?? $this->getContext($context, "count")), "categoryId" => ($context["categoryId"] ?? $this->getContext($context, "categoryId"))));
            // line 10
            echo "  ";
        } elseif ((($context["orderBy"] ?? $this->getContext($context, "orderBy")) == "studentNum")) {
            // line 11
            echo "    ";
            $context["courseSets"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("PopularCourseSets", array("count" => ($context["count"] ?? $this->getContext($context, "count")), "categoryId" => ($context["categoryId"] ?? $this->getContext($context, "categoryId")), "type" => "studentNum"));
            // line 12
            echo "  ";
        }
        // line 13
        echo "  ";
        $context["categoriesFirst"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("Categories", array("group" => "course", "parentId" => 0));
        // line 14
        echo "  ";
        $context["moreCategories"] = twig_slice($this->env, ($context["categoriesFirst"] ?? $this->getContext($context, "categoriesFirst")), (($this->getAttribute(($context["config"] ?? null), "categoryCount", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "categoryCount", array()), 4)) : (4)), null);
        // line 15
        echo "  <div class=\"container\">
    <div class=\"text-line\">
      <h5><span>";
        // line 17
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["config"] ?? null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "title", array()), $this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), "defaultTitle", array()))) : ($this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), "defaultTitle", array()))), "html", null, true);
        echo "</span>
        <div class=\"line\"></div>
      </h5>
      <div class=\"subtitle\">";
        // line 20
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["config"] ?? null), "subTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "subTitle", array()), $this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), "defaultSubTitle", array()))) : ($this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), "defaultSubTitle", array()))), "html", null, true);
        echo "</div>
    </div>
    <div class=\"course-filter\" id=\"course-filter\">
      <ul class=\"nav nav-pills hidden-xs\" role=\"tablist\">
        <li role=\"presentation\" class=\"";
        // line 24
        if ((((array_key_exists("categoryId", $context)) ? (_twig_default_filter(($context["categoryId"] ?? $this->getContext($context, "categoryId")), 0)) : (0)) == 0)) {
            echo "active ";
        }
        echo " js-course-filter\"
            data-url=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage_category", array("orderBy" => ((array_key_exists("orderBy", $context)) ? (_twig_default_filter(($context["orderBy"] ?? $this->getContext($context, "orderBy")), "latest")) : ("latest")))), "html", null, true);
        echo "\" data-type=\"course\"><a
              href=\"javascript:;\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("全部课程"), "html", null, true);
        echo "</a></li>
        ";
        // line 27
        if (($context["categoriesFirst"] ?? $this->getContext($context, "categoriesFirst"))) {
            // line 28
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categoriesFirst"] ?? $this->getContext($context, "categoriesFirst")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 29
                echo "            ";
                if (($this->getAttribute($context["loop"], "index0", array()) < (($this->getAttribute(($context["config"] ?? null), "categoryCount", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "categoryCount", array()), 4)) : (4)))) {
                    // line 30
                    echo "              <li role=\"presentation\"
                  class=\"";
                    // line 31
                    if ((((array_key_exists("categoryId", $context)) ? (_twig_default_filter(($context["categoryId"] ?? $this->getContext($context, "categoryId")), 0)) : (0)) == $this->getAttribute($context["category"], "id", array()))) {
                        echo "active ";
                    }
                    echo " js-course-filter\"
                  data-url=\"";
                    // line 32
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage_category", array("categoryId" => $this->getAttribute($context["category"], "id", array()), "orderBy" => ((array_key_exists("orderBy", $context)) ? (_twig_default_filter(($context["orderBy"] ?? $this->getContext($context, "orderBy")), "latest")) : ("latest")))), "html", null, true);
                    echo "\"
                  data-type=\"course\"><a href=\"javascript:;\">";
                    // line 33
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                    echo "</a></li>
            ";
                }
                // line 35
                echo "          ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "          ";
            if (($context["moreCategories"] ?? $this->getContext($context, "moreCategories"))) {
                // line 37
                echo "            <li class=\"dropdown nav-hover\">
              <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"javascript:;\">
                <i class=\"es-icon es-icon-morehoriz\"></i>
              </a>
              <ul class=\"dropdown-menu\">
                ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["moreCategories"] ?? $this->getContext($context, "moreCategories")));
                foreach ($context['_seq'] as $context["_key"] => $context["moreCategory"]) {
                    // line 43
                    echo "                  <li role=\"presentation\"
                      class=\"";
                    // line 44
                    if ((((array_key_exists("categoryId", $context)) ? (_twig_default_filter(($context["categoryId"] ?? $this->getContext($context, "categoryId")), 0)) : (0)) == $this->getAttribute($context["moreCategory"], "id", array()))) {
                        echo "active ";
                    }
                    echo " js-course-filter\"
                      data-url=\"";
                    // line 45
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage_category", array("categoryId" => $this->getAttribute($context["moreCategory"], "id", array()), "orderBy" => ((array_key_exists("orderBy", $context)) ? (_twig_default_filter(($context["orderBy"] ?? $this->getContext($context, "orderBy")), "latest")) : ("latest")))), "html", null, true);
                    echo "\"
                      data-type=\"course\"><a href=\"javascript:;\">";
                    // line 46
                    echo twig_escape_filter($this->env, $this->getAttribute($context["moreCategory"], "name", array()), "html", null, true);
                    echo "</a></li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['moreCategory'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo "              </ul>
            </li>
          ";
            }
            // line 51
            echo "        ";
        }
        // line 52
        echo "      </ul>
      <div class=\"btn-group visible-xs\">
        <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\"
                aria-expanded=\"false\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("全部课程"), "html", null, true);
        echo " <span class=\"caret\"></span></button>
        <ul class=\"dropdown-menu\" role=\"menu\">
          <li role=\"presentation\" class=\"js-course-filter ";
        // line 57
        if ((((array_key_exists("categoryId", $context)) ? (_twig_default_filter(($context["categoryId"] ?? $this->getContext($context, "categoryId")), 0)) : (0)) == 0)) {
            echo "active ";
        }
        echo "\"
              data-url=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage_category", array("orderBy" => ((array_key_exists("orderBy", $context)) ? (_twig_default_filter(($context["orderBy"] ?? $this->getContext($context, "orderBy")), "latest")) : ("latest")))), "html", null, true);
        echo "\" data-type=\"course\"><a
                href=\"javascript:;\">";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("全部课程"), "html", null, true);
        echo "</a></li>
          ";
        // line 60
        if (($context["categoriesFirst"] ?? $this->getContext($context, "categoriesFirst"))) {
            // line 61
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categoriesFirst"] ?? $this->getContext($context, "categoriesFirst")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                if (($this->getAttribute($context["category"], "parentId", array()) == 0)) {
                    // line 62
                    echo "              ";
                    if (($this->getAttribute($context["loop"], "index0", array()) < (($this->getAttribute(($context["config"] ?? null), "categoryCount", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "categoryCount", array()), 4)) : (4)))) {
                        // line 63
                        echo "                <li role=\"presentation\"
                    class=\"js-course-filter ";
                        // line 64
                        if ((((array_key_exists("categoryId", $context)) ? (_twig_default_filter(($context["categoryId"] ?? $this->getContext($context, "categoryId")), 0)) : (0)) == $this->getAttribute($context["category"], "id", array()))) {
                            echo "active ";
                        }
                        echo "\"
                    data-url=\"";
                        // line 65
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage_category", array("categoryId" => $this->getAttribute($context["category"], "id", array()), "orderBy" => ((array_key_exists("orderBy", $context)) ? (_twig_default_filter(($context["orderBy"] ?? $this->getContext($context, "orderBy")), "latest")) : ("latest")))), "html", null, true);
                        echo "\"
                    data-type=\"course\"><a href=\"javascript:;\">";
                        // line 66
                        echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                        echo "</a></li>
              ";
                    }
                    // line 68
                    echo "            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "            ";
            if (($context["moreCategories"] ?? $this->getContext($context, "moreCategories"))) {
                // line 70
                echo "              <li role=\"presentation\" class=\"js-course-filteractive\" data-type=\"course\"><a
                    href=\"";
                // line 71
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_explore");
                echo "\">更多</a></li>
            ";
            }
            // line 73
            echo "          ";
        }
        // line 74
        echo "        </ul>
      </div>
      <div class=\"course-sort btn-group\">
        <a href=\"javascript:;\"
           class=\"btn btn-default ";
        // line 78
        if ((((array_key_exists("orderBy", $context)) ? (_twig_default_filter(($context["orderBy"] ?? $this->getContext($context, "orderBy")), "recommendedSeq")) : ("recommendedSeq")) == "latest")) {
            echo " active ";
        }
        echo "js-course-filter\"
           data-url=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage_category", array("categoryId" => ((array_key_exists("categoryId", $context)) ? (_twig_default_filter(($context["categoryId"] ?? $this->getContext($context, "categoryId")), 0)) : (0)), "orderBy" => "latest")), "html", null, true);
        echo "\"
           data-type='course'>
          ";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最新"), "html", null, true);
        echo "
        </a>
        <a href=\"javascript:;\"
           class=\"btn btn-default ";
        // line 84
        if ((((array_key_exists("orderBy", $context)) ? (_twig_default_filter(($context["orderBy"] ?? $this->getContext($context, "orderBy")), "recommendedSeq")) : ("recommendedSeq")) == "studentNum")) {
            echo " active ";
        }
        echo "js-course-filter\"
           data-url=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage_category", array("categoryId" => ((array_key_exists("categoryId", $context)) ? (_twig_default_filter(($context["categoryId"] ?? $this->getContext($context, "categoryId")), 0)) : (0)), "orderBy" => "studentNum")), "html", null, true);
        echo "\"
           data-type='course'>
          ";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最热"), "html", null, true);
        echo "
        </a>
        <a href=\"javascript:;\"
           class=\"btn btn-default ";
        // line 90
        if ((((array_key_exists("orderBy", $context)) ? (_twig_default_filter(($context["orderBy"] ?? $this->getContext($context, "orderBy")), "recommendedSeq")) : ("recommendedSeq")) == "recommendedSeq")) {
            echo " active ";
        }
        echo "js-course-filter\"
           data-url=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage_category", array("categoryId" => ((array_key_exists("categoryId", $context)) ? (_twig_default_filter(($context["categoryId"] ?? $this->getContext($context, "categoryId")), 0)) : (0)), "orderBy" => "recommendedSeq")), "html", null, true);
        echo "\"
           data-type='course'>
          ";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("推荐"), "html", null, true);
        echo "
        </a>
      </div>
    </div>
    <div class=\"course-list\">
      <div class=\"row\">
        ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["courseSets"] ?? $this->getContext($context, "courseSets")));
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
            // line 100
            echo "          <div class=\"col-lg-3 col-md-4 col-xs-6\">
            ";
            // line 101
            $this->loadTemplate("course/widgets/course-grid.html.twig", "default/course-grid-with-condition-index.html.twig", 101)->display(array_merge($context, array("courseSet" => $context["courseSet"])));
            // line 102
            echo "          </div>
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
        // line 104
        echo "      </div>
    </div>
    <div class=\"section-more-btn\">
      <a href=\"";
        // line 107
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_explore");
        echo "\" class=\"btn btn-default btn-lg\">
        ";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("更多课程"), "html", null, true);
        echo " <i class=\"mrs-o es-icon es-icon-chevronright\"></i>
      </a>
    </div>
  </div>
</section>
";
        
        $__internal_4bd36735a875bd9538386e92d8901eddc03968783b7969557ec6c85ba59d6734->leave($__internal_4bd36735a875bd9538386e92d8901eddc03968783b7969557ec6c85ba59d6734_prof);

    }

    public function getTemplateName()
    {
        return "default/course-grid-with-condition-index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 108,  377 => 107,  372 => 104,  357 => 102,  355 => 101,  352 => 100,  335 => 99,  326 => 93,  321 => 91,  315 => 90,  309 => 87,  304 => 85,  298 => 84,  292 => 81,  287 => 79,  281 => 78,  275 => 74,  272 => 73,  267 => 71,  264 => 70,  261 => 69,  251 => 68,  246 => 66,  242 => 65,  236 => 64,  233 => 63,  230 => 62,  218 => 61,  216 => 60,  212 => 59,  208 => 58,  202 => 57,  197 => 55,  192 => 52,  189 => 51,  184 => 48,  176 => 46,  172 => 45,  166 => 44,  163 => 43,  159 => 42,  152 => 37,  149 => 36,  135 => 35,  130 => 33,  126 => 32,  120 => 31,  117 => 30,  114 => 29,  96 => 28,  94 => 27,  90 => 26,  86 => 25,  80 => 24,  73 => 20,  67 => 17,  63 => 15,  60 => 14,  57 => 13,  54 => 12,  51 => 11,  48 => 10,  45 => 9,  42 => 8,  39 => 7,  36 => 6,  33 => 5,  30 => 4,  28 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"course-list-section {{ config.background|default(\"\") }}\" id=\"course-list-section\">

  {% set count = config.count|default(12) %}
  {% set categoryId = config.categoryId|default(0) %}
  {% set orderBy = config.orderBy|default('latest') %}
  {% if orderBy == 'latest' %}
    {% set courseSets = data('LatestCourseSets',{'count':count, 'categoryId':categoryId}) %}
  {% elseif orderBy == 'recommendedSeq' %}
    {% set courseSets = data('RecommendCourseSets',{'count':count, 'categoryId':categoryId}) %}
  {% elseif orderBy == 'studentNum' %}
    {% set courseSets = data('PopularCourseSets',{'count':count, 'categoryId':categoryId,'type':'studentNum'}) %}
  {% endif %}
  {% set categoriesFirst = data('Categories',{'group':'course', 'parentId':0}) %}
  {% set moreCategories =  categoriesFirst[config.categoryCount|default(4):] %}
  <div class=\"container\">
    <div class=\"text-line\">
      <h5><span>{{ config.title|default(config.defaultTitle) }}</span>
        <div class=\"line\"></div>
      </h5>
      <div class=\"subtitle\">{{ config.subTitle|default(config.defaultSubTitle) }}</div>
    </div>
    <div class=\"course-filter\" id=\"course-filter\">
      <ul class=\"nav nav-pills hidden-xs\" role=\"tablist\">
        <li role=\"presentation\" class=\"{% if (categoryId|default(0) == 0) %}active {% endif %} js-course-filter\"
            data-url=\"{{ path('homepage_category',{orderBy : orderBy|default('latest')}) }}\" data-type=\"course\"><a
              href=\"javascript:;\">{{ '全部课程'|trans }}</a></li>
        {% if categoriesFirst %}
          {% for category in categoriesFirst %}
            {% if ( loop.index0 < config.categoryCount|default(4) ) %}
              <li role=\"presentation\"
                  class=\"{% if (categoryId|default(0) == category.id) %}active {% endif %} js-course-filter\"
                  data-url=\"{{ path('homepage_category',{categoryId : category.id, orderBy : orderBy|default('latest')}) }}\"
                  data-type=\"course\"><a href=\"javascript:;\">{{ category.name }}</a></li>
            {% endif %}
          {% endfor %}
          {% if  moreCategories %}
            <li class=\"dropdown nav-hover\">
              <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"javascript:;\">
                <i class=\"es-icon es-icon-morehoriz\"></i>
              </a>
              <ul class=\"dropdown-menu\">
                {% for moreCategory in moreCategories %}
                  <li role=\"presentation\"
                      class=\"{% if (categoryId|default(0) == moreCategory.id) %}active {% endif %} js-course-filter\"
                      data-url=\"{{ path('homepage_category',{categoryId : moreCategory.id, orderBy : orderBy|default('latest')}) }}\"
                      data-type=\"course\"><a href=\"javascript:;\">{{ moreCategory.name }}</a></li>
                {% endfor %}
              </ul>
            </li>
          {% endif %}
        {% endif %}
      </ul>
      <div class=\"btn-group visible-xs\">
        <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\"
                aria-expanded=\"false\">{{ '全部课程'|trans }} <span class=\"caret\"></span></button>
        <ul class=\"dropdown-menu\" role=\"menu\">
          <li role=\"presentation\" class=\"js-course-filter {% if (categoryId|default(0) == 0) %}active {% endif %}\"
              data-url=\"{{ path('homepage_category',{orderBy : orderBy|default('latest')}) }}\" data-type=\"course\"><a
                href=\"javascript:;\">{{ '全部课程'|trans }}</a></li>
          {% if categoriesFirst %}
            {% for category in categoriesFirst  if (category.parentId == 0) %}
              {% if ( loop.index0 < config.categoryCount|default(4) ) %}
                <li role=\"presentation\"
                    class=\"js-course-filter {% if (categoryId|default(0) == category.id) %}active {% endif %}\"
                    data-url=\"{{ path('homepage_category',{categoryId : category.id, orderBy : orderBy|default('latest')}) }}\"
                    data-type=\"course\"><a href=\"javascript:;\">{{ category.name }}</a></li>
              {% endif %}
            {% endfor %}
            {% if  moreCategories %}
              <li role=\"presentation\" class=\"js-course-filteractive\" data-type=\"course\"><a
                    href=\"{{ path('course_set_explore') }}\">更多</a></li>
            {% endif %}
          {% endif %}
        </ul>
      </div>
      <div class=\"course-sort btn-group\">
        <a href=\"javascript:;\"
           class=\"btn btn-default {% if (orderBy|default('recommendedSeq') == 'latest') %} active {% endif %}js-course-filter\"
           data-url=\"{{ path('homepage_category',{categoryId : categoryId|default(0), orderBy : 'latest'}) }}\"
           data-type='course'>
          {{ '最新'|trans }}
        </a>
        <a href=\"javascript:;\"
           class=\"btn btn-default {% if (orderBy|default('recommendedSeq') == 'studentNum') %} active {% endif %}js-course-filter\"
           data-url=\"{{ path('homepage_category',{categoryId : categoryId|default(0), orderBy : 'studentNum'}) }}\"
           data-type='course'>
          {{ '最热'|trans }}
        </a>
        <a href=\"javascript:;\"
           class=\"btn btn-default {% if (orderBy|default('recommendedSeq') == 'recommendedSeq') %} active {% endif %}js-course-filter\"
           data-url=\"{{ path('homepage_category',{categoryId : categoryId|default(0), orderBy : 'recommendedSeq'}) }}\"
           data-type='course'>
          {{ '推荐'|trans }}
        </a>
      </div>
    </div>
    <div class=\"course-list\">
      <div class=\"row\">
        {% for courseSet in courseSets %}
          <div class=\"col-lg-3 col-md-4 col-xs-6\">
            {% include 'course/widgets/course-grid.html.twig' with {courseSet: courseSet} %}
          </div>
        {% endfor %}
      </div>
    </div>
    <div class=\"section-more-btn\">
      <a href=\"{{ path('course_set_explore') }}\" class=\"btn btn-default btn-lg\">
        {{ '更多课程'|trans }} <i class=\"mrs-o es-icon es-icon-chevronright\"></i>
      </a>
    </div>
  </div>
</section>
", "default/course-grid-with-condition-index.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/default/course-grid-with-condition-index.html.twig");
    }
}
