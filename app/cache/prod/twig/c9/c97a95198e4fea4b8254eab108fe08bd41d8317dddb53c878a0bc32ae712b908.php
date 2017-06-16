<?php

/* @root/src/AppBundle/Extensions/NotificationTemplate/questionRemind.tpl.html.twig */
class __TwigTemplate_e82c72f4a1e2d20e92d5d41abcb1630890768a8694a8527a3ee39263e837ccc5 extends Twig_Template
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
        echo "<li class=\"media\">
  <div class=\"pull-left\">
    <span class=\"glyphicon glyphicon-volume-down media-object\"></span>
  </div>
  <div class=\"media-body\">
    <div class=\"notification-body\">
      ";
        // line 7
        $context["data"] = $this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "content", array());
        // line 8
        echo "  \t  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程《%courseTitle%》有新问题", array("%courseTitle%" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "courseTitle", array()))), "html", null, true);
        echo "
  \t  <a href='";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_thread_show", array("courseId" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "courseId", array()), "threadId" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "threadId", array()))), "html", null, true);
        echo "' target='_blank'>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "questionTitle", array()), "html", null, true);
        echo "</a>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("，请及时回答。"), "html", null, true);
        echo "
    </div>
    <div class=\"notification-footer\">
     ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->dateformatFilter($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "createdTime", array())), "html", null, true);
        echo "  
    </div>
  </div>
</li>
";
    }

    public function getTemplateName()
    {
        return "@root/src/AppBundle/Extensions/NotificationTemplate/questionRemind.tpl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 12,  34 => 9,  29 => 8,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@root/src/AppBundle/Extensions/NotificationTemplate/questionRemind.tpl.html.twig", "/Users/yangqihua/Sites/edusoho/src/AppBundle/Extensions/NotificationTemplate/questionRemind.tpl.html.twig");
    }
}
