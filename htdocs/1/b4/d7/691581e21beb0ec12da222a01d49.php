<?php

/* SiteCartronBundle:Statique:patrimoine.phtml.twig */
class __TwigTemplate_b4d7691581e21beb0ec12da222a01d49 extends Twig_Template
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
        echo "<div class=\"main\" id=\"patrimone\">
\t
  <div id=\"slide_1\" class=\"patrimoine_slides\">
  \t<div class=\"table\">
\t  \t<div class=\"slide\">
\t\t    <div class=\"content\">
\t\t      <div class=\"titre\">
\t\t         <div class=\"border\">
\t\t\t\t     <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("L’HISTOIRE"), "html", null, true);
        echo "</h2>
\t\t       \t\t <span>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cartron, créateur de saveur depuis"), "html", null, true);
        echo " 1882</span>
\t\t      \t</div>
\t\t      </div>
\t\t      <p><em>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("En 1882 Joseph Cartron fonde la maison éponyme à Nuits St Georges"), "html", null, true);
        echo "...</em></p>
\t\t      <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "histoire")), "html", null, true);
        echo "\" class=\"lire_suite\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Lire la suite"), "html", null, true);
        echo "</a>
\t\t    </div>
\t  \t</div>
  \t</div>
  </div> <!-- # end slide 1 -->
  
  <div id=\"slide_2\" class=\"patrimoine_slides\">
  \t<div class=\"table\">
\t    <div class=\"slide slides2\">
\t      <div class=\"content\">
\t        <div class=\"titre\">
\t        \t<div class=\"border\">
\t\t          <h2>";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("LA BOURGOGNE"), "html", null, true);
        echo "</h2>
\t\t          <span>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("En Héritage"), "html", null, true);
        echo "</span>
\t            </div>
\t        </div>
\t        <p><em>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("La bourgogne fait partie intégrante de l’histoire de la famille Cartron depuis plus de trois siècles"), "html", null, true);
        echo ".</em></p>
\t        <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "la-bourgogne")), "html", null, true);
        echo "\" class=\"lire_suite\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Lire la suite"), "html", null, true);
        echo "</a>
\t      </div>
\t    </div>
    </div>
  </div> <!-- # end slide 2 -->
  
  <div id=\"slide_3\" class=\"patrimoine_slides\">
  \t<div class=\"table\">
\t  \t<div class=\"slide\">
\t\t    <div class=\"content\">
\t\t      <div class=\"titre\">
\t\t        <div class=\"border\">
\t\t\t        <h2>";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("LES LICORNES"), "html", null, true);
        echo "</h2>
\t\t\t        <span>";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("L’emblème de la Maison Cartron"), "html", null, true);
        echo "</span>
\t\t      \t</div>
\t\t      </div>
\t\t      <p><em>";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Amateur d’art et de littérature, Ami des surréalistes , Armand Cartron a créé au début des années 30"), "html", null, true);
        echo "</em></p>
\t\t      <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "licornes")), "html", null, true);
        echo "\" class=\"lire_suite\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Lire la suite"), "html", null, true);
        echo "</a>
\t\t    </div>
\t    </div>
  \t</div>\t <!-- # end slide 3 -->
  </div>\t <!-- # end slide 3 -->
</div>

