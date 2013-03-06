<?php

/* ::base.html.twig */
class __TwigTemplate_56594994f1b41e524e18e3c534a0322f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>


<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" /> 
        <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\" ></script>
        <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\" ></script>
        <script type=\"text/javascript\"  src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" ></script>
      
    </head>
    <body>

        <div class=\"container-fluid\">

            <div class=\"row-fluid \">
                <div class=\"span3\"><img  style=\" margin-top: 10px; height: 200px; width: 285px\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/suzlabo.JPG"), "html", null, true);
        echo "\" /></div>
                <div class=\"span9\"><h1 style=\"text-align: center; margin-top: 50px\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Accueil"]) ? $context["Accueil"] : $this->getContext($context, "Accueil")), "Titre"), "html", null, true);
        echo "</h1></div>
            </div> 
            <div class=\"row-fluid\"  style=\"margin-top: 50px\">

                <div class=\"span3\" > 

                    <div class=\"well\" >
";
        // line 29
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 30
            echo "
                            <strong><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_show"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username")), "FOSUserBundle"), "html", null, true);
            echo "</a></strong><br> <br>                          

                            <div class=\"btn-group navbar\">
                                <a class=\"btn btn-primary\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
            echo "\"><i class=\"icon-user icon-white\"></i>   ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>

                            </div>



";
        } else {
            // line 41
            echo "
";
            // line 42
            echo $this->env->getExtension('actions')->renderAction("FOSUserBundle:Security:login", array(), array());
            // line 43
            echo "
";
        }
        // line 45
        echo "                        </div>

";
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "getFlashes", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["flash"]) {
            // line 48
            echo "                        <div class=\"";
            echo twig_escape_filter($this->env, (isset($context["flash"]) ? $context["flash"] : $this->getContext($context, "flash")), "html", null, true);
            echo "\">
    ";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), array(), "FOSUserBundle"), "html", null, true);
            echo "
                            </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['flash'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 52
        echo "
                    ";
        // line 53
        $this->displayBlock('menu', $context, $blocks);
        // line 66
        echo "

                        </div>
                        <div class=\"span9\" style=\"height: 300px\">


   ";
        // line 72
        $this->displayBlock('body', $context, $blocks);
        // line 73
        echo "
                        </div>


                    </div>     


        ";
        // line 80
        $this->displayBlock('javascripts', $context, $blocks);
        // line 81
        echo "            </body>
        </html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 53
    public function block_menu($context, array $blocks = array())
    {
        // line 54
        echo "


                            <div class=\"well\" >
                                <ul class=\"nav nav-list\">
                                    <li class=\"active\"><a href=";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013urzBundle_Homepage"), "html", null, true);
        echo " ><i class=\"icon-home icon-white\"></i> Accueil</a></li>
                                    <li><a href=";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Accueil"]) ? $context["Accueil"] : $this->getContext($context, "Accueil")), "Lien"), "PremierLien"), "html", null, true);
        echo "><i class=\"icon-barcode\"></i> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Accueil"]) ? $context["Accueil"] : $this->getContext($context, "Accueil")), "Lien"), "ItemPremier"), "html", null, true);
        echo "</a></li>
                                    <li><a href=";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Accueil"]) ? $context["Accueil"] : $this->getContext($context, "Accueil")), "Lien"), "DeuxiemeLien"), "html", null, true);
        echo "><i class=\"icon-book \"></i> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Accueil"]) ? $context["Accueil"] : $this->getContext($context, "Accueil")), "Lien"), "ItemDeuxieme"), "html", null, true);
        echo "</a></li>
                                    <li><a href=\"#\"><i class=\"i\"></i> Misc</a></li>
                                </ul>
                            </div>
                    ";
    }

    // line 72
    public function block_body($context, array $blocks = array())
    {
    }

    // line 80
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 72,  199 => 61,  193 => 60,  182 => 54,  179 => 53,  174 => 8,  168 => 7,  110 => 43,  56 => 16,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 80,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 80,  112 => 42,  82 => 30,  65 => 16,  38 => 9,  144 => 50,  141 => 66,  135 => 47,  126 => 45,  109 => 41,  103 => 34,  67 => 19,  61 => 16,  47 => 11,  28 => 3,  105 => 41,  93 => 34,  76 => 22,  72 => 14,  68 => 12,  94 => 39,  88 => 27,  79 => 23,  59 => 22,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 59,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 49,  121 => 45,  118 => 47,  114 => 45,  104 => 36,  100 => 33,  78 => 24,  75 => 23,  71 => 19,  58 => 17,  34 => 11,  91 => 20,  84 => 28,  26 => 2,  27 => 6,  24 => 1,  21 => 1,  44 => 9,  31 => 4,  25 => 4,  19 => 1,  70 => 22,  63 => 24,  46 => 7,  22 => 1,  163 => 63,  155 => 58,  152 => 49,  149 => 72,  145 => 46,  139 => 53,  131 => 42,  123 => 47,  120 => 46,  115 => 39,  106 => 35,  101 => 36,  96 => 21,  83 => 18,  80 => 29,  74 => 16,  66 => 21,  55 => 13,  52 => 15,  50 => 10,  43 => 10,  41 => 7,  37 => 8,  35 => 5,  32 => 7,  29 => 2,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 81,  157 => 56,  153 => 54,  151 => 73,  143 => 54,  138 => 51,  136 => 52,  133 => 43,  130 => 47,  122 => 48,  119 => 36,  116 => 35,  111 => 38,  108 => 42,  102 => 30,  98 => 22,  95 => 34,  92 => 28,  89 => 19,  85 => 31,  81 => 40,  73 => 19,  64 => 17,  60 => 17,  57 => 14,  54 => 10,  51 => 12,  48 => 10,  45 => 8,  42 => 8,  39 => 6,  36 => 8,  33 => 3,  30 => 3,);
    }
}
