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

/* page_avis/index.html.twig */
class __TwigTemplate_55817cfd3cb3af867ed77e81bd7bf914 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_avis/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page_avis/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello PageAvisController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class\"avis-global\">
    <div class=\"avis-note-gen\">
        <h1>Note Générale sur ";
        // line 13
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["ttlesavis"]) || array_key_exists("ttlesavis", $context) ? $context["ttlesavis"] : (function () { throw new RuntimeError('Variable "ttlesavis" does not exist.', 13, $this->source); })())), "html", null, true);
        echo " avis, moyenne de : ";
        echo twig_escape_filter($this->env, (isset($context["moyenne"]) || array_key_exists("moyenne", $context) ? $context["moyenne"] : (function () { throw new RuntimeError('Variable "moyenne" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "</h1>
        <div class\"note-globale\">

            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["moyenne"]) || array_key_exists("moyenne", $context) ? $context["moyenne"] : (function () { throw new RuntimeError('Variable "moyenne" does not exist.', 16, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 17
            echo "                <img src=\"assets\\images/etoile_pleine.png\" width=\"50px\" height=\"50px\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "            
            ";
        // line 20
        if (((isset($context["etoilesemi"]) || array_key_exists("etoilesemi", $context) ? $context["etoilesemi"] : (function () { throw new RuntimeError('Variable "etoilesemi" does not exist.', 20, $this->source); })()) == 1)) {
            // line 21
            echo "                <img src=\"assets\\images/etoile_semi.png\" width=\"50px\" height=\"50px\">
                ";
            // line 22
            if (((isset($context["moyenne"]) || array_key_exists("moyenne", $context) ? $context["moyenne"] : (function () { throw new RuntimeError('Variable "moyenne" does not exist.', 22, $this->source); })()) < 4.5)) {
                // line 23
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["quantsemi"]) || array_key_exists("quantsemi", $context) ? $context["quantsemi"] : (function () { throw new RuntimeError('Variable "quantsemi" does not exist.', 23, $this->source); })())));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 24
                    echo "                    <img src=\"assets\\images/etoile_vide.png\" width=\"50px\" height=\"50px\">
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "                ";
            }
            // line 27
            echo "            
            ";
        } else {
            // line 29
            echo "                ";
            if (((isset($context["moyenne"]) || array_key_exists("moyenne", $context) ? $context["moyenne"] : (function () { throw new RuntimeError('Variable "moyenne" does not exist.', 29, $this->source); })()) < 4.5)) {
                // line 30
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["quant"]) || array_key_exists("quant", $context) ? $context["quant"] : (function () { throw new RuntimeError('Variable "quant" does not exist.', 30, $this->source); })())));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 31
                    echo "                    <img src=\"assets\\images/etoile_vide.png\" width=\"50px\" height=\"50px\">
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "                ";
            }
            // line 34
            echo "            ";
        }
        // line 35
        echo "
        </div>
    </div>
    <div class=\"avis-note-prc\">
        <div class=\"1etoile\"> </div>
        <div class=\"2etoile\"> </div>
        <div class=\"3etoile\"> </div>
        <div class=\"4etoile\"> </div>
        <div class=\"5etoile\"> </div>
    </div>
