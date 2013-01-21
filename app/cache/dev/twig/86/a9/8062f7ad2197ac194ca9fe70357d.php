<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_86a98062f7ad2197ac194ca9fe70357d extends Twig_Template
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
        echo "<div id=\"header\" class=\"clear_fix\">
    <h1>
        <img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/logo_symfony_profiler.png"), "html", null, true);
        echo "\" alt=\"Symfony profiler\"/>
    </h1>

    <div class=\"search\">
        <form method=\"get\" action=\"http://symfony.com/search\">
            <div class=\"form_row\">
                <label for=\"search_id\">
                    <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/grey_magnifier.png"), "html", null, true);
        echo "\" alt=\"Search on Symfony website\"/>
                </label>

                <input name=\"q\" id=\"search_id\" type=\"search\" placeholder=\"Search on Symfony website\"/>

                <button type=\"submit\">
                    <span class=\"border_l\">
                        <span class=\"border_r\">
                            <span class=\"btn_bg\">OK</span>
                        </span>
                    </span>
                </button>
            </div>
        </form>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 236,  260 => 235,  257 => 234,  240 => 219,  238 => 218,  77 => 18,  40 => 8,  86 => 27,  62 => 21,  166 => 72,  150 => 67,  146 => 65,  129 => 61,  90 => 29,  87 => 33,  53 => 38,  206 => 77,  190 => 58,  173 => 51,  170 => 50,  142 => 70,  140 => 69,  113 => 40,  99 => 39,  56 => 39,  23 => 3,  49 => 10,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 248,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  112 => 42,  82 => 24,  65 => 22,  38 => 10,  144 => 50,  141 => 51,  135 => 47,  126 => 45,  109 => 47,  103 => 34,  67 => 22,  61 => 19,  47 => 15,  105 => 35,  93 => 20,  76 => 33,  72 => 32,  68 => 12,  27 => 5,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 69,  196 => 80,  194 => 62,  191 => 78,  189 => 77,  186 => 76,  180 => 56,  172 => 76,  159 => 7,  154 => 68,  147 => 55,  132 => 63,  127 => 49,  121 => 55,  118 => 46,  114 => 39,  104 => 37,  100 => 36,  78 => 24,  75 => 24,  71 => 23,  58 => 17,  34 => 8,  91 => 28,  84 => 27,  94 => 30,  88 => 27,  79 => 25,  59 => 21,  26 => 3,  21 => 2,  28 => 3,  24 => 3,  44 => 11,  31 => 4,  25 => 3,  19 => 1,  70 => 13,  63 => 21,  46 => 12,  22 => 3,  163 => 63,  155 => 58,  152 => 49,  149 => 51,  145 => 46,  139 => 50,  131 => 42,  123 => 47,  120 => 43,  115 => 51,  106 => 36,  101 => 33,  96 => 35,  83 => 18,  80 => 26,  74 => 24,  66 => 21,  55 => 15,  52 => 16,  50 => 18,  43 => 12,  41 => 11,  37 => 7,  35 => 6,  32 => 6,  29 => 3,  184 => 57,  178 => 71,  171 => 62,  165 => 8,  162 => 57,  157 => 56,  153 => 78,  151 => 77,  143 => 54,  138 => 63,  136 => 50,  133 => 43,  130 => 50,  122 => 44,  119 => 36,  116 => 35,  111 => 38,  108 => 36,  102 => 30,  98 => 22,  95 => 34,  92 => 30,  89 => 30,  85 => 24,  81 => 36,  73 => 23,  64 => 11,  60 => 20,  57 => 20,  54 => 19,  51 => 16,  48 => 9,  45 => 13,  42 => 11,  39 => 10,  36 => 7,  33 => 10,  30 => 7,);
    }
}
