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

/* C:\wamp64\www\tcom/themes/pkurg-spacebootstrap5/pages/index.htm */
class __TwigTemplate_648e32d4e6a8266cfbca6ee7fbfd0d299afab641d260caa130b7bed9a8efd527 extends \Twig\Template
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
        $tags = array("partial" => 1, "component" => 3, "set" => 85, "for" => 93, "spaceless" => 96, "if" => 97);
        $filters = array("page" => 98, "escape" => 101);
        $functions = array("range" => 155);

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'component', 'set', 'for', 'spaceless', 'if'],
                ['page', 'escape'],
                ['range']
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
        echo "
";
        // line 3
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("session"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 4
        echo "
<!-- <section id=\"home\" class=\"hero-section\">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div class=\"col-xl-5 col-lg-6\">
                <div class=\"hero-content-wrapper\">
                    <h2 class=\"mb-25 wow fadeInDown\" data-wow-delay=\".2s\">Bootstrap 5</h2>
                    <h1 class=\"mb-25 wow fadeInDown\" data-wow-delay=\".2s\">Multipurpose Website Template</h1>
                    <p class=\"mb-35 wow fadeInLeft\" data-wow-delay=\".4s\">At vero eos et accusamus et iusto odio
                    dignissimos ducimus quiblanditiis praesentium</p>
                    <a href=\"javascript:void(0)\" class=\"theme-btn\">Get Started</a>
                </div>
            </div>
            <div class=\"col-xl-7 col-lg-6\">
                <div class=\"hero-img\">
                    <div class=\"d-inline-block hero-img-right\">
                        <img src=\"/themes/pkurg-spacebootstrap5/assets/img/hero/hero-img.png\" alt=\"\" class=\"wow fadeInRight\" data-wow-delay=\".5s\">
                        <img src=\"/themes/pkurg-spacebootstrap5/assets/img/hero/dots.shape.svg\" alt=\"\" class=\"dot-shape\">
                        <div class=\"video-btn\">
                            <a href=\"https://www.youtube.com/\" class=\"glightbox\"><i class=\"lni lni-play\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- ========================= hero-section end ========================= -->

<!-- ========================= client-logo-section start ========================= -->
<!-- <section class=\"client-logo-section pt-100\">
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
</section> -->
<!-- ========================= client-logo-section end ========================= -->

<!-- ========================= feature-section start ========================= -->
<section class=\"feature-section pt-130\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-6 col-lg-7 col-md-9 mx-auto\">
                <div class=\"section-title text-center mb-55\">
                    <!-- <span class=\"wow fadeInDown\" data-wow-delay=\".2s\">TCOM</span> -->
                    <h2 class=\"wow fadeInUp\" data-wow-delay=\".4s\">The Cradle Of Mankind</h2>

                </div>

            </div>

            <h3 class=\"wow fadeInUp\" data-wow-delay=\".6s\">Click for Tweet</h3>
            <hr>
        </div>

        <div class=\"row\">

                    <!--     <h4>Responsive Design</h4>
                    <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt
                    labor dolore magna.</p>
                     -->



                        ";
        // line 85
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", [], "any", false, false, true, 85);
        // line 86
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "displayColumn", [], "any", false, false, true, 86);
        // line 87
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "noRecordsMessage", [], "any", false, false, true, 87);
        // line 88
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsPage", [], "any", false, false, true, 88);
        // line 89
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsKeyColumn", [], "any", false, false, true, 89);
        // line 90
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsUrlParameter", [], "any", false, false, true, 90);
        // line 91
        echo "

    ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 94
            echo "
            ";
            // line 96
            echo "            ";
            ob_start();
            // line 97
            echo "                ";
            if (($context["detailsPage"] ?? null)) {
                // line 98
                echo "                    <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(($context["detailsPage"] ?? null), 98, $this->source), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, true, 98)]);
                echo "\">
                ";
            }
            // line 100
            echo "
                <!-- ";
            // line 101
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
            echo " -->




                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"feature-box box-style\">


                        <div class=\"box-content-style feature-content\">
                            <h4>";
            // line 111
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
            echo "</h4>
                            <p>";
            // line 112
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "content", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
            echo "</p>
                            ";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "mentions", [], "any", false, false, true, 113));
            foreach ($context['_seq'] as $context["_key"] => $context["mns"]) {
                // line 114
                echo "
                      ";
                // line 115
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["mns"], "mention", [], "any", false, false, true, 115), 115, $this->source), "html", null, true);
                echo " <br>

                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mns'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "                        </div>
                        <!-- ";
            // line 119
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "images", [], "any", false, false, true, 119));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 120
                echo "
                          <img src = \"";
                // line 121
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "thmb", [0 => 80, 1 => 80, 2 => ["mode" => "crop"]], "method", false, false, true, 121), 121, $this->source), "html", null, true);
                echo "\"

                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo " -->

                        <!-- <div class=\"feature-icon box-icon-style\">
                            <i class=\"lni lni-twitter\"></i>
  </div> -->
                        <a href=\"https://twitter.com/share\" class=\"twitter-share-button\" data-url=\"http://tcom.com\" data-text = \"";
            // line 128
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "content", [], "any", false, false, true, 128), 128, $this->source), "html", null, true);
            echo "\">Tweet</a>
                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=\"//platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");</script>

                    </div>
                </div>






                ";
            // line 139
            if (($context["detailsPage"] ?? null)) {
                // line 140
                echo "                    </a>
                ";
            }
            // line 142
            echo "            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 143
            echo "
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 145
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["noRecordsMessage"] ?? null), 145, $this->source), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "

