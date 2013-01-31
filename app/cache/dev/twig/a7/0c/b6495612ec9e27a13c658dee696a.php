<?php

/* WebProfilerBundle:Router:panel.html.twig */
class __TwigTemplate_a70cb6495612ec9e27a13c658dee696a extends Twig_Template
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
        echo "<h2>Routing for \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "pathinfo"), "html", null, true);
        echo "\"</h2>

<ul>
    <li>
        <strong>Route:&nbsp;</strong>
        ";
        // line 6
        if ($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "route")) {
            // line 7
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "route"), "html", null, true);
            echo "
        ";
        } else {
            // line 9
            echo "            <em>No matching route</em>
        ";
        }
        // line 11
        echo "    </li>
    <li>
        <strong>Route parameters:&nbsp;</strong>
        ";
        // line 14
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "routeParams"))) {
            // line 15
            echo "            ";
            $this->env->loadTemplate("WebProfilerBundle:Profiler:table.html.twig")->display(array("data" => $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "routeParams"), "class" => "inline"));
            // line 16
            echo "        ";
        } else {
            // line 17
            echo "            <em>No parameters</em>
        ";
        }
        // line 19
        echo "    </li>
    ";
        // line 20
        if ($this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "redirect")) {
            // line 21
            echo "    <li>
        <strong>Redirecting to:&nbsp;</strong> \"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetUrl"), "html", null, true);
            echo "\" ";
            if ($this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetRoute")) {
                echo "(route: \"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetRoute"), "html", null, true);
                echo "\")";
            }
            // line 23
            echo "    <li>
    ";
        }
        // line 25
        echo "    <li>
        <strong>Route matching logs</strong>
        <table class=\"routing inline\">
            <tr>
                <th>Route name</th>
                <th>Pattern</th>
                <th>Log</th>
            </tr>
            ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["traces"]) ? $context["traces"] : $this->getContext($context, "traces")));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 34
            echo "                <tr class=\"";
            echo (((1 == $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "level"))) ? ("almost") : ((((2 == $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "level"))) ? ("matches") : (""))));
            echo "\">
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "name"), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "pattern"), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "log"), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 40
        echo "        </table>
        <em><small>Note: The above matching is based on the configuration for the current router which might differ from
        the configuration used while routing this request.</small></em>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Router:panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 27,  146 => 65,  129 => 61,  90 => 29,  87 => 33,  53 => 17,  217 => 102,  209 => 97,  182 => 87,  173 => 83,  167 => 81,  150 => 67,  148 => 74,  140 => 71,  134 => 69,  113 => 40,  40 => 11,  69 => 21,  207 => 78,  202 => 92,  181 => 57,  174 => 52,  166 => 72,  128 => 50,  110 => 45,  97 => 39,  77 => 25,  62 => 21,  56 => 18,  23 => 3,  49 => 10,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 105,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 58,  183 => 60,  177 => 58,  160 => 78,  112 => 42,  82 => 24,  65 => 22,  38 => 10,  144 => 72,  141 => 70,  135 => 47,  126 => 45,  109 => 47,  103 => 34,  67 => 19,  61 => 16,  47 => 15,  105 => 35,  93 => 20,  76 => 33,  72 => 32,  68 => 12,  27 => 5,  225 => 106,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 59,  189 => 77,  186 => 89,  180 => 72,  172 => 76,  159 => 61,  154 => 68,  147 => 55,  132 => 48,  127 => 49,  121 => 55,  118 => 44,  114 => 39,  104 => 37,  100 => 36,  78 => 25,  75 => 23,  71 => 19,  58 => 19,  34 => 5,  91 => 34,  84 => 28,  94 => 30,  88 => 27,  79 => 25,  59 => 18,  26 => 2,  21 => 2,  28 => 6,  24 => 4,  44 => 13,  31 => 18,  25 => 13,  19 => 1,  70 => 15,  63 => 22,  46 => 13,  22 => 10,  163 => 79,  155 => 58,  152 => 78,  149 => 51,  145 => 46,  139 => 50,  131 => 51,  123 => 47,  120 => 43,  115 => 51,  106 => 36,  101 => 42,  96 => 35,  83 => 18,  80 => 26,  74 => 24,  66 => 21,  55 => 17,  52 => 33,  50 => 16,  43 => 12,  41 => 11,  37 => 8,  35 => 20,  32 => 7,  29 => 6,  184 => 70,  178 => 71,  171 => 51,  165 => 58,  162 => 57,  157 => 77,  153 => 54,  151 => 52,  143 => 71,  138 => 63,  136 => 50,  133 => 64,  130 => 67,  122 => 44,  119 => 47,  116 => 35,  111 => 38,  108 => 36,  102 => 41,  98 => 22,  95 => 39,  92 => 30,  89 => 28,  85 => 27,  81 => 36,  73 => 23,  64 => 17,  60 => 20,  57 => 19,  54 => 34,  51 => 14,  48 => 30,  45 => 14,  42 => 25,  39 => 11,  36 => 9,  33 => 8,  30 => 7,);
    }
}
