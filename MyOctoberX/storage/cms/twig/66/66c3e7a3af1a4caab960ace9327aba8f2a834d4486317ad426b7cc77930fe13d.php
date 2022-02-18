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

/* C:\Users\user\Downloads\OSPanel\domains\localhost\myoctober\MyOctoberX/plugins/rainlab/forum/components/topic/default.htm */
class __TwigTemplate_08e81a380724d97f45e041a01f4d2ad0b41a8f007ad4195606bb86bd2c8457d9 extends \Twig\Template
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

    ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 3
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 4
                echo "        <div class=\"alert alert-";
                (((($context["type"] ?? null) == "error")) ? (print ("danger")) : (print (twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true))));
                echo "\">
            ";
                // line 5
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["message"] ?? null), 5, $this->source), "html", null, true);
                echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
        </div>
    ";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 9
        echo "
    ";
        // line 10
        if (($context["returnUrl"] ?? null)) {
            // line 11
            echo "        <p>&larr; <a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["returnUrl"] ?? null), 11, $this->source), "html", null, true);
            echo "\">Back to ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["channel"] ?? null), "title", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "</a></p>
    ";
        }
        // line 13
        echo "
    ";
        // line 14
        if (($context["topic"] ?? null)) {
            // line 15
            echo "
        <h4>";
            // line 16
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["topic"] ?? null), "subject", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            echo "</h4>

        <div class=\"row\">
            <div class=\"col-md-3 col-md-push-9\">

                <div id=\"topicControlPanel\">
                    ";
            // line 22
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@controlpanel"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 23
            echo "                </div>

            </div>
            <div class=\"col-md-9 col-md-pull-3\">

                ";
            // line 28
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@posts"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 29
            echo "
                ";
            // line 30
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@pagination"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 31
            echo "
                <h4>Reply to this discussion</h4>
                ";
            // line 33
            if ( !twig_get_attribute($this->env, $this->source, ($context["topic"] ?? null), "canPost", [], "any", false, false, true, 33)) {
                // line 34
                echo "                    <p>
                        You cannot edit posts or make replies:
                        ";
                // line 36
                if ( !($context["member"] ?? null)) {
                    echo "You should be logged in before you can post.";
                }
                // line 37
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["member"] ?? null), "is_banned", [], "any", false, false, true, 37)) {
                    echo "Your account is banned.";
                }
                // line 38
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["topic"] ?? null), "is_locked", [], "any", false, false, true, 38)) {
                    echo "This topic is locked.";
                }
                // line 39
                echo "                    </p>
                ";
            } else {
                // line 41
                echo "                    ";
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@postform"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 42
                echo "                ";
            }
            // line 43
            echo "
            </div>
        </div>

    ";
        } elseif (        // line 47
($context["channel"] ?? null)) {
            // line 48
            echo "
        <h4>Create a new discussion topic</h4>
        ";
            // line 50
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@createform"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 51
            echo "
    ";
        } else {
            // line 53
            echo "
        <p>Topic not found</p>

    ";
        }
        // line 57
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/plugins/rainlab/forum/components/topic/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 57,  167 => 53,  163 => 51,  159 => 50,  155 => 48,  153 => 47,  147 => 43,  144 => 42,  139 => 41,  135 => 39,  130 => 38,  125 => 37,  121 => 36,  117 => 34,  115 => 33,  111 => 31,  107 => 30,  104 => 29,  100 => 28,  93 => 23,  89 => 22,  80 => 16,  77 => 15,  75 => 14,  72 => 13,  64 => 11,  62 => 10,  59 => 9,  51 => 5,  46 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"rainlab-forum\">

    {% flash %}
        <div class=\"alert alert-{{ type == 'error' ? 'danger' : type }}\">
            {{ message }}
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
        </div>
    {% endflash %}

    {% if returnUrl %}
        <p>&larr; <a href=\"{{ returnUrl }}\">Back to {{ channel.title }}</a></p>
    {% endif %}

    {% if topic %}

        <h4>{{ topic.subject }}</h4>

        <div class=\"row\">
            <div class=\"col-md-3 col-md-push-9\">

                <div id=\"topicControlPanel\">
                    {% partial \"@controlpanel\" %}
                </div>

            </div>
            <div class=\"col-md-9 col-md-pull-3\">

                {% partial \"@posts\" %}

                {% partial \"@pagination\" %}

                <h4>Reply to this discussion</h4>
                {% if not topic.canPost %}
                    <p>
                        You cannot edit posts or make replies:
                        {% if not member %}You should be logged in before you can post.{% endif %}
                        {% if member.is_banned %}Your account is banned.{% endif %}
                        {% if topic.is_locked %}This topic is locked.{% endif %}
                    </p>
                {% else %}
                    {% partial \"@postform\" %}
                {% endif %}

            </div>
        </div>

    {% elseif channel %}

        <h4>Create a new discussion topic</h4>
        {% partial \"@createform\" %}

    {% else %}

        <p>Topic not found</p>

    {% endif %}
</div>", "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/plugins/rainlab/forum/components/topic/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("flash" => 3, "if" => 10, "partial" => 22);
        static $filters = array("escape" => 4);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['flash', 'if', 'partial'],
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
