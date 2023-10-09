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

/* security/login.html.twig */
class __TwigTemplate_a55c83c198d5af750320872142db995c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

        echo "Connexion
";
        
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

        // line 7
        echo "\t<link href=\"assets/css/style_login.css\" rel=\"stylesheet\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

\t<body>
\t\t<div class=\"wrapper\">
\t\t\t<form method=\"post\">

\t\t\t\t<h1 class=\"Connexion\">Connexion</h1>

\t\t\t\t<div class=\"input_box\">
\t\t\t\t\t<input type=\"email\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "\" id=\"inputEmail\" name=\"email\" minlength=\"6\" size=\"15\" class=\"form-control\" placeholder=\"Email\" autocomplete=\"email\" required autofocus/>
\t\t\t\t\t<i class='bx bxs-user'></i>
\t\t\t\t</div>


\t\t\t\t<div class=\"input_box\">
\t\t\t\t\t<input type=\"password\" id=\"inputPassword\" name=\"password\" class=\"form-control\" autocomplete=\"current-password\" minlength=\"1\" size=\"15\" placeholder=\"************\" required/>
\t\t\t\t\t<i class='bx bxs-lock-alt'></i>
\t\t\t\t</div>


\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

\t\t\t\t<button class=\"btn_connexion\" type=\"submit\">
\t\t\t\t\tConnexion
\t\t\t\t</button>

\t\t\t\t<div class=\"create_account\">
\t\t\t\t\t<p>Vous n'avez pas de compte ?
\t\t\t\t\t\t<a href=\"/inscription\">Nouveau Client
\t\t\t\t\t\t</a>
\t\t\t\t\t</p>
\t\t\t\t</div>

\t\t\t\t";
        // line 44
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44)) {
            // line 45
            echo "\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\tVous êtes connecté(e) comme
\t\t\t\t\t\t";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), "userIdentifier", [], "any", false, false, false, 47), "html", null, true);
            echo ",
\t\t\t\t\t\t<a href=\"";
            // line 48
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 51
        echo "

\t\t\t\t";
        // line 53
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 53, $this->source); })())) {
            // line 54
            echo "\t\t\t\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 54, $this->source); })()), "messageKey", [], "any", false, false, false, 54), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 54, $this->source); })()), "messageData", [], "any", false, false, false, 54), "security"), "html", null, true);
            echo "</div>
\t\t\t\t";
        }
        // line 56
        echo "\t\t\t</form>
\t\t</div>
\t</body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 56,  174 => 54,  172 => 53,  168 => 51,  162 => 48,  158 => 47,  154 => 45,  152 => 44,  136 => 31,  122 => 20,  111 => 11,  101 => 10,  90 => 7,  80 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Connexion
{% endblock %}

{% block stylesheets %}
\t<link href=\"assets/css/style_login.css\" rel=\"stylesheet\">
{% endblock %}

{% block body %}
\t<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

\t<body>
\t\t<div class=\"wrapper\">
\t\t\t<form method=\"post\">

\t\t\t\t<h1 class=\"Connexion\">Connexion</h1>

\t\t\t\t<div class=\"input_box\">
\t\t\t\t\t<input type=\"email\" value=\"{{ last_username }}\" id=\"inputEmail\" name=\"email\" minlength=\"6\" size=\"15\" class=\"form-control\" placeholder=\"Email\" autocomplete=\"email\" required autofocus/>
\t\t\t\t\t<i class='bx bxs-user'></i>
\t\t\t\t</div>


\t\t\t\t<div class=\"input_box\">
\t\t\t\t\t<input type=\"password\" id=\"inputPassword\" name=\"password\" class=\"form-control\" autocomplete=\"current-password\" minlength=\"1\" size=\"15\" placeholder=\"************\" required/>
\t\t\t\t\t<i class='bx bxs-lock-alt'></i>
\t\t\t\t</div>


\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

\t\t\t\t<button class=\"btn_connexion\" type=\"submit\">
\t\t\t\t\tConnexion
\t\t\t\t</button>

\t\t\t\t<div class=\"create_account\">
\t\t\t\t\t<p>Vous n'avez pas de compte ?
\t\t\t\t\t\t<a href=\"/inscription\">Nouveau Client
\t\t\t\t\t\t</a>
\t\t\t\t\t</p>
\t\t\t\t</div>

\t\t\t\t{% if app.user %}
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\tVous êtes connecté(e) comme
\t\t\t\t\t\t{{ app.user.userIdentifier }},
\t\t\t\t\t\t<a href=\"{{ path('app_logout') }}\">Déconnexion</a>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}


\t\t\t\t{% if error %}
\t\t\t\t\t<div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
\t\t\t\t{% endif %}
\t\t\t</form>
\t\t</div>
\t</body>
{% endblock %}
", "security/login.html.twig", "/Users/dhelil/Documents/AP/AP-1-GP2-Photographe/AP1-GP2-Photographe/AP1-GP2-PhoTographe/templates/security/login.html.twig");
    }
}
