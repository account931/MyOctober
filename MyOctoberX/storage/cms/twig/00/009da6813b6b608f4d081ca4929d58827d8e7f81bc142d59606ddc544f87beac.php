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
<div class=\"col-sm-12 col-xs-12 alert alert-success\">
    <ul> 
\t    <li> This view is located at => MyOctoberX\\themes\\demo\\pages\\my-plugin-front-end.thm </li>
        <li>Example of my plugin, display records from DB table 'dima_myfirstplugin_images'.</li> <li> Contains 2 parts: 1st - record listing is created by Builder plugin, 2nd - listing created manually via my component (incl pagination). </li>
\t    <li>Records contains images, images are stored in build-in table (system_files} via polymorphic relation  \$attachOne; </li>
\t    <li>Record contains \$belongsTo relation to display connected post title from table \"rainlab_blog_posts\" (by FK \"img_blog_id\" in table 'dima_myfirstplugin_images')</li>
\t    <li> Back-end CRUD is extended with relation columns and every record Preview button</li>
\t\t<li> Info: Initially table 'dima_myfirstplugin_images' was designed as table with images connected to \"rainlab_blog_posts\", but since it turned out that conencted images are stored in in build-in table (system_files}, this table was used as an independent for creating test record listing via Builder plugin and my custom component   </p>
\t</ul>
</div>

<h3> List by Builder </h3>
<hr>
<ul class=\"record-list\">
    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 31
            echo "        <li>
            ";
            // line 33
            echo "            ";
            ob_start();
            // line 34
            echo "                ";
            if (($context["detailsPage"] ?? null)) {
                // line 35
                echo "                    <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(($context["detailsPage"] ?? null), 35, $this->source), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, true, 35)]);
                echo "\">
                ";
            }
            // line 37
            echo "
\t\t\t\t<!-- Display one Column \"img_name\", specified in /pages/my-plugin-front-end-> Record list. Contains link to one page -->
\t\t\t\t<div class=\"col-sm-3 col-xs-3\"> 
\t\t\t\t    <i class=\"fa fa-clone\" style=\"font-size:18px\"></i>
                    <a href=\"";
            // line 41
            echo "my-plugin-front-end-view-one/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "img_id", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], ($context["displayColumn"] ?? null), [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
            echo "  </a>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t
\t\t\t\t<!-- Display Column img_blog_id. Added by me. Contains link to one page-->
\t\t\t\t<div class=\"col-sm-3 col-xs-3\"> 
\t\t\t\t    <i class=\"fa fa-clone\" style=\"font-size:18px\"></i> 
                    <a href=\"";
            // line 48
            echo "my-plugin-front-end-view-one/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "img_id", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
            echo "\">  id: ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "img_id", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
            echo " </a>\t\t\t
\t\t\t\t     <!-- my add -->
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<!-- Display  Column created_at. Added by me-->
\t\t\t\t<div class=\"col-sm-3 col-xs-3\">
\t\t\t\t<i class=\"fa fa-clone\" style=\"font-size:18px\"></i>   
\t\t\t\tcreated: ";
            // line 55
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "created_at", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
            echo " <!-- my add -->
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t<!-- Image from SQL table (system_files}, polymorph relation public \$attachOne =[]   -->
\t            <div class=\"col-sm-3 col-xs-3\">
\t                ";
            // line 62
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "avatar", [], "any", false, false, true, 62), "count", [], "any", false, false, true, 62)) {
                echo " 
\t\t                <!-- Only used if u specifiead in model polymorphic relation as  public \$attachOne =[]--> 
\t\t                <!-- <p><i class=\"fa fa-clone\" style=\"font-size:18px\"></i> Image was loaded as : ";
                // line 64
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "avatar", [], "any", false, false, true, 64), "filename", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
                echo ", path (DB {system_files}): <b> ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "avatar", [], "any", false, false, true, 64), "getPath", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
                echo " </b> </p> --> <!-- avata is \$attachOne relation in model -->
\t\t
\t\t                <img  data-src=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "avatar", [], "any", false, false, true, 66), "getPath", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "avatar", [], "any", false, false, true, 66), "getPath", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "avatar", [], "any", false, false, true, 66), "content", [], "any", false, false, true, 66) - ($context["type"] ?? null)), "html", null, true);
                echo "\" style=\"max-width: 10%\" />
