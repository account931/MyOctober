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

/* C:\Users\user\Downloads\OSPanel\domains\localhost\myoctober\MyOctoberX/plugins/rainlab/forum/components/partials/pagination-list.htm */
class __TwigTemplate_bf23152063d04e913034b7264a02171613b9e0267868961211639f7c62461881 extends \Twig\Template
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
($context["records"] ?? null), "currentPage", [], "any", false, false, true, 2) > 1) || (twig_get_attribute($this->env, $this->source,         // line 3
($context["records"] ?? null), "lastPage", [], "any", false, false, true, 3) > 1)) || (twig_get_attribute($this->env, $this->source,         // line 4
($context["records"] ?? null), "lastPage", [], "any", false, false, true, 4) > twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 4)));
        // line 6
        echo "
";
        // line 7
        if (($context["paginationEnabled"] ?? null)) {
            // line 8
            echo "    ";
            // line 9
            echo "    ";
            $context["n"] = 2;
            // line 10
            echo "
    ";
            // line 11
            $context["currentPageZeroBased"] = (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 11) - 1);
            // line 12
            echo "
    ";
            // line 13
            $context["pageLinks"] = [];
            // line 14
            echo "    ";
            $context["pageSet"] = [];
            // line 15
            echo "
    ";
            // line 16
            $context["startOffset"] = max((($context["currentPageZeroBased"] ?? null) - ($context["n"] ?? null)), 0);
            // line 17
            echo "    ";
            if ((((($context["startOffset"] ?? null) + (2 * ($context["n"] ?? null))) + 1) > (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 17) - 1))) {
                // line 18
                echo "        ";
                $context["startOffset"] = max(((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 18) - (2 * ($context["n"] ?? null))) - 1), 0);
                // line 19
                echo "    ";
            }
            // line 20
            echo "
    ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 21)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 22
                echo "        ";
                $context["pageLinks"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["pageLinks"] ?? null), 22, $this->source), [0 => $context["page"]]);
                // line 23
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "
    ";
            // line 25
            $context["activeBlock"] = twig_slice($this->env, $this->sandbox->ensureToStringAllowed(($context["pageLinks"] ?? null), 25, $this->source), $this->sandbox->ensureToStringAllowed(($context["startOffset"] ?? null), 25, $this->source), ((2 * ($context["n"] ?? null)) + 1));
            // line 26
            echo "
    ";
            // line 27
            if ((($context["startOffset"] ?? null) > 0)) {
                // line 28
                echo "        ";
                $context["pageSet"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["pageSet"] ?? null), 28, $this->source), [0 => 1]);
                // line 29
                echo "
        ";
                // line 30
                if ((($context["startOffset"] ?? null) > 1)) {
                    // line 31
                    echo "            ";
                    $context["pageSet"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["pageSet"] ?? null), 31, $this->source), [0 => "..."]);
                    // line 32
                    echo "        ";
                }
                // line 33
                echo "    ";
            }
            // line 34
            echo "
    ";
            // line 35
            $context["pageSet"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["pageSet"] ?? null), 35, $this->source), $this->sandbox->ensureToStringAllowed(($context["activeBlock"] ?? null), 35, $this->source));
            // line 36
            echo "
    ";
            // line 37
            $context["diffToEnd"] = (((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 37) - 1) - ((($context["startOffset"] ?? null) + (2 * ($context["n"] ?? null))) + 1)) + 1);
            // line 38
            echo "
    ";
            // line 39
            if ((($context["diffToEnd"] ?? null) > 0)) {
                // line 40
                echo "        ";
                if ((($context["diffToEnd"] ?? null) > 1)) {
                    // line 41
                    echo "            ";
                    $context["pageSet"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["pageSet"] ?? null), 41, $this->source), [0 => "..."]);
                    // line 42
                    echo "        ";
                }
                // line 43
                echo "
        ";
                // line 44
                $context["pageSet"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["pageSet"] ?? null), 44, $this->source), [0 => twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 44)]);
                // line 45
                echo "    ";
            }
            // line 46
            echo "
    <ul class=\"pagination\">
        ";
            // line 48
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 48) > 1)) {
                // line 49
                echo "            <li>
                <a href=\"";
                // line 50
                echo twig_escape_filter($this->env, ($this->sandbox->ensureToStringAllowed(($context["paginationUrl"] ?? null), 50, $this->source) . (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 50) - 1)), "html", null, true);
                echo "\">
                    &larr; Previous
                </a>
            </li>
        ";
            } else {
                // line 55
                echo "            <li class=\"disabled\">
                <span>
                    &larr; Previous
                </span>
            </li>
        ";
            }
            // line 61
            echo "
        ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pageSet"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 63
                echo "            ";
                if (($context["page"] == "...")) {
                    // line 64
                    echo "                <li class=\"interval\">
                    ";
                    // line 65
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 65, $this->source), "html", null, true);
                    echo "
                </li>
            ";
                } else {
                    // line 68
                    echo "                <li class=\"";
                    echo ((($context["page"] == twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 68))) ? ("active") : (""));
                    echo "\">
                    <a href=\"";
                    // line 69
                    echo twig_escape_filter($this->env, ($this->sandbox->ensureToStringAllowed(($context["paginationUrl"] ?? null), 69, $this->source) . $this->sandbox->ensureToStringAllowed($context["page"], 69, $this->source)), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 69, $this->source), "html", null, true);
                    echo "</a>
                </li>
            ";
                }
                // line 72
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "
        ";
            // line 74
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 74) > twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 74))) {
                // line 75
                echo "            <li>
                <a href=\"";
                // line 76
                echo twig_escape_filter($this->env, ($this->sandbox->ensureToStringAllowed(($context["paginationUrl"] ?? null), 76, $this->source) . (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 76) + 1)), "html", null, true);
                echo "\">
                    Next &rarr;
                </a>
            </li>
        ";
            } else {
                // line 81
                echo "            <li class=\"disabled\">
                <span>
                    Next &rarr;
                </span>
            </li>
        ";
            }
            // line 87
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/plugins/rainlab/forum/components/partials/pagination-list.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 87,  235 => 81,  227 => 76,  224 => 75,  222 => 74,  219 => 73,  213 => 72,  205 => 69,  200 => 68,  194 => 65,  191 => 64,  188 => 63,  184 => 62,  181 => 61,  173 => 55,  165 => 50,  162 => 49,  160 => 48,  156 => 46,  153 => 45,  151 => 44,  148 => 43,  145 => 42,  142 => 41,  139 => 40,  137 => 39,  134 => 38,  132 => 37,  129 => 36,  127 => 35,  124 => 34,  121 => 33,  118 => 32,  115 => 31,  113 => 30,  110 => 29,  107 => 28,  105 => 27,  102 => 26,  100 => 25,  97 => 24,  91 => 23,  88 => 22,  84 => 21,  81 => 20,  78 => 19,  75 => 18,  72 => 17,  70 => 16,  67 => 15,  64 => 14,  62 => 13,  59 => 12,  57 => 11,  54 => 10,  51 => 9,  49 => 8,  47 => 7,  44 => 6,  42 => 4,  41 => 3,  40 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set paginationEnabled =
    records.currentPage > 1 or
    records.lastPage > 1 or
    records.lastPage > records.currentPage
