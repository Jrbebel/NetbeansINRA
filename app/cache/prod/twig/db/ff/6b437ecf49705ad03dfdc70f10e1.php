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
        <div class=\"row fileupload-buttonbar\">
            <div class=\"span4\">
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

            </div>          <h3>Ou déposer le fichier ici</h3>     
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
            // line 66
            echo "<div class=\"alert alert-info\">Prévisualisation des données à insérer</div>

<form  action=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["form_path"]) ? $context["form_path"] : null)), "html", null, true);
            echo "\" method=\"POST\" >

    <table class=\"table table-striped\">
        
        ";
            // line 72
            $context["xls1"] = $this->getAttribute((isset($context["xls"]) ? $context["xls"] : null), "getsheet", array(0 => 0), "method");
            // line 73
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["xls1"]) ? $context["xls1"] : null), "getRowIterator", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                echo " 

";
                // line 75
                if (($this->getAttribute((isset($context["cell"]) ? $context["cell"] : null), "getRowIndex", array(), "method") == 1)) {
                    // line 76
                    echo "
        <thead> <tr>  

         ";
                    // line 79
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cell"]) ? $context["cell"] : null), "getCellIterator", array(), "method"));
                    foreach ($context['_seq'] as $context["_key"] => $context["liste"]) {
                        echo "   

                <th>";
                        // line 81
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["liste"]) ? $context["liste"] : null), "getValue", array(), "method"), "html", null, true);
                        echo "</th>

        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['liste'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 84
                    echo "
            </tr></thead>


";
                }
                // line 89
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 91
            echo "
";
            // line 92
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
                // line 93
                echo "
        <tr>

    ";
                // line 96
                if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") < 15)) {
                    echo " ";
                    echo "  

";
                    // line 98
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["liste"]) ? $context["liste"] : null), "getCellIterator", array(), "method"));
                    foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                        // line 99
                        echo "
";
                        // line 100
                        if (($this->getAttribute((isset($context["liste"]) ? $context["liste"] : null), "getRowIndex", array(), "method") != 1)) {
                            echo " 
        ";
                            // line 101
                            if ((($this->getAttribute((isset($context["cell"]) ? $context["cell"] : null), "getColumn", array(), "method") == "I") || ($this->getAttribute((isset($context["cell"]) ? $context["cell"] : null), "getColumn", array(), "method") == "J"))) {
                                // line 102
                                echo "            <td>";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cell"]) ? $context["cell"] : null), "getCalculatedValue", array(), "method"), "html", null, true);
                                echo "</td> ";
                                // line 103
                                echo "                ";
                            } elseif ((($this->getAttribute((isset($context["cell"]) ? $context["cell"] : null), "getColumn", array(), "method") == "G") || ($this->getAttribute((isset($context["cell"]) ? $context["cell"] : null), "getColumn", array(), "method") == "H"))) {
                                // line 104
                                echo "
            <td>";
                                // line 105
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["xls1"]) ? $context["xls1"] : null), "getStyle", array(0 => "G1"), "method"), "getNumberFormat", array(), "method"), "toFormattedString", array(0 => $this->getAttribute((isset($context["cell"]) ? $context["cell"] : null), "getValue", array(), "method"), 1 => "M/D/YYYY"), "method"), "html", null, true);
                                echo "</td> ";
                                // line 106
                                echo "
                ";
                            } else {
                                // line 108
                                echo "            <td>";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cell"]) ? $context["cell"] : null), "getValue", array(), "method"), "html", null, true);
                                echo "</td>
                ";
                            }
                            // line 110
                            echo "
                ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 113
                    echo "
       ";
                }
                // line 115
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
            // line 117
            echo "


        </tr>
    </table> 

    <input type=\"hidden\" name=\"files\" value=\"";
            // line 123
            echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : null), "html", null, true);
            echo "\"/>
    <input type=\"hidden\" name=\"NumProtocole\" value=\"";
            // line 124
            echo twig_escape_filter($this->env, (isset($context["protocole"]) ? $context["protocole"] : null), "html", null, true);
            echo "\"/>
    <input type=\"hidden\" name=\"Status\" value=\"Enregistrement\" /> ";
            // line 126
            echo "    <input type=\"submit\" class=\"btn btn-danger\" value=\"Cancel\" />

    <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\"  />

</form> 
  ";
        }
        // line 132
        echo "

