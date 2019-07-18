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

/* offer/public_index.html.twig */
class __TwigTemplate_7b444c46d9305203dafd2e7f4b225d5e55f498be39092f47b3d1ac08fc08475f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offer/public_index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offer/public_index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "offer/public_index.html.twig", 1);
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
                        <h2 class=\"white-text\">Our job Offer</h2>
                        <span class=\"white-text\">Search and filter by job category</span>
                        
                    </div>
                </div>
            </div>
        </section>

        <!-- Page Content-->
        <section id=\"job-Offer\" class=\"section-padding gray-bg\">
            <div class=\"container\">
                <div class=\"text-center mb-40\">
                    <h2 class=\"section-title\">We have the perfect job for you</h2>
                    <p class=\"section-sub\">just like our Candidate, we offer quality, serious & reliable job Offer.</p>
                </div>
                <div class=\"portfolio-container\">

                    <ul class=\"portfolio-filter brand-filter text-center\">
                        <li class=\"active waves-effect waves-light\" data-group=\"all\">All</li>
                        <li class=\" waves-effect waves-light\" data-group=\"commercial\">Commercial</li>
                        <li class=\" waves-effect waves-light\" data-group=\"retail\">Retail sales</li>
                        <li class=\" waves-effect waves-light\" data-group=\"creative\">Creative</li>
                        <li class=\" waves-effect waves-light\" data-group=\"technology\">Technology</li>
                        <li class=\" waves-effect waves-light\" data-group=\"marketing\">Marketing & PR</li>
                        <li class=\" waves-effect waves-light\" data-group=\"fashion\">Fashion & luxury</li>
                        <li class=\" waves-effect waves-light\" data-group=\"management\">Management & HR</li>
                    </ul>
                    <div class=\"portfolio portfolio-with-title col-2 gutter mt-30\">


                    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offers"]) || array_key_exists("offers", $context) ? $context["offers"] : (function () { throw new RuntimeError('Variable "offers" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["offer"]) {
            // line 44
            echo "                    
                        <div class=\"portfolio-item\" data-groups='[\"all\", \"";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["offer"], "category", [], "any", false, false, false, 45), "name", [], "any", false, false, false, 45), "html", null, true);
            echo "\"]'>
                            <div class=\"portfolio-wrapper\">
                                <div class=\"card job-card\">
                                    <div class=\"card-content\">
                                        <span class=\"title\">
                                            <span class=\"card-title\">";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "title", [], "any", false, false, false, 50), "html", null, true);
            echo "</span>
                                            <span class=\"ref grey-text\">Ref. ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "reference", [], "any", false, false, false, 51), "html", null, true);
            echo "</span>
                                        </span>
                                        <div class=\"metas mb-20\">
                                            <div class=\"meta\">
                                                <i class=\"material-icons\">&#xE53E;</i>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "salary", [], "any", false, false, false, 55), "html", null, true);
            echo " &euro;
                                            </div>
                                            <div class=\"meta\">
                                                <i class=\"material-icons\">&#xE916;</i>";
            // line 58
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "dateCreated", [], "any", false, false, false, 58), "Y-m-d"), "html", null, true);
            echo "
                                            </div>
                                            <div class=\"meta\">
                                                <i class=\"material-icons\">&#xE55F;</i>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "location", [], "any", false, false, false, 61), "html", null, true);
            echo "
                                            </div>
                                        </div>
                                        <p class=\"truncate-text\">";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "description", [], "any", false, false, false, 64), "html", null, true);
            echo "</p>
                                    </div>
                                    <div class=\"card-action\">
                                        <a class=\"btn btn-md primary border waves-effect waves-dark\" href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_offer_show", ["id" => twig_get_attribute($this->env, $this->source, $context["offer"], "id", [], "any", false, false, false, 67)]), "html", null, true);
            echo "\">Details</a>
                                        ";
            // line 68
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68)) {
                // line 69
                echo "                                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["offer"], "applied", [], "any", false, false, false, 69) == 0)) {
                    // line 70
                    echo "                                                <a class=\"btn btn-md primary waves-effect waves-light\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job_application_new", ["apply" => 1, "offer" => twig_get_attribute($this->env, $this->source, $context["offer"], "id", [], "any", false, false, false, 70)]), "html", null, true);
                    echo "\">Apply</a>
                                            ";
                } else {
                    // line 72
                    echo "                                                <div class=\"btn btn-md btn-success waves-effect waves-light disabled green-text text-darken-4\">Applied</div>
                                            ";
                }
                // line 74
                echo "                                        ";
            }
            // line 75
            echo "                                    </div>
                                </div>
                            </div>
                        </div>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "
                        <div class=\"no-item\"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class=\"cta-candidate bg-fixed bg-cover overlay dark-5 padding-top-70 padding-bottom-50\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"valign-wrapper text-center\">
                        <div class=\"hero-intro valign-cell\">
                            <h2 class=\"tt-headline clip is-full-width no-margin\">
                                <span>You are </span>
                                <span class=\"tt-words-wrapper\">
                                    <b class=\"is-visible\">Commercial</b>
                                    <b>Creative</b>
                                    <b>Marketing & PR</b>
                                    <b>Technology</b>
                                    <b>Fashion & luxury</b>
                                    <b>Retail sales</b>
                                </span>
                            </h2>
                            <h3 class=\"c-secondary mb-30 no-margin\">Sign-up and apply for jobs now</h3>
                            <p class=\"white-text section-sub\">Each one of your skills is seen as precious resource to us, each one of your personality traits are considered as an added on value. Joining us is allowing our recruitment expertise and personal guidance to bring the best out in you by choosing the most suited position.</p>

                            <a href=\"/register.html\" class=\"btn border secondary waves-effect waves-light mt-40\">Join us</a>
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
        return "offer/public_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 81,  181 => 75,  178 => 74,  174 => 72,  168 => 70,  165 => 69,  163 => 68,  159 => 67,  153 => 64,  147 => 61,  141 => 58,  135 => 55,  128 => 51,  124 => 50,  116 => 45,  113 => 44,  109 => 43,  68 => 4,  58 => 3,  35 => 1,);
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
                        <h2 class=\"white-text\">Our job Offer</h2>
                        <span class=\"white-text\">Search and filter by job category</span>
                        
                    </div>
                </div>
            </div>
        </section>

        <!-- Page Content-->
        <section id=\"job-Offer\" class=\"section-padding gray-bg\">
            <div class=\"container\">
                <div class=\"text-center mb-40\">
                    <h2 class=\"section-title\">We have the perfect job for you</h2>
                    <p class=\"section-sub\">just like our Candidate, we offer quality, serious & reliable job Offer.</p>
                </div>
                <div class=\"portfolio-container\">

                    <ul class=\"portfolio-filter brand-filter text-center\">
                        <li class=\"active waves-effect waves-light\" data-group=\"all\">All</li>
                        <li class=\" waves-effect waves-light\" data-group=\"commercial\">Commercial</li>
                        <li class=\" waves-effect waves-light\" data-group=\"retail\">Retail sales</li>
                        <li class=\" waves-effect waves-light\" data-group=\"creative\">Creative</li>
                        <li class=\" waves-effect waves-light\" data-group=\"technology\">Technology</li>
                        <li class=\" waves-effect waves-light\" data-group=\"marketing\">Marketing & PR</li>
                        <li class=\" waves-effect waves-light\" data-group=\"fashion\">Fashion & luxury</li>
                        <li class=\" waves-effect waves-light\" data-group=\"management\">Management & HR</li>
                    </ul>
                    <div class=\"portfolio portfolio-with-title col-2 gutter mt-30\">


                    {% for offer in offers %}
                    
                        <div class=\"portfolio-item\" data-groups='[\"all\", \"{{ offer.category.name }}\"]'>
                            <div class=\"portfolio-wrapper\">
                                <div class=\"card job-card\">
                                    <div class=\"card-content\">
                                        <span class=\"title\">
                                            <span class=\"card-title\">{{ offer.title }}</span>
                                            <span class=\"ref grey-text\">Ref. {{ offer.reference }}</span>
                                        </span>
                                        <div class=\"metas mb-20\">
                                            <div class=\"meta\">
                                                <i class=\"material-icons\">&#xE53E;</i>{{ offer.salary }} &euro;
                                            </div>
                                            <div class=\"meta\">
                                                <i class=\"material-icons\">&#xE916;</i>{{ offer.dateCreated|date('Y-m-d') }}
                                            </div>
                                            <div class=\"meta\">
                                                <i class=\"material-icons\">&#xE55F;</i>{{ offer.location }}
                                            </div>
                                        </div>
                                        <p class=\"truncate-text\">{{ offer.description }}</p>
                                    </div>
                                    <div class=\"card-action\">
                                        <a class=\"btn btn-md primary border waves-effect waves-dark\" href=\"{{ path('public_offer_show', { id: offer.id }) }}\">Details</a>
                                        {% if app.user %}
                                            {% if offer.applied == 0 %}
                                                <a class=\"btn btn-md primary waves-effect waves-light\" href=\"{{ path('job_application_new', { apply: 1, offer: offer.id }) }}\">Apply</a>
                                            {% else %}
                                                <div class=\"btn btn-md btn-success waves-effect waves-light disabled green-text text-darken-4\">Applied</div>
                                            {% endif %}
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>

                    {% endfor %}

                        <div class=\"no-item\"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class=\"cta-candidate bg-fixed bg-cover overlay dark-5 padding-top-70 padding-bottom-50\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"valign-wrapper text-center\">
                        <div class=\"hero-intro valign-cell\">
                            <h2 class=\"tt-headline clip is-full-width no-margin\">
                                <span>You are </span>
                                <span class=\"tt-words-wrapper\">
                                    <b class=\"is-visible\">Commercial</b>
                                    <b>Creative</b>
                                    <b>Marketing & PR</b>
                                    <b>Technology</b>
                                    <b>Fashion & luxury</b>
                                    <b>Retail sales</b>
                                </span>
                            </h2>
                            <h3 class=\"c-secondary mb-30 no-margin\">Sign-up and apply for jobs now</h3>
                            <p class=\"white-text section-sub\">Each one of your skills is seen as precious resource to us, each one of your personality traits are considered as an added on value. Joining us is allowing our recruitment expertise and personal guidance to bring the best out in you by choosing the most suited position.</p>

                            <a href=\"/register.html\" class=\"btn border secondary waves-effect waves-light mt-40\">Join us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

{% endblock %}", "offer/public_index.html.twig", "/home/imeian/devilbox/data/www/luxury/templates/offer/public_index.html.twig");
    }
}