";
        // line 149
        if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 149) > 1)) {
            // line 150
            echo "    <ul class=\"pagination\">
        ";
            // line 151
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 151) > 1)) {
                // line 152
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 152), "baseFileName", [], "any", false, false, true, 152), 152, $this->source), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 152) - 1)]);
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 154
            echo "
        ";
            // line 155
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 155)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 156
                echo "            <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 156) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 157
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 157), "baseFileName", [], "any", false, false, true, 157), 157, $this->source), [($context["pageParam"] ?? null) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 157, $this->source), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 160
            echo "
        ";
            // line 161
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 161) > twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 161))) {
                // line 162
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 162), "baseFileName", [], "any", false, false, true, 162), 162, $this->source), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 162) + 1)]);
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 164
            echo "    </ul>
";
        }
        // line 166
        echo "




<!--
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"feature-box box-style\">
                    <div class=\"feature-icon box-icon-style\">
                        <i class=\"lni lni-code-alt\"></i>
                    </div>
                    <div class=\"box-content-style feature-content\">
                        <h4>Web Development</h4>
                        <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt
                        labor dolore magna.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"feature-box box-style\">
                    <div class=\"feature-icon box-icon-style\">
                        <i class=\"lni lni-agenda\"></i>
                    </div>
                    <div class=\"box-content-style feature-content\">
                        <h4>Business Analysis</h4>
                        <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt
                        labor dolore magna.</p>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>
<!-- ========================= feature-section end ========================= -->

<!--========================= about-section start========================= -->
<section id=\"about\" class=\"pt-100\">
    <div class=\"about-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-6 col-lg-6\">
                    <div class=\"about-img-wrapper\">
                        <div class=\"about-img position-relative d-inline-block wow fadeInLeft\" data-wow-delay=\".3s\">
                            <img src=\"/themes/pkurg-spacebootstrap5/assets/img/about/about-img.png\" alt=\"\">

                            <div class=\"about-experience\">
                                <h3>5 Year Of Working Experience</h3>
                                <p>We Crafted an aweso design library that is robust and intuitive to use.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-6 col-lg-6\">
                    <div class=\"about-content-wrapper\">
                        <div class=\"section-title\">
                            <span class=\"wow fadeInUp\" data-wow-delay=\".2s\">About Us</span>
                            <h2 class=\"mb-40 wow fadeInRight\" data-wow-delay=\".4s\">Built-With Boostrap 5, a New Experiance</h2>
                        </div>
                        <div class=\"about-content\">
                            <p class=\"mb-45 wow fadeInUp\" data-wow-delay=\".6s\">We Crafted an awesome design library
                                that is robust and intuitive to use. No matter you're building a business
                            presentation websit or a complex web application our design</p>
                            <div class=\"counter-up wow fadeInUp\" data-wow-delay=\".5s\">
                                <div class=\"counter\">
                                    <span id=\"secondo\" class=\"countup count color-1\" cup-end=\"30\" cup-append=\"k\">10</span>
                                    <h4>Happy Client</h4>
                                    <p>We Crafted an awesome design <br class=\"d-none d-md-block d-lg-none d-xl-block\"> library that is robust and</p>
                                </div>
                                <div class=\"counter\">
                                    <span id=\"secondo\" class=\"countup count color-2\" cup-end=\"42\" cup-append=\"k\">5</span>
                                    <h4>Project Done</h4>
                                    <p>We Crafted an awesome design <br class=\"d-none d-md-block d-lg-none d-xl-block\"> library that is robust and</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--========================= about-section end========================= -->

