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
        return array (  164 => 63,  134 => 54,  86 => 27,  315 => 140,  308 => 135,  305 => 134,  299 => 130,  288 => 122,  284 => 121,  261 => 113,  257 => 111,  243 => 106,  239 => 104,  236 => 103,  226 => 100,  224 => 99,  213 => 96,  207 => 94,  202 => 91,  175 => 87,  69 => 21,  167 => 64,  137 => 47,  40 => 4,  128 => 71,  77 => 28,  456 => 151,  453 => 150,  435 => 136,  418 => 132,  408 => 125,  392 => 122,  385 => 120,  381 => 118,  377 => 117,  374 => 116,  367 => 114,  361 => 111,  358 => 110,  350 => 107,  347 => 106,  345 => 105,  338 => 103,  334 => 102,  330 => 101,  326 => 99,  309 => 98,  300 => 91,  291 => 90,  265 => 74,  248 => 70,  241 => 68,  237 => 66,  233 => 102,  223 => 62,  217 => 97,  214 => 58,  206 => 55,  203 => 54,  188 => 69,  140 => 34,  125 => 25,  99 => 20,  62 => 19,  166 => 72,  150 => 67,  146 => 65,  129 => 61,  90 => 29,  87 => 34,  53 => 9,  49 => 13,  23 => 3,  210 => 72,  199 => 61,  193 => 60,  182 => 89,  179 => 44,  174 => 67,  168 => 82,  110 => 42,  56 => 18,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 89,  282 => 90,  276 => 115,  273 => 80,  270 => 84,  268 => 83,  263 => 80,  249 => 108,  245 => 77,  230 => 101,  222 => 73,  220 => 98,  215 => 80,  211 => 69,  204 => 71,  198 => 63,  185 => 68,  183 => 46,  177 => 58,  160 => 80,  112 => 42,  82 => 30,  65 => 20,  38 => 7,  144 => 51,  141 => 66,  135 => 47,  126 => 45,  109 => 54,  103 => 34,  67 => 23,  61 => 16,  47 => 11,  28 => 3,  105 => 35,  93 => 30,  76 => 33,  72 => 20,  68 => 12,  94 => 30,  88 => 28,  79 => 25,  59 => 18,  225 => 96,  216 => 90,  212 => 88,  205 => 145,  201 => 53,  196 => 80,  194 => 51,  191 => 70,  189 => 59,  186 => 76,  180 => 72,  172 => 76,  159 => 79,  154 => 68,  147 => 58,  132 => 48,  127 => 52,  121 => 55,  118 => 39,  114 => 39,  104 => 39,  100 => 33,  78 => 25,  75 => 21,  71 => 23,  58 => 16,  34 => 5,  91 => 35,  84 => 33,  26 => 2,  27 => 3,  24 => 4,  21 => 1,  44 => 10,  31 => 4,  25 => 3,  19 => 2,  70 => 24,  63 => 19,  46 => 12,  22 => 3,  163 => 58,  155 => 56,  152 => 77,  149 => 54,  145 => 73,  139 => 53,  131 => 67,  123 => 47,  120 => 50,  115 => 38,  106 => 53,  101 => 50,  96 => 21,  83 => 26,  80 => 32,  74 => 24,  66 => 21,  55 => 17,  52 => 14,  50 => 13,  43 => 12,  41 => 11,  37 => 8,  35 => 6,  32 => 5,  29 => 6,  184 => 70,  178 => 71,  171 => 66,  165 => 58,  162 => 43,  157 => 56,  153 => 62,  151 => 73,  143 => 54,  138 => 55,  136 => 52,  133 => 46,  130 => 53,  122 => 51,  119 => 36,  116 => 35,  111 => 37,  108 => 41,  102 => 30,  98 => 22,  95 => 36,  92 => 30,  89 => 28,  85 => 27,  81 => 17,  73 => 23,  64 => 23,  60 => 19,  57 => 16,  54 => 12,  51 => 13,  48 => 9,  45 => 11,  42 => 5,  39 => 5,  36 => 4,  33 => 8,  30 => 3,);
    }
}
