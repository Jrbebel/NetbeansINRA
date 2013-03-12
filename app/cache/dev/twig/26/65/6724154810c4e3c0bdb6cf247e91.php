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

    <ul class=\"nav nav-pills nav-stacked\" >
        <li class=\"active\" ><a  href=";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013urzBundle_Homepage"), "html", null, true);
        echo "><i class=\"icon-home icon-white\"></i> Home</a></li>
        <li><a  href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_CreateAnalyse"), "html", null, true);
        echo "\"  ><i class=\" icon-plus\"></i> Créer analyse </a></li>
        <li><a  href=\"#\"><i class=\"icon-pencil\"></i> Modifier analyse</a></li>
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
        echo "\" ><i class=\" icon-download-alt\"></i> Exporter fichier excel protocole </a></li>
";
        // line 14
        if ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE")) {
            // line 15
            echo "            <li><a  href=\"#\" ><i class=\" icon-download-alt\"></i> Créer Analyse</a></li>

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
        return array (  256 => 86,  253 => 85,  236 => 80,  224 => 72,  213 => 65,  168 => 55,  137 => 47,  62 => 13,  40 => 5,  535 => 197,  530 => 196,  523 => 194,  520 => 193,  512 => 189,  490 => 171,  480 => 162,  469 => 155,  467 => 154,  464 => 153,  447 => 149,  437 => 142,  421 => 139,  414 => 137,  410 => 135,  406 => 134,  403 => 133,  396 => 131,  390 => 128,  387 => 127,  379 => 124,  376 => 123,  374 => 122,  367 => 120,  363 => 119,  359 => 118,  355 => 116,  338 => 115,  329 => 108,  320 => 107,  316 => 106,  305 => 98,  302 => 97,  294 => 91,  277 => 87,  266 => 83,  262 => 82,  259 => 81,  252 => 79,  246 => 76,  243 => 75,  232 => 71,  223 => 68,  208 => 61,  182 => 53,  173 => 52,  169 => 51,  156 => 43,  134 => 40,  128 => 37,  166 => 72,  150 => 67,  146 => 65,  90 => 29,  53 => 11,  49 => 9,  23 => 3,  240 => 81,  235 => 72,  231 => 68,  228 => 67,  217 => 65,  207 => 60,  200 => 55,  197 => 54,  192 => 63,  164 => 82,  129 => 61,  124 => 35,  110 => 34,  107 => 42,  87 => 37,  56 => 18,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 85,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 70,  222 => 73,  220 => 72,  215 => 70,  211 => 64,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  112 => 44,  82 => 30,  65 => 22,  38 => 4,  144 => 50,  141 => 54,  135 => 47,  126 => 45,  109 => 47,  103 => 43,  67 => 19,  61 => 16,  47 => 8,  28 => 6,  105 => 24,  93 => 20,  76 => 33,  72 => 32,  68 => 15,  94 => 30,  88 => 27,  79 => 23,  59 => 22,  225 => 96,  216 => 90,  212 => 63,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 60,  189 => 77,  186 => 59,  180 => 72,  172 => 76,  159 => 53,  154 => 42,  147 => 49,  132 => 48,  127 => 45,  121 => 55,  118 => 44,  114 => 42,  104 => 35,  100 => 33,  78 => 24,  75 => 23,  71 => 19,  58 => 12,  34 => 5,  91 => 29,  84 => 31,  26 => 2,  27 => 4,  24 => 4,  21 => 1,  44 => 13,  31 => 3,  25 => 3,  19 => 2,  70 => 19,  63 => 20,  46 => 7,  22 => 3,  163 => 63,  155 => 58,  152 => 49,  149 => 51,  145 => 69,  139 => 50,  131 => 46,  123 => 47,  120 => 43,  115 => 51,  106 => 36,  101 => 42,  96 => 21,  83 => 18,  80 => 26,  74 => 28,  66 => 14,  55 => 15,  52 => 12,  50 => 8,  43 => 6,  41 => 5,  37 => 4,  35 => 4,  32 => 2,  29 => 2,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 81,  157 => 56,  153 => 51,  151 => 50,  143 => 48,  138 => 63,  136 => 50,  133 => 43,  130 => 47,  122 => 43,  119 => 42,  116 => 46,  111 => 38,  108 => 37,  102 => 41,  98 => 22,  95 => 39,  92 => 30,  89 => 19,  85 => 24,  81 => 24,  73 => 18,  64 => 23,  60 => 19,  57 => 18,  54 => 11,  51 => 13,  48 => 11,  45 => 8,  42 => 12,  39 => 11,  36 => 6,  33 => 8,  30 => 7,);
    }
}
