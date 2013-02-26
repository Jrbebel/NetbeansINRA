<?php

/* Inra2013urzBundle:Registration:save.html.twig */
class __TwigTemplate_1efd2d1be797102b4c8f2b2a1e724705 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("Inra2013urzBundle:Default:IndexAdmin.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Inra2013urzBundle:Default:IndexAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Gestion des Agents";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
";
        // line 7
        if (($this->getContext($context, "Status") == "Create")) {
            // line 8
            echo "
<div class=\"alert alert-success\">
    <h5> Votre nouveau agent est enregistré </h5>
</div>

";
        } elseif (($this->getContext($context, "Status") == "Update")) {
            // line 14
            echo "<div class=\"alert alert-success\">
    <h5> Votre agent à bien été modifié </h5>
</div>
";
        } elseif (($this->getContext($context, "Status") == "Delete")) {
            // line 18
            echo "<div class=\"alert alert-success\">
    <h5> Votre agent à bien été supprimé </h5>
</div>
";
        } elseif (($this->getContext($context, "Status") == "SauvegardeExcel")) {
        }
        // line 23
        echo "

";
    }

    public function getTemplateName()
    {
        return "Inra2013urzBundle:Registration:save.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 72,  150 => 67,  146 => 65,  129 => 61,  87 => 37,  188 => 77,  167 => 59,  137 => 47,  62 => 14,  53 => 11,  40 => 4,  128 => 71,  77 => 28,  23 => 3,  49 => 10,  210 => 72,  199 => 61,  193 => 60,  182 => 54,  179 => 53,  174 => 8,  168 => 7,  110 => 43,  56 => 16,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 80,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 80,  112 => 42,  82 => 30,  65 => 16,  38 => 6,  144 => 51,  141 => 66,  135 => 47,  126 => 45,  109 => 47,  103 => 43,  67 => 18,  61 => 9,  47 => 8,  91 => 38,  84 => 28,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 145,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 59,  186 => 76,  180 => 72,  172 => 76,  159 => 57,  154 => 68,  147 => 55,  132 => 48,  127 => 42,  121 => 55,  118 => 39,  114 => 30,  104 => 36,  100 => 32,  78 => 24,  75 => 21,  71 => 23,  34 => 5,  44 => 8,  94 => 15,  88 => 28,  59 => 22,  105 => 34,  93 => 30,  79 => 23,  76 => 33,  72 => 32,  68 => 12,  58 => 13,  24 => 6,  27 => 4,  25 => 3,  21 => 2,  31 => 2,  26 => 2,  19 => 1,  70 => 19,  63 => 17,  46 => 7,  22 => 2,  163 => 58,  155 => 56,  152 => 55,  149 => 54,  145 => 46,  139 => 53,  131 => 42,  123 => 47,  120 => 46,  115 => 51,  106 => 53,  101 => 42,  96 => 21,  83 => 26,  80 => 14,  74 => 16,  66 => 21,  55 => 17,  52 => 11,  50 => 7,  43 => 8,  41 => 7,  37 => 3,  35 => 5,  32 => 7,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 81,  157 => 56,  153 => 54,  151 => 73,  143 => 54,  138 => 63,  136 => 52,  133 => 46,  130 => 47,  122 => 48,  119 => 36,  116 => 35,  111 => 29,  108 => 42,  102 => 30,  98 => 22,  95 => 39,  92 => 28,  89 => 19,  85 => 31,  81 => 36,  73 => 19,  64 => 23,  60 => 17,  57 => 18,  54 => 12,  51 => 14,  48 => 11,  45 => 9,  42 => 5,  39 => 5,  36 => 3,  33 => 6,  30 => 2,);
    }
}
