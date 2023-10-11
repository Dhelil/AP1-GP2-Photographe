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

/* page_contact/index.html.twig */
class __TwigTemplate_f905b8bf6cf5176b4745c92fd701b708 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_contact/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page_contact/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
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
\t\t<div class=\"menu-contact\">
\t\t\t<div class=\"contact-titre\">
\t\t\t\t<h1 class=\"titre-contact\">Contact</h1>
\t\t\t</div>
\t\t\t<div class=\"\" contact-barre>
\t\t\t\t<hr>
\t\t\t</div>
\t\t\t<form>
\t\t\t\t<div class=\"contact-infosa\">
\t\t\t\t\t<input class=\"input-email\" type=\"text\" placeholder=\"E-mail...\" required>
\t\t\t\t\t<input class=\"input-objet\" type=\"text\" placeholder=\"Objet...\" required>
\t\t\t\t</div>
\t\t\t\t<div class=\"contact-infosb\">
\t\t\t\t\t<input class=\"input-telephone\" type=\"text\" placeholder=\"Telephone...\" required>
\t\t\t\t\t<input class=\"input-nom\" type=\"text\" placeholder=\"Nom...\" required>
\t\t\t\t</div>
\t\t\t\t<div class=\"contact-commentaire\">
\t\t\t\t\t<p>Commentaire</P>
\t\t\t\t</div>
\t\t\t\t<div class=\"contact-infosc\">
\t\t\t\t\t<textarea class=\"textarea-commentaire\" id=\"commentaire\" name=\"commentaire\" placeholder=\"Entrez du texte ici...\" required></textarea>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "page_contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

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
\t\t<div class=\"menu-contact\">
\t\t\t<div class=\"contact-titre\">
\t\t\t\t<h1 class=\"titre-contact\">Contact</h1>
\t\t\t</div>
\t\t\t<div class=\"\" contact-barre>
\t\t\t\t<hr>
\t\t\t</div>
\t\t\t<form>
\t\t\t\t<div class=\"contact-infosa\">
\t\t\t\t\t<input class=\"input-email\" type=\"text\" placeholder=\"E-mail...\" required>
\t\t\t\t\t<input class=\"input-objet\" type=\"text\" placeholder=\"Objet...\" required>
\t\t\t\t</div>
\t\t\t\t<div class=\"contact-infosb\">
\t\t\t\t\t<input class=\"input-telephone\" type=\"text\" placeholder=\"Telephone...\" required>
\t\t\t\t\t<input class=\"input-nom\" type=\"text\" placeholder=\"Nom...\" required>
\t\t\t\t</div>
\t\t\t\t<div class=\"contact-commentaire\">
\t\t\t\t\t<p>Commentaire</P>
\t\t\t\t</div>
\t\t\t\t<div class=\"contact-infosc\">
\t\t\t\t\t<textarea class=\"textarea-commentaire\" id=\"commentaire\" name=\"commentaire\" placeholder=\"Entrez du texte ici...\" required></textarea>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>


{% endblock %}
", "page_contact/index.html.twig", "C:\\Users\\iliesjaaj\\Desktop\\JXTP\\projets\\sio-2\\AP\\AP-1\\AP1-GP2-Photographe\\AP1-GP2-PhoTographe\\templates\\page_contact\\index.html.twig");
    }
}
