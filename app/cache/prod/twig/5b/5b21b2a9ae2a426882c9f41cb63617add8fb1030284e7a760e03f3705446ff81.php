<?php

/* article/part/list-header.html.twig */
class __TwigTemplate_c9e2e94761f38b6749c66184f0424a75f7ed91ab24fef3f69ad8cc78d2d04646 extends Twig_Template
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
        if (( !($context["featuredArticles"] ?? null) &&  !($context["promotedArticles"] ?? null))) {
            // line 2
            echo "  ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 3
                echo "    <div class=\"alert alert-warning\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("头条大图轮播功能需先在后台资讯管理页面设置缩略图以及添加头条属性"), "html", null, true);
                echo "<a class=\"mls alert-link\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("前往设置"), "html", null, true);
                echo "</a></div>
  ";
            }
        } else {
            // line 6
            echo "  <div class=\"article-list-header mbl row\">
    <!-- 轮播图 -->
    <div class=\"aricle-carousel col-md-8\">
      <div class=\"swiper-container\">
        <div class=\"swiper-wrapper\">
          ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["featuredArticles"] ?? null));
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
            foreach ($context['_seq'] as $context["index"] => $context["featuredArticle"]) {
                // line 12
                echo "          <div class=\"swiper-slide ";
                if (($this->getAttribute($context["loop"], "index", array()) > 1)) {
                    echo " swiper-hidden ";
                }
                echo "\">
            <a href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_detail", array("id" => $this->getAttribute($context["featuredArticle"], "id", array()))), "html", null, true);
                echo "\">
              ";
                // line 14
                if ($this->getAttribute($context["featuredArticle"], "thumb", array())) {
                    // line 15
                    echo "                <img class=\"img-responsive\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute($context["featuredArticle"], "thumb", array()), ""), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["featuredArticle"], "title", array()), "html", null, true);
                    echo "\">
              ";
                } else {
                    // line 17
                    echo "                <img class=\"img-responsive\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("assets/v2/img/article/article_banner_" . $this->getAttribute($context["loop"], "index", array())) . ".jpg")), "html", null, true);
                    echo "\"  alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["featuredArticle"], "title", array()), "html", null, true);
                    echo "\">
              ";
                }
                // line 19
                echo "              <div class=\"swiper-cat\">";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["featuredCategories"] ?? null), $this->getAttribute($context["featuredArticle"], "id", array(), "array"), array(), "array", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["featuredCategories"] ?? null), $this->getAttribute($context["featuredArticle"], "id", array(), "array"), array(), "array", false, true), "name", array()))) : ("")), "html", null, true);
                echo "</div>
              <div class=\"swiper-caption\">";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["featuredArticle"], "title", array()), "html", null, true);
                echo "</div>
              <div class=\"image-overlay\"></div>
            </a>
          </div>
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
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['featuredArticle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "        </div>
        <div class=\"swiper-pager\"></div>
      </div>
    </div>
    <div class=\"col-md-4 hidden-sm hidden-xs\">
      ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["promotedArticles"] ?? null));
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
            foreach ($context['_seq'] as $context["index"] => $context["promotedArticle"]) {
                // line 31
                echo "      <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_detail", array("id" => $this->getAttribute($context["promotedArticle"], "id", array()))), "html", null, true);
                echo "\" class=\"topic-post-small\"
        ";
                // line 32
                if (($this->getAttribute($context["loop"], "index", array()) > 1)) {
                    echo "style=\"margin-top:12px;\"";
                }
                echo ">
        ";
                // line 33
                if ($this->getAttribute($context["promotedArticle"], "thumb", array())) {
                    // line 34
                    echo "          <img class=\"img-responsive\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute($context["promotedArticle"], "thumb", array()), ""), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["promotedArticle"], "title", array()), "html", null, true);
                    echo "\">
        ";
                } else {
                    // line 36
                    echo "          <img class=\"img-responsive\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("assets/v2/img/article/article_banner_" . (8 - $this->getAttribute($context["loop"], "index", array()))) . ".jpg")), "html", null, true);
                    echo "\"  alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["promotedArticle"], "title", array()), "html", null, true);
                    echo "\">
        ";
                }
                // line 38
                echo "        <div class=\"content\">
          <p>";
                // line 39
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["promotedCategories"] ?? null), $this->getAttribute($context["promotedArticle"], "id", array(), "array"), array(), "array", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["promotedCategories"] ?? null), $this->getAttribute($context["promotedArticle"], "id", array(), "array"), array(), "array", false, true), "name", array()), "")) : ("")), "html", null, true);
                echo "</p>
          <h4 class=\"title\">";
                // line 40
                echo $this->env->getExtension('AppBundle\Twig\WebExtension')->plainTextFilter($this->getAttribute($context["promotedArticle"], "title", array()), 125);
                echo "</h4>
        </div>
        <div class=\"image-overlay\"></div>
      </a>
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
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['promotedArticle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "article/part/list-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 45,  172 => 40,  168 => 39,  165 => 38,  157 => 36,  149 => 34,  147 => 33,  141 => 32,  136 => 31,  119 => 30,  112 => 25,  93 => 20,  88 => 19,  80 => 17,  72 => 15,  70 => 14,  66 => 13,  59 => 12,  42 => 11,  35 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "article/part/list-header.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/article/part/list-header.html.twig");
    }
}
