<?php

/* SiteCartronBundle:Default:index.html.twig */
class __TwigTemplate_61992153b29db4adc5dec88c9a9e4b64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SiteCartronBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SiteCartronBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "JOSEPH CARTRON";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "

<script type=\"text/javascript\">
    \$(function() 
    {
    \t
    \tnew cartron.Responsive({'\$container':\$('#home'), 'offset':102})
    \t
        \$('#liste-news').jcarousel({ scroll: 2 });

        var myPlayer = _V_(\"example_video_1\");

        \$('.pop-videos-content .close').click(function(){ myPlayer.pause() });

        var w = \$(window).width();
        if (w > 1280)
            \$('#home .main').css('background-image', 'url(";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/images/bg-main-hp2.jpg"), "html", null, true);
        echo ")');

    });
    </script>
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/css/video-js.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/js/video.js"), "html", null, true);
        echo "\"></script>
    <div id=\"home\">
        <div class=\"main\">

        </div>
    </div>

    <div class=\"caroussel-home\">
        <div class=\"video-news-home\">
            <div class=\"video-home\">
                <a href=\"#0\" class=\"voir-video lanch_video\" onclick=\"return false\"><img  src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/images/img-video-home.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
                <div class=\"txt-video-news-home\">
                    <h2><a href=\"#\" class=\"lanch_video\"><span id=\"s_vd\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Vidéo"), "html", null, true);
        echo " /</span> <span id=\"t_vd\">";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "_locale"), "method") == "en")) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), 0), "titreEn"), "html", null, true);
            echo " ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), 0), "titreFr"), "html", null, true);
            echo " ";
        }
        echo "</span></a></h2>
                    <a href=\"#\" class=\"voir-video lanch_video\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("voir la vidéo"), "html", null, true);
        echo "</a>
                </div>
            </div>
            <div class=\"news-home\">
                <a href=\"#\" class=\"lanch_news\" ><img width=\"109\" height=\"59\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("upload/" . $this->getAttribute($this->getAttribute((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")), 0), "image"))), "html", null, true);
        echo "\" alt=\"\" /></a>
                <div class=\"txt-video-news-home\">
                    <h2><a href=\"#\" class=\"lanch_news\"><span id=\"s_news\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("NEWS"), "html", null, true);
        echo " /</span> <span id=\"t_news\">";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "_locale"), "method") == "en")) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")), 0), "titreEn"), "html", null, true);
            echo " ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")), 0), "titleFr"), "html", null, true);
            echo " ";
        }
        echo "</span></a></h2>
                    <p>";
        // line 45
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "_locale"), "method") == "en")) {
            echo " ";
            echo twig_truncate_filter($this->env, strip_tags($this->getAttribute($this->getAttribute((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")), 0), "descEn")), 100, true, "...");
            echo " ";
        } else {
            echo " ";
            echo twig_truncate_filter($this->env, strip_tags($this->getAttribute($this->getAttribute((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")), 0), "descFr")), 100, true, "...");
            echo " ";
        }
        echo "</p>
                </div>
            </div>
            <br clear=\"all\" />
        </div>
    </div>



    <div class=\"overlay-news overlay\">
        <div class=\"pop-up-news\">

            <div class=\"pop-news-content\">
                <a class=\"close\" href=\"#\">";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("fermer"), "html", null, true);
        echo "</a>
                <div id=\"default_news\" style=\"padding-bottom: 20px; overflow: hidden;\">
                    <img alt=\"\" width=\"548\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("upload/" . $this->getAttribute($this->getAttribute((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")), 0), "image"))), "html", null, true);
        echo "\">
                   ";
        // line 61
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "_locale"), "method") == "en")) {
            echo " ";
            echo $this->getAttribute($this->getAttribute((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")), 0), "descEn");
            echo " ";
        } else {
            echo " ";
            echo $this->getAttribute($this->getAttribute((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")), 0), "descFr");
            echo " ";
        }
        // line 62
        echo "                    <div class=\"share\"><a class=\"facebook\" href=\"\">facebook</a><a class=\"twitter\" href=\"\">twitter</a><br clear=\"all\"></div>
                </div>
            </div>
            <ul id=\"liste-news\" class=\"jcarousel-skin-tango\">
                ";
        // line 66
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 67
            echo "                    <li class=\"news_hp\" id=\"news_hp_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"), "html", null, true);
            echo "\" style=\" cursor: pointer\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("upload/" . $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image"))), "html", null, true);
            echo "\"  width=\"110\" height=\"60\" alt=\"\" /><h3>";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "_locale"), "method") == "en")) {
                echo " ";
                echo $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titreEn");
                echo " ";
            } else {
                echo " ";
                echo $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titleFr");
                echo " ";
            }
            echo "</h3></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                    </ul>
                </div>
            </div>

            <div class=\"overlay-videos overlay\">
                <div class=\"pop-up-videos\">
                    <div class=\"pop-videos-content\">
                        <a href=\"#\" class=\"close\">fermer</a>

                        <video id=\"example_video_1\" class=\"video-js vjs-default-skin\" controls preload=\"none\" width=\"739\" height=\"486\"
                               poster=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/images/video-home.jpg"), "html", null, true);
        echo "\"
                               data-setup=\"{}\">
                            ";
        // line 81
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "_locale"), "method") == "fr")) {
            // line 82
            echo "                            <source src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("upload/video_hp/cartron_fr.mp4"), "html", null, true);
            echo "\" type='video/mp4' />
                            <source src=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("upload/video_hp/cartron_fr.webm"), "html", null, true);
            echo "\" type='video/webm' />
                            <source src=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("upload/video_hp/cartron_fr.ogv"), "html", null, true);
            echo "\" type='video/ogg' />
                            <track kind=\"captions\" src=\"demo.captions.vtt\" srclang=\"en\" label=\"English\" />
                            ";
        } else {
            // line 87
            echo "                            <source src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("upload/video_hp/cartron_en.mp4"), "html", null, true);
            echo "\" type='video/mp4' />
                            <source src=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("upload/video_hp/cartron_en.webm"), "html", null, true);
            echo "\" type='video/webm' />
                            <source src=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("upload/video_hp/cartron_en.ogv"), "html", null, true);
            echo "\" type='video/ogg' />
                            <track kind=\"captions\" src=\"demo.captions.vtt\" srclang=\"en\" label=\"English\" />
                            ";
        }
        // line 92
        echo "
                        </video>

                    </div>
                </div>
            </div>
            <input type=\"hidden\" value=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_get_news"), "html", null, true);
        echo "\" id=\"path_news_hp\" />
";
    }

    public function getTemplateName()
    {
        return "SiteCartronBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 98,  248 => 92,  242 => 89,  238 => 88,  233 => 87,  227 => 84,  223 => 83,  218 => 82,  216 => 81,  211 => 79,  199 => 69,  178 => 67,  174 => 66,  168 => 62,  158 => 61,  154 => 60,  149 => 58,  125 => 45,  111 => 44,  106 => 42,  99 => 38,  85 => 37,  80 => 35,  67 => 25,  63 => 24,  56 => 20,  38 => 4,  35 => 3,  29 => 2,);
    }
}
