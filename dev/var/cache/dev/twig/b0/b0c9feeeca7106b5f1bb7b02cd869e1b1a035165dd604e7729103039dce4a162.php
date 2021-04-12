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

/* home/index.html.twig */
class __TwigTemplate_a279bd57b97be1cb37ebed2121a13162264215adb626301d2561ae6d530d6409 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        // line 4
        echo "\tFaj xiif
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "

\t<div class=\"container\">
\t\t<div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commerces"]) || array_key_exists("commerces", $context) ? $context["commerces"] : (function () { throw new RuntimeError('Variable "commerces" does not exist.', 13, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["images"]) {
            // line 14
            echo "\t\t\t\t\t<li data-target=\"#carouselExampleIndicators\" data-slide-to=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 14), "html", null, true);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 14)) {
                echo " class=\"active\" ";
            }
            echo "></li>
\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['images'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t\t\t</ol>

\t\t\t<div class=\"carousel-inner\">
\t\t\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commerces"]) || array_key_exists("commerces", $context) ? $context["commerces"] : (function () { throw new RuntimeError('Variable "commerces" does not exist.', 19, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 20
            echo "\t\t\t\t\t<div class=\"carousel-item ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 20)) {
                echo "active";
            }
            echo "\">
\t\t\t\t\t\t<img src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["image"], "imageFile"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "imageName", [], "any", false, false, false, 21), "html", null, true);
            echo "\" height=\"400px\" width=\"300px\" class=\"d-block w-100\"/>
\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\"></div>
\t\t\t\t\t</div>
\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t\t\t</div>

\t\t\t<a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t<span class=\"sr-only\">
\t\t\t\t\tPrevious
\t\t\t\t</span>
\t\t\t</a>
\t\t\t<a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t<span class=\"sr-only\">
\t\t\t\t\tNext
\t\t\t\t</span>
\t\t\t</a>
\t\t</div>


\t\t";
        // line 42
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42)) {
            // line 43
            echo "\t\t\t<h1>Bonjour";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43), "prenom", [], "any", false, false, false, 43), "html", null, true);
            echo "!</h1>
\t\t\t";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), "roles", [], "any", false, false, false, 44));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 45
                echo "\t\t\t\t";
                if ((0 === twig_compare($context["role"], "ROLE_USER"))) {
                    // line 46
                    echo "
\t\t\t\t\t<p>Content de vous revoir, nous vous avons préparé une panopli de produits rien que pour vous !
\t\t\t\t\t</p>

\t\t\t\t";
                } elseif ((0 === twig_compare(                // line 50
$context["role"], "ROLE_ADMIN"))) {
                    // line 51
                    echo "\t\t\t\t\t<p>
\t\t\t\t\t\tBienvenue monsieur le technicien, nous vous faisons confiance pour la maintenance du site !
\t\t\t\t\t</p>

\t\t\t\t";
                } else {
                    // line 56
                    echo "\t\t\t\t\t<p>
\t\t\t\t\t\tVos clients n'attendent que vous, à vous de jouer !
\t\t\t\t\t</p>
\t\t\t\t";
                }
                // line 60
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "\t\t";
        }
        // line 62
        echo "

