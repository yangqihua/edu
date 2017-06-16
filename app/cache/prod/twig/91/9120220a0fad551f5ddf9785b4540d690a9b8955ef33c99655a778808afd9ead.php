<?php

/* classroom/teachers-block.html.twig */
class __TwigTemplate_8dd02778e019ab94bac5b1b3b15a3ae819ef6ff8e93829735693a5b407b3ca47 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "classroom/teachers-block.html.twig", 1);
        // line 2
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/classroom/teachers/index.js"));
        // line 3
        echo "
<div class=\"panel panel-default\" id=\"class-teacher-column\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\"> 
      <i class=\"es-icon es-icon-assignmentind\"></i>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班主任"), "html", null, true);
        echo "
    </h3>
  </div>
  <div class=\"panel-body\">
    ";
        // line 11
        if ((isset($context["headTeacher"]) ? $context["headTeacher"] : null)) {
            // line 12
            echo "    <div class=\"media media-default\">
      <div class=\"media-left\">
        ";
            // line 14
            echo $context["web_macro"]->getuser_avatar((isset($context["headTeacher"]) ? $context["headTeacher"] : null), "", "avatar-md");
            echo "
      </div>
      
      <div class=\"media-body\">
        <div class=\"title\">
          ";
            // line 19
            echo $context["web_macro"]->getuser_link((isset($context["headTeacher"]) ? $context["headTeacher"] : null), "link-dark");
            echo "
        </div>
        ";
            // line 21
            if ((($this->getAttribute((isset($context["headTeacher"]) ? $context["headTeacher"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["headTeacher"]) ? $context["headTeacher"] : null), "title", array()), "")) : (""))) {
                // line 22
                echo "          <div class=\"content\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["headTeacher"]) ? $context["headTeacher"] : null), "title", array()), "html", null, true);
                echo "</div>
        ";
            } else {
                // line 24
                echo "          <div class=\"content\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("还没有头衔"), "html", null, true);
                echo "</div>
        ";
            }
            // line 26
            echo "      </div>
    </div>
    ";
        } else {
            // line 29
            echo "      <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("该%name%尚未设置班主任", array("%name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")))), "html", null, true);
            echo "</div>
    ";
        }
        // line 31
        echo "
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "classroom/teachers-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 31,  74 => 29,  69 => 26,  63 => 24,  57 => 22,  55 => 21,  50 => 19,  42 => 14,  38 => 12,  36 => 11,  29 => 7,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "classroom/teachers-block.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/classroom/teachers-block.html.twig");
    }
}
