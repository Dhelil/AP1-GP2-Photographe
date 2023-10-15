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

/* partials/_footer.html.twig */
class __TwigTemplate_96aa0418dda6736c31e39217a351fcf8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_footer.html.twig"));

        // line 1
        echo "<div class=\"footer\">
        <p>&copy; ";
        // line 2
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " AlexCapture</p>
        <p><a href=\"#\">Mentions légales</a></p>
        <p><a href=\"#\">Conditions générales de vente</a></p>
        <p><a href=\"#\">Politique de confidentialité</a></p>
        <p><a href=\"#\">Politique de cookies</a></p>
        <p><a href=\"#\">FAQ</a></p>
        <p><a href=\"#\">Partenaires</a></p>
        <p><a href=\"#\">Aide</a></p>
        <p><a href=\"#\">Espace client</a></p>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "partials/_footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"footer\">
        <p>&copy; {{ 'now'|date('Y') }} AlexCapture</p>
        <p><a href=\"#\">Mentions légales</a></p>
        <p><a href=\"#\">Conditions générales de vente</a></p>
        <p><a href=\"#\">Politique de confidentialité</a></p>
        <p><a href=\"#\">Politique de cookies</a></p>
        <p><a href=\"#\">FAQ</a></p>
        <p><a href=\"#\">Partenaires</a></p>
        <p><a href=\"#\">Aide</a></p>
        <p><a href=\"#\">Espace client</a></p>
</div>", "partials/_footer.html.twig", "C:\\Users\\ezzaouit\\Desktop\\Atteliers\\AP1-GP2-Photographe\\AP1-GP2-PhoTographe\\templates\\partials\\_footer.html.twig");
    }
}
