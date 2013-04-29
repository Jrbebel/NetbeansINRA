<?php

/* Inra2013urzBundle:Analyse:CreateTypeAnalyse.html.twig */
class __TwigTemplate_d7fb88b97dccdd5ec208f25171b4c892 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("Inra2013urzBundle:Default:IndexUser.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_CreateAnalyseBdd"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form_Categorie"]) ? $context["form_Categorie"] : $this->getContext($context, "form_Categorie")), 'enctype');
        echo ">
                        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form_Categorie"]) ? $context["form_Categorie"] : $this->getContext($context, "form_Categorie")), 'widget');
        echo "

                        <input type=\"submit\" class=\"btn btn-primary\" />
                        <input type=\"hidden\" name=\"typeForm\" value=\"Categorie\" /> ";
        // line 22
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
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_CreateAnalyseBdd"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form_CategorieAnalyse"]) ? $context["form_CategorieAnalyse"] : $this->getContext($context, "form_CategorieAnalyse")), 'enctype');
        echo ">
                        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form_CategorieAnalyse"]) ? $context["form_CategorieAnalyse"] : $this->getContext($context, "form_CategorieAnalyse")), 'widget');
        echo "

                        <input type=\"submit\" class=\"btn btn-primary\" />
                        <input type=\"hidden\" name=\"typeForm\" value=\"CategorieAnalyse\" /> ";
        // line 39
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
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_CreateAnalyseBdd"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form_Analyse"]) ? $context["form_Analyse"] : $this->getContext($context, "form_Analyse")), 'enctype');
        echo ">

                        ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form_Analyse"]) ? $context["form_Analyse"] : $this->getContext($context, "form_Analyse")), 'widget');
        echo "


                        <input type=\"submit\" class=\"btn btn-primary\" />
                        <input type=\"hidden\" name=\"typeForm\" value=\"Analyse\" /> ";
        // line 57
        echo "
                    </form>
                </div>
            </div>
            <div class=\"accordion-group\">
                <div class=\"accordion-heading\">
                    <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapseFive\">
                        Formule pour champ d'analyse
                    </a>
                </div>
                <div id=\"collapseFive\" class=\"accordion-body collapse\">
                    <form action=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_FormuleChamp"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form_Analyse"]) ? $context["form_Analyse"] : $this->getContext($context, "form_Analyse")), 'enctype');
        echo ">

                        Champs :</br>
                        <input type=\"text\" id=\"champ\" name=\"Champs\" /> </br>
                        <input type=\"hidden\" name=\"typeAnalyse\" id=\"institut\" />

                        <input type=\"submit\" class=\"btn btn-primary\" />
                        <input type=\"hidden\" name=\"typeForm\" value=\"Analyse\" /> ";
        // line 76
        echo "
                    </form>
                </div>
            </div>

        </div>


