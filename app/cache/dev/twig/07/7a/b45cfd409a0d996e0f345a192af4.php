<?php

/* SensioDistributionBundle:Configurator:check.html.twig */
class __TwigTemplate_077ab45cfd409a0d996e0f345a192af4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (twig_length_filter($this->env, $this->getContext($context, "majors"))) {
            // line 5
            echo "        <h1>Major Problems that need to be fixed now</h1>
        <p>
            We have detected <strong>";
            // line 7
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getContext($context, "majors")), "html", null, true);
            echo "</strong> major problems.
            You <em>must</em> fix them before continuing:
        </p>
        <ol>
            ";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "majors"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                echo "                <li>";
                echo twig_escape_filter($this->env, $this->getContext($context, "message"), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 14
            echo "        </ol>
    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if (twig_length_filter($this->env, $this->getContext($context, "minors"))) {
            // line 18
            echo "        <h1>Some Recommandations</h1>

        <p>
            ";
            // line 21
            if (twig_length_filter($this->env, $this->getContext($context, "majors"))) {
                // line 22
                echo "            Additionally, we
            ";
            } else {
                // line 24
                echo "            We
            ";
            }
            // line 26
            echo "            have detected some minor problems that we <em>recommend</em> you to fix to have a better Symfony
            experience:

            <ol>
                ";
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "minors"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 31
                echo "                    <li>";
                echo twig_escape_filter($this->env, $this->getContext($context, "message"), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 33
            echo "            </ol>
        </p>

    ";
        }
        // line 37
        echo "
    ";
        // line 38
        if ((!twig_length_filter($this->env, $this->getContext($context, "majors")))) {
            // line 39
            echo "        <ul class=\"symfony_list\">
            <li><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->getContext($context, "url"), "html", null, true);
            echo "\">Configure your Symfony Application online</a></li>
        </ul>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:check.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1179 => 332,  1173 => 331,  1167 => 330,  1161 => 329,  1155 => 328,  1149 => 327,  1143 => 326,  1137 => 325,  1131 => 324,  1115 => 318,  1108 => 317,  1106 => 316,  1103 => 315,  1080 => 311,  1055 => 310,  1053 => 309,  1050 => 308,  1038 => 303,  1033 => 302,  1031 => 301,  1028 => 300,  1019 => 294,  1013 => 292,  1010 => 291,  1005 => 290,  1003 => 289,  1000 => 288,  993 => 283,  986 => 281,  983 => 277,  979 => 276,  976 => 275,  973 => 274,  971 => 273,  968 => 272,  960 => 268,  958 => 267,  955 => 266,  948 => 261,  945 => 260,  937 => 255,  933 => 254,  929 => 253,  926 => 252,  924 => 251,  921 => 250,  913 => 246,  911 => 242,  909 => 241,  906 => 240,  885 => 234,  882 => 233,  879 => 232,  876 => 231,  873 => 230,  870 => 229,  867 => 228,  864 => 227,  861 => 226,  858 => 225,  856 => 224,  853 => 223,  845 => 217,  842 => 216,  840 => 215,  837 => 214,  829 => 210,  826 => 209,  824 => 208,  821 => 207,  813 => 203,  810 => 202,  808 => 201,  805 => 200,  797 => 196,  794 => 195,  792 => 194,  789 => 193,  781 => 189,  778 => 188,  773 => 186,  765 => 182,  762 => 181,  760 => 180,  757 => 179,  749 => 175,  747 => 174,  744 => 173,  736 => 169,  733 => 168,  731 => 167,  728 => 166,  720 => 162,  717 => 161,  715 => 160,  713 => 159,  710 => 158,  703 => 153,  695 => 152,  687 => 150,  681 => 148,  676 => 146,  673 => 145,  665 => 139,  662 => 137,  660 => 135,  655 => 134,  649 => 132,  646 => 131,  641 => 129,  632 => 123,  628 => 122,  624 => 121,  620 => 120,  615 => 119,  601 => 114,  585 => 110,  583 => 109,  580 => 108,  564 => 104,  562 => 103,  559 => 102,  542 => 98,  530 => 96,  521 => 92,  516 => 91,  495 => 89,  493 => 88,  490 => 87,  481 => 82,  478 => 81,  475 => 80,  469 => 78,  467 => 77,  462 => 76,  459 => 75,  456 => 74,  450 => 72,  448 => 71,  440 => 70,  438 => 69,  435 => 68,  429 => 64,  421 => 62,  416 => 61,  412 => 60,  407 => 59,  405 => 58,  402 => 57,  393 => 52,  387 => 50,  384 => 49,  382 => 48,  369 => 43,  367 => 42,  364 => 41,  353 => 36,  350 => 35,  345 => 33,  334 => 27,  329 => 26,  321 => 23,  290 => 14,  278 => 8,  272 => 6,  269 => 5,  267 => 4,  256 => 330,  250 => 327,  248 => 326,  246 => 325,  244 => 324,  241 => 323,  223 => 299,  218 => 288,  208 => 266,  200 => 260,  197 => 259,  195 => 250,  187 => 239,  124 => 129,  99 => 68,  388 => 160,  385 => 159,  379 => 47,  377 => 157,  370 => 156,  366 => 155,  362 => 153,  360 => 152,  357 => 151,  354 => 150,  352 => 149,  344 => 147,  342 => 32,  339 => 145,  330 => 140,  327 => 139,  320 => 135,  314 => 21,  311 => 20,  306 => 128,  280 => 114,  275 => 111,  264 => 3,  258 => 331,  254 => 329,  247 => 97,  234 => 89,  231 => 308,  221 => 83,  169 => 207,  107 => 37,  97 => 23,  209 => 77,  176 => 220,  170 => 60,  356 => 37,  347 => 34,  343 => 159,  340 => 158,  335 => 157,  333 => 141,  325 => 138,  323 => 24,  316 => 22,  309 => 141,  302 => 137,  281 => 125,  274 => 121,  259 => 109,  228 => 307,  214 => 82,  206 => 78,  203 => 77,  192 => 249,  158 => 56,  140 => 42,  125 => 44,  790 => 469,  787 => 468,  776 => 187,  772 => 465,  768 => 463,  755 => 462,  729 => 457,  726 => 456,  707 => 454,  690 => 151,  686 => 451,  682 => 450,  678 => 147,  674 => 448,  670 => 447,  666 => 446,  663 => 138,  661 => 136,  644 => 130,  633 => 442,  618 => 437,  613 => 435,  609 => 117,  606 => 116,  604 => 115,  590 => 431,  558 => 401,  540 => 398,  523 => 93,  520 => 396,  518 => 395,  513 => 90,  508 => 391,  252 => 328,  190 => 240,  181 => 87,  173 => 85,  161 => 199,  156 => 192,  148 => 46,  164 => 200,  134 => 158,  113 => 40,  262 => 236,  260 => 332,  240 => 93,  238 => 321,  86 => 46,  90 => 27,  315 => 140,  308 => 129,  305 => 134,  299 => 130,  288 => 129,  284 => 121,  261 => 113,  257 => 234,  243 => 106,  239 => 104,  236 => 315,  233 => 314,  226 => 300,  224 => 99,  217 => 83,  213 => 272,  207 => 76,  202 => 263,  175 => 87,  69 => 15,  166 => 206,  150 => 75,  146 => 178,  129 => 145,  87 => 26,  188 => 66,  167 => 64,  137 => 47,  62 => 16,  53 => 17,  40 => 11,  128 => 45,  77 => 21,  23 => 3,  49 => 12,  210 => 271,  199 => 61,  193 => 68,  182 => 223,  179 => 222,  174 => 214,  168 => 82,  110 => 38,  56 => 12,  20 => 1,  301 => 125,  295 => 16,  292 => 15,  289 => 119,  287 => 13,  282 => 115,  276 => 248,  273 => 110,  270 => 84,  268 => 107,  263 => 80,  249 => 108,  245 => 96,  230 => 101,  222 => 73,  220 => 297,  215 => 287,  211 => 81,  204 => 94,  198 => 69,  185 => 68,  183 => 63,  177 => 59,  160 => 59,  112 => 39,  82 => 26,  65 => 17,  38 => 7,  144 => 173,  141 => 172,  135 => 47,  126 => 144,  109 => 102,  103 => 25,  67 => 18,  61 => 2,  47 => 9,  91 => 56,  84 => 25,  28 => 3,  225 => 88,  216 => 90,  212 => 78,  205 => 265,  201 => 83,  196 => 69,  194 => 62,  191 => 70,  189 => 59,  186 => 76,  180 => 72,  172 => 64,  159 => 193,  154 => 186,  147 => 58,  132 => 47,  127 => 52,  121 => 128,  118 => 39,  114 => 108,  104 => 87,  100 => 24,  78 => 24,  75 => 23,  71 => 19,  34 => 5,  44 => 8,  94 => 57,  88 => 30,  59 => 15,  105 => 35,  93 => 28,  79 => 23,  76 => 31,  72 => 21,  68 => 19,  58 => 14,  24 => 2,  27 => 5,  25 => 3,  21 => 1,  31 => 4,  26 => 3,  19 => 1,  70 => 20,  63 => 16,  46 => 10,  22 => 2,  163 => 81,  155 => 56,  152 => 77,  149 => 179,  145 => 57,  139 => 166,  131 => 157,  123 => 35,  120 => 50,  115 => 40,  106 => 101,  101 => 33,  96 => 67,  83 => 24,  80 => 32,  74 => 22,  66 => 12,  55 => 13,  52 => 13,  50 => 12,  43 => 9,  41 => 7,  37 => 7,  35 => 5,  32 => 6,  29 => 3,  184 => 237,  178 => 62,  171 => 213,  165 => 54,  162 => 53,  157 => 56,  153 => 62,  151 => 185,  143 => 43,  138 => 55,  136 => 165,  133 => 46,  130 => 39,  122 => 51,  119 => 114,  116 => 113,  111 => 107,  108 => 33,  102 => 30,  98 => 29,  95 => 31,  92 => 31,  89 => 47,  85 => 27,  81 => 24,  73 => 20,  64 => 17,  60 => 15,  57 => 14,  54 => 13,  51 => 16,  48 => 11,  45 => 11,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
