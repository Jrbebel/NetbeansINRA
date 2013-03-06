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
            if ((!(null === (isset($context["protocole"]) ? $context["protocole"] : $this->getContext($context, "protocole"))))) {
                // line 33
                echo "                    <input type=\"hidden\" name=\"protocole\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["protocole"]) ? $context["protocole"] : $this->getContext($context, "protocole")), "html", null, true);
                echo "\" />
                    ";
            }
            // line 35
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
            // line 65
            echo "<div class=\"alert alert-info\">Prévisualisation des données à insérer</div>

<form  action=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_SaveFile"), "html", null, true);
            echo "\" method=\"POST\" >

    <table class=\"table table-striped\">

        ";
            // line 71
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["xls"]) ? $context["xls"] : $this->getContext($context, "xls")), "getRowIterator", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                echo " 

";
                // line 73
                if (($this->getAttribute((isset($context["cell"]) ? $context["cell"] : $this->getContext($context, "cell")), "getRowIndex", array(), "method") == 1)) {
                    // line 74
                    echo "        
        <thead> <tr>  
                
         ";
                    // line 77
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cell"]) ? $context["cell"] : $this->getContext($context, "cell")), "getCellIterator", array(), "method"));
                    foreach ($context['_seq'] as $context["_key"] => $context["liste"]) {
                        echo "   
                
       <th>";
                        // line 79
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste")), "getValue", array(), "method"), "html", null, true);
                        echo "</th>

        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['liste'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 82
                    echo "                        
        </tr></thead>


";
                }
                // line 87
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 89
            echo "
";
            // line 90
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["xls"]) ? $context["xls"] : $this->getContext($context, "xls")), "getRowIterator", array(), "method"));
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
                // line 91
                echo "
                <tr>

    ";
                // line 94
                if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") < 15)) {
                    echo " ";
                    echo "  

";
                    // line 96
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste")), "getCellIterator", array(), "method"));
                    foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                        // line 97
                        echo "
";
                        // line 98
                        if (($this->getAttribute((isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste")), "getRowIndex", array(), "method") != 1)) {
                            echo " 
        ";
                            // line 99
                            if ((($this->getAttribute((isset($context["cell"]) ? $context["cell"] : $this->getContext($context, "cell")), "getColumn", array(), "method") == "I") || ($this->getAttribute((isset($context["cell"]) ? $context["cell"] : $this->getContext($context, "cell")), "getColumn", array(), "method") == "J"))) {
                                // line 100
                                echo "                    <td>";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cell"]) ? $context["cell"] : $this->getContext($context, "cell")), "getCalculatedValue", array(), "method"), "html", null, true);
                                echo "</td> ";
                                // line 101
                                echo "                ";
                            } elseif ((($this->getAttribute((isset($context["cell"]) ? $context["cell"] : $this->getContext($context, "cell")), "getColumn", array(), "method") == "G") || ($this->getAttribute((isset($context["cell"]) ? $context["cell"] : $this->getContext($context, "cell")), "getColumn", array(), "method") == "H"))) {
                                // line 102
                                echo "
                    <td>";
                                // line 103
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["xls"]) ? $context["xls"] : $this->getContext($context, "xls")), "getStyle", array(0 => "G1"), "method"), "getNumberFormat", array(), "method"), "toFormattedString", array(0 => $this->getAttribute((isset($context["cell"]) ? $context["cell"] : $this->getContext($context, "cell")), "getValue", array(), "method"), 1 => "M/D/YYYY"), "method"), "html", null, true);
                                echo "</td> ";
                                // line 104
                                echo "
                ";
                            } else {
                                // line 106
                                echo "                    <td>";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cell"]) ? $context["cell"] : $this->getContext($context, "cell")), "getValue", array(), "method"), "html", null, true);
                                echo "</td>
                ";
                            }
                            // line 108
                            echo "
                ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 111
                    echo "
       ";
                }
                // line 113
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
            // line 115
            echo "


                </tr>
            </table> 

            <input type=\"hidden\" name=\"files\" value=\"";
            // line 121
            echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
            echo "\"/>
            <input type=\"hidden\" name=\"NumProtocole\" value=\"";
            // line 122
            echo twig_escape_filter($this->env, (isset($context["protocole"]) ? $context["protocole"] : $this->getContext($context, "protocole")), "html", null, true);
            echo "\"/>

            <input type=\"submit\" class=\"btn btn-danger\" value=\"Cancel\" />

            <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\"  />

        </form> 
  ";
        }
        // line 130
        echo "

