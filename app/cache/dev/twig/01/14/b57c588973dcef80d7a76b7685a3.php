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
        return array (  323 => 142,  313 => 136,  307 => 132,  299 => 126,  291 => 123,  283 => 117,  264 => 113,  250 => 108,  237 => 103,  233 => 102,  227 => 100,  214 => 96,  209 => 93,  175 => 84,  142 => 72,  99 => 36,  69 => 21,  188 => 77,  167 => 59,  77 => 28,  256 => 110,  253 => 85,  236 => 80,  224 => 99,  213 => 65,  168 => 55,  137 => 47,  62 => 14,  40 => 4,  535 => 197,  530 => 196,  523 => 194,  520 => 193,  512 => 189,  490 => 171,  480 => 162,  469 => 155,  467 => 154,  464 => 153,  447 => 149,  437 => 142,  421 => 139,  414 => 137,  410 => 135,  406 => 134,  403 => 133,  396 => 131,  390 => 128,  387 => 127,  379 => 124,  376 => 123,  374 => 122,  367 => 120,  363 => 119,  359 => 118,  355 => 116,  338 => 115,  329 => 108,  320 => 107,  316 => 137,  305 => 98,  302 => 97,  294 => 91,  277 => 87,  266 => 83,  262 => 82,  259 => 81,  252 => 79,  246 => 106,  243 => 105,  232 => 71,  223 => 68,  208 => 61,  182 => 89,  173 => 52,  169 => 51,  156 => 43,  134 => 40,  128 => 71,  166 => 81,  150 => 67,  146 => 65,  90 => 29,  53 => 9,  49 => 9,  23 => 3,  240 => 104,  235 => 72,  231 => 101,  228 => 67,  217 => 65,  207 => 60,  200 => 55,  197 => 54,  192 => 92,  164 => 82,  129 => 61,  124 => 35,  110 => 34,  107 => 42,  87 => 32,  56 => 18,  20 => 1,  301 => 100,  295 => 124,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 85,  268 => 115,  263 => 80,  249 => 79,  245 => 77,  230 => 70,  222 => 73,  220 => 98,  215 => 70,  211 => 64,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  112 => 44,  82 => 30,  65 => 22,  38 => 6,  144 => 73,  141 => 54,  135 => 68,  126 => 45,  109 => 54,  103 => 43,  67 => 18,  61 => 16,  47 => 7,  28 => 3,  105 => 34,  93 => 30,  76 => 33,  72 => 20,  68 => 15,  94 => 34,  88 => 28,  79 => 23,  59 => 22,  225 => 96,  216 => 90,  212 => 63,  205 => 145,  201 => 83,  196 => 80,  194 => 62,  191 => 60,  189 => 91,  186 => 59,  180 => 72,  172 => 76,  159 => 79,  154 => 76,  147 => 49,  132 => 48,  127 => 42,  121 => 55,  118 => 39,  114 => 42,  104 => 35,  100 => 32,  78 => 25,  75 => 21,  71 => 23,  58 => 15,  34 => 5,  91 => 29,  84 => 31,  26 => 2,  27 => 4,  24 => 4,  21 => 1,  44 => 8,  31 => 4,  25 => 3,  19 => 2,  70 => 19,  63 => 19,  46 => 12,  22 => 3,  163 => 58,  155 => 56,  152 => 75,  149 => 54,  145 => 69,  139 => 50,  131 => 66,  123 => 47,  120 => 43,  115 => 38,  106 => 53,  101 => 50,  96 => 21,  83 => 26,  80 => 26,  74 => 28,  66 => 14,  55 => 16,  52 => 15,  50 => 13,  43 => 6,  41 => 9,  37 => 8,  35 => 5,  32 => 2,  29 => 2,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 81,  157 => 56,  153 => 51,  151 => 50,  143 => 48,  138 => 63,  136 => 50,  133 => 46,  130 => 47,  122 => 43,  119 => 42,  116 => 46,  111 => 37,  108 => 37,  102 => 41,  98 => 22,  95 => 39,  92 => 30,  89 => 33,  85 => 27,  81 => 24,  73 => 21,  64 => 23,  60 => 19,  57 => 17,  54 => 11,  51 => 13,  48 => 9,  45 => 8,  42 => 5,  39 => 5,  36 => 4,  33 => 8,  30 => 3,);
    }
}
