<?php

/* Inra2013urzBundle:Default:index.html.twig */
class __TwigTemplate_c3407736c1859bba28caf83bb41c77b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Bienvenue";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "Bienvenue sur l'application Resultinra permettant de collecter les resultats d'analyse

";
    }

    public function getTemplateName()
    {
        return "Inra2013urzBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 21,  166 => 72,  129 => 61,  158 => 57,  150 => 67,  146 => 65,  140 => 52,  87 => 37,  53 => 8,  40 => 4,  203 => 143,  107 => 52,  99 => 32,  77 => 24,  23 => 3,  49 => 10,  210 => 72,  199 => 61,  193 => 60,  182 => 54,  179 => 75,  174 => 8,  168 => 7,  110 => 43,  56 => 11,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 80,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 80,  112 => 37,  82 => 26,  65 => 16,  38 => 4,  144 => 50,  141 => 66,  135 => 49,  126 => 69,  109 => 47,  103 => 43,  67 => 19,  61 => 16,  47 => 8,  91 => 38,  84 => 28,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 59,  186 => 76,  180 => 72,  172 => 76,  159 => 61,  154 => 68,  147 => 55,  132 => 48,  127 => 44,  121 => 55,  118 => 47,  114 => 45,  104 => 51,  100 => 33,  78 => 25,  75 => 23,  71 => 23,  34 => 5,  44 => 9,  94 => 30,  88 => 27,  59 => 22,  105 => 35,  93 => 34,  79 => 23,  76 => 33,  72 => 32,  68 => 19,  58 => 13,  24 => 6,  27 => 4,  25 => 3,  21 => 2,  31 => 4,  26 => 2,  19 => 1,  70 => 18,  63 => 19,  46 => 12,  22 => 2,  163 => 63,  155 => 58,  152 => 49,  149 => 72,  145 => 46,  139 => 53,  131 => 42,  123 => 47,  120 => 46,  115 => 51,  106 => 35,  101 => 42,  96 => 21,  83 => 18,  80 => 29,  74 => 16,  66 => 18,  55 => 16,  52 => 10,  50 => 13,  43 => 8,  41 => 9,  37 => 8,  35 => 3,  32 => 7,  29 => 2,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 81,  157 => 56,  153 => 54,  151 => 73,  143 => 53,  138 => 63,  136 => 52,  133 => 43,  130 => 47,  122 => 48,  119 => 36,  116 => 35,  111 => 38,  108 => 42,  102 => 30,  98 => 22,  95 => 39,  92 => 28,  89 => 19,  85 => 27,  81 => 36,  73 => 19,  64 => 23,  60 => 12,  57 => 17,  54 => 12,  51 => 14,  48 => 11,  45 => 9,  42 => 5,  39 => 5,  36 => 4,  33 => 6,  30 => 3,);
    }
}
