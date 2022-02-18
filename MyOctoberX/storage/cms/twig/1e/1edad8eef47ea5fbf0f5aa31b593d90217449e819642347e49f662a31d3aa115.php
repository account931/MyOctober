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

/* C:\Users\user\Downloads\OSPanel\domains\localhost\myoctober\MyOctoberX/plugins/rainlab/forum/components/channel/topics.htm */
class __TwigTemplate_7f37bd671ca901ea2ec49e20b92eb66e13039a406c88d1e86993fb182663901d extends \Twig\Template
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
        echo "<table class=\"forum-table\">
    <tr>
        <th colspan=\"2\">Topic</th>
        <th class=\"counter-column\">Replies</th>
        <th class=\"counter-column\">Views</th>
        <th class=\"activity-column\">Last post</th>
    </tr>

    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["topics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["topic"]) {
            // line 10
            echo "        <tr class=\"forum-topic\">
            <td class=\"indicator-column\">
                <div class=\"topic-indicator ";
            // line 12
            echo ((twig_get_attribute($this->env, $this->source, $context["topic"], "hasNew", [], "any", false, false, true, 12)) ? ("has-new") : (""));
            echo "\"></div>
            </td>
            <td>
                <h5>
                    ";
            // line 16
            if (twig_get_attribute($this->env, $this->source, $context["topic"], "is_sticky", [], "any", false, false, true, 16)) {
                echo "<strong>Sticky:</strong>";
            }
            // line 17
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, $context["topic"], "is_locked", [], "any", false, false, true, 17)) {
                echo "<i class=\"icon icon-lock\"></i> <strong>Locked:</strong>";
            }
            // line 18
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["topic"], "url", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["topic"], "subject", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "</a>
                    <br/><small>by <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["topic"], "start_member", [], "any", false, false, true, 19), "url", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["topic"], "start_member", [], "any", false, false, true, 19), "username", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo "</a></small>
                </h5>
            </td>
            <td class=\"counter-column\">
                <p>";
            // line 23
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["topic"], "count_posts", [], "any", false, false, true, 23) - 1), "html", null, true);
            echo "</p>
            </td>
            <td class=\"counter-column\">
                <p>";
            // line 26
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["topic"], "count_views", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
            echo "</p>
            </td>
            <td class=\"activity-column\">
                <p>
                    <img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["topic"], "last_post_member", [], "any", false, false, true, 30), "user", [], "any", false, false, true, 30), "avatarThumb", [0 => 24], "method", false, false, true, 30), 30, $this->source), "html", null, true);
            echo "\" class=\"member-avatar\" />
                    <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["topic"], "last_post_member", [], "any", false, false, true, 31), "url", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["topic"], "last_post_member", [], "any", false, false, true, 31), "username", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "</a>
                    <small>
                        posted
                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["topic"], "url", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
            echo "?page=last#post-";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["topic"], "last_post_id", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
            echo "\">
                            ";
            // line 35
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['date'] = twig_get_attribute($this->env, $this->source, $context["topic"], "last_post_at", [], "any", false, false, true, 35)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::timestamp")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 36
            echo "                        </a>
                    </small>
                </p>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
    ";
        // line 43
        if ( !twig_length_filter($this->env, ($context["topics"] ?? null))) {
            // line 44
            echo "        <tr>
            <td colspan=\"100\">There are no topics in this channel.</td>
        </tr>
    ";
        }
        // line 48
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/plugins/rainlab/forum/components/channel/topics.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 48,  141 => 44,  139 => 43,  136 => 42,  125 => 36,  120 => 35,  114 => 34,  106 => 31,  102 => 30,  95 => 26,  89 => 23,  80 => 19,  73 => 18,  68 => 17,  64 => 16,  57 => 12,  53 => 10,  49 => 9,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table class=\"forum-table\">
    <tr>
        <th colspan=\"2\">Topic</th>
        <th class=\"counter-column\">Replies</th>
        <th class=\"counter-column\">Views</th>
        <th class=\"activity-column\">Last post</th>
    </tr>

    {% for topic in topics %}
        <tr class=\"forum-topic\">
            <td class=\"indicator-column\">
                <div class=\"topic-indicator {{ topic.hasNew ? 'has-new' }}\"></div>
            </td>
            <td>
                <h5>
                    {% if topic.is_sticky %}<strong>Sticky:</strong>{% endif %}
                    {% if topic.is_locked %}<i class=\"icon icon-lock\"></i> <strong>Locked:</strong>{% endif %}
                    <a href=\"{{ topic.url }}\">{{ topic.subject }}</a>
                    <br/><small>by <a href=\"{{ topic.start_member.url }}\">{{ topic.start_member.username }}</a></small>
                </h5>
            </td>
            <td class=\"counter-column\">
                <p>{{ (topic.count_posts-1) }}</p>
            </td>
            <td class=\"counter-column\">
                <p>{{ topic.count_views }}</p>
            </td>
            <td class=\"activity-column\">
                <p>
                    <img src=\"{{ topic.last_post_member.user.avatarThumb(24) }}\" class=\"member-avatar\" />
                    <a href=\"{{ topic.last_post_member.url }}\">{{ topic.last_post_member.username }}</a>
                    <small>
                        posted
                        <a href=\"{{ topic.url }}?page=last#post-{{ topic.last_post_id }}\">
                            {% partial __SELF__ ~ \"::timestamp\" date=topic.last_post_at %}
                        </a>
                    </small>
                </p>
            </td>
        </tr>
    {% endfor %}

    {% if not topics|length %}
        <tr>
            <td colspan=\"100\">There are no topics in this channel.</td>
        </tr>
    {% endif %}
</table>
", "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/plugins/rainlab/forum/components/channel/topics.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 9, "if" => 16, "partial" => 35);
        static $filters = array("escape" => 18, "length" => 43);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if', 'partial'],
                ['escape', 'length'],
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
