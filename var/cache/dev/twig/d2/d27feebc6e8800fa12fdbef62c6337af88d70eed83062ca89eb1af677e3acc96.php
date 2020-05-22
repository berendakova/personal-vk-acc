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

/* statistics.html.twig */
class __TwigTemplate_047300edf21cda511efd18703775c825112a7748d4e0342d3318960d7212b081 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "statistics.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "statistics.html.twig"));

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
        $this->loadTemplate("includes/links.html.twig", "statistics.html.twig", 12)->display($context);
        // line 13
        echo "
</head>

<body>

";
        // line 18
        $this->loadTemplate("includes/header.html.twig", "statistics.html.twig", 18)->display($context);
        // line 19
        echo "

<main id=\"main\">
    <div class=\"container d-flex flex-column align-items-center justify-content-center\" data-aos=\"fade-up\">
        <h1 style=\"margin-top: 150px\">This is your statistic of you and your friends</h1>
        <h1 style=\"margin-top: 50px\"><p style=\"margin-left: 400px; color: #5f5b96\">";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "html", null, true);
        echo ",</p> we found your most
            popular interests among VKontakte communities
        </h1>
    </div>
    <section id=\"steps\" class=\"steps\" style=\"margin-top: 100px\">

        <div class=\"container\">
            <div class=\"row no-gutters\" data-aos=\"fade-up\">

                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["act"]) {
            // line 34
            echo "                    <div class=\"col-lg-4 col-md-6 content-item\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                        <span></span>
                        <h4>";
            // line 36
            echo twig_escape_filter($this->env, $context["act"], "html", null, true);
            echo "</h4>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['act'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "

            </div>

        </div>
    </section><!-- End Steps Section -->


    <!-- ======= Portfolio Section ======= -->
    <section id=\"portfolio\" class=\"portfolio\">
        <div class=\"container\" data-aos=\"fade-up\">

            <div class=\"section-title\">
                <h2>we have collected statistics of your friends according to your interests</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class=\"row\">
                <div class=\"col-lg-12 d-flex justify-content-center\">
                    <ul id=\"portfolio-flters\">
                        <li data-filter=\".filter-friend\">Friends</li>
                        <li data-filter=\".filter-good\">Good Friends</li>
                        <li data-filter=\".filter-best\">Best Friends</li>
                    </ul>
                </div>
            </div>

            <div class=\"row portfolio-container\">
                ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["friends"]) || array_key_exists("friends", $context) ? $context["friends"] : (function () { throw new RuntimeError('Variable "friends" does not exist.', 69, $this->source); })()), "best", [], "any", false, false, false, 69));
        foreach ($context['_seq'] as $context["_key"] => $context["bestFriend"]) {
            // line 70
            echo "                    <div class=\"col-lg-4 col-md-6 portfolio-item filter-best\">
                        <div class=\"portfolio-wrap\">
                            <img src=\"";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bestFriend"], "photo", [], "any", false, false, false, 72), "html", null, true);
            echo "\" class=\"img-fluid\" alt=\"\">
                            <div class=\"portfolio-info\">
                                <h4>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bestFriend"], "firstName", [], "any", false, false, false, 74), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bestFriend"], "lastName", [], "any", false, false, false, 74), "html", null, true);
            echo "</h4>
                                <div class=\"portfolio-links\">
                                    <a href=\"";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bestFriend"], "photo", [], "any", false, false, false, 76), "html", null, true);
            echo "\" data-gall=\"portfolioGallery\"
                                       class=\"venobox\" title=\"\"><i class=\"bx bx-plus\"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bestFriend'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "
                ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["friends"]) || array_key_exists("friends", $context) ? $context["friends"] : (function () { throw new RuntimeError('Variable "friends" does not exist.', 84, $this->source); })()), "good", [], "any", false, false, false, 84));
        foreach ($context['_seq'] as $context["_key"] => $context["goodFriend"]) {
            // line 85
            echo "                    <div class=\"col-lg-4 col-md-6 portfolio-item filter-good\">
                        <div class=\"portfolio-wrap\">
                            <img src=\"";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["goodFriend"], "photo", [], "any", false, false, false, 87), "html", null, true);
            echo "\" class=\"img-fluid\" alt=\"\">
                            <div class=\"portfolio-info\">
                                <h4>";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["goodFriend"], "firstName", [], "any", false, false, false, 89), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["goodFriend"], "lastName", [], "any", false, false, false, 89), "html", null, true);
            echo "</h4>
                                <div class=\"portfolio-links\">
                                    <a href=\"";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["goodFriend"], "photo", [], "any", false, false, false, 91), "html", null, true);
            echo "\" data-gall=\"portfolioGallery\"
                                       class=\"venobox\" title=\"\"><i class=\"bx bx-plus\"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['goodFriend'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "
                ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["friends"]) || array_key_exists("friends", $context) ? $context["friends"] : (function () { throw new RuntimeError('Variable "friends" does not exist.', 99, $this->source); })()), "friends", [], "any", false, false, false, 99));
        foreach ($context['_seq'] as $context["_key"] => $context["friend"]) {
            // line 100
            echo "                    <div class=\"col-lg-4 col-md-6 portfolio-item filter-friend\">
                        <div class=\"portfolio-wrap\">
                            <img src=\"";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["friend"], "photo", [], "any", false, false, false, 102), "html", null, true);
            echo "\" class=\"img-fluid\" alt=\"\">
                            <div class=\"portfolio-info\">
                                <h4>";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["friend"], "firstName", [], "any", false, false, false, 104), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["friend"], "lastName", [], "any", false, false, false, 104), "html", null, true);
            echo "</h4>
                                <div class=\"portfolio-links\">
                                    <a href=\"";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["friend"], "photo", [], "any", false, false, false, 106), "html", null, true);
            echo "\" data-gall=\"portfolioGallery\"
                                       class=\"venobox\" title=\"\"><i class=\"bx bx-plus\"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friend'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "            </div>

        </div>
    </section><!-- End Portfolio Section -->
    <!-- ======= Frequently Asked Questions Section ======= -->
