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
        // line 30
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
            // line 31
            echo "    ";
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") == 1)) {
                // line 32
                echo "    <li class=\"active\"><a href=\"#";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), "html", null, true);
                echo "</a></li>
     ";
            } else {
                // line 34
                echo "        <li ><a href=\"#";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), "html", null, true);
                echo "</a></li>
    ";
            }
            // line 36
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
        // line 37
        echo "
        </ul>
        <form action=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_CreateAnalyse"), "html", null, true);
        echo "\" method=\"POST\" >
            <div class=\"tab-content\">

  ";
        // line 42
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
            // line 43
            echo "
    ";
            // line 44
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") == 1)) {
                // line 45
                echo "
                <div class=\"tab-pane active\" id=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), "html", null, true);
                echo "\" >
                    <table class=\"table table-striped\" >
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>CodeLabo</th>

                     ";
                // line 53
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Champs"]) ? $context["Champs"] : $this->getContext($context, "Champs")), $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["Champ"]) {
                    // line 54
                    echo "                                <th>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Champ"]) ? $context["Champ"] : $this->getContext($context, "Champ")), "Champ"), "html", null, true);
                    echo "</th>
                     ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Champ'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 55
                echo " 
                                    <th>Fait par</th>

                                </tr>
                            </thead>
                            <tbody>

        ";
                // line 62
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
                    // line 63
                    echo "
                                <tr>  
                                    <td>";
                    // line 65
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                    echo "</td>    

                                    <td> ";
                    // line 67
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), "CodeLabo"), "CodeLabo"), "html", null, true);
                    echo " </td>


                               ";
                    // line 70
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Champs"]) ? $context["Champs"] : $this->getContext($context, "Champs")), $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), array(), "array"));
                    foreach ($context['_seq'] as $context["_key"] => $context["Champ"]) {
                        echo "    

                                    ";
                        // line 72
                        if (twig_test_empty($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), "User"))) {
                            // line 73
                            echo "
                                    <td><input type=\"text\" name=\"";
                            // line 74
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Champ"]) ? $context["Champ"] : $this->getContext($context, "Champ")), "Champ"), "html", null, true);
                            echo "[";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), "CodeLabo"), "CodeLabo"), "html", null, true);
                            echo "]\" class=\"span7\"  /></td>

                                    ";
                        } else {
                            // line 77
                            echo "
                                    <td>";
                            // line 78
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), $this->getAttribute((isset($context["Champ"]) ? $context["Champ"] : $this->getContext($context, "Champ")), "Champ")), "html", null, true);
                            echo "</td>

                                    ";
                        }
                        // line 81
                        echo "
                               ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Champ'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 83
                    echo "                                         ";
                    if (twig_test_empty($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), "User"))) {
                        // line 84
                        echo "
                                         ";
                    } else {
                        // line 85
                        echo " 

                                    <td> ";
                        // line 87
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), "User"), "Nom"), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), "User"), "Prenom"), "html", null, true);
                        echo "</td>
                                         ";
                    }
                    // line 89
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
                // line 93
                echo "                            </tbody>
                        </table>

                    </div>

        ";
            } else {
                // line 99
                echo "
                    <div class=\"tab-pane\" id=\"";
                // line 100
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), "html", null, true);
                echo "\" >

                        <table class=\"table table-striped\" >
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>CodeLabo</th>

                                  ";
                // line 108
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Champs"]) ? $context["Champs"] : $this->getContext($context, "Champs")), $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["Champ"]) {
                    // line 109
                    echo "
                                    <th>";
                    // line 110
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Champ"]) ? $context["Champ"] : $this->getContext($context, "Champ")), "Champ"), "html", null, true);
                    echo "</th>

                                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Champ'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 112
                echo " 

                                    <th>Fait par</th>

                                </tr>
                            </thead>
                            <tbody>

        ";
                // line 120
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
                    // line 121
                    echo "
                                <tr>  
                                    <td>";
                    // line 123
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                    echo "</td>    
                                    <td> ";
                    // line 124
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), "CodeLabo"), "CodeLabo"), "html", null, true);
                    echo " </td>
                                    ";
                    // line 125
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Champs"]) ? $context["Champs"] : $this->getContext($context, "Champs")), $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), array(), "array"));
                    foreach ($context['_seq'] as $context["_key"] => $context["Champ"]) {
                        echo "    

                                    ";
                        // line 127
                        if (twig_test_empty($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), "User"))) {
                            // line 128
                            echo "
                                    <td><input type=\"text\" name=\"";
                            // line 129
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Champ"]) ? $context["Champ"] : $this->getContext($context, "Champ")), "Champ"), "html", null, true);
                            echo "[";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), "CodeLabo"), "CodeLabo"), "html", null, true);
                            echo "]\" class=\"span7\" /></td>

                                    ";
                        } else {
                            // line 132
                            echo "
                                    <td>";
                            // line 133
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), $this->getAttribute((isset($context["Champ"]) ? $context["Champ"] : $this->getContext($context, "Champ")), "Champ")), "html", null, true);
                            echo "</td>

                                    ";
                        }
                        // line 136
                        echo "
                               ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Champ'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 138
                    echo "                                  ";
                    if (twig_test_empty($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), "User"))) {
                        // line 139
                        echo "                                    <td></td>
                                         ";
                    } else {
                        // line 140
                        echo " 

                                    <td>";
                        // line 142
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), "User"), "Nom"), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), "User"), "Prenom"), "html", null, true);
                        echo "</td>
                                         ";
                    }
                    // line 144
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
                // line 147
                echo "                            </tbody>

                        </table>

                    </div>


