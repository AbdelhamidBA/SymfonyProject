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

/* rent_car/rentcar.html.twig */
class __TwigTemplate_84b62d891eb5d9a88cffdda5311d32dffa21a5322d90344597057420d18cf0f6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rent_car/rentcar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rent_car/rentcar.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "rent_car/rentcar.html.twig", 1);
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

        echo "Rent a Car";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 5
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<link rel=\"stylesheet\" href=\"css/rent_car.css\"/>
";
        // line 9
        echo twig_include($this->env, $context, "includes/header.html.twig");
        echo "
";
        // line 10
        echo twig_include($this->env, $context, "includes/navbar.html.twig");
        echo "

<div class=\"mainContainer\">
    <p id=\"containerTitle\">Car List</p>
    <div class=\"ProductContainer\">
        <div class=\"ProductList\">

  <table border='0'>
   <tr>
    </tr>
    <tr>
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cars"]) || array_key_exists("cars", $context) ? $context["cars"] : (function () { throw new RuntimeError('Variable "cars" does not exist.', 21, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["car"]) {
            // line 22
            echo "    ";
            if ((0 == (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 22) + 1) % 4)) {
                // line 23
                echo "    </tr>
    <tr>
    <td> <div class='car'>
            <img src='uploads/cars/";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "carPic", [], "any", false, false, false, 26), "html", null, true);
                echo "'/>
            <div id='carPrice'>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "carPrice", [], "any", false, false, false, 27), "html", null, true);
                echo "DT</div>
            <p id='carName'>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "carName", [], "any", false, false, false, 28), "html", null, true);
                echo "</p>
            <ul id='carInfo'>
            <li>Availability: Available</li>
            <li>Year: ";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "carYear", [], "any", false, false, false, 31), "html", null, true);
                echo "</li>
            <li>Color: ";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "carColor", [], "any", false, false, false, 32), "html", null, true);
                echo "</li>
            <li>Seats:";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "carSeats", [], "any", false, false, false, 33), "html", null, true);
                echo "</li>
            <li>Fuel: ";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "carFuel", [], "any", false, false, false, 34), "html", null, true);
                echo "</li>
            </ul>
            <input type='submit' id='";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "id", [], "any", false, false, false, 36), "html", null, true);
                echo "' name='order' value='Book this car'/>
        </div>
    </td>

    ";
            } else {
                // line 41
                echo "    <td> <div class='car'>
            <img src='uploads/cars/";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "carPic", [], "any", false, false, false, 42), "html", null, true);
                echo "'/>
            <div id='carPrice'>";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "carPrice", [], "any", false, false, false, 43), "html", null, true);
                echo "DT</div>
            <p id='carName'>";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "carName", [], "any", false, false, false, 44), "html", null, true);
                echo "</p>
            <ul id='carInfo'>
            <li>Availability: Available</li>
            <li>Year: ";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "carYear", [], "any", false, false, false, 47), "html", null, true);
                echo "</li>
            <li>Color: ";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "carColor", [], "any", false, false, false, 48), "html", null, true);
                echo "</li>
            <li>Seats:";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "carSeats", [], "any", false, false, false, 49), "html", null, true);
                echo "</li>
            <li>Fuel: ";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "carFuel", [], "any", false, false, false, 50), "html", null, true);
                echo "</li>
            </ul>
            <input type='submit' id='";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "id", [], "any", false, false, false, 52), "html", null, true);
                echo "' name='order' value='Book this car'/>
        </div>
    </td>

    ";
            }
            // line 57
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['car'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "    </tr>
    </table>
    </div>
</div>


</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "rent_car/rentcar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 58,  238 => 57,  230 => 52,  225 => 50,  221 => 49,  217 => 48,  213 => 47,  207 => 44,  203 => 43,  199 => 42,  196 => 41,  188 => 36,  183 => 34,  179 => 33,  175 => 32,  171 => 31,  165 => 28,  161 => 27,  157 => 26,  152 => 23,  149 => 22,  132 => 21,  118 => 10,  114 => 9,  111 => 8,  101 => 7,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Rent a Car{% endblock %}
{% block javascripts %}
{{ parent() }}
{% endblock %}
{% block body %}
<link rel=\"stylesheet\" href=\"css/rent_car.css\"/>
{{ include('includes/header.html.twig') }}
{{ include('includes/navbar.html.twig') }}

<div class=\"mainContainer\">
    <p id=\"containerTitle\">Car List</p>
    <div class=\"ProductContainer\">
        <div class=\"ProductList\">

  <table border='0'>
   <tr>
    </tr>
    <tr>
    {% for car in cars %}
    {% if (loop.index + 1) is divisible by(4) %}
    </tr>
    <tr>
    <td> <div class='car'>
            <img src='uploads/cars/{{car.carPic}}'/>
            <div id='carPrice'>{{car.carPrice}}DT</div>
            <p id='carName'>{{car.carName}}</p>
            <ul id='carInfo'>
            <li>Availability: Available</li>
            <li>Year: {{car.carYear}}</li>
            <li>Color: {{car.carColor}}</li>
            <li>Seats:{{car.carSeats}}</li>
            <li>Fuel: {{car.carFuel}}</li>
            </ul>
            <input type='submit' id='{{car.id}}' name='order' value='Book this car'/>
        </div>
    </td>

    {% else %}
    <td> <div class='car'>
            <img src='uploads/cars/{{car.carPic}}'/>
            <div id='carPrice'>{{car.carPrice}}DT</div>
            <p id='carName'>{{car.carName}}</p>
            <ul id='carInfo'>
            <li>Availability: Available</li>
            <li>Year: {{car.carYear}}</li>
            <li>Color: {{car.carColor}}</li>
            <li>Seats:{{car.carSeats}}</li>
            <li>Fuel: {{car.carFuel}}</li>
            </ul>
            <input type='submit' id='{{car.id}}' name='order' value='Book this car'/>
        </div>
    </td>

    {% endif %}
    {% endfor %}
    </tr>
    </table>
    </div>
</div>


</div>
{% endblock %}
", "rent_car/rentcar.html.twig", "C:\\xampp\\htdocs\\ARCars\\templates\\rent_car\\rentcar.html.twig");
    }
}
