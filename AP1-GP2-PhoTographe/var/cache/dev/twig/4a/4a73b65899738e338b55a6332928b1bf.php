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
class __TwigTemplate_7d38e86780af2a07ae6afa97aa0eb50d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prestations/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prestations/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "prestations/index.html.twig", 1);
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

        echo " Prestations ";
        
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

        echo "<link rel=\"stylesheet\" href=\"assets/css/style_prestations.css\"> ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "                <body>
                <header>
            <h1>Mes Prestations</h1>
            <div class=\"card\">
            </div>  ";
        // line 19
        echo "        <div class=\"container\">
            <div class=\"pricing\">
                <div class=\"package\">
                    <h2>Forfait Économique</h2>
                    <p>À partir de <span class=\"highlight\">350€</span></p>
                    <p>30 minutes de séance photo en studio</p>
                    <p><span class=\"highlight\">5 photos</span> retouchées incluses</p>
                    <p>Option de photos supplémentaires disponible</p>
                                ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27)) {
            // line 28
            echo "                                ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 29
                echo "                    <button class=\"edit-button\" onclick=\"modifierPrestation(this)\">Modifier</button>
                    <button class=\"delete-button\" onclick=\"supprimerPrestation(this)\">Supprimer</button>
                    ";
            }
            // line 32
            echo "                    ";
        }
        // line 33
        echo "
                </div>

                <div class=\"package\">
                    <h2>Forfait Standard</h2>
                    <p>À partir de <span class=\"highlight\">500€</span></p>
                    <p>1 heure de séance photo en extérieur ou en studio</p>
                    <p><span class=\"highlight\">10 photos</span> soigneusement retouchées</p>
                    <p>Remise des photos en format numérique</p>
                        ";
        // line 42
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42)) {
            // line 43
            echo "                                ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 44
                echo "                    <button class=\"edit-button\" onclick=\"modifierPrestation(this)\">Modifier</button>
                    <button class=\"delete-button\" onclick=\"supprimerPrestation(this)\">Supprimer</button>
                    ";
            }
            // line 47
            echo "                    ";
        }
        // line 48
        echo "                </div>

                <div class=\"package\">
                    <h2>Forfait Premium</h2>
                    <p>À partir de <span class=\"highlight\">800€</span></p>
                    <p>2 heures de séance photo dans un lieu de votre choix</p>
                    <p><span class=\"highlight\">20 photos</span> magnifiquement retouchées</p>
                    <p>Livraison des photos sur une galerie privée en ligne</p>
                        ";
        // line 56
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56)) {
            // line 57
            echo "                                ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 58
                echo "                    <button class=\"edit-button\" onclick=\"modifierPrestation(this)\">Modifier</button>
                    <button class=\"delete-button\" onclick=\"supprimerPrestation(this)\">Supprimer</button>
                    ";
            }
            // line 61
            echo "                    ";
        }
        // line 62
        echo "                </div>

                <div class=\"package\">
                    <h2>Forfait Premium Plus</h2>
                    <p>À partir de <span class=\"highlight\">1200€</span></p>
                    <p>3 heures de séance photo en extérieur</p>
                    <p><span class=\"highlight\">30 photos</span> magnifiquement retouchées</p>
                    <p>Livraison des photos sur une galerie privée en ligne</p>
                    ";
        // line 70
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70)) {
            // line 71
            echo "                                ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 72
                echo "                    <button class=\"edit-button\" onclick=\"modifierPrestation(this)\">Modifier</button>
                    <button class=\"delete-button\" onclick=\"supprimerPrestation(this)\">Supprimer</button>
                    ";
            }
            // line 75
            echo "                    ";
        }
        // line 76
        echo "                </div>

                <div class=\"package\">
                    <h2>Forfait Mariage de Luxe</h2>
                    <p>À partir de <span class=\"highlight\">2500€</span></p>
                    <p>Reportage complet de votre journée de mariage</p>
                    <p>Toutes les photos du mariage <span class=\"highlight\">retouchées</span></p>
                    <p>Livraison d'un <span class=\"highlight\">album photo</span> personnalisé</p>
                        ";
        // line 84
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "user", [], "any", false, false, false, 84)) {
            // line 85
            echo "                                ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 86
                echo "                    <button class=\"edit-button\" onclick=\"modifierPrestation(this)\">Modifier</button>
                    <button class=\"delete-button\" onclick=\"supprimerPrestation(this)\">Supprimer</button>
                    ";
            }
            // line 89
            echo "                    ";
        }
        // line 90
        echo "                </div>
    ";
        // line 91
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 91, $this->source); })()), "user", [], "any", false, false, false, 91)) {
            // line 92
            echo "        ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 93
                echo "                <div class=\"package\"   style=\"display:flex; align-items:center; justify-content:center\"> 
                <button class=\"edit-button\">Ajouter</button>
                </div>
    ";
            }
            // line 97
            echo "        ";
        }
        // line 98
        echo "            </div>

        </div>

    ";
        // line 103
        echo "    </body>

                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  253 => 103,  247 => 98,  244 => 97,  238 => 93,  235 => 92,  233 => 91,  230 => 90,  227 => 89,  222 => 86,  219 => 85,  217 => 84,  207 => 76,  204 => 75,  199 => 72,  196 => 71,  194 => 70,  184 => 62,  181 => 61,  176 => 58,  173 => 57,  171 => 56,  161 => 48,  158 => 47,  153 => 44,  150 => 43,  148 => 42,  137 => 33,  134 => 32,  129 => 29,  126 => 28,  124 => 27,  114 => 19,  108 => 8,  98 => 7,  79 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    {% extends 'base.html.twig' %}

    {% block title %} Prestations {% endblock %}

        
    {% block stylesheets %}<link rel=\"stylesheet\" href=\"assets/css/style_prestations.css\"> {% endblock %}
                {% block body %}
                <body>
                <header>
            <h1>Mes Prestations</h1>
            <div class=\"card\">
            </div>  {# {% for prestation in prestations %}
        <li>{{ prestation.libelle_prestation }}</li>
    {% endfor %}
    </ul>
        </header>
    <ul>
    #}
        <div class=\"container\">
            <div class=\"pricing\">
                <div class=\"package\">
                    <h2>Forfait Économique</h2>
                    <p>À partir de <span class=\"highlight\">350€</span></p>
                    <p>30 minutes de séance photo en studio</p>
                    <p><span class=\"highlight\">5 photos</span> retouchées incluses</p>
                    <p>Option de photos supplémentaires disponible</p>
                                {% if app.user %}
                                {% if  is_granted('ROLE_ADMIN') %}
                    <button class=\"edit-button\" onclick=\"modifierPrestation(this)\">Modifier</button>
                    <button class=\"delete-button\" onclick=\"supprimerPrestation(this)\">Supprimer</button>
                    {% endif %}
                    {% endif %}

                </div>

                <div class=\"package\">
                    <h2>Forfait Standard</h2>
                    <p>À partir de <span class=\"highlight\">500€</span></p>
                    <p>1 heure de séance photo en extérieur ou en studio</p>
                    <p><span class=\"highlight\">10 photos</span> soigneusement retouchées</p>
                    <p>Remise des photos en format numérique</p>
                        {% if app.user %}
                                {% if  is_granted('ROLE_ADMIN') %}
                    <button class=\"edit-button\" onclick=\"modifierPrestation(this)\">Modifier</button>
                    <button class=\"delete-button\" onclick=\"supprimerPrestation(this)\">Supprimer</button>
                    {% endif %}
                    {% endif %}
                </div>

                <div class=\"package\">
                    <h2>Forfait Premium</h2>
                    <p>À partir de <span class=\"highlight\">800€</span></p>
                    <p>2 heures de séance photo dans un lieu de votre choix</p>
                    <p><span class=\"highlight\">20 photos</span> magnifiquement retouchées</p>
                    <p>Livraison des photos sur une galerie privée en ligne</p>
                        {% if app.user %}
                                {% if  is_granted('ROLE_ADMIN') %}
                    <button class=\"edit-button\" onclick=\"modifierPrestation(this)\">Modifier</button>
                    <button class=\"delete-button\" onclick=\"supprimerPrestation(this)\">Supprimer</button>
                    {% endif %}
                    {% endif %}
                </div>

                <div class=\"package\">
                    <h2>Forfait Premium Plus</h2>
                    <p>À partir de <span class=\"highlight\">1200€</span></p>
                    <p>3 heures de séance photo en extérieur</p>
                    <p><span class=\"highlight\">30 photos</span> magnifiquement retouchées</p>
                    <p>Livraison des photos sur une galerie privée en ligne</p>
                    {% if app.user %}
                                {% if  is_granted('ROLE_ADMIN') %}
                    <button class=\"edit-button\" onclick=\"modifierPrestation(this)\">Modifier</button>
                    <button class=\"delete-button\" onclick=\"supprimerPrestation(this)\">Supprimer</button>
                    {% endif %}
                    {% endif %}
                </div>

                <div class=\"package\">
                    <h2>Forfait Mariage de Luxe</h2>
                    <p>À partir de <span class=\"highlight\">2500€</span></p>
                    <p>Reportage complet de votre journée de mariage</p>
                    <p>Toutes les photos du mariage <span class=\"highlight\">retouchées</span></p>
                    <p>Livraison d'un <span class=\"highlight\">album photo</span> personnalisé</p>
                        {% if app.user %}
                                {% if  is_granted('ROLE_ADMIN') %}
                    <button class=\"edit-button\" onclick=\"modifierPrestation(this)\">Modifier</button>
                    <button class=\"delete-button\" onclick=\"supprimerPrestation(this)\">Supprimer</button>
                    {% endif %}
                    {% endif %}
                </div>
    {% if app.user %}
        {% if  is_granted('ROLE_ADMIN') %}
                <div class=\"package\"   style=\"display:flex; align-items:center; justify-content:center\"> 
                <button class=\"edit-button\">Ajouter</button>
                </div>
    {% endif %}
        {% endif %}
            </div>

        </div>

    {# {% extends 'partials/footer.html.twig' %} #}
    </body>

                {% endblock %}


        
                
    ", "prestations/index.html.twig", "C:\\Users\\ezzaouit\\Desktop\\Atteliers\\AP1-GP2-Photographe\\AP1-GP2-PhoTographe\\templates\\prestations\\index.html.twig");
    }
}
