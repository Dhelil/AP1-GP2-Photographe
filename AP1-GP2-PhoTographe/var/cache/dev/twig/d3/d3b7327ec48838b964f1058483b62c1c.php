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

/* c_principal/index.html.twig */
class __TwigTemplate_c12714ebc8f009dbb8440b88239eee50 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "c_principal/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "c_principal/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "c_principal/index.html.twig", 1);
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

        echo "Accueil
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<p>Accueil</p>


\t<button>
\t\t<a href=\"/connexion\">Se connecter</button>
\t\t<button>
\t\t\t<a href=\"/inscription\">Créer un compte</button>
\t\t\t<button>
\t\t\t\t<a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Déconnexion</a>
\t\t\t</button>


\t\t\t";
        // line 19
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19)) {
            // line 20
            echo "\t\t\t\t";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 21
                echo "\t\t\t\t\t<div class=\"create_account\">
\t\t\t\t\t\tVous êtes connecté(e) en tant qu'ADMIN
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 25
            echo "\t\t\t";
        }
        // line 26
        echo "

\t\t\t";
        // line 28
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28)) {
            // line 29
            echo "\t\t\t\t";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 30
                echo "\t\t\t\t\t<div class=\"btn_retour\">
\t\t\t\t\t\tVous êtes connecté(e) en tant
\t\t\t\t\t\t";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "userIdentifier", [], "any", false, false, false, 32), "html", null, true);
                echo "
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 35
            echo "\t\t\t";
        }
        // line 36
        echo "\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "c_principal/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 36,  139 => 35,  133 => 32,  129 => 30,  126 => 29,  124 => 28,  120 => 26,  117 => 25,  111 => 21,  108 => 20,  106 => 19,  99 => 15,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil
{% endblock %}

{% block body %}
\t<p>Accueil</p>


\t<button>
\t\t<a href=\"/connexion\">Se connecter</button>
\t\t<button>
\t\t\t<a href=\"/inscription\">Créer un compte</button>
\t\t\t<button>
\t\t\t\t<a href=\"{{ path('app_logout') }}\">Déconnexion</a>
\t\t\t</button>


\t\t\t{% if app.user %}
\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t<div class=\"create_account\">
\t\t\t\t\t\tVous êtes connecté(e) en tant qu'ADMIN
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t{% endif %}


\t\t\t{% if app.user %}
\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t<div class=\"btn_retour\">
\t\t\t\t\t\tVous êtes connecté(e) en tant
\t\t\t\t\t\t{{ app.user.userIdentifier }}
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t{% endif %}
\t\t{% endblock %}
", "c_principal/index.html.twig", "/Users/dhelil/Documents/AP/AP-1-GP2-Photographe/AP1-GP2-Photographe/AP1-GP2-PhoTographe/templates/c_principal/index.html.twig");
    }
}
