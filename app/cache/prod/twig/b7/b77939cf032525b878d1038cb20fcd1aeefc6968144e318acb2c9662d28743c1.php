<?php

/* my/teaching/open-course.html.twig */
class __TwigTemplate_d36bd6d1cb6699b37cfa1560ff02df4f4b1565492d3fc08812fc74e779b6e4df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("my/layout.html.twig", "my/teaching/open-course.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "my/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["dict_macro"] = $this->loadTemplate("common/data-dict-macro.html.twig", "my/teaching/open-course.html.twig", 1);
        // line 6
        $context["side_nav"] = "my-teaching-courses";
        // line 8
        $context["type"] = "question";
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("在教课程"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 10
    public function block_main($context, array $blocks = array())
    {
        // line 11
        echo "
<div class=\"panel panel-default panel-col lesson-manage-panel\">
  <div class=\"panel-heading\">
    <span class=\"pull-right\">
      <a id=\"create-course\" href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_create");
        echo "\" class=\"btn btn-info btn-sm\"><span class=\"glyphicon glyphicon-plus\"></span> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("创建课程"), "html", null, true);
        echo "</a>
    </span>
    ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("在教课程"), "html", null, true);
        echo "
  </div>

  <div class=\"panel-body\">
    ";
        // line 21
        $this->loadTemplate("my/teaching/course-tab.html.twig", "my/teaching/open-course.html.twig", 21)->display($context);
        // line 22
        echo "
    <table class=\"table table-striped table-hover\" id=\"course-table\" style=\"word-break:break-all;\">
      <thead>
      <tr>
        <th width=\"50%\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("名称"), "html", null, true);
        echo "</th>
        <th>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("浏览数"), "html", null, true);
        echo "</th>
        <th>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("状态"), "html", null, true);
        echo "</th>
        <th width=\"20%\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("操作"), "html", null, true);
        echo "</th>
      </tr>
      </thead>
      <tbody>
      ";
        // line 33
        if ((isset($context["courses"]) ? $context["courses"] : null)) {
            // line 34
            echo "       \t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 35
                echo "       \t <tr>
            <td>
              <a class=\"pull-left mrm link-primary\" href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_show", array("courseId" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                echo "\">
                <img class=\"course-picture\" src=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute($context["course"], "middlePicture", array()), "course.png"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                echo "\" width=\"100\">
              </a>

              <div class=\"mlm\">
                <a class=\"link-primary\" href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_show", array("courseId" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                echo "</a>
                ";
                // line 43
                if (($this->getAttribute($context["course"], "type", array()) == "liveOpen")) {
                    // line 44
                    echo "                  <span class=\"label label-success live-label\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("直播"), "html", null, true);
                    echo "</span>
                ";
                }
                // line 46
                echo "              </div>
            </td>
            <td>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "hitNum", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 49
                echo $context["dict_macro"]->getcourseStatus($this->getAttribute($context["course"], "status", array()));
                echo "</td>
            <td>
              <div class=\"btn-group\">
                ";
                // line 52
                if (twig_in_filter("ROLE_SUPER_ADMIN", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "roles", array()))) {
                    // line 53
                    echo "                  <a class=\"mr10 link-primary\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_manage", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("管理"), "html", null, true);
                    echo "</a>
                ";
                } elseif (twig_in_filter("ROLE_TEACHER", $this->getAttribute($this->getAttribute(                // line 54
(isset($context["app"]) ? $context["app"] : null), "user", array()), "roles", array()))) {
                    // line 55
                    echo "                  <a class=\"mr10 link-primary\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_manage", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("查看"), "html", null, true);
                    echo "</a>
                ";
                }
                // line 57
                echo "                <a href=\"javascript:;\"  class=\"link-primary dropdown-toggle ml10\" data-toggle=\"dropdown\">
                  更多
                  <i class=\"es-icon es-icon-arrowdropdown\"></i>
                </a>
                <ul class=\"dropdown-menu pull-right\">
                  ";
                // line 62
                if (($this->getAttribute($context["course"], "type", array()) != "liveOpen")) {
                    // line 63
                    echo "                    <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_manage_lesson", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课时管理"), "html", null, true);
                    echo "</a></li>
                    <li><a href=\"";
                    // line 64
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_manage_files", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("文件管理"), "html", null, true);
                    echo "</a></li>
                  ";
                }
                // line 66
                echo "                  <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_manage_students", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                echo "\">";
                if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.user_name")) {
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.user_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员"), "html", null, true);
                }
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("管理"), "html", null, true);
                echo "</a></li>
                </ul>
              </div>
            </td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "        ";
        } else {
            // line 73
            echo "          <tr>
            <td colspan=\"20\">
              <div class=\"empty\">
                <a class=\"link-primary\"  href=\"";
            // line 76
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_create");
            echo "\" target=\"_blank\">
                  ";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("你还没有在教的公开课哦, 赶快去创建吧!"), "html", null, true);
            echo "
                </a>
              </div>
            </td>
          </tr>
       ";
        }
        // line 83
        echo "        
      </tbody>
    </table>
    <nav class=\"text-center\">
      ";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
    </nav>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "my/teaching/open-course.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 87,  233 => 83,  224 => 77,  220 => 76,  215 => 73,  212 => 72,  192 => 66,  185 => 64,  178 => 63,  176 => 62,  169 => 57,  161 => 55,  159 => 54,  152 => 53,  150 => 52,  144 => 49,  140 => 48,  136 => 46,  130 => 44,  128 => 43,  120 => 42,  111 => 38,  105 => 37,  101 => 35,  96 => 34,  94 => 33,  87 => 29,  83 => 28,  79 => 27,  75 => 26,  69 => 22,  67 => 21,  60 => 17,  53 => 15,  47 => 11,  44 => 10,  36 => 4,  32 => 2,  30 => 8,  28 => 6,  26 => 1,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "my/teaching/open-course.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/my/teaching/open-course.html.twig");
    }
}
