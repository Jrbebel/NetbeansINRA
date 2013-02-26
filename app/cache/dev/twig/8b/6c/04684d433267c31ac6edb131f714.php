<?php

/* SensioDistributionBundle:Configurator:form.html.twig */
class __TwigTemplate_8b6c04684d433267c31ac6edb131f714 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("form_div_layout.html.twig");

        $this->blocks = array(
            'form_rows' => array($this, 'block_form_rows'),
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form_rows($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"symfony-form-errors\">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
    </div>
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 8
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'row');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    // line 12
    public function block_form_row($context, array $blocks = array())
    {
        // line 13
        echo "    <div class=\"symfony-form-row\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'label');
        echo "
        <div class=\"symfony-form-field\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
            <div class=\"symfony-form-errors\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
            </div>
        </div>
    </div>
";
    }

    // line 24
    public function block_form_label($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        if (twig_test_empty($this->getContext($context, "label"))) {
            // line 26
            echo "        ";
            $context["label"] = $this->env->getExtension('form')->renderer->humanize($this->getContext($context, "name"));
            // line 27
            echo "    ";
        }
        // line 28
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "\">
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label")), "html", null, true);
        echo "
        ";
        // line 30
        if ($this->getContext($context, "required")) {
            // line 31
            echo "            <span class=\"symfony-form-required\" title=\"This field is required\">*</span>
        ";
        }
        // line 33
        echo "    </label>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  388 => 160,  385 => 159,  379 => 158,  377 => 157,  370 => 156,  366 => 155,  362 => 153,  360 => 152,  357 => 151,  354 => 150,  352 => 149,  344 => 147,  342 => 146,  339 => 145,  330 => 140,  327 => 139,  320 => 135,  314 => 131,  311 => 130,  306 => 128,  280 => 114,  275 => 111,  264 => 105,  258 => 103,  254 => 101,  247 => 97,  234 => 89,  231 => 88,  221 => 83,  169 => 56,  107 => 27,  97 => 23,  209 => 77,  176 => 61,  170 => 60,  356 => 163,  347 => 160,  343 => 159,  340 => 158,  335 => 157,  333 => 141,  325 => 138,  323 => 149,  316 => 145,  309 => 141,  302 => 137,  281 => 125,  274 => 121,  259 => 109,  228 => 87,  214 => 82,  206 => 78,  203 => 77,  192 => 72,  158 => 56,  140 => 42,  125 => 44,  790 => 469,  787 => 468,  776 => 466,  772 => 465,  768 => 463,  755 => 462,  729 => 457,  726 => 456,  707 => 454,  690 => 453,  686 => 451,  682 => 450,  678 => 449,  674 => 448,  670 => 447,  666 => 446,  663 => 445,  661 => 444,  644 => 443,  633 => 442,  618 => 437,  613 => 435,  609 => 434,  606 => 433,  604 => 432,  590 => 431,  558 => 401,  540 => 398,  523 => 397,  520 => 396,  518 => 395,  513 => 393,  508 => 391,  252 => 100,  190 => 67,  181 => 87,  173 => 85,  161 => 80,  156 => 77,  148 => 46,  164 => 63,  134 => 54,  113 => 40,  262 => 236,  260 => 235,  240 => 93,  238 => 97,  86 => 28,  90 => 27,  315 => 140,  308 => 129,  305 => 134,  299 => 130,  288 => 129,  284 => 121,  261 => 113,  257 => 234,  243 => 106,  239 => 104,  236 => 103,  233 => 102,  226 => 86,  224 => 99,  217 => 83,  213 => 96,  207 => 76,  202 => 73,  175 => 87,  69 => 20,  166 => 82,  150 => 75,  146 => 65,  129 => 61,  87 => 26,  188 => 66,  167 => 64,  137 => 47,  62 => 14,  53 => 17,  40 => 11,  128 => 45,  77 => 24,  23 => 3,  49 => 13,  210 => 72,  199 => 61,  193 => 68,  182 => 64,  179 => 53,  174 => 58,  168 => 82,  110 => 39,  56 => 12,  20 => 1,  301 => 125,  295 => 121,  292 => 120,  289 => 119,  287 => 118,  282 => 115,  276 => 248,  273 => 110,  270 => 84,  268 => 107,  263 => 80,  249 => 108,  245 => 96,  230 => 101,  222 => 73,  220 => 98,  215 => 79,  211 => 81,  204 => 94,  198 => 69,  185 => 68,  183 => 63,  177 => 59,  160 => 59,  112 => 52,  82 => 19,  65 => 22,  38 => 7,  144 => 73,  141 => 66,  135 => 47,  126 => 61,  109 => 51,  103 => 25,  67 => 16,  61 => 12,  47 => 11,  91 => 35,  84 => 25,  28 => 3,  225 => 88,  216 => 90,  212 => 78,  205 => 71,  201 => 83,  196 => 69,  194 => 62,  191 => 70,  189 => 59,  186 => 76,  180 => 72,  172 => 64,  159 => 79,  154 => 48,  147 => 58,  132 => 47,  127 => 52,  121 => 55,  118 => 39,  114 => 39,  104 => 31,  100 => 24,  78 => 26,  75 => 23,  71 => 20,  34 => 5,  44 => 10,  94 => 30,  88 => 20,  59 => 13,  105 => 35,  93 => 28,  79 => 18,  76 => 17,  72 => 18,  68 => 19,  58 => 14,  24 => 2,  27 => 3,  25 => 3,  21 => 2,  31 => 4,  26 => 3,  19 => 1,  70 => 15,  63 => 16,  46 => 12,  22 => 2,  163 => 81,  155 => 56,  152 => 77,  149 => 54,  145 => 57,  139 => 71,  131 => 46,  123 => 35,  120 => 50,  115 => 44,  106 => 36,  101 => 45,  96 => 35,  83 => 27,  80 => 32,  74 => 21,  66 => 19,  55 => 9,  52 => 14,  50 => 10,  43 => 12,  41 => 7,  37 => 7,  35 => 6,  32 => 6,  29 => 3,  184 => 70,  178 => 62,  171 => 57,  165 => 54,  162 => 53,  157 => 56,  153 => 62,  151 => 47,  143 => 43,  138 => 55,  136 => 52,  133 => 46,  130 => 39,  122 => 51,  119 => 45,  116 => 31,  111 => 29,  108 => 33,  102 => 30,  98 => 29,  95 => 31,  92 => 21,  89 => 29,  85 => 27,  81 => 24,  73 => 16,  64 => 11,  60 => 15,  57 => 16,  54 => 12,  51 => 13,  48 => 11,  45 => 8,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
