<?php

/* Inra2013urzBundle:Default:edit.html.twig */
class __TwigTemplate_dbff6b437ecf49705ad03dfdc70f10e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("Inra2013urzBundle:Default:IndexUser.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "Importation de fchier excel";
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.fileupload-ui.css"), "html", null, true);
        echo "\" />
 ";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
        if (array_key_exists("Status", $context)) {
            // line 10
            echo "
<div class=\"alert alert-error\"> 
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    Votre fichier excel à été bien enregistré.
</div>
";
        }
        // line 16
        echo "

    ";
        // line 18
        if ((!array_key_exists("xls", $context))) {
            // line 19
            echo "

<form id=\"fileupload\" action = \"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_UploadFile"), "html", null, true);
            echo "\"  enctype=\"multipart/form-data\" method=\"POST\">
    <!-- Redirect browsers with JavaScript disabled to the origin page -->
    <div class=\"well\">
        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
        <div id=\"output\" class=\"row fileupload-buttonbar\">
            <div class=\"span4 offset1\">
                <!-- The fileinput-button span is used to style the file input field as button -->
                <span style=\"margin-left: 10px\" class=\"btn btn-success fileinput-button\">
                    <i class=\"icon-plus icon-white\"></i>
                    <span >Ajouter fichier csv</span>
                    <input type=\"file\" id=\"fileElem\" name=\"files\" onchange=\"handleFiles(this.files)\" >  
";
            // line 32
            if ((!(null === (isset($context["protocole"]) ? $context["protocole"] : null)))) {
                // line 33
                echo "                    <input type=\"hidden\" name=\"protocole\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["protocole"]) ? $context["protocole"] : null), "html", null, true);
                echo "\" />
                    <input type=\"hidden\" name=\"type\" value=\"";
                // line 34
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
                echo "\" />
                    ";
            }
            // line 36
            echo "                </span>

            </div>  
            <div id=\"output\" class=\"span5 offset1\">
                <h3>Ou déposer le fichier ici</h3>     
            </div>


            <!-- The global progress information -->
            <div class=\"span5 fileupload-progress fade\">
                <!-- The global progress bar -->
                <div class=\"progress progress-success progress-striped active\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                    <div class=\"bar\" style=\"width:0%;\"></div>
                </div>
                <!-- The extended global progress information -->
                <div class=\"progress-extended\">&nbsp;</div>
            </div>
        </div>
        <!-- The loading indicator is shown during file processing -->
        <div class=\"fileupload-loading\"></div>
        <br>
        <!-- The table listing the files available for upload/download -->
        <table role=\"presentation\" class=\"table table-striped\"><tbody class=\"files\" data-toggle=\"modal-gallery\" data-target=\"#modal-gallery\"></tbody></table>
    </div>

    <div id=\"mon_element\">

    </div>

</form>
<br>



  ";
        } else {
            // line 71
            echo "<div class=\"alert alert-info\">Prévisualisation des données à insérer</div>

<form  action=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["form_path"]) ? $context["form_path"] : null)), "html", null, true);
            echo "\" method=\"POST\" >

    <table class=\"table table-striped\">

        ";
            // line 77
            $context["xls1"] = $this->getAttribute((isset($context["xls"]) ? $context["xls"] : null), "getsheet", array(0 => 0), "method");
            // line 78
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["xls1"]) ? $context["xls1"] : null), "getRowIterator", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                echo " 

";
                // line 80
                if (($this->getAttribute((isset($context["cell"]) ? $context["cell"] : null), "getRowIndex", array(), "method") == 1)) {
                    // line 81
                    echo "
        <thead> <tr>  

         ";
                    // line 84
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cell"]) ? $context["cell"] : null), "getCellIterator", array(), "method"));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["liste"]) {
                        echo "   
          ";
                        // line 85
                        if (((((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 2) && ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 5)) && ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 8)) && ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 13)) && ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 14))) {
                            echo " ";
                            // line 86
                            echo "                <th>";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["liste"]) ? $context["liste"] : null), "getValue", array(), "method"), "html", null, true);
                            echo "</th>
          ";
                        }
                        // line 87
                        echo "     
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['liste'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 89
                    echo "
                </tr></thead>


";
                }
                // line 94
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 96
            echo "
