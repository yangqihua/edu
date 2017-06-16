<?php

/* classroom/service-block.html.twig */
class __TwigTemplate_8e29c3f5502e539e8db09d88a4d6f9cf806b96bb8cb631e0c2b6baade3b9c5d8 extends Twig_Template
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
        echo "<ul class=\"list-unstyled clearfix\">
  ";
        // line 2
        $context["serviceTags"] = $this->env->getExtension('AppBundle\Twig\AppExtension')->buildClassroomServiceTags(((array_key_exists("services", $context)) ? (_twig_default_filter(($context["services"] ?? null), array())) : (array())));
        // line 3
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["serviceTags"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 4
            echo "  \t<li class=\"";
            if ($this->getAttribute($context["tag"], "active", array())) {
                echo "active";
            }
            echo "\">
\t  <a 
\t  tabindex=\"0\" 
\t  role=\"button\" 
\t  data-container=\"body\" 
\t  data-toggle=\"popover\" 
\t  data-trigger=\"hover\" 
\t  data-placement=\"top\" 
\t  data-html=\"true\" 
\t  title=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["tag"], "fullName", array())), "html", null, true);
            echo " ";
            if ( !$this->getAttribute($context["tag"], "active", array())) {
                echo "<small class='color-gray'>(";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂未提供"), "html", null, true);
                echo ")</span>";
            }
            echo "\"
\t  data-content=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["tag"], "summary", array())), "html", null, true);
            echo "\">
\t  \t";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["tag"], "shortName", array())), "html", null, true);
            echo "
\t  </a>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "classroom/service-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 19,  58 => 15,  54 => 14,  44 => 13,  29 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "classroom/service-block.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/classroom/service-block.html.twig");
    }
}
