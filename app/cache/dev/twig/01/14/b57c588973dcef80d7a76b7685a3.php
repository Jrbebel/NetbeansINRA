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
        return array (  315 => 140,  308 => 135,  305 => 134,  299 => 130,  288 => 122,  284 => 121,  261 => 113,  257 => 111,  243 => 106,  239 => 104,  236 => 103,  226 => 100,  224 => 99,  213 => 96,  207 => 94,  202 => 91,  175 => 87,  69 => 21,  167 => 59,  137 => 47,  40 => 4,  128 => 71,  77 => 28,  456 => 151,  453 => 150,  435 => 136,  418 => 132,  408 => 125,  392 => 122,  385 => 120,  381 => 118,  377 => 117,  374 => 116,  367 => 114,  361 => 111,  358 => 110,  350 => 107,  347 => 106,  345 => 105,  338 => 103,  334 => 102,  330 => 101,  326 => 99,  309 => 98,  300 => 91,  291 => 90,  265 => 74,  248 => 70,  241 => 68,  237 => 66,  233 => 102,  223 => 62,  217 => 97,  214 => 58,  206 => 55,  203 => 54,  188 => 77,  140 => 34,  125 => 25,  99 => 20,  62 => 14,  166 => 72,  150 => 67,  146 => 65,  129 => 61,  90 => 29,  87 => 32,  53 => 9,  49 => 10,  23 => 3,  210 => 72,  199 => 61,  193 => 60,  182 => 89,  179 => 44,  174 => 8,  168 => 82,  110 => 43,  56 => 18,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 89,  282 => 90,  276 => 115,  273 => 80,  270 => 84,  268 => 83,  263 => 80,  249 => 108,  245 => 77,  230 => 101,  222 => 73,  220 => 98,  215 => 80,  211 => 69,  204 => 66,  198 => 63,  185 => 90,  183 => 46,  177 => 58,  160 => 80,  112 => 42,  82 => 30,  65 => 13,  38 => 6,  144 => 51,  141 => 66,  135 => 47,  126 => 45,  109 => 54,  103 => 43,  67 => 18,  61 => 16,  47 => 7,  28 => 3,  105 => 34,  93 => 30,  76 => 33,  72 => 20,  68 => 12,  94 => 39,  88 => 28,  79 => 23,  59 => 22,  225 => 96,  216 => 90,  212 => 88,  205 => 145,  201 => 53,  196 => 80,  194 => 51,  191 => 78,  189 => 59,  186 => 76,  180 => 72,  172 => 76,  159 => 79,  154 => 68,  147 => 74,  132 => 48,  127 => 65,  121 => 55,  118 => 39,  114 => 45,  104 => 35,  100 => 32,  78 => 25,  75 => 21,  71 => 23,  58 => 15,  34 => 5,  91 => 38,  84 => 28,  26 => 2,  27 => 4,  24 => 4,  21 => 1,  44 => 8,  31 => 4,  25 => 3,  19 => 2,  70 => 19,  63 => 19,  46 => 12,  22 => 3,  163 => 58,  155 => 56,  152 => 77,  149 => 54,  145 => 73,  139 => 53,  131 => 67,  123 => 47,  120 => 43,  115 => 38,  106 => 53,  101 => 50,  96 => 21,  83 => 26,  80 => 26,  74 => 24,  66 => 21,  55 => 16,  52 => 11,  50 => 13,  43 => 7,  41 => 9,  37 => 8,  35 => 5,  32 => 7,  29 => 2,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 43,  157 => 56,  153 => 36,  151 => 73,  143 => 54,  138 => 71,  136 => 52,  133 => 46,  130 => 27,  122 => 24,  119 => 36,  116 => 35,  111 => 37,  108 => 42,  102 => 30,  98 => 22,  95 => 35,  92 => 30,  89 => 33,  85 => 27,  81 => 17,  73 => 21,  64 => 23,  60 => 19,  57 => 17,  54 => 12,  51 => 13,  48 => 9,  45 => 11,  42 => 5,  39 => 5,  36 => 4,  33 => 8,  30 => 3,);
    }
}
