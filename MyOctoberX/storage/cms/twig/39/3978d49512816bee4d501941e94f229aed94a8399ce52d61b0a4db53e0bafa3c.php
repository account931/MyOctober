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

/* C:\Users\user\Downloads\OSPanel\domains\localhost\myoctober\MyOctoberX/plugins/rainlab/blog/components/post/default.htm */
class __TwigTemplate_ec35aa92fb3482f3ed78b87b1701f10950eb473679bd3cf0f21b83c695670e28 extends \Twig\Template
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
        $context["post"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "post", [], "any", false, false, true, 1);
        // line 2
        echo "<!-- View one post -->
<div class=\"col-sm-12 col-xs-12 alert alert-success\"> View one post ";
        // line 3
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
        echo " </div>


<!-- Image from SQL table (system_files}, polymorph relation public \$attachOne =[] avatarn is specified in fields.yaml   -->
\t<p>
\t";
        // line 8
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "avatarn", [], "any", false, false, true, 8), "count", [], "any", false, false, true, 8)) {
            echo " 
\t\t<!-- Only used if u specifiead in model polymorphic relation as  public \$attachOne =[]--> 
\t\t<p class=\"small\"><i class=\"fa fa-clone\" style=\"font-size:12px\"></i> Image was loaded as : ";
            // line 10
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "avatarn", [], "any", false, false, true, 10), "filename", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo ", path (DB {system_files}): <b> ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "avatarn", [], "any", false, false, true, 10), "getPath", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo " </b> </p>  <!-- avata is \$attachOne relation in model -->
\t\t<img  data-src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "avatarn", [], "any", false, false, true, 11), "getPath", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "avatarn", [], "any", false, false, true, 11), "getPath", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "avatarn", [], "any", false, false, true, 11), "content", [], "any", false, false, true, 11) - ($context["type"] ?? null)), "html", null, true);
            echo "\" class=\"medium-img\" />
\t\t<!-- End Only used if in model specifiead as public \$attachOne --> 

    ";
        } else {
            // line 15
            echo "\t\t<!-- No connected image in SQL table (system_files},  polymorph relation. Show default image -->
\t\t<img  data-src=\"";
            // line 16
            echo url("/");
            echo "/storage/app/media/My_images/no-image.jpg\" src=\"";
            echo url("/");
            echo "/storage/app/media/My_images/no-image.jpg\" alt=\"no-image\" style=\"max-width: 6%\" />
    ";
        }
        // line 18
        echo "    </p><hr>
<!-- End Image from SQL table (system_files}, polymorph relation public \$attachOne =[]  -->
\t\t\t
\t\t\t
<!--Post text -->\t\t\t
<div class=\"content\">
    ";
        // line 24
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content_html", [], "any", false, false, true, 24), 24, $this->source);
        echo "
</div> 
<!--Post text -->

<!-- \$attachMany images relations ?? --> 
";
        // line 29
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, true, 29), "count", [], "any", false, false, true, 29)) {
            // line 30
            echo "    <div class=\"featured-images text-center\">
        ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, true, 31));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 32
                echo "            <p>
                <img
                    data-src=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
                echo "\"
                    src=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                echo "\"
                    alt=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
                echo "\"
                    style=\"max-width: 100%\" />
            </p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "    </div>
";
        }
        // line 42
        echo "

<!-- Info about when was posted -->
<p class=\"info\">
    <i class=\"fa fa-calendar\" style=\"font-size:24px\"></i>
    Posted
    ";
        // line 48
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, true, 48), "count", [], "any", false, false, true, 48)) {
            echo " in
        ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, true, 49));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 50
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "url", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
                echo "</a>";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 50)) {
                    echo ", ";
                }
                // line 51
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "    ";
        }
        // line 53
        echo "    on ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "published_at", [], "any", false, false, true, 53), 53, $this->source), "M d, Y"), "html", null, true);
        echo "
</p><hr>


<!-- User, added by me, belongsTo relation, defined in \\myoctober\\MyOctoberX\\plugins\\rainlab\\blog\\models\\Post.php -->

<div class=\"content\"><i class=\"fa fa-envelope-o\" style=\"font-size:24px\"></i>     Email:             <b>";
        // line 59
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user", [], "any", false, false, true, 59), "email", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
        echo "</b></div>
