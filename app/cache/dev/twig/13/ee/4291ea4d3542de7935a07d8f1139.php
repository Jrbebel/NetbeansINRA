<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_13ee4291ea4d3542de7935a07d8f1139 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "/*
";
        // line 2
        $this->env->loadTemplate("TwigBundle:Exception:exception.txt.twig")->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  105 => 24,  93 => 20,  76 => 16,  72 => 14,  68 => 12,  94 => 39,  88 => 6,  79 => 17,  59 => 22,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 46,  121 => 45,  118 => 44,  114 => 43,  104 => 36,  100 => 34,  78 => 28,  75 => 27,  71 => 26,  58 => 9,  34 => 11,  91 => 20,  84 => 19,  26 => 4,  27 => 4,  24 => 3,  21 => 1,  44 => 10,  31 => 6,  25 => 4,  19 => 1,  70 => 14,  63 => 24,  46 => 8,  22 => 2,  163 => 63,  155 => 50,  152 => 49,  149 => 48,  145 => 46,  139 => 45,  131 => 42,  123 => 41,  120 => 40,  115 => 39,  106 => 36,  101 => 33,  96 => 21,  83 => 18,  80 => 24,  74 => 16,  66 => 15,  55 => 13,  52 => 15,  50 => 8,  43 => 6,  41 => 5,  37 => 8,  35 => 7,  32 => 4,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 60,  153 => 54,  151 => 53,  143 => 54,  138 => 51,  136 => 50,  133 => 43,  130 => 47,  122 => 37,  119 => 36,  116 => 35,  111 => 38,  108 => 37,  102 => 30,  98 => 22,  95 => 31,  92 => 29,  89 => 19,  85 => 24,  81 => 40,  73 => 19,  64 => 19,  60 => 23,  57 => 14,  54 => 6,  51 => 12,  48 => 14,  45 => 8,  42 => 6,  39 => 6,  36 => 7,  33 => 5,  30 => 3,);
    }
}