<!-- ========================= service-section start ========================= -->
<section id=\"service\" class=\"service-section pt-130 pb-80\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-6 col-lg-7 col-md-9 mx-auto\">
                <div class=\"section-title text-center mb-55\">
                    <span class=\"wow fadeInDown\" data-wow-delay=\".2s\">Services</span>
                    <h2 class=\"wow fadeInUp\" data-wow-delay=\".4s\">Our Best Services</h2>
                    <p class=\"wow fadeInUp\" data-wow-delay=\".6s\">At vero eos et accusamus et iusto odio
                    dignissimos ducimus quiblanditiis praesentium</p>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"service-box box-style\">
                    <div class=\"service-icon box-icon-style\">
                        <i class=\"lni lni-capsule\"></i>
                    </div>
                    <div class=\"box-content-style service-content\">
                        <h4>Refreshing Design</h4>
                        <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt
                        labor dolore magna.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"service-box box-style\">
                    <div class=\"service-icon box-icon-style\">
                        <i class=\"lni lni-bootstrap\"></i>
                    </div>
                    <div class=\"box-content-style service-content\">
                        <h4>Solid Bootstrap 5</h4>
                        <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt
                        labor dolore magna.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"service-box box-style\">
                    <div class=\"service-icon box-icon-style\">
                        <i class=\"lni lni-shortcode\"></i>
                    </div>
                    <div class=\"box-content-style service-content\">
                        <h4>100+ Components</h4>
                        <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt
                        labor dolore magna.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"service-box box-style\">
                    <div class=\"service-icon box-icon-style\">
                        <i class=\"lni lni-dashboard\"></i>
                    </div>
                    <div class=\"box-content-style service-content\">
                        <h4>Speed Optimized</h4>
                        <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt
                        labor dolore magna.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"service-box box-style\">
                    <div class=\"service-icon box-icon-style\">
                        <i class=\"lni lni-layers\"></i>
                    </div>
                    <div class=\"box-content-style service-content\">
                        <h4>Fully Customizable</h4>
                        <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt
                        labor dolore magna.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"service-box box-style\">
                    <div class=\"service-icon box-icon-style\">
                        <i class=\"lni lni-reload\"></i>
                    </div>
                    <div class=\"box-content-style service-content\">
                        <h4>Regular Updates</h4>
                        <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt
                        labor dolore magna.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========================= service-section end ========================= -->

<section id=\"contact\" class=\"contact-section cta-bg img-bg pt-110 pb-100\" style=\"background-image: url('/themes/pkurg-spacebootstrap5/assets/img/bg/cta-bg.jpg');\">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div class=\"col-xl-5 col-lg-7\">
                <div class=\"section-title mb-60\">
                    <span class=\"text-white wow fadeInDown\" data-wow-delay=\".2s\" style=\"visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;\">Space Free Lite</span>
                    <h2 class=\"text-white wow fadeInUp\" data-wow-delay=\".4s\" style=\"visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;\">You are using free lite version of Space</h2>
                    <p class=\"text-white wow fadeInUp\" data-wow-delay=\".6s\" style=\"visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;\">Please, purchase full version of the template to get all pages, features and commercial license</p>
                </div>
            </div>
            <div class=\"col-xl-7 col-lg-5\">
                <div class=\"contact-btn text-left text-lg-right\">
                    <a href=\"https://rebrand.ly/space-gg\" rel=\"nofollow\" class=\"theme-btn\">Purchase Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========================= pricing-section start ========================= -->
