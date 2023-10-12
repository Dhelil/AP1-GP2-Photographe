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

/* prestations/index.html.twig */
class __TwigTemplate_3b87ef1af578580acb75bf658eafd537 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prestations/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "prestations/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Prestations ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "<link rel=\"stylesheet\" href=\"assets/css/style_prestations.css\"> ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "            <body>
              <header>
        <h1>Mes Prestations</h1>
        <div class=\"card\">
        </div>
    </header>

    <div class=\"container\">
        <div class=\"pricing\">
            <div class=\"package\">
                <h2>Forfait Économique</h2>
                <p>À partir de <span class=\"highlight\">350€</span></p>
                <p>30 minutes de séance photo en studio</p>
                <p><span class=\"highlight\">5 photos</span> retouchées incluses</p>
                <p>Option de photos supplémentaires disponible</p>
                <button class=\"edit-button\" onclick=\"modifierPrestation(this)\">Modifier</button>
                <button class=\"delete-button\" onclick=\"supprimerPrestation(this)\">Supprimer</button>
            </div>

            <div class=\"package\">
                <h2>Forfait Standard</h2>
                <p>À partir de <span class=\"highlight\">500€</span></p>
                <p>1 heure de séance photo en extérieur ou en studio</p>
                <p><span class=\"highlight\">10 photos</span> soigneusement retouchées</p>
                <p>Remise des photos en format numérique</p>
                <button class=\"edit-button\" onclick=\"modifierPrestation(this)\">Modifier</button>
                <button class=\"delete-button\" onclick=\"supprimerPrestation(this)\">Supprimer</button>
            </div>

            <div class=\"package\">
                <h2>Forfait Premium</h2>
                <p>À partir de <span class=\"highlight\">800€</span></p>
                <p>2 heures de séance photo dans un lieu de votre choix</p>
                <p><span class=\"highlight\">20 photos</span> magnifiquement retouchées</p>
                <p>Livraison des photos sur une galerie privée en ligne</p>
                <button class=\"edit-button\" onclick=\"modifierPrestation(this)\">Modifier</button>
                <button class=\"delete-button\" onclick=\"supprimerPrestation(this)\">Supprimer</button>
            </div>

            <div class=\"package\">
                <h2>Forfait Premium Plus</h2>
                <p>À partir de <span class=\"highlight\">1200€</span></p>
                <p>3 heures de séance photo en extérieur</p>
                <p><span class=\"highlight\">30 photos</span> magnifiquement retouchées</p>
                <p>Livraison des photos sur une galerie privée en ligne</p>
                <button class=\"edit-button\" onclick=\"modifierPrestation(this)\">Modifier</button>
                <button class=\"delete-button\" onclick=\"supprimerPrestation(this)\">Supprimer</button>
            </div>

            <div class=\"package\">
                <h2>Forfait Mariage de Luxe</h2>
                <p>À partir de <span class=\"highlight\">2500€</span></p>
                <p>Reportage complet de votre journée de mariage</p>
                <p>Toutes les photos du mariage <span class=\"highlight\">retouchées</span></p>
                <p>Livraison d'un <span class=\"highlight\">album photo</span> personnalisé</p>
                <button class=\"edit-button\" onclick=\"modifierPrestation(this)\">Modifier</button>
                <button class=\"delete-button\" onclick=\"supprimerPrestation(this)\">Supprimer</button>
            </div>
            <div class=\"package\"   style=\"display:flex; align-items:center; justify-content:center\"> 
            <button class=\"edit-button\">Ajouter</button>
            </div>
        </div>

    </div>

 ";
        // line 74
        echo "</body>

            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "prestations/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 74,  87 => 8,  80 => 7,  67 => 6,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Prestations {% endblock %}

     
{% block stylesheets %}<link rel=\"stylesheet\" href=\"assets/css/style_prestations.css\"> {% endblock %}
\t\t\t{% block body %}
            <body>
              <header>
        <h1>Mes Prestations</h1>
        <div class=\"card\">
        </div>
    </header>

    <div class=\"container\">
        <div class=\"pricing\">
            <div class=\"package\">
                <h2>Forfait Économique</h2>
                <p>À partir de <span class=\"highlight\">350€</span></p>
                <p>30 minutes de séance photo en studio</p>
                <p><span class=\"highlight\">5 photos</span> retouchées incluses</p>
                <p>Option de photos supplémentaires disponible</p>
                <button class=\"edit-button\" onclick=\"modifierPrestation(this)\">Modifier</button>
                <button class=\"delete-button\" onclick=\"supprimerPrestation(this)\">Supprimer</button>
            </div>

            <div class=\"package\">
                <h2>Forfait Standard</h2>
                <p>À partir de <span class=\"highlight\">500€</span></p>
                <p>1 heure de séance photo en extérieur ou en studio</p>
                <p><span class=\"highlight\">10 photos</span> soigneusement retouchées</p>
                <p>Remise des photos en format numérique</p>
                <button class=\"edit-button\" onclick=\"modifierPrestation(this)\">Modifier</button>
                <button class=\"delete-button\" onclick=\"supprimerPrestation(this)\">Supprimer</button>
            </div>

            <div class=\"package\">
                <h2>Forfait Premium</h2>
                <p>À partir de <span class=\"highlight\">800€</span></p>
                <p>2 heures de séance photo dans un lieu de votre choix</p>
                <p><span class=\"highlight\">20 photos</span> magnifiquement retouchées</p>
                <p>Livraison des photos sur une galerie privée en ligne</p>
                <button class=\"edit-button\" onclick=\"modifierPrestation(this)\">Modifier</button>
                <button class=\"delete-button\" onclick=\"supprimerPrestation(this)\">Supprimer</button>
            </div>

            <div class=\"package\">
                <h2>Forfait Premium Plus</h2>
                <p>À partir de <span class=\"highlight\">1200€</span></p>
                <p>3 heures de séance photo en extérieur</p>
                <p><span class=\"highlight\">30 photos</span> magnifiquement retouchées</p>
                <p>Livraison des photos sur une galerie privée en ligne</p>
                <button class=\"edit-button\" onclick=\"modifierPrestation(this)\">Modifier</button>
                <button class=\"delete-button\" onclick=\"supprimerPrestation(this)\">Supprimer</button>
            </div>

            <div class=\"package\">
                <h2>Forfait Mariage de Luxe</h2>
                <p>À partir de <span class=\"highlight\">2500€</span></p>
                <p>Reportage complet de votre journée de mariage</p>
                <p>Toutes les photos du mariage <span class=\"highlight\">retouchées</span></p>
                <p>Livraison d'un <span class=\"highlight\">album photo</span> personnalisé</p>
                <button class=\"edit-button\" onclick=\"modifierPrestation(this)\">Modifier</button>
                <button class=\"delete-button\" onclick=\"supprimerPrestation(this)\">Supprimer</button>
            </div>
            <div class=\"package\"   style=\"display:flex; align-items:center; justify-content:center\"> 
            <button class=\"edit-button\">Ajouter</button>
            </div>
        </div>

    </div>

 {# {% extends 'partials/footer.html.twig' %} #}
</body>

            {% endblock %}
", "prestations/index.html.twig", "C:\\Users\\ezzaouit\\Desktop\\Atteliers\\AP1-GP2-Photographe\\AP1-GP2-PhoTographe\\templates\\prestations\\index.html.twig");
    }
}
