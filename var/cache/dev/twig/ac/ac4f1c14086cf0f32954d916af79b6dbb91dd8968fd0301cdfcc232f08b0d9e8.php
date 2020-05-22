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

/* includes/header.html.twig */
class __TwigTemplate_5c335b076c94e88f4e7c4666e6d58d9be0802c00c74674ed1e34102a6ddb4226 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/header.html.twig"));

        // line 1
        echo "
<!-- ======= Header ======= -->
<header id=\"header\" class=\"fixed-top\">
    <div class=\"container d-flex align-items-center\">

        <h1 class=\"logo mr-auto\"><a href=\"index.html\">Bikin</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href=\"index.html\" class=\"logo mr-auto\"><img src=\"assets/img/logo.png\" alt=\"\" class=\"img-fluid\"></a>-->

        <nav class=\"nav-menu d-none d-lg-block\">
            <ul>

                <li class=\"active\"><a href=\"/home\">Home</a></li>


                ";
        // line 16
        if ( !twig_test_empty((isset($context["authentication"]) || array_key_exists("authentication", $context) ? $context["authentication"] : (function () { throw new RuntimeError('Variable "authentication" does not exist.', 16, $this->source); })()))) {
            // line 17
            echo "
                    <li><a href=\"/statistic\">Statistic</a></li>
                    <li><a href=\"/logout\">Logout</a></li>

                ";
        }
        // line 22
        echo "                ";
        if (twig_test_empty((isset($context["authentication"]) || array_key_exists("authentication", $context) ? $context["authentication"] : (function () { throw new RuntimeError('Variable "authentication" does not exist.', 22, $this->source); })()))) {
            // line 23
            echo "                    <li><a href=\"/login\">Sign In</a></li>
                    <li><a href=\"/register\">Sign Up</a></li>

                ";
        }
        // line 27
        echo "
            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "includes/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 27,  72 => 23,  69 => 22,  62 => 17,  60 => 16,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!-- ======= Header ======= -->
<header id=\"header\" class=\"fixed-top\">
    <div class=\"container d-flex align-items-center\">

        <h1 class=\"logo mr-auto\"><a href=\"index.html\">Bikin</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href=\"index.html\" class=\"logo mr-auto\"><img src=\"assets/img/logo.png\" alt=\"\" class=\"img-fluid\"></a>-->

        <nav class=\"nav-menu d-none d-lg-block\">
            <ul>

                <li class=\"active\"><a href=\"/home\">Home</a></li>


                {% if authentication is not empty %}

                    <li><a href=\"/statistic\">Statistic</a></li>
                    <li><a href=\"/logout\">Logout</a></li>

                {% endif %}
                {% if authentication is empty %}
                    <li><a href=\"/login\">Sign In</a></li>
                    <li><a href=\"/register\">Sign Up</a></li>

                {% endif %}

            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->", "includes/header.html.twig", "/var/www/personal-vk-account.ru/templates/includes/header.html.twig");
    }
}
