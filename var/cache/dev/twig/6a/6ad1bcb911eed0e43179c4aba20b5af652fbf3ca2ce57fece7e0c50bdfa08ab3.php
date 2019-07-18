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

/* offer/public_show.html.twig */
class __TwigTemplate_3c6fe34fb0b5cc01e01cb60f30de6361d00a7e6a35254835ebac6a7bedaab92b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offer/public_show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offer/public_show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "offer/public_show.html.twig", 1);
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
                        <h2 class=\"white-text\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 13, $this->source); })()), "title", [], "any", false, false, false, 13), "html", null, true);
        echo "</h2>
                        <span class=\"white-text\">Ref. ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 14, $this->source); })()), "reference", [], "any", false, false, false, 14), "html", null, true);
        echo "</span>
                        <ol class=\"breadcrumb\">
                            <li>
                                <div class=\"portfolio-nav\">
                                    ";
        // line 18
        if (((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 18, $this->source); })()) > 0)) {
            // line 19
            echo "                                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_offer_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["offers"]) || array_key_exists("offers", $context) ? $context["offers"] : (function () { throw new RuntimeError('Variable "offers" does not exist.', 19, $this->source); })()), ((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 19, $this->source); })()) - 1), [], "array", false, false, false, 19), "id", [], "any", false, false, false, 19)]), "html", null, true);
            echo "\" class=\"waves-effect waves-dark\"><i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i> Prev</a>
                                    ";
        }
        // line 21
        echo "                                    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offer_public_index");
        echo "\" class=\"waves-effect waves-dark\"><i class=\"fa fa-th-large\" aria-hidden=\"true\"></i></a>
                                    ";
        // line 22
        if ((((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 22, $this->source); })()) + 1) < twig_length_filter($this->env, (isset($context["offers"]) || array_key_exists("offers", $context) ? $context["offers"] : (function () { throw new RuntimeError('Variable "offers" does not exist.', 22, $this->source); })())))) {
            // line 23
            echo "                                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_offer_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["offers"]) || array_key_exists("offers", $context) ? $context["offers"] : (function () { throw new RuntimeError('Variable "offers" does not exist.', 23, $this->source); })()), ((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 23, $this->source); })()) + 1), [], "array", false, false, false, 23), "id", [], "any", false, false, false, 23)]), "html", null, true);
            echo "\" class=\"waves-effect waves-dark\">Next<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a>
                                    ";
        }
        // line 25
        echo "                                    </div>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <!-- Page Content-->
        <section class=\"single-project-section section-padding light-gray-bg\">
            <div class=\"container\">
                <div class=\"project-overview\">
                    <div class=\"row mb-80\">
                        <div class=\"col-xs-12 col-md-8\">
                            <p class=\"ref grey-text no-margin\">Ref. ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 39, $this->source); })()), "reference", [], "any", false, false, false, 39), "html", null, true);
        echo "</p>
                            <h2>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 40, $this->source); })()), "title", [], "any", false, false, false, 40), "html", null, true);
        echo "</h2>
                            <p>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 41, $this->source); })()), "description", [], "any", false, false, false, 41), "html", null, true);
        echo "</p>
                        </div>

                        <div class=\"col-xs-12 col-md-4 quick-overview\">
                            <ul class=\"portfolio-meta\">
                                <li><span> Pulished at </span>";
        // line 46
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 46, $this->source); })()), "dateCreated", [], "any", false, false, false, 46), "Y-m-d"), "html", null, true);
        echo "</li>
                                <li><span> Position </span>";
        // line 47
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 47, $this->source); })()), "category", [], "any", false, false, false, 47), "name", [], "any", false, false, false, 47)), "html", null, true);
        echo "</li>
                                <li><span> Contract Type </span>";
        // line 48
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 48, $this->source); })()), "type", [], "any", false, false, false, 48)), "html", null, true);
        echo "</li>
                                <li><span> Salary </span>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 49, $this->source); })()), "salary", [], "any", false, false, false, 49), "html", null, true);
        echo " &euro;</li>
                                <li><span> Location </span>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 50, $this->source); })()), "location", [], "any", false, false, false, 50), "html", null, true);
        echo "</li>
                                <li><span> Starting date </span>";
        // line 51
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 51, $this->source); })()), "dateClosing", [], "any", false, false, false, 51), "Y-m-d"), "html", null, true);
        echo "</li>
                            </ul>

                            ";
        // line 54
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54)) {
            // line 55
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 55, $this->source); })()), "applied", [], "any", false, false, false, 55) == 0)) {
                // line 56
                echo "                                    <a class=\"btn btn-block gradient primary mt-30 waves-effect waves-light\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job_application_new", ["apply" => 1, "offer" => twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 56, $this->source); })()), "id", [], "any", false, false, false, 56)]), "html", null, true);
                echo "\">Apply for this job</a>
                                ";
            } else {
                // line 58
                echo "                                    <div class=\"btn btn-block btn-success mt-30 waves-effect waves-light disabled\">You have applied for this job</div>
                                ";
            }
            // line 60
            echo "                            ";
        }
        // line 61
        echo "
                        </div>
                    </div>
                </div>

                <nav class=\"single-post-navigation no-margin\" role=\"navigation\">
                    <div class=\"row\">

                        <div class=\"col-xs-6 col-sm-6 col-md-4\">

                            ";
        // line 71
        if (((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 71, $this->source); })()) > 0)) {
            // line 72
            echo "                                <div class=\"previous-post-link\">
                                    <a class=\"btn border primary waves-effect waves-dark\" href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_offer_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["offers"]) || array_key_exists("offers", $context) ? $context["offers"] : (function () { throw new RuntimeError('Variable "offers" does not exist.', 73, $this->source); })()), ((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 73, $this->source); })()) - 1), [], "array", false, false, false, 73), "id", [], "any", false, false, false, 73)]), "html", null, true);
            echo "\">
                                        <i class=\"fa fa-long-arrow-left\"></i>Previous
                                    </a>
                                </div>
                            ";
        }
        // line 78
        echo "
                        </div>

                        <div class=\"hidden-xs hidden-sm col-md-4\"></div>
           
                        <div class=\"col-xs-6 col-sm-6 col-md-4\">

                            ";
        // line 85
        if ((((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 85, $this->source); })()) + 1) < twig_length_filter($this->env, (isset($context["offers"]) || array_key_exists("offers", $context) ? $context["offers"] : (function () { throw new RuntimeError('Variable "offers" does not exist.', 85, $this->source); })())))) {
            // line 86
            echo "                                <div class=\"next-post-link\">
                                    <a class=\"btn border primary waves-effect waves-dark\" href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_offer_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["offers"]) || array_key_exists("offers", $context) ? $context["offers"] : (function () { throw new RuntimeError('Variable "offers" does not exist.', 87, $this->source); })()), ((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 87, $this->source); })()) + 1), [], "array", false, false, false, 87), "id", [], "any", false, false, false, 87)]), "html", null, true);
            echo "\">
                                        Next <i class=\"fa fa-long-arrow-right\"></i>
                                    </a>
                                </div>
                            ";
        }
        // line 92
        echo "
                        </div>        
                    </div>
                </nav>
            </div>
        </section>

    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "offer/public_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 92,  226 => 87,  223 => 86,  221 => 85,  212 => 78,  204 => 73,  201 => 72,  199 => 71,  187 => 61,  184 => 60,  180 => 58,  174 => 56,  171 => 55,  169 => 54,  163 => 51,  159 => 50,  155 => 49,  151 => 48,  147 => 47,  143 => 46,  135 => 41,  131 => 40,  127 => 39,  111 => 25,  105 => 23,  103 => 22,  98 => 21,  92 => 19,  90 => 18,  83 => 14,  79 => 13,  68 => 4,  58 => 3,  35 => 1,);
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
                        <h2 class=\"white-text\">{{ offer.title }}</h2>
                        <span class=\"white-text\">Ref. {{ offer.reference }}</span>
                        <ol class=\"breadcrumb\">
                            <li>
                                <div class=\"portfolio-nav\">
                                    {% if index > 0 %}
                                        <a href=\"{{ path('public_offer_show', { id: offers[index - 1].id }) }}\" class=\"waves-effect waves-dark\"><i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i> Prev</a>
                                    {% endif %}
                                    <a href=\"{{ path('offer_public_index') }}\" class=\"waves-effect waves-dark\"><i class=\"fa fa-th-large\" aria-hidden=\"true\"></i></a>
                                    {% if index + 1 < offers|length %}
                                        <a href=\"{{ path('public_offer_show', { id: offers[index + 1].id }) }}\" class=\"waves-effect waves-dark\">Next<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a>
                                    {% endif %}
                                    </div>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <!-- Page Content-->
        <section class=\"single-project-section section-padding light-gray-bg\">
            <div class=\"container\">
                <div class=\"project-overview\">
                    <div class=\"row mb-80\">
                        <div class=\"col-xs-12 col-md-8\">
                            <p class=\"ref grey-text no-margin\">Ref. {{ offer.reference }}</p>
                            <h2>{{ offer.title }}</h2>
                            <p>{{ offer.description }}</p>
                        </div>

                        <div class=\"col-xs-12 col-md-4 quick-overview\">
                            <ul class=\"portfolio-meta\">
                                <li><span> Pulished at </span>{{ offer.dateCreated|date('Y-m-d') }}</li>
                                <li><span> Position </span>{{ offer.category.name|capitalize }}</li>
                                <li><span> Contract Type </span>{{ offer.type|capitalize }}</li>
                                <li><span> Salary </span>{{ offer.salary }} &euro;</li>
                                <li><span> Location </span>{{ offer.location }}</li>
                                <li><span> Starting date </span>{{ offer.dateClosing|date('Y-m-d') }}</li>
                            </ul>

                            {% if app.user %}
                                {% if offer.applied == 0 %}
                                    <a class=\"btn btn-block gradient primary mt-30 waves-effect waves-light\" href=\"{{ path('job_application_new', { apply: 1, offer: offer.id }) }}\">Apply for this job</a>
                                {% else %}
                                    <div class=\"btn btn-block btn-success mt-30 waves-effect waves-light disabled\">You have applied for this job</div>
                                {% endif %}
                            {% endif %}

                        </div>
                    </div>
                </div>

                <nav class=\"single-post-navigation no-margin\" role=\"navigation\">
                    <div class=\"row\">

                        <div class=\"col-xs-6 col-sm-6 col-md-4\">

                            {% if index > 0 %}
                                <div class=\"previous-post-link\">
                                    <a class=\"btn border primary waves-effect waves-dark\" href=\"{{ path('public_offer_show', { id: offers[index - 1].id }) }}\">
                                        <i class=\"fa fa-long-arrow-left\"></i>Previous
                                    </a>
                                </div>
                            {% endif %}

                        </div>

                        <div class=\"hidden-xs hidden-sm col-md-4\"></div>
           
                        <div class=\"col-xs-6 col-sm-6 col-md-4\">

                            {% if index + 1 < offers|length %}
                                <div class=\"next-post-link\">
                                    <a class=\"btn border primary waves-effect waves-dark\" href=\"{{ path('public_offer_show', { id: offers[index + 1].id }) }}\">
                                        Next <i class=\"fa fa-long-arrow-right\"></i>
                                    </a>
                                </div>
                            {% endif %}

                        </div>        
                    </div>
                </nav>
            </div>
        </section>

    </div>

{% endblock %}", "offer/public_show.html.twig", "/home/imeian/devilbox/data/www/luxury/templates/offer/public_show.html.twig");
    }
}
