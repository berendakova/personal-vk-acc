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

/* home.html.twig */
class __TwigTemplate_cffb243b63c8ec6679d736d2b83d8ce662810c95d8b2c43e3f0d975756583321 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

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
        // line 11
        $this->loadTemplate("includes/links.html.twig", "home.html.twig", 11)->display($context);
        // line 12
        echo "
</head>

<body>

";
        // line 17
        $this->loadTemplate("includes/header.html.twig", "home.html.twig", 17)->display($context);
        // line 18
        echo "
<!-- ======= Hero Section ======= -->
<section id=\"hero\" class=\"d-flex align-items-center\">

    <div class=\"container d-flex flex-column align-items-center justify-content-center\" data-aos=\"fade-up\">
        <h1>Are there interlocutors among your friends?</h1>
        <h2>This space will allow you to find common ground among your friends VKontakte</h2>

        <img src=\"assets/img/hero-img.png\" class=\"img-fluid hero-img\" alt=\"\" data-aos=\"zoom-in\" data-aos-delay=\"150\">
    </div>

</section><!-- End Hero -->

<main id=\"main\">

    <!-- ======= About Section ======= -->
    <section id=\"about\" class=\"about\">
        <div class=\"container\">

            <div class=\"row no-gutters\">
                <div class=\"content col-xl-5 d-flex align-items-stretch\" data-aos=\"fade-right\">
                    <div class=\"content\">
                        <h3>Voluptatem dignissimos provident quasi</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                        </p>
                        <a href=\"#\" class=\"about-btn\">About us <i class=\"bx bx-chevron-right\"></i></a>
                    </div>
                </div>

                </div>
            </div>

        </div>
    </section><!-- End About Section -->





<!-- ======= Footer ======= -->
<footer id=\"footer\">


</footer><!-- End Footer -->

<a href=\"#\" class=\"back-to-top\"><i class=\"icofont-simple-up\"></i></a>
<div id=\"preloader\"></div>

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
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 18,  64 => 17,  57 => 12,  55 => 11,  43 => 1,);
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

{% include 'includes/header.html.twig' %}

<!-- ======= Hero Section ======= -->
<section id=\"hero\" class=\"d-flex align-items-center\">

    <div class=\"container d-flex flex-column align-items-center justify-content-center\" data-aos=\"fade-up\">
        <h1>Are there interlocutors among your friends?</h1>
        <h2>This space will allow you to find common ground among your friends VKontakte</h2>

        <img src=\"assets/img/hero-img.png\" class=\"img-fluid hero-img\" alt=\"\" data-aos=\"zoom-in\" data-aos-delay=\"150\">
    </div>

</section><!-- End Hero -->

<main id=\"main\">

    <!-- ======= About Section ======= -->
    <section id=\"about\" class=\"about\">
        <div class=\"container\">

            <div class=\"row no-gutters\">
                <div class=\"content col-xl-5 d-flex align-items-stretch\" data-aos=\"fade-right\">
                    <div class=\"content\">
                        <h3>Voluptatem dignissimos provident quasi</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                        </p>
                        <a href=\"#\" class=\"about-btn\">About us <i class=\"bx bx-chevron-right\"></i></a>
                    </div>
                </div>

                </div>
            </div>

        </div>
    </section><!-- End About Section -->





<!-- ======= Footer ======= -->
<footer id=\"footer\">


</footer><!-- End Footer -->

<a href=\"#\" class=\"back-to-top\"><i class=\"icofont-simple-up\"></i></a>
<div id=\"preloader\"></div>

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

</html>", "home.html.twig", "/var/www/personal-vk-account.ru/templates/home.html.twig");
    }
}
