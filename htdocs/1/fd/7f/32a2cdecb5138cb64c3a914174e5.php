<?php

/* SiteCartronBundle::base.html.twig */
class __TwigTemplate_fd7f32a2cdecb5138cb64c3a914174e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/css/skin.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/css/jqtransform.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/js/jquery.toggleval.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/js/jquery.jcarousel.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/js/jquery.jqtransform.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/js/main.js"), "html", null, true);
        echo "\"></script>
        
    </head>
    <body id=\"agegate\">
        <input type=\"hidden\" id=\"path_login\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_login_pro"), "html", null, true);
        echo "\" />
        <input type=\"hidden\" id=\"path_mpo\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_mpo_pro"), "html", null, true);
        echo "\" />
            ";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 21
        echo "    </body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Test Application";
    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SiteCartronBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 20,  82 => 6,  75 => 20,  71 => 19,  67 => 18,  60 => 14,  56 => 13,  52 => 12,  48 => 11,  40 => 9,  36 => 8,  32 => 7,  28 => 6,  21 => 1,  255 => 112,  249 => 109,  245 => 108,  240 => 106,  234 => 103,  229 => 101,  224 => 99,  219 => 97,  215 => 96,  211 => 95,  206 => 93,  198 => 92,  175 => 72,  171 => 71,  167 => 70,  162 => 68,  156 => 65,  152 => 64,  146 => 63,  136 => 56,  132 => 55,  125 => 51,  120 => 49,  114 => 46,  109 => 44,  104 => 42,  99 => 40,  95 => 39,  85 => 36,  77 => 21,  72 => 33,  44 => 10,  38 => 4,  35 => 3,  29 => 2,);
    }
}
