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

/* C:\Users\user\Downloads\OSPanel\domains\localhost\myoctober\MyOctoberX/plugins/dima/myfirstplugin/components/productsx/default.htm */
class __TwigTemplate_cddcf8e85e0de83937d4e8ded5043933c673136c5dfa459e7e588dafa6e36ff0 extends \Twig\Template
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
        echo "<?php //This is the default markup for component ProductsX ?>

<h1>My Plugin frontend </h1>
<p>This is the default markup for component ProductsX, it will appear where ever u add component 'ProductsXComponent'   </p>
<p>The same layout as in in pages/my-plugin-front-end.htm but without Builder section</p>
<small>You can delete this file if you want</small>


<div class=\"col-sm-12 col-xs-12\"> 



<div class=\"col-sm-12 col-xs-12\">
    <hr> 
    <div class=\"col-sm-12 col-xs-12 alert alert-success\"> List of records created manually via Component <b>ProductsX </b> registered as  ProductsXComponent</div>

\t<!-- List-group-item Styling -->
    
\t
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["ProductsXComponent"] ?? null), "getProductsX", [], "any", false, false, true, 20));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["productMy"]) {
            echo " <!-- Call method getProductsX in my component ProductsXComponent and loop it -->
\t<div class=\"col-sm-12 col-xs-12 list-group-item alert alert-success\">
\t<p class=\"list-group-item\"> ID:      ";
            // line 22
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["productMy"], "img_id", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "</p>       <!--display id ---->
    <p class=\"list-group-item\"> Name:    ";
            // line 23
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["productMy"], "img_name", [], "any", false, false, true, 23), 23, $this->source);
            echo "</p> <!--display name -->
\t<p class=\"list-group-item\"> Created: ";
            // line 24
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["productMy"], "created_at", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "</p>
    
\t
\t<!-- Image from SQL table (system_files}, polymorph relation public \$attachOne =[]   -->
\t<p class=\"list-group-item\">
\t    ";
            // line 29
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["productMy"], "avatar", [], "any", false, false, true, 29), "count", [], "any", false, false, true, 29)) {
                echo " 
\t\t    <!-- Only used if u specifiead in model polymorphic relation as  public \$attachOne =[]--> 
\t\t    <p class=\"small\"><i class=\"fa fa-clone\" style=\"font-size:12px\"></i> Image was loaded as : ";
                // line 31
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["productMy"], "avatar", [], "any", false, false, true, 31), "filename", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
                echo ", path (DB {system_files}): <b> ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["productMy"], "avatar", [], "any", false, false, true, 31), "getPath", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
                echo " </b> </p>  <!-- avata is \$attachOne relation in model -->
\t\t
\t\t    <img  data-src=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["productMy"], "avatar", [], "any", false, false, true, 33), "getPath", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["productMy"], "avatar", [], "any", false, false, true, 33), "getPath", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["productMy"], "avatar", [], "any", false, false, true, 33), "content", [], "any", false, false, true, 33) - ($context["type"] ?? null)), "html", null, true);
                echo "\" style=\"max-width: 6%\" />
\t\t    <!-- End Only used if in model specifiead as public \$attachOne --> 

\t\t";
            } else {
                // line 37
                echo "\t\t    <!-- No connected image in SQL table (system_files},  polymorph relation. Show default image -->
\t\t    <img  data-src=\"";
                // line 38
                echo url("/");
                echo "/storage/app/media/My_images/no-image.jpg\" src=\"";
                echo url("/");
                echo "/storage/app/media/My_images/no-image.jpg\" alt=\"no-image\" style=\"max-width: 6%\" />
\t\t";
            }
            // line 40
            echo "    </p>
\t<!-- End Image from SQL table (system_files}, polymorph relation public \$attachOne =[]  -->
\t\t\t   
\t
\t<button class=\"btn\"><a href=\"";
            // line 44
            echo "my-plugin-front-end-view-one/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["productMy"], "img_id", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
            echo "\">  View id: ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["productMy"], "img_id", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
            echo " </a></button> <!-- Link to view one -->
\t<hr>
\t</div>

    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 49
            echo "        <div> No records were found. Make good use of it</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productMy'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "\t
\t
\t
    
</div>

<!-- My Pagination ------>
<div>
";
        // line 59
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductsXComponent"] ?? null), "getProductsX", [], "any", false, false, true, 59), "render", [], "any", false, false, true, 59), 59, $this->source);
        echo "
</div>
<!-- End My Pagination -->


<!-- Just instead of CSS margin-top -->
<div style=\"height:30em;\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/plugins/dima/myfirstplugin/components/productsx/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 59,  143 => 51,  136 => 49,  123 => 44,  117 => 40,  110 => 38,  107 => 37,  96 => 33,  89 => 31,  84 => 29,  76 => 24,  72 => 23,  68 => 22,  60 => 20,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php //This is the default markup for component ProductsX ?>

<h1>My Plugin frontend </h1>
<p>This is the default markup for component ProductsX, it will appear where ever u add component 'ProductsXComponent'   </p>
<p>The same layout as in in pages/my-plugin-front-end.htm but without Builder section</p>
<small>You can delete this file if you want</small>


<div class=\"col-sm-12 col-xs-12\"> 



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
</div>
", "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/plugins/dima/myfirstplugin/components/productsx/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 20, "if" => 29);
        static $filters = array("escape" => 22, "raw" => 23);
        static $functions = array("url" => 38);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape', 'raw'],
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
