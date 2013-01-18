<?php

/* Inra2013urzBundle:Default:IndexAdmin.html.twig */
class __TwigTemplate_9259b4802f603d8068a6e6e39fa2dd4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Bienvenue Administrateur";
    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        // line 6
        echo "<ul class=\"nav nav-list\">
  <li class=\"active\"><a href=\"Inra2013urzBundle:Default:IndexAdmin.html.twig\"><i class=\"icon-home icon-white\"></i> Home</a></li>
  <li><a href=";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013urzBundle_ShowAgent", array("Default" => "Default")), "html", null, true);
        echo "><i class=\"icon-user\"></i>Liste des agents</a></li>
  <li><a href=";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013urzBundle_CreateAgent"), "html", null, true);
        echo "><i class=\"icon-user\"></i>Crée agent</a></li>
  <li><a href=\"#\"><i class=\"icon-pencil\"></i> Applications</a></li>
  <li><a href=\"#\"><i class=\"i\"></i> Misc</a></li>
</ul>

";
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        echo " <h5>Vous etes dans la partie administrateur</h5>";
    }

    public function getTemplateName()
    {
        return "Inra2013urzBundle:Default:IndexAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 16,  47 => 9,  43 => 8,  39 => 6,  36 => 5,  30 => 3,);
    }
}
