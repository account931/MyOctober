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

/* C:\Users\user\Downloads\OSPanel\domains\localhost\myoctober\MyOctoberX/plugins/rainlab/forum/components/member/recentposts.htm */
class __TwigTemplate_f7ece6d3db79a721aec82831e7f4ecb7e792295aa5cc20a4a03868545d0751ae extends \Twig\Template
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
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getRecentPosts", [], "method", false, false, true, 1);
        // line 2
        echo "
<table class=\"forum-table\">
    <tr>
        <th>Post</th>
        <th class=\"activity-column\">When</th>
    </tr>

    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 10
            echo "        ";
            $context["topic"] = twig_get_attribute($this->env, $this->source, $context["post"], "topic", [], "any", false, false, true, 10);
            // line 11
            echo "        <tr class=\"forum-topic\">
            <td>
                ";
            // line 13
            echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), ["limit", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "content_html", [], "any", false, false, true, 13), 13, $this->source), 100]);
            echo "
            </td>
            <td class=\"activity-column\">
                <p>
                    Posted in
                    <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["topic"] ?? null), "url", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "?page=last#post-";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["topic"] ?? null), "subject", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "</a>
                    ";
            // line 19
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['date'] = twig_get_attribute($this->env, $this->source, $context["post"], "updated_at", [], "any", false, false, true, 19)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::timestamp")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 20
            echo "                </p>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
    ";
        // line 25
        if ( !twig_length_filter($this->env, ($context["posts"] ?? null))) {
            // line 26
            echo "        <tr>
            <td colspan=\"100\">This member has not participated in the forum.</td>
        </tr>
    ";
        }
        // line 30
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/plugins/rainlab/forum/components/member/recentposts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 30,  96 => 26,  94 => 25,  91 => 24,  82 => 20,  77 => 19,  69 => 18,  61 => 13,  57 => 11,  54 => 10,  50 => 9,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set posts = __SELF__.getRecentPosts() %}

<table class=\"forum-table\">
    <tr>
        <th>Post</th>
        <th class=\"activity-column\">When</th>
    </tr>

    {% for post in posts %}
        {% set topic = post.topic %}
        <tr class=\"forum-topic\">
            <td>
                {{ html_limit(post.content_html, 100)|raw }}
            </td>
            <td class=\"activity-column\">
                <p>
                    Posted in
                    <a href=\"{{ topic.url }}?page=last#post-{{ post.id }}\">{{ topic.subject }}</a>
                    {% partial __SELF__ ~ \"::timestamp\" date=post.updated_at %}
                </p>
            </td>
        </tr>
    {% endfor %}

    {% if not posts|length %}
        <tr>
            <td colspan=\"100\">This member has not participated in the forum.</td>
        </tr>
    {% endif %}
</table>
", "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/plugins/rainlab/forum/components/member/recentposts.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "for" => 9, "partial" => 19, "if" => 25);
        static $filters = array("raw" => 13, "escape" => 18, "length" => 25);
        static $functions = array("html_limit" => 13);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'partial', 'if'],
                ['raw', 'escape', 'length'],
                ['html_limit']
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