<section id=\"pricing\" class=\"pricing-section pt-140 pb-100\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-6 col-lg-7 col-md-10 mx-auto\">
                <div class=\"section-title text-center mb-60\">
                    <span class=\"wow fadeInDown\" data-wow-delay=\".2s\">Price</span>
                    <h2 class=\"wow fadeInUp\" data-wow-delay=\".4s\">Our Pricing Plan</h2>
                    <p class=\"wow fadeInUp\" data-wow-delay=\".6s\">At vero eos et accusamus et iusto odio
                    dignissimos ducimus quiblanditiis praesentium</p>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-xl-12\">
                <div class=\"pricing-btn text-center wow fadeInUp\" data-wow-delay=\".3s\">
                    <ul class=\"nav justify-content-center mb-90\" id=\"pills-tab\" role=\"tablist\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" id=\"pills-1-tab\" data-toggle=\"pill\" href=\"#pills-1\" role=\"tab\"
                            aria-controls=\"pills-1\" aria-selected=\"true\">Monthly</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"pills-2-tab\" data-toggle=\"pill\" href=\"#pills-2\" role=\"tab\"
                            aria-controls=\"pills-2\" aria-selected=\"false\">Yearly</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"tab-content\" id=\"pills-tabContent\">
            <div class=\"tab-pane fade show active\" id=\"pills-1\" role=\"tabpanel\" aria-labelledby=\"pills-home-tab\">
                <div class=\"row\">
                    <div class=\"col-xl-4 col-lg-4 col-md-6\">
                        <div class=\"single-pricing mb-50\">
                            <h4>Basic</h4>
                            <h3>\$15.00</h3>
                            <ul>
                                <li>10 Users</li>
                                <li>Minimal Report</li>
                                <li>100MB Data Storage</li>
                                <li>No Support</li>
                                <li>Single Agent</li>
                            </ul>
                            <a href=\"javascript:void(0)\" class=\"theme-btn border-btn\">Purchase Now</a>
                            <p>No Extra Hidden Charge</p>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-lg-4 col-md-6\">
                        <div class=\"single-pricing active mb-50\">
                            <h4>Standard</h4>
                            <h3>\$25.99</h3>
                            <ul>
                                <li>30 Users</li>
                                <li>Minimal Report</li>
                                <li>1GB Data Storage</li>
                                <li>7/24 Support</li>
                                <li>Multiple Agents</li>
                            </ul>
                            <a href=\"javascript:void(0)\" class=\"theme-btn\">Purchase Now</a>
                            <p>No Extra Hidden Charge</p>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-lg-4 col-md-6\">
                        <div class=\"single-pricing mb-50\">
                            <h4>Premium</h4>
                            <h3>\$220.00</h3>
                            <ul>
                                <li>Unlimited Users</li>
                                <li>Full Report</li>
                                <li>Unlimited Data Storage</li>
                                <li>7/24 Support</li>
                                <li>Multiple Agents</li>
                            </ul>
                            <a href=\"javascript:void(0)\" class=\"theme-btn border-btn\">Purchase Now</a>
                            <p>No Extra Hidden Charge</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"tab-pane fade\" id=\"pills-2\" role=\"tabpanel\" aria-labelledby=\"pills-2-tab\">
                <div class=\"row\">
                    <div class=\"col-xl-4 col-lg-4 col-md-6\">
                        <div class=\"single-pricing mb-50\">
                            <h4>Basic</h4>
                            <h3>\$15.00</h3>
                            <ul>
                                <li>10 Users</li>
                                <li>Minimal Report</li>
                                <li>100MB Data Storage</li>
                                <li>No Support</li>
                                <li>Single Agent</li>
                            </ul>
                            <a href=\"javascript:void(0)\" class=\"theme-btn border-btn\">Purchase Now</a>
                            <p>No Extra Hidden Charge</p>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-lg-4 col-md-6\">
                        <div class=\"single-pricing active mb-50\">
                            <h4>Standard</h4>
                            <h3>\$25.99</h3>
                            <ul>
                                <li>30 Users</li>
                                <li>Minimal Report</li>
                                <li>1GB Data Storage</li>
                                <li>7/24 Support</li>
                                <li>Multiple Agents</li>
                            </ul>
                            <a href=\"javascript:void(0)\" class=\"theme-btn\">Purchase Now</a>
                            <p>No Extra Hidden Charge</p>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-lg-4 col-md-6\">
                        <div class=\"single-pricing mb-50\">
                            <h4>Premium</h4>
                            <h3>\$220.00</h3>
                            <ul>
                                <li>Unlimited Users</li>
                                <li>Full Report</li>
                                <li>Unlimited Data Storage</li>
                                <li>7/24 Support</li>
                                <li>Multiple Agents</li>
                            </ul>
                            <a href=\"javascript:void(0)\" class=\"theme-btn border-btn\">Purchase Now</a>
                            <p>No Extra Hidden Charge</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- ========================= pricing-section end ========================= -->


