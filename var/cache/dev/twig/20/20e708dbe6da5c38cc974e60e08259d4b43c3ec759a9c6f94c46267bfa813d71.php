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

/* bundles/TwigBundle/Exception/error404.html.twig */
class __TwigTemplate_82f6a3602d9eb43b4165717d92486afc52e4ceb34e4ec741d0c92078a64acb88 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bundles/TwigBundle/Exception/error404.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bundles/TwigBundle/Exception/error404.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

    <title>Bikin Bootstrap Template - Index</title>
    <meta content=\"\" name=\"descriptison\">
    <meta content=\"\" name=\"keywords\">

    ";
        // line 12
        $this->loadTemplate("includes/links.html.twig", "bundles/TwigBundle/Exception/error404.html.twig", 12)->display($context);
        // line 13
        echo "
</head>

<body>


<!-- ======= Header ======= -->
<header id=\"header\" class=\"fixed-top\">
    <div class=\"container d-flex align-items-center\">

        <h1 class=\"logo mr-auto\"><a href=\"index.html\">Bikin</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href=\"index.html\" class=\"logo mr-auto\"><img src=\"assets/img/logo.png\" alt=\"\" class=\"img-fluid\"></a>-->

        <nav class=\"nav-menu d-none d-lg-block\">
            <ul>

                <li class=\"active\"><a href=\"/home\">Home</a></li>


            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->

<main id=\"main\">
    <div  style=\"margin-top: 250px\" class=\"container d-flex flex-column align-items-center justify-content-center\" data-aos=\"fade-up\">
        <h2 style=\"margin-top: 150px\">CANT FIND THIS PAGE - 404 HOT FOUND</h2>
    </div>
    <section id=\"steps\" class=\"steps\" style=\"margin-top: 100px\">

    </section><!-- End Steps Section -->

    <!-- Vendor JS Files -->
    <script src=\"assets/vendor/jquery/jquery.min.js\"></script>
    <script src=\"assets/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
    <script src=\"assets/vendor/jquery.easing/jquery.easing.min.js\"></script>
    <script src=\"assets/vendor/php-email-form/validate.js\"></script>
    <script src=\"assets/vendor/owl.carousel/owl.carousel.min.js\"></script>
    <script src=\"assets/vendor/isotope-layout/isotope.pkgd.min.js\"></script>
    <script src=\"assets/vendor/venobox/venobox.min.js\"></script>
    <script src=\"assets/vendor/aos/aos.js\"></script>

    <!-- Template Main JS File -->
    <script src=\"assets/js/main.js\"></script>

</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "bundles/TwigBundle/Exception/error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 13,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

    <title>Bikin Bootstrap Template - Index</title>
    <meta content=\"\" name=\"descriptison\">
    <meta content=\"\" name=\"keywords\">

    {% include 'includes/links.html.twig' %}

</head>

<body>


<!-- ======= Header ======= -->
<header id=\"header\" class=\"fixed-top\">
    <div class=\"container d-flex align-items-center\">

        <h1 class=\"logo mr-auto\"><a href=\"index.html\">Bikin</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href=\"index.html\" class=\"logo mr-auto\"><img src=\"assets/img/logo.png\" alt=\"\" class=\"img-fluid\"></a>-->

        <nav class=\"nav-menu d-none d-lg-block\">
            <ul>

                <li class=\"active\"><a href=\"/home\">Home</a></li>


            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->

<main id=\"main\">
    <div  style=\"margin-top: 250px\" class=\"container d-flex flex-column align-items-center justify-content-center\" data-aos=\"fade-up\">
        <h2 style=\"margin-top: 150px\">CANT FIND THIS PAGE - 404 HOT FOUND</h2>
    </div>
    <section id=\"steps\" class=\"steps\" style=\"margin-top: 100px\">

    </section><!-- End Steps Section -->

    <!-- Vendor JS Files -->
    <script src=\"assets/vendor/jquery/jquery.min.js\"></script>
    <script src=\"assets/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
    <script src=\"assets/vendor/jquery.easing/jquery.easing.min.js\"></script>
    <script src=\"assets/vendor/php-email-form/validate.js\"></script>
    <script src=\"assets/vendor/owl.carousel/owl.carousel.min.js\"></script>
    <script src=\"assets/vendor/isotope-layout/isotope.pkgd.min.js\"></script>
    <script src=\"assets/vendor/venobox/venobox.min.js\"></script>
    <script src=\"assets/vendor/aos/aos.js\"></script>

    <!-- Template Main JS File -->
    <script src=\"assets/js/main.js\"></script>

</body>

</html>", "bundles/TwigBundle/Exception/error404.html.twig", "/var/www/personal-vk-account.ru/templates/bundles/TwigBundle/Exception/error404.html.twig");
    }
}
