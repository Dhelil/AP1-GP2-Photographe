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

/* page_contact/index.html.twig */
class __TwigTemplate_f905b8bf6cf5176b4745c92fd701b708 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_contact/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page_contact/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Contact
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<style>
\t\t.example-wrapper {
\t\t\tmargin: 1em auto;
\t\t\tmax-width: 800px;
\t\t\twidth: 95%;
\t\t\tfont: 18px / 1.5 sans-serif;
\t\t}
\t\t.example-wrapper code {
\t\t\tbackground: #F5F5F5;
\t\t\tpadding: 2px 6px;
\t\t}
\t</style>

\t<div class=\"example-wrapper\">
\t\t<div class=\"menu-contact\">
\t\t\t<div class=\"contact-titre\">
\t\t\t\t<h1 class=\"titre-contact\">Contact</h1>
\t\t\t</div>
\t\t\t<div class=\"\" contact-barre>
\t\t\t\t<hr>
\t\t\t</div>
\t\t\t";
        // line 28
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28)) {
            // line 29
            echo "\t\t\t\t";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'form_start');
            echo "
\t\t\t\t<div class=\"contact-infosa\">
\t\t\t\t\t<input class=\"input-email\" ";
            // line 31
            echo " type=\"text\" placeholder=\"E-mail...\" required>
\t\t\t\t\t<input class=\"input-objet\" name=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "objetDemande", [], "any", false, false, false, 32)), "html", null, true);
            echo "\" type=\"text\" placeholder=\"Objet...\" required>
\t\t\t\t</div>
\t\t\t\t<div class=\"contact-infosb\">
\t\t\t\t\t<input class=\"input-telephone\" ";
            // line 35
            echo " type=\"text\" placeholder=\"Telephone...\" required>
\t\t\t\t\t<input class=\"input-nom\" ";
            // line 36
            echo " type=\"text\" placeholder=\"Nom...\" required>
\t\t\t\t</div>
\t\t\t\t<div class=\"contact-commentaire\">
\t\t\t\t\t<p>Commentaire</P>
\t\t\t\t</div>
\t\t\t\t<div class=\"contact-infosc\">
\t\t\t\t\t<textarea class=\"textarea-commentaire\" name=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "descriptionDemande", [], "any", false, false, false, 42)), "html", null, true);
            echo "\" id=\"commentaire\" name=\"commentaire\" placeholder=\"Votre raison de contact ici...\" required></textarea>
\t\t\t\t</div>
\t\t\t\t<div class=\"contact-bouton\">
\t\t\t\t\t<button class=\"submit-button\" type=\"submit\">Submit</button>
\t\t\t\t</div>
\t\t\t\t";
            // line 47
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), 'form_end');
            echo "
\t\t\t";
        } else {
            // line 49
            echo "\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t<p>Vous devez être connecté pour pouvoir contacter un administrateur</p>
\t\t\t\t</div>
\t\t\t<div class=\"contact-bouton\">
\t\t\t<a href=\"";
            // line 53
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"submit-button\">Connectez-vous ici</a></div>
\t\t\t";
        }
        // line 55
        echo "\t\t</div>

\t\t";
        // line 57
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), 'errors')) {
            // line 58
            echo "\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t";
            // line 59
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), 'errors');
            echo "
\t\t\t</div>
\t\t";
        }
        // line 62
        echo "
\t</div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "page_contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 62,  158 => 59,  155 => 58,  153 => 57,  149 => 55,  144 => 53,  138 => 49,  133 => 47,  125 => 42,  117 => 36,  114 => 35,  108 => 32,  105 => 31,  99 => 29,  97 => 28,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Contact
{% endblock %}

{% block body %}
\t<style>
\t\t.example-wrapper {
\t\t\tmargin: 1em auto;
\t\t\tmax-width: 800px;
\t\t\twidth: 95%;
\t\t\tfont: 18px / 1.5 sans-serif;
\t\t}
\t\t.example-wrapper code {
\t\t\tbackground: #F5F5F5;
\t\t\tpadding: 2px 6px;
\t\t}
\t</style>

\t<div class=\"example-wrapper\">
\t\t<div class=\"menu-contact\">
\t\t\t<div class=\"contact-titre\">
\t\t\t\t<h1 class=\"titre-contact\">Contact</h1>
\t\t\t</div>
\t\t\t<div class=\"\" contact-barre>
\t\t\t\t<hr>
\t\t\t</div>
\t\t\t{% if app.user %}
\t\t\t\t{{ form_start(form) }}
\t\t\t\t<div class=\"contact-infosa\">
\t\t\t\t\t<input class=\"input-email\" {#name=\"{{ field_name(form.dateDemande) }}\"#} type=\"text\" placeholder=\"E-mail...\" required>
\t\t\t\t\t<input class=\"input-objet\" name=\"{{ field_name(form.objetDemande) }}\" type=\"text\" placeholder=\"Objet...\" required>
\t\t\t\t</div>
\t\t\t\t<div class=\"contact-infosb\">
\t\t\t\t\t<input class=\"input-telephone\" {#name=\"{{ field_name(form.enfant) }}\"#} type=\"text\" placeholder=\"Telephone...\" required>
\t\t\t\t\t<input class=\"input-nom\" {#name=\"{{ field_name(form.idDemandeUser) }}\"#} type=\"text\" placeholder=\"Nom...\" required>
\t\t\t\t</div>
\t\t\t\t<div class=\"contact-commentaire\">
\t\t\t\t\t<p>Commentaire</P>
\t\t\t\t</div>
\t\t\t\t<div class=\"contact-infosc\">
\t\t\t\t\t<textarea class=\"textarea-commentaire\" name=\"{{ field_name(form.descriptionDemande) }}\" id=\"commentaire\" name=\"commentaire\" placeholder=\"Votre raison de contact ici...\" required></textarea>
\t\t\t\t</div>
\t\t\t\t<div class=\"contact-bouton\">
\t\t\t\t\t<button class=\"submit-button\" type=\"submit\">Submit</button>
\t\t\t\t</div>
\t\t\t\t{{ form_end(form) }}
\t\t\t{% else %}
\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t<p>Vous devez être connecté pour pouvoir contacter un administrateur</p>
\t\t\t\t</div>
\t\t\t<div class=\"contact-bouton\">
\t\t\t<a href=\"{{ path('app_login') }}\" class=\"submit-button\">Connectez-vous ici</a></div>
\t\t\t{% endif %}
\t\t</div>

\t\t{% if form_errors(form) %}
\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t{{ form_errors(form) }}
\t\t\t</div>
\t\t{% endif %}

\t</div>


{% endblock %}
", "page_contact/index.html.twig", "C:\\Users\\izikkii\\Pictures\\SIO-2\\AP\\AP1-GROUPE2\\projet\\vrai de vrai\\AP1-GP2-Photographe\\AP1-GP2-PhoTographe\\templates\\page_contact\\index.html.twig");
    }
}
