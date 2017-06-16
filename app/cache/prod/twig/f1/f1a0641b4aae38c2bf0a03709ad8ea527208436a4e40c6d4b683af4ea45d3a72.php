<?php

/* open-course-manage/media-choose.html.twig */
class __TwigTemplate_5ebeb3e1b47bb9cc858fa0582f2e1a44a106eeb8ef62f042e398371f331f5fe6 extends Twig_Template
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
        echo "<style>
  .webuploader-container {
    position: relative;
  }

  .webuploader-element-invisible {
    position: absolute !important;
    clip: rect(1px 1px 1px 1px); /* IE6, IE7 */
    clip: rect(1px, 1px, 1px, 1px);
  }

  .webuploader-pick {
    position: relative;
    display: inline-block;
    cursor: pointer;
    background: #fff;
    padding: 5px 10px;
    color: #333;
    text-align: center;
    border-radius: 3px;
    border: 1px solid #ccc;
    overflow: hidden;
  }

  .webuploader-pick-hover {
    background: #e6e6e6;
    border-color: #adadad;
  }

  .webuploader-pick-disable {
    opacity: 0.6;
    pointer-events: none;
  }

  .balloon-uploader {
    border: 1px solid #ddd;
    border-radius: 4px;
  }

  .balloon-uploader-heading {
    background-color: #f5f5f5;
    color: #333;
    padding: 10px 15px;
    border-bottom: 1px solid #ddd;
    display: none;
  }

  .balloon-uploader-footer {
    background-color: #f5f5f5;
    color: #333;
    padding: 10px 15px;
    border-top: 1px solid #ddd;
    text-align: right;
  }

  .balloon-filelist {
    width: 100%;
  }

  .balloon-filelist-heading {
    padding: 8px 10px;
    font-weight: bold;
    border-bottom: 2px solid #ddd;
  }

  .balloon-uploader-body {
    position: relative;

  }

  .balloon-filelist .file-name,
  .balloon-filelist .file-size,
  .balloon-filelist .file-status,
  .balloon-filelist .file-manage {
    position: relative;
    z-index: 1;
  }

  .balloon-filelist .file-name {
    display: inline-block;
    width: 40%;
  }

  .balloon-filelist .file-size {
    display: inline-block;
    width: 20%;
  }

  .balloon-filelist .file-status {
    display: inline-block;
    width: 18%;
  }

  .balloon-filelist .file-manage {
    display: inline-block;
    width: 20%;
    z-index: 9999;
    position: absolute;
  }

  .balloon-filelist ul {
    list-style: none;
    margin: 0;
    padding: 0;
    min-height: 100px;
    max-height: 300px;
    overflow-y: scroll;
  }

  .balloon-filelist ul li {
    position: relative;
    border-bottom: 1px solid #ddd;
    padding: 8px 10px;
  }

  .balloon-dnd {
    visibility: hidden;
  }

  .balloon-uploader-none .balloon-uploader-footer,
  .balloon-uploader-none .balloon-uploader-body {
    visibility: hidden;
  }

  .balloon-uploader-none .balloon-dnd {
    visibility: visible;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    text-align: center;
    vertical-align: middle;
  }

  .balloon-nofile {
    position: absolute;
    top: 40px;
    left: 0;
    right: 0;
    bottom: 0;
    line-height: 100px;
    text-align: center;
    color: #999;
  }

  .balloon-uploader .file-pick-btn {
    display: inline-block;
  }

  .balloon-uploader .start-upload-btn {
    position: relative;
    display: inline-block;
    cursor: pointer;
    background: #5bc0de;
    padding: 5px 10px;
    color: #fff;
    text-align: center;
    border-radius: 3px;
    border: 1px solid #46b8da;
    overflow: hidden;
  }

  .balloon-uploader .start-upload-btn:hover {
    background: #31b0d5;
    border-color: #269abc;
  }

  .balloon-filelist .file-progress {
    position: absolute;
    top: 0;
    left: 0;
    right: -40px;
    bottom: 0;
  }

  .balloon-filelist .file-progress-bar {
    background: rgb(219, 242, 215);
    background: rgba(59, 181, 33, 0.18);
    float: left;
    height: 100%;
  }

</style>

";
        // line 186
        $context["courseType"] = ((array_key_exists("courseType", $context)) ? (_twig_default_filter((isset($context["courseType"]) ? $context["courseType"] : null), "course")) : ("course"));
        // line 187
        $context["courseMaterialUrl"] = "open_course_manage_material_browser";
        // line 188
        echo "
