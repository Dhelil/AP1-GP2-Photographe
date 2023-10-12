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

/* presentation/index.html.twig */
class __TwigTemplate_a561e1322c8add41763ba3cc9de9e5d5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "presentation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "presentation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "presentation/index.html.twig", 1);
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

        echo "Présentation
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "\t<link href=\"assets/css/style_presentation.css\" rel=\"stylesheet\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "\t<body>
\t\t<div class=\"example-wrapper\"></div>
\t</body>

\t<div class=\"Presentation_generale\">
\t\tSalut, je suis Alex, un photographe passionné, et je suis là pour capturer vos moments spéciaux et les transformer en souvenirs durables. Mon objectif en tant que photographe est de créer des images exceptionnelles qui vous laisseront sans voix.
\t</div>

\t<div class=\"Paragraphe_Expertise\">
\t\t<h2 class=\"Mon_Expertise\">
\t\t\tMon Expertise</h2>
\t\t<img src=\"assets/images/expertise.png\" class=\"image_expertise\"></img>
\t<p class=\"Texte_Expertise\">
\t\tMon expérience et mon expertise dans le domaine de la photographie me permettent de saisir l'essence même de chaque instant. Que ce soit un mariage, une séance photo en famille, une célébration d'entreprise ou n'importe quel autre événement spécial, je mets en œuvre mon savoir-faire pour capturer chaque détail, chaque émotion et chaque sourire.
\t</p>
</div>


<div class=\"Paragraphe_Creativite\">
\t<h2 class=\"Ma_Creativite\">
\t\tMa Créativité
\t</h2>
\t<p class=\"Texte_Creativite\">
\t\tCe qui me distingue, c'est ma créativité. Je cherche toujours à repousser les limites de la photographie pour créer des images uniques et mémorables. J'aime jouer avec la lumière, les couleurs et les angles pour obtenir des résultats qui sortent de l'ordinaire. Mon approche artistique donne vie à vos moments spéciaux de manière extraordinaire.
\t</p>
</div>

<div class=\"Paragraphe_Objectif\">
\t<h2 class=\"Mon_Objectif\">
\t\tMon objectif
\t</h2>
\t<p class=\"Texte_Objectif\">
\t\tMon objectif ultime est de vous fournir des souvenirs durables. Les photographies que je crée deviendront des trésors que vous chérirez pour les années à venir. Chaque cliché raconte une histoire, et je m'efforce de faire en sorte que ces histoires restent vivantes à travers mes images.
\t</p>
</div>

<div class=\"Paragraphe_Fin\">
\t<p>
\t\tN'hésitez pas à me contacter pour discuter de vos besoins photographiques. Ensemble, nous pouvons transformer vos moments spéciaux en souvenirs inestimables.
\t</p>
</div>

La Transformation en Souvenirs Durables
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\tQue vous souhaitiez immortaliser un événement important ou simplement avoir des photos professionnelles de vous-même ou de votre famille, je suis là pour vous. Mon dévouement envers la photographie et ma passion pour créer des images inoubliables se reflètent dans chaque photo que je prends.";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "presentation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 13,  101 => 12,  90 => 8,  80 => 7,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Présentation
{% endblock %}


{% block stylesheets %}
\t<link href=\"assets/css/style_presentation.css\" rel=\"stylesheet\">
{% endblock %}


{% block body %}
\t<body>
\t\t<div class=\"example-wrapper\"></div>
\t</body>

\t<div class=\"Presentation_generale\">
\t\tSalut, je suis Alex, un photographe passionné, et je suis là pour capturer vos moments spéciaux et les transformer en souvenirs durables. Mon objectif en tant que photographe est de créer des images exceptionnelles qui vous laisseront sans voix.
\t</div>

\t<div class=\"Paragraphe_Expertise\">
\t\t<h2 class=\"Mon_Expertise\">
\t\t\tMon Expertise</h2>
\t\t<img src=\"assets/images/expertise.png\" class=\"image_expertise\"></img>
\t<p class=\"Texte_Expertise\">
\t\tMon expérience et mon expertise dans le domaine de la photographie me permettent de saisir l'essence même de chaque instant. Que ce soit un mariage, une séance photo en famille, une célébration d'entreprise ou n'importe quel autre événement spécial, je mets en œuvre mon savoir-faire pour capturer chaque détail, chaque émotion et chaque sourire.
\t</p>
</div>


<div class=\"Paragraphe_Creativite\">
\t<h2 class=\"Ma_Creativite\">
\t\tMa Créativité
\t</h2>
\t<p class=\"Texte_Creativite\">
\t\tCe qui me distingue, c'est ma créativité. Je cherche toujours à repousser les limites de la photographie pour créer des images uniques et mémorables. J'aime jouer avec la lumière, les couleurs et les angles pour obtenir des résultats qui sortent de l'ordinaire. Mon approche artistique donne vie à vos moments spéciaux de manière extraordinaire.
\t</p>
</div>

<div class=\"Paragraphe_Objectif\">
\t<h2 class=\"Mon_Objectif\">
\t\tMon objectif
\t</h2>
\t<p class=\"Texte_Objectif\">
\t\tMon objectif ultime est de vous fournir des souvenirs durables. Les photographies que je crée deviendront des trésors que vous chérirez pour les années à venir. Chaque cliché raconte une histoire, et je m'efforce de faire en sorte que ces histoires restent vivantes à travers mes images.
\t</p>
</div>

<div class=\"Paragraphe_Fin\">
\t<p>
\t\tN'hésitez pas à me contacter pour discuter de vos besoins photographiques. Ensemble, nous pouvons transformer vos moments spéciaux en souvenirs inestimables.
\t</p>
</div>

La Transformation en Souvenirs Durables
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\tQue vous souhaitiez immortaliser un événement important ou simplement avoir des photos professionnelles de vous-même ou de votre famille, je suis là pour vous. Mon dévouement envers la photographie et ma passion pour créer des images inoubliables se reflètent dans chaque photo que je prends.{% endblock %}
", "presentation/index.html.twig", "/Users/dhelil/Documents/AP/AP-1-GP2-Photographe/AP1-GP2-Photographe/AP1-GP2-PhoTographe/templates/presentation/index.html.twig");
    }
}
