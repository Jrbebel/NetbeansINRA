<?php

/* WebProfilerBundle:Router:panel.html.twig */
class __TwigTemplate_cfb0d3f88726e6c997876b71af7ef097 extends Twig_Template
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
        echo "<h2>Routing for \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "pathinfo"), "html", null, true);
        echo "\"</h2>

<ul>
    <li>
        <strong>Route:&nbsp;</strong>
        ";
        // line 6
        if ($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "route")) {
            // line 7
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "route"), "html", null, true);
            echo "
        ";
        } else {
            // line 9
            echo "            <em>No matching route</em>
        ";
        }
        // line 11
        echo "    </li>
    <li>
        <strong>Route parameters:&nbsp;</strong>
        ";
        // line 14
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "routeParams"))) {
            // line 15
            echo "            ";
            $this->env->loadTemplate("WebProfilerBundle:Profiler:table.html.twig")->display(array("data" => $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "routeParams"), "class" => "inline"));
            // line 16
            echo "        ";
        } else {
            // line 17
            echo "            <em>No parameters</em>
        ";
        }
        // line 19
        echo "    </li>
    ";
        // line 20
        if ($this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "redirect")) {
            // line 21
            echo "    <li>
        <strong>Redirecting to:&nbsp;</strong> \"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetUrl"), "html", null, true);
            echo "\" ";
            if ($this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetRoute")) {
                echo "(route: \"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetRoute"), "html", null, true);
                echo "\")";
            }
            // line 23
            echo "    <li>
    ";
        }
        // line 25
        echo "    <li>
        <strong>Route matching logs</strong>
        <table class=\"routing inline\">
            <tr>
                <th>Route name</th>
                <th>Pattern</th>
                <th>Log</th>
            </tr>
            ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["traces"]) ? $context["traces"] : $this->getContext($context, "traces")));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 34
            echo "                <tr class=\"";
            echo (((1 == $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "level"))) ? ("almost") : ((((2 == $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "level"))) ? ("matches") : (""))));
            echo "\">
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "name"), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "pattern"), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "log"), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 40
        echo "        </table>
        <em><small>Note: The above matching is based on the configuration for the current router which might differ from
        the configuration used while routing this request.</small></em>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Router:panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  790 => 469,  787 => 468,  776 => 466,  772 => 465,  768 => 463,  755 => 462,  729 => 457,  726 => 456,  707 => 454,  690 => 453,  686 => 451,  682 => 450,  678 => 449,  674 => 448,  670 => 447,  666 => 446,  663 => 445,  661 => 444,  644 => 443,  633 => 442,  618 => 437,  613 => 435,  609 => 434,  606 => 433,  604 => 432,  590 => 431,  558 => 401,  540 => 398,  523 => 397,  520 => 396,  518 => 395,  513 => 393,  181 => 87,  173 => 85,  356 => 163,  347 => 160,  343 => 159,  340 => 158,  335 => 157,  316 => 145,  309 => 141,  302 => 137,  281 => 125,  274 => 121,  217 => 83,  206 => 78,  158 => 56,  113 => 40,  77 => 25,  176 => 61,  170 => 60,  388 => 160,  385 => 159,  379 => 158,  377 => 157,  370 => 156,  366 => 155,  362 => 153,  360 => 152,  354 => 150,  352 => 149,  344 => 147,  342 => 146,  339 => 145,  333 => 156,  327 => 139,  325 => 150,  320 => 135,  314 => 131,  311 => 130,  308 => 129,  306 => 128,  280 => 114,  264 => 105,  258 => 103,  254 => 101,  252 => 138,  247 => 97,  240 => 93,  228 => 89,  226 => 86,  209 => 73,  207 => 95,  202 => 73,  193 => 68,  190 => 89,  169 => 56,  148 => 74,  97 => 23,  174 => 58,  86 => 28,  328 => 147,  321 => 142,  304 => 131,  300 => 129,  296 => 128,  288 => 129,  269 => 118,  261 => 115,  255 => 113,  251 => 111,  242 => 108,  232 => 105,  229 => 104,  219 => 101,  197 => 97,  187 => 94,  140 => 49,  69 => 20,  188 => 67,  167 => 64,  142 => 64,  134 => 54,  128 => 45,  125 => 44,  253 => 85,  224 => 72,  213 => 65,  192 => 72,  168 => 55,  137 => 47,  62 => 21,  40 => 11,  610 => 241,  605 => 240,  598 => 238,  595 => 237,  586 => 232,  565 => 214,  562 => 213,  555 => 208,  534 => 190,  531 => 189,  519 => 178,  508 => 391,  506 => 171,  503 => 170,  486 => 166,  480 => 163,  475 => 160,  469 => 156,  453 => 153,  446 => 151,  442 => 149,  438 => 148,  435 => 147,  428 => 145,  422 => 142,  419 => 141,  411 => 138,  408 => 137,  406 => 136,  399 => 134,  395 => 133,  391 => 132,  384 => 129,  367 => 128,  357 => 151,  348 => 118,  345 => 117,  341 => 116,  330 => 140,  326 => 107,  323 => 149,  318 => 141,  312 => 137,  307 => 97,  290 => 93,  283 => 91,  279 => 89,  275 => 111,  272 => 87,  265 => 85,  259 => 109,  256 => 170,  248 => 110,  236 => 106,  221 => 83,  182 => 69,  161 => 80,  156 => 77,  99 => 36,  166 => 82,  150 => 75,  146 => 65,  90 => 41,  53 => 17,  49 => 13,  23 => 3,  243 => 76,  238 => 97,  234 => 89,  231 => 88,  214 => 82,  210 => 60,  203 => 77,  200 => 54,  195 => 59,  164 => 63,  129 => 36,  124 => 49,  110 => 39,  107 => 27,  87 => 33,  56 => 13,  20 => 1,  301 => 125,  295 => 133,  292 => 120,  289 => 119,  287 => 118,  282 => 115,  276 => 86,  273 => 110,  270 => 84,  268 => 107,  263 => 80,  249 => 79,  245 => 101,  230 => 71,  222 => 73,  220 => 62,  215 => 79,  211 => 81,  204 => 94,  198 => 74,  185 => 68,  183 => 63,  177 => 59,  160 => 59,  112 => 52,  82 => 19,  65 => 22,  38 => 7,  144 => 73,  141 => 54,  135 => 47,  126 => 61,  109 => 51,  103 => 25,  67 => 14,  61 => 12,  47 => 15,  28 => 6,  105 => 35,  93 => 42,  76 => 34,  72 => 22,  68 => 30,  94 => 30,  88 => 20,  79 => 35,  59 => 18,  225 => 88,  216 => 90,  212 => 78,  205 => 71,  201 => 83,  196 => 92,  194 => 96,  191 => 70,  189 => 7,  186 => 59,  180 => 89,  172 => 64,  159 => 81,  154 => 54,  147 => 58,  132 => 47,  127 => 52,  121 => 55,  118 => 39,  114 => 39,  104 => 37,  100 => 36,  78 => 24,  75 => 23,  71 => 21,  58 => 25,  34 => 5,  91 => 34,  84 => 25,  26 => 2,  27 => 3,  24 => 4,  21 => 1,  44 => 20,  31 => 4,  25 => 4,  19 => 1,  70 => 15,  63 => 16,  46 => 12,  22 => 3,  163 => 81,  155 => 56,  152 => 55,  149 => 78,  145 => 57,  139 => 71,  131 => 46,  123 => 35,  120 => 50,  115 => 44,  106 => 36,  101 => 45,  96 => 35,  83 => 27,  80 => 32,  74 => 21,  66 => 19,  55 => 24,  52 => 14,  50 => 16,  43 => 12,  41 => 8,  37 => 3,  35 => 6,  32 => 6,  29 => 6,  184 => 88,  178 => 86,  171 => 84,  165 => 60,  162 => 53,  157 => 80,  153 => 62,  151 => 53,  143 => 56,  138 => 55,  136 => 71,  133 => 46,  130 => 39,  122 => 51,  119 => 57,  116 => 41,  111 => 37,  108 => 41,  102 => 34,  98 => 32,  95 => 43,  92 => 21,  89 => 29,  85 => 24,  81 => 24,  73 => 23,  64 => 23,  60 => 20,  57 => 19,  54 => 13,  51 => 12,  48 => 11,  45 => 14,  42 => 8,  39 => 6,  36 => 9,  33 => 4,  30 => 7,);
    }
}
