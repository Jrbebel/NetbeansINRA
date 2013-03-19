<?php

/* WebProfilerBundle:Profiler:toolbar_style.html.twig */
class __TwigTemplate_7d9562edb88537cbfba2be54a2ff1047 extends Twig_Template
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
        echo "<style type=\"text/css\">
    .sf-toolbarreset {
        position: fixed;
        background-color: #f7f7f7;
        left: 0;
        right: 0;
        height: 38px;
        margin: 0;
        padding: 0 40px 0 0;
        z-index: 6000000;
        font: 11px Verdana, Arial, sans-serif;
        text-align: left;
        color: #2f2f2f;

        background-image: -moz-linear-gradient(-90deg, #e4e4e4, #ffffff);
        background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#e4e4e4), to(#ffffff));
        bottom: 0;
        border-top: 1px solid #bbb;
    }
    .sf-toolbarreset span,
    .sf-toolbarreset div {
        font-size: 11px;
    }
    .sf-toolbarreset img {
        width: auto;
        display: inline;
    }

    .sf-toolbarreset .hide-button {
        display: block;
        position: absolute;
        top: 12px;
        right: 10px;
        width: 15px;
        height: 15px;
        cursor: pointer;
        background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAMAAAAMCGV4AAAAllBMVEXDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PExMTPz8/Q0NDR0dHT09Pb29vc3Nzf39/h4eHi4uLj4+P6+vr7+/v8/Pz9/f3///+Nh2QuAAAAIXRSTlMABgwPGBswMzk8QktRV4SKjZOWmaKlq7TAxszb3urt+fy1vNEpAAAAiklEQVQIHUXBBxKCQBREwRFzDqjoGh+C2YV//8u5Sll2S0E/dof1tKdKM6GyqCto7PjZRJIS/mbSELgXOSd/BzpKIH1ZefVWpDDTHsi8mZVnwImPi5ndCLbaAZk3M58Bay0h9VbeSvMpjDUAHj4jL55AW1rxN5fU2PLjIgVRzNdxVFOlGzvnJi0Fb1XNGBHA9uQOAAAAAElFTkSuQmCC');
    }

    .sf-toolbar-block {
        white-space: nowrap;
        color: #2f2f2f;
        display: block;
        min-height: 28px;
        border-right: 1px solid #e4e4e4;
        padding: 0;
        float: left;
        cursor: default;
    }

    .sf-toolbar-block span {
        display: inline-block;
    }

    .sf-toolbar-block .sf-toolbar-info-piece {
        padding-bottom: 5px;
    }

    .sf-toolbar-block .sf-toolbar-info-piece:last-child {
        padding-bottom: 0;
    }

    .sf-toolbar-block .sf-toolbar-info-piece a,
    .sf-toolbar-block .sf-toolbar-info-piece abbr {
        color: #2f2f2f;
    }

    .sf-toolbar-block .sf-toolbar-info-piece b {
        display: inline-block;
        width: 110px;
    }

    .sf-toolbar-block .sf-toolbar-info-with-next-pointer:after {
        content: ' :: ';
        color: #999;
    }

    .sf-toolbar-block .sf-toolbar-info-with-delimiter {
        border-right: 1px solid #999;
        padding-right: 5px;
        margin-right: 5px;
    }

    .sf-toolbar-block .sf-toolbar-info {
        display: none;
        position: absolute;
        background-color: #fff;
        border: 1px solid #bbb;
        padding: 10px 8px;
        margin-left: -1px;

        bottom: 38px;
        border-bottom-width: 0;
    }

    .sf-toolbar-block .sf-toolbar-info:empty {
        visibility: hidden;
    }

    .sf-toolbar-block .sf-toolbar-status {
        display: inline-block;
        color: #fff;
        background-color: #666;
        padding: 3px 6px;
        border-radius: 3px;
        margin-bottom: 2px;
        vertical-align: middle;
        min-width: 6px;
        min-height: 13px;
    }

    .sf-toolbar-block .sf-toolbar-status abbr {
        color: #fff;
        border-bottom: 1px dotted black;
    }

    .sf-toolbar-block .sf-toolbar-status-green {
        background-color: #759e1a;
    }

    .sf-toolbar-block .sf-toolbar-status-red {
        background-color: #a33;
    }

    .sf-toolbar-block .sf-toolbar-status-yellow {
        background-color: #ffcc00;
        color: #000;
    }

    .sf-toolbar-block .sf-toolbar-status-black {
        background-color: #000;
    }

    .sf-toolbar-block .sf-toolbar-icon {
        display: block;
    }

    .sf-toolbar-block .sf-toolbar-icon > a,
    .sf-toolbar-block .sf-toolbar-icon > span {
        display: block;
        text-decoration: none;
        margin: 0;
        padding: 5px 8px;
        min-width: 20px;
        text-align: center;
        vertical-align: middle;
    }

    .sf-toolbar-block .sf-toolbar-icon > a,
    .sf-toolbar-block .sf-toolbar-icon > a:link
    .sf-toolbar-block .sf-toolbar-icon > a:hover {
        color: black !important;
    }

    .sf-toolbar-block .sf-toolbar-icon img {
        border-width: 0;
        vertical-align: middle;
    }

    .sf-toolbar-block .sf-toolbar-icon img + span {
        margin-left: 5px;
        margin-top: 2px;
    }

    .sf-toolbar-block .sf-toolbar-icon .sf-toolbar-status {
        border-radius: 12px;
        border-bottom-left-radius: 0px;
        margin-top: 0;
    }

    .sf-toolbar-block .sf-toolbar-info-method {
        border-bottom: 1px dashed #ccc;
        cursor: help;
    }

    .sf-toolbar-block .sf-toolbar-info-method[onclick=\"\"] {
        border-bottom: none;
        cursor: inherit;
    }

    .sf-toolbar-info-php {}
    .sf-toolbar-info-php-ext {}

    .sf-toolbar-info-php-ext .sf-toolbar-status {
        margin-left: 2px;
    }

    .sf-toolbar-info-php-ext .sf-toolbar-status:first-child {
        margin-left: 0;
    }

    .sf-toolbar-block a .sf-toolbar-info-piece-additional,
    .sf-toolbar-block a .sf-toolbar-info-piece-additional-detail {
        display: inline-block;
    }

    .sf-toolbar-block a .sf-toolbar-info-piece-additional:empty,
    .sf-toolbar-block a .sf-toolbar-info-piece-additional-detail:empty {
        display: none;
    }

    .sf-toolbarreset:hover {
        box-shadow: rgba(0, 0, 0, 0.3) 0 0 50px;
    }

    .sf-toolbar-block:hover {
        box-shadow: rgba(0, 0, 0, 0.3) 0 0 5px;
    }

    .sf-toolbar-block:hover .sf-toolbar-icon {
        background-color: #fff;
    }
    .sf-toolbar-block:hover .sf-toolbar-info {
        display: block;
    }

    /***** Override the setting when the toolbar is on the top *****/
    ";
        // line 218
        if (((isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")) == "top")) {
            // line 219
            echo "        .sf-toolbarreset {
            background-image: -moz-linear-gradient(-90deg, #ffffff, #e4e4e4);
            background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ffffff), to(#e4e4e4));
            top: 0;
            bottom: auto;
            border-bottom: 1px solid #bbb;
        }

        .sf-toolbar-block .sf-toolbar-info {
            top: 39px;
            bottom: auto;
            border-top-width: 0;
            border-bottom: 1px solid #bbb;
        }
    ";
        }
        // line 234
        echo "
    ";
        // line 235
        if ((!(isset($context["floatable"]) ? $context["floatable"] : $this->getContext($context, "floatable")))) {
            // line 236
            echo "        .sf-toolbarreset {
            position: static;
            background: #cbcbcb;
            background-image: -moz-linear-gradient(-90deg, #e8e8e8, #cbcbcb) !important;
            background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#e8e8e8), to(#cbcbcb)) !important;
        }

        .sf-toolbarreset abbr {
            border-bottom: 1px dotted #000000;
            cursor: help;
        }
    ";
        }
        // line 248
        echo "
    /***** Media query *****/
    @media screen and (max-width: 779px) {
        .sf-toolbar-block .sf-toolbar-icon > * > :first-child ~ * {
            display: none;
        }

        .sf-toolbar-block .sf-toolbar-icon > * > .sf-toolbar-info-piece-additional,
        .sf-toolbar-block .sf-toolbar-icon > * > .sf-toolbar-info-piece-additional-detail {
            display: none !important;
        }
    }

    @media screen and (min-width: 880px) {
        .sf-toolbar-block .sf-toolbar-icon a[href\$=\"config\"] .sf-toolbar-info-piece-additional {
            display: inline-block;
        }
    }

    @media screen and (min-width: 980px) {
        .sf-toolbar-block .sf-toolbar-icon a[href\$=\"security\"] .sf-toolbar-info-piece-additional {
            display: inline-block;
        }
    }

    @media screen and (max-width: 1179px) {
        .sf-toolbar-block .sf-toolbar-icon > * > .sf-toolbar-info-piece-additional {
            display: none;
        }
    }

    @media screen and (max-width: 1439px) {
        .sf-toolbar-block .sf-toolbar-icon > * > .sf-toolbar-info-piece-additional-detail {
            display: none;
        }
    }
</style>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_style.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 236,  260 => 235,  257 => 234,  790 => 469,  787 => 468,  776 => 466,  772 => 465,  768 => 463,  755 => 462,  729 => 457,  726 => 456,  707 => 454,  690 => 453,  686 => 451,  682 => 450,  678 => 449,  674 => 448,  670 => 447,  666 => 446,  663 => 445,  661 => 444,  644 => 443,  633 => 442,  618 => 437,  613 => 435,  609 => 434,  606 => 433,  604 => 432,  590 => 431,  558 => 401,  540 => 398,  523 => 397,  520 => 396,  518 => 395,  513 => 393,  181 => 87,  173 => 85,  356 => 163,  347 => 160,  343 => 159,  340 => 158,  335 => 157,  316 => 145,  309 => 141,  302 => 137,  281 => 125,  274 => 121,  217 => 83,  206 => 78,  158 => 56,  113 => 40,  77 => 18,  176 => 61,  170 => 60,  388 => 160,  385 => 159,  379 => 158,  377 => 157,  370 => 156,  366 => 155,  362 => 153,  360 => 152,  354 => 150,  352 => 149,  344 => 147,  342 => 146,  339 => 145,  333 => 156,  327 => 139,  325 => 150,  320 => 135,  314 => 131,  311 => 130,  308 => 129,  306 => 128,  280 => 114,  264 => 105,  258 => 103,  254 => 101,  252 => 138,  247 => 97,  240 => 219,  228 => 89,  226 => 86,  209 => 73,  207 => 95,  202 => 73,  193 => 68,  190 => 89,  169 => 56,  148 => 74,  97 => 23,  174 => 58,  86 => 28,  328 => 147,  321 => 142,  304 => 131,  300 => 129,  296 => 128,  288 => 129,  269 => 118,  261 => 115,  255 => 113,  251 => 111,  242 => 108,  232 => 105,  229 => 104,  219 => 101,  197 => 97,  187 => 94,  140 => 49,  69 => 20,  188 => 67,  167 => 64,  142 => 64,  134 => 54,  128 => 45,  125 => 44,  253 => 85,  224 => 72,  213 => 65,  192 => 72,  168 => 55,  137 => 47,  62 => 25,  40 => 11,  610 => 241,  605 => 240,  598 => 238,  595 => 237,  586 => 232,  565 => 214,  562 => 213,  555 => 208,  534 => 190,  531 => 189,  519 => 178,  508 => 391,  506 => 171,  503 => 170,  486 => 166,  480 => 163,  475 => 160,  469 => 156,  453 => 153,  446 => 151,  442 => 149,  438 => 148,  435 => 147,  428 => 145,  422 => 142,  419 => 141,  411 => 138,  408 => 137,  406 => 136,  399 => 134,  395 => 133,  391 => 132,  384 => 129,  367 => 128,  357 => 151,  348 => 118,  345 => 117,  341 => 116,  330 => 140,  326 => 107,  323 => 149,  318 => 141,  312 => 137,  307 => 97,  290 => 93,  283 => 91,  279 => 89,  275 => 111,  272 => 87,  265 => 85,  259 => 109,  256 => 170,  248 => 110,  236 => 106,  221 => 83,  182 => 69,  161 => 80,  156 => 77,  99 => 36,  166 => 82,  150 => 75,  146 => 65,  90 => 41,  53 => 38,  49 => 17,  23 => 3,  243 => 76,  238 => 218,  234 => 89,  231 => 88,  214 => 82,  210 => 60,  203 => 77,  200 => 54,  195 => 59,  164 => 63,  129 => 36,  124 => 49,  110 => 39,  107 => 27,  87 => 33,  56 => 39,  20 => 1,  301 => 125,  295 => 133,  292 => 120,  289 => 119,  287 => 118,  282 => 115,  276 => 248,  273 => 110,  270 => 84,  268 => 107,  263 => 80,  249 => 79,  245 => 101,  230 => 71,  222 => 73,  220 => 62,  215 => 79,  211 => 81,  204 => 94,  198 => 74,  185 => 68,  183 => 63,  177 => 59,  160 => 59,  112 => 52,  82 => 19,  65 => 22,  38 => 6,  144 => 73,  141 => 54,  135 => 47,  126 => 61,  109 => 51,  103 => 25,  67 => 22,  61 => 18,  47 => 15,  28 => 3,  105 => 35,  93 => 42,  76 => 34,  72 => 22,  68 => 30,  94 => 30,  88 => 20,  79 => 35,  59 => 21,  225 => 88,  216 => 90,  212 => 78,  205 => 71,  201 => 83,  196 => 92,  194 => 96,  191 => 70,  189 => 7,  186 => 59,  180 => 89,  172 => 64,  159 => 81,  154 => 54,  147 => 58,  132 => 47,  127 => 52,  121 => 55,  118 => 39,  114 => 39,  104 => 37,  100 => 36,  78 => 26,  75 => 24,  71 => 23,  58 => 25,  34 => 8,  91 => 28,  84 => 27,  26 => 3,  27 => 4,  24 => 2,  21 => 1,  44 => 11,  31 => 4,  25 => 4,  19 => 1,  70 => 13,  63 => 21,  46 => 14,  22 => 2,  163 => 81,  155 => 56,  152 => 55,  149 => 78,  145 => 57,  139 => 71,  131 => 46,  123 => 35,  120 => 50,  115 => 44,  106 => 36,  101 => 33,  96 => 35,  83 => 27,  80 => 32,  74 => 25,  66 => 19,  55 => 15,  52 => 18,  50 => 18,  43 => 12,  41 => 12,  37 => 7,  35 => 6,  32 => 6,  29 => 3,  184 => 88,  178 => 86,  171 => 84,  165 => 60,  162 => 53,  157 => 80,  153 => 62,  151 => 53,  143 => 56,  138 => 55,  136 => 71,  133 => 46,  130 => 39,  122 => 51,  119 => 57,  116 => 41,  111 => 37,  108 => 41,  102 => 34,  98 => 32,  95 => 34,  92 => 21,  89 => 30,  85 => 24,  81 => 24,  73 => 23,  64 => 11,  60 => 20,  57 => 20,  54 => 19,  51 => 16,  48 => 11,  45 => 13,  42 => 12,  39 => 10,  36 => 9,  33 => 10,  30 => 5,);
    }
}
