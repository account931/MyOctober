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
        <li>The same way can add plugins \"User\", \"Forum\", etc</li>

\t\t</ul>
\t</div>
 </div>

<!-- inserted via /CMS -> Components -> Blog --> 
";
        // line 20
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("blogPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 21
        echo "

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
        // line 41
        if (($context["result"] ?? null)) {
            // line 42
            echo "    <span class=\"lead\" style=\"color:red;\">
        The result is <span class=\"label label-success\">";
            // line 43
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["result"] ?? null), 43, $this->source), "html", null, true);
            echo "</span>
    </span>
    ";
        } else {
            // line 46
            echo "    <span class=\"text-muted\">
        No result
    </span>
   ";
        }
        // line 50
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
        return array (  103 => 50,  97 => 46,  91 => 43,  88 => 42,  86 => 41,  64 => 21,  60 => 20,  39 => 1,);
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
        <li>The same way can add plugins \"User\", \"Forum\", etc</li>

\t\t</ul>
\t</div>
 </div>

<!-- inserted via /CMS -> Components -> Blog --> 
{% component 'blogPosts' %}


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
        static $tags = array("component" => 20, "if" => 41);
        static $filters = array("escape" => 43);
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
