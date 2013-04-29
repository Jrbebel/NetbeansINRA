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
            echo twig_escape_filter($this->env, (isset($context["Num"]) ? $context["Num"] : null), "html", null, true);
            echo " à bien été enregistrer.</p>

</div>

";
        } else {
            // line 11
            echo " <div class=\"well\">
    <form method=\"POST\" action=\"";
            // line 12
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
            echo "\">

        <h4>Création d'un protocole</h4></br>


     ";
            // line 17
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
            echo " 

";
            // line 19
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["TypeCategorie"]) ? $context["TypeCategorie"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["Resultat"]) {
                // line 20
                echo "        </br>
        <div id=\"style";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                echo "\"></div>
        <select id=\"analyse";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                echo "\" class=\"select\"><option>Sélectionner catégorie</option></select>
        </br>
        <div id=\"resultat";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                echo "\"></div>     
  ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Resultat'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 25
            echo "   
        </br>
";
            // line 33
            echo "
        <input type=\"submit\" value=\"Annuler\" class=\"btn btn-danger\" />
        <input type=\"submit\" class=\"btn btn-primary\" />






    </form> 
</div>


";
        }
        // line 47
        echo "
";
    }

    // line 50
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 51
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/cupertino/jquery-ui-1.10.2.custom.min.css"), "html", null, true);
        echo "\" />  ";
        echo " 
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/CLEditor1_3_0/jquery.cleditor.css"), "html", null, true);
        echo "\" /> ";
        echo " 
";
    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        // line 58
        echo "
<script type=\"text/javascript\"  src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui-1.10.0.custom.min.js"), "html", null, true);
        echo "\" ></script> ";
        // line 60
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/CLEditor1_3_0/jquery.cleditor.min.js"), "html", null, true);
        echo "\"></script> ";
        // line 61
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/CLEditor1_3_0/jquery.cleditor.js"), "html", null, true);
        echo "\"></script> ";
        // line 62
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/CLEditor1_3_0/plugin.js"), "html", null, true);
        echo "\"></script> ";
        // line 63
        echo "
