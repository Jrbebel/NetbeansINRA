<?php

/* Inra2013urzBundle:Default:edit.html.twig */
class __TwigTemplate_644f0d1fd33d0f5a9c1cc624d77a3a21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
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
            echo "<div class=\"well\">

    <form id=\"fileupload\" action = \"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_UploadFile"), "html", null, true);
            echo "\"  enctype=\"multipart/form-data\" method=\"POST\">
        <!-- Redirect browsers with JavaScript disabled to the origin page -->

        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
        <div class=\"row fileupload-buttonbar\">
            <div class=\"span9\">
                <!-- The fileinput-button span is used to style the file input field as button -->
                <span class=\"btn btn-success fileinput-button\">
                    <i class=\"icon-plus icon-white\"></i>
                    <span>Ajouter fichier csv</span>
                    <input type=\"file\" name=\"files\" >
                </span>

                <button type=\"submit\" class=\"btn btn-primary start\">
                    <i class=\"icon-upload icon-white\"></i>
                    <span>Start upload</span>
                </button>
                <button type=\"reset\" class=\"btn btn-warning cancel\">
                    <i class=\"icon-ban-circle icon-white\"></i>
                    <span>Cancel upload</span>
                </button>
                <button type=\"button\" class=\"btn btn-danger delete\">
                    <i class=\"icon-trash icon-white\"></i>
                    <span>Delete</span>
                </button>
                <input type=\"checkbox\" class=\"toggle\">
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
    </form>
    <br>

</div>

  ";
        } else {
            // line 69
            echo "<div class=\"alert alert-info\">Prévisualisation des données à insérer</div>

<form  action=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_SaveFile"), "html", null, true);
            echo "\" method=\"POST\" >

    <table class=\"table table-striped\">




";
            // line 78
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
                // line 79
                echo "
        <tr>

        ";
                // line 82
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste")), "getCellIterator", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                    echo " 

";
                    // line 84
                    if (($this->getAttribute((isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste")), "getRowIndex", array(), "method") == 1)) {
                        // line 85
                        echo "            <td>";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cell"]) ? $context["cell"] : $this->getContext($context, "cell")), "getValue", array(), "method"), "html", null, true);
                        echo "</td>




 ";
                    }
                    // line 91
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 92
                echo "        </tr>

        <tr >
    ";
                // line 95
                if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") < 10)) {
                    echo " ";
                    echo "  

";
                    // line 97
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste")), "getCellIterator", array(), "method"));
                    foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                        // line 98
                        echo "
";
                        // line 99
                        if (($this->getAttribute((isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste")), "getRowIndex", array(), "method") != 1)) {
                            // line 100
                            echo "        ";
                            if ((($this->getAttribute((isset($context["cell"]) ? $context["cell"] : $this->getContext($context, "cell")), "getColumn", array(), "method") == "I") || ($this->getAttribute((isset($context["cell"]) ? $context["cell"] : $this->getContext($context, "cell")), "getColumn", array(), "method") == "J"))) {
                                // line 101
                                echo "                <td>";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cell"]) ? $context["cell"] : $this->getContext($context, "cell")), "getCalculatedValue", array(), "method"), "html", null, true);
                                echo "</td> ";
                                // line 102
                                echo "        ";
                            } elseif ((($this->getAttribute((isset($context["cell"]) ? $context["cell"] : $this->getContext($context, "cell")), "getColumn", array(), "method") == "G") || ($this->getAttribute((isset($context["cell"]) ? $context["cell"] : $this->getContext($context, "cell")), "getColumn", array(), "method") == "H"))) {
                                // line 103
                                echo "
                <td>";
                                // line 104
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["xls"]) ? $context["xls"] : $this->getContext($context, "xls")), "getStyle", array(0 => "G1"), "method"), "getNumberFormat", array(), "method"), "toFormattedString", array(0 => $this->getAttribute((isset($context["cell"]) ? $context["cell"] : $this->getContext($context, "cell")), "getValue", array(), "method"), 1 => "M/D/YYYY"), "method"), "html", null, true);
                                echo "</td> ";
                                // line 105
                                echo "
";
                            } else {
                                // line 107
                                echo "                <td>";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cell"]) ? $context["cell"] : $this->getContext($context, "cell")), "getValue", array(), "method"), "html", null, true);
                                echo "</td>
        ";
                            }
                            // line 109
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
            </tr>
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
            // line 118
            echo "


        </table> 

        <input type=\"hidden\" name=\"files\" value=\"";
            // line 123
            echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
            echo "\"/>
        <input type=\"submit\" class=\"btn btn-danger\" value=\"Cancel\" />

        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" />

    </form> 
  ";
        }
        // line 130
        echo "
";
    }

    // line 133
    public function block_javascripts($context, array $blocks = array())
    {
        // line 134
        echo "


    <!--
    <!-- The Templates plugin is included to render the upload/download listings
    <script src=\"http://blueimp.github.com/JavaScript-Templates/tmpl.min.js\"></script> -->
    <!-- The Load Image plugin is included for the preview images and image resizing functionality 
    <script src=\"http://blueimp.github.com/JavaScript-Load-Image/load-image.min.js\"></script>
     The Canvas to Blob plugin is included for image resizing functionality
    <script src=\"http://blueimp.github.com/JavaScript-Canvas-to-Blob/canvas-to-blob.min.js\"></script> -->
    <!-- Bootstrap JS and Bootstrap Image Gallery are not required, but included for the demo 
    <script src=\"http://blueimp.github.com/cdn/js/bootstrap.min.js\"></script>
    <script src=\"http://blueimp.github.com/Bootstrap-Image-Gallery/js/bootstrap-image-gallery.min.js\"></script>-->
    <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->



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
        return array (  278 => 134,  275 => 133,  270 => 130,  260 => 123,  253 => 118,  237 => 115,  233 => 113,  224 => 109,  218 => 107,  214 => 105,  211 => 104,  208 => 103,  205 => 102,  201 => 101,  198 => 100,  196 => 99,  193 => 98,  189 => 97,  183 => 95,  178 => 92,  172 => 91,  162 => 85,  160 => 84,  153 => 82,  148 => 79,  131 => 78,  121 => 71,  117 => 69,  66 => 21,  62 => 19,  60 => 18,  56 => 16,  48 => 10,  46 => 9,  43 => 8,  40 => 7,  33 => 4,  30 => 3,);
    }
}
