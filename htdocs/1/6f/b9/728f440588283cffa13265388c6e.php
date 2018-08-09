<?php

/* SiteCartronBundle:Statique:footer.html.twig */
class __TwigTemplate_6fb9728f440588283cffa13265388c6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('footer', $context, $blocks);
    }

    public function block_footer($context, array $blocks = array())
    {
        // line 2
        echo "<div class=\"footer\">
<div class=\"langues-reseaux\">
    <div class=\"langues\">
        <dl id=\"sample\" class=\"dropdown\">
            <dt><a href=\"#0\"><span>
\t\t\t\t\t\t";
        // line 7
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "en")) {
            echo " 
                            EN <img class=\"flag\" src=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/images/gb.png"), "html", null, true);
            echo "\" alt=\"\" />
\t\t\t\t\t\t";
        } else {
            // line 10
            echo "                            FR <img class=\"flag\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/images/fr.jpg"), "html", null, true);
            echo "\" alt=\"\" />
\t\t\t\t\t\t";
        }
        // line 12
        echo "                        </span></a></dt>
                    <dd>
                        <ul>
                            <li><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_choisir_langue", array("langue" => "fr")), "html", null, true);
        echo "\">FR <img class=\"flag\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/images/fr.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a></li>
                            <li><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_choisir_langue", array("langue" => "en")), "html", null, true);
        echo "\">EN <img class=\"flag\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/images/gb.png"), "html", null, true);
        echo "\" alt=\"\" /></a></li>
                        </ul>
                    </dd>
                </dl>
            </div>
            <ul class=\"reseaux\">
                <li><a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_contact"), "html", null, true);
        echo "\" class=\"contactez-nous\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Contactez-nous"), "html", null, true);
        echo "</a></li>
                <li><a href=\"https://www.facebook.com/maisoncartron\" class=\"facebook\" title=\"Facebook\">Facebook</a></li>
                <!--<li><a href=\"#\" class=\"twitter\" title=\"Twitter\">Twitter</a></li>-->
            </ul>
            <br clear=\"all\" />
        </div>

        <div class=\"menu-footer menu-footer-01\">
            <ul>
                <li><a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "Patrimoine")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Patrimoine"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_page_statique", array("page" => "Savoir-faire")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Savoir-faire"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_collection"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Collection"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_degustation"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Dégustation"), "html", null, true);
        echo "</a></li>
            </ul>
        </div>

        <div class=\"menu-footer menu-footer-02\">
            <ul>
              <li><a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_collection_produit", array("id" => 3)), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("CREMES DE CASSIS DE BOURGOGNE"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_collection_produit", array("id" => 5)), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("CREMES DE FRUITS de création"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_collection_produit", array("id" => 11)), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("LIQUEURS de création"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_collection_produit", array("id" => 64)), "html", null, true);
        echo "\">";
        echo "LES T DE CARTRON";
        echo "</a></li>
                <li><a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_collection_produit", array("id" => 49)), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("APERITIFS DE tradition"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_collection_produit", array("id" => 57)), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("EAUX DE VIE de tradition"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_collection_produit", array("id" => 53)), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("MARC ET FINE DE BOURGOGNE"), "html", null, true);
        echo "</a></li>
              <li><a href=\"#0\" class=\"mentions-legales\">";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Mentions légales"), "html", null, true);
        echo "</a></li>
            </ul>
        </div>

        <p class=\"mention\">
\t\t  ";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("L’abus d’alcool est dangereux pour la santé. Consommer avec modération"), "html", null, true);
        echo ".
\t\t  ";
        // line 53
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
            // line 54
            echo "\t\t  <a target=\"_blank\" href=\"http://www.2340.fr\"><img style=\"margin-left:5px;\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/images/logo_2340.png"), "html", null, true);
            echo "\"/></a> 
\t\t  ";
        }
        // line 56
        echo "\t\t</p>
        <div class=\"overlay-mentions\">
            <div class=\"pop-up-mentions\">
                <a href=\"\" class=\"close dn\"><span>";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Fermer"), "html", null, true);
        echo "</span></a>
                <h1>";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("mentions légales"), "html", null, true);
        echo "</h1>
                <p>";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Propriétaire du Site Internet: Joseph Cartron"), "html", null, true);
        echo "<br />
