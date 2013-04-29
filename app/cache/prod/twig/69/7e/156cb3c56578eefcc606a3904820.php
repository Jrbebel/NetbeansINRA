<?php

/* Inra2013urzBundle:Analyse:CreatExcel.html.twig */
class __TwigTemplate_697e156cb3c56578eefcc606a3904820 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((isset($context["parent"]) ? $context["parent"] : null));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["parent"] = "Inra2013urzBundle:Default:IndexUser.html.twig";
        // line 3
        if (((isset($context["User"]) ? $context["User"] : null) == "Chercheur")) {
            // line 4
            $context["parent"] = "Inra2013urzBundle:Default:IndexChercheur.html.twig";
        }
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Exporter Fichier";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/C.css"), "html", null, true);
        echo "\" />
";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "
";
        // line 15
        if (((isset($context["type"]) ? $context["type"] : null) == "createanalyse")) {
            // line 16
            echo "<legend>Créer des analyses pour protocole</legend>
";
        } elseif (((isset($context["type"]) ? $context["type"] : null) == "voiranalyse")) {
            // line 18
            echo "<legend>Visualisation des résultats d'un protocole</legend>
";
        } elseif (((isset($context["type"]) ? $context["type"] : null) == "createxcel")) {
            // line 20
            echo "<legend>Génération du fichier protocole</legend>
";
        } elseif (((isset($context["type"]) ? $context["type"] : null) == "ImportResultat")) {
            // line 22
            echo "<legend>Importation des resultats par feuille excel</legend>
";
        } else {
            // line 24
            echo "<legend>Modification des analyses pour protocole</legend>

";
        }
        // line 27
        echo "<div class=\"well\">

    <form class=\"form-search\" action=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_SearchProtocole"), "html", null, true);
        echo "\" method=\"POST\">
        <label>Quel est votre protocole ?</label>
        </br>

        <input type=\"text\" id=\"protocole\" name=\"protocole\" required=\"required\" />
        <input type=\"hidden\" name=\"idprotocole\" id=\"institut\" />
        <input type=\"hidden\" name=\"demande\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "\"/>
        ";
        // line 36
        if (array_key_exists("Typage", $context)) {
            // line 37
            echo "        <input type=\"hidden\" name=\"typage\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["Typage"]) ? $context["Typage"] : null), "html", null, true);
            echo "\" />
       ";
        }
        // line 39
        echo "        <button type=\"submit\" class=\"btn\">Search</button>
    </form>
</div>

";
        // line 43
        if (array_key_exists("protocole", $context)) {
            // line 44
            echo "
<form class=\"form-search\" action=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["form_path"]) ? $context["form_path"] : null)), "html", null, true);
            echo "\" method=\"POST\">

    <div class=\"alert alert-info\"> <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        <dl class=\"dl-horizontal\">
            <dt>Num Protocole : </dt>
            <dd>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["protocole"]) ? $context["protocole"] : null), 0, array(), "array"), "id"), "html", null, true);
            echo "</dd>
            <dt>Description : </dt>
            <dd>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["protocole"]) ? $context["protocole"] : null), 0, array(), "array"), "NomProtocole"), "html", null, true);
            echo "</dd>
            <dt>Dirigé par : </dt>
            <dd>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["protocole"]) ? $context["protocole"] : null), 0, array(), "array"), "Responsable"), "Nom"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["protocole"]) ? $context["protocole"] : null), 0, array(), "array"), "Responsable"), "Prenom"), "html", null, true);
            echo "</dd>
            <dt>Date validation: </dt>
            <dd>";
            // line 56
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["protocole"]) ? $context["protocole"] : null), 0, array(), "array"), "DateValidation"), "d M Y"), "html", null, true);
            echo "</dd>
            <dt>Description:</dt>
            <dd>";
            // line 58
            echo $this->getAttribute($this->getAttribute((isset($context["protocole"]) ? $context["protocole"] : null), 0, array(), "array"), "Description");
            echo "</dd>
            <dt>Analyse faite : </dt>
            <dd>
    ";
            // line 61
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Analyse"]) ? $context["Analyse"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["analyse"]) {
                // line 62
                echo "
                ";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["analyse"]) ? $context["analyse"] : null), "Nom"), "html", null, true);
                echo ",

                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analyse'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 66
            echo "
                </dd>
            </dl>
            </br>
            <input type=\"hidden\" name=\" numProtocole\" value=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["protocole"]) ? $context["protocole"] : null), 0, array(), "array"), "id"), "html", null, true);
            echo "\" />
            <input type=\"hidden\" name=\"demande\" value=\"";
            // line 71
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
            echo "\" />
        ";
            // line 72
            if (array_key_exists("Typage", $context)) {
                // line 73
                echo "            <input type=\"hidden\" name=\"Typage\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["Typage"]) ? $context["Typage"] : null), "html", null, true);
                echo "\" />
             ";
            }
            // line 75
            echo "            <input type=\"submit\"  value=\"";
            echo twig_escape_filter($this->env, (isset($context["form_value"]) ? $context["form_value"] : null), "html", null, true);
            echo "\" class=\"btn btn-primary\" />
        </div>
    </form>
