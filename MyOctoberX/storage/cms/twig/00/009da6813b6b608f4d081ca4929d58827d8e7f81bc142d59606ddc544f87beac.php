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

/* C:\Users\user\Downloads\OSPanel\domains\localhost\myoctober\MyOctoberX/themes/demo/pages/my-plugin-front-end.htm */
class __TwigTemplate_82755f25e13685c6d4006acbda13bb7671258d7110bbbdd2df9e7f8c23b462fb extends \Twig\Template
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
        echo "<h1>My Plugin frontend </h1>

<div class=\"col-sm-12 col-xs-12\"> 

";
        // line 7
        echo "

";
        // line 9
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", [], "any", false, false, true, 9);
        // line 10
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "displayColumn", [], "any", false, false, true, 10);
        // line 11
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "noRecordsMessage", [], "any", false, false, true, 11);
        // line 12
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsPage", [], "any", false, false, true, 12);
        // line 13
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsKeyColumn", [], "any", false, false, true, 13);
        // line 14
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsUrlParameter", [], "any", false, false, true, 14);
        // line 15
        echo "
<hr>
<ul class=\"record-list\">
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 19
            echo "        <li>
            ";
            // line 21
            echo "            ";
            ob_start();
            // line 22
            echo "                ";
            if (($context["detailsPage"] ?? null)) {
                // line 23
                echo "                    <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(($context["detailsPage"] ?? null), 23, $this->source), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, true, 23)]);
                echo "\">
                ";
            }
            // line 25
            echo "
\t\t\t\t<!-- Display one Column \"img_name\", specified in /pages/my-plugin-front-end-> Record list -->
\t\t\t\t<div class=\"col-sm-4 col-xs-4\"> 
\t\t\t\t<i class=\"fa fa-clone\" style=\"font-size:18px\"></i>
                ";
            // line 29
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], ($context["displayColumn"] ?? null), [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t
\t\t\t\t<!-- Display Column img_blog_id. Added by me. Contains link to one page-->
\t\t\t\t<div class=\"col-sm-4 col-xs-4\"> 
\t\t\t\t<i class=\"fa fa-clone\" style=\"font-size:18px\"></i> 
                <a href=\"";
            // line 36
            echo "my-plugin-front-end-view-one/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "img_id", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
            echo "\">  id: ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "img_id", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
            echo "</a>\t
                \t\t\t
\t\t\t\t <!-- my add -->
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<!-- Display  Column created_at. Added by me-->
\t\t\t\t<div class=\"col-sm-4 col-xs-4\">
\t\t\t\t<i class=\"fa fa-clone\" style=\"font-size:18px\"></i>   
\t\t\t\tcreated: ";
            // line 44
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "created_at", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
            echo " <!-- my add -->
\t\t\t\t</div>

                ";
            // line 47
            if (($context["detailsPage"] ?? null)) {
                // line 48
                echo "                    </a>
                ";
            }
            // line 50
            echo "            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 51
            echo "        </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 53
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["noRecordsMessage"] ?? null), 53, $this->source), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "</ul>

";
        // line 57
        if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 57) > 1)) {
            // line 58
            echo "    <ul class=\"pagination\">
        ";
            // line 59
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 59) > 1)) {
                // line 60
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 60), "baseFileName", [], "any", false, false, true, 60), 60, $this->source), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 60) - 1)]);
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 62
            echo "
        ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 63)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 64
                echo "            <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 64) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 65
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 65), "baseFileName", [], "any", false, false, true, 65), 65, $this->source), [($context["pageParam"] ?? null) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 65, $this->source), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "
        ";
            // line 69
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 69) > twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 69))) {
                // line 70
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 70), "baseFileName", [], "any", false, false, true, 70), 70, $this->source), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 70) + 1)]);
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 72
            echo "    </ul>
";
        }
        // line 74
        echo "
</div>

<div style=\"height:20em;\"></div>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/themes/demo/pages/my-plugin-front-end.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 74,  197 => 72,  191 => 70,  189 => 69,  186 => 68,  175 => 65,  170 => 64,  166 => 63,  163 => 62,  157 => 60,  155 => 59,  152 => 58,  150 => 57,  146 => 55,  137 => 53,  131 => 51,  128 => 50,  124 => 48,  122 => 47,  116 => 44,  102 => 36,  92 => 29,  86 => 25,  80 => 23,  77 => 22,  74 => 21,  71 => 19,  66 => 18,  61 => 15,  59 => 14,  57 => 13,  55 => 12,  53 => 11,  51 => 10,  49 => 9,  45 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>My Plugin frontend </h1>

<div class=\"col-sm-12 col-xs-12\"> 

{# Comment format #}
{# Instead of using {% component 'builderList' %}, we use this extended code to display more than 1 default column & use customized layout. Extended code is Inited via placing cursor on {% component in code and clicking icon left to Zoom icon (bottom right) #}


{% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}

<hr>
<ul class=\"record-list\">
    {% for record in records %}
        <li>
            {# Use spaceless tag to remove spaces inside the A tag. #}
            {% spaceless %}
                {% if detailsPage %}
                    <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">
                {% endif %}

\t\t\t\t<!-- Display one Column \"img_name\", specified in /pages/my-plugin-front-end-> Record list -->
\t\t\t\t<div class=\"col-sm-4 col-xs-4\"> 
\t\t\t\t<i class=\"fa fa-clone\" style=\"font-size:18px\"></i>
                {{ attribute(record, displayColumn) }}
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t
\t\t\t\t<!-- Display Column img_blog_id. Added by me. Contains link to one page-->
\t\t\t\t<div class=\"col-sm-4 col-xs-4\"> 
\t\t\t\t<i class=\"fa fa-clone\" style=\"font-size:18px\"></i> 
                <a href=\"{{ 'my-plugin-front-end-view-one/'}}{{record.img_id }}\">  id: {{record.img_id}}</a>\t
                \t\t\t
\t\t\t\t <!-- my add -->
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<!-- Display  Column created_at. Added by me-->
\t\t\t\t<div class=\"col-sm-4 col-xs-4\">
\t\t\t\t<i class=\"fa fa-clone\" style=\"font-size:18px\"></i>   
\t\t\t\tcreated: {{record.created_at}} <!-- my add -->
\t\t\t\t</div>

                {% if detailsPage %}
                    </a>
                {% endif %}
            {% endspaceless %}
        </li>
    {% else %}
        <li class=\"no-data\">{{ noRecordsMessage }}</li>
    {% endfor %}
</ul>

{% if records.lastPage > 1 %}
    <ul class=\"pagination\">
        {% if records.currentPage > 1 %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage-1) }) }}\">&larr; Prev</a></li>
        {% endif %}

        {% for page in 1..records.lastPage %}
            <li class=\"{{ records.currentPage == page ? 'active' : null }}\">
                <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
            </li>
        {% endfor %}

        {% if records.lastPage > records.currentPage %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage+1) }) }}\">Next &rarr;</a></li>
        {% endif %}
    </ul>
{% endif %}

</div>

<div style=\"height:20em;\"></div>", "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/themes/demo/pages/my-plugin-front-end.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 9, "for" => 18, "spaceless" => 21, "if" => 22);
        static $filters = array("page" => 23, "escape" => 29);
        static $functions = array("range" => 63);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'spaceless', 'if'],
                ['page', 'escape'],
                ['range']
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
