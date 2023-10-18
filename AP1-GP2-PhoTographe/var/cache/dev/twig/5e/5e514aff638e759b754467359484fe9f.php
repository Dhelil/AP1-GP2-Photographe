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
class __TwigTemplate_bff7c61cb297b2e3a5838e6118af10e7 extends Template
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

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " 
    Prestations 
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    <link rel=\"stylesheet\" href=\"assets/css/style_prestations.css\"> 
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo " 
    <h1>Mes Prestations</h1>
        ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10)) {
            echo " ";
            // line 11
            echo "            ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                echo " ";
                // line 12
                echo "                    <div class=\"editPrestations\"><button class=\"edit-button\" onclick=\"window.location.href='/admin'\">Modifier </button><div>
            ";
            }
            // line 13
            echo " ";
            // line 14
            echo "        ";
        }
        echo " ";
        // line 15
        echo "        <div class=\"container\">
        ";
        // line 16
        if (twig_test_empty((isset($context["prestations"]) || array_key_exists("prestations", $context) ? $context["prestations"] : (function () { throw new RuntimeError('Variable "prestations" does not exist.', 16, $this->source); })()))) {
            // line 17
            echo "    <p>Aucune prestation n'a été remplie.</p>
    <a href=\"";
            // line 18
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_prestations");
            echo "\" class=\"btn btn-primary\">Ajouter des prestations</a>
    <div class=\"addPrestations\"> 
        <button class=\"add-button\" onclick=\"window.location.href='/admin'\">Ajouter des prestations</button>
   </div>
";
        } else {
            // line 23
            echo "    <ul>
            <div class=\"pricing\">
                ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["prestations"]) || array_key_exists("prestations", $context) ? $context["prestations"] : (function () { throw new RuntimeError('Variable "prestations" does not exist.', 25, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["prestation"]) {
                echo " ";
                // line 26
                echo "                    <div class=\"package\">
                        <h2>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prestation"], "titre", [], "any", false, false, false, 27), "html", null, true);
                echo "</h2>
                            <p>À partir de <span class=\"highlight\">";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prestation"], "prix", [], "any", false, false, false, 28), "html", null, true);
                echo "€</span></p>
                            <p>";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prestation"], "description", [], "any", false, false, false, 29), "html", null, true);
                echo "</p>
                            <p><span class=\"highlight\">";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prestation"], "nbPhotosRetouche", [], "any", false, false, false, 30), "html", null, true);
                echo " photos</span> retouchées incluses</p>
                            <p>";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prestation"], "opt", [], "any", false, false, false, 31), "html", null, true);
                echo "</p>
                    </div>
                    <script>
                    let add = document.querySelector('.addPrestations'); 
                    add.style.display = 'none'; 
                    </script>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prestation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo " ";
            // line 38
            echo "            ";
        }
        echo " ";
        // line 39
        echo "            </div>
        </div>
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
        return array (  195 => 39,  191 => 38,  189 => 37,  176 => 31,  172 => 30,  168 => 29,  164 => 28,  160 => 27,  157 => 26,  152 => 25,  148 => 23,  140 => 18,  137 => 17,  135 => 16,  132 => 15,  128 => 14,  126 => 13,  122 => 12,  118 => 11,  115 => 10,  102 => 8,  91 => 6,  81 => 5,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %} 
    Prestations 
{% endblock %}   
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"assets/css/style_prestations.css\"> 
{% endblock %}
{% block body %} 
    <h1>Mes Prestations</h1>
        {% if app.user %} {# si l'utilisateur est connecté #}
            {% if  is_granted('ROLE_ADMIN') %} {# si l'utilisateur est connecté et qu'il est admin #}
                    <div class=\"editPrestations\"><button class=\"edit-button\" onclick=\"window.location.href='/admin'\">Modifier </button><div>
            {% endif %} {# fin de la condition admin #}
        {% endif %} {# fin de la condition user #}
        <div class=\"container\">
        {% if prestations is empty %}
    <p>Aucune prestation n'a été remplie.</p>
    <a href=\"{{ path('admin_prestations') }}\" class=\"btn btn-primary\">Ajouter des prestations</a>
    <div class=\"addPrestations\"> 
        <button class=\"add-button\" onclick=\"window.location.href='/admin'\">Ajouter des prestations</button>
   </div>
{% else %}
    <ul>
            <div class=\"pricing\">
                {% for prestation in prestations %} {# boucle sur les prestations #}
                    <div class=\"package\">
                        <h2>{{prestation.titre}}</h2>
                            <p>À partir de <span class=\"highlight\">{{prestation.prix}}€</span></p>
                            <p>{{prestation.description}}</p>
                            <p><span class=\"highlight\">{{prestation.nbPhotosRetouche}} photos</span> retouchées incluses</p>
                            <p>{{prestation.opt}}</p>
                    </div>
                    <script>
                    let add = document.querySelector('.addPrestations'); 
                    add.style.display = 'none'; 
                    </script>
                {% endfor %} {# fin de la boucle #}
            {% endif %} {# fin de la condition #}
            </div>
        </div>
{% endblock %}
    
            
", "prestations/index.html.twig", "C:\\Users\\ezzaouit\\Desktop\\Atteliers\\AP1-GP2-Photographe\\AP1-GP2-PhoTographe\\templates\\prestations\\index.html.twig");
    }
}
