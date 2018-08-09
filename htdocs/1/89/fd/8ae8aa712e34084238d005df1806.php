<?php

/* SiteAdminBundle:Default:ajouter_sous_menu.html.twig */
class __TwigTemplate_89fd8ae8aa712e34084238d005df1806 extends Twig_Template
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
        <h1>Ajouter sous menu collection </h1>
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
                                    <th valign=\"top\">Collection:</th>
                                    <td>";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "idCollection"), 'widget', array("attr" => array("class" => "styledselect_form_1")));
        echo "</td>
                                    <td></td>
                                </tr>                           
                                <tr>
                                    <th valign=\"top\">Degré :</th>
                                    <td>";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "degre"), 'widget', array("attr" => array("class" => "inp-form")));
        echo "</td>
                                    <td></td>
                                </tr>                               
                                <tr>
                                    <th valign=\"top\">Image:</th>
                                    <td>";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "image"), 'widget');
        echo "</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th valign=\"top\">Icone:</th>
                                    <td>";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "icone"), 'widget');
        echo "</td>
                                    <td></td>
                                </tr>
                                
                                
                                <tr>
                                    <th valign=\"top\">Titre FR:</th>
                                    <td>";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "titreFr"), 'widget', array("attr" => array("class" => "inp-form")));
        echo "</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th valign=\"top\">Description FR:</th>
                                    <td>";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "descriptionFr"), 'widget', array("attr" => array("class" => "form-textarea")));
        echo "</textarea></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th valign=\"top\">Note Degustation FR:</th>
                                    <td>";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "noteDegustationFr"), 'widget', array("attr" => array("class" => "form-textarea")));
        echo "</textarea></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th valign=\"top\">Elaboration FR:</th>
                                    <td>";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "elaborationFr"), 'widget', array("attr" => array("class" => "form-textarea")));
        echo "</textarea></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <th valign=\"top\">Contenance FR:</th>
                                    <td>";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "contenanceFr"), 'widget', array("attr" => array("class" => "inp-form")));
        echo "</td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <th valign=\"top\">Conserver FR:</th>
                                    <td>";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "conserverFr"), 'widget', array("attr" => array("class" => "inp-form")));
        echo "</td>
                                    <td></td>
                                </tr>

                                 <tr>
                                    <th valign=\"top\">Recette Fr:</th>
                                    <td>";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "recetteFr"), 'widget', array("attr" => array("class" => "inp-form")));
        echo "</td>
                                    <td></td>
                                </tr>
                                
                                <tr>
                                    <th valign=\"top\">Titre EN:</th>
                                    <td>";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "titreEn"), 'widget', array("attr" => array("class" => "inp-form")));
        echo "</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th valign=\"top\">Description En:</th>
                                    <td>";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "descriptionEn"), 'widget', array("attr" => array("class" => "form-textarea")));
        echo "</textarea></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th valign=\"top\">Note Degustation En:</th>
                                    <td>";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "noteDegustationEn"), 'widget', array("attr" => array("class" => "form-textarea")));
        echo "</textarea></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th valign=\"top\">Elaboration En:</th>
                                    <td>";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "elaborationEn"), 'widget', array("attr" => array("class" => "form-textarea")));
        echo "</textarea></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th valign=\"top\">Contenance En:</th>
                                    <td>";
        // line 123
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "contenanceEn"), 'widget', array("attr" => array("class" => "inp-form")));
        echo "</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th valign=\"top\">Conserver En:</th>
                                    <td>";
        // line 128
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "conserverEn"), 'widget', array("attr" => array("class" => "inp-form")));
        echo "</td>
                                    <td></td>
                                </tr>
                                
                                 <tr>
                                    <th valign=\"top\">Recette En:</th>
                                    <td>";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "recetteEn"), 'widget', array("attr" => array("class" => "inp-form")));
        echo "</td>
                                    <td></td>
                                </tr>

                                
                                <tr>
                                    <th>&nbsp;</th>
                                    <td valign=\"top\">

                                        <input class=\"form-submit\" type=\"submit\" />
                                  ";
        // line 144
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
        return "SiteAdminBundle:Default:ajouter_sous_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 144,  225 => 134,  216 => 128,  208 => 123,  200 => 118,  192 => 113,  184 => 108,  176 => 103,  167 => 97,  158 => 91,  149 => 85,  140 => 79,  132 => 74,  124 => 69,  116 => 64,  106 => 57,  98 => 52,  90 => 47,  82 => 42,  71 => 34,  58 => 24,  51 => 20,  31 => 3,  28 => 2,);
    }
}
