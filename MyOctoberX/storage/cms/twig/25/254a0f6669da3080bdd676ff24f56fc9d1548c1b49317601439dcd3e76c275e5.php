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

/* C:\Users\user\Downloads\OSPanel\domains\localhost\myoctober\MyOctoberX/plugins/rainlab/forum/components/member/preview.htm */
class __TwigTemplate_9e30bf9361a786dc5975ef740f08bfae1a0061c1beb75d49a44fec27f3f70eee extends \Twig\Template
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
        echo "<div class=\"rainlab-forum\">
    <h5>
        ";
        // line 3
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["member"] ?? null), "username", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
        echo "
    </h5>
    <p>
        <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["member"] ?? null), "user", [], "any", false, false, true, 6), "avatarThumb", [0 => 50], "method", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "\" />
    </p>
    <p>Member since: ";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["member"] ?? null), "created_at", [], "any", false, false, true, 8), 8, $this->source), "M Y"), "html", null, true);
        echo "</p>
    ";
        // line 9
        if ( !twig_get_attribute($this->env, $this->source, ($context["member"] ?? null), "is_approved", [], "any", false, false, true, 9)) {
            // line 10
            echo "        <p>";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["member"] ?? null), "username", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo " requires approval before posting in guarded channels</p>
    ";
        }
        // line 12
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["member"] ?? null), "is_banned", [], "any", false, false, true, 12)) {
            // line 13
            echo "        <p>";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["member"] ?? null), "username", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            echo " has been banned from posting</p>
    ";
        }
        // line 15
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["member"] ?? null), "is_moderator", [], "any", false, false, true, 15)) {
            // line 16
            echo "        <p>";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["member"] ?? null), "username", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            echo " is a forum moderator</p>
    ";
        }
        // line 18
        echo "
    <h4>Recent posts</h4>
    ";
        // line 20
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@recentposts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 21
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/plugins/rainlab/forum/components/member/preview.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 21,  88 => 20,  84 => 18,  78 => 16,  75 => 15,  69 => 13,  66 => 12,  60 => 10,  58 => 9,  54 => 8,  49 => 6,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"rainlab-forum\">
    <h5>
        {{ member.username }}
    </h5>
    <p>
        <img src=\"{{ member.user.avatarThumb(50) }}\" />
    </p>
    <p>Member since: {{ member.created_at|date('M Y') }}</p>
    {% if not member.is_approved %}
        <p>{{ member.username }} requires approval before posting in guarded channels</p>
    {% endif %}
    {% if member.is_banned %}
        <p>{{ member.username }} has been banned from posting</p>
    {% endif %}
    {% if member.is_moderator %}
        <p>{{ member.username }} is a forum moderator</p>
    {% endif %}

    <h4>Recent posts</h4>
    {% partial '@recentposts' %}
</div>", "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/plugins/rainlab/forum/components/member/preview.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 9, "partial" => 20);
        static $filters = array("escape" => 3, "date" => 8);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'partial'],
                ['escape', 'date'],
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