";
    }

    // line 134
    public function block_javascripts($context, array $blocks = array())
    {
        // line 135
        echo "
        <script type=\"text/javascript\">

         function handleFiles(files) {

var texte =\"<table class='table table-striped'><tbody><tr><td><img height='40' width='40' src='";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icone_excel.jpg"), "html", null, true);
        echo "'</td><td>\"+files[0].name+\"</td><td>\"+files[0].size+\"</td><td><button type='submit' class='btn btn-primary start'><i class='icon-upload icon-white'></i><span>Start upload</span></button></td><td><button type='reset' class='btn btn-warning cancel'><i class='icon-ban-circle icon-white'></i><span>Cancel upload</span> </button></td></tr></tbody></table>\";
      
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
        return array (  315 => 140,  308 => 135,  305 => 134,  299 => 130,  288 => 122,  284 => 121,  261 => 113,  257 => 111,  243 => 106,  239 => 104,  236 => 103,  226 => 100,  224 => 99,  213 => 96,  207 => 94,  202 => 91,  175 => 87,  69 => 19,  167 => 59,  137 => 47,  40 => 4,  128 => 71,  77 => 28,  456 => 151,  453 => 150,  435 => 136,  418 => 132,  408 => 125,  392 => 122,  385 => 120,  381 => 118,  377 => 117,  374 => 116,  367 => 114,  361 => 111,  358 => 110,  350 => 107,  347 => 106,  345 => 105,  338 => 103,  334 => 102,  330 => 101,  326 => 99,  309 => 98,  300 => 91,  291 => 90,  265 => 74,  248 => 70,  241 => 68,  237 => 66,  233 => 102,  223 => 62,  217 => 97,  214 => 58,  206 => 55,  203 => 54,  188 => 77,  140 => 34,  125 => 25,  99 => 20,  62 => 14,  166 => 72,  150 => 67,  146 => 65,  129 => 61,  90 => 29,  87 => 32,  53 => 9,  49 => 10,  23 => 3,  210 => 72,  199 => 61,  193 => 60,  182 => 89,  179 => 44,  174 => 8,  168 => 82,  110 => 43,  56 => 18,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 89,  282 => 90,  276 => 115,  273 => 80,  270 => 84,  268 => 83,  263 => 80,  249 => 108,  245 => 77,  230 => 101,  222 => 73,  220 => 98,  215 => 80,  211 => 69,  204 => 66,  198 => 63,  185 => 90,  183 => 46,  177 => 58,  160 => 80,  112 => 42,  82 => 30,  65 => 13,  38 => 6,  144 => 51,  141 => 66,  135 => 47,  126 => 45,  109 => 54,  103 => 43,  67 => 18,  61 => 16,  47 => 7,  28 => 6,  105 => 34,  93 => 30,  76 => 33,  72 => 20,  68 => 12,  94 => 39,  88 => 28,  79 => 23,  59 => 22,  225 => 96,  216 => 90,  212 => 88,  205 => 145,  201 => 53,  196 => 80,  194 => 51,  191 => 78,  189 => 59,  186 => 76,  180 => 72,  172 => 76,  159 => 79,  154 => 68,  147 => 74,  132 => 48,  127 => 65,  121 => 55,  118 => 39,  114 => 45,  104 => 35,  100 => 32,  78 => 24,  75 => 21,  71 => 23,  58 => 15,  34 => 5,  91 => 38,  84 => 28,  26 => 2,  27 => 4,  24 => 4,  21 => 1,  44 => 8,  31 => 2,  25 => 3,  19 => 2,  70 => 19,  63 => 16,  46 => 7,  22 => 3,  163 => 58,  155 => 56,  152 => 77,  149 => 54,  145 => 73,  139 => 53,  131 => 67,  123 => 47,  120 => 43,  115 => 38,  106 => 53,  101 => 50,  96 => 21,  83 => 26,  80 => 26,  74 => 24,  66 => 21,  55 => 10,  52 => 11,  50 => 8,  43 => 7,  41 => 6,  37 => 3,  35 => 5,  32 => 7,  29 => 2,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 43,  157 => 56,  153 => 36,  151 => 73,  143 => 54,  138 => 71,  136 => 52,  133 => 46,  130 => 27,  122 => 24,  119 => 36,  116 => 35,  111 => 37,  108 => 42,  102 => 30,  98 => 22,  95 => 35,  92 => 30,  89 => 33,  85 => 31,  81 => 17,  73 => 21,  64 => 23,  60 => 19,  57 => 12,  54 => 12,  51 => 13,  48 => 9,  45 => 11,  42 => 5,  39 => 5,  36 => 4,  33 => 8,  30 => 3,);
    }
}
