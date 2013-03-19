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
        return array (  174 => 67,  86 => 27,  328 => 147,  321 => 142,  304 => 131,  300 => 129,  296 => 128,  288 => 122,  269 => 118,  261 => 115,  255 => 113,  251 => 111,  242 => 108,  232 => 105,  229 => 104,  219 => 101,  197 => 97,  187 => 94,  140 => 73,  69 => 19,  188 => 69,  167 => 64,  142 => 64,  134 => 54,  128 => 60,  125 => 59,  253 => 85,  224 => 72,  213 => 65,  192 => 63,  168 => 55,  137 => 47,  62 => 19,  40 => 4,  610 => 241,  605 => 240,  598 => 238,  595 => 237,  586 => 232,  565 => 214,  562 => 213,  555 => 208,  534 => 190,  531 => 189,  519 => 178,  508 => 172,  506 => 171,  503 => 170,  486 => 166,  480 => 163,  475 => 160,  469 => 156,  453 => 153,  446 => 151,  442 => 149,  438 => 148,  435 => 147,  428 => 145,  422 => 142,  419 => 141,  411 => 138,  408 => 137,  406 => 136,  399 => 134,  395 => 133,  391 => 132,  384 => 129,  367 => 128,  357 => 120,  348 => 118,  345 => 117,  341 => 116,  330 => 108,  326 => 107,  323 => 106,  318 => 141,  312 => 137,  307 => 97,  290 => 93,  283 => 91,  279 => 89,  275 => 88,  272 => 87,  265 => 85,  259 => 82,  256 => 170,  248 => 110,  236 => 106,  221 => 67,  182 => 57,  161 => 45,  156 => 42,  99 => 36,  166 => 47,  150 => 67,  146 => 65,  90 => 29,  53 => 9,  49 => 13,  23 => 3,  243 => 76,  238 => 107,  234 => 68,  231 => 67,  214 => 98,  210 => 60,  203 => 55,  200 => 54,  195 => 59,  164 => 63,  129 => 36,  124 => 49,  110 => 42,  107 => 33,  87 => 34,  56 => 11,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 120,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 109,  230 => 71,  222 => 73,  220 => 62,  215 => 70,  211 => 64,  204 => 71,  198 => 63,  185 => 68,  183 => 60,  177 => 58,  160 => 57,  112 => 53,  82 => 30,  65 => 20,  38 => 7,  144 => 51,  141 => 54,  135 => 47,  126 => 45,  109 => 52,  103 => 34,  67 => 23,  61 => 16,  47 => 11,  28 => 3,  105 => 35,  93 => 30,  76 => 33,  72 => 20,  68 => 15,  94 => 30,  88 => 28,  79 => 25,  59 => 18,  225 => 103,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 96,  191 => 70,  189 => 7,  186 => 59,  180 => 89,  172 => 76,  159 => 81,  154 => 68,  147 => 58,  132 => 48,  127 => 52,  121 => 55,  118 => 39,  114 => 39,  104 => 39,  100 => 33,  78 => 24,  75 => 21,  71 => 24,  58 => 16,  34 => 5,  91 => 35,  84 => 33,  26 => 2,  27 => 3,  24 => 4,  21 => 1,  44 => 10,  31 => 4,  25 => 4,  19 => 2,  70 => 24,  63 => 16,  46 => 12,  22 => 3,  163 => 58,  155 => 56,  152 => 55,  149 => 78,  145 => 69,  139 => 41,  131 => 61,  123 => 47,  120 => 50,  115 => 38,  106 => 36,  101 => 42,  96 => 30,  83 => 26,  80 => 32,  74 => 22,  66 => 14,  55 => 17,  52 => 14,  50 => 8,  43 => 12,  41 => 11,  37 => 3,  35 => 6,  32 => 5,  29 => 6,  184 => 70,  178 => 95,  171 => 66,  165 => 58,  162 => 81,  157 => 80,  153 => 62,  151 => 50,  143 => 48,  138 => 55,  136 => 71,  133 => 46,  130 => 53,  122 => 51,  119 => 42,  116 => 46,  111 => 37,  108 => 41,  102 => 41,  98 => 22,  95 => 36,  92 => 30,  89 => 28,  85 => 24,  81 => 24,  73 => 23,  64 => 23,  60 => 19,  57 => 16,  54 => 11,  51 => 13,  48 => 9,  45 => 6,  42 => 12,  39 => 5,  36 => 4,  33 => 8,  30 => 3,);
    }
}
