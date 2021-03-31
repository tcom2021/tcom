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

/* C:\wamp64\www\tcom/themes/pkurg-spacebootstrap5/pages/404.htm */
class __TwigTemplate_a39718db985fc90ef4737133b57b20d4f15f76fa88668a9476befa9d06a93772 extends \Twig\Template
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
        $tags = array("partial" => 1);
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
                [],
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

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "<section class=\"page-banner-section pt-75 pb-75 img-bg\" style=\"background-image: url('/themes/pkurg-spacebootstrap5/assets/img/bg/common-bg.svg')\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-12\">
                <div class=\"banner-content\">
                    <h2 class=\"text-white\">404 Page</h2>
                    <div class=\"page-breadcrumb\">
                        <nav aria-label=\"breadcrumb\">
                            <ol class=\"breadcrumb\">
                                <li class=\"breadcrumb-item\" aria-current=\"page\"><a href=\"javascript:void(0)\">Home</a></li>
                                <li class=\"breadcrumb-item active\" aria-current=\"page\">404</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"page-404-section pt-130 pb-130\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"page-404-content text-center\">
                    <h2 class=\"mb-30\">404</h2>
                    <h4 class=\"mb-40\">Page Not Found!</h4>
                    <a href=\"index.html\" class=\"theme-btn\">Back to Home</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"client-logo-section pt-100 pb-130\">
    <div class=\"container\">
        <div class=\"client-logo-wrapper\">
            <div class=\"client-logo-carousel d-flex align-items-center justify-content-between\">
                <div class=\"client-logo\">
                    <img src=\"/themes/pkurg-spacebootstrap5/assets/img/client-logo/uideck-logo.svg\" alt=\"\">
                </div>
                <div class=\"client-logo\">
                    <img src=\"/themes/pkurg-spacebootstrap5/assets/img/client-logo/pagebulb-logo.svg\" alt=\"\">
                </div>
                <div class=\"client-logo\">
                    <img src=\"/themes/pkurg-spacebootstrap5/assets/img/client-logo/lineicons-logo.svg\" alt=\"\">
                </div>
                <div class=\"client-logo\">
                    <img src=\"/themes/pkurg-spacebootstrap5/assets/img/client-logo/graygrids-logo.svg\" alt=\"\">
                </div>
                <div class=\"client-logo\">
                    <img src=\"/themes/pkurg-spacebootstrap5/assets/img/client-logo/lineicons-logo.svg\" alt=\"\">
                </div>
            </div>
        </div>
    </div>
</section>
";
        // line 59
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\tcom/themes/pkurg-spacebootstrap5/pages/404.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 59,  66 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'header' %}
<section class=\"page-banner-section pt-75 pb-75 img-bg\" style=\"background-image: url('/themes/pkurg-spacebootstrap5/assets/img/bg/common-bg.svg')\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-12\">
                <div class=\"banner-content\">
                    <h2 class=\"text-white\">404 Page</h2>
                    <div class=\"page-breadcrumb\">
                        <nav aria-label=\"breadcrumb\">
                            <ol class=\"breadcrumb\">
                                <li class=\"breadcrumb-item\" aria-current=\"page\"><a href=\"javascript:void(0)\">Home</a></li>
                                <li class=\"breadcrumb-item active\" aria-current=\"page\">404</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"page-404-section pt-130 pb-130\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"page-404-content text-center\">
                    <h2 class=\"mb-30\">404</h2>
                    <h4 class=\"mb-40\">Page Not Found!</h4>
                    <a href=\"index.html\" class=\"theme-btn\">Back to Home</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"client-logo-section pt-100 pb-130\">
    <div class=\"container\">
        <div class=\"client-logo-wrapper\">
            <div class=\"client-logo-carousel d-flex align-items-center justify-content-between\">
                <div class=\"client-logo\">
                    <img src=\"/themes/pkurg-spacebootstrap5/assets/img/client-logo/uideck-logo.svg\" alt=\"\">
                </div>
                <div class=\"client-logo\">
                    <img src=\"/themes/pkurg-spacebootstrap5/assets/img/client-logo/pagebulb-logo.svg\" alt=\"\">
                </div>
                <div class=\"client-logo\">
                    <img src=\"/themes/pkurg-spacebootstrap5/assets/img/client-logo/lineicons-logo.svg\" alt=\"\">
                </div>
                <div class=\"client-logo\">
                    <img src=\"/themes/pkurg-spacebootstrap5/assets/img/client-logo/graygrids-logo.svg\" alt=\"\">
                </div>
                <div class=\"client-logo\">
                    <img src=\"/themes/pkurg-spacebootstrap5/assets/img/client-logo/lineicons-logo.svg\" alt=\"\">
                </div>
            </div>
        </div>
    </div>
</section>
{% partial 'footer' %}", "C:\\wamp64\\www\\tcom/themes/pkurg-spacebootstrap5/pages/404.htm", "");
    }
}
