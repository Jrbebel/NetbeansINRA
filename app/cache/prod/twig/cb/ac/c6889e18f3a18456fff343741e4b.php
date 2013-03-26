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
        if (((isset($context["Role"]) ? $context["Role"] : null) == "ROLE_RESPONSABLE")) {
            // line 6
            echo "    ";
            if ((($this->getAttribute($this->getAttribute((isset($context["Protocole"]) ? $context["Protocole"] : null), 0, array(), "array"), "Validation") == 1) || ($this->getAttribute($this->getAttribute((isset($context["Protocole"]) ? $context["Protocole"] : null), 0, array(), "array"), "Validation") == 3))) {
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
                echo twig_escape_filter($this->env, (isset($context["NumProtocole"]) ? $context["NumProtocole"] : null), "html", null, true);
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
        // line 23
        if (((isset($context["Role"]) ? $context["Role"] : null) == "ROLE_UTILISATEUR")) {
            // line 24
            echo "    ";
            if (($this->getAttribute($this->getAttribute((isset($context["Protocole"]) ? $context["Protocole"] : null), 0, array(), "array"), "Validation") != 2)) {
                // line 25
                echo "<div class=\"well\" >
    <a  role=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" href=\"#validation\" >Demande de validation</a>
</div>
";
            }
            // line 29
            echo "    ";
        }
    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        // line 36
        echo "
<ul class=\"nav nav-tabs\" id=\"myTab\">

    ";
        // line 39
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["TypeAnalyse"]) ? $context["TypeAnalyse"] : null));
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
            // line 40
            echo "    ";
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") == 1)) {
                // line 41
                echo "    <li class=\"active\"><a href=\"#";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : null), "Nom"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : null), "Nom"), "html", null, true);
                echo "</a></li>
     ";
            } else {
                // line 43
                echo "        <li ><a href=\"#";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : null), "Nom"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : null), "Nom"), "html", null, true);
                echo "</a></li>
    ";
            }
            // line 45
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
        // line 46
        echo "
        </ul>
        <form action=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_CreateAnalyse"), "html", null, true);
        echo "\" method=\"POST\" >
            <div class=\"tab-content\">

  ";
        // line 51
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["TypeAnalyse"]) ? $context["TypeAnalyse"] : null));
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
            // line 52
            echo "


    ";
            // line 55
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") == 1)) {
                // line 56
                echo "
                <div class=\"tab-pane active\" id=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : null), "Nom"), "html", null, true);
                echo "\" >

               ";
                // line 59
                if ((twig_length_filter($this->env, (isset($context["Resultat"]) ? $context["Resultat"] : null)) > 0)) {
                    echo "  

                    <table class=\"table table-striped\" >
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>CodeLabo</th>

                     ";
                    // line 67
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Champs"]) ? $context["Champs"] : null), $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : null), "Nom"), array(), "array"));
                    foreach ($context['_seq'] as $context["_key"] => $context["Champ"]) {
                        // line 68
                        echo "                                <th>";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Champ"]) ? $context["Champ"] : null), "Champ"), "html", null, true);
                        echo "</th>
                     ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Champ'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 69
                    echo " 
                                    <th>Fait par</th>

                                </tr>
                            </thead>
                            <tbody>

        ";
                    // line 76
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ResultatCodeLabo"]) ? $context["ResultatCodeLabo"] : null), $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : null), "Nom"), array(), "array"));
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
                        // line 77
                        echo "
                                <tr>  
                                    <td>";
                        // line 79
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                        echo "</td>    

                                    <td> ";
                        // line 81
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : null), "CodeLabo"), "CodeLabo"), "html", null, true);
                        echo " </td>


                               ";
                        // line 84
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Champs"]) ? $context["Champs"] : null), $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : null), "Nom"), array(), "array"));
                        foreach ($context['_seq'] as $context["_key"] => $context["Champ"]) {
                            echo "    

                                    ";
                            // line 86
                            if (twig_test_empty($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : null), "User"))) {
                                // line 87
                                echo "
                                    <td><input type=\"text\" name=\"[";
                                // line 88
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Champ"]) ? $context["Champ"] : null), "Champ"), "html", null, true);
                                echo "][";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : null), "CodeLabo"), "CodeLabo"), "html", null, true);
                                echo "]\" class=\"span7\"  /></td>

                                    ";
                            } else {
                                // line 91
                                echo "
                                  ";
                                // line 92
                                if (((isset($context["type"]) ? $context["type"] : null) == "UpdateAnalyse")) {
                                    // line 93
                                    echo "                                        <td><a href=\"#\" data-name='";
                                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : null), "Nom"), "html", null, true);
                                    echo ";";
                                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Champ"]) ? $context["Champ"] : null), "Champ"), "html", null, true);
                                    echo ";";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : null), "CodeLabo"), "CodeLabo"), "html", null, true);
                                    echo "' data-type=\"text\" class=\"username\">";
                                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : null), $this->getAttribute((isset($context["Champ"]) ? $context["Champ"] : null), "Champ")), "html", null, true);
                                    echo "</a></td>
            ";
                                } else {
                                    // line 95
                                    echo "                                        <td>";
                                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : null), $this->getAttribute((isset($context["Champ"]) ? $context["Champ"] : null), "Champ")), "html", null, true);
                                    echo "</td>
                      
            ";
                                }
                                // line 97
                                echo "                

                                    ";
                            }
                            // line 100
                            echo "
                               ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Champ'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 102
                        echo "                                         ";
                        if (twig_test_empty($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : null), "User"))) {
                            // line 103
                            echo "
                                         ";
                        } else {
                            // line 104
                            echo " 

                                    <td> ";
                            // line 106
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : null), "User"), "Nom"), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : null), "User"), "Prenom"), "html", null, true);
                            echo "</td>
                                         ";
                        }
                        // line 108
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
                    // line 112
                    echo "                            </tbody>
                        </table>        
        ";
                } else {
                    // line 114
                    echo "          
                        <h3><p class=\"text-center text-error \">En attente du listing de Code Labo</p> </h3>

        ";
                }
                // line 118
                echo "                    </div>

        ";
            } else {
                // line 121
                echo "
                    <div class=\"tab-pane\" id=\"";
                // line 122
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : null), "Nom"), "html", null, true);
                echo "\" >
               ";
                // line 123
                if ((twig_length_filter($this->env, (isset($context["Resultat"]) ? $context["Resultat"] : null)) > 0)) {
                    echo "  

                            <table class=\"table table-striped\" >
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>CodeLabo</th>

                                  ";
                    // line 131
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Champs"]) ? $context["Champs"] : null), $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : null), "Nom"), array(), "array"));
                    foreach ($context['_seq'] as $context["_key"] => $context["Champ"]) {
                        // line 132
                        echo "
                                        <th>";
                        // line 133
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Champ"]) ? $context["Champ"] : null), "Champ"), "html", null, true);
                        echo "</th>

                                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Champ'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 135
                    echo " 

                                        <th>Fait par</th>

                                    </tr>
                                </thead>
                                <tbody>

        ";
                    // line 143
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ResultatCodeLabo"]) ? $context["ResultatCodeLabo"] : null), $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : null), "Nom"), array(), "array"));
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
                        // line 144
                        echo "

                                    <tr>  
                                        <td>";
                        // line 147
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                        echo "</td>    
                                        <td> ";
                        // line 148
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : null), "CodeLabo"), "CodeLabo"), "html", null, true);
                        echo " </td>
                                    ";
                        // line 149
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Champs"]) ? $context["Champs"] : null), $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : null), "Nom"), array(), "array"));
                        foreach ($context['_seq'] as $context["_key"] => $context["Champ"]) {
                            echo "    

                                    ";
                            // line 151
                            if (twig_test_empty($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : null), "User"))) {
                                // line 152
                                echo "
                                        <td><input type=\"text\" name=\"";
                                // line 153
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Champ"]) ? $context["Champ"] : null), "Champ"), "html", null, true);
                                echo "[";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : null), "CodeLabo"), "CodeLabo"), "html", null, true);
                                echo "]\" class=\"span7\" /></td>

                                    ";
                            } else {
                                // line 156
                                echo "                                        
            ";
                                // line 157
                                if (((isset($context["type"]) ? $context["type"] : null) == "UpdateAnalyse")) {
                                    // line 158
                                    echo "                                        <td><a href=\"#\" data-name='";
                                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : null), "Nom"), "html", null, true);
                                    echo ";";
                                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Champ"]) ? $context["Champ"] : null), "Champ"), "html", null, true);
                                    echo ";";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : null), "CodeLabo"), "CodeLabo"), "html", null, true);
                                    echo "' data-type=\"text\" class=\"username\">";
                                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : null), $this->getAttribute((isset($context["Champ"]) ? $context["Champ"] : null), "Champ")), "html", null, true);
                                    echo "</a></td>
            ";
                                } else {
                                    // line 160
                                    echo "                                        <td>";
                                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : null), $this->getAttribute((isset($context["Champ"]) ? $context["Champ"] : null), "Champ")), "html", null, true);
                                    echo "</td>
                      
            ";
                                }
                                // line 162
                                echo "                                         
                                    ";
                            }
                            // line 164
                            echo "
                               ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Champ'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 166
                        echo "                                  ";
                        if (twig_test_empty($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : null), "User"))) {
                            // line 167
                            echo "                                        <td></td>
                                         ";
                        } else {
                            // line 168
                            echo " 

                                        <td>";
                            // line 170
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : null), "User"), "Nom"), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : null), "User"), "Prenom"), "html", null, true);
                            echo "</td>
                                         ";
                        }
                        // line 172
                        echo "                                    </tr> 

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
                    // line 175
                    echo "                                </tbody>

                            </table>
