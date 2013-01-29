<?php

/* Inra2013urzBundle:Default:IndexUser.html.twig */
class __TwigTemplate_a4da9aad9ae18d00c8f8aa970304bfa2 extends Twig_Template
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
        <li><a href=><i class=\" icon-plus\"></i> Créer</a></li>
        <li><a href=";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_UploadFile"), "html", null, true);
        echo "><i class=\" icon-folder-open\"></i> Importer</a></li>
        <li><a href=><i class=\" icon-download-alt\"></i> Exporter</a></li>
        <li><a href=><i class=\"icon-pencil\"></i> Modifier</a></li>
        
    </ul>
</div>
";
    }

    // line 16
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
        return array (  69 => 21,  207 => 78,  202 => 70,  181 => 57,  174 => 52,  166 => 8,  128 => 50,  110 => 45,  97 => 39,  77 => 29,  62 => 20,  56 => 16,  23 => 3,  49 => 10,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 58,  183 => 60,  177 => 58,  160 => 7,  112 => 42,  82 => 24,  65 => 16,  38 => 4,  144 => 50,  141 => 70,  135 => 47,  126 => 45,  109 => 41,  103 => 34,  67 => 19,  61 => 16,  47 => 11,  105 => 24,  93 => 20,  76 => 22,  72 => 27,  68 => 12,  27 => 4,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 59,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 79,  147 => 55,  132 => 48,  127 => 49,  121 => 45,  118 => 44,  114 => 46,  104 => 36,  100 => 40,  78 => 25,  75 => 23,  71 => 19,  58 => 19,  34 => 5,  91 => 20,  84 => 28,  94 => 39,  88 => 27,  79 => 23,  59 => 16,  26 => 2,  21 => 2,  28 => 7,  24 => 6,  44 => 9,  31 => 4,  25 => 3,  19 => 1,  70 => 15,  63 => 19,  46 => 12,  22 => 1,  163 => 63,  155 => 58,  152 => 78,  149 => 51,  145 => 46,  139 => 50,  131 => 51,  123 => 47,  120 => 46,  115 => 39,  106 => 43,  101 => 36,  96 => 21,  83 => 18,  80 => 24,  74 => 28,  66 => 15,  55 => 16,  52 => 15,  50 => 13,  43 => 7,  41 => 9,  37 => 8,  35 => 3,  32 => 13,  29 => 2,  184 => 70,  178 => 71,  171 => 51,  165 => 58,  162 => 57,  157 => 56,  153 => 54,  151 => 52,  143 => 71,  138 => 51,  136 => 50,  133 => 64,  130 => 47,  122 => 44,  119 => 47,  116 => 35,  111 => 38,  108 => 37,  102 => 41,  98 => 22,  95 => 34,  92 => 28,  89 => 19,  85 => 27,  81 => 40,  73 => 19,  64 => 17,  60 => 17,  57 => 17,  54 => 12,  51 => 9,  48 => 9,  45 => 9,  42 => 8,  39 => 5,  36 => 4,  33 => 3,  30 => 3,);
    }
}
