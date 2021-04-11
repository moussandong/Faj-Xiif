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
class __TwigTemplate_2f0ee27031fc93475daf4f05040dbdff9fa75386dbb429e2e67756e0e0149f17 extends Template
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
\t<style>
\t\t.responsive {
\t\t\twidth: 100%;
\t\t\theight: auto;
\t\t}
\t</style>


\t<div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t<ol class=\"carousel-indicators\">
\t\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 19, $this->source); })()), "images", [], "any", false, false, false, 19));
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
            echo "\t\t\t\t<li data-target=\"#carouselExampleIndicators\" data-slide-to=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 20), "html", null, true);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 20)) {
                echo " class=\"active\" ";
            }
            echo "></li>
\t\t\t";
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
        // line 22
        echo "\t\t</ol>

\t\t<div class=\"carousel-inner\">
\t\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 25, $this->source); })()), "images", [], "any", false, false, false, 25));
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
            // line 26
            echo "\t\t\t\t<div class=\"carousel-item ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 26)) {
                echo "active";
            }
            echo "\">
\t\t\t\t\t<img src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/upload/image/" . twig_get_attribute($this->env, $this->source, $context["image"], "url", [], "any", false, false, false, 27))), "html", null, true);
            echo "\" class=\"d-block\" alt=\"image de l'annonce ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 27, $this->source); })()), "title", [], "any", false, false, false, 27), "html", null, true);
            echo " \">
\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 30, $this->source); })()), "title", [], "any", false, false, false, 30), "html", null, true);
            echo "
\t\t\t\t\t\t</h5>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "caption", [], "any", false, false, false, 33), "html", null, true);
            echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
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
        // line 38
        echo "\t\t</div>

\t\t<a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t<span class=\"sr-only\">
\t\t\t\tPrevious
\t\t\t</span>
\t\t</a>
\t\t<a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t<span class=\"sr-only\">
\t\t\t\tNext
\t\t\t</span>
\t\t</a>
\t</div>
\t<hr>


\t";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commerces"]) || array_key_exists("commerces", $context) ? $context["commerces"] : (function () { throw new RuntimeError('Variable "commerces" does not exist.', 56, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["commerce"]) {
            // line 57
            echo "
\t\t<div class=\"carousel-item\">
\t\t\t<img class=\"img-fluid rounded\" src=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["commerce"], "imageFile"), "html", null, true);
            echo "\" class=\"d-block w-100\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commerce"], "imageName", [], "any", false, false, false, 59), "html", null, true);
            echo "\" width=\"250\"/>
\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t<h5>Third slide label</h5>
\t\t\t\t<p>Some representative placeholder content for the third slide.</p>
\t\t\t</div>
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commerce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "</div>

<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleDark\" data-bs-slide=\"prev\">
\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t<span class=\"visually-hidden\">Previous</span>
</button>
<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleDark\" data-bs-slide=\"next\">
\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t<span class=\"visually-hidden\">Next</span>
</button></div></div></body></html><div class=\"example-wrapper\">";
        // line 75
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "user", [], "any", false, false, false, 75)) {
            echo "<h1>Bonjour";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "user", [], "any", false, false, false, 75), "prenom", [], "any", false, false, false, 75), "html", null, true);
            echo "!</h1><p>";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "user", [], "any", false, false, false, 75), "roles", [], "any", false, false, false, 75));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 76
                if (($context["role"] == "ROLE_USER")) {
                    // line 77
                    echo "\tContent de vous revoir, nous vous avons préparé une panopli de produits rien que pour vous !
";
                } elseif ((                // line 78
$context["role"] == "ROLE_ADMIN")) {
                    // line 79
                    echo "\tBienvenue monsieur le technicien, nous vous faisons confiance pour la maintenance du site !
";
                } else {
                    // line 81
                    echo "\tVos clients n'attendent que vous, à vous de jouer !
";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "</p>";
        }
        echo "</div><div class=\"container\"><div class=\"row\">";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commerces"]) || array_key_exists("commerces", $context) ? $context["commerces"] : (function () { throw new RuntimeError('Variable "commerces" does not exist.', 82, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["commerce"]) {
            echo "<div class=\"col-4 mt-4\">
<div class=\"border border-dark rounded p-2 clearfix\">
\t<img class=\"img-fluid rounded\" src=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["commerce"], "imageFile"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commerce"], "imageName", [], "any", false, false, false, 84), "html", null, true);
            echo "\" width=\"250\"/>
\t<br>
\t<h3>
\t\t";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commerce"], "nom", [], "any", false, false, false, 87), "html", null, true);
            echo "
