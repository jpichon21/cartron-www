<?php

/* SiteCartronBundle:Default:degustation_produit.html.twig */
class __TwigTemplate_660948e8b152770973aabd512e83715e extends Twig_Template
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
        echo "
<script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/js/jquery.cycle2.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/js/jquery.cycle2.carousel.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/js/jquery.cycle2.tile.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\">
\t\$(function() 
\t{
  \t\t\$('.desconly').jScrollPane({scrollbarWidth: 4, autoReinitialise: true});
  \t\t\$('.subMenu').jScrollPane({scrollbarWidth: 6});

\t  \t\$('.next').hover(function() { \$('#degustation .main').stop().animate({backgroundPosition: '45% 0px'}, 2000) }, 
\t  \tfunction() { \$('#degustation .main').stop().animate({backgroundPosition: '50% 0'}, 2000) });

\t\t
\t
\t\t
\t\t\$('.imprimer').click(function(){ window.print() })

\t})
</script>

<style>
  .desconly{
  width: 400px;
  height: 370px;
  overflow: auto;
  }
  .jspDrag{
  background:#7C8184;
  }
  .jspTrack{
  background:#FFF;
  }
  .menu_degustation .jspDrag{
  background:#FFF !important;
  }
</style>
<div id=\"degustation-produits\">
  <div class=\"main\">
    <div class=\"degustation-home\">
      <div class=\"menu_degustation\">
        <ul>

          ";
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "degustation"));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 49
            echo "          <li class=\"menuLiWithSubMenu\">
            ";
            // line 50
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SiteCartronBundle:Default:lienMenuPageDegustation", array("id" => $this->getAttribute($this->getContext($context, "article"), "id"), "titreEn" => $this->getAttribute($this->getContext($context, "article"), "titreEn"), "titreFr" => $this->getAttribute($this->getContext($context, "article"), "titreFr"))));
            echo "
            <div class=\"scrollMenu\">
              <ul class=\"subMenu\">
                ";
            // line 53
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "sousMenu"));
            foreach ($context['_seq'] as $context["_key"] => $context["sm"]) {
                // line 54
                echo "                ";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "sm"), "idDegustation"), "id") == $this->getAttribute($this->getContext($context, "article"), "id"))) {
                    // line 55
                    echo "                <li>
                  <a href=\"";
                    // line 56
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_degustation_produit", array("id" => $this->getAttribute($this->getContext($context, "sm"), "id"))), "html", null, true);
                    echo "\">
                    ";
                    // line 57
                    if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "_locale"), "method") == "en")) {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sm"), "titreEn"), "html", null, true);
                        echo " ";
                    } else {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sm"), "titreFr"), "html", null, true);
                        echo " ";
                    }
                    // line 58
                    echo "                  </a>
                </li>
                ";
                }
                // line 61
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sm'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "              </ul>
            </div>
          </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "
        </ul>
      </div> <!-- # end menu degustation -->
      <div class=\"content\">

        <div id=\"slideshow-1\">

          <a href=\"#\" class=\"cycle-prev\"></a>
          <a href=\"#\" class=\"cycle-next\"></a>
          
          <div id=\"cycle-1\" data-cycle-slides=\".cycle\" data-cycle-fx=\"scrollHorz\"  data-cycle-timeout=\"0\" data-cycle-prev=\"#slideshow-1 .cycle-prev\" data-cycle-next=\"#slideshow-1 .cycle-next\" data-cycle-caption=\"#slideshow-1 .custom-caption\">
\t\t\t
            ";
        // line 78
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "sousMenu2"));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 79
            echo "            <div class=\"article_";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "id"), "html", null, true);
            echo " cycle ";
            if (($this->getAttribute($this->getContext($context, "article"), "couleurArrierePlan") == "noir")) {
                echo " ";
                echo "imageNoir";
                echo " ";
            }
            echo " ";
            if (($this->getAttribute($this->getContext($context, "article"), "id") == $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "id"), "method"))) {
                echo "cycle-slide-active";
            }
            echo "\">
              <img src=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("upload/" . $this->getAttribute($this->getContext($context, "article"), "image"))), "html", null, true);
            echo "\" width=\"977\" height=\"577\" alt=\"\" />
              <a href=\"javascript:window.history.back()\" class=\"back\">";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Retour"), "html", null, true);
            echo "</a>
              <div class=\"description\">
                <h3>";
            // line 83
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "_locale"), "method") == "en")) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "titreEn"), "html", null, true);
                echo " ";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "titreFr"), "html", null, true);
                echo " ";
            }
            echo "</h3>
                <div class=\"desconly\">
  
                  <div class=\"text txtScroll\">
                    ";
            // line 87
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "_locale"), "method") == "en")) {
                echo " ";
                echo $this->getAttribute($this->getContext($context, "article"), "descriptionEn");
                echo " ";
            } else {
                echo " ";
                echo $this->getAttribute($this->getContext($context, "article"), "descriptionFr");
                echo " ";
            }
            // line 88
            echo "                  </div>
                  <div class=\"sep\"></div>
