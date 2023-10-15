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

        echo "Hello PageAvisController!
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

\t<div class\"avis-global\">
\t\t<div class=\"avis-note-gen\">
\t\t\t<h2>Note Générale sur
\t\t\t\t";
        // line 23
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["ttlesavis"]) || array_key_exists("ttlesavis", $context) ? $context["ttlesavis"] : (function () { throw new RuntimeError('Variable "ttlesavis" does not exist.', 23, $this->source); })())), "html", null, true);
        echo "
\t\t\t\tavis, moyenne de :
\t\t\t\t";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["moyenne"]) || array_key_exists("moyenne", $context) ? $context["moyenne"] : (function () { throw new RuntimeError('Variable "moyenne" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "</h2>
\t\t\t<div class\"note-globale\">

\t\t\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["moyenne"]) || array_key_exists("moyenne", $context) ? $context["moyenne"] : (function () { throw new RuntimeError('Variable "moyenne" does not exist.', 28, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 29
            echo "\t\t\t\t\t<img src=\"assets\\images/etoile_pleine.png\" width=\"30px\" height=\"30px\">
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
\t\t\t\t";
        // line 32
        if (((isset($context["etoilesemi"]) || array_key_exists("etoilesemi", $context) ? $context["etoilesemi"] : (function () { throw new RuntimeError('Variable "etoilesemi" does not exist.', 32, $this->source); })()) == 1)) {
            // line 33
            echo "\t\t\t\t\t<img src=\"assets\\images/etoile_semi.png\" width=\"30px\" height=\"30px\">
\t\t\t\t\t";
            // line 34
            if (((isset($context["moyenne"]) || array_key_exists("moyenne", $context) ? $context["moyenne"] : (function () { throw new RuntimeError('Variable "moyenne" does not exist.', 34, $this->source); })()) < 4.5)) {
                // line 35
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["quantsemi"]) || array_key_exists("quantsemi", $context) ? $context["quantsemi"] : (function () { throw new RuntimeError('Variable "quantsemi" does not exist.', 35, $this->source); })())));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 36
                    echo "\t\t\t\t\t\t\t<img src=\"assets\\images/etoile_vide.png\" width=\"30px\" height=\"30px\">
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "\t\t\t\t\t";
            }
            // line 39
            echo "
\t\t\t\t";
        } else {
            // line 41
            echo "\t\t\t\t\t";
            if (((isset($context["moyenne"]) || array_key_exists("moyenne", $context) ? $context["moyenne"] : (function () { throw new RuntimeError('Variable "moyenne" does not exist.', 41, $this->source); })()) < 4.5)) {
                // line 42
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["quant"]) || array_key_exists("quant", $context) ? $context["quant"] : (function () { throw new RuntimeError('Variable "quant" does not exist.', 42, $this->source); })())));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 43
                    echo "\t\t\t\t\t\t\t<img src=\"assets\\images/etoile_vide.png\" width=\"30px\" height=\"30px\">
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "\t\t\t\t\t";
            }
            // line 46
            echo "\t\t\t\t";
        }
        // line 47
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"avis-note-prc\">
\t\t\t<div class=\"1etoile\"></div>
\t\t\t<div class=\"2etoile\"></div>
\t\t\t<div class=\"3etoile\"></div>
\t\t\t<div class=\"4etoile\"></div>
\t\t\t<div class=\"5etoile\"></div>
\t\t</div>
\t</div>
\t<div class=\"\" contact-barre>
\t\t<hr>
\t</div>
\t<div class=\"avis-commentaires\">
\t\t";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ttlesavis"]) || array_key_exists("ttlesavis", $context) ? $context["ttlesavis"] : (function () { throw new RuntimeError('Variable "ttlesavis" does not exist.', 62, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["avis"]) {
            // line 63
            echo "\t\t\t<div class=\"avis\">
\t\t\t\t<div class=\"headerdavis\">
\t\t\t\t\t<h2 class=\"nom\">";
            // line 65
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["avis"], "getIdAvisUser", [], "method", false, false, false, 65), "getNomUser", [], "method", false, false, false, 65) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["avis"], "getIdAvisUser", [], "method", false, false, false, 65), "getPrenomUser", [], "method", false, false, false, 65)), "html", null, true);
            echo "</h2>


