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
        return array (  176 => 61,  170 => 60,  388 => 160,  385 => 159,  379 => 158,  377 => 157,  370 => 156,  366 => 155,  360 => 152,  354 => 150,  352 => 149,  344 => 147,  342 => 146,  339 => 145,  333 => 141,  330 => 140,  327 => 139,  325 => 138,  320 => 135,  308 => 129,  306 => 128,  254 => 101,  247 => 97,  228 => 87,  226 => 86,  209 => 73,  202 => 73,  193 => 68,  169 => 56,  97 => 23,  174 => 58,  381 => 147,  374 => 142,  371 => 141,  353 => 129,  349 => 128,  341 => 122,  326 => 120,  305 => 116,  291 => 111,  288 => 110,  285 => 109,  272 => 105,  269 => 104,  252 => 100,  246 => 101,  224 => 97,  221 => 83,  207 => 76,  192 => 87,  140 => 42,  99 => 36,  188 => 67,  167 => 64,  137 => 47,  62 => 16,  77 => 24,  256 => 170,  128 => 60,  125 => 59,  261 => 86,  258 => 103,  241 => 98,  229 => 72,  218 => 65,  197 => 63,  173 => 55,  156 => 50,  142 => 64,  86 => 29,  69 => 19,  40 => 4,  732 => 297,  727 => 294,  724 => 292,  722 => 291,  703 => 275,  699 => 274,  694 => 273,  686 => 269,  681 => 268,  678 => 267,  669 => 262,  657 => 252,  652 => 250,  649 => 249,  647 => 248,  634 => 238,  631 => 237,  624 => 232,  612 => 222,  607 => 220,  604 => 219,  602 => 218,  589 => 208,  586 => 207,  574 => 196,  564 => 191,  562 => 190,  559 => 189,  542 => 185,  536 => 182,  531 => 179,  525 => 175,  509 => 172,  502 => 170,  498 => 168,  494 => 167,  491 => 166,  484 => 164,  480 => 162,  473 => 160,  461 => 158,  459 => 157,  456 => 156,  448 => 153,  445 => 152,  443 => 151,  436 => 149,  432 => 148,  428 => 147,  423 => 144,  406 => 143,  396 => 135,  387 => 133,  384 => 132,  380 => 131,  369 => 123,  365 => 137,  362 => 153,  357 => 151,  351 => 114,  346 => 112,  329 => 108,  322 => 118,  318 => 104,  314 => 131,  311 => 130,  304 => 100,  299 => 97,  280 => 114,  278 => 107,  275 => 111,  267 => 88,  264 => 105,  262 => 86,  255 => 84,  244 => 79,  240 => 93,  223 => 76,  190 => 67,  182 => 64,  175 => 52,  158 => 51,  148 => 58,  134 => 54,  166 => 72,  150 => 67,  146 => 65,  90 => 28,  53 => 9,  49 => 13,  23 => 3,  243 => 81,  238 => 73,  234 => 89,  231 => 88,  214 => 94,  210 => 60,  203 => 55,  200 => 54,  195 => 8,  164 => 63,  129 => 61,  124 => 42,  110 => 42,  107 => 27,  87 => 34,  56 => 13,  20 => 1,  301 => 125,  295 => 121,  292 => 120,  289 => 119,  287 => 118,  282 => 115,  276 => 106,  273 => 110,  270 => 84,  268 => 107,  263 => 80,  249 => 81,  245 => 96,  230 => 75,  222 => 73,  220 => 62,  215 => 79,  211 => 69,  204 => 71,  198 => 69,  185 => 68,  183 => 63,  177 => 59,  160 => 59,  112 => 55,  82 => 19,  65 => 20,  38 => 5,  144 => 51,  141 => 54,  135 => 47,  126 => 43,  109 => 52,  103 => 25,  67 => 14,  61 => 12,  47 => 9,  28 => 3,  105 => 35,  93 => 30,  76 => 17,  72 => 20,  68 => 20,  94 => 30,  88 => 20,  79 => 23,  59 => 18,  225 => 96,  216 => 64,  212 => 78,  205 => 71,  201 => 67,  196 => 69,  194 => 62,  191 => 70,  189 => 7,  186 => 86,  180 => 55,  172 => 76,  159 => 81,  154 => 48,  147 => 58,  132 => 47,  127 => 52,  121 => 55,  118 => 39,  114 => 39,  104 => 35,  100 => 24,  78 => 33,  75 => 23,  71 => 21,  58 => 14,  34 => 5,  91 => 35,  84 => 25,  26 => 2,  27 => 3,  24 => 4,  21 => 1,  44 => 8,  31 => 4,  25 => 5,  19 => 2,  70 => 15,  63 => 16,  46 => 12,  22 => 3,  163 => 58,  155 => 56,  152 => 55,  149 => 78,  145 => 57,  139 => 50,  131 => 61,  123 => 35,  120 => 50,  115 => 44,  106 => 51,  101 => 42,  96 => 48,  83 => 28,  80 => 32,  74 => 21,  66 => 21,  55 => 9,  52 => 14,  50 => 10,  43 => 12,  41 => 11,  37 => 3,  35 => 6,  32 => 5,  29 => 6,  184 => 70,  178 => 62,  171 => 57,  165 => 54,  162 => 53,  157 => 80,  153 => 62,  151 => 47,  143 => 56,  138 => 55,  136 => 71,  133 => 46,  130 => 39,  122 => 51,  119 => 45,  116 => 31,  111 => 37,  108 => 41,  102 => 34,  98 => 32,  95 => 31,  92 => 21,  89 => 28,  85 => 29,  81 => 24,  73 => 16,  64 => 23,  60 => 15,  57 => 16,  54 => 12,  51 => 13,  48 => 9,  45 => 15,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
