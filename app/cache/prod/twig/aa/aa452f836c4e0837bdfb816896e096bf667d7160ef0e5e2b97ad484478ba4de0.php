<?php

/* classroom/explore.html.twig */
class __TwigTemplate_46ec150ad57d168f70c62b4b11c264f2f0e1ecedb5d52889a08b7caa334ff085 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "classroom/explore.html.twig", 1);
        $this->blocks = array(
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
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
        // line 2
        $context["bodyClass"] = "classroom-list-page bg-blank";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_keywords($context, array $blocks = array())
    {
        if ((isset($context["categoryArray"]) ? $context["categoryArray"] : null)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoryArray"]) ? $context["categoryArray"] : null), "name", array()), "html", null, true);
            if ((isset($context["categoryParent"]) ? $context["categoryParent"] : null)) {
                echo ",";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["categoryParent"]) ? $context["categoryParent"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["categoryParent"]) ? $context["categoryParent"] : null), "name", array()), "")) : ("")), "html", null, true);
            }
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("全部"), "html", null, true);
        }
    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        echo $this->env->getExtension('AppBundle\Twig\WebExtension')->plainTextFilter(((array_key_exists("categoryArrayDescription", $context)) ? (_twig_default_filter((isset($context["categoryArrayDescription"]) ? $context["categoryArrayDescription"] : null), "")) : ("")), 100);
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["categoryArray"]) ? $context["categoryArray"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["categoryArray"]) ? $context["categoryArray"] : null), "name", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("全部"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("全部"))), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.name"), "html", null, true);
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.slogan")) {
            echo " - ";
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.slogan"), "html", null, true);
        }
        if ( !$this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.owned")) {
            echo " - Powered By EduSoho";
        }
    }

    // line 8
    public function block_top_content($context, array $blocks = array())
    {
        // line 9
        echo "
  ";
        // line 10
        $this->env->getExtension('AppBundle\Twig\WebExtension')->loadScript("topxiawebbundle/controller/classroom/explore");
        // line 11
        echo "  ";
        $this->loadTemplate("seajs_loader_compatible.html.twig", "classroom/explore.html.twig", 11)->display(array_merge($context, array("topxiawebbundle" => true)));
        // line 12
        echo "
  <div class=\"es-banner\">
    <div class=\"container\">
      <div class=\"title\">
        <i class=\"es-icon es-icon-viewcomfy\"></i>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%name%列表", array("%name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")))), "html", null, true);
        echo "
      </div>
      <div class=\"more\">
        <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_explore");
        echo "\">
          ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("查看课程"), "html", null, true);
        echo "
        </a>
        <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_explore");
        echo "\">
          ";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("查看公开课"), "html", null, true);
        echo "
        </a>
      </div>
    </div>
  </div>
  
