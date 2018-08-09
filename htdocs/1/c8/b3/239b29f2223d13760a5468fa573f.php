<?php

/* SiteCartronBundle:Statique:index.html.twig */
class __TwigTemplate_c8b3239b29f2223d13760a5468fa573f extends Twig_Template
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
        echo "Cartron: ";
        echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        if (($this->getContext($context, "page") == "Savoir-faire")) {
            // line 5
            echo "<script type=\"text/javascript\">
  \$(function() {
  var myPlayer = _V_(\"example_video_1\");

  \$('.close').click(function() {  
      myPlayer.pause();
  });
  \$('.desc-licornes').jScrollPane({scrollbarWidth: 4});

  \$('.savoir-faire-home li a')
  .hover(function(e) {
  \$(this).next('.captionShine').hoverFlow(e.type, {left: 214}, 'slow');
  }, function(e) {
  \$(this).next('.captionShine').hoverFlow(e.type, {left: -214}, 0);
  });
  \$('.savoir-faire').addClass(\"active\");
  })
</script>
<link href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/css/video-js.css"), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
<script type=\"text/javascript\" src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/js/video.js"), "html", null, true);
            echo "\"></script>
<div id=\"savoir-faire\">
  <div class=\"main\">
    <div class=\"savoir-faire-home\">
      <ul>
        <li>
          <img alt=\"\" src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/images/savoir-faire_04.jpg"), "html", null, true);
            echo "\">      
        </li>
        <li>
          <img alt=\"\" src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/images/savoir-faire-05.jpg"), "html", null, true);
            echo "\">           
        </li>
        <li>
          <img alt=\"\" src=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/images/savoir-faire-06.jpg"), "html", null, true);
            echo "\">             
        </li>
        <li>
\t\t  ";
            // line 39
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                // line 40
                echo "          <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "Savoir-faire-fruits")), "html", null, true);
                echo "\"><img alt=\"\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/images/selection-fruits.jpg"), "html", null, true);
                echo "\">         </a>  
\t\t  ";
            } else {
                // line 42
                echo "          <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "Savoir-faire-fruits")), "html", null, true);
                echo "\"><img alt=\"\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/images/selection-fruits-en.jpg"), "html", null, true);
                echo "\">         </a>  
\t\t  ";
            }
            // line 44
            echo "
          <div class=\"captionShine\"></div>  
        </li>
        <li>
          <img alt=\"\" src=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/images/savoir-faire-07.jpg"), "html", null, true);
            echo "\">           
        </li>
        <li>
\t\t  ";
            // line 51
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                // line 52
                echo "          <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "Savoir-faire-elaboration")), "html", null, true);
                echo "\"><img alt=\"\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/images/elaboration-gout.jpg"), "html", null, true);
                echo "\">      </a>
\t\t  ";
            } else {
                // line 54
                echo "          <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "Savoir-faire-elaboration")), "html", null, true);
                echo "\"><img alt=\"\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/images/elaboration-gout-en.jpg"), "html", null, true);
                echo "\">      </a>
\t\t  ";
            }
            // line 56
            echo "          <span class=\"captionShine\"></span>
        </li>
        <li>
\t\t  ";
            // line 59
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                // line 60
                echo "          <img alt=\"\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/images/cartron-savoir-faire.jpg"), "html", null, true);
                echo "\">      
\t\t  ";
            } else {
                // line 62
                echo "          <img alt=\"\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/images/cartron-savoir-faire-en.jpg"), "html", null, true);
                echo "\">      
\t\t  ";
            }
            // line 64
            echo "        </li>
        <li>
          <img alt=\"\" src=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/images/savoir-faire-08.jpg"), "html", null, true);
            echo "\">             
        </li>
        <li>
          <img alt=\"\" src=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/images/savoir-faire-09.jpg"), "html", null, true);
            echo "\">            
        </li>
        <li>
          <img alt=\"\" src=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/images/savoir-faire-10.jpg"), "html", null, true);
            echo "\">             
        </li>
        <li>
          <img alt=\"\" src=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/images/savoir-faire-11.jpg"), "html", null, true);
            echo "\">            
        </li>
        <li>
          <img alt=\"\" src=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/images/savoir-faire-12.jpg"), "html", null, true);
            echo "\">          
        </li>
        <li>
\t\t  ";
            // line 81
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                // line 82
                echo "          <a href=\"#0\" class=\"lanch_video\"><img alt=\"\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/images/esprit-maison.jpg"), "html", null, true);
                echo "\">        </a> 
\t\t  ";
            } else {
                // line 84
                echo "          <a href=\"#0\" class=\"lanch_video\"><img alt=\"\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/images/esprit-maison-en.jpg"), "html", null, true);
                echo "\">        </a> 
\t\t  ";
            }
            // line 86
            echo "          <div class=\"captionShine\" style=\"left: -214px;\"></div>  
        </li>
        <li>
          <img alt=\"\" src=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/images/savoir-faire-13.jpg"), "html", null, true);
            echo "\">         
        </li>
        <li>
          <img alt=\"\" src=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/images/savoir-faire-14.jpg"), "html", null, true);
            echo "\">          
        </li>
        <li>
\t\t  ";
            // line 95
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                // line 96
                echo "          <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "Savoir-faire-creation")), "html", null, true);
                echo "\"><img alt=\"\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/images/laboratoire-creation.jpg"), "html", null, true);
                echo "\"></a>
\t\t  ";
            } else {
                // line 98
                echo "          <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "Savoir-faire-creation")), "html", null, true);
                echo "\"><img alt=\"\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/images/laboratoire-creation-en.jpg"), "html", null, true);
                echo "\"></a>
\t\t  ";
            }
            // line 100
            echo "          <div class=\"captionShine\"></div>  
        </li>
      </ul>
    </div>    
  </div>
</div>
<div class=\"overlay-videos overlay\">
  <div class=\"pop-up-videos\">
    <div class=\"pop-videos-content\">
      <a href=\"#\" class=\"close\">fermer</a>

      <video id=\"example_video_1\" class=\"video-js vjs-default-skin\" controls preload=\"none\" width=\"739\" height=\"486\"
             poster=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/images/video-home.jpg"), "html", null, true);
            echo "\"
             data-setup=\"{}\">
        ";
            // line 114
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "_locale"), "method") == "fr")) {
                // line 115
                echo "        <source src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("upload/video_hp/cartron_fr.mp4"), "html", null, true);
                echo "\" type='video/mp4' />
        <source src=\"";
                // line 116
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("upload/video_hp/cartron_fr.webm"), "html", null, true);
                echo "\" type='video/webm' />
        <source src=\"";
                // line 117
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("upload/video_hp/cartron_fr.ogv"), "html", null, true);
                echo "\" type='video/ogg' />
        <track kind=\"captions\" src=\"demo.captions.vtt\" srclang=\"en\" label=\"English\" />
        ";
            } else {
                // line 120
                echo "        <source src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("upload/video_hp/cartron_en.mp4"), "html", null, true);
                echo "\" type='video/mp4' />
        <source src=\"";
                // line 121
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("upload/video_hp/cartron_en.webm"), "html", null, true);
                echo "\" type='video/webm' />
        <source src=\"";
                // line 122
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("upload/video_hp/cartron_en.ogv"), "html", null, true);
                echo "\" type='video/ogg' />
        <track kind=\"captions\" src=\"demo.captions.vtt\" srclang=\"en\" label=\"English\" />
        ";
            }
            // line 125
            echo "
      </video>

    </div>
  </div>
</div>
";
        } elseif (($this->getContext($context, "page") == "savoir-faire-elaboration-creme")) {
            // line 132
            echo "<script type=\"text/javascript\">
  \$(function() {
  \$('.desc-creation').jScrollPane({scrollbarWidth: 4});
  \$('.savoir-faire').addClass(\"active\");
  })
</script>
<div id=\"savoir-faire\">
  <div class=\"main\">
    <div class=\"savoir-faire-home\">

      <div class=\"savoir-faire-creation\">
        <a href=\"";
            // line 143
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "Savoir-faire")), "html", null, true);
            echo "\" class=\"retour dn\"><span>Retour</span></a>
        <img src=\"";
            // line 144
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/images/img-elaboration.jpg"), "html", null, true);
            echo "\" alt=\"\" />
        <h2><span>";
            // line 145
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("l’élaboration"), "html", null, true);
            echo "</span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("du goût"), "html", null, true);
            echo "</h2>
        <div class=\"desc-creation\">
