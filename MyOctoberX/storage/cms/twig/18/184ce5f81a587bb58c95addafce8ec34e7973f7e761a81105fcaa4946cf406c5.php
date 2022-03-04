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

/* C:\Users\user\Downloads\OSPanel\domains\localhost\myoctober\MyOctoberX/themes/demo/pages/my-plugin-front-end-view-one.htm */
class __TwigTemplate_3006c5baf1016dfc5016269b41615d00333d7da0ecca7daa59850c93eafb0d4c extends \Twig\Template
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
        echo "<h1>One detailed item</h1>

<div class=\"col-sm-12 col-xs-12\">

";
        // line 8
        echo "
<hr> 
";
        // line 10
        $context["record"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 10);
        // line 11
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "displayColumn", [], "any", false, false, true, 11);
        // line 12
        $context["notFoundMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "notFoundMessage", [], "any", false, false, true, 12);
        // line 13
        echo "
";
        // line 14
        if (($context["record"] ?? null)) {
            // line 15
            echo "    
\t
\t<h3> 
\t    <i class=\"fa fa-clone\" style=\"font-size:24px\"></i> 
\t\tHere are the item details 
\t</h3>
\t
    <!-- Display one Column \"img_name\", specified in /pages/my-plugin-front-end-view-one -> Record Details -->
\t<div class=\"col-sm-12 col-xs-12\">
\t    <i class=\"fa fa-clone\" style=\"font-size:18px\"></i>
        ";
            // line 25
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), ($context["displayColumn"] ?? null), [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo "
\t</div>
\t
\t<!-- Display  Column \"created_at\". Added by me-->
\t<div class=\"col-sm-12 col-xs-12\">
\t    <i class=\"fa fa-clone\" style=\"font-size:18px\"></i>   
\t    created: ";
            // line 31
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "created_at", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo " <!-- my add -->
    </div>
\t
\t<!-- Display  Column \"img_id\". Added by me-->
\t<div class=\"col-sm-12 col-xs-12\">
\t    <i class=\"fa fa-clone\" style=\"font-size:18px\"></i>   
\t    Id: ";
            // line 37
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "img_id", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
            echo " <!-- my add -->
    </div>
\t
\t
\t
    <!-- Display  Column \"img_blog_id\". Added by me-->
\t<div class=\"col-sm-12 col-xs-12\">
\t    <i class=\"fa fa-clone\" style=\"font-size:18px\"></i>   
\t    belongs to Blog Post id: ";
            // line 45
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "img_blog_id", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
            echo "
    </div>
\t
    <!--  belongsTo relation Column \"title\" -->\t
\t<!-- Display Column \"title\" from DB \"rainlab_blog_posts\"  by \"img_blog_id\" from DB \"dima_myfirstplugin_images\". belongsTo relation-->
\t<div class=\"col-sm-12 col-xs-12\">
\t    <i class=\"fa fa-clone\" style=\"font-size:18px\"></i>   
\t    blog Title (belongsTo realtion): ";
            // line 52
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "channelZ", [], "any", false, false, true, 52), "title", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
            echo "  <!-- channelZ is belongsTo relation definied in model-->
    </div>
\t

\t
    <!-- Image from SQL table (system_files}, polymorph relation public \$attachOne =[]   -->
\t<div class=\"col-sm-12 col-xs-12\">
\t    ";
            // line 59
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "avatar", [], "any", false, false, true, 59), "count", [], "any", false, false, true, 59)) {
                echo " 
\t\t    <!-- Only used if u specifiead in model polymorphic relation as  public \$attachOne =[]--> 
\t\t    <p><i class=\"fa fa-clone\" style=\"font-size:18px\"></i> Image was loaded as : ";
                // line 61
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "avatar", [], "any", false, false, true, 61), "filename", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
                echo ", path (DB {system_files}): <b> ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "avatar", [], "any", false, false, true, 61), "getPath", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
                echo " </b> </p> <!-- avata is \$attachOne relation in model -->
\t\t
\t\t    <img  data-src=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "avatar", [], "any", false, false, true, 63), "getPath", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "avatar", [], "any", false, false, true, 63), "getPath", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "avatar", [], "any", false, false, true, 63), "content", [], "any", false, false, true, 63) - ($context["type"] ?? null)), "html", null, true);
                echo "\" style=\"max-width: 30%\" />
\t\t    <!-- End Only used if in model specifiead as public \$attachOne --> 

\t\t";
            } else {
                // line 67
                echo "\t\t    <!-- No connected image in SQL table (system_files},  polymorph relation. Show default image -->
\t\t    <img  data-src=\"";
                // line 68
                echo url("/");
                echo "/storage/app/media/My_images/no-image.jpg\" src=\"";
                echo url("/");
                echo "/storage/app/media/My_images/no-image.jpg\" alt=\"no-image\" style=\"max-width: 30%\" />
\t\t";
            }
            // line 70
            echo "    </div>
\t <!-- End Image from SQL table (system_files}, polymorph relation public \$attachOne =[]  -->
\t 
\t
\t\t\t
";
        } else {
            // line 76
            echo "    ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["notFoundMessage"] ?? null), 76, $this->source), "html", null, true);
            echo " <!-- no record found -->
";
        }
        // line 78
        echo "</div>

