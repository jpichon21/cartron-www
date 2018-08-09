<?php

/* SiteCartronBundle:Default:collection_produit.html.twig */
class __TwigTemplate_02dc0130fc11a3eaf5f31a65624b4278 extends Twig_Template
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
        echo "<script type=\"text/javascript\">
  \$(function() {
    var slideshow = \$('#camera_wrap_1').html();
    function get_parameters(hash){
        var elementFocusHash = hash;
        elementFocusHash = elementFocusHash.substring(1,elementFocusHash.length);
        return elementFocusHash; 
    }
    startCamera(window.location.hash);
    function startCamera(hash){
      \$('#camera_wrap_1').html(slideshow);
      if(hash == \"\"){
        var item = \$(\".current-load\").attr(\"class\");
        item = item.split(\" \");
        item = item[1];
      } else {
          var item = get_parameters(hash);
      }
      \$('#camera_wrap_1').camera({
              thumbnails: true,
              barDirection: 'rightToLeft',
              fx: 'scrollHorz',
              autoAdvance: false,
              startSlide: item,
              height: '575px',
              onEndTransition: function(){
                  \$elements = \$('#camera_wrap_1').find('.cameraCont .cameraSlide').length-3;
                  var ind = \$('#camera_wrap_1').find('.camera_target .cameraSlide.cameracurrent').index();
                  if(ind == \$elements) \$('.camera_next').hide(); else \$('.camera_next').show();
                  if(ind == 0) \$('.camera_prev').hide(); else \$('.camera_prev').show();
                  window.location.hash = ind+1;
              }
        });
      }
  \$('.scroll').jScrollPane({scrollbarWidth: 4});
  \$('.accueil-produits, .note-degustation, .note-elaboration').jScrollPane({scrollbarWidth: 4, autoReinitialise: true});
  })
</script>



<div id=\"collection-produits\" class=\"test2\">
  <style>
    .collection-home .menu_collection #marc_";
        // line 47
        echo twig_escape_filter($this->env, $this->getContext($context, "idcollection"), "html", null, true);
        echo " a{
    border-bottom:2px solid #";
        // line 48
        echo twig_escape_filter($this->env, $this->getContext($context, "defaultColor"), "html", null, true);
        echo ";
    }
    #camera_wrap_1 .visuel h2 a, #camera_wrap_1 .description p span, .description .note-degustation h3, .description .note-elaboration h3{
    color:#";
        // line 51
        echo twig_escape_filter($this->env, $this->getContext($context, "defaultColor"), "html", null, true);
        echo " !important;
    }
    #camera_wrap_1 .description .link-produits a span{
    position:relative;
    background:none !important;
    color: #FFFFFF;
    height: 29px;
    line-height: 29px;
    padding: 0 10px 0 25px;
    }
    #camera_wrap_1 .description .link-produits a span b{
    color:#";
        // line 62
        echo twig_escape_filter($this->env, $this->getContext($context, "defaultColor"), "html", null, true);
        echo " !important; font-size:20px; position:absolute; top:-9px; left:11px;
    }
    .accueil-produits, .note-degustation, .note-elaboration{
    width: 422px;
    height: 350px;
    overflow: auto;
    }

    .jspTrack{
    background:#FFF;
    }
    .accueil-produits .jspDrag, .note-degustation .jspDrag, .note-elaboration .jspDrag{
    background:#";
        // line 74
        echo twig_escape_filter($this->env, $this->getContext($context, "defaultColor"), "html", null, true);
        echo " !important;
    }
  </style>
  <div class=\"main\">
    <div class=\"collection-home\">
      <div class=\"menu_collection\">
        <ul>                    
          ";
        // line 81
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "collections"));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 82
            echo "          <li id=\"marc_";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "id"), "html", null, true);
            echo "\">
            ";
            // line 83
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SiteCartronBundle:Default:lienMenuPageCollection", array("id" => $this->getAttribute($this->getContext($context, "article"), "id"), "titreEn" => $this->getAttribute($this->getContext($context, "article"), "titreEn"), "titreFr" => $this->getAttribute($this->getContext($context, "article"), "titreFr"), "rid" => "")));
            echo "
          </li>
          <style>
            .collection-home .menu_collection #marc_";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "id"), "html", null, true);
            echo " a:hover, .collection-home .menu_collection li a.active{
            border-bottom:2px solid #";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "color"), "html", null, true);
            echo ";
            }
          </style>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "        </ul>
      </div> <!-- # end menu collection -->   

  
      <div class=\"camera_wrap camera_azure_skin\" id=\"camera_wrap_1\">
