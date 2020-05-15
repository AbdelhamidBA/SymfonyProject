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

/* profile/profile.html.twig */
class __TwigTemplate_8b5e47a4d37868f3021f66ea9e496bea7ba8af2a99f2ab70cf0fd71d80396660 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/profile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profile/profile.html.twig", 1);
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

        echo "Hello ProfileController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 6
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"js/clientJS.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "  <link rel=\"stylesheet\" href=\"css/profile.css\"/>
<div class=\"mainContainer\">
    <div class=\"profil\">
        <div class=\"personal-info\">
            <img src=\"images/avatar.png\"/>
            <div id=\"info\">
                <h2>Personal Info</h2>
                <ul id=\"pinfo\">
                    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["userinfo"]) || array_key_exists("userinfo", $context) ? $context["userinfo"] : (function () { throw new RuntimeError('Variable "userinfo" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 19
            echo "                        <li><i class='fas fa-user' style='color:white; padding-right: 5px'></i>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "fullname", [], "any", false, false, false, 19), "html", null, true);
            echo "</li>
                        <li><i class='fas fa-birthday-cake' style='color:white; padding-right: 5px'></i>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "birthdate", [], "any", false, false, false, 20), "html", null, true);
            echo "</li>
                        <li><i class='fas fa-id-card' style='color:white; padding-right: 5px'></i>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "identity", [], "any", false, false, false, 21), "html", null, true);
            echo "</li>
                        <li><i class='fas fa-envelope' style='color:white; padding-right: 5px'></i>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 22), "html", null, true);
            echo "</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                </ul>
            </div>
        </div>
        <div class=\"tabHolder\">
            <nav id=\"userNav\">
                <a href=\"rent_car.php\" id=\"rentcar\">Rent a car</a>
                <a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\" id=\"logout\">Logout</a>
            </nav>
            <div class=\"tabList\">
                        <p class=\"tabLink\" id=\"hisLink\">History</p></td>
                        <p class=\"tabLink\" id=\"resLink\">Reservation List</p></td>
                        <p class=\"tabLink\" id=\"contactLink\">Contact Us</p></td>
            </div>
            <div class=\"tabContent\" id=\"history\">
                <table id='historyTable' class='table table-striped table-bordered' style='width:100%'>
                <thead><tr>
                    <th> Reservation ID</th>
                    <th> Pickup Date</th>
                    <th> Return Date</th>
                    <th> Car</th>
                    <th> Status </th>
                </tr>
                </thead>
                <tbody>
                    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["history"]) || array_key_exists("history", $context) ? $context["history"] : (function () { throw new RuntimeError('Variable "history" does not exist.', 48, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["h"]) {
            // line 49
            echo "                <tr>
                    <td> ";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["h"], "id", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                    <td> ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["h"], "res_date", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                    <td> ";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["h"], "ret_date", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                    <td> ";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["h"], "carName", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                    <td> ";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["h"], "status", [], "any", false, false, false, 54), "html", null, true);
            echo " </td>
                </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['h'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                </tbody>
                </table>
            </div>
            <div class=\"tabContent\" id=\"reslist\">
                <table id='ResTable' class='table table-striped table-bordered' style='width:100%'>
                <thead>
                <tr>
                    <th>Reservation ID</th>
                    <th>Pickup Date</th>
                    <th>Return Date</th>
                    <th>Car</th>
                    <th>Status </th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pendings"]) || array_key_exists("pendings", $context) ? $context["pendings"] : (function () { throw new RuntimeError('Variable "pendings" does not exist.', 73, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
            // line 74
            echo "                        <tr>
                            <td>#";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["res"], "id", [], "any", false, false, false, 75), "html", null, true);
            echo "</td>
                            <td>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["res"], "res_date", [], "any", false, false, false, 76), "html", null, true);
            echo "</td>
                            <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["res"], "ret_date", [], "any", false, false, false, 77), "html", null, true);
            echo "</td>
                            <td>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["res"], "carName", [], "any", false, false, false, 78), "html", null, true);
            echo "</td>
                            <td>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["res"], "status", [], "any", false, false, false, 79), "html", null, true);
            echo " </td>
                            <td><img class='cancel' id='";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["res"], "id", [], "any", false, false, false, 80), "html", null, true);
            echo "' src='images/cancel.png'/></td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                </tbody>
                </table>
            </div>
            <div class=\"tabContent\" id=\"contact\">
                <div class=\"formContainer\">
                    <h2>Contact Us</h2>
                    <h4>If you have any concern don't hesitate to contact us</h4>
                    <form name=\"contactForm\" id=\"contactForm\">
                    <table border=\"0\">
                        <tr>
                            <td>Concern: </td>
                            <td><input type=\"text\" id=\"concern\" name=\"concern\" placeholder=\"Concern\"/></td>
                        </tr>
                        <tr>
                            <td>Description: </td>
                            <td><textarea name=\"description\" id=\"description\"></textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type=\"submit\" name=\"contactus\" value=\"Send\"/></td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "profile/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 83,  254 => 80,  250 => 79,  246 => 78,  242 => 77,  238 => 76,  234 => 75,  231 => 74,  227 => 73,  209 => 57,  200 => 54,  196 => 53,  192 => 52,  188 => 51,  184 => 50,  181 => 49,  177 => 48,  156 => 30,  148 => 24,  140 => 22,  136 => 21,  132 => 20,  127 => 19,  123 => 18,  113 => 10,  103 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
  
