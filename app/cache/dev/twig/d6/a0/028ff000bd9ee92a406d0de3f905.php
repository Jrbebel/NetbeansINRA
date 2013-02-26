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
        return array (  315 => 140,  308 => 135,  305 => 134,  299 => 130,  288 => 122,  284 => 121,  261 => 113,  257 => 111,  243 => 106,  239 => 104,  236 => 103,  233 => 102,  226 => 100,  224 => 99,  217 => 97,  213 => 96,  207 => 94,  202 => 91,  175 => 87,  69 => 19,  166 => 72,  150 => 67,  146 => 65,  129 => 61,  87 => 32,  188 => 77,  167 => 59,  137 => 47,  62 => 14,  53 => 9,  40 => 4,  128 => 71,  77 => 28,  23 => 3,  49 => 10,  210 => 72,  199 => 61,  193 => 60,  182 => 89,  179 => 53,  174 => 8,  168 => 82,  110 => 43,  56 => 16,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 115,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 108,  245 => 77,  230 => 101,  222 => 73,  220 => 98,  215 => 80,  211 => 69,  204 => 66,  198 => 63,  185 => 90,  183 => 60,  177 => 58,  160 => 80,  112 => 42,  82 => 30,  65 => 16,  38 => 4,  144 => 51,  141 => 66,  135 => 47,  126 => 45,  109 => 47,  103 => 43,  67 => 18,  61 => 9,  47 => 7,  91 => 38,  84 => 28,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 145,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 59,  186 => 76,  180 => 72,  172 => 76,  159 => 79,  154 => 68,  147 => 74,  132 => 48,  127 => 65,  121 => 55,  118 => 39,  114 => 30,  104 => 36,  100 => 32,  78 => 25,  75 => 21,  71 => 23,  34 => 5,  44 => 8,  94 => 15,  88 => 28,  59 => 22,  105 => 34,  93 => 30,  79 => 23,  76 => 33,  72 => 32,  68 => 12,  58 => 15,  24 => 6,  27 => 4,  25 => 3,  21 => 2,  31 => 2,  26 => 2,  19 => 1,  70 => 19,  63 => 16,  46 => 12,  22 => 2,  163 => 58,  155 => 56,  152 => 77,  149 => 54,  145 => 73,  139 => 53,  131 => 67,  123 => 47,  120 => 46,  115 => 51,  106 => 53,  101 => 42,  96 => 21,  83 => 26,  80 => 14,  74 => 16,  66 => 21,  55 => 10,  52 => 11,  50 => 8,  43 => 8,  41 => 9,  37 => 3,  35 => 3,  32 => 7,  29 => 2,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 81,  157 => 56,  153 => 54,  151 => 73,  143 => 54,  138 => 71,  136 => 52,  133 => 46,  130 => 47,  122 => 48,  119 => 36,  116 => 35,  111 => 29,  108 => 42,  102 => 30,  98 => 22,  95 => 35,  92 => 28,  89 => 33,  85 => 27,  81 => 36,  73 => 21,  64 => 23,  60 => 17,  57 => 17,  54 => 12,  51 => 14,  48 => 9,  45 => 9,  42 => 5,  39 => 5,  36 => 4,  33 => 6,  30 => 3,);
    }
}
