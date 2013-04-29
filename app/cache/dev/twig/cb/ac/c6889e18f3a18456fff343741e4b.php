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
        echo "
";
        // line 6
        if ((($this->getAttribute((isset($context["Role"]) ? $context["Role"] : $this->getContext($context, "Role")), 0, array(), "array") == "ROLE_UTILISATEUR") || ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "UpdateAnalyse"))) {
            // line 7
            echo "    ";
            if (($this->getAttribute($this->getAttribute((isset($context["Protocole"]) ? $context["Protocole"] : $this->getContext($context, "Protocole")), 0, array(), "array"), "Validation") != 2)) {
                // line 8
                echo "<div class=\"well\" >
    <a  role=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" href=\"#validation\" >Demande de validation</a>
</div>
";
            }
            // line 12
            echo "    ";
        }
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        // line 19
        echo "
<ul class=\"nav nav-tabs\" id=\"myTab\">

    ";
        // line 22
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
            // line 23
            echo "    ";
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") == 1)) {
                // line 24
                echo "    <li class=\"active\"><a href=\"#";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), "html", null, true);
                echo "</a></li>
     ";
            } else {
                // line 26
                echo "        <li ><a href=\"#";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), "html", null, true);
                echo "</a></li>
    ";
            }
            // line 28
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
        // line 29
        echo "
        </ul>
        <form action=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_CudAnalyse"), "html", null, true);
        echo "\" method=\"POST\" >

            <div class=\"tab-content\">

  ";
        // line 35
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
            // line 36
            echo "
 ";
            // line 37
            $context["size"] = twig_length_filter($this->env, $this->getAttribute((isset($context["ResultatCodeLabo"]) ? $context["ResultatCodeLabo"] : $this->getContext($context, "ResultatCodeLabo")), $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), array(), "array"));
            echo "    



    ";
            // line 41
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") == 1)) {
                // line 42
                echo "
                <div class=\"tab-pane active\" id=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), "html", null, true);
                echo "\" >




               ";
                // line 48
                if ((twig_length_filter($this->env, (isset($context["Resultat"]) ? $context["Resultat"] : $this->getContext($context, "Resultat"))) != 0)) {
                    echo "  

";
                    // line 50
                    if ((twig_length_filter($this->env, $this->getAttribute((isset($context["ResultatCodeLabo"]) ? $context["ResultatCodeLabo"] : $this->getContext($context, "ResultatCodeLabo")), $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), array(), "array")) != 0)) {
                        echo "  


                    <table class=\"table table-striped\" >
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
                            echo "                                 ";
                            if (($this->getAttribute((isset($context["Champ"]) ? $context["Champ"] : $this->getContext($context, "Champ")), "ChampCalcule") != 1)) {
                                // line 61
                                echo "                                <th>";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Champ"]) ? $context["Champ"] : $this->getContext($context, "Champ")), "Champ"), "html", null, true);
                                echo "</th>
                                 ";
                            }
                            // line 63
                            echo "
                     ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Champ'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 64
                        echo " 


                                </tr>
                            </thead>
                            <tbody>

                                  ";
                        // line 72
                        echo "



                                          ";
                        // line 76
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), ("Champs" . $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"))));
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
                        foreach ($context['_seq'] as $context["keys"] => $context["formulaire"]) {
                            echo "  

 ";
                            // line 80
                            echo "


                                <tr>  
                                    <td>";
                            // line 84
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                            echo "</td>    


                                    <td> ";
                            // line 87
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ResultatCodeLabo"]) ? $context["ResultatCodeLabo"] : $this->getContext($context, "ResultatCodeLabo")), $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), array(), "array"), (isset($context["keys"]) ? $context["keys"] : $this->getContext($context, "keys")), array(), "array"), "html", null, true);
                            echo " </td>  


                                         ";
                            // line 90
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Champs"]) ? $context["Champs"] : $this->getContext($context, "Champs")), $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), array(), "array"));
                            foreach ($context['_seq'] as $context["_key"] => $context["Champ"]) {
                                // line 91
                                echo "
                                         ";
                                // line 92
                                if (($this->getAttribute((isset($context["Champ"]) ? $context["Champ"] : $this->getContext($context, "Champ")), "ChampCalcule") != 1)) {
                                    // line 93
                                    echo "                                    <td>";
                                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), $this->getAttribute((isset($context["Champ"]) ? $context["Champ"] : $this->getContext($context, "Champ")), "Champ")), 'widget');
                                    echo "</td>  
                                        ";
                                    // line 94
                                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), $this->getAttribute((isset($context["Champ"]) ? $context["Champ"] : $this->getContext($context, "Champ")), "Champ")), 'errors');
                                    echo "
                                        ";
                                }
                                // line 96
                                echo "                                       ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Champ'], $context['_parent'], $context['loop']);
                            $context = array_merge($_parent, array_intersect_key($context, $_parent));
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
                        unset($context['_seq'], $context['_iterated'], $context['keys'], $context['formulaire'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 100
                        echo "     

                            </tbody>
                        </table>   

                     ";
                        // line 105
                        if ((twig_length_filter($this->env, (isset($context["Resultat"]) ? $context["Resultat"] : $this->getContext($context, "Resultat"))) > 0)) {
                            // line 106
                            echo "                        <input type=\"hidden\" name=\"NumProtocole\" value=\"";
                            echo twig_escape_filter($this->env, (isset($context["NumProtocole"]) ? $context["NumProtocole"] : $this->getContext($context, "NumProtocole")), "html", null, true);
                            echo "\" />
                        <input type=\"hidden\" name=\"demande\" value=\"";
                            // line 107
                            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
                            echo "\" />
                        <input type=\"hidden\" name=\"Save\" value=\"Save\" />
                        <div class=\"span4\"> <input type=\"submit\" value=\"Cancel\" class=\"btn btn-danger\" />  <input type=\"submit\" value=\"Enregistrer\" class=\"btn btn-primary\" />  </div>


               ";
                        }
                        // line 112
                        echo "  

        ";
                    } else {
                        // line 115
                        echo "                        <h3><p class=\"text-center text-error \">Toute les analyses ont été faite</p> </h3>         
        ";
                    }
                    // line 117
                    echo "
        ";
                } elseif ((twig_length_filter($this->env, (isset($context["Resultat"]) ? $context["Resultat"] : $this->getContext($context, "Resultat"))) == 0)) {
                    // line 118
                    echo "       




                        <h3><p class=\"text-center text-error \">En attente du listing de Code Labo</p> </h3>




        ";
                }
                // line 129
                echo "
                    </div>

        ";
            } else {
                // line 133
                echo "
                    <div class=\"tab-pane \" id=\"";
                // line 134
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), "html", null, true);
                echo "\" >


               ";
                // line 137
                if ((twig_length_filter($this->env, (isset($context["Resultat"]) ? $context["Resultat"] : $this->getContext($context, "Resultat"))) > 0)) {
                    echo "  

";
                    // line 139
                    if ((twig_length_filter($this->env, $this->getAttribute((isset($context["ResultatCodeLabo"]) ? $context["ResultatCodeLabo"] : $this->getContext($context, "ResultatCodeLabo")), $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), array(), "array")) != 0)) {
                        echo " 
                        <table class=\"table table-striped\" >
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>CodeLabo</th>

                     ";
                        // line 146
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Champs"]) ? $context["Champs"] : $this->getContext($context, "Champs")), $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), array(), "array"));
                        foreach ($context['_seq'] as $context["_key"] => $context["Champ"]) {
                            // line 147
                            echo "
                                    <th>";
                            // line 148
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Champ"]) ? $context["Champ"] : $this->getContext($context, "Champ")), "Champ"), "html", null, true);
                            echo "</th>

                     ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Champ'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 150
                        echo " 


                                </tr>
                            </thead>
                            <tbody>





                                          ";
                        // line 161
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), ("Champs" . $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"))));
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
                        foreach ($context['_seq'] as $context["keys"] => $context["formulaire"]) {
                            echo "   
                                <tr>  
                                    <td>";
                            // line 163
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                            echo "</td>
                                    <td> ";
                            // line 164
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ResultatCodeLabo"]) ? $context["ResultatCodeLabo"] : $this->getContext($context, "ResultatCodeLabo")), $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), array(), "array"), (isset($context["keys"]) ? $context["keys"] : $this->getContext($context, "keys")), array(), "array"), "html", null, true);
                            echo " </td>  



                                         ";
                            // line 168
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Champs"]) ? $context["Champs"] : $this->getContext($context, "Champs")), $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), array(), "array"));
                            foreach ($context['_seq'] as $context["_key"] => $context["Champ"]) {
                                // line 169
                                echo "                                             ";
                                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), $this->getAttribute((isset($context["Champ"]) ? $context["Champ"] : $this->getContext($context, "Champ")), "Champ")), 'errors');
                                echo "

                                    <td>";
                                // line 171
                                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), $this->getAttribute((isset($context["Champ"]) ? $context["Champ"] : $this->getContext($context, "Champ")), "Champ")), 'widget');
                                echo "</td>  


                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Champ'], $context['_parent'], $context['loop']);
                            $context = array_merge($_parent, array_intersect_key($context, $_parent));
                            // line 174
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
                        unset($context['_seq'], $context['_iterated'], $context['keys'], $context['formulaire'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 178
                        echo "     

                            </tbody>
                        </table> 

                         ";
                        // line 183
                        if ((twig_length_filter($this->env, (isset($context["Resultat"]) ? $context["Resultat"] : $this->getContext($context, "Resultat"))) > 0)) {
                            // line 184
                            echo "                        <input type=\"hidden\" name=\"numProtocole\" value=\"";
                            echo twig_escape_filter($this->env, (isset($context["NumProtocole"]) ? $context["NumProtocole"] : $this->getContext($context, "NumProtocole")), "html", null, true);
                            echo "\" />
                        <input type=\"hidden\" name=\"demande\" value=\"";
                            // line 185
                            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
                            echo "\" />
                        <input type=\"hidden\" name=\"Save\" value=\"Save\" />

                        <div class=\"span4\"> <input type=\"submit\" value=\"Cancel\" class=\"btn btn-danger\" />  <input type=\"submit\" value=\"Enregistrer\" class=\"btn btn-primary\" />  </div>


               ";
                        }
                        // line 191
                        echo "  

                         ";
                    } else {
                        // line 194
                        echo "                        <h3><p class=\"text-center text-error \">Toute les analyses ont été faite</p> </h3>         
        ";
                    }
                    // line 196
                    echo "       ";
                } elseif ((twig_length_filter($this->env, (isset($context["Resultat"]) ? $context["Resultat"] : $this->getContext($context, "Resultat"))) == 0)) {
                    echo "         
                        <h3><p class=\"text-center text-error \">En attente du listing de Code Labo</p> </h3>
                    </div>
        ";
                }
                // line 200
                echo "


                </div>


