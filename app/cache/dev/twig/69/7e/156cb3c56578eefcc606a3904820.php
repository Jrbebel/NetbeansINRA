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
        return array (  167 => 59,  137 => 47,  40 => 4,  128 => 71,  77 => 28,  456 => 151,  453 => 150,  435 => 136,  418 => 132,  408 => 125,  392 => 122,  385 => 120,  381 => 118,  377 => 117,  374 => 116,  367 => 114,  361 => 111,  358 => 110,  350 => 107,  347 => 106,  345 => 105,  338 => 103,  334 => 102,  330 => 101,  326 => 99,  309 => 98,  300 => 91,  291 => 90,  265 => 74,  248 => 70,  241 => 68,  237 => 66,  233 => 65,  223 => 62,  217 => 59,  214 => 58,  206 => 55,  203 => 54,  188 => 77,  140 => 34,  125 => 25,  99 => 20,  62 => 14,  166 => 72,  150 => 67,  146 => 65,  129 => 61,  90 => 29,  87 => 37,  53 => 8,  49 => 10,  23 => 3,  210 => 72,  199 => 61,  193 => 60,  182 => 54,  179 => 44,  174 => 8,  168 => 7,  110 => 43,  56 => 18,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 89,  282 => 90,  276 => 81,  273 => 80,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 64,  222 => 73,  220 => 72,  215 => 80,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 46,  177 => 58,  160 => 80,  112 => 42,  82 => 30,  65 => 13,  38 => 5,  144 => 51,  141 => 66,  135 => 47,  126 => 45,  109 => 54,  103 => 43,  67 => 18,  61 => 16,  47 => 6,  28 => 6,  105 => 34,  93 => 30,  76 => 33,  72 => 20,  68 => 12,  94 => 39,  88 => 28,  79 => 23,  59 => 22,  225 => 96,  216 => 90,  212 => 88,  205 => 145,  201 => 53,  196 => 80,  194 => 51,  191 => 78,  189 => 59,  186 => 76,  180 => 72,  172 => 76,  159 => 57,  154 => 68,  147 => 55,  132 => 48,  127 => 42,  121 => 55,  118 => 39,  114 => 45,  104 => 35,  100 => 32,  78 => 24,  75 => 21,  71 => 23,  58 => 13,  34 => 5,  91 => 38,  84 => 28,  26 => 2,  27 => 4,  24 => 4,  21 => 1,  44 => 9,  31 => 2,  25 => 3,  19 => 2,  70 => 19,  63 => 17,  46 => 7,  22 => 3,  163 => 58,  155 => 56,  152 => 55,  149 => 54,  145 => 46,  139 => 53,  131 => 42,  123 => 47,  120 => 43,  115 => 38,  106 => 53,  101 => 50,  96 => 21,  83 => 26,  80 => 26,  74 => 24,  66 => 21,  55 => 17,  52 => 11,  50 => 7,  43 => 7,  41 => 6,  37 => 3,  35 => 4,  32 => 7,  29 => 2,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 43,  157 => 56,  153 => 36,  151 => 73,  143 => 54,  138 => 63,  136 => 52,  133 => 46,  130 => 27,  122 => 24,  119 => 36,  116 => 35,  111 => 37,  108 => 42,  102 => 30,  98 => 22,  95 => 18,  92 => 30,  89 => 19,  85 => 31,  81 => 17,  73 => 15,  64 => 23,  60 => 19,  57 => 12,  54 => 12,  51 => 13,  48 => 11,  45 => 11,  42 => 5,  39 => 6,  36 => 5,  33 => 8,  30 => 3,);
    }
}
