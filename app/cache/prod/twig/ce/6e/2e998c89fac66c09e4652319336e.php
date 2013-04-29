<?php

/* Inra2013urzBundle:Analyse:Email.html.twig */
class __TwigTemplate_ce6e2e998c89fac66c09e4652319336e extends Twig_Template
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
        echo "
Bonjour,


";
        // line 5
        if (($this->getAttribute($this->getAttribute((isset($context["Protocole"]) ? $context["Protocole"] : null), 0, array(), "array"), "Validation") == 1)) {
            // line 6
            echo "Vous venez de recevoir une alerte pour une demande de validation de résultat du protocole ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Protocole"]) ? $context["Protocole"] : null), 0, array(), "array"), "NomProtocole"), "html", null, true);
            echo " dirigé par ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["Protocole"]) ? $context["Protocole"] : null), 0, array(), "array"), "Responsable", array(), "method"), "Nom"), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["Protocole"]) ? $context["Protocole"] : null), 0, array(), "array"), "Responsable"), "Prenom"), "html", null, true);
            echo " .
";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["Protocole"]) ? $context["Protocole"] : null), 0, array(), "array"), "Validation") == 3)) {
            // line 8
            echo "Vous venez de recevoir une alerte pour un refus de validation de résultat du protocole ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Protocole"]) ? $context["Protocole"] : null), 0, array(), "array"), "NomProtocole"), "html", null, true);
            echo " dirigé par ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["Protocole"]) ? $context["Protocole"] : null), 0, array(), "array"), "Responsable", array(), "method"), "Nom"), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["Protocole"]) ? $context["Protocole"] : null), 0, array(), "array"), "Responsable"), "Prenom"), "html", null, true);
            echo " .
";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["Protocole"]) ? $context["Protocole"] : null), 0, array(), "array"), "Validation") == 2)) {
            // line 10
            echo "Vous venez de recevoir une alerte pour validation de résultat du protocole ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Protocole"]) ? $context["Protocole"] : null), 0, array(), "array"), "NomProtocole"), "html", null, true);
            echo " dirigé par ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["Protocole"]) ? $context["Protocole"] : null), 0, array(), "array"), "Responsable", array(), "method"), "Nom"), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["Protocole"]) ? $context["Protocole"] : null), 0, array(), "array"), "Responsable"), "Prenom"), "html", null, true);
            echo " .

";
        }
        // line 13
        echo "Veuillez vous rediriger vers le site :http://localhost/NetbeansINRA/web/app.php/Home
