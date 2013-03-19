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
        return array (  167 => 59,  152 => 55,  142 => 64,  128 => 60,  125 => 59,  256 => 170,  253 => 85,  224 => 72,  213 => 65,  192 => 63,  168 => 55,  137 => 47,  131 => 61,  62 => 14,  40 => 7,  579 => 228,  574 => 227,  567 => 225,  564 => 224,  555 => 219,  534 => 201,  531 => 200,  524 => 195,  503 => 177,  500 => 176,  490 => 167,  479 => 160,  477 => 159,  474 => 158,  457 => 154,  447 => 147,  431 => 144,  424 => 142,  420 => 140,  416 => 139,  413 => 138,  406 => 136,  400 => 133,  397 => 132,  389 => 129,  386 => 128,  384 => 127,  377 => 125,  373 => 124,  369 => 123,  365 => 121,  348 => 120,  338 => 112,  329 => 110,  326 => 109,  322 => 108,  311 => 100,  308 => 99,  300 => 93,  283 => 89,  272 => 85,  265 => 83,  258 => 81,  252 => 78,  241 => 74,  236 => 80,  229 => 70,  223 => 67,  218 => 65,  197 => 62,  188 => 77,  179 => 54,  175 => 53,  140 => 42,  134 => 62,  97 => 31,  166 => 72,  150 => 67,  146 => 65,  115 => 38,  90 => 29,  80 => 27,  53 => 8,  49 => 9,  23 => 3,  243 => 81,  238 => 73,  234 => 68,  231 => 67,  214 => 63,  210 => 60,  203 => 55,  200 => 54,  195 => 8,  164 => 82,  145 => 69,  129 => 61,  124 => 49,  110 => 43,  107 => 42,  87 => 37,  52 => 15,  37 => 3,  56 => 11,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 87,  273 => 85,  270 => 84,  268 => 84,  263 => 80,  249 => 77,  245 => 77,  230 => 75,  222 => 73,  220 => 62,  215 => 70,  211 => 64,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 44,  149 => 54,  123 => 47,  120 => 43,  112 => 53,  106 => 36,  82 => 30,  65 => 16,  38 => 6,  155 => 56,  144 => 51,  141 => 54,  139 => 50,  135 => 47,  126 => 45,  109 => 52,  103 => 43,  101 => 42,  70 => 19,  67 => 17,  61 => 16,  47 => 6,  28 => 6,  105 => 34,  96 => 21,  93 => 30,  83 => 26,  76 => 33,  72 => 20,  68 => 15,  50 => 7,  94 => 39,  88 => 28,  79 => 23,  59 => 12,  43 => 5,  32 => 2,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 7,  186 => 59,  180 => 72,  172 => 76,  163 => 58,  159 => 57,  154 => 68,  147 => 49,  132 => 48,  127 => 42,  121 => 55,  118 => 39,  114 => 42,  104 => 49,  100 => 32,  78 => 24,  75 => 21,  71 => 24,  63 => 20,  58 => 15,  34 => 5,  91 => 38,  84 => 31,  74 => 22,  66 => 14,  55 => 17,  41 => 5,  46 => 11,  26 => 2,  22 => 3,  27 => 4,  24 => 4,  29 => 2,  21 => 1,  44 => 8,  35 => 5,  31 => 2,  25 => 4,  19 => 1,  184 => 70,  178 => 95,  171 => 62,  165 => 46,  162 => 45,  157 => 43,  153 => 51,  151 => 50,  143 => 48,  138 => 63,  136 => 50,  133 => 46,  130 => 37,  122 => 43,  119 => 42,  116 => 36,  111 => 37,  108 => 34,  102 => 41,  98 => 22,  95 => 39,  92 => 30,  89 => 19,  85 => 24,  81 => 24,  73 => 18,  64 => 23,  60 => 19,  57 => 13,  54 => 11,  51 => 13,  48 => 9,  45 => 6,  42 => 12,  39 => 5,  36 => 4,  33 => 8,  30 => 3,);
    }
}