";
            // line 97
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["xls1"]) ? $context["xls1"] : null), "getRowIterator", array(), "method"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["liste"]) {
                // line 98
                echo "
            <tr>

    ";
                // line 101
                if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") < 15)) {
                    echo " ";
                    echo "  

";
                    // line 103
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["liste"]) ? $context["liste"] : null), "getCellIterator", array(), "method"));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                        // line 104
                        echo "  ";
                        if (((((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 2) && ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 5)) && ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 8)) && ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 13)) && ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 14))) {
                            // line 105
                            if (($this->getAttribute((isset($context["liste"]) ? $context["liste"] : null), "getRowIndex", array(), "method") != 1)) {
                                echo " 
        ";
                                // line 106
                                if ((($this->getAttribute((isset($context["cell"]) ? $context["cell"] : null), "getColumn", array(), "method") == "I") || ($this->getAttribute((isset($context["cell"]) ? $context["cell"] : null), "getColumn", array(), "method") == "J"))) {
                                    // line 107
                                    echo "                <td>";
                                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cell"]) ? $context["cell"] : null), "getCalculatedValue", array(), "method"), "html", null, true);
                                    echo "</td> ";
                                    // line 108
                                    echo "                ";
                                } elseif ((($this->getAttribute((isset($context["cell"]) ? $context["cell"] : null), "getColumn", array(), "method") == "G") || ($this->getAttribute((isset($context["cell"]) ? $context["cell"] : null), "getColumn", array(), "method") == "H"))) {
                                    // line 109
                                    echo "
                <td>";
                                    // line 110
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["xls1"]) ? $context["xls1"] : null), "getStyle", array(0 => "G1"), "method"), "getNumberFormat", array(), "method"), "toFormattedString", array(0 => $this->getAttribute((isset($context["cell"]) ? $context["cell"] : null), "getValue", array(), "method"), 1 => "M/D/YYYY"), "method"), "html", null, true);
                                    echo "</td> ";
                                    // line 111
                                    echo "
                ";
                                } else {
                                    // line 113
                                    echo "                <td>";
                                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cell"]) ? $context["cell"] : null), "getValue", array(), "method"), "html", null, true);
                                    echo "</td>
                ";
                                }
                                // line 115
                                echo "
                ";
                            }
                            // line 116
                            echo "         ";
                        }
                        echo " 
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 118
                    echo "
       ";
                }
                // line 120
                echo "
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['liste'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 122
            echo "


            </tr>
        </table> 

        <input type=\"hidden\" name=\"files\" value=\"";
            // line 128
            echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : null), "html", null, true);
            echo "\"/>
        <input type=\"hidden\" name=\"NumProtocole\" value=\"";
            // line 129
            echo twig_escape_filter($this->env, (isset($context["protocole"]) ? $context["protocole"] : null), "html", null, true);
            echo "\"/>
        <input type=\"hidden\" name=\"Status\" value=\"Enregistrement\" /> ";
            // line 131
            echo "        <input type=\"submit\" class=\"btn btn-danger\" value=\"Cancel\" />

        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\"  />

    </form> 
  ";
        }
        // line 137
        echo "

