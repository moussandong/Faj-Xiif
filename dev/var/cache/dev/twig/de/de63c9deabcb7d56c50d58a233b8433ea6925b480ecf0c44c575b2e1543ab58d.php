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

/* shared/header.html.twig */
class __TwigTemplate_27e3c083167a28cc1d6bfc13adf0d0bbad3ff027a64aebf3f88a706b1f714d62 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/header.html.twig"));

        // line 1
        echo "<nav class=\"navbar fixed-top navbar-expand-lg navbar-dark bg-dark\">
\t<a class=\"navbar-brand\" href=\"#\">
\t\tFaj Xiif
\t</a>
\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t<span class=\"navbar-toggler-icon\"></span>
\t</button>

\t<div class=\"collapse navbar-collapse\" id=\"navbarColor02\">

\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t<li class=\"nav-item active\">
\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
\t\t\t\t\tAccueil
\t\t\t\t\t<span class=\"sr-only\">
\t\t\t\t\t\t(current)
\t\t\t\t\t</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item active\">
\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-basket2-fill\" viewbox=\"0 0 16 16\">
\t\t\t\t\t<path d=\"M5.929 1.757a.5.5 0 1 0-.858-.514L2.217 6H.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h.623l1.844 6.456A.75.75 0 0 0 3.69 15h8.622a.75.75 0 0 0 .722-.544L14.877 8h.623a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1.717L10.93 1.243a.5.5 0 1 0-.858.514L12.617 6H3.383L5.93 1.757zM4 10a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm3 0a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm4-1a1 1 0 0 1 1 1v2a1 1 0 1 1-2 0v-2a1 1 0 0 1 1-1z\"/>
\t\t\t\t</svg>
\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_index");
        echo "\">
\t\t\t\t\tPanier
\t\t\t\t\t<span class=\"sr-only\">
\t\t\t\t\t\t(current)
\t\t\t\t\t</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item active\">
\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_partenaire");
        echo "\">
\t\t\t\t\tDevenir partenaire
\t\t\t\t\t<span class=\"sr-only\">
\t\t\t\t\t\t(current)
\t\t\t\t\t</span>
\t\t\t\t</a>
\t\t\t</li>


\t\t\t";
        // line 41
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41)) {
            // line 42
            echo "\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">
\t\t\t\t\t\tSe connecter
\t\t\t\t\t\t<span class=\"sr-only\">
\t\t\t\t\t\t\t(current)
\t\t\t\t\t\t</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 51
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_new");
            echo "\">
\t\t\t\t\t\tCréer mon compte
\t\t\t\t\t\t<span class=\"sr-only\">
\t\t\t\t\t\t\t(current)
\t\t\t\t\t\t</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
        } else {
            // line 59
            echo "
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "user", [], "any", false, false, false, 61), "id", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\">
\t\t\t\t\t\tMon Compte
\t\t\t\t\t</a>
\t\t\t\t</li>

\t\t\t\t<li class=\"nav-item ml-auto\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_index", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67), "id", [], "any", false, false, false, 67)]), "html", null, true);
            echo "\">
\t\t\t\t\t\tMes commandes
\t\t\t\t\t</a>
\t\t\t\t</li>

\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 73
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">
\t\t\t\t\t\tSe déconnecter
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
        }
        // line 78
        echo "\t\t</ul>
\t\t<ul class=\"navbar-nav mr-left\">

\t\t\t";
        // line 81
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PRO")) {
            // line 82
            echo "\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 83
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commerce_index");
            echo "\">
\t\t\t\t\t\tGérer mes commerces
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 88
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_index");
            echo "\">
\t\t\t\t\t\tGérer mes produits
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item ml-auto\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 93, $this->source); })()), "user", [], "any", false, false, false, 93), "id", [], "any", false, false, false, 93)]), "html", null, true);
            echo "\">
\t\t\t\t\t\tTableau de bord
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
        }
        // line 98
        echo "\t\t</ul>
\t</div>
</nav>
";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 101, $this->source); })()), "flashes", [], "any", false, false, false, 101));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 102
            echo "\t<div class=\"container\">
\t\t<div class=\"alert-";
            // line 103
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "\">
\t\t\t";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 105
                echo "\t\t\t\t<p>
\t\t\t\t\t";
                // line 106
                echo $context["message"];
                echo "