\t</h3>
\t";
            // line 89
            echo ((twig_get_attribute($this->env, $this->source, $context["commerce"], "disponibilite", [], "any", false, false, false, 89)) ? ("Ouvert") : ("Fermé"));
            echo "
\t<a href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("affiche_commerce", ["id" => twig_get_attribute($this->env, $this->source, $context["commerce"], "id", [], "any", false, false, false, 90)]), "html", null, true);
            echo " \" class=\"btn btn-success
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfloat-right\">
\t\tVisiter
\t</a>
</div></div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commerce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
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
        return array (  311 => 90,  307 => 89,  302 => 87,  294 => 84,  284 => 82,  276 => 81,  272 => 79,  270 => 78,  267 => 77,  265 => 76,  257 => 75,  246 => 66,  231 => 59,  227 => 57,  223 => 56,  203 => 38,  184 => 33,  178 => 30,  170 => 27,  163 => 26,  146 => 25,  141 => 22,  120 => 20,  103 => 19,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\tFaj xiif
{% endblock %}

{% block body %}

\t<style>
\t\t.responsive {
\t\t\twidth: 100%;
\t\t\theight: auto;
\t\t}
\t</style>


\t<div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t<ol class=\"carousel-indicators\">
\t\t\t{% for image in ad.images %}
\t\t\t\t<li data-target=\"#carouselExampleIndicators\" data-slide-to=\"{{loop.index0}}\" {% if loop.first %} class=\"active\" {% endif %}></li>
\t\t\t{% endfor %}
\t\t</ol>

\t\t<div class=\"carousel-inner\">
\t\t\t{% for image in ad.images %}
\t\t\t\t<div class=\"carousel-item {% if loop.first %}active{% endif %}\">
\t\t\t\t\t<img src=\"{{asset(\"/upload/image/\"~ image.url) }}\" class=\"d-block\" alt=\"image de l'annonce {{ ad.title }} \">
\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t{{ad.title}}
\t\t\t\t\t\t</h5>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t{{image.caption}}
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>

\t\t<a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t<span class=\"sr-only\">
\t\t\t\tPrevious
\t\t\t</span>
\t\t</a>
\t\t<a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t<span class=\"sr-only\">
\t\t\t\tNext
\t\t\t</span>
\t\t</a>
\t</div>
\t<hr>


\t{%  for commerce in commerces  %}

\t\t<div class=\"carousel-item\">
\t\t\t<img class=\"img-fluid rounded\" src=\"{{ vich_uploader_asset(commerce, 'imageFile') }}\" class=\"d-block w-100\" alt=\"{{ commerce.imageName }}\" width=\"250\"/>
\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t<h5>Third slide label</h5>
\t\t\t\t<p>Some representative placeholder content for the third slide.</p>
\t\t\t</div>
\t\t</div>
\t{% endfor %}
</div>

<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleDark\" data-bs-slide=\"prev\">
\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t<span class=\"visually-hidden\">Previous</span>
</button>
<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleDark\" data-bs-slide=\"next\">
\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t<span class=\"visually-hidden\">Next</span>
</button></div></div></body></html><div class=\"example-wrapper\">{% if app.user %}<h1>Bonjour{{ app.user.prenom }}!</h1><p>{% for role in app. user.roles %}
{% if role == \"ROLE_USER\" %}
\tContent de vous revoir, nous vous avons préparé une panopli de produits rien que pour vous !
{% elseif role == \"ROLE_ADMIN\" %}
\tBienvenue monsieur le technicien, nous vous faisons confiance pour la maintenance du site !
{% else %}
\tVos clients n'attendent que vous, à vous de jouer !
{% endif %}{% endfor %}</p>{% endif %}</div><div class=\"container\"><div class=\"row\">{%  for commerce in commerces  %}<div class=\"col-4 mt-4\">
<div class=\"border border-dark rounded p-2 clearfix\">
\t<img class=\"img-fluid rounded\" src=\"{{ vich_uploader_asset(commerce, 'imageFile') }}\" alt=\"{{ commerce.imageName }}\" width=\"250\"/>
\t<br>
\t<h3>
\t\t{{commerce.nom}}
\t</h3>
\t{{ commerce.disponibilite ? 'Ouvert' : 'Fermé'}}
\t<a href=\"{{ path('affiche_commerce', {'id': commerce.id}) }} \" class=\"btn btn-success
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfloat-right\">
\t\tVisiter
\t</a>
</div></div>{% endfor %}{% endblock %}
", "home/index.html.twig", "/Users/ndongmoussa/Desktop/localhost/symfony/faj_xiif/dev/templates/home/index.html.twig");
    }
}
