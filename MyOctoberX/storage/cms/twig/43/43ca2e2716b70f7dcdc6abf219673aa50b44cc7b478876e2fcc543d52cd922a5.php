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

/* C:\Users\user\Downloads\OSPanel\domains\localhost\myoctober\MyOctoberX/themes/responsiv-flat/pages/blog/blog.htm */
class __TwigTemplate_057e9e74c52660a90f2bfd89043978f5d5fd5b36f2f3731192347907e55691af extends \Twig\Template
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
        echo "<section id=\"layout-title\">
    <div class=\"container\">
        <h3>Blog</h3>
    </div>
\t
\t
\t
\t<!-- View all blogs, inserted via /CMS -> Components -> Blog --> 
    <div class=\"col-sm-12 col-xs-12 posts-all\">
\t    ";
        // line 10
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("blogPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 11
        echo "\t</div>
\t
\t
\t
</section>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-9\">

            <!-- Blog Post #1 -->
            <div class=\"blog\">
                <img src=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/aleksey.png");
        echo "\" alt=\"\">
                <div class=\"blog-desc\">
                    <h5>
                        <a href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog/post");
        echo "\">Children of the sun, see your time has just begun, searching for your ways, through adventures every day.</a>
                    </h5>
                    <hr />
                    <p class=\"text-muted\">by John Doe on July 25, 2014</p>
                    <a href=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog/post");
        echo "\"><img class=\"img-responsive\" src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blog/post1.jpg");
        echo "\" alt=\"\"></a>
                    <p>Ten years ago a crack commando unit was sent to prison by a military court for a crime they didn't commit. These men promptly escaped from a maximum security stockade to the Los Angeles underground. Today, still wanted by the government, they survive as soldiers of fortune. If you have a problem and no one else can help, and if you can find them, maybe you can hire the A-team.</p>
                    <a class=\"btn btn-lg btn-default\" href=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog/post");
        echo "\">Read More...</a>
                </div>
            </div>

            <!-- Blog Post #2 -->
            <div class=\"blog\">
                <img src=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/sam.png");
        echo "\" alt=\"\">
                <div class=\"blog-desc\">
                    <h5>
                        <a href=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog/post");
        echo "\">Barnaby The Bear's my name, never call me Jack or James, I will sing my way to fame.</a>
                    </h5>
                    <hr />
                    <p class=\"text-muted\">by John Doe on July 15, 2014</p>
                    <a href=\"";
        // line 45
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog/post");
        echo "\"><img class=\"img-responsive\" src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blog/post2.jpg");
        echo "\" alt=\"\"></a>
                    <p>I never spend much time in school but I taught ladies plenty. It's true I hire my body out for pay, hey hey. I've gotten burned over Cheryl Tiegs, blown up for Raquel Welch. But when I end up in the hay it's only hay, hey hey. I might jump an open drawbridge, or Tarzan from a vine. 'Cause I'm the unknown stuntman that makes Eastwood look so fine.</p>
                    <a class=\"btn btn-lg btn-default\" href=\"";
        // line 47
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog/post");
        echo "\">Read More...</a>
                </div>
            </div>

            <!-- Pagination -->
            <div class=\"pull-right\">
                <ul class=\"pagination\">
                    <li class=\"previous\"><a href=\"#fakelink\" class=\"fui-arrow-left\"></a></li>
                    <li class=\"active\"><a href=\"#fakelink\">1</a></li>
                    <li><a href=\"#fakelink\">2</a></li>
                    <li><a href=\"#fakelink\">3</a></li>
                    <li><a href=\"#fakelink\">4</a></li>
                    <li><a href=\"#fakelink\">5</a></li>
                    <li><a href=\"#fakelink\">6</a></li>
                    <li><a href=\"#fakelink\">7</a></li>
                    <li><a href=\"#fakelink\">8</a></li>
                    <li class=\"next\"><a href=\"#fakelink\" class=\"fui-arrow-right\"></a></li>
                </ul>
            </div>
            <div class=\"clearfix\"></div>
        </div>
        <div class=\"col-sm-3\">

            ";
        // line 70
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blog/sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 71
        echo "
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/themes/responsiv-flat/pages/blog/blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 71,  143 => 70,  117 => 47,  110 => 45,  103 => 41,  97 => 38,  88 => 32,  81 => 30,  74 => 26,  68 => 23,  54 => 11,  50 => 10,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"layout-title\">
    <div class=\"container\">
        <h3>Blog</h3>
    </div>
