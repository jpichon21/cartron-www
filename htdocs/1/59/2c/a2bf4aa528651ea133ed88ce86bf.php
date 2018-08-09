<?php

/* SiteCartronBundle:Default:lien_menu_page_degustation.html.twig */
class __TwigTemplate_592ca2bf4aa528651ea133ed88ce86bf extends Twig_Template
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
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_degustation_produit", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "sousMenu"), 0), "id"))), "html", null, true);
        echo "\">
    ";
        // line 2
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "_locale"), "method") == "en")) {
            echo " ";
            echo $this->getContext($context, "titreEn");
            echo " ";
        } else {
            echo " ";
            echo $this->getContext($context, "titreFr");
            echo " ";
        }
        // line 3
        echo "</a>";
    }

    public function getTemplateName()
    {
        return "SiteCartronBundle:Default:lien_menu_page_degustation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 3,  24 => 2,  19 => 1,  186 => 53,  181 => 50,  164 => 47,  150 => 46,  140 => 45,  137 => 44,  120 => 43,  112 => 37,  103 => 33,  97 => 32,  92 => 29,  82 => 28,  78 => 27,  75 => 26,  72 => 25,  68 => 24,  62 => 21,  59 => 20,  55 => 19,  38 => 4,  35 => 3,  29 => 2,);
    }
}
