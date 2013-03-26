<?php

/* Inra2013urzBundle:Default:IndexUser.html.twig */
class __TwigTemplate_26656724154810c4e3c0bdb6cf247e91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo "Bienvenue";
    }

    // line 4
    public function block_menu($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"well\" >

    <ul class=\"nav nav-list bs-docs-sidenav\"  >
        <li class=\"active\" ><a  href=";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013urzBundle_Redirectionagent"), "html", null, true);
        echo "><i class=\"icon-home icon-white\"></i> Home</a></li>
        <li><a  href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_CreateAnalyse"), "html", null, true);
        echo "\"  ><i class=\" icon-plus\"></i> Créer analyse </a></li>
        <li><a  href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_UpdateAnalyse"), "html", null, true);
        echo "\" ><i class=\"icon-pencil\"></i> Modifier analyse</a></li>
        <li><a  href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_ImportResultat"), "html", null, true);
        echo "\"   ><i class=\" icon-folder-open\"></i> Importer Resultat </a></li>
        <li><a  href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_ImportListing"), "html", null, true);
        echo "\"><i class=\" icon-folder-open\"></i> Importer listing échantillon </a></li>
        <li><a  href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_CreateExcel"), "html", null, true);
        echo "\" ><i class=\" icon-download-alt\"></i> Exporter fichier excel </a></li>
";
        // line 14
        if ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE")) {
            // line 15
            echo "            <li><a  href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_CreateAnalyseBdd"), "html", null, true);
            echo "\" ><i class=\" icon-plus\"></i> Créer type analyse</a></li>

";
        }
        // line 18
        echo "        </ul>

    </div>

