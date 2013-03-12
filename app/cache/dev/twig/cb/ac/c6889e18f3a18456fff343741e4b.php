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
            echo "<div class=\"well\" >

    <form method=\"POST\" action=";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_ValidAnalyse"), "html", null, true);
            echo " >

        <button class=\"btn btn-primary\" type=\"submit\" >Valider les résultats</button>
        <input type=\"hidden\" name=\"NumProtocole\" value=\"";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["NumProtocole"]) ? $context["NumProtocole"] : $this->getContext($context, "NumProtocole")), "html", null, true);
            echo "\" />
        <input type=\"hidden\" name=\"Status\" value=2 />  
    </form>



</div>";
        }
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        // line 24
        echo "

<ul class=\"nav nav-tabs\" id=\"myTab\">

    ";
        // line 28
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
            // line 29
            echo "    ";
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") == 1)) {
                // line 30
                echo "    <li class=\"active\"><a href=\"#";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), "html", null, true);
                echo "</a></li>
     ";
            } else {
                // line 32
                echo "        <li ><a href=\"#";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), "html", null, true);
                echo "</a></li>
    ";
            }
            // line 34
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
        // line 35
        echo "
        </ul>
        <form action=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_CreateAnalyse"), "html", null, true);
        echo "\" method=\"POST\" >
            <div class=\"tab-content\">

  ";
        // line 40
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
            // line 41
            echo "
    ";
            // line 42
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") == 1)) {
                // line 43
                echo "
                <div class=\"tab-pane active\" id=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), "html", null, true);
                echo "\" >
                    <table class=\"table table-striped\" >
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>CodeLabo</th>

                     ";
                // line 51
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Champs"]) ? $context["Champs"] : $this->getContext($context, "Champs")), $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["Champ"]) {
                    // line 52
                    echo "                                <th>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Champ"]) ? $context["Champ"] : $this->getContext($context, "Champ")), "Champ"), "html", null, true);
                    echo "</th>
                     ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Champ'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 53
                echo " 
                                    <th>Fait par</th>

                                </tr>
                            </thead>
                            <tbody>

        ";
                // line 60
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
                    // line 61
                    echo "
                                <tr>  
                                    <td>";
                    // line 63
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                    echo "</td>    

                                    <td> ";
                    // line 65
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), "CodeLabo"), "CodeLabo"), "html", null, true);
                    echo " </td>


                               ";
                    // line 68
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Champs"]) ? $context["Champs"] : $this->getContext($context, "Champs")), $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), array(), "array"));
                    foreach ($context['_seq'] as $context["_key"] => $context["Champ"]) {
                        echo "    

                                    ";
                        // line 70
                        if (twig_test_empty($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), "User"))) {
                            // line 71
                            echo "
                                    <td><input type=\"text\" name=\"";
                            // line 72
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Champ"]) ? $context["Champ"] : $this->getContext($context, "Champ")), "Champ"), "html", null, true);
                            echo "[";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), "CodeLabo"), "CodeLabo"), "html", null, true);
                            echo "]\" class=\"span7\"  /></td>

                                    ";
                        } else {
                            // line 75
                            echo "
                                    <td>";
                            // line 76
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), $this->getAttribute((isset($context["Champ"]) ? $context["Champ"] : $this->getContext($context, "Champ")), "Champ")), "html", null, true);
                            echo "</td>

                                    ";
                        }
                        // line 79
                        echo "
                               ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Champ'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 81
                    echo "                                         ";
                    if (twig_test_empty($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), "User"))) {
                        // line 82
                        echo "
                                         ";
                    } else {
                        // line 83
                        echo " 

                                    <td> ";
                        // line 85
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), "User"), "Nom"), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), "User"), "Prenom"), "html", null, true);
                        echo "</td>
                                         ";
                    }
                    // line 87
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
                // line 91
                echo "                            </tbody>
                        </table>

                    </div>

        ";
            } else {
                // line 97
                echo "
                    <div class=\"tab-pane\" id=\"";
                // line 98
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), "html", null, true);
                echo "\" >

                        <table class=\"table table-striped\" >
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>CodeLabo</th>

                     ";
                // line 106
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Champs"]) ? $context["Champs"] : $this->getContext($context, "Champs")), $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["Champ"]) {
                    // line 107
                    echo "                                    <th>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Champ"]) ? $context["Champ"] : $this->getContext($context, "Champ")), "Champ"), "html", null, true);
                    echo "</th>
                     ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Champ'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 108
                echo " 
                                        <th>Fait par</th>

                                    </tr>
                                </thead>
                                <tbody>

        ";
                // line 115
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
                    // line 116
                    echo "
                                    <tr>  
                                        <td>";
                    // line 118
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                    echo "</td>    
                                        <td> ";
                    // line 119
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), "CodeLabo"), "CodeLabo"), "html", null, true);
                    echo " </td>
                                    ";
                    // line 120
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Champs"]) ? $context["Champs"] : $this->getContext($context, "Champs")), $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), array(), "array"));
                    foreach ($context['_seq'] as $context["_key"] => $context["Champ"]) {
                        echo "    

                                    ";
                        // line 122
                        if (twig_test_empty($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), "User"))) {
                            // line 123
                            echo "
                                        <td><input type=\"text\" name=\"";
                            // line 124
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Champ"]) ? $context["Champ"] : $this->getContext($context, "Champ")), "Champ"), "html", null, true);
                            echo "[";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), "CodeLabo"), "CodeLabo"), "html", null, true);
                            echo "]\" class=\"span7\" /></td>

                                    ";
                        } else {
                            // line 127
                            echo "
                                        <td>";
                            // line 128
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), $this->getAttribute((isset($context["Champ"]) ? $context["Champ"] : $this->getContext($context, "Champ")), "Champ")), "html", null, true);
                            echo "</td>

                                    ";
                        }
                        // line 131
                        echo "
                               ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Champ'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 133
                    echo "                                  ";
                    if (twig_test_empty($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), "User"))) {
                        // line 134
                        echo "                                        <td></td>
                                         ";
                    } else {
                        // line 135
                        echo " 

                                        <td>";
                        // line 137
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), "User"), "Nom"), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), "User"), "Prenom"), "html", null, true);
                        echo "</td>
                                         ";
                    }
                    // line 139
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
                // line 142
                echo "                                </tbody>

                            </table>

                        </div>


