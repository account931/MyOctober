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

/* C:\Users\user\Downloads\OSPanel\domains\localhost\myoctober\MyOctoberX/plugins/rainlab/forum/components/topic/post.htm */
class __TwigTemplate_d71084951ff5f57d21667841674240a7ea24e11aaebee6676255f757006e3a89 extends \Twig\Template
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
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "member", [], "any", false, false, true, 1), "url", [], "any", false, false, true, 1), 1, $this->source), "html", null, true);
        echo "\" class=\"avatar\">
    <img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "member", [], "any", false, false, true, 2), "user", [], "any", false, false, true, 2), "avatarThumb", [0 => 50], "method", false, false, true, 2), 2, $this->source), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "member", [], "any", false, false, true, 2), "username", [], "any", false, false, true, 2), 2, $this->source), "html", null, true);
        echo "\" />
</a>
<div class=\"content\">
    <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "member", [], "any", false, false, true, 5), "url", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "\" class=\"author\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "member", [], "any", false, false, true, 5), "username", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "</a>
    <div class=\"metadata\">
        <div class=\"date\">
            <a href=\"#post-";
        // line 8
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "\">
                ";
        // line 9
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['date'] = twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "created_at", [], "any", false, false, true, 9)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::timestamp")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "            </a>
        </div>
        ";
        // line 12
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "member", [], "any", false, false, true, 12), "is_banned", [], "any", false, false, true, 12)) {
            // line 13
            echo "            <div class=\"status text-danger\">
                <i class=\"icon-exclamation\"></i> Banned
            </div>
        ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 16
($context["topic"] ?? null), "channel", [], "any", false, false, true, 16), "is_guarded", [], "any", false, false, true, 16) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "member", [], "any", false, false, true, 16), "is_approved", [], "any", false, false, true, 16))) {
            // line 17
            echo "            <div class=\"status text-warning\">
                <i class=\"icon-lock\"></i> Unapproved
            </div>
        ";
        } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 20
