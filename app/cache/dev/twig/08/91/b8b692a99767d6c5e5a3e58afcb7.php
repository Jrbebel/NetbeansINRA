<?php

/* WebProfilerBundle:Collector:memory.html.twig */
class __TwigTemplate_0891b8b692a99767d6c5e5a3e58afcb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <span>
            <img width=\"13\" height=\"28\" alt=\"Memory Usage\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAcBAMAAABITyhxAAAAJ1BMVEXNzc3///////////////////////8/Pz////////////+NjY0/Pz9lMO+OAAAADHRSTlMAABAgMDhAWXCvv9e8JUuyAAAAQ0lEQVQI12MQBAMBBmLpMwoMDAw6BxjOOABpHyCdAKRzsNDp5eXl1KBh5oHBAYY9YHoDQ+cqIFjZwGCaBgSpBrjcCwCZgkUHKKvX+wAAAABJRU5ErkJggg==\"/>
            <span>";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Memory usage</b>
            <span>";
        // line 13
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 67,  86 => 27,  323 => 142,  316 => 137,  313 => 136,  307 => 132,  299 => 126,  291 => 123,  264 => 113,  250 => 108,  246 => 106,  240 => 104,  237 => 103,  233 => 102,  227 => 100,  209 => 93,  182 => 89,  142 => 72,  99 => 36,  69 => 19,  167 => 64,  128 => 71,  77 => 28,  256 => 110,  253 => 85,  224 => 99,  213 => 65,  192 => 92,  168 => 55,  137 => 47,  62 => 19,  40 => 4,  579 => 228,  574 => 227,  567 => 225,  564 => 224,  555 => 219,  534 => 201,  531 => 200,  524 => 195,  503 => 177,  500 => 176,  490 => 167,  479 => 160,  477 => 159,  474 => 158,  457 => 154,  447 => 147,  431 => 144,  424 => 142,  420 => 140,  416 => 139,  413 => 138,  406 => 136,  400 => 133,  397 => 132,  389 => 129,  386 => 128,  384 => 127,  377 => 125,  373 => 124,  369 => 123,  365 => 121,  348 => 120,  338 => 112,  329 => 110,  326 => 109,  322 => 108,  311 => 100,  308 => 99,  300 => 93,  283 => 117,  272 => 85,  265 => 83,  258 => 81,  252 => 78,  241 => 74,  236 => 80,  229 => 70,  223 => 67,  218 => 65,  197 => 62,  188 => 69,  179 => 54,  175 => 84,  140 => 42,  134 => 54,  97 => 31,  166 => 81,  150 => 67,  146 => 65,  90 => 29,  53 => 9,  49 => 13,  23 => 3,  243 => 105,  238 => 73,  234 => 68,  231 => 101,  214 => 96,  210 => 60,  203 => 55,  200 => 54,  195 => 8,  164 => 63,  129 => 61,  124 => 49,  110 => 42,  107 => 42,  87 => 34,  56 => 18,  20 => 1,  301 => 100,  295 => 124,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 87,  273 => 85,  270 => 84,  268 => 115,  263 => 80,  249 => 77,  245 => 77,  230 => 75,  222 => 73,  220 => 98,  215 => 70,  211 => 64,  204 => 71,  198 => 63,  185 => 68,  183 => 60,  177 => 58,  160 => 44,  112 => 44,  82 => 30,  65 => 20,  38 => 7,  144 => 73,  141 => 54,  135 => 68,  126 => 45,  109 => 54,  103 => 34,  67 => 23,  61 => 16,  47 => 11,  28 => 3,  105 => 35,  93 => 30,  76 => 33,  72 => 20,  68 => 15,  94 => 30,  88 => 28,  79 => 25,  59 => 18,  225 => 96,  216 => 90,  212 => 88,  205 => 145,  201 => 83,  196 => 80,  194 => 62,  191 => 70,  189 => 91,  186 => 59,  180 => 72,  172 => 76,  159 => 79,  154 => 76,  147 => 58,  132 => 48,  127 => 52,  121 => 55,  118 => 39,  114 => 39,  104 => 39,  100 => 33,  78 => 24,  75 => 21,  71 => 23,  58 => 16,  34 => 5,  91 => 35,  84 => 33,  26 => 2,  27 => 3,  24 => 4,  21 => 1,  44 => 10,  31 => 4,  25 => 4,  19 => 2,  70 => 24,  63 => 16,  46 => 12,  22 => 3,  163 => 58,  155 => 56,  152 => 75,  149 => 54,  145 => 69,  139 => 50,  131 => 66,  123 => 47,  120 => 50,  115 => 38,  106 => 53,  101 => 50,  96 => 21,  83 => 26,  80 => 32,  74 => 26,  66 => 14,  55 => 17,  52 => 14,  50 => 8,  43 => 12,  41 => 11,  37 => 3,  35 => 6,  32 => 5,  29 => 6,  184 => 70,  178 => 71,  171 => 66,  165 => 46,  162 => 45,  157 => 43,  153 => 62,  151 => 50,  143 => 48,  138 => 55,  136 => 50,  133 => 46,  130 => 53,  122 => 51,  119 => 42,  116 => 36,  111 => 37,  108 => 41,  102 => 41,  98 => 22,  95 => 36,  92 => 30,  89 => 28,  85 => 24,  81 => 24,  73 => 23,  64 => 23,  60 => 19,  57 => 16,  54 => 11,  51 => 13,  48 => 9,  45 => 8,  42 => 5,  39 => 5,  36 => 4,  33 => 8,  30 => 3,);
    }
}