<script>
  \$(document).ready(function() 
  {
  \t \$('.patrimoine').addClass(\"active\");
  \t
\t new cartron.Responsive({\$container: \$(\"#patrimone\")});
     var patrimoine = cartron.Patrimoine({ \$container: \$(\"#patrimone\")});
  });
</script>";
    }

    public function getTemplateName()
    {
        return "SiteCartronBundle:Statique:patrimoine.phtml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 48,  101 => 47,  95 => 44,  91 => 43,  70 => 30,  64 => 27,  60 => 26,  43 => 14,  33 => 10,  19 => 1,  1539 => 683,  1530 => 677,  1524 => 676,  1520 => 675,  1514 => 674,  1505 => 668,  1501 => 667,  1497 => 666,  1493 => 665,  1489 => 664,  1484 => 662,  1480 => 661,  1475 => 659,  1470 => 657,  1465 => 655,  1460 => 653,  1456 => 652,  1447 => 650,  1441 => 649,  1431 => 641,  1422 => 635,  1416 => 634,  1412 => 633,  1406 => 632,  1398 => 627,  1394 => 626,  1390 => 625,  1385 => 623,  1381 => 622,  1371 => 615,  1366 => 613,  1362 => 612,  1353 => 610,  1347 => 609,  1341 => 605,  1332 => 599,  1328 => 598,  1324 => 597,  1320 => 596,  1311 => 590,  1306 => 588,  1302 => 587,  1297 => 585,  1292 => 583,  1287 => 581,  1282 => 579,  1273 => 577,  1267 => 576,  1257 => 568,  1248 => 562,  1244 => 561,  1240 => 560,  1236 => 559,  1230 => 555,  1223 => 550,  1216 => 545,  1214 => 544,  1209 => 542,  1204 => 540,  1195 => 538,  1189 => 537,  1179 => 529,  1170 => 523,  1166 => 522,  1162 => 521,  1158 => 520,  1152 => 516,  1143 => 509,  1134 => 502,  1132 => 501,  1127 => 499,  1122 => 497,  1113 => 495,  1107 => 494,  1097 => 486,  1088 => 480,  1084 => 479,  1080 => 478,  1076 => 477,  1068 => 472,  1064 => 471,  1060 => 470,  1055 => 468,  1050 => 466,  1045 => 464,  1036 => 462,  1032 => 461,  1022 => 453,  1013 => 447,  1008 => 445,  1003 => 443,  995 => 442,  991 => 441,  986 => 438,  976 => 431,  970 => 430,  966 => 429,  960 => 428,  955 => 426,  947 => 425,  943 => 424,  938 => 421,  928 => 414,  924 => 413,  920 => 412,  916 => 411,  911 => 409,  903 => 408,  897 => 407,  892 => 404,  888 => 402,  886 => 401,  883 => 400,  869 => 393,  861 => 392,  853 => 387,  848 => 385,  844 => 384,  839 => 382,  834 => 380,  829 => 378,  825 => 377,  818 => 375,  814 => 374,  810 => 373,  798 => 363,  784 => 356,  776 => 355,  765 => 347,  760 => 345,  755 => 343,  750 => 341,  746 => 340,  739 => 338,  735 => 337,  731 => 336,  719 => 326,  705 => 319,  697 => 318,  689 => 313,  684 => 311,  679 => 309,  674 => 307,  670 => 306,  663 => 304,  659 => 303,  655 => 302,  643 => 292,  629 => 285,  621 => 284,  613 => 279,  608 => 277,  603 => 275,  596 => 273,  592 => 272,  588 => 271,  576 => 261,  569 => 256,  559 => 253,  551 => 252,  546 => 250,  542 => 249,  539 => 248,  529 => 245,  521 => 244,  516 => 242,  512 => 241,  509 => 240,  507 => 239,  503 => 238,  499 => 237,  493 => 233,  479 => 226,  471 => 225,  467 => 223,  462 => 221,  447 => 208,  442 => 206,  423 => 189,  421 => 188,  416 => 186,  412 => 185,  401 => 176,  387 => 169,  379 => 168,  371 => 165,  366 => 162,  356 => 156,  351 => 154,  347 => 153,  342 => 151,  338 => 150,  333 => 149,  331 => 148,  324 => 146,  320 => 145,  316 => 144,  303 => 133,  294 => 126,  288 => 123,  284 => 122,  279 => 121,  273 => 118,  269 => 117,  264 => 116,  262 => 115,  257 => 113,  242 => 100,  234 => 98,  226 => 96,  224 => 95,  218 => 92,  212 => 89,  207 => 86,  201 => 84,  195 => 82,  193 => 81,  187 => 78,  181 => 75,  175 => 72,  169 => 69,  163 => 66,  159 => 64,  153 => 62,  147 => 60,  145 => 59,  140 => 56,  132 => 54,  124 => 52,  122 => 51,  116 => 48,  110 => 44,  102 => 42,  94 => 40,  92 => 39,  86 => 36,  80 => 33,  74 => 31,  65 => 24,  61 => 23,  41 => 5,  39 => 13,  36 => 3,  29 => 9,);
    }
}
