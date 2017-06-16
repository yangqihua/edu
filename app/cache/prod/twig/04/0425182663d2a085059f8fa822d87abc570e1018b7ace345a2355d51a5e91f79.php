<?php

/* course/thread/show.html.twig */
class __TwigTemplate_9bd0be5318c205eb0451daeb211bda2c6a77b30e172cf32cfc1d402ec74de6ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("course/course-show.html.twig", "course/thread/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'detail_content' => array($this, 'block_detail_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "course/course-show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/es-ckeditor/ckeditor.js", 1 => "libs/jquery-validation.js", 2 => "app/js/course/thread-show/index.js"));
        // line 5
        $context["nav"] = "threads";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "title", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_detail_content($context, array $blocks = array())
    {
        // line 8
        echo "
  <ul class=\"breadcrumb\">
    <li><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "tab" => "threads")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("讨论区"), "html", null, true);
        echo "</a></li>
    <li class=\"active\">";
        // line 11
        if (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "type", array()) == "question")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("问答"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("话题"), "html", null, true);
        }
        echo "</li>
  </ul>

  <div class=\"thread\">
    <div class=\"thread-header\">
      ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_avatar", array(0 => (isset($context["author"]) ? $context["author"] : null), 1 => "pull-right"), "method"), "html", null, true);
        echo "
      <h2 class=\"thread-title\">
        ";
        // line 18
        if (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "type", array()) == "question")) {
            // line 19
            echo "        <span class=\"label label-info\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("问"), "html", null, true);
            echo "</span>
        ";
        }
        // line 21
        echo "        ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "title", array()), "html", null, true);
        echo "
      </h2>
      <div class=\"thread-metas\">
        By ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_link", array(0 => (isset($context["author"]) ? $context["author"] : null), 1 => "link-primary"), "method"), "html", null, true);
        echo "
        <span class=\"bullet mhs\">•</span>
        ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->smarttimeFilter($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "createdTime", array())), "html", null, true);
        echo "
        <span class=\"bullet mhs\">•</span>
        ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%hitNum%次浏览", array("%hitNum%" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "hitNum", array()))), "html", null, true);
        echo "
        ";
        // line 29
        if (((array_key_exists("task", $context)) ? (_twig_default_filter((isset($context["task"]) ? $context["task"] : null), null)) : (null))) {
            // line 30
            echo "          <span class=\"bullet mhs\">•</span>
          <a class=\"link-primary\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_show", array("courseId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "courseId", array()), "id" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "taskId", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "title", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("任务%number%", array("%number%" => $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "seq", array()))), "html", null, true);
            echo "</a>
        ";
        }
        // line 33
        echo "
      </div>
    </div>
    <div class=\"thread-body\">";
        // line 36
        echo $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "content", array());
        echo "</div>

    ";
        // line 38
        $this->loadTemplate("attachment/widget/list.html.twig", "course/thread/show.html.twig", 38)->display(array_merge($context, array("targetType" => "course.thread", "targetId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))));
        // line 39
        echo "
    ";
        // line 40
        if (((isset($context["isManager"]) ? $context["isManager"] : null) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()) == $this->getAttribute((isset($context["author"]) ? $context["author"] : null), "id", array())))) {
            // line 41
            echo "      <div class=\"thread-footer\" >
        <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_thread_edit", array("courseId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "courseId", array()), "threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-link\"><span class=\"glyphicon glyphicon-edit\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编辑"), "html", null, true);
            echo "</a>
        ";
            // line 43
            if ((isset($context["isManager"]) ? $context["isManager"] : null)) {
                // line 44
                echo "          <a href=\"javascript:;\" class=\"btn btn-link\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_thread_delete", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
                echo "\" data-after-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "tab" => "threads")), "html", null, true);
                echo "\" data-role=\"confirm-btn\" data-confirm-message=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("您真的要删除该帖吗？"), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
                echo "</a>
          ";
                // line 45
                if ($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "isStick", array())) {
                    // line 46
                    echo "            <a href=\"javascript:\" class=\"btn btn-link\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_thread_unstick", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
                    echo "\" data-role=\"confirm-btn\" data-confirm-message=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("您真的要取消置顶该帖吗？"), "html", null, true);
                    echo "\"><span class=\"glyphicon glyphicon-minus-sign\"></span> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("取消置顶"), "html", null, true);
                    echo "</a>
          ";
                } else {
                    // line 48
                    echo "            <a href=\"javascript:\" class=\"btn btn-link\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_thread_stick", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
                    echo "\" data-role=\"confirm-btn\" data-confirm-message=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("您真的要置顶该帖吗？"), "html", null, true);
                    echo "\"><span class=\"glyphicon glyphicon-circle-arrow-up\"></span> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("置顶"), "html", null, true);
                    echo "</a>
          ";
                }
                // line 50
                echo "
          ";
                // line 51
                if ($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "isElite", array())) {
                    // line 52
                    echo "            <a href=\"javascript:\" class=\"btn btn-link\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_thread_unelite", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
                    echo "\"data-role=\"confirm-btn\" data-confirm-message=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("您真的要取消加精该帖吗？"), "html", null, true);
                    echo "\"><span class=\"glyphicon glyphicon-hand-right\"></span> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("取消加精"), "html", null, true);
                    echo "</a>
          ";
                } else {
                    // line 54
                    echo "            <a href=\"javascript:\" class=\"btn btn-link\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_thread_elite", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
                    echo "\"data-role=\"confirm-btn\" data-confirm-message=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("您真的要加精该帖吗？"), "html", null, true);
                    echo "\"><span class=\"glyphicon glyphicon-thumbs-up\"></span>  ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("加精"), "html", null, true);
                    echo "</a>
          ";
                }
                // line 56
                echo "        ";
            }
            // line 57
            echo "      </div>
    ";
        }
        // line 59
        echo "  </div>

  <div class=\"thread-posts\">
    ";
        // line 62
        if ((($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "type", array()) == "question") && (isset($context["elitePosts"]) ? $context["elitePosts"] : null))) {
            // line 63
            echo "      <h3 class=\"thread-posts-heading\"><span class=\"glyphicon glyphicon-share-alt\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("教师的答案"), "html", null, true);
            echo "</h3>
      <ul class=\"thread-post-list media-list\">
        ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["elitePosts"]) ? $context["elitePosts"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 66
                echo "          ";
                $context["author"] = $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["post"], "userId", array()), array(), "array");
                // line 67
                echo "          ";
                $this->loadTemplate("course/thread/post-list-item.html.twig", "course/thread/show.html.twig", 67)->display($context);
                // line 68
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "      </ul>
    ";
        }
        // line 71
        echo "
    <h3 class=\"thread-posts-heading\">
      <span class=\"glyphicon glyphicon-share-alt\"></span>
      <span id=\"thread-post-num\">";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "postNum", array()), "html", null, true);
        echo "</span> ";
        if (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "type", array()) == "question")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("所有答案"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("回复"), "html", null, true);
        }
        // line 75
        echo "    </h3>

    <ul class=\"thread-post-list media-list\">
      ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 79
            echo "        ";
            $context["author"] = $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["post"], "userId", array()), array(), "array");
            // line 80
            echo "        ";
            $this->loadTemplate("course/thread/post-list-item.html.twig", "course/thread/show.html.twig", 80)->display($context);
            // line 81
            echo "      ";
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
            // line 82
            echo "        <li class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("还没有"), "html", null, true);
            if (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "type", array()) == "question")) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("答案"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("回复"), "html", null, true);
            }
            echo "，";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("赶快添加一个吧！"), "html", null, true);
            echo "</li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "    </ul>

    ";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "

    ";
        // line 88
        if ((isset($context["isMemberNonExpired"]) ? $context["isMemberNonExpired"] : null)) {
            // line 89
            echo "      <h3 class=\"thread-posts-heading\"><span class=\"glyphicon glyphicon-plus\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("添加"), "html", null, true);
            if (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "type", array()) == "question")) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("答案"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("回复"), "html", null, true);
            }
            echo "</h3>
      ";
            // line 90
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Course/Thread:post", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))));
            echo "
    ";
        }
        // line 92
        echo "
  </div>

";
    }

    public function getTemplateName()
    {
        return "course/thread/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  360 => 92,  355 => 90,  345 => 89,  343 => 88,  338 => 86,  334 => 84,  318 => 82,  305 => 81,  302 => 80,  299 => 79,  281 => 78,  276 => 75,  268 => 74,  263 => 71,  259 => 69,  245 => 68,  242 => 67,  239 => 66,  222 => 65,  216 => 63,  214 => 62,  209 => 59,  205 => 57,  202 => 56,  192 => 54,  182 => 52,  180 => 51,  177 => 50,  167 => 48,  157 => 46,  155 => 45,  144 => 44,  142 => 43,  136 => 42,  133 => 41,  131 => 40,  128 => 39,  126 => 38,  121 => 36,  116 => 33,  107 => 31,  104 => 30,  102 => 29,  98 => 28,  93 => 26,  88 => 24,  81 => 21,  75 => 19,  73 => 18,  68 => 16,  56 => 11,  50 => 10,  46 => 8,  43 => 7,  34 => 2,  30 => 1,  28 => 5,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/thread/show.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/course/thread/show.html.twig");
    }
}