</div>
<div class=\"\" contact-barre>
\t<hr>
</div>
<div class=\"avis-commentaires\">
";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ttlesavis"]) || array_key_exists("ttlesavis", $context) ? $context["ttlesavis"] : (function () { throw new RuntimeError('Variable "ttlesavis" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["avis"]) {
            // line 51
            echo "    <div class=\"avis\">
        <div class=\"headerdavis\">
            <h2 class=\"nom\">";
            // line 53
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["avis"], "getIdAvisUser", [], "method", false, false, false, 53), "getNomUser", [], "method", false, false, false, 53) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["avis"], "getIdAvisUser", [], "method", false, false, false, 53), "getPrenomUser", [], "method", false, false, false, 53)), "html", null, true);
            echo "</h2>
            ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 55
                echo "                <img src=\"assets\\images/etoile_pleine.png\" width=\"50px\" height=\"50px\">
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "                <img src=\"assets\\images/etoile_semi.png\" width=\"50px\" height=\"50px\">
                <img src=\"assets\\images/etoile_vide.png\" width=\"50px\" height=\"50px\">
        </div>
        <p class=\"description\">";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avis"], "getDescriptionAvis", [], "method", false, false, false, 60), "html", null, true);
            echo "</p>
        <p class=\"date\">date du ";
            // line 61
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avis"], "getDateAvis", [], "method", false, false, false, 61), "d-m-Y"), "html", null, true);
            echo "</p>
        <br>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avis'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "page_avis/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 65,  200 => 61,  196 => 60,  191 => 57,  184 => 55,  180 => 54,  176 => 53,  172 => 51,  168 => 50,  151 => 35,  148 => 34,  145 => 33,  138 => 31,  133 => 30,  130 => 29,  126 => 27,  123 => 26,  116 => 24,  111 => 23,  109 => 22,  106 => 21,  104 => 20,  101 => 19,  94 => 17,  90 => 16,  82 => 13,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello PageAvisController!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class\"avis-global\">
    <div class=\"avis-note-gen\">
        <h1>Note Générale sur {{ ttlesavis|length }} avis, moyenne de : {{ moyenne }}</h1>
        <div class\"note-globale\">

            {% for i in range(1, moyenne) %}
                <img src=\"assets\\images/etoile_pleine.png\" width=\"50px\" height=\"50px\">
            {% endfor %}
            
            {% if etoilesemi == 1 %}
                <img src=\"assets\\images/etoile_semi.png\" width=\"50px\" height=\"50px\">
                {% if moyenne < 4.5 %}
                {% for i in range(1, quantsemi) %}
                    <img src=\"assets\\images/etoile_vide.png\" width=\"50px\" height=\"50px\">
                {% endfor %}
                {% endif %}
            
            {% else %}
                {% if moyenne < 4.5 %}
                {% for i in range(1, quant) %}
                    <img src=\"assets\\images/etoile_vide.png\" width=\"50px\" height=\"50px\">
                {% endfor %}
                {% endif %}
            {% endif %}

        </div>
    </div>
    <div class=\"avis-note-prc\">
        <div class=\"1etoile\"> </div>
        <div class=\"2etoile\"> </div>
        <div class=\"3etoile\"> </div>
        <div class=\"4etoile\"> </div>
        <div class=\"5etoile\"> </div>
    </div>
</div>
<div class=\"\" contact-barre>
\t<hr>
</div>
<div class=\"avis-commentaires\">
{% for avis in ttlesavis %}
    <div class=\"avis\">
        <div class=\"headerdavis\">
            <h2 class=\"nom\">{{ avis.getIdAvisUser().getNomUser() ~ ' ' ~ avis.getIdAvisUser().getPrenomUser() }}</h2>
            {% for i in range(1, 3) %}
                <img src=\"assets\\images/etoile_pleine.png\" width=\"50px\" height=\"50px\">
            {% endfor %}
                <img src=\"assets\\images/etoile_semi.png\" width=\"50px\" height=\"50px\">
                <img src=\"assets\\images/etoile_vide.png\" width=\"50px\" height=\"50px\">
        </div>
        <p class=\"description\">{{ avis.getDescriptionAvis() }}</p>
        <p class=\"date\">date du {{ avis.getDateAvis()|date('d-m-Y') }}</p>
        <br>
    </div>
{% endfor %}
</div>
{% endblock %}
", "page_avis/index.html.twig", "C:\\Users\\izikkii\\Pictures\\SIO-2\\AP\\AP1-GROUPE2\\projet\\vrai de vrai\\AP1-GP2-Photographe\\AP1-GP2-PhoTographe\\templates\\page_avis\\index.html.twig");
    }
}
