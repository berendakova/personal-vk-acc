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

/* registration/registration.html.twig */
class __TwigTemplate_62938506c7fa8d354d89f8f29c4c6c59c92fae5c4de3bc14b5631f4171b905d4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/registration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/registration.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Registration</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Sign In Form</title>
";
        // line 8
        $this->loadTemplate("includes/head.html.twig", "registration/registration.html.twig", 8)->display($context);
        // line 9
        $this->loadTemplate("includes/header.html.twig", "registration/registration.html.twig", 9)->display($context);
        // line 10
        echo "<body>

<h1 style=\"margin-top: 150px\">Register </h1>

    ";
        // line 15
        echo "    ";
        $context["formErrors"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 15, $this->source); })()), "vars", [], "any", false, false, false, 15), "errors", [], "any", false, false, false, 15), "form", [], "any", false, false, false, 15), "getErrors", [0 => true], "method", false, false, false, 15);
        // line 16
        echo "    ";
        if (twig_length_filter($this->env, (isset($context["formErrors"]) || array_key_exists("formErrors", $context) ? $context["formErrors"] : (function () { throw new RuntimeError('Variable "formErrors" does not exist.', 16, $this->source); })()))) {
            // line 24
            echo "    ";
        }
        // line 25
        echo "<div >
    ";
        // line 27
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 27, $this->source); })()), 'form_start');
        echo "
    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 28, $this->source); })()), "name", [], "any", false, false, false, 28), 'row');
        echo "
    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 29, $this->source); })()), "email", [], "any", false, false, false, 29), 'row');
        echo "
    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 30, $this->source); })()), "screenName", [], "any", false, false, false, 30), 'row');
        echo "
    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 31, $this->source); })()), "plainPassword", [], "any", false, false, false, 31), 'row');
        echo "
    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 32, $this->source); })()), "agreeTerms", [], "any", false, false, false, 32), 'row');
        echo "

    <button class=\"button\" >Register</button>
    ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 35, $this->source); })()), 'form_end');
        echo "
</div>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "registration/registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 35,  95 => 32,  91 => 31,  87 => 30,  83 => 29,  79 => 28,  74 => 27,  71 => 25,  68 => 24,  65 => 16,  62 => 15,  56 => 10,  54 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Registration</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Sign In Form</title>
{% include 'includes/head.html.twig' %}
{% include 'includes/header.html.twig' %}
<body>

<h1 style=\"margin-top: 150px\">Register </h1>

    {# If there are any errors on the form, display them #}
    {% set formErrors = registrationForm.vars.errors.form.getErrors(true) %}
    {% if formErrors|length %}
{#        <div class=\"alert alert-danger\">
            <ul>
                {% for error in formErrors %}
                    <li>{{ error.message }}</li>
                {% endfor %}
            </ul>
        </div>#}
    {% endif %}
<div >
    {# Render the Form #}
    {{ form_start(registrationForm) }}
    {{ form_row(registrationForm.name) }}
    {{ form_row(registrationForm.email) }}
    {{ form_row(registrationForm.screenName) }}
    {{ form_row(registrationForm.plainPassword) }}
    {{ form_row(registrationForm.agreeTerms) }}

    <button class=\"button\" >Register</button>
    {{ form_end(registrationForm) }}
</div>
</body>
</html>
", "registration/registration.html.twig", "/var/www/personal-vk-account.ru/templates/registration/registration.html.twig");
    }
}
