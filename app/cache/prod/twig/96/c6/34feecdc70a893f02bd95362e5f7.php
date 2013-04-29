<?php

/* KnpPaginatorBundle:Pagination:sliding.html.twig */
class __TwigTemplate_96c634feecdc70a893f02bd95362e5f7 extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        if (((isset($context["pageCount"]) ? $context["pageCount"] : null) > 1)) {
            // line 4
            echo "<div class=\"pagination\">
\t";
            // line 5
            if ((array_key_exists("first", $context) && ((isset($context["current"]) ? $context["current"] : null) != (isset($context["first"]) ? $context["first"] : null)))) {
                // line 6
                echo "        <span class=\"first\">
        \t<a href=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array("page" => (isset($context["first"]) ? $context["first"] : null)))), "html", null, true);
                echo "\">&lt;&lt;</a>
        </span>
    ";
            }
            // line 10
            echo "
    ";
            // line 11
            if (array_key_exists("previous", $context)) {
                // line 12
                echo "        <span class=\"previous\">
        \t<a href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array("page" => (isset($context["previous"]) ? $context["previous"] : null)))), "html", null, true);
                echo "\">&lt;</a>
        </span>
    ";
            }
            // line 16
            echo "
    ";
            // line 17
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) ? $context["pagesInRange"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 18
                echo "        ";
                if (((isset($context["page"]) ? $context["page"] : null) != (isset($context["current"]) ? $context["current"] : null))) {
                    // line 19
                    echo "            <span class=\"page\">
            \t<a href=\"";
                    // line 20
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array("page" => (isset($context["page"]) ? $context["page"] : null)))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
                    echo "</a>
            </span>
        ";
                } else {
                    // line 23
                    echo "            <span class=\"current\">";
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
                    echo "</span>
        ";
                }
                // line 25
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 27
            echo "
    ";
            // line 28
            if (array_key_exists("next", $context)) {
                // line 29
                echo "        <span class=\"next\">
        \t<a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array("page" => (isset($context["next"]) ? $context["next"] : null)))), "html", null, true);
                echo "\">&gt;</a>
        </span>
    ";
            }
            // line 33
            echo "
    ";
            // line 34
            if ((array_key_exists("last", $context) && ((isset($context["current"]) ? $context["current"] : null) != (isset($context["last"]) ? $context["last"] : null)))) {
                // line 35
                echo "        <span class=\"last\">
        \t<a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array("page" => (isset($context["last"]) ? $context["last"] : null)))), "html", null, true);
                echo "\">&gt;&gt;</a>
        </span>
    ";
            }
            // line 39
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:sliding.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 147,  374 => 142,  353 => 129,  341 => 122,  326 => 120,  322 => 118,  305 => 116,  291 => 111,  288 => 110,  272 => 105,  269 => 104,  246 => 101,  131 => 45,  242 => 104,  125 => 50,  629 => 267,  601 => 234,  583 => 223,  573 => 219,  569 => 218,  565 => 217,  561 => 216,  556 => 215,  547 => 208,  530 => 204,  517 => 194,  508 => 190,  490 => 179,  475 => 171,  470 => 168,  453 => 164,  443 => 161,  421 => 154,  416 => 153,  413 => 152,  404 => 148,  398 => 146,  393 => 144,  377 => 139,  373 => 138,  366 => 136,  349 => 128,  343 => 124,  340 => 123,  336 => 122,  321 => 112,  312 => 105,  279 => 87,  265 => 79,  261 => 78,  252 => 103,  248 => 75,  224 => 97,  188 => 55,  168 => 49,  574 => 273,  553 => 243,  549 => 242,  544 => 241,  536 => 237,  531 => 236,  499 => 217,  497 => 216,  484 => 176,  481 => 205,  474 => 200,  462 => 190,  457 => 165,  454 => 187,  452 => 186,  439 => 176,  436 => 159,  423 => 163,  406 => 159,  394 => 150,  379 => 146,  371 => 141,  362 => 139,  354 => 134,  351 => 133,  347 => 132,  342 => 130,  338 => 129,  335 => 128,  331 => 127,  304 => 114,  297 => 112,  285 => 109,  250 => 88,  227 => 77,  218 => 86,  208 => 63,  166 => 50,  134 => 68,  62 => 19,  128 => 44,  527 => 199,  491 => 178,  476 => 166,  466 => 167,  455 => 155,  438 => 154,  405 => 141,  401 => 140,  397 => 139,  392 => 137,  389 => 143,  372 => 135,  355 => 120,  323 => 111,  298 => 107,  286 => 98,  277 => 91,  213 => 79,  179 => 71,  175 => 70,  167 => 55,  142 => 56,  137 => 47,  117 => 45,  140 => 73,  501 => 179,  498 => 178,  488 => 172,  473 => 171,  461 => 157,  448 => 162,  426 => 155,  422 => 149,  407 => 148,  395 => 140,  382 => 132,  360 => 128,  357 => 131,  345 => 117,  328 => 126,  319 => 110,  313 => 116,  311 => 109,  307 => 108,  303 => 101,  299 => 106,  293 => 105,  283 => 103,  275 => 100,  258 => 91,  236 => 80,  207 => 89,  192 => 87,  182 => 60,  176 => 59,  173 => 91,  86 => 27,  69 => 19,  40 => 4,  698 => 319,  677 => 289,  673 => 288,  668 => 287,  660 => 283,  655 => 282,  652 => 281,  643 => 276,  631 => 266,  626 => 264,  623 => 263,  621 => 262,  608 => 236,  605 => 251,  598 => 246,  586 => 236,  581 => 234,  578 => 220,  576 => 232,  563 => 222,  560 => 221,  551 => 214,  545 => 210,  528 => 235,  519 => 230,  511 => 196,  507 => 220,  502 => 218,  492 => 173,  487 => 184,  485 => 183,  478 => 178,  460 => 174,  450 => 163,  444 => 169,  440 => 168,  433 => 164,  429 => 156,  409 => 142,  396 => 145,  387 => 148,  384 => 141,  380 => 140,  370 => 137,  365 => 137,  359 => 134,  356 => 135,  350 => 129,  337 => 118,  333 => 115,  329 => 115,  324 => 113,  315 => 108,  310 => 106,  308 => 105,  278 => 107,  266 => 93,  259 => 90,  253 => 87,  247 => 84,  241 => 98,  221 => 96,  206 => 64,  199 => 79,  193 => 57,  190 => 62,  174 => 50,  169 => 66,  161 => 47,  158 => 86,  156 => 41,  146 => 76,  170 => 76,  152 => 55,  148 => 54,  113 => 23,  99 => 36,  77 => 16,  115 => 36,  90 => 29,  80 => 26,  53 => 9,  49 => 9,  23 => 3,  243 => 73,  238 => 72,  234 => 79,  231 => 70,  214 => 94,  210 => 84,  203 => 55,  200 => 54,  195 => 8,  164 => 84,  145 => 38,  129 => 35,  124 => 43,  110 => 43,  107 => 50,  87 => 32,  52 => 16,  37 => 3,  56 => 17,  20 => 1,  301 => 115,  295 => 113,  292 => 95,  289 => 94,  287 => 104,  282 => 108,  276 => 106,  273 => 95,  270 => 82,  268 => 93,  263 => 91,  249 => 79,  245 => 74,  230 => 80,  222 => 87,  220 => 62,  215 => 73,  211 => 64,  204 => 82,  198 => 65,  185 => 73,  183 => 85,  177 => 92,  160 => 63,  149 => 78,  123 => 48,  120 => 40,  112 => 55,  106 => 34,  82 => 35,  65 => 20,  38 => 10,  155 => 54,  144 => 47,  141 => 54,  139 => 36,  135 => 54,  126 => 49,  109 => 37,  103 => 34,  101 => 24,  70 => 27,  67 => 18,  61 => 12,  47 => 7,  28 => 3,  105 => 35,  96 => 22,  93 => 20,  83 => 18,  76 => 31,  72 => 22,  68 => 20,  50 => 8,  94 => 30,  88 => 39,  79 => 25,  59 => 18,  43 => 12,  32 => 7,  225 => 71,  216 => 65,  212 => 88,  205 => 84,  201 => 83,  196 => 78,  194 => 62,  191 => 75,  189 => 7,  186 => 86,  180 => 59,  172 => 50,  163 => 63,  159 => 81,  154 => 59,  147 => 77,  132 => 34,  127 => 49,  121 => 26,  118 => 59,  114 => 39,  104 => 28,  100 => 33,  78 => 29,  75 => 21,  71 => 20,  63 => 16,  58 => 15,  34 => 5,  91 => 29,  84 => 22,  74 => 15,  66 => 13,  55 => 17,  41 => 11,  46 => 13,  26 => 1,  22 => 3,  27 => 5,  24 => 4,  29 => 6,  21 => 1,  44 => 8,  35 => 3,  31 => 2,  25 => 5,  19 => 2,  184 => 54,  178 => 71,  171 => 61,  165 => 48,  162 => 81,  157 => 80,  153 => 61,  151 => 52,  143 => 50,  138 => 53,  136 => 71,  133 => 43,  130 => 52,  122 => 40,  119 => 55,  116 => 24,  111 => 32,  108 => 36,  102 => 29,  98 => 36,  95 => 31,  92 => 28,  89 => 28,  85 => 29,  81 => 27,  73 => 23,  64 => 23,  60 => 16,  57 => 11,  54 => 13,  51 => 10,  48 => 9,  45 => 11,  42 => 6,  39 => 5,  36 => 4,  33 => 3,  30 => 3,);
    }
}
