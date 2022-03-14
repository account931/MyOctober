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

/* C:\Users\user\Downloads\OSPanel\domains\localhost\myoctober\MyOctoberX/themes/demo/pages/shopaholic.htm */
class __TwigTemplate_0de739ee0cb56fba686b59eb6c2e3ff2036a4c816cf5a02295c6992a4824869e extends \Twig\Template
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
        echo "<h1>Shop</h1>
<div class=\"col-sm-12 col-xs-12 alert alert-danger\">
<p>Shopaholic plugin does not work 100% correctly(tested it in other copy of CMS), so here we simply test a  display of my component 'ProductsXComponent' (50% the same as used in /my-plugin-front-end  (menu item \"My1Plug\"))</p>
</div>

<div class=\"col-sm-12 col-xs-12\">
     ";
        // line 7
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("ProductsXComponent"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "   
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/themes/demo/pages/shopaholic.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Shop</h1>
<div class=\"col-sm-12 col-xs-12 alert alert-danger\">
<p>Shopaholic plugin does not work 100% correctly(tested it in other copy of CMS), so here we simply test a  display of my component 'ProductsXComponent' (50% the same as used in /my-plugin-front-end  (menu item \"My1Plug\"))</p>
</div>

<div class=\"col-sm-12 col-xs-12\">
     {% component 'ProductsXComponent' %}   
</div>", "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/themes/demo/pages/shopaholic.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("component" => 7);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component'],
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
