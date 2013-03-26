<?php

/* WebProfilerBundle:Collector:logger.html.twig */
class __TwigTemplate_8bf4c1354ecc87422738b613ec57c5aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors")) {
            // line 5
            echo "        ";
            ob_start();
            // line 6
            echo "            <img width=\"15\" height=\"28\" alt=\"Logs\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAcCAYAAABoMT8aAAAA4klEQVQ4y2P4//8/AyWYYXgYwOPp6Xnc3t7+P7EYpB6k7+zZs2ADNEjRjIwDAgKWgAywIUfz8+fPVzg7O/8AGeCATQEQnAfi/SAah/wcV1dXvAYUgORANA75ehcXl+/4DHAABRIe+ZrhbgAhTHsDiEgHBA0glA6GfSDiw5mZma+A+sphBlhVVFQ88vHx+Xfu3Ll7QP5haOjjwtuAuGHv3r3NIMNABqh8+/atsaur666vr+9XUlwSHx//AGQANxCbAnEWyGQicRMQ9wBxIQM0qjiBWAFqkB00/glhayBWHwb1AgB38EJsUtxtWwAAAABJRU5ErkJggg==\"/>
            <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors"), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 9
            echo "        ";
            ob_start();
            // line 10
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Exception</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors"), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 15
            echo "        ";
            $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
            // line 16
            echo "    ";
        }
    }

    // line 19
    public function block_menu($context, array $blocks = array())
    {
        // line 20
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/logger.png"), "html", null, true);
        echo "\" alt=\"Logger\" /></span>
    <strong>Logs</strong>
    ";
        // line 23
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors")) {
            // line 24
            echo "        <span class=\"count\">
            <span>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors"), "html", null, true);
            echo "</span>
        </span>
    ";
        }
        // line 28
        echo "</span>
