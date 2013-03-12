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
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["form_path"]) ? $context["form_path"] : $this->getContext($context, "form_path"))), "html", null, true);
            echo "\" method=\"POST\">

<div class=\"alert alert-info\">
    <dl class=\"dl-horizontal\">
        <dt>Num Protocole : </dt>
        <dd>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["protocole"]) ? $context["protocole"] : $this->getContext($context, "protocole")), 0, array(), "array"), "id"), "html", null, true);
            echo "</dd>
        <dt>Description : </dt>
        <dd>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["protocole"]) ? $context["protocole"] : $this->getContext($context, "protocole")), 0, array(), "array"), "NomProtocole"), "html", null, true);
            echo "</dd>
        <dt>Dirigé par : </dt>
        <dd>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["protocole"]) ? $context["protocole"] : $this->getContext($context, "protocole")), 0, array(), "array"), "Responsable"), "Nom"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["protocole"]) ? $context["protocole"] : $this->getContext($context, "protocole")), 0, array(), "array"), "Responsable"), "Prenom"), "html", null, true);
            echo "</dd>
        <dt>Date validation: </dt>
        <dd>";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["protocole"]) ? $context["protocole"] : $this->getContext($context, "protocole")), 0, array(), "array"), "DateValidation"), "d M Y"), "html", null, true);
            echo "</dd>
        <dt>Description:</dt>
        <dd>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["protocole"]) ? $context["protocole"] : $this->getContext($context, "protocole")), 0, array(), "array"), "Description"), "html", null, true);
            echo "</dd>
        <dt>Analyse faite : </dt>
        <dd>
    ";
            // line 37
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Analyse"]) ? $context["Analyse"] : $this->getContext($context, "Analyse")));
            foreach ($context['_seq'] as $context["_key"] => $context["analyse"]) {
                // line 38
                echo "                
                ";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["analyse"]) ? $context["analyse"] : $this->getContext($context, "analyse")), "Nom"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["protocole"]) ? $context["protocole"] : $this->getContext($context, "protocole")), 0, array(), "array"), "id"), "html", null, true);
            echo "\" />
        <input type=\"submit\"  value=\"";
            // line 47
            echo twig_escape_filter($this->env, (isset($context["form_value"]) ? $context["form_value"] : $this->getContext($context, "form_value")), "html", null, true);
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
        return array (  188 => 77,  167 => 59,  77 => 28,  256 => 86,  253 => 85,  236 => 80,  224 => 72,  213 => 65,  168 => 55,  137 => 47,  62 => 14,  40 => 4,  535 => 197,  530 => 196,  523 => 194,  520 => 193,  512 => 189,  490 => 171,  480 => 162,  469 => 155,  467 => 154,  464 => 153,  447 => 149,  437 => 142,  421 => 139,  414 => 137,  410 => 135,  406 => 134,  403 => 133,  396 => 131,  390 => 128,  387 => 127,  379 => 124,  376 => 123,  374 => 122,  367 => 120,  363 => 119,  359 => 118,  355 => 116,  338 => 115,  329 => 108,  320 => 107,  316 => 106,  305 => 98,  302 => 97,  294 => 91,  277 => 87,  266 => 83,  262 => 82,  259 => 81,  252 => 79,  246 => 76,  243 => 75,  232 => 71,  223 => 68,  208 => 61,  182 => 53,  173 => 52,  169 => 51,  156 => 43,  134 => 40,  128 => 71,  166 => 72,  150 => 67,  146 => 65,  90 => 29,  53 => 8,  49 => 9,  23 => 3,  240 => 81,  235 => 72,  231 => 68,  228 => 67,  217 => 65,  207 => 60,  200 => 55,  197 => 54,  192 => 63,  164 => 82,  129 => 61,  124 => 35,  110 => 34,  107 => 42,  87 => 37,  56 => 18,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 85,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 70,  222 => 73,  220 => 72,  215 => 70,  211 => 64,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  112 => 44,  82 => 30,  65 => 22,  38 => 4,  144 => 51,  141 => 54,  135 => 47,  126 => 45,  109 => 54,  103 => 43,  67 => 19,  61 => 16,  47 => 6,  28 => 6,  105 => 34,  93 => 30,  76 => 33,  72 => 20,  68 => 15,  94 => 30,  88 => 28,  79 => 23,  59 => 22,  225 => 96,  216 => 90,  212 => 63,  205 => 145,  201 => 83,  196 => 80,  194 => 62,  191 => 60,  189 => 77,  186 => 59,  180 => 72,  172 => 76,  159 => 57,  154 => 42,  147 => 49,  132 => 48,  127 => 42,  121 => 55,  118 => 39,  114 => 42,  104 => 35,  100 => 32,  78 => 24,  75 => 21,  71 => 23,  58 => 12,  34 => 5,  91 => 29,  84 => 31,  26 => 2,  27 => 4,  24 => 4,  21 => 1,  44 => 9,  31 => 2,  25 => 3,  19 => 2,  70 => 19,  63 => 17,  46 => 7,  22 => 3,  163 => 58,  155 => 56,  152 => 55,  149 => 54,  145 => 69,  139 => 50,  131 => 46,  123 => 47,  120 => 43,  115 => 38,  106 => 53,  101 => 50,  96 => 21,  83 => 26,  80 => 26,  74 => 28,  66 => 14,  55 => 17,  52 => 11,  50 => 7,  43 => 6,  41 => 5,  37 => 3,  35 => 4,  32 => 2,  29 => 2,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 81,  157 => 56,  153 => 51,  151 => 50,  143 => 48,  138 => 63,  136 => 50,  133 => 46,  130 => 47,  122 => 43,  119 => 42,  116 => 46,  111 => 37,  108 => 37,  102 => 41,  98 => 22,  95 => 39,  92 => 30,  89 => 19,  85 => 24,  81 => 24,  73 => 18,  64 => 23,  60 => 19,  57 => 18,  54 => 11,  51 => 13,  48 => 11,  45 => 8,  42 => 5,  39 => 6,  36 => 5,  33 => 8,  30 => 3,);
    }
}
