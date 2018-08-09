<?php

/* SiteAdminBundle:Default:index.html.twig */
class __TwigTemplate_c3be7d6b6d6a9ef4257936bd253346d5 extends Twig_Template
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
        echo "
<!-- start content -->
<div id=\"content\">

    <!--  start page-heading -->
    <div id=\"page-heading\">
        <h1>Liste des articles (page d'accueil) </h1>
    </div>
    <!-- end page-heading -->

    <table border=\"0\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" id=\"content-table\">
        <tr>
            <th rowspan=\"3\" class=\"sized\"><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/images/shared/side_shadowleft.jpg"), "html", null, true);
        echo "\" width=\"20\" height=\"300\" alt=\"\" /></th>
            <th class=\"topleft\"></th>
            <td id=\"tbl-border-top\">&nbsp;</td>
            <th class=\"topright\"></th>
            <th rowspan=\"3\" class=\"sized\"><img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/images/shared/side_shadowright.jpg"), "html", null, true);
        echo "\" width=\"20\" height=\"300\" alt=\"\" /></th>
        </tr>
        <tr>
            <td id=\"tbl-border-left\"></td>
            <td>
                <!--  start content-table-inner ...................................................................... START -->
                <div id=\"content-table-inner\">
                    ";
        // line 26
        if ($this->getContext($context, "articles")) {
            // line 27
            echo "                        <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" id=\"product-table\">
                            <tbody>
                                <tr>
                                    <th class=\"table-header-repeat line-left minwidth-1\"><a href=\"#0\">Image</a>\t</th>
                                    <th class=\"table-header-repeat line-left minwidth-1\"><a href=\"#0\">Titre fr </a></th>
                                    <th class=\"table-header-repeat line-left\"><a href=\"#0\">Description fr</a></th>
                                    <th class=\"table-header-repeat line-left minwidth-1\"><a href=\"#0\">Titre en </a></th>
                                    <th class=\"table-header-repeat line-left\"><a href=\"#0\">Description en</a></th>
                                    <th class=\"table-header-options line-left\"><a href=\"#0\">Actions</a></th>
                                </tr>
                                       ";
            // line 37
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "articles"));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 38
                echo "                                <tr>
                                    <td align=\"center\"><img width=\"150\" src='";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("upload/" . $this->getAttribute($this->getContext($context, "article"), "image"))), "html", null, true);
                echo "'  /></td>
                                    <td>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "titleFr"), "html", null, true);
                echo "</td>
                                    <td>";
                // line 41
                echo $this->getAttribute($this->getContext($context, "article"), "descFr");
                echo "</td>
                                    <td>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "titreEn"), "html", null, true);
                echo "</td>
                                    <td>";
                // line 43
                echo $this->getAttribute($this->getContext($context, "article"), "descEn");
                echo "</td>
                                    <td class=\"options-width\">
                                        <a class=\"icon-1 info-tooltip\" href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_admin_homepage_add_article", array("id" => $this->getAttribute($this->getContext($context, "article"), "id"))), "html", null, true);
                echo "\"></a>
                                        <a class=\"icon-2 info-tooltip\" href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer", array("id" => $this->getAttribute($this->getContext($context, "article"), "id"), "table" => "HomePage")), "html", null, true);
                echo "\"></a>
                                    </td>
                                </tr>

                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                            </tbody>
                        </table>
                        ";
        }
        // line 54
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
        return "SiteAdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 54,  119 => 51,  108 => 46,  104 => 45,  99 => 43,  95 => 42,  91 => 41,  87 => 40,  83 => 39,  80 => 38,  76 => 37,  64 => 27,  62 => 26,  52 => 19,  45 => 15,  31 => 3,  28 => 2,);
    }
}
