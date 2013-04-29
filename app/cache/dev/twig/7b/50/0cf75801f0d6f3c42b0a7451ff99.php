<?php

/* Inra2013urzBundle:Analyse:VoireAnalyse.html.twig */
class __TwigTemplate_7b500cf75801f0d6f3c42b0a7451ff99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("Inra2013urzBundle:Default:IndexUser.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu2' => array($this, 'block_menu2'),
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        echo "Create Analyse";
    }

    // line 4
    public function block_menu2($context, array $blocks = array())
    {
        // line 5
        if (($this->getAttribute((isset($context["Role"]) ? $context["Role"] : $this->getContext($context, "Role")), 0, array(), "array") == "ROLE_RESPONSABLE")) {
            // line 6
            echo "    ";
            if ((($this->getAttribute($this->getAttribute((isset($context["Protocole"]) ? $context["Protocole"] : $this->getContext($context, "Protocole")), 0, array(), "array"), "Validation") == 1) || ($this->getAttribute($this->getAttribute((isset($context["Protocole"]) ? $context["Protocole"] : $this->getContext($context, "Protocole")), 0, array(), "array"), "Validation") == 3))) {
                // line 7
                echo "<div class=\"well\" >

    <form method=\"POST\" action=";
                // line 9
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_ValidAnalyse"), "html", null, true);
                echo " >
        <h5>Conformité des résultats ?</h5>
        <button class=\"btn btn-primary\" type=\"submit\" >Valider</button>

        <a  role=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" href=\"#refus\" >Réfuser </a>
        <input type=\"hidden\" name=\"NumProtocole\" value=\"";
                // line 14
                echo twig_escape_filter($this->env, (isset($context["NumProtocole"]) ? $context["NumProtocole"] : $this->getContext($context, "NumProtocole")), "html", null, true);
                echo "\" />
        <input type=\"hidden\" name=\"Status\" value=2 />  
    </form>

</div>
    ";
            }
            // line 20
            echo "
 ";
        }
        // line 22
        echo "


";
    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        // line 31
        echo "
<ul class=\"nav nav-tabs\" id=\"myTab\">

    ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["TypeAnalyse"]) ? $context["TypeAnalyse"] : $this->getContext($context, "TypeAnalyse")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["typeanalyse"]) {
            // line 35
            echo "    ";
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") == 1)) {
                // line 36
                echo "    <li class=\"active\"><a href=\"#";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), "html", null, true);
                echo "</a></li>
     ";
            } else {
                // line 38
                echo "        <li ><a href=\"#";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), "html", null, true);
                echo "</a></li>
    ";
            }
            // line 40
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typeanalyse'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 41
        echo "
        </ul>


        <div class=\"tab-content\">

  ";
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["TypeAnalyse"]) ? $context["TypeAnalyse"] : $this->getContext($context, "TypeAnalyse")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["typeanalyse"]) {
            // line 48
            echo "
    ";
            // line 49
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") == 1)) {
                // line 50
                echo "
            <div class=\"tab-pane active\" id=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), "html", null, true);
                echo "\" >

                <table class=\"table table-striped table-hover\" >
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>CodeLabo</th>

                     ";
                // line 59
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Champs"]) ? $context["Champs"] : $this->getContext($context, "Champs")), $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["Champ"]) {
                    // line 60
                    echo "                            <th>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Champ"]) ? $context["Champ"] : $this->getContext($context, "Champ")), "Champ"), "html", null, true);
                    echo "</th>
                     ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Champ'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 61
                echo " 


                            </tr>
                        </thead>
                        <tbody>



                  ";
                // line 70
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ResultatCodeLabo"]) ? $context["ResultatCodeLabo"] : $this->getContext($context, "ResultatCodeLabo")), $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom")));
                foreach ($context['_seq'] as $context["keys"] => $context["Resultats"]) {
                    // line 71
                    echo "
                             ";
                    // line 72
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Resultats"]) ? $context["Resultats"] : $this->getContext($context, "Resultats")), ("Champs" . $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["Result"]) {
                        // line 73
                        echo "                            <tr>     
                                <td> ";
                        // line 74
                        echo twig_escape_filter($this->env, (isset($context["keys"]) ? $context["keys"] : $this->getContext($context, "keys")), "html", null, true);
                        echo " </td>
                                <td>";
                        // line 75
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Resultats"]) ? $context["Resultats"] : $this->getContext($context, "Resultats")), "CodeLabo"), "html", null, true);
                        echo "</td>

                                ";
                        // line 77
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Champs"]) ? $context["Champs"] : $this->getContext($context, "Champs")), $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), array(), "array"));
                        foreach ($context['_seq'] as $context["_key"] => $context["Champ"]) {
                            // line 78
                            echo "
                                               ";
                            // line 79
                            if ((null === $this->getAttribute((isset($context["Result"]) ? $context["Result"] : $this->getContext($context, "Result")), $this->getAttribute((isset($context["Champ"]) ? $context["Champ"] : $this->getContext($context, "Champ")), "Champ")))) {
                                // line 80
                                echo "
                                <td style=\"color:red\">NULL</td>


                                ";
                            } else {
                                // line 85
                                echo "                                <td>";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Result"]) ? $context["Result"] : $this->getContext($context, "Result")), $this->getAttribute((isset($context["Champ"]) ? $context["Champ"] : $this->getContext($context, "Champ")), "Champ")), "html", null, true);
                                echo "</td>

                                ";
                            }
                            // line 88
                            echo "

                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Champ'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 91
                        echo "
                            </tr>
                 ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Result'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 93
                    echo "        
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['keys'], $context['Resultats'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 95
                echo "
                        </tbody>
                    </table>   

                </div>

        ";
            } else {
                // line 102
                echo "
                <div class=\"tab-pane \" id=\"";
                // line 103
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), "html", null, true);
                echo "\" >


                    <table class=\"table table-striped table-hover\" >
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>CodeLabo</th>

                     ";
                // line 112
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Champs"]) ? $context["Champs"] : $this->getContext($context, "Champs")), $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["Champ"]) {
                    // line 113
                    echo "
                                <th>";
                    // line 114
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Champ"]) ? $context["Champ"] : $this->getContext($context, "Champ")), "Champ"), "html", null, true);
                    echo "</th>

                     ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Champ'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 116
                echo " 


                            </tr>
                        </thead>

                        <tbody>


                  ";
                // line 125
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ResultatCodeLabo"]) ? $context["ResultatCodeLabo"] : $this->getContext($context, "ResultatCodeLabo")), $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom")));
                foreach ($context['_seq'] as $context["keys"] => $context["Resultats"]) {
                    // line 126
                    echo "
                             ";
                    // line 127
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Resultats"]) ? $context["Resultats"] : $this->getContext($context, "Resultats")), ("Champs" . $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["Result"]) {
                        // line 128
                        echo "                            <tr>     
                                <td> ";
                        // line 129
                        echo twig_escape_filter($this->env, (isset($context["keys"]) ? $context["keys"] : $this->getContext($context, "keys")), "html", null, true);
                        echo " </td>
                                <td>";
                        // line 130
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Resultats"]) ? $context["Resultats"] : $this->getContext($context, "Resultats")), "CodeLabo"), "html", null, true);
                        echo "</td>

                                ";
                        // line 132
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Champs"]) ? $context["Champs"] : $this->getContext($context, "Champs")), $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), array(), "array"));
                        foreach ($context['_seq'] as $context["_key"] => $context["Champ"]) {
                            // line 133
                            echo "
                                ";
                            // line 134
                            if ((null === $this->getAttribute((isset($context["Result"]) ? $context["Result"] : $this->getContext($context, "Result")), $this->getAttribute((isset($context["Champ"]) ? $context["Champ"] : $this->getContext($context, "Champ")), "Champ")))) {
                                // line 135
                                echo "
                                <td style=\"color:red\">NULL</td>

                                ";
                            } else {
                                // line 139
                                echo "
                                <td>";
                                // line 140
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Result"]) ? $context["Result"] : $this->getContext($context, "Result")), $this->getAttribute((isset($context["Champ"]) ? $context["Champ"] : $this->getContext($context, "Champ")), "Champ")), "html", null, true);
                                echo "</td>

                                ";
                            }
                            // line 143
                            echo "

                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Champ'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 146
                        echo "
                            </tr>
                 ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Result'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 148
                    echo "        
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['keys'], $context['Resultats'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 150
                echo "                        </tbody>

                    </table> 




                </div>

";
            }
            // line 159
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typeanalyse'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 163
        echo "
            </div>









";
        // line 175
        echo "
            <form method=\"POST\" action=";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_ValidAnalyse"), "html", null, true);
        echo " >
                <div id=\"validation\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                        <h3 id=\"myModalLabel\">ENVOIE POUR VALIDATION</h3>
                    </div>
                    <div class=\"modal-body\">
                        <p>Êtes-vous sur de vouloir envoyer les resultats pour validation?</p></br>
                        <p>Commentaire :</p>
                        <textarea name=\"Commentaire\" id=\"input\" class=\"offset1 span7\" rows=\"3\">     
                                ";
        // line 186
        if ((!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["Protocole"]) ? $context["Protocole"] : $this->getContext($context, "Protocole")), 0, array(), "array"), "Commentaire")))) {
            // line 187
            echo "                                            </br>
                                            ";
            // line 188
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Protocole"]) ? $context["Protocole"] : $this->getContext($context, "Protocole")), 0, array(), "array"), "Commentaire"), "html", null, true);
            echo " </br></br>  *****************************************************
                                          ";
        }
        // line 190
        echo "                                              
                            </textarea>
                        </div>


                        <div class=\"modal-footer\">
                            <button class=\"btn btn-danger\" data-dismiss=\"modal\" aria-hidden=\"true\">Annuler</button>
                            <button class=\"btn btn-primary\" type=\"submit\" >Validation</button></a>
                        </div>
                    </div>
                    <input type=\"hidden\" name=\"NumProtocole\" value=\"";
        // line 200
        echo twig_escape_filter($this->env, (isset($context["NumProtocole"]) ? $context["NumProtocole"] : $this->getContext($context, "NumProtocole")), "html", null, true);
        echo "\" />
                    <input type=\"hidden\" name=\"Status\" value=1 />  
                </form>

