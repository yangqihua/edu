<?php

/* courseset-manage/file/tbody-tr.html.twig */
class __TwigTemplate_080bcbfa466f1e02803820786f90aa8319861be608e4b704a9d9ee99087a76b2 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "courseset-manage/file/tbody-tr.html.twig", 1);
        // line 2
        $context["quality"] = "";
        // line 3
        if (twig_in_filter($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "type", array()), array(0 => "open", 1 => "liveOpen"))) {
            // line 4
            echo "  ";
            $context["fileShowUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_manage_file_show", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "fileId" => $this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "id", array())));
            // line 5
            echo "  ";
            $context["convertUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_manage_file_convert", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "fileId" => $this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "id", array())));
        } else {
            // line 7
            echo "  ";
            $context["fileShowUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_file_show", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "fileId" => $this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "id", array())));
            // line 8
            echo "  ";
            $context["convertUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_file_convert", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array()), "fileId" => $this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "id", array())));
        }
        // line 10
        echo "
<tr id=\"upload-file-tr-";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "id", array()), "html", null, true);
        echo "\" data-role=\"item\" data-convertHash=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "convertHash", array()), "html", null, true);
        echo "\">
  <td><input value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "id", array()), "html", null, true);
        echo "\" type=\"checkbox\" data-role=\"batch-item\" ></td>
  <td>
    <a class=\"link-dark\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["fileShowUrl"]) ? $context["fileShowUrl"] : null), "html", null, true);
        echo "\" target=\"_blank\" rel=\"tooltip\" title data-original-title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "filename", array()), "html", null, true);
        echo "\"  >
      ";
        // line 15
        if (($this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "storage", array()) == "cloud")) {
            // line 16
            echo "        <i class=\"glyphicon glyphicon-cloud color-gray\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("云文件"), "html", null, true);
            echo "\"></i>
      ";
        }
        // line 18
        echo "      ";
        echo $this->env->getExtension('AppBundle\Twig\WebExtension')->subTextFilter($this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "filename", array()), 30);
        echo "
    </a>
    ";
        // line 20
        if ((($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("developer.debug") && ($this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "storage", array()) == "cloud")) && twig_in_filter($this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "type", array()), array(0 => "video", 1 => "ppt", 2 => "document")))) {
            // line 21
            echo "      <a href=\"javascript:;\" data-url=\"";
            echo twig_escape_filter($this->env, (isset($context["convertUrl"]) ? $context["convertUrl"] : null), "html", null, true);
            echo "\" class=\"convert-file-btn ml5\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("重新转换(调试模式)"), "html", null, true);
            echo "</a>
    ";
        }
        // line 23
        echo "    <br>
  </td>
  <td>
    ";
        // line 26
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDictText("fileType", $this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "type", array()));
        echo "
  </td>
  <td>";
        // line 28
        echo $context["web_macro"]->getbytesToSize($this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "fileSize", array()));
        echo "</td>
  <td>
    ";
        // line 30
        $context["fileQuotes"] = (($this->getAttribute((isset($context["filesQuote"]) ? $context["filesQuote"] : null), $this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["filesQuote"]) ? $context["filesQuote"] : null), $this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "id", array()), array(), "array"), null)) : (null));
        // line 31
        echo "    ";
        // line 46
        echo "
    ";
        // line 48
        echo "    ";
        if ( !(isset($context["fileQuotes"]) ? $context["fileQuotes"] : null)) {
            // line 49
            echo "      <span class=\"label label-default tip\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未使用"), "html", null, true);
            echo "</span>
    ";
        } else {
            // line 51
            echo "      <span class=\"label label-success tip\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("使用中"), "html", null, true);
            echo "</span>
    ";
        }
        // line 53
        echo "  </td>
  <td>
    <span class=\"text-sm\">";
        // line 55
        echo $context["web_macro"]->getuser_link((($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "updatedUserId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "updatedUserId", array()), array(), "array"), null)) : (null)));
        echo "</span>
    <br>
    <span class=\"color-gray text-sm\">
      ";
        // line 58
        if ( !$this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "updatedTime", array())) {
            // line 59
            echo "        ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "createdTime", array()), "Y-n-d H:i"), "html", null, true);
            echo "
      ";
        } else {
            // line 61
            echo "        ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "updatedTime", array()), "Y-n-d H:i"), "html", null, true);
            echo "
      ";
        }
        // line 63
        echo "    </span>
  </td>
  <td>
    ";
        // line 66
        if ((($this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "storage", array()) == "cloud") && ($this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "type", array()) == "video"))) {
            // line 67
            echo "      ";
            if (($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "type", array()) == "open")) {
                // line 68
                echo "        ";
                $context["goto"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_manage_files", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array())));
                // line 69
                echo "      ";
            } else {
                // line 70
                echo "        ";
                $context["goto"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_files", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "id", array())));
                // line 71
                echo "      ";
            }
            // line 72
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("media_subtitle_manage", array("mediaId" => $this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "id", array()), "goto" => (isset($context["goto"]) ? $context["goto"] : null))), "html", null, true);
            echo "\">字幕管理</a>
    ";
        }
        // line 74
        echo "  </td>

</tr>
";
    }

    public function getTemplateName()
    {
        return "courseset-manage/file/tbody-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 74,  166 => 72,  163 => 71,  160 => 70,  157 => 69,  154 => 68,  151 => 67,  149 => 66,  144 => 63,  138 => 61,  132 => 59,  130 => 58,  124 => 55,  120 => 53,  114 => 51,  108 => 49,  105 => 48,  102 => 46,  100 => 31,  98 => 30,  93 => 28,  88 => 26,  83 => 23,  75 => 21,  73 => 20,  67 => 18,  61 => 16,  59 => 15,  53 => 14,  48 => 12,  42 => 11,  39 => 10,  35 => 8,  32 => 7,  28 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "courseset-manage/file/tbody-tr.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/courseset-manage/file/tbody-tr.html.twig");
    }
}
