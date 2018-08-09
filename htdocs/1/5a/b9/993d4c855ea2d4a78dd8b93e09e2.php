<?php

/* SiteCartronBundle:Default:new_compte.html.twig */
class __TwigTemplate_5ab9993d4c855ea2d4a78dd8b93e09e2 extends Twig_Template
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
        echo "<style>
.espacePro h2{
\ttext-align:center;
}
</style>
<div id=\"pro\">
    <div class=\"main\">
        <div class=\"espacePro\">
            <h2>espace professionnel</h2>
            <br/>
                ";
        // line 14
        if (($this->getContext($context, "save") == "yes")) {
            // line 15
            echo "            <h4>Un e-mail a été envoyé à votre adresse contenant votre mot de passe</h4>
                ";
        }
        // line 17
        echo "            <form id=\"formIdentification\" name=\"formIdentification\" class=\"formIdentification\" action=\"\" method=\"post\">
                <input type=\"text\" name=\"identification\" id=\"identification\" class=\"input\" value=\"IDENTIFIANT\" />
                <input type=\"text\" name=\"password\" id=\"password\" class=\"input\" value=\"mot de passe\" />
                <input type=\"button\" id=\"ok_login\" name=\"ok\" value=\"OK\" class=\"submit\" />

                <a href=\"#\" class=\"passeOubli\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Mot de passe oublié"), "html", null, true);
        echo "</a>
            </form>
            <br clear=\"all\" />
            <form id=\"formAcces\" name=\"formAcces\" action=\"\" method=\"post\" class=\"jqtransform\">
                <h3>Demande d’accès à l’espace professionnel</h3>
                <input type=\"text\" name=\"prenom\" id=\"prenom\" class=\"input\" value=\"prenom\" />
                <input type=\"text\" name=\"nom\" id=\"nom\" class=\"input\" value=\"nom\" />
                <input type=\"text\" name=\"email\" id=\"email\" class=\"input\" value=\"mail\" />

                <h3 class=\"noCenter\">votre profil</h3>
                <input type=\"radio\" name=\"profil\" id=\"agent\" value=\"agent\" class=\"checkbox\" />
                <label for=\"agent\">agent</label>
                <input type=\"radio\" name=\"profil\" id=\"importateur\" value=\"importateur\" class=\"checkbox\" />
                <label for=\"importateur\">importateur</label>
                <input type=\"radio\" name=\"profil\" id=\"professionnel\" value=\"professionnel\" class=\"checkbox\" />

                <label for=\"professionnel\" class=\"last\">professionnel</label>
                <br clear=\"all\" />
                <input type=\"text\" name=\"societe\" id=\"societe\" class=\"input\" value=\"societe\" />
                <h3 class=\"noCenter\">message</h3>
                <textarea name=\"message\" id=\"message\" cols=\"1\" rows=\"1\"></textarea>
                <input type=\"checkbox\" name=\"conditions\" id=\"conditions\" class=\"checkbox\" />
                <span class=\"conditions\">En cliquant sur ENVOYER, vous reconnaissez avoir pris connaissance <strong><a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("upload/word/MENTIONS LÉGALES-espace pro.docx"), "html", null, true);
        echo "\" style=\" color: #9AA6B2\">des conditions d’utilisation de l’espace professionnel</a> </strong> et déclarez les accepter sans réserve.</span>
                <br clear=\"all\" />
                <input type=\"button\" id=\"ok_new_pro\" name=\"ok\" value=\"OK\" class=\"submit\" />
            </form>
        </div>    
    </div>
</div>

<div class=\"overlay-passe-oublie\">
    <div class=\"pop-up-passe-oublie\">
        <a href=\"\" class=\"close dn\"><span>Fermer</span></a>
        <label>Votre Email</label>
        <input type=\"text\" name=\"emailenvoie\" id=\"mop\" class=\"input\" value=\"\" />
        <input type=\"submit\" id=\"ok_mop\" name=\"ok\" value=\"OK\" class=\"submit\" />
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SiteCartronBundle:Default:new_compte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 44,  63 => 22,  56 => 17,  52 => 15,  50 => 14,  38 => 4,  35 => 3,  29 => 2,);
    }
}
