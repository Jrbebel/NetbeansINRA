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
        return array (  86 => 27,  62 => 41,  52 => 33,  166 => 72,  150 => 67,  146 => 65,  129 => 61,  115 => 51,  90 => 29,  87 => 37,  307 => 142,  297 => 134,  294 => 133,  288 => 129,  278 => 122,  254 => 113,  250 => 111,  242 => 108,  236 => 106,  232 => 104,  229 => 103,  226 => 102,  223 => 101,  219 => 100,  217 => 99,  213 => 98,  206 => 96,  200 => 94,  195 => 91,  175 => 89,  142 => 77,  128 => 71,  124 => 69,  53 => 17,  40 => 4,  69 => 19,  37 => 3,  210 => 97,  199 => 61,  193 => 60,  182 => 54,  179 => 53,  174 => 8,  168 => 87,  110 => 43,  80 => 26,  56 => 18,  23 => 3,  49 => 10,  20 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 116,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 80,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 80,  149 => 72,  123 => 47,  120 => 43,  112 => 42,  106 => 36,  82 => 30,  65 => 20,  38 => 10,  155 => 58,  144 => 78,  141 => 66,  139 => 53,  135 => 75,  126 => 45,  109 => 47,  103 => 34,  101 => 42,  70 => 22,  67 => 18,  61 => 16,  47 => 14,  105 => 35,  96 => 21,  93 => 34,  83 => 18,  76 => 33,  72 => 32,  68 => 12,  50 => 8,  27 => 5,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 59,  186 => 76,  180 => 72,  172 => 76,  163 => 63,  159 => 61,  154 => 68,  147 => 79,  132 => 48,  127 => 49,  121 => 55,  118 => 47,  114 => 39,  104 => 35,  100 => 33,  78 => 25,  75 => 23,  71 => 19,  63 => 20,  58 => 17,  34 => 5,  91 => 29,  84 => 28,  74 => 24,  66 => 21,  55 => 17,  94 => 30,  88 => 27,  79 => 25,  59 => 18,  26 => 2,  21 => 2,  46 => 13,  29 => 6,  22 => 10,  43 => 12,  41 => 11,  28 => 6,  24 => 4,  32 => 7,  44 => 13,  35 => 20,  31 => 18,  25 => 13,  19 => 5,  184 => 70,  178 => 90,  171 => 62,  165 => 58,  162 => 83,  157 => 56,  153 => 80,  151 => 73,  143 => 54,  138 => 63,  136 => 52,  133 => 43,  130 => 47,  122 => 48,  119 => 36,  116 => 35,  111 => 32,  108 => 36,  102 => 30,  98 => 22,  95 => 39,  92 => 30,  89 => 28,  85 => 27,  81 => 36,  73 => 23,  64 => 23,  60 => 19,  57 => 18,  54 => 34,  51 => 14,  48 => 30,  45 => 9,  42 => 25,  39 => 11,  36 => 4,  33 => 8,  30 => 7,);
    }
}
