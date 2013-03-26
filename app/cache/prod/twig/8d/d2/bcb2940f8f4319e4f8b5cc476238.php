<?php

/* Inra2013urzBundle:Default:IndexChercheur.html.twig */
class __TwigTemplate_8dd2bcb2940f8f4319e4f8b5cc476238 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "Bienvenue Administrateur";
    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"well\" >
    <ul class=\"nav nav-list\">
        <li class=\"active\"><a href=";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013urzBundle_Redirectionagent"), "html", null, true);
        echo "><i class=\"icon-home icon-white\"></i> Home</a></li>
        <li><a href=";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_CreateProtocole"), "html", null, true);
        echo "><i class=\"icon-file\"></i> Crée un protocole</a></li>
        <li><a href=><i class=\"icon-eye-open\"></i> Voir le protocole </a></li>
        <li><a href=\"#\"><i class=\"icon-pencil\"></i> </a></li>
        <li><a href=\"#\"><i class=\"i\"></i></a></li>
    </ul>
</div>
";
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        // line 18
        echo "


<table class=\"table\">
    <thead>
        <tr>
            <th>Id</th>
            <th>Protocole</th>

            <th>Valider le</th>
            <th>Status</th>

        </tr>
    </thead>
    <tbody>
        ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["response"]) ? $context["response"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["Encours"]) {
            // line 34
            echo "  <tr class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ValideChercheur"]) ? $context["ValideChercheur"] : null), "class"), $this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : null), "Validation")), "html", null, true);
            echo "\">
    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo "</td>
    <td><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013urzBunle_VoirAnalyse", array("numProtocole" => $this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : null), "id"))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : null), "NomProtocole"), "html", null, true);
            echo "</a></td>
     <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : null), "DateValidation"), "d-m-Y"), "html", null, true);
            echo "</td>  
     <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ValideChercheur"]) ? $context["ValideChercheur"] : null), "info"), $this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : null), "Validation")), "html", null, true);
            echo "</td>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Encours'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 42
        echo " 
    </tbody>
</table>



";
    }

    public function getTemplateName()
    {
        return "Inra2013urzBundle:Default:IndexChercheur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 170,  131 => 61,  128 => 60,  125 => 59,  261 => 86,  258 => 85,  241 => 80,  229 => 72,  218 => 65,  197 => 63,  173 => 55,  156 => 50,  142 => 64,  86 => 24,  69 => 14,  40 => 4,  732 => 297,  727 => 294,  724 => 292,  722 => 291,  703 => 275,  699 => 274,  694 => 273,  686 => 269,  681 => 268,  678 => 267,  669 => 262,  657 => 252,  652 => 250,  649 => 249,  647 => 248,  634 => 238,  631 => 237,  624 => 232,  612 => 222,  607 => 220,  604 => 219,  602 => 218,  589 => 208,  586 => 207,  574 => 196,  564 => 191,  562 => 190,  559 => 189,  542 => 185,  536 => 182,  531 => 179,  525 => 175,  509 => 172,  502 => 170,  498 => 168,  494 => 167,  491 => 166,  484 => 164,  480 => 162,  473 => 160,  461 => 158,  459 => 157,  456 => 156,  448 => 153,  445 => 152,  443 => 151,  436 => 149,  432 => 148,  428 => 147,  423 => 144,  406 => 143,  396 => 135,  387 => 133,  384 => 132,  380 => 131,  369 => 123,  365 => 122,  362 => 121,  357 => 118,  351 => 114,  346 => 112,  329 => 108,  322 => 106,  318 => 104,  314 => 103,  311 => 102,  304 => 100,  299 => 97,  280 => 93,  278 => 92,  275 => 91,  267 => 88,  264 => 87,  262 => 86,  255 => 84,  244 => 79,  240 => 77,  223 => 76,  190 => 59,  182 => 56,  175 => 52,  158 => 51,  152 => 49,  148 => 48,  134 => 62,  166 => 72,  150 => 67,  146 => 65,  115 => 40,  90 => 34,  80 => 27,  53 => 10,  49 => 9,  23 => 3,  243 => 81,  238 => 73,  234 => 68,  231 => 67,  214 => 69,  210 => 60,  203 => 55,  200 => 54,  195 => 8,  164 => 53,  145 => 69,  129 => 61,  124 => 42,  110 => 37,  107 => 41,  87 => 37,  52 => 12,  37 => 3,  56 => 11,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 81,  245 => 77,  230 => 75,  222 => 73,  220 => 62,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 57,  183 => 60,  177 => 58,  160 => 57,  149 => 51,  123 => 47,  120 => 43,  112 => 53,  106 => 36,  82 => 30,  65 => 13,  38 => 4,  155 => 58,  144 => 50,  141 => 54,  139 => 50,  135 => 47,  126 => 43,  109 => 52,  103 => 43,  101 => 42,  70 => 19,  67 => 17,  61 => 18,  47 => 9,  28 => 6,  105 => 24,  96 => 21,  93 => 36,  83 => 18,  76 => 24,  72 => 32,  68 => 22,  50 => 9,  94 => 39,  88 => 27,  79 => 25,  59 => 12,  43 => 8,  32 => 2,  225 => 96,  216 => 64,  212 => 88,  205 => 68,  201 => 67,  196 => 80,  194 => 62,  191 => 59,  189 => 7,  186 => 76,  180 => 55,  172 => 76,  163 => 63,  159 => 61,  154 => 68,  147 => 55,  132 => 45,  127 => 43,  121 => 55,  118 => 54,  114 => 38,  104 => 36,  100 => 35,  78 => 33,  75 => 23,  71 => 15,  63 => 20,  58 => 17,  34 => 5,  91 => 38,  84 => 31,  74 => 22,  66 => 21,  55 => 15,  41 => 5,  46 => 7,  26 => 2,  22 => 3,  27 => 4,  24 => 4,  29 => 2,  21 => 1,  44 => 13,  35 => 4,  31 => 2,  25 => 3,  19 => 2,  184 => 70,  178 => 95,  171 => 62,  165 => 58,  162 => 81,  157 => 56,  153 => 74,  151 => 73,  143 => 67,  138 => 63,  136 => 46,  133 => 42,  130 => 47,  122 => 44,  119 => 36,  116 => 46,  111 => 32,  108 => 31,  102 => 30,  98 => 39,  95 => 34,  92 => 30,  89 => 19,  85 => 29,  81 => 36,  73 => 19,  64 => 23,  60 => 19,  57 => 11,  54 => 12,  51 => 13,  48 => 7,  45 => 6,  42 => 12,  39 => 6,  36 => 5,  33 => 8,  30 => 3,);
    }
}
