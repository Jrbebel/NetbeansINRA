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
        return array (  188 => 77,  167 => 59,  77 => 28,  256 => 86,  253 => 85,  236 => 80,  224 => 72,  213 => 65,  168 => 55,  137 => 47,  62 => 14,  40 => 7,  535 => 197,  530 => 196,  523 => 194,  520 => 193,  512 => 189,  490 => 171,  480 => 162,  469 => 155,  467 => 154,  464 => 153,  447 => 149,  437 => 142,  421 => 139,  414 => 137,  410 => 135,  406 => 134,  403 => 133,  396 => 131,  390 => 128,  387 => 127,  379 => 124,  376 => 123,  374 => 122,  367 => 120,  363 => 119,  359 => 118,  355 => 116,  338 => 115,  329 => 108,  320 => 107,  316 => 106,  305 => 98,  302 => 97,  294 => 91,  277 => 87,  266 => 83,  262 => 82,  259 => 81,  252 => 79,  246 => 76,  243 => 75,  232 => 71,  223 => 68,  208 => 61,  182 => 53,  173 => 52,  169 => 51,  156 => 43,  134 => 40,  128 => 71,  166 => 72,  150 => 67,  146 => 65,  90 => 29,  53 => 8,  49 => 9,  23 => 3,  240 => 81,  235 => 72,  231 => 68,  228 => 67,  217 => 65,  207 => 60,  200 => 55,  197 => 54,  192 => 63,  164 => 82,  129 => 61,  124 => 35,  110 => 34,  107 => 42,  87 => 37,  56 => 18,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 85,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 70,  222 => 73,  220 => 72,  215 => 70,  211 => 64,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  112 => 44,  82 => 30,  65 => 22,  38 => 6,  144 => 51,  141 => 54,  135 => 47,  126 => 45,  109 => 54,  103 => 43,  67 => 19,  61 => 16,  47 => 6,  28 => 6,  105 => 34,  93 => 30,  76 => 33,  72 => 20,  68 => 15,  94 => 30,  88 => 28,  79 => 23,  59 => 22,  225 => 96,  216 => 90,  212 => 63,  205 => 145,  201 => 83,  196 => 80,  194 => 62,  191 => 60,  189 => 77,  186 => 59,  180 => 72,  172 => 76,  159 => 57,  154 => 42,  147 => 49,  132 => 48,  127 => 42,  121 => 55,  118 => 39,  114 => 42,  104 => 35,  100 => 32,  78 => 24,  75 => 21,  71 => 23,  58 => 15,  34 => 5,  91 => 29,  84 => 31,  26 => 2,  27 => 4,  24 => 4,  21 => 1,  44 => 8,  31 => 2,  25 => 3,  19 => 2,  70 => 19,  63 => 17,  46 => 11,  22 => 3,  163 => 58,  155 => 56,  152 => 55,  149 => 54,  145 => 69,  139 => 50,  131 => 46,  123 => 47,  120 => 43,  115 => 38,  106 => 53,  101 => 50,  96 => 21,  83 => 26,  80 => 26,  74 => 28,  66 => 14,  55 => 17,  52 => 15,  50 => 7,  43 => 6,  41 => 5,  37 => 3,  35 => 5,  32 => 2,  29 => 2,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 81,  157 => 56,  153 => 51,  151 => 50,  143 => 48,  138 => 63,  136 => 50,  133 => 46,  130 => 47,  122 => 43,  119 => 42,  116 => 46,  111 => 37,  108 => 37,  102 => 41,  98 => 22,  95 => 39,  92 => 30,  89 => 19,  85 => 24,  81 => 24,  73 => 18,  64 => 23,  60 => 19,  57 => 18,  54 => 11,  51 => 13,  48 => 9,  45 => 8,  42 => 5,  39 => 5,  36 => 4,  33 => 8,  30 => 3,);
    }
}
