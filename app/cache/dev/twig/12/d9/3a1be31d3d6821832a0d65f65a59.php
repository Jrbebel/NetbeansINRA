<?php

/* WebProfilerBundle:Profiler:base_js.html.twig */
class __TwigTemplate_12d93a1be31d3d6821832a0d65f65a59 extends Twig_Template
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
            };

        return {
            hasClass: hasClass,
            removeClass: removeClass,
            addClass: addClass,
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
        return "WebProfilerBundle:Profiler:base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  86 => 27,  62 => 19,  90 => 29,  294 => 131,  291 => 130,  285 => 126,  275 => 119,  267 => 113,  252 => 111,  248 => 109,  240 => 106,  234 => 104,  227 => 101,  224 => 100,  221 => 99,  217 => 98,  208 => 95,  176 => 88,  173 => 87,  69 => 19,  166 => 85,  129 => 69,  158 => 57,  150 => 77,  146 => 65,  140 => 52,  87 => 28,  53 => 17,  40 => 8,  203 => 143,  107 => 52,  99 => 32,  77 => 24,  23 => 3,  49 => 10,  210 => 72,  199 => 61,  193 => 89,  182 => 54,  179 => 75,  174 => 8,  168 => 7,  110 => 43,  56 => 15,  20 => 1,  301 => 136,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 102,  222 => 73,  220 => 72,  215 => 97,  211 => 96,  204 => 94,  198 => 92,  185 => 61,  183 => 60,  177 => 58,  160 => 80,  112 => 37,  82 => 26,  65 => 20,  38 => 10,  144 => 50,  141 => 66,  135 => 49,  126 => 69,  109 => 37,  103 => 34,  67 => 21,  61 => 18,  47 => 14,  91 => 29,  84 => 28,  28 => 6,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 59,  186 => 76,  180 => 72,  172 => 76,  159 => 80,  154 => 68,  147 => 55,  132 => 48,  127 => 44,  121 => 55,  118 => 63,  114 => 39,  104 => 35,  100 => 33,  78 => 26,  75 => 23,  71 => 23,  34 => 8,  44 => 13,  94 => 30,  88 => 27,  59 => 18,  105 => 35,  93 => 34,  79 => 25,  76 => 33,  72 => 32,  68 => 19,  58 => 15,  24 => 3,  27 => 5,  25 => 3,  21 => 2,  31 => 2,  26 => 2,  19 => 1,  70 => 18,  63 => 20,  46 => 12,  22 => 3,  163 => 63,  155 => 58,  152 => 49,  149 => 72,  145 => 46,  139 => 53,  131 => 42,  123 => 47,  120 => 43,  115 => 40,  106 => 36,  101 => 34,  96 => 21,  83 => 18,  80 => 26,  74 => 25,  66 => 21,  55 => 15,  52 => 16,  50 => 8,  43 => 12,  41 => 12,  37 => 3,  35 => 9,  32 => 7,  29 => 6,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 81,  157 => 56,  153 => 54,  151 => 73,  143 => 75,  138 => 72,  136 => 71,  133 => 43,  130 => 47,  122 => 65,  119 => 36,  116 => 35,  111 => 38,  108 => 36,  102 => 30,  98 => 22,  95 => 31,  92 => 30,  89 => 28,  85 => 27,  81 => 36,  73 => 23,  64 => 23,  60 => 19,  57 => 17,  54 => 12,  51 => 14,  48 => 9,  45 => 13,  42 => 11,  39 => 10,  36 => 7,  33 => 10,  30 => 7,);
    }
}
