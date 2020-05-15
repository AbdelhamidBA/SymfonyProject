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

/* includes/navbar-connected.html.twig */
class __TwigTemplate_17b41d230b56f813149e741530519f09cea51e28c02d0db0b7e180bac63111da extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/navbar-connected.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/navbar-connected.html.twig"));

        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 4
        echo "<nav class=\"nav-co\">
    <ul>
        <li class=\"logo\"><span id=\"lg\">AR</span>CARS</li>
        <li><a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">HOME</a></li>
        ";
        // line 8
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 9
            echo "            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
            echo "\">DASHBOARD</a></li>
            <li><a href=\"";
            // line 10
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">LOGOUT</a></li>
        ";
        } else {
            // line 12
            echo "        ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 13
                echo "            <li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
                echo "\">CARS</a></li>
            <li><a href=\"";
                // line 14
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("loginPath");
                echo "\">PROFILE</a></li>
            <li><a href=\"";
                // line 15
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
                echo "\">LOGOUT</a></li>
        ";
            }
            // line 17
            echo "        ";
        }
        // line 18
        echo "    </ul>
</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 2
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/navbar-connected.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "includes/navbar-connected.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 2,  98 => 1,  87 => 18,  84 => 17,  79 => 15,  75 => 14,  70 => 13,  67 => 12,  62 => 10,  57 => 9,  55 => 8,  51 => 7,  46 => 4,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/navbar-connected.css') }}\"/>
{% endblock %}
<nav class=\"nav-co\">
    <ul>
        <li class=\"logo\"><span id=\"lg\">AR</span>CARS</li>
        <li><a href=\"{{path('home')}}\">HOME</a></li>
        {% if is_granted('ROLE_ADMIN') %}
            <li><a href=\"{{path('admin_dashboard')}}\">DASHBOARD</a></li>
            <li><a href=\"{{path('logout')}}\">LOGOUT</a></li>
        {% else %}
        {% if is_granted('ROLE_USER') %}
            <li><a href=\"{{path('home')}}\">CARS</a></li>
            <li><a href=\"{{path('loginPath')}}\">PROFILE</a></li>
            <li><a href=\"{{path('logout')}}\">LOGOUT</a></li>
        {% endif %}
        {% endif %}
    </ul>
</nav>", "includes/navbar-connected.html.twig", "C:\\xampp\\htdocs\\ARCars\\templates\\includes\\navbar-connected.html.twig");
    }
}