\t\t  ";
            // line 147
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                // line 148
                echo "          <h3>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Les Crèmes et les Liqueurs de création"), "html", null, true);
                echo "</h3>
          <p>";
                // line 149
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Les opérations, délicates, sont menées de façon artisanale, dans le respect de procédés de fabrication et de recettes éprouvés par le temps :1"), "html", null, true);
                echo "</p>
          <p>";
                // line 150
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Pour les crèmes et les liqueurs, les fruits, une fois récoltés à pleine maturité, sont mis en cuve de macération avec l’alcool surfin. Le temps de macération est défini pour chaque fruit en fonction de sa capacité à transférer parfaitement son parfum sur l’alcool1."), "html", null, true);
                echo "</p>

          <p>";
                // line 152
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("C’est en effet en trouvant le juste équilibre entre le fruit, l’alcool et le sucre, que se révélera pleinement l’authenticité du fruit. Cet équilibre est unique pour chacun des différents produits et a été obtenu après de multiples essais en laissant parler le coeur et le palais1."), "html", null, true);
                echo "</p>
          <p>";
                // line 153
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Pour la fabrication des liqueurs d’agrumes (triple sec, curaçao, mandarine), de cacao et de café, les huiles essentielles d’orange et de mandarine, les grains de café ou les fèves de cacao sont encore distillés par nos soins, dans un alambic traditionnel appelé poire à parfum. Sa forme spécifique permet de concentrer les arômes et de donner à la liqueur un parfum incomparable1."), "html", null, true);
                echo "</p>
\t\t  ";
            } else {
                // line 155
                echo "          <h3>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Les Crèmes et les Liqueurs de création"), "html", null, true);
                echo "</h3>
          <p>The delicate operations are carried out in an artisanal fashion, with respect to the process techniques and the longstanding successful recipes:</p>
\t\t  <p>For the Crèmes and the Liqueurs, the fruits, once harvested at full maturity, are put to macerate in stainless steel vats with pure alcohol. Maceration time is defined for each fruit according to its capacity to perfectly transfer its perfume to the alcohol.</p>
\t\t  <p>It is by finding the perfect balance between the fruit, the alcohol and the sugar, that the authenticity of the fruit will be fully revealed. This balance is unique for each different product and has been obtained after series of tests, letting both the heart and the palate express themselves.</p>
\t\t  <p>For the production of Citrus fruit Liqueurs (Triple Sec, Curaçao, Mandarine), Cacao and Café, essential oils of orange and tangerine, coffee beans or cocoa beans are still distilled by our company, in a traditional pot-still - a pear shaped retort. Its specific form perfectly concentrates the aromas giving the liqueur its incomparable perfume.</p>
\t\t  ";
            }
            // line 161
            echo "
        </div>

        <a href=\"";
            // line 164
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "savoir-faire-elaboration-eau")), "html", null, true);
            echo "\" class=\"link-eau-vie\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Les Eaux de vie de tradition >"), "html", null, true);
            echo "</a>

        <div class=\"link-creation-bt\">
          <a href=\"";
            // line 167
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "Savoir-faire-creation")), "html", null, true);
            echo "\"><span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("le laboratoire"), "html", null, true);
            echo "</span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("de création"), "html", null, true);
            echo "</a>
          <a href=\"";
            // line 168
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "Savoir-faire-fruits")), "html", null, true);
            echo "\"><span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("la sélection"), "html", null, true);
            echo "</span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("des fruits"), "html", null, true);
            echo "</a>
        </div>
      </div>
    </div>    
  </div>
</div>
";
        } elseif (($this->getContext($context, "page") == "savoir-faire-elaboration-eau")) {
            // line 175
            echo "<script type=\"text/javascript\">
  \$(function() {
  \$('.desc-creation').jScrollPane({scrollbarWidth: 4});
  })
</script>
<div id=\"savoir-faire\">
  <div class=\"main\">
    <div class=\"savoir-faire-home\">
      <div class=\"savoir-faire-creation\">
        <a href=\"";
            // line 184
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "Savoir-faire")), "html", null, true);
            echo "\" class=\"retour dn\"><span>Retour</span></a>
        <img src=\"";
            // line 185
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/images/img-elaboration-eau.jpg"), "html", null, true);
            echo "\" alt=\"\" />

\t\t";
            // line 187
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                // line 188
                echo "        <h2><span>l’élaboration</span> du goût</h2>
        <div class=\"desc-creation\">
          <h3>Les Eaux-de-vie de tradition</h3>
          <p>Les opérations, délicates, sont menées de façon artisanale, dans le respect de procédés de fabrication et de recettes éprouvés par le temps :</p>

          <p>Pour ses eaux-de-vie, la Maison Joseph Cartron travaille depuis des décennies avec les mêmes familles de distillateurs ambulants. Ces derniers distillent la Poire Williams, le Marc et la Fine dans des alambics bourguignons de cuivre.
\t\t  </p>
\t\t  <p>
            Ensuite, l’eau-de-vie de Poire Williams est conservée dans des bonbonnes de verre recouvertes d’osier. Elle vieillit de façon ancestrale, dans le grenier de la Maison ouvert à tous vents, en subissant des variations de température extrêmes. Quant au Marc et à la Fine de Bourgogne, le vieillissement se fait en foudres de chêne à la cave.
          </p>

          <p>Puis leur assemblage est fait au palais par les 3 dégustateurs de la Maison qui y apportent un soin tout particulier.<br /><br/>
            Enfin, tous les produits, crèmes, liqueurs et eaux-de-vie, sont goûtés à chaque étape de fabrication car la Maison a une grande exigence quant à l’excellence et à la constance du produit dans le temps.<br />
            « Laisser faire la nature, se laisser le temps d’exprimer au mieux la saveur du fruit »<br />
\t\t\tC’est là l’esprit de la Maison Joseph Cartron.
          </p>
        </div>
        <a href=\"";
                // line 205
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "savoir-faire-elaboration-creme")), "html", null, true);
                echo "\" class=\"link-eau-vie\">Les crèmes et les liqueurs de création</a>
\t\t";
            } else {
                // line 207
                echo "        <h2><span>Creating</span> taste</h2>
        <div class=\"desc-creation\">
          <h3>Les Eaux-de-vie de tradition</h3>
          <p>For its Eaux-de-Vie, the Joseph Cartron Company has been working for dozens of years with the same families of itinerant distillers. They distill the Poire Williams, the Marc and the Fine in Burgundian copper pot-stills.</p>

          <p>Then, the Eau-de-Vie de Poire Williams is stocked in demijohns protected by wicker baskets. It ages according to ancestral methods in the attic of the Company open to all winds; it allows the Eaux-de-Vie to benefit from the thermal shocks during the different seasons and over the years. For the Marc and the Fine de Bourgogne, ageing is carried out in oak casks in the cellars.</p>

          <p>Then blending is carried out by the Company's 3 tasters according to their palate, a delicate and very meticulous task.</p>

\t\t  <p>Finally, all the products, Crèmes, Liqueurs and Eaux-de-Vie, are tasted at each stage of production because the Company pays great attention to the excellence and the regularity of the product over the years.</p>

\t\t  <p>\"Let nature do its work and let time best express the savour of the fruit\" this is the spirit of the Joseph Cartron Company.</p>
       </div>
        <a href=\"";
                // line 220
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "savoir-faire-elaboration-creme")), "html", null, true);
                echo "\" class=\"link-eau-vie\">Les crèmes et les liqueurs de création</a>
