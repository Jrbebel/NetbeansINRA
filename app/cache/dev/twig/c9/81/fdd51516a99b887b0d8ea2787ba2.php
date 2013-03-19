<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_c981fdd51516a99b887b0d8ea2787ba2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" />
    ";
        // line 5
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_menu($context, array $blocks = array())
    {
        // line 9
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/exception.png"), "html", null, true);
        echo "\" alt=\"Exception\" /></span>
    <strong>Exception</strong>
    <span class=\"count\">
        ";
        // line 13
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception")) {
            // line 14
            echo "            <span>1</span>
        ";
        }
        // line 16
        echo "    </span>
</span>
";
    }

    // line 20
    public function block_panel($context, array $blocks = array())
    {
        // line 21
        echo "    <h2>Exception</h2>

    ";
        // line 23
        if ((!$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception"))) {
            // line 24
            echo "        <p>
            <em>No exception was thrown and uncaught during the request.</em>
        </p>
    ";
        } else {
            // line 28
            echo "        ";
            echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Exception:show", array("exception" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "exception"), "format" => "html"), array());
            // line 29
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 24,  176 => 61,  170 => 60,  388 => 160,  385 => 159,  379 => 158,  377 => 157,  370 => 156,  366 => 155,  362 => 153,  360 => 152,  354 => 150,  352 => 149,  344 => 147,  342 => 146,  339 => 145,  333 => 141,  327 => 139,  325 => 138,  320 => 135,  314 => 131,  311 => 130,  308 => 129,  306 => 128,  280 => 114,  264 => 105,  258 => 103,  254 => 101,  252 => 100,  247 => 97,  240 => 93,  228 => 87,  226 => 86,  209 => 73,  207 => 76,  202 => 73,  193 => 68,  190 => 67,  169 => 56,  148 => 58,  97 => 23,  174 => 58,  86 => 29,  328 => 147,  321 => 142,  304 => 131,  300 => 129,  296 => 128,  288 => 122,  269 => 118,  261 => 115,  255 => 113,  251 => 111,  242 => 108,  232 => 105,  229 => 104,  219 => 101,  197 => 97,  187 => 94,  140 => 42,  69 => 19,  188 => 67,  167 => 64,  142 => 64,  134 => 54,  128 => 60,  125 => 59,  253 => 85,  224 => 72,  213 => 65,  192 => 63,  168 => 55,  137 => 47,  62 => 16,  40 => 4,  610 => 241,  605 => 240,  598 => 238,  595 => 237,  586 => 232,  565 => 214,  562 => 213,  555 => 208,  534 => 190,  531 => 189,  519 => 178,  508 => 172,  506 => 171,  503 => 170,  486 => 166,  480 => 163,  475 => 160,  469 => 156,  453 => 153,  446 => 151,  442 => 149,  438 => 148,  435 => 147,  428 => 145,  422 => 142,  419 => 141,  411 => 138,  408 => 137,  406 => 136,  399 => 134,  395 => 133,  391 => 132,  384 => 129,  367 => 128,  357 => 151,  348 => 118,  345 => 117,  341 => 116,  330 => 140,  326 => 107,  323 => 106,  318 => 141,  312 => 137,  307 => 97,  290 => 93,  283 => 91,  279 => 89,  275 => 111,  272 => 87,  265 => 85,  259 => 82,  256 => 170,  248 => 110,  236 => 106,  221 => 83,  182 => 64,  161 => 45,  156 => 42,  99 => 36,  166 => 47,  150 => 67,  146 => 65,  90 => 28,  53 => 9,  49 => 13,  23 => 3,  243 => 76,  238 => 107,  234 => 89,  231 => 88,  214 => 98,  210 => 60,  203 => 55,  200 => 54,  195 => 59,  164 => 63,  129 => 36,  124 => 49,  110 => 42,  107 => 27,  87 => 34,  56 => 13,  20 => 1,  301 => 125,  295 => 121,  292 => 120,  289 => 119,  287 => 118,  282 => 115,  276 => 86,  273 => 110,  270 => 84,  268 => 107,  263 => 80,  249 => 79,  245 => 96,  230 => 71,  222 => 73,  220 => 62,  215 => 79,  211 => 64,  204 => 71,  198 => 69,  185 => 68,  183 => 63,  177 => 59,  160 => 59,  112 => 53,  82 => 19,  65 => 20,  38 => 5,  144 => 51,  141 => 54,  135 => 47,  126 => 45,  109 => 52,  103 => 25,  67 => 14,  61 => 12,  47 => 9,  28 => 3,  105 => 35,  93 => 30,  76 => 17,  72 => 20,  68 => 20,  94 => 30,  88 => 20,  79 => 23,  59 => 18,  225 => 103,  216 => 90,  212 => 78,  205 => 71,  201 => 83,  196 => 69,  194 => 96,  191 => 70,  189 => 7,  186 => 59,  180 => 89,  172 => 76,  159 => 81,  154 => 48,  147 => 58,  132 => 47,  127 => 52,  121 => 55,  118 => 39,  114 => 39,  104 => 35,  100 => 24,  78 => 24,  75 => 23,  71 => 21,  58 => 14,  34 => 5,  91 => 35,  84 => 25,  26 => 2,  27 => 3,  24 => 4,  21 => 1,  44 => 8,  31 => 4,  25 => 4,  19 => 2,  70 => 15,  63 => 16,  46 => 12,  22 => 3,  163 => 58,  155 => 56,  152 => 55,  149 => 78,  145 => 57,  139 => 41,  131 => 61,  123 => 35,  120 => 50,  115 => 44,  106 => 36,  101 => 42,  96 => 30,  83 => 28,  80 => 32,  74 => 21,  66 => 14,  55 => 9,  52 => 14,  50 => 10,  43 => 12,  41 => 11,  37 => 3,  35 => 6,  32 => 5,  29 => 6,  184 => 70,  178 => 62,  171 => 57,  165 => 54,  162 => 53,  157 => 80,  153 => 62,  151 => 47,  143 => 56,  138 => 55,  136 => 71,  133 => 46,  130 => 39,  122 => 51,  119 => 45,  116 => 31,  111 => 37,  108 => 41,  102 => 34,  98 => 32,  95 => 31,  92 => 21,  89 => 28,  85 => 24,  81 => 24,  73 => 16,  64 => 23,  60 => 15,  57 => 16,  54 => 12,  51 => 13,  48 => 9,  45 => 6,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