";
            }
            // line 206
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
        // line 210
        echo "



";
        // line 214
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "



            </form> 

";
        // line 221
        echo "
            <form method=\"POST\" action=";
        // line 222
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
        // line 232
        if ((!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["Protocole"]) ? $context["Protocole"] : $this->getContext($context, "Protocole")), 0, array(), "array"), "Commentaire")))) {
            // line 233
            echo "                                            </br>
                                            ";
            // line 234
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Protocole"]) ? $context["Protocole"] : $this->getContext($context, "Protocole")), 0, array(), "array"), "Commentaire"), "html", null, true);
            echo " </br></br>  *****************************************************
                                          ";
        }
        // line 236
        echo "                                              
                            </textarea>
                        </div>


                        <div class=\"modal-footer\">
                            <button class=\"btn btn-danger\" data-dismiss=\"modal\" aria-hidden=\"true\">Annuler</button>
                            <button class=\"btn btn-primary\" type=\"submit\" >Validation</button></a>
                        </div>
                    </div>
                    <input type=\"hidden\" name=\"NumProtocole\" value=\"";
        // line 246
        echo twig_escape_filter($this->env, (isset($context["NumProtocole"]) ? $context["NumProtocole"] : $this->getContext($context, "NumProtocole")), "html", null, true);
        echo "\" />
                    <input type=\"hidden\" name=\"Status\" value=1 />  
                </form>