\t\t";
            }
            // line 222
            echo "
        <div class=\"link-creation-bt\">
          <a href=\"";
            // line 224
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "Savoir-faire-creation")), "html", null, true);
            echo "\"><span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("le laboratoire"), "html", null, true);
            echo "</span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("de création"), "html", null, true);
            echo "</a>
          <a href=\"";
            // line 225
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "Savoir-faire-fruits")), "html", null, true);
            echo "\"><span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("la sélection"), "html", null, true);
            echo "</span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("des fruits"), "html", null, true);
            echo "</a>
        </div>
      </div>
    </div>    
  </div>
</div>
";
        } elseif (($this->getContext($context, "page") == "Savoir-faire-elaboration")) {
            // line 232
            echo "<div id=\"savoir-faire\">
  <div class=\"main\">
    <div class=\"savoir-faire-home\">
      <div class=\"savoir-faire-creation\">
        <a href=\"";
            // line 236
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "Savoir-faire")), "html", null, true);
            echo "\" class=\"retour dn\"><span>Retour</span></a>
        <img src=\"";
            // line 237
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/images/img-elaboration-home.jpg"), "html", null, true);
            echo "\" alt=\"\" />
\t\t";
            // line 238
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                // line 239
                echo "        <h2><span>l’élaboration</span> du goût</h2>                
        <a href=\"";
                // line 240
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "savoir-faire-elaboration-creme")), "html", null, true);
                echo "\" class=\"link-liqueur\">Les Crèmes et les Liqueurs de création</a>
        <a href=\"";
                // line 241
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "savoir-faire-elaboration-eau")), "html", null, true);
                echo "\" class=\"link-eau-vie-home\">Les Eaux-de-vie de tradition</a>
        <div class=\"link-creation-bt\">
          <a href=\"";
                // line 243
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "Savoir-faire-creation")), "html", null, true);
                echo "\"><span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("le laboratoire"), "html", null, true);
                echo "</span> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("de création"), "html", null, true);
                echo "</a>
          <a href=\"";
                // line 244
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "Savoir-faire-fruits")), "html", null, true);
                echo "\"><span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("la sélection"), "html", null, true);
                echo "</span> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("des fruits"), "html", null, true);
                echo "</a>
        </div>
\t\t";
            } else {
                // line 247
                echo "        <h2><span>Creating </span>taste</h2>                
        <a href=\"";
                // line 248
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "savoir-faire-elaboration-creme")), "html", null, true);
                echo "\" class=\"link-liqueur\">Les Crèmes et les Liqueurs de création</a>
        <a href=\"";
                // line 249
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "savoir-faire-elaboration-eau")), "html", null, true);
                echo "\" class=\"link-eau-vie-home\">Les Eaux-de-vie de tradition</a>
        <div class=\"link-creation-bt\">
          <a href=\"";
                // line 251
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "Savoir-faire-creation")), "html", null, true);
                echo "\"><span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("le laboratoire"), "html", null, true);
                echo "</span> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("de création"), "html", null, true);
                echo "</a>
          <a href=\"";
                // line 252
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "Savoir-faire-fruits")), "html", null, true);
                echo "\"><span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("la sélection"), "html", null, true);
                echo "</span> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("des fruits"), "html", null, true);
                echo "</a>
        </div>
\t\t";
            }
            // line 255
            echo "      </div>
    </div>    
  </div>
</div>
";
        } elseif (($this->getContext($context, "page") == "Savoir-faire-creation")) {
            // line 260
            echo "<script type=\"text/javascript\">
  \$(function() {
  \$('.desc-creation').jScrollPane({scrollbarWidth: 4});
  \$('.savoir-faire').addClass(\"active\");
  })
</script>
<div id=\"savoir-faire\">
  <div class=\"main\">
    <div class=\"savoir-faire-home\">
      <div class=\"savoir-faire-creation\">
        <a href=\"";
            // line 270
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "Savoir-faire")), "html", null, true);
            echo "\" class=\"retour dn\"><span>Retour</span></a>
        <img src=\"";
            // line 271
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/images/img-creation.jpg"), "html", null, true);
            echo "\" alt=\"\" />
        <h2><span>";
            // line 272
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("le laboratoire"), "html", null, true);
            echo "</span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("de création"), "html", null, true);
            echo "</h2>
        <div class=\"desc-creation\">
          <p>";
            // line 274
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Les coulisses de fabrication renferment un concentré de talent, de recettes, d'exigence et de savoir-faire que chaque génération aime à se transmettre et à cultiver"), "html", null, true);
            echo ".</p>

          <p>";
            // line 276
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("En effet, l'ensemble des processus de fabrication est en parfait équilibre et harmonie : Sélection et cueillette du fruit à pleine maturité, macération dans l'alcool neutre, infusion, mélange et ajout de sucre, filtrage, distillation , vieillissement, assemblage... restent artisanaux"), "html", null, true);
            echo ".</p>

          <p>";
            // line 278
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("De plus, chaque production avant commercialisation fait l'objet de tests de goûts par les équipes de production et les nez de la Maison. La justesse de ce patrimoine, de ce savoir-faire, c'est ce qui identifie lapromesse de la marque Joseph Cartron : l'explosion de toutes ses notes gustatives sur le fruit"), "html", null, true);
            echo ".</p>


        </div>
        <div class=\"link-creation-bt\">
          <a href=\"";
            // line 283
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "Savoir-faire-elaboration")), "html", null, true);
            echo "\"><span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("l'élaboration"), "html", null, true);
            echo "</span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("du goût"), "html", null, true);
            echo "</a>
          <a href=\"";
            // line 284
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "Savoir-faire-fruits")), "html", null, true);
            echo "\"><span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("la sélection"), "html", null, true);
            echo "</span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("des fruits"), "html", null, true);
            echo "</a>
        </div>
      </div>
    </div>    
  </div>
</div>
";
        } elseif (($this->getContext($context, "page") == "Savoir-faire-fruits")) {
            // line 291
            echo "<script type=\"text/javascript\">
  \$(function() {
  \$('.desc-creation').jScrollPane({scrollbarWidth: 4});
  \$('.savoir-faire').addClass(\"active\");
  })
</script>
<div id=\"savoir-faire\">
  <div class=\"main\">
    <div class=\"savoir-faire-home\">
      <div class=\"savoir-faire-creation\">
        <a href=\"";
            // line 301
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "Savoir-faire")), "html", null, true);
            echo "\" class=\"retour dn\"><span>Retour</span></a>
        <img src=\"";
            // line 302
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/images/img-fruits.jpg"), "html", null, true);
            echo "\" alt=\"\" />
        <h2><span>";
            // line 303
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("La séléction"), "html", null, true);
            echo "</span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("des fruits"), "html", null, true);
            echo "</h2>
        <div class=\"desc-creation\">
          <p>";
            // line 305
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Choisir avec soin les meilleurs matières premières"), "html", null, true);
            echo "</p>
          <p>";
            // line 306
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("La sélection des fruits est draconienne , c’est le début de l’expression du savoir-faire de la maison, c’est sans doute la raison pour laquelle la maison Joseph Cartron travaille depuis plusieurs générations avec les mêmes producteurs de fruits"), "html", null, true);
            echo ".</p>

          <p>";
            // line 308
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("C’est également à ce stade que peut débuter la création et l’innovation , en fonction de la parfaite connaissance des fruits et de leur ramassage au moment idoine, puis de la maturation nécessaire à l’expression de goûts et de parfums"), "html", null, true);
            echo ".</p>

          <p>";
            // line 310
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Traiter les fruits avec respect grâce au savoir-faire de la maison"), "html", null, true);
            echo ".</p>

          <p>";
            // line 312
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("En effet, Les opération sont menées de façon artisanale, dans le respect de recettes éprouvées par le temps"), "html", null, true);
            echo ".</p> 

        </div>

        <div class=\"link-creation-bt\">
          <a href=\"";
            // line 317
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "Savoir-faire-creation")), "html", null, true);
            echo "\"><span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("le laboratoire"), "html", null, true);
            echo "</span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("de création"), "html", null, true);
            echo "</a>
          <a href=\"";
            // line 318
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "Savoir-faire-elaboration")), "html", null, true);
            echo "\"><span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("l‘élaboration"), "html", null, true);
            echo "</span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("du goût"), "html", null, true);
            echo "</a>
        </div>
      </div>
    </div>    
  </div>
