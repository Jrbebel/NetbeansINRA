<?php

/* WebProfilerBundle:Profiler:results.html.twig */
class __TwigTemplate_727837c7fbd398fa7658f4d3945c3045 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_panel($context, array $blocks = array())
    {
        // line 4
        echo "    <h2>Search Results</h2>

    ";
        // line 6
        if ((isset($context["tokens"]) ? $context["tokens"] : $this->getContext($context, "tokens"))) {
            // line 7
            echo "        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Token</th>
                    <th scope=\"col\">IP</th>
                    <th scope=\"col\">Method</th>
                    <th scope=\"col\">URL</th>
                    <th scope=\"col\">Time</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 18
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tokens"]) ? $context["tokens"] : $this->getContext($context, "tokens")));
            foreach ($context['_seq'] as $context["_key"] => $context["elements"]) {
                // line 19
                echo "                    <tr>
                        <td><a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "token"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "token"), "html", null, true);
                echo "</a></td>
                        <td>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "ip"), "html", null, true);
                echo "</td>
                        <td>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "method"), "html", null, true);
                echo "</td>
                        <td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "url"), "html", null, true);
                echo "</td>
                        <td>";
                // line 24
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "time"), "r"), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elements'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 27
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 30
            echo "        <p>
            <em>The query returned no result.</em>
        </p>
    ";
        }
        // line 34
        echo "
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  790 => 469,  787 => 468,  776 => 466,  772 => 465,  768 => 463,  755 => 462,  729 => 457,  726 => 456,  707 => 454,  690 => 453,  686 => 451,  682 => 450,  678 => 449,  674 => 448,  670 => 447,  666 => 446,  663 => 445,  661 => 444,  644 => 443,  633 => 442,  618 => 437,  613 => 435,  609 => 434,  606 => 433,  604 => 432,  590 => 431,  558 => 401,  540 => 398,  523 => 397,  520 => 396,  518 => 395,  513 => 393,  508 => 391,  181 => 87,  173 => 85,  161 => 80,  156 => 77,  356 => 163,  343 => 159,  340 => 158,  335 => 157,  323 => 149,  316 => 145,  302 => 137,  281 => 125,  274 => 121,  259 => 109,  238 => 97,  192 => 72,  158 => 56,  113 => 40,  176 => 61,  170 => 60,  388 => 160,  379 => 158,  370 => 156,  366 => 155,  362 => 153,  360 => 152,  357 => 151,  354 => 150,  352 => 149,  344 => 147,  342 => 146,  339 => 145,  333 => 156,  327 => 139,  325 => 150,  320 => 135,  314 => 131,  311 => 130,  306 => 128,  280 => 114,  275 => 111,  264 => 105,  258 => 103,  254 => 101,  252 => 138,  247 => 97,  240 => 93,  234 => 89,  231 => 88,  228 => 89,  221 => 83,  209 => 73,  190 => 89,  169 => 56,  148 => 74,  107 => 27,  97 => 23,  164 => 63,  134 => 54,  86 => 28,  315 => 140,  308 => 129,  305 => 134,  299 => 130,  288 => 129,  284 => 121,  261 => 113,  257 => 111,  243 => 106,  239 => 104,  236 => 103,  226 => 86,  224 => 99,  213 => 96,  207 => 95,  202 => 73,  175 => 87,  69 => 20,  167 => 64,  137 => 47,  40 => 11,  128 => 45,  77 => 18,  456 => 151,  453 => 150,  435 => 136,  418 => 132,  408 => 125,  392 => 122,  385 => 159,  381 => 118,  377 => 157,  374 => 116,  367 => 114,  361 => 111,  358 => 110,  350 => 107,  347 => 160,  345 => 105,  338 => 103,  334 => 102,  330 => 140,  326 => 99,  309 => 141,  300 => 91,  291 => 90,  265 => 74,  248 => 70,  241 => 68,  237 => 66,  233 => 102,  223 => 62,  217 => 83,  214 => 82,  206 => 78,  203 => 77,  188 => 67,  140 => 49,  125 => 44,  99 => 20,  62 => 25,  166 => 82,  150 => 75,  146 => 65,  129 => 61,  90 => 41,  87 => 33,  53 => 38,  49 => 17,  23 => 3,  210 => 72,  199 => 61,  193 => 68,  182 => 69,  179 => 44,  174 => 58,  168 => 82,  110 => 39,  56 => 39,  20 => 1,  301 => 125,  295 => 133,  292 => 120,  289 => 119,  287 => 118,  282 => 115,  276 => 115,  273 => 110,  270 => 84,  268 => 107,  263 => 80,  249 => 108,  245 => 101,  230 => 101,  222 => 73,  220 => 98,  215 => 79,  211 => 81,  204 => 94,  198 => 74,  185 => 68,  183 => 63,  177 => 59,  160 => 59,  112 => 52,  82 => 19,  65 => 22,  38 => 6,  144 => 73,  141 => 66,  135 => 47,  126 => 61,  109 => 51,  103 => 25,  67 => 22,  61 => 18,  47 => 15,  28 => 3,  105 => 35,  93 => 42,  76 => 34,  72 => 22,  68 => 30,  94 => 30,  88 => 20,  79 => 35,  59 => 21,  225 => 88,  216 => 90,  212 => 78,  205 => 71,  201 => 53,  196 => 92,  194 => 51,  191 => 70,  189 => 59,  186 => 76,  180 => 72,  172 => 64,  159 => 79,  154 => 54,  147 => 58,  132 => 47,  127 => 52,  121 => 55,  118 => 39,  114 => 39,  104 => 37,  100 => 36,  78 => 26,  75 => 24,  71 => 23,  58 => 25,  34 => 8,  91 => 28,  84 => 27,  26 => 3,  27 => 4,  24 => 2,  21 => 1,  44 => 11,  31 => 4,  25 => 3,  19 => 1,  70 => 13,  63 => 21,  46 => 14,  22 => 2,  163 => 81,  155 => 56,  152 => 77,  149 => 54,  145 => 57,  139 => 71,  131 => 46,  123 => 35,  120 => 50,  115 => 44,  106 => 53,  101 => 33,  96 => 35,  83 => 27,  80 => 32,  74 => 25,  66 => 19,  55 => 15,  52 => 18,  50 => 18,  43 => 12,  41 => 12,  37 => 7,  35 => 6,  32 => 6,  29 => 3,  184 => 88,  178 => 86,  171 => 84,  165 => 60,  162 => 53,  157 => 56,  153 => 62,  151 => 53,  143 => 56,  138 => 55,  136 => 52,  133 => 46,  130 => 39,  122 => 51,  119 => 57,  116 => 41,  111 => 37,  108 => 41,  102 => 34,  98 => 32,  95 => 34,  92 => 21,  89 => 30,  85 => 27,  81 => 24,  73 => 23,  64 => 11,  60 => 20,  57 => 20,  54 => 19,  51 => 16,  48 => 11,  45 => 13,  42 => 12,  39 => 10,  36 => 9,  33 => 10,  30 => 5,);
    }
}
