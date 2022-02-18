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

/* C:\Users\user\Downloads\OSPanel\domains\localhost\myoctober\MyOctoberX/plugins/rainlab/forum/components/channel/pagination.htm */
class __TwigTemplate_921cad73d0addbdd837074287fc7b53ee56a611216b69fa06ea0e5c5bfad8e00 extends \Twig\Template
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
        $context["paginationEnabled"] = (((twig_get_attribute($this->env, $this->source,         // line 2
($context["topics"] ?? null), "currentPage", [], "any", false, false, true, 2) > 1) || (twig_get_attribute($this->env, $this->source,         // line 3
($context["topics"] ?? null), "lastPage", [], "any", false, false, true, 3) > 1)) || (twig_get_attribute($this->env, $this->source,         // line 4
($context["topics"] ?? null), "lastPage", [], "any", false, false, true, 4) > twig_get_attribute($this->env, $this->source, ($context["topics"] ?? null), "currentPage", [], "any", false, false, true, 4)));
        // line 6
        echo "
<div class=\"row forum-pagination ";
        // line 7
        echo ((($context["paginationEnabled"] ?? null)) ? ("enabled") : ("disabled"));
        echo "\">
    <div class=\"col-md-8\">
        ";
        // line 9
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['records'] = ($context["topics"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::pagination-list")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "    </div>
    <div class=\"col-md-4 text-right posts-total-summary\">
        <p>";
        // line 12
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["topics"] ?? null), "firstItem", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["topics"] ?? null), "lastItem", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo " of ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["topics"] ?? null), "total", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "</p>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/plugins/rainlab/forum/components/channel/pagination.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 12,  57 => 10,  52 => 9,  47 => 7,  44 => 6,  42 => 4,  41 => 3,  40 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set paginationEnabled =
\ttopics.currentPage > 1 or
\ttopics.lastPage > 1 or
\ttopics.lastPage > topics.currentPage
%}

<div class=\"row forum-pagination {{ paginationEnabled ? \"enabled\" : \"disabled\" }}\">
    <div class=\"col-md-8\">
        {% partial __SELF__ ~ \"::pagination-list\" records=topics %}
    </div>
    <div class=\"col-md-4 text-right posts-total-summary\">
        <p>{{ topics.firstItem }}-{{ topics.lastItem }} of {{ topics.total }}</p>
    </div>
</div>
", "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/plugins/rainlab/forum/components/channel/pagination.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "partial" => 9);
        static $filters = array("escape" => 12);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'partial'],
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