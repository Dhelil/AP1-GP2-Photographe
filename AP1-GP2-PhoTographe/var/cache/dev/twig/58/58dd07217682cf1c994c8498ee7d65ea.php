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

        echo "Avis
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<style>
\t\t.example-wrapper {
\t\t\tmargin: 1em auto;
\t\t\tmax-width: 800px;
\t\t\twidth: 95%;
\t\t\tfont: 18px / 1.5 sans-serif;
\t\t}
\t\t.example-wrapper code {
\t\t\tbackground: #F5F5F5;
\t\t\tpadding: 2px 6px;
\t\t}
\t</style>

\t<div class=\"example-wrapper\">
\t\t<div class\"avis-global\">
\t\t\t<div class=\"avis-note-gen\">
\t\t\t\t<h2>Note Générale sur
\t\t\t\t\t";
        // line 24
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["ttlesavis"]) || array_key_exists("ttlesavis", $context) ? $context["ttlesavis"] : (function () { throw new RuntimeError('Variable "ttlesavis" does not exist.', 24, $this->source); })())), "html", null, true);
        echo "
\t\t\t\t\tavis</h2>
\t\t\t\t<div class\"note-globale\">
\t\t\t\t\t<div class=\"etoiles-moyenne\">
\t\t\t\t\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["moyenne"]) || array_key_exists("moyenne", $context) ? $context["moyenne"] : (function () { throw new RuntimeError('Variable "moyenne" does not exist.', 28, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 29
            echo "\t\t\t\t\t\t\t<img src=\"assets\\images/etoile_pleine.png\" width=\"30px\" height=\"30px\">
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
\t\t\t\t\t\t";
        // line 32
        if (((isset($context["etoilesemi"]) || array_key_exists("etoilesemi", $context) ? $context["etoilesemi"] : (function () { throw new RuntimeError('Variable "etoilesemi" does not exist.', 32, $this->source); })()) == 1)) {
            // line 33
            echo "\t\t\t\t\t\t\t<img src=\"assets\\images/etoile_semi.png\" width=\"30px\" height=\"30px\">
\t\t\t\t\t\t\t";
            // line 34
            if (((isset($context["moyenne"]) || array_key_exists("moyenne", $context) ? $context["moyenne"] : (function () { throw new RuntimeError('Variable "moyenne" does not exist.', 34, $this->source); })()) < 4.5)) {
                // line 35
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["quantsemi"]) || array_key_exists("quantsemi", $context) ? $context["quantsemi"] : (function () { throw new RuntimeError('Variable "quantsemi" does not exist.', 35, $this->source); })())));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 36
                    echo "\t\t\t\t\t\t\t\t\t<img src=\"assets\\images/etoile_vide.png\" width=\"30px\" height=\"30px\">
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "\t\t\t\t\t\t\t";
            }
            // line 39
            echo "
\t\t\t\t\t\t";
        } else {
            // line 41
            echo "\t\t\t\t\t\t\t";
            if (((isset($context["moyenne"]) || array_key_exists("moyenne", $context) ? $context["moyenne"] : (function () { throw new RuntimeError('Variable "moyenne" does not exist.', 41, $this->source); })()) < 4.5)) {
                // line 42
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["quant"]) || array_key_exists("quant", $context) ? $context["quant"] : (function () { throw new RuntimeError('Variable "quant" does not exist.', 42, $this->source); })())));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 43
                    echo "\t\t\t\t\t\t\t\t\t<img src=\"assets\\images/etoile_vide.png\" width=\"30px\" height=\"30px\">
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "\t\t\t\t\t\t\t";
            }
            // line 46
            echo "\t\t\t\t\t\t";
        }
        // line 47
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"texte-moyenne\">
\t\t\t\t\t\t<p>";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["moyenne"]) || array_key_exists("moyenne", $context) ? $context["moyenne"] : (function () { throw new RuntimeError('Variable "moyenne" does not exist.', 49, $this->source); })()), "html", null, true);
        echo "
\t\t\t\t\t\t\tsur 5</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"avis-note-prc\">
\t\t\t\t<div class=\"1etoile\"></div>
\t\t\t\t<div class=\"2etoile\"></div>
\t\t\t\t<div class=\"3etoile\"></div>
\t\t\t\t<div class=\"4etoile\"></div>
\t\t\t\t<div class=\"5etoile\"></div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"\" contact-barre>
\t\t\t<hr>
\t\t</div>
\t\t<div class=\"avis-commentaires\">
\t\t\t";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ttlesavis"]) || array_key_exists("ttlesavis", $context) ? $context["ttlesavis"] : (function () { throw new RuntimeError('Variable "ttlesavis" does not exist.', 66, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["avis"]) {
            // line 67
            echo "\t\t\t\t<div class=\"avis\">
\t\t\t\t\t<div class=\"headerdavis\">
\t\t\t\t\t\t<p class=\"nom\">";
            // line 69
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["avis"], "getIdAvisUser", [], "method", false, false, false, 69), "getNomUser", [], "method", false, false, false, 69) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["avis"], "getIdAvisUser", [], "method", false, false, false, 69), "getPrenomUser", [], "method", false, false, false, 69)), "html", null, true);
            echo "</p>


