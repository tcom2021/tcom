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

/* C:\wamp64\www\tcom/themes/pkurg-spacebootstrap5/partials/header.htm */
class __TwigTemplate_d65be9b656990e21ac5d4ce175ebc69c156b0a12fbc2c95ba1fc3a5fd6ceb500 extends \Twig\Template
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
        $tags = array();
        $filters = array("theme" => 7);
        $functions = array("url" => 6);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme'],
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

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<header class=\"header navbar-area\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-12\">
                    <nav class=\"navbar navbar-expand-lg\">
                        <a class=\"navbar-brand\" href=\"";
        // line 6
        echo url("/");
        echo "\">
                            <img src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo/logo.png");
        echo "\" alt=\"Logo\">
                        </a>
                        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\"
                        data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
                        aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"toggler-icon\"></span>
                        <span class=\"toggler-icon\"></span>
                        <span class=\"toggler-icon\"></span>
                    </button>

                    <div class=\"collapse navbar-collapse sub-menu-bar\" id=\"navbarSupportedContent\">
                        <ul id=\"nav\" class=\"navbar-nav ml-auto\">
                            <li class=\"nav-item\">
                                <a class=\"page-scroll\" href=\"";
        // line 20
        echo url("/");
        echo "\">Home</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"page-scroll\" href=\"";
        // line 23
        echo url("/about");
        echo "\">About</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"page-scroll\" href=\"";
        // line 26
        echo url("/service");
        echo "\">Blog</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"page-scroll\" href=\"";
        // line 29
        echo url("/login");
        echo "\">Login</a>
                            </li>
                        </ul>
                        <!-- <form action=\"#\" class=\"search-form\">
                            <input type=\"text\" placeholder=\"Search\">
                            <button type=\"submit\"><i class=\"lni lni-search-alt\"></i></button>
                        </form> -->
                    </div> <!-- navbar collapse -->
                </nav> <!-- navbar -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->

</header>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\tcom/themes/pkurg-spacebootstrap5/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 29,  101 => 26,  95 => 23,  89 => 20,  73 => 7,  69 => 6,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"header navbar-area\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-12\">
                    <nav class=\"navbar navbar-expand-lg\">
                        <a class=\"navbar-brand\" href=\"{{ url('/') }}\">
                            <img src=\"{{ 'assets/img/logo/logo.png' | theme }}\" alt=\"Logo\">
                        </a>
                        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\"
                        data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
                        aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"toggler-icon\"></span>
                        <span class=\"toggler-icon\"></span>
                        <span class=\"toggler-icon\"></span>
                    </button>

                    <div class=\"collapse navbar-collapse sub-menu-bar\" id=\"navbarSupportedContent\">
                        <ul id=\"nav\" class=\"navbar-nav ml-auto\">
                            <li class=\"nav-item\">
                                <a class=\"page-scroll\" href=\"{{ url('/') }}\">Home</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"page-scroll\" href=\"{{ url('/about') }}\">About</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"page-scroll\" href=\"{{ url('/service') }}\">Blog</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"page-scroll\" href=\"{{ url('/login') }}\">Login</a>
                            </li>
                        </ul>
                        <!-- <form action=\"#\" class=\"search-form\">
                            <input type=\"text\" placeholder=\"Search\">
                            <button type=\"submit\"><i class=\"lni lni-search-alt\"></i></button>
                        </form> -->
                    </div> <!-- navbar collapse -->
                </nav> <!-- navbar -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->

</header>", "C:\\wamp64\\www\\tcom/themes/pkurg-spacebootstrap5/partials/header.htm", "");
    }
}