($context["post"] ?? null), "member", [], "any", false, false, true, 20), "is_moderator", [], "any", false, false, true, 20)) {
            // line 21
            echo "            <div class=\"status\">
                <i class=\"icon-star\"></i> Moderator
            </div>
        ";
        }
        // line 25
        echo "    </div>

    ";
        // line 27
        if ((($context["mode"] ?? null) == "edit")) {
            // line 28
            echo "
        ";
            // line 29
            echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), ["open"]);
            echo "
            <!-- Passable fields -->
            <input type=\"hidden\" name=\"mode\" value=\"save\" />
            <input type=\"hidden\" name=\"post\" value=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
            echo "\" />

            ";
            // line 34
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["topic"] ?? null), "first_post", [], "any", false, false, true, 34), "id", [], "any", false, false, true, 34) == twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, true, 34))) {
                // line 35
                echo "                <input type=\"text\" name=\"subject\" class=\"form-control\" value=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["topic"] ?? null), "subject", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                echo "\" />
            ";
            }
            // line 37
            echo "
            <div class=\"text\">
                <textarea
                    rows=\"5\"
                    name=\"content\"
                    class=\"form-control\"
                    >";
            // line 43
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
            echo "</textarea>
            </div>
            <div class=\"actions\">
                <a
                    href=\"javascript:;\"
                    data-request=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["__SELF__"] ?? null), 48, $this->source), "html", null, true);
            echo "::onUpdate\"
                    data-request-data=\"post: ";
            // line 49
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
            echo "\"
                    data-request-update=\"'";
            // line 50
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["__SELF__"] ?? null), 50, $this->source), "html", null, true);
            echo "::post': '#post-";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
            echo "'\"
                    class=\"save\">
                    Save
                </a>

                <a
                    href=\"javascript:;\"
                    data-request=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["__SELF__"] ?? null), 57, $this->source), "html", null, true);
            echo "::onUpdate\"
                    data-request-data=\"post: ";
            // line 58
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
            echo ", mode: 'delete'\"
                    data-request-update=\"'";
            // line 59
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["__SELF__"] ?? null), 59, $this->source), "html", null, true);
            echo "::post': '#post-";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
            echo "'\"
                    data-request-confirm=\"Are you sure?\"
                    class=\"delete\">
                    Delete
                </a>

                <a href=\"javascript:;\"
                    data-request=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["__SELF__"] ?? null), 66, $this->source), "html", null, true);
            echo "::onUpdate\"
                    data-request-data=\"post: ";
            // line 67
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
            echo ", mode: 'view'\"
                    data-request-update=\"'";
            // line 68
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["__SELF__"] ?? null), 68, $this->source), "html", null, true);
            echo "::post': '#post-";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
            echo "'\"
                    class=\"cancel\">
                    Cancel
                </a>
            </div>
        ";
            // line 73
            echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
            echo "

    ";
        } elseif ((        // line 75
($context["mode"] ?? null) == "delete")) {
            // line 76
            echo "        <div class=\"text\">
            <p><em>Post has been deleted</em></p>
        </div>
    ";
        } else {
            // line 80
            echo "        <div class=\"text\">
            ";
            // line 81
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content_html", [], "any", false, false, true, 81), 81, $this->source);
            echo "

            ";
            // line 83
            if ((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "created_at", [], "any", false, false, true, 83) != twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "updated_at", [], "any", false, false, true, 83))) {
                // line 84
                echo "                <p><small class=\"text text-muted\">
                    Last updated ";
                // line 85
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['date'] = twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "updated_at", [], "any", false, false, true, 85)                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::timestamp")                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 86
                echo "                </small></p>
            ";
            }
            // line 88
            echo "        </div>
        <div class=\"actions\">
            ";
            // line 90
            if (twig_get_attribute($this->env, $this->source, ($context["topic"] ?? null), "canPost", [], "any", false, false, true, 90)) {
                // line 91
                echo "                <a href=\"javascript:;\"
                    class=\"quote\"
                    data-request-data=\"post: ";
                // line 93
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
                echo "\"
                    data-quote-button>
                    Quote
                </a>
            ";
            }
            // line 98
            echo "            ";
            if ((((twig_get_attribute($this->env, $this->source, ($context["topic"] ?? null), "canPost", [], "any", false, false, true, 98) && twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "canEdit", [], "any", false, false, true, 98)) && (($context["mode"] ?? null) != "edit")) && (($context["mode"] ?? null) != "delete"))) {
                // line 99
                echo "                <a href=\"javascript:;\"
                    class=\"edit\"
                    data-request=\"onUpdate\"
                    data-request-data=\"post: ";
                // line 102
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
                echo "\"
                    data-request-update=\"'";
                // line 103
                echo twig_escape_filter($this->env, ($this->sandbox->ensureToStringAllowed(($context["__SELF__"] ?? null), 103, $this->source) . "::post"), "html", null, true);
                echo "': '#post-";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
                echo "'\">
                    Edit
                </a>
            ";
            }
            // line 107
            echo "        </div>
    ";
        }
        // line 109
        echo "
</div>
<div class=\"post-divider\"></div>
";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/plugins/rainlab/forum/components/topic/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 109,  271 => 107,  262 => 103,  258 => 102,  253 => 99,  250 => 98,  242 => 93,  238 => 91,  236 => 90,  232 => 88,  228 => 86,  223 => 85,  220 => 84,  218 => 83,  213 => 81,  210 => 80,  204 => 76,  202 => 75,  197 => 73,  187 => 68,  183 => 67,  179 => 66,  167 => 59,  163 => 58,  159 => 57,  147 => 50,  143 => 49,  139 => 48,  131 => 43,  123 => 37,  117 => 35,  115 => 34,  110 => 32,  104 => 29,  101 => 28,  99 => 27,  95 => 25,  89 => 21,  87 => 20,  82 => 17,  80 => 16,  75 => 13,  73 => 12,  69 => 10,  64 => 9,  60 => 8,  52 => 5,  44 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<a href=\"{{ post.member.url }}\" class=\"avatar\">
    <img src=\"{{ post.member.user.avatarThumb(50) }}\" alt=\"{{ post.member.username }}\" />
