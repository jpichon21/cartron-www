<?php

/* SiteCartronBundle:Default:degustation.html.twig */
class __TwigTemplate_3c0b0c472f64b366759f8be502e08405 extends Twig_Template
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
<script type=\"text/javascript\">
  \$(function() {
  \$('.subMenu').jScrollPane({scrollbarWidth: 6});
  
  new cartron.Degustation({'\$container':\$('#degustation .main')});
  new cartron.Responsive({'\$container':\$('#degustation .content'), 'offset':35});
  });
</script>
<div id=\"degustation\">
  <div class=\"main\">
    <div class=\"degustation-home\">
      <div class=\"menu_degustation\">
        <div class=\"center\">
\t      <ul>
\t        ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "degustation"));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 20
            echo "\t        <li class=\"menuLiWithSubMenu\">
\t          ";
            // line 21
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SiteCartronBundle:Default:lienMenuPageDegustation", array("id" => $this->getAttribute($this->getContext($context, "article"), "id"), "titreEn" => $this->getAttribute($this->getContext($context, "article"), "titreEn"), "titreFr" => $this->getAttribute($this->getContext($context, "article"), "titreFr"))));
            echo "
\t          <div class=\"scrollMenu\">
\t            <ul class=\"subMenu\">
\t              ";
            // line 24
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "sousMenu"));
            foreach ($context['_seq'] as $context["_key"] => $context["sm"]) {
                // line 25
                echo "\t              ";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "sm"), "idDegustation"), "id") == $this->getAttribute($this->getContext($context, "article"), "id"))) {
                    // line 26
                    echo "\t              <li>
\t                <a href=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_cartron_degustation_produit", array("id" => $this->getAttribute($this->getContext($context, "sm"), "id"))), "html", null, true);
                    echo "\">
\t                  ";
                    // line 28
                    if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "_locale"), "method") == "en")) {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sm"), "titreEn"), "html", null, true);
                        echo " ";
                    } else {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sm"), "titreFr"), "html", null, true);
                        echo " ";
                    }
                    // line 29
                    echo "\t                </a>
\t              </li>
\t              ";
                }
                // line 32
                echo "\t              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sm'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "\t            </ul>
\t          </div>
\t        </li>
\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "\t\t\t
\t      </ul>
        </div>
      </div> <!-- # end menu degustation -->
      <div class=\"content\">
        <div class=\"parralax\">
          ";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "degustation"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 44
            echo "
          <div ";
            // line 45
            if (($this->getAttribute($this->getContext($context, "loop"), "index") > 1)) {
                echo " class=\"hd\" ";
            } else {
                echo " class=\"sh\" ";
            }
            echo " id=\"ar_";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
            echo "\">
            <h2><b><span>";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sélection"), "html", null, true);
            echo "</span> ";
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "_locale"), "method") == "en")) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "titreEn"), "html", null, true);
                echo " ";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "titreFr"), "html", null, true);
                echo " ";
            }
            echo "</b></h2>                                
            ";
            // line 47
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SiteCartronBundle:Default:lienPageDegustation", array("id" => $this->getAttribute($this->getContext($context, "article"), "id"))));
            echo "
          </div>
          ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
          <a href=\"#0\" class=\"next\"></a>
          <a href=\"#0\" class=\"prev\"></a>
          <input type=\"hidden\" id=\"nbr\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getContext($context, "degustation")), "html", null, true);
        echo "\" />
        </div> <!-- # end content degustation -->            
      </div> 
    </div>    
  </div>
</div>
<style>
  .hd{display: none}
  .sh{display: block}
</style>
";
    }

    public function getTemplateName()
    {
        return "SiteCartronBundle:Default:degustation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 53,  181 => 50,  164 => 47,  150 => 46,  140 => 45,  137 => 44,  120 => 43,  112 => 37,  103 => 33,  97 => 32,  92 => 29,  82 => 28,  78 => 27,  75 => 26,  72 => 25,  68 => 24,  62 => 21,  59 => 20,  55 => 19,  38 => 4,  35 => 3,  29 => 2,);
    }
}
