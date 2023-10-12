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

/* partials/_header.html.twig */
class __TwigTemplate_533c8ecf5ebb65ecc1358e34ea43d502 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_header.html.twig"));

        // line 1
        echo "<div class=\"grid-content\">
<nav class=\"grid-nav\">
        <ul class=\"nav-items\">
            <li><a href=\"/\">Acceuil</a></li>
            <li><a href=\"/presentations\">Présentations</a></li>
            <li><a href=\"/prestations\">Prestations</a></li>
            <li><a href=\"/avis\">Avis</a></li>
            <li><a href=\"/contact\">Contact</a></li>
        </ul>
    </nav>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "partials/_header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"grid-content\">
<nav class=\"grid-nav\">
        <ul class=\"nav-items\">
            <li><a href=\"/\">Acceuil</a></li>
            <li><a href=\"/presentations\">Présentations</a></li>
            <li><a href=\"/prestations\">Prestations</a></li>
            <li><a href=\"/avis\">Avis</a></li>
            <li><a href=\"/contact\">Contact</a></li>
        </ul>
    </nav>
</div>
", "partials/_header.html.twig", "C:\\Users\\ezzaouit\\Desktop\\Atteliers\\AP1-GP2-Photographe\\AP1-GP2-PhoTographe\\templates\\partials\\_header.html.twig");
    }
}