";
            }
            // line 149
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
        // line 153
        echo "
                ";
        // line 154
        if (($this->getAttribute($this->getAttribute((isset($context["validation"]) ? $context["validation"] : $this->getContext($context, "validation")), 0, array(), "array"), "Validation") == 0)) {
            // line 155
            echo "                        <input type=\"hidden\" name=\"NumProtocole\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["NumProtocole"]) ? $context["NumProtocole"] : $this->getContext($context, "NumProtocole")), "html", null, true);
            echo "\" />
                        <input type=\"hidden\" name=\"Status\" value=\"Enregistrer\" />
                        <div class=\"span4\"><input type=\"submit\" value=\"Enregistrer\" class=\"btn btn-primary\" />   <input type=\"submit\" value=\"Cancel\" class=\"btn btn-danger\" /></div>
                        <div class=\"span1 offset6\"> 
                            <a href=\"#validation\" role=\"button\" class=\"btn btn-success\" data-toggle=\"modal\">Valider </a></div>   

                        ";
        }
        // line 162
        echo "



                    </div>  

                </form> 

";
        // line 171
        echo "                <form method=\"POST\" action=";
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
        // line 189
        echo twig_escape_filter($this->env, (isset($context["NumProtocole"]) ? $context["NumProtocole"] : $this->getContext($context, "NumProtocole")), "html", null, true);
        echo "\" />
                    <input type=\"hidden\" name=\"Status\" value=1 />  
                </form>
