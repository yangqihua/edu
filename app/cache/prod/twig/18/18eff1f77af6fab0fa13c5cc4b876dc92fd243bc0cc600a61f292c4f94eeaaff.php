<?php

/* my/learning/thread/thread-list.html.twig */
class __TwigTemplate_4c654d1ee2ee458f1f7f98f2dcf1a6e0f9ef9fbe4eb78bda343fd7a48e834d40 extends Twig_Template
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
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "discussion")) : ("discussion"));
        // line 2
        echo "
<ul class=\"media-list\">
  ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["threads"]) ? $context["threads"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
            // line 5
            echo "    ";
            if ((isset($context["courses"]) ? $context["courses"] : null)) {
                // line 6
                echo "      ";
                $context["course"] = (($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["thread"], "courseId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["thread"], "courseId", array()), array(), "array"), null)) : (null));
                // line 7
                echo "      <li class=\"media\">
        <div class=\"media-body\">
          ";
                // line 9
                if (($this->getAttribute($context["thread"], "postNum", array()) > 0)) {
                    // line 10
                    echo "            <span class=\"badge pull-right\" style=\"margin-top:15px;\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "postNum", array()), "html", null, true);
                    echo "</span>
          ";
                }
                // line 12
                echo "          <div class=\"mbm\">
            ";
                // line 13
                if (($this->getAttribute($context["thread"], "type", array()) == "question")) {
                    // line 14
                    echo "              <span class=\"label label-info\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("问答帖"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("问"), "html", null, true);
                    echo "</span>
            ";
                }
                // line 16
                echo "
            <a href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_thread_show", array("courseId" => $this->getAttribute($context["thread"], "courseId", array()), "threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                echo "\"><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "title", array()), "html", null, true);
                echo "</strong></a>

            ";
                // line 19
                if ($this->getAttribute($context["thread"], "taskId", array())) {
                    // line 20
                    echo "              <span class=\"label\" title=\"课时";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "taskId", array()), "html", null, true);
                    echo "\">L";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "taskId", array()), "html", null, true);
                    echo "</span>
            ";
                }
                // line 22
                echo "
            ";
                // line 23
                if ($this->getAttribute($context["thread"], "isElite", array())) {
                    // line 24
                    echo "              <span class=\"label label-warning\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("精华帖"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("精"), "html", null, true);
                    echo "</span>
            ";
                }
                // line 26
                echo "
          </div>
          <div class=\"color-gray text-normal\">
            ";
                // line 29
                if ((isset($context["course"]) ? $context["course"] : null)) {
                    // line 30
                    echo "              <span>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("来自"), "html", null, true);
                    echo "
                <a href=\"";
                    // line 31
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                    echo "\" class=\"link-primary\">
                  ";
                    // line 32
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
                    echo "
                </a>
                -
                <a href=\"";
                    // line 35
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["courseSets"]) ? $context["courseSets"] : null), $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "courseSetId", array()), array(), "array"), "id", array()))), "html", null, true);
                    echo "\" class=\"link-primary\">
                  ";
                    // line 36
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["courseSets"]) ? $context["courseSets"] : null), $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "courseSetId", array()), array(), "array"), "title", array()), "html", null, true);
                    echo "
                </a>
              </span>
            ";
                } else {
                    // line 40
                    echo "              <span>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程已删除"), "html", null, true);
                    echo "</span>
            ";
                }
                // line 42
                echo "            <span class=\"bullet\">•</span>
            ";
                // line 43
                if (($this->getAttribute($context["thread"], "postNum", array()) > 0)) {
                    // line 44
                    echo "              ";
                    $context["poster"] = $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["thread"], "latestPostUserId", array()), array(), "array");
                    // line 45
                    echo "              <span>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最后回复"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_link", array(0 => (isset($context["poster"]) ? $context["poster"] : null), 1 => "link-primary"), "method"), "html", null, true);
                    echo "</span>
              ,
              <span>";
                    // line 47
                    echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->smarttimeFilter($this->getAttribute($context["thread"], "latestPostTime", array())), "html", null, true);
                    echo "</span>
              <span class=\"bullet\">•</span>
            ";
                }
                // line 50
                echo "            <span>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "hitNum", array()), "html", null, true);
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("浏览"), "html", null, true);
                echo "</span>
          </div>
        </div>
      </li>
    ";
            } else {
                // line 55
                echo "      ";
                if (((isset($context["type"]) ? $context["type"] : null) == "question")) {
                    // line 56
                    echo "        <li class=\"empty\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("你还没提过问题"), "html", null, true);
                    echo "</li>
      ";
                } else {
                    // line 58
                    echo "        <li class=\"empty\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("你还没发表过话题"), "html", null, true);
                    echo "</li>
      ";
                }
                // line 60
                echo "
    ";
            }
            // line 62
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "
</ul>

";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "my/learning/thread/thread-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 67,  190 => 64,  183 => 62,  179 => 60,  173 => 58,  167 => 56,  164 => 55,  154 => 50,  148 => 47,  140 => 45,  137 => 44,  135 => 43,  132 => 42,  126 => 40,  119 => 36,  115 => 35,  109 => 32,  105 => 31,  100 => 30,  98 => 29,  93 => 26,  85 => 24,  83 => 23,  80 => 22,  72 => 20,  70 => 19,  63 => 17,  60 => 16,  52 => 14,  50 => 13,  47 => 12,  41 => 10,  39 => 9,  35 => 7,  32 => 6,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "my/learning/thread/thread-list.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/my/learning/thread/thread-list.html.twig");
    }
}
