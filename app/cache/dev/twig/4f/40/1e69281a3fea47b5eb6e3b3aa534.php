<?php

/* Inra2013urzBundle:Default:essai.html.twig */
class __TwigTemplate_4f401e69281a3fea47b5eb6e3b3aa534 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
<h1>Essai </h1>

<table class=\"table\">
";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["xls"]) ? $context["xls"] : $this->getContext($context, "xls")), "getRowIterator", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["liste"]) {
            // line 9
            echo "        
        
 <tr class=\"success\">
";
            // line 12
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste")), "getCellIterator", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["xls"]) {
                // line 13
                echo "
         
        
        ";
                // line 16
                if (($this->getAttribute((isset($context["xls"]) ? $context["xls"] : $this->getContext($context, "xls")), "getColumn", array(), "method") != "I")) {
                    // line 17
                    echo "        <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["xls"]) ? $context["xls"] : $this->getContext($context, "xls")), "getCalculatedValue", array(), "method"), "html", null, true);
                    echo "</td>
        ";
                } else {
                    // line 19
                    echo "         <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["xls"]) ? $context["xls"] : $this->getContext($context, "xls")), "getValue", array(), "method"), "html", null, true);
                    echo "</td>
        ";
                }
                // line 21
                echo "

 
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['xls'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 25
            echo "</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['liste'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 27
        echo "
</table>
";
    }

    public function getTemplateName()
    {
        return "Inra2013urzBundle:Default:essai.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 21,  158 => 57,  150 => 55,  146 => 54,  140 => 52,  99 => 32,  87 => 28,  77 => 24,  53 => 8,  40 => 4,  210 => 72,  199 => 61,  193 => 60,  182 => 54,  179 => 75,  174 => 8,  168 => 7,  110 => 43,  56 => 16,  23 => 3,  49 => 10,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 80,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 80,  112 => 37,  82 => 26,  65 => 16,  38 => 4,  144 => 50,  141 => 66,  135 => 49,  126 => 45,  109 => 36,  103 => 34,  67 => 19,  61 => 16,  47 => 8,  105 => 35,  93 => 34,  76 => 22,  72 => 14,  68 => 19,  27 => 4,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 59,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 56,  147 => 55,  132 => 48,  127 => 44,  121 => 40,  118 => 47,  114 => 45,  104 => 36,  100 => 33,  78 => 25,  75 => 23,  71 => 19,  58 => 17,  34 => 5,  91 => 20,  84 => 34,  94 => 30,  88 => 27,  79 => 23,  59 => 22,  26 => 2,  21 => 2,  28 => 3,  24 => 6,  44 => 9,  31 => 4,  25 => 3,  19 => 1,  70 => 22,  63 => 19,  46 => 12,  22 => 1,  163 => 63,  155 => 58,  152 => 49,  149 => 72,  145 => 46,  139 => 53,  131 => 42,  123 => 47,  120 => 46,  115 => 39,  106 => 35,  101 => 36,  96 => 21,  83 => 18,  80 => 29,  74 => 16,  66 => 18,  55 => 16,  52 => 15,  50 => 13,  43 => 6,  41 => 9,  37 => 8,  35 => 3,  32 => 7,  29 => 2,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 81,  157 => 56,  153 => 54,  151 => 73,  143 => 53,  138 => 51,  136 => 52,  133 => 43,  130 => 47,  122 => 48,  119 => 36,  116 => 35,  111 => 38,  108 => 42,  102 => 30,  98 => 22,  95 => 34,  92 => 28,  89 => 19,  85 => 27,  81 => 40,  73 => 19,  64 => 17,  60 => 16,  57 => 17,  54 => 12,  51 => 12,  48 => 11,  45 => 9,  42 => 8,  39 => 6,  36 => 5,  33 => 3,  30 => 3,);
    }
}
