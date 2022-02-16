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

/* C:\Users\user\Downloads\OSPanel\domains\localhost\myoctober\MyOctoberX/themes/responsiv-flat/pages/samples/about.htm */
class __TwigTemplate_3da2522066419d203aaff1abbf5f8da9280f4c08d6fff6cd40ae4af818f1b88f extends \Twig\Template
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
        <h3>About us</h3>
    </div>
</section>

<div class=\"container\">

    <div class=\"row\">
        <div class=\"col-sm-7\">
            <h4 class=\"headline\"><span>WelcomeX</span></h4>
            <p>There's a voice that keeps on calling me. Down the road, that's where I'll always be. Every stop I make, I make a new friend. Can't stay for long, just turn around and I'm gone again. Maybe tomorrow, I'll want to settle down, Until tomorrow, I'll just keep moving on.</p>
            <p>He hasn't got a freckle my mad as a middy. Trent from punchy maccas no dramas shazza got us some ripper. As dry as a bradman flamin lets throw a cut lunch commando.</p>
            <p><a href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/contact");
        echo "\" class=\"btn btn-lg btn-primary\">Contact Us</a></p>
        </div>
        <div class=\"col-sm-5\">
            <h4 class=\"headline\"><span>Video intro</span></h4>
            <div class=\"video-container\">
                <iframe src=\"//player.vimeo.com/video/67449472?title=0&amp;byline=0&amp;portrait=0\" width=\"500\" height=\"281\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <div class=\"row our-team\">
        <div class=\"col-sm-12\">
            <h4 class=\"headline\"><span>Our team</span></h4>
            <div class=\"row\">
                <div class=\"col-sm-3 col-xs-6\">
                    <div class=\"team-member text-center\">
                        <img class=\"img-responsive center-block\" src=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/aleksey.png");
        echo "\" alt=\"\">
                        <div class=\"info\">
                            John Doe
                            <p class=\"text-muted\">Founder</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-3 col-xs-6\">
                    <div class=\"team-member text-center\">
                        <img class=\"img-responsive center-block\" src=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/sam.png");
        echo "\" alt=\"\">
                        <div class=\"info\">
                            John Doe
                            <p class=\"text-muted\">Engineer</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-3 col-xs-6\">
                    <div class=\"team-member text-center\">
                        <img class=\"img-responsive center-block\" src=\"";
        // line 48
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/aleksey.png");
        echo "\" alt=\"\">
                        <div class=\"info\">
                            John Doe
                            <p class=\"text-muted\">Sales</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-3 col-xs-6\">
                    <div class=\"team-member text-center\">
                        <img class=\"img-responsive center-block\" src=\"";
        // line 57
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/sam.png");
        echo "\" alt=\"\">
                        <div class=\"info\">
                            John Doe
                            <p class=\"text-muted\">Admin Team</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/themes/responsiv-flat/pages/samples/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 57,  97 => 48,  85 => 39,  73 => 30,  54 => 14,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"layout-title\">
    <div class=\"container\">
        <h3>About us</h3>
    </div>
</section>

<div class=\"container\">

    <div class=\"row\">
        <div class=\"col-sm-7\">
            <h4 class=\"headline\"><span>WelcomeX</span></h4>
            <p>There's a voice that keeps on calling me. Down the road, that's where I'll always be. Every stop I make, I make a new friend. Can't stay for long, just turn around and I'm gone again. Maybe tomorrow, I'll want to settle down, Until tomorrow, I'll just keep moving on.</p>
            <p>He hasn't got a freckle my mad as a middy. Trent from punchy maccas no dramas shazza got us some ripper. As dry as a bradman flamin lets throw a cut lunch commando.</p>
            <p><a href=\"{{ 'samples/contact'|page }}\" class=\"btn btn-lg btn-primary\">Contact Us</a></p>
        </div>
        <div class=\"col-sm-5\">
            <h4 class=\"headline\"><span>Video intro</span></h4>
            <div class=\"video-container\">
                <iframe src=\"//player.vimeo.com/video/67449472?title=0&amp;byline=0&amp;portrait=0\" width=\"500\" height=\"281\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <div class=\"row our-team\">
        <div class=\"col-sm-12\">
            <h4 class=\"headline\"><span>Our team</span></h4>
            <div class=\"row\">
                <div class=\"col-sm-3 col-xs-6\">
                    <div class=\"team-member text-center\">
                        <img class=\"img-responsive center-block\" src=\"{{ 'assets/images/team/aleksey.png'|theme }}\" alt=\"\">
                        <div class=\"info\">
                            John Doe
                            <p class=\"text-muted\">Founder</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-3 col-xs-6\">
                    <div class=\"team-member text-center\">
                        <img class=\"img-responsive center-block\" src=\"{{ 'assets/images/team/sam.png'|theme }}\" alt=\"\">
                        <div class=\"info\">
                            John Doe
                            <p class=\"text-muted\">Engineer</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-3 col-xs-6\">
                    <div class=\"team-member text-center\">
                        <img class=\"img-responsive center-block\" src=\"{{ 'assets/images/team/aleksey.png'|theme }}\" alt=\"\">
                        <div class=\"info\">
                            John Doe
                            <p class=\"text-muted\">Sales</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-3 col-xs-6\">
                    <div class=\"team-member text-center\">
                        <img class=\"img-responsive center-block\" src=\"{{ 'assets/images/team/sam.png'|theme }}\" alt=\"\">
                        <div class=\"info\">
                            John Doe
                            <p class=\"text-muted\">Admin Team</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>", "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/themes/responsiv-flat/pages/samples/about.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("page" => 14, "theme" => 30);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['page', 'theme'],
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