<!-- ========================= subscribe-section start ========================= -->
<section class=\"subscribe-section pt-70 pb-70 img-bg\" style=\"background-image: url('/themes/pkurg-spacebootstrap5/assets/img/bg/common-bg.svg ')\">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div class=\"col-xl-6 col-lg-6\">
                <div class=\"section-title mb-30\">
                    <span class=\"text-white wow fadeInDown\" data-wow-delay=\".2s\">Subscribe</span>
                    <h2 class=\"text-white mb-40 wow fadeInUp\" data-wow-delay=\".4s\">Subscribe Our Newsletter</h2>
                </div>
            </div>
            <div class=\"col-xl-6 col-lg-6\">
                <form action=\"#\" class=\"subscribe-form wow fadeInRight\" data-wow-delay=\".4s\">
                    <input type=\"text\" name=\"subs-email\" id=\"subs-email\" placeholder=\"Your Email\">
                    <button type=\"submit\"><i class=\"lni lni-telegram-original\"></i></button>
                </form>
            </div>
        </div>
    </div>
</section>

";
        // line 516
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\tcom/themes/pkurg-spacebootstrap5/pages/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  703 => 516,  351 => 166,  347 => 164,  341 => 162,  339 => 161,  336 => 160,  325 => 157,  320 => 156,  316 => 155,  313 => 154,  307 => 152,  305 => 151,  302 => 150,  300 => 149,  296 => 147,  287 => 145,  281 => 143,  278 => 142,  274 => 140,  272 => 139,  258 => 128,  251 => 123,  242 => 121,  239 => 120,  235 => 119,  232 => 118,  223 => 115,  220 => 114,  216 => 113,  212 => 112,  208 => 111,  195 => 101,  192 => 100,  186 => 98,  183 => 97,  180 => 96,  177 => 94,  172 => 93,  168 => 91,  166 => 90,  164 => 89,  162 => 88,  160 => 87,  158 => 86,  156 => 85,  73 => 4,  69 => 3,  66 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'header' %}

{% component 'session' %}

<!-- <section id=\"home\" class=\"hero-section\">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div class=\"col-xl-5 col-lg-6\">
                <div class=\"hero-content-wrapper\">
                    <h2 class=\"mb-25 wow fadeInDown\" data-wow-delay=\".2s\">Bootstrap 5</h2>
                    <h1 class=\"mb-25 wow fadeInDown\" data-wow-delay=\".2s\">Multipurpose Website Template</h1>
                    <p class=\"mb-35 wow fadeInLeft\" data-wow-delay=\".4s\">At vero eos et accusamus et iusto odio
                    dignissimos ducimus quiblanditiis praesentium</p>
                    <a href=\"javascript:void(0)\" class=\"theme-btn\">Get Started</a>
                </div>
            </div>
            <div class=\"col-xl-7 col-lg-6\">
                <div class=\"hero-img\">
                    <div class=\"d-inline-block hero-img-right\">
                        <img src=\"/themes/pkurg-spacebootstrap5/assets/img/hero/hero-img.png\" alt=\"\" class=\"wow fadeInRight\" data-wow-delay=\".5s\">
                        <img src=\"/themes/pkurg-spacebootstrap5/assets/img/hero/dots.shape.svg\" alt=\"\" class=\"dot-shape\">
                        <div class=\"video-btn\">
                            <a href=\"https://www.youtube.com/\" class=\"glightbox\"><i class=\"lni lni-play\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- ========================= hero-section end ========================= -->

<!-- ========================= client-logo-section start ========================= -->
<!-- <section class=\"client-logo-section pt-100\">
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
</section> -->
<!-- ========================= client-logo-section end ========================= -->

<!-- ========================= feature-section start ========================= -->
<section class=\"feature-section pt-130\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-6 col-lg-7 col-md-9 mx-auto\">
                <div class=\"section-title text-center mb-55\">
                    <!-- <span class=\"wow fadeInDown\" data-wow-delay=\".2s\">TCOM</span> -->
                    <h2 class=\"wow fadeInUp\" data-wow-delay=\".4s\">The Cradle Of Mankind</h2>

                </div>

            </div>

            <h3 class=\"wow fadeInUp\" data-wow-delay=\".6s\">Click for Tweet</h3>
            <hr>
        </div>

        <div class=\"row\">

                    <!--     <h4>Responsive Design</h4>
                    <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt
                    labor dolore magna.</p>
                     -->



                        {% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}


    {% for record in records %}

            {# Use spaceless tag to remove spaces inside the A tag. #}
            {% spaceless %}
                {% if detailsPage %}
                    <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">
                {% endif %}

                <!-- {{record.title }} -->




                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"feature-box box-style\">


                        <div class=\"box-content-style feature-content\">
                            <h4>{{record.title}}</h4>
                            <p>{{record.content}}</p>
                            {% for mns in record.mentions %}

                      {{mns.mention}} <br>

                            {% endfor %}
                        </div>
                        <!-- {% for image in record.images %}

                          <img src = \"{{image.thmb(80,80,{'mode':'crop'})}}\"

                        {% endfor %} -->

                        <!-- <div class=\"feature-icon box-icon-style\">
                            <i class=\"lni lni-twitter\"></i>
  </div> -->
                        <a href=\"https://twitter.com/share\" class=\"twitter-share-button\" data-url=\"http://tcom.com\" data-text = \"{{record.content}}\">Tweet</a>
                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=\"//platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");</script>

                    </div>
                </div>






                {% if detailsPage %}
                    </a>
                {% endif %}
            {% endspaceless %}

    {% else %}
        <li class=\"no-data\">{{ noRecordsMessage }}</li>
    {% endfor %}


