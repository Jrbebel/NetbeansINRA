<?php

/* Inra2013urzBundle:Default:IndexAdmin.html.twig */
class __TwigTemplate_db9288492e18c85f054fc08b22d9e149 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013urzBundle_ShowAgent", array("Default" => "Default")), "html", null, true);
        echo "><i class=\"icon-user\"></i>Liste des agents</a></li>
        <li><a href=";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013urzBundle_CreateAgent"), "html", null, true);
        echo "><i class=\"icon-user\"></i>Crée un agent</a></li>
        <li><a href=\"#\"><i class=\"icon-pencil\"></i> Applications</a></li>
        <li><a href=\"#\"><i class=\"i\"></i> Misc</a></li>
    </ul>
</div>
";
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        echo " <h5>Vous êtes dans la partie administrateur</h5>";
    }

    public function getTemplateName()
    {
        return "Inra2013urzBundle:Default:IndexAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 16,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  149 => 51,  123 => 47,  120 => 46,  112 => 42,  106 => 35,  82 => 24,  65 => 16,  38 => 6,  155 => 58,  144 => 50,  141 => 51,  139 => 50,  135 => 47,  126 => 45,  109 => 41,  103 => 34,  101 => 36,  70 => 20,  67 => 19,  61 => 16,  47 => 9,  28 => 3,  105 => 24,  96 => 21,  93 => 20,  83 => 18,  76 => 22,  72 => 14,  68 => 12,  50 => 10,  94 => 39,  88 => 27,  79 => 23,  59 => 22,  43 => 6,  32 => 4,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  163 => 63,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 49,  121 => 45,  118 => 44,  114 => 42,  104 => 36,  100 => 33,  78 => 24,  75 => 23,  71 => 19,  63 => 24,  58 => 17,  34 => 11,  91 => 20,  84 => 28,  74 => 16,  66 => 15,  55 => 15,  41 => 7,  46 => 7,  26 => 2,  22 => 1,  27 => 6,  24 => 6,  29 => 2,  21 => 1,  44 => 9,  35 => 5,  31 => 4,  25 => 4,  19 => 1,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 56,  153 => 54,  151 => 52,  143 => 54,  138 => 51,  136 => 50,  133 => 43,  130 => 47,  122 => 44,  119 => 36,  116 => 35,  111 => 32,  108 => 31,  102 => 30,  98 => 22,  95 => 34,  92 => 28,  89 => 19,  85 => 24,  81 => 40,  73 => 19,  64 => 17,  60 => 17,  57 => 14,  54 => 10,  51 => 9,  48 => 10,  45 => 8,  42 => 8,  39 => 6,  36 => 5,  33 => 3,  30 => 3,);
    }
}