";
                } else {
                    // line 179
                    echo "                            <h3><p class=\"text-center text-error \">En attente du listing de Code Labo</p> </h3>

";
                }
                // line 182
                echo "                        </div>


";
            }
            // line 185
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
        // line 189
        echo "
                ";
        // line 190
        if ((($this->getAttribute($this->getAttribute((isset($context["Protocole"]) ? $context["Protocole"] : null), 0, array(), "array"), "Validation") == 0) && (twig_length_filter($this->env, (isset($context["Resultat"]) ? $context["Resultat"] : null)) > 0))) {
            // line 191
            echo "                        <input type=\"hidden\" name=\"NumProtocole\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["NumProtocole"]) ? $context["NumProtocole"] : null), "html", null, true);
            echo "\" />
                        <input type=\"hidden\" name=\"Status\" value=\"Enregistrer\" />
                        <div class=\"span4\"> <input type=\"submit\" value=\"Cancel\" class=\"btn btn-danger\" />  <input type=\"submit\" value=\"Enregistrer\" class=\"btn btn-primary\" />  </div>


                        ";
        }
        // line 196
        echo "     





                    </div>  

                </form> 

";
        // line 207
        echo "
                <form method=\"POST\" action=";
        // line 208
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
        // line 218
        if ((!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["Protocole"]) ? $context["Protocole"] : null), 0, array(), "array"), "Commentaire")))) {
            // line 219
            echo "                                            </br>
                                            ";
            // line 220
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Protocole"]) ? $context["Protocole"] : null), 0, array(), "array"), "Commentaire"), "html", null, true);
            echo " </br></br>  *****************************************************
                                          ";
        }
        // line 222
        echo "                                              
                                </textarea>
                            </div>


                            <div class=\"modal-footer\">
                                <button class=\"btn btn-danger\" data-dismiss=\"modal\" aria-hidden=\"true\">Annuler</button>
                                <button class=\"btn btn-primary\" type=\"submit\" >Validation</button></a>
                            </div>
                        </div>
                        <input type=\"hidden\" name=\"NumProtocole\" value=\"";
        // line 232
        echo twig_escape_filter($this->env, (isset($context["NumProtocole"]) ? $context["NumProtocole"] : null), "html", null, true);
        echo "\" />
                        <input type=\"hidden\" name=\"Status\" value=1 />  
                    </form>

