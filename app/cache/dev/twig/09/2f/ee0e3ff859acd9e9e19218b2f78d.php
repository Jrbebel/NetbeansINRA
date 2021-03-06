<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_092fee0e3ff859acd9e9e19218b2f78d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("Inra2013urzBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Inra2013urzBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "
";
        // line 5
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 6
            echo "
    <div>

";
            // line 9
            $context["erreur"] = array("erreur" => $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"));
            // line 10
            echo "    
        ";
            // line 11
            $this->env->loadTemplate("::base.html.twig")->display(array_merge($context, (isset($context["erreur"]) ? $context["erreur"] : $this->getContext($context, "erreur"))));
            echo "</div>
    ";
        } else {
            // line 13
            echo "    <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_check"), "html", null, true);
            echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />

    <label for=\"username\">";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
            echo "</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
            echo "\" placeholder=\"Username\" /><br>

    <label for=\"password\">";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
            echo " </label>
    <input type=\"password\" id=\"password\" name=\"_password\" placeholder=\"password\" size=\"7\"><br>


    <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-primary\" value=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
            echo "\" />
</form>
";
        }
        // line 26
        echo "


";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 23,  23 => 3,  255 => 86,  250 => 77,  243 => 75,  241 => 74,  238 => 73,  234 => 68,  231 => 67,  214 => 61,  210 => 60,  203 => 55,  200 => 54,  195 => 8,  164 => 87,  129 => 50,  124 => 49,  110 => 43,  107 => 42,  87 => 32,  56 => 14,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 62,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  112 => 44,  82 => 30,  65 => 17,  38 => 6,  144 => 50,  141 => 54,  135 => 47,  126 => 45,  109 => 41,  103 => 34,  67 => 19,  61 => 16,  47 => 9,  28 => 3,  105 => 24,  93 => 20,  76 => 22,  72 => 23,  68 => 22,  94 => 39,  88 => 27,  79 => 23,  59 => 22,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 7,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 49,  121 => 45,  118 => 44,  114 => 42,  104 => 36,  100 => 33,  78 => 24,  75 => 23,  71 => 19,  58 => 12,  34 => 5,  91 => 20,  84 => 31,  26 => 2,  27 => 4,  24 => 6,  21 => 1,  44 => 10,  31 => 4,  25 => 1,  19 => 1,  70 => 19,  63 => 24,  46 => 11,  22 => 2,  163 => 63,  155 => 58,  152 => 49,  149 => 51,  145 => 69,  139 => 50,  131 => 42,  123 => 47,  120 => 48,  115 => 39,  106 => 35,  101 => 36,  96 => 21,  83 => 26,  80 => 24,  74 => 16,  66 => 15,  55 => 15,  52 => 12,  50 => 8,  43 => 10,  41 => 9,  37 => 8,  35 => 6,  32 => 4,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 86,  157 => 56,  153 => 79,  151 => 73,  143 => 67,  138 => 53,  136 => 50,  133 => 43,  130 => 47,  122 => 44,  119 => 36,  116 => 46,  111 => 38,  108 => 37,  102 => 30,  98 => 22,  95 => 35,  92 => 28,  89 => 19,  85 => 24,  81 => 40,  73 => 19,  64 => 17,  60 => 17,  57 => 14,  54 => 10,  51 => 13,  48 => 10,  45 => 8,  42 => 9,  39 => 9,  36 => 6,  33 => 7,  30 => 3,);
    }
}