{% if records.lastPage > 1 %}
    <ul class=\"pagination\">
        {% if records.currentPage > 1 %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage-1) }) }}\">&larr; Prev</a></li>
        {% endif %}

        {% for page in 1..records.lastPage %}
            <li class=\"{{ records.currentPage == page ? 'active' : null }}\">
                <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
            </li>
        {% endfor %}

        {% if records.lastPage > records.currentPage %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage+1) }) }}\">Next &rarr;</a></li>
        {% endif %}
    </ul>
{% endif %}





<!--
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"feature-box box-style\">
                    <div class=\"feature-icon box-icon-style\">
                        <i class=\"lni lni-code-alt\"></i>
                    </div>
                    <div class=\"box-content-style feature-content\">
                        <h4>Web Development</h4>
                        <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt
                        labor dolore magna.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"feature-box box-style\">
                    <div class=\"feature-icon box-icon-style\">
                        <i class=\"lni lni-agenda\"></i>
                    </div>
                    <div class=\"box-content-style feature-content\">
                        <h4>Business Analysis</h4>
                        <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt
                        labor dolore magna.</p>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>
<!-- ========================= feature-section end ========================= -->

<!--========================= about-section start========================= -->
<section id=\"about\" class=\"pt-100\">
    <div class=\"about-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-6 col-lg-6\">
                    <div class=\"about-img-wrapper\">
                        <div class=\"about-img position-relative d-inline-block wow fadeInLeft\" data-wow-delay=\".3s\">
                            <img src=\"/themes/pkurg-spacebootstrap5/assets/img/about/about-img.png\" alt=\"\">

                            <div class=\"about-experience\">
                                <h3>5 Year Of Working Experience</h3>
                                <p>We Crafted an aweso design library that is robust and intuitive to use.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-6 col-lg-6\">
                    <div class=\"about-content-wrapper\">
                        <div class=\"section-title\">
                            <span class=\"wow fadeInUp\" data-wow-delay=\".2s\">About Us</span>
                            <h2 class=\"mb-40 wow fadeInRight\" data-wow-delay=\".4s\">Built-With Boostrap 5, a New Experiance</h2>
                        </div>
                        <div class=\"about-content\">
                            <p class=\"mb-45 wow fadeInUp\" data-wow-delay=\".6s\">We Crafted an awesome design library
                                that is robust and intuitive to use. No matter you're building a business
                            presentation websit or a complex web application our design</p>
                            <div class=\"counter-up wow fadeInUp\" data-wow-delay=\".5s\">
                                <div class=\"counter\">
                                    <span id=\"secondo\" class=\"countup count color-1\" cup-end=\"30\" cup-append=\"k\">10</span>
                                    <h4>Happy Client</h4>
                                    <p>We Crafted an awesome design <br class=\"d-none d-md-block d-lg-none d-xl-block\"> library that is robust and</p>
                                </div>
                                <div class=\"counter\">
                                    <span id=\"secondo\" class=\"countup count color-2\" cup-end=\"42\" cup-append=\"k\">5</span>
                                    <h4>Project Done</h4>
                                    <p>We Crafted an awesome design <br class=\"d-none d-md-block d-lg-none d-xl-block\"> library that is robust and</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--========================= about-section end========================= -->