</div>
";
        } elseif (($this->getContext($context, "page") == "Savoir-faire-fruits")) {
            // line 325
            echo "<script type=\"text/javascript\">
  \$(function() {
  \$('.desc-creation').jScrollPane({scrollbarWidth: 4});
  \$('.savoir-faire').addClass(\"active\");
  })
</script>
<div id=\"savoir-faire\">
  <div class=\"main\">
    <div class=\"savoir-faire-home\">
      <div class=\"savoir-faire-creation\">
        <a href=\"";
            // line 335
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "Savoir-faire")), "html", null, true);
            echo "\" class=\"retour dn\"><span>Retour</span></a>
        <img src=\"";
            // line 336
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/images/img-fruits.jpg"), "html", null, true);
            echo "\" alt=\"\" />
        <h2><span>";
            // line 337
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("La séléction"), "html", null, true);
            echo "</span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("des fruits"), "html", null, true);
            echo "</h2>
        <div class=\"desc-creation-noScroll\">
          <p>";
            // line 339
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Choisir avec soin les meilleurs matières premières"), "html", null, true);
            echo "</p><p>
            ";
            // line 340
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("La sélection des fruits est draconienne , c’est le début de l’expression du savoir-faire de la maison, c’est sans doute la raison pour laquelle la maison Joseph Cartron travaille depuis plusieurs générations avec les mêmes producteurs de fruits"), "html", null, true);
            echo ".</p>

          <p>";
            // line 342
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("C’est également à ce stade que peut débuter la création et l’innovation , en fonction de la parfaite connaissance des fruits et de leur ramassage au moment idoine, puis de la maturation nécessaire à l’expression de goûts et de parfums"), "html", null, true);
            echo ".</p>

          <p>";
            // line 344
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Traiter les fruits avec respect grâce au savoir-faire de la maison"), "html", null, true);
            echo ".</p>

          <p>";
            // line 346
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("En effet, Les opération sont menées de façon artisanale, dans le respect de recettes éprouvées par le temps"), "html", null, true);
            echo ".
          </p>



        </div>

        <div class=\"link-creation-bt\">
          <a href=\"";
            // line 354
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "Savoir-faire-creation")), "html", null, true);
            echo "\"><span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("le laboratoire"), "html", null, true);
            echo "</span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("de création"), "html", null, true);
            echo "</a>
          <a href=\"";
            // line 355
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "Savoir-faire-elaboration")), "html", null, true);
            echo "\"><span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("l‘élaboration"), "html", null, true);
            echo "</span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("du goût"), "html", null, true);
            echo "</a>
        </div>
      </div>
    </div>    
  </div>
</div>
";
        } elseif (($this->getContext($context, "page") == "Savoir-faire-esprit")) {
            // line 362
            echo "<script type=\"text/javascript\">
  \$(function() {
  \$('.desc-creation').jScrollPane({scrollbarWidth: 4});
  \$('.savoir-faire').addClass(\"active\");
  })
</script>
<div id=\"savoir-faire\">
  <div class=\"main\">
    <div class=\"savoir-faire-home\">
      <div class=\"savoir-faire-creation\">
        <a href=\"";
            // line 372
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "Savoir-faire")), "html", null, true);
            echo "\" class=\"retour dn\"><span>Retour</span></a>
        <img src=\"";
            // line 373
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/images/img-fruits.jpg"), "html", null, true);
            echo "\" alt=\"\" />
        <h2><span>";
            // line 374
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("La séléction"), "html", null, true);
            echo "</span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("des fruits"), "html", null, true);
            echo "</h2>
        <div class=\"desc-creation-noScroll\">
          <p>";
            // line 376
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Choisir avec soin les meilleurs matières premières"), "html", null, true);
            echo " :
            ";
            // line 377
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("La sélection des fruits est draconienne , c’est le début de l’expression du savoir-faire de la maison, c’est sans doute la raison pour laquelle la maison Joseph Cartron travaille depuis plusieurs générations avec les mêmes producteurs de fruits"), "html", null, true);
            echo ".</p>

          <p>";
            // line 379
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("C’est également à ce stade que peut débuter la création et l’innovation , en fonction de la parfaite connaissance des fruits et de leur ramassage au moment idoine, puis de la maturation nécessaire à l’expression de goûts et de parfums"), "html", null, true);
            echo ".</p>

          <p>";
            // line 381
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Traiter les fruits avec respect grâce au savoir-faire de la maison"), "html", null, true);
            echo ".</p>

          <p>";
            // line 383
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("En effet, Les opération sont menées de façon artisanale, dans le respect de recettes éprouvées par le temps"), "html", null, true);
            echo ".
            ";
            // line 384
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Laisser faire la nature , laisser le temps au produit d’exprimer au mieux la saveur du fruit dans le juste équilibre entre le fruit, l’alcool et le sucre"), "html", null, true);
            echo ".</p>

          <p>";
            // line 386
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Créer des saveurs de tradition et d’innovation grâce à des assemblages nouveaux élaborés en collaboration avec de grands mixologues"), "html", null, true);
            echo ".</p>    

        </div>

        <div class=\"link-creation-bt\">
          <a href=\"";
            // line 391
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "Savoir-faire-creation")), "html", null, true);
            echo "\"><span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("le laboratoire"), "html", null, true);
            echo "</span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("de création"), "html", null, true);
            echo "</a>
          <a href=\"";
            // line 392
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "Savoir-faire-elaboration")), "html", null, true);
            echo "\"><span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("l‘élaboration"), "html", null, true);
            echo "</span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("du goût"), "html", null, true);
            echo "</a>
        </div>
      </div>
    </div>    
  </div>
</div>
";
        } elseif (($this->getContext($context, "page") == "Patrimoine")) {
            // line 399
            echo "
";
            // line 400
            $this->env->loadTemplate("SiteCartronBundle:Statique:patrimoine.phtml.twig")->display($context);
            // line 401
            echo "
";
        } elseif (($this->getContext($context, "page") == "histoire")) {
            // line 403
            echo "<div id=\"histoire\">
  <div class=\"main\">
    <div class=\"content-histoire\">
      <a href=\"";
            // line 406
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "Patrimoine")), "html", null, true);
            echo "\" class=\"retour dn\"><span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Retour"), "html", null, true);
            echo "</span></a>
      <h1><a href=\"";
            // line 407
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "Patrimoine")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("L’HISTOIRE"), "html", null, true);
            echo "<span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cartron, créateur de saveur depuis"), "html", null, true);
            echo " 1882</span></a></h1>
      <p class=\"intro\">";
            // line 408
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("En 1882 Joseph Cartron fonde la maison éponyme à Nuits St Georges"), "html", null, true);
            echo "...</p>
      <ul>
        <li><a href=\"";
            // line 410
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "joseph-cartron")), "html", null, true);
            echo "\"><span class=\"annee\">1882</span> <span class=\"nom\">JOSEPH <br /><strong>CARTRON</strong></span></a></li>
        <li><a href=\"";
            // line 411
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "armand-cartron")), "html", null, true);
            echo "\"><span class=\"annee\">1940</span> <span class=\"nom\">ARMAND <br /><strong>CARTRON</strong></span></a></li>
        <li><a href=\"";
            // line 412
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "xavier-cartron")), "html", null, true);
            echo "\"><span class=\"annee\">1990</span> <span class=\"nom\">XAVIER <br /><strong>CARTRON</strong></span></a></li>
        <li><a href=\"";
            // line 413
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "judith-cartron")), "html", null, true);
            echo "\"><span class=\"annee\">2011</span> <span class=\"nom\">JUDITH <br /><strong>CARTRON</strong></span></a></li>
      </ul>

    </div>
  </div>