<div class=\"col-sm-12 col-xs-12\">
    <hr>
    <a href=\"";
        // line 82
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("my-plugin-front-end");
        echo "\"> Back to list </a>
</div>

<div style=\"height:20em;\"></div>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/themes/demo/pages/my-plugin-front-end-view-one.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 82,  168 => 78,  162 => 76,  154 => 70,  147 => 68,  144 => 67,  133 => 63,  126 => 61,  121 => 59,  111 => 52,  101 => 45,  90 => 37,  81 => 31,  72 => 25,  60 => 15,  58 => 14,  55 => 13,  53 => 12,  51 => 11,  49 => 10,  45 => 8,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>One detailed item</h1>

<div class=\"col-sm-12 col-xs-12\">

{# Comment format #}
{# <!-- Instead of using {% component 'builderDetails' %}, we use this extended code to display more than 1 default column & use customized layout --> #}
{# <!-- Extended code is Inited via placing cursor on {% component in code & clicking icon left to Zoom icon (bottom right) -->  #}

<hr> 
{% set record = builderDetails.record %}
{% set displayColumn = builderDetails.displayColumn %}
{% set notFoundMessage = builderDetails.notFoundMessage %}

{% if record %}
    
\t
\t<h3> 
\t    <i class=\"fa fa-clone\" style=\"font-size:24px\"></i> 
\t\tHere are the item details 
\t</h3>
\t
    <!-- Display one Column \"img_name\", specified in /pages/my-plugin-front-end-view-one -> Record Details -->
\t<div class=\"col-sm-12 col-xs-12\">
\t    <i class=\"fa fa-clone\" style=\"font-size:18px\"></i>
        {{ attribute(record, displayColumn) }}
\t</div>
\t
\t<!-- Display  Column \"created_at\". Added by me-->
\t<div class=\"col-sm-12 col-xs-12\">
\t    <i class=\"fa fa-clone\" style=\"font-size:18px\"></i>   
\t    created: {{record.created_at}} <!-- my add -->
    </div>
\t
\t<!-- Display  Column \"img_id\". Added by me-->
\t<div class=\"col-sm-12 col-xs-12\">
\t    <i class=\"fa fa-clone\" style=\"font-size:18px\"></i>   
\t    Id: {{record.img_id}} <!-- my add -->
    </div>
\t
\t
\t
    <!-- Display  Column \"img_blog_id\". Added by me-->
\t<div class=\"col-sm-12 col-xs-12\">
\t    <i class=\"fa fa-clone\" style=\"font-size:18px\"></i>   
\t    belongs to Blog Post id: {{record.img_blog_id}}
    </div>
\t
    <!--  belongsTo relation Column \"title\" -->\t
\t<!-- Display Column \"title\" from DB \"rainlab_blog_posts\"  by \"img_blog_id\" from DB \"dima_myfirstplugin_images\". belongsTo relation-->
\t<div class=\"col-sm-12 col-xs-12\">
\t    <i class=\"fa fa-clone\" style=\"font-size:18px\"></i>   
\t    blog Title (belongsTo realtion): {{  record.channelZ.title }}  <!-- channelZ is belongsTo relation definied in model-->
    </div>
\t

\t
    <!-- Image from SQL table (system_files}, polymorph relation public \$attachOne =[]   -->
\t<div class=\"col-sm-12 col-xs-12\">
\t    {% if record.avatar.count %} 
\t\t    <!-- Only used if u specifiead in model polymorphic relation as  public \$attachOne =[]--> 
\t\t    <p><i class=\"fa fa-clone\" style=\"font-size:18px\"></i> Image was loaded as : {{ record.avatar.filename }}, path (DB {system_files}): <b> {{ record.avatar.getPath }} </b> </p> <!-- avata is \$attachOne relation in model -->
\t\t
\t\t    <img  data-src=\"{{ record.avatar.getPath}}\" src=\"{{ record.avatar.getPath }}\" alt=\"{{ record.avatar.content-type }}\" style=\"max-width: 30%\" />
\t\t    <!-- End Only used if in model specifiead as public \$attachOne --> 

\t\t{% else %}
\t\t    <!-- No connected image in SQL table (system_files},  polymorph relation. Show default image -->
\t\t    <img  data-src=\"{{ url('/') }}/storage/app/media/My_images/no-image.jpg\" src=\"{{ url('/') }}/storage/app/media/My_images/no-image.jpg\" alt=\"no-image\" style=\"max-width: 30%\" />
\t\t{% endif %}
    </div>
\t <!-- End Image from SQL table (system_files}, polymorph relation public \$attachOne =[]  -->
\t 
\t
\t\t\t
{% else %}
    {{ notFoundMessage }} <!-- no record found -->
{% endif %}
</div>

<div class=\"col-sm-12 col-xs-12\">
    <hr>
    <a href=\"{{ 'my-plugin-front-end'|page }}\"> Back to list </a>
</div>

<div style=\"height:20em;\"></div>", "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/themes/demo/pages/my-plugin-front-end-view-one.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 10, "if" => 14);
        static $filters = array("escape" => 25, "page" => 82);
        static $functions = array("url" => 68);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'page'],
                ['url']
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
