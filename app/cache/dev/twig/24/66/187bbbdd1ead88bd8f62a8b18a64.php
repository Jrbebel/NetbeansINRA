<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_2466187bbbdd1ead88bd8f62a8b18a64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
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
    public function block_toolbar($context, array $blocks = array())
    {
    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        // line 7
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/routing.png"), "html", null, true);
        echo "\" alt=\"Routing\" /></span>
    <strong>Routing</strong>
</span>
";
    }

    // line 13
    public function block_panel($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Router:panel", array("token" => $this->getContext($context, "token")), array());
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 163,  347 => 160,  343 => 159,  340 => 158,  335 => 157,  333 => 156,  325 => 150,  323 => 149,  316 => 145,  309 => 141,  302 => 137,  288 => 129,  281 => 125,  274 => 121,  259 => 109,  228 => 89,  214 => 82,  206 => 78,  192 => 72,  128 => 45,  125 => 44,  790 => 469,  787 => 468,  776 => 466,  772 => 465,  768 => 463,  755 => 462,  729 => 457,  726 => 456,  707 => 454,  690 => 453,  686 => 451,  682 => 450,  678 => 449,  674 => 448,  670 => 447,  666 => 446,  663 => 445,  661 => 444,  644 => 443,  633 => 442,  618 => 437,  613 => 435,  609 => 434,  606 => 433,  604 => 432,  590 => 431,  558 => 401,  540 => 398,  523 => 397,  520 => 396,  518 => 395,  513 => 393,  508 => 391,  207 => 95,  190 => 89,  181 => 87,  161 => 80,  156 => 77,  148 => 52,  188 => 69,  167 => 64,  164 => 63,  134 => 54,  113 => 40,  262 => 236,  260 => 235,  257 => 234,  238 => 97,  86 => 28,  62 => 16,  90 => 41,  294 => 131,  291 => 130,  285 => 126,  275 => 119,  267 => 113,  252 => 105,  248 => 109,  240 => 219,  234 => 104,  227 => 101,  224 => 100,  221 => 99,  217 => 83,  208 => 95,  176 => 88,  173 => 85,  69 => 20,  166 => 82,  129 => 69,  158 => 56,  150 => 75,  146 => 65,  140 => 49,  87 => 40,  53 => 17,  40 => 11,  203 => 77,  107 => 52,  99 => 32,  77 => 24,  23 => 3,  49 => 13,  210 => 72,  199 => 61,  193 => 89,  182 => 69,  179 => 75,  174 => 67,  168 => 7,  110 => 39,  56 => 13,  20 => 1,  301 => 136,  295 => 133,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 248,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 101,  230 => 102,  222 => 73,  220 => 72,  215 => 97,  211 => 81,  204 => 94,  198 => 74,  185 => 68,  183 => 60,  177 => 58,  160 => 80,  112 => 52,  82 => 26,  65 => 22,  38 => 7,  144 => 73,  141 => 66,  135 => 47,  126 => 61,  109 => 51,  103 => 34,  67 => 23,  61 => 18,  47 => 9,  91 => 35,  84 => 33,  28 => 3,  225 => 88,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 92,  194 => 62,  191 => 70,  189 => 59,  186 => 76,  180 => 72,  172 => 64,  159 => 80,  154 => 54,  147 => 58,  132 => 48,  127 => 52,  121 => 55,  118 => 63,  114 => 39,  104 => 36,  100 => 35,  78 => 26,  75 => 23,  71 => 21,  34 => 8,  44 => 8,  94 => 30,  88 => 27,  59 => 21,  105 => 35,  93 => 31,  79 => 35,  76 => 34,  72 => 22,  68 => 20,  58 => 14,  24 => 2,  27 => 3,  25 => 3,  21 => 2,  31 => 4,  26 => 3,  19 => 1,  70 => 24,  63 => 21,  46 => 12,  22 => 2,  163 => 81,  155 => 58,  152 => 49,  149 => 72,  145 => 46,  139 => 71,  131 => 46,  123 => 47,  120 => 50,  115 => 40,  106 => 36,  101 => 45,  96 => 35,  83 => 27,  80 => 32,  74 => 25,  66 => 19,  55 => 24,  52 => 14,  50 => 10,  43 => 12,  41 => 8,  37 => 7,  35 => 6,  32 => 6,  29 => 3,  184 => 70,  178 => 86,  171 => 84,  165 => 60,  162 => 81,  157 => 56,  153 => 62,  151 => 53,  143 => 75,  138 => 55,  136 => 71,  133 => 43,  130 => 53,  122 => 51,  119 => 43,  116 => 41,  111 => 38,  108 => 41,  102 => 30,  98 => 22,  95 => 43,  92 => 30,  89 => 29,  85 => 27,  81 => 36,  73 => 33,  64 => 11,  60 => 16,  57 => 19,  54 => 13,  51 => 12,  48 => 11,  45 => 14,  42 => 8,  39 => 9,  36 => 9,  33 => 4,  30 => 3,);
    }
}
