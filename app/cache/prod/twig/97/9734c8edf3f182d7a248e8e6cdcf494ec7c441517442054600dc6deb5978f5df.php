<?php

/* classroom/content-layout.html.twig */
class __TwigTemplate_93264a2a10c02b82ed9acdbfd0394f6cb07d07c930c8d5289c9de8456ce50f77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'keywords' => array($this, 'block_keywords'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'main' => array($this, 'block_main'),
            'side' => array($this, 'block_side'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((array_key_exists("layout", $context)) ? (_twig_default_filter((isset($context["layout"]) ? $context["layout"] : null), "classroom/layout.html.twig")) : ("classroom/layout.html.twig")), "classroom/content-layout.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_keywords($context, array $blocks = array())
    {
        // line 3
        echo "  ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Classroom/Classroom:keywords", array("classroom" => (isset($context["classroom"]) ? $context["classroom"] : null))));
        echo "
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
";
        // line 8
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("marketing.tool", array("type" => "classroom", "targetId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array())));
        echo "

<div class=\"class-detail row\" id=\"detail-content\">
  <div class=\"col-lg-9 col-md-8 class-detail-main\">

    ";
        // line 13
        $this->loadTemplate("announcement/announcement-block.html.twig", "classroom/content-layout.html.twig", 13)->display(array_merge($context, array("targetId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "targetType" => "classroom")));
        // line 14
        echo "
    <section class=\"es-section\">
      ";
        // line 16
        if (array_key_exists("nav", $context)) {
            // line 17
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Classroom/Classroom:dashboard", array("classroom" => (isset($context["classroom"]) ? $context["classroom"] : null), "nav" => (isset($context["nav"]) ? $context["nav"] : null), "member" => (isset($context["member"]) ? $context["member"] : null))));
            echo "
      ";
        }
        // line 19
        echo "      <div class=\"class-detail-content\">
        ";
        // line 20
        $this->displayBlock('main', $context, $blocks);
        // line 22
        echo "      </div>
    </section>
  </div>

  <aside class=\"col-lg-3 col-md-4 class-sidebar\">
    ";
        // line 27
        $this->displayBlock('side', $context, $blocks);
        // line 39
        echo "  </aside>

  ";
        // line 41
        if ( !((array_key_exists("canLook", $context)) ? (_twig_default_filter((isset($context["canLook"]) ? $context["canLook"] : null), false)) : (false))) {
            // line 42
            echo "    <input type=\"hidden\" name=\"access-intercept-check\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_canview", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\">
    ";
            // line 43
            $this->loadTemplate("classroom-thread/access-intercept-modal.html.twig", "classroom/content-layout.html.twig", 43)->display($context);
            // line 44
            echo "  ";
        }
        // line 45
        echo "</div>

  ";
        // line 47
        $this->loadTemplate("common/weixin-share.html.twig", "classroom/content-layout.html.twig", 47)->display(array_merge($context, array("title" => $this->getAttribute(        // line 48
(isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "desc" => $this->env->getExtension('AppBundle\Twig\WebExtension')->getPurifyAndTrimHtml(strip_tags($this->getAttribute(        // line 49
(isset($context["classroom"]) ? $context["classroom"] : null), "about", array()))), "link" => $this->getAttribute($this->getAttribute(        // line 50
(isset($context["app"]) ? $context["app"] : null), "request", array()), "uri", array()), "imgUrl" => $this->env->getExtension('AppBundle\Twig\WebExtension')->getFurl($this->getAttribute(        // line 51
(isset($context["classroom"]) ? $context["classroom"] : null), "largePicture", array()), "course.png"))));
        // line 53
        echo "
  ";
        // line 54
        $this->loadTemplate("common/consult-supplier.html.twig", "classroom/content-layout.html.twig", 54)->display($context);
    }

    // line 20
    public function block_main($context, array $blocks = array())
    {
        // line 21
        echo "        ";
    }

    // line 27
    public function block_side($context, array $blocks = array())
    {
        // line 28
        echo "      ";
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->isPermitRole($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "Take", true)) {
            // line 29
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Classroom/Classroom:signPage", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))));
            echo "
      ";
        }
        // line 31
        echo "
      ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Classroom/Classroom:teachersBlock", array("classroom" => (isset($context["classroom"]) ? $context["classroom"] : null))));
        echo "

      ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Classroom/Classroom:latestMembersBlock", array("classroom" => (isset($context["classroom"]) ? $context["classroom"] : null))));
        echo "

      ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Classroom/Classroom:classroomStatusBlock", array("classroom" => (isset($context["classroom"]) ? $context["classroom"] : null))));
        echo "

    ";
    }

    public function getTemplateName()
    {
        return "classroom/content-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 36,  149 => 34,  144 => 32,  141 => 31,  135 => 29,  132 => 28,  129 => 27,  125 => 21,  122 => 20,  118 => 54,  115 => 53,  113 => 51,  112 => 50,  111 => 49,  110 => 48,  109 => 47,  105 => 45,  102 => 44,  100 => 43,  95 => 42,  93 => 41,  89 => 39,  87 => 27,  80 => 22,  78 => 20,  75 => 19,  69 => 17,  67 => 16,  63 => 14,  61 => 13,  53 => 8,  50 => 7,  47 => 6,  41 => 5,  34 => 3,  31 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "classroom/content-layout.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/classroom/content-layout.html.twig");
    }
}
