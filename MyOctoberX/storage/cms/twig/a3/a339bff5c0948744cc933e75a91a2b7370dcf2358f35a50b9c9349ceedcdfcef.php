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

/* C:\Users\user\Downloads\OSPanel\domains\localhost\myoctober\MyOctoberX/themes/responsiv-flat/pages/portfolio/project.htm */
class __TwigTemplate_01cbcea6eda457fb7e2daf40fd178b22d22ea24efb59807db31cf56041a0c2c3 extends \Twig\Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 2
        echo "    <link href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/vendor/slick/slick.css"]);
        // line 4
        echo "\" rel=\"stylesheet\">
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 6
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 7
        echo "    <script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/vendor/slick/slick.js"]);
        // line 9
        echo "\"></script>
    <script>
        \$(document).ready(function() {
            \$('#projectImages').slick({
                dots: true,
                infinite: true,
                speed: 500,
                fade: true,
                cssEase: 'linear',
                slidesToShow: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                pauseOnHover: true
            });
        })
    </script>
";
        // line 6
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 26
        echo "
<section id=\"layout-title\">
    <div class=\"container\">
        <h3>Sample Project</h3>
    </div>
</section>

<div class=\"container\">

    <div id=\"projectImages\" class=\"project-images\">
        <div>
            <div class=\"image\"><img src=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/project1.jpg");
        echo "\" class=\"img-responsive\" alt=\"\" /></div>
            <div class=\"caption\">Classic vintage</div>
        </div>
        <div>
            <div class=\"image\"><img src=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/project2.jpg");
        echo "\" class=\"img-responsive\" alt=\"\" /></div>
            <div class=\"caption\">Nature's prime</div>
        </div>
        <div>
            <div class=\"image\"><img src=\"";
        // line 45
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/project3.jpg");
        echo "\" class=\"img-responsive\" alt=\"\" /></div>
            <div class=\"caption\">Surfin' bird</div>
        </div>
        <div>
            <div class=\"image\"><img src=\"";
        // line 49
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/project4.jpg");
        echo "\" class=\"img-responsive\" alt=\"\" /></div>
            <div class=\"caption\">Healthy, wealthy &amp; wise</div>
        </div>
    </div>

    <div class=\"row\">

        <div class=\"col-md-9\">

            <!-- Project description -->
            <div class=\"project-description\">
                <p>There's a voice that keeps on calling me. Down the road, that's where I'll always be. Every stop I make, I make a new friend. Can't stay for long, just turn around and I'm gone again. Maybe tomorrow, I'll want to settle down, Until tomorrow, I'll just keep moving on.</p>
                <p>Bacon ipsum dolor sit amet prosciutto kielbasa meatball short loin. Jowl shankle doner pancetta, turkey short loin capicola bresaola prosciutto beef ribs cow. Tenderloin salami pork belly capicola.</p>
                <p>T-bone spare ribs fatback pork andouille, meatloaf chicken beef beef ribs. Salami beef ribs pig ground round chicken, tail doner tenderloin shankle prosciutto biltong chuck. Drumstick swine hamburger tongue strip steak jowl jerky sausage. Strip steak pastrami drumstick, pork chop meatloaf pig turkey doner beef ribs ground round turducken.</p>
            </div>

        </div>
        <div class=\"col-md-3\">

            <!-- Project information -->
            <ul class=\"project-info\">
                <li><strong>Client</strong> Google</li>
                <li><strong>Date</strong> August 2014</li>
            </ul>
            <a href=\"#\" class=\"btn btn-info btn-lg btn-block\">Project page</a>

        </div>
    </div>

    <!-- Quote -->
    <h4 class=\"headline\"><span>What the client said</span></h4>
    <blockquote>
        <p>As busy as a dob how flat out like a butcher. She'll be right boozer how it'll be ankle biter. Stands out like a feral heaps stands out like a big smoke. Mad as a franger flamin lets throw a compo. You little ripper bitzer how she'll be right slacker. Shazza got us some swagger no dramas get a dog up ya boozer. Shazza got us some coldie with gutful of dole bludger.</p>
        <footer>Someone famous in <cite title=\"Source Title\">Source Title</cite></footer>
    </blockquote>

    <!-- Pagination -->
    <ul class=\"pager pull-right\">
        <li class=\"previous\">
            <a href=\"#\">
                <span class=\"fui-arrow-left\"></span>
                Previous
            </a>
        </li>
        <li class=\"next\">
            <a href=\"#\">
                Next
                <span class=\"fui-arrow-right\"></span>
            </a>
        </li>
    </ul>

