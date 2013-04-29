<?php

/* Inra2013urzBundle:Analyse:FormuChamp.html.twig */
class __TwigTemplate_3345d1d4e8dfbee04ae7c63aab37f796 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("Inra2013urzBundle:Default:IndexUser.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Inra2013urzBundle:Default:IndexUser.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/C.css"), "html", null, true);
        echo "\" />
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "

<table class=\"table table-striped\">
    <thead>


        ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["RequeteChamp"]) ? $context["RequeteChamp"] : $this->getContext($context, "RequeteChamp")));
        foreach ($context['_seq'] as $context["keys"] => $context["Resultat"]) {
            // line 13
            echo "    <td>";
            echo twig_escape_filter($this->env, (isset($context["keys"]) ? $context["keys"] : $this->getContext($context, "keys")), "html", null, true);
            echo "</td>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['keys'], $context['Resultat'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 14
        echo " 


</thead>
<tbody>
    <tr>
        ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["RequeteChamp"]) ? $context["RequeteChamp"] : $this->getContext($context, "RequeteChamp")));
        foreach ($context['_seq'] as $context["_key"] => $context["Resultat"]) {
            // line 21
            echo "            <td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Resultat"]) ? $context["Resultat"] : $this->getContext($context, "Resultat")), "Champ"), "html", null, true);
            echo "</td>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Resultat'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 22
        echo " 
        </tr>

    </tbody>
</table>

<form action=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_FormuleChamp"), "html", null, true);
        echo "\" method=\"post\" >
    <table class=\"table table-striped\">

            <thead> <tr>
 ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["FindChamps"]) ? $context["FindChamps"] : $this->getContext($context, "FindChamps")));
        foreach ($context['_seq'] as $context["keys"] => $context["Resultats"]) {
            // line 33
            echo "
            <th>Formule appliqué pour ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Resultats"]) ? $context["Resultats"] : $this->getContext($context, "Resultats")), "Champ"), "html", null, true);
            echo "</th>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['keys'], $context['Resultats'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 36
        echo "       
          </tr>      
            </thead>
            <tbody>
               
 <tr>

                    ";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form_formule"]) ? $context["form_formule"] : $this->getContext($context, "form_formule")), "ChampsFormule"));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 44
            echo "                   
                    <td>";
            // line 45
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "FormuMath"), 'widget');
            echo "</td>
                     
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 48
        echo "               </tr>
            </tbody>

        

        </table>
        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form_formule"]) ? $context["form_formule"] : $this->getContext($context, "form_formule")), 'errors');
        echo "       
         ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form_formule"]) ? $context["form_formule"] : $this->getContext($context, "form_formule")), 'rest');
        echo "       

        <input type=\"hidden\" name=\"typeAnalyse\" value=";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["NumProtocole"]) ? $context["NumProtocole"] : $this->getContext($context, "NumProtocole")), "html", null, true);
        echo " />
        <input type=\"submit\" class=\"btn btn-primary\" />


    </form>





