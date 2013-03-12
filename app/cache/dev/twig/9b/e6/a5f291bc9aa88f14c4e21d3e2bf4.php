<?php

/* Inra2013urzBundle:Registration:ListeAgent.html.twig */
class __TwigTemplate_9be6a5f291bc9aa88f14c4e21d3e2bf4 extends Twig_Template
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
        return array (  166 => 72,  150 => 67,  146 => 65,  90 => 29,  53 => 17,  49 => 10,  23 => 3,  240 => 81,  235 => 73,  231 => 68,  228 => 67,  217 => 62,  207 => 60,  200 => 55,  197 => 54,  192 => 8,  164 => 82,  129 => 61,  124 => 49,  110 => 43,  107 => 42,  87 => 37,  56 => 18,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 61,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  112 => 44,  82 => 30,  65 => 16,  38 => 5,  144 => 50,  141 => 54,  135 => 47,  126 => 45,  109 => 47,  103 => 43,  67 => 19,  61 => 16,  47 => 14,  28 => 6,  105 => 24,  93 => 20,  76 => 33,  72 => 32,  68 => 22,  94 => 39,  88 => 27,  79 => 23,  59 => 22,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 77,  186 => 7,  180 => 72,  172 => 76,  159 => 61,  154 => 68,  147 => 55,  132 => 48,  127 => 49,  121 => 55,  118 => 44,  114 => 42,  104 => 35,  100 => 33,  78 => 24,  75 => 23,  71 => 19,  58 => 13,  34 => 5,  91 => 38,  84 => 31,  26 => 2,  27 => 4,  24 => 4,  21 => 1,  44 => 13,  31 => 4,  25 => 3,  19 => 2,  70 => 19,  63 => 20,  46 => 7,  22 => 3,  163 => 63,  155 => 58,  152 => 49,  149 => 51,  145 => 69,  139 => 50,  131 => 42,  123 => 47,  120 => 43,  115 => 51,  106 => 36,  101 => 42,  96 => 21,  83 => 18,  80 => 26,  74 => 24,  66 => 21,  55 => 15,  52 => 12,  50 => 8,  43 => 7,  41 => 6,  37 => 8,  35 => 4,  32 => 4,  29 => 2,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 81,  157 => 56,  153 => 74,  151 => 73,  143 => 67,  138 => 63,  136 => 50,  133 => 43,  130 => 47,  122 => 44,  119 => 36,  116 => 46,  111 => 38,  108 => 37,  102 => 30,  98 => 22,  95 => 39,  92 => 30,  89 => 19,  85 => 24,  81 => 36,  73 => 19,  64 => 23,  60 => 19,  57 => 18,  54 => 12,  51 => 13,  48 => 11,  45 => 9,  42 => 12,  39 => 11,  36 => 6,  33 => 8,  30 => 7,);
    }
}
