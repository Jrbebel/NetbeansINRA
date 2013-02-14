<?php

/* Inra2013urzBundle:Analyse:CreateProtocole.html.twig */
class __TwigTemplate_c520233e943650e82f27bb16c0cbdcca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("Inra2013urzBundle:Default:IndexChercheur.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Inra2013urzBundle:Default:IndexChercheur.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Create Analyse";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
";
        // line 5
        if (array_key_exists("Status", $context)) {
            // line 6
            echo "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    <p>Le protocole numéro a bien été enregistrer.</p>

</div>

";
        } else {
            // line 12
            echo "<div class=\"well\">
    <h4>Création du protocole</h4></br>
    <form method=\"POST\" action=\"";
            // line 14
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo "\">
        
     ";
            // line 16
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "  


            </br> 
            <h4>Analyse à effectué</h4>  </br> 

     ";
            // line 22
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), 'rest');
            echo "  
            <input type=\"submit\" value=\"Annuler\" class=\"btn btn-danger\" />
            <input type=\"submit\" class=\"btn btn-primary\" />

        </form> 

    </div>




";
        }
        // line 34
        echo "
";
    }

    public function getTemplateName()
    {
        return "Inra2013urzBundle:Analyse:CreateProtocole.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 22,  158 => 57,  150 => 55,  146 => 54,  140 => 52,  99 => 32,  87 => 28,  77 => 24,  53 => 8,  40 => 4,  210 => 72,  199 => 61,  193 => 60,  182 => 54,  179 => 75,  174 => 8,  168 => 7,  110 => 43,  56 => 16,  23 => 3,  49 => 10,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 80,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 80,  112 => 37,  82 => 26,  65 => 16,  38 => 4,  144 => 50,  141 => 66,  135 => 49,  126 => 45,  109 => 36,  103 => 34,  67 => 19,  61 => 16,  47 => 8,  105 => 35,  93 => 34,  76 => 22,  72 => 14,  68 => 19,  27 => 4,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 59,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 56,  147 => 55,  132 => 48,  127 => 44,  121 => 40,  118 => 47,  114 => 45,  104 => 36,  100 => 33,  78 => 24,  75 => 23,  71 => 19,  58 => 17,  34 => 5,  91 => 20,  84 => 34,  94 => 30,  88 => 27,  79 => 23,  59 => 22,  26 => 2,  21 => 2,  28 => 3,  24 => 6,  44 => 9,  31 => 2,  25 => 3,  19 => 1,  70 => 22,  63 => 15,  46 => 7,  22 => 1,  163 => 63,  155 => 58,  152 => 49,  149 => 72,  145 => 46,  139 => 53,  131 => 42,  123 => 47,  120 => 46,  115 => 39,  106 => 35,  101 => 36,  96 => 21,  83 => 18,  80 => 29,  74 => 16,  66 => 18,  55 => 14,  52 => 15,  50 => 7,  43 => 6,  41 => 5,  37 => 3,  35 => 3,  32 => 7,  29 => 2,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 81,  157 => 56,  153 => 54,  151 => 73,  143 => 53,  138 => 51,  136 => 52,  133 => 43,  130 => 47,  122 => 48,  119 => 36,  116 => 35,  111 => 38,  108 => 42,  102 => 30,  98 => 22,  95 => 34,  92 => 28,  89 => 19,  85 => 31,  81 => 40,  73 => 19,  64 => 17,  60 => 16,  57 => 14,  54 => 12,  51 => 12,  48 => 11,  45 => 9,  42 => 8,  39 => 5,  36 => 4,  33 => 3,  30 => 3,);
    }
}
