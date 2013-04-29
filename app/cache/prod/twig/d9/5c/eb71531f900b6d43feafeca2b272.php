<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_d95ceb71531f900b6d43feafeca2b272 extends Twig_Template
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
        $this->env->loadTemplate("TwigBundle:Exception:exception.xml.twig")->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : null))));
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 39,  88 => 6,  79 => 39,  59 => 22,  43 => 7,  32 => 4,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  163 => 63,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 46,  121 => 45,  118 => 44,  114 => 43,  104 => 36,  100 => 34,  78 => 28,  75 => 27,  71 => 26,  63 => 24,  58 => 22,  34 => 11,  91 => 20,  84 => 19,  74 => 16,  66 => 15,  55 => 13,  41 => 15,  46 => 8,  26 => 4,  22 => 2,  27 => 4,  24 => 4,  29 => 3,  21 => 1,  44 => 10,  35 => 7,  31 => 6,  25 => 4,  19 => 1,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 60,  153 => 54,  151 => 53,  143 => 54,  138 => 51,  136 => 50,  133 => 43,  130 => 47,  122 => 37,  119 => 36,  116 => 35,  111 => 32,  108 => 31,  102 => 30,  98 => 29,  95 => 31,  92 => 27,  89 => 26,  85 => 24,  81 => 40,  73 => 19,  64 => 15,  60 => 23,  57 => 14,  54 => 11,  51 => 12,  48 => 14,  45 => 8,  42 => 6,  39 => 8,  36 => 7,  33 => 6,  30 => 3,);
    }
}
