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
            if ((!(null === (isset($context["protocole"]) ? $context["protocole"] : $this->getContext($context, "protocole"))))) {
                // line 33
                echo "                    <input type=\"hidden\" name=\"protocole\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["protocole"]) ? $context["protocole"] : $this->getContext($context, "protocole")), "html", null, true);
                echo "\" />
                    <input type=\"hidden\" name=\"type\" value=\"";
                // line 34
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["form_path"]) ? $context["form_path"] : $this->getContext($context, "form_path"))), "html", null, true);
            echo "\" method=\"POST\" >

    <table class=\"table table-striped\">

        ";
            // line 77
            $context["xls1"] = $this->getAttribute((isset($context["xls"]) ? $context["xls"] : $this->getContext($context, "xls")), "getsheet", array(0 => 0), "method");
            // line 78
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["xls1"]) ? $context["xls1"] : $this->getContext($context, "xls1")), "getRowIterator", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                echo " 

";
                // line 80
                if (($this->getAttribute((isset($context["cell"]) ? $context["cell"] : $this->getContext($context, "cell")), "getRowIndex", array(), "method") == 1)) {
                    // line 81
                    echo "
        <thead> <tr>  

         ";
                    // line 84
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cell"]) ? $context["cell"] : $this->getContext($context, "cell")), "getCellIterator", array(), "method"));
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
                        if (((((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") != 2) && ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") != 5)) && ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") != 8)) && ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") != 13)) && ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") != 14))) {
                            echo " ";
                            // line 86
                            echo "                <th>";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste")), "getValue", array(), "method"), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["xls1"]) ? $context["xls1"] : $this->getContext($context, "xls1")), "getRowIterator", array(), "method"));
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
                if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") < 15)) {
                    echo " ";
                    echo "  

