<?php

/* Inra2013urzBundle:Analyse:CreateAnalyse.html.twig */
class __TwigTemplate_cbacc6889e18f3a18456fff343741e4b extends Twig_Template
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
        if ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE")) {
            // line 6
            echo "    ";
            if (($this->getAttribute($this->getAttribute((isset($context["validation"]) ? $context["validation"] : $this->getContext($context, "validation")), 0, array(), "array"), "Validation") == 0)) {
                // line 7
                echo "<div class=\"well\" >

    <form method=\"POST\" action=";
                // line 9
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_ValidAnalyse"), "html", null, true);
                echo " >
        <h4>Conformité des résultats ?</h4>
        <button class=\"btn btn-primary\" type=\"submit\" >Valider</button>
        <a  role=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" href=\"#refus\" >Réfuser </a>
        <input type=\"hidden\" name=\"NumProtocole\" value=\"";
                // line 13
                echo twig_escape_filter($this->env, (isset($context["NumProtocole"]) ? $context["NumProtocole"] : $this->getContext($context, "NumProtocole")), "html", null, true);
                echo "\" />
        <input type=\"hidden\" name=\"Status\" value=2 />  
    </form>

</div>
";
            }
            // line 19
            echo "    ";
        }
    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        // line 26
        echo "
<ul class=\"nav nav-tabs\" id=\"myTab\">

    ";
        // line 29
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
            // line 30
            echo "    ";
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") == 1)) {
                // line 31
                echo "    <li class=\"active\"><a href=\"#";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), "html", null, true);
                echo "</a></li>
     ";
            } else {
                // line 33
                echo "        <li ><a href=\"#";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), "html", null, true);
                echo "</a></li>
    ";
            }
            // line 35
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
        // line 36
        echo "
        </ul>
        <form action=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_CreateAnalyse"), "html", null, true);
        echo "\" method=\"POST\" >
            <div class=\"tab-content\">

  ";
        // line 41
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
            // line 42
            echo "


    ";
            // line 45
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") == 1)) {
                // line 46
                echo "
                <div class=\"tab-pane active\" id=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), "html", null, true);
                echo "\" >

               ";
                // line 49
                if ((twig_length_filter($this->env, (isset($context["Resultat"]) ? $context["Resultat"] : $this->getContext($context, "Resultat"))) > 0)) {
                    echo "  

                    <table class=\"table table-striped\" >
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>CodeLabo</th>

                     ";
                    // line 57
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Champs"]) ? $context["Champs"] : $this->getContext($context, "Champs")), $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), array(), "array"));
                    foreach ($context['_seq'] as $context["_key"] => $context["Champ"]) {
                        // line 58
                        echo "                                <th>";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Champ"]) ? $context["Champ"] : $this->getContext($context, "Champ")), "Champ"), "html", null, true);
                        echo "</th>
                     ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Champ'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 59
                    echo " 
                                    <th>Fait par</th>

                                </tr>
                            </thead>
                            <tbody>

        ";
                    // line 66
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ResultatCodeLabo"]) ? $context["ResultatCodeLabo"] : $this->getContext($context, "ResultatCodeLabo")), $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), array(), "array"));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["typecodelabo"]) {
                        // line 67
                        echo "
                                <tr>  
                                    <td>";
                        // line 69
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                        echo "</td>    

                                    <td> ";
                        // line 71
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), "CodeLabo"), "CodeLabo"), "html", null, true);
                        echo " </td>


                               ";
                        // line 74
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Champs"]) ? $context["Champs"] : $this->getContext($context, "Champs")), $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), array(), "array"));
                        foreach ($context['_seq'] as $context["_key"] => $context["Champ"]) {
                            echo "    

                                    ";
                            // line 76
                            if (twig_test_empty($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), "User"))) {
                                // line 77
                                echo "
                                    <td><input type=\"text\" name=\"";
                                // line 78
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Champ"]) ? $context["Champ"] : $this->getContext($context, "Champ")), "Champ"), "html", null, true);
                                echo "[";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), "CodeLabo"), "CodeLabo"), "html", null, true);
                                echo "]\" class=\"span7\"  /></td>

                                    ";
                            } else {
                                // line 81
                                echo "
                                    <td>";
                                // line 82
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), $this->getAttribute((isset($context["Champ"]) ? $context["Champ"] : $this->getContext($context, "Champ")), "Champ")), "html", null, true);
                                echo "</td>

                                    ";
                            }
                            // line 85
                            echo "
                               ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Champ'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 87
                        echo "                                         ";
                        if (twig_test_empty($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), "User"))) {
                            // line 88
                            echo "
                                         ";
                        } else {
                            // line 89
                            echo " 

                                    <td> ";
                            // line 91
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), "User"), "Nom"), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), "User"), "Prenom"), "html", null, true);
                            echo "</td>
                                         ";
                        }
                        // line 93
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typecodelabo'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 97
                    echo "                            </tbody>
                        </table>        
        ";
                } else {
                    // line 99
                    echo "          
                    <h3><p class=\"text-center text-error \">En attente du listing de Code Labo</p> </h3>

        ";
                }
                // line 103
                echo "                    </div>

        ";
            } else {
                // line 106
                echo "
                    <div class=\"tab-pane\" id=\"";
                // line 107
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), "html", null, true);
                echo "\" >
               ";
                // line 108
                if ((twig_length_filter($this->env, (isset($context["Resultat"]) ? $context["Resultat"] : $this->getContext($context, "Resultat"))) > 0)) {
                    echo "  

                            <table class=\"table table-striped\" >
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>CodeLabo</th>

                                  ";
                    // line 116
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Champs"]) ? $context["Champs"] : $this->getContext($context, "Champs")), $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), array(), "array"));
                    foreach ($context['_seq'] as $context["_key"] => $context["Champ"]) {
                        // line 117
                        echo "
                                        <th>";
                        // line 118
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Champ"]) ? $context["Champ"] : $this->getContext($context, "Champ")), "Champ"), "html", null, true);
                        echo "</th>

                                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Champ'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 120
                    echo " 

                                        <th>Fait par</th>

                                    </tr>
                                </thead>
                                <tbody>

        ";
                    // line 128
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ResultatCodeLabo"]) ? $context["ResultatCodeLabo"] : $this->getContext($context, "ResultatCodeLabo")), $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), array(), "array"));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["typecodelabo"]) {
                        // line 129
                        echo "                                <td>";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                        echo "</td>    

                                <tr>  
                                    <td>";
                        // line 132
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                        echo "</td>    
                                    <td> ";
                        // line 133
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), "CodeLabo"), "CodeLabo"), "html", null, true);
                        echo " </td>
                                    ";
                        // line 134
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Champs"]) ? $context["Champs"] : $this->getContext($context, "Champs")), $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), array(), "array"));
                        foreach ($context['_seq'] as $context["_key"] => $context["Champ"]) {
                            echo "    

                                    ";
                            // line 136
                            if (twig_test_empty($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), "User"))) {
                                // line 137
                                echo "
                                    <td><input type=\"text\" name=\"";
                                // line 138
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Champ"]) ? $context["Champ"] : $this->getContext($context, "Champ")), "Champ"), "html", null, true);
                                echo "[";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), "CodeLabo"), "CodeLabo"), "html", null, true);
                                echo "]\" class=\"span7\" /></td>

                                    ";
                            } else {
                                // line 141
                                echo "
                                    <td>";
                                // line 142
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), $this->getAttribute((isset($context["Champ"]) ? $context["Champ"] : $this->getContext($context, "Champ")), "Champ")), "html", null, true);
                                echo "</td>

                                    ";
                            }
                            // line 145
                            echo "
                               ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Champ'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 147
                        echo "                                  ";
                        if (twig_test_empty($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), "User"))) {
                            // line 148
                            echo "                                    <td></td>
                                         ";
                        } else {
                            // line 149
                            echo " 

                                    <td>";
                            // line 151
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), "User"), "Nom"), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), "User"), "Prenom"), "html", null, true);
                            echo "</td>
                                         ";
                        }
                        // line 153
                        echo "                                </tr> 

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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typecodelabo'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 156
                    echo "                                </tbody>

                            </table>
