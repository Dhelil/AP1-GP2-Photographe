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
class __TwigTemplate_f2882b96a538771154b0107ffded3fd4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_header.html.twig"));

        // line 1
        echo "<nav class=\"nav\">
    <ul class=\"nav-items\">
        <li><a href=\"/\">Acceuil</a></li>
        <li><a href=\"/presentations\">Presentations</a></li>
        <li><a href=\"/prestations\">Prestations</a></li>
        <li><a href=\"#\">Avis</a></li>
        <li><a href=\"#\">Contact</a></li>
       
    </ul>
    
";
        // line 11
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11)) {
            // line 12
            echo "    <div class=\"deco\">
        <button class=\"btn-deco\" onclick=\"window.location.href='";
            // line 13
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "'\">Déconnexion</button>
    </div>
    
    ";
            // line 16
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                echo " ";
                // line 17
                echo "        <div class=\"deco\">
            <button class=\"btn-deco\" onclick=\"window.location.href='/admin'\">Administration</button>
        </div>
    ";
            }
        } else {
            // line 22
            echo "    <div class=\"co\">
        <button class=\"btn-co1\" onclick=\"window.location.href='";
            // line 23
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "'\">Connexion</button>
        <button class=\"btn-co2\" onclick=\"window.location.href='";
            // line 24
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "'\">Inscription</button>
    </div>
";
        }
        // line 27
        echo "
</nav>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "partials/_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 27,  83 => 24,  79 => 23,  76 => 22,  69 => 17,  66 => 16,  60 => 13,  57 => 12,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"nav\">
    <ul class=\"nav-items\">
        <li><a href=\"/\">Acceuil</a></li>
        <li><a href=\"/presentations\">Presentations</a></li>
        <li><a href=\"/prestations\">Prestations</a></li>
        <li><a href=\"#\">Avis</a></li>
        <li><a href=\"#\">Contact</a></li>
       
    </ul>
    
{% if app.user %}
    <div class=\"deco\">
        <button class=\"btn-deco\" onclick=\"window.location.href='{{ path('app_logout') }}'\">Déconnexion</button>
    </div>
    
    {% if is_granted('ROLE_ADMIN') %} {# Si l'utilisateur est connecté et qu'il est admin #}
        <div class=\"deco\">
            <button class=\"btn-deco\" onclick=\"window.location.href='/admin'\">Administration</button>
        </div>
    {% endif %}
{% else %}
    <div class=\"co\">
        <button class=\"btn-co1\" onclick=\"window.location.href='{{ path('app_login') }}'\">Connexion</button>
        <button class=\"btn-co2\" onclick=\"window.location.href='{{ path('app_register') }}'\">Inscription</button>
    </div>
{% endif %}

</nav>
", "partials/_header.html.twig", "C:\\Users\\ezzaouit\\Desktop\\Atteliers\\AP1-GP2-Photographe\\AP1-GP2-PhoTographe\\templates\\partials\\_header.html.twig");
    }
}
