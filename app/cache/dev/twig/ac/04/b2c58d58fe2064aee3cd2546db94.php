<?php

/* TwigBundle:Exception:exception.txt.twig */
class __TwigTemplate_ac04b2c58d58fe2064aee3cd2546db94 extends Twig_Template
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
        echo "[exception] ";
        echo twig_escape_filter($this->env, (((((isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")) . " | ") . (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"))) . " | ") . $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "class")), "html", null, true);
        echo "
[message] ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message"), "html", null, true);
        echo "
";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray"));
        foreach ($context['_seq'] as $context["i"] => $context["e"]) {
            // line 4
            echo "[";
            echo twig_escape_filter($this->env, ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1), "html", null, true);
            echo "] ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "class"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "message"), "html", null, true);
            echo "
";
            // line 5
            $this->env->loadTemplate("TwigBundle:Exception:traces.txt.twig")->display(array("exception" => (isset($context["e"]) ? $context["e"] : $this->getContext($context, "e"))));
            // line 6
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  24 => 2,  44 => 7,  31 => 4,  25 => 5,  19 => 1,  70 => 14,  63 => 9,  46 => 14,  22 => 1,  163 => 32,  155 => 50,  152 => 49,  149 => 48,  145 => 46,  139 => 45,  131 => 42,  123 => 41,  120 => 40,  115 => 39,  106 => 36,  101 => 33,  96 => 31,  83 => 25,  80 => 24,  74 => 22,  66 => 20,  55 => 16,  52 => 15,  50 => 14,  43 => 6,  41 => 5,  37 => 8,  35 => 5,  32 => 4,  29 => 6,  184 => 70,  178 => 66,  171 => 62,  165 => 58,  162 => 57,  157 => 56,  153 => 54,  151 => 53,  143 => 48,  138 => 45,  136 => 44,  133 => 43,  130 => 42,  122 => 37,  119 => 36,  116 => 35,  111 => 38,  108 => 37,  102 => 30,  98 => 32,  95 => 28,  92 => 29,  89 => 26,  85 => 24,  81 => 22,  73 => 19,  64 => 19,  60 => 8,  57 => 12,  54 => 6,  51 => 9,  48 => 15,  45 => 8,  42 => 6,  39 => 11,  36 => 5,  33 => 7,  30 => 3,);
    }
}