";
        // line 205
        echo "
                <form method=\"POST\" action=";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_ValidAnalyse"), "html", null, true);
        echo " >
                    <div id=\"refus\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                        <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                            <h3 id=\"myModalLabel\">REFUS DE LA VALIDATION </h3>
                        </div>
                        <div class=\"modal-body\">
                            <p>Êtes-vous sur de vouloir envoyer les resultats pour validation?</p></br>
                            <p>Commentaire :</p>
                            <textarea name=\"Commentaire\" id=\"input1\" class=\"offset1 span7\" rows=\"3\">     
                                ";
        // line 216
        if ((!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["Protocole"]) ? $context["Protocole"] : $this->getContext($context, "Protocole")), 0, array(), "array"), "Commentaire")))) {
            // line 217
            echo "                                            </br>
                                            ";
            // line 218
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Protocole"]) ? $context["Protocole"] : $this->getContext($context, "Protocole")), 0, array(), "array"), "Commentaire"), "html", null, true);
            echo " </br></br>  *****************************************************
                                          ";
        }
        // line 220
        echo "                                              
                                </textarea>
                            </div>


                            <div class=\"modal-footer\">
                                <button class=\"btn btn-danger\" data-dismiss=\"modal\" aria-hidden=\"true\">Annuler</button>
                                <button class=\"btn btn-primary\" type=\"submit\" >Validation</button></a>
                            </div>
                        </div>
                        <input type=\"hidden\" name=\"NumProtocole\" value=\"";
        // line 230
        echo twig_escape_filter($this->env, (isset($context["NumProtocole"]) ? $context["NumProtocole"] : $this->getContext($context, "NumProtocole")), "html", null, true);
        echo "\" />
                        <input type=\"hidden\" name=\"Status\" value=3 />  
                    </form>

