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

/* registration/register.html.twig */
class __TwigTemplate_202559f2e2c952fe003d2c2f0e62c9fd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Créer un compte
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "\t<link href=\"assets/css/style_register.css\" rel=\"stylesheet\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

\t<body>
\t\t<div class=\"wrapper_page_creation_compte\">
\t\t\t<h1 class=\"H1_creer_compte\">Créer un compte</h1>


\t\t\t";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 18, $this->source); })()), 'errors');
        echo "

\t\t\t";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 20, $this->source); })()), 'form_start');
        echo "


\t\t\t<!-- NOM/PRENOM<!-->

\t\t\t<div class=\"input-box\">
\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 27, $this->source); })()), "nom_user", [], "any", false, false, false, 27), 'row');
        echo "
\t\t\t\t\t<i class='bx bxs-user'></i>
\t\t\t\t</div>

\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 32, $this->source); })()), "prenom_user", [], "any", false, false, false, 32), 'row');
        echo "
\t\t\t\t\t<i class='bx bxs-user'></i>
\t\t\t\t</div>
\t\t\t</div>


\t\t\t<!-- MAIL/NUM TEL<!-->

\t\t\t<div class=\"input-box\">
\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 42, $this->source); })()), "email", [], "any", false, false, false, 42), 'row');
        echo "
\t\t\t\t\t<i class='bx bxs-envelope'></i>
\t\t\t\t</div>
\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 46, $this->source); })()), "telephone_user", [], "any", false, false, false, 46), 'row');
        echo "
\t\t\t\t\t<i class='bx bxs-phone'></i>
\t\t\t\t</div>
\t\t\t</div>


\t\t\t<!-- ADRESSE/VILLE/CP/GENRE<!-->

\t\t\t<div class=\"input-box\">
\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 56, $this->source); })()), "adresse_user", [], "any", false, false, false, 56), 'row');
        echo "
\t\t\t\t\t<i class='bx bx-street-view'></i>
\t\t\t\t</div>
\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 60, $this->source); })()), "ville_user", [], "any", false, false, false, 60), 'row');
        echo "
\t\t\t\t\t<i class='bx bx-street-view'></i>
\t\t\t\t</div>
\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 64, $this->source); })()), "cp_user", [], "any", false, false, false, 64), 'row');
        echo "
\t\t\t\t\t<i class='bx bx-street-view'></i>
\t\t\t\t</div>
\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 68, $this->source); })()), "genre_user", [], "any", false, false, false, 68), 'row');
        echo "
\t\t\t\t\t<i class='bx bx-street-view'></i>
\t\t\t\t</div>
\t\t\t</div>


\t\t\t<!-- MDP<!-->

\t\t\t<div class=\"input-box\">
\t\t\t\t<div class=\"input-field\" minlength=\"12\">
\t\t\t\t\t";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 78, $this->source); })()), "plainPassword", [], "any", false, false, false, 78), 'row');
        echo "
\t\t\t\t\t<i class='bx bxs-lock-alt'></i>
\t\t\t\t</div>
\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t<i class='bx bxs-lock-alt'></i>
\t\t\t\t</div>
\t\t\t</div>


\t\t\t";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 87, $this->source); })()), "RGPDConsent", [], "any", false, false, false, 87), 'row');
        echo "

\t\t\t<button type=\"submit\" class=\"btn_crer_compte\">Créer un compte</button>


\t\t\t<div class=\"btn_retour\">
\t\t\t\t<p>Vous avez déjà un compte ?</p>
\t\t\t\t<a href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Connexion</a>
\t\t\t</div>


\t\t\t";
        // line 98
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "user", [], "any", false, false, false, 98)) {
            // line 99
            echo "\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\tVous êtes connecté(e) comme
\t\t\t\t\t";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 101, $this->source); })()), "user", [], "any", false, false, false, 101), "userIdentifier", [], "any", false, false, false, 101), "html", null, true);
            echo ",
\t\t\t\t\t<a href=\"";
            // line 102
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
\t\t\t\t</div>
\t\t\t";
        }
        // line 105
        echo "
