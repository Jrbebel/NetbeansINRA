<?php

/* Inra2013urzBundle:Analyse:CreateProtocole.html.twig */
class __TwigTemplate_1986e93555dc505db2b118c38790a15a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("Inra2013urzBundle:Default:IndexChercheur.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Inra2013urzBundle:Default:IndexChercheur.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Create Analyse";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
";
        // line 5
        if (array_key_exists("Status", $context)) {
            // line 6
            echo "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    <p>Le protocole numéro ";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["Num"]) ? $context["Num"] : $this->getContext($context, "Num")), "html", null, true);
            echo " à bien été enregistrer.</p>

</div>

";
        } else {
            // line 11
            echo " <div class=\"well\">
    <form method=\"POST\" action=\"";
            // line 12
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo "\">

        <h4>Création d'un protocole</h4></br>


     ";
            // line 17
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo " 


        </br>
";
            // line 22
            echo "        <div id=\"style1\"></div>
        <select id=\"analyse1\" class=\"select\"><option>Sélectionner catégorie</option></select>
        </br>
        <div id=\"resultat1\"></div>
";
            // line 27
            echo "        <div id=\"style2\"></div>
        <select id=\"analyse2\" class=\"select\"><option>Sélectionner catégorie</option></select>
        </br>
        <div id=\"resultat2\"></div>

        </br>



        <input type=\"submit\" value=\"Annuler\" class=\"btn btn-danger\" />
        <input type=\"submit\" class=\"btn btn-primary\" />






    </form> 
</div>


";
        }
        // line 49
        echo "
";
    }

    // line 52
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 53
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/cupertino/jquery-ui-1.10.2.custom.min.css"), "html", null, true);
        echo "\" />  ";
        echo " 
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/CLEditor1_3_0/jquery.cleditor.css"), "html", null, true);
        echo "\" /> ";
        echo " 
";
    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
        // line 60
        echo "
<script type=\"text/javascript\"  src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui-1.10.0.custom.min.js"), "html", null, true);
        echo "\" ></script> ";
        // line 62
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/CLEditor1_3_0/jquery.cleditor.min.js"), "html", null, true);
        echo "\"></script> ";
        // line 63
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/CLEditor1_3_0/jquery.cleditor.js"), "html", null, true);
        echo "\"></script> ";
        // line 64
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/CLEditor1_3_0/plugin.js"), "html", null, true);
        echo "\"></script> ";
        // line 65
        echo "
