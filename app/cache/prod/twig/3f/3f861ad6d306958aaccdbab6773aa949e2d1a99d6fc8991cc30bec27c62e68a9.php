<?php

/* es-bar/list-content/notification/notify.html.twig */
class __TwigTemplate_a7aee050799a9ade93b410ef90d90ce1e72aced313517bf5e3de313411d40b5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("es-bar/list-content/notification.html.twig", "es-bar/list-content/notification/notify.html.twig", 1);
        $this->blocks = array(
            'myMessage' => array($this, 'block_myMessage'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "es-bar/list-content/notification.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_myMessage($context, array $blocks = array())
    {
        // line 4
        echo "
  ";
        // line 5
        if ((isset($context["notifications"]) ? $context["notifications"] : null)) {
            // line 6
            echo "    ";
            $context["notificationsCount"] = 15;
            // line 7
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["notifications"]) ? $context["notifications"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
                // line 8
                echo "      ";
                $context["notificationsCount"] = $this->getAttribute($context["loop"], "length", array());
                // line 9
                echo "      ";
                $context["notification"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->renderNotification($context["notification"]);
                // line 10
                echo "      ";
                echo $this->getAttribute($context["notification"], "message", array());
                echo "
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    ";
            if (((isset($context["notificationsCount"]) ? $context["notificationsCount"] : null) >= 15)) {
                // line 13
                echo "      <li class=\"text-center\"><a class=\"link-dark\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notification");
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("更多"), "html", null, true);
                echo "<i class=\"es-icon es-icon-angledoubleright\"></i></a></li>
    ";
            }
            // line 15
            echo "  ";
        } else {
            // line 16
            echo "    <li class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无通知"), "html", null, true);
            echo "</li>
  ";
        }
    }

    public function getTemplateName()
    {
        return "es-bar/list-content/notification/notify.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 16,  91 => 15,  83 => 13,  80 => 12,  63 => 10,  60 => 9,  57 => 8,  39 => 7,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "es-bar/list-content/notification/notify.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/es-bar/list-content/notification/notify.html.twig");
    }
}