";
    }

    public function getTemplateName()
    {
        return "Inra2013urzBundle:Analyse:Email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  574 => 273,  553 => 243,  549 => 242,  544 => 241,  536 => 237,  531 => 236,  499 => 217,  497 => 216,  484 => 206,  481 => 205,  474 => 200,  462 => 190,  457 => 188,  454 => 187,  452 => 186,  439 => 176,  436 => 175,  423 => 163,  406 => 159,  394 => 150,  379 => 146,  371 => 143,  362 => 139,  354 => 134,  351 => 133,  347 => 132,  342 => 130,  338 => 129,  335 => 128,  331 => 127,  304 => 114,  297 => 112,  285 => 103,  250 => 88,  227 => 77,  218 => 74,  208 => 71,  166 => 50,  134 => 68,  62 => 18,  128 => 42,  527 => 199,  491 => 178,  476 => 166,  466 => 159,  455 => 155,  438 => 154,  405 => 141,  401 => 140,  397 => 139,  392 => 137,  389 => 136,  372 => 135,  355 => 120,  323 => 111,  298 => 107,  286 => 98,  277 => 91,  213 => 79,  179 => 63,  175 => 62,  167 => 55,  142 => 50,  137 => 47,  117 => 25,  140 => 46,  501 => 179,  498 => 178,  488 => 172,  473 => 171,  461 => 157,  448 => 155,  426 => 144,  422 => 149,  407 => 148,  395 => 140,  382 => 132,  360 => 128,  357 => 127,  345 => 117,  328 => 126,  319 => 110,  313 => 116,  311 => 109,  307 => 108,  303 => 107,  299 => 106,  293 => 105,  283 => 103,  275 => 100,  258 => 91,  236 => 80,  207 => 67,  192 => 63,  182 => 60,  176 => 59,  173 => 91,  86 => 34,  69 => 14,  40 => 5,  698 => 319,  677 => 289,  673 => 288,  668 => 287,  660 => 283,  655 => 282,  652 => 281,  643 => 276,  631 => 266,  626 => 264,  623 => 263,  621 => 262,  608 => 252,  605 => 251,  598 => 246,  586 => 236,  581 => 234,  578 => 233,  576 => 232,  563 => 222,  560 => 221,  551 => 214,  545 => 210,  528 => 235,  519 => 230,  511 => 196,  507 => 220,  502 => 218,  492 => 173,  487 => 184,  485 => 183,  478 => 178,  460 => 174,  450 => 156,  444 => 169,  440 => 168,  433 => 164,  429 => 163,  409 => 142,  396 => 150,  387 => 148,  384 => 133,  380 => 146,  370 => 139,  365 => 140,  359 => 134,  356 => 135,  350 => 129,  337 => 118,  333 => 115,  329 => 115,  324 => 125,  315 => 108,  310 => 106,  308 => 105,  278 => 101,  266 => 93,  259 => 90,  253 => 87,  247 => 84,  241 => 89,  221 => 76,  206 => 64,  199 => 63,  193 => 61,  190 => 62,  174 => 50,  169 => 51,  161 => 48,  158 => 86,  156 => 41,  146 => 76,  170 => 76,  152 => 68,  148 => 67,  113 => 51,  99 => 42,  77 => 16,  115 => 40,  90 => 29,  80 => 26,  53 => 23,  49 => 9,  23 => 3,  243 => 85,  238 => 81,  234 => 79,  231 => 78,  214 => 61,  210 => 60,  203 => 55,  200 => 54,  195 => 8,  164 => 49,  145 => 51,  129 => 35,  124 => 49,  110 => 43,  107 => 50,  87 => 28,  52 => 12,  37 => 8,  56 => 17,  20 => 1,  301 => 113,  295 => 96,  292 => 95,  289 => 94,  287 => 104,  282 => 102,  276 => 86,  273 => 95,  270 => 84,  268 => 93,  263 => 91,  249 => 79,  245 => 77,  230 => 80,  222 => 75,  220 => 62,  215 => 73,  211 => 72,  204 => 70,  198 => 65,  185 => 61,  183 => 60,  177 => 92,  160 => 66,  149 => 37,  123 => 48,  120 => 40,  112 => 44,  106 => 36,  82 => 34,  65 => 13,  38 => 4,  155 => 54,  144 => 47,  141 => 54,  139 => 50,  135 => 45,  126 => 49,  109 => 37,  103 => 35,  101 => 24,  70 => 19,  67 => 20,  61 => 12,  47 => 10,  28 => 6,  105 => 24,  96 => 22,  93 => 20,  83 => 18,  76 => 22,  72 => 20,  68 => 22,  50 => 9,  94 => 39,  88 => 35,  79 => 17,  59 => 12,  43 => 6,  32 => 2,  225 => 71,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 78,  194 => 62,  191 => 78,  189 => 7,  186 => 61,  180 => 59,  172 => 67,  163 => 63,  159 => 50,  154 => 59,  147 => 55,  132 => 52,  127 => 49,  121 => 57,  118 => 39,  114 => 38,  104 => 28,  100 => 28,  78 => 29,  75 => 23,  71 => 22,  63 => 19,  58 => 13,  34 => 5,  91 => 20,  84 => 31,  74 => 24,  66 => 21,  55 => 11,  41 => 5,  46 => 7,  26 => 11,  22 => 3,  27 => 6,  24 => 4,  29 => 3,  21 => 1,  44 => 6,  35 => 5,  31 => 2,  25 => 5,  19 => 1,  184 => 60,  178 => 71,  171 => 61,  165 => 89,  162 => 81,  157 => 55,  153 => 74,  151 => 52,  143 => 50,  138 => 53,  136 => 41,  133 => 43,  130 => 47,  122 => 40,  119 => 55,  116 => 46,  111 => 32,  108 => 33,  102 => 29,  98 => 22,  95 => 31,  92 => 36,  89 => 20,  85 => 23,  81 => 31,  73 => 25,  64 => 17,  60 => 17,  57 => 11,  54 => 10,  51 => 10,  48 => 7,  45 => 6,  42 => 12,  39 => 6,  36 => 5,  33 => 3,  30 => 2,);
    }
}
