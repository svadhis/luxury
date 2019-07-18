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

/* home/contact.html.twig */
class __TwigTemplate_ce187bd40363055ef16a7f009a751169e72bd064507461a439cf18dddc75b1a6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/contact.html.twig", 1);
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
                        <h2 class=\"white-text\">Feel free to contact us</h2>
                        <span class=\"white-text\">for any questions or demands</span>
                        <ol class=\"breadcrumb\">
                            <li><a href=\"#!\">Home</a></li>
                            <li class=\"active\">Contact</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <!-- Page Content-->
        <form method=\"POST\" action=\"#!\" accept-charset=\"UTF-8\" id=\"formContact\" class=\"light-gray-bg\">
            <input name=\"_token\" type=\"hidden\" value=\"\">
            <input name=\"job_id\" type=\"hidden\" value=\"\">
            <section class=\"section-padding\">
                <div class=\"container\">
                    <div class=\"text-center mb-80\">
                        <h2 class=\"section-title text-uppercase\">Drop us a line</h2>
                        <p class=\"section-sub text-center\">Whether your needs, desires or wishes are urgent or a little less, they will all be taken care of with the some efficiency by us.</p>
                    </div>

                    <div class=\"row\">
                        <div id=\"contactForm\" class=\"col-xs-12 col-sm-12 col-md-8\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"input-field\">
                                        <input required=\"required\" name=\"firstname\" type=\"text\">
                                        <label for=\"firstname\">First name</label>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"input-field\">
                                        <input required=\"required\" name=\"lastname\" type=\"text\">
                                        <label for=\"lastname\">Last name</label>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"input-field\">
                                        <input required=\"required\" name=\"email\" type=\"email\">
                                        <label for=\"email\">Email</label>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"input-field\">
                                        <input required=\"required\" name=\"phone\" type=\"tel\">
                                        <label for=\"phone\">Phone Number</label>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"input-field\">
                                        <textarea class=\"materialize-textarea\" required=\"required\" name=\"message\" cols=\"50\" rows=\"10\"></textarea>
                                        <label for=\"message\">Message</label>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-xs-12 col-md-6 col-md-offset-3\">
                                    <button type=\"submit\"
                                            name=\"submit\"
                                            class=\"btn btn-block gradient primary waves-effect waves-light submit-button\">
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-xs-12 col-sm-12 col-md-4 contact-info mt-40\">

                            <address>
                                <i class=\"material-icons brand-color\">&#xE55F;</i>
                                <div class=\"address\">
                                    <p>Luxury Services is based in Roanne, on Loire department</p>
                                </div>
                                <i class=\"material-icons brand-color\">&#xE61C;</i>
                                <div class=\"phone\">
                                    <p>+33 (0) 6 60 06 66 00</p>
                                </div>
                                <i class=\"material-icons brand-color\">&#xE916;</i>
                                <div class=\"phone\">
                                    <p>9 - 22h with 24/7 speaker</p>
                                </div>
                                <i class=\"material-icons brand-color\">&#xE0E1;</i>
                                <div class=\"mail\">
                                    <p><a href=\"#!\">georges[a]luxuryservices.com</a></p>
                                </div>
                            </address>
                        </div>
                    </div>
                </div>
            </section>
        </form>
        <div id=\"myMap\" class=\"height-350\">Gmap here</div>

    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/contact.html.twig";
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
                        <h2 class=\"white-text\">Feel free to contact us</h2>
                        <span class=\"white-text\">for any questions or demands</span>
                        <ol class=\"breadcrumb\">
                            <li><a href=\"#!\">Home</a></li>
                            <li class=\"active\">Contact</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <!-- Page Content-->
        <form method=\"POST\" action=\"#!\" accept-charset=\"UTF-8\" id=\"formContact\" class=\"light-gray-bg\">
            <input name=\"_token\" type=\"hidden\" value=\"\">
            <input name=\"job_id\" type=\"hidden\" value=\"\">
            <section class=\"section-padding\">
                <div class=\"container\">
                    <div class=\"text-center mb-80\">
                        <h2 class=\"section-title text-uppercase\">Drop us a line</h2>
                        <p class=\"section-sub text-center\">Whether your needs, desires or wishes are urgent or a little less, they will all be taken care of with the some efficiency by us.</p>
                    </div>

                    <div class=\"row\">
                        <div id=\"contactForm\" class=\"col-xs-12 col-sm-12 col-md-8\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"input-field\">
                                        <input required=\"required\" name=\"firstname\" type=\"text\">
                                        <label for=\"firstname\">First name</label>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"input-field\">
                                        <input required=\"required\" name=\"lastname\" type=\"text\">
                                        <label for=\"lastname\">Last name</label>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"input-field\">
                                        <input required=\"required\" name=\"email\" type=\"email\">
                                        <label for=\"email\">Email</label>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"input-field\">
                                        <input required=\"required\" name=\"phone\" type=\"tel\">
                                        <label for=\"phone\">Phone Number</label>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"input-field\">
                                        <textarea class=\"materialize-textarea\" required=\"required\" name=\"message\" cols=\"50\" rows=\"10\"></textarea>
                                        <label for=\"message\">Message</label>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-xs-12 col-md-6 col-md-offset-3\">
                                    <button type=\"submit\"
                                            name=\"submit\"
                                            class=\"btn btn-block gradient primary waves-effect waves-light submit-button\">
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-xs-12 col-sm-12 col-md-4 contact-info mt-40\">

                            <address>
                                <i class=\"material-icons brand-color\">&#xE55F;</i>
                                <div class=\"address\">
                                    <p>Luxury Services is based in Roanne, on Loire department</p>
                                </div>
                                <i class=\"material-icons brand-color\">&#xE61C;</i>
                                <div class=\"phone\">
                                    <p>+33 (0) 6 60 06 66 00</p>
                                </div>
                                <i class=\"material-icons brand-color\">&#xE916;</i>
                                <div class=\"phone\">
                                    <p>9 - 22h with 24/7 speaker</p>
                                </div>
                                <i class=\"material-icons brand-color\">&#xE0E1;</i>
                                <div class=\"mail\">
                                    <p><a href=\"#!\">georges[a]luxuryservices.com</a></p>
                                </div>
                            </address>
                        </div>
                    </div>
                </div>
            </section>
        </form>
        <div id=\"myMap\" class=\"height-350\">Gmap here</div>

    </div>

{% endblock %}", "home/contact.html.twig", "/shared/httpd/luxury/templates/home/contact.html.twig");
    }
}
