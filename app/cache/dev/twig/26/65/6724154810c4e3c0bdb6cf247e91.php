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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_CudAnalyse"), "html", null, true);
        echo "\" ><i class=\"icon-pencil\"></i> Modifier analyse</a></li>
        <li><a  href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_VoirAnalyse"), "html", null, true);
        echo "\" ><i class=\"icon-eye-open\"></i> Voir analyse</a></li>
        <li><a  href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_ImportResultat"), "html", null, true);
        echo "\"   ><i class=\" icon-folder-open\"></i> Importer Resultat </a></li>
        <li><a  href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_ImportListing"), "html", null, true);
        echo "\"><i class=\" icon-folder-open\"></i> Importer listing échantillon </a></li>
        <li><a  href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_CreateExcel", array("Typage" => "1")), "html", null, true);
        echo "\" ><i class=\" icon-download-alt\"></i> Exporter feuille protocole </a></li>
        <li><a  href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_CreateExcel"), "html", null, true);
        echo "\" ><i class=\" icon-download-alt\"></i> Exporter resultat protocole </a></li>
";
        // line 16
        if ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE")) {
            // line 17
            echo "            <li><a  href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_CreateAnalyseBdd"), "html", null, true);
            echo "\" ><i class=\" icon-plus\"></i> Créer type analyse</a></li>

";
        }
        // line 20
        echo "        </ul>

    </div>

";
    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        echo " 

";
        // line 28
        if (twig_test_empty((isset($context["response"]) ? $context["response"] : $this->getContext($context, "response")))) {
            // line 29
            echo "    <div class=\"alert alert-info\">
        <h4>AUCUN PROTOCOLE EN COURS</h4>
    </div>
";
        } else {
            // line 33
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
            // line 49
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
                // line 50
                echo "
                <tr class=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Valide"]) ? $context["Valide"] : $this->getContext($context, "Valide")), "class"), $this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : $this->getContext($context, "Encours")), "Validation")), "html", null, true);
                echo "\">

                    <td>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                echo "</td>
                    ";
                // line 54
                if ((($this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : $this->getContext($context, "Encours")), "Validation") == 1) || ($this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : $this->getContext($context, "Encours")), "Validation") == 3))) {
                    // line 55
                    echo "                    <td><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_VoirAnalyse", array("NumProtocole" => $this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : $this->getContext($context, "Encours")), "id"))), "html", null, true);
                    echo "\" >";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : $this->getContext($context, "Encours")), "NomProtocole"), "html", null, true);
                    echo "</a></td>
                    ";
                } else {
                    // line 57
                    echo "                        <td><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_CudAnalyse", array("numProtocole" => $this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : $this->getContext($context, "Encours")), "id"))), "html", null, true);
                    echo "\" >";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : $this->getContext($context, "Encours")), "NomProtocole"), "html", null, true);
                    echo "</a></td>
                    ";
                }
                // line 58
                echo "  
                            <td>";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : $this->getContext($context, "Encours")), "Responsable"), "Nom"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : $this->getContext($context, "Encours")), "Responsable"), "Prenom"), "html", null, true);
                echo "</td>
                            <td>";
                // line 60
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : $this->getContext($context, "Encours")), "DateValidation"), "d-m-Y"), "html", null, true);
                echo "</td>
                            <td>";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Valide"]) ? $context["Valide"] : $this->getContext($context, "Valide")), "info"), $this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : $this->getContext($context, "Encours")), "Validation")), "html", null, true);
                echo "</td>
                ";
                // line 62
                if (twig_test_empty($this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : $this->getContext($context, "Encours")), "Commentaire"))) {
                    // line 63
                    echo "                            <td><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/lettre_ferme.png"), "html", null, true);
                    echo "\" height=25 width=30 alt=\"icone-message\" /></td>
                ";
                } else {
                    // line 65
                    echo "                                <td><a href=\"#myModal";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                    echo "\" role=\"button\"  data-toggle=\"modal\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/lettre_ouverte.png"), "html", null, true);
                    echo "\" height=25 width=30 alt=\"icone-message\" /></a></td>

                 ";
                }
                // line 67
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
            // line 71
            echo "  




                        </tbody>

                    </table>

