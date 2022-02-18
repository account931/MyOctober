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

/* C:\Users\user\Downloads\OSPanel\domains\localhost\myoctober\MyOctoberX/plugins/rainlab/forum/components/channels/default.htm */
class __TwigTemplate_7e3711857a5f9683998225ac910d689f37c8815af97e3623e4b6b803585b7007 extends \Twig\Template
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

    <table class=\"forum-table\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["channels"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
            // line 5
            echo "
            <tr class=\"root-channel\">
                <th colspan=\"2\">
                    ";
            // line 8
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["channel"], "title", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "
                </th>
                <th class=\"counter-column\">Topics</th>
                <th class=\"counter-column\">Posts</th>
                <th class=\"activity-column\">Recent topic</th>
            </tr>

            ";
            // line 15
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["channel"], "relations", [], "any", false, false, true, 15), "children", [], "any", false, false, true, 15)) {
                // line 16
                echo "
                ";
                // line 17
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["channel"], "children", [], "any", false, false, true, 17));
                foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
                    // line 18
                    echo "
                    <tr class=\"forum-channel\">
                        <td class=\"indicator-column\">
                            <div class=\"topic-indicator ";
                    // line 21
                    echo ((twig_get_attribute($this->env, $this->source, $context["channel"], "hasNew", [], "any", false, false, true, 21)) ? ("has-new") : (""));
                    echo "\"></div>
                        </td>
                        <td>
                            <h5>
                                <a href=\"";
                    // line 25
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["channel"], "url", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
                    echo "\">
                                    ";
                    // line 26
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["channel"], "title", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
                    echo "
                                </a>
                            </h5>
                            <p>";
                    // line 29
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["channel"], "description", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
                    echo "</p>

                            ";
                    // line 31
                    if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "children", [], "any", false, false, true, 31))) {
                        // line 32
                        echo "                                <div class=\"forum-subchannel\">
                                    <ul>
                                        <li><span>Subforum</span></li>
                                        ";
                        // line 35
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["channel"], "children", [], "any", false, false, true, 35));
                        foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
                            // line 36
                            echo "                                            <li>
                                                <a href=\"";
                            // line 37
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["channel"], "url", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
                            echo "\" title=\"";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["channel"], "description", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
                            echo "\">
                                                    ";
                            // line 38
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["channel"], "title", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
                            echo "
                                                </a>
                                            </li>
                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 42
                        echo "                                    </ul>
                                </div>
                            ";
                    }
                    // line 45
                    echo "                        </td>
                        <td class=\"counter-column\">
                            <p>";
                    // line 47
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["channel"], "count_topics", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
                    echo "</p>
                        </td>
                        <td class=\"counter-column\">
                            <p>";
                    // line 50
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["channel"], "count_posts", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
                    echo "</p>
                        </td>
                        <td class=\"activity-column\">
                            ";
                    // line 53
                    if (twig_get_attribute($this->env, $this->source, $context["channel"], "first_topic", [], "any", false, false, true, 53)) {
                        // line 54
                        echo "                                <p>
                                    <a href=\"";
                        // line 55
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["channel"], "first_topic", [], "any", false, false, true, 55), "url", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
                        echo "?page=last#post-";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["channel"], "first_topic", [], "any", false, false, true, 55), "last_post_id", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
                        echo "\">
                                        ";
                        // line 56
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["channel"], "first_topic", [], "any", false, false, true, 56), "subject", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
                        echo "
                                    </a>
                                    <small>
                                        ";
                        // line 59
                        $context['__cms_partial_params'] = [];
                        $context['__cms_partial_params']['date'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["channel"], "first_topic", [], "any", false, false, true, 59), "last_post_at", [], "any", false, false, true, 59)                        ;
                        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::timestamp")                        , $context['__cms_partial_params']                        , true                        );
                        unset($context['__cms_partial_params']);
                        // line 60
                        echo "                                    </small>
                                </p>
                            ";
                    }
                    // line 63
                    echo "                        </td>
                    </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo "
            ";
            } else {
                // line 68
                echo "                <tr>
                    <td colspan=\"100\"><p>There are no channels to show.</p></td>
                </tr>
            ";
            }
            // line 72
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "    </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/plugins/rainlab/forum/components/channels/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 74,  195 => 72,  189 => 68,  185 => 66,  177 => 63,  172 => 60,  167 => 59,  161 => 56,  155 => 55,  152 => 54,  150 => 53,  144 => 50,  138 => 47,  134 => 45,  129 => 42,  119 => 38,  113 => 37,  110 => 36,  106 => 35,  101 => 32,  99 => 31,  94 => 29,  88 => 26,  84 => 25,  77 => 21,  72 => 18,  68 => 17,  65 => 16,  63 => 15,  53 => 8,  48 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"rainlab-forum\">

    <table class=\"forum-table\">
        {% for channel in channels %}

            <tr class=\"root-channel\">
                <th colspan=\"2\">
                    {{ channel.title }}
                </th>
                <th class=\"counter-column\">Topics</th>
                <th class=\"counter-column\">Posts</th>
                <th class=\"activity-column\">Recent topic</th>
            </tr>

            {% if channel.relations.children %}

                {% for channel in channel.children %}

                    <tr class=\"forum-channel\">
                        <td class=\"indicator-column\">
                            <div class=\"topic-indicator {{ channel.hasNew ? 'has-new' }}\"></div>
                        </td>
                        <td>
                            <h5>
                                <a href=\"{{ channel.url }}\">
                                    {{ channel.title }}
                                </a>
                            </h5>
                            <p>{{ channel.description }}</p>

                            {% if channel.children|length %}
                                <div class=\"forum-subchannel\">
                                    <ul>
                                        <li><span>Subforum</span></li>
                                        {% for channel in channel.children %}
                                            <li>
                                                <a href=\"{{ channel.url }}\" title=\"{{ channel.description }}\">
                                                    {{ channel.title }}
                                                </a>
                                            </li>
                                        {% endfor %}
                                    </ul>
                                </div>
                            {% endif %}
                        </td>
                        <td class=\"counter-column\">
                            <p>{{ channel.count_topics }}</p>
                        </td>
                        <td class=\"counter-column\">
                            <p>{{ channel.count_posts }}</p>
                        </td>
                        <td class=\"activity-column\">
                            {% if channel.first_topic %}
                                <p>
                                    <a href=\"{{ channel.first_topic.url }}?page=last#post-{{ channel.first_topic.last_post_id }}\">
                                        {{ channel.first_topic.subject }}
                                    </a>
                                    <small>
                                        {% partial __SELF__ ~ \"::timestamp\" date=channel.first_topic.last_post_at %}
                                    </small>
                                </p>
                            {% endif %}
                        </td>
                    </tr>
                {% endfor %}

            {% else %}
                <tr>
                    <td colspan=\"100\"><p>There are no channels to show.</p></td>
                </tr>
            {% endif %}

        {% endfor %}
    </table>
</div>
", "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/plugins/rainlab/forum/components/channels/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 4, "if" => 15, "partial" => 59);
        static $filters = array("escape" => 8, "length" => 31);
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