";
        // line 120
        echo "
";
        // line 124
        echo "
";
        // line 126
        echo "
";
        // line 138
        echo "

";
        // line 151
        echo "
";
        // line 157
        echo "
";
        // line 160
        echo "
";
        // line 163
        echo "
";
        // line 167
        echo "
";
        // line 170
        echo "
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
        return "statistics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 170,  272 => 167,  269 => 163,  266 => 160,  263 => 157,  260 => 151,  256 => 138,  253 => 126,  250 => 124,  247 => 120,  240 => 113,  227 => 106,  220 => 104,  215 => 102,  211 => 100,  207 => 99,  204 => 98,  191 => 91,  184 => 89,  179 => 87,  175 => 85,  171 => 84,  168 => 83,  155 => 76,  148 => 74,  143 => 72,  139 => 70,  135 => 69,  103 => 39,  94 => 36,  90 => 34,  86 => 33,  74 => 24,  67 => 19,  65 => 18,  58 => 13,  56 => 12,  43 => 1,);
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


<main id=\"main\">
    <div class=\"container d-flex flex-column align-items-center justify-content-center\" data-aos=\"fade-up\">
        <h1 style=\"margin-top: 150px\">This is your statistic of you and your friends</h1>
        <h1 style=\"margin-top: 50px\"><p style=\"margin-left: 400px; color: #5f5b96\">{{ user }},</p> we found your most
            popular interests among VKontakte communities
        </h1>
    </div>
    <section id=\"steps\" class=\"steps\" style=\"margin-top: 100px\">

        <div class=\"container\">
            <div class=\"row no-gutters\" data-aos=\"fade-up\">

                {% for act in activity %}
                    <div class=\"col-lg-4 col-md-6 content-item\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                        <span></span>
                        <h4>{{ act }}</h4>
                    </div>
                {% endfor %}


            </div>

        </div>
    </section><!-- End Steps Section -->


    <!-- ======= Portfolio Section ======= -->
    <section id=\"portfolio\" class=\"portfolio\">
        <div class=\"container\" data-aos=\"fade-up\">

            <div class=\"section-title\">
                <h2>we have collected statistics of your friends according to your interests</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class=\"row\">
                <div class=\"col-lg-12 d-flex justify-content-center\">
                    <ul id=\"portfolio-flters\">
                        <li data-filter=\".filter-friend\">Friends</li>
                        <li data-filter=\".filter-good\">Good Friends</li>
                        <li data-filter=\".filter-best\">Best Friends</li>
                    </ul>
                </div>
            </div>

            <div class=\"row portfolio-container\">
                {% for bestFriend in friends.best %}
                    <div class=\"col-lg-4 col-md-6 portfolio-item filter-best\">
                        <div class=\"portfolio-wrap\">
                            <img src=\"{{ bestFriend.photo }}\" class=\"img-fluid\" alt=\"\">
                            <div class=\"portfolio-info\">
                                <h4>{{ bestFriend.firstName }} {{ bestFriend.lastName }}</h4>
                                <div class=\"portfolio-links\">
                                    <a href=\"{{ bestFriend.photo }}\" data-gall=\"portfolioGallery\"
                                       class=\"venobox\" title=\"\"><i class=\"bx bx-plus\"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                {% endfor %}

                {% for goodFriend in friends.good %}
                    <div class=\"col-lg-4 col-md-6 portfolio-item filter-good\">
                        <div class=\"portfolio-wrap\">
                            <img src=\"{{ goodFriend.photo }}\" class=\"img-fluid\" alt=\"\">
                            <div class=\"portfolio-info\">
                                <h4>{{ goodFriend.firstName }} {{ goodFriend.lastName }}</h4>
                                <div class=\"portfolio-links\">
                                    <a href=\"{{ goodFriend.photo }}\" data-gall=\"portfolioGallery\"
                                       class=\"venobox\" title=\"\"><i class=\"bx bx-plus\"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                {% endfor %}

                {% for friend in friends.friends %}
                    <div class=\"col-lg-4 col-md-6 portfolio-item filter-friend\">
                        <div class=\"portfolio-wrap\">
                            <img src=\"{{ friend.photo }}\" class=\"img-fluid\" alt=\"\">
                            <div class=\"portfolio-info\">
                                <h4>{{ friend.firstName }} {{ friend.lastName }}</h4>
                                <div class=\"portfolio-links\">
                                    <a href=\"{{ friend.photo }}\" data-gall=\"portfolioGallery\"
                                       class=\"venobox\" title=\"\"><i class=\"bx bx-plus\"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>

        </div>
    </section><!-- End Portfolio Section -->
    <!-- ======= Frequently Asked Questions Section ======= -->
{#    <section id=\"faq\" class=\"faq\">#}
{#        <div class=\"container\" data-aos=\"fade-up\">#}

{#            <div class=\"section-title\">#}
{#                <h2>List of your friends, good friends and bestFriends</h2>#}
{#            </div>#}

{#            <ul class=\"faq-list\">#}

{#                <li data-aos=\"fade-up\" data-aos-delay=\"100\">#}
{#                    <a data-toggle=\"collapse\" class=\"\" href=\"#faq1\">Your good friends <i#}
{#                                class=\"icofont-simple-up\"></i></a>#}
{#                    <div id=\"faq1\" class=\"collapse show\" data-parent=\".faq-list\">#}
{#                        {% for friend in friend %}#}
{#                            <p>#}
{#                                {{ friend.userName }}   {{ friend.userLastName }}#}
{#                            </p>#}
{#                        {% endfor %}#}
{#                    </div>#}
{#                </li>#}


{#                <li data-aos=\"fade-up\" data-aos-delay=\"200\">#}
{#                    <a data-toggle=\"collapse\" href=\"#faq2\" class=\"collapsed\">Your good friends <i#}
{#                                class=\"icofont-simple-up\"></i></a>#}
{#                    <div id=\"faq2\" class=\"collapse\" data-parent=\".faq-list\">#}
{#                        {% for gfriends in gfriends %}#}
{#                            <p>#}
{#                                {{ gfriends.userName }}  {{ gfriends.userLastName }}#}
{#                            </p>#}
{#                        {% endfor %}#}
{#                    </div>#}
{#                </li>#}

{#                <li data-aos=\"fade-up\" data-aos-delay=\"300\">#}
{#                    <a data-toggle=\"collapse\" href=\"#faq3\" class=\"collapsed\">Your best friends <i#}
{#                                class=\"icofont-simple-up\"></i></a>#}
{#                    <div id=\"faq3\" class=\"collapse\" data-parent=\".faq-list\">#}
{#                        {% for bfriends in bfriends %}#}

{#                            <p>#}
{#                                {{ bfriends.userName }}  {{ bfriends.userLastName }}#}

{#                            </p>#}
{#                        {% endfor %}#}

{#                    </div>#}
{#                </li>#}
{#            </ul>#}

{#        </div>#}
{#    </section>#}

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

</html>", "statistics.html.twig", "/var/www/personal-vk-account.ru/templates/statistics.html.twig");
    }
}
