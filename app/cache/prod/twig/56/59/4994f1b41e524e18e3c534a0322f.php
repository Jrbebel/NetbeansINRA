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
            'menu2' => array($this, 'block_menu2'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap_final/css/bootstrap.css"), "html", null, true);
        echo "\" /> 
        <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\" ></script>
        <script type=\"text/javascript\"  src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap_final/js/bootstrap.js"), "html", null, true);
        echo "\" ></script>
        <script type=\"text/javascript\"  src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/downdrop.js"), "html", null, true);
        echo "\" ></script>


    </head>
    <body>

        <div class=\"container-fluid\">

            <div class=\"row-fluid \">
                <div class=\"span3\"><img  style=\" margin-top: 10px; height: 200px; width: 285px\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/suzlabo.JPG"), "html", null, true);
        echo "\" /></div>
                <div class=\"span9\"><h1 style=\"text-align: center; margin-top: 50px\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Accueil"]) ? $context["Accueil"] : null), "Titre"), "html", null, true);
        echo "</h1></div>
            </div> 
            <div class=\"row-fluid\"  style=\"margin-top: 50px\">

                <div class=\"span3\" > 

                    <div class=\"well\" >
";
        // line 30
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 31
            echo "
                            <strong><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_show"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "username")), "FOSUserBundle"), "html", null, true);
            echo "</a></strong><br> <br>                          

                            <div class=\"btn-group navbar\">
                                <a class=\"btn btn-primary\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
            echo "\"><i class=\"icon-user icon-white\"></i>   ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>

                            </div>



";
        } else {
            // line 42
            echo "
";
            // line 43
            echo $this->env->getExtension('actions')->renderAction("FOSUserBundle:Security:login", array(), array());
            // line 44
            echo "
";
        }
        // line 46
        echo "                        </div>

";
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "getFlashes", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["flash"]) {
            // line 49
            echo "                        <div class=\"";
            echo twig_escape_filter($this->env, (isset($context["flash"]) ? $context["flash"] : null), "html", null, true);
            echo "\">
    ";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["key"]) ? $context["key"] : null), array(), "FOSUserBundle"), "html", null, true);
            echo "
                            </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['flash'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 53
        echo "
                    ";
        // line 54
        $this->displayBlock('menu', $context, $blocks);
        // line 67
        $this->displayBlock('menu2', $context, $blocks);
        // line 69
        echo "                        </div>
                        <div class=\"span9\" style=\"height: 300px\">


   ";
        // line 73
        $this->displayBlock('body', $context, $blocks);
        // line 74
        echo "
                        </div>


                    </div>     


        ";
        // line 81
        $this->displayBlock('javascripts', $context, $blocks);
        // line 82
        echo "
                    <script type=\"text/javascript\">


                        \$(document).ready(function() {

                            \$(\"#filtre li a\").click(function() {

                                \$('#filtre li', \$(this).parent()).removeClass(\"active\");
                                
                                \$(this).addClass(\"active\");
                                return false;

                            });
                        });

                        </script>


                </body>
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

    // line 54
    public function block_menu($context, array $blocks = array())
    {
        // line 55
        echo "


                            <div class=\"well\" >
                                <ul class=\"nav nav-list\">
                                    <li class=\"active\"><a href=";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013urzBundle_Homepage"), "html", null, true);
        echo " ><i class=\"icon-home icon-white\"></i> Accueil</a></li>
                                    <li><a href=";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Accueil"]) ? $context["Accueil"] : null), "Lien"), "PremierLien"), "html", null, true);
        echo "><i class=\"icon-barcode\"></i> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Accueil"]) ? $context["Accueil"] : null), "Lien"), "ItemPremier"), "html", null, true);
        echo "</a></li>
                                    <li><a href=";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Accueil"]) ? $context["Accueil"] : null), "Lien"), "DeuxiemeLien"), "html", null, true);
        echo "><i class=\"icon-book \"></i> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Accueil"]) ? $context["Accueil"] : null), "Lien"), "ItemDeuxieme"), "html", null, true);
        echo "</a></li>
                                    <li><a href=\"#\"><i class=\"i\"></i> Misc</a></li>
                                </ul>
                            </div>
                    ";
    }

    // line 67
    public function block_menu2($context, array $blocks = array())
    {
        // line 68
        echo " ";
    }

    // line 73
    public function block_body($context, array $blocks = array())
    {
    }

    // line 81
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
        return array (  243 => 81,  238 => 73,  234 => 68,  231 => 67,  214 => 61,  210 => 60,  203 => 55,  200 => 54,  195 => 8,  164 => 82,  145 => 69,  129 => 50,  124 => 49,  110 => 43,  107 => 42,  87 => 32,  52 => 12,  37 => 8,  56 => 13,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 62,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  149 => 51,  123 => 47,  120 => 48,  112 => 44,  106 => 35,  82 => 30,  65 => 16,  38 => 6,  155 => 58,  144 => 50,  141 => 54,  139 => 50,  135 => 47,  126 => 45,  109 => 41,  103 => 34,  101 => 36,  70 => 20,  67 => 19,  61 => 16,  47 => 9,  28 => 3,  105 => 24,  96 => 21,  93 => 20,  83 => 18,  76 => 22,  72 => 23,  68 => 22,  50 => 10,  94 => 39,  88 => 27,  79 => 23,  59 => 22,  43 => 6,  32 => 4,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 7,  186 => 76,  180 => 72,  172 => 67,  163 => 63,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 49,  121 => 45,  118 => 44,  114 => 42,  104 => 36,  100 => 33,  78 => 24,  75 => 23,  71 => 19,  63 => 24,  58 => 17,  34 => 11,  91 => 20,  84 => 31,  74 => 16,  66 => 15,  55 => 15,  41 => 7,  46 => 7,  26 => 2,  22 => 1,  27 => 6,  24 => 6,  29 => 2,  21 => 1,  44 => 10,  35 => 5,  31 => 4,  25 => 1,  19 => 1,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 81,  157 => 56,  153 => 74,  151 => 73,  143 => 67,  138 => 53,  136 => 50,  133 => 43,  130 => 47,  122 => 44,  119 => 36,  116 => 46,  111 => 32,  108 => 31,  102 => 30,  98 => 22,  95 => 35,  92 => 28,  89 => 19,  85 => 24,  81 => 40,  73 => 19,  64 => 17,  60 => 17,  57 => 14,  54 => 10,  51 => 9,  48 => 11,  45 => 8,  42 => 8,  39 => 9,  36 => 5,  33 => 7,  30 => 3,);
    }
}
