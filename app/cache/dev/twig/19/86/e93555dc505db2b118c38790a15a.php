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
        return array (  128 => 71,  77 => 28,  456 => 151,  453 => 150,  435 => 136,  418 => 132,  408 => 125,  392 => 122,  385 => 120,  381 => 118,  377 => 117,  374 => 116,  367 => 114,  361 => 111,  358 => 110,  350 => 107,  347 => 106,  345 => 105,  338 => 103,  334 => 102,  330 => 101,  326 => 99,  309 => 98,  300 => 91,  291 => 90,  265 => 74,  248 => 70,  241 => 68,  237 => 66,  233 => 65,  223 => 62,  217 => 59,  214 => 58,  206 => 55,  203 => 54,  188 => 48,  140 => 34,  125 => 25,  99 => 20,  62 => 12,  166 => 72,  150 => 67,  146 => 65,  129 => 61,  90 => 29,  87 => 37,  53 => 11,  49 => 10,  23 => 3,  210 => 72,  199 => 61,  193 => 60,  182 => 54,  179 => 44,  174 => 8,  168 => 7,  110 => 43,  56 => 18,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 89,  282 => 90,  276 => 81,  273 => 80,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 64,  222 => 73,  220 => 72,  215 => 80,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 46,  177 => 58,  160 => 80,  112 => 42,  82 => 30,  65 => 13,  38 => 5,  144 => 35,  141 => 66,  135 => 47,  126 => 45,  109 => 54,  103 => 43,  67 => 18,  61 => 16,  47 => 8,  28 => 6,  105 => 23,  93 => 34,  76 => 33,  72 => 32,  68 => 12,  94 => 39,  88 => 27,  79 => 23,  59 => 22,  225 => 96,  216 => 90,  212 => 88,  205 => 145,  201 => 53,  196 => 80,  194 => 51,  191 => 78,  189 => 59,  186 => 76,  180 => 72,  172 => 76,  159 => 61,  154 => 68,  147 => 55,  132 => 48,  127 => 26,  121 => 55,  118 => 47,  114 => 45,  104 => 35,  100 => 33,  78 => 24,  75 => 23,  71 => 23,  58 => 13,  34 => 5,  91 => 38,  84 => 28,  26 => 2,  27 => 4,  24 => 4,  21 => 1,  44 => 6,  31 => 4,  25 => 3,  19 => 2,  70 => 19,  63 => 17,  46 => 7,  22 => 3,  163 => 63,  155 => 58,  152 => 49,  149 => 72,  145 => 46,  139 => 53,  131 => 42,  123 => 47,  120 => 43,  115 => 51,  106 => 53,  101 => 50,  96 => 21,  83 => 18,  80 => 26,  74 => 24,  66 => 21,  55 => 12,  52 => 11,  50 => 8,  43 => 7,  41 => 6,  37 => 8,  35 => 4,  32 => 7,  29 => 2,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 43,  157 => 56,  153 => 36,  151 => 73,  143 => 54,  138 => 63,  136 => 52,  133 => 43,  130 => 27,  122 => 24,  119 => 36,  116 => 35,  111 => 38,  108 => 42,  102 => 30,  98 => 22,  95 => 18,  92 => 30,  89 => 19,  85 => 31,  81 => 17,  73 => 15,  64 => 23,  60 => 19,  57 => 12,  54 => 12,  51 => 13,  48 => 11,  45 => 11,  42 => 5,  39 => 4,  36 => 3,  33 => 8,  30 => 2,);
    }
}
