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
        return array (  86 => 27,  62 => 41,  90 => 29,  294 => 131,  291 => 130,  285 => 126,  275 => 119,  267 => 113,  252 => 111,  248 => 109,  240 => 106,  234 => 104,  227 => 101,  224 => 100,  221 => 99,  217 => 98,  208 => 95,  176 => 88,  173 => 87,  166 => 72,  129 => 61,  69 => 19,  158 => 57,  150 => 67,  146 => 65,  140 => 52,  99 => 32,  87 => 37,  77 => 24,  53 => 17,  40 => 4,  210 => 72,  199 => 61,  193 => 89,  182 => 54,  179 => 75,  174 => 8,  168 => 7,  110 => 43,  56 => 18,  23 => 3,  49 => 10,  20 => 1,  301 => 136,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 102,  222 => 73,  220 => 72,  215 => 97,  211 => 96,  204 => 94,  198 => 92,  185 => 61,  183 => 60,  177 => 58,  160 => 80,  112 => 37,  82 => 26,  65 => 20,  38 => 10,  144 => 50,  141 => 66,  135 => 49,  126 => 45,  109 => 47,  103 => 34,  67 => 18,  61 => 16,  47 => 14,  105 => 35,  93 => 34,  76 => 33,  72 => 32,  68 => 19,  27 => 5,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 59,  186 => 76,  180 => 72,  172 => 76,  159 => 80,  154 => 68,  147 => 55,  132 => 48,  127 => 44,  121 => 55,  118 => 63,  114 => 39,  104 => 35,  100 => 33,  78 => 25,  75 => 23,  71 => 19,  58 => 15,  34 => 5,  91 => 29,  84 => 34,  94 => 30,  88 => 27,  79 => 25,  59 => 18,  26 => 2,  21 => 2,  28 => 6,  24 => 4,  44 => 13,  31 => 18,  25 => 13,  19 => 5,  70 => 22,  63 => 20,  46 => 13,  22 => 10,  163 => 63,  155 => 58,  152 => 49,  149 => 72,  145 => 46,  139 => 53,  131 => 42,  123 => 47,  120 => 43,  115 => 51,  106 => 36,  101 => 42,  96 => 21,  83 => 18,  80 => 26,  74 => 24,  66 => 21,  55 => 17,  52 => 33,  50 => 8,  43 => 12,  41 => 11,  37 => 3,  35 => 20,  32 => 7,  29 => 6,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 81,  157 => 56,  153 => 54,  151 => 73,  143 => 75,  138 => 63,  136 => 71,  133 => 43,  130 => 47,  122 => 65,  119 => 36,  116 => 35,  111 => 38,  108 => 36,  102 => 30,  98 => 22,  95 => 39,  92 => 30,  89 => 28,  85 => 27,  81 => 36,  73 => 23,  64 => 23,  60 => 19,  57 => 18,  54 => 34,  51 => 14,  48 => 30,  45 => 9,  42 => 25,  39 => 11,  36 => 4,  33 => 8,  30 => 7,);
    }
}
