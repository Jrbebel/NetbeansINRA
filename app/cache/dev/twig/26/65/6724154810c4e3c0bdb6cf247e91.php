<?php

/* Inra2013urzBundle:Default:IndexUser.html.twig */
class __TwigTemplate_26656724154810c4e3c0bdb6cf247e91 extends Twig_Template
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
        echo "Bienvenue";
    }

    // line 4
    public function block_menu($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"well\" >
    <ul class=\"nav nav-list\">
        <li class=\"active\"><a href=";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013urzBundle_Homepage"), "html", null, true);
        echo "><i class=\"icon-home icon-white\"></i> Home</a></li>
        <li><a href=";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_CreateAnalyse"), "html", null, true);
        echo "><i class=\" icon-plus\"></i> Créer analyse </a></li>
        <li><a href=><i class=\"icon-pencil\"></i> Modifier analyse</a></li>
        <li><a href=><i class=\" icon-folder-open\"></i> Importer Resultat </a></li>
        <li><a href=";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_ImportListing"), "html", null, true);
        echo "><i class=\" icon-folder-open\"></i> Importer listing échantillon </a></li>
        <li><a href=";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_CreateExcel"), "html", null, true);
        echo "><i class=\" icon-download-alt\"></i> Exporter fichier excel protocole </a></li>


    </ul>
</div>
";
    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        echo " <h5>Vous etes dans la partie des utilisateurs courant</h5>";
    }

    public function getTemplateName()
    {
        return "Inra2013urzBundle:Default:IndexUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  456 => 151,  453 => 150,  435 => 136,  418 => 132,  408 => 125,  392 => 122,  385 => 120,  381 => 118,  377 => 117,  374 => 116,  367 => 114,  361 => 111,  358 => 110,  350 => 107,  347 => 106,  345 => 105,  338 => 103,  334 => 102,  330 => 101,  326 => 99,  309 => 98,  300 => 91,  291 => 90,  265 => 74,  248 => 70,  241 => 68,  237 => 66,  233 => 65,  223 => 62,  217 => 59,  214 => 58,  206 => 55,  203 => 54,  188 => 48,  140 => 34,  125 => 25,  99 => 20,  62 => 12,  166 => 72,  150 => 67,  146 => 65,  129 => 61,  90 => 29,  87 => 37,  53 => 11,  49 => 10,  23 => 3,  210 => 72,  199 => 61,  193 => 60,  182 => 54,  179 => 44,  174 => 8,  168 => 7,  110 => 43,  56 => 18,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 89,  282 => 90,  276 => 81,  273 => 80,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 64,  222 => 73,  220 => 72,  215 => 80,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 46,  177 => 58,  160 => 80,  112 => 42,  82 => 30,  65 => 13,  38 => 5,  144 => 35,  141 => 66,  135 => 47,  126 => 45,  109 => 47,  103 => 43,  67 => 18,  61 => 16,  47 => 8,  28 => 6,  105 => 23,  93 => 34,  76 => 33,  72 => 32,  68 => 12,  94 => 39,  88 => 27,  79 => 23,  59 => 22,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 53,  196 => 80,  194 => 51,  191 => 78,  189 => 59,  186 => 76,  180 => 72,  172 => 76,  159 => 61,  154 => 68,  147 => 55,  132 => 48,  127 => 26,  121 => 55,  118 => 47,  114 => 45,  104 => 35,  100 => 33,  78 => 24,  75 => 23,  71 => 19,  58 => 13,  34 => 5,  91 => 38,  84 => 28,  26 => 2,  27 => 4,  24 => 4,  21 => 1,  44 => 13,  31 => 4,  25 => 3,  19 => 2,  70 => 19,  63 => 20,  46 => 7,  22 => 3,  163 => 63,  155 => 58,  152 => 49,  149 => 72,  145 => 46,  139 => 53,  131 => 42,  123 => 47,  120 => 43,  115 => 51,  106 => 36,  101 => 42,  96 => 21,  83 => 18,  80 => 26,  74 => 24,  66 => 21,  55 => 13,  52 => 15,  50 => 8,  43 => 7,  41 => 6,  37 => 8,  35 => 4,  32 => 7,  29 => 2,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 43,  157 => 56,  153 => 36,  151 => 73,  143 => 54,  138 => 63,  136 => 52,  133 => 43,  130 => 27,  122 => 24,  119 => 36,  116 => 35,  111 => 38,  108 => 42,  102 => 30,  98 => 22,  95 => 18,  92 => 30,  89 => 19,  85 => 31,  81 => 17,  73 => 15,  64 => 23,  60 => 19,  57 => 12,  54 => 12,  51 => 13,  48 => 11,  45 => 11,  42 => 12,  39 => 5,  36 => 4,  33 => 8,  30 => 3,);
    }
}