\t\t\t\t  ";
            // line 90
            if ((($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "_locale"), "method") == "en") && (trim($this->getAttribute($this->getContext($context, "article"), "noteDegustationEn")) != ""))) {
                // line 91
                echo "                  <h4>Tasting Tip</h4>
                  <div class=\"text\">
                    ";
                // line 93
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "_locale"), "method") == "en")) {
                    echo " ";
                    echo $this->getAttribute($this->getContext($context, "article"), "noteDegustationEn");
                    echo " ";
                } else {
                    echo " ";
                    echo $this->getAttribute($this->getContext($context, "article"), "noteDegustationFr");
                    echo " ";
                }
                // line 94
                echo "                  </div>
\t\t\t\t  ";
            }
            // line 96
            echo "                  
\t\t\t\t  ";
            // line 97
            if ((($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "_locale"), "method") == "fr") && (trim($this->getAttribute($this->getContext($context, "article"), "noteDegustationFr")) != ""))) {
                // line 98
                echo "                  <h4>Note de Dégustation</h4>
                  <div class=\"text\">
                    ";
                // line 100
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "_locale"), "method") == "en")) {
                    echo " ";
                    echo $this->getAttribute($this->getContext($context, "article"), "noteDegustationEn");
                    echo " ";
                } else {
                    echo " ";
                    echo $this->getAttribute($this->getContext($context, "article"), "noteDegustationFr");
                    echo " ";
                }
                // line 101
                echo "                  </div>
\t\t\t\t  ";
            }
            // line 103
            echo "                  
                </div>
                <div class=\"icons\">
                  <a href=\"http://www.facebook.com/sharer.php?u=http://www.cartron.fr\" class=\"facebook\"></a>
                  <a href=\"#\" class=\"telecharger\"></a>
                  <a href=\"javascript:window.print();\" class=\"imprimer\"></a>
                </div>
              </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "


          </div>
        </div>

      </div> <!-- # end content degustation -->            
    </div>    
  </div>
</div>
<style>
  .text p {color: #2F383E}
</style>

<script>
\$(document).ready(function() { 
var ids = \"#\";
var link = \$(\"<div />\");

   \$(\".content .text a\").each(function() {
      var links = \$(this).parent().find(\"a\");
      links.each(function() {
         ids += \$(this).attr(\"href\") + \",\";
      });
   });

   \$(\".content .text a\").each(function() {
     var url = \"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_degustation_produit", array("id" => "id")), "html", null, true);
        echo "\";
     var id = \$(this).attr(\"href\");
     url = url.replace(\"id\", \$(this).attr(\"href\"));
     \$(this).attr(\"href\", url + ids);
   });

if(document.location.hash){
  var elements = [];
  var parameters = document.location.hash;
  parameters = parameters.substring(1,parameters.length);
  parameters = parameters.split(\",\");
  console.log(parameters);
  for(var i= 0; i < parameters.length; i++){
    elements.push(\$(\".article_\"+parameters[i]));
  }
  \$(\"#cycle-1\").html(elements);
  } 

  var position = \$('#cycle-1 .cycle').index( \$('.article_";
        // line 158
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "articleDefault"), "id"), "html", null, true);
        echo "') );
  \$('#cycle-1').show().cycle({'startingSlide':position, 'log':false});
});

</script>



";
    }

    public function getTemplateName()
    {
        return "SiteCartronBundle:Default:degustation_produit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 158,  308 => 140,  279 => 113,  264 => 103,  260 => 101,  250 => 100,  246 => 98,  244 => 97,  241 => 96,  237 => 94,  227 => 93,  223 => 91,  221 => 90,  217 => 88,  207 => 87,  192 => 83,  187 => 81,  183 => 80,  168 => 79,  164 => 78,  150 => 66,  141 => 62,  135 => 61,  130 => 58,  120 => 57,  116 => 56,  113 => 55,  110 => 54,  106 => 53,  100 => 50,  97 => 49,  93 => 48,  49 => 7,  45 => 6,  41 => 5,  38 => 4,  35 => 3,  29 => 2,);
    }
}
