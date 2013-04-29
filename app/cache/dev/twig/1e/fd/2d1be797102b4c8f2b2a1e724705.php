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
        if (((isset($context["Status"]) ? $context["Status"] : $this->getContext($context, "Status")) == "Create")) {
            // line 8
            echo "
<div class=\"alert alert-success\">
    <h5> Votre nouveau agent est enregistré </h5>
</div>

";
        } elseif (((isset($context["Status"]) ? $context["Status"] : $this->getContext($context, "Status")) == "Update")) {
            // line 14
            echo "<div class=\"alert alert-success\">
    <h5> Votre agent à bien été modifié </h5>
</div>
";
        } elseif (((isset($context["Status"]) ? $context["Status"] : $this->getContext($context, "Status")) == "Delete")) {
            // line 18
            echo "<div class=\"alert alert-success\">
    <h5> Votre agent à bien été supprimé </h5>
</div>
";
        } elseif (((isset($context["Status"]) ? $context["Status"] : $this->getContext($context, "Status")) == "SauvegardeExcel")) {
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
        return array (  90 => 29,  53 => 17,  49 => 12,  77 => 23,  23 => 3,  255 => 86,  250 => 77,  243 => 75,  241 => 74,  238 => 73,  234 => 68,  231 => 67,  214 => 61,  210 => 60,  203 => 55,  200 => 54,  195 => 8,  164 => 87,  129 => 50,  124 => 49,  110 => 43,  107 => 42,  87 => 28,  56 => 18,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 62,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  112 => 44,  82 => 30,  65 => 17,  38 => 6,  144 => 50,  141 => 54,  135 => 47,  126 => 45,  109 => 37,  103 => 34,  67 => 19,  61 => 16,  47 => 14,  28 => 6,  105 => 24,  93 => 20,  76 => 22,  72 => 23,  68 => 22,  94 => 39,  88 => 27,  79 => 23,  59 => 22,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 7,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 49,  121 => 45,  118 => 44,  114 => 42,  104 => 35,  100 => 33,  78 => 24,  75 => 23,  71 => 19,  58 => 12,  34 => 5,  91 => 20,  84 => 31,  26 => 11,  27 => 4,  24 => 4,  21 => 1,  44 => 13,  31 => 4,  25 => 1,  19 => 2,  70 => 19,  63 => 20,  46 => 11,  22 => 3,  163 => 63,  155 => 58,  152 => 49,  149 => 51,  145 => 69,  139 => 50,  131 => 42,  123 => 47,  120 => 43,  115 => 40,  106 => 36,  101 => 34,  96 => 21,  83 => 26,  80 => 26,  74 => 24,  66 => 21,  55 => 14,  52 => 12,  50 => 8,  43 => 8,  41 => 7,  37 => 8,  35 => 5,  32 => 4,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 86,  157 => 56,  153 => 79,  151 => 73,  143 => 67,  138 => 53,  136 => 50,  133 => 43,  130 => 47,  122 => 44,  119 => 36,  116 => 46,  111 => 38,  108 => 37,  102 => 30,  98 => 22,  95 => 31,  92 => 30,  89 => 19,  85 => 24,  81 => 40,  73 => 19,  64 => 23,  60 => 19,  57 => 18,  54 => 10,  51 => 14,  48 => 11,  45 => 8,  42 => 12,  39 => 11,  36 => 6,  33 => 8,  30 => 7,);
    }
}
