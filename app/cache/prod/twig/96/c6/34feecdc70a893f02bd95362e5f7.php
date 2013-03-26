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
        return array (  381 => 147,  374 => 142,  371 => 141,  353 => 129,  349 => 128,  341 => 122,  326 => 120,  305 => 116,  291 => 111,  288 => 110,  285 => 109,  272 => 105,  269 => 104,  252 => 103,  246 => 101,  224 => 97,  221 => 96,  207 => 89,  192 => 87,  140 => 73,  99 => 36,  188 => 77,  167 => 59,  137 => 47,  62 => 19,  77 => 33,  256 => 170,  131 => 61,  128 => 60,  125 => 59,  261 => 86,  258 => 85,  241 => 98,  229 => 72,  218 => 65,  197 => 63,  173 => 55,  156 => 50,  142 => 64,  86 => 27,  69 => 19,  40 => 4,  732 => 297,  727 => 294,  724 => 292,  722 => 291,  703 => 275,  699 => 274,  694 => 273,  686 => 269,  681 => 268,  678 => 267,  669 => 262,  657 => 252,  652 => 250,  649 => 249,  647 => 248,  634 => 238,  631 => 237,  624 => 232,  612 => 222,  607 => 220,  604 => 219,  602 => 218,  589 => 208,  586 => 207,  574 => 196,  564 => 191,  562 => 190,  559 => 189,  542 => 185,  536 => 182,  531 => 179,  525 => 175,  509 => 172,  502 => 170,  498 => 168,  494 => 167,  491 => 166,  484 => 164,  480 => 162,  473 => 160,  461 => 158,  459 => 157,  456 => 156,  448 => 153,  445 => 152,  443 => 151,  436 => 149,  432 => 148,  428 => 147,  423 => 144,  406 => 143,  396 => 135,  387 => 133,  384 => 132,  380 => 131,  369 => 123,  365 => 137,  362 => 121,  357 => 131,  351 => 114,  346 => 112,  329 => 108,  322 => 118,  318 => 104,  314 => 103,  311 => 102,  304 => 100,  299 => 97,  280 => 93,  278 => 107,  275 => 91,  267 => 88,  264 => 87,  262 => 86,  255 => 84,  244 => 79,  240 => 77,  223 => 76,  190 => 59,  182 => 56,  175 => 52,  158 => 51,  152 => 55,  148 => 48,  134 => 62,  166 => 72,  150 => 67,  146 => 65,  115 => 38,  90 => 34,  80 => 27,  53 => 9,  49 => 9,  23 => 3,  243 => 81,  238 => 73,  234 => 68,  231 => 67,  214 => 94,  210 => 60,  203 => 55,  200 => 54,  195 => 8,  164 => 84,  145 => 69,  129 => 61,  124 => 42,  110 => 55,  107 => 41,  87 => 32,  52 => 16,  37 => 3,  56 => 11,  20 => 1,  301 => 115,  295 => 113,  292 => 95,  289 => 94,  287 => 93,  282 => 108,  276 => 106,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 81,  245 => 77,  230 => 75,  222 => 73,  220 => 62,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 57,  183 => 85,  177 => 58,  160 => 57,  149 => 78,  123 => 66,  120 => 43,  112 => 55,  106 => 51,  82 => 35,  65 => 20,  38 => 10,  155 => 56,  144 => 51,  141 => 54,  139 => 50,  135 => 47,  126 => 43,  109 => 52,  103 => 34,  101 => 42,  70 => 27,  67 => 18,  61 => 18,  47 => 7,  28 => 6,  105 => 35,  96 => 48,  93 => 30,  83 => 26,  76 => 31,  72 => 20,  68 => 22,  50 => 8,  94 => 30,  88 => 39,  79 => 25,  59 => 18,  43 => 12,  32 => 7,  225 => 96,  216 => 64,  212 => 88,  205 => 68,  201 => 67,  196 => 80,  194 => 62,  191 => 59,  189 => 7,  186 => 86,  180 => 55,  172 => 76,  163 => 58,  159 => 81,  154 => 68,  147 => 77,  132 => 45,  127 => 42,  121 => 55,  118 => 39,  114 => 39,  104 => 36,  100 => 33,  78 => 33,  75 => 21,  71 => 32,  63 => 16,  58 => 15,  34 => 5,  91 => 29,  84 => 31,  74 => 22,  66 => 21,  55 => 17,  41 => 11,  46 => 13,  26 => 2,  22 => 3,  27 => 5,  24 => 4,  29 => 6,  21 => 1,  44 => 8,  35 => 3,  31 => 2,  25 => 5,  19 => 2,  184 => 70,  178 => 95,  171 => 62,  165 => 58,  162 => 81,  157 => 80,  153 => 74,  151 => 73,  143 => 67,  138 => 63,  136 => 71,  133 => 46,  130 => 47,  122 => 44,  119 => 36,  116 => 46,  111 => 37,  108 => 36,  102 => 30,  98 => 39,  95 => 34,  92 => 30,  89 => 28,  85 => 29,  81 => 36,  73 => 23,  64 => 23,  60 => 19,  57 => 20,  54 => 12,  51 => 16,  48 => 9,  45 => 15,  42 => 12,  39 => 5,  36 => 4,  33 => 8,  30 => 3,);
    }
}
