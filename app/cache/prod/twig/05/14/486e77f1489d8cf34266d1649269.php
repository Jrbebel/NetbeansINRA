<?php

/* ::base.html.twig */
class __TwigTemplate_0514486e77f1489d8cf34266d1649269 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\"
         
    </head>
    <body>

        <div class=\"container-fluid\">

            <div class=\"row-fluid\">
                <div class=\"span3\"><img  style=\" margin-top: 10px; height: 200px; width: 210px\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/suzlabo.JPG"), "html", null, true);
        echo "\" /></div>
                <div class=\"span9\"><h1 style=\"text-align: center \"><div class=\"hero-unit\">UNITÉ DE RECHERCHE ZOOTECHNIQUE LABORATOIRE D'ANALYSE</div></h1></div>
            </div> 
            <div class=\"row-fluid\"  style=\"margin-top: 50px\">

                <div class=\"span3\" > 
               
   <div>
";
        // line 25
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 26
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_show"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "username")), "FOSUserBundle"), "html", null, true);
            echo "</a> |
    <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
            echo "\">
        ";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
    </a>
";
        } else {
            // line 31
            echo "
   
    <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_login"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a> |
    <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.register", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
";
        }
        // line 36
        echo "</div>

";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "getFlashes", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["flash"]) {
            // line 39
            echo "<div class=\"";
            echo twig_escape_filter($this->env, (isset($context["flash"]) ? $context["flash"] : null), "html", null, true);
            echo "\">
    ";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["key"]) ? $context["key"] : null), array(), "FOSUserBundle"), "html", null, true);
            echo "
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['flash'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 43
        echo "
                    
                    
                    <ul class=\"nav nav-tabs nav-stacked\">
                        <li class=\"nav-header\">La sera le menu</li>
                        <li class=\"active\"><a href=\"#\">Home</a></li>
                        <li><a href=\"#\">Library</a></li>
                        <li><a href=\"#\">Library</a></li>
                        <li><a href=\"#\">Library</a></li>
                        <li><a href=\"#\">Library</a></li>
                        <li><a href=\"#\">Library</a></li>
                        <li><a href=\"#\">Library</a></li>
                        <li><a href=\"#\">Library</a></li>
                    </ul>

                </div>

                <div class=\"span9\" style=\"height: 300px\">

             
   ";
        // line 63
        $this->displayBlock('body', $context, $blocks);
        // line 64
        echo "                </div>

            </div>
        </div>     

    
        ";
        // line 70
        $this->displayBlock('javascripts', $context, $blocks);
        // line 71
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 63
    public function block_body($context, array $blocks = array())
    {
    }

    // line 70
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
        return array (  177 => 70,  172 => 63,  167 => 7,  161 => 6,  155 => 71,  153 => 70,  145 => 64,  143 => 63,  121 => 43,  112 => 40,  107 => 39,  103 => 38,  99 => 36,  92 => 34,  86 => 33,  82 => 31,  76 => 28,  72 => 27,  65 => 26,  63 => 25,  52 => 17,  34 => 7,  23 => 1,  60 => 9,  55 => 7,  50 => 6,  47 => 5,  41 => 9,  39 => 5,  36 => 8,  30 => 6,);
    }
}