";
        // line 251
        echo "
                <form method=\"POST\" action=";
        // line 252
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
        // line 262
        if ((!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["Protocole"]) ? $context["Protocole"] : $this->getContext($context, "Protocole")), 0, array(), "array"), "Commentaire")))) {
            // line 263
            echo "                                            </br>
                                            ";
            // line 264
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Protocole"]) ? $context["Protocole"] : $this->getContext($context, "Protocole")), 0, array(), "array"), "Commentaire"), "html", null, true);
            echo " </br></br>  *****************************************************
                                          ";
        }
        // line 266
        echo "                                              
                                </textarea>
                            </div>


                            <div class=\"modal-footer\">
                                <button class=\"btn btn-danger\" data-dismiss=\"modal\" aria-hidden=\"true\">Annuler</button>
                                <button class=\"btn btn-primary\" type=\"submit\" >Validation</button></a>
                            </div>
                        </div>
                        <input type=\"hidden\" name=\"NumProtocole\" value=\"";
        // line 276
        echo twig_escape_filter($this->env, (isset($context["NumProtocole"]) ? $context["NumProtocole"] : $this->getContext($context, "NumProtocole")), "html", null, true);
        echo "\" />
                        <input type=\"hidden\" name=\"Status\" value=1 />  
                    </form>

