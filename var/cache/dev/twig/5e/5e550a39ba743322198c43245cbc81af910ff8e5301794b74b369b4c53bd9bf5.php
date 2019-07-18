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

/* home/about.html.twig */
class __TwigTemplate_8112bb7f8334d0215ebbe73b7fcd9704e54eb37b6a77af474e472a611cc5cc01 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/about.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/about.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/about.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<!-- Page -->
    <div class=\"page\">

        <!-- Page Header-->
        <section class=\"page-title page-title-bg fixed-bg overlay dark-5 padding-top-160 padding-bottom-80\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h2 class=\"white-text\">Who We are</h2>
                        <span class=\"white-text\">Discover our skills & attributes</span>
                        <ol class=\"breadcrumb\">
                            <li><a href=\"#!\">Home</a></li>
                            <li class=\"active\">About us</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <!-- Page Content-->

        <section class=\"section-padding light-gray-bg\">
            <div class=\"container\">
                <div class=\"text-center mb-80\">
                    <h2 class=\"section-title text-uppercase\">About us</h2>
                    <p class=\"section-sub\">Luxury Services is a leading professional recruitment consultancy specialising in the recruitment of permanent, contract and temporary positions on behalf of the world’s top employers.</p>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"featured-item feature-icon icon-hover icon-hover-brand icon-circle icon-outline clearfix\">
                            <div class=\"icon\">
                                <i class=\"material-icons\">&#xE8E8;</i>
                            </div>
                            <div class=\"desc\">
                                <h3 class=\"text-extrabold\">Verified jobs</h3>
                                <p>Checked and sorted, our job Offer are updated regularly to offer you the best opportunities in the industry.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"featured-item feature-icon icon-hover icon-hover-brand icon-circle icon-outline clearfix\">
                            <div class=\"icon\">
                                <i class=\"material-icons\">&#xE84E;</i>
                            </div>
                            <div class=\"desc\">
                                <h3 class=\"text-extrabold\">Recruitment</h3>
                                <p>Precise and personalized, we make sure they don’t skip a step: verifying tickets, diplomas and consulting references.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"featured-item feature-icon icon-hover icon-hover-brand icon-circle icon-outline clearfix\">
                            <div class=\"icon\">
                                <i class=\"material-icons\">&#xE903;</i>
                            </div>
                            <div class=\"desc\">
                                <h3 class=\"text-extrabold\">Experienced</h3>
                                <p>We know the importance of efficiency and availability. These qualities are therefore our watchwords.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-12\">
                        <div class=\"promo-box promo-parallax mt-80 mb-80 ptb-70 text-center\">
                            <div class=\"promo-info\">
                                <h1 class=\"text-uppercase mb-30 text-extrabold font-30\">We provide customized services on demand</h1>
                                <p class=\"width-60 mb-30\">You know that attracting and retaining top talent is vital for the success of your business. It’s that end result you’re focused on – hiring a great team – and not the process to get there. This is where we can help...</p>

                                <a href=\"/contact.html\" class=\"btn btn-lg border secondary waves-effect waves-light mt-20\"><span><strong>Get in touch</strong> with us</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <p class=\"text-center mb-80\">The role of a recruitment consultancy is to act as an intermediary, identifying and sourcing suitably qualified Candidate on behalf of its Client. Candidate are recruited either for permanent or contract positions (typically for a fixed term) or on a temporary basis. Within the overall recruitment industry, the market for professional recruitment services is a specialist sector which has developed more recently.</p>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <div id=\"project-slider\" class=\"carousel slide boot-slider\" data-ride=\"carousel\">
                            <ol class=\"carousel-indicators\">
                                <li data-target=\"#project-slider\" data-slide-to=\"0\" class=\"active\"></li>
                                <li data-target=\"#project-slider\" data-slide-to=\"1\"></li>
                            </ol>

                            <div class=\"carousel-inner\" role=\"listbox\">
                                <div class=\"item active\">
                                    <img class=\"img-responsive\" src=\"../assets/img/slide1.jpg\" alt=\"\">
                                </div>
                                <div class=\"item\">
                                    <img class=\"img-responsive\" src=\"../assets/img/slide2.jpg\" alt=\"\">
                                </div>
                            </div>

                            <a class=\"left carousel-control\" href=\"#project-slider\" role=\"button\" data-slide=\"prev\">
                                <span class=\"fa fa-angle-left\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Previous</span>
                            </a>
                            <a class=\"right carousel-control\" href=\"#project-slider\" role=\"button\" data-slide=\"next\">
                                <span class=\"fa fa-angle-right\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <h3 class=\"no-margin text-extrabold\">Our philosophy</h3>
                        <p class=\"mt-20 mb-20\">
                            Luxury Services is one of the world's leading professional recruitment consultancies, specializing in the placement of Candidate in permanent, contract, temporary and interim positions with Client around the world.
                            <br>The Group has established a leading presence in many of the key markets for professional recruitment around the world and has positioned itself in certain other markets, which offer the opportunity for future growth.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"padding-top-110 padding-bottom-70 brand-bg\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-8 col-md-offset-2\">
                        <div class=\"quote-carousel text-center\">

                            <div class=\"carousel-item\">
                                <div class=\"content\">
                                    <h2 class=\"white-text line-height-40\">\"Get in touch with Luxury Services to leave the port for the season with the
                                        right crew, and a peace of mind knowing that whatever situation arises we will
                                        be there to help.\"</h2>
                                </div>
                            </div>
                            <div class=\"carousel-item\">
                                <div class=\"content\">
                                    <h2 class=\"white-text line-height-40\">\"My favorite things in life don't cost any money. It's really clear that the most precious resource we all have is time.\"</h2>
                                </div>
                            </div>
                            <div class=\"carousel-item\">
                                <div class=\"content\">
                                    <h2 class=\"white-text line-height-40\">\"My favorite things in life don't cost any money. It's really clear that the most precious resource we all have is time.\"</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}

