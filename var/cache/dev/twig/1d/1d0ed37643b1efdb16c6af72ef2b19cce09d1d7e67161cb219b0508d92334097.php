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

/* security/authentication.html.twig */
class __TwigTemplate_c314258c34ea080f03e357395bcb9aae8621aecd31e57a5ba5071daa64f06913 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/authentication.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/authentication.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/authentication.html.twig", 1);
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
                        <h2 class=\"white-text\">Login</h2>
                        <span class=\"white-text\">Welcome on board</span>
                        <ol class=\"breadcrumb\">
                            <li><a href=\"#!\">Home</a></li>
                            <li class=\"active\">Login</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Content-->
        <section class=\"section-padding gray-bg log-section\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-xs-12 col-sm-6 col-md-4\">
                        <div class=\"card card-panel\">
                        ";
        // line 30
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30)) {
            // line 31
            echo "                            <h3 class=\"text-extrabold\">Vous êtes déjà identifié</h3>
                        ";
        } else {
            // line 33
            echo "                            <h3 class=\"text-extrabold\">Log in to your account </h3>
                            <form action=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_authentication");
            echo "\" method=\"post\">

                                <div class=\"input-field\">
                                    <input type=\"text\" name=\"_username\"
                                           required
                                           autofocus >
                                    <label for=\"_username\">Username</label>
                                    <span class=\"help-block\">Type your user name.</span>
                                </div>
                                <div class=\"input-field\">
                                    <input type=\"password\" name=\"_password\" 
                                           required >
                                    <label for=\"_password\">Password</label>
                                    <i class=\"fa fa-eye show-password\"></i>
                                    <span class=\"help-block\">Type your password.</span>
                                </div>
                                <button type=\"submit\" class=\"btn btn-lg gradient secondary btn-block waves-effect waves-light mt-20 mb-20\">Login</button>
                                <div class=\"links\">
                                    <a href=\"#!\">Forgot your password?</a>
                                </div>
                            </form>
                        ";
        }
        // line 56
        echo "                        </div>
                    </div>

                    <div class=\"col-xs-12 col-sm-6 col-md-8\">
                        <div class=\"card card-panel ptb-70 text-center\">
                            <div class=\"promo-info\">
                                <h1 class=\"text-uppercase mb-30 text-extrabold font-30\">New to Luxury Services ?</h1>
                                <p class=\"width-60 mb-30\">Joining us is allowing our recruitment expertise and personal guidance to bring the best out in you by choosing the most suited position.</p>
                                <a href=\"/register.html\" class=\"btn btn-lg gradient secondary waves-effect waves-light mt-20\"><span>Sign-up<strong> Free</strong></span></a>
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
        return "security/authentication.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 56,  105 => 34,  102 => 33,  98 => 31,  96 => 30,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <!-- Page -->
    <div class=\"page\">

        <!-- Page Header-->
        <section class=\"page-title page-title-bg fixed-bg overlay dark-5 padding-top-160 padding-bottom-80\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h2 class=\"white-text\">Login</h2>
                        <span class=\"white-text\">Welcome on board</span>
                        <ol class=\"breadcrumb\">
                            <li><a href=\"#!\">Home</a></li>
                            <li class=\"active\">Login</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Content-->
        <section class=\"section-padding gray-bg log-section\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-xs-12 col-sm-6 col-md-4\">
                        <div class=\"card card-panel\">
                        {% if app.user %}
                            <h3 class=\"text-extrabold\">Vous êtes déjà identifié</h3>
                        {% else %}
                            <h3 class=\"text-extrabold\">Log in to your account </h3>
                            <form action=\"{{ path('security_authentication') }}\" method=\"post\">

                                <div class=\"input-field\">
                                    <input type=\"text\" name=\"_username\"
                                           required
                                           autofocus >
                                    <label for=\"_username\">Username</label>
                                    <span class=\"help-block\">Type your user name.</span>
                                </div>
                                <div class=\"input-field\">
                                    <input type=\"password\" name=\"_password\" 
                                           required >
                                    <label for=\"_password\">Password</label>
                                    <i class=\"fa fa-eye show-password\"></i>
                                    <span class=\"help-block\">Type your password.</span>
                                </div>
                                <button type=\"submit\" class=\"btn btn-lg gradient secondary btn-block waves-effect waves-light mt-20 mb-20\">Login</button>
                                <div class=\"links\">
                                    <a href=\"#!\">Forgot your password?</a>
                                </div>
                            </form>
                        {% endif %}
                        </div>
                    </div>

                    <div class=\"col-xs-12 col-sm-6 col-md-8\">
                        <div class=\"card card-panel ptb-70 text-center\">
                            <div class=\"promo-info\">
                                <h1 class=\"text-uppercase mb-30 text-extrabold font-30\">New to Luxury Services ?</h1>
                                <p class=\"width-60 mb-30\">Joining us is allowing our recruitment expertise and personal guidance to bring the best out in you by choosing the most suited position.</p>
                                <a href=\"/register.html\" class=\"btn btn-lg gradient secondary waves-effect waves-light mt-20\"><span>Sign-up<strong> Free</strong></span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>

{% endblock %}", "security/authentication.html.twig", "/shared/httpd/luxury/templates/security/authentication.html.twig");
    }
}