\t\t<div class=\"row\">
\t\t\t";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commerces"]) || array_key_exists("commerces", $context) ? $context["commerces"] : (function () { throw new RuntimeError('Variable "commerces" does not exist.', 65, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["commerce"]) {
            // line 66
            echo "\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card w-75\">
\t\t\t\t\t\t<a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("affiche_commerce", ["id" => twig_get_attribute($this->env, $this->source, $context["commerce"], "id", [], "any", false, false, false, 68)]), "html", null, true);
            echo " \">
\t\t\t\t\t\t\t<div class=\"card-header text-center\">
\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["commerce"], "imageFile"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commerce"], "imageName", [], "any", false, false, false, 70), "html", null, true);
            echo "\" width=\"100%\" height=\"100%\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("affiche_commerce", ["id" => twig_get_attribute($this->env, $this->source, $context["commerce"], "id", [], "any", false, false, false, 75)]), "html", null, true);
            echo " \">
\t\t\t\t\t\t\t\t\t";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commerce"], "nom", [], "any", false, false, false, 76), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t";
            // line 80
            echo ((twig_get_attribute($this->env, $this->source, $context["commerce"], "disponibilite", [], "any", false, false, false, 80)) ? ("Ouvert") : ("Fermé"));
            echo "
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commerce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "\t\t</div>
\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 87,  286 => 80,  279 => 76,  275 => 75,  265 => 70,  260 => 68,  256 => 66,  252 => 65,  247 => 62,  244 => 61,  238 => 60,  232 => 56,  225 => 51,  223 => 50,  217 => 46,  214 => 45,  210 => 44,  205 => 43,  203 => 42,  184 => 25,  164 => 21,  157 => 20,  140 => 19,  135 => 16,  114 => 14,  97 => 13,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\tFaj xiif
{% endblock %}

{% block body %}


\t<div class=\"container\">
\t\t<div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t{% for images in commerces %}
\t\t\t\t\t<li data-target=\"#carouselExampleIndicators\" data-slide-to=\"{{loop.index0}}\" {% if loop.first %} class=\"active\" {% endif %}></li>
\t\t\t\t{% endfor %}
\t\t\t</ol>

\t\t\t<div class=\"carousel-inner\">
\t\t\t\t{% for image in commerces %}
\t\t\t\t\t<div class=\"carousel-item {% if loop.first %}active{% endif %}\">
\t\t\t\t\t\t<img src=\"{{ vich_uploader_asset(image, 'imageFile') }}\" alt=\"{{ image.imageName }}\" height=\"400px\" width=\"300px\" class=\"d-block w-100\"/>
\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\"></div>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>

\t\t\t<a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t<span class=\"sr-only\">
\t\t\t\t\tPrevious
\t\t\t\t</span>
\t\t\t</a>
\t\t\t<a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t<span class=\"sr-only\">
\t\t\t\t\tNext
\t\t\t\t</span>
\t\t\t</a>
\t\t</div>


\t\t{% if app.user %}
\t\t\t<h1>Bonjour{{ app.user.prenom }}!</h1>
\t\t\t{% for role in app. user.roles %}
\t\t\t\t{% if role == \"ROLE_USER\" %}

\t\t\t\t\t<p>Content de vous revoir, nous vous avons préparé une panopli de produits rien que pour vous !
\t\t\t\t\t</p>

\t\t\t\t{% elseif role == \"ROLE_ADMIN\" %}
\t\t\t\t\t<p>
\t\t\t\t\t\tBienvenue monsieur le technicien, nous vous faisons confiance pour la maintenance du site !
\t\t\t\t\t</p>

\t\t\t\t{% else %}
\t\t\t\t\t<p>
\t\t\t\t\t\tVos clients n'attendent que vous, à vous de jouer !
\t\t\t\t\t</p>
\t\t\t\t{% endif %}
\t\t\t{% endfor %}
\t\t{% endif %}


\t\t<div class=\"row\">
\t\t\t{%  for commerce in commerces  %}
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card w-75\">
\t\t\t\t\t\t<a href=\"{{ path('affiche_commerce', {'id': commerce.id}) }} \">
\t\t\t\t\t\t\t<div class=\"card-header text-center\">
\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"{{ vich_uploader_asset(commerce, 'imageFile') }}\" alt=\"{{ commerce.imageName }}\" width=\"100%\" height=\"100%\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('affiche_commerce', {'id': commerce.id}) }} \">
\t\t\t\t\t\t\t\t\t{{commerce.nom}}
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t{{ commerce.disponibilite ? 'Ouvert' : 'Fermé'}}
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t{% endfor %}
\t\t</div>
\t</div>

{% endblock %}
", "home/index.html.twig", "/Users/ndongmoussa/Desktop/localhost/symfony/faj_xiif/dev/templates/home/index.html.twig");
    }
}
