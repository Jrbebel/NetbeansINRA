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
        echo "Bienvenue Chercheur";
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
        <li><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_VoirAnalyseChercheur"), "html", null, true);
        echo "\"><i class=\"icon-eye-open\"></i> Voir un protocole </a></li>
        <li><a  href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_CreateExcel"), "html", null, true);
        echo "\" ><i class=\" icon-download-alt\"></i> Exporter fichier protocole </a></li>
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
";
        // line 19
        if (twig_test_empty((isset($context["response"]) ? $context["response"] : null))) {
            // line 20
            echo "<div class=\"alert alert-info\">
    <h4>VOUS AVEZ AUCUN PROTOCOLE EN COURS</h4>
</div>
";
        } else {
            // line 24
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
            // line 36
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
                // line 37
                echo "            <tr class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ValideChercheur"]) ? $context["ValideChercheur"] : null), "class"), $this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : null), "Validation")), "html", null, true);
                echo "\">
                <td>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                echo "</td>
                ";
                // line 39
                if (($this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : null), "Validation") == 2)) {
                    // line 40
                    echo "                <td><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_VoirAnalyseChercheur", array("NumProtocole" => $this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : null), "id"))), "html", null, true);
                    echo "\" >";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : null), "NomProtocole"), "html", null, true);
                    echo "</a></td>
               ";
                } else {
                    // line 42
                    echo "                    <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : null), "NomProtocole"), "html", null, true);
                    echo "</td>

                    ";
                }
                // line 45
                echo "                    <td>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : null), "DateValidation"), "d-m-Y"), "html", null, true);
                echo "</td>  
                    <td>";
                // line 46
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
            // line 50
            echo " 

            </tbody>
        </table>

";
        }
        // line 55
        echo " 


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
        return array (  128 => 42,  527 => 199,  491 => 178,  476 => 166,  466 => 159,  455 => 155,  438 => 154,  405 => 141,  401 => 140,  397 => 139,  392 => 137,  389 => 136,  372 => 135,  355 => 120,  323 => 111,  298 => 107,  286 => 98,  277 => 91,  213 => 79,  179 => 63,  175 => 62,  167 => 55,  142 => 50,  137 => 47,  117 => 25,  140 => 46,  501 => 179,  498 => 178,  488 => 172,  473 => 171,  461 => 157,  448 => 155,  426 => 144,  422 => 149,  407 => 148,  395 => 140,  382 => 132,  360 => 128,  357 => 127,  345 => 117,  328 => 113,  319 => 110,  313 => 110,  311 => 109,  307 => 108,  303 => 107,  299 => 106,  293 => 105,  283 => 103,  275 => 100,  258 => 90,  236 => 80,  207 => 67,  192 => 63,  182 => 60,  176 => 59,  173 => 58,  86 => 20,  69 => 14,  40 => 4,  698 => 319,  677 => 289,  673 => 288,  668 => 287,  660 => 283,  655 => 282,  652 => 281,  643 => 276,  631 => 266,  626 => 264,  623 => 263,  621 => 262,  608 => 252,  605 => 251,  598 => 246,  586 => 236,  581 => 234,  578 => 233,  576 => 232,  563 => 222,  560 => 221,  551 => 214,  545 => 210,  528 => 206,  519 => 200,  511 => 196,  507 => 194,  502 => 191,  492 => 173,  487 => 184,  485 => 183,  478 => 178,  460 => 174,  450 => 156,  444 => 169,  440 => 168,  433 => 164,  429 => 163,  409 => 142,  396 => 150,  387 => 148,  384 => 133,  380 => 146,  370 => 139,  365 => 137,  359 => 134,  356 => 133,  350 => 129,  337 => 118,  333 => 115,  329 => 115,  324 => 112,  315 => 108,  310 => 106,  308 => 105,  278 => 101,  266 => 92,  259 => 90,  253 => 87,  247 => 84,  241 => 89,  221 => 76,  206 => 64,  199 => 63,  193 => 61,  190 => 62,  174 => 50,  169 => 48,  161 => 58,  158 => 57,  156 => 41,  146 => 51,  170 => 76,  152 => 68,  148 => 67,  113 => 51,  99 => 42,  77 => 16,  115 => 40,  90 => 29,  80 => 26,  53 => 23,  49 => 9,  23 => 3,  243 => 81,  238 => 81,  234 => 68,  231 => 67,  214 => 61,  210 => 60,  203 => 55,  200 => 54,  195 => 8,  164 => 59,  145 => 51,  129 => 35,  124 => 49,  110 => 43,  107 => 47,  87 => 28,  52 => 12,  37 => 3,  56 => 11,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 104,  282 => 90,  276 => 86,  273 => 94,  270 => 84,  268 => 93,  263 => 91,  249 => 79,  245 => 77,  230 => 80,  222 => 73,  220 => 62,  215 => 72,  211 => 69,  204 => 66,  198 => 65,  185 => 61,  183 => 60,  177 => 58,  160 => 66,  149 => 37,  123 => 48,  120 => 40,  112 => 44,  106 => 36,  82 => 36,  65 => 13,  38 => 6,  155 => 54,  144 => 65,  141 => 54,  139 => 50,  135 => 45,  126 => 49,  109 => 37,  103 => 30,  101 => 24,  70 => 19,  67 => 18,  61 => 12,  47 => 9,  28 => 6,  105 => 24,  96 => 22,  93 => 20,  83 => 18,  76 => 22,  72 => 20,  68 => 22,  50 => 8,  94 => 26,  88 => 24,  79 => 17,  59 => 12,  43 => 8,  32 => 2,  225 => 71,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 78,  194 => 62,  191 => 78,  189 => 7,  186 => 61,  180 => 72,  172 => 67,  163 => 63,  159 => 50,  154 => 59,  147 => 55,  132 => 52,  127 => 49,  121 => 33,  118 => 39,  114 => 38,  104 => 28,  100 => 28,  78 => 24,  75 => 23,  71 => 19,  63 => 19,  58 => 12,  34 => 5,  91 => 20,  84 => 31,  74 => 24,  66 => 21,  55 => 11,  41 => 7,  46 => 7,  26 => 11,  22 => 3,  27 => 4,  24 => 4,  29 => 3,  21 => 1,  44 => 6,  35 => 5,  31 => 2,  25 => 1,  19 => 2,  184 => 70,  178 => 71,  171 => 61,  165 => 57,  162 => 81,  157 => 55,  153 => 74,  151 => 52,  143 => 50,  138 => 53,  136 => 53,  133 => 43,  130 => 47,  122 => 31,  119 => 55,  116 => 46,  111 => 32,  108 => 33,  102 => 29,  98 => 22,  95 => 31,  92 => 36,  89 => 20,  85 => 23,  81 => 27,  73 => 25,  64 => 17,  60 => 17,  57 => 11,  54 => 10,  51 => 10,  48 => 7,  45 => 6,  42 => 12,  39 => 6,  36 => 5,  33 => 8,  30 => 3,);
    }
}
