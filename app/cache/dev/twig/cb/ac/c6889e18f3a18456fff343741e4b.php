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
            'body' => array($this, 'block_body'),
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

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "

<ul class=\"nav nav-tabs\" id=\"myTab\">

    ";
        // line 11
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
            // line 12
            echo "    ";
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") == 1)) {
                // line 13
                echo "    <li class=\"active\"><a href=\"#";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), "html", null, true);
                echo "</a></li>
     ";
            } else {
                // line 15
                echo "        <li ><a href=\"#";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), "html", null, true);
                echo "</a></li>
    ";
            }
            // line 17
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
        // line 18
        echo "
        </ul>
        <form action=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_CreateAnalyse"), "html", null, true);
        echo "\" method=\"POST\" >
            <div class=\"tab-content\">

  ";
        // line 23
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
            // line 24
            echo "
    ";
            // line 25
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") == 1)) {
                // line 26
                echo "
                <div class=\"tab-pane active\" id=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), "html", null, true);
                echo "\" >
                    <table class=\"table table-striped\" >
                        <thead>
                            <tr>
                        <th>Id</th>
                        <th>CodeLabo</th>

                     ";
                // line 34
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Champs"]) ? $context["Champs"] : $this->getContext($context, "Champs")), $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["Champ"]) {
                    // line 35
                    echo "                        <th>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Champ"]) ? $context["Champ"] : $this->getContext($context, "Champ")), "Champ"), "html", null, true);
                    echo "</th>
                     ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Champ'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 36
                echo " 
                        <th>Fait par</th>
                        
                           </tr>
                        </thead>
                        <tbody>

        ";
                // line 43
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
                    // line 44
                    echo "
                            <tr>  
                                <td>";
                    // line 46
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                    echo "</td>    

                                <td> ";
                    // line 48
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), "CodeLabo"), "CodeLabo"), "html", null, true);
                    echo " </td>


                               ";
                    // line 51
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Champs"]) ? $context["Champs"] : $this->getContext($context, "Champs")), $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), array(), "array"));
                    foreach ($context['_seq'] as $context["_key"] => $context["Champ"]) {
                        echo "    

                                    ";
                        // line 53
                        if (twig_test_empty($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), "User"))) {
                            // line 54
                            echo "
                                <td><input type=\"text\" name=\"";
                            // line 55
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Champ"]) ? $context["Champ"] : $this->getContext($context, "Champ")), "Champ"), "html", null, true);
                            echo "[";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), "CodeLabo"), "CodeLabo"), "html", null, true);
                            echo "]\" class=\"span7\"  /></td>

                                    ";
                        } else {
                            // line 58
                            echo "
                                <td>";
                            // line 59
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), $this->getAttribute((isset($context["Champ"]) ? $context["Champ"] : $this->getContext($context, "Champ")), "Champ")), "html", null, true);
                            echo "</td>

                                    ";
                        }
                        // line 62
                        echo "
                               ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Champ'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 64
                    echo "                                         ";
                    if (twig_test_empty($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), "User"))) {
                        // line 65
                        echo "
                                         ";
                    } else {
                        // line 66
                        echo " 
                          
                                <td> ";
                        // line 68
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), "User"), "Nom"), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), "User"), "Prenom"), "html", null, true);
                        echo "</td>
                                         ";
                    }
                    // line 70
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
                // line 74
                echo "                        </tbody>
                    </table>

                </div>

        ";
            } else {
                // line 80
                echo "
                <div class=\"tab-pane\" id=\"";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), "html", null, true);
                echo "\" >

                    <table class=\"table table-striped\" >
  <thead>
                            <tr>
                        <th>Id</th>
                        <th>CodeLabo</th>

                     ";
                // line 89
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Champs"]) ? $context["Champs"] : $this->getContext($context, "Champs")), $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["Champ"]) {
                    // line 90
                    echo "                        <th>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Champ"]) ? $context["Champ"] : $this->getContext($context, "Champ")), "Champ"), "html", null, true);
                    echo "</th>
                     ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Champ'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 91
                echo " 
                        <th>Fait par</th>
                
                           </tr>
                        </thead>
                        <tbody>

        ";
                // line 98
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
                    // line 99
                    echo "
                            <tr>  
                                <td>";
                    // line 101
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                    echo "</td>    
                                <td> ";
                    // line 102
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), "CodeLabo"), "CodeLabo"), "html", null, true);
                    echo " </td>
                                    ";
                    // line 103
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Champs"]) ? $context["Champs"] : $this->getContext($context, "Champs")), $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), array(), "array"));
                    foreach ($context['_seq'] as $context["_key"] => $context["Champ"]) {
                        echo "    

                                    ";
                        // line 105
                        if (twig_test_empty($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), "User"))) {
                            // line 106
                            echo "
                                <td><input type=\"text\" name=\"";
                            // line 107
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Champ"]) ? $context["Champ"] : $this->getContext($context, "Champ")), "Champ"), "html", null, true);
                            echo "[";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), "CodeLabo"), "CodeLabo"), "html", null, true);
                            echo "]\" class=\"span7\" /></td>

                                    ";
                        } else {
                            // line 110
                            echo "
                                <td>";
                            // line 111
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), $this->getAttribute((isset($context["Champ"]) ? $context["Champ"] : $this->getContext($context, "Champ")), "Champ")), "html", null, true);
                            echo "</td>

                                    ";
                        }
                        // line 114
                        echo "
                               ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Champ'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 116
                    echo "                                  ";
                    if (twig_test_empty($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), "User"))) {
                        // line 117
                        echo "                                <td></td>
                                         ";
                    } else {
                        // line 118
                        echo " 
                          
                                <td>";
                        // line 120
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), "User"), "Nom"), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["typecodelabo"]) ? $context["typecodelabo"] : $this->getContext($context, "typecodelabo")), "User"), "Prenom"), "html", null, true);
                        echo "</td>
                                         ";
                    }
                    // line 122
                    echo "                            </tr> 

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
                // line 125
                echo "                        </tbody>

                    </table>

                </div>


