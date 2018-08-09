<?php

/* SiteCartronBundle:Default:lien_page_degustation.html.twig */
class __TwigTemplate_d6c2ed8896e133b7ae75433c3825829a extends Twig_Template
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
        echo "\" class=\"entrer\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Entrez"), "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "SiteCartronBundle:Default:lien_page_degustation.html.twig";
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
