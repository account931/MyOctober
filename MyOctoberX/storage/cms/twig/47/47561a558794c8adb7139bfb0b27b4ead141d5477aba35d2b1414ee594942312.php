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

/* C:\Users\user\Downloads\OSPanel\domains\localhost\myoctober\MyOctoberX/plugins/rainlab/user/components/account/default.htm */
class __TwigTemplate_eb4695f6a36726a9d020a191d099c33da50aece5728e1f362413ad5da1a30123 extends \Twig\Template
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
        if ( !($context["user"] ?? null)) {
            // line 2
            echo "
    <div class=\"row\">

        <div class=\"col-md-6\">
            <h3>Sign in</h3>
            ";
            // line 7
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::signin")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 8
            echo "        </div>

        <div class=\"col-md-6\">
            ";
            // line 11
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::register")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 12
            echo "        </div>

    </div>

";
        } else {
            // line 17
            echo "    </br>
    <div class=\"col-sm-12 col-xs-12 alert alert-info\"> 
\t    <p> You are now logged <p/>
\t\t<p> <i class=\"fa fa-address-card-o\" style=\"font-size:24px\"></i> &nbsp; <b> ";
            // line 20
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo " </b> <p/> 
       \t<p>\t<i class=\"fa fa-envelope-o\" style=\"font-size:24px\"></i> &nbsp; <b>";
            // line 21
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
            echo " </b> <p/> 
\t\t<hr>
\t\t<p> <a href=\"#\" data-request=\"onLogout\"><button class=\"btn btn-success\"> Logout</button> </a> </p>
\t</div>
\t
    ";
            // line 26
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::activation_check")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 27
            echo "
    ";
            // line 28
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::update")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 29
            echo "
    ";
            // line 30
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::deactivate_link")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 31
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/plugins/rainlab/user/components/account/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 31,  99 => 30,  96 => 29,  92 => 28,  89 => 27,  85 => 26,  77 => 21,  73 => 20,  68 => 17,  61 => 12,  57 => 11,  52 => 8,  48 => 7,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if not user %}

    <div class=\"row\">

        <div class=\"col-md-6\">
            <h3>Sign in</h3>
            {% partial __SELF__ ~ '::signin' %}
        </div>

        <div class=\"col-md-6\">
            {% partial __SELF__ ~ '::register' %}
        </div>

    </div>

{% else %}
    </br>
    <div class=\"col-sm-12 col-xs-12 alert alert-info\"> 
\t    <p> You are now logged <p/>
\t\t<p> <i class=\"fa fa-address-card-o\" style=\"font-size:24px\"></i> &nbsp; <b> {{ user.name }} </b> <p/> 
       \t<p>\t<i class=\"fa fa-envelope-o\" style=\"font-size:24px\"></i> &nbsp; <b>{{ user.email }} </b> <p/> 
\t\t<hr>
\t\t<p> <a href=\"#\" data-request=\"onLogout\"><button class=\"btn btn-success\"> Logout</button> </a> </p>
\t</div>
\t
    {% partial __SELF__ ~ '::activation_check' %}

    {% partial __SELF__ ~ '::update' %}

    {% partial __SELF__ ~ '::deactivate_link' %}

{% endif %}
", "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/plugins/rainlab/user/components/account/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "partial" => 7);
        static $filters = array("escape" => 20);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'partial'],
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