";
    }

    // line 86
    public function block_javascripts($context, array $blocks = array())
    {
        echo " 


        <script type=\"text/javascript\" src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.ui.autocomplete.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui-1.10.0.custom.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.ui.core.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.ui.position.min.js"), "html", null, true);
        echo "\"></script>

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
                    var \$prototype = \$(\$container.attr('data-prototype').replace(/__name__label__/g, 'Champ n°' + (index + 1))
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


            \$(document).ready(function() {


                \$(\"#champ\").autocomplete({
                    source: function(request, response) {

                        var id = \$('#champ').val();

                        var DATA = 'id=' + id;
                        \$.ajax({
                            url: \"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_SearchChamp"), "html", null, true);
        echo "\",
                            method: \"POST\",
                            dataType: \"json\",
                            data: DATA,
                            success: function(data) {
                                response(\$.map(data, function(item, i) {

                                    return {
                                        value: item.Nom,
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
        return "Inra2013urzBundle:Analyse:CreateTypeAnalyse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 68,  62 => 18,  128 => 42,  527 => 199,  491 => 178,  476 => 166,  466 => 159,  455 => 155,  438 => 154,  405 => 141,  401 => 140,  397 => 139,  392 => 137,  389 => 136,  372 => 135,  355 => 120,  323 => 111,  298 => 107,  286 => 98,  277 => 91,  213 => 79,  179 => 63,  175 => 62,  167 => 55,  142 => 50,  137 => 47,  117 => 25,  140 => 46,  501 => 179,  498 => 178,  488 => 172,  473 => 171,  461 => 157,  448 => 155,  426 => 144,  422 => 149,  407 => 148,  395 => 140,  382 => 132,  360 => 128,  357 => 127,  345 => 117,  328 => 113,  319 => 110,  313 => 110,  311 => 109,  307 => 108,  303 => 107,  299 => 106,  293 => 105,  283 => 103,  275 => 100,  258 => 170,  236 => 80,  207 => 67,  192 => 63,  182 => 60,  176 => 59,  173 => 91,  86 => 20,  69 => 14,  40 => 5,  698 => 319,  677 => 289,  673 => 288,  668 => 287,  660 => 283,  655 => 282,  652 => 281,  643 => 276,  631 => 266,  626 => 264,  623 => 263,  621 => 262,  608 => 252,  605 => 251,  598 => 246,  586 => 236,  581 => 234,  578 => 233,  576 => 232,  563 => 222,  560 => 221,  551 => 214,  545 => 210,  528 => 206,  519 => 200,  511 => 196,  507 => 194,  502 => 191,  492 => 173,  487 => 184,  485 => 183,  478 => 178,  460 => 174,  450 => 156,  444 => 169,  440 => 168,  433 => 164,  429 => 163,  409 => 142,  396 => 150,  387 => 148,  384 => 133,  380 => 146,  370 => 139,  365 => 137,  359 => 134,  356 => 133,  350 => 129,  337 => 118,  333 => 115,  329 => 115,  324 => 112,  315 => 108,  310 => 106,  308 => 105,  278 => 101,  266 => 92,  259 => 90,  253 => 87,  247 => 84,  221 => 76,  206 => 64,  199 => 63,  193 => 61,  190 => 62,  174 => 50,  169 => 90,  161 => 58,  158 => 86,  156 => 41,  146 => 76,  170 => 76,  148 => 67,  113 => 51,  99 => 42,  90 => 29,  53 => 23,  49 => 9,  77 => 16,  23 => 3,  255 => 86,  250 => 77,  243 => 75,  241 => 89,  238 => 81,  234 => 68,  231 => 67,  214 => 61,  210 => 60,  203 => 55,  200 => 54,  195 => 8,  164 => 59,  129 => 35,  124 => 49,  110 => 43,  107 => 50,  87 => 28,  56 => 17,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 104,  282 => 90,  276 => 86,  273 => 94,  270 => 84,  268 => 93,  263 => 91,  249 => 79,  245 => 77,  230 => 80,  222 => 73,  220 => 62,  215 => 72,  211 => 69,  204 => 66,  198 => 65,  185 => 61,  183 => 60,  177 => 92,  160 => 66,  112 => 44,  82 => 34,  65 => 13,  38 => 6,  144 => 65,  141 => 54,  135 => 45,  126 => 49,  109 => 37,  103 => 30,  67 => 18,  61 => 12,  47 => 9,  28 => 6,  105 => 24,  93 => 20,  76 => 22,  72 => 20,  68 => 22,  94 => 39,  88 => 35,  79 => 17,  59 => 12,  225 => 71,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 78,  194 => 62,  191 => 78,  189 => 7,  186 => 61,  180 => 72,  172 => 67,  159 => 50,  154 => 59,  147 => 55,  132 => 52,  127 => 49,  121 => 57,  118 => 39,  114 => 52,  104 => 28,  100 => 28,  78 => 24,  75 => 23,  71 => 19,  58 => 12,  34 => 5,  91 => 20,  84 => 31,  26 => 11,  27 => 4,  24 => 4,  21 => 1,  44 => 6,  31 => 2,  25 => 1,  19 => 2,  70 => 19,  63 => 19,  46 => 7,  22 => 3,  163 => 63,  155 => 54,  152 => 68,  149 => 37,  145 => 51,  139 => 50,  131 => 42,  123 => 48,  120 => 40,  115 => 40,  106 => 36,  101 => 24,  96 => 22,  83 => 26,  80 => 26,  74 => 24,  66 => 21,  55 => 11,  52 => 12,  50 => 8,  43 => 6,  41 => 7,  37 => 3,  35 => 5,  32 => 2,  29 => 3,  184 => 70,  178 => 71,  171 => 61,  165 => 89,  162 => 86,  157 => 55,  153 => 79,  151 => 52,  143 => 50,  138 => 53,  136 => 53,  133 => 43,  130 => 47,  122 => 31,  119 => 55,  116 => 46,  111 => 38,  108 => 33,  102 => 29,  98 => 22,  95 => 31,  92 => 36,  89 => 20,  85 => 23,  81 => 27,  73 => 25,  64 => 17,  60 => 17,  57 => 11,  54 => 10,  51 => 10,  48 => 7,  45 => 6,  42 => 12,  39 => 6,  36 => 5,  33 => 3,  30 => 2,);
    }
}
