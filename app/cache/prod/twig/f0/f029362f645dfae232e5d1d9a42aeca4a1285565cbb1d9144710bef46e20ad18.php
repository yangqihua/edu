<?php

/* group/active-member-list.html.twig */
class __TwigTemplate_e41494d2fb1e00c99ac6eaf56f8a27b0afa13d158335117c426d0d78def043f1 extends Twig_Template
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
        echo "<div class=\"panel panel-default\">
  <div class=\"panel-heading\"><h3 class=\"panel-title\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("新加组员"), "html", null, true);
        echo "</h3></div>
  <div class=\"panel-body\">
    ";
        // line 4
        if ((isset($context["activeMembers"]) ? $context["activeMembers"] : null)) {
            // line 5
            echo "      <ul class=\"user-grids\">
        ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["activeMembers"]) ? $context["activeMembers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                // line 7
                echo "          <li style=\"width:18%;\">
            ";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_avatar", array(0 => $this->getAttribute((isset($context["members"]) ? $context["members"] : null), $this->getAttribute($context["member"], "userId", array()), array(), "array"), 1 => "user-link user-avatar-link pull-left media-object media-object-small "), "method"), "html", null, true);
                echo "
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "      </ul>
    ";
        } else {
            // line 13
            echo "      ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("还没有小组成员！"), "html", null, true);
            echo "
    ";
        }
        // line 15
        echo "    <br>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "group/active-member-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 15,  52 => 13,  48 => 11,  39 => 8,  36 => 7,  32 => 6,  29 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "group/active-member-list.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/group/active-member-list.html.twig");
    }
}
