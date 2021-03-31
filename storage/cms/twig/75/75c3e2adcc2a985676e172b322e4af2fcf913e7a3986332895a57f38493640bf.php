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

/* C:\wamp64\www\tcom/themes/pkurg-spacebootstrap5/partials/footer.htm */
class __TwigTemplate_07d71938395f1f118161d5bf99f48445cc4a5c9800dc03302d71083f0ad199ad extends \Twig\Template
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
        $filters = array("theme" => 6);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
        echo "<footer class=\"footer pt-100\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-3 col-lg-4 col-md-6\">
                <div class=\"footer-widget mb-60 wow fadeInLeft\" data-wow-delay=\".2s\">
                    <a href=\"index.html\" class=\"logo mb-30\"><img src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo/logo.svg");
        echo "\" alt=\"logo\"></a>
                    <p class=\"mb-30 footer-desc\">We Crafted an awesome desig library that is robust and intuitive to use. No matter you're building a business presentation websit.</p>
                </div>
            </div>
            <div class=\"col-xl-2 offset-xl-1 col-lg-2 col-md-6\">
                <div class=\"footer-widget mb-60 wow fadeInUp\" data-wow-delay=\".4s\">
                    <h4>Quick Link</h4>
                    <ul class=\"footer-links\">
                        <li>
                            <a href=\"javascript:void(0)\">Home</a>
                        </li>
                        <li>
                            <a href=\"javascript:void(0)\">About Us</a>
                        </li>
                        <li>
                            <a href=\"javascript:void(0)\">Service</a>
                        </li> 
                        <li>
                            <a href=\"javascript:void(0)\">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class=\"col-xl-3 col-lg-3 col-md-6\">
                <div class=\"footer-widget mb-60 wow fadeInUp\" data-wow-delay=\".6s\">
                    <h4>Service</h4>
                    <ul class=\"footer-links\">
                        <li>
                            <a href=\"javascript:void(0)\">Marketing</a>
                        </li>
                        <li>
                            <a href=\"javascript:void(0)\">Branding</a>
                        </li>
                        <li>
                            <a href=\"javascript:void(0)\">Web Design</a>
                        </li>
                        <li>
                            <a href=\"javascript:void(0)\">Graphics Design</a>
                        </li> 
                    </ul>
                </div>
            </div>
            <div class=\"col-xl-3 col-lg-3 col-md-6\">
                <div class=\"footer-widget mb-60 wow fadeInRight\" data-wow-delay=\".8s\">
                    <h4>Contact</h4>
                    <ul class=\"footer-contact\">
                        <li>
                            <p>+00983467367234</p>
                        </li>
                        <li>
                            <p>yourmail@gmail.com</p>
                        </li>
                        <li>
                            <p>United State Of America
                            *12 Street House</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class=\"copyright-area\">
            <div class=\"row align-items-center\">
                <div class=\"col-md-6\">
                    <div class=\"footer-social-links\">
                        <ul class=\"d-flex\">
                            <li><a href=\"javascript:void(0)\"><i class=\"lni lni-facebook-filled\"></i></a></li>
                            <li><a href=\"javascript:void(0)\"><i class=\"lni lni-twitter-filled\"></i></a></li>
                            <li><a href=\"javascript:void(0)\"><i class=\"lni lni-linkedin-original\"></i></a></li>
                            <li><a href=\"javascript:void(0)\"><i class=\"lni lni-instagram-filled\"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <p class=\"wow fadeInUp\" data-wow-delay=\".3s\">Template Designed by <a
                        href=\"https://GrayGrids.com\" rel=\"nofollow\">GrayGrids</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\tcom/themes/pkurg-spacebootstrap5/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 6,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer pt-100\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-3 col-lg-4 col-md-6\">
                <div class=\"footer-widget mb-60 wow fadeInLeft\" data-wow-delay=\".2s\">
                    <a href=\"index.html\" class=\"logo mb-30\"><img src=\"{{ 'assets/img/logo/logo.svg' | theme }}\" alt=\"logo\"></a>
                    <p class=\"mb-30 footer-desc\">We Crafted an awesome desig library that is robust and intuitive to use. No matter you're building a business presentation websit.</p>
                </div>
            </div>
            <div class=\"col-xl-2 offset-xl-1 col-lg-2 col-md-6\">
                <div class=\"footer-widget mb-60 wow fadeInUp\" data-wow-delay=\".4s\">
                    <h4>Quick Link</h4>
                    <ul class=\"footer-links\">
                        <li>
                            <a href=\"javascript:void(0)\">Home</a>
                        </li>
                        <li>
                            <a href=\"javascript:void(0)\">About Us</a>
                        </li>
                        <li>
                            <a href=\"javascript:void(0)\">Service</a>
                        </li> 
                        <li>
                            <a href=\"javascript:void(0)\">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class=\"col-xl-3 col-lg-3 col-md-6\">
                <div class=\"footer-widget mb-60 wow fadeInUp\" data-wow-delay=\".6s\">
                    <h4>Service</h4>
                    <ul class=\"footer-links\">
                        <li>
                            <a href=\"javascript:void(0)\">Marketing</a>
                        </li>
                        <li>
                            <a href=\"javascript:void(0)\">Branding</a>
                        </li>
                        <li>
                            <a href=\"javascript:void(0)\">Web Design</a>
                        </li>
                        <li>
                            <a href=\"javascript:void(0)\">Graphics Design</a>
                        </li> 
                    </ul>
                </div>
            </div>
            <div class=\"col-xl-3 col-lg-3 col-md-6\">
                <div class=\"footer-widget mb-60 wow fadeInRight\" data-wow-delay=\".8s\">
                    <h4>Contact</h4>
                    <ul class=\"footer-contact\">
                        <li>
                            <p>+00983467367234</p>
                        </li>
                        <li>
                            <p>yourmail@gmail.com</p>
                        </li>
                        <li>
                            <p>United State Of America
                            *12 Street House</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class=\"copyright-area\">
            <div class=\"row align-items-center\">
                <div class=\"col-md-6\">
                    <div class=\"footer-social-links\">
                        <ul class=\"d-flex\">
                            <li><a href=\"javascript:void(0)\"><i class=\"lni lni-facebook-filled\"></i></a></li>
                            <li><a href=\"javascript:void(0)\"><i class=\"lni lni-twitter-filled\"></i></a></li>
                            <li><a href=\"javascript:void(0)\"><i class=\"lni lni-linkedin-original\"></i></a></li>
                            <li><a href=\"javascript:void(0)\"><i class=\"lni lni-instagram-filled\"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <p class=\"wow fadeInUp\" data-wow-delay=\".3s\">Template Designed by <a
                        href=\"https://GrayGrids.com\" rel=\"nofollow\">GrayGrids</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>", "C:\\wamp64\\www\\tcom/themes/pkurg-spacebootstrap5/partials/footer.htm", "");
    }
}
