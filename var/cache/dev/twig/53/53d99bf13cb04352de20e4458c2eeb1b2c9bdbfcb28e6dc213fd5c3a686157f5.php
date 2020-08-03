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

/* reservation/index.html.twig */
class __TwigTemplate_559a39862ad30c6afd923844db67678e154821d7bf63fb8da82ab4e363b44662 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["formReservation"]) || array_key_exists("formReservation", $context) ? $context["formReservation"] : (function () { throw new RuntimeError('Variable "formReservation" does not exist.', 3, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reservation/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Réservation
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
<h1>Effectuez votre Réservation</h1>

";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formReservation"]) || array_key_exists("formReservation", $context) ? $context["formReservation"] : (function () { throw new RuntimeError('Variable "formReservation" does not exist.', 14, $this->source); })()), 'form_start');
        echo "

";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formReservation"]) || array_key_exists("formReservation", $context) ? $context["formReservation"] : (function () { throw new RuntimeError('Variable "formReservation" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), 'row', ["attr" => ["placeholder" => "Nom"]]);
        echo "
";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formReservation"]) || array_key_exists("formReservation", $context) ? $context["formReservation"] : (function () { throw new RuntimeError('Variable "formReservation" does not exist.', 17, $this->source); })()), "firstname", [], "any", false, false, false, 17), 'row', ["attr" => ["placeholder" => "Prénom"]]);
        echo "
";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formReservation"]) || array_key_exists("formReservation", $context) ? $context["formReservation"] : (function () { throw new RuntimeError('Variable "formReservation" does not exist.', 18, $this->source); })()), "nom_ent", [], "any", false, false, false, 18), 'row', ["attr" => ["placeholder" => "Nom de votre entreprise (optionnel)"]]);
        echo "
";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formReservation"]) || array_key_exists("formReservation", $context) ? $context["formReservation"] : (function () { throw new RuntimeError('Variable "formReservation" does not exist.', 19, $this->source); })()), "siret", [], "any", false, false, false, 19), 'row', ["attr" => ["placeholder" => "Siret (optionnel)"]]);
        echo "
";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formReservation"]) || array_key_exists("formReservation", $context) ? $context["formReservation"] : (function () { throw new RuntimeError('Variable "formReservation" does not exist.', 20, $this->source); })()), "tel", [], "any", false, false, false, 20), 'row', ["attr" => ["placeholder" => "Tel"]]);
        echo "
";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formReservation"]) || array_key_exists("formReservation", $context) ? $context["formReservation"] : (function () { throw new RuntimeError('Variable "formReservation" does not exist.', 21, $this->source); })()), "email", [], "any", false, false, false, 21), 'row', ["attr" => ["placeholder" => "Email"]]);
        echo "
";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formReservation"]) || array_key_exists("formReservation", $context) ? $context["formReservation"] : (function () { throw new RuntimeError('Variable "formReservation" does not exist.', 22, $this->source); })()), "type", [], "any", false, false, false, 22), 'row');
        echo "

<button class=\"btn btn-primary mb-5\" type=\"submit\">Valider</button>

";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formReservation"]) || array_key_exists("formReservation", $context) ? $context["formReservation"] : (function () { throw new RuntimeError('Variable "formReservation" does not exist.', 26, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reservation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 26,  127 => 22,  123 => 21,  119 => 20,  115 => 19,  111 => 18,  107 => 17,  103 => 16,  98 => 14,  93 => 11,  83 => 10,  72 => 6,  62 => 5,  51 => 1,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% form_theme formReservation 'bootstrap_4_layout.html.twig' %}

{% block title %}
    Réservation
{% endblock %}


{% block body %}

<h1>Effectuez votre Réservation</h1>

{{ form_start(formReservation)}}

{{ form_row(formReservation.name, {'attr': {'placeholder': \"Nom\"}})}}
{{ form_row(formReservation.firstname, {'attr': {'placeholder': \"Prénom\"}})}}
{{ form_row(formReservation.nom_ent, {'attr': {'placeholder': \"Nom de votre entreprise (optionnel)\"}})}}
{{ form_row(formReservation.siret, {'attr': {'placeholder': \"Siret (optionnel)\"}})}}
{{ form_row(formReservation.tel, {'attr': {'placeholder': \"Tel\"}})}}
{{ form_row(formReservation.email, {'attr': {'placeholder': \"Email\"}})}}
{{ form_row(formReservation.type)}}

<button class=\"btn btn-primary mb-5\" type=\"submit\">Valider</button>

{{ form_end(formReservation)}}

{% endblock %}", "reservation/index.html.twig", "C:\\wamp-3.2.0\\www\\symfony\\marche\\templates\\reservation\\index.html.twig");
    }
}