";
    }

    // line 235
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 236
        echo "                    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/CLEditor1_3_0/jquery.cleditor.css"), "html", null, true);
        echo "\" />
                    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap-editable/css/bootstrap-editable.css"), "html", null, true);
        echo "\" />


";
    }

    // line 241
    public function block_javascripts($context, array $blocks = array())
    {
        echo " 
                    <script type=\"text/javascript\" src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/CLEditor1_3_0/jquery.cleditor.min.js"), "html", null, true);
        echo "\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap-editable/js/bootstrap-editable.js"), "html", null, true);
        echo "\"></script>
                    <script>
                        \$('#myTab a').click(function(e) {
                            e.preventDefault();
                            \$(this).tab('show');
                        });
                        </script>

                        <script type=\"text/javascript\">
                            \$(document).ready(function() {
                                \$(\"#input\").cleditor();
                            });
                            \$(document).ready(function() {
                                \$(\"#input1\").cleditor();
                            });
                            </script>


                                ";
        // line 273
        echo "   
";
    }

    public function getTemplateName()
    {
        return "Inra2013urzBundle:Analyse:VoireAnalyse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  574 => 273,  553 => 243,  549 => 242,  544 => 241,  536 => 237,  531 => 236,  499 => 217,  497 => 216,  484 => 206,  481 => 205,  474 => 200,  462 => 190,  457 => 188,  454 => 187,  452 => 186,  439 => 176,  436 => 175,  423 => 163,  406 => 159,  394 => 150,  379 => 146,  371 => 143,  362 => 139,  354 => 134,  351 => 133,  347 => 132,  342 => 130,  338 => 129,  335 => 128,  331 => 127,  304 => 114,  297 => 112,  285 => 103,  227 => 77,  218 => 74,  208 => 71,  166 => 50,  134 => 68,  62 => 18,  128 => 42,  527 => 199,  491 => 178,  476 => 166,  466 => 159,  455 => 155,  438 => 154,  405 => 141,  401 => 140,  397 => 139,  392 => 137,  389 => 136,  372 => 135,  355 => 120,  323 => 111,  298 => 107,  286 => 98,  277 => 91,  213 => 79,  179 => 63,  175 => 62,  167 => 55,  142 => 50,  137 => 47,  117 => 25,  140 => 46,  501 => 179,  498 => 178,  488 => 172,  473 => 171,  461 => 157,  448 => 155,  426 => 144,  422 => 149,  407 => 148,  395 => 140,  382 => 132,  360 => 128,  357 => 127,  345 => 117,  328 => 126,  319 => 110,  313 => 116,  311 => 109,  307 => 108,  303 => 107,  299 => 106,  293 => 105,  283 => 103,  275 => 100,  258 => 91,  236 => 80,  207 => 67,  192 => 63,  182 => 60,  176 => 59,  173 => 91,  86 => 34,  69 => 14,  40 => 5,  698 => 319,  677 => 289,  673 => 288,  668 => 287,  660 => 283,  655 => 282,  652 => 281,  643 => 276,  631 => 266,  626 => 264,  623 => 263,  621 => 262,  608 => 252,  605 => 251,  598 => 246,  586 => 236,  581 => 234,  578 => 233,  576 => 232,  563 => 222,  560 => 221,  551 => 214,  545 => 210,  528 => 235,  519 => 230,  511 => 196,  507 => 220,  502 => 218,  492 => 173,  487 => 184,  485 => 183,  478 => 178,  460 => 174,  450 => 156,  444 => 169,  440 => 168,  433 => 164,  429 => 163,  409 => 142,  396 => 150,  387 => 148,  384 => 133,  380 => 146,  370 => 139,  365 => 140,  359 => 134,  356 => 135,  350 => 129,  337 => 118,  333 => 115,  329 => 115,  324 => 125,  315 => 108,  310 => 106,  308 => 105,  278 => 101,  266 => 93,  259 => 90,  253 => 87,  247 => 84,  221 => 76,  206 => 64,  199 => 63,  193 => 61,  190 => 62,  174 => 50,  169 => 51,  161 => 48,  158 => 86,  156 => 41,  146 => 76,  170 => 76,  148 => 67,  113 => 51,  99 => 42,  90 => 29,  53 => 23,  49 => 9,  77 => 16,  23 => 3,  255 => 86,  250 => 88,  243 => 85,  241 => 89,  238 => 81,  234 => 79,  231 => 78,  214 => 61,  210 => 60,  203 => 55,  200 => 54,  195 => 8,  164 => 49,  129 => 35,  124 => 49,  110 => 43,  107 => 50,  87 => 28,  56 => 17,  20 => 1,  301 => 113,  295 => 96,  292 => 95,  289 => 94,  287 => 104,  282 => 102,  276 => 86,  273 => 95,  270 => 84,  268 => 93,  263 => 91,  249 => 79,  245 => 77,  230 => 80,  222 => 75,  220 => 62,  215 => 73,  211 => 72,  204 => 70,  198 => 65,  185 => 61,  183 => 60,  177 => 92,  160 => 66,  112 => 44,  82 => 34,  65 => 13,  38 => 4,  144 => 47,  141 => 54,  135 => 45,  126 => 49,  109 => 37,  103 => 35,  67 => 20,  61 => 12,  47 => 9,  28 => 6,  105 => 24,  93 => 20,  76 => 22,  72 => 20,  68 => 22,  94 => 39,  88 => 35,  79 => 17,  59 => 12,  225 => 71,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 78,  194 => 62,  191 => 78,  189 => 7,  186 => 61,  180 => 59,  172 => 67,  159 => 50,  154 => 59,  147 => 55,  132 => 52,  127 => 49,  121 => 57,  118 => 39,  114 => 38,  104 => 28,  100 => 28,  78 => 29,  75 => 23,  71 => 22,  58 => 14,  34 => 5,  91 => 20,  84 => 31,  26 => 11,  27 => 4,  24 => 4,  21 => 1,  44 => 6,  31 => 2,  25 => 1,  19 => 2,  70 => 19,  63 => 19,  46 => 7,  22 => 3,  163 => 63,  155 => 54,  152 => 68,  149 => 37,  145 => 51,  139 => 50,  131 => 42,  123 => 48,  120 => 40,  115 => 40,  106 => 36,  101 => 24,  96 => 22,  83 => 26,  80 => 26,  74 => 24,  66 => 21,  55 => 11,  52 => 12,  50 => 9,  43 => 6,  41 => 5,  37 => 3,  35 => 5,  32 => 2,  29 => 3,  184 => 60,  178 => 71,  171 => 61,  165 => 89,  162 => 86,  157 => 55,  153 => 79,  151 => 52,  143 => 50,  138 => 53,  136 => 41,  133 => 43,  130 => 47,  122 => 40,  119 => 55,  116 => 46,  111 => 38,  108 => 33,  102 => 29,  98 => 22,  95 => 31,  92 => 36,  89 => 20,  85 => 23,  81 => 31,  73 => 25,  64 => 17,  60 => 17,  57 => 11,  54 => 10,  51 => 10,  48 => 7,  45 => 6,  42 => 12,  39 => 6,  36 => 5,  33 => 3,  30 => 2,);
    }
}