";
    }

    // line 193
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 194
        echo "                <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/CLEditor1_3_0/jquery.cleditor.css"), "html", null, true);
        echo "\" />
";
    }

    // line 196
    public function block_javascripts($context, array $blocks = array())
    {
        echo " 
                <script type=\"text/javascript\" src=\"";
        // line 197
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
        return array (  535 => 197,  530 => 196,  523 => 194,  520 => 193,  512 => 189,  490 => 171,  480 => 162,  469 => 155,  467 => 154,  464 => 153,  447 => 149,  437 => 142,  421 => 139,  414 => 137,  410 => 135,  406 => 134,  403 => 133,  396 => 131,  390 => 128,  387 => 127,  379 => 124,  376 => 123,  374 => 122,  367 => 120,  363 => 119,  359 => 118,  355 => 116,  338 => 115,  329 => 108,  320 => 107,  316 => 106,  305 => 98,  302 => 97,  294 => 91,  277 => 87,  266 => 83,  262 => 82,  259 => 81,  252 => 79,  246 => 76,  243 => 75,  232 => 71,  223 => 68,  208 => 61,  182 => 53,  173 => 52,  169 => 51,  156 => 43,  134 => 40,  128 => 37,  166 => 72,  150 => 67,  146 => 65,  90 => 29,  53 => 11,  49 => 10,  23 => 3,  240 => 81,  235 => 72,  231 => 68,  228 => 67,  217 => 65,  207 => 60,  200 => 55,  197 => 54,  192 => 8,  164 => 82,  129 => 61,  124 => 35,  110 => 34,  107 => 42,  87 => 37,  56 => 18,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 85,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 70,  222 => 73,  220 => 72,  215 => 70,  211 => 61,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  112 => 44,  82 => 30,  65 => 22,  38 => 4,  144 => 50,  141 => 54,  135 => 47,  126 => 45,  109 => 47,  103 => 43,  67 => 19,  61 => 16,  47 => 8,  28 => 6,  105 => 24,  93 => 20,  76 => 33,  72 => 32,  68 => 24,  94 => 30,  88 => 27,  79 => 23,  59 => 22,  225 => 96,  216 => 90,  212 => 63,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 60,  189 => 77,  186 => 7,  180 => 72,  172 => 76,  159 => 44,  154 => 42,  147 => 55,  132 => 48,  127 => 49,  121 => 55,  118 => 44,  114 => 42,  104 => 35,  100 => 33,  78 => 24,  75 => 23,  71 => 19,  58 => 13,  34 => 5,  91 => 29,  84 => 31,  26 => 2,  27 => 4,  24 => 4,  21 => 1,  44 => 13,  31 => 4,  25 => 3,  19 => 2,  70 => 19,  63 => 20,  46 => 7,  22 => 3,  163 => 63,  155 => 58,  152 => 49,  149 => 51,  145 => 69,  139 => 50,  131 => 42,  123 => 47,  120 => 43,  115 => 51,  106 => 36,  101 => 42,  96 => 21,  83 => 18,  80 => 26,  74 => 28,  66 => 21,  55 => 15,  52 => 12,  50 => 8,  43 => 6,  41 => 5,  37 => 8,  35 => 4,  32 => 2,  29 => 2,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 81,  157 => 56,  153 => 74,  151 => 41,  143 => 67,  138 => 63,  136 => 50,  133 => 43,  130 => 47,  122 => 44,  119 => 36,  116 => 46,  111 => 38,  108 => 37,  102 => 32,  98 => 22,  95 => 39,  92 => 30,  89 => 19,  85 => 24,  81 => 36,  73 => 19,  64 => 23,  60 => 19,  57 => 18,  54 => 12,  51 => 13,  48 => 11,  45 => 9,  42 => 12,  39 => 11,  36 => 6,  33 => 8,  30 => 7,);
    }
}