";
        // line 237
        echo "
                    <form method=\"POST\" action=";
        // line 238
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
        // line 248
        if ((!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["Protocole"]) ? $context["Protocole"] : null), 0, array(), "array"), "Commentaire")))) {
            // line 249
            echo "                                            </br>
                                            ";
            // line 250
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Protocole"]) ? $context["Protocole"] : null), 0, array(), "array"), "Commentaire"), "html", null, true);
            echo " </br></br>  *****************************************************
                                          ";
        }
        // line 252
        echo "                                              
                                    </textarea>
                                </div>


                                <div class=\"modal-footer\">
                                    <button class=\"btn btn-danger\" data-dismiss=\"modal\" aria-hidden=\"true\">Annuler</button>
                                    <button class=\"btn btn-primary\" type=\"submit\" >Validation</button></a>
                                </div>
                            </div>
                            <input type=\"hidden\" name=\"NumProtocole\" value=\"";
        // line 262
        echo twig_escape_filter($this->env, (isset($context["NumProtocole"]) ? $context["NumProtocole"] : null), "html", null, true);
        echo "\" />
                            <input type=\"hidden\" name=\"Status\" value=1 />  
                        </form>

";
    }

    // line 267
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 268
        echo "                        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/CLEditor1_3_0/jquery.cleditor.css"), "html", null, true);
        echo "\" />
                        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap-editable/css/bootstrap-editable.css"), "html", null, true);
        echo "\" />


