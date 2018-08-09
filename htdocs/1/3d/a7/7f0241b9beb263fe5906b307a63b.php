<?php

/* SiteCartronBundle:Default:collection.html.twig */
class __TwigTemplate_3da77f0241b9beb263fe5906b307a63b extends Twig_Template
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
        echo "<script type=\"text/javascript\">
  \$(function() {
  \$('.scroll').jScrollPane({scrollbarWidth: 4});
  })
</script>
<div id=\"collection\">
  <div class=\"main\">
    <div class=\"collection-home\">
      <div class=\"menu_collection\">
        <ul>                    
          ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "collections"));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 15
            echo "          <li id=\"marc_";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "id"), "html", null, true);
            echo "\">
            ";
            // line 16
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SiteCartronBundle:Default:lienMenuPageCollection", array("id" => $this->getAttribute($this->getContext($context, "article"), "id"), "titreEn" => $this->getAttribute($this->getContext($context, "article"), "titreEn"), "titreFr" => $this->getAttribute($this->getContext($context, "article"), "titreFr"), "rid" => "")));
            echo "
          </li>
          <style>
            .collection-home .menu_collection #marc_";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "id"), "html", null, true);
            echo " a:hover, .collection-home .menu_collection li a.active{
            border-bottom:2px solid #";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "color"), "html", null, true);
            echo ";
            }
          </style>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </ul>
      </div> <!-- # end menu collection -->
      <div class=\"content\">
        ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "collections"));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 28
            echo "        <div class=\"block block_cassis\">
          <a href=\"#\" class=\"plus\" title=\"Plus\"></a>
          <img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("upload/" . $this->getAttribute($this->getContext($context, "article"), "image"))), "html", null, true);
            echo "\" width=\"167\" height=\"484\" alt=\"\" />
          <div class=\"blockDesc\">
            <div class=\"desc_collections marc_";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "id"), "html", null, true);
            echo "_desc\">
              <ul class=\"scroll\">
                ";
            // line 34
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "sousMenu"));
            foreach ($context['_seq'] as $context["_key"] => $context["sm"]) {
                // line 35
                echo "                ";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "sm"), "idCollection"), "id") == $this->getAttribute($this->getContext($context, "article"), "id"))) {
                    // line 36
                    echo "                <li>
                  <a href=\"";
                    // line 37
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_collection_produit", array("id" => $this->getAttribute($this->getContext($context, "sm"), "id"))), "html", null, true);
                    echo "\">
                    ";
                    // line 38
                    if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "_locale"), "method") == "en")) {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sm"), "titreEn"), "html", null, true);
                        echo " ";
                    } else {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sm"), "titreFr"), "html", null, true);
                        echo " ";
                    }
                    // line 39
                    echo "                  </a>
                </li>
                <style>
                  .block_cassis .marc_";
                    // line 42
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "id"), "html", null, true);
                    echo "_desc li a:hover{
                  color:#";
                    // line 43
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "color"), "html", null, true);
                    echo ";;
\t\t\t\t  }
                </style>
                ";
                }
                // line 47
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sm'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "              </ul>
            </div>
          </div>
        </div>
        <script type=\"text/javascript\">
          \$(function() {
          \$('a.marc_";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "id"), "html", null, true);
            echo "')
          .hover(function(e) {
          \$('.marc_";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "id"), "html", null, true);
            echo "_desc').hoverFlow(e.type, {top: '0px'}, 'slow');
          }, function(e) {
          \$('.marc_";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "id"), "html", null, true);
            echo "_desc').hoverFlow(e.type, {top: '-483px'}, 'fast');
          });
          });
        </script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "      </div>    
    </div>
  </div>
  ";
    }

    public function getTemplateName()
    {
        return "SiteCartronBundle:Default:collection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 63,  166 => 58,  161 => 56,  156 => 54,  148 => 48,  142 => 47,  135 => 43,  131 => 42,  126 => 39,  116 => 38,  112 => 37,  109 => 36,  106 => 35,  102 => 34,  97 => 32,  92 => 30,  88 => 28,  84 => 27,  79 => 24,  69 => 20,  65 => 19,  59 => 16,  54 => 15,  50 => 14,  38 => 4,  35 => 3,  29 => 2,);
    }
}