</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/themes/responsiv-flat/pages/portfolio/project.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 49,  101 => 45,  94 => 41,  87 => 37,  74 => 26,  72 => 6,  54 => 9,  51 => 7,  49 => 6,  47 => 1,  44 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% put styles %}
    <link href=\"{{ [
        'assets/vendor/slick/slick.css',
    ]|theme }}\" rel=\"stylesheet\">
{% endput %}
{% put scripts %}
    <script src=\"{{ [
        'assets/vendor/slick/slick.js',
    ]|theme }}\"></script>
    <script>
        \$(document).ready(function() {
            \$('#projectImages').slick({
                dots: true,
                infinite: true,
                speed: 500,
                fade: true,
                cssEase: 'linear',
                slidesToShow: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                pauseOnHover: true
            });
        })
    </script>
{% endput %}

<section id=\"layout-title\">
    <div class=\"container\">
        <h3>Sample Project</h3>
    </div>
</section>

<div class=\"container\">

    <div id=\"projectImages\" class=\"project-images\">
        <div>
            <div class=\"image\"><img src=\"{{ 'assets/images/portfolio/project1.jpg'|theme }}\" class=\"img-responsive\" alt=\"\" /></div>
            <div class=\"caption\">Classic vintage</div>
        </div>
        <div>
            <div class=\"image\"><img src=\"{{ 'assets/images/portfolio/project2.jpg'|theme }}\" class=\"img-responsive\" alt=\"\" /></div>
            <div class=\"caption\">Nature's prime</div>
        </div>
        <div>
            <div class=\"image\"><img src=\"{{ 'assets/images/portfolio/project3.jpg'|theme }}\" class=\"img-responsive\" alt=\"\" /></div>
            <div class=\"caption\">Surfin' bird</div>
        </div>
        <div>
            <div class=\"image\"><img src=\"{{ 'assets/images/portfolio/project4.jpg'|theme }}\" class=\"img-responsive\" alt=\"\" /></div>
            <div class=\"caption\">Healthy, wealthy &amp; wise</div>
        </div>
    </div>

    <div class=\"row\">

        <div class=\"col-md-9\">

            <!-- Project description -->
            <div class=\"project-description\">
                <p>There's a voice that keeps on calling me. Down the road, that's where I'll always be. Every stop I make, I make a new friend. Can't stay for long, just turn around and I'm gone again. Maybe tomorrow, I'll want to settle down, Until tomorrow, I'll just keep moving on.</p>
                <p>Bacon ipsum dolor sit amet prosciutto kielbasa meatball short loin. Jowl shankle doner pancetta, turkey short loin capicola bresaola prosciutto beef ribs cow. Tenderloin salami pork belly capicola.</p>
                <p>T-bone spare ribs fatback pork andouille, meatloaf chicken beef beef ribs. Salami beef ribs pig ground round chicken, tail doner tenderloin shankle prosciutto biltong chuck. Drumstick swine hamburger tongue strip steak jowl jerky sausage. Strip steak pastrami drumstick, pork chop meatloaf pig turkey doner beef ribs ground round turducken.</p>
            </div>

        </div>
        <div class=\"col-md-3\">

            <!-- Project information -->
            <ul class=\"project-info\">
                <li><strong>Client</strong> Google</li>
                <li><strong>Date</strong> August 2014</li>
            </ul>
            <a href=\"#\" class=\"btn btn-info btn-lg btn-block\">Project page</a>

        </div>
    </div>

    <!-- Quote -->
    <h4 class=\"headline\"><span>What the client said</span></h4>
    <blockquote>
        <p>As busy as a dob how flat out like a butcher. She'll be right boozer how it'll be ankle biter. Stands out like a feral heaps stands out like a big smoke. Mad as a franger flamin lets throw a compo. You little ripper bitzer how she'll be right slacker. Shazza got us some swagger no dramas get a dog up ya boozer. Shazza got us some coldie with gutful of dole bludger.</p>
        <footer>Someone famous in <cite title=\"Source Title\">Source Title</cite></footer>
    </blockquote>

    <!-- Pagination -->
    <ul class=\"pager pull-right\">
        <li class=\"previous\">
            <a href=\"#\">
                <span class=\"fui-arrow-left\"></span>
                Previous
            </a>
        </li>
        <li class=\"next\">
            <a href=\"#\">
                Next
                <span class=\"fui-arrow-right\"></span>
            </a>
        </li>
    </ul>

</div>", "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/themes/responsiv-flat/pages/portfolio/project.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("put" => 1);
        static $filters = array("theme" => 4);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['put'],
                ['theme'],
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