";
    }

    public function getTemplateName()
    {
        return "Inra2013urzBundle:Analyse:FormuChamp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 104,  125 => 50,  629 => 267,  601 => 234,  583 => 223,  573 => 219,  569 => 218,  565 => 217,  561 => 216,  556 => 215,  547 => 208,  530 => 204,  517 => 194,  508 => 190,  490 => 179,  475 => 171,  470 => 168,  453 => 164,  443 => 161,  421 => 154,  416 => 153,  413 => 152,  404 => 148,  398 => 146,  393 => 144,  377 => 139,  373 => 138,  366 => 136,  349 => 126,  343 => 124,  340 => 123,  336 => 122,  321 => 112,  312 => 105,  279 => 87,  265 => 79,  261 => 78,  252 => 76,  248 => 75,  224 => 67,  188 => 55,  168 => 49,  574 => 273,  553 => 243,  549 => 242,  544 => 241,  536 => 237,  531 => 236,  499 => 217,  497 => 216,  484 => 176,  481 => 205,  474 => 200,  462 => 190,  457 => 165,  454 => 187,  452 => 186,  439 => 176,  436 => 159,  423 => 163,  406 => 159,  394 => 150,  379 => 146,  371 => 143,  362 => 139,  354 => 134,  351 => 133,  347 => 132,  342 => 130,  338 => 129,  335 => 128,  331 => 127,  304 => 114,  297 => 112,  285 => 90,  227 => 77,  218 => 86,  208 => 63,  166 => 50,  134 => 68,  62 => 18,  128 => 44,  527 => 199,  491 => 178,  476 => 166,  466 => 167,  455 => 155,  438 => 154,  405 => 141,  401 => 140,  397 => 139,  392 => 137,  389 => 143,  372 => 135,  355 => 120,  323 => 111,  298 => 107,  286 => 98,  277 => 91,  213 => 79,  179 => 71,  175 => 70,  167 => 55,  142 => 56,  137 => 47,  117 => 45,  140 => 48,  501 => 179,  498 => 178,  488 => 172,  473 => 171,  461 => 157,  448 => 162,  426 => 155,  422 => 149,  407 => 148,  395 => 140,  382 => 132,  360 => 128,  357 => 127,  345 => 117,  328 => 126,  319 => 110,  313 => 116,  311 => 109,  307 => 108,  303 => 101,  299 => 106,  293 => 105,  283 => 103,  275 => 100,  258 => 91,  236 => 80,  207 => 83,  192 => 63,  182 => 60,  176 => 59,  173 => 91,  86 => 34,  69 => 14,  40 => 7,  698 => 319,  677 => 289,  673 => 288,  668 => 287,  660 => 283,  655 => 282,  652 => 281,  643 => 276,  631 => 266,  626 => 264,  623 => 263,  621 => 262,  608 => 236,  605 => 251,  598 => 246,  586 => 236,  581 => 234,  578 => 220,  576 => 232,  563 => 222,  560 => 221,  551 => 214,  545 => 210,  528 => 235,  519 => 230,  511 => 196,  507 => 220,  502 => 218,  492 => 173,  487 => 184,  485 => 183,  478 => 178,  460 => 174,  450 => 163,  444 => 169,  440 => 168,  433 => 164,  429 => 156,  409 => 142,  396 => 145,  387 => 148,  384 => 141,  380 => 140,  370 => 137,  365 => 140,  359 => 134,  356 => 135,  350 => 129,  337 => 118,  333 => 115,  329 => 115,  324 => 113,  315 => 108,  310 => 106,  308 => 105,  278 => 101,  266 => 93,  259 => 90,  253 => 87,  247 => 84,  221 => 66,  206 => 64,  199 => 79,  193 => 57,  190 => 62,  174 => 50,  169 => 66,  161 => 47,  158 => 86,  156 => 41,  146 => 76,  170 => 76,  148 => 54,  113 => 23,  99 => 32,  90 => 29,  53 => 23,  49 => 9,  77 => 16,  23 => 3,  255 => 86,  250 => 88,  243 => 73,  241 => 89,  238 => 72,  234 => 79,  231 => 70,  214 => 85,  210 => 84,  203 => 55,  200 => 54,  195 => 8,  164 => 49,  129 => 35,  124 => 43,  110 => 43,  107 => 50,  87 => 28,  56 => 17,  20 => 1,  301 => 113,  295 => 96,  292 => 95,  289 => 94,  287 => 104,  282 => 102,  276 => 86,  273 => 95,  270 => 82,  268 => 93,  263 => 91,  249 => 79,  245 => 74,  230 => 80,  222 => 87,  220 => 62,  215 => 73,  211 => 64,  204 => 82,  198 => 65,  185 => 73,  183 => 72,  177 => 92,  160 => 63,  112 => 55,  82 => 35,  65 => 13,  38 => 6,  144 => 47,  141 => 54,  135 => 54,  126 => 49,  109 => 37,  103 => 33,  67 => 20,  61 => 12,  47 => 10,  28 => 3,  105 => 24,  93 => 20,  76 => 31,  72 => 22,  68 => 20,  94 => 43,  88 => 39,  79 => 17,  59 => 12,  225 => 71,  216 => 65,  212 => 88,  205 => 84,  201 => 83,  196 => 78,  194 => 62,  191 => 75,  189 => 7,  186 => 61,  180 => 59,  172 => 50,  159 => 50,  154 => 59,  147 => 58,  132 => 34,  127 => 49,  121 => 26,  118 => 59,  114 => 44,  104 => 28,  100 => 47,  78 => 29,  75 => 21,  71 => 20,  58 => 19,  34 => 5,  91 => 20,  84 => 22,  26 => 1,  27 => 6,  24 => 4,  21 => 1,  44 => 6,  31 => 2,  25 => 5,  19 => 1,  70 => 27,  63 => 14,  46 => 11,  22 => 3,  163 => 63,  155 => 54,  152 => 55,  149 => 37,  145 => 38,  139 => 36,  131 => 45,  123 => 48,  120 => 40,  115 => 36,  106 => 34,  101 => 24,  96 => 22,  83 => 26,  80 => 26,  74 => 15,  66 => 13,  55 => 14,  52 => 15,  50 => 12,  43 => 6,  41 => 5,  37 => 8,  35 => 5,  32 => 3,  29 => 2,  184 => 54,  178 => 71,  171 => 61,  165 => 48,  162 => 86,  157 => 57,  153 => 61,  151 => 52,  143 => 50,  138 => 53,  136 => 35,  133 => 43,  130 => 52,  122 => 40,  119 => 55,  116 => 24,  111 => 38,  108 => 33,  102 => 29,  98 => 36,  95 => 31,  92 => 28,  89 => 20,  85 => 29,  81 => 27,  73 => 25,  64 => 23,  60 => 16,  57 => 11,  54 => 13,  51 => 10,  48 => 7,  45 => 11,  42 => 6,  39 => 5,  36 => 9,  33 => 3,  30 => 4,);
    }
}
