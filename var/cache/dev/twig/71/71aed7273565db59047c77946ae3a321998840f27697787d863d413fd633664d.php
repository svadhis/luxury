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

/* candidate/show.html.twig */
class __TwigTemplate_6fa67b3b5413820476a1289755652dd87fbec363699aaae5dcf1150c6023d6c8 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidate/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidate/show.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "candidate/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Candidate";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Candidate</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Gender</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 16, $this->source); })()), "gender", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>FirstName</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 20, $this->source); })()), "firstName", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>LastName</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 24, $this->source); })()), "lastName", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adress</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 28, $this->source); })()), "adress", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Country</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 32, $this->source); })()), "country", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nationality</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 36, $this->source); })()), "nationality", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Passport</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 40, $this->source); })()), "passport", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Curriculum</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 44, $this->source); })()), "curriculum", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Picture</th>
                <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 48, $this->source); })()), "picture", [], "any", false, false, false, 48), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Availability</th>
                <td>";
        // line 52
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 52, $this->source); })()), "availability", [], "any", false, false, false, 52)) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
            <tr>
                <th>BirthDate</th>
                <td>";
        // line 56
        ((twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 56, $this->source); })()), "birthDate", [], "any", false, false, false, 56)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 56, $this->source); })()), "birthDate", [], "any", false, false, false, 56), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>BirthLocation</th>
                <td>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 60, $this->source); })()), "birthLocation", [], "any", false, false, false, 60), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Experience</th>
                <td>";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 64, $this->source); })()), "experience", [], "any", false, false, false, 64), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 68, $this->source); })()), "description", [], "any", false, false, false, 68), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Notes</th>
                <td>";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 72, $this->source); })()), "notes", [], "any", false, false, false, 72), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Files</th>
                <td>";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 76, $this->source); })()), "files", [], "any", false, false, false, 76), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidate_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidate_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 83, $this->source); })()), "id", [], "any", false, false, false, 83)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 85
        echo twig_include($this->env, $context, "candidate/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "candidate/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 85,  221 => 83,  216 => 81,  208 => 76,  201 => 72,  194 => 68,  187 => 64,  180 => 60,  173 => 56,  166 => 52,  159 => 48,  152 => 44,  145 => 40,  138 => 36,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block title %}Candidate{% endblock %}

{% block body %}
    <h1>Candidate</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ candidate.id }}</td>
            </tr>
            <tr>
                <th>Gender</th>
                <td>{{ candidate.gender }}</td>
            </tr>
            <tr>
                <th>FirstName</th>
                <td>{{ candidate.firstName }}</td>
            </tr>
            <tr>
                <th>LastName</th>
                <td>{{ candidate.lastName }}</td>
            </tr>
            <tr>
                <th>Adress</th>
                <td>{{ candidate.adress }}</td>
            </tr>
            <tr>
                <th>Country</th>
                <td>{{ candidate.country }}</td>
            </tr>
            <tr>
                <th>Nationality</th>
                <td>{{ candidate.nationality }}</td>
            </tr>
            <tr>
                <th>Passport</th>
                <td>{{ candidate.passport }}</td>
            </tr>
            <tr>
                <th>Curriculum</th>
                <td>{{ candidate.curriculum }}</td>
            </tr>
            <tr>
                <th>Picture</th>
                <td>{{ candidate.picture }}</td>
            </tr>
            <tr>
                <th>Availability</th>
                <td>{{ candidate.availability ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <th>BirthDate</th>
                <td>{{ candidate.birthDate ? candidate.birthDate|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>BirthLocation</th>
                <td>{{ candidate.birthLocation }}</td>
            </tr>
            <tr>
                <th>Experience</th>
                <td>{{ candidate.experience }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ candidate.description }}</td>
            </tr>
            <tr>
                <th>Notes</th>
                <td>{{ candidate.notes }}</td>
            </tr>
            <tr>
                <th>Files</th>
                <td>{{ candidate.files }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('candidate_index') }}\">back to list</a>

    <a href=\"{{ path('candidate_edit', {'id': candidate.id}) }}\">edit</a>

    {{ include('candidate/_delete_form.html.twig') }}
{% endblock %}
", "candidate/show.html.twig", "/home/imeian/devilbox/data/www/luxury/templates/candidate/show.html.twig");
    }
}