";
                } else {
                    // line 160
                    echo "                                 <h3><p class=\"text-center text-error \">En attente du listing de Code Labo</p> </h3>

";
                }
                // line 163
                echo "                        </div>


";
            }
            // line 166
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
        // line 170
        echo "
                ";
        // line 171
        if ((($this->getAttribute($this->getAttribute((isset($context["validation"]) ? $context["validation"] : $this->getContext($context, "validation")), 0, array(), "array"), "Validation") == 0) && (twig_length_filter($this->env, (isset($context["Resultat"]) ? $context["Resultat"] : $this->getContext($context, "Resultat"))) > 0))) {
            // line 172
            echo "                        <input type=\"hidden\" name=\"NumProtocole\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["NumProtocole"]) ? $context["NumProtocole"] : $this->getContext($context, "NumProtocole")), "html", null, true);
            echo "\" />
                        <input type=\"hidden\" name=\"Status\" value=\"Enregistrer\" />
                        <div class=\"span4\"><input type=\"submit\" value=\"Enregistrer\" class=\"btn btn-primary\" />   <input type=\"submit\" value=\"Cancel\" class=\"btn btn-danger\" /></div>
                        <div class=\"span1 offset6\"> 
                            <a href=\"#validation\" role=\"button\" class=\"btn btn-success\" data-toggle=\"modal\">Valider </a></div>   

                        ";
        }
        // line 178
        echo "     





                    </div>  

                </form> 

