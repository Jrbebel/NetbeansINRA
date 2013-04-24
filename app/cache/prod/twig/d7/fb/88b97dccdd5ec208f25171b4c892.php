<?php

/* Inra2013urzBundle:Analyse:CreateTypeAnalyse.html.twig */
class __TwigTemplate_d7fb88b97dccdd5ec208f25171b4c892 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"accordion\" id=\"accordion2\">
    <div class=\"accordion-group\">
        <div class=\"accordion-heading\">
            <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapseOne\">
                Creer une catégorie d'analyse
            </a>
        </div>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">


                <form action=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_CreateAnalyseBdd"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form_Categorie"]) ? $context["form_Categorie"] : null), 'enctype');
        echo ">
                        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form_Categorie"]) ? $context["form_Categorie"] : null), 'widget');
        echo "

                        <input type=\"submit\" class=\"btn btn-primary\" />
                        <input type=\"hidden\" name=\"typeForm\" value=\"Categorie\" /> ";
        // line 20
        echo "
                    </form>
                </div>
            </div>
        </div>
        <div class=\"accordion-group\">
            <div class=\"accordion-heading\">
                <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapseTwo\">
                    Creer un type d'analyse pour une categorie
                </a>
            </div>
            <div id=\"collapseTwo\" class=\"accordion-body collapse\">
                <form action=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_CreateAnalyseBdd"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form_CategorieAnalyse"]) ? $context["form_CategorieAnalyse"] : null), 'enctype');
        echo ">
                        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form_CategorieAnalyse"]) ? $context["form_CategorieAnalyse"] : null), 'widget');
        echo "

                        <input type=\"submit\" class=\"btn btn-primary\" />
                        <input type=\"hidden\" name=\"typeForm\" value=\"CategorieAnalyse\" /> ";
        // line 37
        echo "
                    </form>
                </div>
            </div>
            <div class=\"accordion-group\">
                <div class=\"accordion-heading\">
                    <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapseFour\">
                        Creer une analyse
                    </a>
                </div>
                <div id=\"collapseFour\" class=\"accordion-body collapse\">
                    <form action=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_CreateAnalyseBdd"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form_Analyse"]) ? $context["form_Analyse"] : null), 'enctype');
        echo ">

                        ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form_Analyse"]) ? $context["form_Analyse"] : null), 'widget');
        echo "
                      

                        <input type=\"submit\" class=\"btn btn-primary\" />
                        <input type=\"hidden\" name=\"typeForm\" value=\"Analyse\" /> ";
        // line 55
        echo "
                    </form>
                </div>
            </div>


        </div>


