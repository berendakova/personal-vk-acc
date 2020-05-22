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

/* includes/head.html.twig */
class __TwigTemplate_1c8dbb34b18dc9ffd610aa59d21d6048e001ef7fc87c5a3727b48047ed28f254 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/head.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/head.html.twig"));

        // line 1
        echo "

    <link rel=\"stylesheet\" href=\"normalize.css\">
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
    <link href=\"lib/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\">
    <link href=\"lib/animate/animate.min.css\" rel=\"stylesheet\">
    <link href=\"lib/ionicons/css/ionicons.min.css\" rel=\"stylesheet\">
    <link href=\"lib/owlcarousel/assets/owl.carousel.min.css\" rel=\"stylesheet\">
    <link href=\"lib/lightbox/css/lightbox.min.css\" rel=\"stylesheet\">

    <!-- Favicons -->
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
    <link href=\"assets/css/style.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\">
    <link rel=\"stylesheet\"
          href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css\"/>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js\"></script>

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js\"></script>

</head>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "includes/head.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

    <link rel=\"stylesheet\" href=\"normalize.css\">
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
    <link href=\"lib/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\">
    <link href=\"lib/animate/animate.min.css\" rel=\"stylesheet\">
    <link href=\"lib/ionicons/css/ionicons.min.css\" rel=\"stylesheet\">
    <link href=\"lib/owlcarousel/assets/owl.carousel.min.css\" rel=\"stylesheet\">
    <link href=\"lib/lightbox/css/lightbox.min.css\" rel=\"stylesheet\">

    <!-- Favicons -->
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
    <link href=\"assets/css/style.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\">
    <link rel=\"stylesheet\"
          href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css\"/>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js\"></script>

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js\"></script>

</head>", "includes/head.html.twig", "/var/www/personal-vk-account.ru/templates/includes/head.html.twig");
    }
}
