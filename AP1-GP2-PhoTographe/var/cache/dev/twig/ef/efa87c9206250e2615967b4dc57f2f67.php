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

/* base.html.twig */
class __TwigTemplate_d12f48f742719928af6f496d56dce1d7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "\t\t</title>
\t\t<link rel=\"icon\" href=\"assets/images/cameraicon.png\"> ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('javascripts', $context, $blocks);
        // line 10
        echo "\t\t<link href=\"assets/css/style_nav.css\" rel=\"stylesheet\">
\t\t</head>
\t\t<body>

\t\t\t<div class=\"navbar-div\">
            <nav class=\"navbar\">
            <div>
            </div>
                <ul class=\"bouttons-nav\">
                    <li class=\"boutton-nav\"><a class=\"boutton-text-nav\" href=\"#\">Accueil</a></li>
                    <li class=\"boutton-nav\"><a class=\"boutton-text-nav\" href=\"#\">Présentation</a></li>
                    <li class=\"boutton-nav\"><a class=\"boutton-text-nav\" href=\"#\">Prestations</a></li>
                    <li class=\"boutton-nav\"><a class=\"boutton-text-nav\" href=\"/avis\">Avis</a></li>
                    <li class=\"boutton-nav\"><a class=\"boutton-text-nav\" href=\"#\">Contact</a></li>
                </ul>
                \t<img class=\"logo-nav\" src=\"assets/images/Logo.png\" alt=\"logo navbar\" width=\"120px\" height=\"50px\">
            \t</nav>
        \t</div>

\t\t\t";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "\t\t</body>
\t</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 29
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  128 => 29,  105 => 9,  91 => 6,  82 => 30,  80 => 29,  59 => 10,  56 => 9,  53 => 8,  51 => 6,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t{% block title %}Welcome!
\t\t\t{% endblock %}
\t\t</title>
\t\t<link rel=\"icon\" href=\"assets/images/cameraicon.png\"> {% block stylesheets %}{% endblock %}{% block javascripts %}{% endblock %}
\t\t<link href=\"assets/css/style_nav.css\" rel=\"stylesheet\">
\t\t</head>
\t\t<body>

\t\t\t<div class=\"navbar-div\">
            <nav class=\"navbar\">
            <div>
            </div>
                <ul class=\"bouttons-nav\">
                    <li class=\"boutton-nav\"><a class=\"boutton-text-nav\" href=\"#\">Accueil</a></li>
                    <li class=\"boutton-nav\"><a class=\"boutton-text-nav\" href=\"#\">Présentation</a></li>
                    <li class=\"boutton-nav\"><a class=\"boutton-text-nav\" href=\"#\">Prestations</a></li>
                    <li class=\"boutton-nav\"><a class=\"boutton-text-nav\" href=\"/avis\">Avis</a></li>
                    <li class=\"boutton-nav\"><a class=\"boutton-text-nav\" href=\"#\">Contact</a></li>
                </ul>
                \t<img class=\"logo-nav\" src=\"assets/images/Logo.png\" alt=\"logo navbar\" width=\"120px\" height=\"50px\">
            \t</nav>
        \t</div>

\t\t\t{% block body %}{% endblock %}
\t\t</body>
\t</html>
", "base.html.twig", "C:\\Users\\izikkii\\Pictures\\SIO-2\\AP\\AP1-GROUPE2\\projet\\vrai de vrai\\AP1-GP2-Photographe\\AP1-GP2-PhoTographe\\templates\\base.html.twig");
    }
}
