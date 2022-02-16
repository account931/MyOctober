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

/* C:\Users\user\Downloads\OSPanel\domains\localhost\myoctober\MyOctoberX/themes/demo/pages/myPage.htm */
class __TwigTemplate_9a9ee26744dd5b4d3583a963458691ffdd5d63b79bcedab85f6b99bbacecfa46 extends \Twig\Template
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
        echo "<?php
\$this['result'] = \"yes\";

?>

 <div class=\"col-sm-12 col-xs-12 alert alert-success\">
    <div class=\"container\">
        <h3>Blog component </h3> 
\t\t<ul>
        <li>First load plugin \"Blog\" via -> Settings-> Updates & Plugins -> Install Plugins</li>
        <li>Now can create, edit blogs via \"Blog\" in top menu</li>
        <li>To add Blog to your page, go -> CMS -> Pages -> select your page -> click Components & select Blog-> select and drag item to the left markdown</li>
        <li>In order to modify< for example, Blog appearance (add/change BS classes, add your text), go to ->  \\localhost\\myoctober\\MyOctoberX\\plugins\\rainlab\\blog\\components\\posts</li>
\t\t<li>The same way can add plugins \"User\", \"Forum\", etc</li>

\t\t</ul>
\t</div>
 </div>

<!-- View all blogs, inserted via /CMS -> Components -> Blog --> 
<div class=\"col-sm-12 col-xs-12 posts-all\">
    ";
        // line 22
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("blogPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 23
        echo "</div>


</br>
<div class=\"jumbotron\">
    <div class=\"container\">
        /content/Welcome was removed !!!! <?=\$this['result']; ?>
    </div>
</div>

<div class=\"container\">

    <div class=\"page-header\">
        <h2>My page <small> !</small></h2>
    </div>
    <p>
        My Page </br>
\t\t<i class=\"fa fa-automobile\" style=\"font-size:36px;\"></i>
    </p>

    
\t";
        // line 44
        if (($context["result"] ?? null)) {
            // line 45
            echo "    <span class=\"lead\" style=\"color:red;\">
        The result is <span class=\"label label-success\">";
            // line 46
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["result"] ?? null), 46, $this->source), "html", null, true);
            echo "</span>
    </span>
    ";
        } else {
            // line 49
            echo "    <span class=\"text-muted\">
        No result
    </span>
   ";
        }
        // line 53
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/themes/demo/pages/myPage.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 53,  100 => 49,  94 => 46,  91 => 45,  89 => 44,  66 => 23,  62 => 22,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
\$this['result'] = \"yes\";

?>

 <div class=\"col-sm-12 col-xs-12 alert alert-success\">
    <div class=\"container\">
        <h3>Blog component </h3> 
\t\t<ul>
        <li>First load plugin \"Blog\" via -> Settings-> Updates & Plugins -> Install Plugins</li>
        <li>Now can create, edit blogs via \"Blog\" in top menu</li>
        <li>To add Blog to your page, go -> CMS -> Pages -> select your page -> click Components & select Blog-> select and drag item to the left markdown</li>
        <li>In order to modify< for example, Blog appearance (add/change BS classes, add your text), go to ->  \\localhost\\myoctober\\MyOctoberX\\plugins\\rainlab\\blog\\components\\posts</li>
\t\t<li>The same way can add plugins \"User\", \"Forum\", etc</li>

\t\t</ul>
\t</div>
 </div>

<!-- View all blogs, inserted via /CMS -> Components -> Blog --> 
<div class=\"col-sm-12 col-xs-12 posts-all\">
    {% component 'blogPosts' %}
</div>


</br>
<div class=\"jumbotron\">
    <div class=\"container\">
        /content/Welcome was removed !!!! <?=\$this['result']; ?>
    </div>
</div>

<div class=\"container\">

    <div class=\"page-header\">
        <h2>My page <small> !</small></h2>
    </div>
    <p>
        My Page </br>
\t\t<i class=\"fa fa-automobile\" style=\"font-size:36px;\"></i>
    </p>

    
\t{% if result %}
    <span class=\"lead\" style=\"color:red;\">
        The result is <span class=\"label label-success\">{{ result }}</span>
    </span>
    {% else %}
    <span class=\"text-muted\">
        No result
    </span>
   {% endif %}

</div>", "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/themes/demo/pages/myPage.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("component" => 22, "if" => 44);
        static $filters = array("escape" => 46);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component', 'if'],
                ['escape'],
                []
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
