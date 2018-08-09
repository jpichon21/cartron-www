<?php

/* SiteCartronBundle::base.html.twig */
class __TwigTemplate_55dbb6e7ebd96754a2110fd02d138914 extends Twig_Template
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
\t\t<meta name=\"description\" content=\"Joseph Cartron - Crèmes de Fruits – Liqueurs – Eaux-de-Vie. Maison familiale fondée en 1882 à Nuits-Saint-Georges.\"/>
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/css/skin.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/css/jqtransform.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/js/jquery.toggleval.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/js/jquery.jcarousel.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/js/jquery.jqtransform.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/js/main.js"), "html", null, true);
        echo "\"></script>
\t\t<meta id=\"viewport\" name=\"viewport\" />
        
    </head>
    <body id=\"agegate\">
        <input type=\"hidden\" id=\"path_login\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_login_pro"), "html", null, true);
        echo "\" />
        <input type=\"hidden\" id=\"path_mpo\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_mpo_pro"), "html", null, true);
        echo "\" />
            ";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "
\t<script>
\t  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
\t  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
\t  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
\t  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
\t  
\t  ga('create', 'UA-44915246-1', 'cartron.fr');
\t  ga('send', 'pageview');  
\t</script>

    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Test Application";
    }

    // line 22
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
        return array (  102 => 22,  96 => 6,  79 => 23,  77 => 22,  69 => 20,  61 => 15,  57 => 14,  53 => 13,  49 => 12,  45 => 11,  41 => 10,  37 => 9,  33 => 8,  28 => 6,  21 => 1,  251 => 111,  245 => 108,  241 => 107,  236 => 105,  230 => 102,  225 => 100,  220 => 98,  215 => 96,  211 => 95,  207 => 94,  202 => 92,  194 => 91,  171 => 71,  167 => 70,  163 => 69,  158 => 67,  152 => 64,  148 => 63,  142 => 62,  132 => 55,  128 => 54,  121 => 50,  116 => 48,  110 => 45,  105 => 43,  100 => 41,  95 => 39,  91 => 38,  81 => 35,  73 => 21,  68 => 32,  38 => 4,  35 => 3,  29 => 2,);
    }
}