";
                    // line 103
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste")), "getCellIterator", array(), "method"));
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
                        if (((((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") != 2) && ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") != 5)) && ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") != 8)) && ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") != 13)) && ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") != 14))) {
                            // line 105
                            if (($this->getAttribute((isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste")), "getRowIndex", array(), "method") != 1)) {
                                echo " 
        ";
                                // line 106
                                if ((($this->getAttribute((isset($context["cell"]) ? $context["cell"] : $this->getContext($context, "cell")), "getColumn", array(), "method") == "I") || ($this->getAttribute((isset($context["cell"]) ? $context["cell"] : $this->getContext($context, "cell")), "getColumn", array(), "method") == "J"))) {
                                    // line 107
                                    echo "                <td>";
                                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cell"]) ? $context["cell"] : $this->getContext($context, "cell")), "getCalculatedValue", array(), "method"), "html", null, true);
                                    echo "</td> ";
                                    // line 108
                                    echo "                ";
                                } elseif ((($this->getAttribute((isset($context["cell"]) ? $context["cell"] : $this->getContext($context, "cell")), "getColumn", array(), "method") == "G") || ($this->getAttribute((isset($context["cell"]) ? $context["cell"] : $this->getContext($context, "cell")), "getColumn", array(), "method") == "H"))) {
                                    // line 109
                                    echo "
                <td>";
                                    // line 110
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["xls1"]) ? $context["xls1"] : $this->getContext($context, "xls1")), "getStyle", array(0 => "G1"), "method"), "getNumberFormat", array(), "method"), "toFormattedString", array(0 => $this->getAttribute((isset($context["cell"]) ? $context["cell"] : $this->getContext($context, "cell")), "getValue", array(), "method"), 1 => "M/D/YYYY"), "method"), "html", null, true);
                                    echo "</td> ";
                                    // line 111
                                    echo "
                ";
                                } else {
                                    // line 113
                                    echo "                <td>";
                                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cell"]) ? $context["cell"] : $this->getContext($context, "cell")), "getValue", array(), "method"), "html", null, true);
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
            echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
            echo "\"/>
        <input type=\"hidden\" name=\"NumProtocole\" value=\"";
            // line 129
            echo twig_escape_filter($this->env, (isset($context["protocole"]) ? $context["protocole"] : $this->getContext($context, "protocole")), "html", null, true);
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
        return array (  381 => 147,  374 => 142,  371 => 141,  353 => 129,  349 => 128,  341 => 122,  326 => 120,  305 => 116,  291 => 111,  288 => 110,  285 => 109,  272 => 105,  269 => 104,  252 => 103,  246 => 101,  224 => 97,  221 => 96,  207 => 89,  192 => 87,  140 => 73,  99 => 36,  188 => 77,  167 => 59,  137 => 47,  62 => 14,  77 => 33,  256 => 170,  128 => 60,  125 => 59,  261 => 86,  258 => 85,  241 => 98,  229 => 72,  218 => 65,  197 => 63,  173 => 55,  156 => 50,  142 => 64,  86 => 24,  69 => 19,  40 => 4,  732 => 297,  727 => 294,  724 => 292,  722 => 291,  703 => 275,  699 => 274,  694 => 273,  686 => 269,  681 => 268,  678 => 267,  669 => 262,  657 => 252,  652 => 250,  649 => 249,  647 => 248,  634 => 238,  631 => 237,  624 => 232,  612 => 222,  607 => 220,  604 => 219,  602 => 218,  589 => 208,  586 => 207,  574 => 196,  564 => 191,  562 => 190,  559 => 189,  542 => 185,  536 => 182,  531 => 179,  525 => 175,  509 => 172,  502 => 170,  498 => 168,  494 => 167,  491 => 166,  484 => 164,  480 => 162,  473 => 160,  461 => 158,  459 => 157,  456 => 156,  448 => 153,  445 => 152,  443 => 151,  436 => 149,  432 => 148,  428 => 147,  423 => 144,  406 => 143,  396 => 135,  387 => 133,  384 => 132,  380 => 131,  369 => 123,  365 => 137,  362 => 121,  357 => 131,  351 => 114,  346 => 112,  329 => 108,  322 => 118,  318 => 104,  314 => 103,  311 => 102,  304 => 100,  299 => 97,  280 => 93,  278 => 107,  275 => 91,  267 => 88,  264 => 87,  262 => 86,  255 => 84,  244 => 79,  240 => 77,  223 => 76,  190 => 59,  182 => 56,  175 => 52,  158 => 51,  148 => 48,  134 => 62,  166 => 72,  150 => 67,  146 => 65,  90 => 34,  53 => 9,  49 => 9,  23 => 3,  243 => 81,  238 => 73,  234 => 68,  231 => 67,  214 => 94,  210 => 60,  203 => 55,  200 => 54,  195 => 8,  164 => 84,  129 => 61,  124 => 42,  110 => 55,  107 => 41,  87 => 32,  56 => 11,  20 => 1,  301 => 115,  295 => 113,  292 => 95,  289 => 94,  287 => 93,  282 => 108,  276 => 106,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 81,  245 => 77,  230 => 75,  222 => 73,  220 => 62,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 57,  183 => 85,  177 => 58,  160 => 57,  112 => 55,  82 => 35,  65 => 13,  38 => 6,  144 => 51,  141 => 54,  135 => 47,  126 => 43,  109 => 52,  103 => 50,  67 => 18,  61 => 18,  47 => 7,  28 => 6,  105 => 34,  93 => 30,  76 => 31,  72 => 20,  68 => 22,  94 => 34,  88 => 39,  79 => 25,  59 => 12,  225 => 96,  216 => 64,  212 => 88,  205 => 68,  201 => 67,  196 => 80,  194 => 62,  191 => 59,  189 => 7,  186 => 86,  180 => 55,  172 => 76,  159 => 81,  154 => 68,  147 => 77,  132 => 45,  127 => 42,  121 => 55,  118 => 39,  114 => 38,  104 => 36,  100 => 47,  78 => 33,  75 => 21,  71 => 32,  58 => 15,  34 => 5,  91 => 38,  84 => 31,  26 => 2,  27 => 6,  24 => 4,  21 => 1,  44 => 8,  31 => 2,  25 => 5,  19 => 1,  70 => 27,  63 => 16,  46 => 11,  22 => 3,  163 => 58,  155 => 56,  152 => 55,  149 => 78,  145 => 69,  139 => 50,  131 => 61,  123 => 66,  120 => 43,  115 => 38,  106 => 51,  101 => 42,  96 => 48,  83 => 26,  80 => 27,  74 => 22,  66 => 21,  55 => 10,  52 => 15,  50 => 8,  43 => 8,  41 => 5,  37 => 3,  35 => 5,  32 => 4,  29 => 2,  184 => 70,  178 => 95,  171 => 62,  165 => 58,  162 => 81,  157 => 80,  153 => 74,  151 => 73,  143 => 67,  138 => 63,  136 => 71,  133 => 46,  130 => 47,  122 => 44,  119 => 36,  116 => 46,  111 => 37,  108 => 37,  102 => 30,  98 => 39,  95 => 34,  92 => 30,  89 => 33,  85 => 29,  81 => 36,  73 => 21,  64 => 23,  60 => 19,  57 => 20,  54 => 12,  51 => 16,  48 => 9,  45 => 15,  42 => 12,  39 => 5,  36 => 4,  33 => 8,  30 => 3,);
    }
}
