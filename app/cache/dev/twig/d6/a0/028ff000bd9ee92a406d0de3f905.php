<?php

/* Inra2013urzBundle:Default:IndexResponsable.html.twig */
class __TwigTemplate_d6a0028ff000bd9ee92a406d0de3f905 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Bienvenue Responsable";
    }

    // line 4
    public function block_menu($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"well\" >
    <ul class=\"nav nav-list\">
        <li class=\"active\"><a href=\"Inra2013urzBundle:Default:IndexAdmin.html.twig\"><i class=\"icon-home icon-white\"></i> Home</a></li>
        <li><a href=";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013urzBundle_ShowAgent", array("Default" => "Default")), "html", null, true);
        echo "><i class=\"icon-search\"></i> Recherche Analyse</a></li>
        <li><a href=";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013urzBundle_CreateAgent"), "html", null, true);
        echo "><i class=\"icon-user\"></i></a></li>
        <li><a href=\"#\"><i class=\"icon-pencil\"></i> Applications</a></li>
        <li><a href=\"#\"><i class=\"i\"></i> Misc</a></li>
    </ul>
</div>
";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        echo " <h5>Vous etes dans la partie des responsables</h5>";
    }

    public function getTemplateName()
    {
        return "Inra2013urzBundle:Default:IndexResponsable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 77,  167 => 59,  142 => 64,  134 => 62,  128 => 60,  125 => 59,  253 => 85,  224 => 72,  213 => 65,  192 => 63,  168 => 55,  137 => 47,  62 => 14,  40 => 7,  610 => 241,  605 => 240,  598 => 238,  595 => 237,  586 => 232,  565 => 214,  562 => 213,  555 => 208,  534 => 190,  531 => 189,  519 => 178,  508 => 172,  506 => 171,  503 => 170,  486 => 166,  480 => 163,  475 => 160,  469 => 156,  453 => 153,  446 => 151,  442 => 149,  438 => 148,  435 => 147,  428 => 145,  422 => 142,  419 => 141,  411 => 138,  408 => 137,  406 => 136,  399 => 134,  395 => 133,  391 => 132,  384 => 129,  367 => 128,  357 => 120,  348 => 118,  345 => 117,  341 => 116,  330 => 108,  326 => 107,  323 => 106,  318 => 103,  312 => 99,  307 => 97,  290 => 93,  283 => 91,  279 => 89,  275 => 88,  272 => 87,  265 => 85,  259 => 82,  256 => 170,  248 => 78,  236 => 80,  221 => 67,  182 => 57,  161 => 45,  156 => 42,  99 => 31,  166 => 47,  150 => 67,  146 => 65,  90 => 29,  53 => 8,  49 => 9,  23 => 3,  243 => 76,  238 => 73,  234 => 68,  231 => 67,  214 => 61,  210 => 60,  203 => 55,  200 => 54,  195 => 59,  164 => 82,  129 => 36,  124 => 49,  110 => 43,  107 => 33,  87 => 37,  56 => 11,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 71,  222 => 73,  220 => 62,  215 => 70,  211 => 64,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  112 => 53,  82 => 30,  65 => 16,  38 => 6,  144 => 51,  141 => 54,  135 => 47,  126 => 45,  109 => 52,  103 => 43,  67 => 17,  61 => 16,  47 => 6,  28 => 6,  105 => 34,  93 => 30,  76 => 33,  72 => 20,  68 => 15,  94 => 39,  88 => 28,  79 => 29,  59 => 12,  225 => 69,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 7,  186 => 59,  180 => 72,  172 => 76,  159 => 57,  154 => 68,  147 => 49,  132 => 48,  127 => 42,  121 => 55,  118 => 39,  114 => 42,  104 => 49,  100 => 32,  78 => 24,  75 => 21,  71 => 24,  58 => 15,  34 => 5,  91 => 38,  84 => 31,  26 => 2,  27 => 4,  24 => 4,  21 => 1,  44 => 8,  31 => 2,  25 => 4,  19 => 1,  70 => 19,  63 => 20,  46 => 11,  22 => 3,  163 => 58,  155 => 56,  152 => 55,  149 => 54,  145 => 69,  139 => 41,  131 => 61,  123 => 47,  120 => 43,  115 => 38,  106 => 36,  101 => 42,  96 => 30,  83 => 26,  80 => 27,  74 => 22,  66 => 14,  55 => 17,  52 => 15,  50 => 7,  43 => 5,  41 => 5,  37 => 3,  35 => 5,  32 => 2,  29 => 2,  184 => 70,  178 => 95,  171 => 49,  165 => 58,  162 => 81,  157 => 56,  153 => 51,  151 => 50,  143 => 48,  138 => 63,  136 => 50,  133 => 46,  130 => 47,  122 => 43,  119 => 42,  116 => 46,  111 => 37,  108 => 37,  102 => 41,  98 => 22,  95 => 39,  92 => 30,  89 => 19,  85 => 24,  81 => 24,  73 => 18,  64 => 23,  60 => 19,  57 => 13,  54 => 11,  51 => 13,  48 => 9,  45 => 6,  42 => 12,  39 => 5,  36 => 4,  33 => 8,  30 => 3,);
    }
}