</div>
";
        } elseif (($this->getContext($context, "page") == "la-bourgogne")) {
            // line 420
            echo "<div id=\"bourgogne\">
  <div class=\"main\">
    <div class=\"content-histoire\">
      <a href=\"";
            // line 423
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "Patrimoine")), "html", null, true);
            echo "\" class=\"retour dn\"><span>Retour</span></a>
      <h1><a href=\"";
            // line 424
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "Patrimoine")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("LA BOURGOGNE"), "html", null, true);
            echo "<span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("En Héritage"), "html", null, true);
            echo "</span></a></h1>
      <p class=\"intro\"><em>";
            // line 425
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("La bourgogne fait partie intégrante de l’histoire de la famille Cartron depuis plus de trois siècles"), "html", null, true);
            echo "</em></p>
      <ul>
        <li><a href=\"";
            // line 427
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "la-bourgogne-histoire")), "html", null, true);
            echo "\"><span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("L’histoire de la famille cartron"), "html", null, true);
            echo "</span><br />
            ";
            // line 428
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("en bourgogne depuis plus de 3 siècles"), "html", null, true);
            echo "</a></li>
        <li><a href=\"";
            // line 429
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "la-bourgogne-et-le-coeur")), "html", null, true);
            echo "\"><span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("la bourgogne est le coeur"), "html", null, true);
            echo "</span><br />
            ";
            // line 430
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("et l'inspiration de la maison joseph cartron"), "html", null, true);
            echo "</a></li>
      </ul>
    </div>

  </div>
</div>
";
        } elseif (($this->getContext($context, "page") == "licornes")) {
            // line 437
            echo "<div id=\"licornes\">
  <div class=\"main\">
    <div class=\"content-histoire\">
      <a href=\"";
            // line 440
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "Patrimoine")), "html", null, true);
            echo "\" class=\"retour dn\"><span>Retour</span></a>
      <h1><a href=\"";
            // line 441
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "Patrimoine")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("les licornes"), "html", null, true);
            echo "<span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("L’emblème de la maison Cartron"), "html", null, true);
            echo "</span></a></h1>
      <img src=\"";
            // line 442
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/images/img-licornes.jpg"), "html", null, true);
            echo "\" alt=\"\" />
      <div class=\"desc-licornes\">
        <p>";
            // line 444
            echo $this->env->getExtension('translator')->trans("Les Licornes, Emblème de la Maison Joseph Cartron.");
            echo "</p>

        <p style=\"line-height:16px;\">";
            // line 446
            echo $this->env->getExtension('translator')->trans("Amateur d’art et de littérature");
            echo "</p>
      </div>
    </div>
  </div>
</div>
";
        } elseif (($this->getContext($context, "page") == "joseph-cartron")) {
            // line 452
            echo "<script type=\"text/javascript\">
  \$(function() {
  \$('.desc-histoire').jScrollPane({scrollbarWidth: 4});
  })
</script>
<div id=\"histoire\">
  <div class=\"main\">
    <div class=\"content-histoire\">
      <a href=\"";
            // line 460
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "histoire")), "html", null, true);
            echo "\" class=\"retour dn\"><span>Retour</span></a>
      <h1><a href=\"";
            // line 461
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "histoire")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("L’HISTOIRE"), "html", null, true);
            echo "<span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cartron, créateur de saveur depuis"), "html", null, true);
            echo " 1882</span></a></h1>
      <ul>
        <li><a href=\"";
            // line 463
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "joseph-cartron")), "html", null, true);
            echo "\"><span class=\"annee\">1882</span> <span class=\"nom\">JOSEPH <br /><strong>CARTRON</strong></span></a></li>
      </ul>
      <img src=\"";
            // line 465
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/images/img-joseph-cartron.jpg"), "html", null, true);
            echo "\" alt=\"\" />
      <div class=\"desc-histoire\">
        <p>";
            // line 467
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("En 1882 Joseph Cartron fonde la maison éponyme à Nuits St Georges, fournissant les débits de boissons, la jeune société distribuait les incontournables limonades et eau de Seltz et fabriquait en outre des liqueurs d’anthologie comme la Prunelle, le Marasquin, le Cacao, le Kummel , l’Idéal Bourguignon ou encore la Bisette"), "html", null, true);
            echo ".</p>

        <p>";
            // line 469
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Mais ce qui distingua dés le départ cette petite entreprise familiale , c’est la création de la crème de cassis Double crème appelée à l’époque «Double crème de cassis Cartron» comme une reconnaissance naturelle de l’authenticité et de l’originalité de ce produit dans le berceau même de la crème de cassis"), "html", null, true);
            echo ".</p>
        <p>";
            // line 470
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Sans enfant, Joseph, le fondateur"), "html", null, true);
            echo ".</p>   
        <p>";
            // line 471
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("L’entreprise, bien implantée localement"), "html", null, true);
            echo ".</p> 
      </div>
    </div>
    <div class=\"menu-bt-histoire\">
      <ul>
        <li><a href=\"";
            // line 476
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "joseph-cartron")), "html", null, true);
            echo "\" class=\"dn active\"><span>JOSEPH CARTRON</span></a><p><span class=\"annee\">1882</span> <span class=\"nom\">JOSEPH <br /><strong>CARTRON</strong></span></p></li>
        <li><a href=\"";
            // line 477
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "armand-cartron")), "html", null, true);
            echo "\" class=\"dn\"><span>ARMAND CARTRON</span></a><p><span class=\"annee\">1940</span> <span class=\"nom\">ARMAND <br /><strong>CARTRON</strong></span></p></li>
        <li><a href=\"";
            // line 478
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "xavier-cartron")), "html", null, true);
            echo "\" class=\"dn\"><span>XAVIER CARTRON</span></a><p><span class=\"annee\">1990</span> <span class=\"nom\">XAVIER <br /><strong>CARTRON</strong></span></p></li>
        <li><a href=\"";
            // line 479
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "judith-cartron")), "html", null, true);
            echo "\" class=\"dn\"><span>JUDITH CARTRON</span></a><p><span class=\"annee\">2011</span> <span class=\"nom\">JUDITH <br /><strong>CARTRON</strong></span></p></li>
      </ul>
    </div>
  </div>
</div>
";
        } elseif (($this->getContext($context, "page") == "armand-cartron")) {
            // line 485
            echo "<script type=\"text/javascript\">
  \$(function() {
  \$('.desc-histoire').jScrollPane({scrollbarWidth: 4});
  })
</script>
<div id=\"histoire\">
  <div class=\"main\">
    <div class=\"content-histoire\">
      <a href=\"";
            // line 493
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "histoire")), "html", null, true);
            echo "\" class=\"retour dn\"><span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Retour"), "html", null, true);
            echo "</span></a>
      <h1><a href=\"";
            // line 494
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "histoire")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("L’HISTOIRE"), "html", null, true);
            echo "<span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cartron, créateur de saveur depuis"), "html", null, true);
            echo " 1882</span></a></h1>
      <ul>
        <li><a href=\"";
            // line 496
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "armand-cartron")), "html", null, true);
            echo "\"><span class=\"annee\">1940</span> <span class=\"nom\">ARMAND <br /><strong>CARTRON</strong></span></a></li>
      </ul>
      <img src=\"";
            // line 498
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/images/img-armand-cartron.jpg"), "html", null, true);
            echo "\" alt=\"\" />
      <div class=\"desc-histoire\">
\t\t";
            // line 500
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                // line 501
                echo "        <p>C’est Armand, le fils d’Henri, entré  dans la société  dans les années 30, qui va diriger l’entreprise de 1940 à 1985 et la marquer de son empreinte. En effet, il cesse l’activité de grossiste -et donc la fabrication de limonade- pour se consacrer au développement de ses produits à forte valeur ajoutée, sur le marché français bien sûr, mais aussi à l’international.</p>
