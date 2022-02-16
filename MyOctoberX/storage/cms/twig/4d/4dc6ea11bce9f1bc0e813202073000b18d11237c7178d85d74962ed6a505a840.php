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

/* C:\Users\user\Downloads\OSPanel\domains\localhost\myoctober\MyOctoberX/themes/responsiv-flat/partials/shop/sidebar.htm */
class __TwigTemplate_46b84fe466ae823e164871fc2caec6b1db1c1fa7b1ef9cf46f9ef0dcc8ade417 extends \Twig\Template
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
            <input type=\"text\" class=\"form-control\" placeholder=\"Search products...\">
            <span class=\"input-group-btn\">
                <button class=\"btn btn-primary\" type=\"button\"><i class=\"fa fa-search\"></i></button>
            </span>
        </div>
    </div>
</form>

<!-- Categories -->
<div class=\"panel-group\" id=\"shopNav\">
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <a data-toggle=\"collapse\" data-parent=\"#shopNav\" href=\"#shopNavOne\">
                Books &amp; CDs
            </a>
        </div>
        <div id=\"shopNavOne\" class=\"panel-collapse collapse in\">
            <ul class=\"list-group filter-list-group\">
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">17</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">8</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">10</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">24</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">4</span></li>
            </ul>
        </div>
    </div>
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <a data-toggle=\"collapse\" data-parent=\"#shopNav\" href=\"#shopNavTwo\" class=\"collapsed\">
                Electronics &amp; Computers
            </a>
        </div>
        <div id=\"shopNavTwo\" class=\"panel-collapse collapse\">
            <ul class=\"list-group filter-list-group\">
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">17</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">8</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">10</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">24</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">4</span></li>
            </ul>
        </div>
    </div>
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <a data-toggle=\"collapse\" data-parent=\"#shopNav\" href=\"#shopNavThree\" class=\"collapsed\">
                Home &amp; Garden
            </a>
        </div>
        <div id=\"shopNavThree\" class=\"panel-collapse collapse\">
            <ul class=\"list-group filter-list-group\">
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">17</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">8</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">10</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">24</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">4</span></li>
            </ul>
        </div>
    </div>
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <a data-toggle=\"collapse\" data-parent=\"#shopNav\" href=\"#shopNavFour\" class=\"collapsed\">
                Toys &amp; Kids
            </a>
        </div>
        <div id=\"shopNavFour\" class=\"panel-collapse collapse\">
            <ul class=\"list-group filter-list-group\">
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">17</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">8</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">10</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">24</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">4</span></li>
            </ul>
        </div>
    </div>
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <a data-toggle=\"collapse\" data-parent=\"#shopNav\" href=\"#shopNavFive\" class=\"collapsed\">
                Clothing &amp; Shoes
            </a>
        </div>
        <div id=\"shopNavFive\" class=\"panel-collapse collapse\">
            <ul class=\"list-group filter-list-group\">
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">17</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">8</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">10</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">24</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">4</span></li>
            </ul>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/themes/responsiv-flat/partials/shop/sidebar.htm";
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
            <input type=\"text\" class=\"form-control\" placeholder=\"Search products...\">
            <span class=\"input-group-btn\">
                <button class=\"btn btn-primary\" type=\"button\"><i class=\"fa fa-search\"></i></button>
            </span>
        </div>
    </div>
</form>

<!-- Categories -->
<div class=\"panel-group\" id=\"shopNav\">
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <a data-toggle=\"collapse\" data-parent=\"#shopNav\" href=\"#shopNavOne\">
                Books &amp; CDs
            </a>
        </div>
        <div id=\"shopNavOne\" class=\"panel-collapse collapse in\">
            <ul class=\"list-group filter-list-group\">
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">17</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">8</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">10</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">24</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">4</span></li>
            </ul>
        </div>
    </div>
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <a data-toggle=\"collapse\" data-parent=\"#shopNav\" href=\"#shopNavTwo\" class=\"collapsed\">
                Electronics &amp; Computers
            </a>
        </div>
        <div id=\"shopNavTwo\" class=\"panel-collapse collapse\">
            <ul class=\"list-group filter-list-group\">
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">17</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">8</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">10</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">24</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">4</span></li>
            </ul>
        </div>
    </div>
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <a data-toggle=\"collapse\" data-parent=\"#shopNav\" href=\"#shopNavThree\" class=\"collapsed\">
                Home &amp; Garden
            </a>
        </div>
        <div id=\"shopNavThree\" class=\"panel-collapse collapse\">
            <ul class=\"list-group filter-list-group\">
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">17</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">8</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">10</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">24</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">4</span></li>
            </ul>
        </div>
    </div>
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <a data-toggle=\"collapse\" data-parent=\"#shopNav\" href=\"#shopNavFour\" class=\"collapsed\">
                Toys &amp; Kids
            </a>
        </div>
        <div id=\"shopNavFour\" class=\"panel-collapse collapse\">
            <ul class=\"list-group filter-list-group\">
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">17</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">8</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">10</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">24</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">4</span></li>
            </ul>
        </div>
    </div>
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <a data-toggle=\"collapse\" data-parent=\"#shopNav\" href=\"#shopNavFive\" class=\"collapsed\">
                Clothing &amp; Shoes
            </a>
        </div>
        <div id=\"shopNavFive\" class=\"panel-collapse collapse\">
            <ul class=\"list-group filter-list-group\">
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">17</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">8</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">10</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">24</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">4</span></li>
            </ul>
        </div>
    </div>
</div>", "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/themes/responsiv-flat/partials/shop/sidebar.htm", "");
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
