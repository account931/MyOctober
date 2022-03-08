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

/* C:\Users\user\Downloads\OSPanel\domains\localhost\myoctober\MyOctoberX/plugins/rainlab/forum/components/member/controlpanel.htm */
class __TwigTemplate_3e67403853ce95efef874fb2a8610ff2af3ad595c7bfc1b09e9f0d360895badf extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["otherMember"] ?? null), "is_moderator", [], "any", false, false, true, 4)) {
            // line 5
            echo "            <a
                href=\"javascript:;\"
                class=\"list-group-item\"
                data-request=\"onApprove\"
                data-request-update=\"'@controlpanel': '#memberControlPanel'\">
                ";
            // line 10
            if ( !twig_get_attribute($this->env, $this->source, ($context["member"] ?? null), "is_approved", [], "any", false, false, true, 10)) {
                // line 11
                echo "                    Approve member
                ";
            } else {
                // line 13
                echo "                    Unapprove member
                ";
            }
            // line 15
            echo "            </a>
            <a
                href=\"javascript:;\"
                class=\"list-group-item\"
                data-request=\"onBan\"
                data-request-update=\"'@controlpanel': '#memberControlPanel'\">
                ";
            // line 21
            if (twig_get_attribute($this->env, $this->source, ($context["member"] ?? null), "is_banned", [], "any", false, false, true, 21)) {
                // line 22
                echo "                    Unban member
                ";
            } else {
                // line 24
                echo "                    Ban member
                ";
            }
            // line 26
            echo "            </a>
            <a
                href=\"javascript:;\"
                class=\"list-group-item\"
                data-request=\"onPurgePosts\"
                data-request-confirm=\"Are you sure? This will delete all posts by this member.\">
                Purge posts
            </a>
        ";
        } else {
            // line 35
            echo "            <a
                href=\"javascript:;\"
                class=\"list-group-item\"
                data-request=\"onReport\"
                data-request-update=\"'@controlpanel': '#memberControlPanel'\"
                data-request-confirm=\"Are you sure you want to flag this member as a spammer?\">
                Report spammer
            </a>
        ";
        }
        // line 44
        echo "
        ";
        // line 45
        if (($context["canEdit"] ?? null)) {
            // line 46
            echo "            <a
                href=\"";
            // line 47
            echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 47), "baseFileName", [], "any", false, false, true, 47), 47, $this->source));
            echo "?mode=edit\"
                class=\"list-group-item\">
                Edit details
            </a>
        ";
        }
        // line 52
        echo "
        <div class=\"list-group-item\">
            <i class=\"fa fa-eye icon-comments\"></i> ";
        // line 54
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["member"] ?? null), "count_posts", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
        echo " posts
        </div>

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/plugins/rainlab/forum/components/member/controlpanel.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 54,  119 => 52,  111 => 47,  108 => 46,  106 => 45,  103 => 44,  92 => 35,  81 => 26,  77 => 24,  73 => 22,  71 => 21,  63 => 15,  59 => 13,  55 => 11,  53 => 10,  46 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"panel\">
    <div class=\"list-group\">

        {% if otherMember.is_moderator %}
            <a
                href=\"javascript:;\"
                class=\"list-group-item\"
                data-request=\"onApprove\"
                data-request-update=\"'@controlpanel': '#memberControlPanel'\">
                {% if not member.is_approved %}
                    Approve member
                {% else %}
                    Unapprove member
                {% endif %}
            </a>
            <a
                href=\"javascript:;\"
                class=\"list-group-item\"
                data-request=\"onBan\"
                data-request-update=\"'@controlpanel': '#memberControlPanel'\">
                {% if member.is_banned %}
                    Unban member
                {% else %}
                    Ban member
                {% endif %}
            </a>
            <a
                href=\"javascript:;\"
                class=\"list-group-item\"
                data-request=\"onPurgePosts\"
                data-request-confirm=\"Are you sure? This will delete all posts by this member.\">
                Purge posts
            </a>
        {% else %}
            <a
                href=\"javascript:;\"
                class=\"list-group-item\"
                data-request=\"onReport\"
                data-request-update=\"'@controlpanel': '#memberControlPanel'\"
                data-request-confirm=\"Are you sure you want to flag this member as a spammer?\">
                Report spammer
            </a>
        {% endif %}

        {% if canEdit %}
            <a
                href=\"{{ this.page.baseFileName|page }}?mode=edit\"
                class=\"list-group-item\">
                Edit details
            </a>
        {% endif %}

        <div class=\"list-group-item\">
            <i class=\"fa fa-eye icon-comments\"></i> {{ member.count_posts }} posts
        </div>

    </div>
</div>
", "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/plugins/rainlab/forum/components/member/controlpanel.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 4);
        static $filters = array("page" => 47, "escape" => 54);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['page', 'escape'],
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
