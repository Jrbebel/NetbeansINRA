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
        return array (  176 => 61,  170 => 60,  388 => 160,  385 => 159,  377 => 157,  370 => 156,  366 => 155,  362 => 153,  360 => 152,  357 => 151,  354 => 150,  352 => 149,  344 => 147,  342 => 146,  339 => 145,  333 => 141,  330 => 140,  327 => 139,  325 => 138,  314 => 131,  311 => 130,  308 => 129,  306 => 128,  280 => 114,  275 => 111,  258 => 103,  254 => 101,  247 => 97,  234 => 89,  226 => 86,  221 => 83,  202 => 73,  193 => 68,  190 => 67,  148 => 58,  140 => 42,  97 => 23,  174 => 58,  86 => 29,  323 => 142,  313 => 136,  307 => 132,  299 => 126,  291 => 123,  283 => 117,  264 => 105,  250 => 108,  237 => 103,  233 => 102,  227 => 100,  214 => 96,  209 => 73,  175 => 84,  142 => 72,  99 => 36,  69 => 21,  188 => 67,  167 => 64,  77 => 24,  256 => 110,  253 => 85,  236 => 80,  224 => 99,  213 => 65,  168 => 55,  137 => 47,  62 => 16,  40 => 4,  535 => 197,  530 => 196,  523 => 194,  520 => 193,  512 => 189,  490 => 171,  480 => 162,  469 => 155,  467 => 154,  464 => 153,  447 => 149,  437 => 142,  421 => 139,  414 => 137,  410 => 135,  406 => 134,  403 => 133,  396 => 131,  390 => 128,  387 => 127,  379 => 158,  376 => 123,  374 => 122,  367 => 120,  363 => 119,  359 => 118,  355 => 116,  338 => 115,  329 => 108,  320 => 135,  316 => 137,  305 => 98,  302 => 97,  294 => 91,  277 => 87,  266 => 83,  262 => 82,  259 => 81,  252 => 100,  246 => 106,  243 => 105,  232 => 71,  223 => 68,  208 => 61,  182 => 64,  173 => 52,  169 => 56,  156 => 43,  134 => 54,  128 => 71,  166 => 81,  150 => 67,  146 => 65,  90 => 28,  53 => 9,  49 => 13,  23 => 3,  240 => 93,  235 => 72,  231 => 88,  228 => 87,  217 => 65,  207 => 76,  200 => 55,  197 => 54,  192 => 92,  164 => 63,  129 => 61,  124 => 35,  110 => 42,  107 => 27,  87 => 34,  56 => 13,  20 => 1,  301 => 125,  295 => 121,  292 => 120,  289 => 119,  287 => 118,  282 => 115,  276 => 86,  273 => 110,  270 => 85,  268 => 107,  263 => 80,  249 => 79,  245 => 96,  230 => 70,  222 => 73,  220 => 98,  215 => 79,  211 => 64,  204 => 71,  198 => 69,  185 => 68,  183 => 63,  177 => 59,  160 => 59,  112 => 44,  82 => 19,  65 => 20,  38 => 5,  144 => 73,  141 => 54,  135 => 68,  126 => 45,  109 => 54,  103 => 25,  67 => 14,  61 => 12,  47 => 9,  28 => 3,  105 => 35,  93 => 30,  76 => 17,  72 => 20,  68 => 20,  94 => 30,  88 => 20,  79 => 23,  59 => 18,  225 => 96,  216 => 90,  212 => 78,  205 => 71,  201 => 83,  196 => 69,  194 => 62,  191 => 70,  189 => 91,  186 => 59,  180 => 72,  172 => 76,  159 => 79,  154 => 48,  147 => 58,  132 => 47,  127 => 52,  121 => 55,  118 => 39,  114 => 39,  104 => 35,  100 => 24,  78 => 25,  75 => 23,  71 => 21,  58 => 14,  34 => 5,  91 => 35,  84 => 25,  26 => 2,  27 => 3,  24 => 4,  21 => 1,  44 => 8,  31 => 4,  25 => 3,  19 => 2,  70 => 15,  63 => 16,  46 => 12,  22 => 3,  163 => 58,  155 => 56,  152 => 75,  149 => 54,  145 => 57,  139 => 50,  131 => 66,  123 => 35,  120 => 50,  115 => 44,  106 => 53,  101 => 50,  96 => 21,  83 => 28,  80 => 32,  74 => 21,  66 => 14,  55 => 9,  52 => 14,  50 => 10,  43 => 12,  41 => 11,  37 => 8,  35 => 6,  32 => 5,  29 => 6,  184 => 70,  178 => 62,  171 => 57,  165 => 54,  162 => 53,  157 => 56,  153 => 62,  151 => 47,  143 => 56,  138 => 55,  136 => 50,  133 => 46,  130 => 39,  122 => 51,  119 => 45,  116 => 31,  111 => 37,  108 => 41,  102 => 34,  98 => 32,  95 => 31,  92 => 21,  89 => 28,  85 => 27,  81 => 24,  73 => 16,  64 => 23,  60 => 15,  57 => 16,  54 => 12,  51 => 13,  48 => 9,  45 => 8,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