\t\t                <!-- End Only used if in model specifiead as public \$attachOne --> 

\t\t           ";
            } else {
                // line 70
                echo "\t\t               <!-- No connected image in SQL table (system_files},  polymorph relation. Show default image -->
\t\t               <img  data-src=\"";
                // line 71
                echo url("/");
                echo "/storage/app/media/My_images/no-image.jpg\" src=\"";
                echo url("/");
                echo "/storage/app/media/My_images/no-image.jpg\" alt=\"no-image\" style=\"max-width: 10%\" />
\t\t           ";
            }
            // line 73
            echo "               </div>
\t           <!-- End Image from SQL table (system_files}, polymorph relation public \$attachOne =[]  -->
\t\t\t   
\t\t\t   
\t\t\t   
\t\t\t   

                ";
            // line 80
            if (($context["detailsPage"] ?? null)) {
                // line 81
                echo "                    </a>
                ";
            }
            // line 83
            echo "            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 84
            echo "        </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 86
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["noRecordsMessage"] ?? null), 86, $this->source), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "</ul>

";
        // line 90
        if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 90) > 1)) {
            // line 91
            echo "    <ul class=\"pagination\">
        ";
            // line 92
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 92) > 1)) {
                // line 93
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 93), "baseFileName", [], "any", false, false, true, 93), 93, $this->source), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 93) - 1)]);
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 95
            echo "
        ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 96)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 97
                echo "            <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 97) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 98
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 98), "baseFileName", [], "any", false, false, true, 98), 98, $this->source), [($context["pageParam"] ?? null) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 98, $this->source), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "
        ";
            // line 102
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 102) > twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 102))) {
                // line 103
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 103), "baseFileName", [], "any", false, false, true, 103), 103, $this->source), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 103) + 1)]);
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 105
            echo "    </ul>
";
        }
        // line 107
        echo "
</div>




<div class=\"col-sm-12 col-xs-12\">
    <hr> 
    <div class=\"col-sm-12 col-xs-12 alert alert-success\"> List of records created manually via Component <b>ProductsX </b> registered as  ProductsXComponent</div>

\t<!-- List-group-item Styling -->
    
\t
    ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["ProductsXComponent"] ?? null), "getProductsX", [], "any", false, false, true, 120));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["productMy"]) {
            echo " <!-- Call method getProductsX in my component ProductsXComponent and loop it -->
\t<div class=\"col-sm-12 col-xs-12 list-group-item alert alert-success\">
\t<p class=\"list-group-item\"> ID:      ";
            // line 122
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["productMy"], "img_id", [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
            echo "</p>       <!--display id ---->
    <p class=\"list-group-item\"> Name:    ";
            // line 123
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["productMy"], "img_name", [], "any", false, false, true, 123), 123, $this->source);
            echo "</p> <!--display name -->
\t<p class=\"list-group-item\"> Created: ";
            // line 124
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["productMy"], "created_at", [], "any", false, false, true, 124), 124, $this->source), "html", null, true);
            echo "</p>
    
\t
\t<!-- Image from SQL table (system_files}, polymorph relation public \$attachOne =[]   -->
\t<p class=\"list-group-item\">
\t    ";
            // line 129
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["productMy"], "avatar", [], "any", false, false, true, 129), "count", [], "any", false, false, true, 129)) {
                echo " 
\t\t    <!-- Only used if u specifiead in model polymorphic relation as  public \$attachOne =[]--> 
\t\t    <p class=\"small\"><i class=\"fa fa-clone\" style=\"font-size:12px\"></i> Image was loaded as : ";
                // line 131
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["productMy"], "avatar", [], "any", false, false, true, 131), "filename", [], "any", false, false, true, 131), 131, $this->source), "html", null, true);
                echo ", path (DB {system_files}): <b> ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["productMy"], "avatar", [], "any", false, false, true, 131), "getPath", [], "any", false, false, true, 131), 131, $this->source), "html", null, true);
                echo " </b> </p>  <!-- avata is \$attachOne relation in model -->
\t\t
\t\t    <img  data-src=\"";
                // line 133
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["productMy"], "avatar", [], "any", false, false, true, 133), "getPath", [], "any", false, false, true, 133), 133, $this->source), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["productMy"], "avatar", [], "any", false, false, true, 133), "getPath", [], "any", false, false, true, 133), 133, $this->source), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["productMy"], "avatar", [], "any", false, false, true, 133), "content", [], "any", false, false, true, 133) - ($context["type"] ?? null)), "html", null, true);
                echo "\" style=\"max-width: 6%\" />
