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

/* C:\Users\user\Downloads\OSPanel\domains\localhost\myoctober\MyOctoberX/themes/demo/pages/onePost.htm */
class __TwigTemplate_11ee6732376d1836d6cdc2f3fa6307b99f2e3360c7f0e37db31c076f23d2e8af extends \Twig\Template
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
        echo "<div class=\"col-sm-12 col-xs-12 alert alert-success\">
    <div class=\"container\">
        <h3>One Blog Post <span style=\"font-size:0.5em;\">(located in {/pages/onePost.htm})</span></h3> 
\t</div>
 </div>
 
 <!-- View one blog, inserted via /CMS -> Components -> Blog --> 
<div class=\"col-sm-12 col-xs-12 posts-one\">
     ";
        // line 9
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("blogPost"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 10
        echo "</div>
 
 

 <div class=\"col-sm-12 col-xs-12\">
    <div class=\"col-sm-10 col-xs-10 alert alert-danger\">
      <a href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("myPage");
        echo "\"> << Go back to Post List</a> 
\t</div>
 </div>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/themes/demo/pages/onePost.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 16,  53 => 10,  49 => 9,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-sm-12 col-xs-12 alert alert-success\">
    <div class=\"container\">
        <h3>One Blog Post <span style=\"font-size:0.5em;\">(located in {/pages/onePost.htm})</span></h3> 
\t</div>
 </div>
 
 <!-- View one blog, inserted via /CMS -> Components -> Blog --> 
<div class=\"col-sm-12 col-xs-12 posts-one\">
     {% component 'blogPost' %}
</div>
 
 

 <div class=\"col-sm-12 col-xs-12\">
    <div class=\"col-sm-10 col-xs-10 alert alert-danger\">
      <a href=\"{{ 'myPage'|page }}\"> << Go back to Post List</a> 
\t</div>
 </div>", "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/themes/demo/pages/onePost.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("component" => 9);
        static $filters = array("page" => 16);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component'],
                ['page'],
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
