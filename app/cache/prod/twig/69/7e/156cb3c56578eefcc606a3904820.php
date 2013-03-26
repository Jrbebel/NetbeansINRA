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
        <label>Quel est votre protocole ?</label>
        </br>

        <input type=\"text\" id=\"protocole\" name=\"protocole\" />
        <input type=\"hidden\" name=\"idprotocole\" id=\"institut\" />
        <input type=\"hidden\" name=\"demande\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["form_path"]) ? $context["form_path"] : null)), "html", null, true);
            echo "\" method=\"POST\">

<div class=\"alert alert-info\"> <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    <dl class=\"dl-horizontal\">
        <dt>Num Protocole : </dt>
        <dd>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["protocole"]) ? $context["protocole"] : null), 0, array(), "array"), "id"), "html", null, true);
            echo "</dd>
        <dt>Description : </dt>
        <dd>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["protocole"]) ? $context["protocole"] : null), 0, array(), "array"), "NomProtocole"), "html", null, true);
            echo "</dd>
        <dt>Dirigé par : </dt>
        <dd>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["protocole"]) ? $context["protocole"] : null), 0, array(), "array"), "Responsable"), "Nom"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["protocole"]) ? $context["protocole"] : null), 0, array(), "array"), "Responsable"), "Prenom"), "html", null, true);
            echo "</dd>
        <dt>Date validation: </dt>
        <dd>";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["protocole"]) ? $context["protocole"] : null), 0, array(), "array"), "DateValidation"), "d M Y"), "html", null, true);
            echo "</dd>
        <dt>Description:</dt>
        <dd>";
            // line 34
            echo $this->getAttribute($this->getAttribute((isset($context["protocole"]) ? $context["protocole"] : null), 0, array(), "array"), "Description");
            echo "</dd>
        <dt>Analyse faite : </dt>
        <dd>
    ";
            // line 37
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Analyse"]) ? $context["Analyse"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["analyse"]) {
                // line 38
                echo "                
                ";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["analyse"]) ? $context["analyse"] : null), "Nom"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["protocole"]) ? $context["protocole"] : null), 0, array(), "array"), "id"), "html", null, true);
            echo "\" />
        <input type=\"submit\"  value=\"";
            // line 47
            echo twig_escape_filter($this->env, (isset($context["form_value"]) ? $context["form_value"] : null), "html", null, true);
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
        return array (  188 => 77,  167 => 59,  137 => 47,  62 => 14,  77 => 33,  256 => 170,  131 => 61,  128 => 60,  125 => 59,  261 => 86,  258 => 85,  241 => 80,  229 => 72,  218 => 65,  197 => 63,  173 => 55,  156 => 50,  142 => 64,  86 => 24,  69 => 14,  40 => 4,  732 => 297,  727 => 294,  724 => 292,  722 => 291,  703 => 275,  699 => 274,  694 => 273,  686 => 269,  681 => 268,  678 => 267,  669 => 262,  657 => 252,  652 => 250,  649 => 249,  647 => 248,  634 => 238,  631 => 237,  624 => 232,  612 => 222,  607 => 220,  604 => 219,  602 => 218,  589 => 208,  586 => 207,  574 => 196,  564 => 191,  562 => 190,  559 => 189,  542 => 185,  536 => 182,  531 => 179,  525 => 175,  509 => 172,  502 => 170,  498 => 168,  494 => 167,  491 => 166,  484 => 164,  480 => 162,  473 => 160,  461 => 158,  459 => 157,  456 => 156,  448 => 153,  445 => 152,  443 => 151,  436 => 149,  432 => 148,  428 => 147,  423 => 144,  406 => 143,  396 => 135,  387 => 133,  384 => 132,  380 => 131,  369 => 123,  365 => 122,  362 => 121,  357 => 118,  351 => 114,  346 => 112,  329 => 108,  322 => 106,  318 => 104,  314 => 103,  311 => 102,  304 => 100,  299 => 97,  280 => 93,  278 => 92,  275 => 91,  267 => 88,  264 => 87,  262 => 86,  255 => 84,  244 => 79,  240 => 77,  223 => 76,  190 => 59,  182 => 56,  175 => 52,  158 => 51,  152 => 55,  148 => 48,  134 => 62,  166 => 72,  150 => 67,  146 => 65,  115 => 38,  90 => 34,  80 => 27,  53 => 8,  49 => 9,  23 => 3,  243 => 81,  238 => 73,  234 => 68,  231 => 67,  214 => 69,  210 => 60,  203 => 55,  200 => 54,  195 => 8,  164 => 53,  145 => 69,  129 => 61,  124 => 42,  110 => 55,  107 => 41,  87 => 37,  52 => 12,  37 => 3,  56 => 11,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 81,  245 => 77,  230 => 75,  222 => 73,  220 => 62,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 57,  183 => 60,  177 => 58,  160 => 57,  149 => 54,  123 => 66,  120 => 43,  112 => 53,  106 => 36,  82 => 30,  65 => 13,  38 => 4,  155 => 56,  144 => 51,  141 => 54,  139 => 50,  135 => 47,  126 => 43,  109 => 52,  103 => 50,  101 => 42,  70 => 19,  67 => 17,  61 => 18,  47 => 6,  28 => 6,  105 => 34,  96 => 48,  93 => 30,  83 => 26,  76 => 24,  72 => 20,  68 => 22,  50 => 7,  94 => 39,  88 => 28,  79 => 25,  59 => 12,  43 => 8,  32 => 4,  225 => 96,  216 => 64,  212 => 88,  205 => 68,  201 => 67,  196 => 80,  194 => 62,  191 => 59,  189 => 7,  186 => 76,  180 => 55,  172 => 76,  163 => 58,  159 => 57,  154 => 68,  147 => 55,  132 => 45,  127 => 42,  121 => 55,  118 => 39,  114 => 38,  104 => 36,  100 => 32,  78 => 33,  75 => 21,  71 => 32,  63 => 20,  58 => 13,  34 => 5,  91 => 38,  84 => 31,  74 => 22,  66 => 21,  55 => 15,  41 => 5,  46 => 7,  26 => 2,  22 => 3,  27 => 6,  24 => 4,  29 => 3,  21 => 1,  44 => 13,  35 => 4,  31 => 2,  25 => 5,  19 => 1,  184 => 70,  178 => 95,  171 => 62,  165 => 58,  162 => 81,  157 => 56,  153 => 74,  151 => 73,  143 => 67,  138 => 63,  136 => 46,  133 => 46,  130 => 47,  122 => 44,  119 => 36,  116 => 46,  111 => 37,  108 => 31,  102 => 30,  98 => 39,  95 => 34,  92 => 30,  89 => 19,  85 => 29,  81 => 36,  73 => 19,  64 => 23,  60 => 19,  57 => 20,  54 => 12,  51 => 16,  48 => 7,  45 => 15,  42 => 12,  39 => 6,  36 => 5,  33 => 8,  30 => 3,);
    }
}