";
    }

    // line 273
    public function block_javascripts($context, array $blocks = array())
    {
        echo " 
                        <script type=\"text/javascript\" src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/CLEditor1_3_0/jquery.cleditor.min.js"), "html", null, true);
        echo "\"></script>
                        <script type=\"text/javascript\" src=\"";
        // line 275
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
        // line 291
        if (((isset($context["type"]) ? $context["type"] : null) == "UpdateAnalyse")) {
            // line 292
            echo "                                <script type=\"text/javascript\">
                                   ";
            // line 294
            echo "                                       \$('.username').editable({
                                           type: 'text',
                                           pk: 1,
                                           url: \"";
            // line 297
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_UpdateAnalyse"), "html", null, true);
            echo "\",
                                           title: 'Modification des resultats'
                                       });
                                    </script>
                    ";
        }
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
        return array (  732 => 297,  727 => 294,  724 => 292,  722 => 291,  703 => 275,  699 => 274,  694 => 273,  686 => 269,  681 => 268,  678 => 267,  669 => 262,  657 => 252,  652 => 250,  649 => 249,  647 => 248,  634 => 238,  631 => 237,  624 => 232,  612 => 222,  607 => 220,  604 => 219,  602 => 218,  589 => 208,  586 => 207,  574 => 196,  564 => 191,  562 => 190,  559 => 189,  542 => 185,  536 => 182,  531 => 179,  525 => 175,  509 => 172,  502 => 170,  498 => 168,  494 => 167,  491 => 166,  484 => 164,  480 => 162,  473 => 160,  461 => 158,  459 => 157,  456 => 156,  448 => 153,  445 => 152,  443 => 151,  436 => 149,  432 => 148,  428 => 147,  423 => 144,  406 => 143,  396 => 135,  387 => 133,  384 => 132,  380 => 131,  369 => 123,  365 => 122,  362 => 121,  357 => 118,  351 => 114,  346 => 112,  329 => 108,  322 => 106,  318 => 104,  314 => 103,  311 => 102,  304 => 100,  299 => 97,  280 => 93,  278 => 92,  275 => 91,  267 => 88,  264 => 87,  262 => 86,  255 => 84,  244 => 79,  240 => 77,  223 => 76,  190 => 59,  182 => 56,  175 => 52,  158 => 51,  152 => 48,  148 => 46,  134 => 45,  166 => 72,  150 => 67,  146 => 65,  115 => 40,  90 => 34,  80 => 26,  53 => 17,  49 => 10,  23 => 3,  243 => 81,  238 => 73,  234 => 68,  231 => 67,  214 => 69,  210 => 60,  203 => 55,  200 => 54,  195 => 8,  164 => 82,  145 => 69,  129 => 61,  124 => 49,  110 => 43,  107 => 42,  87 => 37,  52 => 12,  37 => 8,  56 => 18,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 81,  245 => 77,  230 => 75,  222 => 73,  220 => 62,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 57,  183 => 60,  177 => 58,  160 => 57,  149 => 51,  123 => 47,  120 => 43,  112 => 44,  106 => 36,  82 => 30,  65 => 16,  38 => 4,  155 => 58,  144 => 50,  141 => 54,  139 => 50,  135 => 47,  126 => 43,  109 => 47,  103 => 43,  101 => 42,  70 => 19,  67 => 20,  61 => 16,  47 => 14,  28 => 6,  105 => 24,  96 => 21,  93 => 36,  83 => 18,  76 => 24,  72 => 32,  68 => 22,  50 => 9,  94 => 39,  88 => 27,  79 => 25,  59 => 22,  43 => 6,  32 => 2,  225 => 96,  216 => 90,  212 => 88,  205 => 68,  201 => 67,  196 => 80,  194 => 62,  191 => 78,  189 => 7,  186 => 76,  180 => 55,  172 => 76,  163 => 63,  159 => 61,  154 => 68,  147 => 55,  132 => 48,  127 => 49,  121 => 55,  118 => 41,  114 => 42,  104 => 35,  100 => 33,  78 => 24,  75 => 23,  71 => 22,  63 => 20,  58 => 14,  34 => 5,  91 => 38,  84 => 31,  74 => 23,  66 => 21,  55 => 15,  41 => 5,  46 => 7,  26 => 2,  22 => 3,  27 => 4,  24 => 4,  29 => 2,  21 => 1,  44 => 13,  35 => 4,  31 => 4,  25 => 3,  19 => 2,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 81,  157 => 56,  153 => 74,  151 => 73,  143 => 67,  138 => 63,  136 => 50,  133 => 43,  130 => 47,  122 => 44,  119 => 36,  116 => 46,  111 => 32,  108 => 31,  102 => 30,  98 => 39,  95 => 39,  92 => 30,  89 => 19,  85 => 29,  81 => 36,  73 => 19,  64 => 23,  60 => 19,  57 => 18,  54 => 12,  51 => 13,  48 => 11,  45 => 9,  42 => 12,  39 => 11,  36 => 6,  33 => 8,  30 => 7,);
    }
}
