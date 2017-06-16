<?php

/* attachment/form-fields.html.twig */
class __TwigTemplate_fbf257f997dd9e32d0385359d15d0beccd6a4d1eca1c4676982b0a972b5df87d extends Twig_Template
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
        if ((($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("cloud_attachment.enable") && $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting(("cloud_attachment." . (isset($context["target"]) ? $context["target"] : null)))) && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.upload_mode") == "cloud"))) {
            // line 2
            echo "  
  ";
            // line 3
            $context["ids_class"] = ((((isset($context["useType"]) ? $context["useType"] : null) == true)) ? (("js-attachment-ids-" . (isset($context["fileType"]) ? $context["fileType"] : null))) : ("js-attachment-ids"));
            // line 4
            echo "  ";
            $context["list_class"] = ((((isset($context["useType"]) ? $context["useType"] : null) == true)) ? (("js-attachment-list-" . (isset($context["fileType"]) ? $context["fileType"] : null))) : ("js-attachment-list"));
            // line 5
            echo "  ";
            $context["reupload"] = twig_length_filter($this->env, ((array_key_exists("attachments", $context)) ? (_twig_default_filter((isset($context["attachments"]) ? $context["attachments"] : null), null)) : (null)));
            // line 6
            echo "  
  ";
            // line 7
            $this->env->getExtension('AppBundle\Twig\WebExtension')->loadScript("topxiawebbundle/controller/attachment/upload-form");
            // line 8
            echo "
  ";
            // line 9
            if ((((array_key_exists("bundle_namespace", $context)) ? (_twig_default_filter((isset($context["bundle_namespace"]) ? $context["bundle_namespace"] : null), null)) : (null)) == "admin")) {
                // line 10
                echo "    ";
                $this->loadTemplate("seajs_loader_compatible.html.twig", "attachment/form-fields.html.twig", 10)->display(array_merge($context, array("topxiaadminbundle" => true)));
                // line 11
                echo "  ";
            } else {
                // line 12
                echo "    ";
                $this->loadTemplate("seajs_loader_compatible.html.twig", "attachment/form-fields.html.twig", 12)->display(array_merge($context, array("topxiawebbundle" => true)));
                // line 13
                echo "  ";
            }
            echo "  
  
  <div class=\"form-group\">
    ";
            // line 16
            if (((array_key_exists("showLabel", $context)) ? (_twig_default_filter((isset($context["showLabel"]) ? $context["showLabel"] : null), false)) : (false))) {
                // line 17
                echo "      <label class=\"col-xs-2 control-label\" for=\"thread_title\">";
                if (((isset($context["targetType"]) ? $context["targetType"] : null) == "question.stem")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("题干附件"), "html", null, true);
                } elseif (((isset($context["targetType"]) ? $context["targetType"] : null) == "question.analysis")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("解析附件"), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("附件"), "html", null, true);
                }
                echo "</label>
      <div class=\"col-xs-7 controls\">
    ";
            } else {
                // line 20
                echo "      <div class=\"controls\"> 
    ";
            }
            // line 22
            echo "      <div class=\"js-attachment-list ";
            echo twig_escape_filter($this->env, (isset($context["list_class"]) ? $context["list_class"] : null), "html", null, true);
            echo "\" style=\"line-height:60px\">
        ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attachments"]) ? $context["attachments"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                if ($this->getAttribute($context["attachment"], "file", array())) {
                    // line 24
                    echo "          <div class=\"well well-sm\">
            <img class=\"mrm\" src=\"";
                    // line 25
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("assets/img/default/cloud_" . $this->getAttribute($this->getAttribute($context["attachment"], "file", array()), "type", array())) . ".png")), "html", null, true);
                    echo "\" height=\"60px\" width=\"107px\">
            ";
                    // line 26
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["attachment"], "file", array()), "filename", array()), "html", null, true);
                    echo "
            <button class=\"btn btn-link js-attachment-delete pull-right\" data-url=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("attachment_delete", array("id" => $this->getAttribute($context["attachment"], "id", array()))), "html", null, true);
                    echo "\" type=\"button\" style=\"margin-top:13px\" data-role=\"delte-item\" data-loading-text=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在删除..."), "html", null, true);
                    echo "\">删除</button> 
            <a class=\"btn btn-link pull-right\" style=\"margin-top:13px\" href=\"";
                    // line 28
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("attachment_preview", array("id" => $this->getAttribute($context["attachment"], "id", array()))), "html", null, true);
                    echo "\" target=\"_blank\">预览</a>
          </div>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "      </div>
      
      <a class=\"btn btn-primary js-upload-file\" ";
            // line 33
            if ((isset($context["reupload"]) ? $context["reupload"] : null)) {
                echo "style=\"display: none;\"";
            }
            echo " data-toggle=\"modal\" data-backdrop=\"static\"
         data-target=\"#attachment-modal\"
         data-url=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("attachment_upload", array("useSeajs" => ((array_key_exists("useSeajs", $context)) ? (_twig_default_filter((isset($context["useSeajs"]) ? $context["useSeajs"] : null), false)) : (false)), "idsClass" => (isset($context["ids_class"]) ? $context["ids_class"] : null), "listClass" => (isset($context["list_class"]) ? $context["list_class"] : null), "token" => $this->env->getExtension('AppBundle\Twig\UploaderExtension')->makeUpoaderToken("attachment", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()), "private"))), "html", null, true);
            echo "\"
         title=\"上传附件\" data-placement=\"bottom\" data-title=\"上传附件\">
         上传附件
      </a>
    </div>
    ";
            // line 41
            echo "    
    <input class=\"";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["ids_class"]) ? $context["ids_class"] : null), "html", null, true);
            echo "\" 
      value=\"";
            // line 43
            echo twig_escape_filter($this->env, twig_join_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->arrayColumn((isset($context["attachments"]) ? $context["attachments"] : null), "fileId"), ","), "html", null, true);
            echo "\" 
      name=\"";
            // line 44
            if (((array_key_exists("useType", $context)) ? (_twig_default_filter((isset($context["useType"]) ? $context["useType"] : null), false)) : (false))) {
                echo " attachment[";
                echo twig_escape_filter($this->env, (isset($context["fileType"]) ? $context["fileType"] : null), "html", null, true);
                echo "][fileIds] ";
            } else {
                echo " attachment[fileIds]";
            }
            echo "\" 
      type=\"hidden\" data-role=\"fileId\">

    <input class=\"js-file-target-type\" 
      value=\"";
            // line 48
            echo twig_escape_filter($this->env, (isset($context["targetType"]) ? $context["targetType"] : null), "html", null, true);
            echo "\" 
      name=\"";
            // line 49
            if (((array_key_exists("useType", $context)) ? (_twig_default_filter((isset($context["useType"]) ? $context["useType"] : null), false)) : (false))) {
                echo " attachment[";
                echo twig_escape_filter($this->env, (isset($context["fileType"]) ? $context["fileType"] : null), "html", null, true);
                echo "][targetType] ";
            } else {
                echo " attachment[targetType]";
            }
            echo "\"
      type=\"hidden\">

    <input class=\"js-file-type\" 
      value=\"";
            // line 53
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
            echo "\" 
      name=\"";
            // line 54
            if (((array_key_exists("useType", $context)) ? (_twig_default_filter((isset($context["useType"]) ? $context["useType"] : null), false)) : (false))) {
                echo " attachment[";
                echo twig_escape_filter($this->env, (isset($context["fileType"]) ? $context["fileType"] : null), "html", null, true);
                echo "][type] ";
            } else {
                echo " attachment[type]";
            }
            echo "\"
      type=\"hidden\">
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "attachment/form-fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 54,  174 => 53,  161 => 49,  157 => 48,  144 => 44,  140 => 43,  136 => 42,  133 => 41,  125 => 35,  118 => 33,  114 => 31,  104 => 28,  98 => 27,  94 => 26,  90 => 25,  87 => 24,  82 => 23,  77 => 22,  73 => 20,  60 => 17,  58 => 16,  51 => 13,  48 => 12,  45 => 11,  42 => 10,  40 => 9,  37 => 8,  35 => 7,  32 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "attachment/form-fields.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/attachment/form-fields.html.twig");
    }
}
