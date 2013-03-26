<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_5ce98c47f52c47761cf4f3cce2638244 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "message"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "html", null, true);
        echo ")
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->env->loadTemplate("TwigBundle:Exception:exception.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  32 => 4,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  163 => 63,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 46,  121 => 45,  118 => 44,  114 => 43,  104 => 36,  100 => 34,  78 => 28,  75 => 27,  71 => 26,  63 => 24,  58 => 22,  34 => 11,  91 => 20,  84 => 19,  74 => 16,  66 => 15,  55 => 13,  41 => 15,  46 => 8,  26 => 6,  22 => 2,  27 => 4,  24 => 4,  29 => 3,  21 => 2,  44 => 10,  35 => 4,  31 => 5,  25 => 4,  19 => 1,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 60,  153 => 54,  151 => 53,  143 => 54,  138 => 51,  136 => 50,  133 => 43,  130 => 47,  122 => 37,  119 => 36,  116 => 35,  111 => 32,  108 => 31,  102 => 30,  98 => 29,  95 => 31,  92 => 27,  89 => 26,  85 => 24,  81 => 22,  73 => 19,  64 => 15,  60 => 23,  57 => 14,  54 => 11,  51 => 12,  48 => 19,  45 => 8,  42 => 6,  39 => 6,  36 => 7,  33 => 6,  30 => 3,);
    }
}
