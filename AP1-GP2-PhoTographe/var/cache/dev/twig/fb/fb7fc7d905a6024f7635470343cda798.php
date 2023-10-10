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

/* c_principal/index.html.twig */
class __TwigTemplate_049c63243bf8b3538f8ef2a10ef001ce extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheet' => [$this, 'block_stylesheet'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "c_principal/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 6
        echo "
     
";
        // line 8
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 9
        echo "

</head>

";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        echo "<link rel=\"stylesheet\" href=\"assets/css/style_accueil.css\"> ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "
<body class=\"accueil-login\">
    <nav>
        <ul class=\"nav-items\">
            <li><a href=\"index.php\">Acceuil</a></li>
            <li><a href=\"inscription.php\">Présentations</a></li>
            <li><a href=\"connexion.php\">Préstations</a></li>
            <li><a href=\"profil.php\">Avis</a></li>
            <li><a href=\"admin.php\">Contact</a></li>
        </ul>
    </nav>
    <h1 class=\"titile-acueille\">AlexCaptures</h1>

    <section class=\"login-choice\">
        <button class=\"btn-login\"> <a href=\"/connexion\">Se connecter </a></button>
        <p class=\"txt-login\">ou</p>
        <button class=\"btn-login\"><a href=\"/inscription\">Créer un compte </a></button>
    </section>
</body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "c_principal/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  105 => 14,  98 => 13,  85 => 8,  73 => 5,  65 => 34,  63 => 13,  57 => 9,  55 => 8,  51 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
{% block title %}{% endblock %}

     
{% block stylesheet %}<link rel=\"stylesheet\" href=\"assets/css/style_accueil.css\"> {% endblock %}


</head>

{% block body %}

<body class=\"accueil-login\">
    <nav>
        <ul class=\"nav-items\">
            <li><a href=\"index.php\">Acceuil</a></li>
            <li><a href=\"inscription.php\">Présentations</a></li>
            <li><a href=\"connexion.php\">Préstations</a></li>
            <li><a href=\"profil.php\">Avis</a></li>
            <li><a href=\"admin.php\">Contact</a></li>
        </ul>
    </nav>
    <h1 class=\"titile-acueille\">AlexCaptures</h1>

    <section class=\"login-choice\">
        <button class=\"btn-login\"> <a href=\"/connexion\">Se connecter </a></button>
        <p class=\"txt-login\">ou</p>
        <button class=\"btn-login\"><a href=\"/inscription\">Créer un compte </a></button>
    </section>
</body>
{% endblock %}
</html>
", "c_principal/index.html.twig", "C:\\Users\\ezzaouit\\Desktop\\Atteliers\\AP1-GP2-Photographe\\AP1-GP2-PhoTographe\\templates\\c_principal\\index.html.twig");
    }
}
