<?php

/* Inra2013urzBundle:Default:IndexChercheur.html.twig */
class __TwigTemplate_024f5275779e422218921dc89e75292a extends Twig_Template
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
        echo "Bienvenue Administrateur";
    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"well\" >
    <ul class=\"nav nav-list\">
        <li class=\"active\"><a href=\"Inra2013urzBundle:Default:IndexAdmin.html.twig\"><i class=\"icon-home icon-white\"></i> Home</a></li>
        <li><a href=";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_CreateProtocole"), "html", null, true);
        echo "><i class=\"icon-file\"></i> Crée un protocole</a></li>
        <li><a href=><i class=\"icon-user\"></i></a></li>
        <li><a href=\"#\"><i class=\"icon-pencil\"></i> </a></li>
        <li><a href=\"#\"><i class=\"i\"></i></a></li>
    </ul>
</div>
";
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        echo " <h5>Vous êtes dans la partie chercheur</h5>";
    }

    public function getTemplateName()
    {
        return "Inra2013urzBundle:Default:IndexChercheur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 22,  158 => 57,  150 => 55,  146 => 54,  140 => 52,  99 => 32,  87 => 28,  77 => 24,  53 => 8,  40 => 4,  210 => 72,  199 => 61,  193 => 60,  182 => 54,  179 => 75,  174 => 8,  168 => 7,  110 => 43,  56 => 16,  23 => 3,  49 => 10,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 80,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 80,  112 => 37,  82 => 26,  65 => 16,  38 => 4,  144 => 50,  141 => 66,  135 => 49,  126 => 45,  109 => 36,  103 => 34,  67 => 19,  61 => 16,  47 => 8,  105 => 35,  93 => 34,  76 => 22,  72 => 14,  68 => 19,  27 => 4,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 59,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 56,  147 => 55,  132 => 48,  127 => 44,  121 => 40,  118 => 47,  114 => 45,  104 => 36,  100 => 33,  78 => 24,  75 => 23,  71 => 19,  58 => 17,  34 => 5,  91 => 20,  84 => 34,  94 => 30,  88 => 27,  79 => 23,  59 => 22,  26 => 2,  21 => 2,  28 => 3,  24 => 6,  44 => 9,  31 => 2,  25 => 3,  19 => 1,  70 => 22,  63 => 15,  46 => 7,  22 => 1,  163 => 63,  155 => 58,  152 => 49,  149 => 72,  145 => 46,  139 => 53,  131 => 42,  123 => 47,  120 => 46,  115 => 39,  106 => 35,  101 => 36,  96 => 21,  83 => 18,  80 => 29,  74 => 16,  66 => 18,  55 => 17,  52 => 15,  50 => 7,  43 => 6,  41 => 5,  37 => 3,  35 => 3,  32 => 7,  29 => 2,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 81,  157 => 56,  153 => 54,  151 => 73,  143 => 53,  138 => 51,  136 => 52,  133 => 43,  130 => 47,  122 => 48,  119 => 36,  116 => 35,  111 => 38,  108 => 42,  102 => 30,  98 => 22,  95 => 34,  92 => 28,  89 => 19,  85 => 31,  81 => 40,  73 => 19,  64 => 17,  60 => 16,  57 => 14,  54 => 12,  51 => 12,  48 => 11,  45 => 9,  42 => 8,  39 => 6,  36 => 5,  33 => 3,  30 => 3,);
    }
}
