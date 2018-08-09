<?php

/* SiteAdminBundle:Default:login.html.twig */
class __TwigTemplate_673be54b55aacf1639f9cb87608d3239 extends Twig_Template
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
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
<title>JOSEPH CARTRON</title>
<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" title=\"default\" />
<!--  jquery core -->
<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/js/jquery/jquery-1.4.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<!-- Custom jquery scripts -->
<script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/js/jquery/custom_jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/js/jquery/jquery.pngFix.pack.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script type=\"text/javascript\">
\$(document).ready(function(){
\$(document).pngFix( );
});
</script>
</head>
<body id=\"login-bg\"> 
 
<!-- Start: login-holder -->
<div id=\"login-holder\">

\t<!-- start logo -->
\t<div id=\"logo-login\">
\t\t<a href=\"#0\"><img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/images/shared/logo.png"), "html", null, true);
        echo "\"  height=\"44\" alt=\"\" /></a>
\t</div>
\t<!-- end logo -->
\t
\t<div class=\"clear\"></div>
\t
\t<!--  start loginbox ................................................................................. -->
\t<div id=\"loginbox\">
\t
\t<!--  start login-inner -->
\t<div id=\"login-inner\">
            <form action=\"\" method=\"POST\">
\t\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
\t\t<tr>
                    <th ";
        // line 42
        if (($this->getContext($context, "error") == "y")) {
            echo " style=\" color:red\" ";
        }
        echo ">Username</th>
\t\t\t<td><input type=\"text\" name=\"identification\" class=\"login-inp\" /></td>
\t\t</tr>
\t\t<tr>
\t\t\t<th ";
        // line 46
        if (($this->getContext($context, "error") == "y")) {
            echo " style=\" color:red\" ";
        }
        echo ">Password</th>
\t\t\t<td><input type=\"password\" value=\"\"  name=\"password\" class=\"login-inp\" /></td>
\t\t</tr>
\t\t<tr>
\t\t\t<th></th>
\t\t\t<td valign=\"top\"><br/></td>
\t\t</tr>
\t\t<tr>
\t\t\t<th></th>
\t\t\t<td><input type=\"submit\" class=\"submit-login\"  /></td>
\t\t</tr>
\t\t</table>
                </form>
\t</div>
 \t<!--  end login-inner -->
\t<div class=\"clear\"></div>
\t
 </div>
 <!--  end loginbox -->
 
\t

</div>
<!-- End: login-holder -->
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "SiteAdminBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 46,  77 => 42,  60 => 28,  43 => 14,  37 => 11,  31 => 8,  26 => 6,  19 => 1,);
    }
}
