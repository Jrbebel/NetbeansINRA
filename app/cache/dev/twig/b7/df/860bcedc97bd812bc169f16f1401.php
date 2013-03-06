<?php

/* Inra2013urzBundle:Analyse:Save.html.twig */
class __TwigTemplate_b7df860bcedc97bd812bc169f16f1401 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("Inra2013urzBundle:Default:IndexUser.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Inra2013urzBundle:Default:IndexUser.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Sauvegarde Analyse";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"alert alert-success\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
    <p>Vos résultat d'analyse à bien été enregistrer</p>
</div>

";
    }

    public function getTemplateName()
    {
        return "Inra2013urzBundle:Analyse:Save.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 59,  137 => 47,  40 => 4,  128 => 71,  77 => 28,  456 => 151,  453 => 150,  435 => 136,  418 => 132,  408 => 125,  392 => 122,  385 => 120,  381 => 118,  377 => 117,  374 => 116,  367 => 114,  361 => 111,  358 => 110,  350 => 107,  347 => 106,  345 => 105,  338 => 103,  334 => 102,  330 => 101,  326 => 99,  309 => 98,  300 => 91,  291 => 90,  265 => 74,  248 => 70,  241 => 68,  237 => 66,  233 => 65,  223 => 62,  217 => 59,  214 => 58,  206 => 55,  203 => 54,  188 => 77,  140 => 34,  125 => 25,  99 => 20,  62 => 14,  166 => 72,  150 => 67,  146 => 65,  129 => 61,  90 => 29,  87 => 37,  53 => 8,  49 => 10,  23 => 3,  210 => 72,  199 => 61,  193 => 60,  182 => 54,  179 => 44,  174 => 8,  168 => 7,  110 => 43,  56 => 18,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 89,  282 => 90,  276 => 81,  273 => 80,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 64,  222 => 73,  220 => 72,  215 => 80,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 46,  177 => 58,  160 => 80,  112 => 42,  82 => 30,  65 => 13,  38 => 6,  144 => 51,  141 => 66,  135 => 47,  126 => 45,  109 => 54,  103 => 43,  67 => 18,  61 => 16,  47 => 6,  28 => 6,  105 => 34,  93 => 30,  76 => 33,  72 => 20,  68 => 12,  94 => 39,  88 => 28,  79 => 23,  59 => 22,  225 => 96,  216 => 90,  212 => 88,  205 => 145,  201 => 53,  196 => 80,  194 => 51,  191 => 78,  189 => 59,  186 => 76,  180 => 72,  172 => 76,  159 => 57,  154 => 68,  147 => 55,  132 => 48,  127 => 42,  121 => 55,  118 => 39,  114 => 45,  104 => 35,  100 => 32,  78 => 24,  75 => 21,  71 => 23,  58 => 13,  34 => 5,  91 => 38,  84 => 28,  26 => 2,  27 => 4,  24 => 4,  21 => 1,  44 => 9,  31 => 2,  25 => 3,  19 => 2,  70 => 19,  63 => 17,  46 => 7,  22 => 3,  163 => 58,  155 => 56,  152 => 55,  149 => 54,  145 => 46,  139 => 53,  131 => 42,  123 => 47,  120 => 43,  115 => 38,  106 => 53,  101 => 50,  96 => 21,  83 => 26,  80 => 26,  74 => 24,  66 => 21,  55 => 17,  52 => 11,  50 => 7,  43 => 7,  41 => 6,  37 => 3,  35 => 5,  32 => 7,  29 => 2,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 43,  157 => 56,  153 => 36,  151 => 73,  143 => 54,  138 => 63,  136 => 52,  133 => 46,  130 => 27,  122 => 24,  119 => 36,  116 => 35,  111 => 37,  108 => 42,  102 => 30,  98 => 22,  95 => 18,  92 => 30,  89 => 19,  85 => 31,  81 => 17,  73 => 15,  64 => 23,  60 => 19,  57 => 12,  54 => 12,  51 => 13,  48 => 11,  45 => 11,  42 => 5,  39 => 6,  36 => 5,  33 => 8,  30 => 3,);
    }
}
