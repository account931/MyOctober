<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\Users\user\Downloads\OSPanel\domains\localhost\myoctober\MyOctoberX/themes/demo/pages/my-plugin-front-end.htm */
class __TwigTemplate_82755f25e13685c6d4006acbda13bb7671258d7110bbbdd2df9e7f8c23b462fb extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<h1>My Plugin frontend </h1>

<div class=\"col-sm-12 col-xs-12\"> 

";
        // line 7
        echo "

";
        // line 9
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", [], "any", false, false, true, 9);
        // line 10
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "displayColumn", [], "any", false, false, true, 10);
        // line 11
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "noRecordsMessage", [], "any", false, false, true, 11);
        // line 12
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsPage", [], "any", false, false, true, 12);
        // line 13
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsKeyColumn", [], "any", false, false, true, 13);
        // line 14
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsUrlParameter", [], "any", false, false, true, 14);
        // line 15
        echo "
<h3> List by Builder </h3>
<hr>
<ul class=\"record-list\">
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 20
            echo "        <li>
            ";
            // line 22
            echo "            ";
            ob_start();
            // line 23
            echo "                ";
            if (($context["detailsPage"] ?? null)) {
                // line 24
                echo "                    <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(($context["detailsPage"] ?? null), 24, $this->source), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, true, 24)]);
                echo "\">
                ";
            }
            // line 26
            echo "
\t\t\t\t<!-- Display one Column \"img_name\", specified in /pages/my-plugin-front-end-> Record list. Contains link to one page -->
\t\t\t\t<div class=\"col-sm-3 col-xs-3\"> 
\t\t\t\t    <i class=\"fa fa-clone\" style=\"font-size:18px\"></i>
                    <a href=\"";
            // line 30
            echo "my-plugin-front-end-view-one/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "img_id", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], ($context["displayColumn"] ?? null), [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            echo "  </a>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t
\t\t\t\t<!-- Display Column img_blog_id. Added by me. Contains link to one page-->
\t\t\t\t<div class=\"col-sm-3 col-xs-3\"> 
\t\t\t\t    <i class=\"fa fa-clone\" style=\"font-size:18px\"></i> 
                    <a href=\"";
            // line 37
            echo "my-plugin-front-end-view-one/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "img_id", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
            echo "\">  id: ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "img_id", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
            echo " </a>\t\t\t
\t\t\t\t     <!-- my add -->
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<!-- Display  Column created_at. Added by me-->
\t\t\t\t<div class=\"col-sm-3 col-xs-3\">
\t\t\t\t<i class=\"fa fa-clone\" style=\"font-size:18px\"></i>   
\t\t\t\tcreated: ";
            // line 44
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "created_at", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
            echo " <!-- my add -->
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t<!-- Image from SQL table (system_files}, polymorph relation public \$attachOne =[]   -->
\t            <div class=\"col-sm-3 col-xs-3\">
\t                ";
            // line 51
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "avatar", [], "any", false, false, true, 51), "count", [], "any", false, false, true, 51)) {
                echo " 
\t\t                <!-- Only used if u specifiead in model polymorphic relation as  public \$attachOne =[]--> 
\t\t                <!-- <p><i class=\"fa fa-clone\" style=\"font-size:18px\"></i> Image was loaded as : ";
                // line 53
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "avatar", [], "any", false, false, true, 53), "filename", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
                echo ", path (DB {system_files}): <b> ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "avatar", [], "any", false, false, true, 53), "getPath", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
                echo " </b> </p> --> <!-- avata is \$attachOne relation in model -->
\t\t
\t\t                <img  data-src=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "avatar", [], "any", false, false, true, 55), "getPath", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "avatar", [], "any", false, false, true, 55), "getPath", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "avatar", [], "any", false, false, true, 55), "content", [], "any", false, false, true, 55) - ($context["type"] ?? null)), "html", null, true);
                echo "\" style=\"max-width: 10%\" />
\t\t                <!-- End Only used if in model specifiead as public \$attachOne --> 

\t\t           ";
            } else {
                // line 59
                echo "\t\t               <!-- No connected image in SQL table (system_files},  polymorph relation. Show default image -->
\t\t               <img  data-src=\"";
                // line 60
                echo url("/");
                echo "/storage/app/media/My_images/no-image.jpg\" src=\"";
                echo url("/");
                echo "/storage/app/media/My_images/no-image.jpg\" alt=\"no-image\" style=\"max-width: 10%\" />
\t\t           ";
            }
            // line 62
            echo "               </div>
