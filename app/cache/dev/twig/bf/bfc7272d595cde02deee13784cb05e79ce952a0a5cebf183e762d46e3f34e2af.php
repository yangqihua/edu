<?php

/* default/index.html.twig */
class __TwigTemplate_b41b263221bed03c36a324dd935b84aaf22d7caec7ffe611e293c5b365c1329f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'full_content' => array($this, 'block_full_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d806627558cb9a393caeeb3fbc5250835140e02a3ef924c55d1c5d0f635362ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d806627558cb9a393caeeb3fbc5250835140e02a3ef924c55d1c5d0f635362ba->enter($__internal_d806627558cb9a393caeeb3fbc5250835140e02a3ef924c55d1c5d0f635362ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        // line 6
        $context["appDownload"] = (( !((array_key_exists("custom", $context)) ? (_twig_default_filter(($context["custom"] ?? $this->getContext($context, "custom")), 0)) : (0)) && $this->env->getExtension('AppBundle\Twig\WebExtension')->isESCopyright()) && $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("mobile.enabled", null));
        // line 7
        if (($context["appDownload"] ?? $this->getContext($context, "appDownload"))) {
            // line 8
            $context["bodyClass"] = "homepage has-app";
        } else {
            // line 10
            $context["bodyClass"] = "homepage";
        }
        // line 12
        $context["siteNav"] = "/";
        // line 13
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/echo-js.js", 1 => "app/js/index/index.js"));
        // line 14
        $context["_target_path"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        // line 16
        $context["currentTheme"] = $this->env->getExtension('AppBundle\Twig\ThemeExtension')->getCurrentTheme();
        // line 17
        $context["themeConfig"] = ((((array_key_exists("isEditColor", $context)) ? (_twig_default_filter(($context["isEditColor"] ?? $this->getContext($context, "isEditColor")), false)) : (false))) ? ($this->getAttribute(($context["currentTheme"] ?? $this->getContext($context, "currentTheme")), "config", array())) : ($this->getAttribute(($context["currentTheme"] ?? $this->getContext($context, "currentTheme")), "confirmConfig", array())));
        // line 18
        $context["allConfig"] = $this->getAttribute(($context["currentTheme"] ?? $this->getContext($context, "currentTheme")), "allConfig", array());
        // line 20
        $context["isIndex"] = true;
        // line 21
        $context["consultDisplay"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d806627558cb9a393caeeb3fbc5250835140e02a3ef924c55d1c5d0f635362ba->leave($__internal_d806627558cb9a393caeeb3fbc5250835140e02a3ef924c55d1c5d0f635362ba_prof);

    }

    // line 3
    public function block_keywords($context, array $blocks = array())
    {
        $__internal_9a85229881f65859402d354a0e567b4f2d59ea992001720b7c8b96cc08bb3d6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a85229881f65859402d354a0e567b4f2d59ea992001720b7c8b96cc08bb3d6f->enter($__internal_9a85229881f65859402d354a0e567b4f2d59ea992001720b7c8b96cc08bb3d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.seo_keywords"), "html", null, true);
        
        $__internal_9a85229881f65859402d354a0e567b4f2d59ea992001720b7c8b96cc08bb3d6f->leave($__internal_9a85229881f65859402d354a0e567b4f2d59ea992001720b7c8b96cc08bb3d6f_prof);

    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        $__internal_53ed03564f4fe2abc8d90f8ac0a1da6ed61e2340fbf21702a544604465cfff0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53ed03564f4fe2abc8d90f8ac0a1da6ed61e2340fbf21702a544604465cfff0d->enter($__internal_53ed03564f4fe2abc8d90f8ac0a1da6ed61e2340fbf21702a544604465cfff0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.seo_description"), "html", null, true);
        
        $__internal_53ed03564f4fe2abc8d90f8ac0a1da6ed61e2340fbf21702a544604465cfff0d->leave($__internal_53ed03564f4fe2abc8d90f8ac0a1da6ed61e2340fbf21702a544604465cfff0d_prof);

    }

    // line 23
    public function block_full_content($context, array $blocks = array())
    {
        $__internal_767d894c311bebac8d0cc594b97ad3d5ea9a294ad2a92565c3bdebe4a4fa5751 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_767d894c311bebac8d0cc594b97ad3d5ea9a294ad2a92565c3bdebe4a4fa5751->enter($__internal_767d894c311bebac8d0cc594b97ad3d5ea9a294ad2a92565c3bdebe4a4fa5751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "full_content"));

        // line 24
        echo "  ";
        if (($context["appDownload"] ?? $this->getContext($context, "appDownload"))) {
            // line 25
            echo "    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Default:appDownload"));
            echo "
  ";
        }
        // line 27
        echo "
  ";
        // line 28
        $asm89CacheStrategy1 = $this->env->getExtension('Asm89\Twig\CacheExtension\Extension')->getCacheStrategy();
        $asm89Key1 = $asm89CacheStrategy1->generateKey("jianmo/home/top/banner", 600        );
        $asm89CacheBody1 = $asm89CacheStrategy1->fetchBlock($asm89Key1);
        if ($asm89CacheBody1 === false) {
            ob_start();
                // line 29
                echo "    ";
                echo $this->env->getExtension('AppBundle\Twig\BlockExtension')->showBlock("jianmo:home_top_banner");
                echo "
  ";
            
            $asm89CacheBody1 = ob_get_clean();
            $asm89CacheStrategy1->saveBlock($asm89Key1, $asm89CacheBody1);
        }
        echo $asm89CacheBody1;
        // line 31
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute($this->getAttribute(($context["themeConfig"] ?? null), "blocks", array(), "any", false, true), "left", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["themeConfig"] ?? null), "blocks", array(), "any", false, true), "left", array()), array())) : (array())));
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
        foreach ($context['_seq'] as $context["_key"] => $context["config"]) {
            // line 32
            echo "
    ";
            // line 33
            $context["code"] = $this->getAttribute($context["config"], "code", array());
            // line 34
            echo "    ";
            if ((((($this->getAttribute($context["config"], "sortName", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["config"], "sortName", array()), "")) : ("")) == "recommended") && (($context["code"] ?? $this->getContext($context, "code")) == "category-course"))) {
                // line 35
                echo "      ";
                $context["code"] = "recommend-course";
                // line 36
                echo "    ";
            }
            // line 37
            echo "
    ";
            // line 38
            $context["category"] = (((($this->getAttribute($context["config"], "categoryId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["config"], "categoryId", array()), 0)) : (0))) ? ($this->env->getExtension('AppBundle\Twig\DataExtension')->getData("Category", array("categoryId" => $this->getAttribute($context["config"], "categoryId", array())))) : (null));
            // line 39
            echo "    ";
            if ((($context["code"] ?? $this->getContext($context, "code")) == "friend-link")) {
                // line 40
                echo "      ";
                $this->loadTemplate((("default/" . ($context["code"] ?? $this->getContext($context, "code"))) . ".html.twig"), "default/index.html.twig", 40)->display(array_merge($context, array("friendlyLinks" => ($context["friendlyLinks"] ?? $this->getContext($context, "friendlyLinks")))));
                // line 41
                echo "    ";
            } elseif ((($context["code"] ?? $this->getContext($context, "code")) != "footer-link")) {
                // line 42
                echo "      ";
                if ((($context["code"] ?? $this->getContext($context, "code")) != "course-grid-with-condition-index")) {
                    // line 43
                    echo "        ";
                    $asm89CacheStrategy2 = $this->env->getExtension('Asm89\Twig\CacheExtension\Extension')->getCacheStrategy();
                    $asm89Key2 = $asm89CacheStrategy2->generateKey(("jianmo/default/" . ($context["code"] ?? $this->getContext($context, "code"))), 600                    );
                    $asm89CacheBody2 = $asm89CacheStrategy2->fetchBlock($asm89Key2);
                    if ($asm89CacheBody2 === false) {
                        ob_start();
                            // line 44
                            echo "        ";
                            $this->loadTemplate((("default/" . ($context["code"] ?? $this->getContext($context, "code"))) . ".html.twig"), "default/index.html.twig", 44)->display(array_merge($context, array("config" => $context["config"], "category" => ($context["category"] ?? $this->getContext($context, "category")))));
                            // line 45
                            echo "        ";
                        
                        $asm89CacheBody2 = ob_get_clean();
                        $asm89CacheStrategy2->saveBlock($asm89Key2, $asm89CacheBody2);
                    }
                    echo $asm89CacheBody2;
                    // line 46
                    echo "      ";
                } else {
                    // line 47
                    echo "        ";
                    $this->loadTemplate((("default/" . ($context["code"] ?? $this->getContext($context, "code"))) . ".html.twig"), "default/index.html.twig", 47)->display(array_merge($context, array("config" => $context["config"], "category" => ($context["category"] ?? $this->getContext($context, "category")))));
                    // line 48
                    echo "      ";
                }
                // line 49
                echo "    ";
            }
            // line 50
            echo "  ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
  ";
        // line 52
        $this->loadTemplate("mobile/footer-tool-bar.html.twig", "default/index.html.twig", 52)->display(array_merge($context, array("mobile_tool_bar" => "index")));
        
        $__internal_767d894c311bebac8d0cc594b97ad3d5ea9a294ad2a92565c3bdebe4a4fa5751->leave($__internal_767d894c311bebac8d0cc594b97ad3d5ea9a294ad2a92565c3bdebe4a4fa5751_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 52,  213 => 51,  199 => 50,  196 => 49,  193 => 48,  190 => 47,  187 => 46,  180 => 45,  177 => 44,  170 => 43,  167 => 42,  164 => 41,  161 => 40,  158 => 39,  156 => 38,  153 => 37,  150 => 36,  147 => 35,  144 => 34,  142 => 33,  139 => 32,  121 => 31,  111 => 29,  105 => 28,  102 => 27,  96 => 25,  93 => 24,  87 => 23,  75 => 4,  63 => 3,  56 => 1,  54 => 21,  52 => 20,  50 => 18,  48 => 17,  46 => 16,  44 => 14,  42 => 13,  40 => 12,  37 => 10,  34 => 8,  32 => 7,  30 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block keywords %}{{ setting('site.seo_keywords') }}{% endblock %}
{% block description %}{{ setting('site.seo_description') }}{% endblock %}

{% set appDownload = ( not custom|default(0) ) and is_ES_copyright() and setting('mobile.enabled', null)%}
{% if appDownload %}
  {% set bodyClass = 'homepage has-app' %}
{% else %}
  {% set bodyClass = 'homepage' %}
{% endif %}
{% set siteNav = '/' %}
{% do script(['libs/echo-js.js','app/js/index/index.js']) %}
{% set _target_path = path('homepage') %}

{% set currentTheme = current_theme() %}
{% set themeConfig = isEditColor|default(false) ? currentTheme.config : currentTheme.confirmConfig %}
{% set allConfig = currentTheme.allConfig %}

{% set isIndex = true %}
{% set consultDisplay = true %}

{% block full_content %}
  {% if appDownload  %}
    {{ render(controller('AppBundle:Default:appDownload')) }}
  {% endif %}

  {% cache 'jianmo/home/top/banner' 600 %}
    {{ block_show('jianmo:home_top_banner') }}
  {% endcache %}
  {% for config in themeConfig.blocks.left|default([]) %}

    {% set code = config.code %}
    {% if config.sortName|default('') == 'recommended' and code == 'category-course' %}
      {% set code = 'recommend-course' %}
    {% endif %}

    {% set category = config.categoryId|default(0) ? data('Category', {categoryId: config.categoryId})  : null %}
    {% if code == 'friend-link' %}
      {% include 'default/' ~ code ~ '.html.twig' with {friendlyLinks:friendlyLinks} %}
    {% elseif code != 'footer-link' %}
      {% if code != 'course-grid-with-condition-index' %}
        {% cache 'jianmo/default/' ~ code 600 %}
        {% include 'default/' ~ code ~ '.html.twig' with {config:config, category: category} %}
        {% endcache %}
      {% else %}
        {% include 'default/' ~ code ~ '.html.twig' with {config:config, category: category} %}
      {% endif %}
    {% endif %}
  {% endfor %}

  {% include 'mobile/footer-tool-bar.html.twig' with { mobile_tool_bar: 'index' } %}
{% endblock %}", "default/index.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/default/index.html.twig");
    }
}