\t\t\t\t\t\t";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["avis"], "getNiveauAvis", [], "method", false, false, false, 72)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 73
                echo "\t\t\t\t\t\t\t<img src=\"assets\\images/etoile_pleine.png\" width=\"30px\" height=\"30px\">
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "
\t\t\t\t\t\t";
            // line 76
            if ((twig_get_attribute($this->env, $this->source, $context["avis"], "getNiveauAvis", [], "method", true, true, false, 76) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avis"], "getNiveauAvis", [], "method", false, false, false, 76)) >= 2))) {
                // line 77
                echo "\t\t\t\t\t\t\t<img src=\"assets\\images/etoile_semi.png\" width=\"30px\" height=\"30px\">
\t\t\t\t\t\t\t";
                // line 78
                if ((twig_get_attribute($this->env, $this->source, $context["avis"], "getNiveauAvis", [], "method", false, false, false, 78) < 4.5)) {
                    // line 79
                    echo "\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, (5 - twig_get_attribute($this->env, $this->source, $context["avis"], "getNiveauAvis", [], "method", false, false, false, 79))));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 80
                        echo "\t\t\t\t\t\t\t\t\t<img src=\"assets\\images/etoile_vide.png\" width=\"30px\" height=\"30px\">
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 82
                    echo "\t\t\t\t\t\t\t";
                }
                // line 83
                echo "
\t\t\t\t\t\t";
            } else {
                // line 85
                echo "\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["avis"], "getNiveauAvis", [], "method", false, false, false, 85) < 4.5)) {
                    // line 86
                    echo "\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, (5 - twig_get_attribute($this->env, $this->source, $context["avis"], "getNiveauAvis", [], "method", false, false, false, 86))));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 87
                        echo "\t\t\t\t\t\t\t\t\t<img src=\"assets\\images/etoile_vide.png\" width=\"30px\" height=\"30px\">
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 89
                    echo "\t\t\t\t\t\t\t";
                }
                // line 90
                echo "\t\t\t\t\t\t";
            }
            // line 91
            echo "

\t\t\t\t\t</div>
\t\t\t\t\t<p class=\"description\">";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avis"], "getDescriptionAvis", [], "method", false, false, false, 94), "html", null, true);
            echo "</p>
\t\t\t\t\t<p class=\"date\">date du
\t\t\t\t\t\t";
            // line 96
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avis"], "getDateAvis", [], "method", false, false, false, 96), "d-m-Y"), "html", null, true);
            echo "</p>
\t\t\t\t\t<br>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avis'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "\t\t</div>
\t\t<div class=\"\" contact-barre>
\t\t\t<hr>
\t\t</div>

\t\t";
        // line 105
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 105, $this->source); })()), "user", [], "any", false, false, false, 105)) {
            // line 106
            echo "\t\t";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), 'form_start');
            echo "
\t\t<p>";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 107, $this->source); })()), "getNomUser", [], "method", false, false, false, 107), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 107, $this->source); })()), "getPrenomUser", [], "method", false, false, false, 107), "html", null, true);
            echo "</p>
\t\t<div class=\"contact-bouton\">
\t\t\t<input type=\"submit\" class=\"submit-button\">
\t\t</div>
\t\t";
            // line 111
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), 'form_end');
            echo "
\t\t";
        } else {
            // line 113
            echo "\t\t<div class=\"contact-bouton\">
\t\t\t<a href=\"";
            // line 114
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"submit-button\">Connectez-vous pour laisser un avis</a>
\t\t";
        }
        // line 116
        echo "
