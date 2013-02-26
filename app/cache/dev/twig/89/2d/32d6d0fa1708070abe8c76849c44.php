<?php

/* WebProfilerBundle:Profiler:bag.html.twig */
class __TwigTemplate_892d32d6d0fa1708070abe8c76849c44 extends Twig_Template
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
        echo "<table ";
        if (array_key_exists("class", $context)) {
            echo "class='";
            echo twig_escape_filter($this->env, $this->getContext($context, "class"), "html", null, true);
            echo "'";
        }
        echo " >
    <thead>
        <tr>
            <th scope=\"col\">Key</th>
            <th scope=\"col\">Value</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->getAttribute($this->getContext($context, "bag"), "keys")));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 10
            echo "        <tr>
            <th>";
            // line 11
            echo twig_escape_filter($this->env, $this->getContext($context, "key"), "html", null, true);
            echo "</th>
            <td>";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('yaml')->dump($this->getAttribute($this->getContext($context, "bag"), "get", array(0 => $this->getContext($context, "key")), "method")), "html", null, true);
            echo "</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 15
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:bag.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 27,  90 => 29,  315 => 140,  308 => 135,  305 => 134,  299 => 130,  288 => 122,  284 => 121,  261 => 113,  257 => 111,  243 => 106,  239 => 104,  236 => 103,  233 => 102,  226 => 100,  224 => 99,  217 => 97,  213 => 96,  207 => 94,  202 => 91,  175 => 87,  69 => 19,  166 => 72,  150 => 67,  146 => 65,  129 => 61,  87 => 28,  188 => 77,  167 => 59,  137 => 47,  62 => 19,  53 => 17,  40 => 4,  128 => 71,  77 => 28,  23 => 3,  49 => 10,  210 => 72,  199 => 61,  193 => 60,  182 => 89,  179 => 53,  174 => 8,  168 => 82,  110 => 43,  56 => 18,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 115,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 108,  245 => 77,  230 => 101,  222 => 73,  220 => 98,  215 => 80,  211 => 69,  204 => 66,  198 => 63,  185 => 90,  183 => 60,  177 => 58,  160 => 80,  112 => 42,  82 => 30,  65 => 20,  38 => 10,  144 => 51,  141 => 66,  135 => 47,  126 => 45,  109 => 37,  103 => 34,  67 => 18,  61 => 9,  47 => 14,  91 => 29,  84 => 28,  28 => 6,  225 => 96,  216 => 90,  212 => 88,  205 => 145,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 59,  186 => 76,  180 => 72,  172 => 76,  159 => 79,  154 => 68,  147 => 74,  132 => 48,  127 => 65,  121 => 55,  118 => 39,  114 => 39,  104 => 35,  100 => 33,  78 => 25,  75 => 21,  71 => 23,  34 => 5,  44 => 13,  94 => 30,  88 => 28,  59 => 18,  105 => 35,  93 => 30,  79 => 25,  76 => 33,  72 => 32,  68 => 12,  58 => 15,  24 => 4,  27 => 5,  25 => 3,  21 => 2,  31 => 2,  26 => 2,  19 => 1,  70 => 19,  63 => 20,  46 => 12,  22 => 3,  163 => 58,  155 => 56,  152 => 77,  149 => 54,  145 => 73,  139 => 53,  131 => 67,  123 => 47,  120 => 43,  115 => 40,  106 => 36,  101 => 34,  96 => 21,  83 => 26,  80 => 26,  74 => 24,  66 => 21,  55 => 15,  52 => 16,  50 => 8,  43 => 12,  41 => 11,  37 => 3,  35 => 9,  32 => 7,  29 => 6,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 81,  157 => 56,  153 => 54,  151 => 73,  143 => 54,  138 => 71,  136 => 52,  133 => 46,  130 => 47,  122 => 48,  119 => 36,  116 => 35,  111 => 29,  108 => 36,  102 => 30,  98 => 22,  95 => 31,  92 => 30,  89 => 28,  85 => 27,  81 => 36,  73 => 23,  64 => 23,  60 => 19,  57 => 17,  54 => 12,  51 => 14,  48 => 9,  45 => 9,  42 => 11,  39 => 10,  36 => 4,  33 => 8,  30 => 7,);
    }
}
