<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_8a33185603c0fd89831cf693bbe3da27 extends Twig_Template
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
        echo "<script type=\"text/javascript\">/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  83 => 30,  79 => 29,  75 => 28,  66 => 25,  62 => 24,  50 => 15,  46 => 14,  30 => 5,  24 => 2,  19 => 1,  221 => 70,  217 => 69,  213 => 68,  209 => 67,  205 => 66,  201 => 65,  196 => 63,  192 => 62,  188 => 61,  180 => 59,  175 => 56,  169 => 54,  167 => 53,  163 => 52,  155 => 47,  137 => 44,  131 => 43,  119 => 41,  113 => 40,  102 => 34,  90 => 32,  70 => 26,  59 => 16,  53 => 15,  42 => 12,  37 => 8,  33 => 7,  26 => 3,  20 => 1,  243 => 52,  237 => 6,  230 => 96,  208 => 76,  184 => 60,  176 => 52,  172 => 51,  143 => 45,  133 => 38,  127 => 37,  121 => 36,  114 => 32,  104 => 25,  100 => 24,  96 => 33,  92 => 22,  88 => 21,  84 => 31,  76 => 18,  72 => 17,  68 => 16,  64 => 15,  60 => 14,  52 => 12,  48 => 12,  44 => 10,  40 => 9,  36 => 8,  32 => 6,  28 => 6,  21 => 1,  256 => 98,  248 => 92,  242 => 89,  238 => 81,  233 => 79,  227 => 84,  223 => 83,  218 => 82,  216 => 81,  211 => 79,  199 => 69,  178 => 53,  174 => 66,  168 => 50,  158 => 61,  154 => 41,  149 => 46,  125 => 42,  111 => 44,  106 => 42,  99 => 38,  85 => 37,  80 => 19,  67 => 25,  63 => 24,  56 => 13,  38 => 4,  35 => 3,  29 => 2,);
    }
}