\t\t\t\t\t";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["avis"], "getNiveauAvis", [], "method", false, false, false, 68)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 69
                echo "\t\t\t\t\t\t<img src=\"assets\\images/etoile_pleine.png\" width=\"50px\" height=\"50px\">
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "
\t\t\t\t\t";
            // line 72
            if ((twig_get_attribute($this->env, $this->source, $context["avis"], "getNiveauAvis", [], "method", true, true, false, 72) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avis"], "getNiveauAvis", [], "method", false, false, false, 72)) >= 2))) {
                // line 73
                echo "\t\t\t\t\t\t<img src=\"assets\\images/etoile_semi.png\" width=\"50px\" height=\"50px\">
\t\t\t\t\t\t";
                // line 74
                if ((twig_get_attribute($this->env, $this->source, $context["avis"], "getNiveauAvis", [], "method", false, false, false, 74) < 4.5)) {
                    // line 75
                    echo "\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, (5 - twig_get_attribute($this->env, $this->source, $context["avis"], "getNiveauAvis", [], "method", false, false, false, 75))));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 76
                        echo "\t\t\t\t\t\t\t\t<img src=\"assets\\images/etoile_vide.png\" width=\"50px\" height=\"50px\">
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 78
                    echo "\t\t\t\t\t\t";
                }
                // line 79
                echo "
\t\t\t\t\t";
            } else {
                // line 81
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["avis"], "getNiveauAvis", [], "method", false, false, false, 81) < 4.5)) {
                    // line 82
                    echo "\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, (5 - twig_get_attribute($this->env, $this->source, $context["avis"], "getNiveauAvis", [], "method", false, false, false, 82))));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 83
                        echo "\t\t\t\t\t\t\t\t<img src=\"assets\\images/etoile_vide.png\" width=\"50px\" height=\"50px\">
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 85
                    echo "\t\t\t\t\t\t";
                }
                // line 86
                echo "\t\t\t\t\t";
            }
            // line 87
            echo "

\t\t\t\t\t";
            // line 94
            echo "

\t\t\t\t</div>
\t\t\t\t<p class=\"description\">";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avis"], "getDescriptionAvis", [], "method", false, false, false, 97), "html", null, true);
            echo "</p>
\t\t\t\t<p class=\"date\">date du
\t\t\t\t\t";
            // line 99
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avis"], "getDateAvis", [], "method", false, false, false, 99), "d-m-Y"), "html", null, true);
            echo "</p>
\t\t\t\t<br>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avis'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "\t</div>
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
        return array (  280 => 103,  270 => 99,  265 => 97,  260 => 94,  256 => 87,  253 => 86,  250 => 85,  243 => 83,  238 => 82,  235 => 81,  231 => 79,  228 => 78,  221 => 76,  216 => 75,  214 => 74,  211 => 73,  209 => 72,  206 => 71,  199 => 69,  195 => 68,  189 => 65,  185 => 63,  181 => 62,  164 => 47,  161 => 46,  158 => 45,  151 => 43,  146 => 42,  143 => 41,  139 => 39,  136 => 38,  129 => 36,  124 => 35,  122 => 34,  119 => 33,  117 => 32,  114 => 31,  107 => 29,  103 => 28,  97 => 25,  92 => 23,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello PageAvisController!
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

\t<div class\"avis-global\">
\t\t<div class=\"avis-note-gen\">
\t\t\t<h2>Note Générale sur
\t\t\t\t{{ ttlesavis|length }}
\t\t\t\tavis, moyenne de :
\t\t\t\t{{ moyenne }}</h2>
\t\t\t<div class\"note-globale\">

\t\t\t\t{% for i in range(1, moyenne) %}
\t\t\t\t\t<img src=\"assets\\images/etoile_pleine.png\" width=\"30px\" height=\"30px\">
\t\t\t\t{% endfor %}

\t\t\t\t{% if etoilesemi == 1 %}
\t\t\t\t\t<img src=\"assets\\images/etoile_semi.png\" width=\"30px\" height=\"30px\">
\t\t\t\t\t{% if moyenne < 4.5 %}
\t\t\t\t\t\t{% for i in range(1, quantsemi) %}
\t\t\t\t\t\t\t<img src=\"assets\\images/etoile_vide.png\" width=\"30px\" height=\"30px\">
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% endif %}

