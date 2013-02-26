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
        return array (  188 => 77,  167 => 59,  137 => 47,  62 => 14,  53 => 11,  40 => 4,  128 => 71,  77 => 28,  23 => 3,  49 => 10,  210 => 72,  199 => 61,  193 => 60,  182 => 54,  179 => 53,  174 => 8,  168 => 7,  110 => 43,  56 => 16,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 80,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 80,  112 => 42,  82 => 30,  65 => 16,  38 => 6,  144 => 51,  141 => 66,  135 => 47,  126 => 45,  109 => 54,  103 => 34,  67 => 18,  61 => 16,  47 => 8,  91 => 20,  84 => 28,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 145,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 59,  186 => 76,  180 => 72,  172 => 67,  159 => 57,  154 => 59,  147 => 55,  132 => 48,  127 => 42,  121 => 45,  118 => 39,  114 => 45,  104 => 36,  100 => 32,  78 => 24,  75 => 21,  71 => 23,  34 => 5,  44 => 9,  94 => 39,  88 => 28,  59 => 22,  105 => 34,  93 => 30,  79 => 23,  76 => 22,  72 => 20,  68 => 12,  58 => 13,  24 => 6,  27 => 4,  25 => 3,  21 => 2,  31 => 2,  26 => 2,  19 => 1,  70 => 19,  63 => 17,  46 => 7,  22 => 2,  163 => 58,  155 => 56,  152 => 55,  149 => 54,  145 => 46,  139 => 53,  131 => 42,  123 => 47,  120 => 46,  115 => 38,  106 => 53,  101 => 50,  96 => 21,  83 => 26,  80 => 29,  74 => 16,  66 => 21,  55 => 17,  52 => 11,  50 => 7,  43 => 7,  41 => 10,  37 => 3,  35 => 5,  32 => 7,  29 => 2,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 81,  157 => 56,  153 => 54,  151 => 73,  143 => 54,  138 => 51,  136 => 52,  133 => 46,  130 => 47,  122 => 48,  119 => 36,  116 => 35,  111 => 37,  108 => 42,  102 => 30,  98 => 22,  95 => 34,  92 => 28,  89 => 19,  85 => 31,  81 => 40,  73 => 19,  64 => 17,  60 => 17,  57 => 12,  54 => 12,  51 => 12,  48 => 11,  45 => 9,  42 => 5,  39 => 5,  36 => 4,  33 => 6,  30 => 3,);
    }
}
