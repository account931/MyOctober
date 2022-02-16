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

/* C:\Users\user\Downloads\OSPanel\domains\localhost\myoctober\MyOctoberX/themes/responsiv-flat/partials/blog/sidebar.htm */
class __TwigTemplate_68dba1592a6989654e0086fe7da9e7f04f6572d6b9da567b64daa00490190b73 extends \Twig\Template
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
        echo "<!-- Search -->
<form role=\"form\">
    <div class=\"well\">
        <div class=\"input-group\">
            <input type=\"text\" class=\"form-control\" placeholder=\"Search posts...\">
            <span class=\"input-group-btn\">
                <button class=\"btn btn-primary\" type=\"button\"><i class=\"fa fa-search\"></i></button>
            </span>
        </div>
    </div>
</form>

<!-- Categories -->
<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        Categories
    </div>
    <ul class=\"list-group filter-list-group\">
        <li class=\"list-group-item\"><a href=\"#\">DatabasesX</a> <span class=\"badge\">13</span></li>
        <li class=\"list-group-item\"><a href=\"#\">Design</a> <span class=\"badge\">24</span></li>
        <li class=\"list-group-item\"><a href=\"#\">Hardware</a> <span class=\"badge\">12</span></li>
        <li class=\"list-group-item\"><a href=\"#\">Management</a> <span class=\"badge\">18</span></li>
        <li class=\"list-group-item\"><a href=\"#\">Security</a> <span class=\"badge\">2</span></li>
    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/themes/responsiv-flat/partials/blog/sidebar.htm";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Search -->
<form role=\"form\">
    <div class=\"well\">
        <div class=\"input-group\">
            <input type=\"text\" class=\"form-control\" placeholder=\"Search posts...\">
            <span class=\"input-group-btn\">
                <button class=\"btn btn-primary\" type=\"button\"><i class=\"fa fa-search\"></i></button>
            </span>
        </div>
    </div>
</form>

<!-- Categories -->
<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        Categories
    </div>
    <ul class=\"list-group filter-list-group\">
        <li class=\"list-group-item\"><a href=\"#\">DatabasesX</a> <span class=\"badge\">13</span></li>
        <li class=\"list-group-item\"><a href=\"#\">Design</a> <span class=\"badge\">24</span></li>
        <li class=\"list-group-item\"><a href=\"#\">Hardware</a> <span class=\"badge\">12</span></li>
        <li class=\"list-group-item\"><a href=\"#\">Management</a> <span class=\"badge\">18</span></li>
        <li class=\"list-group-item\"><a href=\"#\">Security</a> <span class=\"badge\">2</span></li>
    </ul>
</div>", "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/themes/responsiv-flat/partials/blog/sidebar.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
