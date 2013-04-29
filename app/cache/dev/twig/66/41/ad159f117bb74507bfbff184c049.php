<?php

/* Inra2013urzBundle:Analyse:Create.html.twig */
class __TwigTemplate_6641ad159f117bb74507bfbff184c049 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("Inra2013urzBundle:Default:IndexUser.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Create Analyse";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013urzBunle_VoirAnalyse"), "html", null, true);
        echo "\" method=\"post\"  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["forms"]) ? $context["forms"] : $this->getContext($context, "forms")), 'enctype');
        echo ">
";
        // line 19
        echo " 
        
<ul class=\"nav nav-tabs\" id=\"myTab\">

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
            echo "    ";
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") == 1)) {
                // line 25
                echo "    <li class=\"active\"><a href=\"#";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), "html", null, true);
                echo "</a></li>
     ";
            } else {
                // line 27
                echo "        <li ><a href=\"#";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeanalyse"]) ? $context["typeanalyse"] : $this->getContext($context, "typeanalyse")), "Nom"), "html", null, true);
                echo "</a></li>
    ";
            }
            // line 29
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
        // line 30
        echo "
        </ul>
        
        
        
        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>CodeLabo</th>
                    <th>OPG1</th>
                    <th>OPG2</th>
                    <th>OPG3</th>
                    <th>Fait par</th>
                </tr>
            </thead>
            <tbody>

";
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["forms"]) ? $context["forms"] : $this->getContext($context, "forms")), "ChampsOPG"));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 49
            echo "                <tr>
                    <td>1</td> 
                    <td>1</td>
                    <td>";
            // line 52
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "OPG1"), 'row');
            echo "</td>
                    <td>";
            // line 53
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "OPG2"), 'row');
            echo "</td>
                    <td>";
            // line 54
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "OPG3"), 'row');
            echo "</td>
                    <td>user</td>

                </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 59
        echo "            </tbody>


            <li></li>

        </table>

";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["forms"]) ? $context["forms"] : $this->getContext($context, "forms")), 'row');
        echo " 
";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["forms"]) ? $context["forms"] : $this->getContext($context, "forms")), 'rest');
        echo "





        <input type=\"hidden\" name=\"Status\" value=\"Sauvegarde\" /> 
        <input type=\"submit\" class=\"btn btn-primary\" />
    </form>

";
    }

    public function getTemplateName()
    {
        return "Inra2013urzBundle:Analyse:Create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 54,  501 => 179,  498 => 178,  488 => 172,  473 => 171,  461 => 163,  448 => 155,  426 => 151,  422 => 149,  407 => 148,  395 => 140,  382 => 132,  360 => 128,  357 => 127,  345 => 117,  328 => 114,  319 => 112,  313 => 110,  311 => 109,  307 => 108,  303 => 107,  299 => 106,  293 => 105,  283 => 103,  275 => 100,  258 => 99,  236 => 80,  207 => 67,  192 => 63,  182 => 60,  176 => 59,  173 => 58,  86 => 20,  69 => 14,  40 => 5,  698 => 319,  677 => 289,  673 => 288,  668 => 287,  660 => 283,  655 => 282,  652 => 281,  643 => 276,  631 => 266,  626 => 264,  623 => 263,  621 => 262,  608 => 252,  605 => 251,  598 => 246,  586 => 236,  581 => 234,  578 => 233,  576 => 232,  563 => 222,  560 => 221,  551 => 214,  545 => 210,  528 => 206,  519 => 200,  511 => 196,  507 => 194,  502 => 191,  492 => 173,  487 => 184,  485 => 183,  478 => 178,  460 => 174,  450 => 156,  444 => 169,  440 => 168,  433 => 164,  429 => 163,  409 => 161,  396 => 150,  387 => 148,  384 => 133,  380 => 146,  370 => 139,  365 => 137,  359 => 134,  356 => 133,  350 => 129,  337 => 118,  333 => 117,  329 => 115,  324 => 112,  315 => 107,  310 => 106,  308 => 105,  278 => 101,  266 => 92,  259 => 90,  253 => 87,  247 => 84,  221 => 76,  206 => 64,  199 => 63,  193 => 61,  190 => 62,  174 => 50,  169 => 48,  161 => 43,  158 => 42,  156 => 41,  146 => 51,  170 => 76,  148 => 67,  113 => 51,  99 => 42,  90 => 29,  53 => 23,  49 => 9,  77 => 16,  23 => 3,  255 => 86,  250 => 77,  243 => 75,  241 => 80,  238 => 81,  234 => 68,  231 => 67,  214 => 61,  210 => 60,  203 => 55,  200 => 54,  195 => 8,  164 => 67,  129 => 35,  124 => 49,  110 => 43,  107 => 47,  87 => 28,  56 => 18,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 104,  282 => 90,  276 => 86,  273 => 94,  270 => 84,  268 => 93,  263 => 91,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 62,  215 => 72,  211 => 69,  204 => 66,  198 => 65,  185 => 61,  183 => 60,  177 => 58,  160 => 66,  112 => 44,  82 => 36,  65 => 13,  38 => 6,  144 => 65,  141 => 54,  135 => 47,  126 => 49,  109 => 37,  103 => 30,  67 => 19,  61 => 12,  47 => 19,  28 => 6,  105 => 24,  93 => 20,  76 => 22,  72 => 23,  68 => 22,  94 => 26,  88 => 24,  79 => 17,  59 => 22,  225 => 71,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 7,  186 => 61,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 52,  127 => 49,  121 => 45,  118 => 29,  114 => 42,  104 => 28,  100 => 28,  78 => 24,  75 => 23,  71 => 19,  58 => 12,  34 => 5,  91 => 20,  84 => 31,  26 => 11,  27 => 4,  24 => 4,  21 => 1,  44 => 6,  31 => 3,  25 => 1,  19 => 2,  70 => 24,  63 => 19,  46 => 7,  22 => 3,  163 => 63,  155 => 54,  152 => 68,  149 => 37,  145 => 69,  139 => 50,  131 => 42,  123 => 48,  120 => 43,  115 => 40,  106 => 36,  101 => 43,  96 => 26,  83 => 26,  80 => 26,  74 => 24,  66 => 21,  55 => 12,  52 => 12,  50 => 8,  43 => 7,  41 => 7,  37 => 4,  35 => 5,  32 => 2,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 57,  162 => 86,  157 => 55,  153 => 79,  151 => 59,  143 => 50,  138 => 53,  136 => 53,  133 => 43,  130 => 47,  122 => 31,  119 => 55,  116 => 46,  111 => 38,  108 => 33,  102 => 29,  98 => 22,  95 => 31,  92 => 39,  89 => 29,  85 => 23,  81 => 27,  73 => 25,  64 => 23,  60 => 17,  57 => 11,  54 => 10,  51 => 13,  48 => 11,  45 => 8,  42 => 12,  39 => 11,  36 => 6,  33 => 8,  30 => 7,);
    }
}