";
    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
        // line 32
        echo "  ";
        $context["price"] = (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "price", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "price", array()), "all")) : ("all"));
        // line 33
        echo "  ";
        $context["orderBy"] = ((array_key_exists("orderBy", $context)) ? (_twig_default_filter((isset($context["orderBy"]) ? $context["orderBy"] : null), "createdTime")) : ("createdTime"));
        // line 34
        echo "  ";
        $context["currentLevelId"] = (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "currentLevelId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "currentLevelId", array()), "all")) : ("all"));
        // line 35
        echo "  
  ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Category:treeNav", array("category" => (isset($context["category"]) ? $context["category"] : null), "tags" => (isset($context["tags"]) ? $context["tags"] : null), "path" => (isset($context["path"]) ? $context["path"] : null), "filter" => array("price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null), "group" => "classroom")));
        echo "
  <div class=\"es-filter\">
    <ul class=\"nav nav-sort\">
      <li><a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_explore", array("category" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "category", array(), "array"), "subCategory" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "subCategory", array(), "array"), "selectedthirdLevelCategory" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "thirdLevelCategory", array(), "array"), "tag" => array("tags" => (isset($context["tags"]) ? $context["tags"] : null)), "filter" => array("price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => "createdTime")), "html", null, true);
        echo "\" class=\"";
        if (((isset($context["orderBy"]) ? $context["orderBy"] : null) == "createdTime")) {
            echo " active ";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最新"), "html", null, true);
        echo "</a></li><li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_explore", array("category" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "category", array(), "array"), "subCategory" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "subCategory", array(), "array"), "selectedthirdLevelCategory" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "thirdLevelCategory", array(), "array"), "tag" => array("tags" => (isset($context["tags"]) ? $context["tags"] : null)), "filter" => array("price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => "studentNum")), "html", null, true);
        echo "\" class=\"";
        if (((isset($context["orderBy"]) ? $context["orderBy"] : null) == "studentNum")) {
            echo " active ";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最热"), "html", null, true);
        echo "</a></li><li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_explore", array("category" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "category", array(), "array"), "subCategory" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "subCategory", array(), "array"), "selectedthirdLevelCategory" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "thirdLevelCategory", array(), "array"), "tag" => array("tags" => (isset($context["tags"]) ? $context["tags"] : null)), "filter" => array("price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => "recommendedSeq")), "html", null, true);
        echo "\" class=\"";
        if (((isset($context["orderBy"]) ? $context["orderBy"] : null) == "recommendedSeq")) {
            echo " active ";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("推荐"), "html", null, true);
        echo "</a></li>
    </ul>
    <div class=\"filter hidden-xs\">
      ";
        // line 42
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->isPluginInstalled("vip")) {
            // line 43
            echo "        <div class=\"btn-group\">
          <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"><i class=\"es-icon es-icon-crown text-warning\"></i>
            ";
            // line 45
            if (((isset($context["currentLevelId"]) ? $context["currentLevelId"] : null) == "all")) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("会员%name%", array("%name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")))), "html", null, true);
            }
            // line 46
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["levels"]) ? $context["levels"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                if (($this->getAttribute($context["level"], "id", array()) == (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null))) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "name", array()), "html", null, true);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "          </button>
          <ul class=\"dropdown-menu\" role=\"menu\">
          <li role=\"presentation\"class=\"";
            // line 49
            if (((isset($context["currentLevelId"]) ? $context["currentLevelId"] : null) == "all")) {
                echo "active ";
            }
            echo "\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_explore", array("category" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "category", array(), "array"), "subCategory" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "subCategory", array(), "array"), "selectedthirdLevelCategory" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "thirdLevelCategory", array(), "array"), "tag" => array("tags" => (isset($context["tags"]) ? $context["tags"] : null)), "filter" => array("price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => "all"), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("全部"), "html", null, true);
            echo "</a></li>
          ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["levels"]) ? $context["levels"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                // line 51
                echo "            <li role=\"presentation\"class=\"";
                if (($this->getAttribute($context["level"], "id", array()) == (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null))) {
                    echo "active ";
                }
                echo "\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_explore", array("category" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "category", array(), "array"), "subCategory" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "subCategory", array(), "array"), "selectedthirdLevelCategory" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "thirdLevelCategory", array(), "array"), "tag" => array("tags" => (isset($context["tags"]) ? $context["tags"] : null)), "filter" => array("price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => $this->getAttribute($context["level"], "id", array())), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "name", array()), "html", null, true);
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "          </ul>
        </div>
      ";
        }
        // line 56
        echo "      <label class=\"checkbox-inline hidden-xs\">
        <input type=\"checkbox\" ";
        // line 57
        if (((isset($context["price"]) ? $context["price"] : null) == "free")) {
            echo "checked=\"true\" ";
        }
        echo " id=\"free\" value=\"
        ";
        // line 58
        if (((isset($context["price"]) ? $context["price"] : null) == "all")) {
            // line 59
            echo "          ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_explore", array("category" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "category", array(), "array"), "subCategory" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "subCategory", array(), "array"), "selectedthirdLevelCategory" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "thirdLevelCategory", array(), "array"), "tag" => array("tags" => (isset($context["tags"]) ? $context["tags"] : null)), "filter" => array("price" => "free", "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
            echo "
        ";
        } else {
            // line 60
            echo " 
          ";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_explore", array("category" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "category", array(), "array"), "subCategory" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "subCategory", array(), "array"), "selectedthirdLevelCategory" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "thirdLevelCategory", array(), "array"), "tag" => array("tags" => (isset($context["tags"]) ? $context["tags"] : null)), "filter" => array("price" => "all", "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
            echo "
        ";
        }
        // line 63
        echo "        \"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("免费%name%", array("%name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")))), "html", null, true);
        echo "
      </label>
    </div>
  </div>
  <div class=\"class-list row\">
    ";
        // line 68
        if ((isset($context["classrooms"]) ? $context["classrooms"] : null)) {
            // line 69
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["classrooms"]) ? $context["classrooms"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["classroom"]) {
                // line 70
                echo "        <div class=\"col-md-4 col-sm-6\">
          <div class=\"class-item\">
            <div class=\"class-img\">
              <a href=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute($context["classroom"], "id", array()))), "html", null, true);
                echo "\" target=\"_blank\">
                ";
                // line 74
                echo $this->env->getExtension('AppBundle\Twig\WebExtension')->makeLazyImg($this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute($context["classroom"], "middlePicture", array()), "classroom.png"), "img-responsive", $this->getAttribute($context["classroom"], "title", array()), "lazyload_class.png");
                echo "
                <h3>";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "title", array()), "html", null, true);
                echo "</h3>
                <div class=\"image-overlay\"></div>
              </a>
            </div>
            <div class=\"class-serve\">
              ";
                // line 80
                $this->loadTemplate("classroom/service-block.html.twig", "classroom/explore.html.twig", 80)->display(array_merge($context, array("services" => $this->getAttribute($context["classroom"], "service", array()))));
                // line 81
                echo "            </div>
            <ul class=\"class-data clearfix\">
              <li><i class=\"es-icon es-icon-book\"></i>";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "courseNum", array()), "html", null, true);
                echo "</li>
              <li><i class=\"es-icon es-icon-people\"></i>";
                // line 84
                echo twig_escape_filter($this->env, ($this->getAttribute($context["classroom"], "studentNum", array()) + $this->getAttribute($context["classroom"], "auditorNum", array())), "html", null, true);
                echo "</li>
              <li><i class=\"es-icon es-icon-textsms\"></i>";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "threadNum", array()), "html", null, true);
                echo "</li>
            </ul>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classroom'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "      
    ";
        } else {
            // line 92
            echo "      <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("目前暂时无%name%", array("%name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")))), "html", null, true);
            echo "</div>
    ";
        }
        // line 94
        echo "  </div>
  <nav class=\"text-center\">
    ";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
  </nav>
";
    }

    public function getTemplateName()
    {
        return "classroom/explore.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 96,  345 => 94,  339 => 92,  335 => 90,  316 => 85,  312 => 84,  308 => 83,  304 => 81,  302 => 80,  294 => 75,  290 => 74,  286 => 73,  281 => 70,  263 => 69,  261 => 68,  252 => 63,  247 => 61,  244 => 60,  238 => 59,  236 => 58,  230 => 57,  227 => 56,  222 => 53,  207 => 51,  203 => 50,  193 => 49,  189 => 47,  177 => 46,  173 => 45,  169 => 43,  167 => 42,  139 => 39,  133 => 36,  130 => 35,  127 => 34,  124 => 33,  121 => 32,  118 => 31,  107 => 24,  103 => 23,  98 => 21,  94 => 20,  88 => 17,  81 => 12,  78 => 11,  76 => 10,  73 => 9,  70 => 8,  55 => 5,  49 => 4,  35 => 3,  31 => 1,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "classroom/explore.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/classroom/explore.html.twig");
    }
}
