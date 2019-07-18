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

/* security/registration.html.twig */
class __TwigTemplate_6c3722fb02faa3f423bd1afebf3be232d5aa366f8930a6defcfa0fbd29547ff2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/registration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/registration.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/registration.html.twig", 1);
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
        echo "<!-- Page -->
    <div class=\"page\">

        <!-- Page Header-->
        <section class=\"page-title page-title-bg fixed-bg overlay dark-5 padding-top-160 padding-bottom-80\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h2 class=\"white-text\">Register</h2>
                        <span class=\"white-text\">Welcome on board</span>
                        <ol class=\"breadcrumb\">
                            <li><a href=\"#!\">Home</a></li>
                            <li class=\"active\">Register</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>


        <!-- Page Content-->
        <section class=\"section-padding gray-bg log-section\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-6 col-sm-offset-3 card card-panel\">
                    ";
        // line 29
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29)) {
            // line 30
            echo "                        <h3 class=\"text-extrabold\">Vous êtes déjà identifié</h3>
                    ";
        } else {
            // line 32
            echo "                        <h3 class=\"text-extrabold\">Create a new account</h3>
                        ";
            // line 33
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), 'form_start');
            echo "
                            <div class=\"input-field\">
                                ";
            // line 35
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "email", [], "any", false, false, false, 35), 'row');
            echo "
                            </div>
                            <div class=\"input-field\">
                                ";
            // line 38
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "username", [], "any", false, false, false, 38), 'row');
            echo "
                            </div>
                            <div class=\"input-field\">
                                ";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "password", [], "any", false, false, false, 41), 'row');
            echo "
                                <i class=\"fa fa-eye show-password\"></i>
                            </div>
                            <div class=\"input-field\">
                                ";
            // line 45
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "confirm_password", [], "any", false, false, false, 45), 'row');
            echo "
                                <i class=\"fa fa-eye show-password\"></i>
                            </div>

                            <div class=\"checkbox\">
                                <input type=\"checkbox\" name=\"accept-terms\" value=\"1\" id=\"accept-terms\" required/>
                                <label for=\"accept-terms\">I have read and I accept the <a href=\"#!\" target=\"_blank\">Terms Of Use</a></label>
                            </div>
                            <button type=\"submit\" class=\"btn btn-lg gradient secondary btn-block waves-effect waves-light mt-20 mb-20\">Create an account</button>
                            
                            <div class=\"links\">
                                <a href=\"/login.html\">Already have an account? Click here</a>
                            </div>
                        ";
            // line 58
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), 'form_end');
            echo "
                        ";
        }
        // line 60
        echo "                    </div>
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
        return "security/registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 60,  144 => 58,  128 => 45,  121 => 41,  115 => 38,  109 => 35,  104 => 33,  101 => 32,  97 => 30,  95 => 29,  68 => 4,  58 => 3,  35 => 1,);
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
                        <h2 class=\"white-text\">Register</h2>
                        <span class=\"white-text\">Welcome on board</span>
                        <ol class=\"breadcrumb\">
                            <li><a href=\"#!\">Home</a></li>
                            <li class=\"active\">Register</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>


        <!-- Page Content-->
        <section class=\"section-padding gray-bg log-section\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-6 col-sm-offset-3 card card-panel\">
                    {% if app.user %}
                        <h3 class=\"text-extrabold\">Vous êtes déjà identifié</h3>
                    {% else %}
                        <h3 class=\"text-extrabold\">Create a new account</h3>
                        {{ form_start(form) }}
                            <div class=\"input-field\">
                                {{ form_row(form.email) }}
                            </div>
                            <div class=\"input-field\">
                                {{ form_row(form.username) }}
                            </div>
                            <div class=\"input-field\">
                                {{ form_row(form.password) }}
                                <i class=\"fa fa-eye show-password\"></i>
                            </div>
                            <div class=\"input-field\">
                                {{ form_row(form.confirm_password) }}
                                <i class=\"fa fa-eye show-password\"></i>
                            </div>

                            <div class=\"checkbox\">
                                <input type=\"checkbox\" name=\"accept-terms\" value=\"1\" id=\"accept-terms\" required/>
                                <label for=\"accept-terms\">I have read and I accept the <a href=\"#!\" target=\"_blank\">Terms Of Use</a></label>
                            </div>
                            <button type=\"submit\" class=\"btn btn-lg gradient secondary btn-block waves-effect waves-light mt-20 mb-20\">Create an account</button>
                            
                            <div class=\"links\">
                                <a href=\"/login.html\">Already have an account? Click here</a>
                            </div>
                        {{ form_end(form) }}
                        {% endif %}
                    </div>
                </div>
            </div>
        </section>

    </div>

{% endblock %}", "security/registration.html.twig", "/home/imeian/devilbox/data/www/luxury/templates/security/registration.html.twig");
    }
}
