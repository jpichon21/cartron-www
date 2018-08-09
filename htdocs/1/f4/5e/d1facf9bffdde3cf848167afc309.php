<?php

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_f45ed1facf9bffdde3cf848167afc309 extends Twig_Template
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
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("@WebProfiler/Profiler/base_js.html.twig")->display($context);
        // line 3
        echo "<script type=\"text/javascript\">/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == $this->getContext($context, "position"))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 24
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 25
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 26
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 28
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 29
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 30
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'none';
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "');
                }
            }
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  83 => 30,  79 => 29,  75 => 28,  66 => 25,  62 => 24,  50 => 15,  46 => 14,  30 => 5,  24 => 2,  19 => 1,  221 => 70,  217 => 69,  213 => 68,  209 => 67,  205 => 66,  201 => 65,  196 => 63,  192 => 62,  188 => 61,  180 => 59,  175 => 56,  169 => 54,  167 => 53,  163 => 52,  155 => 47,  137 => 44,  131 => 43,  119 => 41,  113 => 40,  102 => 34,  90 => 32,  70 => 26,  59 => 16,  53 => 15,  42 => 12,  37 => 8,  33 => 7,  26 => 3,  20 => 1,  243 => 52,  237 => 6,  230 => 96,  208 => 76,  184 => 60,  176 => 52,  172 => 51,  143 => 45,  133 => 38,  127 => 37,  121 => 36,  114 => 32,  104 => 25,  100 => 24,  96 => 33,  92 => 22,  88 => 21,  84 => 31,  76 => 18,  72 => 17,  68 => 16,  64 => 15,  60 => 14,  52 => 12,  48 => 12,  44 => 10,  40 => 9,  36 => 8,  32 => 6,  28 => 6,  21 => 1,  256 => 98,  248 => 92,  242 => 89,  238 => 81,  233 => 79,  227 => 84,  223 => 83,  218 => 82,  216 => 81,  211 => 79,  199 => 69,  178 => 53,  174 => 66,  168 => 50,  158 => 61,  154 => 41,  149 => 46,  125 => 42,  111 => 44,  106 => 42,  99 => 38,  85 => 37,  80 => 19,  67 => 25,  63 => 24,  56 => 13,  38 => 4,  35 => 3,  29 => 2,);
    }
}
