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
        if (((isset($context["Status"]) ? $context["Status"] : null) == "SaveAnalyse")) {
            // line 7
            echo "<div class=\"alert alert-success\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
    <p>Vos résultat d'analyse à bien été enregistrer.</p>
</div>
";
        } elseif (((isset($context["Status"]) ? $context["Status"] : null) == 1)) {
            // line 11
            echo "<div class=\"alert alert-success\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
    <p>Vos résultat d'analyse sont en cours de validation.</p>
</div>
";
        } elseif (((isset($context["Status"]) ? $context["Status"] : null) == 2)) {
            // line 15
            echo "<div class=\"alert alert-success\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
    <p>Vos résultat d'analyse ont été validé.</p>
</div>
";
        } elseif (((isset($context["Status"]) ? $context["Status"] : null) == 3)) {
            // line 19
            echo "<div class=\"alert alert-success\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
    <p>Envoie d'alerte mail pour refus de resultat</p>
</div>
";
        } elseif (((isset($context["Status"]) ? $context["Status"] : null) == "TypeCategorie")) {
            // line 23
            echo "<div class=\"alert alert-success\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
    <p>Catégorie d'analyse crée avec succes.</p>
</div>
";
        } elseif (((isset($context["Status"]) ? $context["Status"] : null) == "TypeCategorieError")) {
            // line 27
            echo "<div class=\"alert alert-danger\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
    <p>Enregistrement de la catégorie d'analyse échoué,recommencez ou contactez l'adminiistrateur.</p>
</div>
";
        } elseif (((isset($context["Status"]) ? $context["Status"] : null) == "CategorieAnalyse")) {
            // line 31
            echo "<div class=\"alert alert-success\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
    <p>Analyse crée avec succes.</p>
</div>
";
        } elseif (((isset($context["Status"]) ? $context["Status"] : null) == "CategorieAnalyseError")) {
            // line 35
            echo "<div class=\"alert alert-danger\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
    <p>Enregistrement de l'analyse échoué,recommencez ou contactez l'adminiistrateur.</p>
</div>
";
        } elseif (((isset($context["Status"]) ? $context["Status"] : null) == "Analyse")) {
            // line 39
            echo "<div class=\"alert alert-success\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
    <p>Analyse crée avec succes.</p>
</div>
";
        } elseif (((isset($context["Status"]) ? $context["Status"] : null) == "AnalyseError")) {
            // line 43
            echo "<div class=\"alert alert-success\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
    <p>Analyse crée avec succes.</p>
</div>
";
        } elseif (((isset($context["Status"]) ? $context["Status"] : null) == "Champs")) {
            // line 47
            echo "<div class=\"alert alert-success\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
    <p>Champs pour analyse crée avec succes.</p>
</div>
";
        } elseif (((isset($context["Status"]) ? $context["Status"] : null) == "ChampsError")) {
            // line 51
            echo "<div class=\"alert alert-danger\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
    <p>Enregistrement des champs pour l'analyse a échoué,recommencez ou contactez l'adminiistrateur</p>
</div>
";
        }
        // line 55
        echo "

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
        return array (  188 => 77,  167 => 59,  137 => 47,  62 => 14,  77 => 33,  256 => 170,  131 => 61,  128 => 60,  125 => 59,  261 => 86,  258 => 85,  241 => 80,  229 => 72,  218 => 65,  197 => 63,  173 => 55,  156 => 50,  142 => 64,  86 => 24,  69 => 14,  40 => 7,  732 => 297,  727 => 294,  724 => 292,  722 => 291,  703 => 275,  699 => 274,  694 => 273,  686 => 269,  681 => 268,  678 => 267,  669 => 262,  657 => 252,  652 => 250,  649 => 249,  647 => 248,  634 => 238,  631 => 237,  624 => 232,  612 => 222,  607 => 220,  604 => 219,  602 => 218,  589 => 208,  586 => 207,  574 => 196,  564 => 191,  562 => 190,  559 => 189,  542 => 185,  536 => 182,  531 => 179,  525 => 175,  509 => 172,  502 => 170,  498 => 168,  494 => 167,  491 => 166,  484 => 164,  480 => 162,  473 => 160,  461 => 158,  459 => 157,  456 => 156,  448 => 153,  445 => 152,  443 => 151,  436 => 149,  432 => 148,  428 => 147,  423 => 144,  406 => 143,  396 => 135,  387 => 133,  384 => 132,  380 => 131,  369 => 123,  365 => 122,  362 => 121,  357 => 118,  351 => 114,  346 => 112,  329 => 108,  322 => 106,  318 => 104,  314 => 103,  311 => 102,  304 => 100,  299 => 97,  280 => 93,  278 => 92,  275 => 91,  267 => 88,  264 => 87,  262 => 86,  255 => 84,  244 => 79,  240 => 77,  223 => 76,  190 => 59,  182 => 56,  175 => 52,  158 => 51,  152 => 55,  148 => 48,  134 => 62,  166 => 72,  150 => 67,  146 => 65,  115 => 38,  90 => 34,  80 => 27,  53 => 8,  49 => 9,  23 => 3,  243 => 81,  238 => 73,  234 => 68,  231 => 67,  214 => 69,  210 => 60,  203 => 55,  200 => 54,  195 => 8,  164 => 53,  145 => 69,  129 => 61,  124 => 42,  110 => 55,  107 => 41,  87 => 37,  52 => 15,  37 => 3,  56 => 11,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 81,  245 => 77,  230 => 75,  222 => 73,  220 => 62,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 57,  183 => 60,  177 => 58,  160 => 57,  149 => 54,  123 => 66,  120 => 43,  112 => 55,  106 => 51,  82 => 35,  65 => 13,  38 => 6,  155 => 56,  144 => 51,  141 => 54,  139 => 50,  135 => 47,  126 => 43,  109 => 52,  103 => 50,  101 => 42,  70 => 27,  67 => 17,  61 => 18,  47 => 6,  28 => 6,  105 => 34,  96 => 48,  93 => 30,  83 => 26,  76 => 31,  72 => 20,  68 => 22,  50 => 7,  94 => 43,  88 => 39,  79 => 25,  59 => 12,  43 => 8,  32 => 4,  225 => 96,  216 => 64,  212 => 88,  205 => 68,  201 => 67,  196 => 80,  194 => 62,  191 => 59,  189 => 7,  186 => 76,  180 => 55,  172 => 76,  163 => 58,  159 => 57,  154 => 68,  147 => 55,  132 => 45,  127 => 42,  121 => 55,  118 => 39,  114 => 38,  104 => 36,  100 => 47,  78 => 33,  75 => 21,  71 => 32,  63 => 20,  58 => 19,  34 => 5,  91 => 38,  84 => 31,  74 => 22,  66 => 21,  55 => 15,  41 => 5,  46 => 11,  26 => 2,  22 => 3,  27 => 6,  24 => 4,  29 => 2,  21 => 1,  44 => 13,  35 => 5,  31 => 2,  25 => 5,  19 => 1,  184 => 70,  178 => 95,  171 => 62,  165 => 58,  162 => 81,  157 => 56,  153 => 74,  151 => 73,  143 => 67,  138 => 63,  136 => 46,  133 => 46,  130 => 47,  122 => 44,  119 => 36,  116 => 46,  111 => 37,  108 => 31,  102 => 30,  98 => 39,  95 => 34,  92 => 30,  89 => 19,  85 => 29,  81 => 36,  73 => 19,  64 => 23,  60 => 19,  57 => 20,  54 => 12,  51 => 16,  48 => 7,  45 => 15,  42 => 12,  39 => 6,  36 => 5,  33 => 8,  30 => 3,);
    }
}
