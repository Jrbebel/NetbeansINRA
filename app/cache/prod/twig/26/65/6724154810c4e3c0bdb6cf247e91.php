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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013urzBundle_Homepage"), "html", null, true);
        echo "><i class=\"icon-home icon-white\"></i> Home</a></li>
        <li><a  href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_CreateAnalyse"), "html", null, true);
        echo "\"  ><i class=\" icon-plus\"></i> Créer analyse </a></li>
        <li><a  ><i class=\"icon-pencil\"></i> Modifier analyse</a></li>
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
            echo "            <li><a  href=\"#\" ><i class=\" icon-plus\"></i> Créer type analyse</a></li>

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
            // line 42
            echo "
                <tr class=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Valide"]) ? $context["Valide"] : null), "class"), $this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : null), "Validation")), "html", null, true);
            echo "\">

                    <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013urzBunle_VoirAnalyse", array("numProtocole" => $this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : null), "id"))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : null), "NomProtocole"), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : null), "Responsable"), "Nom"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : null), "Responsable"), "Prenom"), "html", null, true);
            echo "</td>
                    <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : null), "DateValidation"), "d-m-Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Valide"]) ? $context["Valide"] : null), "info"), $this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : null), "Validation")), "html", null, true);
            echo "</td>
                ";
            // line 50
            if (twig_test_empty($this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : null), "Commentaire"))) {
                // line 51
                echo "                    <td><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/lettre_ferme.png"), "html", null, true);
                echo "\" height=25 width=30 alt=\"icone-message\" /></td>
                ";
            } else {
                // line 53
                echo "                        <td><a href=\"#myModal";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
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
            echo " 
 ";
            // line 64
            if ((!twig_test_empty($this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : null), "Commentaire")))) {
                // line 65
                echo "            <div class=\"modal hide\" id=\"myModal";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                echo "\"><!-- note the use of \"hide\" class -->
                <div class=\"modal-header\">
                    <button class=\"close\" data-dismiss=\"modal\">×</button>
                    <h3>Message</h3>
                </div>
                <div class=\"modal-body\">

                ";
                // line 72
                echo $this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : null), "Commentaire");
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
        return array (  256 => 86,  253 => 85,  224 => 72,  213 => 65,  192 => 63,  168 => 55,  137 => 47,  131 => 46,  62 => 13,  40 => 5,  579 => 228,  574 => 227,  567 => 225,  564 => 224,  555 => 219,  534 => 201,  531 => 200,  524 => 195,  503 => 177,  500 => 176,  490 => 167,  479 => 160,  477 => 159,  474 => 158,  457 => 154,  447 => 147,  431 => 144,  424 => 142,  420 => 140,  416 => 139,  413 => 138,  406 => 136,  400 => 133,  397 => 132,  389 => 129,  386 => 128,  384 => 127,  377 => 125,  373 => 124,  369 => 123,  365 => 121,  348 => 120,  338 => 112,  329 => 110,  326 => 109,  322 => 108,  311 => 100,  308 => 99,  300 => 93,  283 => 89,  272 => 85,  265 => 83,  258 => 81,  252 => 78,  241 => 74,  236 => 80,  229 => 70,  223 => 67,  218 => 65,  197 => 62,  188 => 55,  179 => 54,  175 => 53,  140 => 42,  134 => 39,  97 => 31,  166 => 72,  150 => 67,  146 => 65,  115 => 51,  90 => 29,  80 => 30,  53 => 17,  49 => 9,  23 => 3,  243 => 81,  238 => 73,  234 => 68,  231 => 67,  214 => 63,  210 => 60,  203 => 55,  200 => 54,  195 => 8,  164 => 82,  145 => 69,  129 => 61,  124 => 49,  110 => 43,  107 => 42,  87 => 37,  52 => 12,  37 => 4,  56 => 18,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 87,  273 => 85,  270 => 84,  268 => 84,  263 => 80,  249 => 77,  245 => 77,  230 => 75,  222 => 73,  220 => 62,  215 => 70,  211 => 64,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 44,  149 => 51,  123 => 47,  120 => 43,  112 => 44,  106 => 36,  82 => 30,  65 => 16,  38 => 4,  155 => 58,  144 => 50,  141 => 54,  139 => 50,  135 => 47,  126 => 45,  109 => 47,  103 => 43,  101 => 42,  70 => 19,  67 => 19,  61 => 16,  47 => 14,  28 => 6,  105 => 24,  96 => 21,  93 => 20,  83 => 18,  76 => 33,  72 => 32,  68 => 15,  50 => 9,  94 => 39,  88 => 27,  79 => 23,  59 => 22,  43 => 6,  32 => 2,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 7,  186 => 59,  180 => 72,  172 => 76,  163 => 63,  159 => 53,  154 => 68,  147 => 49,  132 => 48,  127 => 45,  121 => 55,  118 => 44,  114 => 42,  104 => 35,  100 => 32,  78 => 24,  75 => 23,  71 => 24,  63 => 20,  58 => 12,  34 => 5,  91 => 38,  84 => 31,  74 => 26,  66 => 14,  55 => 15,  41 => 5,  46 => 7,  26 => 2,  22 => 3,  27 => 4,  24 => 4,  29 => 2,  21 => 1,  44 => 13,  35 => 4,  31 => 3,  25 => 3,  19 => 2,  184 => 70,  178 => 71,  171 => 62,  165 => 46,  162 => 45,  157 => 43,  153 => 51,  151 => 50,  143 => 48,  138 => 63,  136 => 50,  133 => 43,  130 => 37,  122 => 43,  119 => 42,  116 => 36,  111 => 32,  108 => 34,  102 => 41,  98 => 22,  95 => 39,  92 => 30,  89 => 19,  85 => 24,  81 => 24,  73 => 18,  64 => 23,  60 => 19,  57 => 13,  54 => 11,  51 => 13,  48 => 11,  45 => 8,  42 => 12,  39 => 11,  36 => 6,  33 => 8,  30 => 7,);
    }
}
