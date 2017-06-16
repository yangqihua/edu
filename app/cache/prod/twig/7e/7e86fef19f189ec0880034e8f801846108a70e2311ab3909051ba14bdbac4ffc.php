<?php

/* my/learning/group/groups-threads-ul.html.twig */
class __TwigTemplate_5bb6c26fd69ad852a64c29fedbf3c89abc0bac1bdf3cc2df51233a0bc1e16b24 extends Twig_Template
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
        echo "<ul class=\"media-list thread-list\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["threads"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
            // line 3
            echo "    ";
            $context["group"] = (($this->getAttribute(($context["groups"] ?? null), $this->getAttribute($context["thread"], "groupId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["groups"] ?? null), $this->getAttribute($context["thread"], "groupId", array()), array(), "array"), null)) : (null));
            // line 4
            echo "    ";
            if (((array_key_exists("users", $context)) ? (_twig_default_filter(($context["users"] ?? null), null)) : (null))) {
                // line 5
                echo "    ";
                $context["user"] = (($this->getAttribute(($context["users"] ?? null), $this->getAttribute($context["thread"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["users"] ?? null), $this->getAttribute($context["thread"], "userId", array()), array(), "array"), null)) : (null));
                // line 6
                echo "    ";
            }
            // line 7
            echo "    <li class=\"media\">
      <div class=\"media-left\">
        <span class=\"reply-num\">
         <strong>";
            // line 10
            if ($this->getAttribute($context["thread"], "postNum", array())) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "postNum", array()), "html", null, true);
                echo " ";
            } else {
                echo " 0 ";
            }
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("回复"), "html", null, true);
            echo "
        </span>
      </div>
      <div class=\"media-body pts\">
        <div class=\"media-heading\">
         <a class=\"title gray-darker\" href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("group_thread_show", array("id" => $this->getAttribute($context["thread"], "groupId", array()), "threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('AppBundle\Twig\WebExtension')->subTextFilter($this->getAttribute($context["thread"], "title", array()), 90);
            echo "</a>
          ";
            // line 16
            if ($this->getAttribute($context["thread"], "isStick", array())) {
                // line 17
                echo "            <span class=\"label label-primary\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("置顶"), "html", null, true);
                echo "</span>
          ";
            }
            // line 19
            echo "          ";
            if ($this->getAttribute($context["thread"], "isElite", array())) {
                // line 20
                echo "            <span class=\"label label-danger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("精华"), "html", null, true);
                echo "</span>
          ";
            }
            // line 22
            echo "
          ";
            // line 23
            if ($this->env->getExtension('AppBundle\Twig\WebExtension')->isFeatureEnabled("group_reward")) {
                // line 24
                echo "            ";
                if ((($this->getAttribute($context["thread"], "type", array()) == "reward") && ($this->getAttribute($context["thread"], "rewardCoin", array()) > 0))) {
                    // line 25
                    echo "              <span class=\"label label-danger\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("奖"), "html", null, true);
                    echo "</span>
            ";
                }
                // line 27
                echo "          ";
            }
            // line 28
            echo "        </div>

        <div class=\"metas\">
          ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? null), "user_avatar", array(0 => ($context["user"] ?? null), 1 => "userImg", 2 => "avatar-xxs"), "method"), "html", null, true);
            echo "
          ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? null), "user_link", array(0 => ($context["user"] ?? null), 1 => "pls"), "method"), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("发起了话题"), "html", null, true);
            echo "
          <span class=\"divider\">•</span>
          ";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->smarttimeFilter($this->getAttribute($context["thread"], "createdTime", array())), "html", null, true);
            echo "
          ";
            // line 35
            if (($context["group"] ?? null)) {
                // line 36
                echo "          <span class=\"divider\">•</span>
          <a class=\"gray-darker\" href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("group_show", array("id" => $this->getAttribute($context["thread"], "groupId", array()))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? null), "title", array()), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? null), "title", array()), "html", null, true);
                echo "</a>
          ";
            }
            // line 39
            echo "          ";
            if ($this->getAttribute($context["thread"], "lastPostTime", array())) {
                // line 40
                echo "            <span class=\"divider\">•</span>
            ";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最后回复"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? null), "user_link", array(0 => $this->getAttribute(($context["lastPostMembers"] ?? null), $this->getAttribute($context["thread"], "lastPostMemberId", array()), array(), "array"), 1 => "link-primary"), "method"), "html", null, true);
                echo "
            <span class=\"divider\">•</span>
            ";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->smarttimeFilter($this->getAttribute($context["thread"], "lastPostTime", array())), "html", null, true);
                echo "
          ";
            }
            // line 45
            echo "        </div>
      </div>
    </li>
  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 49
            echo "    <li class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无话题！"), "html", null, true);
            echo "</li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "my/learning/group/groups-threads-ul.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 51,  159 => 49,  151 => 45,  146 => 43,  139 => 41,  136 => 40,  133 => 39,  124 => 37,  121 => 36,  119 => 35,  115 => 34,  109 => 32,  105 => 31,  100 => 28,  97 => 27,  91 => 25,  88 => 24,  86 => 23,  83 => 22,  77 => 20,  74 => 19,  68 => 17,  66 => 16,  60 => 15,  44 => 10,  39 => 7,  36 => 6,  33 => 5,  30 => 4,  27 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "my/learning/group/groups-threads-ul.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/my/learning/group/groups-threads-ul.html.twig");
    }
}