%}

{% if paginationEnabled %}
    {# How many pages to display around the current page #}
    {% set n = 2 %}

    {% set currentPageZeroBased = records.currentPage-1 %}

    {% set pageLinks = [] %}
    {% set pageSet = [] %}

    {% set startOffset = max(currentPageZeroBased - n, 0) %}
    {% if (startOffset + 2*n+1) > (records.lastPage-1) %}
        {% set startOffset = max(records.lastPage - 2*n - 1, 0) %}
    {% endif %}

    {% for page in 1..records.lastPage %}
        {% set pageLinks = pageLinks|merge([page]) %}
    {% endfor %}

    {% set activeBlock = pageLinks|slice(startOffset, 2*n + 1) %}

    {% if startOffset > 0 %}
        {% set pageSet = pageSet|merge([1]) %}

        {% if startOffset > 1 %}
            {% set pageSet = pageSet|merge(['...']) %}
        {% endif %}
    {% endif %}

    {% set pageSet = pageSet|merge(activeBlock) %}

    {% set diffToEnd = (records.lastPage-1) - (startOffset + 2*n+1) + 1 %}

    {% if diffToEnd > 0 %}
        {% if diffToEnd > 1 %}
            {% set pageSet = pageSet|merge(['...']) %}
        {% endif %}

        {% set pageSet = pageSet|merge([records.lastPage]) %}
    {% endif %}

    <ul class=\"pagination\">
        {% if records.currentPage > 1 %}
            <li>
                <a href=\"{{ paginationUrl ~ (records.currentPage - 1) }}\">
                    &larr; Previous
                </a>
            </li>
        {% else %}
            <li class=\"disabled\">
                <span>
                    &larr; Previous
                </span>
            </li>
        {% endif %}

        {% for page in pageSet %}
            {% if page == '...' %}
                <li class=\"interval\">
                    {{ page }}
                </li>
            {% else %}
                <li class=\"{{ page == records.currentPage ? 'active' }}\">
                    <a href=\"{{ paginationUrl ~ page }}\">{{ page }}</a>
                </li>
            {% endif %}
        {% endfor %}

        {% if records.lastPage > records.currentPage %}
            <li>
                <a href=\"{{ paginationUrl ~ (records.currentPage + 1) }}\">
                    Next &rarr;
                </a>
            </li>
        {% else %}
            <li class=\"disabled\">
                <span>
                    Next &rarr;
                </span>
            </li>
        {% endif %}
    </ul>
{% endif %}", "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/plugins/rainlab/forum/components/partials/pagination-list.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 7, "for" => 21);
        static $filters = array("merge" => 22, "slice" => 25, "escape" => 50);
        static $functions = array("max" => 16, "range" => 21);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['merge', 'slice', 'escape'],
                ['max', 'range']
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