<script type=\"text/javascript\">
    \$(document).ready(function() {        

        \$(\".ckeditor\").cleditor();

    });
    </script>

    <script type=\"text/javascript\">

        \$('.date').datepicker({dateFormat: 'dd-mm-yy'})

        \$(function() {

            \$(\"#analyse1\").hide();
            \$(\"#analyse2\").hide();

            \$('input[type=checkbox]').click(function() {
                var cochee = \$(this).is(':checked'); // je regarde si la case est cochée ou non 

                var value = \$(this).attr(\"value\"); //je recupere la valeur value dans le checkbox
                var DATA = 'id=' + value;

                var div_style_titre1 = \"<fieldset><legend>Analyses Chimiques et Biochimiques</legend></fieldset>\";
                var div_style_titre2 = \"<fieldset><legend>Analyses Biologiques</legend></fieldset>\";
                if (cochee == true) {
                    \$(function() {

                        \$.ajax({
                            url: \"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_SearchCategorieAnalyse"), "html", null, true);
        echo "\", // j'utilise le lien pour aller cherche les contenus à rajouter
                            cache: false,
                            dataType: \"json\",
                            method: \"POST\",
                            data: DATA,
                            success: function(data) {

                                \$.map(data, function(item, i) {



                                    if (value == 1) {  // si c le premier type de categorie
                                        \$(\"#analyse1\").show();
                                        var div_data = \"<option value=\" + item.id + \">\" + item.Nom + \"</option>\";
                                        \$(div_data).appendTo(\"#analyse1\");
                                        if (i == 0) { // on affiche le titre qu'une seul fois 
                                            \$(div_style_titre1).appendTo(\"#style1\");
                                        }

                                    } else if (value == 2) {  //si c le deuxieme,on l'affiche dans une autre div 
                                        \$(\"#analyse2\").show();
                                        var div_data = \"<option value=\" + item.id + \">\" + item.Nom + \"</option>\";
                                        \$(div_data).appendTo(\"#analyse2\");

                                        if (i == 0) {
                                            // on affiche le titre qu'une seul fois 
                                            \$(div_style_titre2).appendTo(\"#style2\");
                                        }
                                    }

                                })


                            }

                        })

                    });



                } else { //si on decoche le checkbox

                    if (value == 1) {

                        \$(\"#style1\").empty();
                        \$(\"#analyse1\").empty();
                        \$(\"#analyse1\").hide();

                    } else if (value == 2) {

                        \$(\"#style2\").empty()
                        \$(\"#analyse2\").empty();
                        \$(\"#analyse2\").hide();

                    }
                }


            });


            /***************************************************************************************************************************************/

            \$(\"select#analyse1 \").click(function() {

                \$(\"select#analyse1 option:selected\").each(function() {

                    \$(\"#resultat1\").empty();
                    value = \$(this).attr(\"value\"); //je recupere la valeur value dans le selectionnée

                    var DATA = 'id=' + value;
                    \$(function() {

                        \$.ajax({
                            url: \"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_SearchTypeAnalyse"), "html", null, true);
        echo "\", // j'utilise le lien pour aller cherche les contenus à rajouter
                            cache: false,
                            dataType: \"json\",
                            method: \"POST\",
                            data: DATA,
                            success: function(data) {

                                \$.map(data, function(item, i) {


                                    var div_data = \"<label class='checkbox  inline'><input type='checkbox' name='choix_analyse[]' id='inlineCheckbox'\" + i + \" value=\" + item.id + \">\" + item.Nom + \"</label>\";

                                    \$(div_data).appendTo(\"#resultat1\");



                                })


                            }

                        })

                    });



                });



            });

            \$(\"select#analyse2 \").click(function() {


                \$(\"select#analyse2 option:selected\").each(function() {

                });



            });

        });


        </script>



";
    }

    public function getTemplateName()
    {
        return "Inra2013urzBundle:Analyse:CreateProtocole.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 170,  128 => 60,  125 => 59,  261 => 86,  258 => 85,  241 => 80,  229 => 72,  218 => 65,  197 => 63,  173 => 55,  156 => 50,  142 => 64,  86 => 24,  69 => 14,  40 => 4,  732 => 297,  727 => 294,  724 => 292,  722 => 291,  703 => 275,  699 => 274,  694 => 273,  686 => 269,  681 => 268,  678 => 267,  669 => 262,  657 => 252,  652 => 250,  649 => 249,  647 => 248,  634 => 238,  631 => 237,  624 => 232,  612 => 222,  607 => 220,  604 => 219,  602 => 218,  589 => 208,  586 => 207,  574 => 196,  564 => 191,  562 => 190,  559 => 189,  542 => 185,  536 => 182,  531 => 179,  525 => 175,  509 => 172,  502 => 170,  498 => 168,  494 => 167,  491 => 166,  484 => 164,  480 => 162,  473 => 160,  461 => 158,  459 => 157,  456 => 156,  448 => 153,  445 => 152,  443 => 151,  436 => 149,  432 => 148,  428 => 147,  423 => 144,  406 => 143,  396 => 135,  387 => 133,  384 => 132,  380 => 131,  369 => 123,  365 => 122,  362 => 121,  357 => 118,  351 => 114,  346 => 112,  329 => 108,  322 => 106,  318 => 104,  314 => 103,  311 => 102,  304 => 100,  299 => 97,  280 => 93,  278 => 92,  275 => 91,  267 => 88,  264 => 87,  262 => 86,  255 => 84,  244 => 79,  240 => 77,  223 => 76,  190 => 59,  182 => 56,  175 => 52,  158 => 51,  148 => 48,  134 => 62,  166 => 72,  150 => 67,  146 => 65,  90 => 34,  53 => 10,  49 => 9,  23 => 3,  243 => 81,  238 => 73,  234 => 68,  231 => 67,  214 => 69,  210 => 60,  203 => 55,  200 => 54,  195 => 8,  164 => 53,  129 => 61,  124 => 42,  110 => 43,  107 => 41,  87 => 37,  56 => 11,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 81,  245 => 77,  230 => 75,  222 => 73,  220 => 62,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 57,  183 => 60,  177 => 58,  160 => 57,  112 => 53,  82 => 30,  65 => 13,  38 => 4,  144 => 50,  141 => 54,  135 => 47,  126 => 43,  109 => 52,  103 => 43,  67 => 17,  61 => 12,  47 => 14,  28 => 6,  105 => 24,  93 => 36,  76 => 24,  72 => 32,  68 => 22,  94 => 39,  88 => 27,  79 => 25,  59 => 12,  225 => 96,  216 => 64,  212 => 88,  205 => 68,  201 => 67,  196 => 80,  194 => 62,  191 => 59,  189 => 7,  186 => 76,  180 => 55,  172 => 76,  159 => 61,  154 => 68,  147 => 55,  132 => 45,  127 => 43,  121 => 55,  118 => 54,  114 => 42,  104 => 49,  100 => 33,  78 => 18,  75 => 23,  71 => 15,  58 => 14,  34 => 5,  91 => 38,  84 => 31,  26 => 2,  27 => 4,  24 => 4,  21 => 1,  44 => 13,  31 => 2,  25 => 3,  19 => 2,  70 => 19,  63 => 20,  46 => 7,  22 => 3,  163 => 63,  155 => 58,  152 => 49,  149 => 51,  145 => 69,  139 => 50,  131 => 61,  123 => 47,  120 => 43,  115 => 40,  106 => 36,  101 => 42,  96 => 21,  83 => 18,  80 => 27,  74 => 22,  66 => 21,  55 => 15,  52 => 12,  50 => 9,  43 => 5,  41 => 5,  37 => 3,  35 => 4,  32 => 2,  29 => 2,  184 => 70,  178 => 95,  171 => 62,  165 => 58,  162 => 81,  157 => 56,  153 => 74,  151 => 73,  143 => 67,  138 => 63,  136 => 46,  133 => 43,  130 => 47,  122 => 44,  119 => 36,  116 => 46,  111 => 38,  108 => 37,  102 => 30,  98 => 39,  95 => 39,  92 => 30,  89 => 19,  85 => 29,  81 => 36,  73 => 19,  64 => 23,  60 => 19,  57 => 11,  54 => 12,  51 => 13,  48 => 7,  45 => 6,  42 => 12,  39 => 11,  36 => 6,  33 => 8,  30 => 7,);
    }
}
