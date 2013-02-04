<?php

/* Inra2013urzBundle:Registration:save.html.twig */
class __TwigTemplate_bc67989f304e273241915b3d1332e613 extends Twig_Template
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
        if (((isset($context["Status"]) ? $context["Status"] : null) == "Create")) {
            // line 8
            echo "
<div class=\"alert alert-success\">
    <h5> Votre nouveau agent est enregistré </h5>
</div>

";
        } elseif (((isset($context["Status"]) ? $context["Status"] : null) == "Update")) {
            // line 14
            echo "<div class=\"alert alert-success\">
    <h5> Votre agent à bien été modifié </h5>
</div>
";
        } elseif (((isset($context["Status"]) ? $context["Status"] : null) == "Delete")) {
            // line 18
            echo "<div class=\"alert alert-success\">
    <h5> Votre agent à bien été supprimé </h5>
</div>
";
        } elseif (((isset($context["Status"]) ? $context["Status"] : null) == "SauvegardeExcel")) {
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
        return array (  166 => 72,  150 => 67,  146 => 65,  129 => 61,  115 => 51,  90 => 29,  87 => 37,  307 => 142,  297 => 134,  294 => 133,  288 => 129,  278 => 122,  254 => 113,  250 => 111,  242 => 108,  236 => 106,  232 => 104,  229 => 103,  226 => 102,  223 => 101,  219 => 100,  217 => 99,  213 => 98,  206 => 96,  200 => 94,  195 => 91,  175 => 89,  142 => 77,  128 => 71,  124 => 69,  53 => 17,  40 => 4,  69 => 19,  37 => 3,  210 => 97,  199 => 61,  193 => 60,  182 => 54,  179 => 53,  174 => 8,  168 => 87,  110 => 43,  80 => 26,  56 => 18,  23 => 3,  49 => 10,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 116,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 80,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 80,  149 => 72,  123 => 47,  120 => 43,  112 => 42,  106 => 36,  82 => 30,  65 => 16,  38 => 6,  155 => 58,  144 => 78,  141 => 66,  139 => 53,  135 => 75,  126 => 45,  109 => 47,  103 => 43,  101 => 42,  70 => 22,  67 => 18,  61 => 16,  47 => 14,  105 => 41,  96 => 21,  93 => 34,  83 => 18,  76 => 33,  72 => 32,  68 => 12,  50 => 8,  27 => 4,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 59,  186 => 76,  180 => 72,  172 => 76,  163 => 63,  159 => 61,  154 => 68,  147 => 79,  132 => 48,  127 => 49,  121 => 55,  118 => 47,  114 => 45,  104 => 35,  100 => 33,  78 => 25,  75 => 23,  71 => 19,  63 => 20,  58 => 17,  34 => 5,  91 => 38,  84 => 28,  74 => 24,  66 => 21,  55 => 10,  94 => 39,  88 => 27,  79 => 23,  59 => 16,  26 => 2,  21 => 2,  46 => 12,  29 => 3,  22 => 3,  43 => 8,  41 => 7,  28 => 6,  24 => 4,  32 => 7,  44 => 13,  35 => 5,  31 => 2,  25 => 3,  19 => 2,  184 => 70,  178 => 90,  171 => 62,  165 => 58,  162 => 83,  157 => 56,  153 => 80,  151 => 73,  143 => 54,  138 => 63,  136 => 52,  133 => 43,  130 => 47,  122 => 48,  119 => 36,  116 => 35,  111 => 32,  108 => 42,  102 => 30,  98 => 22,  95 => 39,  92 => 30,  89 => 19,  85 => 27,  81 => 36,  73 => 21,  64 => 23,  60 => 19,  57 => 18,  54 => 12,  51 => 14,  48 => 9,  45 => 9,  42 => 12,  39 => 11,  36 => 4,  33 => 8,  30 => 7,);
    }
}
