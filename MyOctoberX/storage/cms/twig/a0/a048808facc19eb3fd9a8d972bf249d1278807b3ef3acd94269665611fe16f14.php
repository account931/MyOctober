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

/* C:\Users\user\Downloads\OSPanel\domains\localhost\myoctober\MyOctoberX/plugins/rainlab/forum/components/topic/postform.htm */
class __TwigTemplate_ad1de91b034d478b9baf87a4686b9eb067ee84b755e1ea6e3e0da002b1ec0332 extends \Twig\Template
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
        echo "<div class=\"reply-form\" id=\"postForm\">

    ";
        // line 3
        echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), ["open", ["request" => "onPost"]]);
        echo "

        <input type=\"hidden\" name=\"topic\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["topic"] ?? null), "id", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "\" />

        <div class=\"member-area\">
            <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["member"] ?? null), "user", [], "any", false, false, true, 8), "avatarThumb", [0 => 50], "method", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "\" class=\"member-avatar\" alt=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["member"] ?? null), "username", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "\" />
        </div>

        <div class=\"post-area\">
            <textarea
                id=\"topicContent\"
                name=\"content\"
                rows=\"6\"
                class=\"form-control\">";
        // line 16
        echo call_user_func_array($this->env->getFunction('form_value')->getCallable(), ["value", "content"]);
        echo "</textarea>
            <span class=\"help-block\">You can use <a href=\"http://daringfireball.net/projects/markdown/syntax\" target=\"_blank\">Markdown</a> syntax.</span>
            <div class=\"post-buttons\">
                <button type=\"submit\" class=\"btn btn-primary btn-lg\">Post a Reply</button>
            </div>
        </div>

    ";
        // line 23
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "

</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/plugins/rainlab/forum/components/topic/postform.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 23,  67 => 16,  54 => 8,  48 => 5,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"reply-form\" id=\"postForm\">

    {{ form_open({ request: 'onPost' }) }}

        <input type=\"hidden\" name=\"topic\" value=\"{{ topic.id }}\" />

        <div class=\"member-area\">
            <img src=\"{{ member.user.avatarThumb(50) }}\" class=\"member-avatar\" alt=\"{{ member.username }}\" />
        </div>

        <div class=\"post-area\">
            <textarea
                id=\"topicContent\"
                name=\"content\"
                rows=\"6\"
                class=\"form-control\">{{ form_value('content') }}</textarea>
            <span class=\"help-block\">You can use <a href=\"http://daringfireball.net/projects/markdown/syntax\" target=\"_blank\">Markdown</a> syntax.</span>
            <div class=\"post-buttons\">
                <button type=\"submit\" class=\"btn btn-primary btn-lg\">Post a Reply</button>
            </div>
        </div>

    {{ form_close() }}

</div>", "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/plugins/rainlab/forum/components/topic/postform.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 5);
        static $functions = array("form_open" => 3, "form_value" => 16, "form_close" => 23);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['form_open', 'form_value', 'form_close']
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
