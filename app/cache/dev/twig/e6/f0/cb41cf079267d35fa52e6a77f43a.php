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
        if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > 1)) {
            // line 4
            echo "
     
\t";
            // line 6
            if ((array_key_exists("first", $context) && ((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")) != (isset($context["first"]) ? $context["first"] : $this->getContext($context, "first"))))) {
                // line 7
                echo "     
        \t<li><a href=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array("page" => (isset($context["first"]) ? $context["first"] : $this->getContext($context, "first"))))), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array("page" => (isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous"))))), "html", null, true);
                echo "\">&lt;</a></li>
     
    ";
            }
            // line 17
            echo "
    ";
            // line 18
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) ? $context["pagesInRange"] : $this->getContext($context, "pagesInRange")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 19
                echo "        ";
                if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) != (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")))) {
                    // line 20
                    echo "          
            \t<li><a href=\"";
                    // line 21
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page"))))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                    echo "</a></li>
        
        ";
                } else {
                    // line 24
                    echo "                <li class=\"active\"><a href=\"#\">";
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array("page" => (isset($context["next"]) ? $context["next"] : $this->getContext($context, "next"))))), "html", null, true);
                echo "\">&gt;</a></li>
     
    ";
            }
            // line 34
            echo "
    ";
            // line 35
            if ((array_key_exists("last", $context) && ((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")) != (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last"))))) {
                // line 36
                echo "    
        \t<li><a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array("page" => (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last"))))), "html", null, true);
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
        return array (  90 => 29,  87 => 28,  53 => 17,  49 => 10,  23 => 3,  210 => 72,  199 => 61,  193 => 60,  182 => 54,  179 => 53,  174 => 8,  168 => 7,  110 => 43,  56 => 18,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 80,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 80,  112 => 42,  82 => 30,  65 => 16,  38 => 6,  144 => 50,  141 => 66,  135 => 47,  126 => 45,  109 => 37,  103 => 34,  67 => 19,  61 => 16,  47 => 14,  28 => 6,  105 => 41,  93 => 34,  76 => 22,  72 => 14,  68 => 12,  94 => 39,  88 => 27,  79 => 23,  59 => 22,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 59,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 49,  121 => 45,  118 => 47,  114 => 45,  104 => 35,  100 => 33,  78 => 24,  75 => 23,  71 => 19,  58 => 13,  34 => 5,  91 => 20,  84 => 28,  26 => 2,  27 => 4,  24 => 4,  21 => 1,  44 => 13,  31 => 4,  25 => 3,  19 => 2,  70 => 19,  63 => 20,  46 => 7,  22 => 3,  163 => 63,  155 => 58,  152 => 49,  149 => 72,  145 => 46,  139 => 53,  131 => 42,  123 => 47,  120 => 43,  115 => 40,  106 => 36,  101 => 34,  96 => 21,  83 => 18,  80 => 26,  74 => 24,  66 => 21,  55 => 13,  52 => 15,  50 => 8,  43 => 10,  41 => 10,  37 => 8,  35 => 5,  32 => 7,  29 => 2,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 81,  157 => 56,  153 => 54,  151 => 73,  143 => 54,  138 => 51,  136 => 52,  133 => 43,  130 => 47,  122 => 48,  119 => 36,  116 => 35,  111 => 38,  108 => 42,  102 => 30,  98 => 22,  95 => 31,  92 => 30,  89 => 19,  85 => 31,  81 => 40,  73 => 19,  64 => 17,  60 => 19,  57 => 14,  54 => 12,  51 => 12,  48 => 11,  45 => 9,  42 => 12,  39 => 11,  36 => 6,  33 => 8,  30 => 7,);
    }
}