";
    }

    // line 141
    public function block_javascripts($context, array $blocks = array())
    {
        // line 142
        echo "
    <script type=\"text/javascript\">

                        function handleFiles(files) {

                            var texte = \"<table class='table table-striped'><tbody><tr><td><img height='40' width='40' src='";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icone_excel.jpg"), "html", null, true);
        echo "'</td><td>\" + files[0].name + \"</td><td>\" + files[0].size + \"</td><td><button type='submit' class='btn btn-primary start'><i class='icon-upload icon-white'></i><span>Start upload</span></button></td><td><button type='reset' class='btn btn-warning cancel'><i class='icon-ban-circle icon-white'></i><span>Cancel upload</span> </button></td></tr></tbody></table>\";

                            \$('#mon_element').html(texte);
var selected_file = \$('#fileElem').get(0).files[0].name;
console.log(\"informzyion\" + selected_file);


                        }

                        \$(document).ready(function() {
                            \$.event.props.push(\"dataTransfer\");
                            // On pose les évènements nécessaires au drag'n'drop
                            \$('#output').bind({
                                \"dragenter dragexit dragover\": do_nothing,
                                drop: drop
                            });

                        });

// Fonction stoppant toute évènement natif et leur propagation
                        function do_nothing(evt) {
                            evt.stopPropagation();
                            evt.preventDefault();
                        }

                        function drop(evt) {
                            do_nothing(evt);
                            var files = evt.dataTransfer.files;
                          
                       handleFiles(files);

                            //   console.log(files[0].size);
                            //  handleFiles(files);

                        }

        </script>






";
    }

    public function getTemplateName()
    {
        return "Inra2013urzBundle:Default:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 147,  374 => 142,  353 => 129,  341 => 122,  326 => 120,  322 => 118,  305 => 116,  291 => 111,  288 => 110,  272 => 105,  269 => 104,  246 => 101,  131 => 45,  242 => 104,  125 => 50,  629 => 267,  601 => 234,  583 => 223,  573 => 219,  569 => 218,  565 => 217,  561 => 216,  556 => 215,  547 => 208,  530 => 204,  517 => 194,  508 => 190,  490 => 179,  475 => 171,  470 => 168,  453 => 164,  443 => 161,  421 => 154,  416 => 153,  413 => 152,  404 => 148,  398 => 146,  393 => 144,  377 => 139,  373 => 138,  366 => 136,  349 => 128,  343 => 124,  340 => 123,  336 => 122,  321 => 112,  312 => 105,  279 => 87,  265 => 79,  261 => 78,  252 => 103,  248 => 75,  224 => 97,  188 => 55,  168 => 49,  574 => 273,  553 => 243,  549 => 242,  544 => 241,  536 => 237,  531 => 236,  499 => 217,  497 => 216,  484 => 176,  481 => 205,  474 => 200,  462 => 190,  457 => 165,  454 => 187,  452 => 186,  439 => 176,  436 => 159,  423 => 163,  406 => 159,  394 => 150,  379 => 146,  371 => 141,  362 => 139,  354 => 134,  351 => 133,  347 => 132,  342 => 130,  338 => 129,  335 => 128,  331 => 127,  304 => 114,  297 => 112,  285 => 109,  250 => 88,  227 => 77,  218 => 86,  208 => 63,  166 => 50,  134 => 68,  62 => 18,  128 => 44,  527 => 199,  491 => 178,  476 => 166,  466 => 167,  455 => 155,  438 => 154,  405 => 141,  401 => 140,  397 => 139,  392 => 137,  389 => 143,  372 => 135,  355 => 120,  323 => 111,  298 => 107,  286 => 98,  277 => 91,  213 => 79,  179 => 71,  175 => 70,  167 => 55,  142 => 56,  137 => 47,  117 => 45,  140 => 73,  501 => 179,  498 => 178,  488 => 172,  473 => 171,  461 => 157,  448 => 162,  426 => 155,  422 => 149,  407 => 148,  395 => 140,  382 => 132,  360 => 128,  357 => 131,  345 => 117,  328 => 126,  319 => 110,  313 => 116,  311 => 109,  307 => 108,  303 => 101,  299 => 106,  293 => 105,  283 => 103,  275 => 100,  258 => 91,  236 => 80,  207 => 89,  192 => 87,  182 => 60,  176 => 59,  173 => 91,  86 => 34,  69 => 19,  40 => 4,  698 => 319,  677 => 289,  673 => 288,  668 => 287,  660 => 283,  655 => 282,  652 => 281,  643 => 276,  631 => 266,  626 => 264,  623 => 263,  621 => 262,  608 => 236,  605 => 251,  598 => 246,  586 => 236,  581 => 234,  578 => 220,  576 => 232,  563 => 222,  560 => 221,  551 => 214,  545 => 210,  528 => 235,  519 => 230,  511 => 196,  507 => 220,  502 => 218,  492 => 173,  487 => 184,  485 => 183,  478 => 178,  460 => 174,  450 => 163,  444 => 169,  440 => 168,  433 => 164,  429 => 156,  409 => 142,  396 => 145,  387 => 148,  384 => 141,  380 => 140,  370 => 137,  365 => 137,  359 => 134,  356 => 135,  350 => 129,  337 => 118,  333 => 115,  329 => 115,  324 => 113,  315 => 108,  310 => 106,  308 => 105,  278 => 107,  266 => 93,  259 => 90,  253 => 87,  247 => 84,  241 => 98,  221 => 96,  206 => 64,  199 => 79,  193 => 57,  190 => 62,  174 => 50,  169 => 66,  161 => 47,  158 => 86,  156 => 41,  146 => 76,  170 => 76,  152 => 55,  148 => 54,  113 => 23,  99 => 36,  77 => 16,  115 => 36,  90 => 29,  80 => 26,  53 => 9,  49 => 9,  23 => 3,  243 => 73,  238 => 72,  234 => 79,  231 => 70,  214 => 94,  210 => 84,  203 => 55,  200 => 54,  195 => 8,  164 => 84,  145 => 38,  129 => 35,  124 => 43,  110 => 43,  107 => 50,  87 => 32,  52 => 15,  37 => 3,  56 => 17,  20 => 1,  301 => 115,  295 => 113,  292 => 95,  289 => 94,  287 => 104,  282 => 108,  276 => 106,  273 => 95,  270 => 82,  268 => 93,  263 => 91,  249 => 79,  245 => 74,  230 => 80,  222 => 87,  220 => 62,  215 => 73,  211 => 64,  204 => 82,  198 => 65,  185 => 73,  183 => 85,  177 => 92,  160 => 63,  149 => 78,  123 => 48,  120 => 40,  112 => 55,  106 => 34,  82 => 35,  65 => 13,  38 => 6,  155 => 54,  144 => 47,  141 => 54,  139 => 36,  135 => 54,  126 => 49,  109 => 37,  103 => 33,  101 => 24,  70 => 27,  67 => 18,  61 => 12,  47 => 7,  28 => 3,  105 => 24,  96 => 22,  93 => 20,  83 => 18,  76 => 31,  72 => 22,  68 => 20,  50 => 8,  94 => 34,  88 => 39,  79 => 17,  59 => 12,  43 => 6,  32 => 3,  225 => 71,  216 => 65,  212 => 88,  205 => 84,  201 => 83,  196 => 78,  194 => 62,  191 => 75,  189 => 7,  186 => 86,  180 => 59,  172 => 50,  163 => 63,  159 => 81,  154 => 59,  147 => 77,  132 => 34,  127 => 49,  121 => 26,  118 => 59,  114 => 44,  104 => 28,  100 => 47,  78 => 29,  75 => 21,  71 => 20,  63 => 16,  58 => 15,  34 => 5,  91 => 20,  84 => 22,  74 => 15,  66 => 13,  55 => 10,  41 => 5,  46 => 11,  26 => 1,  22 => 3,  27 => 6,  24 => 4,  29 => 2,  21 => 1,  44 => 8,  35 => 5,  31 => 2,  25 => 5,  19 => 1,  184 => 54,  178 => 71,  171 => 61,  165 => 48,  162 => 81,  157 => 80,  153 => 61,  151 => 52,  143 => 50,  138 => 53,  136 => 71,  133 => 43,  130 => 52,  122 => 40,  119 => 55,  116 => 24,  111 => 32,  108 => 33,  102 => 29,  98 => 36,  95 => 31,  92 => 28,  89 => 33,  85 => 29,  81 => 27,  73 => 21,  64 => 23,  60 => 16,  57 => 11,  54 => 13,  51 => 10,  48 => 9,  45 => 11,  42 => 6,  39 => 5,  36 => 4,  33 => 3,  30 => 3,);
    }
}
