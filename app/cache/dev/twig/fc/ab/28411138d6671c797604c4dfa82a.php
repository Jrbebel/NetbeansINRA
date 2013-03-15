<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_fcab28411138d6671c797604c4dfa82a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"content\">
        ";
        // line 5
        $this->env->loadTemplate("WebProfilerBundle:Profiler:header.html.twig")->display(array());
        // line 6
        echo "
        <div id=\"main\">
            <div class=\"clear_fix\">
                <div id=\"collector_wrapper\">
                    <div id=\"collector_content\">
                        ";
        // line 11
        $this->displayBlock('panel', $context, $blocks);
        // line 34
        echo "                    </div>
                </div>
                <div id=\"navigation\">
                    ";
        // line 37
        echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Profiler:searchBar", array("token" => ""), array());
        // line 38
        echo "                    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:admin.html.twig")->display(array("token" => ""));
        // line 39
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    // line 11
    public function block_panel($context, array $blocks = array())
    {
        // line 12
        echo "                            ";
        if (((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "purge")) {
            // line 13
            echo "                                <h2>The profiler database was purged successfully</h2>
                                <p>
                                    <em>Now you need to browse some pages with the Symfony Profiler enabled to collect data.</em>
                                </p>
                            ";
        } elseif (((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "upload_error")) {
            // line 18
            echo "                                <h2>A problem occurred when uploading the data</h2>
                                <p>
                                    <em>No file given or the file was not uploaded successfully.</em>
                                </p>
                            ";
        } elseif (((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "already_exists")) {
            // line 23
            echo "                                <h2>A problem occurred when uploading the data</h2>
                                <p>
                                    <em>The token already exists in the database.</em>
                                </p>
                            ";
        } elseif (((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "no_token")) {
            // line 28
            echo "                                <h2>Token not found</h2>
                                <p>
                                    <em>Token \"";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "\" was not found in the database.</em>
                                </p>
                            ";
        }
        // line 33
        echo "                        ";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  790 => 469,  787 => 468,  776 => 466,  772 => 465,  768 => 463,  755 => 462,  729 => 457,  726 => 456,  707 => 454,  690 => 453,  686 => 451,  682 => 450,  678 => 449,  674 => 448,  670 => 447,  666 => 446,  663 => 445,  661 => 444,  644 => 443,  633 => 442,  618 => 437,  613 => 435,  609 => 434,  606 => 433,  604 => 432,  590 => 431,  558 => 401,  540 => 398,  523 => 397,  520 => 396,  518 => 395,  513 => 393,  508 => 391,  181 => 87,  173 => 85,  161 => 80,  156 => 77,  356 => 163,  347 => 160,  343 => 159,  340 => 158,  335 => 157,  309 => 141,  302 => 137,  288 => 129,  281 => 125,  274 => 121,  259 => 109,  217 => 83,  206 => 78,  158 => 56,  125 => 44,  113 => 40,  176 => 61,  170 => 60,  388 => 160,  385 => 159,  379 => 158,  370 => 156,  366 => 155,  362 => 153,  360 => 152,  357 => 151,  354 => 150,  352 => 149,  344 => 147,  342 => 146,  339 => 145,  333 => 156,  330 => 140,  327 => 139,  325 => 150,  320 => 135,  314 => 131,  306 => 128,  280 => 114,  275 => 111,  254 => 101,  247 => 97,  228 => 89,  226 => 86,  221 => 83,  207 => 95,  202 => 73,  193 => 68,  190 => 89,  169 => 56,  148 => 74,  174 => 58,  86 => 28,  323 => 149,  316 => 145,  313 => 136,  307 => 132,  299 => 126,  291 => 123,  264 => 105,  250 => 108,  246 => 106,  240 => 93,  237 => 103,  233 => 102,  227 => 100,  209 => 73,  182 => 69,  142 => 72,  99 => 36,  69 => 20,  167 => 64,  128 => 45,  77 => 18,  256 => 110,  253 => 85,  224 => 99,  213 => 65,  192 => 72,  168 => 55,  137 => 47,  62 => 25,  40 => 11,  579 => 228,  574 => 227,  567 => 225,  564 => 224,  555 => 219,  534 => 201,  531 => 200,  524 => 195,  503 => 177,  500 => 176,  490 => 167,  479 => 160,  477 => 159,  474 => 158,  457 => 154,  447 => 147,  431 => 144,  424 => 142,  420 => 140,  416 => 139,  413 => 138,  406 => 136,  400 => 133,  397 => 132,  389 => 129,  386 => 128,  384 => 127,  377 => 157,  373 => 124,  369 => 123,  365 => 121,  348 => 120,  338 => 112,  329 => 110,  326 => 109,  322 => 108,  311 => 130,  308 => 129,  300 => 93,  283 => 117,  272 => 85,  265 => 83,  258 => 103,  252 => 138,  241 => 74,  236 => 80,  229 => 70,  223 => 67,  218 => 65,  197 => 62,  188 => 67,  179 => 54,  175 => 84,  140 => 49,  134 => 54,  97 => 23,  166 => 82,  150 => 75,  146 => 65,  90 => 41,  53 => 38,  49 => 17,  23 => 3,  243 => 105,  238 => 97,  234 => 89,  231 => 88,  214 => 82,  210 => 60,  203 => 77,  200 => 54,  195 => 8,  164 => 63,  129 => 61,  124 => 49,  110 => 39,  107 => 27,  87 => 33,  56 => 39,  20 => 1,  301 => 125,  295 => 133,  292 => 120,  289 => 119,  287 => 118,  282 => 115,  276 => 87,  273 => 110,  270 => 84,  268 => 107,  263 => 80,  249 => 77,  245 => 101,  230 => 75,  222 => 73,  220 => 98,  215 => 79,  211 => 81,  204 => 94,  198 => 74,  185 => 68,  183 => 63,  177 => 59,  160 => 59,  112 => 52,  82 => 19,  65 => 22,  38 => 6,  144 => 73,  141 => 54,  135 => 47,  126 => 61,  109 => 51,  103 => 25,  67 => 12,  61 => 18,  47 => 15,  28 => 6,  105 => 35,  93 => 42,  76 => 34,  72 => 22,  68 => 30,  94 => 30,  88 => 20,  79 => 35,  59 => 18,  225 => 88,  216 => 90,  212 => 78,  205 => 71,  201 => 83,  196 => 92,  194 => 62,  191 => 70,  189 => 91,  186 => 59,  180 => 72,  172 => 64,  159 => 79,  154 => 54,  147 => 58,  132 => 47,  127 => 52,  121 => 55,  118 => 39,  114 => 39,  104 => 37,  100 => 36,  78 => 26,  75 => 23,  71 => 21,  58 => 25,  34 => 8,  91 => 28,  84 => 23,  26 => 2,  27 => 4,  24 => 3,  21 => 1,  44 => 11,  31 => 6,  25 => 4,  19 => 1,  70 => 13,  63 => 16,  46 => 34,  22 => 2,  163 => 81,  155 => 56,  152 => 75,  149 => 54,  145 => 57,  139 => 71,  131 => 46,  123 => 35,  120 => 50,  115 => 44,  106 => 53,  101 => 33,  96 => 35,  83 => 27,  80 => 32,  74 => 25,  66 => 19,  55 => 24,  52 => 18,  50 => 16,  43 => 12,  41 => 12,  37 => 6,  35 => 5,  32 => 4,  29 => 3,  184 => 88,  178 => 86,  171 => 84,  165 => 60,  162 => 53,  157 => 43,  153 => 62,  151 => 53,  143 => 56,  138 => 55,  136 => 50,  133 => 46,  130 => 39,  122 => 51,  119 => 57,  116 => 41,  111 => 37,  108 => 41,  102 => 34,  98 => 32,  95 => 30,  92 => 21,  89 => 28,  85 => 24,  81 => 24,  73 => 23,  64 => 11,  60 => 20,  57 => 19,  54 => 19,  51 => 37,  48 => 11,  45 => 13,  42 => 8,  39 => 9,  36 => 9,  33 => 10,  30 => 7,);
    }
}