";
        // line 189
        echo "
                <form method=\"POST\" action=";
        // line 190
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
                            <textarea name=\"Commentaire\" id=\"input\" class=\"offset1 span7\" rows=\"3\"> </textarea>
                        </div>


                        <div class=\"modal-footer\">
                            <button class=\"btn btn-danger\" data-dismiss=\"modal\" aria-hidden=\"true\">Annuler</button>
                            <button class=\"btn btn-primary\" type=\"submit\" >Validation</button></a>
                        </div>
                    </div>
                    <input type=\"hidden\" name=\"NumProtocole\" value=\"";
        // line 208
        echo twig_escape_filter($this->env, (isset($context["NumProtocole"]) ? $context["NumProtocole"] : $this->getContext($context, "NumProtocole")), "html", null, true);
        echo "\" />
                    <input type=\"hidden\" name=\"Status\" value=1 />  
                </form>

";
        // line 213
        echo "
                <form method=\"POST\" action=";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_ValidAnalyse"), "html", null, true);
        echo " >
                    <div id=\"refus\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                        <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                            <h3 id=\"myModalLabel\">REFUS D'ANALYSE</h3>
                        </div>
                        <div class=\"modal-body\">
                            <p></p></br>
                            <p>Raison pour refus d'analyse :</p>
                            <textarea name=\"Commentaire\" id=\"input\" class=\"offset1 span7\" rows=\"3\"> </textarea>
                        </div>


                        <div class=\"modal-footer\">
                            <button class=\"btn btn-danger\" data-dismiss=\"modal\" aria-hidden=\"true\">Annuler</button>
                            <button class=\"btn btn-primary\" type=\"submit\" >Validation</button></a>
                        </div>
                    </div>
                    <input type=\"hidden\" name=\"NumProtocole\" value=\"";
        // line 232
        echo twig_escape_filter($this->env, (isset($context["NumProtocole"]) ? $context["NumProtocole"] : $this->getContext($context, "NumProtocole")), "html", null, true);
        echo "\" />
                    <input type=\"hidden\" name=\"Status\" value=3 />  
                </form>

";
    }

    // line 237
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 238
        echo "                <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/CLEditor1_3_0/jquery.cleditor.css"), "html", null, true);
        echo "\" />