\t\t\t\t{% else %}
\t\t\t\t\t{% if moyenne < 4.5 %}
\t\t\t\t\t\t{% for i in range(1, quant) %}
\t\t\t\t\t\t\t<img src=\"assets\\images/etoile_vide.png\" width=\"30px\" height=\"30px\">
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% endif %}
\t\t\t\t{% endif %}

\t\t\t</div>
\t\t</div>
\t\t<div class=\"avis-note-prc\">
\t\t\t<div class=\"1etoile\"></div>
\t\t\t<div class=\"2etoile\"></div>
\t\t\t<div class=\"3etoile\"></div>
\t\t\t<div class=\"4etoile\"></div>
\t\t\t<div class=\"5etoile\"></div>
\t\t</div>
\t</div>
\t<div class=\"\" contact-barre>
\t\t<hr>
\t</div>
\t<div class=\"avis-commentaires\">
\t\t{% for avis in ttlesavis %}
\t\t\t<div class=\"avis\">
\t\t\t\t<div class=\"headerdavis\">
\t\t\t\t\t<h2 class=\"nom\">{{ avis.getIdAvisUser().getNomUser() ~ ' ' ~ avis.getIdAvisUser().getPrenomUser() }}</h2>


\t\t\t\t\t{% for i in range(1, avis.getNiveauAvis()) %}
\t\t\t\t\t\t<img src=\"assets\\images/etoile_pleine.png\" width=\"50px\" height=\"50px\">
\t\t\t\t\t{% endfor %}

\t\t\t\t\t{% if avis.getNiveauAvis() is defined and avis.getNiveauAvis()|length >= 2 %}
\t\t\t\t\t\t<img src=\"assets\\images/etoile_semi.png\" width=\"50px\" height=\"50px\">
\t\t\t\t\t\t{% if avis.getNiveauAvis() < 4.5 %}
\t\t\t\t\t\t\t{% for i in range(1, (5 - avis.getNiveauAvis())) %}
\t\t\t\t\t\t\t\t<img src=\"assets\\images/etoile_vide.png\" width=\"50px\" height=\"50px\">
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t{% else %}
\t\t\t\t\t\t{% if avis.getNiveauAvis() < 4.5 %}
\t\t\t\t\t\t\t{% for i in range(1, (5 - avis.getNiveauAvis())) %}
\t\t\t\t\t\t\t\t<img src=\"assets\\images/etoile_vide.png\" width=\"50px\" height=\"50px\">
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endif %}


\t\t\t\t\t{# {% for i in range(1, 3) %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets\\images/etoile_pleine.png\" width=\"50px\" height=\"50px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets\\images/etoile_semi.png\" width=\"50px\" height=\"50px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets\\images/etoile_vide.png\" width=\"50px\" height=\"50px\"> #}


\t\t\t\t</div>
\t\t\t\t<p class=\"description\">{{ avis.getDescriptionAvis() }}</p>
\t\t\t\t<p class=\"date\">date du
\t\t\t\t\t{{ avis.getDateAvis()|date('d-m-Y') }}</p>
\t\t\t\t<br>
\t\t\t</div>
\t\t{% endfor %}
\t</div>
{% endblock %}
", "page_avis/index.html.twig", "C:\\Users\\iliesjaaj\\Desktop\\JXTP\\projets\\sio-2\\AP\\AP-1\\AP1-GP2-Photographe\\AP1-GP2-PhoTographe\\templates\\page_avis\\index.html.twig");
    }
}