";
            }
            // line 154
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
        // line 158
        echo "
                ";
        // line 159
        if (($this->getAttribute($this->getAttribute((isset($context["validation"]) ? $context["validation"] : $this->getContext($context, "validation")), 0, array(), "array"), "Validation") == 0)) {
            // line 160
            echo "                    <input type=\"hidden\" name=\"NumProtocole\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["NumProtocole"]) ? $context["NumProtocole"] : $this->getContext($context, "NumProtocole")), "html", null, true);
            echo "\" />
                    <input type=\"hidden\" name=\"Status\" value=\"Enregistrer\" />
                    <div class=\"span4\"><input type=\"submit\" value=\"Enregistrer\" class=\"btn btn-primary\" />   <input type=\"submit\" value=\"Cancel\" class=\"btn btn-danger\" /></div>
                    <div class=\"span1 offset6\"> 
                        <a href=\"#validation\" role=\"button\" class=\"btn btn-success\" data-toggle=\"modal\">Valider </a></div>   

                        ";
        }
        // line 167
        echo "



                </div>  

            </form> 

";
        // line 176
        echo "
            <form method=\"POST\" action=";
        // line 177
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
        // line 195
        echo twig_escape_filter($this->env, (isset($context["NumProtocole"]) ? $context["NumProtocole"] : $this->getContext($context, "NumProtocole")), "html", null, true);
        echo "\" />
                <input type=\"hidden\" name=\"Status\" value=1 />  
            </form>

";
        // line 200
        echo "
            <form method=\"POST\" action=";
        // line 201
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
        // line 219
        echo twig_escape_filter($this->env, (isset($context["NumProtocole"]) ? $context["NumProtocole"] : $this->getContext($context, "NumProtocole")), "html", null, true);
        echo "\" />
                <input type=\"hidden\" name=\"Status\" value=3 />  
            </form>

";
    }

    // line 224
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 225
        echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/CLEditor1_3_0/jquery.cleditor.css"), "html", null, true);
        echo "\" />
";
    }

    // line 227
    public function block_javascripts($context, array $blocks = array())
    {
        echo " 
            <script type=\"text/javascript\" src=\"";
        // line 228
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
        return array (  579 => 228,  574 => 227,  567 => 225,  564 => 224,  555 => 219,  534 => 201,  531 => 200,  524 => 195,  503 => 177,  500 => 176,  490 => 167,  479 => 160,  477 => 159,  474 => 158,  457 => 154,  447 => 147,  431 => 144,  424 => 142,  420 => 140,  416 => 139,  413 => 138,  406 => 136,  400 => 133,  397 => 132,  389 => 129,  386 => 128,  384 => 127,  377 => 125,  373 => 124,  369 => 123,  365 => 121,  348 => 120,  338 => 112,  329 => 110,  326 => 109,  322 => 108,  311 => 100,  308 => 99,  300 => 93,  283 => 89,  272 => 85,  265 => 83,  258 => 81,  252 => 78,  241 => 74,  236 => 72,  229 => 70,  223 => 67,  218 => 65,  197 => 62,  188 => 55,  179 => 54,  175 => 53,  140 => 42,  134 => 39,  97 => 31,  166 => 72,  150 => 67,  146 => 65,  90 => 29,  53 => 17,  49 => 10,  23 => 3,  243 => 81,  238 => 73,  234 => 68,  231 => 67,  214 => 63,  210 => 60,  203 => 55,  200 => 54,  195 => 8,  164 => 82,  129 => 61,  124 => 49,  110 => 43,  107 => 42,  87 => 37,  56 => 18,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 87,  273 => 85,  270 => 84,  268 => 84,  263 => 80,  249 => 77,  245 => 77,  230 => 75,  222 => 73,  220 => 62,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 44,  112 => 44,  82 => 30,  65 => 16,  38 => 4,  144 => 50,  141 => 54,  135 => 47,  126 => 45,  109 => 47,  103 => 43,  67 => 19,  61 => 16,  47 => 14,  28 => 6,  105 => 24,  93 => 20,  76 => 33,  72 => 32,  68 => 22,  94 => 39,  88 => 27,  79 => 23,  59 => 22,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 7,  186 => 76,  180 => 72,  172 => 76,  159 => 61,  154 => 68,  147 => 55,  132 => 48,  127 => 49,  121 => 55,  118 => 44,  114 => 42,  104 => 35,  100 => 32,  78 => 24,  75 => 23,  71 => 24,  58 => 13,  34 => 5,  91 => 38,  84 => 31,  26 => 2,  27 => 4,  24 => 4,  21 => 1,  44 => 13,  31 => 4,  25 => 3,  19 => 2,  70 => 19,  63 => 20,  46 => 7,  22 => 3,  163 => 63,  155 => 58,  152 => 49,  149 => 51,  145 => 69,  139 => 50,  131 => 42,  123 => 47,  120 => 43,  115 => 51,  106 => 36,  101 => 42,  96 => 21,  83 => 18,  80 => 30,  74 => 26,  66 => 19,  55 => 15,  52 => 12,  50 => 9,  43 => 6,  41 => 5,  37 => 8,  35 => 4,  32 => 2,  29 => 2,  184 => 70,  178 => 71,  171 => 62,  165 => 46,  162 => 45,  157 => 43,  153 => 74,  151 => 73,  143 => 67,  138 => 63,  136 => 50,  133 => 43,  130 => 37,  122 => 44,  119 => 36,  116 => 36,  111 => 38,  108 => 34,  102 => 30,  98 => 22,  95 => 39,  92 => 30,  89 => 19,  85 => 24,  81 => 36,  73 => 19,  64 => 23,  60 => 19,  57 => 13,  54 => 12,  51 => 13,  48 => 11,  45 => 9,  42 => 12,  39 => 11,  36 => 6,  33 => 8,  30 => 7,);
    }
}