<!-- Page -->
    <div class=\"page\">

        <!-- Page Header-->
        <section class=\"page-title page-title-bg fixed-bg overlay dark-5 padding-top-160 padding-bottom-80\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h2 class=\"white-text\">Who We are</h2>
                        <span class=\"white-text\">Discover our skills & attributes</span>
                        <ol class=\"breadcrumb\">
                            <li><a href=\"#!\">Home</a></li>
                            <li class=\"active\">About us</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <!-- Page Content-->

        <section class=\"section-padding light-gray-bg\">
            <div class=\"container\">
                <div class=\"text-center mb-80\">
                    <h2 class=\"section-title text-uppercase\">About us</h2>
                    <p class=\"section-sub\">Luxury Services is a leading professional recruitment consultancy specialising in the recruitment of permanent, contract and temporary positions on behalf of the world’s top employers.</p>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"featured-item feature-icon icon-hover icon-hover-brand icon-circle icon-outline clearfix\">
                            <div class=\"icon\">
                                <i class=\"material-icons\">&#xE8E8;</i>
                            </div>
                            <div class=\"desc\">
                                <h3 class=\"text-extrabold\">Verified jobs</h3>
                                <p>Checked and sorted, our job Offer are updated regularly to offer you the best opportunities in the industry.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"featured-item feature-icon icon-hover icon-hover-brand icon-circle icon-outline clearfix\">
                            <div class=\"icon\">
                                <i class=\"material-icons\">&#xE84E;</i>
                            </div>
                            <div class=\"desc\">
                                <h3 class=\"text-extrabold\">Recruitment</h3>
                                <p>Precise and personalized, we make sure they don’t skip a step: verifying tickets, diplomas and consulting references.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"featured-item feature-icon icon-hover icon-hover-brand icon-circle icon-outline clearfix\">
                            <div class=\"icon\">
                                <i class=\"material-icons\">&#xE903;</i>
                            </div>
                            <div class=\"desc\">
                                <h3 class=\"text-extrabold\">Experienced</h3>
                                <p>We know the importance of efficiency and availability. These qualities are therefore our watchwords.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-12\">
                        <div class=\"promo-box promo-parallax mt-80 mb-80 ptb-70 text-center\">
                            <div class=\"promo-info\">
                                <h1 class=\"text-uppercase mb-30 text-extrabold font-30\">We provide customized services on demand</h1>
                                <p class=\"width-60 mb-30\">You know that attracting and retaining top talent is vital for the success of your business. It’s that end result you’re focused on – hiring a great team – and not the process to get there. This is where we can help...</p>

                                <a href=\"/contact.html\" class=\"btn btn-lg border secondary waves-effect waves-light mt-20\"><span><strong>Get in touch</strong> with us</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <p class=\"text-center mb-80\">The role of a recruitment consultancy is to act as an intermediary, identifying and sourcing suitably qualified Candidate on behalf of its Client. Candidate are recruited either for permanent or contract positions (typically for a fixed term) or on a temporary basis. Within the overall recruitment industry, the market for professional recruitment services is a specialist sector which has developed more recently.</p>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <div id=\"project-slider\" class=\"carousel slide boot-slider\" data-ride=\"carousel\">
                            <ol class=\"carousel-indicators\">
                                <li data-target=\"#project-slider\" data-slide-to=\"0\" class=\"active\"></li>
                                <li data-target=\"#project-slider\" data-slide-to=\"1\"></li>
                            </ol>

                            <div class=\"carousel-inner\" role=\"listbox\">
                                <div class=\"item active\">
                                    <img class=\"img-responsive\" src=\"../assets/img/slide1.jpg\" alt=\"\">
                                </div>
                                <div class=\"item\">
                                    <img class=\"img-responsive\" src=\"../assets/img/slide2.jpg\" alt=\"\">
                                </div>
                            </div>

                            <a class=\"left carousel-control\" href=\"#project-slider\" role=\"button\" data-slide=\"prev\">
                                <span class=\"fa fa-angle-left\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Previous</span>
                            </a>
                            <a class=\"right carousel-control\" href=\"#project-slider\" role=\"button\" data-slide=\"next\">
                                <span class=\"fa fa-angle-right\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <h3 class=\"no-margin text-extrabold\">Our philosophy</h3>
                        <p class=\"mt-20 mb-20\">
                            Luxury Services is one of the world's leading professional recruitment consultancies, specializing in the placement of Candidate in permanent, contract, temporary and interim positions with Client around the world.
                            <br>The Group has established a leading presence in many of the key markets for professional recruitment around the world and has positioned itself in certain other markets, which offer the opportunity for future growth.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"padding-top-110 padding-bottom-70 brand-bg\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-8 col-md-offset-2\">
                        <div class=\"quote-carousel text-center\">

                            <div class=\"carousel-item\">
                                <div class=\"content\">
                                    <h2 class=\"white-text line-height-40\">\"Get in touch with Luxury Services to leave the port for the season with the
                                        right crew, and a peace of mind knowing that whatever situation arises we will
                                        be there to help.\"</h2>
                                </div>
                            </div>
                            <div class=\"carousel-item\">
                                <div class=\"content\">
                                    <h2 class=\"white-text line-height-40\">\"My favorite things in life don't cost any money. It's really clear that the most precious resource we all have is time.\"</h2>
                                </div>
                            </div>
                            <div class=\"carousel-item\">
                                <div class=\"content\">
                                    <h2 class=\"white-text line-height-40\">\"My favorite things in life don't cost any money. It's really clear that the most precious resource we all have is time.\"</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

{% endblock %}", "home/about.html.twig", "/home/imeian/devilbox/data/www/luxury/templates/home/about.html.twig");
    }
}
