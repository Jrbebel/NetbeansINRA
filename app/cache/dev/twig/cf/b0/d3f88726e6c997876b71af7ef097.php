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
        return array (  790 => 469,  787 => 468,  776 => 466,  772 => 465,  768 => 463,  755 => 462,  729 => 457,  726 => 456,  707 => 454,  690 => 453,  686 => 451,  682 => 450,  678 => 449,  674 => 448,  670 => 447,  666 => 446,  663 => 445,  661 => 444,  644 => 443,  633 => 442,  618 => 437,  613 => 435,  609 => 434,  606 => 433,  604 => 432,  590 => 431,  558 => 401,  540 => 398,  523 => 397,  520 => 396,  518 => 395,  513 => 393,  508 => 391,  181 => 87,  173 => 85,  161 => 80,  156 => 77,  356 => 163,  343 => 159,  340 => 158,  335 => 157,  323 => 149,  316 => 145,  302 => 137,  281 => 125,  274 => 121,  259 => 109,  238 => 97,  192 => 72,  158 => 56,  113 => 40,  176 => 61,  170 => 60,  388 => 160,  379 => 158,  370 => 156,  366 => 155,  362 => 153,  360 => 152,  357 => 151,  354 => 150,  352 => 149,  344 => 147,  342 => 146,  339 => 145,  333 => 156,  327 => 139,  325 => 150,  320 => 135,  314 => 131,  311 => 130,  306 => 128,  280 => 114,  275 => 111,  264 => 105,  258 => 103,  254 => 101,  252 => 138,  247 => 97,  240 => 93,  234 => 89,  231 => 88,  228 => 89,  221 => 83,  209 => 73,  190 => 89,  169 => 56,  148 => 74,  107 => 27,  97 => 23,  164 => 63,  134 => 54,  86 => 28,  315 => 140,  308 => 129,  305 => 134,  299 => 130,  288 => 129,  284 => 121,  261 => 113,  257 => 111,  243 => 106,  239 => 104,  236 => 103,  226 => 86,  224 => 99,  213 => 96,  207 => 95,  202 => 73,  175 => 87,  69 => 20,  167 => 64,  137 => 47,  40 => 11,  128 => 45,  77 => 25,  456 => 151,  453 => 150,  435 => 136,  418 => 132,  408 => 125,  392 => 122,  385 => 159,  381 => 118,  377 => 157,  374 => 116,  367 => 114,  361 => 111,  358 => 110,  350 => 107,  347 => 160,  345 => 105,  338 => 103,  334 => 102,  330 => 140,  326 => 99,  309 => 141,  300 => 91,  291 => 90,  265 => 74,  248 => 70,  241 => 68,  237 => 66,  233 => 102,  223 => 62,  217 => 83,  214 => 82,  206 => 78,  203 => 77,  188 => 67,  140 => 49,  125 => 44,  99 => 20,  62 => 21,  166 => 82,  150 => 75,  146 => 65,  129 => 61,  90 => 41,  87 => 33,  53 => 17,  49 => 13,  23 => 3,  210 => 72,  199 => 61,  193 => 68,  182 => 69,  179 => 44,  174 => 58,  168 => 82,  110 => 39,  56 => 13,  20 => 1,  301 => 125,  295 => 133,  292 => 120,  289 => 119,  287 => 118,  282 => 115,  276 => 115,  273 => 110,  270 => 84,  268 => 107,  263 => 80,  249 => 108,  245 => 101,  230 => 101,  222 => 73,  220 => 98,  215 => 79,  211 => 81,  204 => 94,  198 => 74,  185 => 68,  183 => 63,  177 => 59,  160 => 59,  112 => 52,  82 => 19,  65 => 22,  38 => 7,  144 => 73,  141 => 66,  135 => 47,  126 => 61,  109 => 51,  103 => 25,  67 => 14,  61 => 12,  47 => 15,  28 => 6,  105 => 35,  93 => 42,  76 => 34,  72 => 22,  68 => 30,  94 => 30,  88 => 20,  79 => 35,  59 => 18,  225 => 88,  216 => 90,  212 => 78,  205 => 71,  201 => 53,  196 => 92,  194 => 51,  191 => 70,  189 => 59,  186 => 76,  180 => 72,  172 => 64,  159 => 79,  154 => 54,  147 => 58,  132 => 47,  127 => 52,  121 => 55,  118 => 39,  114 => 39,  104 => 37,  100 => 36,  78 => 25,  75 => 23,  71 => 21,  58 => 25,  34 => 5,  91 => 34,  84 => 25,  26 => 2,  27 => 3,  24 => 4,  21 => 1,  44 => 20,  31 => 4,  25 => 3,  19 => 1,  70 => 15,  63 => 16,  46 => 12,  22 => 3,  163 => 81,  155 => 56,  152 => 77,  149 => 54,  145 => 57,  139 => 71,  131 => 46,  123 => 35,  120 => 50,  115 => 44,  106 => 53,  101 => 45,  96 => 35,  83 => 27,  80 => 32,  74 => 21,  66 => 19,  55 => 24,  52 => 14,  50 => 16,  43 => 12,  41 => 8,  37 => 8,  35 => 6,  32 => 6,  29 => 6,  184 => 88,  178 => 86,  171 => 84,  165 => 60,  162 => 53,  157 => 56,  153 => 62,  151 => 53,  143 => 56,  138 => 55,  136 => 52,  133 => 46,  130 => 39,  122 => 51,  119 => 57,  116 => 41,  111 => 37,  108 => 41,  102 => 34,  98 => 32,  95 => 43,  92 => 21,  89 => 29,  85 => 27,  81 => 24,  73 => 23,  64 => 23,  60 => 20,  57 => 19,  54 => 13,  51 => 12,  48 => 11,  45 => 14,  42 => 8,  39 => 6,  36 => 9,  33 => 4,  30 => 7,);
    }
}
