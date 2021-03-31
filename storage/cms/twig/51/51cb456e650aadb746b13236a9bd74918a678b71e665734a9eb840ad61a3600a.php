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

/* C:\wamp64\www\tcom/themes/pkurg-spacebootstrap5/layouts/default.htm */
class __TwigTemplate_9587bfdafb4df2f4c468c267b8ecd7f298df99f38212df4e1a5400f5e75efb03 extends \Twig\Template
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
        $tags = array("styles" => 18, "page" => 39, "scripts" => 51);
        $filters = array("theme" => 14);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['styles', 'page', 'scripts'],
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

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html class=\"no-js\" lang=\"\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>Space Bootstrap 5 Template</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"/themes/pkurg-spacebootstrap5/assets/img/favicon.png\">
    <!-- Place favicon.ico in the root directory -->

    <!-- ========================= CSS here ========================= -->\t
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap-5.0.0-alpha.min.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/LineIcons.2.0.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/animate.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/main.css");
        echo "\">
    ";
        // line 18
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 19
        echo "</head>
<body>            

    <div class=\"preloader\">
        <div class=\"loader\">
            <div class=\"ytp-spinner\">
                <div class=\"ytp-spinner-container\">
                    <div class=\"ytp-spinner-rotator\">
                        <div class=\"ytp-spinner-left\">
                            <div class=\"ytp-spinner-circle\"></div>
                        </div>
                        <div class=\"ytp-spinner-right\">
                            <div class=\"ytp-spinner-circle\"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    ";
        // line 39
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 40
        echo "

    <a href=\"#\" class=\"scroll-top\">
        <i class=\"lni lni-arrow-up\"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src=\"";
        // line 47
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap.bundle-5.0.0.alpha-min.js");
        echo "\"></script>
    <script src=\"";
        // line 48
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/wow.min.js");
        echo "\"></script>
    <script src=\"";
        // line 49
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/imagesloaded.min.js");
        echo "\"></script>
    <script src=\"";
        // line 50
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/main.js");
        echo "\"></script>
    ";
        // line 51
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 52
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\tcom/themes/pkurg-spacebootstrap5/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 52,  145 => 51,  141 => 50,  137 => 49,  133 => 48,  129 => 47,  120 => 40,  118 => 39,  96 => 19,  93 => 18,  89 => 17,  85 => 16,  81 => 15,  77 => 14,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html class=\"no-js\" lang=\"\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>Space Bootstrap 5 Template</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"/themes/pkurg-spacebootstrap5/assets/img/favicon.png\">
    <!-- Place favicon.ico in the root directory -->

    <!-- ========================= CSS here ========================= -->\t
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/bootstrap-5.0.0-alpha.min.css'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/LineIcons.2.0.css'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/animate.css'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/main.css'|theme }}\">
    {% styles %}
</head>
<body>            

    <div class=\"preloader\">
        <div class=\"loader\">
            <div class=\"ytp-spinner\">
                <div class=\"ytp-spinner-container\">
                    <div class=\"ytp-spinner-rotator\">
                        <div class=\"ytp-spinner-left\">
                            <div class=\"ytp-spinner-circle\"></div>
                        </div>
                        <div class=\"ytp-spinner-right\">
                            <div class=\"ytp-spinner-circle\"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    {% page %}


    <a href=\"#\" class=\"scroll-top\">
        <i class=\"lni lni-arrow-up\"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src=\"{{ 'assets/js/bootstrap.bundle-5.0.0.alpha-min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/wow.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/imagesloaded.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/main.js'|theme }}\"></script>
    {% scripts %}
</body>
</html>", "C:\\wamp64\\www\\tcom/themes/pkurg-spacebootstrap5/layouts/default.htm", "");
    }
}
