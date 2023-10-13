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

/* presentations/index.html.twig */
class __TwigTemplate_bd2f3119c7c66536dfcf97dabf8da6f9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "presentations/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "presentations/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "presentations/index.html.twig", 1);
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

        echo " Presentations";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "<link rel=\"stylesheet\" href=\"assets/css/style_presentation.css\"> ";
        
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
        echo "<body>

";
        // line 14
        echo "
    <div class=\"header\">
        <h1>Présentation d'Alex, Photographe Passionné</h1>
    </div>

    <div class=\"container\">
        <div class=\"about\">
            <h2>Salut, je suis Alex, un photographe passionné,</h2>
            <p>et je suis là pour capturer vos moments spéciaux et les transformer en souvenirs durables. Mon objectif en tant que photographe est de créer des images exceptionnelles qui vous laisseront sans voix.</p>
        </div>

        <div class=\"expertise\">
            <h2>Mon Expertise</h2>
            <p>Mon expérience et mon expertise dans le domaine de la photographie me permettent de saisir l'essence même de chaque instant. Que ce soit un mariage, une séance photo en famille, une célébration d'entreprise ou n'importe quel autre événement spécial, je mets en œuvre mon savoir-faire pour capturer chaque détail, chaque émotion et chaque sourire.</p>
        </div>

        <div class=\"creativity\">
            <h2>Ma Créativité</h2>
            <p>Ce qui me distingue, c'est ma créativité. Je cherche toujours à repousser les limites de la photographie pour créer des images uniques et mémorables. J'aime jouer avec la lumière, les couleurs et les angles pour obtenir des résultats qui sortent de l'ordinaire. Mon approche artistique donne vie à vos moments spéciaux de manière extraordinaire.</p>
        </div>

        <div class=\"memories\">
            <h2>La Transformation en Souvenirs Durables</h2>
            <p>Mon objectif ultime est de vous fournir des souvenirs durables. Les photographies que je crée deviendront des trésors que vous chérirez pour les années à venir. Chaque cliché raconte une histoire, et je m'efforce de faire en sorte que ces histoires restent vivantes à travers mes images.</p>
        </div>
    </div>
</body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "presentations/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 14,  108 => 7,  98 => 6,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Presentations{% endblock %}
{% block stylesheets %}<link rel=\"stylesheet\" href=\"assets/css/style_presentation.css\"> {% endblock %}

{% block body %}
<body>

{# <ul>
  {% for presentations in presentations %}
    <li style=\"color:#fff\">{{ presentations.libellePresentation}}</li>
  {% endfor %}
</ul> #}

    <div class=\"header\">
        <h1>Présentation d'Alex, Photographe Passionné</h1>
    </div>

    <div class=\"container\">
        <div class=\"about\">
            <h2>Salut, je suis Alex, un photographe passionné,</h2>
            <p>et je suis là pour capturer vos moments spéciaux et les transformer en souvenirs durables. Mon objectif en tant que photographe est de créer des images exceptionnelles qui vous laisseront sans voix.</p>
        </div>

        <div class=\"expertise\">
            <h2>Mon Expertise</h2>
            <p>Mon expérience et mon expertise dans le domaine de la photographie me permettent de saisir l'essence même de chaque instant. Que ce soit un mariage, une séance photo en famille, une célébration d'entreprise ou n'importe quel autre événement spécial, je mets en œuvre mon savoir-faire pour capturer chaque détail, chaque émotion et chaque sourire.</p>
        </div>

        <div class=\"creativity\">
            <h2>Ma Créativité</h2>
            <p>Ce qui me distingue, c'est ma créativité. Je cherche toujours à repousser les limites de la photographie pour créer des images uniques et mémorables. J'aime jouer avec la lumière, les couleurs et les angles pour obtenir des résultats qui sortent de l'ordinaire. Mon approche artistique donne vie à vos moments spéciaux de manière extraordinaire.</p>
        </div>

        <div class=\"memories\">
            <h2>La Transformation en Souvenirs Durables</h2>
            <p>Mon objectif ultime est de vous fournir des souvenirs durables. Les photographies que je crée deviendront des trésors que vous chérirez pour les années à venir. Chaque cliché raconte une histoire, et je m'efforce de faire en sorte que ces histoires restent vivantes à travers mes images.</p>
        </div>
    </div>
</body>
{% endblock %}
", "presentations/index.html.twig", "C:\\Users\\ezzaouit\\Desktop\\Atteliers\\AP1-GP2-Photographe\\AP1-GP2-PhoTographe\\templates\\presentations\\index.html.twig");
    }
}