";
            }
            // line 132
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
        // line 136
        echo "                <input type=\"hidden\" name=\"NumProtocole\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["NumProtocole"]) ? $context["NumProtocole"] : $this->getContext($context, "NumProtocole")), "html", null, true);
        echo "\" />
                <input type=\"hidden\" name=\"Status\" value=\"Enregistrer\" />

                <input type=\"submit\" value=\"Cancel\" class=\"btn btn-danger\" /> 

                <input type=\"submit\" value=\"Enregistrer\" class=\"btn btn-primary\" /> 



            </div>  

        </form> 
";
    }

    // line 150
    public function block_javascripts($context, array $blocks = array())
    {
        // line 151
        echo "        <script>
            \$('#myTab a').click(function(e) {
                e.preventDefault();
                \$(this).tab('show');
            })
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
        return array (  456 => 151,  453 => 150,  435 => 136,  418 => 132,  408 => 125,  392 => 122,  385 => 120,  381 => 118,  377 => 117,  374 => 116,  367 => 114,  361 => 111,  358 => 110,  350 => 107,  347 => 106,  345 => 105,  338 => 103,  334 => 102,  330 => 101,  326 => 99,  309 => 98,  300 => 91,  291 => 90,  265 => 74,  248 => 70,  241 => 68,  237 => 66,  233 => 65,  223 => 62,  217 => 59,  214 => 58,  206 => 55,  203 => 54,  188 => 48,  140 => 34,  125 => 25,  99 => 20,  62 => 12,  166 => 72,  150 => 67,  146 => 65,  129 => 61,  90 => 29,  87 => 37,  53 => 17,  49 => 10,  23 => 3,  210 => 72,  199 => 61,  193 => 60,  182 => 54,  179 => 44,  174 => 8,  168 => 7,  110 => 43,  56 => 18,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 89,  282 => 90,  276 => 81,  273 => 80,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 64,  222 => 73,  220 => 72,  215 => 80,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 46,  177 => 58,  160 => 80,  112 => 42,  82 => 30,  65 => 13,  38 => 5,  144 => 35,  141 => 66,  135 => 47,  126 => 45,  109 => 47,  103 => 43,  67 => 19,  61 => 16,  47 => 14,  28 => 6,  105 => 23,  93 => 34,  76 => 33,  72 => 32,  68 => 12,  94 => 39,  88 => 27,  79 => 23,  59 => 22,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 53,  196 => 80,  194 => 51,  191 => 78,  189 => 59,  186 => 76,  180 => 72,  172 => 76,  159 => 61,  154 => 68,  147 => 55,  132 => 48,  127 => 26,  121 => 55,  118 => 47,  114 => 45,  104 => 35,  100 => 33,  78 => 24,  75 => 23,  71 => 19,  58 => 13,  34 => 5,  91 => 38,  84 => 28,  26 => 2,  27 => 4,  24 => 4,  21 => 1,  44 => 13,  31 => 4,  25 => 3,  19 => 2,  70 => 19,  63 => 20,  46 => 7,  22 => 3,  163 => 63,  155 => 58,  152 => 49,  149 => 72,  145 => 46,  139 => 53,  131 => 42,  123 => 47,  120 => 43,  115 => 51,  106 => 36,  101 => 42,  96 => 21,  83 => 18,  80 => 26,  74 => 24,  66 => 21,  55 => 13,  52 => 15,  50 => 8,  43 => 7,  41 => 6,  37 => 8,  35 => 4,  32 => 7,  29 => 2,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 43,  157 => 56,  153 => 36,  151 => 73,  143 => 54,  138 => 63,  136 => 52,  133 => 43,  130 => 27,  122 => 24,  119 => 36,  116 => 35,  111 => 38,  108 => 42,  102 => 30,  98 => 22,  95 => 18,  92 => 30,  89 => 19,  85 => 31,  81 => 17,  73 => 15,  64 => 23,  60 => 19,  57 => 18,  54 => 12,  51 => 13,  48 => 11,  45 => 11,  42 => 12,  39 => 7,  36 => 5,  33 => 8,  30 => 2,);
    }
}
