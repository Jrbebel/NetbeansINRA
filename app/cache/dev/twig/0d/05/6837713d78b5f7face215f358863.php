<?php

/* SensioDistributionBundle:Configurator/Step:secret.html.twig */
class __TwigTemplate_0d056837713d78b5f7face215f358863 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Configure global Secret";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "SensioDistributionBundle::Configurator/form.html.twig"));
        // line 7
        echo "    ";
        $this->env->loadTemplate("SensioDistributionBundle::Configurator/steps.html.twig")->display(array_merge($context, array("index" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "count" => (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")))));
        // line 8
        echo "
    <h1>Global Secret</h1>
    <p>Configure the global secret for your website (the secret is used for the CSRF protection among other things):</p>

    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <form action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_configurator_step", array("index" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")))), "html", null, true);
        echo " \" method=\"POST\">
        <div class=\"symfony-form-row\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "secret"), 'label');
        echo "
            <div class=\"symfony-form-field\">
                ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "secret"), 'widget');
        echo "
                <a class=\"symfony-button-grey\" href=\"#\" onclick=\"generateSecret(); return false;\">Generate</a>
                <div class=\"symfony-form-errors\">
                    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "secret"), 'errors');
        echo "
                </div>
            </div>
        </div>

        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

        <div class=\"symfony-form-footer\">
            <p><input type=\"submit\" value=\"Next Step\" class=\"symfony-button-grey\" /></p>
            <p>* mandatory fields</p>
        </div>

    </form>

    <script type=\"text/javascript\">
        function generateSecret()
        {
            var result = '';
            for (i=0; i < 32; i++) {
                result += Math.round(Math.random()*16).toString(16);
            }
            document.getElementById('distributionbundle_secret_step_secret').value = result;
        }
    </script>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator/Step:secret.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 236,  260 => 235,  257 => 234,  790 => 469,  787 => 468,  776 => 466,  772 => 465,  768 => 463,  755 => 462,  729 => 457,  726 => 456,  707 => 454,  690 => 453,  686 => 451,  682 => 450,  678 => 449,  674 => 448,  670 => 447,  666 => 446,  663 => 445,  661 => 444,  644 => 443,  633 => 442,  618 => 437,  613 => 435,  609 => 434,  606 => 433,  604 => 432,  590 => 431,  558 => 401,  540 => 398,  523 => 397,  520 => 396,  518 => 395,  513 => 393,  181 => 87,  150 => 75,  316 => 145,  309 => 141,  302 => 137,  281 => 125,  274 => 121,  217 => 83,  388 => 160,  385 => 159,  352 => 149,  344 => 147,  339 => 145,  330 => 140,  327 => 139,  325 => 150,  320 => 135,  314 => 131,  306 => 128,  280 => 114,  264 => 105,  254 => 101,  240 => 219,  228 => 89,  226 => 86,  209 => 73,  202 => 73,  97 => 23,  381 => 147,  374 => 142,  353 => 129,  341 => 122,  326 => 120,  322 => 118,  305 => 116,  291 => 111,  288 => 129,  272 => 105,  269 => 104,  246 => 101,  242 => 104,  125 => 44,  629 => 267,  601 => 234,  583 => 223,  573 => 219,  569 => 218,  565 => 217,  561 => 216,  556 => 215,  547 => 208,  530 => 204,  517 => 194,  508 => 391,  490 => 179,  475 => 171,  470 => 168,  453 => 164,  443 => 161,  421 => 154,  416 => 153,  413 => 152,  404 => 148,  398 => 146,  393 => 144,  377 => 157,  373 => 138,  366 => 155,  349 => 128,  343 => 159,  340 => 158,  336 => 122,  321 => 112,  312 => 105,  279 => 87,  265 => 79,  261 => 78,  252 => 138,  248 => 75,  224 => 97,  188 => 67,  168 => 49,  574 => 273,  553 => 243,  549 => 242,  544 => 241,  536 => 237,  531 => 236,  499 => 217,  497 => 216,  484 => 176,  481 => 205,  474 => 200,  462 => 190,  457 => 165,  454 => 187,  452 => 186,  439 => 176,  436 => 159,  423 => 163,  406 => 159,  394 => 150,  379 => 158,  371 => 141,  362 => 153,  354 => 150,  351 => 133,  347 => 160,  342 => 146,  338 => 129,  335 => 157,  331 => 127,  304 => 114,  297 => 112,  285 => 109,  227 => 77,  218 => 86,  208 => 63,  166 => 82,  134 => 54,  62 => 16,  128 => 45,  527 => 199,  491 => 178,  476 => 166,  466 => 167,  455 => 155,  438 => 154,  405 => 141,  401 => 140,  397 => 139,  392 => 137,  389 => 143,  372 => 135,  355 => 120,  323 => 149,  298 => 107,  286 => 98,  277 => 91,  213 => 79,  179 => 71,  175 => 70,  167 => 64,  142 => 56,  137 => 47,  117 => 45,  140 => 49,  501 => 179,  498 => 178,  488 => 172,  473 => 171,  461 => 157,  448 => 162,  426 => 155,  422 => 149,  407 => 148,  395 => 140,  382 => 132,  360 => 152,  357 => 151,  345 => 117,  328 => 126,  319 => 110,  313 => 116,  311 => 130,  307 => 108,  303 => 101,  299 => 106,  293 => 105,  283 => 103,  275 => 111,  258 => 103,  236 => 80,  207 => 95,  192 => 72,  182 => 69,  176 => 61,  173 => 85,  86 => 28,  69 => 18,  40 => 8,  698 => 319,  677 => 289,  673 => 288,  668 => 287,  660 => 283,  655 => 282,  652 => 281,  643 => 276,  631 => 266,  626 => 264,  623 => 263,  621 => 262,  608 => 236,  605 => 251,  598 => 246,  586 => 236,  581 => 234,  578 => 220,  576 => 232,  563 => 222,  560 => 221,  551 => 214,  545 => 210,  528 => 235,  519 => 230,  511 => 196,  507 => 220,  502 => 218,  492 => 173,  487 => 184,  485 => 183,  478 => 178,  460 => 174,  450 => 163,  444 => 169,  440 => 168,  433 => 164,  429 => 156,  409 => 142,  396 => 145,  387 => 148,  384 => 141,  380 => 140,  370 => 156,  365 => 137,  359 => 134,  356 => 163,  350 => 129,  337 => 118,  333 => 156,  329 => 115,  324 => 113,  315 => 108,  310 => 106,  308 => 129,  278 => 107,  266 => 93,  259 => 109,  253 => 87,  247 => 97,  221 => 83,  206 => 78,  199 => 79,  193 => 68,  190 => 89,  174 => 58,  169 => 56,  161 => 80,  158 => 56,  156 => 77,  146 => 76,  170 => 60,  148 => 74,  113 => 40,  99 => 36,  90 => 41,  53 => 38,  49 => 15,  77 => 18,  23 => 3,  255 => 86,  250 => 88,  243 => 73,  241 => 98,  238 => 218,  234 => 89,  231 => 88,  214 => 82,  210 => 84,  203 => 77,  200 => 54,  195 => 8,  164 => 63,  129 => 35,  124 => 43,  110 => 38,  107 => 37,  87 => 33,  56 => 39,  20 => 1,  301 => 125,  295 => 133,  292 => 120,  289 => 119,  287 => 118,  282 => 115,  276 => 248,  273 => 110,  270 => 82,  268 => 107,  263 => 91,  249 => 79,  245 => 101,  230 => 80,  222 => 87,  220 => 62,  215 => 79,  211 => 81,  204 => 94,  198 => 74,  185 => 68,  183 => 63,  177 => 59,  160 => 59,  112 => 39,  82 => 26,  65 => 17,  38 => 6,  144 => 73,  141 => 54,  135 => 47,  126 => 61,  109 => 51,  103 => 25,  67 => 18,  61 => 18,  47 => 9,  28 => 3,  105 => 35,  93 => 42,  76 => 34,  72 => 21,  68 => 30,  94 => 30,  88 => 30,  79 => 23,  59 => 15,  225 => 88,  216 => 65,  212 => 78,  205 => 71,  201 => 83,  196 => 92,  194 => 62,  191 => 70,  189 => 7,  186 => 86,  180 => 59,  172 => 64,  159 => 81,  154 => 54,  147 => 58,  132 => 47,  127 => 52,  121 => 26,  118 => 59,  114 => 39,  104 => 37,  100 => 36,  78 => 25,  75 => 24,  71 => 23,  58 => 14,  34 => 5,  91 => 28,  84 => 25,  26 => 3,  27 => 5,  24 => 3,  21 => 1,  44 => 8,  31 => 5,  25 => 5,  19 => 1,  70 => 20,  63 => 16,  46 => 10,  22 => 2,  163 => 81,  155 => 54,  152 => 55,  149 => 78,  145 => 57,  139 => 71,  131 => 46,  123 => 35,  120 => 50,  115 => 40,  106 => 34,  101 => 33,  96 => 35,  83 => 27,  80 => 32,  74 => 21,  66 => 19,  55 => 13,  52 => 13,  50 => 12,  43 => 7,  41 => 7,  37 => 7,  35 => 5,  32 => 6,  29 => 3,  184 => 88,  178 => 86,  171 => 84,  165 => 60,  162 => 53,  157 => 80,  153 => 62,  151 => 53,  143 => 56,  138 => 55,  136 => 71,  133 => 43,  130 => 39,  122 => 51,  119 => 57,  116 => 41,  111 => 38,  108 => 41,  102 => 34,  98 => 32,  95 => 34,  92 => 31,  89 => 30,  85 => 29,  81 => 24,  73 => 23,  64 => 17,  60 => 20,  57 => 14,  54 => 13,  51 => 11,  48 => 11,  45 => 11,  42 => 12,  39 => 10,  36 => 7,  33 => 6,  30 => 5,);
    }
}