";
        }
        // line 79
        echo "
";
    }

    // line 82
    public function block_javascripts($context, array $blocks = array())
    {
        // line 83
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.ui.autocomplete.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui-1.10.0.custom.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.ui.core.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.ui.position.min.js"), "html", null, true);
        echo "\"></script>




    <script type=\"text/javascript\">

        \$(document).ready(function() {


            \$(\"#protocole\").autocomplete({
                source: function(request, response) {

                    var id = \$('#protocole').val();
                    console.log(\"Id;\" + id);
                    var DATA = 'id=' + id;
                    \$.ajax({
                        url: \"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_SearchProtocole"), "html", null, true);
        echo "\",
                        method: \"POST\",
                        dataType: \"json\",
                        data: DATA,
                        success: function(data) {
                            response(\$.map(data, function(item, i) {

                                return {
                                    value: item.NomProtocole,
                                    id: item.id,
                                }
                            }))
                        }
                    })
                },
                select: function(event, ui) {

                    \$('#institut').val(ui.item.id);

                },
                change: function(event, ui) {

                    \$('#institut').val(ui.item.id);



                }
            });

        });



        </script>

";
    }

    public function getTemplateName()
    {
        return "Inra2013urzBundle:Analyse:CreatExcel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 104,  125 => 50,  629 => 267,  601 => 234,  583 => 223,  573 => 219,  569 => 218,  565 => 217,  561 => 216,  556 => 215,  547 => 208,  530 => 204,  517 => 194,  508 => 190,  490 => 179,  475 => 171,  470 => 168,  453 => 164,  443 => 161,  421 => 154,  416 => 153,  413 => 152,  404 => 148,  398 => 146,  393 => 144,  377 => 139,  373 => 138,  366 => 136,  349 => 126,  343 => 124,  340 => 123,  336 => 122,  321 => 112,  312 => 105,  279 => 87,  265 => 79,  261 => 78,  252 => 76,  248 => 75,  224 => 67,  188 => 55,  168 => 49,  574 => 273,  553 => 243,  549 => 242,  544 => 241,  536 => 237,  531 => 236,  499 => 217,  497 => 216,  484 => 176,  481 => 205,  474 => 200,  462 => 190,  457 => 165,  454 => 187,  452 => 186,  439 => 176,  436 => 159,  423 => 163,  406 => 159,  394 => 150,  379 => 146,  371 => 143,  362 => 139,  354 => 134,  351 => 133,  347 => 132,  342 => 130,  338 => 129,  335 => 128,  331 => 127,  304 => 114,  297 => 112,  285 => 90,  250 => 88,  227 => 77,  218 => 86,  208 => 63,  166 => 50,  134 => 68,  62 => 18,  128 => 42,  527 => 199,  491 => 178,  476 => 166,  466 => 167,  455 => 155,  438 => 154,  405 => 141,  401 => 140,  397 => 139,  392 => 137,  389 => 143,  372 => 135,  355 => 120,  323 => 111,  298 => 107,  286 => 98,  277 => 91,  213 => 79,  179 => 71,  175 => 70,  167 => 55,  142 => 56,  137 => 47,  117 => 45,  140 => 46,  501 => 179,  498 => 178,  488 => 172,  473 => 171,  461 => 157,  448 => 162,  426 => 155,  422 => 149,  407 => 148,  395 => 140,  382 => 132,  360 => 128,  357 => 127,  345 => 117,  328 => 126,  319 => 110,  313 => 116,  311 => 109,  307 => 108,  303 => 101,  299 => 106,  293 => 105,  283 => 103,  275 => 100,  258 => 91,  236 => 80,  207 => 83,  192 => 63,  182 => 60,  176 => 59,  173 => 91,  86 => 34,  69 => 14,  40 => 5,  698 => 319,  677 => 289,  673 => 288,  668 => 287,  660 => 283,  655 => 282,  652 => 281,  643 => 276,  631 => 266,  626 => 264,  623 => 263,  621 => 262,  608 => 236,  605 => 251,  598 => 246,  586 => 236,  581 => 234,  578 => 220,  576 => 232,  563 => 222,  560 => 221,  551 => 214,  545 => 210,  528 => 235,  519 => 230,  511 => 196,  507 => 220,  502 => 218,  492 => 173,  487 => 184,  485 => 183,  478 => 178,  460 => 174,  450 => 163,  444 => 169,  440 => 168,  433 => 164,  429 => 156,  409 => 142,  396 => 145,  387 => 148,  384 => 141,  380 => 140,  370 => 137,  365 => 140,  359 => 134,  356 => 135,  350 => 129,  337 => 118,  333 => 115,  329 => 115,  324 => 113,  315 => 108,  310 => 106,  308 => 105,  278 => 101,  266 => 93,  259 => 90,  253 => 87,  247 => 84,  241 => 89,  221 => 66,  206 => 64,  199 => 79,  193 => 57,  190 => 62,  174 => 50,  169 => 66,  161 => 47,  158 => 86,  156 => 41,  146 => 76,  170 => 76,  152 => 68,  148 => 67,  113 => 23,  99 => 42,  77 => 16,  115 => 40,  90 => 29,  80 => 26,  53 => 23,  49 => 9,  23 => 3,  243 => 73,  238 => 72,  234 => 79,  231 => 70,  214 => 85,  210 => 84,  203 => 55,  200 => 54,  195 => 8,  164 => 49,  145 => 38,  129 => 35,  124 => 49,  110 => 43,  107 => 50,  87 => 28,  52 => 13,  37 => 8,  56 => 17,  20 => 1,  301 => 113,  295 => 96,  292 => 95,  289 => 94,  287 => 104,  282 => 102,  276 => 86,  273 => 95,  270 => 82,  268 => 93,  263 => 91,  249 => 79,  245 => 74,  230 => 80,  222 => 87,  220 => 62,  215 => 73,  211 => 64,  204 => 82,  198 => 65,  185 => 73,  183 => 72,  177 => 92,  160 => 63,  149 => 37,  123 => 48,  120 => 40,  112 => 43,  106 => 39,  82 => 34,  65 => 13,  38 => 9,  155 => 54,  144 => 47,  141 => 54,  139 => 36,  135 => 54,  126 => 49,  109 => 37,  103 => 35,  101 => 24,  70 => 19,  67 => 20,  61 => 12,  47 => 10,  28 => 3,  105 => 24,  96 => 22,  93 => 20,  83 => 18,  76 => 24,  72 => 22,  68 => 20,  50 => 9,  94 => 35,  88 => 16,  79 => 17,  59 => 12,  43 => 6,  32 => 5,  225 => 71,  216 => 65,  212 => 88,  205 => 84,  201 => 83,  196 => 78,  194 => 62,  191 => 75,  189 => 7,  186 => 61,  180 => 59,  172 => 50,  163 => 63,  159 => 50,  154 => 59,  147 => 58,  132 => 34,  127 => 49,  121 => 26,  118 => 25,  114 => 44,  104 => 28,  100 => 37,  78 => 29,  75 => 23,  71 => 22,  63 => 19,  58 => 15,  34 => 5,  91 => 20,  84 => 31,  74 => 15,  66 => 13,  55 => 14,  41 => 5,  46 => 7,  26 => 1,  22 => 3,  27 => 6,  24 => 4,  29 => 4,  21 => 1,  44 => 6,  35 => 5,  31 => 2,  25 => 5,  19 => 1,  184 => 54,  178 => 71,  171 => 61,  165 => 48,  162 => 81,  157 => 62,  153 => 61,  151 => 52,  143 => 50,  138 => 53,  136 => 35,  133 => 43,  130 => 52,  122 => 40,  119 => 55,  116 => 24,  111 => 32,  108 => 33,  102 => 29,  98 => 36,  95 => 31,  92 => 36,  89 => 20,  85 => 29,  81 => 27,  73 => 25,  64 => 18,  60 => 16,  57 => 11,  54 => 10,  51 => 10,  48 => 7,  45 => 11,  42 => 10,  39 => 6,  36 => 9,  33 => 3,  30 => 4,);
    }
}