\t\t    <!-- End Only used if in model specifiead as public \$attachOne --> 

\t\t";
            } else {
                // line 137
                echo "\t\t    <!-- No connected image in SQL table (system_files},  polymorph relation. Show default image -->
\t\t    <img  data-src=\"";
                // line 138
                echo url("/");
                echo "/storage/app/media/My_images/no-image.jpg\" src=\"";
                echo url("/");
                echo "/storage/app/media/My_images/no-image.jpg\" alt=\"no-image\" style=\"max-width: 6%\" />
\t\t";
            }
            // line 140
            echo "    </p>
\t<!-- End Image from SQL table (system_files}, polymorph relation public \$attachOne =[]  -->
\t\t\t   
\t
\t<button class=\"btn\"><a href=\"";
            // line 144
            echo "my-plugin-front-end-view-one/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["productMy"], "img_id", [], "any", false, false, true, 144), 144, $this->source), "html", null, true);
            echo "\">  View id: ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["productMy"], "img_id", [], "any", false, false, true, 144), 144, $this->source), "html", null, true);
            echo " </a></button> <!-- Link to view one -->
\t<hr>
\t</div>

    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 149
            echo "        <div> No records were found. Make good use of it</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productMy'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "\t
\t
\t
    
</div>

<!-- My Pagination ------>
<div>
";
        // line 159
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductsXComponent"] ?? null), "getProductsX", [], "any", false, false, true, 159), "render", [], "any", false, false, true, 159), 159, $this->source);
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
        return array (  369 => 159,  359 => 151,  352 => 149,  339 => 144,  333 => 140,  326 => 138,  323 => 137,  312 => 133,  305 => 131,  300 => 129,  292 => 124,  288 => 123,  284 => 122,  276 => 120,  261 => 107,  257 => 105,  251 => 103,  249 => 102,  246 => 101,  235 => 98,  230 => 97,  226 => 96,  223 => 95,  217 => 93,  215 => 92,  212 => 91,  210 => 90,  206 => 88,  197 => 86,  191 => 84,  188 => 83,  184 => 81,  182 => 80,  173 => 73,  166 => 71,  163 => 70,  152 => 66,  145 => 64,  140 => 62,  130 => 55,  117 => 48,  104 => 41,  98 => 37,  92 => 35,  89 => 34,  86 => 33,  83 => 31,  78 => 30,  61 => 15,  59 => 14,  57 => 13,  55 => 12,  53 => 11,  51 => 10,  49 => 9,  45 => 7,  39 => 1,);
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

<div class=\"col-sm-12 col-xs-12 alert alert-success\">
    <ul> 
\t    <li> This view is located at => MyOctoberX\\themes\\demo\\pages\\my-plugin-front-end.thm </li>
        <li>Example of my plugin, display records from DB table 'dima_myfirstplugin_images'.</li> <li> Contains 2 parts: 1st - record listing is created by Builder plugin, 2nd - listing created manually via my component (incl pagination). </li>
\t    <li>Records contains images, images are stored in build-in table (system_files} via polymorphic relation  \$attachOne; </li>
\t    <li>Record contains \$belongsTo relation to display connected post title from table \"rainlab_blog_posts\" (by FK \"img_blog_id\" in table 'dima_myfirstplugin_images')</li>
\t    <li> Back-end CRUD is extended with relation columns and every record Preview button</li>
\t\t<li> Info: Initially table 'dima_myfirstplugin_images' was designed as table with images connected to \"rainlab_blog_posts\", but since it turned out that conencted images are stored in in build-in table (system_files}, this table was used as an independent for creating test record listing via Builder plugin and my custom component   </p>
\t</ul>
</div>

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
    <div class=\"col-sm-12 col-xs-12 alert alert-success\"> List of records created manually via Component <b>ProductsX </b> registered as  ProductsXComponent</div>

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
        static $tags = array("set" => 9, "for" => 30, "spaceless" => 33, "if" => 34);
        static $filters = array("page" => 35, "escape" => 41, "raw" => 123);
        static $functions = array("url" => 71, "range" => 96);

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
