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
        return array (  90 => 29,  87 => 28,  53 => 17,  49 => 10,  23 => 3,  210 => 72,  199 => 61,  193 => 60,  182 => 54,  179 => 53,  174 => 8,  168 => 7,  110 => 43,  56 => 18,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 80,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 80,  112 => 42,  82 => 30,  65 => 16,  38 => 6,  144 => 50,  141 => 66,  135 => 47,  126 => 45,  109 => 37,  103 => 34,  67 => 19,  61 => 16,  47 => 14,  28 => 6,  105 => 41,  93 => 34,  76 => 22,  72 => 14,  68 => 12,  94 => 39,  88 => 27,  79 => 23,  59 => 22,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 59,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 49,  121 => 45,  118 => 47,  114 => 45,  104 => 35,  100 => 33,  78 => 24,  75 => 23,  71 => 19,  58 => 13,  34 => 5,  91 => 20,  84 => 28,  26 => 2,  27 => 4,  24 => 4,  21 => 1,  44 => 13,  31 => 4,  25 => 3,  19 => 2,  70 => 19,  63 => 20,  46 => 7,  22 => 3,  163 => 63,  155 => 58,  152 => 49,  149 => 72,  145 => 46,  139 => 53,  131 => 42,  123 => 47,  120 => 43,  115 => 40,  106 => 36,  101 => 34,  96 => 21,  83 => 18,  80 => 26,  74 => 24,  66 => 21,  55 => 13,  52 => 15,  50 => 8,  43 => 8,  41 => 7,  37 => 8,  35 => 5,  32 => 7,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 81,  157 => 56,  153 => 54,  151 => 73,  143 => 54,  138 => 51,  136 => 52,  133 => 43,  130 => 47,  122 => 48,  119 => 36,  116 => 35,  111 => 38,  108 => 42,  102 => 30,  98 => 22,  95 => 31,  92 => 30,  89 => 19,  85 => 31,  81 => 40,  73 => 19,  64 => 23,  60 => 19,  57 => 18,  54 => 12,  51 => 14,  48 => 11,  45 => 9,  42 => 12,  39 => 11,  36 => 6,  33 => 8,  30 => 7,);
    }
}
