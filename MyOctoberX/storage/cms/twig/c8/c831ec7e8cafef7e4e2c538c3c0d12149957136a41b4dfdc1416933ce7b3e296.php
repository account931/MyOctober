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

/* C:\Users\user\Downloads\OSPanel\domains\localhost\myoctober\MyOctoberX/plugins/rainlab/forum/components/member/default.htm */
class __TwigTemplate_97bd70e02c20b9d8a81629063994af330b2c7d83e9a36b42a111cc5de6505fb8 extends \Twig\Template
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
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 1
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 2
                echo "    <div class=\"alert alert-";
                (((($context["type"] ?? null) == "error")) ? (print ("danger")) : (print (twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true))));
                echo "\">
        ";
                // line 3
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["message"] ?? null), 3, $this->source), "html", null, true);
                echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
    </div>
";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 7
        echo "
";
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "member", [], "any", false, false, true, 8)) {
            // line 9
            echo "
    <div class=\"row\">
        <div class=\"col-md-3 col-md-push-9\">

            <div id=\"memberControlPanel\">
                ";
            // line 14
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@controlpanel"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 15
            echo "            </div>

        </div>
        <div class=\"col-md-9 col-md-pull-3\">
            ";
            // line 19
            if ((($context["mode"] ?? null) == "edit")) {
                // line 20
                echo "                ";
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::update")                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 21
                echo "            ";
            } else {
                // line 22
                echo "                ";
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::preview")                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 23
                echo "            ";
            }
            // line 24
            echo "        </div>
    </div>

";
        } else {
            // line 28
            echo "
    <p>Forum member not found</p>

";
        }
    }

    public function getTemplateName()
    {
        return "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/plugins/rainlab/forum/components/member/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 28,  95 => 24,  92 => 23,  87 => 22,  84 => 21,  79 => 20,  77 => 19,  71 => 15,  67 => 14,  60 => 9,  58 => 8,  55 => 7,  47 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% flash %}
    <div class=\"alert alert-{{ type == 'error' ? 'danger' : type }}\">
        {{ message }}
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
    </div>
{% endflash %}

{% if __SELF__.member %}

    <div class=\"row\">
        <div class=\"col-md-3 col-md-push-9\">

            <div id=\"memberControlPanel\">
                {% partial \"@controlpanel\" %}
            </div>

        </div>
        <div class=\"col-md-9 col-md-pull-3\">
            {% if mode == 'edit' %}
                {% partial __SELF__ ~ '::update' %}
            {% else %}
                {% partial __SELF__ ~ '::preview' %}
            {% endif %}
        </div>
    </div>

{% else %}

    <p>Forum member not found</p>

{% endif %}
", "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/plugins/rainlab/forum/components/member/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("flash" => 1, "if" => 8, "partial" => 14);
        static $filters = array("escape" => 2);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['flash', 'if', 'partial'],
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
