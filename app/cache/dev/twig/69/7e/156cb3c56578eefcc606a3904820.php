<?php

/* Inra2013urzBundle:Analyse:CreatExcel.html.twig */
class __TwigTemplate_697e156cb3c56578eefcc606a3904820 extends Twig_Template
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
        echo "Exporter Fichier";
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/C.css"), "html", null, true);
        echo "\" />
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"well\">
    <form class=\"form-search\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_SearchProtocole"), "html", null, true);
        echo "\" method=\"POST\">
        <label>Entrez votre protocole ?</label>
        </br>

        <input type=\"text\" id=\"protocole\" name=\"protocole\" />
        <input type=\"hidden\" name=\"idprotocole\" id=\"institut\" />
        <input type=\"hidden\" name=\"demande\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getContext($context, "type"), "html", null, true);
        echo "\"/>
               <button type=\"submit\" class=\"btn\">Search</button>
    </form>
</div>

";
        // line 19
        if (array_key_exists("protocole", $context)) {
            // line 20
            echo "
    <form class=\"form-search\" action=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "form_path")), "html", null, true);
            echo "\" method=\"POST\">

<div class=\"alert alert-info\">
    <dl class=\"dl-horizontal\">
        <dt>Num Protocole : </dt>
        <dd>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "protocole"), 0, array(), "array"), "id"), "html", null, true);
            echo "</dd>
        <dt>Description : </dt>
        <dd>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "protocole"), 0, array(), "array"), "NomProtocole"), "html", null, true);
            echo "</dd>
        <dt>Dirigé par : </dt>
        <dd>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "protocole"), 0, array(), "array"), "Responsable"), "Nom"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "protocole"), 0, array(), "array"), "Responsable"), "Prenom"), "html", null, true);
            echo "</dd>
        <dt>Date validation: </dt>
        <dd>";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "protocole"), 0, array(), "array"), "DateValidation"), "d M Y"), "html", null, true);
            echo "</dd>
        <dt>Description:</dt>
        <dd>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "protocole"), 0, array(), "array"), "Description"), "html", null, true);
            echo "</dd>
        <dt>Analyse faite : </dt>
        <dd>
    ";
            // line 37
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "Analyse"));
            foreach ($context['_seq'] as $context["_key"] => $context["analyse"]) {
                // line 38
                echo "                
                ";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "analyse"), "Nom"), "html", null, true);
                echo ",
                
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analyse'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 42
            echo "        
        </dd>
    </dl>
        </br>
        <input type=\"hidden\" name=\"NumProtocole\" value=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "protocole"), 0, array(), "array"), "id"), "html", null, true);
            echo "\" />
        <input type=\"submit\"  value=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->getContext($context, "form_value"), "html", null, true);
            echo "\" class=\"btn btn-primary\" />
</div>
    </form>
";
        }
        // line 51
        echo "
";
    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        // line 55
        echo "
<script type=\"text/javascript\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.ui.autocomplete.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui-1.10.0.custom.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.ui.core.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.ui.position.min.js"), "html", null, true);
        echo "\"></script>




<script type=\"text/javascript\">

       \$(document).ready(function () {


            \$(\"#protocole\").autocomplete({
    
                source: function (request, response) {
                    
                    var id = \$('#protocole').val();
                   
                    var DATA = 'id=' + id;
                    \$.ajax({
                        url: \"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_SearchProtocole"), "html", null, true);
        echo "\", 
                        method: \"POST\",
                        dataType: \"json\",
                        data: DATA,
                        success: function (data) {
                            response(\$.map(data, function (item,i) {  
                              
                                return {                                   
                         
                                    value: item.NomProtocole,
                                    id: item.id,
                                    }
                            }))
                        }
                    })
                },
                select: function (event, ui) {
                   console.log(ui.item)
                    \$('#institut').val( ui.item.id);
                
                },
                change: function (event, ui) {
                 
                    \$('#institut').val(ui.item.id);



                }
            });
     
      });
     
     
      
    </script>

";
    }

    public function getTemplateName()
    {
        return "Inra2013urzBundle:Analyse:CreatExcel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 77,  167 => 59,  137 => 47,  62 => 14,  53 => 8,  40 => 4,  128 => 71,  77 => 28,  23 => 3,  49 => 10,  210 => 72,  199 => 61,  193 => 60,  182 => 54,  179 => 53,  174 => 8,  168 => 7,  110 => 43,  56 => 16,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 80,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 80,  112 => 42,  82 => 30,  65 => 16,  38 => 6,  144 => 51,  141 => 66,  135 => 47,  126 => 45,  109 => 54,  103 => 34,  67 => 19,  61 => 16,  47 => 6,  91 => 20,  84 => 28,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 145,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 59,  186 => 76,  180 => 72,  172 => 67,  159 => 57,  154 => 59,  147 => 55,  132 => 48,  127 => 42,  121 => 45,  118 => 39,  114 => 45,  104 => 36,  100 => 32,  78 => 24,  75 => 21,  71 => 23,  34 => 5,  44 => 9,  94 => 39,  88 => 28,  59 => 22,  105 => 34,  93 => 30,  79 => 23,  76 => 22,  72 => 20,  68 => 12,  58 => 13,  24 => 6,  27 => 4,  25 => 3,  21 => 2,  31 => 2,  26 => 2,  19 => 1,  70 => 19,  63 => 17,  46 => 7,  22 => 2,  163 => 58,  155 => 56,  152 => 55,  149 => 54,  145 => 46,  139 => 53,  131 => 42,  123 => 47,  120 => 46,  115 => 38,  106 => 53,  101 => 50,  96 => 21,  83 => 26,  80 => 29,  74 => 16,  66 => 21,  55 => 17,  52 => 11,  50 => 7,  43 => 10,  41 => 10,  37 => 3,  35 => 5,  32 => 7,  29 => 2,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 81,  157 => 56,  153 => 54,  151 => 73,  143 => 54,  138 => 51,  136 => 52,  133 => 46,  130 => 47,  122 => 48,  119 => 36,  116 => 35,  111 => 37,  108 => 42,  102 => 30,  98 => 22,  95 => 34,  92 => 28,  89 => 19,  85 => 31,  81 => 40,  73 => 19,  64 => 17,  60 => 17,  57 => 14,  54 => 12,  51 => 12,  48 => 11,  45 => 9,  42 => 5,  39 => 6,  36 => 5,  33 => 6,  30 => 3,);
    }
}