";
    }

    // line 240
    public function block_javascripts($context, array $blocks = array())
    {
        echo " 
                <script type=\"text/javascript\" src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/CLEditor1_3_0/jquery.cleditor.min.js"), "html", null, true);
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
                            config.toolbar_Basic =
                                    [
                                        ['Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink', '-', 'About']
                                    ];
                        });
                        </script>
";
    }

    public function getTemplateName()
    {
        return "Inra2013urzBundle:Analyse:CreateAnalyse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  610 => 241,  605 => 240,  598 => 238,  595 => 237,  586 => 232,  565 => 214,  562 => 213,  555 => 208,  534 => 190,  531 => 189,  519 => 178,  508 => 172,  506 => 171,  503 => 170,  486 => 166,  480 => 163,  475 => 160,  469 => 156,  453 => 153,  446 => 151,  442 => 149,  438 => 148,  435 => 147,  428 => 145,  422 => 142,  419 => 141,  411 => 138,  408 => 137,  406 => 136,  399 => 134,  395 => 133,  391 => 132,  384 => 129,  367 => 128,  357 => 120,  348 => 118,  345 => 117,  341 => 116,  330 => 108,  326 => 107,  323 => 106,  318 => 103,  312 => 99,  307 => 97,  290 => 93,  283 => 91,  279 => 89,  275 => 88,  272 => 87,  265 => 85,  259 => 82,  256 => 81,  248 => 78,  236 => 74,  221 => 67,  182 => 57,  161 => 45,  156 => 42,  99 => 31,  166 => 47,  150 => 67,  146 => 65,  90 => 29,  53 => 17,  49 => 10,  23 => 3,  243 => 76,  238 => 73,  234 => 68,  231 => 67,  214 => 61,  210 => 60,  203 => 55,  200 => 54,  195 => 59,  164 => 82,  129 => 36,  124 => 49,  110 => 43,  107 => 33,  87 => 37,  56 => 18,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 71,  222 => 73,  220 => 62,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  112 => 44,  82 => 30,  65 => 16,  38 => 4,  144 => 50,  141 => 54,  135 => 47,  126 => 45,  109 => 47,  103 => 43,  67 => 19,  61 => 16,  47 => 14,  28 => 6,  105 => 24,  93 => 20,  76 => 33,  72 => 32,  68 => 22,  94 => 39,  88 => 27,  79 => 29,  59 => 22,  225 => 69,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 7,  186 => 58,  180 => 72,  172 => 76,  159 => 61,  154 => 68,  147 => 55,  132 => 48,  127 => 49,  121 => 55,  118 => 44,  114 => 42,  104 => 35,  100 => 33,  78 => 24,  75 => 23,  71 => 24,  58 => 13,  34 => 5,  91 => 38,  84 => 31,  26 => 2,  27 => 4,  24 => 4,  21 => 1,  44 => 13,  31 => 4,  25 => 3,  19 => 2,  70 => 19,  63 => 20,  46 => 7,  22 => 3,  163 => 46,  155 => 58,  152 => 49,  149 => 51,  145 => 69,  139 => 41,  131 => 42,  123 => 47,  120 => 43,  115 => 35,  106 => 36,  101 => 42,  96 => 30,  83 => 18,  80 => 26,  74 => 26,  66 => 19,  55 => 15,  52 => 12,  50 => 9,  43 => 6,  41 => 5,  37 => 8,  35 => 4,  32 => 2,  29 => 2,  184 => 70,  178 => 71,  171 => 49,  165 => 58,  162 => 81,  157 => 56,  153 => 74,  151 => 73,  143 => 67,  138 => 63,  136 => 50,  133 => 38,  130 => 47,  122 => 44,  119 => 36,  116 => 46,  111 => 38,  108 => 37,  102 => 30,  98 => 22,  95 => 39,  92 => 30,  89 => 19,  85 => 24,  81 => 36,  73 => 19,  64 => 23,  60 => 19,  57 => 13,  54 => 12,  51 => 13,  48 => 11,  45 => 9,  42 => 12,  39 => 11,  36 => 6,  33 => 8,  30 => 7,);
    }
}
