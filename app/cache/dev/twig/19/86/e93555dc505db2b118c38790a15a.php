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
        return array (  142 => 64,  134 => 62,  128 => 60,  125 => 59,  253 => 85,  224 => 72,  213 => 65,  192 => 63,  168 => 55,  137 => 47,  62 => 13,  40 => 4,  610 => 241,  605 => 240,  598 => 238,  595 => 237,  586 => 232,  565 => 214,  562 => 213,  555 => 208,  534 => 190,  531 => 189,  519 => 178,  508 => 172,  506 => 171,  503 => 170,  486 => 166,  480 => 163,  475 => 160,  469 => 156,  453 => 153,  446 => 151,  442 => 149,  438 => 148,  435 => 147,  428 => 145,  422 => 142,  419 => 141,  411 => 138,  408 => 137,  406 => 136,  399 => 134,  395 => 133,  391 => 132,  384 => 129,  367 => 128,  357 => 120,  348 => 118,  345 => 117,  341 => 116,  330 => 108,  326 => 107,  323 => 106,  318 => 103,  312 => 99,  307 => 97,  290 => 93,  283 => 91,  279 => 89,  275 => 88,  272 => 87,  265 => 85,  259 => 82,  256 => 170,  248 => 78,  236 => 80,  221 => 67,  182 => 57,  161 => 45,  156 => 42,  99 => 31,  166 => 47,  150 => 67,  146 => 65,  90 => 29,  53 => 17,  49 => 9,  23 => 3,  243 => 76,  238 => 73,  234 => 68,  231 => 67,  214 => 61,  210 => 60,  203 => 55,  200 => 54,  195 => 59,  164 => 82,  129 => 36,  124 => 49,  110 => 43,  107 => 33,  87 => 37,  56 => 11,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 71,  222 => 73,  220 => 62,  215 => 70,  211 => 64,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  112 => 53,  82 => 30,  65 => 16,  38 => 4,  144 => 50,  141 => 54,  135 => 47,  126 => 45,  109 => 52,  103 => 43,  67 => 17,  61 => 16,  47 => 14,  28 => 6,  105 => 24,  93 => 20,  76 => 33,  72 => 32,  68 => 15,  94 => 39,  88 => 27,  79 => 29,  59 => 12,  225 => 69,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 7,  186 => 59,  180 => 72,  172 => 76,  159 => 53,  154 => 68,  147 => 49,  132 => 48,  127 => 45,  121 => 55,  118 => 54,  114 => 42,  104 => 49,  100 => 33,  78 => 24,  75 => 23,  71 => 24,  58 => 12,  34 => 5,  91 => 38,  84 => 31,  26 => 2,  27 => 4,  24 => 4,  21 => 1,  44 => 13,  31 => 2,  25 => 3,  19 => 2,  70 => 19,  63 => 20,  46 => 7,  22 => 3,  163 => 46,  155 => 58,  152 => 49,  149 => 51,  145 => 69,  139 => 41,  131 => 61,  123 => 47,  120 => 43,  115 => 35,  106 => 36,  101 => 42,  96 => 30,  83 => 18,  80 => 27,  74 => 22,  66 => 14,  55 => 15,  52 => 12,  50 => 9,  43 => 5,  41 => 5,  37 => 3,  35 => 4,  32 => 2,  29 => 2,  184 => 70,  178 => 95,  171 => 49,  165 => 58,  162 => 81,  157 => 56,  153 => 51,  151 => 50,  143 => 48,  138 => 63,  136 => 50,  133 => 38,  130 => 47,  122 => 43,  119 => 42,  116 => 46,  111 => 38,  108 => 37,  102 => 41,  98 => 22,  95 => 39,  92 => 30,  89 => 19,  85 => 24,  81 => 24,  73 => 18,  64 => 23,  60 => 19,  57 => 13,  54 => 11,  51 => 13,  48 => 7,  45 => 6,  42 => 12,  39 => 11,  36 => 6,  33 => 8,  30 => 7,);
    }
}
