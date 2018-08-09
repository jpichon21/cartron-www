<?php

/* SiteAdminBundle::layout.html.twig */
class __TwigTemplate_ed7dded3328dd72b15ea48f2e8d9023f extends Twig_Template
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
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" title=\"default\" />
        <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/js/jquery/jquery-1.4.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/js/jquery/jquery.selectbox-0.5.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/js/jquery/jquery.selectbox-0.5_style_2.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!--[if IE]>
        <link rel=\"stylesheet\" media=\"all\" type=\"text/css\" href=\"css/pro_dropline_ie.css\" />
        <![endif]-->
    </head>
    <body>
        <div id=\"page-top-outer\">    
            <div id=\"page-top\">
                <div id=\"logo\">
                    <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_admin_homepage"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/images/shared/logo.png"), "html", null, true);
        echo "\"  height=\"44\" alt=\"\" /></a>
                </div>
                <div class=\"clear\"></div>
            </div>
        </div>
        <div class=\"clear\">&nbsp;</div>
        <div class=\"nav-outer-repeat\"> 
            <!--  start nav-outer -->
            <div class=\"nav-outer\"> 

                <!-- start nav-right -->
                <div id=\"nav-right\">
                    <div class=\"nav-divider\">&nbsp;</div>
                    <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("logout"), "html", null, true);
        echo "\" id=\"logout\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/images/shared/nav/nav_logout.gif"), "html", null, true);
        echo "\" width=\"64\" height=\"14\" alt=\"\" /></a>
                    <div class=\"clear\">&nbsp;</div>
                </div>
                <!--  start nav -->
                <div class=\"nav\">
                    <div class=\"table\">

                        <ul ";
        // line 38
        if (((($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "site_admin_homepage") || ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "site_admin_homepage_add_article")) || ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "site_admin_homepage_add_video"))) {
            echo " class=\"current\" ";
        } else {
            echo " class=\"select\" ";
        }
        echo "><li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_admin_homepage"), "html", null, true);
        echo "\"><b>Page d'accueil</b><!--[if IE 7]><!--></a><!--<![endif]-->
                                <!--[if lte IE 6]><table><tr><td><![endif]-->
                                <div class=\"select_sub show\">
                                    <ul class=\"sub\">
                                        <li ";
        // line 42
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "site_admin_homepage")) {
            echo "class=\"sub_show\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_admin_homepage"), "html", null, true);
        echo "\">Liste des articles</a></li>
                                        <li ";
        // line 43
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "site_admin_homepage_add_article")) {
            echo "class=\"sub_show\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_admin_homepage_add_article"), "html", null, true);
        echo "\">Ajouter article</a></li>
                                        <li ";
        // line 44
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "site_admin_homepage_add_video")) {
            echo "class=\"sub_show\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_admin_homepage_add_video", array("id" => 1)), "html", null, true);
        echo "\">Video</a></li>
                                    </ul>
                                </div>
                                <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                            </li>
                        </ul>

                        <div class=\"nav-divider\">&nbsp;</div>

                        <ul ";
        // line 53
        if ((((($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "site_admin_sous_menu") || ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "site_admin_add_sous_menu")) || ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "site_admin_collection")) || ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "site_admin_add_collection"))) {
            echo " class=\"current\" ";
        } else {
            echo " class=\"select\" ";
        }
        echo " ><li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_admin_collection"), "html", null, true);
        echo "\"><b>Collection</b><!--[if IE 7]><!--></a><!--<![endif]-->
                                <!--[if lte IE 6]><table><tr><td><![endif]-->
                                <div class=\"select_sub show\">
                                    <ul class=\"sub\">
                                        <li ";
        // line 57
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "site_admin_collection")) {
            echo "class=\"sub_show\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_admin_collection"), "html", null, true);
        echo "\">Collection</a></li>
                                        <li ";
        // line 58
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "site_admin_add_collection")) {
            echo "class=\"sub_show\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_admin_add_collection"), "html", null, true);
        echo "\">Ajouter collection</a></li>
                                        <li ";
        // line 59
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "site_admin_sous_menu")) {
            echo "class=\"sub_show\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_admin_sous_menu"), "html", null, true);
        echo "\">Sous menu collection</a></li>
                                        <li ";
        // line 60
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "site_admin_add_sous_menu")) {
            echo "class=\"sub_show\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_admin_add_sous_menu"), "html", null, true);
        echo "\">Ajouter sous menu collection</a></li>
                                    </ul>
                                </div>
                                <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                            </li>
                        </ul>

                        <div class=\"nav-divider\">&nbsp;</div>


                        <ul ";
        // line 70
        if ((((($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "site_admin_sous_menu_degustation") || ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "site_admin_add_sous_menu_degustation")) || ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "site_admin_degustation")) || ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "site_admin_add_degustation"))) {
            echo " class=\"current\" ";
        } else {
            echo " class=\"select\" ";
        }
        echo " ><li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_admin_degustation"), "html", null, true);
        echo "\"><b>Dégustation</b><!--[if IE 7]><!--></a><!--<![endif]-->
                                <!--[if lte IE 6]><table><tr><td><![endif]-->
                                <div class=\"select_sub show\">
                                    <ul class=\"sub\">
                                        <li ";
        // line 74
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "site_admin_degustation")) {
            echo "class=\"sub_show\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_admin_degustation"), "html", null, true);
        echo "\">Dégustation</a></li>
                                        <li ";
        // line 75
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "site_admin_add_degustation")) {
            echo "class=\"sub_show\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_admin_add_degustation"), "html", null, true);
        echo "\">Ajouter Dégustation</a></li>
                                        <li ";
        // line 76
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "site_admin_sous_menu_degustation")) {
            echo "class=\"sub_show\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_admin_sous_menu_degustation"), "html", null, true);
        echo "\">Sous menu dégustation</a></li>
                                        <li ";
        // line 77
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "site_admin_add_sous_menu_degustation")) {
            echo "class=\"sub_show\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_admin_add_sous_menu_degustation"), "html", null, true);
        echo "\">Ajouter sous menu dégustation</a></li>
                                    </ul>
                                </div>
                                <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                            </li>
                        </ul>

                        <div class=\"nav-divider\">&nbsp;</div>


                        <ul ";
        // line 87
        if (((((((((($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "site_admin_menu_pro") || ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "site_admin_manage_sous_menu_degustation_pro")) || ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "site_admin_manage_sous_menu_produit_pro")) || ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "site_admin_produit_pro")) || ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "site_admin_manage_produits_pro")) || ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "site_admin_manage_degustation_pro")) || ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "site_admin_degustation_pro")) || ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "site_admin_sous_menu_produit_pro")) || ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "site_admin_manage_menu_pro"))) {
            echo " class=\"current\" ";
        } else {
            echo " class=\"select\" ";
        }
        echo " ><li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_admin_sous_menu_produit_pro"), "html", null, true);
        echo "\"><b>Espace pro</b><!--[if IE 7]><!--></a><!--<![endif]-->
                                <!--[if lte IE 6]><table><tr><td><![endif]-->
                                <div class=\"select_sub show\">
                                    <ul class=\"sub\">
                                        <li ";
        // line 91
        if ((((($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "site_admin_produit_pro") || ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "site_admin_manage_produits_pro")) || ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "site_admin_sous_menu_produit_pro")) || ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "site_admin_manage_sous_menu_produit_pro"))) {
            echo "class=\"sub_show\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_admin_sous_menu_produit_pro"), "html", null, true);
        echo "\">Produits</a></li>
                                        <li ";
        // line 92
        if (((($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "site_admin_degustation_pro") || ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "site_admin_manage_degustation_pro")) || ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "site_admin_manage_sous_menu_degustation_pro"))) {
            echo "class=\"sub_show\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_admin_degustation_pro"), "html", null, true);
        echo "\">Dégustation</a></li>
                                        <li ";
        // line 93
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "site_admin_menu_pro")) {
            echo "class=\"sub_show\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_admin_menu_pro"), "html", null, true);
        echo "\">Autres Menu</a></li>
                                    </ul>
                                </div>
                                <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                            </li>
                        </ul>
                        
                          <div class=\"nav-divider\">&nbsp;</div>

                        <ul ";
        // line 102
        if ((($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "listes_pays") || ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "ajout_pays"))) {
            echo " class=\"current\" ";
        } else {
            echo " class=\"select\" ";
        }
        echo " ><li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("listes_pays"), "html", null, true);
        echo "\"><b>Pays</b><!--[if IE 7]><!--></a><!--<![endif]-->
                                <!--[if lte IE 6]><table><tr><td><![endif]-->
                                <div class=\"select_sub show\">
                                    <ul class=\"sub\">
                                        <li ";
        // line 106
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "listes_pays")) {
            echo "class=\"sub_show\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("listes_pays"), "html", null, true);
        echo "\">Pays</a></li>
                                        <li ";
        // line 107
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "ajout_pays")) {
            echo "class=\"sub_show\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajout_pays"), "html", null, true);
        echo "\">Ajouter pays</a></li>
                                    </ul>
                                </div>
                                <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                            </li>
                        </ul>

                        <div class=\"clear\"></div>
                    </div>
                    <div class=\"clear\"></div>
                </div>
                <!--  start nav -->

            </div>
            <div class=\"clear\"></div>
            <!--  start nav-outer -->
        </div>
        <div class=\"clear\"></div>
            ";
        // line 125
        $this->displayBlock('body', $context, $blocks);
        // line 126
        echo "        <div class=\"clear\">&nbsp;</div>
        <!--  end content-outer........................................................END -->

        <div class=\"clear\">&nbsp;</div>

        <!-- start footer -->         
        <div id=\"footer\">
            <!--  start footer-left -->
            <div id=\"footer-left\">

                Admin Cartron &copy; Copyright Internet Dreams Ltd. <span id=\"spanYear\"></span> <a href=\"\">www.cartron.fr</a>. All rights reserved.</div>
            <!--  end footer-left -->
            <div class=\"clear\">&nbsp;</div>
        </div>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Cartron: Admin";
    }

    // line 125
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SiteAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 125,  351 => 5,  331 => 126,  329 => 125,  304 => 107,  296 => 106,  283 => 102,  267 => 93,  259 => 92,  251 => 91,  238 => 87,  221 => 77,  213 => 76,  205 => 75,  197 => 74,  184 => 70,  167 => 60,  159 => 59,  151 => 58,  143 => 57,  130 => 53,  114 => 44,  106 => 43,  98 => 42,  85 => 38,  73 => 31,  55 => 18,  43 => 9,  39 => 8,  35 => 7,  27 => 5,  21 => 1,  124 => 54,  119 => 51,  108 => 46,  104 => 45,  99 => 43,  95 => 42,  91 => 41,  87 => 40,  83 => 39,  80 => 38,  76 => 37,  64 => 27,  62 => 26,  52 => 19,  45 => 15,  31 => 6,  28 => 2,);
    }
}