";
        // line 189
        $context["lesson"] = ((array_key_exists("lesson", $context)) ? (_twig_default_filter((isset($context["lesson"]) ? $context["lesson"] : null), null)) : (null));
        // line 190
        echo "<div id=\"media-choosers\">

  <div class=\"file-chooser\" id=\"video-chooser\" style=\"display:none;\"
       data-targetType=\"";
        // line 193
        echo twig_escape_filter($this->env, (isset($context["targetType"]) ? $context["targetType"] : null), "html", null, true);
        echo "\"
       data-targetId=\"";
        // line 194
        echo twig_escape_filter($this->env, (isset($context["targetId"]) ? $context["targetId"] : null), "html", null, true);
        echo "\"
  >
    <div class=\"file-chooser-bar\" style=\"display:none;\">
      <span data-role=\"placeholder\"></span>
      <button class=\"btn btn-link btn-sm\" type=\"button\" data-role=\"trigger\"><i
            class=\"glyphicon glyphicon-edit\"></i> ";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编辑"), "html", null, true);
        echo "</button>
      <div class=\"alert alert-warning\" data-role=\"waiting-tip\"
           style=\"display:none;\">";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在转换视频格式，转换需要一定的时间，期间将不能播放该视频。"), "html", null, true);
        echo "<br/>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("转换完成后将以站内消息通知您。"), "html", null, true);
        echo "</div>
    </div>

    <div class=\"file-chooser-main\">
      <ul class=\"nav nav-pills nav-pills-sm mbs file-chooser-tabs\">
        <li><a class=\"file-chooser-uploader-tab\" href=\"#video-chooser-upload-pane\"
               data-toggle=\"tab\">";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("上传视频"), "html", null, true);
        echo "</a></li>
        <li>
          <a href=\"#video-chooser-disk-pane\" data-toggle=\"tab\">
            ";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("从资料库中选择"), "html", null, true);
        echo "
          </a>
        </li>

        <li>
          <a href=\"#video-chooser-course-file\" data-toggle=\"tab\">
            ";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("从课程文件中选择"), "html", null, true);
        echo "
          </a>
        </li>

        <li ";
        // line 220
        if (((isset($context["lesson"]) ? $context["lesson"] : null) && ($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "mediaSource", array()) != "self"))) {
            echo "class=\"active\"";
        }
        echo ">
          <a href=\"#video-chooser-import-pane\" data-toggle=\"tab\">";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("导入网络视频"), "html", null, true);
        echo "</a>
        </li>
      </ul>
      <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"video-chooser-upload-pane\">

          <div class=\"file-chooser-uploader\">
            ";
        // line 228
        $this->loadTemplate("cloud-file/video-quality-switcher.html.twig", "open-course-manage/media-choose.html.twig", 228)->display($context);
        // line 229
        echo "            ";
        $context["token"] = $this->env->getExtension('AppBundle\Twig\UploaderExtension')->makeUpoaderToken((isset($context["targetType"]) ? $context["targetType"] : null), (isset($context["targetId"]) ? $context["targetId"] : null), "private");
        // line 230
        echo "            <div class=\"balloon-uploader\"
                 data-init-url=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploader_init", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "\"
                 data-finish-url=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploader_finished", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "\"
                 data-upload-auth-url=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploader_auth", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "\"
                ";
        // line 234
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()) == "cloud")) {
            // line 235
            echo "                  data-accept=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->env->getExtension('AppBundle\Twig\UploaderExtension')->getUploadFileAccept((isset($context["targetType"]) ? $context["targetType"] : null), "video")), "html", null, true);
            echo "\"
                ";
        } else {
            // line 237
            echo "                  data-accept=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->env->getExtension('AppBundle\Twig\UploaderExtension')->getUploadFileAccept((isset($context["targetType"]) ? $context["targetType"] : null), "local_video")), "html", null, true);
            echo "\"
                ";
        }
        // line 239
        echo "                 data-process=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\UploaderExtension')->getProcessMode((isset($context["targetType"]) ? $context["targetType"] : null)), "html", null, true);
        echo "\"
            ></div>


            <div class=\"alert alert-info\">
              <ul>
                ";
        // line 245
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()) == "cloud")) {
            // line 246
            echo "                  <li>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("支持");
            echo "<strong>mp4, avi, flv, wmv, mov,
                      m4v</strong>";
            // line 247
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("格式的视频文件上传，文件大小不能超过<strong>2 GB</strong>。");
            echo "</li>
                  <li>";
            // line 248
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("支持");
            echo "<strong>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("断点续传");
            echo "</strong>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("（仅支持HTML5浏览器）。");
            echo "</li>
                  <li>";
            // line 249
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("视频将上传到");
            echo "
                    <strong>";
            // line 250
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("云视频服务器");
            echo "</strong>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("，上传之后会对视频进行格式转换，转换过程需要一定的时间，在这个过程中视频将无法播放。");
            echo "
                  </li>
                ";
        } else {
            // line 253
            echo "                  <li>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("支持"), "html", null, true);
            echo "<strong>mp4</strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("格式的视频文件上传，文件大小不能超过"), "html", null, true);
            echo "
                    <strong>";
            // line 254
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getUploadMaxFilesize(), "html", null, true);
            echo " </strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("。MP4文件的视频编码格式，请使用AVC(H264)编码，否则浏览器无法播放。"), "html", null, true);
            echo "
                  </li>
                  <li>
                    ";
            // line 257
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("视频将上传到"), "html", null, true);
            echo "
                    <strong>";
            // line 258
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("网站服务器"), "html", null, true);
            echo "</strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("。如需使用%Edusoho%云视频,点击", array("%Edusoho%" => $this->env->getExtension('AppBundle\Twig\WebExtension')->removeCopyright("EduSoho"))), "html", null, true);
            echo "
                    <a href=\"http://open.edusoho.com/show/cloud/video\"
                       target=\"_blank\">";
            // line 260
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("这里"), "html", null, true);
            echo "</a>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("了解详情,%Edusoho%云视频将为您提供稳定、安全、经济、便捷的视频托管服务以及优质的视频播放体验。", array("%Edusoho%" => $this->env->getExtension('AppBundle\Twig\WebExtension')->removeCopyright("EduSoho"))), "html", null, true);
            echo "
                  </li>
                ";
        }
        // line 263
        echo "              </ul>
            </div>

          </div>

        </div>
        <div class=\"tab-pane\" id=\"video-chooser-disk-pane\">
          <div id=\"file-browser-video\" data-role=\"file-browser\"
               data-base-url=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploadfile_browser", array("type" => "video", "source" => "upload")), "html", null, true);
        echo "\"
               data-default-url=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploadfile_browser", array("type" => "video", "source" => "upload")), "html", null, true);
        echo "\"
               data-my-sharing-contacts-url=\"";
        // line 273
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("material_lib_my_sharing_contacts");
        echo "\"
               data-empty=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无视频文件，请先上传。"), "html", null, true);
        echo "\">
            <div class=\"file-browser-list-container\"></div>
          </div>
        </div>

        <div class=\"tab-pane\" id=\"video-chooser-course-file\">
          <div id=\"file-browser-video\" data-role=\"course-file-browser\"
               data-url=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["courseMaterialUrl"]) ? $context["courseMaterialUrl"] : null), array("courseId" => (isset($context["targetId"]) ? $context["targetId"] : null), "type" => "video", "courseType" => (isset($context["courseType"]) ? $context["courseType"] : null))), "html", null, true);
        echo "\"
               data-empty=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无视频文件，请先上传。"), "html", null, true);
        echo "\">
          </div>
        </div>

        <div class=\"tab-pane\" id=\"video-chooser-import-pane\">
          ";
        // line 287
        if ((isset($context["lesson"]) ? $context["lesson"] : null)) {
            // line 288
            echo "            <div>原地址：";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "mediaUri", array()), "html", null, true);
            echo "</div>
          ";
        }
        // line 290
        echo "          <div class=\"input-group\">
            <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("支持优酷、腾讯、网易公开课的视频页面地址导入"), "html", null, true);
        echo "\"
                   data-role=\"import-url\">
            <span class=\"input-group-btn\">
              <button type=\"button\" class=\"btn btn-default\" data-role=\"import\"
                      data-url=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("media_video_import", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\"
                      data-loading-text=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在导入，请稍等"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("导入"), "html", null, true);
        echo "</button>
            </span>
          </div>
          <strong class=\"color-danger\">* ";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("腾讯和网易的视频不支持手机端播放"), "html", null, true);
        echo "</strong> 
        </div>
      </div>
    </div>

  </div>


  <div class=\"file-chooser\" id=\"audio-chooser\" style=\"display:none;\"
       data-targetType=\"";
        // line 308
        echo twig_escape_filter($this->env, (isset($context["targetType"]) ? $context["targetType"] : null), "html", null, true);
        echo "\"
       data-targetId=\"";
        // line 309
        echo twig_escape_filter($this->env, (isset($context["targetId"]) ? $context["targetId"] : null), "html", null, true);
        echo "\"
  >
    <div class=\"file-chooser-bar\" style=\"display:none;\">
      <span data-role=\"placeholder\"></span>
      <button class=\"btn btn-link btn-sm\" type=\"button\" data-role=\"trigger\"><i
            class=\"glyphicon glyphicon-edit\"></i> ";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编辑"), "html", null, true);
        echo "</button>
    </div>

    <div class=\"file-chooser-main\">
      <ul class=\"nav nav-pills nav-pills-sm mbs file-chooser-tabs\">
        <li><a class=\"file-chooser-uploader-tab\" href=\"#audio-chooser-upload-pane\"
               data-toggle=\"tab\">";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("上传音频"), "html", null, true);
        echo "</a></li>
        <li><a href=\"#audio-chooser-disk-pane\" data-toggle=\"tab\">
            ";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("从资料库中选择"), "html", null, true);
        echo "
          </a></li>

        <li>
          <a href=\"#audio-chooser-course-file\" data-toggle=\"tab\">
            ";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("从课程文件中选择"), "html", null, true);
        echo "
          </a>
        </li>

      </ul>
      <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"audio-chooser-upload-pane\">

          <div class=\"file-chooser-uploader\">
            ";
        // line 336
        $context["token"] = $this->env->getExtension('AppBundle\Twig\UploaderExtension')->makeUpoaderToken((isset($context["targetType"]) ? $context["targetType"] : null), (isset($context["targetId"]) ? $context["targetId"] : null), "private");
        // line 337
        echo "            <div class=\"balloon-uploader\"
                 data-init-url=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploader_init", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "\"
                 data-finish-url=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploader_finished", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "\"
                 data-upload-auth-url=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploader_auth", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "\"
                 data-accept=\"";
        // line 341
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->env->getExtension('AppBundle\Twig\UploaderExtension')->getUploadFileAccept((isset($context["targetType"]) ? $context["targetType"] : null), "audio")), "html", null, true);
        echo "\"
                 data-process=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\UploaderExtension')->getProcessMode((isset($context["targetType"]) ? $context["targetType"] : null)), "html", null, true);
        echo "\"
            >
            </div>

            <div class=\"alert alert-info\">
              <ul>
                <li>";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("支持"), "html", null, true);
        echo "<strong>mp3</strong>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("格式的音频文件上传，且文件大小不能超过"), "html", null, true);
        echo "<strong>
                    ";
        // line 349
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()) == "cloud")) {
            // line 350
            echo "                      500M
                    ";
        } else {
            // line 352
            echo "                      ";
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getUploadMaxFilesize(), "html", null, true);
            echo "
                    ";
        }
        // line 354
        echo "                  </strong>。
                </li>
                ";
        // line 356
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()) == "cloud")) {
            // line 357
            echo "                  <li>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("支持"), "html", null, true);
            echo "<strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("断点续传"), "html", null, true);
            echo "</strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("（仅支持HTML5浏览器）。"), "html", null, true);
            echo "</li>
                  <li>";
            // line 358
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("音频将上传到"), "html", null, true);
            echo "<strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("云服务器"), "html", null, true);
            echo "</strong></li>
                ";
        } else {
            // line 360
            echo "                  <li>
                    ";
            // line 361
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("音频将上传到"), "html", null, true);
            echo "
                    <strong>";
            // line 362
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("网站服务器"), "html", null, true);
            echo "</strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("，%Edusoho%点击", array("%Edusoho%" => $this->env->getExtension('AppBundle\Twig\WebExtension')->removeCopyright("如需使用EduSoho云视频,"))), "html", null, true);
            echo "
                    <a href=\"http://open.edusoho.com/show/cloud/video\"
                       target=\"_blank\">";
            // line 364
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("这里"), "html", null, true);
            echo "</a>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("了解详情。"), "html", null, true);
            echo "
                  </li>
                ";
        }
        // line 367
        echo "              </ul>
            </div>
          </div>

        </div>
        <div class=\"tab-pane\" id=\"audio-chooser-disk-pane\">
          <div id=\"file-browser-audio\" data-role=\"file-browser\"
               data-base-url=\"";
        // line 374
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploadfile_browser", array("type" => "audio"));
        echo "\"
               data-default-url=\"";
        // line 375
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploadfile_browser", array("type" => "audio", "source" => "upload")), "html", null, true);
        echo "\"
               data-my-sharing-contacts-url=\"";
        // line 376
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("material_lib_my_sharing_contacts");
        echo "\"
               data-empty=\"";
        // line 377
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无音频文件，请先上传。"), "html", null, true);
        echo "\">
            <div class=\"file-browser-list-container\"></div>
          </div>
        </div>

        <div class=\"tab-pane\" id=\"audio-chooser-course-file\">
          <div id=\"file-browser-audio\" data-role=\"course-file-browser\"
               data-url=\"";
        // line 384
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["courseMaterialUrl"]) ? $context["courseMaterialUrl"] : null), array("courseId" => (isset($context["targetId"]) ? $context["targetId"] : null), "type" => "audio", "courseType" => (isset($context["courseType"]) ? $context["courseType"] : null))), "html", null, true);
        echo "\"
               data-empty=\"";
        // line 385
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无音频文件，请先上传。"), "html", null, true);
        echo "\"></div>
        </div>

      </div>
    </div>

  </div>


  <div class=\"file-chooser\" id=\"ppt-chooser\" style=\"display:none;\"
       data-params-url=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploadfile_params", array("storage" => $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()), "targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null), "convertor" => "ppt", "lazyConvert" => 1)), "html", null, true);
        echo "\"
       data-targetType=\"";
        // line 396
        echo twig_escape_filter($this->env, (isset($context["targetType"]) ? $context["targetType"] : null), "html", null, true);
        echo "\"
       data-targetId=\"";
        // line 397
        echo twig_escape_filter($this->env, (isset($context["targetId"]) ? $context["targetId"] : null), "html", null, true);
        echo "\"
  >
    <div class=\"file-chooser-bar\" style=\"display:none;\">
      <span data-role=\"placeholder\"></span>
      <button class=\"btn btn-link btn-sm\" type=\"button\" data-role=\"trigger\"><i
            class=\"glyphicon glyphicon-edit\"></i> ";
        // line 402
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编辑"), "html", null, true);
        echo "</button>
    </div>

    <div class=\"file-chooser-main\">
      <ul class=\"nav nav-pills nav-pills-sm mbs file-chooser-tabs\">
        <li><a class=\"file-chooser-uploader-tab\" href=\"#ppt-chooser-upload-pane\" data-toggle=\"tab\">上传PPT</a></li>
        <li><a href=\"#ppt-chooser-disk-pane\" data-toggle=\"tab\">
            ";
        // line 409
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("从资料库中选择"), "html", null, true);
        echo "
          </a></li>

        <li>
          <a href=\"#ppt-chooser-course-file\" data-toggle=\"tab\">
            ";
        // line 414
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("从课程文件中选择"), "html", null, true);
        echo "
          </a>
        </li>

      </ul>
      <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"ppt-chooser-upload-pane\">

          <div class=\"file-chooser-uploader\">
            ";
        // line 423
        $context["token"] = $this->env->getExtension('AppBundle\Twig\UploaderExtension')->makeUpoaderToken((isset($context["targetType"]) ? $context["targetType"] : null), (isset($context["targetId"]) ? $context["targetId"] : null), "private");
        // line 424
        echo "            <div class=\"balloon-uploader\"
                 data-init-url=\"";
        // line 425
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploader_init", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "\"
                 data-finish-url=\"";
        // line 426
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploader_finished", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "\"
                 data-upload-auth-url=\"";
        // line 427
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploader_auth", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "\"
                 data-accept=\"";
        // line 428
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->env->getExtension('AppBundle\Twig\UploaderExtension')->getUploadFileAccept((isset($context["targetType"]) ? $context["targetType"] : null), "ppt")), "html", null, true);
        echo "\"
                 data-process=\"";
        // line 429
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\UploaderExtension')->getProcessMode((isset($context["targetType"]) ? $context["targetType"] : null)), "html", null, true);
        echo "\"
            >
            </div>

            <div class=\"alert alert-info\">
              <ul>
                <li>";
        // line 435
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("支持"), "html", null, true);
        echo "<strong>ppt, pptx</strong>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("格式的PPT文件上传，且文件大小不能超过"), "html", null, true);
        echo "<strong>100 MB</strong>。
                </li>
                <li>";
        // line 437
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("PPT将上传到"), "html", null, true);
        echo "<strong>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("云服务器"), "html", null, true);
        echo "</strong></li>
              </ul>
            </div>
          </div>

        </div>
        <div class=\"tab-pane\" id=\"ppt-chooser-disk-pane\">
          <div id=\"file-browser-ppt\" data-role=\"file-browser\"
               data-base-url=\"";
        // line 445
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploadfile_browser", array("type" => "ppt"));
        echo "\"
               data-default-url=\"";
        // line 446
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploadfile_browser", array("type" => "ppt", "source" => "upload")), "html", null, true);
        echo "\"
               data-my-sharing-contacts-url=\"";
        // line 447
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("material_lib_my_sharing_contacts");
        echo "\"
               data-empty=\"";
        // line 448
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无PPT文件，请先上传。"), "html", null, true);
        echo "\">
            <div class=\"file-browser-list-container\"></div>
          </div>
        </div>

        <div class=\"tab-pane\" id=\"ppt-chooser-course-file\">
          <div id=\"file-browser-ppt\" data-role=\"course-file-browser\"
               data-url=\"";
        // line 455
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["courseMaterialUrl"]) ? $context["courseMaterialUrl"] : null), array("courseId" => (isset($context["targetId"]) ? $context["targetId"] : null), "type" => "ppt", "courseType" => (isset($context["courseType"]) ? $context["courseType"] : null))), "html", null, true);
        echo "\"
               data-empty=\"";
        // line 456
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无PPT文件，请先上传。"), "html", null, true);
        echo "\"></div>
        </div>

      </div>
    </div>

  </div>


  <div class=\"file-chooser\" id=\"document-chooser\" style=\"display:none;\"
       data-params-url=\"";
        // line 466
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploadfile_params", array("storage" => $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()), "targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null), "convertor" => "document")), "html", null, true);
        echo "\"
       data-targetType=\"";
        // line 467
        echo twig_escape_filter($this->env, (isset($context["targetType"]) ? $context["targetType"] : null), "html", null, true);
        echo "\"
       data-targetId=\"";
        // line 468
        echo twig_escape_filter($this->env, (isset($context["targetId"]) ? $context["targetId"] : null), "html", null, true);
        echo "\"
  >
    <div class=\"file-chooser-bar\" style=\"display:none;\">
      <span data-role=\"placeholder\"></span>
      <button class=\"btn btn-link btn-sm\" type=\"button\" data-role=\"trigger\"><i
            class=\"glyphicon glyphicon-edit\"></i> ";
        // line 473
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编辑"), "html", null, true);
        echo "</button>
    </div>

    <div class=\"file-chooser-main\">
      <ul class=\"nav nav-pills nav-pills-sm mbs file-chooser-tabs\">
        <li><a class=\"file-chooser-uploader-tab\" href=\"#document-chooser-upload-pane\"
               data-toggle=\"tab\">";
        // line 479
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("上传文档"), "html", null, true);
        echo "</a></li>
        <li><a href=\"#document-chooser-disk-pane\" data-toggle=\"tab\">
            ";
        // line 481
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("从资料库中选择"), "html", null, true);
        echo "
          </a></li>

        <li>
          <a href=\"#document-chooser-course-file\" data-toggle=\"tab\">
            ";
        // line 486
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("从课程文件中选择"), "html", null, true);
        echo "
          </a>
        </li>

      </ul>
      <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"document-chooser-upload-pane\">

          <div class=\"file-chooser-uploader\">

            ";
        // line 496
        $context["token"] = $this->env->getExtension('AppBundle\Twig\UploaderExtension')->makeUpoaderToken((isset($context["targetType"]) ? $context["targetType"] : null), (isset($context["targetId"]) ? $context["targetId"] : null), "private");
        // line 497
        echo "            <div class=\"balloon-uploader\"
                 data-init-url=\"";
        // line 498
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploader_init", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "\"
                 data-finish-url=\"";
        // line 499
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploader_finished", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "\"
                 data-upload-auth-url=\"";
        // line 500
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploader_auth", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "\"
                 data-accept=\"";
        // line 501
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->env->getExtension('AppBundle\Twig\UploaderExtension')->getUploadFileAccept((isset($context["targetType"]) ? $context["targetType"] : null), "cloud_document")), "html", null, true);
        echo "\"
                 data-process=\"";
        // line 502
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\UploaderExtension')->getProcessMode((isset($context["targetType"]) ? $context["targetType"] : null)), "html", null, true);
        echo "\"></div>

            <div class=\"alert alert-info\">
              <ul>
                <li>";
        // line 506
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("支持"), "html", null, true);
        echo "<strong>pdf,doc,docx,xls,xlsx</strong>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("格式的文档上传，且文件大小不能超过"), "html", null, true);
        echo "
                  <strong>";
        // line 507
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("100 MB"), "html", null, true);
        echo "</strong>。
                </li>
                <li>";
        // line 509
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("文档将上传到"), "html", null, true);
        echo "<strong>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("云服务器"), "html", null, true);
        echo "</strong></li>
              </ul>
            </div>
          </div>

        </div>
        <div class=\"tab-pane\" id=\"document-chooser-disk-pane\">
          <div id=\"file-browser-document\" data-role=\"file-browser\"
               data-base-url=\"";
        // line 517
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploadfile_browser", array("type" => "document"));
        echo "\"
               data-default-url=\"";
        // line 518
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploadfile_browser", array("type" => "document", "source" => "upload")), "html", null, true);
        echo "\"
               data-my-sharing-contacts-url=\"";
        // line 519
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("material_lib_my_sharing_contacts");
        echo "\"
               data-empty=\"";
        // line 520
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无文档，请先上传。"), "html", null, true);
        echo "\">
            <div class=\"file-browser-list-container\"></div>
          </div>
        </div>

        <div class=\"tab-pane\" id=\"document-chooser-course-file\">
          <div id=\"file-browser-document\" data-role=\"course-file-browser\"
               data-url=\"";
        // line 527
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["courseMaterialUrl"]) ? $context["courseMaterialUrl"] : null), array("courseId" => (isset($context["targetId"]) ? $context["targetId"] : null), "type" => "document", "courseType" => (isset($context["courseType"]) ? $context["courseType"] : null))), "html", null, true);
        echo "\"
               data-empty=\"";
        // line 528
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无文档，请先上传。"), "html", null, true);
        echo "\"></div>
        </div>

      </div>
    </div>

  </div>


  <div class=\"file-chooser\" id=\"flash-chooser\" style=\"display:none;\"
       data-params-url=\"";
        // line 538
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploadfile_params", array("storage" => $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()), "targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null), "convertor" => "")), "html", null, true);
        echo "\"
       data-targetType=\"";
        // line 539
        echo twig_escape_filter($this->env, (isset($context["targetType"]) ? $context["targetType"] : null), "html", null, true);
        echo "\"
       data-targetId=\"";
        // line 540
        echo twig_escape_filter($this->env, (isset($context["targetId"]) ? $context["targetId"] : null), "html", null, true);
        echo "\"
  >
    <div class=\"file-chooser-bar\" style=\"display:none;\">
      <span data-role=\"placeholder\"></span>
      <button class=\"btn btn-link btn-sm\" type=\"button\" data-role=\"trigger\"><i
            class=\"glyphicon glyphicon-edit\"></i> ";
        // line 545
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编辑"), "html", null, true);
        echo "</button>
    </div>

    <div class=\"file-chooser-main\">
      <ul class=\"nav nav-pills nav-pills-sm mbs file-chooser-tabs\">
        <li><a class=\"file-chooser-uploader-tab\" href=\"#flash-chooser-upload-pane\"
               data-toggle=\"tab\">";
        // line 551
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("上传Flash"), "html", null, true);
        echo "</a></li>
        <li><a href=\"#flash-chooser-disk-pane\" data-toggle=\"tab\">
            ";
        // line 553
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("从资料库中选择"), "html", null, true);
        echo "
          </a></li>

        <li>
          <a href=\"#flash-chooser-course-file\" data-toggle=\"tab\">
            ";
        // line 558
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("从课程文件中选择"), "html", null, true);
        echo "
          </a>
        </li>

      </ul>
      <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"flash-chooser-upload-pane\">

          <div class=\"file-chooser-uploader\">
            ";
        // line 567
        $context["token"] = $this->env->getExtension('AppBundle\Twig\UploaderExtension')->makeUpoaderToken((isset($context["targetType"]) ? $context["targetType"] : null), (isset($context["targetId"]) ? $context["targetId"] : null), "private");
        // line 568
        echo "            <div class=\"balloon-uploader\"
                 data-init-url=\"";
        // line 569
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploader_init", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "\"
                 data-finish-url=\"";
        // line 570
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploader_finished", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "\"
                 data-upload-auth-url=\"";
        // line 571
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploader_auth", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "\"
                 data-accept=\"";
        // line 572
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->env->getExtension('AppBundle\Twig\UploaderExtension')->getUploadFileAccept((isset($context["targetType"]) ? $context["targetType"] : null), "flash")), "html", null, true);
        echo "\"
                 data-process=\"";
        // line 573
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\UploaderExtension')->getProcessMode((isset($context["targetType"]) ? $context["targetType"] : null)), "html", null, true);
        echo "\"
            ></div>


            <div class=\"alert alert-info\">
              <ul>
                <li>";
        // line 579
        echo "支持";
        echo "<strong>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("swf"), "html", null, true);
        echo "</strong>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("格式的文件上传，且文件大小不能超过"), "html", null, true);
        echo "
                  <strong>";
        // line 580
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("100 MB"), "html", null, true);
        echo "</strong>。
                </li>
                <li>";
        // line 582
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Flash将上传到"), "html", null, true);
        echo "<strong>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("云服务器"), "html", null, true);
        echo "</strong></li>
              </ul>
            </div>
          </div>

        </div>
        <div class=\"tab-pane\" id=\"flash-chooser-disk-pane\">
          <div id=\"file-browser-flash\" data-role=\"file-browser\"
               data-base-url=\"";
        // line 590
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploadfile_browser", array("type" => "flash"));
        echo "\"
               data-default-url=\"";
        // line 591
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploadfile_browser", array("type" => "flash", "source" => "upload")), "html", null, true);
        echo "\"
               data-my-sharing-contacts-url=\"";
        // line 592
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("material_lib_my_sharing_contacts");
        echo "\"
               data-empty=\"";
        // line 593
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无Flash，请先上传。"), "html", null, true);
        echo "\">
            <div class=\"file-browser-list-container\"></div>
          </div>
        </div>

        <div class=\"tab-pane\" id=\"flash-chooser-course-file\">
          <div id=\"file-browser-flash\" data-role=\"course-file-browser\"
               data-url=\"";
        // line 600
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["courseMaterialUrl"]) ? $context["courseMaterialUrl"] : null), array("courseId" => (isset($context["targetId"]) ? $context["targetId"] : null), "type" => "flash", "courseType" => (isset($context["courseType"]) ? $context["courseType"] : null))), "html", null, true);
        echo "\"
               data-empty=\"";
        // line 601
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无Flash，请先上传。"), "html", null, true);
        echo "\"></div>
        </div>

      </div>
    </div>

  </div>


