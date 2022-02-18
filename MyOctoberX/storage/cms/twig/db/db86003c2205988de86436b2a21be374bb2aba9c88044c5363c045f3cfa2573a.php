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

/* C:\Users\user\Downloads\OSPanel\domains\localhost\myoctober\MyOctoberX/plugins/rainlab/forum/components/topic/controlpanel.htm */
class __TwigTemplate_a92f082b24bbe34e0c5db0e3b731594eb6f8df73068119966d17b036fdc993d9 extends \Twig\Template
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
        echo "<div class=\"panel\">
    <div class=\"list-group\">

        ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["member"] ?? null), "is_moderator", [], "any", false, false, true, 4)) {
            // line 5
            echo "            <div class=\"list-group-item\">
                ";
            // line 6
            echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), ["open", ["request" => "onMove", "data-request-confirm" => "Are you sure?"]]);
            echo "
                    <label>Move to:</label>
                    <select name=\"channel\" class=\"form-control input-sm\">
                        ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "channelList", [], "any", false, false, true, 9));
            foreach ($context['_seq'] as $context["id"] => $context["title"]) {
                // line 10
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["id"], 10, $this->source), "html", null, true);
                echo "\">";
                echo $this->sandbox->ensureToStringAllowed($context["title"], 10, $this->source);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "                    </select>
                    <button type=\"submit\" class=\"btn btn-block btn-primary btn-sm\">Move</button>
                ";
            // line 14
            echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
            echo "
            </div>

            <a href=\"javascript:;\"
                class=\"list-group-item\"
                data-request=\"onLock\"
                data-request-update=\"'@controlpanel': '#topicControlPanel'\">
                ";
            // line 21
            if (twig_get_attribute($this->env, $this->source, ($context["topic"] ?? null), "is_locked", [], "any", false, false, true, 21)) {
                // line 22
                echo "                    Unlock topic
                ";
            } else {
                // line 24
                echo "                    Lock topic
                ";
            }
            // line 26
            echo "            </a>

            <a href=\"javascript:;\"
                class=\"list-group-item\"
                data-request=\"onSticky\"
                data-request-update=\"'@controlpanel': '#topicControlPanel'\">
                ";
            // line 32
            if (twig_get_attribute($this->env, $this->source, ($context["topic"] ?? null), "is_sticky", [], "any", false, false, true, 32)) {
                // line 33
                echo "                    Unsticky topic
                ";
            } else {
                // line 35
                echo "                    Sticky topic
                ";
            }
            // line 37
            echo "            </a>
        ";
        }
        // line 39
        echo "
        ";
        // line 40
        if (($context["member"] ?? null)) {
            // line 41
            echo "            <a href=\"javascript:;\"
                class=\"list-group-item\"
                data-request=\"onFollow\"
                data-request-update=\"'@controlpanel': '#topicControlPanel'\">
                ";
            // line 45
            if (twig_get_attribute($this->env, $this->source, ($context["member"] ?? null), "isFollowing", [0 => ($context["topic"] ?? null)], "method", false, false, true, 45)) {
                // line 46
                echo "                    Unfollow this topic
                ";
            } else {
                // line 48
                echo "                    Follow this topic
                ";
            }
            // line 50
            echo "            </a>
        ";
        }
        // line 52
        echo "
        ";
        // line 53
        if (twig_get_attribute($this->env, $this->source, ($context["topic"] ?? null), "is_locked", [], "any", false, false, true, 53)) {
            // line 54
            echo "            <div class=\"list-group-item\">
                <span class=\"text text-danger\"><i class=\"icon icon-lock\"></i> This topic is locked</span>
            </div>
        ";
        } else {
            // line 58
            echo "            <a href=\"#postForm\" class=\"list-group-item\">
                Post a reply
            </a>
        ";
        }
        // line 62
        echo "
        <div class=\"list-group-item\">
            <i class=\"fa fa-eye icon-eye-open\"></i> ";
        // line 64
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["topic"] ?? null), "count_views", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
        echo " views
        </div>

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/plugins/rainlab/forum/components/topic/controlpanel.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 64,  158 => 62,  152 => 58,  146 => 54,  144 => 53,  141 => 52,  137 => 50,  133 => 48,  129 => 46,  127 => 45,  121 => 41,  119 => 40,  116 => 39,  112 => 37,  108 => 35,  104 => 33,  102 => 32,  94 => 26,  90 => 24,  86 => 22,  84 => 21,  74 => 14,  70 => 12,  59 => 10,  55 => 9,  49 => 6,  46 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"panel\">
    <div class=\"list-group\">

        {% if member.is_moderator %}
            <div class=\"list-group-item\">
                {{ form_open({ request: 'onMove', 'data-request-confirm': \"Are you sure?\" }) }}
                    <label>Move to:</label>
                    <select name=\"channel\" class=\"form-control input-sm\">
                        {% for id, title in __SELF__.channelList %}
                            <option value=\"{{ id }}\">{{ title|raw }}</option>
                        {% endfor %}
                    </select>
                    <button type=\"submit\" class=\"btn btn-block btn-primary btn-sm\">Move</button>
                {{ form_close() }}
            </div>

            <a href=\"javascript:;\"
                class=\"list-group-item\"
                data-request=\"onLock\"
                data-request-update=\"'@controlpanel': '#topicControlPanel'\">
                {% if topic.is_locked %}
                    Unlock topic
                {% else %}
                    Lock topic
                {% endif %}
            </a>

            <a href=\"javascript:;\"
                class=\"list-group-item\"
                data-request=\"onSticky\"
                data-request-update=\"'@controlpanel': '#topicControlPanel'\">
                {% if topic.is_sticky %}
                    Unsticky topic
                {% else %}
                    Sticky topic
                {% endif %}
            </a>
        {% endif %}

        {% if member %}
            <a href=\"javascript:;\"
                class=\"list-group-item\"
                data-request=\"onFollow\"
                data-request-update=\"'@controlpanel': '#topicControlPanel'\">
                {% if member.isFollowing(topic) %}
                    Unfollow this topic
                {% else %}
                    Follow this topic
                {% endif %}
            </a>
        {% endif %}

        {% if topic.is_locked %}
            <div class=\"list-group-item\">
                <span class=\"text text-danger\"><i class=\"icon icon-lock\"></i> This topic is locked</span>
            </div>
        {% else %}
            <a href=\"#postForm\" class=\"list-group-item\">
                Post a reply
            </a>
        {% endif %}

        <div class=\"list-group-item\">
            <i class=\"fa fa-eye icon-eye-open\"></i> {{ topic.count_views }} views
        </div>

    </div>
</div>
", "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/plugins/rainlab/forum/components/topic/controlpanel.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 4, "for" => 9);
        static $filters = array("escape" => 10, "raw" => 10);
        static $functions = array("form_open" => 6, "form_close" => 14);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
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