";
    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        echo " 

    <table class=\"table table-striped\" >

        <thead>
            <tr>
                <th>Id</th>
                <th>Protocole</th>
                <th>Responsable</th>
                <th>Valider le</th>
                <th>Status</th>
                <th>Message</th>
            </tr>

        </thead>

        <tbody>
 ";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["response"]) ? $context["response"] : $this->getContext($context, "response")));
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
            // line 42
            echo "
                <tr class=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Valide"]) ? $context["Valide"] : $this->getContext($context, "Valide")), "class"), $this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : $this->getContext($context, "Encours")), "Validation")), "html", null, true);
            echo "\">

                    <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013urzBunle_VoirAnalyse", array("numProtocole" => $this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : $this->getContext($context, "Encours")), "id"))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : $this->getContext($context, "Encours")), "NomProtocole"), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : $this->getContext($context, "Encours")), "Responsable"), "Nom"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : $this->getContext($context, "Encours")), "Responsable"), "Prenom"), "html", null, true);
            echo "</td>
                    <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : $this->getContext($context, "Encours")), "DateValidation"), "d-m-Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Valide"]) ? $context["Valide"] : $this->getContext($context, "Valide")), "info"), $this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : $this->getContext($context, "Encours")), "Validation")), "html", null, true);
            echo "</td>
                ";
            // line 50
            if (twig_test_empty($this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : $this->getContext($context, "Encours")), "Commentaire"))) {
                // line 51
                echo "                    <td><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/lettre_ferme.png"), "html", null, true);
                echo "\" height=25 width=30 alt=\"icone-message\" /></td>
                ";
            } else {
                // line 53
                echo "                        <td><a href=\"#myModal";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                echo "\" role=\"button\"  data-toggle=\"modal\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/lettre_ouverte.png"), "html", null, true);
                echo "\" height=25 width=30 alt=\"icone-message\" /></a></td>

                 ";
            }
            // line 55
            echo "       

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
        // line 59
        echo "  
                </tbody>

            </table>
 ";
        // line 63
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["response"]) ? $context["response"] : $this->getContext($context, "response")));
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
            echo " 
 ";
            // line 64
            if ((!twig_test_empty($this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : $this->getContext($context, "Encours")), "Commentaire")))) {
                // line 65
                echo "            <div class=\"modal hide\" id=\"myModal";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                echo "\"><!-- note the use of \"hide\" class -->
                <div class=\"modal-header\">
                    <button class=\"close\" data-dismiss=\"modal\">×</button>
                    <h3>Message</h3>
                </div>
                <div class=\"modal-body\">

                ";
                // line 72
                echo $this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : $this->getContext($context, "Encours")), "Commentaire");
                echo "

                </div>
                <div class=\"modal-footer\">
                    <a href=\"#\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</a><!-- note the use of \"data-dismiss\" -->

                </div>
            </div>​
   ";
            }
            // line 80
            echo "          
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
    }

    // line 85
    public function block_javascripts($context, array $blocks = array())
    {
        // line 86
        echo "            <script>

                \$('#myModal').on('click', function() {

                    \$('#myModal').modal('loading');
                });

                </script>
";
    }

    public function getTemplateName()
    {
        return "Inra2013urzBundle:Default:IndexUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 86,  258 => 85,  241 => 80,  229 => 72,  218 => 65,  197 => 63,  173 => 55,  156 => 50,  142 => 47,  86 => 24,  69 => 14,  40 => 5,  732 => 297,  727 => 294,  724 => 292,  722 => 291,  703 => 275,  699 => 274,  694 => 273,  686 => 269,  681 => 268,  678 => 267,  669 => 262,  657 => 252,  652 => 250,  649 => 249,  647 => 248,  634 => 238,  631 => 237,  624 => 232,  612 => 222,  607 => 220,  604 => 219,  602 => 218,  589 => 208,  586 => 207,  574 => 196,  564 => 191,  562 => 190,  559 => 189,  542 => 185,  536 => 182,  531 => 179,  525 => 175,  509 => 172,  502 => 170,  498 => 168,  494 => 167,  491 => 166,  484 => 164,  480 => 162,  473 => 160,  461 => 158,  459 => 157,  456 => 156,  448 => 153,  445 => 152,  443 => 151,  436 => 149,  432 => 148,  428 => 147,  423 => 144,  406 => 143,  396 => 135,  387 => 133,  384 => 132,  380 => 131,  369 => 123,  365 => 122,  362 => 121,  357 => 118,  351 => 114,  346 => 112,  329 => 108,  322 => 106,  318 => 104,  314 => 103,  311 => 102,  304 => 100,  299 => 97,  280 => 93,  278 => 92,  275 => 91,  267 => 88,  264 => 87,  262 => 86,  255 => 84,  244 => 79,  240 => 77,  223 => 76,  190 => 59,  182 => 56,  175 => 52,  158 => 51,  148 => 48,  134 => 45,  166 => 72,  150 => 67,  146 => 65,  90 => 34,  53 => 10,  49 => 9,  23 => 3,  243 => 81,  238 => 73,  234 => 68,  231 => 67,  214 => 69,  210 => 60,  203 => 55,  200 => 54,  195 => 8,  164 => 53,  129 => 61,  124 => 42,  110 => 43,  107 => 41,  87 => 37,  56 => 18,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 81,  245 => 77,  230 => 75,  222 => 73,  220 => 62,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 57,  183 => 60,  177 => 58,  160 => 57,  112 => 44,  82 => 30,  65 => 13,  38 => 4,  144 => 50,  141 => 54,  135 => 47,  126 => 43,  109 => 47,  103 => 43,  67 => 20,  61 => 12,  47 => 14,  28 => 6,  105 => 24,  93 => 36,  76 => 24,  72 => 32,  68 => 22,  94 => 39,  88 => 27,  79 => 25,  59 => 22,  225 => 96,  216 => 64,  212 => 88,  205 => 68,  201 => 67,  196 => 80,  194 => 62,  191 => 59,  189 => 7,  186 => 76,  180 => 55,  172 => 76,  159 => 61,  154 => 68,  147 => 55,  132 => 45,  127 => 43,  121 => 55,  118 => 41,  114 => 42,  104 => 35,  100 => 33,  78 => 18,  75 => 23,  71 => 15,  58 => 14,  34 => 5,  91 => 38,  84 => 31,  26 => 2,  27 => 4,  24 => 4,  21 => 1,  44 => 13,  31 => 3,  25 => 3,  19 => 2,  70 => 19,  63 => 20,  46 => 7,  22 => 3,  163 => 63,  155 => 58,  152 => 49,  149 => 51,  145 => 69,  139 => 50,  131 => 42,  123 => 47,  120 => 43,  115 => 40,  106 => 36,  101 => 42,  96 => 21,  83 => 18,  80 => 26,  74 => 23,  66 => 21,  55 => 15,  52 => 12,  50 => 9,  43 => 6,  41 => 5,  37 => 4,  35 => 4,  32 => 2,  29 => 2,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 81,  157 => 56,  153 => 74,  151 => 73,  143 => 67,  138 => 63,  136 => 46,  133 => 43,  130 => 47,  122 => 44,  119 => 36,  116 => 46,  111 => 38,  108 => 37,  102 => 30,  98 => 39,  95 => 39,  92 => 30,  89 => 19,  85 => 29,  81 => 36,  73 => 19,  64 => 23,  60 => 19,  57 => 11,  54 => 12,  51 => 13,  48 => 11,  45 => 8,  42 => 12,  39 => 11,  36 => 6,  33 => 8,  30 => 7,);
    }
}
