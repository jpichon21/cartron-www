<?php

/* SiteAdminBundle:Default:sous_menu.html.twig */
class __TwigTemplate_b22dace07ab2e0e201671af801e99ed0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SiteAdminBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SiteAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<link rel=\"stylesheet\" href=\"http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css\" />
<script src=\"http://code.jquery.com/jquery-1.9.1.js\"></script>
<script src=\"http://code.jquery.com/ui/1.10.2/jquery-ui.js\"></script>

<script>
    \$(function() {
        \$(\"#tabs\").tabs();
    });
    </script>
    <!-- start content -->
    <div id=\"content\">



        <!--  start page-heading -->
        <div id=\"page-heading\">
            <h1> Sous Menu collection </h1>
        </div>
        <!-- end page-heading -->

        <table border=\"0\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" id=\"content-table\">
            <tr>
                <th rowspan=\"3\" class=\"sized\"><img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/images/shared/side_shadowleft.jpg"), "html", null, true);
        echo "\" width=\"20\" height=\"300\" alt=\"\" /></th>
                <th class=\"topleft\"></th>
                <td id=\"tbl-border-top\">&nbsp;</td>
                <th class=\"topright\"></th>
                <th rowspan=\"3\" class=\"sized\"><img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/images/shared/side_shadowright.jpg"), "html", null, true);
        echo "\" width=\"20\" height=\"300\" alt=\"\" /></th>
            </tr>
            <tr>
                <td id=\"tbl-border-left\"></td>
                <td>
                    <!--  start content-table-inner ...................................................................... START -->
                    <div id=\"content-table-inner\">
                    ";
        // line 36
        if ($this->getContext($context, "sousMenu")) {
            // line 37
            echo "                            <div id=\"tabs\">
                                <ul>
                                    <li><a href=\"#tabs-1\">Langue FR</a></li>
                                    <li><a href=\"#tabs-2\">Langue EN</a></li>
                                </ul>
                                <div id=\"tabs-1\">
                                    <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" id=\"product-table\">
                                        <tbody>
                                            <tr>
                                                <th class=\"table-header-repeat line-left minwidth-1\"><a href=\"#0\">Collection </a></th>
                                                <th class=\"table-header-repeat line-left minwidth-1\"><a href=\"#0\">Image</a>\t</th>
                                                <th class=\"table-header-repeat line-left minwidth-1\"><a href=\"#0\">Icone</a>\t</th>
                                                <th class=\"table-header-repeat line-left minwidth-1\"><a href=\"#0\">Degré  </a></th>
                                                <th class=\"table-header-repeat line-left minwidth-1\"><a href=\"#0\">Titre</a>\t</th>            
                                                <th class=\"table-header-repeat line-left minwidth-1\"><a href=\"#0\">Contenance</a>\t</th>
                                                <th class=\"table-header-repeat line-left minwidth-1\"><a href=\"#0\">Conserver</a>\t</th>

                                                <th class=\"table-header-options line-left\"><a href=\"#0\">Actions</a></th>
                                            </tr>
                                       ";
            // line 56
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "sousMenu"));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 57
                echo "                                            <tr>
                                                <td>";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "article"), "idCollection"), "titreFr"), "html", null, true);
                echo "</td>
                                                <td align=\"center\"><img width=\"150\" src='";
                // line 59
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("upload/" . $this->getAttribute($this->getContext($context, "article"), "image"))), "html", null, true);
                echo "'  /></td>
                                                <td align=\"center\"><img width=\"22\" src='";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("upload/" . $this->getAttribute($this->getContext($context, "article"), "icone"))), "html", null, true);
                echo "'  /></td>
                                                <td>";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "degre"), "html", null, true);
                echo "</td>
                                                <td>";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "titreFr"), "html", null, true);
                echo "</td>
                                                <td>";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "contenanceFR"), "html", null, true);
                echo "</td>
                                                <td>";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "conserverFR"), "html", null, true);
                echo "</td>

                                                <td class=\"options-width\">
                                                    <a class=\"icon-1 info-tooltip\" href=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_admin_add_sous_menu", array("id" => $this->getAttribute($this->getContext($context, "article"), "id"))), "html", null, true);
                echo "\"></a>
                                                    <a class=\"icon-2 info-tooltip\" href=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer", array("id" => $this->getAttribute($this->getContext($context, "article"), "id"), "table" => "SousMenu")), "html", null, true);
                echo "\"></a>
                                                </td>
                                            </tr>

                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "                                        </tbody>
                                    </table>
                                </div>
                                <div id=\"tabs-2\">
                                    <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" id=\"product-table\">
                                        <tbody>
                                            <tr>
                                                <th class=\"table-header-repeat line-left minwidth-1\"><a href=\"#0\">Collection </a></th>
                                                <th class=\"table-header-repeat line-left minwidth-1\"><a href=\"#0\">Image</a>\t</th>
                                                <th class=\"table-header-repeat line-left minwidth-1\"><a href=\"#0\">Icone</a>\t</th>
                                                <th class=\"table-header-repeat line-left minwidth-1\"><a href=\"#0\">Degré  </a></th>
                                                <th class=\"table-header-repeat line-left minwidth-1\"><a href=\"#0\">Titre</a></th>
                                                <th class=\"table-header-repeat line-left minwidth-1\"><a href=\"#0\">Contenance</a>\t</th>
                                                <th class=\"table-header-repeat line-left minwidth-1\"><a href=\"#0\">Conserver</a>\t</th>

                                                <th class=\"table-header-options line-left\"><a href=\"#0\">Actions</a></th>
                                            </tr>
                                       ";
            // line 90
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "sousMenu"));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 91
                echo "                                            <tr>
                                                <td>";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "article"), "idCollection"), "titreEn"), "html", null, true);
                echo "</td>
                                                <td align=\"center\"><img width=\"150\" src='";
                // line 93
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("upload/" . $this->getAttribute($this->getContext($context, "article"), "image"))), "html", null, true);
                echo "'  /></td>
                                                <td align=\"center\"><img width=\"22\" src='";
                // line 94
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("upload/" . $this->getAttribute($this->getContext($context, "article"), "icone"))), "html", null, true);
                echo "'  /></td>
                                                <td>";
                // line 95
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "degre"), "html", null, true);
                echo "</td>
                                                <td>";
                // line 96
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "titreEN"), "html", null, true);
                echo "</td>
                                                <td>";
                // line 97
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "contenanceEn"), "html", null, true);
                echo "</td>
                                                <td>";
                // line 98
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "conserverEn"), "html", null, true);
                echo "</td>

                                                <td class=\"options-width\">
                                                    <a class=\"icon-1 info-tooltip\" href=\"";
                // line 101
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_admin_add_sous_menu", array("id" => $this->getAttribute($this->getContext($context, "article"), "id"))), "html", null, true);
                echo "\"></a>
                                                    <a class=\"icon-2 info-tooltip\" href=\"";
                // line 102
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer", array("id" => $this->getAttribute($this->getContext($context, "article"), "id"), "table" => "SousMenu")), "html", null, true);
                echo "\"></a>
                                                </td>
                                            </tr>

                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "                                        </tbody>
                                    </table>
                                </div>
                            </div>






                        ";
        }
        // line 118
        echo "
                        </div>
                        <!--  end content-table-inner ............................................END  -->
                    </td>
                    <td id=\"tbl-border-right\"></td>
                </tr>
                <tr>
                    <th class=\"sized bottomleft\"></th>
                    <td id=\"tbl-border-bottom\">&nbsp;</td>
                    <th class=\"sized bottomright\"></th>
                </tr>
            </table>
            <div class=\"clear\">&nbsp;</div>

        </div>
        <!--  end content -->
";
    }

    public function getTemplateName()
    {
        return "SiteAdminBundle:Default:sous_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 118,  218 => 107,  207 => 102,  203 => 101,  197 => 98,  193 => 97,  189 => 96,  185 => 95,  181 => 94,  177 => 93,  173 => 92,  170 => 91,  166 => 90,  147 => 73,  136 => 68,  132 => 67,  126 => 64,  122 => 63,  118 => 62,  114 => 61,  110 => 60,  106 => 59,  102 => 58,  99 => 57,  95 => 56,  74 => 37,  72 => 36,  62 => 29,  55 => 25,  31 => 3,  28 => 2,);
    }
}