<script type=\"text/javascript\">
    \$(document).ready(function() {

        \$(\".ckeditor\").cleditor();

    });
    </script>

    <script type=\"text/javascript\">

        \$('.date').datepicker({dateFormat: 'dd-mm-yy'})

        \$(function() {

";
        // line 78
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["TypeCategorie"]) ? $context["TypeCategorie"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["Resultat"]) {
            // line 79
            echo "          \$(\"#analyse";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo "\").hide();
 ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Resultat'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 80
        echo " 
          
           

            \$('input[type=checkbox]').click(function() {
                var cochee = \$(this).is(':checked'); // je regarde si la case est cochée ou non 

                var value = \$(this).attr(\"value\"); //je recupere la valeur value dans le checkbox
                var DATA = 'id=' + value;
";
        // line 89
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["TypeCategorie"]) ? $context["TypeCategorie"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["Resultat"]) {
            // line 90
            echo "         var div_style_titre";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo " = \"<fieldset><legend>";
            echo twig_escape_filter($this->env, (isset($context["Resultat"]) ? $context["Resultat"] : null), "html", null, true);
            echo "</fieldset>\";
 ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Resultat'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 91
        echo " 

              
                if (cochee == true) {
                    \$(function() {

                        \$.ajax({
                            url: \"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_SearchCategorieAnalyse"), "html", null, true);
        echo "\", // j'utilise le lien pour aller cherche les contenus à rajouter
                            cache: false,
                            dataType: \"json\",
                            method: \"POST\",
                            data: DATA,
                            success: function(data) {

                                \$.map(data, function(item, i) {

";
        // line 107
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["TypeCategorie"]) ? $context["TypeCategorie"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["Resultat"]) {
            // line 108
            echo "

                                 if (value == \"";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo "\" ) {  // si c le premier type de categorie
                                        \$(\"#analyse";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo "\").show();
                                        var div_data = \"<option value=\" + item.id + \">\" + item.Nom + \"</option>\";
                                        \$(div_data).appendTo(\"#analyse";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo "\");
                                        if (i == 0) { // on affiche le titre qu'une seul fois 
                                            \$(div_style_titre";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo ").appendTo(\"#style";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo "\");
                                        }

                                    }
                            
   ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Resultat'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 120
        echo "                                   
                                    

                                })


                            }

                        })

                    });



                } else { //si on decoche le checkbox
";
        // line 135
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["TypeCategorie"]) ? $context["TypeCategorie"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["Resultat"]) {
            // line 136
            echo "
     if (value == \"";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo "\") {

                        \$(\"#style";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo "\").empty();
                        \$(\"#analyse";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo "\").empty();
                        \$(\"#analyse";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo "\").hide();
                        \$(\"#resultat";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo "\").hide();
                    }
   ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Resultat'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 144
        echo "                                   
                    
          
                }


            });


            /***************************************************************************************************************************************/
";
        // line 154
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["TypeCategorie"]) ? $context["TypeCategorie"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["Resultat"]) {
            // line 155
            echo "            \$(\"select#analyse";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo " \").click(function() {

                \$(\"select#analyse";
            // line 157
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo " option:selected\").each(function() {

                    \$(\"#resultat";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo "\").empty();
                    value = \$(this).attr(\"value\"); //je recupere la valeur value dans le selectionnée

                    var DATA = 'id=' + value;
                    \$(function() {

                        \$.ajax({
                            url: \"";
            // line 166
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_SearchTypeAnalyse"), "html", null, true);
            echo "\", // j'utilise le lien pour aller cherche les contenus à rajouter
                            cache: false,
                            dataType: \"json\",
                            method: \"POST\",
                            data: DATA,
                            success: function(data) {

                                \$.map(data, function(item, i) {


                                    var div_data = \"<label class='checkbox  inline'><input type='checkbox' name='choix_analyse[]' id='inlineCheckbox'\" + i + \" value=\" + item.id + \">\" + item.Nom + \"</label>\";

                                    \$(div_data).appendTo(\"#resultat";
            // line 178
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo "\");



                                })


                            }

                        })

                    });



                });



            });

         ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Resultat'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 199
        echo "  

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
        return array (  527 => 199,  491 => 178,  476 => 166,  466 => 159,  455 => 155,  438 => 154,  405 => 141,  401 => 140,  397 => 139,  392 => 137,  389 => 136,  372 => 135,  355 => 120,  323 => 111,  298 => 107,  286 => 98,  277 => 91,  213 => 79,  179 => 63,  175 => 62,  167 => 60,  142 => 50,  137 => 47,  117 => 25,  140 => 54,  501 => 179,  498 => 178,  488 => 172,  473 => 171,  461 => 157,  448 => 155,  426 => 144,  422 => 149,  407 => 148,  395 => 140,  382 => 132,  360 => 128,  357 => 127,  345 => 117,  328 => 113,  319 => 110,  313 => 110,  311 => 109,  307 => 108,  303 => 107,  299 => 106,  293 => 105,  283 => 103,  275 => 100,  258 => 90,  236 => 80,  207 => 67,  192 => 63,  182 => 60,  176 => 59,  173 => 58,  86 => 20,  69 => 14,  40 => 4,  698 => 319,  677 => 289,  673 => 288,  668 => 287,  660 => 283,  655 => 282,  652 => 281,  643 => 276,  631 => 266,  626 => 264,  623 => 263,  621 => 262,  608 => 252,  605 => 251,  598 => 246,  586 => 236,  581 => 234,  578 => 233,  576 => 232,  563 => 222,  560 => 221,  551 => 214,  545 => 210,  528 => 206,  519 => 200,  511 => 196,  507 => 194,  502 => 191,  492 => 173,  487 => 184,  485 => 183,  478 => 178,  460 => 174,  450 => 156,  444 => 169,  440 => 168,  433 => 164,  429 => 163,  409 => 142,  396 => 150,  387 => 148,  384 => 133,  380 => 146,  370 => 139,  365 => 137,  359 => 134,  356 => 133,  350 => 129,  337 => 118,  333 => 115,  329 => 115,  324 => 112,  315 => 108,  310 => 106,  308 => 105,  278 => 101,  266 => 92,  259 => 90,  253 => 87,  247 => 84,  241 => 89,  221 => 76,  206 => 64,  199 => 63,  193 => 61,  190 => 62,  174 => 50,  169 => 48,  161 => 58,  158 => 57,  156 => 41,  146 => 51,  170 => 76,  152 => 68,  148 => 67,  113 => 51,  99 => 42,  77 => 16,  115 => 40,  90 => 29,  80 => 26,  53 => 23,  49 => 9,  23 => 3,  243 => 81,  238 => 81,  234 => 68,  231 => 67,  214 => 61,  210 => 60,  203 => 55,  200 => 54,  195 => 8,  164 => 59,  145 => 51,  129 => 35,  124 => 49,  110 => 43,  107 => 47,  87 => 28,  52 => 12,  37 => 3,  56 => 11,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 104,  282 => 90,  276 => 86,  273 => 94,  270 => 84,  268 => 93,  263 => 91,  249 => 79,  245 => 77,  230 => 80,  222 => 73,  220 => 62,  215 => 72,  211 => 69,  204 => 66,  198 => 65,  185 => 61,  183 => 60,  177 => 58,  160 => 66,  149 => 37,  123 => 48,  120 => 43,  112 => 44,  106 => 36,  82 => 36,  65 => 13,  38 => 6,  155 => 54,  144 => 65,  141 => 54,  139 => 50,  135 => 47,  126 => 49,  109 => 37,  103 => 30,  101 => 24,  70 => 24,  67 => 17,  61 => 12,  47 => 19,  28 => 6,  105 => 24,  96 => 22,  93 => 20,  83 => 18,  76 => 22,  72 => 19,  68 => 22,  50 => 8,  94 => 26,  88 => 24,  79 => 17,  59 => 12,  43 => 5,  32 => 2,  225 => 71,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 78,  194 => 62,  191 => 78,  189 => 7,  186 => 61,  180 => 72,  172 => 67,  163 => 63,  159 => 61,  154 => 59,  147 => 55,  132 => 52,  127 => 49,  121 => 33,  118 => 29,  114 => 42,  104 => 28,  100 => 28,  78 => 24,  75 => 23,  71 => 19,  63 => 19,  58 => 12,  34 => 5,  91 => 20,  84 => 31,  74 => 24,  66 => 21,  55 => 12,  41 => 7,  46 => 7,  26 => 11,  22 => 3,  27 => 4,  24 => 4,  29 => 3,  21 => 1,  44 => 6,  35 => 5,  31 => 2,  25 => 1,  19 => 2,  184 => 70,  178 => 71,  171 => 61,  165 => 57,  162 => 81,  157 => 55,  153 => 74,  151 => 52,  143 => 50,  138 => 53,  136 => 53,  133 => 43,  130 => 47,  122 => 31,  119 => 55,  116 => 46,  111 => 32,  108 => 33,  102 => 29,  98 => 22,  95 => 31,  92 => 21,  89 => 20,  85 => 23,  81 => 27,  73 => 25,  64 => 23,  60 => 17,  57 => 11,  54 => 10,  51 => 13,  48 => 7,  45 => 6,  42 => 12,  39 => 11,  36 => 6,  33 => 8,  30 => 7,);
    }
}
