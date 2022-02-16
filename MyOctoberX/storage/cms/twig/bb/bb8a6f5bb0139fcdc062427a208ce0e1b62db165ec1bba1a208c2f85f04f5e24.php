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

/* C:\Users\user\Downloads\OSPanel\domains\localhost\myoctober\MyOctoberX/themes/demo/pages/user_session.htm */
class __TwigTemplate_bd34d35d2290b50645cb37705b311c466fa69f3562eb41cc3fbc5cb4fd2d0619 extends \Twig\Template
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
        echo "<div class=\"row\">

<div class=\"col-sm-12 col-xs-12\">
    <h3>User session</h3>
</div>

<div class=\"col-sm-12 col-xs-12\">
    ";
        // line 8
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("session"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 9
        echo "</div>

<div class=\"col-sm-12 col-xs-12\">
<ul class=\"nav navbar-nav\">
    <li class=\"";
        // line 13
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 13), "id", [], "any", false, false, true, 13) == "account")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo "user-management";
        echo "\"><button class=\"btn\">Account </button></a></li>
    ";
        // line 14
        if (($context["user"] ?? null)) {
            // line 15
            echo "        <li><a href=\"#\" data-request=\"onLogout\"><button class=\"btn\">Logout</button></a></li>
    ";
        }
        // line 17
        echo "</ul>
<d/div>

</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/themes/demo/pages/user_session.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 17,  68 => 15,  66 => 14,  58 => 13,  52 => 9,  48 => 8,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">

<div class=\"col-sm-12 col-xs-12\">
    <h3>User session</h3>
</div>

<div class=\"col-sm-12 col-xs-12\">
    {% component 'session' %}
</div>

<div class=\"col-sm-12 col-xs-12\">
<ul class=\"nav navbar-nav\">
    <li class=\"{% if this.page.id == 'account' %}active{% endif %}\"><a href=\"{{ 'user-management' }}\"><button class=\"btn\">Account </button></a></li>
    {% if user %}
        <li><a href=\"#\" data-request=\"onLogout\"><button class=\"btn\">Logout</button></a></li>
    {% endif %}
</ul>
<d/div>

</div>", "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/themes/demo/pages/user_session.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("component" => 8, "if" => 13);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component', 'if'],
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