";
    }

    // line 31
    public function block_panel($context, array $blocks = array())
    {
        // line 32
        echo "    <h2>Logs</h2>

    ";
        // line 34
        $context["priority"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "query"), "get", array(0 => "priority", 1 => 0), "method");
        // line 35
        echo "
    <table>
        <tr>
            <th>Filter</th>
            <td>
                <form id=\"priority-form\" action=\"\" method=\"get\" style=\"display: inline\">
                    <input type=\"hidden\" name=\"panel\" value=\"logger\" />
                    <label for=\"priority\">Priority</label>
                    <select id=\"priority\" name=\"priority\" onchange=\"document.getElementById('priority-form').submit(); \">
                        ";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(100 => "DEBUG", 200 => "INFO", 250 => "NOTICE", 300 => "WARNING", 400 => "ERROR", 500 => "CRITICAL", 550 => "ALERT", 600 => "EMERGENCY"));
        foreach ($context['_seq'] as $context["value"] => $context["text"]) {
            // line 45
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
            echo ((((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) == (isset($context["priority"]) ? $context["priority"] : $this->getContext($context, "priority")))) ? (" selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 47
        echo "                    </select>
                    <noscript>
                        <input type=\"submit\" value=\"refresh\" />
                    </noscript>
                </form>
            </td>
        </tr>
    </table>

    ";
        // line 56
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "logs")) {
            // line 57
            echo "        <ul class=\"alt\">
            ";
            // line 58
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "logs"));
            $context['_iterated'] = false;
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                if (($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= (isset($context["priority"]) ? $context["priority"] : $this->getContext($context, "priority")))) {
                    // line 59
                    echo "                <li class=\"";
                    echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index")), "html", null, true);
                    if (($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= 400)) {
                        echo " error";
                    } elseif (($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= 300)) {
                        echo " warning";
                    }
                    echo "\">
                    ";
                    // line 60
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priorityName"), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "message"), "html", null, true);
                    echo "
                    ";
                    // line 61
                    if (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "context"))))) {
                        // line 62
                        echo "                        <br />
                        <small>
                            <strong>Context</strong>: ";
                        // line 64
                        echo twig_escape_filter($this->env, $this->env->getExtension('yaml')->encode($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "context")), "html", null, true);
                        echo "
                        </small>
                    ";
                    }
                    // line 67
                    echo "                </li>
            ";
                    $context['_iterated'] = true;
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            if (!$context['_iterated']) {
                // line 69
                echo "                <li><em>No logs available for this priority.</em></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 71
            echo "        </ul>
    ";
        } else {
            // line 73
            echo "        <p>
            <em>No logs available.</em>
        </p>
    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:logger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 61,  170 => 60,  388 => 160,  385 => 159,  379 => 158,  377 => 157,  370 => 156,  366 => 155,  360 => 152,  354 => 150,  352 => 149,  344 => 147,  342 => 146,  339 => 145,  333 => 141,  330 => 140,  327 => 139,  325 => 138,  320 => 135,  308 => 129,  306 => 128,  254 => 101,  247 => 97,  228 => 87,  226 => 86,  209 => 73,  202 => 73,  193 => 68,  169 => 56,  97 => 23,  174 => 58,  381 => 147,  374 => 142,  371 => 141,  353 => 129,  349 => 128,  341 => 122,  326 => 120,  305 => 116,  291 => 111,  288 => 110,  285 => 109,  272 => 105,  269 => 104,  252 => 100,  246 => 101,  224 => 97,  221 => 83,  207 => 76,  192 => 87,  140 => 42,  99 => 36,  188 => 67,  167 => 64,  137 => 47,  62 => 19,  77 => 33,  256 => 170,  128 => 60,  125 => 59,  261 => 86,  258 => 103,  241 => 98,  229 => 72,  218 => 65,  197 => 63,  173 => 55,  156 => 50,  142 => 64,  86 => 27,  69 => 19,  40 => 4,  732 => 297,  727 => 294,  724 => 292,  722 => 291,  703 => 275,  699 => 274,  694 => 273,  686 => 269,  681 => 268,  678 => 267,  669 => 262,  657 => 252,  652 => 250,  649 => 249,  647 => 248,  634 => 238,  631 => 237,  624 => 232,  612 => 222,  607 => 220,  604 => 219,  602 => 218,  589 => 208,  586 => 207,  574 => 196,  564 => 191,  562 => 190,  559 => 189,  542 => 185,  536 => 182,  531 => 179,  525 => 175,  509 => 172,  502 => 170,  498 => 168,  494 => 167,  491 => 166,  484 => 164,  480 => 162,  473 => 160,  461 => 158,  459 => 157,  456 => 156,  448 => 153,  445 => 152,  443 => 151,  436 => 149,  432 => 148,  428 => 147,  423 => 144,  406 => 143,  396 => 135,  387 => 133,  384 => 132,  380 => 131,  369 => 123,  365 => 137,  362 => 153,  357 => 151,  351 => 114,  346 => 112,  329 => 108,  322 => 118,  318 => 104,  314 => 131,  311 => 130,  304 => 100,  299 => 97,  280 => 114,  278 => 107,  275 => 111,  267 => 88,  264 => 105,  262 => 86,  255 => 84,  244 => 79,  240 => 93,  223 => 76,  190 => 67,  182 => 64,  175 => 52,  158 => 51,  148 => 58,  134 => 54,  166 => 72,  150 => 67,  146 => 65,  90 => 28,  53 => 9,  49 => 13,  23 => 3,  243 => 81,  238 => 73,  234 => 89,  231 => 88,  214 => 94,  210 => 60,  203 => 55,  200 => 54,  195 => 8,  164 => 63,  129 => 61,  124 => 42,  110 => 42,  107 => 27,  87 => 34,  56 => 11,  20 => 1,  301 => 125,  295 => 121,  292 => 120,  289 => 119,  287 => 118,  282 => 115,  276 => 106,  273 => 110,  270 => 84,  268 => 107,  263 => 80,  249 => 81,  245 => 96,  230 => 75,  222 => 73,  220 => 62,  215 => 79,  211 => 69,  204 => 71,  198 => 69,  185 => 68,  183 => 63,  177 => 59,  160 => 59,  112 => 55,  82 => 19,  65 => 20,  38 => 7,  144 => 51,  141 => 54,  135 => 47,  126 => 43,  109 => 52,  103 => 25,  67 => 14,  61 => 12,  47 => 9,  28 => 3,  105 => 35,  93 => 30,  76 => 17,  72 => 20,  68 => 19,  94 => 30,  88 => 20,  79 => 23,  59 => 18,  225 => 96,  216 => 64,  212 => 78,  205 => 71,  201 => 67,  196 => 69,  194 => 62,  191 => 70,  189 => 7,  186 => 86,  180 => 55,  172 => 76,  159 => 81,  154 => 48,  147 => 58,  132 => 47,  127 => 52,  121 => 55,  118 => 39,  114 => 39,  104 => 35,  100 => 24,  78 => 33,  75 => 21,  71 => 20,  58 => 16,  34 => 5,  91 => 35,  84 => 25,  26 => 2,  27 => 3,  24 => 4,  21 => 1,  44 => 10,  31 => 4,  25 => 5,  19 => 2,  70 => 15,  63 => 16,  46 => 12,  22 => 3,  163 => 58,  155 => 56,  152 => 55,  149 => 78,  145 => 57,  139 => 50,  131 => 61,  123 => 35,  120 => 50,  115 => 44,  106 => 51,  101 => 42,  96 => 48,  83 => 26,  80 => 32,  74 => 21,  66 => 21,  55 => 9,  52 => 14,  50 => 10,  43 => 12,  41 => 11,  37 => 3,  35 => 6,  32 => 5,  29 => 6,  184 => 70,  178 => 62,  171 => 57,  165 => 54,  162 => 53,  157 => 80,  153 => 62,  151 => 47,  143 => 56,  138 => 55,  136 => 71,  133 => 46,  130 => 39,  122 => 51,  119 => 45,  116 => 31,  111 => 37,  108 => 41,  102 => 34,  98 => 32,  95 => 31,  92 => 21,  89 => 28,  85 => 29,  81 => 24,  73 => 16,  64 => 23,  60 => 15,  57 => 16,  54 => 12,  51 => 13,  48 => 9,  45 => 15,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
