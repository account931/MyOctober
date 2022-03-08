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

/* C:\Users\user\Downloads\OSPanel\domains\localhost\myoctober\MyOctoberX/plugins/rainlab/blog/components/posts/default.htm */
class __TwigTemplate_26fe2f5302990459382b33f37be610e602ef13fd36417c35c7de57ee1bb3d8dc extends \Twig\Template
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
        echo "<!-- Display all post list -->
";
        // line 2
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "posts", [], "any", false, false, true, 2);
        echo "\t
\t\t
<!-------- Original ---------->
<ul class=\"post-list\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 7
            echo "        <li class=\"list-group-item\">
\t\t
\t\t    
\t\t    <!-- Blog title Column, contains link to one post view -->
            <h3><a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "\">   <i class=\"fa fa-book\" style=\"font-size:24px\"></i> ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "</a></h3>
            
\t\t\t
\t\t\t<!-- Image from SQL table (system_files}, polymorph relation public \$attachOne =[]. avatarn is specified in fields.yaml   -->
\t        <p>
\t        ";
            // line 16
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "avatarn", [], "any", false, false, true, 16), "count", [], "any", false, false, true, 16)) {
                echo " 
\t\t        <!-- Only used if u specifiead in model polymorphic relation as  public \$attachOne =[]--> 
\t\t        <p class=\"small\"><i class=\"fa fa-clone\" style=\"font-size:12px\"></i> Image was loaded as : ";
                // line 18
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "avatarn", [], "any", false, false, true, 18), "filename", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                echo ", path (DB {system_files}): <b> ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "avatarn", [], "any", false, false, true, 18), "getPath", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                echo " </b> </p>  <!-- avata is \$attachOne relation in model -->
\t\t        <img  data-src=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "avatarn", [], "any", false, false, true, 19), "getPath", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "avatarn", [], "any", false, false, true, 19), "getPath", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "avatarn", [], "any", false, false, true, 19), "content", [], "any", false, false, true, 19) - ($context["type"] ?? null)), "html", null, true);
                echo "\" class=\"small-img\" />
\t\t        <!-- End Only used if in model specifiead as public \$attachOne --> 

\t\t    ";
            } else {
                // line 23
                echo "\t\t        <!-- No connected image in SQL table (system_files},  polymorph relation. Show default image -->
\t\t        <img  data-src=\"";
                // line 24
                echo url("/");
                echo "/storage/app/media/My_images/no-image.jpg\" src=\"";
                echo url("/");
                echo "/storage/app/media/My_images/no-image.jpg\" alt=\"no-image\" style=\"max-width: 6%\" />
\t\t    ";
            }
            // line 26
            echo "            </p>
\t        <!-- End Image from SQL table (system_files}, polymorph relation public \$attachOne =[]  -->
\t\t\t
\t\t\t
\t\t\t<!-- when posted Column --> \t
            <p class=\"alert alert-danger\">
                <i class=\"fa fa-calendar\" style=\"font-size:18px\"></i> Posted
                ";
            // line 33
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, true, 33), "count", [], "any", false, false, true, 33)) {
                echo " in ";
            }
            // line 34
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, true, 34));
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
                // line 35
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "url", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                echo "</a>";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 35)) {
                    echo ", ";
                }
                // line 36
                echo "                ";
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
            // line 37
            echo "                on ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, true, 37), 37, $this->source), "M d, Y"), "html", null, true);
            echo "
            </p>

\t\t\t<!-- Blog text Column -->
            <div class=\"alert alert-success padding-x\">
\t\t\t    <i class=\"fa fa-clone\" style=\"font-size:18px\"></i> 
\t\t\t    ";
            // line 43
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "summary", [], "any", false, false, true, 43), 43, $this->source);
            echo "
\t\t\t</div>
\t\t\t
\t

            <!-- Read more link, contains link to one post view -->
            <p>
\t\t\t    <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
            echo "\"> <i class=\"fa fa-external-link\" style=\"font-size:18px\"></i> read more...</a>
            </p>\t\t\t
\t\t\t   
\t\t\t
        </li><hr><hr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 56
            echo "\t    <!-- No post found message -->
        <li class=\"no-data\">";
            // line 57
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "noPostsMessage", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "</ul>

<!-- Build in pagination. Does not work -->
";
        // line 62
        if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 62) > 1)) {
            // line 63
            echo "    <ul class=\"pagination\">
        ";
            // line 64
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 64) > 1)) {
                // line 65
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 65), "baseFileName", [], "any", false, false, true, 65), 65, $this->source), [twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "pageParam", [], "any", false, false, true, 65) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 65) - 1)]);
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 67
            echo "
        ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 68)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 69
                echo "            <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 69) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 70
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 70), "baseFileName", [], "any", false, false, true, 70), 70, $this->source), [twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "pageParam", [], "any", false, false, true, 70) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 70, $this->source), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "
        ";
            // line 74
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 74) > twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 74))) {
                // line 75
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 75), "baseFileName", [], "any", false, false, true, 75), 75, $this->source), [twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "pageParam", [], "any", false, false, true, 75) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 75) + 1)]);
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 77
            echo "    </ul>
";
        }
        // line 79
        echo "<!-- Build in pagination -->
<!-------- End Original ---------->