\t\t\t\t  ";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Adresse: 25, Rue du Docteur Legrand – BP 28"), "html", null, true);
        echo "<br />
\t\t\t\t  ";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("21701 nuits-Saint-Georges Cedex - France"), "html", null, true);
        echo "<br />
                  Email: cartron@cartron.fr<br />
\t\t\t\t  ";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Telephone"), "html", null, true);
        echo " : +33 (0)3 80 62 00 90<br />
\t\t\t\t  ";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Design & Développement & maintenance technique: BIGGERBAND"), "html", null, true);
        echo "<br />
\t\t\t\t  ";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Crédits Images: Joseph Cartron"), "html", null, true);
        echo " <br />
\t\t\t\t  ";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Conditions d'utilisation et propriétés"), "html", null, true);
        echo ":<br />
\t\t\t\t  ";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Toute représentation totale ou partielle de ce site et de son contenu, par quelques procédés que ce soient, sans autorisation préalable est interdite et constituerait une contrefaçon sanctionnée par les articles L335-2 et suivants du Code de la Propriété Intellectuelle. Les utilisateurs du site sont tenus de respecter les dispositions de la Loi Informatique, Fichiers et Libertés, dont la violation est passible de sanctions pénales. Ils doivent notamment s'abstenir, s'agissant des informations nominatives auxquelles ils accèdent, de toute collecte, de toute utilisation détournée, et d'une manière générale, de tout acte susceptible de porter atteinte à la vie privée ou à la réputation des personnes"), "html", null, true);
        echo ".<br />
\t\t\t\t  ";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Hébergeur: Oleane"), "html", null, true);
        echo "<br />
                  <a href=\"https://clients.fr.oleane.com\" target=\"_blank\">https://clients.fr.oleane.com</a></p>
            </div>
        </div>

\t\t
\t\t
        <div class=\"overlay-demande-envoyee\">
          <div class=\"pop-demande-envoyee\">
            <a href=\"\" class=\"close dn\"><span>";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Fermer"), "html", null, true);
        echo "</span></a>
\t\t\t
            <p>";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Votre demande a bien été envoyée"), "html", null, true);
        echo ".</p>
          </div>
        </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SiteCartronBundle:Statique:footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  221 => 70,  217 => 69,  213 => 68,  209 => 67,  205 => 66,  201 => 65,  196 => 63,  192 => 62,  188 => 61,  180 => 59,  175 => 56,  169 => 54,  167 => 53,  163 => 52,  155 => 47,  137 => 44,  131 => 43,  119 => 41,  113 => 40,  102 => 34,  90 => 32,  70 => 22,  59 => 16,  53 => 15,  42 => 10,  37 => 8,  33 => 7,  26 => 2,  20 => 1,  243 => 52,  237 => 6,  230 => 96,  208 => 76,  184 => 60,  176 => 52,  172 => 51,  143 => 45,  133 => 38,  127 => 37,  121 => 36,  114 => 32,  104 => 25,  100 => 24,  96 => 33,  92 => 22,  88 => 21,  84 => 31,  76 => 18,  72 => 17,  68 => 16,  64 => 15,  60 => 14,  52 => 12,  48 => 12,  44 => 10,  40 => 9,  36 => 8,  32 => 7,  28 => 6,  21 => 1,  256 => 98,  248 => 92,  242 => 89,  238 => 81,  233 => 79,  227 => 84,  223 => 83,  218 => 82,  216 => 81,  211 => 79,  199 => 69,  178 => 53,  174 => 66,  168 => 50,  158 => 61,  154 => 41,  149 => 46,  125 => 42,  111 => 44,  106 => 42,  99 => 38,  85 => 37,  80 => 19,  67 => 25,  63 => 24,  56 => 13,  38 => 4,  35 => 3,  29 => 2,);
    }
}
