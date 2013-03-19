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
        return array (  86 => 27,  323 => 142,  316 => 137,  313 => 136,  307 => 132,  299 => 126,  291 => 123,  264 => 113,  250 => 108,  246 => 106,  240 => 104,  237 => 103,  233 => 102,  227 => 100,  209 => 93,  182 => 89,  99 => 36,  69 => 19,  167 => 59,  152 => 75,  142 => 72,  128 => 60,  125 => 59,  256 => 110,  253 => 85,  224 => 99,  213 => 65,  192 => 92,  168 => 55,  137 => 47,  131 => 66,  62 => 19,  40 => 4,  579 => 228,  574 => 227,  567 => 225,  564 => 224,  555 => 219,  534 => 201,  531 => 200,  524 => 195,  503 => 177,  500 => 176,  490 => 167,  479 => 160,  477 => 159,  474 => 158,  457 => 154,  447 => 147,  431 => 144,  424 => 142,  420 => 140,  416 => 139,  413 => 138,  406 => 136,  400 => 133,  397 => 132,  389 => 129,  386 => 128,  384 => 127,  377 => 125,  373 => 124,  369 => 123,  365 => 121,  348 => 120,  338 => 112,  329 => 110,  326 => 109,  322 => 108,  311 => 100,  308 => 99,  300 => 93,  283 => 117,  272 => 85,  265 => 83,  258 => 81,  252 => 78,  241 => 74,  236 => 80,  229 => 70,  223 => 67,  218 => 65,  197 => 62,  188 => 77,  179 => 54,  175 => 84,  140 => 42,  134 => 62,  97 => 31,  166 => 81,  150 => 67,  146 => 65,  115 => 38,  90 => 29,  80 => 27,  53 => 9,  49 => 9,  23 => 3,  243 => 105,  238 => 73,  234 => 68,  231 => 101,  214 => 96,  210 => 60,  203 => 55,  200 => 54,  195 => 8,  164 => 82,  145 => 69,  129 => 61,  124 => 49,  110 => 43,  107 => 42,  87 => 32,  52 => 16,  37 => 3,  56 => 11,  20 => 1,  301 => 100,  295 => 124,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 87,  273 => 85,  270 => 84,  268 => 115,  263 => 80,  249 => 77,  245 => 77,  230 => 75,  222 => 73,  220 => 98,  215 => 70,  211 => 64,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 44,  149 => 54,  123 => 47,  120 => 43,  112 => 53,  106 => 36,  82 => 30,  65 => 20,  38 => 10,  155 => 56,  144 => 73,  141 => 54,  139 => 50,  135 => 68,  126 => 45,  109 => 52,  103 => 34,  101 => 42,  70 => 19,  67 => 18,  61 => 16,  47 => 7,  28 => 6,  105 => 35,  96 => 21,  93 => 30,  83 => 26,  76 => 33,  72 => 20,  68 => 15,  50 => 8,  94 => 30,  88 => 28,  79 => 25,  59 => 18,  43 => 12,  32 => 7,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 91,  186 => 59,  180 => 72,  172 => 76,  163 => 58,  159 => 79,  154 => 76,  147 => 49,  132 => 48,  127 => 42,  121 => 55,  118 => 39,  114 => 39,  104 => 49,  100 => 33,  78 => 24,  75 => 21,  71 => 24,  63 => 16,  58 => 15,  34 => 5,  91 => 29,  84 => 31,  74 => 22,  66 => 14,  55 => 17,  41 => 11,  46 => 13,  26 => 2,  22 => 3,  27 => 5,  24 => 4,  29 => 6,  21 => 1,  44 => 8,  35 => 3,  31 => 2,  25 => 4,  19 => 2,  184 => 70,  178 => 95,  171 => 62,  165 => 46,  162 => 45,  157 => 43,  153 => 51,  151 => 50,  143 => 48,  138 => 63,  136 => 50,  133 => 46,  130 => 37,  122 => 43,  119 => 42,  116 => 36,  111 => 37,  108 => 36,  102 => 41,  98 => 22,  95 => 39,  92 => 30,  89 => 28,  85 => 24,  81 => 24,  73 => 23,  64 => 23,  60 => 19,  57 => 13,  54 => 11,  51 => 13,  48 => 9,  45 => 6,  42 => 12,  39 => 5,  36 => 4,  33 => 8,  30 => 3,);
    }
}
