<?php

/* SiteCartronBundle:Default:premier_connexion.html.twig */
class __TwigTemplate_ab43aa8e66a129ea0adf4500de975f6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SiteCartronBundle::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SiteCartronBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Cartron: Première connexion";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<style>
  html{ 
  margin:0;
  padding:0;
  background: url(";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/images/bg-agegate.jpg"), "html", null, true);
        echo ") no-repeat center fixed;
  -webkit-background-size: cover; /* pour Chrome et Safari */
  -moz-background-size: cover; /* pour Firefox */
  -o-background-size: cover; /* pour Opera */
  background-size: cover; /* version standardisée */
  }
  body{ 
  background: none;
  }

</style>

<script>
  \$(window).resize(function()
  {
  var \$popup = \$('.overlay-espace-pro .popup-espace-pro');
  \$popup.css('margin-top', ( \$(window).height() - \$popup.outerHeight() )/2  )\t
  });
  
  \$(document).ready(function(){ \$(window).resize() });
</script>

<div class=\"site\">

  <div class=\"form-visite-content\">
    <form action=\"\" method=\"post\" ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " class=\"form-visite jqtransform\">
      <div class=\"form-lanque\">
        <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_choisir_langue", array("langue" => "fr")), "html", null, true);
        echo "\" ";
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "_locale"), "method") == "fr")) {
            echo " class=\"active\" ";
        }
        echo ">FR</a>
        <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_choisir_langue", array("langue" => "en")), "html", null, true);
        echo "\" ";
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "_locale"), "method") == "en")) {
            echo " class=\"active\" ";
        }
        echo ">EN</a>
      </div>
      <div class=\"content-form\">
        <p class=\"pour-visiter\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Pour visiter"), "html", null, true);
        echo " <strong>CARTRON.FR</strong><br />
          ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("vous devez avoir l’âge légal dans votre pays"), "html", null, true);
        echo ".</p>

        ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "pays"), 'widget', array("attr" => array("style" => "width:278px;")));
        echo "
        <span class=\"label\" style=\"margin-left:8px\">
          ";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("premier_connexion.datenaissance"), "html", null, true);
        echo " :
        </span>
        ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "dateNaissance"), 'widget');
        echo "
        <br clear=\"all\" />
        <div class=\"se-souvenir\">
          ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "sesevenire"), 'widget');
        echo "
          <span>
            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "sesevenire"), 'label');
        echo "
          </span><br clear=\"all\" /></div>
      </div>
      <div class=\"bt-content\">
        ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo " 
        <input type=\"submit\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entrez sur le site"), "html", null, true);
        echo "\" class=\"bt\" />
      </div>
    </form>
    <form id=\"formIdentification\" 
\t\t  action=\"http://www.cartron.fr/pro/wp-login.php\" 
\t\t  method=\"post\"
\t\t  name=\"formIdentification\" method=\"post\" class=\"acces-espace-pro\">
      <p class=\"acces-direct\">";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Accéder directement à votre"), "html", null, true);
        echo " <span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ESPACE PRO"), "html", null, true);
        echo "</span></p>
      <input type=\"text\" name=\"log\" id=\"identification\" class=\"input\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("IDENTIFIANT"), "html", null, true);
        echo "\" />
      <input type=\"password\" name=\"pwd\" id=\"password\" class=\"input\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("mot de passe"), "html", null, true);
        echo "\" />
      <p class=\"submit-form\">
        <input type=\"button\" id=\"ok_login\" name=\"ok\" value=\"OK\" class=\"submit\" onclick=\"\$('#formIdentification').submit(); return false;\"/>
        <!--<a href=\"#\" class=\"passeOubli\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Mot de passe oublié"), "html", null, true);
        echo "</a>-->
      </p>
      <a href=\"#0\" id=\"demand-d-acces_p\" class=\"demand-d-acces\">";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Demande d’accès à l’espace professionnel"), "html", null, true);
        echo "</a>
      <p class=\"mention\">";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("L’abus d’alcool est dangereux pour la santé"), "html", null, true);
        echo ",<br />
        ";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("à consommer avec modération"), "html", null, true);
        echo "</p>
