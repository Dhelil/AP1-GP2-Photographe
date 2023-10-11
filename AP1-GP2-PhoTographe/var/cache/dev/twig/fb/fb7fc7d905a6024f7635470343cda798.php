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
class __TwigTemplate_049c63243bf8b3538f8ef2a10ef001ce extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "c_principal/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "c_principal/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " <title>Accueil </title>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "<link rel=\"stylesheet\" href=\"assets/css/style_accueil.css\"> ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
<body class=\"accueil-login grid-content\">
    <nav class=\"grid-nav\">
        <ul class=\"nav-items\">
            <li><a href=\"index.php\">Acceuil</a></li>
            <li><a href=\"inscription.php\">Présentations</a></li>
            <li><a href=\"connexion.php\">Prestations</a></li>
            <li><a href=\"profil.php\">Avis</a></li>
            <li><a href=\"admin.php\">Contact</a></li>
        </ul>
    </nav>
    <h1 class=\"titile-acueille grid-title\">AlexCaptures</h1>

    <section class=\"login-choice grid-login\">
        <button class=\"btn-login\"> <a href=\"/connexion\">Se connecter </a></button>
        <p class=\"txt-login\">ou</p>
        <button class=\"btn-login\"><a href=\"/inscription\">Créer un compte </a></button>
    </section>

    <section class=\"grid-presentation\">
    Je suis Alex, un photographe passionné qui transforme vos moments spéciaux en souvenirs durables. Mon expertise et ma créativité se combinent pour vous offrir des images exceptionnelles.
    </section>
        
</body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  87 => 11,  80 => 10,  67 => 6,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} <title>Accueil </title>{% endblock %}

     
{% block stylesheets %}<link rel=\"stylesheet\" href=\"assets/css/style_accueil.css\"> {% endblock %}



{% block body %}

<body class=\"accueil-login grid-content\">
    <nav class=\"grid-nav\">
        <ul class=\"nav-items\">
            <li><a href=\"index.php\">Acceuil</a></li>
            <li><a href=\"inscription.php\">Présentations</a></li>
            <li><a href=\"connexion.php\">Prestations</a></li>
            <li><a href=\"profil.php\">Avis</a></li>
            <li><a href=\"admin.php\">Contact</a></li>
        </ul>
    </nav>
    <h1 class=\"titile-acueille grid-title\">AlexCaptures</h1>

    <section class=\"login-choice grid-login\">
        <button class=\"btn-login\"> <a href=\"/connexion\">Se connecter </a></button>
        <p class=\"txt-login\">ou</p>
        <button class=\"btn-login\"><a href=\"/inscription\">Créer un compte </a></button>
    </section>

    <section class=\"grid-presentation\">
    Je suis Alex, un photographe passionné qui transforme vos moments spéciaux en souvenirs durables. Mon expertise et ma créativité se combinent pour vous offrir des images exceptionnelles.
    </section>
        
</body>
{% endblock %}
", "c_principal/index.html.twig", "C:\\Users\\ezzaouit\\Desktop\\Atteliers\\AP1-GP2-Photographe\\AP1-GP2-PhoTographe\\templates\\c_principal\\index.html.twig");
    }
}
