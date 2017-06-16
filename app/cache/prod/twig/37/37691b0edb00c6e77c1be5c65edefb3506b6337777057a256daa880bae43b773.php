<?php

/* announcement/announcement-block.html.twig */
class __TwigTemplate_0361d4f1af93e41a41f52686d1179c8338225a171020045092c187ad6ad64183 extends Twig_Template
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
        $asm89CacheStrategy1 = $this->env->getExtension('Asm89\Twig\CacheExtension\Extension')->getCacheStrategy();
        $asm89Key1 = $asm89CacheStrategy1->generateKey(((("announcements-block/targetType/" . (isset($context["targetType"]) ? $context["targetType"] : null)) . "/targetId/") . (isset($context["targetId"]) ? $context["targetId"] : null)), 600        );
        $asm89CacheBody1 = $asm89CacheStrategy1->fetchBlock($asm89Key1);
        if ($asm89CacheBody1 === false) {
            ob_start();
                // line 2
                echo "  ";
                $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/announcement/announcement-swiper-slide/index.js"));
                // line 3
                echo "  ";
                $context["announcements"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("Announcements", array("targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null), "count" => 10));
                // line 4
                echo "  ";
                if ((isset($context["announcements"]) ? $context["announcements"] : null)) {
                    // line 5
                    echo "
    <div class=\"alert alert-warning announcements aside-notice\" role=\"alert\">
      <div class=\"swiper-container\">
        <div class=\"swiper-wrapper\">
        ";
                    // line 9
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["announcements"]) ? $context["announcements"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["announcement"]) {
                        // line 10
                        echo "          <div class=\"swiper-slide\">
            <a style=\"color:#ff5e06\" class=\"alert-link\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                        // line 11
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("announcement_show", array("id" => $this->getAttribute($context["announcement"], "id", array()), "targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null))), "html", null, true);
                        echo "\" >
            <i class=\"es-icon es-icon-infooutline\"></i>
            ";
                        // line 13
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->subTextFilter($this->getAttribute($context["announcement"], "content", array()), 40), "<span class=\"text-warning\">(请点击查看)</span>"));
                        echo "</a>
          </div>
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['announcement'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 16
                    echo "        </div>
      </div>
    </div>
  ";
                }
            
            $asm89CacheBody1 = ob_get_clean();
            $asm89CacheStrategy1->saveBlock($asm89Key1, $asm89CacheBody1);
        }
        echo $asm89CacheBody1;
        // line 21
        echo "





";
    }

    public function getTemplateName()
    {
        return "announcement/announcement-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 21,  61 => 16,  52 => 13,  47 => 11,  44 => 10,  40 => 9,  34 => 5,  31 => 4,  28 => 3,  25 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "announcement/announcement-block.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/announcement/announcement-block.html.twig");
    }
}
