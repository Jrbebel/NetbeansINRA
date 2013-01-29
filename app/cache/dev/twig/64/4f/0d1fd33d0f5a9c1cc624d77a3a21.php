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
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.fileupload-ui.css"), "html", null, true);
        echo "\" />
        ";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        if ((!array_key_exists("xls", $context))) {
            // line 9
            echo "<div class=\"well\">
    
<form id=\"fileupload\" action = \"";
            // line 11
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
            // line 59
            echo "
<table class=\"table\">
    
";
            // line 62
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["xls"]) ? $context["xls"] : $this->getContext($context, "xls")), "getRowIterator", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["liste"]) {
                // line 63
                echo "           
 <tr >
     
";
                // line 66
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste")), "getCellIterator", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["xls"]) {
                    // line 67
                    echo "
         
        
        ";
                    // line 70
                    if (($this->getAttribute((isset($context["xls"]) ? $context["xls"] : $this->getContext($context, "xls")), "getColumn", array(), "method") != "I")) {
                        // line 71
                        echo "        <td>";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["xls"]) ? $context["xls"] : $this->getContext($context, "xls")), "getCalculatedValue", array(), "method"), "html", null, true);
                        echo "</td>
        ";
                    } else {
                        // line 73
                        echo "         <td>";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["xls"]) ? $context["xls"] : $this->getContext($context, "xls")), "getValue", array(), "method"), "html", null, true);
                        echo "</td>
        ";
                    }
                    // line 75
                    echo "

 
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['xls'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 79
                echo "         
</tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['liste'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 82
            echo "
</table>
  ";
        }
        // line 85
        echo "  
";
    }

    // line 88
    public function block_javascripts($context, array $blocks = array())
    {
        // line 89
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
        return array (  168 => 89,  124 => 70,  40 => 7,  69 => 21,  207 => 78,  202 => 70,  181 => 57,  174 => 52,  166 => 8,  128 => 50,  110 => 63,  97 => 39,  77 => 29,  62 => 20,  56 => 16,  23 => 3,  49 => 10,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 58,  183 => 60,  177 => 58,  160 => 85,  112 => 42,  82 => 24,  65 => 16,  38 => 4,  144 => 50,  141 => 70,  135 => 47,  126 => 71,  109 => 41,  103 => 34,  67 => 19,  61 => 16,  47 => 11,  105 => 24,  93 => 20,  76 => 22,  72 => 27,  68 => 12,  27 => 4,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 59,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 79,  147 => 79,  132 => 73,  127 => 49,  121 => 45,  118 => 44,  114 => 46,  104 => 36,  100 => 40,  78 => 25,  75 => 23,  71 => 19,  58 => 19,  34 => 5,  91 => 20,  84 => 28,  94 => 39,  88 => 27,  79 => 23,  59 => 16,  26 => 2,  21 => 2,  28 => 7,  24 => 6,  44 => 9,  31 => 4,  25 => 3,  19 => 1,  70 => 15,  63 => 19,  46 => 9,  22 => 1,  163 => 63,  155 => 82,  152 => 78,  149 => 51,  145 => 46,  139 => 50,  131 => 51,  123 => 47,  120 => 46,  115 => 66,  106 => 62,  101 => 59,  96 => 21,  83 => 18,  80 => 24,  74 => 28,  66 => 15,  55 => 16,  52 => 15,  50 => 11,  43 => 8,  41 => 9,  37 => 8,  35 => 3,  32 => 13,  29 => 2,  184 => 70,  178 => 71,  171 => 51,  165 => 88,  162 => 57,  157 => 56,  153 => 54,  151 => 52,  143 => 71,  138 => 75,  136 => 50,  133 => 64,  130 => 47,  122 => 44,  119 => 67,  116 => 35,  111 => 38,  108 => 37,  102 => 41,  98 => 22,  95 => 34,  92 => 28,  89 => 19,  85 => 27,  81 => 40,  73 => 19,  64 => 17,  60 => 17,  57 => 17,  54 => 12,  51 => 9,  48 => 9,  45 => 9,  42 => 8,  39 => 5,  36 => 4,  33 => 4,  30 => 3,);
    }
}