\t           <!-- End Image from SQL table (system_files}, polymorph relation public \$attachOne =[]  -->
\t\t\t   
\t\t\t   
\t\t\t   
\t\t\t   

                ";
            // line 69
            if (($context["detailsPage"] ?? null)) {
                // line 70
                echo "                    </a>
                ";
            }
            // line 72
            echo "            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 73
            echo "        </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 75
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["noRecordsMessage"] ?? null), 75, $this->source), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "</ul>

";
        // line 79
        if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 79) > 1)) {
            // line 80
            echo "    <ul class=\"pagination\">
        ";
            // line 81
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 81) > 1)) {
                // line 82
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 82), "baseFileName", [], "any", false, false, true, 82), 82, $this->source), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 82) - 1)]);
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 84
            echo "
        ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 85)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 86
                echo "            <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 86) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 87
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 87), "baseFileName", [], "any", false, false, true, 87), 87, $this->source), [($context["pageParam"] ?? null) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 87, $this->source), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "
        ";
            // line 91
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 91) > twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 91))) {
                // line 92
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 92), "baseFileName", [], "any", false, false, true, 92), 92, $this->source), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 92) + 1)]);
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 94
            echo "    </ul>
";
        }
        // line 96
        echo "
</div>




<div class=\"col-sm-12 col-xs-12\">
    <hr> 
    <div class=\"col-sm-12 col-xs-12 alert alert-danger\"> List by Component <b>ProductsX </b> registered as  ProductsXComponent</div>

\t<!-- List-group-item Styling -->
    
\t
    ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["ProductsXComponent"] ?? null), "getProductsX", [], "any", false, false, true, 109));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["productMy"]) {
            echo " <!-- Call method getProductsX in my component ProductsXComponent and loop it -->
\t<div class=\"col-sm-12 col-xs-12 list-group-item alert alert-success\">
\t<p class=\"list-group-item\"> ID:      ";
            // line 111
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["productMy"], "img_id", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
            echo "</p>       <!--display id ---->
    <p class=\"list-group-item\"> Name:    ";
            // line 112
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["productMy"], "img_name", [], "any", false, false, true, 112), 112, $this->source);
            echo "</p> <!--display name -->
\t<p class=\"list-group-item\"> Created: ";
            // line 113
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["productMy"], "created_at", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
            echo "</p>
    
\t
\t<!-- Image from SQL table (system_files}, polymorph relation public \$attachOne =[]   -->
\t<p class=\"list-group-item\">
\t    ";
            // line 118
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["productMy"], "avatar", [], "any", false, false, true, 118), "count", [], "any", false, false, true, 118)) {
                echo " 
\t\t    <!-- Only used if u specifiead in model polymorphic relation as  public \$attachOne =[]--> 
\t\t    <p class=\"small\"><i class=\"fa fa-clone\" style=\"font-size:12px\"></i> Image was loaded as : ";
                // line 120
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["productMy"], "avatar", [], "any", false, false, true, 120), "filename", [], "any", false, false, true, 120), 120, $this->source), "html", null, true);
                echo ", path (DB {system_files}): <b> ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["productMy"], "avatar", [], "any", false, false, true, 120), "getPath", [], "any", false, false, true, 120), 120, $this->source), "html", null, true);
                echo " </b> </p>  <!-- avata is \$attachOne relation in model -->
\t\t
\t\t    <img  data-src=\"";
                // line 122
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["productMy"], "avatar", [], "any", false, false, true, 122), "getPath", [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["productMy"], "avatar", [], "any", false, false, true, 122), "getPath", [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["productMy"], "avatar", [], "any", false, false, true, 122), "content", [], "any", false, false, true, 122) - ($context["type"] ?? null)), "html", null, true);
                echo "\" style=\"max-width: 6%\" />
\t\t    <!-- End Only used if in model specifiead as public \$attachOne --> 

\t\t";
            } else {
                // line 126
                echo "\t\t    <!-- No connected image in SQL table (system_files},  polymorph relation. Show default image -->
\t\t    <img  data-src=\"";
                // line 127
                echo url("/");
                echo "/storage/app/media/My_images/no-image.jpg\" src=\"";
                echo url("/");
                echo "/storage/app/media/My_images/no-image.jpg\" alt=\"no-image\" style=\"max-width: 6%\" />
\t\t";
            }
            // line 129
            echo "    </p>
\t<!-- End Image from SQL table (system_files}, polymorph relation public \$attachOne =[]  -->
\t\t\t   
\t
\t<button class=\"btn\"><a href=\"";
            // line 133
            echo "my-plugin-front-end-view-one/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["productMy"], "img_id", [], "any", false, false, true, 133), 133, $this->source), "html", null, true);
            echo "\">  View id: ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["productMy"], "img_id", [], "any", false, false, true, 133), 133, $this->source), "html", null, true);
            echo " </a></button> <!-- Link to view one -->
