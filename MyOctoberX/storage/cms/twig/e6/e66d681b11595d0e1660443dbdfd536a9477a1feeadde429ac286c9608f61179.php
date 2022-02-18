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

/* C:\Users\user\Downloads\OSPanel\domains\localhost\myoctober\MyOctoberX/plugins/rainlab/forum/components/channel/title.htm */
class __TwigTemplate_dc292420fd99b15731f424ea4126d42a3b352be065d90152f585d4fad011b968 extends \Twig\Template
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
        echo "<div class=\"row\">

    <div class=\"col-md-9\">
        ";
        // line 4
        echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), ["open", ["method" => "get"]]);
        echo "
            <div class=\"search-box\">
                <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Search topics\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, input("search"));
        echo "\">
            </div>
        ";
        // line 8
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
    </div>
    <div class=\"col-md-3 text-right\">
        ";
        // line 11
        if (($context["isGuest"] ?? null)) {
            // line 12
            echo "            <p>Log in to Post a new topic</p>
        ";
        } else {
            // line 14
            echo "            <a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(($context["topicPage"] ?? null), 14, $this->source));
            echo "?channel=";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["channel"] ?? null), "id", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
            echo "\" class=\"btn btn-primary btn-block\">
                Post a new topic
            </a>
        ";
        }
        // line 18
        echo "    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/plugins/rainlab/forum/components/channel/title.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 18,  66 => 14,  62 => 12,  60 => 11,  54 => 8,  49 => 6,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">

    <div class=\"col-md-9\">
        {{ form_open({ method: 'get' })}}
            <div class=\"search-box\">
                <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Search topics\" value=\"{{ input('search')|e }}\">
            </div>
        {{ form_close() }}
    </div>
    <div class=\"col-md-3 text-right\">
        {% if isGuest %}
            <p>Log in to Post a new topic</p>
        {% else %}
            <a href=\"{{ topicPage|page }}?channel={{ channel.id }}\" class=\"btn btn-primary btn-block\">
                Post a new topic
            </a>
        {% endif %}
    </div>

</div>
", "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/plugins/rainlab/forum/components/channel/title.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 11);
        static $filters = array("e" => 6, "page" => 14, "escape" => 14);
        static $functions = array("form_open" => 4, "input" => 6, "form_close" => 8);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['e', 'page', 'escape'],
                ['form_open', 'input', 'form_close']
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