";
    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        echo " 


       
    
        <script type=\"text/javascript\">        
            
      \$(document).ready(function() {
  // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
  var \$container = \$('div#inra2013_urzbundle_typeanalysetype_Champs');
 
  // On ajoute un lien pour ajouter une nouvelle catégorie
  var \$lienAjout = \$('<a href=\"#\" id=\"ajout_categorie\" class=\"btn btn-primary\">Ajouter un champ</a></br></br>');
  \$container.append(\$lienAjout);
 
  // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
  \$lienAjout.click(function(e) {
    ajouterCategorie(\$container);
    e.preventDefault(); // évite qu'un # apparaisse dans l'URL
    return false;
  });
 
  // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
  var index = \$container.find(':input').length;
 
  // On ajoute un premier champ directement s'il n'en existe pas déjà un (cas d'un nouvel article par exemple).
  if (index == 0) {
    ajouterCategorie(\$container);
  } else {
    // Pour chaque catégorie déjà existante, on ajoute un lien de suppression
    \$container.children('div').each(function() {
      ajouterLienSuppression(\$(this));
    });
  }
 
  // La fonction qui ajoute un formulaire Categorie
  function ajouterCategorie(\$container) {
    // Dans le contenu de l'attribut « data-prototype », on remplace :
    // - le texte \"__name__label__\" qu'il contient par le label du champ
    // - le texte \"__name__\" qu'il contient par le numéro du champ
    var \$prototype = \$(\$container.attr('data-prototype').replace(/__name__label__/g, 'Champ n°' + (index+1))
                                                        .replace(/__name__/g, index));
 
    // On ajoute au prototype un lien pour pouvoir supprimer la catégorie
    ajouterLienSuppression(\$prototype);
 
    // On ajoute le prototype modifié à la fin de la balise <div>
    \$container.append(\$prototype);
 
    // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
    index++;
  }
 
  // La fonction qui ajoute un lien de suppression d'une catégorie
  function ajouterLienSuppression(\$prototype) {
    // Création du lien
    \$lienSuppression = \$('<a href=\"#\" class=\"btn btn-danger\">Supprimer</a></br></br>');
 
    // Ajout du lien
    \$prototype.append(\$lienSuppression);
 
    // Ajout du listener sur le clic du lien
    \$lienSuppression.click(function(e) {
      \$prototype.remove();
      e.preventDefault(); // évite qu'un # apparaisse dans l'URL
      return false;
    });
  }
});      
            
         </script>
          

 ";
    }

    public function getTemplateName()
    {
        return "Inra2013urzBundle:Analyse:CreateTypeAnalyse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 33,  256 => 170,  131 => 61,  128 => 60,  125 => 59,  261 => 86,  258 => 85,  241 => 80,  229 => 72,  218 => 65,  197 => 63,  173 => 55,  156 => 50,  142 => 64,  86 => 24,  69 => 14,  40 => 4,  732 => 297,  727 => 294,  724 => 292,  722 => 291,  703 => 275,  699 => 274,  694 => 273,  686 => 269,  681 => 268,  678 => 267,  669 => 262,  657 => 252,  652 => 250,  649 => 249,  647 => 248,  634 => 238,  631 => 237,  624 => 232,  612 => 222,  607 => 220,  604 => 219,  602 => 218,  589 => 208,  586 => 207,  574 => 196,  564 => 191,  562 => 190,  559 => 189,  542 => 185,  536 => 182,  531 => 179,  525 => 175,  509 => 172,  502 => 170,  498 => 168,  494 => 167,  491 => 166,  484 => 164,  480 => 162,  473 => 160,  461 => 158,  459 => 157,  456 => 156,  448 => 153,  445 => 152,  443 => 151,  436 => 149,  432 => 148,  428 => 147,  423 => 144,  406 => 143,  396 => 135,  387 => 133,  384 => 132,  380 => 131,  369 => 123,  365 => 122,  362 => 121,  357 => 118,  351 => 114,  346 => 112,  329 => 108,  322 => 106,  318 => 104,  314 => 103,  311 => 102,  304 => 100,  299 => 97,  280 => 93,  278 => 92,  275 => 91,  267 => 88,  264 => 87,  262 => 86,  255 => 84,  244 => 79,  240 => 77,  223 => 76,  190 => 59,  182 => 56,  175 => 52,  158 => 51,  152 => 49,  148 => 48,  134 => 62,  166 => 72,  150 => 67,  146 => 65,  115 => 40,  90 => 34,  80 => 27,  53 => 10,  49 => 9,  23 => 3,  243 => 81,  238 => 73,  234 => 68,  231 => 67,  214 => 69,  210 => 60,  203 => 55,  200 => 54,  195 => 8,  164 => 53,  145 => 69,  129 => 61,  124 => 42,  110 => 55,  107 => 41,  87 => 37,  52 => 12,  37 => 3,  56 => 11,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 81,  245 => 77,  230 => 75,  222 => 73,  220 => 62,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 57,  183 => 60,  177 => 58,  160 => 57,  149 => 51,  123 => 66,  120 => 43,  112 => 53,  106 => 36,  82 => 30,  65 => 13,  38 => 4,  155 => 58,  144 => 50,  141 => 54,  139 => 50,  135 => 47,  126 => 43,  109 => 52,  103 => 50,  101 => 42,  70 => 19,  67 => 17,  61 => 18,  47 => 9,  28 => 6,  105 => 24,  96 => 48,  93 => 36,  83 => 37,  76 => 24,  72 => 32,  68 => 22,  50 => 9,  94 => 39,  88 => 27,  79 => 25,  59 => 12,  43 => 8,  32 => 4,  225 => 96,  216 => 64,  212 => 88,  205 => 68,  201 => 67,  196 => 80,  194 => 62,  191 => 59,  189 => 7,  186 => 76,  180 => 55,  172 => 76,  163 => 63,  159 => 61,  154 => 68,  147 => 55,  132 => 45,  127 => 43,  121 => 55,  118 => 54,  114 => 38,  104 => 36,  100 => 35,  78 => 33,  75 => 23,  71 => 32,  63 => 20,  58 => 17,  34 => 5,  91 => 38,  84 => 31,  74 => 22,  66 => 21,  55 => 15,  41 => 5,  46 => 7,  26 => 2,  22 => 3,  27 => 4,  24 => 4,  29 => 3,  21 => 1,  44 => 13,  35 => 4,  31 => 2,  25 => 3,  19 => 2,  184 => 70,  178 => 95,  171 => 62,  165 => 58,  162 => 81,  157 => 56,  153 => 74,  151 => 73,  143 => 67,  138 => 63,  136 => 46,  133 => 42,  130 => 47,  122 => 44,  119 => 36,  116 => 46,  111 => 32,  108 => 31,  102 => 30,  98 => 39,  95 => 34,  92 => 30,  89 => 19,  85 => 29,  81 => 36,  73 => 19,  64 => 23,  60 => 19,  57 => 20,  54 => 12,  51 => 16,  48 => 7,  45 => 15,  42 => 12,  39 => 6,  36 => 5,  33 => 8,  30 => 3,);
    }
}