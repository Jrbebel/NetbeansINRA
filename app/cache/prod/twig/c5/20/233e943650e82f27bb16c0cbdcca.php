<?php

/* Inra2013urzBundle:Analyse:CreateProtocole.html.twig */
class __TwigTemplate_c520233e943650e82f27bb16c0cbdcca extends Twig_Template
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
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
            echo "\">

        <h4>Création du protocole</h4></br>


     ";
            // line 17
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
            echo " 



        </br>
";
            // line 23
            echo "        <div id=\"style1\"></div>
        <select id=\"analyse1\"></select>
        </br>

";
            // line 28
            echo "        <div id=\"style2\"></div>
        <table id=\"analyse2\"></table>


        <input type=\"submit\" value=\"Annuler\" class=\"btn btn-danger\" />
        <input type=\"submit\" class=\"btn btn-primary\" />






    </form> 
</div>


";
        }
        // line 45
        echo "
";
    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        // line 49
        echo "<script type=\"text/javascript\">
    \$(function(){
        

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
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_SearchCategorieAnalyse"), "html", null, true);
        echo "\", // j'utilise le lien pour aller cherche les contenus à rajouter
                            cache: false,
                            dataType: \"json\",
                            method: \"POST\",
                            data: DATA,
                            success: function (data) {
                       
                                \$.map(data, function (item,i) {
                                    
                                  if(value == 1){  // si c le premier type de categorie

 var div_data =\"<option>\"+item.Nom+\"</option>\";

\$(div_data).appendTo(\"#analyse1\");
if(i == 0){ // on affiche le titre qu'une seul fois 
   \$(div_style_titre1).appendTo(\"#style1\"); 
    }

}else if(value == 2){  //si c le deuxieme,on l'affiche dans une autre div 

var div_data = 
      \"<tr><td><input type='checkbox' name='choix_analyse[]'value=\"+item.id +\" /></td><td><h6>\"+item.Nom+\"</h6></td></tr>\";
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
                
        }else if(value == 2){
                \$(\"#style2\").empty()
                \$(\"#analyse2\").empty();
                
}
}
            
    
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
        return array (  121 => 64,  104 => 49,  101 => 48,  96 => 45,  77 => 28,  71 => 23,  63 => 17,  55 => 12,  52 => 11,  44 => 6,  42 => 5,  39 => 4,  36 => 3,  30 => 2,);
    }
}