";
    }

    // line 281
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 282
        echo "                    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/CLEditor1_3_0/jquery.cleditor.css"), "html", null, true);
        echo "\" />
                    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap-editable/css/bootstrap-editable.css"), "html", null, true);
        echo "\" />


";
    }

    // line 287
    public function block_javascripts($context, array $blocks = array())
    {
        echo " 
                    <script type=\"text/javascript\" src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/CLEditor1_3_0/jquery.cleditor.min.js"), "html", null, true);
        echo "\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 289
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
        // line 319
        echo "   
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
        return array (  698 => 319,  677 => 289,  673 => 288,  668 => 287,  660 => 283,  655 => 282,  652 => 281,  643 => 276,  631 => 266,  626 => 264,  623 => 263,  621 => 262,  608 => 252,  605 => 251,  598 => 246,  586 => 236,  581 => 234,  578 => 233,  576 => 232,  563 => 222,  560 => 221,  551 => 214,  545 => 210,  528 => 206,  519 => 200,  511 => 196,  507 => 194,  502 => 191,  492 => 185,  487 => 184,  485 => 183,  478 => 178,  460 => 174,  450 => 171,  444 => 169,  440 => 168,  433 => 164,  429 => 163,  409 => 161,  396 => 150,  387 => 148,  384 => 147,  380 => 146,  370 => 139,  365 => 137,  359 => 134,  356 => 133,  350 => 129,  337 => 118,  333 => 117,  329 => 115,  324 => 112,  315 => 107,  310 => 106,  308 => 105,  278 => 96,  266 => 92,  259 => 90,  253 => 87,  247 => 84,  221 => 76,  206 => 64,  199 => 63,  193 => 61,  190 => 60,  174 => 50,  169 => 48,  161 => 43,  158 => 42,  156 => 41,  146 => 36,  170 => 76,  148 => 67,  113 => 51,  99 => 42,  90 => 29,  53 => 17,  49 => 8,  77 => 33,  23 => 3,  255 => 86,  250 => 77,  243 => 75,  241 => 80,  238 => 73,  234 => 68,  231 => 67,  214 => 61,  210 => 60,  203 => 55,  200 => 54,  195 => 8,  164 => 72,  129 => 35,  124 => 49,  110 => 43,  107 => 47,  87 => 28,  56 => 18,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 94,  270 => 84,  268 => 93,  263 => 91,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 62,  215 => 72,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  112 => 44,  82 => 36,  65 => 17,  38 => 4,  144 => 65,  141 => 54,  135 => 47,  126 => 45,  109 => 37,  103 => 34,  67 => 19,  61 => 22,  47 => 14,  28 => 6,  105 => 24,  93 => 20,  76 => 22,  72 => 23,  68 => 22,  94 => 39,  88 => 24,  79 => 23,  59 => 22,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 7,  186 => 59,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 61,  121 => 45,  118 => 29,  114 => 42,  104 => 28,  100 => 33,  78 => 24,  75 => 23,  71 => 19,  58 => 12,  34 => 5,  91 => 20,  84 => 31,  26 => 11,  27 => 4,  24 => 4,  21 => 1,  44 => 6,  31 => 4,  25 => 1,  19 => 2,  70 => 19,  63 => 19,  46 => 7,  22 => 3,  163 => 63,  155 => 58,  152 => 68,  149 => 37,  145 => 69,  139 => 50,  131 => 42,  123 => 47,  120 => 43,  115 => 40,  106 => 36,  101 => 43,  96 => 26,  83 => 26,  80 => 26,  74 => 24,  66 => 21,  55 => 12,  52 => 12,  50 => 8,  43 => 7,  41 => 5,  37 => 8,  35 => 4,  32 => 2,  29 => 2,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 86,  157 => 56,  153 => 79,  151 => 73,  143 => 67,  138 => 53,  136 => 63,  133 => 43,  130 => 47,  122 => 31,  119 => 55,  116 => 46,  111 => 38,  108 => 37,  102 => 30,  98 => 22,  95 => 31,  92 => 39,  89 => 19,  85 => 23,  81 => 40,  73 => 32,  64 => 23,  60 => 17,  57 => 18,  54 => 10,  51 => 13,  48 => 11,  45 => 8,  42 => 12,  39 => 11,  36 => 6,  33 => 8,  30 => 7,);
    }
}
