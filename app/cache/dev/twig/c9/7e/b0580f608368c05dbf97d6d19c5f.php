<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_c97eb0580f608368c05dbf97d6d19c5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Redirection Intercepted";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"sf-exceptionreset\">
        <div class=\"block_exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getContext($context, "location"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getContext($context, "location"), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 27,  90 => 29,  315 => 140,  308 => 135,  305 => 134,  299 => 130,  288 => 122,  284 => 121,  261 => 113,  257 => 111,  243 => 106,  239 => 104,  236 => 103,  233 => 102,  226 => 100,  224 => 99,  217 => 97,  213 => 96,  207 => 94,  202 => 91,  175 => 87,  69 => 19,  166 => 72,  150 => 67,  146 => 65,  129 => 61,  87 => 28,  188 => 77,  167 => 59,  137 => 47,  62 => 19,  53 => 38,  40 => 8,  128 => 71,  77 => 18,  23 => 3,  49 => 10,  210 => 72,  199 => 61,  193 => 60,  182 => 89,  179 => 53,  174 => 8,  168 => 82,  110 => 43,  56 => 39,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 115,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 108,  245 => 77,  230 => 101,  222 => 73,  220 => 98,  215 => 80,  211 => 69,  204 => 66,  198 => 63,  185 => 90,  183 => 60,  177 => 58,  160 => 80,  112 => 42,  82 => 30,  65 => 20,  38 => 6,  144 => 51,  141 => 66,  135 => 47,  126 => 45,  109 => 37,  103 => 34,  67 => 12,  61 => 18,  47 => 14,  91 => 28,  84 => 23,  28 => 6,  225 => 96,  216 => 90,  212 => 88,  205 => 145,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 59,  186 => 76,  180 => 72,  172 => 76,  159 => 79,  154 => 68,  147 => 74,  132 => 48,  127 => 65,  121 => 55,  118 => 39,  114 => 39,  104 => 35,  100 => 33,  78 => 26,  75 => 21,  71 => 23,  34 => 8,  44 => 11,  94 => 30,  88 => 28,  59 => 18,  105 => 35,  93 => 30,  79 => 25,  76 => 33,  72 => 32,  68 => 12,  58 => 15,  24 => 3,  27 => 5,  25 => 3,  21 => 2,  31 => 2,  26 => 2,  19 => 1,  70 => 13,  63 => 20,  46 => 12,  22 => 3,  163 => 58,  155 => 56,  152 => 77,  149 => 54,  145 => 73,  139 => 53,  131 => 67,  123 => 47,  120 => 43,  115 => 40,  106 => 36,  101 => 33,  96 => 21,  83 => 26,  80 => 26,  74 => 25,  66 => 21,  55 => 15,  52 => 16,  50 => 8,  43 => 12,  41 => 12,  37 => 6,  35 => 5,  32 => 4,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 81,  157 => 56,  153 => 54,  151 => 73,  143 => 54,  138 => 71,  136 => 52,  133 => 46,  130 => 47,  122 => 48,  119 => 36,  116 => 35,  111 => 29,  108 => 36,  102 => 30,  98 => 22,  95 => 30,  92 => 30,  89 => 28,  85 => 27,  81 => 36,  73 => 23,  64 => 11,  60 => 19,  57 => 17,  54 => 12,  51 => 37,  48 => 9,  45 => 13,  42 => 8,  39 => 10,  36 => 9,  33 => 10,  30 => 7,);
    }
}