";
    }

    // line 136
    public function block_javascripts($context, array $blocks = array())
    {
        // line 137
        echo "
<script type=\"text/javascript\">

                function handleFiles(files) {

                    var texte = \"<table class='table table-striped'><tbody><tr><td><img height='40' width='40' src='";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icone_excel.jpg"), "html", null, true);
        echo "'</td><td>\" + files[0].name + \"</td><td>\" + files[0].size + \"</td><td><button type='submit' class='btn btn-primary start'><i class='icon-upload icon-white'></i><span>Start upload</span></button></td><td><button type='reset' class='btn btn-warning cancel'><i class='icon-ban-circle icon-white'></i><span>Cancel upload</span> </button></td></tr></tbody></table>\";

                    \$('#mon_element').html(texte);



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
        return array (  323 => 142,  316 => 137,  313 => 136,  307 => 132,  299 => 126,  291 => 123,  264 => 113,  250 => 108,  246 => 106,  240 => 104,  237 => 103,  233 => 102,  227 => 100,  209 => 93,  182 => 89,  99 => 36,  69 => 19,  167 => 59,  152 => 75,  142 => 72,  128 => 60,  125 => 59,  256 => 110,  253 => 85,  224 => 99,  213 => 65,  192 => 92,  168 => 55,  137 => 47,  131 => 66,  62 => 14,  40 => 4,  579 => 228,  574 => 227,  567 => 225,  564 => 224,  555 => 219,  534 => 201,  531 => 200,  524 => 195,  503 => 177,  500 => 176,  490 => 167,  479 => 160,  477 => 159,  474 => 158,  457 => 154,  447 => 147,  431 => 144,  424 => 142,  420 => 140,  416 => 139,  413 => 138,  406 => 136,  400 => 133,  397 => 132,  389 => 129,  386 => 128,  384 => 127,  377 => 125,  373 => 124,  369 => 123,  365 => 121,  348 => 120,  338 => 112,  329 => 110,  326 => 109,  322 => 108,  311 => 100,  308 => 99,  300 => 93,  283 => 117,  272 => 85,  265 => 83,  258 => 81,  252 => 78,  241 => 74,  236 => 80,  229 => 70,  223 => 67,  218 => 65,  197 => 62,  188 => 77,  179 => 54,  175 => 84,  140 => 42,  134 => 62,  97 => 31,  166 => 81,  150 => 67,  146 => 65,  115 => 38,  90 => 29,  80 => 27,  53 => 9,  49 => 9,  23 => 3,  243 => 105,  238 => 73,  234 => 68,  231 => 101,  214 => 96,  210 => 60,  203 => 55,  200 => 54,  195 => 8,  164 => 82,  145 => 69,  129 => 61,  124 => 49,  110 => 43,  107 => 42,  87 => 32,  52 => 15,  37 => 3,  56 => 11,  20 => 1,  301 => 100,  295 => 124,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 87,  273 => 85,  270 => 84,  268 => 115,  263 => 80,  249 => 77,  245 => 77,  230 => 75,  222 => 73,  220 => 98,  215 => 70,  211 => 64,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 44,  149 => 54,  123 => 47,  120 => 43,  112 => 53,  106 => 36,  82 => 30,  65 => 16,  38 => 6,  155 => 56,  144 => 73,  141 => 54,  139 => 50,  135 => 68,  126 => 45,  109 => 52,  103 => 43,  101 => 42,  70 => 19,  67 => 18,  61 => 16,  47 => 7,  28 => 6,  105 => 34,  96 => 21,  93 => 30,  83 => 26,  76 => 33,  72 => 20,  68 => 15,  50 => 8,  94 => 34,  88 => 28,  79 => 23,  59 => 12,  43 => 5,  32 => 2,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 91,  186 => 59,  180 => 72,  172 => 76,  163 => 58,  159 => 79,  154 => 76,  147 => 49,  132 => 48,  127 => 42,  121 => 55,  118 => 39,  114 => 42,  104 => 49,  100 => 32,  78 => 24,  75 => 21,  71 => 24,  63 => 16,  58 => 15,  34 => 5,  91 => 38,  84 => 31,  74 => 22,  66 => 14,  55 => 10,  41 => 5,  46 => 11,  26 => 2,  22 => 3,  27 => 4,  24 => 4,  29 => 2,  21 => 1,  44 => 8,  35 => 5,  31 => 2,  25 => 4,  19 => 1,  184 => 70,  178 => 95,  171 => 62,  165 => 46,  162 => 45,  157 => 43,  153 => 51,  151 => 50,  143 => 48,  138 => 63,  136 => 50,  133 => 46,  130 => 37,  122 => 43,  119 => 42,  116 => 36,  111 => 37,  108 => 34,  102 => 41,  98 => 22,  95 => 39,  92 => 30,  89 => 33,  85 => 24,  81 => 24,  73 => 21,  64 => 23,  60 => 19,  57 => 13,  54 => 11,  51 => 13,  48 => 9,  45 => 6,  42 => 12,  39 => 5,  36 => 4,  33 => 8,  30 => 3,);
    }
}
