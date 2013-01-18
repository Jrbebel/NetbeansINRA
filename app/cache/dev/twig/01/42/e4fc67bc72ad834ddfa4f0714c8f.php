<?php

/* Inra2013urzBundle:Registration:ListeAgent.html.twig */
class __TwigTemplate_0142e4fc67bc72ad834ddfa4f0714c8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("Inra2013urzBundle:Default:IndexAdmin.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Inra2013urzBundle:Default:IndexAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Gestion des Agents";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
";
        // line 6
        if (((isset($context["Status"]) ? $context["Status"] : $this->getContext($context, "Status")) == "Delete")) {
            // line 7
            echo "
<div class=\"alert alert-error\">
    Votre agent à bien été supprimé
</div>

";
        }
        // line 13
        echo "

<table class=\"table table-striped\">

    <thead><tr>

            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            <th>Fonction</th>
              <th>Roles</th>
            <th>Activé</th>
            <th>Dernière visite</th>
            <th>Delete</th>


        </tr></thead>


";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["liste"]) {
            // line 33
            echo "
    <tr>

        <td><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_UpdateAgent", array("id" => $this->getAttribute((isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste")), "id"))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste")), "Nom"), "html", null, true);
            echo "</a></td>
        <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste")), "Prenom"), "html", null, true);
            echo "</td>
        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste")), "email"), "html", null, true);
            echo "</td>
        <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste")), "Fonction"), "html", null, true);
            echo "</td>
        <td>

";
            // line 42
            if (($this->getAttribute($this->getAttribute((isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste")), "roles"), 0, array(), "array") == "ROLE_USER")) {
                // line 43
                echo "
Utilisateur

";
            } elseif (($this->getAttribute($this->getAttribute((isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste")), "roles"), 0, array(), "array") == "ROLE_ADMIN")) {
                // line 47
                echo "
Responsable

";
            } elseif (($this->getAttribute($this->getAttribute((isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste")), "roles"), 0, array(), "array") == "ROLE_SUPER_ADMIN")) {
                // line 51
                echo "
Administrateur

";
            }
            // line 55
            echo "        
        
        
        
        </td>
        <td>
        ";
            // line 61
            if (($this->getAttribute((isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste")), "enabled") == 1)) {
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_ActiveAgent", array("enable" => $this->getAttribute((isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste")), "enabled"), "username" => $this->getAttribute((isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste")), "username"))), "html", null, true);
                echo "\"><img height=\"20\" width=\"20\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/user_blue.png"), "html", null, true);
                echo "\" /></a> 
";
            } elseif (twig_test_empty($this->getAttribute((isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste")), "enabled"))) {
                // line 63
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_ActiveAgent", array("enable" => 0, "username" => $this->getAttribute((isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste")), "username"))), "html", null, true);
                echo "\"><img height=\"20\" width=\"20\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/user_red.png"), "html", null, true);
                echo "\" /></a>
";
            }
            // line 65
            echo "
                    </td>
                    <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste")), "lastLogin"), "d/m/Y H:i:s"), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_DeleteAgent", array("id" => $this->getAttribute((isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste")), "id"))), "html", null, true);
            echo "\"><img height=\"20\" width=\"20\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/delete.png"), "html", null, true);
            echo "\" onclick=\"return confirm('Voulez vous vraiment supprimer cette agent ?')\" /></a></td>
                </tr>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['liste'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 72
        echo "
            </table>

<div  style=\"text-align: center \" class=\"pagination\">
    ";
        // line 76
        echo $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "render", array(), "method");
        echo "
</div>


";
    }

    public function getTemplateName()
    {
        return "Inra2013urzBundle:Registration:ListeAgent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 76,  166 => 72,  154 => 68,  150 => 67,  146 => 65,  138 => 63,  129 => 61,  121 => 55,  115 => 51,  109 => 47,  103 => 43,  101 => 42,  95 => 39,  91 => 38,  87 => 37,  81 => 36,  76 => 33,  72 => 32,  51 => 13,  43 => 7,  41 => 6,  38 => 5,  35 => 4,  29 => 2,);
    }
}
