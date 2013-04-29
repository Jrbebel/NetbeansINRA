<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_5c1a14ac3901c04de90a59d18a1eb7c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 12,  23 => 3,  243 => 81,  238 => 73,  234 => 68,  231 => 67,  214 => 61,  210 => 60,  203 => 55,  200 => 54,  195 => 8,  164 => 82,  145 => 69,  129 => 50,  124 => 49,  110 => 43,  107 => 42,  87 => 32,  52 => 12,  37 => 8,  56 => 13,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 62,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  149 => 51,  123 => 47,  120 => 48,  112 => 44,  106 => 35,  82 => 30,  65 => 16,  38 => 7,  155 => 58,  144 => 50,  141 => 54,  139 => 50,  135 => 47,  126 => 45,  109 => 41,  103 => 34,  101 => 36,  70 => 20,  67 => 19,  61 => 15,  47 => 11,  28 => 3,  105 => 24,  96 => 21,  93 => 20,  83 => 18,  76 => 22,  72 => 23,  68 => 22,  50 => 8,  94 => 39,  88 => 27,  79 => 23,  59 => 22,  43 => 8,  32 => 4,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 7,  186 => 76,  180 => 72,  172 => 67,  163 => 63,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 49,  121 => 45,  118 => 44,  114 => 42,  104 => 36,  100 => 33,  78 => 24,  75 => 23,  71 => 19,  63 => 18,  58 => 12,  34 => 5,  91 => 20,  84 => 31,  74 => 16,  66 => 17,  55 => 14,  41 => 7,  46 => 7,  26 => 11,  22 => 2,  27 => 4,  24 => 6,  29 => 3,  21 => 1,  44 => 10,  35 => 6,  31 => 4,  25 => 1,  19 => 1,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 81,  157 => 56,  153 => 74,  151 => 73,  143 => 67,  138 => 53,  136 => 50,  133 => 43,  130 => 47,  122 => 44,  119 => 36,  116 => 46,  111 => 32,  108 => 31,  102 => 30,  98 => 22,  95 => 35,  92 => 28,  89 => 19,  85 => 24,  81 => 40,  73 => 21,  64 => 17,  60 => 17,  57 => 14,  54 => 10,  51 => 10,  48 => 11,  45 => 10,  42 => 9,  39 => 6,  36 => 6,  33 => 5,  30 => 1,);
    }
}
