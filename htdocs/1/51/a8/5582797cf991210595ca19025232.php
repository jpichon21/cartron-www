<?php

/* SiteCartronBundle:Default:contact.html.twig */
class __TwigTemplate_51a85582797cf991210595ca19025232 extends Twig_Template
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
<div id=\"contact\">
    <div class=\"main\">
        <div class=\"espacePro\">
        \t<h2 class=\"contact\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Contact"), "html", null, true);
        echo "</h2>
\t\t    ";
        // line 9
        if (($this->getContext($context, "save") == "yes")) {
            // line 10
            echo "        \t<p class=\"address\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Votre message a bien été envoyé"), "html", null, true);
            echo "</p>
\t\t\t";
        }
        // line 12
        echo "            <form id=\"formContact\" name=\"formContact\" action=\"\" method=\"post\">
              <input type=\"text\" name=\"nom\" id=\"nom\" class=\"input\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Nom"), "html", null, true);
        echo "\" />
              <input type=\"text\" name=\"prenom\" id=\"prenom\" class=\"input\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Prénom"), "html", null, true);
        echo "\" />
              <input type=\"text\" name=\"email\" id=\"email\" class=\"input\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Mail"), "html", null, true);
        echo "\" />
              <input type=\"text\" name=\"societe\" id=\"societe\" class=\"input\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Société"), "html", null, true);
        echo "\" />
              <textarea name=\"message\" id=\"message\" cols=\"1\" rows=\"1\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Message"), "html", null, true);
        echo "</textarea>
              <br clear=\"all\" />
              <div class=\"valider\">
                <input type=\"button\" id=\"ok_new_pro\" name=\"ok\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("VALIDER"), "html", null, true);
        echo "\" class=\"submit\" />
              </div>
            </form>
            <p class=\"address\">25, RUE DU DOCTEUR LEGRAND –  CS 30028   /   21701 NUITS-SAINT-GEORGES CEDEX - FRANCE<br />
\t\t\t  TEL : +33 (0)3 80 62 00 90   /   MAIL : cartron [at] cartron.fr</p>
        </div>    
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SiteCartronBundle:Default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 20,  75 => 17,  71 => 16,  67 => 15,  63 => 14,  59 => 13,  56 => 12,  50 => 10,  48 => 9,  44 => 8,  38 => 4,  35 => 3,  29 => 2,);
    }
}