<!-- ========================= service-section start ========================= -->
<section id=\"service\" class=\"service-section pt-130 pb-80\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-6 col-lg-7 col-md-9 mx-auto\">
                <div class=\"section-title text-center mb-55\">
                    <span class=\"wow fadeInDown\" data-wow-delay=\".2s\">Services</span>
                    <h2 class=\"wow fadeInUp\" data-wow-delay=\".4s\">Our Best Services</h2>
                    <p class=\"wow fadeInUp\" data-wow-delay=\".6s\">At vero eos et accusamus et iusto odio
                    dignissimos ducimus quiblanditiis praesentium</p>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"service-box box-style\">
                    <div class=\"service-icon box-icon-style\">
                        <i class=\"lni lni-capsule\"></i>
                    </div>
                    <div class=\"box-content-style service-content\">
                        <h4>Refreshing Design</h4>
                        <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt
                        labor dolore magna.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"service-box box-style\">
                    <div class=\"service-icon box-icon-style\">
                        <i class=\"lni lni-bootstrap\"></i>
                    </div>
                    <div class=\"box-content-style service-content\">
                        <h4>Solid Bootstrap 5</h4>
                        <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt
                        labor dolore magna.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"service-box box-style\">
                    <div class=\"service-icon box-icon-style\">
                        <i class=\"lni lni-shortcode\"></i>
                    </div>
                    <div class=\"box-content-style service-content\">
                        <h4>100+ Components</h4>
                        <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt
                        labor dolore magna.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"service-box box-style\">
                    <div class=\"service-icon box-icon-style\">
                        <i class=\"lni lni-dashboard\"></i>
                    </div>
                    <div class=\"box-content-style service-content\">
                        <h4>Speed Optimized</h4>
                        <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt
                        labor dolore magna.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"service-box box-style\">
                    <div class=\"service-icon box-icon-style\">
                        <i class=\"lni lni-layers\"></i>
                    </div>
                    <div class=\"box-content-style service-content\">
                        <h4>Fully Customizable</h4>
                        <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt
                        labor dolore magna.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"service-box box-style\">
                    <div class=\"service-icon box-icon-style\">
                        <i class=\"lni lni-reload\"></i>
                    </div>
                    <div class=\"box-content-style service-content\">
                        <h4>Regular Updates</h4>
                        <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt
                        labor dolore magna.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========================= service-section end ========================= -->

<section id=\"contact\" class=\"contact-section cta-bg img-bg pt-110 pb-100\" style=\"background-image: url('/themes/pkurg-spacebootstrap5/assets/img/bg/cta-bg.jpg');\">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div class=\"col-xl-5 col-lg-7\">
                <div class=\"section-title mb-60\">
                    <span class=\"text-white wow fadeInDown\" data-wow-delay=\".2s\" style=\"visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;\">Space Free Lite</span>
                    <h2 class=\"text-white wow fadeInUp\" data-wow-delay=\".4s\" style=\"visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;\">You are using free lite version of Space</h2>
                    <p class=\"text-white wow fadeInUp\" data-wow-delay=\".6s\" style=\"visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;\">Please, purchase full version of the template to get all pages, features and commercial license</p>
                </div>
            </div>
            <div class=\"col-xl-7 col-lg-5\">
                <div class=\"contact-btn text-left text-lg-right\">
                    <a href=\"https://rebrand.ly/space-gg\" rel=\"nofollow\" class=\"theme-btn\">Purchase Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========================= pricing-section start ========================= -->
