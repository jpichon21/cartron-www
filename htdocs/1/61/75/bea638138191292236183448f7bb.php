<?php

/* SiteCartronBundle::layout.html.twig */
class __TwigTemplate_6175bea638138191292236183448f7bb extends Twig_Template
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
\t<meta name=\"description\" content=\"Maison Joseph Cartron Crèmes de Fruits – Liqueurs – Eaux-de-Vie. Maison familiale fondée en 1882 à Nuits-Saint-Georges.\"/>
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/css/camera.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/css/jScrollPane.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/css/jqtransform.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/js/jquery.toggleval.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/js/jquery.jcarousel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/js/jquery.jqtransform.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/js/camera.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/js/jquery.jscrollpane.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/js/jquery.mousewheel.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/js/jquery.hoverflow.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/js/jquery.hoverIntent.minified.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/js/jquery.backgroundpos.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/js/main.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/js/main1.js"), "html", null, true);
        echo "\"></script>
\t<meta property=\"og:image\" content=\"http://www.cartron.fr/bundles/sitecartron/images/logo-facebook.png\" />
\t<meta id=\"viewport\" name=\"viewport\" />
  </head>
  <body>
    <div class=\"site\">
      <div class=\"header\">
        <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_homepage"), "html", null, true);
        echo "\" class=\"logo dn\"><span>JESEPH CARTRON</span></a>
        <div class=\"nav-top\">
          <div class=\"header-content\">
            <ul class=\"menu-top\">
              <li><a class=\"patrimoine\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "Patrimoine")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Patrimoine"), "html", null, true);
        echo "</a></li>
              <li><a class=\"savoir-faire\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "Savoir-faire")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Savoir-faire"), "html", null, true);
        echo "</a></li>
              <li><a ";
        // line 39
        if ((($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "site_cartron_collection") || ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "site_cartron_collection_produit"))) {
            echo "class=\"active\"";
        }
        echo " href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_collection"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Collection"), "html", null, true);
        echo "</a></li>
              <li><a ";
        // line 40
        if ((($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "site_cartron_degustation") || ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "site_cartron_degustation_produit"))) {
            echo "class=\"active\"";
        }
        echo " href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_degustation"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Dégustation"), "html", null, true);
        echo "</a></li>
            </ul>
\t\t\t<div class=\"menu-top-right\">
              <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_contact"), "html", null, true);
        echo "\" class=\"contactez-nous\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Contactez-nous"), "html", null, true);
        echo "</a>
\t\t\t  
              <a href=\"/pro";
        // line 45
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "_locale"), "method") == "en")) {
            echo "/en";
        }
        echo "\" class=\"espace-pro-header\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Espace"), "html", null, true);
        echo "<br /><strong>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("professionnel"), "html", null, true);
        echo "</strong></a>
\t\t\t  <!--
\t\t\t\t  <form action=\"\" method=\"post\" class=\"recherche-form\">
\t\t\t\t\t<input type=\"text\" name=\"recherche\" value=\"\" />
\t\t\t\t  </form>
\t\t\t\t  -->
\t\t\t</div>
          </div>
        </div>
      </div>
      <input type=\"hidden\" id=\"path_login\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_login_pro"), "html", null, true);
        echo "\" />
      <input type=\"hidden\" id=\"path_mpo\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_mpo_pro"), "html", null, true);
        echo "\" />
      ";
        // line 57
        $this->displayBlock('body', $context, $blocks);
        // line 58
        echo "      ";
        $this->env->loadTemplate("SiteCartronBundle:Statique:footer.html.twig")->display($context);
        echo " 

\t  ";
        // line 60
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
            echo " 
      <div class=\"overlay-mentions\">
        <div class=\"pop-up-mentions\">
          <a href=\"\" class=\"close dn\"><span>Fermer</span></a>
          <h1>mentions légales</h1>
          <div class=\"scrollMention\">
            <p><strong>Propriétaire du Site Internet: </strong>Joseph Cartron<br />