";
            // line 80
            if ((!twig_test_empty((isset($context["responseFini"]) ? $context["responseFini"] : $this->getContext($context, "responseFini"))))) {
                // line 81
                echo "
                    <table class=\"table table-striped\" >

                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Protocole</th>
                                <th>Responsable</th>
                                <th>Valider le</th>
                                <th>Valider resp</th>
                                <th>Status</th>
                                <th>Message</th>
                            </tr>

                        </thead>

                        <tbody>

      ";
                // line 99
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["responseFini"]) ? $context["responseFini"] : $this->getContext($context, "responseFini")));
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
                    // line 100
                    echo "
                            <tr class=\"";
                    // line 101
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Valide"]) ? $context["Valide"] : $this->getContext($context, "Valide")), "class"), $this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : $this->getContext($context, "Encours")), "Validation")), "html", null, true);
                    echo "\">

                                <td>";
                    // line 103
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                    echo "</td>
                                <td><a href=\"";
                    // line 104
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_CudAnalyse", array("NumProtocole" => $this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : $this->getContext($context, "Encours")), "id"))), "html", null, true);
                    echo "\" >";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : $this->getContext($context, "Encours")), "NomProtocole"), "html", null, true);
                    echo "</a></td>
                                <td>";
                    // line 105
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : $this->getContext($context, "Encours")), "Responsable"), "Nom"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : $this->getContext($context, "Encours")), "Responsable"), "Prenom"), "html", null, true);
                    echo "</td>
                                <td>";
                    // line 106
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : $this->getContext($context, "Encours")), "DateValidation"), "d-m-Y"), "html", null, true);
                    echo "</td>
                                <td>";
                    // line 107
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : $this->getContext($context, "Encours")), "DateValidationAnalyse"), "d-m-Y"), "html", null, true);
                    echo "</td>
                                <td>";
                    // line 108
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Valide"]) ? $context["Valide"] : $this->getContext($context, "Valide")), "info"), $this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : $this->getContext($context, "Encours")), "Validation")), "html", null, true);
                    echo "</td>
                ";
                    // line 109
                    if (twig_test_empty($this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : $this->getContext($context, "Encours")), "Commentaire"))) {
                        // line 110
                        echo "                                <td><img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/lettre_ferme.png"), "html", null, true);
                        echo "\" height=25 width=30 alt=\"icone-message\" /></td>
                ";
                    } else {
                        // line 112
                        echo "                                    <td><a href=\"#myModalB";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                        echo "\" role=\"button\"  data-toggle=\"modal\"><img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/lettre_ouverte.png"), "html", null, true);
                        echo "\" height=25 width=30 alt=\"icone-message\" /></a></td>

                 ";
                    }
                    // line 114
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
                // line 117
                echo "      



                            </tbody>


                        </table>

";
            }
            // line 127
            echo "
 ";
            // line 128
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
                // line 132
                if ((!twig_test_empty($this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : $this->getContext($context, "Encours")), "Commentaire")))) {
                    // line 133
                    echo "                        <div class=\"modal hide\" id=\"myModal";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                    echo "\"><!-- note the use of \"hide\" class -->
                            <div class=\"modal-header\">
                                <button class=\"close\" data-dismiss=\"modal\">×</button>
                                <h3>Message</h3>
                            </div>
                            <div class=\"modal-body\">

                ";
                    // line 140
                    echo $this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : $this->getContext($context, "Encours")), "Commentaire");
                    echo "

                            </div>
                            <div class=\"modal-footer\">
                                <a href=\"#\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</a><!-- note the use of \"data-dismiss\" -->

                            </div>
                        </div>​
   ";
                }
                // line 148
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
            // line 149
            echo " 

                 ";
            // line 151
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["responseFini"]) ? $context["responseFini"] : $this->getContext($context, "responseFini")));
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
                // line 155
                if ((!twig_test_empty($this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : $this->getContext($context, "Encours")), "Commentaire")))) {
                    // line 156
                    echo "                        <div class=\"modal hide\" id=\"myModalB";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                    echo "\"><!-- note the use of \"hide\" class -->
                            <div class=\"modal-header\">
                                <button class=\"close\" data-dismiss=\"modal\">×</button>
                                <h3>Message</h3>
                            </div>
                            <div class=\"modal-body\">

                ";
                    // line 163
                    echo $this->getAttribute((isset($context["Encours"]) ? $context["Encours"] : $this->getContext($context, "Encours")), "Commentaire");
                    echo "

                            </div>
                            <div class=\"modal-footer\">
                                <a href=\"#\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</a><!-- note the use of \"data-dismiss\" -->

                            </div>
                        </div>​
   ";
                }
                // line 171
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
            // line 172
            echo " 
       ";
        }
        // line 173
        echo "         

