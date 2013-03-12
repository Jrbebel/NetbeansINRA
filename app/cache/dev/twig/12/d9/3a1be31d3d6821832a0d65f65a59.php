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
        return array (  790 => 469,  787 => 468,  776 => 466,  772 => 465,  768 => 463,  755 => 462,  729 => 457,  726 => 456,  707 => 454,  690 => 453,  686 => 451,  682 => 450,  678 => 449,  674 => 448,  670 => 447,  666 => 446,  663 => 445,  661 => 444,  644 => 443,  633 => 442,  618 => 437,  613 => 435,  609 => 434,  606 => 433,  604 => 432,  590 => 431,  558 => 401,  540 => 398,  518 => 395,  513 => 393,  508 => 391,  181 => 87,  161 => 80,  356 => 163,  347 => 160,  343 => 159,  340 => 158,  335 => 157,  309 => 141,  288 => 129,  281 => 125,  274 => 121,  238 => 97,  206 => 78,  203 => 77,  158 => 56,  125 => 44,  113 => 40,  176 => 61,  170 => 60,  388 => 160,  385 => 159,  377 => 157,  370 => 156,  366 => 155,  362 => 153,  360 => 152,  357 => 151,  354 => 150,  352 => 149,  344 => 147,  342 => 146,  339 => 145,  333 => 156,  330 => 140,  327 => 139,  325 => 150,  314 => 131,  311 => 130,  308 => 129,  306 => 128,  280 => 114,  275 => 111,  258 => 103,  254 => 101,  247 => 97,  234 => 89,  226 => 86,  221 => 83,  202 => 73,  193 => 68,  190 => 89,  148 => 74,  140 => 49,  97 => 23,  174 => 58,  86 => 28,  323 => 149,  313 => 136,  307 => 132,  299 => 126,  291 => 123,  283 => 117,  264 => 105,  250 => 108,  237 => 103,  233 => 102,  227 => 100,  214 => 82,  209 => 73,  175 => 84,  142 => 72,  99 => 36,  69 => 20,  188 => 67,  167 => 64,  77 => 18,  256 => 110,  253 => 85,  236 => 80,  224 => 99,  213 => 65,  168 => 55,  137 => 47,  62 => 25,  40 => 11,  535 => 197,  530 => 196,  523 => 397,  520 => 396,  512 => 189,  490 => 171,  480 => 162,  469 => 155,  467 => 154,  464 => 153,  447 => 149,  437 => 142,  421 => 139,  414 => 137,  410 => 135,  406 => 134,  403 => 133,  396 => 131,  390 => 128,  387 => 127,  379 => 158,  376 => 123,  374 => 122,  367 => 120,  363 => 119,  359 => 118,  355 => 116,  338 => 115,  329 => 108,  320 => 135,  316 => 145,  305 => 98,  302 => 137,  294 => 91,  277 => 87,  266 => 83,  262 => 82,  259 => 109,  252 => 138,  246 => 106,  243 => 105,  232 => 71,  223 => 68,  208 => 61,  182 => 69,  173 => 85,  169 => 56,  156 => 77,  134 => 54,  128 => 45,  166 => 82,  150 => 75,  146 => 65,  90 => 41,  53 => 38,  49 => 17,  23 => 3,  240 => 93,  235 => 72,  231 => 88,  228 => 89,  217 => 83,  207 => 95,  200 => 55,  197 => 54,  192 => 72,  164 => 63,  129 => 61,  124 => 35,  110 => 39,  107 => 27,  87 => 33,  56 => 39,  20 => 1,  301 => 125,  295 => 133,  292 => 120,  289 => 119,  287 => 118,  282 => 115,  276 => 86,  273 => 110,  270 => 85,  268 => 107,  263 => 80,  249 => 79,  245 => 101,  230 => 70,  222 => 73,  220 => 98,  215 => 79,  211 => 81,  204 => 94,  198 => 74,  185 => 68,  183 => 63,  177 => 59,  160 => 59,  112 => 52,  82 => 19,  65 => 22,  38 => 6,  144 => 73,  141 => 54,  135 => 47,  126 => 61,  109 => 51,  103 => 25,  67 => 12,  61 => 18,  47 => 15,  28 => 6,  105 => 35,  93 => 42,  76 => 34,  72 => 22,  68 => 30,  94 => 30,  88 => 20,  79 => 35,  59 => 21,  225 => 88,  216 => 90,  212 => 78,  205 => 71,  201 => 83,  196 => 92,  194 => 62,  191 => 70,  189 => 91,  186 => 59,  180 => 72,  172 => 64,  159 => 79,  154 => 54,  147 => 58,  132 => 47,  127 => 52,  121 => 55,  118 => 39,  114 => 39,  104 => 37,  100 => 36,  78 => 26,  75 => 23,  71 => 21,  58 => 25,  34 => 8,  91 => 28,  84 => 23,  26 => 3,  27 => 4,  24 => 2,  21 => 1,  44 => 11,  31 => 6,  25 => 3,  19 => 1,  70 => 13,  63 => 16,  46 => 14,  22 => 2,  163 => 81,  155 => 56,  152 => 75,  149 => 54,  145 => 57,  139 => 71,  131 => 46,  123 => 35,  120 => 50,  115 => 44,  106 => 53,  101 => 33,  96 => 35,  83 => 27,  80 => 32,  74 => 25,  66 => 19,  55 => 15,  52 => 18,  50 => 15,  43 => 12,  41 => 12,  37 => 6,  35 => 9,  32 => 6,  29 => 3,  184 => 88,  178 => 86,  171 => 84,  165 => 60,  162 => 53,  157 => 56,  153 => 62,  151 => 53,  143 => 56,  138 => 55,  136 => 50,  133 => 46,  130 => 39,  122 => 51,  119 => 57,  116 => 41,  111 => 37,  108 => 41,  102 => 34,  98 => 32,  95 => 30,  92 => 21,  89 => 28,  85 => 27,  81 => 24,  73 => 23,  64 => 11,  60 => 20,  57 => 19,  54 => 19,  51 => 16,  48 => 11,  45 => 13,  42 => 12,  39 => 10,  36 => 9,  33 => 10,  30 => 5,);
    }
}
