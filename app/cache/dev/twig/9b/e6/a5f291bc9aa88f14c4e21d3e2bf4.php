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
        if (($this->getContext($context, "Status") == "Delete")) {
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
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "pagination"));
        foreach ($context['_seq'] as $context["_key"] => $context["liste"]) {
            // line 33
            echo "
    <tr>

        <td><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_UpdateAgent", array("id" => $this->getAttribute($this->getContext($context, "liste"), "id"))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "liste"), "Nom"), "html", null, true);
            echo "</a></td>
        <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "liste"), "Prenom"), "html", null, true);
            echo "</td>
        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "liste"), "email"), "html", null, true);
            echo "</td>
        <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "liste"), "Fonction"), "html", null, true);
            echo "</td>
        <td>

";
            // line 42
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "liste"), "roles"), 0, array(), "array") == "ROLE_USER")) {
                // line 43
                echo "
Utilisateur

";
            } elseif (($this->getAttribute($this->getAttribute($this->getContext($context, "liste"), "roles"), 0, array(), "array") == "ROLE_ADMIN")) {
                // line 47
                echo "
Responsable

";
            } elseif (($this->getAttribute($this->getAttribute($this->getContext($context, "liste"), "roles"), 0, array(), "array") == "ROLE_SUPER_ADMIN")) {
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
            if (($this->getAttribute($this->getContext($context, "liste"), "enabled") == 1)) {
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_ActiveAgent", array("enable" => $this->getAttribute($this->getContext($context, "liste"), "enabled"), "username" => $this->getAttribute($this->getContext($context, "liste"), "username"))), "html", null, true);
                echo "\"><img height=\"20\" width=\"20\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/user_blue.png"), "html", null, true);
                echo "\" /></a> 
";
            } elseif (twig_test_empty($this->getAttribute($this->getContext($context, "liste"), "enabled"))) {
                // line 63
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_ActiveAgent", array("enable" => 0, "username" => $this->getAttribute($this->getContext($context, "liste"), "username"))), "html", null, true);
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
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "liste"), "lastLogin"), "d/m/Y H:i:s"), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Inra2013Bundle_DeleteAgent", array("id" => $this->getAttribute($this->getContext($context, "liste"), "id"))), "html", null, true);
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
        echo $this->getAttribute($this->getContext($context, "pagination"), "render", array(), "method");
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
        return array (  166 => 72,  129 => 61,  158 => 57,  150 => 67,  146 => 65,  140 => 52,  87 => 37,  53 => 8,  40 => 4,  203 => 143,  107 => 52,  99 => 32,  77 => 24,  23 => 3,  49 => 10,  210 => 72,  199 => 61,  193 => 60,  182 => 54,  179 => 75,  174 => 8,  168 => 7,  110 => 43,  56 => 11,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 80,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 80,  112 => 37,  82 => 26,  65 => 16,  38 => 5,  144 => 50,  141 => 66,  135 => 49,  126 => 69,  109 => 47,  103 => 43,  67 => 19,  61 => 16,  47 => 8,  91 => 38,  84 => 28,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 59,  186 => 76,  180 => 72,  172 => 76,  159 => 61,  154 => 68,  147 => 55,  132 => 48,  127 => 44,  121 => 55,  118 => 47,  114 => 45,  104 => 51,  100 => 33,  78 => 24,  75 => 23,  71 => 23,  34 => 5,  44 => 9,  94 => 30,  88 => 27,  59 => 22,  105 => 35,  93 => 34,  79 => 23,  76 => 33,  72 => 32,  68 => 19,  58 => 13,  24 => 6,  27 => 4,  25 => 3,  21 => 2,  31 => 2,  26 => 2,  19 => 1,  70 => 18,  63 => 17,  46 => 7,  22 => 2,  163 => 63,  155 => 58,  152 => 49,  149 => 72,  145 => 46,  139 => 53,  131 => 42,  123 => 47,  120 => 46,  115 => 51,  106 => 35,  101 => 42,  96 => 21,  83 => 18,  80 => 29,  74 => 16,  66 => 18,  55 => 17,  52 => 10,  50 => 7,  43 => 7,  41 => 6,  37 => 3,  35 => 4,  32 => 7,  29 => 2,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 81,  157 => 56,  153 => 54,  151 => 73,  143 => 53,  138 => 63,  136 => 52,  133 => 43,  130 => 47,  122 => 48,  119 => 36,  116 => 35,  111 => 38,  108 => 42,  102 => 30,  98 => 22,  95 => 39,  92 => 28,  89 => 19,  85 => 31,  81 => 36,  73 => 19,  64 => 17,  60 => 12,  57 => 14,  54 => 12,  51 => 13,  48 => 11,  45 => 9,  42 => 5,  39 => 5,  36 => 4,  33 => 6,  30 => 3,);
    }
}