\t\t</div>
\t</body>
\t";
        // line 108
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 108, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 108,  234 => 105,  228 => 102,  224 => 101,  220 => 99,  218 => 98,  211 => 94,  201 => 87,  189 => 78,  176 => 68,  169 => 64,  162 => 60,  155 => 56,  142 => 46,  135 => 42,  122 => 32,  114 => 27,  104 => 20,  99 => 18,  90 => 11,  83 => 10,  75 => 7,  68 => 6,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Créer un compte
{% endblock %}

{% block stylesheets %}
\t<link href=\"assets/css/style_register.css\" rel=\"stylesheet\">
{% endblock %}

{% block body %}
\t<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

\t<body>
\t\t<div class=\"wrapper_page_creation_compte\">
\t\t\t<h1 class=\"H1_creer_compte\">Créer un compte</h1>


\t\t\t{{ form_errors(registrationForm) }}

\t\t\t{{ form_start(registrationForm) }}


\t\t\t<!-- NOM/PRENOM<!-->

\t\t\t<div class=\"input-box\">
\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t{{ form_row(registrationForm.nom_user) }}
\t\t\t\t\t<i class='bx bxs-user'></i>
\t\t\t\t</div>

\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t{{ form_row(registrationForm.prenom_user) }}
\t\t\t\t\t<i class='bx bxs-user'></i>
\t\t\t\t</div>
\t\t\t</div>


\t\t\t<!-- MAIL/NUM TEL<!-->

\t\t\t<div class=\"input-box\">
\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t{{ form_row(registrationForm.email) }}
\t\t\t\t\t<i class='bx bxs-envelope'></i>
\t\t\t\t</div>
\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t{{ form_row(registrationForm.telephone_user) }}
\t\t\t\t\t<i class='bx bxs-phone'></i>
\t\t\t\t</div>
\t\t\t</div>


\t\t\t<!-- ADRESSE/VILLE/CP/GENRE<!-->

\t\t\t<div class=\"input-box\">
\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t{{ form_row(registrationForm.adresse_user) }}
\t\t\t\t\t<i class='bx bx-street-view'></i>
\t\t\t\t</div>
\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t{{ form_row(registrationForm.ville_user) }}
\t\t\t\t\t<i class='bx bx-street-view'></i>
\t\t\t\t</div>
\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t{{ form_row(registrationForm.cp_user) }}
\t\t\t\t\t<i class='bx bx-street-view'></i>
\t\t\t\t</div>
\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t{{ form_row(registrationForm.genre_user) }}
\t\t\t\t\t<i class='bx bx-street-view'></i>
\t\t\t\t</div>
\t\t\t</div>


\t\t\t<!-- MDP<!-->

\t\t\t<div class=\"input-box\">
\t\t\t\t<div class=\"input-field\" minlength=\"12\">
\t\t\t\t\t{{ form_row(registrationForm.plainPassword) }}
\t\t\t\t\t<i class='bx bxs-lock-alt'></i>
\t\t\t\t</div>
\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t<i class='bx bxs-lock-alt'></i>
\t\t\t\t</div>
\t\t\t</div>


\t\t\t{{ form_row(registrationForm.RGPDConsent) }}

\t\t\t<button type=\"submit\" class=\"btn_crer_compte\">Créer un compte</button>


\t\t\t<div class=\"btn_retour\">
\t\t\t\t<p>Vous avez déjà un compte ?</p>
\t\t\t\t<a href=\"{{ path('app_login') }}\">Connexion</a>
\t\t\t</div>


\t\t\t{% if app.user %}
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\tVous êtes connecté(e) comme
\t\t\t\t\t{{ app.user.userIdentifier }},
\t\t\t\t\t<a href=\"{{ path('app_logout') }}\">Déconnexion</a>
\t\t\t\t</div>
\t\t\t{% endif %}

\t\t</div>
\t</body>
\t{{ form_end(registrationForm) }}
{% endblock %}
", "registration/register.html.twig", "/Users/dhelil/Documents/AP/AP-1-GP2-Photographe/AP1-GP2-Photographe/AP1-GP2-PhoTographe/templates/registration/register.html.twig");
    }
}