\t<hr>
\t</div>

    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 138
            echo "        <div> No records were found. Make good use of it</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productMy'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "\t
\t
\t
    
</div>

<!-- My Pagination ------>
<div>
";
        // line 148
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductsXComponent"] ?? null), "getProductsX", [], "any", false, false, true, 148), "render", [], "any", false, false, true, 148), 148, $this->source);
        echo "
</div>
<!-- End My Pagination -->


<!-- Just instead of CSS margin-top -->
<div style=\"height:30em;\"></div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/themes/demo/pages/my-plugin-front-end.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 148,  348 => 140,  341 => 138,  328 => 133,  322 => 129,  315 => 127,  312 => 126,  301 => 122,  294 => 120,  289 => 118,  281 => 113,  277 => 112,  273 => 111,  265 => 109,  250 => 96,  246 => 94,  240 => 92,  238 => 91,  235 => 90,  224 => 87,  219 => 86,  215 => 85,  212 => 84,  206 => 82,  204 => 81,  201 => 80,  199 => 79,  195 => 77,  186 => 75,  180 => 73,  177 => 72,  173 => 70,  171 => 69,  162 => 62,  155 => 60,  152 => 59,  141 => 55,  134 => 53,  129 => 51,  119 => 44,  106 => 37,  93 => 30,  87 => 26,  81 => 24,  78 => 23,  75 => 22,  72 => 20,  67 => 19,  61 => 15,  59 => 14,  57 => 13,  55 => 12,  53 => 11,  51 => 10,  49 => 9,  45 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>My Plugin frontend </h1>

<div class=\"col-sm-12 col-xs-12\"> 

{# Comment format #}
{# Instead of using {% component 'builderList' %}, we use this extended code to display more than 1 default column & use customized layout. Extended code is Inited via placing cursor on {% component in code and clicking icon left to Zoom icon (bottom right) #}


{% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}

<h3> List by Builder </h3>
<hr>
<ul class=\"record-list\">
    {% for record in records %}
        <li>
            {# Use spaceless tag to remove spaces inside the A tag. #}
            {% spaceless %}
                {% if detailsPage %}
                    <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">
                {% endif %}

\t\t\t\t<!-- Display one Column \"img_name\", specified in /pages/my-plugin-front-end-> Record list. Contains link to one page -->
\t\t\t\t<div class=\"col-sm-3 col-xs-3\"> 
\t\t\t\t    <i class=\"fa fa-clone\" style=\"font-size:18px\"></i>
                    <a href=\"{{ 'my-plugin-front-end-view-one/'}}{{record.img_id }}\"> {{ attribute(record, displayColumn) }}  </a>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t
\t\t\t\t<!-- Display Column img_blog_id. Added by me. Contains link to one page-->
\t\t\t\t<div class=\"col-sm-3 col-xs-3\"> 
\t\t\t\t    <i class=\"fa fa-clone\" style=\"font-size:18px\"></i> 
                    <a href=\"{{ 'my-plugin-front-end-view-one/'}}{{record.img_id }}\">  id: {{record.img_id}} </a>\t\t\t
\t\t\t\t     <!-- my add -->
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<!-- Display  Column created_at. Added by me-->
\t\t\t\t<div class=\"col-sm-3 col-xs-3\">
\t\t\t\t<i class=\"fa fa-clone\" style=\"font-size:18px\"></i>   
\t\t\t\tcreated: {{record.created_at}} <!-- my add -->
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t<!-- Image from SQL table (system_files}, polymorph relation public \$attachOne =[]   -->
\t            <div class=\"col-sm-3 col-xs-3\">
\t                {% if record.avatar.count %} 
\t\t                <!-- Only used if u specifiead in model polymorphic relation as  public \$attachOne =[]--> 
\t\t                <!-- <p><i class=\"fa fa-clone\" style=\"font-size:18px\"></i> Image was loaded as : {{ record.avatar.filename }}, path (DB {system_files}): <b> {{ record.avatar.getPath }} </b> </p> --> <!-- avata is \$attachOne relation in model -->
\t\t
\t\t                <img  data-src=\"{{ record.avatar.getPath}}\" src=\"{{ record.avatar.getPath }}\" alt=\"{{ record.avatar.content-type }}\" style=\"max-width: 10%\" />
\t\t                <!-- End Only used if in model specifiead as public \$attachOne --> 

\t\t           {% else %}
\t\t               <!-- No connected image in SQL table (system_files},  polymorph relation. Show default image -->
\t\t               <img  data-src=\"{{ url('/') }}/storage/app/media/My_images/no-image.jpg\" src=\"{{ url('/') }}/storage/app/media/My_images/no-image.jpg\" alt=\"no-image\" style=\"max-width: 10%\" />
\t\t           {% endif %}
               </div>
\t           <!-- End Image from SQL table (system_files}, polymorph relation public \$attachOne =[]  -->
\t\t\t   
\t\t\t   
\t\t\t   
\t\t\t   

                {% if detailsPage %}
                    </a>
                {% endif %}
            {% endspaceless %}
        </li>
    {% else %}
        <li class=\"no-data\">{{ noRecordsMessage }}</li>
    {% endfor %}
</ul>

{% if records.lastPage > 1 %}
    <ul class=\"pagination\">
        {% if records.currentPage > 1 %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage-1) }) }}\">&larr; Prev</a></li>
        {% endif %}

        {% for page in 1..records.lastPage %}
            <li class=\"{{ records.currentPage == page ? 'active' : null }}\">
                <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
            </li>
        {% endfor %}

        {% if records.lastPage > records.currentPage %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage+1) }) }}\">Next &rarr;</a></li>
        {% endif %}
    </ul>
{% endif %}