\t\t\t  <strong>Adresse: </strong>25, Rue du Docteur  Legrand – CS 30028<br />
\t\t\t  21701 nuits-Saint-Georges Cedex - France<br />
\t\t\t  <strong>Email: </strong>cartron@cartron.fr<br />
\t\t\t  <strong>Téléphone&nbsp;:</strong> +33 (0)3 80 62 00 90<u><br />
\t\t\t  </u><strong>Design &amp; Développement &amp; maintenance technique: </strong>BIGGERBAND<br />
\t\t\t  <strong>Crédits Images</strong>: Joseph Cartron <br />
\t\t\t  <strong>Conditions d'utilisation et  propriétés:<br />
\t\t\t  </strong>Toute  représentation totale ou partielle de ce site et de son contenu, par quelques  procédés que ce soient, sans autorisation préalable est interdite et  constituerait une contrefaçon sanctionnée par les articles L335-2 et suivants  du Code de la Propriété Intellectuelle. Les utilisateurs du site sont tenus de  respecter les dispositions de la Loi Informatique, Fichiers et Libertés, dont  la violation est passible de sanctions pénales. Ils doivent notamment  s'abstenir, s'agissant des informations nominatives auxquelles ils accèdent, de  toute collecte, de toute utilisation détournée, et d'une manière générale, de  tout acte susceptible de porter atteinte à la vie privée ou à la réputation des  personnes.<br />
\t\t\t  L&rsquo;abus  d&rsquo;alcool est dangereux pour la santé. Consommer avec modération.<br />
\t\t\t  <strong>Hébergeur: </strong>OVH<br />
\t\t\t  <a href=\"http://www.ovh.com\" target=\"_blank\">www.ovh.com</a></p></div>
        </div>
      </div>
\t  ";
        } else {
            // line 81
            echo "      <div class=\"overlay-mentions\">
        <div class=\"pop-up-mentions\">
          <a href=\"\" class=\"close dn\"><span>Fermer</span></a>
          <h1>legal terms</h1>
          <div class=\"scrollMention\">
            <p><strong>Website owner: </strong>Joseph Cartron<br />
\t\t\t  <strong>Address: </strong>25, Rue du Docteur  Legrand – CS 30028<br />
\t\t\t  21701 nuits-Saint-Georges Cedex - France<br />
\t\t\t  <strong>Email: </strong>cartron@cartron.fr<br />
\t\t\t  <strong>Telephone&nbsp;:</strong> +33 (0)3 80 62 00 90<u><br />
\t\t\t  </u><strong>Design & Development & technical maintenance:: </strong>BIGGERBAND<br />
\t\t\t  <strong>Image Credits:</strong>: Joseph Cartron <br />
\t\t\t  <strong>Conditions of Use & Property:<br />
\t\t\t  </strong>Any reproduction of this site and its content, in part or in whole by whatsoever means, without prior consent is forbidden and would be considered as an act of counterfeit punishable under articles L335-2 and thereafter of the Code of Intellectual Property. Site users are required to respect the provisions of the Data Processing, Files & Liberties Act, any violation of which would expose the offender to criminal sanctions. Most notably and regarding the nominative information to which they have access, users shall refrain from any collection, unlawful use and, more generally, any act likely to affect the private life or reputation of other persons.<br />
\t\t\t  This website is reserved exclusively for persons of a legal age to drink alcoholic beverages in their country of residence. Please, drink responsibly.<br />
\t\t\t  <strong>Host: </strong>OVH<br />
\t\t\t  <a href=\"http://www.ovh.com\" target=\"_blank\">www.ovh.com</a></p></div>
        </div>
      </div>
\t  ";
        }
        // line 101
        echo "    </div>
 
\t<script>
\t  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
\t  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
\t  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
\t  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
\t  
\t  ga('create', 'UA-44915246-1', 'cartron.fr');
\t  ga('send', 'pageview');  
\t</script>
\t
  </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Cartron";
    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SiteCartronBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 57,  262 => 6,  244 => 101,  222 => 81,  198 => 60,  192 => 58,  190 => 57,  186 => 56,  182 => 55,  163 => 45,  156 => 43,  144 => 40,  134 => 39,  128 => 38,  122 => 37,  115 => 33,  105 => 26,  101 => 25,  97 => 24,  93 => 23,  89 => 22,  81 => 20,  77 => 19,  73 => 18,  69 => 17,  65 => 16,  61 => 15,  57 => 14,  53 => 13,  49 => 12,  45 => 11,  41 => 10,  37 => 9,  33 => 8,  28 => 6,  21 => 1,  256 => 98,  248 => 92,  242 => 89,  238 => 88,  233 => 87,  227 => 84,  223 => 83,  218 => 82,  216 => 81,  211 => 79,  199 => 69,  178 => 67,  174 => 66,  168 => 62,  158 => 61,  154 => 60,  149 => 58,  125 => 45,  111 => 44,  106 => 42,  99 => 38,  85 => 21,  80 => 35,  67 => 25,  63 => 24,  56 => 20,  38 => 4,  35 => 3,  29 => 2,);
    }
}
