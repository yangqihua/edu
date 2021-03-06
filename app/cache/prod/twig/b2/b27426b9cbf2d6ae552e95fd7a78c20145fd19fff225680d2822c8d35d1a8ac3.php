<?php

/* classroom/latest-members-block.html.twig */
class __TwigTemplate_059606caffc4fd162ca5fff522f5cf6ec98962c810a3e9222b1eeeddc17c7531 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "classroom/latest-members-block.html.twig", 1);
        // line 2
        if ((isset($context["students"]) ? $context["students"] : null)) {
            // line 3
            echo "  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
      <h3 class=\"panel-title\"><i class=\"es-icon es-icon-personadd\"></i>";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("新加学员"), "html", null, true);
            echo "</h3>
    </div>
    <div class=\"panel-body\">
      <ul class=\"user-avatar-list clearfix\">
        ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["students"]) ? $context["students"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
                // line 10
                echo "          ";
                $context["user"] = $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["student"], "userId", array()), array(), "array");
                // line 11
                echo "          ";
                if (($this->getAttribute($context["loop"], "index", array()) < 16)) {
                    // line 12
                    echo "            <li>
              ";
                    // line 13
                    echo $context["web_macro"]->getuser_avatar((isset($context["user"]) ? $context["user"] : null), "", "avatar-sm", true);
                    echo "
            </li>
          ";
                }
                // line 16
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "      </ul>
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "classroom/latest-members-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 17,  66 => 16,  60 => 13,  57 => 12,  54 => 11,  51 => 10,  34 => 9,  27 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "classroom/latest-members-block.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/classroom/latest-members-block.html.twig");
    }
}
