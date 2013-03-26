<?php

/* Inra2013urzBundle:Pagination:pagination.html.twig */
class __TwigTemplate_e6f0cb41cf079267d35fa52e6a77f43a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo " <ul>
";
        // line 3
        if (((isset($context["pageCount"]) ? $context["pageCount"] : null) > 1)) {
            // line 4
            echo "
     
\t";
            // line 6
            if ((array_key_exists("first", $context) && ((isset($context["current"]) ? $context["current"] : null) != (isset($context["first"]) ? $context["first"] : null)))) {
                // line 7
                echo "     
        \t<li><a href=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array("page" => (isset($context["first"]) ? $context["first"] : null)))), "html", null, true);
                echo "\">&lt;&lt;</a></li>
    
    ";
            }
            // line 11
            echo "
    ";
            // line 12
            if (array_key_exists("previous", $context)) {
                // line 13
                echo "  
        \t<li><a href=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array("page" => (isset($context["previous"]) ? $context["previous"] : null)))), "html", null, true);
                echo "\">&lt;</a></li>
     
    ";
            }
            // line 17
            echo "
    ";
            // line 18
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) ? $context["pagesInRange"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 19
                echo "        ";
                if (((isset($context["page"]) ? $context["page"] : null) != (isset($context["current"]) ? $context["current"] : null))) {
                    // line 20
                    echo "          
            \t<li><a href=\"";
                    // line 21
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array("page" => (isset($context["page"]) ? $context["page"] : null)))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
                    echo "</a></li>
        
        ";
                } else {
                    // line 24
                    echo "                <li class=\"active\"><a href=\"#\">";
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
                    echo "</a></li>
        ";
                }
                // line 26
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 28
            echo "
    ";
            // line 29
            if (array_key_exists("next", $context)) {
                // line 30
                echo "      
        \t<li><a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array("page" => (isset($context["next"]) ? $context["next"] : null)))), "html", null, true);
                echo "\">&gt;</a></li>
     
    ";
            }
            // line 34
            echo "
    ";
            // line 35
            if ((array_key_exists("last", $context) && ((isset($context["current"]) ? $context["current"] : null) != (isset($context["last"]) ? $context["last"] : null)))) {
                // line 36
                echo "    
        \t<li><a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array("page" => (isset($context["last"]) ? $context["last"] : null)))), "html", null, true);
                echo "\">&gt;&gt;</a></li>
      
    ";
            }
            // line 40
            echo "     

";
        }
        // line 43
        echo "   </ul>
";
    }

    public function getTemplateName()
    {
        return "Inra2013urzBundle:Pagination:pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 40,  90 => 29,  80 => 26,  53 => 17,  49 => 10,  23 => 3,  243 => 81,  238 => 73,  234 => 68,  231 => 67,  214 => 61,  210 => 60,  203 => 55,  200 => 54,  195 => 8,  164 => 82,  145 => 69,  129 => 50,  124 => 49,  110 => 43,  107 => 42,  87 => 28,  52 => 12,  37 => 8,  56 => 18,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 62,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  149 => 51,  123 => 47,  120 => 43,  112 => 44,  106 => 36,  82 => 30,  65 => 16,  38 => 6,  155 => 58,  144 => 50,  141 => 54,  139 => 50,  135 => 47,  126 => 45,  109 => 37,  103 => 34,  101 => 34,  70 => 19,  67 => 19,  61 => 16,  47 => 14,  28 => 6,  105 => 24,  96 => 21,  93 => 20,  83 => 18,  76 => 22,  72 => 23,  68 => 22,  50 => 8,  94 => 39,  88 => 27,  79 => 23,  59 => 22,  43 => 6,  32 => 4,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 7,  186 => 76,  180 => 72,  172 => 67,  163 => 63,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 49,  121 => 45,  118 => 44,  114 => 42,  104 => 35,  100 => 33,  78 => 24,  75 => 23,  71 => 19,  63 => 20,  58 => 13,  34 => 5,  91 => 20,  84 => 31,  74 => 24,  66 => 21,  55 => 15,  41 => 10,  46 => 7,  26 => 2,  22 => 3,  27 => 4,  24 => 4,  29 => 2,  21 => 1,  44 => 13,  35 => 5,  31 => 4,  25 => 3,  19 => 2,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 81,  157 => 56,  153 => 74,  151 => 73,  143 => 67,  138 => 53,  136 => 50,  133 => 43,  130 => 47,  122 => 44,  119 => 36,  116 => 46,  111 => 32,  108 => 31,  102 => 30,  98 => 22,  95 => 31,  92 => 30,  89 => 19,  85 => 24,  81 => 40,  73 => 19,  64 => 17,  60 => 19,  57 => 14,  54 => 12,  51 => 9,  48 => 11,  45 => 9,  42 => 12,  39 => 11,  36 => 6,  33 => 8,  30 => 7,);
    }
}
