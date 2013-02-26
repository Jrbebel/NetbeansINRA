<?php

/* KnpPaginatorBundle:Pagination:sortable_link.html.twig */
class __TwigTemplate_5a112986b0ef889979ce10818b6480b1 extends Twig_Template
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
        echo "<a";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "options"));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getContext($context, "attr"), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo ">";
        echo twig_escape_filter($this->env, $this->getContext($context, "title"), "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:sortable_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 29,  315 => 140,  308 => 135,  305 => 134,  299 => 130,  288 => 122,  284 => 121,  261 => 113,  257 => 111,  243 => 106,  239 => 104,  236 => 103,  233 => 102,  226 => 100,  224 => 99,  217 => 97,  213 => 96,  207 => 94,  202 => 91,  175 => 87,  69 => 19,  166 => 72,  150 => 67,  146 => 65,  129 => 61,  87 => 28,  188 => 77,  167 => 59,  137 => 47,  62 => 14,  53 => 17,  40 => 4,  128 => 71,  77 => 28,  23 => 3,  49 => 10,  210 => 72,  199 => 61,  193 => 60,  182 => 89,  179 => 53,  174 => 8,  168 => 82,  110 => 43,  56 => 18,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 115,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 108,  245 => 77,  230 => 101,  222 => 73,  220 => 98,  215 => 80,  211 => 69,  204 => 66,  198 => 63,  185 => 90,  183 => 60,  177 => 58,  160 => 80,  112 => 42,  82 => 30,  65 => 16,  38 => 4,  144 => 51,  141 => 66,  135 => 47,  126 => 45,  109 => 37,  103 => 43,  67 => 18,  61 => 9,  47 => 14,  91 => 38,  84 => 28,  28 => 6,  225 => 96,  216 => 90,  212 => 88,  205 => 145,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 59,  186 => 76,  180 => 72,  172 => 76,  159 => 79,  154 => 68,  147 => 74,  132 => 48,  127 => 65,  121 => 55,  118 => 39,  114 => 30,  104 => 35,  100 => 32,  78 => 25,  75 => 21,  71 => 23,  34 => 5,  44 => 13,  94 => 15,  88 => 28,  59 => 22,  105 => 34,  93 => 30,  79 => 23,  76 => 33,  72 => 32,  68 => 12,  58 => 15,  24 => 4,  27 => 4,  25 => 3,  21 => 2,  31 => 2,  26 => 2,  19 => 1,  70 => 19,  63 => 20,  46 => 12,  22 => 3,  163 => 58,  155 => 56,  152 => 77,  149 => 54,  145 => 73,  139 => 53,  131 => 67,  123 => 47,  120 => 43,  115 => 40,  106 => 36,  101 => 34,  96 => 21,  83 => 26,  80 => 26,  74 => 24,  66 => 21,  55 => 10,  52 => 11,  50 => 8,  43 => 8,  41 => 9,  37 => 3,  35 => 3,  32 => 7,  29 => 2,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 81,  157 => 56,  153 => 54,  151 => 73,  143 => 54,  138 => 71,  136 => 52,  133 => 46,  130 => 47,  122 => 48,  119 => 36,  116 => 35,  111 => 29,  108 => 42,  102 => 30,  98 => 22,  95 => 31,  92 => 30,  89 => 33,  85 => 27,  81 => 36,  73 => 21,  64 => 23,  60 => 19,  57 => 17,  54 => 12,  51 => 14,  48 => 9,  45 => 9,  42 => 12,  39 => 11,  36 => 4,  33 => 8,  30 => 7,);
    }
}