\t
\t
\t
        ";
        // line 99
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "sousMenu"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 100
            echo "
        <div  data-thumb=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("upload/" . $this->getAttribute($this->getContext($context, "article"), "icone"))), "html", null, true);
            echo "\" data-src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/images/trans.png"), "html", null, true);
            echo "\">
          <div class=\"camera_effected\">
            <div class=\"visuel\">
              <h2><a href=\"#0\" onclick=\"return false\" class=\"acc-produit\">";
            // line 104
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "_locale"), "method") == "en")) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "titreEn"), "html", null, true);
                echo " ";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "titreFr"), "html", null, true);
                echo " ";
            }
            echo "</a></h2>
              <img src=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("upload/" . $this->getAttribute($this->getContext($context, "article"), "image"))), "html", null, true);
            echo "\" alt=\"\">
            </div>
            <div class=\"description\">
              ";
            // line 108
            if (($this->getAttribute($this->getContext($context, "article"), "id") == $this->getAttribute($this->getContext($context, "articleDefault"), "id"))) {
                // line 109
                echo "              <div class=\"current-load ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
                echo " accueil-produits\">
              ";
            } else {
                // line 111
                echo "              <div class=\"accueil-produits ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
                echo "\">
              ";
            }
            // line 113
            echo "                ";
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "_locale"), "method") == "en")) {
                echo " ";
                echo $this->getAttribute($this->getContext($context, "article"), "descriptionEn");
                echo " ";
            } else {
                echo " ";
                echo $this->getAttribute($this->getContext($context, "article"), "descriptionFr");
                echo " ";
            }
            // line 114
            echo "                <p class=\"marge9\"><span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Degré"), "html", null, true);
            echo " :</span> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "degre"), "html", null, true);
            echo "%</p>
                <p class=\"marge9\"><span>";
            // line 115
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Contenance"), "html", null, true);
            echo " :</span>";
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "_locale"), "method") == "en")) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "contenanceEn"), "html", null, true);
                echo " ";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "contenanceFr"), "html", null, true);
                echo " ";
            }
            echo "</p>
                <p class=\"marge9\"><span>";
            // line 116
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Conserver"), "html", null, true);
            echo "</span>";
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "_locale"), "method") == "en")) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "conserverEn"), "html", null, true);
                echo " ";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "conserverFr"), "html", null, true);
                echo " ";
            }
            echo "</p>
              </div>
              <div class=\"note-degustation\">
                <h3>";
            // line 119
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Note de dégustation"), "html", null, true);
            echo "</h3>
                ";
            // line 120
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "_locale"), "method") == "en")) {
                echo " ";
                echo $this->getAttribute($this->getContext($context, "article"), "noteDegustationEn");
                echo " ";
            } else {
                echo " ";
                echo $this->getAttribute($this->getContext($context, "article"), "noteDegustationFr");
                echo " ";
            }
            // line 121
            echo "              </div>
              <div class=\"note-elaboration\">
                <h3>";
            // line 123
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Elaboration"), "html", null, true);
            echo "</h3>
                ";
            // line 124
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "_locale"), "method") == "en")) {
                echo " ";
                echo $this->getAttribute($this->getContext($context, "article"), "elaborationEn");
                echo " ";
            } else {
                echo " ";
                echo $this->getAttribute($this->getContext($context, "article"), "elaborationFr");
                echo " ";
            }
            // line 125
            echo "              </div>
              <div class=\"link-produits\">
                <a href=\"";
            // line 127
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "_locale"), "method") == "en")) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "recetteEn"), "html", null, true);
                echo " ";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "recetteFr"), "html", null, true);
                echo " ";
            }
            echo "\"><span><b>&rsaquo;</b>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Recettes"), "html", null, true);
            echo "</span></a>
                <a class=\"degustation\"><span><b>&rsaquo;</b>";
            // line 128
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Note de dégustation"), "html", null, true);
            echo "</span></a>
                <a class=\"elaboration\"><span><b>&rsaquo;</b>";
            // line 129
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Elaboration"), "html", null, true);
            echo "</span></a>
              </div>
            </div>
          </div>
        </div> 
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "
      </div>
    </div>    
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SiteCartronBundle:Default:collection_produit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 135,  333 => 129,  329 => 128,  315 => 127,  311 => 125,  301 => 124,  297 => 123,  293 => 121,  283 => 120,  279 => 119,  263 => 116,  249 => 115,  242 => 114,  231 => 113,  225 => 111,  219 => 109,  217 => 108,  211 => 105,  199 => 104,  191 => 101,  188 => 100,  171 => 99,  161 => 91,  151 => 87,  147 => 86,  141 => 83,  136 => 82,  132 => 81,  122 => 74,  107 => 62,  93 => 51,  87 => 48,  83 => 47,  38 => 4,  35 => 3,  29 => 2,);
    }
}