</div>




<div class=\"col-sm-12 col-xs-12\">
    <hr> 
    <div class=\"col-sm-12 col-xs-12 alert alert-danger\"> List by Component <b>ProductsX </b> registered as  ProductsXComponent</div>

\t<!-- List-group-item Styling -->
    
\t
    {% for productMy in ProductsXComponent.getProductsX %} <!-- Call method getProductsX in my component ProductsXComponent and loop it -->
\t<div class=\"col-sm-12 col-xs-12 list-group-item alert alert-success\">
\t<p class=\"list-group-item\"> ID:      {{ productMy.img_id }}</p>       <!--display id ---->
    <p class=\"list-group-item\"> Name:    {{ productMy.img_name|raw }}</p> <!--display name -->
\t<p class=\"list-group-item\"> Created: {{ productMy.created_at }}</p>
    
\t
\t<!-- Image from SQL table (system_files}, polymorph relation public \$attachOne =[]   -->
\t<p class=\"list-group-item\">
\t    {% if productMy.avatar.count %} 
\t\t    <!-- Only used if u specifiead in model polymorphic relation as  public \$attachOne =[]--> 
\t\t    <p class=\"small\"><i class=\"fa fa-clone\" style=\"font-size:12px\"></i> Image was loaded as : {{ productMy.avatar.filename }}, path (DB {system_files}): <b> {{ productMy.avatar.getPath }} </b> </p>  <!-- avata is \$attachOne relation in model -->
\t\t
\t\t    <img  data-src=\"{{ productMy.avatar.getPath}}\" src=\"{{ productMy.avatar.getPath }}\" alt=\"{{ productMy.avatar.content-type }}\" style=\"max-width: 6%\" />
\t\t    <!-- End Only used if in model specifiead as public \$attachOne --> 

\t\t{% else %}
\t\t    <!-- No connected image in SQL table (system_files},  polymorph relation. Show default image -->
\t\t    <img  data-src=\"{{ url('/') }}/storage/app/media/My_images/no-image.jpg\" src=\"{{ url('/') }}/storage/app/media/My_images/no-image.jpg\" alt=\"no-image\" style=\"max-width: 6%\" />
\t\t{% endif %}
    </p>
\t<!-- End Image from SQL table (system_files}, polymorph relation public \$attachOne =[]  -->
\t\t\t   
\t
\t<button class=\"btn\"><a href=\"{{ 'my-plugin-front-end-view-one/'}}{{productMy.img_id }}\">  View id: {{productMy.img_id}} </a></button> <!-- Link to view one -->
\t<hr>
\t</div>

    {% else %}
        <div> No records were found. Make good use of it</div>
    {% endfor %}
\t
\t
\t
    
</div>

<!-- My Pagination ------>
<div>
{{ ProductsXComponent.getProductsX.render|raw }}
</div>
<!-- End My Pagination -->


<!-- Just instead of CSS margin-top -->
<div style=\"height:30em;\"></div>
</div>", "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/themes/demo/pages/my-plugin-front-end.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 9, "for" => 19, "spaceless" => 22, "if" => 23);
        static $filters = array("page" => 24, "escape" => 30, "raw" => 112);
        static $functions = array("url" => 60, "range" => 85);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'spaceless', 'if'],
                ['page', 'escape', 'raw'],
                ['url', 'range']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
