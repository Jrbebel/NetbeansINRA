<?php

/* Inra2013urzBundle:Default:essai.html.twig */
class __TwigTemplate_0114b57c588973dcef80d7a76b7685a3 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "xls"), "getRowIterator", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["liste"]) {
            // line 9
            echo "        
        
 <tr class=\"success\">
";
            // line 12
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "liste"), "getCellIterator", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["xls"]) {
                // line 13
                echo "
         
        
        ";
                // line 16
                if (($this->getAttribute($this->getContext($context, "xls"), "getColumn", array(), "method") != "I")) {
                    // line 17
                    echo "        <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "xls"), "getCalculatedValue", array(), "method"), "html", null, true);
                    echo "</td>
        ";
                } else {
                    // line 19
                    echo "         <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "xls"), "getValue", array(), "method"), "html", null, true);
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
        return array (  69 => 21,  166 => 72,  150 => 67,  146 => 65,  129 => 61,  87 => 37,  188 => 77,  167 => 59,  137 => 47,  62 => 14,  53 => 11,  40 => 4,  128 => 71,  77 => 28,  23 => 3,  49 => 10,  210 => 72,  199 => 61,  193 => 60,  182 => 54,  179 => 53,  174 => 8,  168 => 7,  110 => 43,  56 => 16,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 80,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 80,  112 => 42,  82 => 30,  65 => 16,  38 => 6,  144 => 51,  141 => 66,  135 => 47,  126 => 45,  109 => 47,  103 => 43,  67 => 18,  61 => 9,  47 => 8,  91 => 38,  84 => 28,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 145,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 59,  186 => 76,  180 => 72,  172 => 76,  159 => 57,  154 => 68,  147 => 55,  132 => 48,  127 => 42,  121 => 55,  118 => 39,  114 => 30,  104 => 36,  100 => 32,  78 => 25,  75 => 21,  71 => 23,  34 => 5,  44 => 8,  94 => 15,  88 => 28,  59 => 22,  105 => 34,  93 => 30,  79 => 23,  76 => 33,  72 => 32,  68 => 12,  58 => 13,  24 => 6,  27 => 4,  25 => 3,  21 => 2,  31 => 4,  26 => 2,  19 => 1,  70 => 19,  63 => 19,  46 => 12,  22 => 2,  163 => 58,  155 => 56,  152 => 55,  149 => 54,  145 => 46,  139 => 53,  131 => 42,  123 => 47,  120 => 46,  115 => 51,  106 => 53,  101 => 42,  96 => 21,  83 => 26,  80 => 14,  74 => 16,  66 => 21,  55 => 16,  52 => 11,  50 => 13,  43 => 8,  41 => 9,  37 => 8,  35 => 5,  32 => 7,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 81,  157 => 56,  153 => 54,  151 => 73,  143 => 54,  138 => 63,  136 => 52,  133 => 46,  130 => 47,  122 => 48,  119 => 36,  116 => 35,  111 => 29,  108 => 42,  102 => 30,  98 => 22,  95 => 39,  92 => 28,  89 => 19,  85 => 27,  81 => 36,  73 => 19,  64 => 23,  60 => 17,  57 => 17,  54 => 12,  51 => 14,  48 => 11,  45 => 9,  42 => 5,  39 => 5,  36 => 3,  33 => 6,  30 => 2,);
    }
}
