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

/* includes/navbar.html.twig */
class __TwigTemplate_fb1c391c1423ff0faaa5096961a4edf725b8d1ea50a3531cc0a355d44bf4d286 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/navbar.html.twig"));

        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 4
        echo "<nav class=\"nav\">
    <ul>
        <li class=\"logo\"><span id=\"lg\">AR</span>CARS</li>
        <li><a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">HOME</a></li>
        ";
        // line 8
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8)) {
            // line 9
            echo "            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            echo "\">CARS</a></li>
            <li><a href=\"";
            // line 10
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("loginPath");
            echo "\">LOGIN</a></li>
            <li><a href=\"";
            // line 11
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">REGISTER</a></li>
        ";
        } else {
            // line 12
            echo " 
        ";
            // line 13
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 14
                echo "           
             <li><a href=\"";
                // line 15
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
                echo "\">DASHBOARD</a></li>
            <li><a href=\"";
                // line 16
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
                echo "\">LOGOUT</a></li>
        ";
            } else {
                // line 18
                echo "        ";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                    // line 19
                    echo "            <li><a href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
                    echo "\">CARS</a></li>
            <li><a href=\"";
                    // line 20
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("loginPath");
                    echo "\">PROFILE</a></li>
            <li><a href=\"";
                    // line 21
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
                    echo "\">LOGOUT</a></li>
        ";
                }
                // line 23
                echo "        ";
            }
            // line 24
            echo "        ";
        }
        // line 25
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/navbar.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "includes/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 2,  122 => 1,  111 => 25,  108 => 24,  105 => 23,  100 => 21,  96 => 20,  91 => 19,  88 => 18,  83 => 16,  79 => 15,  76 => 14,  74 => 13,  71 => 12,  66 => 11,  62 => 10,  57 => 9,  55 => 8,  51 => 7,  46 => 4,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/navbar.css') }}\"/>
{% endblock %}
<nav class=\"nav\">
    <ul>
        <li class=\"logo\"><span id=\"lg\">AR</span>CARS</li>
        <li><a href=\"{{path('home')}}\">HOME</a></li>
        {% if not app.user %}
            <li><a href=\"{{path('home')}}\">CARS</a></li>
            <li><a href=\"{{path('loginPath')}}\">LOGIN</a></li>
            <li><a href=\"{{path('register')}}\">REGISTER</a></li>
        {% else %} 
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
        {% endif %}
    </ul>
</nav>", "includes/navbar.html.twig", "C:\\xampp\\htdocs\\ARCars\\templates\\includes\\navbar.html.twig");
    }
}
