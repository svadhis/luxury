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

/* home/index.html.twig */
class __TwigTemplate_770e235fd43b5f9efc48905c0586bcbf674fe8b37bd4913de40d4335b140dc70 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

    <!-- RS5.0 Core JS Files -->

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems! The following part can be removed on Server for On Demand Loading) -->

    <!-- start revolution slider 5.0 -->
    <section class=\"rev_slider_wrapper\">
        <div class=\"rev_slider materialize-slider\">
            <ul>

                <!-- slide 1 start -->
                <li data-transition=\"parallaxtoleft\" data-slotamount=\"default\"  data-easein=\"Power4.easeInOut\" data-easeout=\"Power4.easeInOut\" data-masterspeed=\"2000\" data-rotate=\"0\"  data-fstransition=\"fade\" data-fsmasterspeed=\"1500\" data-fsslotamount=\"7\" data-saveperformance=\"off\">

                    <!-- MAIN IMAGE -->
                    <img src=\"assets/img/bg1.jpg\"  alt=\"\"  data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" data-bgparallax=\"10\" class=\"rev-slidebg\" data-no-retina>

                    <!-- LAYER NR. 1 -->
                    <div class=\"tp-caption rev-heading tp-resizeme\"
                            data-x=\"center\"
                            data-y=\"center\"
                            data-voffset=\"['-80','-80','-80','-80']\"
                            data-fontsize=\"['60','55','50','45']\"
                            data-lineheight=\"['60','60','55','50']\"
                            data-width=\"none\"
                            data-height=\"none\"
                            data-whitespace=\"nowrap\"
                            data-transform_idle=\"o:1;\"
                            data-transform_in=\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;\"
                            data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
                            data-mask_in=\"x:0px;y:[100%];s:inherit;e:inherit;\"
                            data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
                            data-start=\"800\"
                            data-splitin=\"none\"
                            data-splitout=\"none\"
                            data-responsive_offset=\"on\"
                            style=\"z-index: 5; white-space: nowrap;padding-bottom: 20px;\"><h1 class=\"rev-heading text-extrabold white-text text-center\">Luxury Services</h1>
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class=\"tp-caption tp-resizeme rev-subheading\"
                            data-x=\"center\"
                            data-y=\"center\"
                            data-voffset=\"['0','0','10','10']\"
                            data-fontsize=\"['20','20','17','15']\"
                            data-width=\"['1200', '800', '600', '400']\"
                            data-height=\"none\"
                            data-whitespace=\"nowrap\"
                            data-transform_idle=\"o:1;\"
                            data-transform_in=\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;\"
                            data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
                            data-mask_in=\"x:0px;y:[100%];s:inherit;e:inherit;\"
                            data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
                            data-start=\"1000\"
                            data-splitin=\"none\"
                            data-splitout=\"none\"
                            data-responsive_offset=\"on\"
                            style=\"z-index: 6; white-space: nowrap;\">
                        <h4 class=\"white-text text-center\">Bringing job seekers and employers together for more that 40 years</h4>
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class=\"tp-caption tp-resizeme rev-btn\"
                            data-x=\"['center','center','center','center']\"
                            data-hoffset=\"['0','0','0','0']\"
                            data-y=\"['middle','middle','middle','middle']\"
                            data-voffset=\"['130','130','130','150']\"
                            data-width=\"none\"
                            data-height=\"none\"
                            data-whitespace=\"nowrap\"
                            data-transform_idle=\"o:1;\"
                            data-style_hover=\"cursor:default;\"
                            data-transform_in=\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;\"
                            data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
                            data-mask_in=\"x:0px;y:[100%];s:inherit;e:inherit;\"
                            data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
                            data-start=\"1200\"
                            data-splitin=\"none\"
                            data-splitout=\"none\"
                            data-responsive_offset=\"on\"
                            style=\"z-index: 7; white-space: nowrap;\">
                        <a href=\"#job-Offer\" class=\"btn btn-lg gradient secondary waves-effect waves-light page-scroll\">View Jobs</a>
                    </div>
                </li>
                <!-- slide 1 end -->

                <!-- slide 2 start -->
                <li data-transition=\"parallaxtoleft\" data-slotamount=\"default\"  data-easein=\"Power4.easeInOut\" data-easeout=\"Power4.easeInOut\" data-masterspeed=\"2000\" data-rotate=\"0\"  data-fstransition=\"fade\" data-fsmasterspeed=\"1500\" data-fsslotamount=\"7\" data-saveperformance=\"off\">

                    <!-- MAIN IMAGE -->
                    <img src=\"assets/img/bg3.jpg\"  alt=\"\"  data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" data-bgparallax=\"10\" class=\"rev-slidebg\" data-no-retina>

                    <!-- LAYER NR. 1 -->
                    <div class=\"tp-caption rev-heading tp-resizeme\"
                            data-x=\"center\"
                            data-y=\"center\"
                            data-voffset=\"['-80','-80','-80','-80']\"
                            data-fontsize=\"['60','55','50','45']\"
                            data-lineheight=\"['60','60','55','50']\"
                            data-width=\"none\"
                            data-height=\"none\"
                            data-whitespace=\"nowrap\"
                            data-transform_idle=\"o:1;\"
                            data-transform_in=\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;\"
                            data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
                            data-mask_in=\"x:0px;y:[100%];s:inherit;e:inherit;\"
                            data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
                            data-start=\"800\"
                            data-splitin=\"none\"
                            data-splitout=\"none\"
                            data-responsive_offset=\"on\"
                            style=\"z-index: 5; white-space: nowrap;\"><h1 class=\"rev-heading text-extrabold white-text text-center\">Recruitment & services</h1>
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class=\"tp-caption tp-resizeme rev-subheading\"
                            data-x=\"center\"
                            data-y=\"center\"
                            data-voffset=\"['0','0','10','30']\"
                            data-fontsize=\"['20','20','17','15']\"
                            data-width=\"['1200', '800', '600', '400']\"
                            data-height=\"none\"
                            data-whitespace=\"nowrap\"
                            data-transform_idle=\"o:1;\"
                            data-transform_in=\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;\"
                            data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
                            data-mask_in=\"x:0px;y:[100%];s:inherit;e:inherit;\"
                            data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
                            data-start=\"1000\"
                            data-splitin=\"none\"
                            data-splitout=\"none\"
                            data-responsive_offset=\"on\"
                            style=\"z-index: 6; white-space: nowrap;\">
                        <h4 class=\"white-text text-center\">Bringing job seekers and employers together for more that 40 years</h4>
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class=\"tp-caption tp-resizeme rev-btn\"
                            data-x=\"['center','center','center','center']\"
                            data-hoffset=\"['0','0','0','0']\"
                            data-y=\"['middle','middle','middle','middle']\"
                            data-voffset=\"['130','130','140','170']\"
                            data-width=\"none\"
                            data-height=\"none\"
                            data-whitespace=\"nowrap\"
                            data-transform_idle=\"o:1;\"
                            data-style_hover=\"cursor:default;\"
                            data-transform_in=\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;\"
                            data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
                            data-mask_in=\"x:0px;y:[100%];s:inherit;e:inherit;\"
                            data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
                            data-start=\"1200\"
                            data-splitin=\"none\"
                            data-splitout=\"none\"
                            data-responsive_offset=\"on\"
                            style=\"z-index: 7; white-space: nowrap;\">
                        <a href=\"#job-Offer\" class=\"btn btn-lg gradient secondary waves-effect waves-light page-scroll\">View Jobs</a>
                    </div>

                </li>
                <!-- slide 2 end -->

            </ul>
        </div><!-- end revolution slider -->
    </section><!-- end of slider wrapper -->

    <!-- Page Content-->
    <!--<section class=\"full-width promo-box brand-bg ptb-50\">-->
        <!--<div class=\"container\">-->
            <!---->
        <!--</div>-->
    <!--</section>-->
    <section class=\"ptb-50 brand-bg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 mb-40\">
                    <div class=\"promo-info\">
                        <span class=\"white-text\">Whether you're an employer or a candidate looking for jobs</span>
                        <h3 class=\"white-text text-bold text-uppercase no-margin\">WE HAVE THE SOLUTION FOR YOU</h3>
                    </div>
                    <div class=\"promo-btn\">
                        <a href=\"/templates/contact.html\" class=\"btn border secondary waves-effect waves-light\">Contact Us</a>
                    </div>
                </div>
            </div>

            <hr class=\"mt-10 mb-50\">

            <div class=\"text-center\">
                <h2 class=\"section-title primary-text\">Who We are</h2>
                <p class=\"section-sub white-text\">Luxury Services is a leading professional recruitment consultancy specialising in the recruitment of permanent, contract and temporary positions on behalf of the world’s top employers.</p>
            </div>
            <br>

            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div id=\"project-slider\" class=\"carousel slide boot-slider\" data-ride=\"carousel\">
                        <ol class=\"carousel-indicators\">
                            <li data-target=\"#project-slider\" data-slide-to=\"0\" class=\"active\"></li>
                            <li data-target=\"#project-slider\" data-slide-to=\"1\"></li>
                        </ol>

                        <div class=\"carousel-inner\" role=\"listbox\">
                            <div class=\"item active\">
                                <img class=\"img-responsive\" src=\"assets/img/slide1.jpg\" alt=\"\">
                            </div>
                            <div class=\"item\">
                                <img class=\"img-responsive\" src=\"assets/img/slide2.jpg\" alt=\"\">
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
                    <h3 class=\"primary-text\">Our philosophy</h3>
                    <p class=\"white-text\">Our role is to work with employers and job seekers to facilitate a successful match. This can range from advising a global company on a candidate sourcing strategy to helping a job seeker find their dream job.</p>
                </div>

                <div class=\"text-center\">
                    <a href=\"/templates/company.html\" class=\"btn gradient secondary waves-effect waves-light mt-40\">More about us</a>
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

                        <a href=\"/templates/auth/register.html\" class=\"btn border secondary waves-effect waves-light mt-40\">Join us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id=\"job-Offer\" class=\"section-padding gray-bg\">
        <div class=\"container\">
            <div class=\"text-center mb-40\">
                <h2 class=\"section-title\">Job Offer</h2>
                <p class=\"section-sub\">Just like our Candidate, we offer quality, serious & reliable positions. Come discover them and we will put you in contact with the perfect team for you to form the perfect crew.</p>
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
        // line 283
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offers"]) || array_key_exists("offers", $context) ? $context["offers"] : (function () { throw new RuntimeError('Variable "offers" does not exist.', 283, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["offer"]) {
            // line 284
            echo "                    
                    <div class=\"portfolio-item\" data-groups='[\"all\", \"";
            // line 285
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["offer"], "category", [], "any", false, false, false, 285), "name", [], "any", false, false, false, 285), "html", null, true);
            echo "\"]'>
                            <div class=\"portfolio-wrapper\">
                                <div class=\"card job-card\">
                                    <div class=\"card-content\">
                                        <span class=\"title\">
                                            <span class=\"card-title\">";
            // line 290
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "title", [], "any", false, false, false, 290), "html", null, true);
            echo "</span>
                                            <span class=\"ref grey-text\">Ref. ";
            // line 291
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "reference", [], "any", false, false, false, 291), "html", null, true);
            echo "</span>
                                        </span>
                                        <div class=\"metas mb-20\">
                                            <div class=\"meta\">
                                                <i class=\"material-icons\">&#xE53E;</i>";
            // line 295
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "salary", [], "any", false, false, false, 295), "html", null, true);
            echo " &euro;
                                            </div>
                                            <div class=\"meta\">
                                                <i class=\"material-icons\">&#xE916;</i>";
            // line 298
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "dateCreated", [], "any", false, false, false, 298), "Y-m-d"), "html", null, true);
            echo "
                                            </div>
                                            <div class=\"meta\">
                                                <i class=\"material-icons\">&#xE55F;</i>";
            // line 301
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "location", [], "any", false, false, false, 301), "html", null, true);
            echo "
                                            </div>
                                        </div>
                                        <p class=\"truncate-text\">";
            // line 304
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "description", [], "any", false, false, false, 304), "html", null, true);
            echo "</p>
                                    </div>
                                    <div class=\"card-action\">
                                        <a class=\"btn btn-md primary border waves-effect waves-dark\" href=\"";
            // line 307
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_offer_show", ["id" => twig_get_attribute($this->env, $this->source, $context["offer"], "id", [], "any", false, false, false, 307)]), "html", null, true);
            echo "\">Details</a>
                                        ";
            // line 308
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 308, $this->source); })()), "user", [], "any", false, false, false, 308)) {
                // line 309
                echo "                                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["offer"], "applied", [], "any", false, false, false, 309) == 0)) {
                    // line 310
                    echo "                                                <a class=\"btn btn-md primary waves-effect waves-light\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job_application_new", ["apply" => 1, "offer" => twig_get_attribute($this->env, $this->source, $context["offer"], "id", [], "any", false, false, false, 310)]), "html", null, true);
                    echo "\">Apply</a>
                                            ";
                } else {
                    // line 312
                    echo "                                                <div class=\"btn btn-md btn-success waves-effect waves-light disabled green-text text-darken-4\">Applied</div>
                                            ";
                }
                // line 314
                echo "                                        ";
            }
            // line 315
            echo "                                    </div>
                                </div>
                            </div>
                        </div>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 321
        echo "
                    <div class=\"no-item\"></div>

                </div>

                <div class=\"text-center\">
                    <a href=\"/templates/jobs/index.html\" class=\"btn gradient secondary waves-effect waves-light mt-30\">View all job Offer</a>
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
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  432 => 321,  421 => 315,  418 => 314,  414 => 312,  408 => 310,  405 => 309,  403 => 308,  399 => 307,  393 => 304,  387 => 301,  381 => 298,  375 => 295,  368 => 291,  364 => 290,  356 => 285,  353 => 284,  349 => 283,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<!-- Page -->
<div class=\"page\">

    <!-- RS5.0 Core JS Files -->

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems! The following part can be removed on Server for On Demand Loading) -->

    <!-- start revolution slider 5.0 -->
    <section class=\"rev_slider_wrapper\">
        <div class=\"rev_slider materialize-slider\">
            <ul>

                <!-- slide 1 start -->
                <li data-transition=\"parallaxtoleft\" data-slotamount=\"default\"  data-easein=\"Power4.easeInOut\" data-easeout=\"Power4.easeInOut\" data-masterspeed=\"2000\" data-rotate=\"0\"  data-fstransition=\"fade\" data-fsmasterspeed=\"1500\" data-fsslotamount=\"7\" data-saveperformance=\"off\">

                    <!-- MAIN IMAGE -->
                    <img src=\"assets/img/bg1.jpg\"  alt=\"\"  data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" data-bgparallax=\"10\" class=\"rev-slidebg\" data-no-retina>

                    <!-- LAYER NR. 1 -->
                    <div class=\"tp-caption rev-heading tp-resizeme\"
                            data-x=\"center\"
                            data-y=\"center\"
                            data-voffset=\"['-80','-80','-80','-80']\"
                            data-fontsize=\"['60','55','50','45']\"
                            data-lineheight=\"['60','60','55','50']\"
                            data-width=\"none\"
                            data-height=\"none\"
                            data-whitespace=\"nowrap\"
                            data-transform_idle=\"o:1;\"
                            data-transform_in=\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;\"
                            data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
                            data-mask_in=\"x:0px;y:[100%];s:inherit;e:inherit;\"
                            data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
                            data-start=\"800\"
                            data-splitin=\"none\"
                            data-splitout=\"none\"
                            data-responsive_offset=\"on\"
                            style=\"z-index: 5; white-space: nowrap;padding-bottom: 20px;\"><h1 class=\"rev-heading text-extrabold white-text text-center\">Luxury Services</h1>
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class=\"tp-caption tp-resizeme rev-subheading\"
                            data-x=\"center\"
                            data-y=\"center\"
                            data-voffset=\"['0','0','10','10']\"
                            data-fontsize=\"['20','20','17','15']\"
                            data-width=\"['1200', '800', '600', '400']\"
                            data-height=\"none\"
                            data-whitespace=\"nowrap\"
                            data-transform_idle=\"o:1;\"
                            data-transform_in=\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;\"
                            data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
                            data-mask_in=\"x:0px;y:[100%];s:inherit;e:inherit;\"
                            data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
                            data-start=\"1000\"
                            data-splitin=\"none\"
                            data-splitout=\"none\"
                            data-responsive_offset=\"on\"
                            style=\"z-index: 6; white-space: nowrap;\">
                        <h4 class=\"white-text text-center\">Bringing job seekers and employers together for more that 40 years</h4>
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class=\"tp-caption tp-resizeme rev-btn\"
                            data-x=\"['center','center','center','center']\"
                            data-hoffset=\"['0','0','0','0']\"
                            data-y=\"['middle','middle','middle','middle']\"
                            data-voffset=\"['130','130','130','150']\"
                            data-width=\"none\"
                            data-height=\"none\"
                            data-whitespace=\"nowrap\"
                            data-transform_idle=\"o:1;\"
                            data-style_hover=\"cursor:default;\"
                            data-transform_in=\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;\"
                            data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
                            data-mask_in=\"x:0px;y:[100%];s:inherit;e:inherit;\"
                            data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
                            data-start=\"1200\"
                            data-splitin=\"none\"
                            data-splitout=\"none\"
                            data-responsive_offset=\"on\"
                            style=\"z-index: 7; white-space: nowrap;\">
                        <a href=\"#job-Offer\" class=\"btn btn-lg gradient secondary waves-effect waves-light page-scroll\">View Jobs</a>
                    </div>
                </li>
                <!-- slide 1 end -->

                <!-- slide 2 start -->
                <li data-transition=\"parallaxtoleft\" data-slotamount=\"default\"  data-easein=\"Power4.easeInOut\" data-easeout=\"Power4.easeInOut\" data-masterspeed=\"2000\" data-rotate=\"0\"  data-fstransition=\"fade\" data-fsmasterspeed=\"1500\" data-fsslotamount=\"7\" data-saveperformance=\"off\">

                    <!-- MAIN IMAGE -->
                    <img src=\"assets/img/bg3.jpg\"  alt=\"\"  data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" data-bgparallax=\"10\" class=\"rev-slidebg\" data-no-retina>

                    <!-- LAYER NR. 1 -->
                    <div class=\"tp-caption rev-heading tp-resizeme\"
                            data-x=\"center\"
                            data-y=\"center\"
                            data-voffset=\"['-80','-80','-80','-80']\"
                            data-fontsize=\"['60','55','50','45']\"
                            data-lineheight=\"['60','60','55','50']\"
                            data-width=\"none\"
                            data-height=\"none\"
                            data-whitespace=\"nowrap\"
                            data-transform_idle=\"o:1;\"
                            data-transform_in=\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;\"
                            data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
                            data-mask_in=\"x:0px;y:[100%];s:inherit;e:inherit;\"
                            data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
                            data-start=\"800\"
                            data-splitin=\"none\"
                            data-splitout=\"none\"
                            data-responsive_offset=\"on\"
                            style=\"z-index: 5; white-space: nowrap;\"><h1 class=\"rev-heading text-extrabold white-text text-center\">Recruitment & services</h1>
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class=\"tp-caption tp-resizeme rev-subheading\"
                            data-x=\"center\"
                            data-y=\"center\"
                            data-voffset=\"['0','0','10','30']\"
                            data-fontsize=\"['20','20','17','15']\"
                            data-width=\"['1200', '800', '600', '400']\"
                            data-height=\"none\"
                            data-whitespace=\"nowrap\"
                            data-transform_idle=\"o:1;\"
                            data-transform_in=\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;\"
                            data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
                            data-mask_in=\"x:0px;y:[100%];s:inherit;e:inherit;\"
                            data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
                            data-start=\"1000\"
                            data-splitin=\"none\"
                            data-splitout=\"none\"
                            data-responsive_offset=\"on\"
                            style=\"z-index: 6; white-space: nowrap;\">
                        <h4 class=\"white-text text-center\">Bringing job seekers and employers together for more that 40 years</h4>
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class=\"tp-caption tp-resizeme rev-btn\"
                            data-x=\"['center','center','center','center']\"
                            data-hoffset=\"['0','0','0','0']\"
                            data-y=\"['middle','middle','middle','middle']\"
                            data-voffset=\"['130','130','140','170']\"
                            data-width=\"none\"
                            data-height=\"none\"
                            data-whitespace=\"nowrap\"
                            data-transform_idle=\"o:1;\"
                            data-style_hover=\"cursor:default;\"
                            data-transform_in=\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;\"
                            data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
                            data-mask_in=\"x:0px;y:[100%];s:inherit;e:inherit;\"
                            data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
                            data-start=\"1200\"
                            data-splitin=\"none\"
                            data-splitout=\"none\"
                            data-responsive_offset=\"on\"
                            style=\"z-index: 7; white-space: nowrap;\">
                        <a href=\"#job-Offer\" class=\"btn btn-lg gradient secondary waves-effect waves-light page-scroll\">View Jobs</a>
                    </div>

                </li>
                <!-- slide 2 end -->

            </ul>
        </div><!-- end revolution slider -->
    </section><!-- end of slider wrapper -->

    <!-- Page Content-->
    <!--<section class=\"full-width promo-box brand-bg ptb-50\">-->
        <!--<div class=\"container\">-->
            <!---->
        <!--</div>-->
    <!--</section>-->
    <section class=\"ptb-50 brand-bg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 mb-40\">
                    <div class=\"promo-info\">
                        <span class=\"white-text\">Whether you're an employer or a candidate looking for jobs</span>
                        <h3 class=\"white-text text-bold text-uppercase no-margin\">WE HAVE THE SOLUTION FOR YOU</h3>
                    </div>
                    <div class=\"promo-btn\">
                        <a href=\"/templates/contact.html\" class=\"btn border secondary waves-effect waves-light\">Contact Us</a>
                    </div>
                </div>
            </div>

            <hr class=\"mt-10 mb-50\">

            <div class=\"text-center\">
                <h2 class=\"section-title primary-text\">Who We are</h2>
                <p class=\"section-sub white-text\">Luxury Services is a leading professional recruitment consultancy specialising in the recruitment of permanent, contract and temporary positions on behalf of the world’s top employers.</p>
            </div>
            <br>

            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div id=\"project-slider\" class=\"carousel slide boot-slider\" data-ride=\"carousel\">
                        <ol class=\"carousel-indicators\">
                            <li data-target=\"#project-slider\" data-slide-to=\"0\" class=\"active\"></li>
                            <li data-target=\"#project-slider\" data-slide-to=\"1\"></li>
                        </ol>

                        <div class=\"carousel-inner\" role=\"listbox\">
                            <div class=\"item active\">
                                <img class=\"img-responsive\" src=\"assets/img/slide1.jpg\" alt=\"\">
                            </div>
                            <div class=\"item\">
                                <img class=\"img-responsive\" src=\"assets/img/slide2.jpg\" alt=\"\">
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
                    <h3 class=\"primary-text\">Our philosophy</h3>
                    <p class=\"white-text\">Our role is to work with employers and job seekers to facilitate a successful match. This can range from advising a global company on a candidate sourcing strategy to helping a job seeker find their dream job.</p>
                </div>

                <div class=\"text-center\">
                    <a href=\"/templates/company.html\" class=\"btn gradient secondary waves-effect waves-light mt-40\">More about us</a>
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

                        <a href=\"/templates/auth/register.html\" class=\"btn border secondary waves-effect waves-light mt-40\">Join us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id=\"job-Offer\" class=\"section-padding gray-bg\">
        <div class=\"container\">
            <div class=\"text-center mb-40\">
                <h2 class=\"section-title\">Job Offer</h2>
                <p class=\"section-sub\">Just like our Candidate, we offer quality, serious & reliable positions. Come discover them and we will put you in contact with the perfect team for you to form the perfect crew.</p>
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

                <div class=\"text-center\">
                    <a href=\"/templates/jobs/index.html\" class=\"btn gradient secondary waves-effect waves-light mt-30\">View all job Offer</a>
                </div>
            </div>
        </div>
    </section>

</div>
{% endblock %}
", "home/index.html.twig", "/home/imeian/devilbox/data/www/luxury/templates/home/index.html.twig");
    }
}