\t\t\t\t</p>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "\t\t</div>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "shared/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 109,  208 => 106,  205 => 105,  201 => 104,  197 => 103,  194 => 102,  190 => 101,  185 => 98,  177 => 93,  169 => 88,  161 => 83,  158 => 82,  156 => 81,  151 => 78,  143 => 73,  134 => 67,  125 => 61,  121 => 59,  110 => 51,  99 => 43,  96 => 42,  94 => 41,  82 => 32,  71 => 24,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar fixed-top navbar-expand-lg navbar-dark bg-dark\">
\t<a class=\"navbar-brand\" href=\"#\">
\t\tFaj Xiif
\t</a>
\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t<span class=\"navbar-toggler-icon\"></span>
\t</button>

\t<div class=\"collapse navbar-collapse\" id=\"navbarColor02\">

\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t<li class=\"nav-item active\">
\t\t\t\t<a class=\"nav-link\" href=\"{{path('home')}}\">
\t\t\t\t\tAccueil
\t\t\t\t\t<span class=\"sr-only\">
\t\t\t\t\t\t(current)
\t\t\t\t\t</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item active\">
\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-basket2-fill\" viewbox=\"0 0 16 16\">
\t\t\t\t\t<path d=\"M5.929 1.757a.5.5 0 1 0-.858-.514L2.217 6H.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h.623l1.844 6.456A.75.75 0 0 0 3.69 15h8.622a.75.75 0 0 0 .722-.544L14.877 8h.623a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1.717L10.93 1.243a.5.5 0 1 0-.858.514L12.617 6H3.383L5.93 1.757zM4 10a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm3 0a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm4-1a1 1 0 0 1 1 1v2a1 1 0 1 1-2 0v-2a1 1 0 0 1 1-1z\"/>
\t\t\t\t</svg>
\t\t\t\t<a class=\"nav-link\" href=\"{{path('panier_index')}}\">
\t\t\t\t\tPanier
\t\t\t\t\t<span class=\"sr-only\">
\t\t\t\t\t\t(current)
\t\t\t\t\t</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item active\">
\t\t\t\t<a class=\"nav-link\" href=\"{{path('user_partenaire')}}\">
\t\t\t\t\tDevenir partenaire
\t\t\t\t\t<span class=\"sr-only\">
\t\t\t\t\t\t(current)
\t\t\t\t\t</span>
\t\t\t\t</a>
\t\t\t</li>


\t\t\t{% if not app.user %}
\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_login')}}\">
\t\t\t\t\t\tSe connecter
\t\t\t\t\t\t<span class=\"sr-only\">
\t\t\t\t\t\t\t(current)
\t\t\t\t\t\t</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('user_new')}}\">
\t\t\t\t\t\tCréer mon compte
\t\t\t\t\t\t<span class=\"sr-only\">
\t\t\t\t\t\t\t(current)
\t\t\t\t\t\t</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t{% else %}

\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('user_show', {'id':app.user.id})}}\">
\t\t\t\t\t\tMon Compte
\t\t\t\t\t</a>
\t\t\t\t</li>

\t\t\t\t<li class=\"nav-item ml-auto\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('commande_index', {'id':app.user.id})}}\">
\t\t\t\t\t\tMes commandes
\t\t\t\t\t</a>
\t\t\t\t</li>

\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('app_logout')}}\">
\t\t\t\t\t\tSe déconnecter
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t{% endif %}
\t\t</ul>
\t\t<ul class=\"navbar-nav mr-left\">

\t\t\t{%  if is_granted('ROLE_PRO')  %}
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('commerce_index') }}\">
\t\t\t\t\t\tGérer mes commerces
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('produit_index') }}\">
\t\t\t\t\t\tGérer mes produits
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item ml-auto\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('user_show', {'id':app.user.id})}}\">
\t\t\t\t\t\tTableau de bord
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t{% endif %}
\t\t</ul>
\t</div>
</nav>
{% for label, messages in app.flashes %}
\t<div class=\"container\">
\t\t<div class=\"alert-{{ label }}\">
\t\t\t{% for message in messages %}
\t\t\t\t<p>
\t\t\t\t\t{{ message|raw }}
\t\t\t\t</p>
\t\t\t{% endfor %}
\t\t</div>
\t</div>
{% endfor %}
", "shared/header.html.twig", "/Users/ndongmoussa/Desktop/localhost/symfony/faj_xiif/dev/templates/shared/header.html.twig");
    }
}