<!-- My added pagination (works )--> 
 <div> ";
        // line 84
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "render", [], "any", false, false, true, 84), 84, $this->source);
        echo " </div>
 <!-- My added pagination (works )--> ";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/plugins/rainlab/blog/components/posts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 84,  254 => 79,  250 => 77,  244 => 75,  242 => 74,  239 => 73,  228 => 70,  223 => 69,  219 => 68,  216 => 67,  210 => 65,  208 => 64,  205 => 63,  203 => 62,  198 => 59,  190 => 57,  187 => 56,  176 => 50,  166 => 43,  156 => 37,  142 => 36,  133 => 35,  115 => 34,  111 => 33,  102 => 26,  95 => 24,  92 => 23,  81 => 19,  75 => 18,  70 => 16,  60 => 11,  54 => 7,  49 => 6,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Display all post list -->
{% set posts = __SELF__.posts %}\t
\t\t
<!-------- Original ---------->
<ul class=\"post-list\">
    {% for post in posts %}
        <li class=\"list-group-item\">
\t\t
\t\t    
\t\t    <!-- Blog title Column, contains link to one post view -->
            <h3><a href=\"{{ post.url }}\">   <i class=\"fa fa-book\" style=\"font-size:24px\"></i> {{ post.title }}</a></h3>
            
\t\t\t
\t\t\t<!-- Image from SQL table (system_files}, polymorph relation public \$attachOne =[]. avatarn is specified in fields.yaml   -->
\t        <p>
\t        {% if post.avatarn.count %} 
\t\t        <!-- Only used if u specifiead in model polymorphic relation as  public \$attachOne =[]--> 
\t\t        <p class=\"small\"><i class=\"fa fa-clone\" style=\"font-size:12px\"></i> Image was loaded as : {{ post.avatarn.filename }}, path (DB {system_files}): <b> {{ post.avatarn.getPath }} </b> </p>  <!-- avata is \$attachOne relation in model -->
\t\t        <img  data-src=\"{{ post.avatarn.getPath}}\" src=\"{{ post.avatarn.getPath }}\" alt=\"{{ post.avatarn.content-type }}\" class=\"small-img\" />
\t\t        <!-- End Only used if in model specifiead as public \$attachOne --> 

\t\t    {% else %}
\t\t        <!-- No connected image in SQL table (system_files},  polymorph relation. Show default image -->
\t\t        <img  data-src=\"{{ url('/') }}/storage/app/media/My_images/no-image.jpg\" src=\"{{ url('/') }}/storage/app/media/My_images/no-image.jpg\" alt=\"no-image\" style=\"max-width: 6%\" />
\t\t    {% endif %}
            </p>
\t        <!-- End Image from SQL table (system_files}, polymorph relation public \$attachOne =[]  -->
\t\t\t
\t\t\t
\t\t\t<!-- when posted Column --> \t
            <p class=\"alert alert-danger\">
                <i class=\"fa fa-calendar\" style=\"font-size:18px\"></i> Posted
                {% if post.categories.count %} in {% endif %}
                {% for category in post.categories %}
                    <a href=\"{{ category.url }}\">{{ category.name }}</a>{% if not loop.last %}, {% endif %}
                {% endfor %}
                on {{ post.published_at|date('M d, Y') }}
            </p>

\t\t\t<!-- Blog text Column -->
            <div class=\"alert alert-success padding-x\">
\t\t\t    <i class=\"fa fa-clone\" style=\"font-size:18px\"></i> 
\t\t\t    {{ post.summary|raw }}
\t\t\t</div>
\t\t\t
\t

            <!-- Read more link, contains link to one post view -->
            <p>
\t\t\t    <a href=\"{{ post.url }}\"> <i class=\"fa fa-external-link\" style=\"font-size:18px\"></i> read more...</a>
            </p>\t\t\t
\t\t\t   
\t\t\t
        </li><hr><hr>
    {% else %}
\t    <!-- No post found message -->
        <li class=\"no-data\">{{ __SELF__.noPostsMessage }}</li>
    {% endfor %}
</ul>

<!-- Build in pagination. Does not work -->
{% if posts.lastPage > 1 %}
    <ul class=\"pagination\">
        {% if posts.currentPage > 1 %}
            <li><a href=\"{{ this.page.baseFileName|page({ (__SELF__.pageParam): (posts.currentPage-1) }) }}\">&larr; Prev</a></li>
        {% endif %}

        {% for page in 1..posts.lastPage %}
            <li class=\"{{ posts.currentPage == page ? 'active' : null }}\">
                <a href=\"{{ this.page.baseFileName|page({ (__SELF__.pageParam): page }) }}\">{{ page }}</a>
            </li>
        {% endfor %}

        {% if posts.lastPage > posts.currentPage %}
            <li><a href=\"{{ this.page.baseFileName|page({ (__SELF__.pageParam): (posts.currentPage+1) }) }}\">Next &rarr;</a></li>
        {% endif %}
    </ul>
{% endif %}
<!-- Build in pagination -->
<!-------- End Original ---------->


<!-- My added pagination (works )--> 
 <div> {{ posts.render|raw }} </div>
 <!-- My added pagination (works )--> ", "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/plugins/rainlab/blog/components/posts/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "for" => 6, "if" => 16);
        static $filters = array("escape" => 11, "date" => 37, "raw" => 43, "page" => 65);
        static $functions = array("url" => 24, "range" => 68);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape', 'date', 'raw', 'page'],
                ['url', 'range']
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