\t\t<p>En visionnaire, il implante sa marque dans la grande distribution alors qu’elle n’en est qu’à ses balbutiements en France. Il développe l’entreprise au Canada, au Japon, au Luxembourg, en Belgique, en Allemagne, en Italie et aux Etats­-Unis. Il voyage beaucoup et sa maison ne désemplit pas de clients amis qui viennent déguster ses produits.</p>
        <p>C’est sous son règne que les murs de l’entreprise ont été repoussés pour l’agrandir et que le conditionnement des bouteilles a été mécanisé.</p>
        <p>Armand est un créatif, gastronome, lettré et pianiste émérite. Il est aussi un nez et un palais très fins. Il va donc développer largement la gamme des produits en s’attachant à la qualité des saveurs et des parfums.</p>
        <p>La Maison lui doit de nombreuses recettes originales, notamment le n°7, septième essai d’une rare   alchimie   destinée  à  partager   la   Bourgogne   des   fruits   rouges   grâce  à  l’harmonie particulière de ses 15 composants.</p>
        <p>Ces créations, consignées par écrit dans un cahier d’écolier, sont aujourd’hui encore jalousement gardées.</p>
\t\t";
            } else {
                // line 508
                echo "\t\t<p>Armand, Henri's son, joined the company in the thirties. With a real impact, he managed the company from 1940 to 1985. He stopped the wholesaler activity -and thus the production of Lemonade- in order to concentrate on the development of products with an important added value, on the French market of course, but also on the international market.</p>
\t\t<p>With great foresight, he implants the brand on the large retail market which is just beginning in France. He also develops the company in Canada, Japan, Luxemburg, Belgium, Germany, Italy and the United States. He travels considerably and his house is always full of client-friends who come in to taste his products.</p>
\t\t<p>It is during his management that the buildings of the company were enlarged and that bottling was mechanized.</p>
\t\t<p>Armand was a creative man, a gourmet, a scholar and a talented pianist. He also had a very fine nose and palate. He therefore largely developped the range of products paying great attention to the quality of both the savours and perfumes.</p>
\t\t<p>The Company is thankful to him for the creation of many original recipes, namely the  N° 7, the seventh trial of a rare alchemy aimed to share the red berries of Burgundy thanks to the original harmony of its 15 components.</p>
\t\t<p>These various creations, handwritten in a school book, are still today jealously kept.</p>
\t\t";
            }
            // line 515
            echo "      </div>\t  
    </div>
    <div class=\"menu-bt-histoire\">
      <ul>
        <li><a href=\"";
            // line 519
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "joseph-cartron")), "html", null, true);
            echo "\" class=\"dn\"><span>JOSEPH CARTRON</span></a><p><span class=\"annee\">1882</span> <span class=\"nom\">JOSEPH <br /><strong>CARTRON</strong></span></p></li>
        <li><a href=\"";
            // line 520
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "armand-cartron")), "html", null, true);
            echo "\" class=\"dn active\"><span>ARMAND CARTRON</span></a><p><span class=\"annee\">1940</span> <span class=\"nom\">ARMAND <br /><strong>CARTRON</strong></span></p></li>
        <li><a href=\"";
            // line 521
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "xavier-cartron")), "html", null, true);
            echo "\" class=\"dn\"><span>XAVIER CARTRON</span></a><p><span class=\"annee\">1990</span> <span class=\"nom\">XAVIER <br /><strong>CARTRON</strong></span></p></li>
        <li><a href=\"";
            // line 522
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "judith-cartron")), "html", null, true);
            echo "\" class=\"dn\"><span>JUDITH CARTRON</span></a><p><span class=\"annee\">2011</span> <span class=\"nom\">JUDITH <br /><strong>CARTRON</strong></span></p></li>
      </ul>
    </div>
  </div>
</div>
";
        } elseif (($this->getContext($context, "page") == "xavier-cartron")) {
            // line 528
            echo "<script type=\"text/javascript\">
  \$(function() {
  \$('.desc-histoire').jScrollPane({scrollbarWidth: 4});
  })
</script>
<div id=\"histoire\">
  <div class=\"main\">
    <div class=\"content-histoire\">
      <a href=\"";
            // line 536
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "histoire")), "html", null, true);
            echo "\" class=\"retour dn\"><span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Retour"), "html", null, true);
            echo "</span></a>
      <h1><a href=\"";
            // line 537
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "histoire")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("L’HISTOIRE"), "html", null, true);
            echo "<span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cartron, créateur de saveur depuis"), "html", null, true);
            echo " 1882</span></a></h1>
      <ul>
        <li><a href=\"";
            // line 539
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "joseph-cartron")), "html", null, true);
            echo "\"><span class=\"annee\">1990</span> <span class=\"nom\">XAVIER <br /><strong>CARTRON</strong></span></a></li>
      </ul>
      <img src=\"";
            // line 541
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/images/img-xavier-cartron.jpg"), "html", null, true);
            echo "\" alt=\"\" />
      <div class=\"desc-histoire\">
\t\t";
            // line 543
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
                // line 544
                echo "\t\t<p>En 1990, succédant à son père, Xavier Cartron prend la direction de la société familiale. Après HEC et une carriére de 22 années dans la finance, c'est un nouveau regard qu'il pose sur la Maison, mais toujours avec le souci de faire fructifier ce patrimoine.</p>
\t\t<p>Il va définir une stratégie claire quant au positionnement haut de gamme de ses produits, lancer un vaste programme de modernisation de l'outil de production et développer une stratégie de distribution sélective offensive en France et à l'international.</p>
\t\t<p>A ces fins, Xavier étoffe le réseau d'agents multicartes et s'entoure d'une véritable équipe de direction. Il crée une organisation aux rouages bien huilés de façon à toujours offrir un produit de qualité et à être à l'écoute de ses clients. Le développement à l'export s'accélère alors fortement. Les produits de la Maison Joseph Cartron s'établissent  légitimement dans les restaurants étoilés et font leur apparition sur les étagères des bars des hôtels de luxe.</p>
\t\t<p>La transmission familiale étant partie intégrante de l'ADN de la Maison Joseph Cartron, c'est bien naturellement qu'à son tour, Xavier passe la main à sa fille Judith en 2011.</p>
\t\t";
            } else {
                // line 549
                echo "\t\t<p>In 1990, after his father, Xavier Cartron takes on the management of the family business. After graduating from HEC (Ecole des Hautes Etudes Commerciales) and a career of 22 years in finance, he sets a new eye on the Company, but always with the firm idea of developing the inheritance.</p>
\t\t<p>He defines a clear strategy concerning the high quality positioning of the products. He launches a vast modernisation program for the production unit and develops a selective and offensive distribution strategy both in France and on the international market.</p>
\t\t<p>To reach these aims, Xavier increases the number of multicard agents and takes on a real management team. He organizes a setup that ticks over beautifully, which both guarantees products of quality and pays great attention to the clients. Export development then flourishes considerably. The products of the Joseph Cartron Company legitimately find their place in the starred restaurants and appear on the shelves of the Luxury Hotel Bars.</p>
\t\t<p>Family transmission being part of the DNA of the Joseph Cartron Company, it is quite naturally that Xavier transmits the commands to his daugther Judith in 2011.</p>
\t\t";
            }
            // line 554
            echo "      </div>
    </div>
    <div class=\"menu-bt-histoire\">
      <ul>
        <li><a href=\"";
            // line 558
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "joseph-cartron")), "html", null, true);
            echo "\" class=\"dn\"><span>JOSEPH CARTRON</span></a><p><span class=\"annee\">1882</span> <span class=\"nom\">JOSEPH <br /><strong>CARTRON</strong></span></p></li>
        <li><a href=\"";
            // line 559
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "armand-cartron")), "html", null, true);
            echo "\" class=\"dn\"><span>ARMAND CARTRON</span></a><p><span class=\"annee\">1940</span> <span class=\"nom\">ARMAND <br /><strong>CARTRON</strong></span></p></li>
        <li><a href=\"";
            // line 560
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "xavier-cartron")), "html", null, true);
            echo "\" class=\"dn active\"><span>XAVIER CARTRON</span></a><p><span class=\"annee\">1990</span> <span class=\"nom\">XAVIER <br /><strong>CARTRON</strong></span></p></li>
        <li><a href=\"";
            // line 561
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "judith-cartron")), "html", null, true);
            echo "\" class=\"dn\"><span>JUDITH CARTRON</span></a><p><span class=\"annee\">2011</span> <span class=\"nom\">JUDITH <br /><strong>CARTRON</strong></span></p></li>
      </ul>
    </div>
  </div>
