<?php

/* Inra2013urzBundle::template.html.twig */
class __TwigTemplate_feafe660d169d746a2c83b82c9faaf4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->loadTemplate("PunkAveFileUploaderBundle:Default:templates.html.twig")->display($context);
        // line 2
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "eb5c6bc_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_eb5c6bc_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/eb5c6bc_jquery-1.9.0_1.js");
            // line 8
            echo "   
";
            // asset "eb5c6bc_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_eb5c6bc_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/eb5c6bc_jquery-ui-1.10.0.custom_2.js");
            echo "   
";
            // asset "eb5c6bc_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_eb5c6bc_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/eb5c6bc_underscore-min_3.js");
            echo "   
";
            // asset "eb5c6bc_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_eb5c6bc_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/eb5c6bc_jquery.fileupload_4.js");
            echo "   
";
            // asset "eb5c6bc_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_eb5c6bc_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/eb5c6bc_FileUploader_5.js");
            echo "   
";
        } else {
            // asset "eb5c6bc"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_eb5c6bc") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/eb5c6bc.js");
            echo "   
";
        }
        unset($context["asset_url"]);
    }

    public function getTemplateName()
    {
        return "Inra2013urzBundle::template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 89,  124 => 70,  40 => 7,  69 => 21,  207 => 78,  202 => 70,  181 => 57,  174 => 52,  166 => 8,  128 => 50,  110 => 63,  97 => 39,  77 => 29,  62 => 20,  56 => 16,  23 => 3,  49 => 10,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 58,  183 => 60,  177 => 58,  160 => 85,  112 => 42,  82 => 24,  65 => 16,  38 => 4,  144 => 50,  141 => 70,  135 => 47,  126 => 71,  109 => 41,  103 => 34,  67 => 19,  61 => 16,  47 => 11,  105 => 24,  93 => 20,  76 => 22,  72 => 27,  68 => 12,  27 => 4,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 59,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 79,  147 => 79,  132 => 73,  127 => 49,  121 => 45,  118 => 44,  114 => 46,  104 => 36,  100 => 40,  78 => 25,  75 => 23,  71 => 19,  58 => 19,  34 => 5,  91 => 20,  84 => 28,  94 => 39,  88 => 27,  79 => 23,  59 => 16,  26 => 2,  21 => 2,  28 => 7,  24 => 6,  44 => 9,  31 => 4,  25 => 8,  19 => 1,  70 => 15,  63 => 19,  46 => 9,  22 => 1,  163 => 63,  155 => 82,  152 => 78,  149 => 51,  145 => 46,  139 => 50,  131 => 51,  123 => 47,  120 => 46,  115 => 66,  106 => 62,  101 => 59,  96 => 21,  83 => 18,  80 => 24,  74 => 28,  66 => 15,  55 => 16,  52 => 15,  50 => 11,  43 => 8,  41 => 9,  37 => 8,  35 => 3,  32 => 13,  29 => 2,  184 => 70,  178 => 71,  171 => 51,  165 => 88,  162 => 57,  157 => 56,  153 => 54,  151 => 52,  143 => 71,  138 => 75,  136 => 50,  133 => 64,  130 => 47,  122 => 44,  119 => 67,  116 => 35,  111 => 38,  108 => 37,  102 => 41,  98 => 22,  95 => 34,  92 => 28,  89 => 19,  85 => 27,  81 => 40,  73 => 19,  64 => 17,  60 => 17,  57 => 17,  54 => 12,  51 => 9,  48 => 9,  45 => 9,  42 => 8,  39 => 5,  36 => 4,  33 => 4,  30 => 3,);
    }
}
