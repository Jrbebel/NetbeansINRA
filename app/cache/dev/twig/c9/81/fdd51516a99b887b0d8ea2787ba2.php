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
        if ($this->getAttribute($this->getContext($context, "collector"), "hasexception")) {
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
        if ((!$this->getAttribute($this->getContext($context, "collector"), "hasexception"))) {
            // line 24
            echo "        <p>
            <em>No exception was thrown and uncaught during the request.</em>
        </p>
    ";
        } else {
            // line 28
            echo "        ";
            echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Exception:show", array("exception" => $this->getAttribute($this->getContext($context, "collector"), "exception"), "format" => "html"), array());
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
        return array (  790 => 469,  787 => 468,  776 => 466,  772 => 465,  768 => 463,  755 => 462,  729 => 457,  726 => 456,  707 => 454,  690 => 453,  686 => 451,  682 => 450,  678 => 449,  674 => 448,  670 => 447,  666 => 446,  663 => 445,  661 => 444,  644 => 443,  633 => 442,  618 => 437,  613 => 435,  609 => 434,  606 => 433,  604 => 432,  590 => 431,  558 => 401,  540 => 398,  523 => 397,  520 => 396,  518 => 395,  513 => 393,  508 => 391,  207 => 95,  190 => 89,  181 => 87,  161 => 80,  156 => 77,  148 => 74,  188 => 69,  167 => 64,  164 => 63,  134 => 54,  113 => 40,  262 => 236,  260 => 235,  257 => 234,  238 => 218,  86 => 29,  62 => 16,  90 => 41,  294 => 131,  291 => 130,  285 => 126,  275 => 119,  267 => 113,  252 => 138,  248 => 109,  240 => 219,  234 => 104,  227 => 101,  224 => 100,  221 => 99,  217 => 98,  208 => 95,  176 => 88,  173 => 85,  69 => 19,  166 => 82,  129 => 69,  158 => 57,  150 => 75,  146 => 65,  140 => 52,  87 => 40,  53 => 17,  40 => 11,  203 => 143,  107 => 52,  99 => 32,  77 => 24,  23 => 3,  49 => 13,  210 => 72,  199 => 61,  193 => 89,  182 => 54,  179 => 75,  174 => 67,  168 => 7,  110 => 42,  56 => 13,  20 => 1,  301 => 136,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 248,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 102,  222 => 73,  220 => 72,  215 => 97,  211 => 96,  204 => 94,  198 => 92,  185 => 68,  183 => 60,  177 => 58,  160 => 80,  112 => 52,  82 => 26,  65 => 22,  38 => 5,  144 => 73,  141 => 66,  135 => 49,  126 => 61,  109 => 51,  103 => 34,  67 => 23,  61 => 18,  47 => 9,  91 => 35,  84 => 33,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 92,  194 => 62,  191 => 70,  189 => 59,  186 => 76,  180 => 72,  172 => 76,  159 => 80,  154 => 68,  147 => 58,  132 => 48,  127 => 52,  121 => 55,  118 => 63,  114 => 39,  104 => 39,  100 => 36,  78 => 26,  75 => 23,  71 => 21,  34 => 8,  44 => 8,  94 => 30,  88 => 27,  59 => 21,  105 => 35,  93 => 42,  79 => 35,  76 => 34,  72 => 32,  68 => 20,  58 => 14,  24 => 2,  27 => 3,  25 => 3,  21 => 2,  31 => 4,  26 => 3,  19 => 1,  70 => 24,  63 => 21,  46 => 12,  22 => 2,  163 => 81,  155 => 58,  152 => 49,  149 => 72,  145 => 46,  139 => 71,  131 => 42,  123 => 47,  120 => 50,  115 => 40,  106 => 36,  101 => 45,  96 => 35,  83 => 28,  80 => 32,  74 => 25,  66 => 21,  55 => 24,  52 => 14,  50 => 10,  43 => 12,  41 => 19,  37 => 7,  35 => 6,  32 => 6,  29 => 3,  184 => 88,  178 => 86,  171 => 84,  165 => 58,  162 => 81,  157 => 56,  153 => 62,  151 => 73,  143 => 75,  138 => 55,  136 => 71,  133 => 43,  130 => 53,  122 => 51,  119 => 57,  116 => 35,  111 => 38,  108 => 41,  102 => 30,  98 => 22,  95 => 43,  92 => 30,  89 => 30,  85 => 27,  81 => 36,  73 => 33,  64 => 11,  60 => 20,  57 => 19,  54 => 19,  51 => 37,  48 => 9,  45 => 14,  42 => 12,  39 => 9,  36 => 9,  33 => 4,  30 => 3,);
    }
}
