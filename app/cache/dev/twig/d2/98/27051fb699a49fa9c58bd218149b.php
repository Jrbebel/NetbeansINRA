<?php

/* Inra2013urzBundle:Analyse:CreatExcel.html.twig */
class __TwigTemplate_d29827051fb699a49fa9c58bd218149b extends Twig_Template
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
        <button type=\"submit\" class=\"btn\">Search</button>
    </form>
</div>

";
        // line 18
        if (array_key_exists("protocole", $context)) {
            // line 19
            echo "    <form class=\"form-search\" action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2103Bundle_CreateExcel"), "html", null, true);
            echo "\" method=\"POST\">

<div class=\"alert alert-info\">
    <dl class=\"dl-horizontal\">
        <dt>Num Protocole : </dt>
        <dd>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["protocole"]) ? $context["protocole"] : $this->getContext($context, "protocole")), 0, array(), "array"), "id"), "html", null, true);
            echo "</dd>
        <dt>Description : </dt>
        <dd>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["protocole"]) ? $context["protocole"] : $this->getContext($context, "protocole")), 0, array(), "array"), "NomProtocole"), "html", null, true);
            echo "</dd>
        <dt>Dirigé par : </dt>
        <dd>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["protocole"]) ? $context["protocole"] : $this->getContext($context, "protocole")), 0, array(), "array"), "Responsable"), "Nom"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["protocole"]) ? $context["protocole"] : $this->getContext($context, "protocole")), 0, array(), "array"), "Responsable"), "Prenom"), "html", null, true);
            echo "</dd>
        <dt>Date validation: </dt>
        <dd>";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["protocole"]) ? $context["protocole"] : $this->getContext($context, "protocole")), 0, array(), "array"), "DateValidation"), "d M Y"), "html", null, true);
            echo "</dd>
        <dt>Description:</dt>
        <dd>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["protocole"]) ? $context["protocole"] : $this->getContext($context, "protocole")), 0, array(), "array"), "Description"), "html", null, true);
            echo "</dd>
        <dt>Analyse faite : </dt>
        <dd>
    ";
            // line 35
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Analyse"]) ? $context["Analyse"] : $this->getContext($context, "Analyse")));
            foreach ($context['_seq'] as $context["_key"] => $context["analyse"]) {
                // line 36
                echo "                
                ";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["analyse"]) ? $context["analyse"] : $this->getContext($context, "analyse")), "Nom"), "html", null, true);
                echo ",
                
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analyse'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 40
            echo "        
        </dd>
    </dl>
        </br>
        <input type=\"hidden\" name=\"NumProtocole\" value=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["protocole"]) ? $context["protocole"] : $this->getContext($context, "protocole")), 0, array(), "array"), "id"), "html", null, true);
            echo "\" />
        <input type=\"submit\"  value=\"Générer Fichier Excel\" class=\"btn btn-primary\" />
</div>
    </form>
";
        }
        // line 49
        echo "
";
    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        // line 53
        echo "
<script type=\"text/javascript\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.ui.autocomplete.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui-1.10.0.custom.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.ui.core.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 57
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
        // line 75
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
        return array (  179 => 75,  158 => 57,  154 => 56,  150 => 55,  146 => 54,  143 => 53,  140 => 52,  135 => 49,  127 => 44,  121 => 40,  112 => 37,  109 => 36,  105 => 35,  99 => 32,  94 => 30,  87 => 28,  82 => 26,  77 => 24,  68 => 19,  66 => 18,  53 => 8,  50 => 7,  47 => 6,  40 => 4,  37 => 3,  31 => 2,);
    }
}
