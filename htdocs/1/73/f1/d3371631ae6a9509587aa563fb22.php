<?php

/* SiteAdminBundle:Default:ajouter_sous_menu_degustation.html.twig */
class __TwigTemplate_73f1d3371631ae6a9509587aa563fb22 extends Twig_Template
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
        echo $this->env->getExtension('stfalcon_tinymce')->tinymce_init();
        echo "
<script type=\"text/javascript\">
\$(document).ready(function() {
\t\$('.styledselect_form_1').selectbox({ inputClass: \"styledselect_form_1\" });
});
</script>
<!-- start content -->
<div id=\"content\">

    <!--  start page-heading -->
    <div id=\"page-heading\">
        <h1>Ajouter sous menu dégustation </h1>
    </div>
    <!-- end page-heading -->

    <table border=\"0\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" id=\"content-table\">
        <tr>
            <th rowspan=\"3\" class=\"sized\"><img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/images/shared/side_shadowleft.jpg"), "html", null, true);
        echo "\" width=\"20\" height=\"300\" alt=\"\" /></th>
            <th class=\"topleft\"></th>
            <td id=\"tbl-border-top\">&nbsp;</td>
            <th class=\"topright\"></th>
            <th rowspan=\"3\" class=\"sized\"><img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/images/shared/side_shadowright.jpg"), "html", null, true);
        echo "\" width=\"20\" height=\"300\" alt=\"\" /></th>
        </tr>
        <tr>
            <td id=\"tbl-border-left\"></td>
            <td>
                <!--  start content-table-inner ...................................................................... START -->
                <div id=\"content-table-inner\">



                    <form action=\"\" method=\"post\" ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">


                        <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" id=\"id-form\">
                            <tbody>
                                
                                <tr>
                                    <th valign=\"top\">Dégustation:</th>
                                    <td>";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "idDegustation"), 'widget', array("attr" => array("class" => "styledselect_form_1")));
        echo "</td>
                                    <td></td>
                                </tr>                           
                                                             
                                <tr>
                                    <th valign=\"top\">Image:</th>
                                    <td>";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "image"), 'widget');
        echo "</td>
                                    <td></td>
                                </tr>
                                
                                <tr>
                                    <th valign=\"top\">Couleur d'arrière-plan:</th>
                                    <td>";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "couleurArrierePlan"), 'widget');
        echo "</td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <th valign=\"top\">Titre FR:</th>
                                    <td>";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "titreFr"), 'widget', array("attr" => array("class" => "inp-form")));
        echo "</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th valign=\"top\">Description FR:</th>
                                    <td>";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "descriptionFr"), 'widget');
        echo "</textarea></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th valign=\"top\">Note Degustation FR:</th>
                                    <td>";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "noteDegustationFr"), 'widget');
        echo "</textarea></td>
                                    <td></td>
                                </tr>
                               
                                <tr>
                                    <th valign=\"top\">Titre EN:</th>
                                    <td>";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "titreEn"), 'widget', array("attr" => array("class" => "inp-form")));
        echo "</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th valign=\"top\">Description En:</th>
                                    <td>";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "descriptionEn"), 'widget');
        echo "</textarea></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th valign=\"top\">Note Degustation En:</th>
                                    <td>";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "noteDegustationEn"), 'widget');
        echo "</textarea></td>
                                    <td></td>
                                </tr>
                               
                                
                                <tr>
                                    <th>&nbsp;</th>
                                    <td valign=\"top\">

                                        <input class=\"form-submit\" type=\"submit\" />
                                  ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo " 
                                    </td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>

                    </form>

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
        return "SiteAdminBundle:Default:ajouter_sous_menu_degustation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 96,  150 => 86,  142 => 81,  134 => 76,  125 => 70,  117 => 65,  109 => 60,  100 => 54,  91 => 48,  82 => 42,  71 => 34,  58 => 24,  51 => 20,  31 => 3,  28 => 2,);
    }
}
