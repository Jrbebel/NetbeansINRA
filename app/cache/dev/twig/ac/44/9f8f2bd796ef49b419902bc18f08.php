<?php

/* WebProfilerBundle:Profiler:search.html.twig */
class __TwigTemplate_ac449f8f2bd796ef49b419902bc18f08 extends Twig_Template
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
        echo "<div class=\"search clearfix\">
    <h3>
        <img style=\"margin: 0 5px 0 0; vertical-align: middle;\" width=\"16\" height=\"16\" alt=\"Search\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/search.png"), "html", null, true);
        echo "\" />
        Search
    </h3>
    <form action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler_search"), "html", null, true);
        echo "\" method=\"get\">
        <label for=\"ip\">IP</label>
        <input type=\"text\" name=\"ip\" id=\"ip\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["ip"]) ? $context["ip"] : $this->getContext($context, "ip")), "html", null, true);
        echo "\" />
        <div class=\"clear_fix\"></div>
        <label for=\"method\">Method</label>
        <select name=\"method\" id=\"method\">
            ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "", 1 => "DELETE", 2 => "GET", 3 => "HEAD", 4 => "PATCH", 5 => "POST", 6 => "PUT"));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 13
            echo "                <option";
            echo ((((isset($context["m"]) ? $context["m"] : $this->getContext($context, "m")) == (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")))) ? (" selected=\"selected\"") : (""));
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["m"]) ? $context["m"] : $this->getContext($context, "m")), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 15
        echo "        </select>
        <div class=\"clear_fix\"></div>
        <label for=\"url\">URL</label>
        <input type=\"text\" name=\"url\" id=\"url\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\" />
        <div class=\"clear_fix\"></div>
        <label for=\"token\">Token</label>
        <input type=\"text\" name=\"token\" id=\"token\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" />
        <div class=\"clear_fix\"></div>
        <label for=\"limit\">Limit</label>
        <select name=\"limit\" id=\"limit\">
            ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => 10, 1 => 50, 2 => 100));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 26
            echo "                <option";
            echo ((((isset($context["l"]) ? $context["l"] : $this->getContext($context, "l")) == (isset($context["limit"]) ? $context["limit"] : $this->getContext($context, "limit")))) ? (" selected=\"selected\"") : (""));
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["l"]) ? $context["l"] : $this->getContext($context, "l")), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 28
        echo "        </select>

        <button type=\"submit\">
            <span class=\"border_l\">
                <span class=\"border_r\">
                    <span class=\"btn_bg\">SEARCH</span>
                </span>
            </span>
        </button>
        <div class=\"clear_fix\"></div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 236,  260 => 235,  257 => 234,  240 => 219,  238 => 218,  77 => 18,  40 => 8,  86 => 27,  62 => 25,  166 => 72,  150 => 67,  146 => 65,  129 => 61,  90 => 29,  87 => 33,  53 => 38,  206 => 77,  190 => 58,  173 => 51,  170 => 50,  142 => 70,  140 => 69,  113 => 40,  99 => 39,  56 => 15,  23 => 3,  49 => 17,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 248,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  112 => 42,  82 => 24,  65 => 22,  38 => 10,  144 => 50,  141 => 51,  135 => 47,  126 => 45,  109 => 47,  103 => 34,  67 => 21,  61 => 18,  47 => 15,  105 => 35,  93 => 20,  76 => 33,  72 => 32,  68 => 12,  27 => 4,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 69,  196 => 80,  194 => 62,  191 => 78,  189 => 77,  186 => 76,  180 => 56,  172 => 76,  159 => 7,  154 => 68,  147 => 55,  132 => 63,  127 => 49,  121 => 55,  118 => 46,  114 => 39,  104 => 37,  100 => 36,  78 => 26,  75 => 24,  71 => 23,  58 => 17,  34 => 8,  91 => 28,  84 => 27,  94 => 30,  88 => 27,  79 => 25,  59 => 21,  26 => 3,  21 => 2,  28 => 3,  24 => 3,  44 => 11,  31 => 6,  25 => 3,  19 => 1,  70 => 13,  63 => 21,  46 => 12,  22 => 2,  163 => 63,  155 => 58,  152 => 49,  149 => 51,  145 => 46,  139 => 50,  131 => 42,  123 => 47,  120 => 43,  115 => 51,  106 => 36,  101 => 33,  96 => 35,  83 => 18,  80 => 26,  74 => 25,  66 => 21,  55 => 15,  52 => 18,  50 => 18,  43 => 12,  41 => 12,  37 => 7,  35 => 9,  32 => 6,  29 => 6,  184 => 57,  178 => 71,  171 => 62,  165 => 8,  162 => 57,  157 => 56,  153 => 78,  151 => 77,  143 => 54,  138 => 63,  136 => 50,  133 => 43,  130 => 50,  122 => 44,  119 => 36,  116 => 35,  111 => 38,  108 => 36,  102 => 30,  98 => 22,  95 => 34,  92 => 30,  89 => 28,  85 => 24,  81 => 36,  73 => 23,  64 => 11,  60 => 20,  57 => 20,  54 => 19,  51 => 16,  48 => 9,  45 => 13,  42 => 11,  39 => 10,  36 => 7,  33 => 10,  30 => 7,);
    }
}