<section id=\"pricing\" class=\"pricing-section pt-140 pb-100\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-6 col-lg-7 col-md-10 mx-auto\">
                <div class=\"section-title text-center mb-60\">
                    <span class=\"wow fadeInDown\" data-wow-delay=\".2s\">Price</span>
                    <h2 class=\"wow fadeInUp\" data-wow-delay=\".4s\">Our Pricing Plan</h2>
                    <p class=\"wow fadeInUp\" data-wow-delay=\".6s\">At vero eos et accusamus et iusto odio
                    dignissimos ducimus quiblanditiis praesentium</p>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-xl-12\">
                <div class=\"pricing-btn text-center wow fadeInUp\" data-wow-delay=\".3s\">
                    <ul class=\"nav justify-content-center mb-90\" id=\"pills-tab\" role=\"tablist\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" id=\"pills-1-tab\" data-toggle=\"pill\" href=\"#pills-1\" role=\"tab\"
                            aria-controls=\"pills-1\" aria-selected=\"true\">Monthly</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"pills-2-tab\" data-toggle=\"pill\" href=\"#pills-2\" role=\"tab\"
                            aria-controls=\"pills-2\" aria-selected=\"false\">Yearly</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"tab-content\" id=\"pills-tabContent\">
            <div class=\"tab-pane fade show active\" id=\"pills-1\" role=\"tabpanel\" aria-labelledby=\"pills-home-tab\">
                <div class=\"row\">
                    <div class=\"col-xl-4 col-lg-4 col-md-6\">
                        <div class=\"single-pricing mb-50\">
                            <h4>Basic</h4>
                            <h3>\$15.00</h3>
                            <ul>
                                <li>10 Users</li>
                                <li>Minimal Report</li>
                                <li>100MB Data Storage</li>
                                <li>No Support</li>
                                <li>Single Agent</li>
                            </ul>
                            <a href=\"javascript:void(0)\" class=\"theme-btn border-btn\">Purchase Now</a>
                            <p>No Extra Hidden Charge</p>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-lg-4 col-md-6\">
                        <div class=\"single-pricing active mb-50\">
                            <h4>Standard</h4>
                            <h3>\$25.99</h3>
                            <ul>
                                <li>30 Users</li>
                                <li>Minimal Report</li>
                                <li>1GB Data Storage</li>
                                <li>7/24 Support</li>
                                <li>Multiple Agents</li>
                            </ul>
                            <a href=\"javascript:void(0)\" class=\"theme-btn\">Purchase Now</a>
                            <p>No Extra Hidden Charge</p>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-lg-4 col-md-6\">
                        <div class=\"single-pricing mb-50\">
                            <h4>Premium</h4>
                            <h3>\$220.00</h3>
                            <ul>
                                <li>Unlimited Users</li>
                                <li>Full Report</li>
                                <li>Unlimited Data Storage</li>
                                <li>7/24 Support</li>
                                <li>Multiple Agents</li>
                            </ul>
                            <a href=\"javascript:void(0)\" class=\"theme-btn border-btn\">Purchase Now</a>
                            <p>No Extra Hidden Charge</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"tab-pane fade\" id=\"pills-2\" role=\"tabpanel\" aria-labelledby=\"pills-2-tab\">
                <div class=\"row\">
                    <div class=\"col-xl-4 col-lg-4 col-md-6\">
                        <div class=\"single-pricing mb-50\">
                            <h4>Basic</h4>
                            <h3>\$15.00</h3>
                            <ul>
                                <li>10 Users</li>
                                <li>Minimal Report</li>
                                <li>100MB Data Storage</li>
                                <li>No Support</li>
                                <li>Single Agent</li>
                            </ul>
                            <a href=\"javascript:void(0)\" class=\"theme-btn border-btn\">Purchase Now</a>
                            <p>No Extra Hidden Charge</p>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-lg-4 col-md-6\">
                        <div class=\"single-pricing active mb-50\">
                            <h4>Standard</h4>
                            <h3>\$25.99</h3>
                            <ul>
                                <li>30 Users</li>
                                <li>Minimal Report</li>
                                <li>1GB Data Storage</li>
                                <li>7/24 Support</li>
                                <li>Multiple Agents</li>
                            </ul>
                            <a href=\"javascript:void(0)\" class=\"theme-btn\">Purchase Now</a>
                            <p>No Extra Hidden Charge</p>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-lg-4 col-md-6\">
                        <div class=\"single-pricing mb-50\">
                            <h4>Premium</h4>
                            <h3>\$220.00</h3>
                            <ul>
                                <li>Unlimited Users</li>
                                <li>Full Report</li>
                                <li>Unlimited Data Storage</li>
                                <li>7/24 Support</li>
                                <li>Multiple Agents</li>
                            </ul>
                            <a href=\"javascript:void(0)\" class=\"theme-btn border-btn\">Purchase Now</a>
                            <p>No Extra Hidden Charge</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- ========================= pricing-section end ========================= -->


<!-- ========================= subscribe-section start ========================= -->
<section class=\"subscribe-section pt-70 pb-70 img-bg\" style=\"background-image: url('/themes/pkurg-spacebootstrap5/assets/img/bg/common-bg.svg ')\">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div class=\"col-xl-6 col-lg-6\">
                <div class=\"section-title mb-30\">
                    <span class=\"text-white wow fadeInDown\" data-wow-delay=\".2s\">Subscribe</span>
                    <h2 class=\"text-white mb-40 wow fadeInUp\" data-wow-delay=\".4s\">Subscribe Our Newsletter</h2>
                </div>
            </div>
            <div class=\"col-xl-6 col-lg-6\">
                <form action=\"#\" class=\"subscribe-form wow fadeInRight\" data-wow-delay=\".4s\">
                    <input type=\"text\" name=\"subs-email\" id=\"subs-email\" placeholder=\"Your Email\">
                    <button type=\"submit\"><i class=\"lni lni-telegram-original\"></i></button>
                </form>
            </div>
        </div>
    </div>
</section>

{% partial 'footer' %}", "C:\\wamp64\\www\\tcom/themes/pkurg-spacebootstrap5/pages/index.htm", "");
    }
}
