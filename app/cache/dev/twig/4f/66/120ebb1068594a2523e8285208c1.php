<?php

/* SensioDistributionBundle:Configurator:final.html.twig */
class __TwigTemplate_4f66120ebb1068594a2523e8285208c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'content_class' => array($this, 'block_content_class'),
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
    public function block_content_class($context, array $blocks = array())
    {
        echo "config_done";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <h1>Well done!</h1>
    ";
        // line 6
        if ((isset($context["is_writable"]) ? $context["is_writable"] : $this->getContext($context, "is_writable"))) {
            // line 7
            echo "    <h2>Your distribution is configured!</h2>
    ";
        } else {
            // line 9
            echo "    <h2 class=\"configure-error\">Your distribution is almost configured but...</h2>
    ";
        }
        // line 11
        echo "    <h3>
        <span>
            ";
        // line 13
        if ((isset($context["is_writable"]) ? $context["is_writable"] : $this->getContext($context, "is_writable"))) {
            // line 14
            echo "                Your parameters.yml file has been overwritten with these parameters (in <em>";
            echo twig_escape_filter($this->env, (isset($context["yml_path"]) ? $context["yml_path"] : $this->getContext($context, "yml_path")), "html", null, true);
            echo "</em>):
            ";
        } else {
            // line 16
            echo "                Your parameters.yml file is not writeable! Here are the parameters you can copy and paste in <em>";
            echo twig_escape_filter($this->env, (isset($context["yml_path"]) ? $context["yml_path"] : $this->getContext($context, "yml_path")), "html", null, true);
            echo "</em>:
            ";
        }
        // line 18
        echo "        </span>
    </h3>

    <textarea class=\"symfony-configuration\">";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "html", null, true);
        echo "</textarea>

    ";
        // line 23
        if ((isset($context["welcome_url"]) ? $context["welcome_url"] : $this->getContext($context, "welcome_url"))) {
            // line 24
            echo "        <ul>
            <li><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["welcome_url"]) ? $context["welcome_url"] : $this->getContext($context, "welcome_url")), "html", null, true);
            echo "\">Go to the Welcome page</a></li>
        </ul>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:final.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 236,  260 => 235,  790 => 469,  787 => 468,  776 => 466,  772 => 465,  768 => 463,  755 => 462,  729 => 457,  726 => 456,  707 => 454,  690 => 453,  686 => 451,  682 => 450,  678 => 449,  674 => 448,  670 => 447,  666 => 446,  663 => 445,  661 => 444,  644 => 443,  633 => 442,  618 => 437,  613 => 435,  609 => 434,  606 => 433,  604 => 432,  590 => 431,  558 => 401,  540 => 398,  523 => 397,  520 => 396,  518 => 395,  513 => 393,  508 => 391,  181 => 87,  173 => 85,  161 => 80,  156 => 77,  356 => 163,  343 => 159,  340 => 158,  335 => 157,  323 => 149,  316 => 145,  302 => 137,  281 => 125,  274 => 121,  259 => 109,  238 => 218,  192 => 72,  158 => 56,  113 => 40,  176 => 61,  170 => 60,  388 => 160,  379 => 158,  370 => 156,  366 => 155,  362 => 153,  360 => 152,  357 => 151,  354 => 150,  352 => 149,  344 => 147,  342 => 146,  339 => 145,  333 => 156,  327 => 139,  325 => 150,  320 => 135,  314 => 131,  311 => 130,  306 => 128,  280 => 114,  275 => 111,  264 => 105,  258 => 103,  254 => 101,  252 => 138,  247 => 97,  240 => 219,  234 => 89,  231 => 88,  228 => 89,  221 => 83,  209 => 73,  190 => 89,  169 => 56,  148 => 74,  107 => 37,  97 => 23,  164 => 63,  134 => 54,  86 => 28,  315 => 140,  308 => 129,  305 => 134,  299 => 130,  288 => 129,  284 => 121,  261 => 113,  257 => 234,  243 => 106,  239 => 104,  236 => 103,  226 => 86,  224 => 99,  213 => 96,  207 => 95,  202 => 73,  175 => 87,  69 => 18,  167 => 64,  137 => 47,  40 => 8,  128 => 45,  77 => 18,  456 => 151,  453 => 150,  435 => 136,  418 => 132,  408 => 125,  392 => 122,  385 => 159,  381 => 118,  377 => 157,  374 => 116,  367 => 114,  361 => 111,  358 => 110,  350 => 107,  347 => 160,  345 => 105,  338 => 103,  334 => 102,  330 => 140,  326 => 99,  309 => 141,  300 => 91,  291 => 90,  265 => 74,  248 => 70,  241 => 68,  237 => 66,  233 => 102,  223 => 62,  217 => 83,  214 => 82,  206 => 78,  203 => 77,  188 => 67,  140 => 49,  125 => 44,  99 => 20,  62 => 16,  166 => 82,  150 => 75,  146 => 65,  129 => 61,  90 => 41,  87 => 33,  53 => 38,  49 => 15,  23 => 3,  210 => 72,  199 => 61,  193 => 68,  182 => 69,  179 => 44,  174 => 58,  168 => 82,  110 => 38,  56 => 39,  20 => 1,  301 => 125,  295 => 133,  292 => 120,  289 => 119,  287 => 118,  282 => 115,  276 => 248,  273 => 110,  270 => 84,  268 => 107,  263 => 80,  249 => 108,  245 => 101,  230 => 101,  222 => 73,  220 => 98,  215 => 79,  211 => 81,  204 => 94,  198 => 74,  185 => 68,  183 => 63,  177 => 59,  160 => 59,  112 => 39,  82 => 26,  65 => 17,  38 => 5,  144 => 73,  141 => 66,  135 => 47,  126 => 61,  109 => 51,  103 => 25,  67 => 18,  61 => 18,  47 => 9,  28 => 3,  105 => 35,  93 => 42,  76 => 34,  72 => 21,  68 => 30,  94 => 30,  88 => 30,  79 => 23,  59 => 21,  225 => 88,  216 => 90,  212 => 78,  205 => 71,  201 => 53,  196 => 92,  194 => 51,  191 => 70,  189 => 59,  186 => 76,  180 => 72,  172 => 64,  159 => 79,  154 => 54,  147 => 58,  132 => 47,  127 => 52,  121 => 55,  118 => 39,  114 => 39,  104 => 37,  100 => 36,  78 => 24,  75 => 24,  71 => 23,  58 => 14,  34 => 5,  91 => 28,  84 => 25,  26 => 3,  27 => 5,  24 => 3,  21 => 1,  44 => 11,  31 => 5,  25 => 3,  19 => 1,  70 => 13,  63 => 16,  46 => 10,  22 => 2,  163 => 81,  155 => 56,  152 => 77,  149 => 54,  145 => 57,  139 => 71,  131 => 46,  123 => 35,  120 => 50,  115 => 40,  106 => 53,  101 => 33,  96 => 35,  83 => 27,  80 => 32,  74 => 21,  66 => 19,  55 => 13,  52 => 13,  50 => 18,  43 => 7,  41 => 6,  37 => 7,  35 => 4,  32 => 6,  29 => 3,  184 => 88,  178 => 86,  171 => 84,  165 => 60,  162 => 53,  157 => 56,  153 => 62,  151 => 53,  143 => 56,  138 => 55,  136 => 52,  133 => 46,  130 => 39,  122 => 51,  119 => 57,  116 => 41,  111 => 37,  108 => 41,  102 => 34,  98 => 32,  95 => 34,  92 => 31,  89 => 30,  85 => 27,  81 => 24,  73 => 23,  64 => 11,  60 => 20,  57 => 14,  54 => 17,  51 => 11,  48 => 11,  45 => 11,  42 => 12,  39 => 10,  36 => 7,  33 => 6,  30 => 5,);
    }
}
