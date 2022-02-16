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

/* C:\Users\user\Downloads\OSPanel\domains\localhost\myoctober\MyOctoberX/themes/responsiv-flat/pages/home.htm */
class __TwigTemplate_3a66c6e8172060e19aa19525bd51dbd162b6800306109eb887d3ddf2c17190f3 extends \Twig\Template
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
        echo "<section class=\"home-title\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-4\">
                <h3>FlatX Theme for OctoberCMS</h3>
                <p>You have the design, you have the code. We've created the product that will help your startup to look even better.</p>
                <div class=\"signup-form\">
                    <form>
                        <div class=\"form-group\">
                            <input class=\"form-control\" type=\"text\" placeholder=\"Your E-mail\">
                        </div>
                        <div class=\"form-group\">
                            <div>
                                <input type=\"password\" class=\"form-control\" placeholder=\"Password\">
                            </div>
                            <div>
                                <input type=\"password\" class=\"form-control\" placeholder=\"Confirmation\">
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <button type=\"submit\" class=\"btn btn-block btn-info\">Sign Up</button>
                        </div>
                    </form>
                </div>
                <div class=\"additional-links\">
                    By signing up you agree to <a href=\"#\">Terms of Use</a> and <a href=\"#\">Privacy Policy</a>
                </div>
            </div>
            <div class=\"col-sm-7 col-sm-offset-1 player-wrapper\">
                <div class=\"player\">
                    <iframe src=\"http://player.vimeo.com/video/29568236?color=3498db\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"logos\">
    <div class=\"container\">
        <div><img src=\"";
        // line 40
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logos/mashable.png");
        echo "\" alt=\"\"></div>
        <div><img src=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logos/guardian.png");
        echo "\" alt=\"\"></div>
        <div><img src=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logos/forbes.png");
        echo "\" alt=\"\"></div>
        <div><img src=\"";
        // line 43
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logos/red-bull.png");
        echo "\" alt=\"\"></div>
        <div><img src=\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logos/ny-times.png");
        echo "\" alt=\"\"></div>
    </div>
</section>

<br />

<div class=\"container\">

    <!-- Services -->
    <div class=\"row our-services\">
        <div class=\"col-sm-12\">
            <h4 class=\"headline\"><span>What we do</span></h4>
            <p>He hasn't got a freckle my mad as a middy. Trent from punchy maccas no dramas shazza got us some ripper. As dry as a bradman flamin lets throw a cut lunch commando.</p>

            ";
        // line 58
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("services"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 59
        echo "        </div>
    </div>

    <div class=\"recent-tweets\">
        <h4 class=\"headline\"><span>Recent tweets</span></h4>
        <div class=\"tweet\">
            <i class=\"fa fa-twitter\"></i>
            <p>
                Salami turkey jowl rump jerky ball tip drumstick ground round tenderloin kielbasa hamburger prosciutto.
                <a href=\"#\">1 day ago</a>
            </p>
        </div>
        <div class=\"tweet\">
            <i class=\"fa fa-twitter\"></i>
            <p>
                Short loin pork belly beef, tenderloin swine ribeye tri-tip doner salami rump hamburger.
                <a href=\"#\">2 days ago</a>
            </p>
        </div>
    </div>

</div>

<br />";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/themes/responsiv-flat/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 59,  113 => 58,  96 => 44,  92 => 43,  88 => 42,  84 => 41,  80 => 40,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"home-title\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-4\">
                <h3>FlatX Theme for OctoberCMS</h3>
                <p>You have the design, you have the code. We've created the product that will help your startup to look even better.</p>
                <div class=\"signup-form\">
                    <form>
                        <div class=\"form-group\">
                            <input class=\"form-control\" type=\"text\" placeholder=\"Your E-mail\">
                        </div>
                        <div class=\"form-group\">
                            <div>
                                <input type=\"password\" class=\"form-control\" placeholder=\"Password\">
                            </div>
                            <div>
                                <input type=\"password\" class=\"form-control\" placeholder=\"Confirmation\">
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <button type=\"submit\" class=\"btn btn-block btn-info\">Sign Up</button>
                        </div>
                    </form>
                </div>
                <div class=\"additional-links\">
                    By signing up you agree to <a href=\"#\">Terms of Use</a> and <a href=\"#\">Privacy Policy</a>
                </div>
            </div>
            <div class=\"col-sm-7 col-sm-offset-1 player-wrapper\">
                <div class=\"player\">
                    <iframe src=\"http://player.vimeo.com/video/29568236?color=3498db\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"logos\">
    <div class=\"container\">
        <div><img src=\"{{ 'assets/images/logos/mashable.png'|theme }}\" alt=\"\"></div>
        <div><img src=\"{{ 'assets/images/logos/guardian.png'|theme }}\" alt=\"\"></div>
        <div><img src=\"{{ 'assets/images/logos/forbes.png'|theme }}\" alt=\"\"></div>
        <div><img src=\"{{ 'assets/images/logos/red-bull.png'|theme }}\" alt=\"\"></div>
        <div><img src=\"{{ 'assets/images/logos/ny-times.png'|theme }}\" alt=\"\"></div>
    </div>
</section>

<br />

<div class=\"container\">

    <!-- Services -->
    <div class=\"row our-services\">
        <div class=\"col-sm-12\">
            <h4 class=\"headline\"><span>What we do</span></h4>
            <p>He hasn't got a freckle my mad as a middy. Trent from punchy maccas no dramas shazza got us some ripper. As dry as a bradman flamin lets throw a cut lunch commando.</p>

            {% partial 'services' %}
        </div>
    </div>

    <div class=\"recent-tweets\">
        <h4 class=\"headline\"><span>Recent tweets</span></h4>
        <div class=\"tweet\">
            <i class=\"fa fa-twitter\"></i>
            <p>
                Salami turkey jowl rump jerky ball tip drumstick ground round tenderloin kielbasa hamburger prosciutto.
                <a href=\"#\">1 day ago</a>
            </p>
        </div>
        <div class=\"tweet\">
            <i class=\"fa fa-twitter\"></i>
            <p>
                Short loin pork belly beef, tenderloin swine ribeye tri-tip doner salami rump hamburger.
                <a href=\"#\">2 days ago</a>
            </p>
        </div>
    </div>

</div>

<br />", "C:\\Users\\user\\Downloads\\OSPanel\\domains\\localhost\\myoctober\\MyOctoberX/themes/responsiv-flat/pages/home.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 58);
        static $filters = array("theme" => 40);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
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