<div class=\"content\"><i class=\"\tfa fa-folder-open-o\" style=\"font-size:24px\"></i> myCustomX column:  <b>";
        // line 60
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "myCustomX", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
        echo "</b></div><hr>
<div class=\"content\">var_dump user: ";
        // line 61
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
        echo "</div> <hr>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/plugins/rainlab/blog/components/post/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 61,  204 => 60,  200 => 59,  190 => 53,  187 => 52,  173 => 51,  164 => 50,  147 => 49,  143 => 48,  135 => 42,  131 => 40,  121 => 36,  117 => 35,  113 => 34,  109 => 32,  105 => 31,  102 => 30,  100 => 29,  92 => 24,  84 => 18,  77 => 16,  74 => 15,  63 => 11,  57 => 10,  52 => 8,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set post = __SELF__.post %}
<!-- View one post -->
<div class=\"col-sm-12 col-xs-12 alert alert-success\"> View one post {{ post.id }} </div>


<!-- Image from SQL table (system_files}, polymorph relation public \$attachOne =[] avatarn is specified in fields.yaml   -->
\t<p>
\t{% if post.avatarn.count %} 
\t\t<!-- Only used if u specifiead in model polymorphic relation as  public \$attachOne =[]--> 
\t\t<p class=\"small\"><i class=\"fa fa-clone\" style=\"font-size:12px\"></i> Image was loaded as : {{ post.avatarn.filename }}, path (DB {system_files}): <b> {{ post.avatarn.getPath }} </b> </p>  <!-- avata is \$attachOne relation in model -->
\t\t<img  data-src=\"{{ post.avatarn.getPath}}\" src=\"{{ post.avatarn.getPath }}\" alt=\"{{ post.avatarn.content-type }}\" class=\"medium-img\" />
\t\t<!-- End Only used if in model specifiead as public \$attachOne --> 

    {% else %}
\t\t<!-- No connected image in SQL table (system_files},  polymorph relation. Show default image -->
\t\t<img  data-src=\"{{ url('/') }}/storage/app/media/My_images/no-image.jpg\" src=\"{{ url('/') }}/storage/app/media/My_images/no-image.jpg\" alt=\"no-image\" style=\"max-width: 6%\" />
    {% endif %}
    </p><hr>
<!-- End Image from SQL table (system_files}, polymorph relation public \$attachOne =[]  -->
\t\t\t
\t\t\t
<!--Post text -->\t\t\t
<div class=\"content\">
    {{ post.content_html|raw }}
</div> 
<!--Post text -->

<!-- \$attachMany images relations ?? --> 
{% if post.featured_images.count %}
    <div class=\"featured-images text-center\">
        {% for image in post.featured_images %}
            <p>
                <img
                    data-src=\"{{ image.filename }}\"
                    src=\"{{ image.path }}\"
                    alt=\"{{ image.description }}\"
                    style=\"max-width: 100%\" />
            </p>
        {% endfor %}
    </div>
{% endif %}


<!-- Info about when was posted -->
<p class=\"info\">
    <i class=\"fa fa-calendar\" style=\"font-size:24px\"></i>
    Posted
    {% if post.categories.count %} in
        {% for category in post.categories %}
            <a href=\"{{ category.url }}\">{{ category.name }}</a>{% if not loop.last %}, {% endif %}
        {% endfor %}
    {% endif %}
    on {{ post.published_at|date('M d, Y') }}
</p><hr>


<!-- User, added by me, belongsTo relation, defined in \\myoctober\\MyOctoberX\\plugins\\rainlab\\blog\\models\\Post.php -->

<div class=\"content\"><i class=\"fa fa-envelope-o\" style=\"font-size:24px\"></i>     Email:             <b>{{ post.user.email }}</b></div>
<div class=\"content\"><i class=\"\tfa fa-folder-open-o\" style=\"font-size:24px\"></i> myCustomX column:  <b>{{ post.myCustomX }}</b></div><hr>
<div class=\"content\">var_dump user: {{ post.user }}</div> <hr>", "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/plugins/rainlab/blog/components/post/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 8, "for" => 31);
        static $filters = array("escape" => 3, "raw" => 24, "date" => 53);
        static $functions = array("url" => 16);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 'raw', 'date'],
                ['url']
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
