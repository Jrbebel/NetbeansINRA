<?php

/* PunkAveFileUploaderBundle:Default:templates.html.twig */
class __TwigTemplate_fafe043af62a21d1a3b2f891ede7cd74 extends Twig_Template
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
        // line 5
        echo "
";
        // line 10
        echo "
";
        // line 13
        echo "
<script type=\"text/template\" id=\"file-uploader-template\">
  <div class=\"uploader\" data-dropzone=\"1\" style=\"margin-top: 10px; margin-bottom: 10px\">
    <div class=\"controls\" style=\"margin-bottom: 20px\">
      ";
        // line 18
        echo "      <input type=\"file\" data-files=\"1\" multiple />
      <span class=\"spinner\" data-spinner=\"1\" style=\"display: none\">
        <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/punkavefileuploader/images/spinner.gif"), "html", null, true);
        echo "\" /> Uploading...
      </span>
    </div>
    <ul class=\"thumbnails\" data-thumbnails=\"1\">
        ";
        // line 25
        echo "    </ul>
  </div>
</script>

";
        // line 30
        echo "<script type=\"text/template\" id=\"file-uploader-file-template\">
    <li data-name=\"<%- name %>\" class=\"thumbnail\">
        ";
        // line 33
        echo "        ";
        // line 34
        echo "        <% if (url.match(new RegExp('(\\.gif|\\.jpg|\\.jpeg|\\.png)\$', 'i'))) { %>
            <img src=\"<%- thumbnail_url %>\" class=\"thumbnail-image\" />
        <% } %>
        <div class=\"caption\">
            <span class=\"filename\"><%- name %></span>
            <a rel=\"tooltip\" title=\"Download Original\" class=\"download thumbnail-action btn\" target=\"download\" href=\"<%- url %>\"><i class=\"icon-download\"></i></a>
            ";
        // line 41
        echo "            <a rel=\"tooltip\" title=\"Delete\" data-action=\"delete\" class=\"delete thumbnail-action btn\" href=\"#delete\"><i class=\"icon-trash\"></i></a>
        </div>
    </li>
</script>

";
    }

    public function getTemplateName()
    {
        return "PunkAveFileUploaderBundle:Default:templates.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 27,  150 => 67,  146 => 65,  129 => 61,  90 => 29,  87 => 37,  53 => 17,  168 => 89,  124 => 70,  40 => 7,  69 => 21,  207 => 78,  202 => 70,  181 => 57,  174 => 52,  166 => 72,  128 => 50,  110 => 63,  97 => 39,  77 => 29,  62 => 41,  56 => 18,  23 => 3,  49 => 10,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 58,  183 => 60,  177 => 58,  160 => 85,  112 => 42,  82 => 24,  65 => 20,  38 => 10,  144 => 50,  141 => 70,  135 => 47,  126 => 71,  109 => 47,  103 => 34,  67 => 19,  61 => 16,  47 => 14,  105 => 35,  93 => 20,  76 => 33,  72 => 32,  68 => 12,  27 => 5,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 59,  189 => 77,  186 => 76,  180 => 72,  172 => 76,  159 => 61,  154 => 68,  147 => 79,  132 => 73,  127 => 49,  121 => 55,  118 => 44,  114 => 39,  104 => 35,  100 => 33,  78 => 25,  75 => 23,  71 => 19,  58 => 19,  34 => 5,  91 => 29,  84 => 28,  94 => 30,  88 => 27,  79 => 25,  59 => 18,  26 => 2,  21 => 2,  28 => 6,  24 => 4,  44 => 13,  31 => 18,  25 => 13,  19 => 5,  70 => 15,  63 => 22,  46 => 13,  22 => 10,  163 => 63,  155 => 82,  152 => 78,  149 => 51,  145 => 46,  139 => 50,  131 => 51,  123 => 47,  120 => 43,  115 => 51,  106 => 36,  101 => 42,  96 => 21,  83 => 18,  80 => 26,  74 => 24,  66 => 21,  55 => 17,  52 => 33,  50 => 11,  43 => 12,  41 => 11,  37 => 8,  35 => 20,  32 => 7,  29 => 6,  184 => 70,  178 => 71,  171 => 51,  165 => 88,  162 => 57,  157 => 56,  153 => 54,  151 => 52,  143 => 71,  138 => 63,  136 => 50,  133 => 64,  130 => 47,  122 => 44,  119 => 67,  116 => 35,  111 => 38,  108 => 36,  102 => 41,  98 => 22,  95 => 39,  92 => 30,  89 => 28,  85 => 27,  81 => 36,  73 => 23,  64 => 17,  60 => 19,  57 => 18,  54 => 34,  51 => 14,  48 => 30,  45 => 9,  42 => 25,  39 => 11,  36 => 4,  33 => 8,  30 => 7,);
    }
}
