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

/* partials/navbar.html.twig */
class __TwigTemplate_911e46d0a4d82e9f65c9c6c9bc8db6db extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'use' => [$this, 'block_use'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/navbar.html.twig"));

        // line 1
        echo "

     
";
        // line 4
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 5
        $this->displayBlock('use', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "<link rel=\"stylesheet\" href=\"assets/css/style_accueil.css\"> ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_use($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "use"));

        // line 6
        echo "
<nav class=\"grid-nav\">
        <ul class=\"nav-items\">
            <li><a href=\"/\">Acceuil</a></li>
            <li><a href=\"/presentations\">Présentations</a></li>
            <li><a href=\"/prestations\">Prestations</a></li>
            <li><a href=\"/avis\">Avis</a></li>
            <li><a href=\"/contact\">Contact</a></li>
        </ul>
    </nav>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "partials/navbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  76 => 6,  69 => 5,  56 => 4,  49 => 5,  47 => 4,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

     
{% block stylesheets %}<link rel=\"stylesheet\" href=\"assets/css/style_accueil.css\"> {% endblock %}
{% block use %}

<nav class=\"grid-nav\">
        <ul class=\"nav-items\">
            <li><a href=\"/\">Acceuil</a></li>
            <li><a href=\"/presentations\">Présentations</a></li>
            <li><a href=\"/prestations\">Prestations</a></li>
            <li><a href=\"/avis\">Avis</a></li>
            <li><a href=\"/contact\">Contact</a></li>
        </ul>
    </nav>
{% endblock %}
", "partials/navbar.html.twig", "C:\\Users\\ezzaouit\\Desktop\\Atteliers\\AP1-GP2-Photographe\\AP1-GP2-PhoTographe\\templates\\partials\\navbar.html.twig");
    }
}
