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
        return array (  174 => 67,  86 => 27,  323 => 142,  313 => 136,  307 => 132,  299 => 126,  291 => 123,  283 => 117,  264 => 113,  250 => 108,  237 => 103,  233 => 102,  227 => 100,  214 => 96,  209 => 93,  175 => 84,  142 => 72,  99 => 36,  69 => 21,  188 => 69,  167 => 64,  77 => 28,  256 => 110,  253 => 85,  236 => 80,  224 => 99,  213 => 65,  168 => 55,  137 => 47,  62 => 19,  40 => 4,  535 => 197,  530 => 196,  523 => 194,  520 => 193,  512 => 189,  490 => 171,  480 => 162,  469 => 155,  467 => 154,  464 => 153,  447 => 149,  437 => 142,  421 => 139,  414 => 137,  410 => 135,  406 => 134,  403 => 133,  396 => 131,  390 => 128,  387 => 127,  379 => 124,  376 => 123,  374 => 122,  367 => 120,  363 => 119,  359 => 118,  355 => 116,  338 => 115,  329 => 108,  320 => 107,  316 => 137,  305 => 98,  302 => 97,  294 => 91,  277 => 87,  266 => 83,  262 => 82,  259 => 81,  252 => 79,  246 => 106,  243 => 105,  232 => 71,  223 => 68,  208 => 61,  182 => 89,  173 => 52,  169 => 51,  156 => 43,  134 => 54,  128 => 71,  166 => 81,  150 => 67,  146 => 65,  90 => 29,  53 => 9,  49 => 13,  23 => 3,  240 => 104,  235 => 72,  231 => 101,  228 => 67,  217 => 65,  207 => 60,  200 => 55,  197 => 54,  192 => 92,  164 => 63,  129 => 61,  124 => 35,  110 => 42,  107 => 42,  87 => 34,  56 => 18,  20 => 1,  301 => 100,  295 => 124,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 85,  268 => 115,  263 => 80,  249 => 79,  245 => 77,  230 => 70,  222 => 73,  220 => 98,  215 => 70,  211 => 64,  204 => 71,  198 => 63,  185 => 68,  183 => 60,  177 => 58,  160 => 57,  112 => 44,  82 => 30,  65 => 20,  38 => 7,  144 => 73,  141 => 54,  135 => 68,  126 => 45,  109 => 54,  103 => 34,  67 => 23,  61 => 16,  47 => 11,  28 => 3,  105 => 35,  93 => 30,  76 => 33,  72 => 20,  68 => 15,  94 => 30,  88 => 28,  79 => 25,  59 => 18,  225 => 96,  216 => 90,  212 => 63,  205 => 145,  201 => 83,  196 => 80,  194 => 62,  191 => 70,  189 => 91,  186 => 59,  180 => 72,  172 => 76,  159 => 79,  154 => 76,  147 => 58,  132 => 48,  127 => 52,  121 => 55,  118 => 39,  114 => 39,  104 => 39,  100 => 33,  78 => 25,  75 => 21,  71 => 23,  58 => 16,  34 => 5,  91 => 35,  84 => 33,  26 => 2,  27 => 3,  24 => 4,  21 => 1,  44 => 10,  31 => 4,  25 => 3,  19 => 2,  70 => 24,  63 => 19,  46 => 12,  22 => 3,  163 => 58,  155 => 56,  152 => 75,  149 => 54,  145 => 69,  139 => 50,  131 => 66,  123 => 47,  120 => 50,  115 => 38,  106 => 53,  101 => 50,  96 => 21,  83 => 26,  80 => 32,  74 => 28,  66 => 14,  55 => 17,  52 => 14,  50 => 13,  43 => 12,  41 => 11,  37 => 8,  35 => 6,  32 => 5,  29 => 6,  184 => 70,  178 => 71,  171 => 66,  165 => 58,  162 => 81,  157 => 56,  153 => 62,  151 => 50,  143 => 48,  138 => 55,  136 => 50,  133 => 46,  130 => 53,  122 => 51,  119 => 42,  116 => 46,  111 => 37,  108 => 41,  102 => 41,  98 => 22,  95 => 36,  92 => 30,  89 => 28,  85 => 27,  81 => 24,  73 => 23,  64 => 23,  60 => 19,  57 => 16,  54 => 11,  51 => 13,  48 => 9,  45 => 8,  42 => 5,  39 => 5,  36 => 4,  33 => 8,  30 => 3,);
    }
}