\t
\t
\t
\t<!-- View all blogs, inserted via /CMS -> Components -> Blog --> 
    <div class=\"col-sm-12 col-xs-12 posts-all\">
\t    {% component 'blogPosts' %}
\t</div>
\t
\t
\t
</section>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-9\">

            <!-- Blog Post #1 -->
            <div class=\"blog\">
                <img src=\"{{ 'assets/images/team/aleksey.png'|theme }}\" alt=\"\">
                <div class=\"blog-desc\">
                    <h5>
                        <a href=\"{{ 'blog/post'|page }}\">Children of the sun, see your time has just begun, searching for your ways, through adventures every day.</a>
                    </h5>
                    <hr />
                    <p class=\"text-muted\">by John Doe on July 25, 2014</p>
                    <a href=\"{{ 'blog/post'|page }}\"><img class=\"img-responsive\" src=\"{{ 'assets/images/blog/post1.jpg'|theme }}\" alt=\"\"></a>
                    <p>Ten years ago a crack commando unit was sent to prison by a military court for a crime they didn't commit. These men promptly escaped from a maximum security stockade to the Los Angeles underground. Today, still wanted by the government, they survive as soldiers of fortune. If you have a problem and no one else can help, and if you can find them, maybe you can hire the A-team.</p>
                    <a class=\"btn btn-lg btn-default\" href=\"{{ 'blog/post'|page }}\">Read More...</a>
                </div>
            </div>

            <!-- Blog Post #2 -->
            <div class=\"blog\">
                <img src=\"{{ 'assets/images/team/sam.png'|theme }}\" alt=\"\">
                <div class=\"blog-desc\">
                    <h5>
                        <a href=\"{{ 'blog/post'|page }}\">Barnaby The Bear's my name, never call me Jack or James, I will sing my way to fame.</a>
                    </h5>
                    <hr />
                    <p class=\"text-muted\">by John Doe on July 15, 2014</p>
                    <a href=\"{{ 'blog/post'|page }}\"><img class=\"img-responsive\" src=\"{{ 'assets/images/blog/post2.jpg'|theme }}\" alt=\"\"></a>
                    <p>I never spend much time in school but I taught ladies plenty. It's true I hire my body out for pay, hey hey. I've gotten burned over Cheryl Tiegs, blown up for Raquel Welch. But when I end up in the hay it's only hay, hey hey. I might jump an open drawbridge, or Tarzan from a vine. 'Cause I'm the unknown stuntman that makes Eastwood look so fine.</p>
                    <a class=\"btn btn-lg btn-default\" href=\"{{ 'blog/post'|page }}\">Read More...</a>
                </div>
            </div>

            <!-- Pagination -->
            <div class=\"pull-right\">
                <ul class=\"pagination\">
                    <li class=\"previous\"><a href=\"#fakelink\" class=\"fui-arrow-left\"></a></li>
                    <li class=\"active\"><a href=\"#fakelink\">1</a></li>
                    <li><a href=\"#fakelink\">2</a></li>
                    <li><a href=\"#fakelink\">3</a></li>
                    <li><a href=\"#fakelink\">4</a></li>
                    <li><a href=\"#fakelink\">5</a></li>
                    <li><a href=\"#fakelink\">6</a></li>
                    <li><a href=\"#fakelink\">7</a></li>
                    <li><a href=\"#fakelink\">8</a></li>
                    <li class=\"next\"><a href=\"#fakelink\" class=\"fui-arrow-right\"></a></li>
                </ul>
            </div>
            <div class=\"clearfix\"></div>
        </div>
        <div class=\"col-sm-3\">

            {% partial 'blog/sidebar' %}

        </div>
    </div>
</div>", "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/themes/responsiv-flat/pages/blog/blog.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("component" => 10, "partial" => 70);
        static $filters = array("theme" => 23, "page" => 26);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component', 'partial'],
                ['theme', 'page'],
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