\t</div>
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
        return array (  316 => 116,  311 => 114,  308 => 113,  303 => 111,  294 => 107,  289 => 106,  287 => 105,  280 => 100,  270 => 96,  265 => 94,  260 => 91,  257 => 90,  254 => 89,  247 => 87,  242 => 86,  239 => 85,  235 => 83,  232 => 82,  225 => 80,  220 => 79,  218 => 78,  215 => 77,  213 => 76,  210 => 75,  203 => 73,  199 => 72,  193 => 69,  189 => 67,  185 => 66,  165 => 49,  161 => 47,  158 => 46,  155 => 45,  148 => 43,  143 => 42,  140 => 41,  136 => 39,  133 => 38,  126 => 36,  121 => 35,  119 => 34,  116 => 33,  114 => 32,  111 => 31,  104 => 29,  100 => 28,  93 => 24,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Avis
{% endblock %}

{% block body %}
\t<style>
\t\t.example-wrapper {
\t\t\tmargin: 1em auto;
\t\t\tmax-width: 800px;
\t\t\twidth: 95%;
\t\t\tfont: 18px / 1.5 sans-serif;
\t\t}
\t\t.example-wrapper code {
\t\t\tbackground: #F5F5F5;
\t\t\tpadding: 2px 6px;
\t\t}
\t</style>

\t<div class=\"example-wrapper\">
\t\t<div class\"avis-global\">
\t\t\t<div class=\"avis-note-gen\">
\t\t\t\t<h2>Note Générale sur
\t\t\t\t\t{{ ttlesavis|length }}
\t\t\t\t\tavis</h2>
\t\t\t\t<div class\"note-globale\">
\t\t\t\t\t<div class=\"etoiles-moyenne\">
\t\t\t\t\t\t{% for i in range(1, moyenne) %}
\t\t\t\t\t\t\t<img src=\"assets\\images/etoile_pleine.png\" width=\"30px\" height=\"30px\">
\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t{% if etoilesemi == 1 %}
\t\t\t\t\t\t\t<img src=\"assets\\images/etoile_semi.png\" width=\"30px\" height=\"30px\">
\t\t\t\t\t\t\t{% if moyenne < 4.5 %}
\t\t\t\t\t\t\t\t{% for i in range(1, quantsemi) %}
\t\t\t\t\t\t\t\t\t<img src=\"assets\\images/etoile_vide.png\" width=\"30px\" height=\"30px\">
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t{% if moyenne < 4.5 %}
\t\t\t\t\t\t\t\t{% for i in range(1, quant) %}
\t\t\t\t\t\t\t\t\t<img src=\"assets\\images/etoile_vide.png\" width=\"30px\" height=\"30px\">
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"texte-moyenne\">
\t\t\t\t\t\t<p>{{ moyenne }}
\t\t\t\t\t\t\tsur 5</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"avis-note-prc\">
\t\t\t\t<div class=\"1etoile\"></div>
\t\t\t\t<div class=\"2etoile\"></div>
\t\t\t\t<div class=\"3etoile\"></div>
\t\t\t\t<div class=\"4etoile\"></div>
\t\t\t\t<div class=\"5etoile\"></div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"\" contact-barre>
\t\t\t<hr>
\t\t</div>
\t\t<div class=\"avis-commentaires\">
\t\t\t{% for avis in ttlesavis %}
\t\t\t\t<div class=\"avis\">
\t\t\t\t\t<div class=\"headerdavis\">
\t\t\t\t\t\t<p class=\"nom\">{{ avis.getIdAvisUser().getNomUser() ~ ' ' ~ avis.getIdAvisUser().getPrenomUser() }}</p>


\t\t\t\t\t\t{% for i in range(1, avis.getNiveauAvis()) %}
\t\t\t\t\t\t\t<img src=\"assets\\images/etoile_pleine.png\" width=\"30px\" height=\"30px\">
\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t{% if avis.getNiveauAvis() is defined and avis.getNiveauAvis()|length >= 2 %}
\t\t\t\t\t\t\t<img src=\"assets\\images/etoile_semi.png\" width=\"30px\" height=\"30px\">
\t\t\t\t\t\t\t{% if avis.getNiveauAvis() < 4.5 %}
\t\t\t\t\t\t\t\t{% for i in range(1, (5 - avis.getNiveauAvis())) %}
\t\t\t\t\t\t\t\t\t<img src=\"assets\\images/etoile_vide.png\" width=\"30px\" height=\"30px\">
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t{% if avis.getNiveauAvis() < 4.5 %}
\t\t\t\t\t\t\t\t{% for i in range(1, (5 - avis.getNiveauAvis())) %}
\t\t\t\t\t\t\t\t\t<img src=\"assets\\images/etoile_vide.png\" width=\"30px\" height=\"30px\">
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endif %}


\t\t\t\t\t</div>
\t\t\t\t\t<p class=\"description\">{{ avis.getDescriptionAvis() }}</p>
\t\t\t\t\t<p class=\"date\">date du
\t\t\t\t\t\t{{ avis.getDateAvis()|date('d-m-Y') }}</p>
\t\t\t\t\t<br>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t\t<div class=\"\" contact-barre>
\t\t\t<hr>
\t\t</div>

\t\t{% if app.user %}
\t\t{{ form_start(form) }}
\t\t<p>{{ user.getNomUser() }} {{ user.getPrenomUser() }}</p>
\t\t<div class=\"contact-bouton\">
\t\t\t<input type=\"submit\" class=\"submit-button\">
\t\t</div>
\t\t{{ form_end(form) }}
\t\t{% else %}
\t\t<div class=\"contact-bouton\">
\t\t\t<a href=\"{{ path('app_login') }}\" class=\"submit-button\">Connectez-vous pour laisser un avis</a>
\t\t{% endif %}

\t</div>
{% endblock %}
", "page_avis/index.html.twig", "C:\\Users\\izikkii\\Pictures\\SIO-2\\AP\\AP1-GROUPE2\\projet\\vrai de vrai\\AP1-GP2-Photographe\\AP1-GP2-PhoTographe\\templates\\page_avis\\index.html.twig");
    }
}