{% block title %}Hello ProfileController!{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"js/clientJS.js\"></script>
{% endblock %}
{% block body %}
  <link rel=\"stylesheet\" href=\"css/profile.css\"/>
<div class=\"mainContainer\">
    <div class=\"profil\">
        <div class=\"personal-info\">
            <img src=\"images/avatar.png\"/>
            <div id=\"info\">
                <h2>Personal Info</h2>
                <ul id=\"pinfo\">
                    {% for user in userinfo %}
                        <li><i class='fas fa-user' style='color:white; padding-right: 5px'></i>{{user.fullname}}</li>
                        <li><i class='fas fa-birthday-cake' style='color:white; padding-right: 5px'></i>{{user.birthdate}}</li>
                        <li><i class='fas fa-id-card' style='color:white; padding-right: 5px'></i>{{user.identity}}</li>
                        <li><i class='fas fa-envelope' style='color:white; padding-right: 5px'></i>{{user.email}}</li>
                    {% endfor %}
                </ul>
            </div>
        </div>
        <div class=\"tabHolder\">
            <nav id=\"userNav\">
                <a href=\"rent_car.php\" id=\"rentcar\">Rent a car</a>
                <a href=\"{{path('logout')}}\" id=\"logout\">Logout</a>
            </nav>
            <div class=\"tabList\">
                        <p class=\"tabLink\" id=\"hisLink\">History</p></td>
                        <p class=\"tabLink\" id=\"resLink\">Reservation List</p></td>
                        <p class=\"tabLink\" id=\"contactLink\">Contact Us</p></td>
            </div>
            <div class=\"tabContent\" id=\"history\">
                <table id='historyTable' class='table table-striped table-bordered' style='width:100%'>
                <thead><tr>
                    <th> Reservation ID</th>
                    <th> Pickup Date</th>
                    <th> Return Date</th>
                    <th> Car</th>
                    <th> Status </th>
                </tr>
                </thead>
                <tbody>
                    {% for h in history  %}
                <tr>
                    <td> {{h.id}}</td>
                    <td> {{h.res_date}}</td>
                    <td> {{h.ret_date}}</td>
                    <td> {{h.carName}}</td>
                    <td> {{h.status}} </td>
                </tr>
                    {% endfor %}
                </tbody>
                </table>
            </div>
            <div class=\"tabContent\" id=\"reslist\">
                <table id='ResTable' class='table table-striped table-bordered' style='width:100%'>
                <thead>
                <tr>
                    <th>Reservation ID</th>
                    <th>Pickup Date</th>
                    <th>Return Date</th>
                    <th>Car</th>
                    <th>Status </th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    {% for res in pendings %}
                        <tr>
                            <td>#{{res.id}}</td>
                            <td>{{res.res_date}}</td>
                            <td>{{res.ret_date}}</td>
                            <td>{{res.carName}}</td>
                            <td>{{res.status}} </td>
                            <td><img class='cancel' id='{{res.id}}' src='images/cancel.png'/></td>
                        </tr>
                    {% endfor %}
                </tbody>
                </table>
            </div>
            <div class=\"tabContent\" id=\"contact\">
                <div class=\"formContainer\">
                    <h2>Contact Us</h2>
                    <h4>If you have any concern don't hesitate to contact us</h4>
                    <form name=\"contactForm\" id=\"contactForm\">
                    <table border=\"0\">
                        <tr>
                            <td>Concern: </td>
                            <td><input type=\"text\" id=\"concern\" name=\"concern\" placeholder=\"Concern\"/></td>
                        </tr>
                        <tr>
                            <td>Description: </td>
                            <td><textarea name=\"description\" id=\"description\"></textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type=\"submit\" name=\"contactus\" value=\"Send\"/></td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
{% endblock %}
", "profile/profile.html.twig", "C:\\xampp\\htdocs\\ARCars\\templates\\profile\\profile.html.twig");
    }
}
