<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_58b326a2a2f1cc250b8eebe8ceef235f extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "html", null, true);
        echo "

*/
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 20,  84 => 19,  74 => 16,  66 => 15,  55 => 13,  94 => 39,  88 => 6,  79 => 39,  59 => 22,  26 => 4,  21 => 2,  46 => 11,  29 => 3,  22 => 2,  43 => 7,  41 => 9,  28 => 3,  24 => 2,  32 => 4,  44 => 10,  35 => 7,  31 => 5,  25 => 4,  19 => 1,  184 => 70,  178 => 66,  171 => 62,  165 => 58,  162 => 57,  157 => 56,  153 => 54,  151 => 53,  143 => 48,  138 => 45,  136 => 44,  133 => 43,  130 => 42,  122 => 37,  119 => 36,  116 => 35,  111 => 32,  108 => 31,  102 => 30,  98 => 29,  95 => 28,  92 => 27,  89 => 26,  85 => 24,  81 => 40,  73 => 19,  64 => 15,  60 => 13,  57 => 14,  54 => 11,  51 => 12,  48 => 14,  45 => 8,  42 => 6,  39 => 8,  36 => 7,  33 => 4,  30 => 3,);
    }
}