</div>
";
        } elseif (($this->getContext($context, "page") == "judith-cartron")) {
            // line 567
            echo "<script type=\"text/javascript\">
  \$(function() {
  \$('.desc-histoire').jScrollPane({scrollbarWidth: 4});
  })
</script>
<div id=\"histoire\">
  <div class=\"main\" id=\"main\">
    <div class=\"content-histoire\">
      <a href=\"";
            // line 575
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "histoire")), "html", null, true);
            echo "\" class=\"retour dn\"><span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Retour"), "html", null, true);
            echo "</span></a>
      <h1><a href=\"";
            // line 576
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "histoire")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("L’HISTOIRE"), "html", null, true);
            echo "<span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cartron, créateur de saveur depuis"), "html", null, true);
            echo " 1882</span></a></h1>
      <ul>
        <li><a href=\"";
            // line 578
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "joseph-cartron")), "html", null, true);
            echo "\"><span class=\"annee\">2011</span> <span class=\"nom\">JUDITH <br /><strong>CARTRON</strong></span></a></li>
      </ul>
      <img src=\"";
            // line 580
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/images/img-judith-cartron.jpg"), "html", null, true);
            echo "\" alt=\"\" />
      <div class=\"desc-histoire\">
        <p>";
            // line 582
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("A l’âge de 38 ans, Judith Cartron prend un virage important : Elle quitte une carrière professionnelle bien tracée et Paris pour rejoindre l’entreprise familiale"), "html", null, true);
            echo ".</p> 

        <p>";
            // line 584
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Judith Cartron a pris progressivement les rênes de l’entreprise aux côtés de son père qui pendant 3 ans lui transmet les valeurs et le savoir-faire de l’entreprise"), "html", null, true);
            echo ".</p>

        <p>";
            // line 586
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Passionnée par ce  nouveau challenge"), "html", null, true);
            echo ".
        </p> <p>";
            // line 587
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Depuis juillet 2011, Judith Cartron est présidente de la Maison Joseph Cartron devenant ainsi la première femme, et la 5ème génération de cette fameuse lignée de distillateurs liquoristes, à diriger l’entreprise"), "html", null, true);
            echo ".
        </p>
        <p>";
            // line 589
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Elle développe aujourd’hui"), "html", null, true);
            echo ".
        </p>
      </div>
    </div>
    <div class=\"menu-bt-histoire\">
      <ul>
        <li><a href=\"";
            // line 595
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "joseph-cartron")), "html", null, true);
            echo "\" class=\"dn\"><span>JOSEPH CARTRON</span></a><p><span class=\"annee\">1882</span> <span class=\"nom\">JOSEPH <br /><strong>CARTRON</strong></span></p></li>
        <li><a href=\"";
            // line 596
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "armand-cartron")), "html", null, true);
            echo "\" class=\"dn\"><span>ARMAND CARTRON</span></a><p><span class=\"annee\">1940</span> <span class=\"nom\">ARMAND <br /><strong>CARTRON</strong></span></p></li>
        <li><a href=\"";
            // line 597
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "xavier-cartron")), "html", null, true);
            echo "\" class=\"dn\"><span>XAVIER CARTRON</span></a><p><span class=\"annee\">1990</span> <span class=\"nom\">XAVIER <br /><strong>CARTRON</strong></span></p></li>
        <li><a href=\"";
            // line 598
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "judith-cartron")), "html", null, true);
            echo "\" class=\"dn active\"><span>JUDITH CARTRON</span></a><p><span class=\"annee\">2011</span> <span class=\"nom\">JUDITH <br /><strong>CARTRON</strong></span></p></li>
      </ul>
    </div>
  </div>
</div>
";
        } elseif (($this->getContext($context, "page") == "la-bourgogne-histoire")) {
            // line 604
            echo "
<div id=\"bourgogne\">
  <div class=\"main\">
    <div class=\"content-histoire\">
      <a href=\"";
            // line 608
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "la-bourgogne")), "html", null, true);
            echo "\" class=\"retour dn\" style=\"cursor:default;\"><span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Retour"), "html", null, true);
            echo "</span></a>
      <h1><a style=\"cursor:default;\" href=\"";
            // line 609
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "la-bourgogne")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("LA BOURGOGNE"), "html", null, true);
            echo "<span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("En Héritage"), "html", null, true);
            echo "</span></a></h1>
      <ul class=\"titre-bourgogne\">
        <li><a href=\"#\" style=\"cursor:default;\"><span>";
            // line 611
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("L’histoire de la famille cartron"), "html", null, true);
            echo "</span><br />
            ";
            // line 612
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("en bourgogne depuis plus de 3 siècles"), "html", null, true);
            echo "</a></li>
      </ul>
      <img src=\"";
            // line 614
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/images/img-bourgogne-histoire.jpg"), "html", null, true);
            echo "\" alt=\"\" />
      <script type=\"text/javascript\">
        \$(function() {
        \$('.desc-histoire').jScrollPane({scrollbarWidth: 4});
        })
      </script>
      <div class=\"desc-histoire\">
        <p>";
            // line 621
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("La Bourgogne fait partie intégrante de l’histoire de la famille Cartron depuis plus de trois siècles"), "html", null, true);
            echo ".<br /><br />
          ";
            // line 622
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("En effet, Jean Cartron quitte l’ouest de la France, et plus précisément la Vendée, au moment de la Révolution Française pour venir s’installer en Bourgogne, à Argilly, à quelques kilomètres de Nuits-Saint-Georges. Il devient rapidement propriétaire terrien grâce à son mariage avec une Bourguignonne"), "html", null, true);
            echo ".</p>

        <p>";
            // line 624
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Par la suite, son petit-fils, Pierre Cartron, le père de Joseph, s’installe à Nuits-Saint-Georges au début des années 1870. C’est dans cette ville que Joseph créera la société éponyme en 1882 où elle est toujours ancrée"), "html", null, true);
            echo ".<br /><br />
          ";
            // line 625
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("C’est aussi la Bourgogne qui lui a donné ses armes en lieu et place des licornes et l’envie de rechercher l’excellence du goût"), "html", null, true);
            echo ".<br /><br />
          ";
            // line 626
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Depuis cette date, Nuits-Saint-Georges et la Bourgogne ont toujours été le berceau de la famille Cartron"), "html", null, true);
            echo ".</p>
      </div>
    </div>
    <div class=\"menu-bt-histoire\">
      <ul>
        <li><a href=\"";
            // line 631
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "la-bourgogne-histoire")), "html", null, true);
            echo "\" class=\"dn active\"><span>JOSEPH CARTRON</span></a><p><span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("L’histoire de la famille cartron"), "html", null, true);
            echo "</span><br />
            ";
            // line 632
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("en bourgogne depuis plus de 3 siècles"), "html", null, true);
            echo "</p></li>
        <li><a href=\"";
            // line 633
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "la-bourgogne-et-le-coeur")), "html", null, true);
            echo "\" class=\"dn\"><span>JOSEPH CARTRON</span></a><p><span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("la bourgogne est le coeur"), "html", null, true);
            echo "</span><br />
            ";
            // line 634
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("et l’inspiration de la maison joseph cartron"), "html", null, true);
            echo "</p></li>
      </ul>
    </div>
  </div>
