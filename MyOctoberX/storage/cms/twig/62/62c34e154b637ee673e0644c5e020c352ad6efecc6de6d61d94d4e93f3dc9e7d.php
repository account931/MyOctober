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

/* C:\Users\user\Downloads\OSPanel\domains\localhost\myoctober\MyOctoberX/themes/demo/partials/site/header.htm */
class __TwigTemplate_da4d775f17a80abd32b3c76cdb45f7138a592c65aaf4958b07ae3ffeada5ca71 extends \Twig\Template
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
        echo "<!-- Nav -->
<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top navbar-autohide\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">My OctoberX </a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"separator hidden-xs\"></li>
                <li class=\"";
        // line 16
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 16), "id", [], "any", false, false, true, 16) == "home")) {
            echo "active";
        }
        echo "\">                <a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">                 Basic concepts    </a></li>
                <li class=\"";
        // line 17
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 17), "id", [], "any", false, false, true, 17) == "ajax")) {
            echo "active";
        }
        echo "\">                <a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("ajax");
        echo "\">                 AJAX framework    </a></li>
                <li class=\"";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 18), "id", [], "any", false, false, true, 18) == "plugins")) {
            echo "active";
        }
        echo "\">             <a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("plugins");
        echo "\">              Plugin components </a></li>
\t\t\t\t<li class=\"";
        // line 19
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 19), "id", [], "any", false, false, true, 19) == "myPage")) {
            echo "active";
        }
        echo "\">              <a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("myPage");
        echo "\">               myPageBlog        </a></li>
\t\t\t\t<li class=\"";
        // line 20
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 20), "id", [], "any", false, false, true, 20) == "user-management")) {
            echo "active";
        }
        echo "\">     <a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("user-management");
        echo "\">      User              </a></li>
\t\t\t\t<li class=\"";
        // line 21
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 21), "id", [], "any", false, false, true, 21) == "forum")) {
            echo "active";
        }
        echo "\">               <a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("forum");
        echo "\">                Forum             </a></li>
                <li class=\"";
        // line 22
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 22), "id", [], "any", false, false, true, 22) == "my-plugin-front-end")) {
            echo "active";
        }
        echo "\"> <a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("my-plugin-front-end");
        echo "\">  My1Plug             </a></li>
\t\t\t\t<li class=\"";
        // line 23
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 23), "id", [], "any", false, false, true, 23) == "backend")) {
            echo "active";
        }
        echo "\">             <a href=\"";
        echo "backend";
        echo "\">                   Admin </a></li>
\t\t\t    <!--<li class=\"";
        // line 24
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 24), "id", [], "any", false, false, true, 24) == "onePost")) {
            echo "active";
        }
        echo "\">      <a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("onePost");
        echo "\">      onePost   </a></li>-->

\t\t\t\t
\t\t\t\t
            </ul>
        </div>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/themes/demo/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 24,  115 => 23,  107 => 22,  99 => 21,  91 => 20,  83 => 19,  75 => 18,  67 => 17,  59 => 16,  51 => 11,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Nav -->
<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top navbar-autohide\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"{{ 'home'|page }}\">My OctoberX </a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"separator hidden-xs\"></li>
                <li class=\"{% if this.page.id == 'home' %}active{% endif %}\">                <a href=\"{{ 'home'|page }}\">                 Basic concepts    </a></li>
                <li class=\"{% if this.page.id == 'ajax' %}active{% endif %}\">                <a href=\"{{ 'ajax'|page }}\">                 AJAX framework    </a></li>
                <li class=\"{% if this.page.id == 'plugins' %}active{% endif %}\">             <a href=\"{{ 'plugins'|page }}\">              Plugin components </a></li>
\t\t\t\t<li class=\"{% if this.page.id == 'myPage' %}active{% endif %}\">              <a href=\"{{ 'myPage'|page }}\">               myPageBlog        </a></li>
\t\t\t\t<li class=\"{% if this.page.id == 'user-management' %}active{% endif %}\">     <a href=\"{{ 'user-management'|page }}\">      User              </a></li>
\t\t\t\t<li class=\"{% if this.page.id == 'forum' %}active{% endif %}\">               <a href=\"{{ 'forum'|page }}\">                Forum             </a></li>
                <li class=\"{% if this.page.id == 'my-plugin-front-end' %}active{% endif %}\"> <a href=\"{{ 'my-plugin-front-end'|page }}\">  My1Plug             </a></li>
\t\t\t\t<li class=\"{% if this.page.id == 'backend' %}active{% endif %}\">             <a href=\"{{ 'backend' }}\">                   Admin </a></li>
\t\t\t    <!--<li class=\"{% if this.page.id == 'onePost' %}active{% endif %}\">      <a href=\"{{ 'onePost'|page }}\">      onePost   </a></li>-->

\t\t\t\t
\t\t\t\t
            </ul>
        </div>
    </div>
</nav>", "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/themes/demo/partials/site/header.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 16);
        static $filters = array("page" => 11);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
