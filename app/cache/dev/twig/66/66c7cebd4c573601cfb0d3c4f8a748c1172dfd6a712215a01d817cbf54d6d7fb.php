<?php

/* default/footer-link.html.twig */
class __TwigTemplate_dac3a7d3d23bcb0eeb0fcfc169e16274b3d91e62c14e88c38d3dcfcb22d8bbe5 extends Twig_Template
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
        $__internal_657e2eab870609d59d5a826665dab3e6934ad52b88cf97ee49e7c1a721683c6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_657e2eab870609d59d5a826665dab3e6934ad52b88cf97ee49e7c1a721683c6c->enter($__internal_657e2eab870609d59d5a826665dab3e6934ad52b88cf97ee49e7c1a721683c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/footer-link.html.twig"));

        // line 1
        echo "<div class=\"es-footer-link\">
  <div class=\"container\">
    <div class=\"row\">
      ";
        // line 4
        echo $this->env->getExtension('AppBundle\Twig\BlockExtension')->showBlock("jianmo:bottom_info");
        echo "
    </div>
  </div>
</div>";
        
        $__internal_657e2eab870609d59d5a826665dab3e6934ad52b88cf97ee49e7c1a721683c6c->leave($__internal_657e2eab870609d59d5a826665dab3e6934ad52b88cf97ee49e7c1a721683c6c_prof);

    }

    public function getTemplateName()
    {
        return "default/footer-link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"es-footer-link\">
  <div class=\"container\">
    <div class=\"row\">
      {{ block_show('jianmo:bottom_info') }}
    </div>
  </div>
</div>", "default/footer-link.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/default/footer-link.html.twig");
    }
}
