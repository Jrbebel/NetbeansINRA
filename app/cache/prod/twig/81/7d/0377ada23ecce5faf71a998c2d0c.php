<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_817d0377ada23ecce5faf71a998c2d0c extends Twig_Template
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
        echo "        <traces>
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "trace"));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->env->loadTemplate("TwigBundle:Exception:trace.txt.twig")->display(array("trace" => (isset($context["trace"]) ? $context["trace"] : null)));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 8
        echo "        </traces>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  163 => 63,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 46,  121 => 45,  118 => 44,  114 => 43,  104 => 36,  100 => 34,  78 => 28,  75 => 27,  71 => 26,  63 => 24,  58 => 22,  34 => 11,  91 => 20,  84 => 19,  74 => 16,  66 => 15,  55 => 13,  94 => 39,  88 => 6,  79 => 39,  59 => 22,  26 => 3,  21 => 2,  46 => 7,  29 => 4,  22 => 2,  43 => 7,  41 => 15,  28 => 3,  24 => 2,  32 => 4,  44 => 10,  35 => 7,  31 => 5,  25 => 4,  19 => 1,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 60,  153 => 54,  151 => 53,  143 => 54,  138 => 51,  136 => 50,  133 => 43,  130 => 47,  122 => 37,  119 => 36,  116 => 35,  111 => 32,  108 => 31,  102 => 30,  98 => 29,  95 => 31,  92 => 27,  89 => 26,  85 => 24,  81 => 40,  73 => 19,  64 => 15,  60 => 23,  57 => 14,  54 => 11,  51 => 12,  48 => 19,  45 => 8,  42 => 6,  39 => 8,  36 => 7,  33 => 6,  30 => 3,);
    }
}
