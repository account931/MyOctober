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

/* C:\Users\user\Downloads\OSPanel\domains\localhost\myoctober\MyOctoberX/plugins/rainlab/forum/components/topic/posts.htm */
class __TwigTemplate_cdd136bd7eec40f519a6d5d77d6429d351e04a61d9288eb83f1d40341ca1be54 extends \Twig\Template
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
        echo "<div class=\"forum-posts\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 3
            echo "        ";
            $context["isGuarded"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["topic"] ?? null), "channel", [], "any", false, false, true, 3), "is_guarded", [], "any", false, false, true, 3) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "member", [], "any", false, false, true, 3), "is_approved", [], "any", false, false, true, 3));
            // line 4
            echo "        ";
            if (( !($context["member"] ?? null) && ($context["isGuarded"] ?? null))) {
                // line 5
                echo "            ";
                // line 6
                echo "        ";
            } else {
                // line 7
                echo "            <div class=\"forum-post ";
                echo ((($context["isGuarded"] ?? null)) ? ("is-guarded") : (""));
                echo "\" data-post-id=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
                echo "\" id=\"post-";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
                echo "\">
                ";
                // line 8
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['post'] = $context["post"]                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::post")                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 9
                echo "            </div>
        ";
            }
            // line 11
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/plugins/rainlab/forum/components/topic/posts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 12,  75 => 11,  71 => 9,  66 => 8,  57 => 7,  54 => 6,  52 => 5,  49 => 4,  46 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"forum-posts\">
    {% for post in posts %}
        {% set isGuarded = topic.channel.is_guarded and not post.member.is_approved %}
        {% if not member and isGuarded %}
            {# Post has been hidden #}
        {% else %}
            <div class=\"forum-post {{ isGuarded ? 'is-guarded' }}\" data-post-id=\"{{ post.id }}\" id=\"post-{{ post.id }}\">
                {% partial __SELF__ ~ \"::post\" post=post %}
            </div>
        {% endif %}
    {% endfor %}
</div>
", "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/plugins/rainlab/forum/components/topic/posts.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 2, "set" => 3, "if" => 4, "partial" => 8);
        static $filters = array("escape" => 7);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if', 'partial'],
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
