<?php

/* Inra2013urzBundle::layout.html.twig */
class __TwigTemplate_2e15b76a85bab7fc6596274fa32e8ae2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "

        <div>
            ";
        // line 4
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 6
        echo "        </div>
";
    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 5
        echo "            ";
    }

    public function getTemplateName()
    {
        return "Inra2013urzBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  32 => 4,  27 => 6,  25 => 4,  20 => 1,  70 => 19,  63 => 15,  58 => 13,  54 => 12,  49 => 10,  45 => 9,  36 => 6,  34 => 5,  182 => 69,  177 => 61,  166 => 47,  163 => 46,  158 => 7,  152 => 6,  146 => 70,  144 => 69,  135 => 62,  133 => 61,  125 => 55,  123 => 46,  120 => 45,  111 => 42,  106 => 41,  102 => 40,  98 => 38,  94 => 36,  92 => 35,  89 => 34,  81 => 31,  72 => 27,  69 => 26,  67 => 25,  56 => 17,  46 => 10,  42 => 8,  37 => 8,  35 => 5,  31 => 4,  24 => 1,  28 => 3,);
    }
}
