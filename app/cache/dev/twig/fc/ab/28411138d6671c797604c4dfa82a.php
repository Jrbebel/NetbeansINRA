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
        return array (  790 => 469,  787 => 468,  776 => 466,  772 => 465,  768 => 463,  755 => 462,  729 => 457,  726 => 456,  707 => 454,  690 => 453,  682 => 450,  674 => 448,  670 => 447,  666 => 446,  663 => 445,  661 => 444,  644 => 443,  633 => 442,  618 => 437,  613 => 435,  609 => 434,  606 => 433,  590 => 431,  558 => 401,  540 => 398,  523 => 397,  520 => 396,  518 => 395,  513 => 393,  508 => 391,  181 => 87,  161 => 80,  356 => 163,  347 => 160,  343 => 159,  340 => 158,  335 => 157,  323 => 149,  316 => 145,  309 => 141,  302 => 137,  281 => 125,  274 => 121,  259 => 109,  217 => 83,  206 => 78,  113 => 40,  176 => 61,  170 => 60,  388 => 160,  385 => 159,  379 => 158,  377 => 157,  370 => 156,  366 => 155,  360 => 152,  354 => 150,  352 => 149,  344 => 147,  342 => 146,  339 => 145,  333 => 156,  330 => 140,  327 => 139,  325 => 150,  320 => 135,  308 => 129,  306 => 128,  254 => 101,  247 => 97,  228 => 89,  226 => 86,  209 => 73,  202 => 73,  193 => 68,  169 => 56,  97 => 23,  174 => 58,  381 => 147,  374 => 142,  371 => 141,  353 => 129,  349 => 128,  341 => 122,  326 => 120,  305 => 116,  291 => 111,  288 => 129,  285 => 109,  272 => 105,  269 => 104,  252 => 138,  246 => 101,  224 => 97,  221 => 83,  207 => 95,  192 => 72,  140 => 49,  99 => 36,  188 => 67,  167 => 64,  137 => 47,  62 => 25,  77 => 18,  256 => 170,  128 => 45,  125 => 44,  261 => 86,  258 => 103,  241 => 98,  229 => 72,  218 => 65,  197 => 63,  173 => 85,  156 => 77,  142 => 64,  86 => 28,  69 => 20,  40 => 11,  732 => 297,  727 => 294,  724 => 292,  722 => 291,  703 => 275,  699 => 274,  694 => 273,  686 => 451,  681 => 268,  678 => 449,  669 => 262,  657 => 252,  652 => 250,  649 => 249,  647 => 248,  634 => 238,  631 => 237,  624 => 232,  612 => 222,  607 => 220,  604 => 432,  602 => 218,  589 => 208,  586 => 207,  574 => 196,  564 => 191,  562 => 190,  559 => 189,  542 => 185,  536 => 182,  531 => 179,  525 => 175,  509 => 172,  502 => 170,  498 => 168,  494 => 167,  491 => 166,  484 => 164,  480 => 162,  473 => 160,  461 => 158,  459 => 157,  456 => 156,  448 => 153,  445 => 152,  443 => 151,  436 => 149,  432 => 148,  428 => 147,  423 => 144,  406 => 143,  396 => 135,  387 => 133,  384 => 132,  380 => 131,  369 => 123,  365 => 137,  362 => 153,  357 => 151,  351 => 114,  346 => 112,  329 => 108,  322 => 118,  318 => 104,  314 => 131,  311 => 130,  304 => 100,  299 => 97,  280 => 114,  278 => 107,  275 => 111,  267 => 88,  264 => 105,  262 => 86,  255 => 84,  244 => 79,  240 => 93,  223 => 76,  190 => 89,  182 => 69,  175 => 52,  158 => 56,  148 => 74,  134 => 54,  166 => 82,  150 => 75,  146 => 65,  90 => 41,  53 => 38,  49 => 17,  23 => 3,  243 => 81,  238 => 97,  234 => 89,  231 => 88,  214 => 82,  210 => 60,  203 => 77,  200 => 54,  195 => 8,  164 => 63,  129 => 61,  124 => 42,  110 => 39,  107 => 27,  87 => 33,  56 => 39,  20 => 1,  301 => 125,  295 => 133,  292 => 120,  289 => 119,  287 => 118,  282 => 115,  276 => 106,  273 => 110,  270 => 84,  268 => 107,  263 => 80,  249 => 81,  245 => 101,  230 => 75,  222 => 73,  220 => 62,  215 => 79,  211 => 81,  204 => 94,  198 => 74,  185 => 68,  183 => 63,  177 => 59,  160 => 59,  112 => 52,  82 => 19,  65 => 22,  38 => 6,  144 => 73,  141 => 54,  135 => 47,  126 => 61,  109 => 51,  103 => 25,  67 => 12,  61 => 18,  47 => 15,  28 => 6,  105 => 35,  93 => 42,  76 => 34,  72 => 22,  68 => 30,  94 => 30,  88 => 20,  79 => 35,  59 => 18,  225 => 88,  216 => 64,  212 => 78,  205 => 71,  201 => 67,  196 => 92,  194 => 62,  191 => 70,  189 => 7,  186 => 86,  180 => 55,  172 => 64,  159 => 81,  154 => 54,  147 => 58,  132 => 47,  127 => 52,  121 => 55,  118 => 39,  114 => 39,  104 => 37,  100 => 36,  78 => 26,  75 => 23,  71 => 21,  58 => 25,  34 => 8,  91 => 28,  84 => 23,  26 => 2,  27 => 4,  24 => 3,  21 => 1,  44 => 11,  31 => 6,  25 => 5,  19 => 1,  70 => 13,  63 => 16,  46 => 34,  22 => 2,  163 => 81,  155 => 56,  152 => 55,  149 => 78,  145 => 57,  139 => 71,  131 => 46,  123 => 35,  120 => 50,  115 => 44,  106 => 51,  101 => 33,  96 => 35,  83 => 27,  80 => 32,  74 => 25,  66 => 19,  55 => 24,  52 => 18,  50 => 16,  43 => 12,  41 => 12,  37 => 6,  35 => 5,  32 => 4,  29 => 3,  184 => 88,  178 => 86,  171 => 84,  165 => 60,  162 => 53,  157 => 80,  153 => 62,  151 => 53,  143 => 56,  138 => 55,  136 => 71,  133 => 46,  130 => 39,  122 => 51,  119 => 57,  116 => 41,  111 => 37,  108 => 41,  102 => 34,  98 => 32,  95 => 30,  92 => 21,  89 => 28,  85 => 29,  81 => 24,  73 => 23,  64 => 11,  60 => 20,  57 => 19,  54 => 19,  51 => 37,  48 => 11,  45 => 13,  42 => 8,  39 => 9,  36 => 9,  33 => 10,  30 => 7,);
    }
}