</div>
";
        } elseif (($this->getContext($context, "page") == "la-bourgogne-et-le-coeur")) {
            // line 640
            echo "<script type=\"text/javascript\">
  \$(function() {
  \$('.desc-histoire').jScrollPane({scrollbarWidth: 4});
  })
</script>
<div id=\"bourgogne\">
  <div class=\"main\">
    <div class=\"content-histoire\">
      <a href=\"";
            // line 648
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "la-bourgogne")), "html", null, true);
            echo "\" class=\"retour dn\"><span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Retour"), "html", null, true);
            echo "</span></a>
      <h1><a href=\"";
            // line 649
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "la-bourgogne")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("LA BOURGOGNE"), "html", null, true);
            echo "<span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("En Héritage"), "html", null, true);
            echo "</span></a></h1>
      <ul class=\"titre-bourgogne\">
        <li><a href=\"\" style=\"cursor:default;\"><span>";
            // line 651
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("la bourgogne est le coeur"), "html", null, true);
            echo "</span><br />
            ";
            // line 652
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("et l’inspiration de la maison joseph cartron"), "html", null, true);
            echo "</a></li>
      </ul>
      <img src=\"";
            // line 654
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/images/img-la-bourgogne-et-le-coeur.jpg"), "html", null, true);
            echo "\" alt=\"\" />
      <div class=\"desc-histoire\">
        <p>";
            // line 656
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("La Bourgogne est le coeur et l’inspiration de la Maison Joseph Cartron."), "html", null, true);
            echo "</p>
        <p>
          ";
            // line 658
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Les produits Joseph Cartron s'inscrivent dans la tradition des produits bourguignons : les liens étroits et durables créés avec les producteurs et distillateurs du terroir depuis plusieurs générations ont permis à la Maison Joseph Cartron de construire de véritables partenariats, d'acquérir une connaissance intime du fruit et de travailler ses créations avec les variétés de fruits les plus aromatiques, dans le respect des recettes originales"), "html", null, true);
            echo ".</p>

        <p>";
            // line 660
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Aujourd'hui encore, la Maison Joseph Cartron achète 70% de ses fruits en Bourgogne, ce qui lui permet de choisir elle-même le moment de la récolte et de travailler les fruits à un stade de maturité optimum"), "html", null, true);
            echo ".</p>
        <p>";
            // line 661
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("L'utilisation de ces variétés de fruits locales, souvent à faible rendement comme le cassis Noir de Bourgogne, permet des créations typiquement bourguignonnes absolument incomparables en terme de goût telles que"), "html", null, true);
            echo " :</p>
        <ul>
          <li>";
            // line 663
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("La Crème de Cassis de Bourgogne qui a toujours été le fer de lance de la Maison"), "html", null, true);
            echo "</li>
          <li>";
            // line 664
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Les Crèmes de Pêche de Vigne, de Framboise, de Cerise de Bourgogne"), "html", null, true);
            echo "</li>
          <li>";
            // line 665
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Le Ratafia et le Guignolet de Bourgogne"), "html", null, true);
            echo "</li>
          <li>";
            // line 666
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("La Poire Williams des Monts de la Côte d'Or"), "html", null, true);
            echo "</li>
          <li>";
            // line 667
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Le Marc et la Fine de Bourgogne"), "html", null, true);
            echo "...</li>
        </ul>
      </div>
    </div>
    <div class=\"menu-bt-histoire\">
      <ul>
        <li><a href=\"";
            // line 673
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "la-bourgogne-histoire")), "html", null, true);
            echo "\" class=\"dn\"><span>JOSEPH CARTRON</span></a><p><span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("L’histoire de la famille cartron"), "html", null, true);
            echo "</span><br />
            ";
            // line 674
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("en bourgogne depuis plus de 3 siècles"), "html", null, true);
            echo "</p></li>
        <li><a href=\"";
            // line 675
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "la-bourgogne-et-le-coeur")), "html", null, true);
            echo "\" class=\"dn active\"><span>JOSEPH CARTRON</span></a><p><span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("la bourgogne est le coeur"), "html", null, true);
            echo "</span><br />
            ";
            // line 676
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("et l’inspiration de la maison joseph cartron"), "html", null, true);
            echo "</p></li>
      </ul>
    </div>
  </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "SiteCartronBundle:Statique:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1529 => 676,  1523 => 675,  1519 => 674,  1513 => 673,  1504 => 667,  1500 => 666,  1496 => 665,  1492 => 664,  1488 => 663,  1483 => 661,  1479 => 660,  1474 => 658,  1469 => 656,  1464 => 654,  1459 => 652,  1455 => 651,  1446 => 649,  1440 => 648,  1430 => 640,  1421 => 634,  1415 => 633,  1411 => 632,  1405 => 631,  1397 => 626,  1393 => 625,  1389 => 624,  1384 => 622,  1380 => 621,  1370 => 614,  1365 => 612,  1361 => 611,  1352 => 609,  1346 => 608,  1340 => 604,  1331 => 598,  1327 => 597,  1323 => 596,  1319 => 595,  1310 => 589,  1305 => 587,  1301 => 586,  1296 => 584,  1291 => 582,  1286 => 580,  1281 => 578,  1272 => 576,  1266 => 575,  1256 => 567,  1247 => 561,  1243 => 560,  1239 => 559,  1235 => 558,  1229 => 554,  1222 => 549,  1215 => 544,  1213 => 543,  1208 => 541,  1203 => 539,  1194 => 537,  1188 => 536,  1178 => 528,  1169 => 522,  1165 => 521,  1161 => 520,  1157 => 519,  1151 => 515,  1142 => 508,  1133 => 501,  1131 => 500,  1126 => 498,  1121 => 496,  1112 => 494,  1106 => 493,  1096 => 485,  1087 => 479,  1083 => 478,  1079 => 477,  1075 => 476,  1067 => 471,  1063 => 470,  1059 => 469,  1054 => 467,  1049 => 465,  1044 => 463,  1035 => 461,  1031 => 460,  1021 => 452,  1012 => 446,  1007 => 444,  1002 => 442,  994 => 441,  990 => 440,  985 => 437,  975 => 430,  969 => 429,  965 => 428,  959 => 427,  954 => 425,  946 => 424,  942 => 423,  937 => 420,  927 => 413,  923 => 412,  919 => 411,  915 => 410,  910 => 408,  902 => 407,  896 => 406,  891 => 403,  887 => 401,  885 => 400,  882 => 399,  868 => 392,  860 => 391,  852 => 386,  847 => 384,  843 => 383,  838 => 381,  833 => 379,  828 => 377,  824 => 376,  817 => 374,  813 => 373,  809 => 372,  797 => 362,  783 => 355,  775 => 354,  764 => 346,  759 => 344,  754 => 342,  749 => 340,  745 => 339,  738 => 337,  734 => 336,  730 => 335,  718 => 325,  704 => 318,  696 => 317,  688 => 312,  683 => 310,  678 => 308,  673 => 306,  669 => 305,  662 => 303,  658 => 302,  654 => 301,  642 => 291,  628 => 284,  620 => 283,  612 => 278,  607 => 276,  602 => 274,  595 => 272,  591 => 271,  587 => 270,  575 => 260,  568 => 255,  558 => 252,  550 => 251,  545 => 249,  541 => 248,  538 => 247,  528 => 244,  520 => 243,  515 => 241,  511 => 240,  508 => 239,  506 => 238,  502 => 237,  498 => 236,  492 => 232,  478 => 225,  470 => 224,  466 => 222,  461 => 220,  446 => 207,  441 => 205,  422 => 188,  420 => 187,  415 => 185,  411 => 184,  400 => 175,  386 => 168,  378 => 167,  370 => 164,  365 => 161,  355 => 155,  350 => 153,  346 => 152,  341 => 150,  337 => 149,  332 => 148,  330 => 147,  323 => 145,  319 => 144,  315 => 143,  302 => 132,  293 => 125,  287 => 122,  283 => 121,  278 => 120,  272 => 117,  268 => 116,  263 => 115,  261 => 114,  256 => 112,  242 => 100,  234 => 98,  226 => 96,  224 => 95,  218 => 92,  212 => 89,  207 => 86,  201 => 84,  195 => 82,  193 => 81,  187 => 78,  181 => 75,  175 => 72,  169 => 69,  163 => 66,  159 => 64,  153 => 62,  147 => 60,  145 => 59,  140 => 56,  132 => 54,  124 => 52,  122 => 51,  116 => 48,  110 => 44,  102 => 42,  94 => 40,  92 => 39,  86 => 36,  80 => 33,  74 => 30,  65 => 24,  61 => 23,  41 => 5,  39 => 4,  36 => 3,  29 => 2,);
    }
}
