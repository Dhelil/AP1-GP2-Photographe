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
class __TwigTemplate_71454ad0c5535e66ad3dcceb91cedd4e extends Template
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
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Créer un compte
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "\t<link href=\"assets/css/style_register.css\" rel=\"stylesheet\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "\t<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

\t<body>
\t\t<div class=\"wrapper_page_creation_compte\">
\t\t\t<h1 class=\"H1_creer_compte\">Créer un compte</h1>


\t\t\t";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 19, $this->source); })()), 'errors');
        echo "

\t\t\t";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 21, $this->source); })()), 'form_start');
        echo "


\t\t\t<!-- NOM/PRENOM<!-->

\t\t\t<div class=\"input-box\">
\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 28, $this->source); })()), "nom_user", [], "any", false, false, false, 28), 'row');
        echo "
\t\t\t\t\t<i class='bx bxs-user'></i>
\t\t\t\t</div>

\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 33, $this->source); })()), "prenom_user", [], "any", false, false, false, 33), 'row');
        echo "
\t\t\t\t\t<i class='bx bxs-user'></i>
\t\t\t\t</div>
\t\t\t</div>


\t\t\t<!-- MAIL/NUM TEL<!-->

\t\t\t<div class=\"input-box\">
\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 43, $this->source); })()), "email", [], "any", false, false, false, 43), 'row');
        echo "
\t\t\t\t\t<i class='bx bxs-envelope'></i>
\t\t\t\t</div>
\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 47, $this->source); })()), "telephone_user", [], "any", false, false, false, 47), 'row');
        echo "
\t\t\t\t\t<i class='bx bxs-phone'></i>
\t\t\t\t</div>
\t\t\t</div>


\t\t\t<!-- ADRESSE/VILLE/CP/GENRE<!-->

\t\t\t<div class=\"input-box\">
\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 57, $this->source); })()), "adresse_user", [], "any", false, false, false, 57), 'row');
        echo "
\t\t\t\t\t<i class='bx bx-street-view'></i>
\t\t\t\t</div>
\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 61, $this->source); })()), "ville_user", [], "any", false, false, false, 61), 'row');
        echo "
\t\t\t\t\t<i class='bx bx-street-view'></i>
\t\t\t\t</div>
\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 65, $this->source); })()), "cp_user", [], "any", false, false, false, 65), 'row');
        echo "
\t\t\t\t\t<i class='bx bx-street-view'></i>
\t\t\t\t</div>
\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 69, $this->source); })()), "genre_user", [], "any", false, false, false, 69), 'row');
        echo "
\t\t\t\t\t<i class='bx bx-street-view'></i>
\t\t\t\t</div>
\t\t\t</div>


\t\t\t<!-- MDP<!-->

\t\t\t<div class=\"input-box\">
\t\t\t\t<div class=\"input-field\" minlength=\"12\">
\t\t\t\t\t";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 79, $this->source); })()), "plainPassword", [], "any", false, false, false, 79), 'row');
        echo "
\t\t\t\t\t<i class='bx bxs-lock-alt'></i>
\t\t\t\t</div>
\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t<i class='bx bxs-lock-alt'></i>
\t\t\t\t</div>
\t\t\t</div>


\t\t\t";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 88, $this->source); })()), "RGPDConsent", [], "any", false, false, false, 88), 'row');
        echo "

\t\t\t<button type=\"submit\" class=\"btn_crer_compte\">Créer un compte</button>


\t\t\t<div class=\"btn_retour\">
\t\t\t\t<p>Vous avez déjà un compte ?</p>
\t\t\t\t<a href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Connexion</a>
\t\t\t</div>

\t\t</div>
\t</body>
\t";
        // line 100
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 100, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 102
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  272 => 102,  260 => 100,  252 => 95,  242 => 88,  230 => 79,  217 => 69,  210 => 65,  203 => 61,  196 => 57,  183 => 47,  176 => 43,  163 => 33,  155 => 28,  145 => 21,  140 => 19,  131 => 12,  121 => 11,  103 => 9,  92 => 7,  82 => 6,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Créer un compte
{% endblock %}

{% block stylesheets %}
\t<link href=\"assets/css/style_register.css\" rel=\"stylesheet\">
{% endblock %}
{% block header %}
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

\t\t</div>
\t</body>
\t{{ form_end(registrationForm) }}
{% endblock %}
{% block footer %}
{% endblock %}", "registration/register.html.twig", "C:\\Users\\ezzaouit\\Desktop\\Atteliers\\AP1-GP2-Photographe\\AP1-GP2-PhoTographe\\templates\\registration\\register.html.twig");
    }
}