";
    }

    // line 178
    public function block_javascripts($context, array $blocks = array())
    {
        // line 179
        echo "                        <script>

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
        return array (  501 => 179,  498 => 178,  488 => 172,  473 => 171,  461 => 163,  448 => 155,  426 => 151,  422 => 149,  407 => 148,  395 => 140,  382 => 132,  360 => 128,  357 => 127,  345 => 117,  328 => 114,  319 => 112,  313 => 110,  311 => 109,  307 => 108,  303 => 107,  299 => 106,  293 => 105,  283 => 103,  275 => 100,  258 => 99,  236 => 80,  207 => 67,  192 => 63,  182 => 60,  176 => 59,  173 => 58,  86 => 20,  69 => 14,  40 => 5,  698 => 319,  677 => 289,  673 => 288,  668 => 287,  660 => 283,  655 => 282,  652 => 281,  643 => 276,  631 => 266,  626 => 264,  623 => 263,  621 => 262,  608 => 252,  605 => 251,  598 => 246,  586 => 236,  581 => 234,  578 => 233,  576 => 232,  563 => 222,  560 => 221,  551 => 214,  545 => 210,  528 => 206,  519 => 200,  511 => 196,  507 => 194,  502 => 191,  492 => 173,  487 => 184,  485 => 183,  478 => 178,  460 => 174,  450 => 156,  444 => 169,  440 => 168,  433 => 164,  429 => 163,  409 => 161,  396 => 150,  387 => 148,  384 => 133,  380 => 146,  370 => 139,  365 => 137,  359 => 134,  356 => 133,  350 => 129,  337 => 118,  333 => 117,  329 => 115,  324 => 112,  315 => 107,  310 => 106,  308 => 105,  278 => 101,  266 => 92,  259 => 90,  253 => 87,  247 => 84,  221 => 76,  206 => 64,  199 => 63,  193 => 61,  190 => 62,  174 => 50,  169 => 48,  161 => 43,  158 => 42,  156 => 41,  146 => 51,  170 => 76,  148 => 67,  113 => 51,  99 => 42,  90 => 29,  53 => 10,  49 => 9,  77 => 16,  23 => 3,  255 => 86,  250 => 77,  243 => 75,  241 => 80,  238 => 81,  234 => 68,  231 => 67,  214 => 61,  210 => 60,  203 => 55,  200 => 54,  195 => 8,  164 => 72,  129 => 35,  124 => 49,  110 => 43,  107 => 47,  87 => 28,  56 => 18,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 104,  282 => 90,  276 => 86,  273 => 94,  270 => 84,  268 => 93,  263 => 91,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 62,  215 => 72,  211 => 69,  204 => 66,  198 => 65,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  112 => 44,  82 => 36,  65 => 13,  38 => 4,  144 => 65,  141 => 54,  135 => 47,  126 => 49,  109 => 37,  103 => 34,  67 => 19,  61 => 12,  47 => 14,  28 => 6,  105 => 24,  93 => 20,  76 => 22,  72 => 23,  68 => 22,  94 => 26,  88 => 24,  79 => 17,  59 => 22,  225 => 71,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 7,  186 => 61,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 61,  121 => 45,  118 => 29,  114 => 42,  104 => 28,  100 => 28,  78 => 24,  75 => 23,  71 => 19,  58 => 12,  34 => 5,  91 => 20,  84 => 31,  26 => 11,  27 => 4,  24 => 4,  21 => 1,  44 => 6,  31 => 3,  25 => 1,  19 => 2,  70 => 19,  63 => 19,  46 => 7,  22 => 3,  163 => 63,  155 => 54,  152 => 68,  149 => 37,  145 => 69,  139 => 50,  131 => 42,  123 => 47,  120 => 43,  115 => 40,  106 => 36,  101 => 43,  96 => 26,  83 => 26,  80 => 26,  74 => 24,  66 => 21,  55 => 12,  52 => 12,  50 => 8,  43 => 7,  41 => 5,  37 => 4,  35 => 4,  32 => 2,  29 => 2,  184 => 70,  178 => 71,  171 => 62,  165 => 57,  162 => 86,  157 => 55,  153 => 79,  151 => 53,  143 => 50,  138 => 53,  136 => 63,  133 => 43,  130 => 47,  122 => 31,  119 => 55,  116 => 46,  111 => 38,  108 => 33,  102 => 29,  98 => 22,  95 => 31,  92 => 39,  89 => 19,  85 => 23,  81 => 40,  73 => 15,  64 => 23,  60 => 17,  57 => 11,  54 => 10,  51 => 13,  48 => 11,  45 => 8,  42 => 12,  39 => 11,  36 => 6,  33 => 8,  30 => 7,);
    }
}
