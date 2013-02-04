<?php

/* Inra2013urzBundle:Default:IndexResponsable.html.twig */
class __TwigTemplate_eea8d40abaf88e5fea8bbdbdba373be5 extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Bienvenue Responsable";
    }

    // line 5
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
        return array (  69 => 21,  37 => 8,  210 => 72,  199 => 61,  193 => 60,  182 => 54,  179 => 53,  174 => 8,  168 => 7,  110 => 43,  80 => 29,  56 => 16,  23 => 3,  49 => 10,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 80,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 80,  149 => 72,  123 => 47,  120 => 46,  112 => 42,  106 => 35,  82 => 30,  65 => 16,  38 => 6,  155 => 58,  144 => 50,  141 => 66,  139 => 53,  135 => 47,  126 => 45,  109 => 41,  103 => 34,  101 => 36,  70 => 22,  67 => 19,  61 => 16,  47 => 11,  105 => 41,  96 => 21,  93 => 34,  83 => 18,  76 => 22,  72 => 14,  68 => 12,  50 => 13,  27 => 4,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 59,  186 => 76,  180 => 72,  172 => 67,  163 => 63,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 49,  121 => 45,  118 => 47,  114 => 45,  104 => 36,  100 => 33,  78 => 25,  75 => 23,  71 => 19,  63 => 19,  58 => 17,  34 => 5,  91 => 20,  84 => 28,  74 => 16,  66 => 21,  55 => 16,  94 => 39,  88 => 27,  79 => 23,  59 => 22,  26 => 2,  21 => 2,  46 => 12,  29 => 3,  22 => 1,  43 => 10,  41 => 9,  28 => 3,  24 => 6,  32 => 7,  44 => 9,  35 => 5,  31 => 4,  25 => 3,  19 => 1,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 81,  157 => 56,  153 => 54,  151 => 73,  143 => 54,  138 => 51,  136 => 52,  133 => 43,  130 => 47,  122 => 48,  119 => 36,  116 => 35,  111 => 32,  108 => 42,  102 => 30,  98 => 22,  95 => 34,  92 => 28,  89 => 19,  85 => 27,  81 => 40,  73 => 19,  64 => 17,  60 => 17,  57 => 17,  54 => 12,  51 => 12,  48 => 11,  45 => 9,  42 => 8,  39 => 6,  36 => 5,  33 => 3,  30 => 1,);
    }
}
