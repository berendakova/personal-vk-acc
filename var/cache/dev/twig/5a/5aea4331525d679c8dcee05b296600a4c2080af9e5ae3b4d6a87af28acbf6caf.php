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

/* includes/links.html.twig */
class __TwigTemplate_10e3a3d7dd6e18589acc242f39441cc1dc5fba1f9cd3c1064652d79c637c6025 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/links.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/links.html.twig"));

        // line 1
        echo "<!-- Favicons -->
<link href=\"assets/img/favicon.png\" rel=\"icon\">
<link href=\"assets/img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

<!-- Google Fonts -->
<link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Krub:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

<!-- Vendor CSS Files -->
<link href=\"assets/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
<link href=\"assets/vendor/icofont/icofont.min.css\" rel=\"stylesheet\">
<link href=\"assets/vendor/boxicons/css/boxicons.min.css\" rel=\"stylesheet\">
<link href=\"assets/vendor/owl.carousel/assets/owl.carousel.min.css\" rel=\"stylesheet\">
<link href=\"assets/vendor/venobox/venobox.css\" rel=\"stylesheet\">
<link href=\"assets/vendor/aos/aos.css\" rel=\"stylesheet\">

<!-- Template Main CSS File -->
<link href=\"assets/css/style.css\" rel=\"stylesheet\">";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "includes/links.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Favicons -->
<link href=\"assets/img/favicon.png\" rel=\"icon\">
<link href=\"assets/img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

<!-- Google Fonts -->
<link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Krub:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

<!-- Vendor CSS Files -->
<link href=\"assets/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
<link href=\"assets/vendor/icofont/icofont.min.css\" rel=\"stylesheet\">
<link href=\"assets/vendor/boxicons/css/boxicons.min.css\" rel=\"stylesheet\">
<link href=\"assets/vendor/owl.carousel/assets/owl.carousel.min.css\" rel=\"stylesheet\">
<link href=\"assets/vendor/venobox/venobox.css\" rel=\"stylesheet\">
<link href=\"assets/vendor/aos/aos.css\" rel=\"stylesheet\">

<!-- Template Main CSS File -->
<link href=\"assets/css/style.css\" rel=\"stylesheet\">", "includes/links.html.twig", "/var/www/personal-vk-account.ru/templates/includes/links.html.twig");
    }
}