\t  <input type=\"hidden\" name=\"redirect_to\" value=\"http://www.cartron.fr/pro\">
    </form>
  </div>
</div>

<div class=\"overlay-passe-oublie\">
  <div class=\"pop-up-passe-oublie\">
    <a href=\"\" class=\"close dn\"><span>Fermer</span></a>
    <label>Votre Email</label>
    <input type=\"text\" name=\"emailenvoie\" id=\"emailenvoie\" class=\"input\" value=\"\" />
    <input type=\"submit\" id=\"ok\" name=\"ok\" value=\"OK\" class=\"submit\" />
  </div>
</div>


<div class=\"overlay-espace-pro overlay\">
  <div class=\"popup-espace-pro\">
    <a href=\"\" class=\"close dn\"><span>Fermer</span></a>
    <div class=\"espacePro\">
      <h2><img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/images/lines_gradient.png"), "html", null, true);
        echo "\"/>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Demande_access_pro"), "html", null, true);
        echo "<img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitecartron/images/lines_gradient2.png"), "html", null, true);
        echo "\"/></h2>
      <form id=\"formAcces\" name=\"formAcces\" action=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_creer_compte_pro"), "html", null, true);
        echo "\" method=\"post\" class=\"jqtransform\">
        <!--<h3>Demande d’accès à l’espace professionnel</h3>-->
        <input type=\"text\" name=\"prenom\" id=\"prenom\" class=\"input\" value=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Prénom"), "html", null, true);
        echo "\" />
        <input type=\"text\" name=\"nom\" id=\"nom\" class=\"input\" value=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Nom"), "html", null, true);
        echo "\" />
        <input type=\"text\" name=\"email\" id=\"email\" class=\"input\" value=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Mail"), "html", null, true);
        echo "\" />

        <h3 class=\"noCenter profil\">";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Votre_profil"), "html", null, true);
        echo "</h3>
        <input type=\"radio\" name=\"profil\" id=\"agent\" value=\"agent\" class=\"checkbox\" />
        <label for=\"agent\">";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agent"), "html", null, true);
        echo "</label>
        <input type=\"radio\" name=\"profil\" id=\"importateur\" value=\"importateur\" class=\"checkbox\" />
        <label for=\"importateur\">";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Importateur"), "html", null, true);
        echo "</label>
        <input type=\"radio\" name=\"profil\" id=\"professionnel\" value=\"professionnel\" class=\"checkbox\" />

        <label for=\"professionnel\" class=\"last\">";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Professionnel"), "html", null, true);
        echo "</label>
        <br clear=\"all\" />
        <input type=\"text\" name=\"societe\" id=\"societe\" class=\"input\" value=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Société"), "html", null, true);
        echo "\" />
        <h3 class=\"noCenter message\">";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Message"), "html", null, true);
        echo "</h3>
        <textarea name=\"message\" id=\"message\" cols=\"1\" rows=\"1\"></textarea>
        <input type=\"checkbox\" name=\"conditions\" id=\"conditions\" class=\"checkbox\" />
        <span class=\"conditions\">";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("En_cliquant_sur_OK_vous_reconnaissez"), "html", null, true);
        echo "</span>
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
        return "SiteCartronBundle:Default:premier_connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 112,  249 => 109,  245 => 108,  240 => 106,  234 => 103,  229 => 101,  224 => 99,  219 => 97,  215 => 96,  211 => 95,  206 => 93,  198 => 92,  175 => 72,  171 => 71,  167 => 70,  162 => 68,  156 => 65,  152 => 64,  146 => 63,  136 => 56,  132 => 55,  125 => 51,  120 => 49,  114 => 46,  109 => 44,  104 => 42,  99 => 40,  95 => 39,  85 => 36,  77 => 35,  72 => 33,  44 => 8,  38 => 4,  35 => 3,  29 => 2,);
    }
}
