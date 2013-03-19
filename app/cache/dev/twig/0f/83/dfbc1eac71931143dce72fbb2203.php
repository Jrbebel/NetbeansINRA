<?php

/* WebProfilerBundle:Collector:events.html.twig */
class __TwigTemplate_0f83dfbc1eac71931143dce72fbb2203 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'panelContent' => array($this, 'block_panelContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["__internal_92845c913092e05f79b81b23030020861ca335f2"] = $this;
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/events.png"), "html", null, true);
        echo "\" alt=\"Events\" /></span>
    <strong>Events</strong>
</span>
";
    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calledlisteners"))) {
            // line 14
            echo "        ";
            $this->displayBlock("panelContent", $context, $blocks);
            echo "
    ";
        } else {
            // line 16
            echo "        <h2>Events</h2>
        <p>
            <em>No events have been recorded. Are you sure that debugging is enabled in the kernel?</em>
        </p>
    ";
        }
    }

    // line 23
    public function block_panelContent($context, array $blocks = array())
    {
        // line 24
        echo "    <h2>Called Listeners</h2>

    <table>
        <tr>
            <th>Event name</th>
            <th>Priority</th>
            <th>Listener</th>
        </tr>
        ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calledlisteners"));
        foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
            // line 33
            echo "            <tr>
                <td><code>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "event"), "html", null, true);
            echo "</code></td>
                <td><code>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "priority"), "html", null, true);
            echo "</code></td>
                <td><code>";
            // line 36
            echo $context["__internal_92845c913092e05f79b81b23030020861ca335f2"]->getdisplay_listener((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")));
            echo "</code></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 39
        echo "    </table>

    ";
        // line 41
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "notcalledlisteners")) {
            // line 42
            echo "        <h2>Not Called Listeners</h2>

        <table>
            <tr>
                <th>Event name</th>
                <th>Priority</th>
                <th>Listener</th>
            </tr>
            ";
            // line 50
            $context["listeners"] = $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "notcalledlisteners");
            // line 51
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter((isset($context["listeners"]) ? $context["listeners"] : $this->getContext($context, "listeners")))));
            foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                // line 52
                echo "                <tr>
                    <td><code>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listeners"]) ? $context["listeners"] : $this->getContext($context, "listeners")), (isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), array(), "array"), "event"), "html", null, true);
                echo "</code></td>
                    <td><code>";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listeners"]) ? $context["listeners"] : $this->getContext($context, "listeners")), (isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), array(), "array"), "priority"), "html", null, true);
                echo "</code></td>
                    <td><code>";
                // line 55
                echo $context["__internal_92845c913092e05f79b81b23030020861ca335f2"]->getdisplay_listener($this->getAttribute((isset($context["listeners"]) ? $context["listeners"] : $this->getContext($context, "listeners")), (isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), array(), "array"));
                echo "</code></td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 58
            echo "        </table>
    ";
        }
    }

    // line 62
    public function getdisplay_listener($_listener = null)
    {
        $context = $this->env->mergeGlobals(array(
            "listener" => $_listener,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 63
            echo "    ";
            if (($this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "type") == "Closure")) {
                // line 64
                echo "        Closure
    ";
            } elseif (($this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "type") == "Function")) {
                // line 66
                echo "        ";
                $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "file"), $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "line"));
                // line 67
                echo "        ";
                if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "function"), "html", null, true);
                    echo "</a>";
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "function"), "html", null, true);
                }
                // line 68
                echo "    ";
            } elseif (($this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "type") == "Method")) {
                // line 69
                echo "        ";
                $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "file"), $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "line"));
                // line 70
                echo "        ";
                echo $this->env->getExtension('code')->abbrClass($this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "class"));
                echo "::";
                if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "method"), "html", null, true);
                    echo "</a>";
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "method"), "html", null, true);
                }
                // line 71
                echo "    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 67,  86 => 27,  328 => 147,  321 => 142,  304 => 131,  300 => 129,  296 => 128,  288 => 122,  269 => 118,  261 => 115,  255 => 113,  251 => 111,  242 => 108,  232 => 105,  229 => 104,  219 => 101,  197 => 97,  187 => 94,  140 => 73,  69 => 19,  188 => 69,  167 => 64,  142 => 64,  134 => 54,  128 => 60,  125 => 59,  253 => 85,  224 => 72,  213 => 65,  192 => 63,  168 => 55,  137 => 47,  62 => 19,  40 => 4,  610 => 241,  605 => 240,  598 => 238,  595 => 237,  586 => 232,  565 => 214,  562 => 213,  555 => 208,  534 => 190,  531 => 189,  519 => 178,  508 => 172,  506 => 171,  503 => 170,  486 => 166,  480 => 163,  475 => 160,  469 => 156,  453 => 153,  446 => 151,  442 => 149,  438 => 148,  435 => 147,  428 => 145,  422 => 142,  419 => 141,  411 => 138,  408 => 137,  406 => 136,  399 => 134,  395 => 133,  391 => 132,  384 => 129,  367 => 128,  357 => 120,  348 => 118,  345 => 117,  341 => 116,  330 => 108,  326 => 107,  323 => 106,  318 => 141,  312 => 137,  307 => 97,  290 => 93,  283 => 91,  279 => 89,  275 => 88,  272 => 87,  265 => 85,  259 => 82,  256 => 170,  248 => 110,  236 => 106,  221 => 67,  182 => 57,  161 => 45,  156 => 42,  99 => 36,  166 => 47,  150 => 67,  146 => 65,  90 => 29,  53 => 9,  49 => 13,  23 => 3,  243 => 76,  238 => 107,  234 => 68,  231 => 67,  214 => 98,  210 => 60,  203 => 55,  200 => 54,  195 => 59,  164 => 63,  129 => 36,  124 => 49,  110 => 42,  107 => 33,  87 => 34,  56 => 11,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 120,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 109,  230 => 71,  222 => 73,  220 => 62,  215 => 70,  211 => 64,  204 => 71,  198 => 63,  185 => 68,  183 => 60,  177 => 58,  160 => 57,  112 => 53,  82 => 30,  65 => 20,  38 => 7,  144 => 51,  141 => 54,  135 => 47,  126 => 45,  109 => 52,  103 => 34,  67 => 23,  61 => 16,  47 => 7,  28 => 6,  105 => 35,  93 => 30,  76 => 33,  72 => 20,  68 => 15,  94 => 30,  88 => 28,  79 => 25,  59 => 18,  225 => 103,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 96,  191 => 70,  189 => 7,  186 => 59,  180 => 89,  172 => 76,  159 => 81,  154 => 68,  147 => 58,  132 => 48,  127 => 52,  121 => 55,  118 => 39,  114 => 39,  104 => 39,  100 => 33,  78 => 24,  75 => 21,  71 => 24,  58 => 16,  34 => 5,  91 => 35,  84 => 33,  26 => 2,  27 => 3,  24 => 4,  21 => 1,  44 => 8,  31 => 2,  25 => 4,  19 => 2,  70 => 24,  63 => 16,  46 => 12,  22 => 3,  163 => 58,  155 => 56,  152 => 55,  149 => 78,  145 => 69,  139 => 41,  131 => 61,  123 => 47,  120 => 50,  115 => 38,  106 => 36,  101 => 42,  96 => 30,  83 => 26,  80 => 32,  74 => 22,  66 => 14,  55 => 17,  52 => 14,  50 => 8,  43 => 12,  41 => 11,  37 => 3,  35 => 6,  32 => 5,  29 => 6,  184 => 70,  178 => 95,  171 => 66,  165 => 58,  162 => 81,  157 => 80,  153 => 62,  151 => 50,  143 => 48,  138 => 55,  136 => 71,  133 => 46,  130 => 53,  122 => 51,  119 => 42,  116 => 46,  111 => 37,  108 => 41,  102 => 41,  98 => 22,  95 => 36,  92 => 30,  89 => 28,  85 => 24,  81 => 24,  73 => 23,  64 => 23,  60 => 19,  57 => 13,  54 => 11,  51 => 13,  48 => 9,  45 => 6,  42 => 12,  39 => 5,  36 => 4,  33 => 8,  30 => 3,);
    }
}
