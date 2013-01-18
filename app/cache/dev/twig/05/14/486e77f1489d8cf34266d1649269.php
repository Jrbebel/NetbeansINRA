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
              <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"
    </head>
    <body>

        <div class=\"container-fluid\">

            <div class=\"row-fluid \">
                <div class=\"span3\"><img  style=\" margin-top: 10px; height: 200px; width: 285px\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/suzlabo.JPG"), "html", null, true);
        echo "\" /></div>
                <div class=\"span9\"><h1 style=\"text-align: center \">UNITÉ DE RECHERCHE ZOOTECHNIQUE LABORATOIRE D'ANALYSE</h1></div>
            </div> 
            <div class=\"row-fluid\"  style=\"margin-top: 50px\">

                <div class=\"span3\" > 

                    <div>
";
        // line 25
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 26
            echo "                            <div class=\"btn-group navbar\">
  <a class=\"btn btn-primary\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
            echo "\"><i class=\"icon-user icon-white\"></i>   ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>

</div>
                            
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_show"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username")), "FOSUserBundle"), "html", null, true);
            echo "</a><br>
                      
";
        } else {
            // line 34
            echo "
";
            // line 35
            echo $this->env->getExtension('actions')->renderAction("FOSUserBundle:Security:login", array(), array());
            // line 36
            echo "
";
        }
        // line 38
        echo "                            </div>

";
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "getFlashes", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["flash"]) {
            // line 41
            echo "                            <div class=\"";
            echo twig_escape_filter($this->env, (isset($context["flash"]) ? $context["flash"] : $this->getContext($context, "flash")), "html", null, true);
            echo "\">
    ";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), array(), "FOSUserBundle"), "html", null, true);
            echo "
                                </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['flash'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 45
        echo "
                    ";
        // line 46
        $this->displayBlock('menu', $context, $blocks);
        // line 55
        echo "
                            </div>

                            <div class=\"span9\" style=\"height: 300px\">


   ";
        // line 61
        $this->displayBlock('body', $context, $blocks);
        // line 62
        echo "
                            </div>

                        </div>
                    </div>     


        ";
        // line 69
        $this->displayBlock('javascripts', $context, $blocks);
        // line 70
        echo "                </body>
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

    // line 46
    public function block_menu($context, array $blocks = array())
    {
        // line 47
        echo "
<ul class=\"nav nav-list\">
  <li class=\"active\"><a href=\"#\"><i class=\"icon-home icon-white\"></i> Home</a></li>
  <li><a href=\"#\"><i class=\"icon-book\"></i> Library</a></li>
  <li><a href=\"#\"><i class=\"icon-pencil\"></i> Applications</a></li>
  <li><a href=\"#\"><i class=\"i\"></i> Misc</a></li>
</ul>
                    ";
    }

    // line 61
    public function block_body($context, array $blocks = array())
    {
    }

    // line 69
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
        return array (  182 => 69,  177 => 61,  166 => 47,  163 => 46,  158 => 7,  152 => 6,  146 => 70,  144 => 69,  135 => 62,  133 => 61,  125 => 55,  123 => 46,  120 => 45,  111 => 42,  106 => 41,  102 => 40,  98 => 38,  94 => 36,  92 => 35,  89 => 34,  81 => 31,  72 => 27,  69 => 26,  67 => 25,  56 => 17,  46 => 10,  42 => 9,  37 => 8,  35 => 7,  31 => 6,  24 => 1,);
    }
}
