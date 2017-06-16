<?php

/* search/index.html.twig */
class __TwigTemplate_756636d71fb8c0caa89b002f4f9267832eead5ec06bea1fb8d8eff278b3201a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "search/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'top_content' => array($this, 'block_top_content'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["bodyClass"] = "bg-blank";
        // line 6
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/echo-js.js", 1 => "app/js/search/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("搜索："), "html", null, true);
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            echo twig_escape_filter($this->env, (isset($context["keywords"]) ? $context["keywords"] : null), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("全部课程"), "html", null, true);
        }
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_top_content($context, array $blocks = array())
    {
        // line 9
        echo "  <div class=\"course-banner es-banner\">
    <div class=\"container\">
      <div class=\"title\">
        <span>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("搜索"), "html", null, true);
        echo "</span>";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "locale", array()) == "zh_CN")) {
            echo "SEARCH";
        }
        // line 13
        echo "      </div>
    </div>
  </div>
";
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        // line 19
        echo "
  <div class=\"course-filter search-filter\" id=\"course-filter\">
    <div class=\"result-declare\">
  ";
        // line 22
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            // line 23
            echo "    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("共找到<span>%count%</span>门<span>“%keywords%”</span>相关课程", array("%count%" => (isset($context["count"]) ? $context["count"] : null), "%keywords%" => (isset($context["keywords"]) ? $context["keywords"] : null)));
            echo "
  ";
        } else {
            // line 25
            echo "    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("共找到<span>%count%</span>门课程", array("%count%" => (isset($context["count"]) ? $context["count"] : null)));
            echo "
    ";
        }
        // line 27
        echo "    </div>
    <ul class=\"nav nav-pills hidden-xs\" role=\"tablist\">
      <li role=\"presentation\" class=\"";
        // line 29
        if ( !(isset($context["filter"]) ? $context["filter"] : null)) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search", array("q" => (isset($context["keywords"]) ? $context["keywords"] : null))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("全部课程"), "html", null, true);
        echo "</a></li>
      ";
        // line 30
        if ((isset($context["isShowVipSearch"]) ? $context["isShowVipSearch"] : null)) {
            // line 31
            echo "        ";
            if ((isset($context["currentUserVipLevel"]) ? $context["currentUserVipLevel"] : null)) {
                // line 32
                echo "          <li role=\"presentation\" class=\"";
                if (((isset($context["filter"]) ? $context["filter"] : null) == "vip")) {
                    echo "active";
                }
                echo "\">
            <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search", array("filter" => "vip", "q" => (isset($context["keywords"]) ? $context["keywords"] : null))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("会员课程"), "html", null, true);
                echo "</a>
          </li>
        ";
            }
            // line 36
            echo "      ";
        }
        // line 37
        echo "      <li role=\"presentation\" class=\"";
        if (((isset($context["filter"]) ? $context["filter"] : null) == "free")) {
            echo "active";
        }
        echo "\">
          <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search", array("filter" => "free", "q" => (isset($context["keywords"]) ? $context["keywords"] : null))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("免费课程"), "html", null, true);
        echo "</a>
      </li>
      <li role=\"presentation\" class=\"";
        // line 40
        if (((isset($context["filter"]) ? $context["filter"] : null) == "live")) {
            echo "active";
        }
        echo "\">
          <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search", array("filter" => "live", "q" => (isset($context["keywords"]) ? $context["keywords"] : null))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("直播课程"), "html", null, true);
        echo "</a>
      </li>
    </ul>
    <div class=\"btn-group visible-xs\">
      <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">";
        // line 45
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDictText("searchCourseType", ((array_key_exists("filter", $context)) ? (_twig_default_filter((isset($context["filter"]) ? $context["filter"] : null), "all")) : ("all")));
        echo "
      <span class=\"caret\"></span></button>

      <ul class=\"dropdown-menu\" role=\"menu\">
        <li role=\"presentation\" class=\"";
        // line 49
        if ( !(isset($context["filter"]) ? $context["filter"] : null)) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("全部课程"), "html", null, true);
        echo "</a></li>
        ";
        // line 50
        if ((isset($context["isShowVipSearch"]) ? $context["isShowVipSearch"] : null)) {
            // line 51
            echo "            ";
            if ((isset($context["currentUserVipLevel"]) ? $context["currentUserVipLevel"] : null)) {
                // line 52
                echo "              <li role=\"presentation\" class=\"";
                if (((isset($context["filter"]) ? $context["filter"] : null) == "vip")) {
                    echo "active";
                }
                echo "\">
                <a href=\"";
                // line 53
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search", array("filter" => "vip"));
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("会员课程"), "html", null, true);
                echo "</a>
              </li>
          ";
            }
            // line 56
            echo "        ";
        }
        // line 57
        echo "        <li role=\"presentation\" class=\"";
        if (((isset($context["filter"]) ? $context["filter"] : null) == "free")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search", array("filter" => "free"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("免费课程"), "html", null, true);
        echo "</a>
        </li>
        <li role=\"presentation\" class=\"";
        // line 60
        if (((isset($context["filter"]) ? $context["filter"] : null) == "live")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search", array("filter" => "live"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("直播课程"), "html", null, true);
        echo "</a>
        </li>
      </ul>
    </div>

  </div>

  <!-- 课程列表 -->
  <div class=\"course-list\">
    ";
        // line 70
        if ((isset($context["courseSets"]) ? $context["courseSets"] : null)) {
            // line 71
            echo "      <div class=\"row\">
        ";
            // line 72
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
                // line 73
                echo "          <div class=\"col-lg-3 col-md-4 col-xs-6\">
            ";
                // line 74
                $this->loadTemplate("course/widgets/course-grid.html.twig", "search/index.html.twig", 74)->display(array_merge($context, array("courseSet" => $context["courseSet"])));
                // line 75
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
            // line 77
            echo "      </div>
    ";
        } else {
            // line 79
            echo "      <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("没有搜到相关课程，请换个关键词试试！"), "html", null, true);
            echo "</div>
    ";
        }
        // line 81
        echo "  </div>

  <nav class=\"text-center\">
    ";
        // line 84
        if ((isset($context["courseSets"]) ? $context["courseSets"] : null)) {
            // line 85
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
            echo "
    ";
        }
        // line 87
        echo "  </nav>

";
    }

    public function getTemplateName()
    {
        return "search/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 87,  290 => 85,  288 => 84,  283 => 81,  277 => 79,  273 => 77,  258 => 75,  256 => 74,  253 => 73,  236 => 72,  233 => 71,  231 => 70,  217 => 61,  211 => 60,  204 => 58,  197 => 57,  194 => 56,  186 => 53,  179 => 52,  176 => 51,  174 => 50,  164 => 49,  157 => 45,  148 => 41,  142 => 40,  135 => 38,  128 => 37,  125 => 36,  117 => 33,  110 => 32,  107 => 31,  105 => 30,  95 => 29,  91 => 27,  85 => 25,  79 => 23,  77 => 22,  72 => 19,  69 => 18,  62 => 13,  56 => 12,  51 => 9,  48 => 8,  35 => 3,  31 => 1,  29 => 6,  27 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "search/index.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/search/index.html.twig");
    }
}
