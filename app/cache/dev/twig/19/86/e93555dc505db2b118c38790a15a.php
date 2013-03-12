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
    <p>Le protocole numéro a bien été enregistrer.</p>

</div>

";
        } else {
            // line 11
            echo " <div class=\"well\">
    <form method=\"POST\" action=\"";
            // line 12
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo "\">

        <h4>Création du protocole</h4></br>


     ";
            // line 17
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo " 



        </br>
";
            // line 23
            echo "        <div id=\"style1\"></div>
        <select id=\"analyse1\" class=\"select\"><option>Sélectionner catégorie</option></select>
        </br>
        <div id=\"resultat1\"></div>
";
            // line 28
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
        // line 50
        echo "
";
    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        // line 54
        echo "
<script type=\"text/javascript\">
    \$(function(){
        
    \$(\"#analyse1\").hide();
    \$(\"#analyse2\").hide();

     \$('input[type=checkbox]').click(function(){
      var cochee = \$(this).is(':checked'); // je regarde si la case est cochée ou non 
      value=\$(this).attr(\"value\"); //je recupere la valeur value dans le checkbox
      var DATA= 'id=' + value;
      var div_style_titre1=\"<fieldset><legend>Analyses Chimiques et Biochimiques</legend></fieldset>\"; 
      var div_style_titre2=\"<fieldset><legend>Analyses Biologiques</legend></fieldset>\"; 
 if (cochee == true) {
                \$(function(){ 
             
                        \$.ajax({
                            url: \"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_SearchCategorieAnalyse"), "html", null, true);
        echo "\", // j'utilise le lien pour aller cherche les contenus à rajouter
                            cache: false,
                            dataType: \"json\",
                            method: \"POST\",
                            data: DATA,
                            success: function (data) {
                       
                                \$.map(data, function (item,i) {
   
                         

                                  if(value == 1){  // si c le premier type de categorie
 \$(\"#analyse1\").show(); 
var div_data =\"<option value=\"+item.id+\">\"+item.Nom+\"</option>\";
\$(div_data).appendTo(\"#analyse1\");
if(i == 0){ // on affiche le titre qu'une seul fois 
   \$(div_style_titre1).appendTo(\"#style1\"); 
    }

}else if(value == 2){  //si c le deuxieme,on l'affiche dans une autre div 
\$(\"#analyse2\").show(); 
var div_data =\"<option value=\"+item.id+\">\"+item.Nom+\"</option>\";
\$(div_data).appendTo(\"#analyse2\");

if(i == 0){ 
    // on affiche le titre qu'une seul fois 
   \$(div_style_titre2).appendTo(\"#style2\"); 
    }
    }
                     
                            })
           
               
                        }
                        
                    })
          
              }); 
                  
                 
                  
}else { //si on decoche le checkbox

   if(value == 1){
   
                 \$(\"#style1\").empty();
                 \$(\"#analyse1\").empty();
                 \$(\"#analyse1\").hide();
                
        }else if(value == 2){
        
                \$(\"#style2\").empty()
                \$(\"#analyse2\").empty();
                \$(\"#analyse2\").hide();
                
}
}
            
    
            }); 
            
            
            /***************************************************************************************************************************************/
            
            \$(\"select#analyse1 \").click(function(){

 \$(\"select#analyse1 option:selected\").each(function () {
  
\$(\"#resultat1\").empty();                 
            value=\$(this).attr(\"value\"); //je recupere la valeur value dans le selectionnée
            var DATA= 'id=' + value;
                           \$(function(){ 
             
                        \$.ajax({
                            url: \"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_SearchTypeAnalyse"), "html", null, true);
        echo "\", // j'utilise le lien pour aller cherche les contenus à rajouter
                            cache: false,
                            dataType: \"json\",
                            method: \"POST\",
                            data: DATA,
                            success: function (data) {
                       
                                \$.map(data, function (item,i) {
   
   
var div_data =\"<label class='checkbox  inline'><input type='checkbox' name='choix_analyse[]' id='inlineCheckbox'\"+i+\" value=\"+item.id+\">\"+item.Nom+\"</label>\";

\$(div_data).appendTo(\"#resultat1\");


                     
                            })
           
               
                        }
                        
                    })
          
              });
           
           
           
      });

             

            }); 
            
              \$(\"select#analyse2 \").click(function(){


 \$(\"select#analyse2 option:selected\").each(function () {
           alert(\"selectionné 2 :\"+\$(this).attr(\"value\"));
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
        return array (  77 => 28,  256 => 86,  253 => 85,  236 => 80,  224 => 72,  213 => 65,  168 => 55,  137 => 47,  62 => 13,  40 => 5,  535 => 197,  530 => 196,  523 => 194,  520 => 193,  512 => 189,  490 => 171,  480 => 162,  469 => 155,  467 => 154,  464 => 153,  447 => 149,  437 => 142,  421 => 139,  414 => 137,  410 => 135,  406 => 134,  403 => 133,  396 => 131,  390 => 128,  387 => 127,  379 => 124,  376 => 123,  374 => 122,  367 => 120,  363 => 119,  359 => 118,  355 => 116,  338 => 115,  329 => 108,  320 => 107,  316 => 106,  305 => 98,  302 => 97,  294 => 91,  277 => 87,  266 => 83,  262 => 82,  259 => 81,  252 => 79,  246 => 76,  243 => 75,  232 => 71,  223 => 68,  208 => 61,  182 => 53,  173 => 52,  169 => 51,  156 => 43,  134 => 40,  128 => 71,  166 => 72,  150 => 67,  146 => 65,  90 => 29,  53 => 11,  49 => 9,  23 => 3,  240 => 81,  235 => 72,  231 => 68,  228 => 67,  217 => 65,  207 => 60,  200 => 55,  197 => 54,  192 => 63,  164 => 82,  129 => 61,  124 => 35,  110 => 34,  107 => 42,  87 => 37,  56 => 18,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 85,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 70,  222 => 73,  220 => 72,  215 => 70,  211 => 64,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  112 => 44,  82 => 30,  65 => 22,  38 => 4,  144 => 50,  141 => 54,  135 => 47,  126 => 45,  109 => 54,  103 => 43,  67 => 19,  61 => 16,  47 => 8,  28 => 6,  105 => 24,  93 => 20,  76 => 33,  72 => 32,  68 => 15,  94 => 30,  88 => 27,  79 => 23,  59 => 22,  225 => 96,  216 => 90,  212 => 63,  205 => 145,  201 => 83,  196 => 80,  194 => 62,  191 => 60,  189 => 77,  186 => 59,  180 => 72,  172 => 76,  159 => 53,  154 => 42,  147 => 49,  132 => 48,  127 => 45,  121 => 55,  118 => 44,  114 => 42,  104 => 35,  100 => 33,  78 => 24,  75 => 23,  71 => 23,  58 => 12,  34 => 5,  91 => 29,  84 => 31,  26 => 2,  27 => 4,  24 => 4,  21 => 1,  44 => 6,  31 => 3,  25 => 3,  19 => 2,  70 => 19,  63 => 17,  46 => 7,  22 => 3,  163 => 63,  155 => 58,  152 => 49,  149 => 51,  145 => 69,  139 => 50,  131 => 46,  123 => 47,  120 => 43,  115 => 51,  106 => 53,  101 => 50,  96 => 21,  83 => 18,  80 => 26,  74 => 28,  66 => 14,  55 => 12,  52 => 11,  50 => 8,  43 => 6,  41 => 5,  37 => 4,  35 => 4,  32 => 2,  29 => 2,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 81,  157 => 56,  153 => 51,  151 => 50,  143 => 48,  138 => 63,  136 => 50,  133 => 43,  130 => 47,  122 => 43,  119 => 42,  116 => 46,  111 => 38,  108 => 37,  102 => 41,  98 => 22,  95 => 39,  92 => 30,  89 => 19,  85 => 24,  81 => 24,  73 => 18,  64 => 23,  60 => 19,  57 => 18,  54 => 11,  51 => 13,  48 => 11,  45 => 8,  42 => 5,  39 => 4,  36 => 3,  33 => 8,  30 => 2,);
    }
}