</a>
<div class=\"content\">
    <a href=\"{{ post.member.url }}\" class=\"author\">{{ post.member.username }}</a>
    <div class=\"metadata\">
        <div class=\"date\">
            <a href=\"#post-{{ post.id }}\">
                {% partial __SELF__ ~ \"::timestamp\" date=post.created_at %}
            </a>
        </div>
        {% if post.member.is_banned %}
            <div class=\"status text-danger\">
                <i class=\"icon-exclamation\"></i> Banned
            </div>
        {% elseif topic.channel.is_guarded and not post.member.is_approved %}
            <div class=\"status text-warning\">
                <i class=\"icon-lock\"></i> Unapproved
            </div>
        {% elseif post.member.is_moderator %}
            <div class=\"status\">
                <i class=\"icon-star\"></i> Moderator
            </div>
        {% endif %}
    </div>

    {% if mode == 'edit' %}

        {{ form_open() }}
            <!-- Passable fields -->
            <input type=\"hidden\" name=\"mode\" value=\"save\" />
            <input type=\"hidden\" name=\"post\" value=\"{{ post.id }}\" />

            {% if topic.first_post.id == post.id %}
                <input type=\"text\" name=\"subject\" class=\"form-control\" value=\"{{ topic.subject }}\" />
            {% endif %}

            <div class=\"text\">
                <textarea
                    rows=\"5\"
                    name=\"content\"
                    class=\"form-control\"
                    >{{ post.content }}</textarea>
            </div>
            <div class=\"actions\">
                <a
                    href=\"javascript:;\"
                    data-request=\"{{ __SELF__ }}::onUpdate\"
                    data-request-data=\"post: {{ post.id }}\"
                    data-request-update=\"'{{ __SELF__ }}::post': '#post-{{ post.id }}'\"
                    class=\"save\">
                    Save
                </a>

                <a
                    href=\"javascript:;\"
                    data-request=\"{{ __SELF__ }}::onUpdate\"
                    data-request-data=\"post: {{ post.id }}, mode: 'delete'\"
                    data-request-update=\"'{{ __SELF__ }}::post': '#post-{{ post.id }}'\"
                    data-request-confirm=\"Are you sure?\"
                    class=\"delete\">
                    Delete
                </a>

                <a href=\"javascript:;\"
                    data-request=\"{{ __SELF__ }}::onUpdate\"
                    data-request-data=\"post: {{ post.id }}, mode: 'view'\"
                    data-request-update=\"'{{ __SELF__ }}::post': '#post-{{ post.id }}'\"
                    class=\"cancel\">
                    Cancel
                </a>
            </div>
        {{ form_close() }}

    {% elseif mode == 'delete' %}
        <div class=\"text\">
            <p><em>Post has been deleted</em></p>
        </div>
    {% else %}
        <div class=\"text\">
            {{ post.content_html|raw }}

            {% if post.created_at != post.updated_at %}
                <p><small class=\"text text-muted\">
                    Last updated {% partial __SELF__ ~ \"::timestamp\" date=post.updated_at %}
                </small></p>
            {% endif %}
        </div>
        <div class=\"actions\">
            {% if topic.canPost %}
                <a href=\"javascript:;\"
                    class=\"quote\"
                    data-request-data=\"post: {{ post.id }}\"
                    data-quote-button>
                    Quote
                </a>
            {% endif %}
            {% if topic.canPost and post.canEdit and mode != 'edit' and mode != 'delete' %}
                <a href=\"javascript:;\"
                    class=\"edit\"
                    data-request=\"onUpdate\"
                    data-request-data=\"post: {{ post.id }}\"
                    data-request-update=\"'{{ __SELF__ ~ '::post' }}': '#post-{{ post.id }}'\">
                    Edit
                </a>
            {% endif %}
        </div>
    {% endif %}

</div>
<div class=\"post-divider\"></div>
", "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/plugins/rainlab/forum/components/topic/post.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 9, "if" => 12);
        static $filters = array("escape" => 1, "raw" => 81);
        static $functions = array("form_open" => 29, "form_close" => 73);

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'if'],
                ['escape', 'raw'],
                ['form_open', 'form_close']
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
