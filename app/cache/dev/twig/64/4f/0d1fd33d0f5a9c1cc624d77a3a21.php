<?php

/* Inra2013urzBundle:Default:edit.html.twig */
class __TwigTemplate_644f0d1fd33d0f5a9c1cc624d77a3a21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
    
   <ul class=\"thumbnails\">
  <li class=\"span4\">
    <a href=\"#\" class=\"thumbnail\">
      <img data-src=\"holder.js/300x200\" alt=\"\">
    </a>
  </li>

</ul>
        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
        <div class=\"row fileupload-buttonbar\">
            <div class=\"span9\">
                <!-- The fileinput-button span is used to style the file input field as button -->
                <span style=\"margin-left: 10px\" class=\"btn btn-success fileinput-button\">
                    <i class=\"icon-plus icon-white\"></i>
                    <span >Ajouter fichier csv</span>
                    <input type=\"file\" id=\"fileElem\" name=\"files\" onchange=\"handleFiles(this.files)\" >
                </span>
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
            // line 69
            echo "    <div class=\"alert alert-info\">Prévisualisation des données à insérer</div>

    <form  action=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_SaveFile"), "html", null, true);
            echo "\" method=\"POST\" >

        <table class=\"table table-striped\">

        ";
            // line 75
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["xls"]) ? $context["xls"] : $this->getContext($context, "xls")), "getRowIterator", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                echo " 

";
                // line 77
                if (($this->getAttribute((isset($context["cell"]) ? $context["cell"] : $this->getContext($context, "cell")), "getRowIndex", array(), "method") == 1)) {
                    // line 78
                    echo "            <thead> <tr>  
         ";
                    // line 79
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cell"]) ? $context["cell"] : $this->getContext($context, "cell")), "getCellIterator", array(), "method"));
                    foreach ($context['_seq'] as $context["_key"] => $context["liste"]) {
                        echo "   
                            <th>";
                        // line 80
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste")), "getValue", array(), "method"), "html", null, true);
                        echo "</th>

        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['liste'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 83
                    echo "                        </tr></thead>


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
                                echo "                        <td>";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cell"]) ? $context["cell"] : $this->getContext($context, "cell")), "getCalculatedValue", array(), "method"), "html", null, true);
                                echo "</td> ";
                                // line 101
                                echo "        ";
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
                                echo "                        <td>";
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
            // line 116
            echo "


                    </tr>
                </table> 

                <input type=\"hidden\" name=\"files\" value=\"";
            // line 122
            echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
            echo "\"/>
                <input type=\"submit\" class=\"btn btn-danger\" value=\"Cancel\" />

                <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\"  />

            </form> 
  ";
        }
        // line 129
        echo "

";
    }

    // line 133
    public function block_javascripts($context, array $blocks = array())
    {
        // line 134
        echo "
            <script type=\"text/javascript\">

             function handleFiles(files) {
              if (!files[0].length) {
                fileList.innerHTML = \"<p>No files selected!</p>\";
              } else {

var texte =\"<table class='table table-striped'><tbody><tr><td><img height='40' width='40' src='";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icone_excel.jpg"), "html", null, true);
        echo "'</td><td>\"+files[0].name+\"</td><td>\"+files[0].size+\"</td><td><button type='submit' class='btn btn-primary start'><i class='icon-upload icon-white'></i><span>Start upload</span></button></td><td><button type='reset' class='btn btn-warning cancel'><i class='icon-ban-circle icon-white'></i><span>Cancel upload</span> </button></td></tr></tbody></table>\";
      
                    \$('#mon_element').html(texte);
      
                }
                fileList.appendChild(list);
 
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
        return array (  307 => 142,  297 => 134,  294 => 133,  288 => 129,  278 => 122,  254 => 113,  250 => 111,  242 => 108,  236 => 106,  232 => 104,  229 => 103,  226 => 102,  223 => 101,  219 => 100,  217 => 99,  213 => 98,  206 => 96,  200 => 94,  195 => 91,  175 => 89,  142 => 77,  128 => 71,  124 => 69,  53 => 9,  40 => 4,  69 => 19,  210 => 97,  199 => 61,  193 => 60,  182 => 54,  179 => 53,  174 => 8,  168 => 87,  110 => 43,  56 => 16,  23 => 3,  49 => 10,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 116,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 80,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 80,  112 => 42,  82 => 30,  65 => 16,  38 => 4,  144 => 78,  141 => 66,  135 => 75,  126 => 45,  109 => 41,  103 => 34,  67 => 18,  61 => 16,  47 => 7,  105 => 41,  93 => 34,  76 => 22,  72 => 14,  68 => 12,  27 => 4,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 59,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 79,  132 => 48,  127 => 49,  121 => 45,  118 => 47,  114 => 45,  104 => 36,  100 => 33,  78 => 25,  75 => 23,  71 => 19,  58 => 17,  34 => 5,  91 => 20,  84 => 28,  94 => 39,  88 => 27,  79 => 23,  59 => 16,  26 => 2,  21 => 2,  28 => 3,  24 => 6,  44 => 9,  31 => 2,  25 => 3,  19 => 1,  70 => 22,  63 => 16,  46 => 12,  22 => 1,  163 => 63,  155 => 58,  152 => 49,  149 => 72,  145 => 46,  139 => 53,  131 => 42,  123 => 47,  120 => 46,  115 => 39,  106 => 35,  101 => 36,  96 => 21,  83 => 18,  80 => 29,  74 => 16,  66 => 21,  55 => 10,  52 => 15,  50 => 8,  43 => 7,  41 => 9,  37 => 3,  35 => 3,  32 => 7,  29 => 2,  184 => 70,  178 => 90,  171 => 62,  165 => 58,  162 => 83,  157 => 56,  153 => 80,  151 => 73,  143 => 54,  138 => 51,  136 => 52,  133 => 43,  130 => 47,  122 => 48,  119 => 36,  116 => 35,  111 => 38,  108 => 42,  102 => 30,  98 => 22,  95 => 34,  92 => 28,  89 => 19,  85 => 27,  81 => 40,  73 => 21,  64 => 17,  60 => 17,  57 => 17,  54 => 12,  51 => 12,  48 => 9,  45 => 9,  42 => 8,  39 => 5,  36 => 4,  33 => 3,  30 => 3,);
    }
}
