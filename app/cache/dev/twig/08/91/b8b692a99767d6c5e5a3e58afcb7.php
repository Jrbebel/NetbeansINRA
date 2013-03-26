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
        return array (  174 => 67,  381 => 147,  374 => 142,  371 => 141,  353 => 129,  349 => 128,  341 => 122,  326 => 120,  305 => 116,  291 => 111,  288 => 110,  285 => 109,  272 => 105,  269 => 104,  252 => 103,  246 => 101,  224 => 97,  221 => 96,  207 => 89,  192 => 87,  140 => 73,  99 => 36,  188 => 69,  167 => 64,  137 => 47,  62 => 19,  77 => 33,  256 => 170,  128 => 60,  125 => 59,  261 => 86,  258 => 85,  241 => 98,  229 => 72,  218 => 65,  197 => 63,  173 => 55,  156 => 50,  142 => 64,  86 => 27,  69 => 19,  40 => 4,  732 => 297,  727 => 294,  724 => 292,  722 => 291,  703 => 275,  699 => 274,  694 => 273,  686 => 269,  681 => 268,  678 => 267,  669 => 262,  657 => 252,  652 => 250,  649 => 249,  647 => 248,  634 => 238,  631 => 237,  624 => 232,  612 => 222,  607 => 220,  604 => 219,  602 => 218,  589 => 208,  586 => 207,  574 => 196,  564 => 191,  562 => 190,  559 => 189,  542 => 185,  536 => 182,  531 => 179,  525 => 175,  509 => 172,  502 => 170,  498 => 168,  494 => 167,  491 => 166,  484 => 164,  480 => 162,  473 => 160,  461 => 158,  459 => 157,  456 => 156,  448 => 153,  445 => 152,  443 => 151,  436 => 149,  432 => 148,  428 => 147,  423 => 144,  406 => 143,  396 => 135,  387 => 133,  384 => 132,  380 => 131,  369 => 123,  365 => 137,  362 => 121,  357 => 131,  351 => 114,  346 => 112,  329 => 108,  322 => 118,  318 => 104,  314 => 103,  311 => 102,  304 => 100,  299 => 97,  280 => 93,  278 => 107,  275 => 91,  267 => 88,  264 => 87,  262 => 86,  255 => 84,  244 => 79,  240 => 77,  223 => 76,  190 => 59,  182 => 56,  175 => 52,  158 => 51,  148 => 48,  134 => 54,  166 => 72,  150 => 67,  146 => 65,  90 => 34,  53 => 9,  49 => 13,  23 => 3,  243 => 81,  238 => 73,  234 => 68,  231 => 67,  214 => 94,  210 => 60,  203 => 55,  200 => 54,  195 => 8,  164 => 63,  129 => 61,  124 => 42,  110 => 42,  107 => 41,  87 => 34,  56 => 11,  20 => 1,  301 => 115,  295 => 113,  292 => 95,  289 => 94,  287 => 93,  282 => 108,  276 => 106,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 81,  245 => 77,  230 => 75,  222 => 73,  220 => 62,  215 => 70,  211 => 69,  204 => 71,  198 => 63,  185 => 68,  183 => 85,  177 => 58,  160 => 57,  112 => 55,  82 => 35,  65 => 20,  38 => 7,  144 => 51,  141 => 54,  135 => 47,  126 => 43,  109 => 52,  103 => 34,  67 => 23,  61 => 18,  47 => 11,  28 => 3,  105 => 35,  93 => 30,  76 => 31,  72 => 20,  68 => 22,  94 => 30,  88 => 39,  79 => 25,  59 => 18,  225 => 96,  216 => 64,  212 => 88,  205 => 68,  201 => 67,  196 => 80,  194 => 62,  191 => 70,  189 => 7,  186 => 86,  180 => 55,  172 => 76,  159 => 81,  154 => 68,  147 => 58,  132 => 45,  127 => 52,  121 => 55,  118 => 39,  114 => 39,  104 => 39,  100 => 33,  78 => 33,  75 => 21,  71 => 32,  58 => 16,  34 => 5,  91 => 35,  84 => 33,  26 => 2,  27 => 3,  24 => 4,  21 => 1,  44 => 10,  31 => 4,  25 => 5,  19 => 2,  70 => 24,  63 => 16,  46 => 12,  22 => 3,  163 => 58,  155 => 56,  152 => 55,  149 => 78,  145 => 69,  139 => 50,  131 => 61,  123 => 66,  120 => 50,  115 => 38,  106 => 51,  101 => 42,  96 => 48,  83 => 26,  80 => 32,  74 => 22,  66 => 21,  55 => 17,  52 => 14,  50 => 8,  43 => 12,  41 => 11,  37 => 3,  35 => 6,  32 => 5,  29 => 6,  184 => 70,  178 => 95,  171 => 66,  165 => 58,  162 => 81,  157 => 80,  153 => 62,  151 => 73,  143 => 67,  138 => 55,  136 => 71,  133 => 46,  130 => 53,  122 => 51,  119 => 36,  116 => 46,  111 => 37,  108 => 41,  102 => 30,  98 => 39,  95 => 36,  92 => 30,  89 => 28,  85 => 29,  81 => 36,  73 => 23,  64 => 23,  60 => 19,  57 => 16,  54 => 12,  51 => 13,  48 => 9,  45 => 15,  42 => 12,  39 => 5,  36 => 4,  33 => 8,  30 => 3,);
    }
}
