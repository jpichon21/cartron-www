<?php

/* SiteCartronBundle:Default:lien_menu_page_collection.html.twig */
class __TwigTemplate_37e015ed2fa53f4748914d120014196f extends Twig_Template
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
        echo "<a class=\"marc_";
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_collection_produit", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "sousMenu"), 0), "id"))), "html", null, true);
        echo "\" >
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
        return "SiteCartronBundle:Default:lien_menu_page_collection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 3,  26 => 2,  19 => 1,  177 => 63,  166 => 58,  161 => 56,  156 => 54,  148 => 48,  142 => 47,  135 => 43,  131 => 42,  126 => 39,  116 => 38,  112 => 37,  109 => 36,  106 => 35,  102 => 34,  97 => 32,  92 => 30,  88 => 28,  84 => 27,  79 => 24,  69 => 20,  65 => 19,  59 => 16,  54 => 15,  50 => 14,  38 => 4,  35 => 3,  29 => 2,);
    }
}
