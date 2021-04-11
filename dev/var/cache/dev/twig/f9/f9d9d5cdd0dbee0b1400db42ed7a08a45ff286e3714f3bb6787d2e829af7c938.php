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

/* commerce/index.html.twig */
class __TwigTemplate_7935365f9c1457b74e67b0e326627554d672f5b956b9162767c449eb51731b3b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commerce/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commerce/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "commerce/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des commerces
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PRO")) {
            // line 8
            echo "
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["commerces"]) || array_key_exists("commerces", $context) ? $context["commerces"] : (function () { throw new RuntimeError('Variable "commerces" does not exist.', 11, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["commerce"]) {
                // line 12
                echo "\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<img src=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["commerce"], "imageFile"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commerce"], "imageName", [], "any", false, false, false, 14), "html", null, true);
                echo "\" width=\"250\"/>
\t\t\t\t\t\t\t<br><em class=\"text-muted text-primary text-ilatic\">
\t\t\t\t\t\t\t\t";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commerce"], "nom", [], "any", false, false, false, 16), "html", null, true);
                echo "</em>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<br>Adresse:
\t\t\t\t\t\t\t\t";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commerce"], "adresse", [], "any", false, false, false, 19), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t|
\t\t\t\t\t\t\t\t";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commerce"], "ville", [], "any", false, false, false, 21), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t|
\t\t\t\t\t\t\t\t<br>Téléphone:
\t\t\t\t\t\t\t\t";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commerce"], "telephone", [], "any", false, false, false, 24), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t<br>disponibilite :
\t\t\t\t\t\t\t\t";
                // line 26
                echo ((twig_get_attribute($this->env, $this->source, $context["commerce"], "disponibilite", [], "any", false, false, false, 26)) ? ("Yes") : ("No"));
                echo "
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commerce_show", ["id" => twig_get_attribute($this->env, $this->source, $context["commerce"], "id", [], "any", false, false, false, 28)]), "html", null, true);
                echo "\">Afficher</a>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commerce_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["commerce"], "id", [], "any", false, false, false, 30)]), "html", null, true);
                echo "\">Modifier</a>

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commerce'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "\t\t\t\t<div>
\t\t\t\t\t<a class=\"btn btm-primary\" href=\"";
            // line 37
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commerce_new");
            echo "\" role=\"button\">Ajouter un commerce</a>
\t\t\t\t</div>
\t\t\t";
        } else {
            // line 40
            echo "\t\t\t\t<div>
\t\t\t\t\t<h1>Cette page est pour les professionnelles
\t\t\t\t\t</h1>
\t\t\t\t</div>

\t\t\t";
        }
        // line 46
        echo "
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "commerce/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 46,  165 => 40,  159 => 37,  156 => 36,  144 => 30,  139 => 28,  134 => 26,  129 => 24,  123 => 21,  118 => 19,  112 => 16,  105 => 14,  101 => 12,  97 => 11,  92 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des commerces
{% endblock %}

{% block body %}
\t{% if is_granted('ROLE_PRO') %}

\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t{%  for commerce in commerces  %}
\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<img src=\"{{ vich_uploader_asset(commerce, 'imageFile') }}\" alt=\"{{ commerce.imageName }}\" width=\"250\"/>
\t\t\t\t\t\t\t<br><em class=\"text-muted text-primary text-ilatic\">
\t\t\t\t\t\t\t\t{{commerce.nom}}</em>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<br>Adresse:
\t\t\t\t\t\t\t\t{{commerce.adresse}}
\t\t\t\t\t\t\t\t|
\t\t\t\t\t\t\t\t{{commerce.ville}}
\t\t\t\t\t\t\t\t|
\t\t\t\t\t\t\t\t<br>Téléphone:
\t\t\t\t\t\t\t\t{{commerce.telephone}}
\t\t\t\t\t\t\t\t<br>disponibilite :
\t\t\t\t\t\t\t\t{{ commerce.disponibilite ? 'Yes' : 'No'}}
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<a href=\"{{ path('commerce_show', {'id': commerce.id}) }}\">Afficher</a>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<a href=\"{{ path('commerce_edit', {'id': commerce.id}) }}\">Modifier</a>

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t\t<div>
\t\t\t\t\t<a class=\"btn btm-primary\" href=\"{{ path('commerce_new') }}\" role=\"button\">Ajouter un commerce</a>
\t\t\t\t</div>
\t\t\t{% else %}
\t\t\t\t<div>
\t\t\t\t\t<h1>Cette page est pour les professionnelles
\t\t\t\t\t</h1>
\t\t\t\t</div>

\t\t\t{% endif %}

\t\t{% endblock %}
", "commerce/index.html.twig", "/Users/ndongmoussa/Desktop/localhost/symfony/faj_xiif/dev/templates/commerce/index.html.twig");
    }
}
