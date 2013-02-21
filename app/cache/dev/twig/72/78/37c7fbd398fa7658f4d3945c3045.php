<?php

/* WebProfilerBundle:Profiler:results.html.twig */
class __TwigTemplate_727837c7fbd398fa7658f4d3945c3045 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_panel($context, array $blocks = array())
    {
        // line 4
        echo "    <h2>Search Results</h2>

    ";
        // line 6
        if ($this->getContext($context, "tokens")) {
            // line 7
            echo "        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Token</th>
                    <th scope=\"col\">IP</th>
                    <th scope=\"col\">Method</th>
                    <th scope=\"col\">URL</th>
                    <th scope=\"col\">Time</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 18
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "tokens"));
            foreach ($context['_seq'] as $context["_key"] => $context["elements"]) {
                // line 19
                echo "                    <tr>
                        <td><a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute($this->getContext($context, "elements"), "token"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "elements"), "token"), "html", null, true);
                echo "</a></td>
                        <td>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "elements"), "ip"), "html", null, true);
                echo "</td>
                        <td>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "elements"), "method"), "html", null, true);
                echo "</td>
                        <td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "elements"), "url"), "html", null, true);
                echo "</td>
                        <td>";
                // line 24
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "elements"), "time"), "r"), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elements'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 27
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 30
            echo "        <p>
            <em>The query returned no result.</em>
        </p>
    ";
        }
        // line 34
        echo "
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 236,  260 => 235,  257 => 234,  238 => 218,  86 => 27,  62 => 25,  90 => 29,  294 => 131,  291 => 130,  285 => 126,  275 => 119,  267 => 113,  252 => 111,  248 => 109,  240 => 219,  234 => 104,  227 => 101,  224 => 100,  221 => 99,  217 => 98,  208 => 95,  176 => 88,  173 => 87,  69 => 19,  166 => 85,  129 => 69,  158 => 57,  150 => 77,  146 => 65,  140 => 52,  87 => 28,  53 => 38,  40 => 8,  203 => 143,  107 => 52,  99 => 32,  77 => 18,  23 => 3,  49 => 17,  210 => 72,  199 => 61,  193 => 89,  182 => 54,  179 => 75,  174 => 8,  168 => 7,  110 => 43,  56 => 39,  20 => 1,  301 => 136,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 248,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 102,  222 => 73,  220 => 72,  215 => 97,  211 => 96,  204 => 94,  198 => 92,  185 => 61,  183 => 60,  177 => 58,  160 => 80,  112 => 37,  82 => 26,  65 => 20,  38 => 6,  144 => 50,  141 => 66,  135 => 49,  126 => 69,  109 => 37,  103 => 34,  67 => 22,  61 => 18,  47 => 14,  91 => 28,  84 => 27,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 59,  186 => 76,  180 => 72,  172 => 76,  159 => 80,  154 => 68,  147 => 55,  132 => 48,  127 => 44,  121 => 55,  118 => 63,  114 => 39,  104 => 35,  100 => 33,  78 => 26,  75 => 24,  71 => 23,  34 => 8,  44 => 11,  94 => 30,  88 => 27,  59 => 21,  105 => 35,  93 => 34,  79 => 25,  76 => 33,  72 => 32,  68 => 19,  58 => 15,  24 => 2,  27 => 4,  25 => 3,  21 => 2,  31 => 4,  26 => 3,  19 => 1,  70 => 13,  63 => 21,  46 => 14,  22 => 2,  163 => 63,  155 => 58,  152 => 49,  149 => 72,  145 => 46,  139 => 53,  131 => 42,  123 => 47,  120 => 43,  115 => 40,  106 => 36,  101 => 33,  96 => 21,  83 => 18,  80 => 26,  74 => 25,  66 => 21,  55 => 15,  52 => 18,  50 => 18,  43 => 12,  41 => 12,  37 => 7,  35 => 6,  32 => 6,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 81,  157 => 56,  153 => 54,  151 => 73,  143 => 75,  138 => 72,  136 => 71,  133 => 43,  130 => 47,  122 => 65,  119 => 36,  116 => 35,  111 => 38,  108 => 36,  102 => 30,  98 => 22,  95 => 34,  92 => 30,  89 => 30,  85 => 27,  81 => 36,  73 => 23,  64 => 11,  60 => 19,  57 => 20,  54 => 19,  51 => 37,  48 => 9,  45 => 13,  42 => 12,  39 => 9,  36 => 9,  33 => 10,  30 => 5,);
    }
}
