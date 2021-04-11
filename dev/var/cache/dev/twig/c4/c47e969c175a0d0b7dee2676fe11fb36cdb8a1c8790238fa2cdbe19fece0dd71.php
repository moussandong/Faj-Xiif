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

/* shared/#footer.html copy.twig */
class __TwigTemplate_f6a42393fc069ff185ffae5896ab6cd0b5ab8c365ae02d6d1a7071a68749e5bd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/#footer.html copy.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/#footer.html copy.twig"));

        // line 1
        echo "<!-- Footer -->
<footer
\tclass=\"page-footer fixed-top font-small blue mt-5 pt-2\">

\t<!-- Footer Links -->
\t<div
\t\tclass=\"container-fluid text-center text-md-left\">

\t\t<!-- Grid row -->
\t\t<div
\t\t\tclass=\"row\">

\t\t\t<!-- Grid column -->
\t\t\t<div
\t\t\t\tclass=\"col-md-6 mt-md-0 mt-3\">

\t\t\t\t<!-- Content -->
\t\t\t\t<h5 class=\"text-uppercase\">Faj Xiif</h5>
\t\t\t\t<p>24-26 bd Chastenet de Géry
\t\t\t\t\t\t\t\t\t\t94814 Villejuif Cedex</p>
\t\t\t\t<p>
\t\t\t\t\tTél : 01 46 78 01 00</p>
\t\t\t\t<p>Fax : 01 46 78 50 35</p>
\t\t\t\t<p>paulguinot@guinot.asso.fr</p>

\t\t\t</div>

\t\t\t<hr
\t\t\tclass=\"clearfix w-100 d-md-none pb-3\">

\t\t\t<!-- Grid column -->
\t\t\t<div
\t\t\t\tclass=\"col-md-3 mb-md-0 mb-3\">

\t\t\t\t<!-- Links -->

\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"https://fajxiif.moussandong.com\">à propos de Faj Xiif</a>
\t\t\t\t\t</li>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"https://fajxiif.moussandong.com\">Devenir coursier de Faj Xiif</a>
\t\t\t\t</li>

\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">Conditions générales d'utilisation du service</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">Mentions légales</a>
\t\t\t\t</li>
\t\t\t</ul>


\t\t</div>

\t\t<div class=\"col-md-3 mb-md-0 mb-3\">

\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">Nous contacter</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">Politique de confidentialité</a>
\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">Tarifs</a>
\t\t\t\t</li>

\t\t\t</ul>
\t\t</div>


\t</div>
\t<!-- Footer Links -->

\t<!-- Copyright -->
\t<div class=\"footer-copyright text-center py-3\">© MoussaSolutionTech 2021

\t</div>
\t<!-- Copyright -->

</footer>
<!-- Footer -->
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "shared/#footer.html copy.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Footer -->
<footer
\tclass=\"page-footer fixed-top font-small blue mt-5 pt-2\">

\t<!-- Footer Links -->
\t<div
\t\tclass=\"container-fluid text-center text-md-left\">

\t\t<!-- Grid row -->
\t\t<div
\t\t\tclass=\"row\">

\t\t\t<!-- Grid column -->
\t\t\t<div
\t\t\t\tclass=\"col-md-6 mt-md-0 mt-3\">

\t\t\t\t<!-- Content -->
\t\t\t\t<h5 class=\"text-uppercase\">Faj Xiif</h5>
\t\t\t\t<p>24-26 bd Chastenet de Géry
\t\t\t\t\t\t\t\t\t\t94814 Villejuif Cedex</p>
\t\t\t\t<p>
\t\t\t\t\tTél : 01 46 78 01 00</p>
\t\t\t\t<p>Fax : 01 46 78 50 35</p>
\t\t\t\t<p>paulguinot@guinot.asso.fr</p>

\t\t\t</div>

\t\t\t<hr
\t\t\tclass=\"clearfix w-100 d-md-none pb-3\">

\t\t\t<!-- Grid column -->
\t\t\t<div
\t\t\t\tclass=\"col-md-3 mb-md-0 mb-3\">

\t\t\t\t<!-- Links -->

\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"https://fajxiif.moussandong.com\">à propos de Faj Xiif</a>
\t\t\t\t\t</li>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"https://fajxiif.moussandong.com\">Devenir coursier de Faj Xiif</a>
\t\t\t\t</li>

\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">Conditions générales d'utilisation du service</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">Mentions légales</a>
\t\t\t\t</li>
\t\t\t</ul>


\t\t</div>

\t\t<div class=\"col-md-3 mb-md-0 mb-3\">

\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">Nous contacter</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">Politique de confidentialité</a>
\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">Tarifs</a>
\t\t\t\t</li>

\t\t\t</ul>
\t\t</div>


\t</div>
\t<!-- Footer Links -->

\t<!-- Copyright -->
\t<div class=\"footer-copyright text-center py-3\">© MoussaSolutionTech 2021

\t</div>
\t<!-- Copyright -->

</footer>
<!-- Footer -->
", "shared/#footer.html copy.twig", "/Users/ndongmoussa/Desktop/localhost/symfony/faj_xiif/dev/templates/shared/#footer.html copy.twig");
    }
}