</div>
";
    }

    public function getTemplateName()
    {
        return "open-course-manage/media-choose.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1076 => 601,  1072 => 600,  1062 => 593,  1058 => 592,  1054 => 591,  1050 => 590,  1037 => 582,  1032 => 580,  1024 => 579,  1015 => 573,  1011 => 572,  1007 => 571,  1003 => 570,  999 => 569,  996 => 568,  994 => 567,  982 => 558,  974 => 553,  969 => 551,  960 => 545,  952 => 540,  948 => 539,  944 => 538,  931 => 528,  927 => 527,  917 => 520,  913 => 519,  909 => 518,  905 => 517,  892 => 509,  887 => 507,  881 => 506,  874 => 502,  870 => 501,  866 => 500,  862 => 499,  858 => 498,  855 => 497,  853 => 496,  840 => 486,  832 => 481,  827 => 479,  818 => 473,  810 => 468,  806 => 467,  802 => 466,  789 => 456,  785 => 455,  775 => 448,  771 => 447,  767 => 446,  763 => 445,  750 => 437,  743 => 435,  734 => 429,  730 => 428,  726 => 427,  722 => 426,  718 => 425,  715 => 424,  713 => 423,  701 => 414,  693 => 409,  683 => 402,  675 => 397,  671 => 396,  667 => 395,  654 => 385,  650 => 384,  640 => 377,  636 => 376,  632 => 375,  628 => 374,  619 => 367,  611 => 364,  604 => 362,  600 => 361,  597 => 360,  590 => 358,  581 => 357,  579 => 356,  575 => 354,  569 => 352,  565 => 350,  563 => 349,  557 => 348,  548 => 342,  544 => 341,  540 => 340,  536 => 339,  532 => 338,  529 => 337,  527 => 336,  515 => 327,  507 => 322,  502 => 320,  493 => 314,  485 => 309,  481 => 308,  469 => 299,  461 => 296,  457 => 295,  450 => 291,  447 => 290,  441 => 288,  439 => 287,  431 => 282,  427 => 281,  417 => 274,  413 => 273,  409 => 272,  405 => 271,  395 => 263,  387 => 260,  380 => 258,  376 => 257,  368 => 254,  361 => 253,  353 => 250,  349 => 249,  341 => 248,  337 => 247,  332 => 246,  330 => 245,  320 => 239,  314 => 237,  308 => 235,  306 => 234,  302 => 233,  298 => 232,  294 => 231,  291 => 230,  288 => 229,  286 => 228,  276 => 221,  270 => 220,  263 => 216,  254 => 210,  248 => 207,  237 => 201,  232 => 199,  224 => 194,  220 => 193,  215 => 190,  213 => 189,  210 => 188,  208 => 187,  206 => 186,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "open-course-manage/media-choose.html.twig", "/Users/yangqihua/Sites/edusoho/app/Resources/views/open-course-manage/media-choose.html.twig");
    }
}
