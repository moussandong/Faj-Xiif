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

/* shared/footer.html.twig */
class __TwigTemplate_1fb305c6f253cfc93baa8bb95b0619225ca93df7bcb4925e0414778040ba2bfa extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/footer.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "
\t<style>
\t\t.responsive {
\t\t\twidth: 100%;
\t\t\theight: auto;
\t\t}
\t</style>

<footer class=\"bg-dark text-center fixed text-white\"  \"jumbotron\">
  <!-- Grid container -->
  <div>
    <!-- Section: Social media -->
    <section class=\"mb-4\">
      <!-- Facebook -->
      <a class=\"btn btn-outline-light btn-floating m-1\" href=\"#!\" role=\"button\"
        ><i class=\"fab fa-facebook-f\"></i
      ></a>

      <!-- Twitter -->
      <a class=\"btn btn-outline-light btn-floating m-1\" href=\"#!\" role=\"button\"
        ><i class=\"fab fa-twitter\"></i
      ></a>

      <!-- Google -->
      <a class=\"btn btn-outline-light btn-floating m-1\" href=\"#!\" role=\"button\"
        ><i class=\"fab fa-google\"></i
      ></a>

      <a class=\"btn btn-outline-light btn-floating m-1\" href=\"#!\" role=\"button\"
        ><i class=\"fab fa-instagram\"></i
      ></a>

      <a class=\"btn btn-outline-light btn-floating m-1\" href=\"#!\" role=\"button\"
        ><i class=\"fab fa-linkedin-in\"></i
      ></a>

      <a class=\"btn btn-outline-light btn-floating m-1\" href=\"#!\" role=\"button\"
        ><i class=\"fab fa-github\"></i
      ></a>
    </section>
 
    <section class=\"\">
      <form action=\"\">
        <div class=\"row d-flex justify-content-center\">
          <div class=\"col-auto\">
            <p class=\"pt-2\">
              <strong>Inscrivez-vous pour notre newsletter</strong>
            </p>
          </div>
       
          <div class=\"col-md-5 col-12\">
            <div class=\"form-outline form-white mb-4\">
              <input type=\"email\" id=\"form5Example2\" class=\"form-control\" />
              <label class=\"form-label\" for=\"form5Example2\">Email address</label>
            </div>
          </div>
        
          <div class=\"col-auto\">
            <!-- Submit button -->
            <button type=\"submit\" class=\"btn btn-outline-light mb-4\">
              S'inscrire
            </button>
          </div>
        </div>
      </form>
    </section>

    <section class=\"mb-3\">
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
        repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
        eum harum corrupti dicta, aliquam sequi voluptate quas.
      </p>
    </section>
    <!-- Section: Text -->

    <!-- Section: Links -->
    <section class=\"\">
      <!--Grid row-->
      <div class=\"row\">
        
        <div class=\"col-lg-3 col-md-6 mb-4 mb-md-0\">
          <h5 class=\"text-uppercase\">Faj Xiif</h5>

          <ul class=\"list-unstyled mb-0\">
            <li>
              <a href=\"#!\" class=\"text-white\">A propos</a>
            </li>
            <li>
              <a href=\"#!\" class=\"text-white\">Nous rejoindre</a>
            </li>
            <li>
              <a href=\"#!\" class=\"text-white\">Devenir partenaire</a>
            </li>
            <li>
              <a href=\"#!\" class=\"text-white\">Investisseurs</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class=\"col-lg-3 col-md-6 mb-4 mb-md-0\">
          <h5 class=\"text-uppercase\">Aide</h5>

          <ul class=\"list-unstyled mb-0\">
            <li>
              <a href=\"#!\" class=\"text-white\">Nous contacter</a>
            </li>
            <li>
              <a href=\"#!\" class=\"text-white\">FAQ</a>
            </li>
            <li>
              <a href=\"#!\" class=\"text-white\">Plan du site</a>
            </li>
            <li>
              <a href=\"#!\" class=\"text-white\">Télécharger notre application</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class=\"col-lg-3 col-md-6 mb-4 mb-md-0\">
          <h5 class=\"text-uppercase\">Mentions légales</h5>

          <ul class=\"list-unstyled mb-0\">
            <li>
              <a href=\"#!\" class=\"text-white\">Confidentialité</a>
            </li>
            <li>
              <a href=\"#!\" class=\"text-white\">Cockies</a>
            </li>
            <li>
              <a href=\"#!\" class=\"text-white\">CGU</a>
            </li>
            <li>
              <a href=\"#!\" class=\"text-white\">Mentions légales</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class=\"text-center p-3\" style=\"background-color: rgba(0, 0, 0, 0.2);\">
    © 2020 Copyright:
    <a class=\"text-white\" href=\"https://mdbootstrap.com/\">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>

\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "shared/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}

\t<style>
\t\t.responsive {
\t\t\twidth: 100%;
\t\t\theight: auto;
\t\t}
\t</style>

<footer class=\"bg-dark text-center fixed text-white\"  \"jumbotron\">
  <!-- Grid container -->
  <div>
    <!-- Section: Social media -->
    <section class=\"mb-4\">
      <!-- Facebook -->
      <a class=\"btn btn-outline-light btn-floating m-1\" href=\"#!\" role=\"button\"
        ><i class=\"fab fa-facebook-f\"></i
      ></a>

      <!-- Twitter -->
      <a class=\"btn btn-outline-light btn-floating m-1\" href=\"#!\" role=\"button\"
        ><i class=\"fab fa-twitter\"></i
      ></a>

      <!-- Google -->
      <a class=\"btn btn-outline-light btn-floating m-1\" href=\"#!\" role=\"button\"
        ><i class=\"fab fa-google\"></i
      ></a>

      <a class=\"btn btn-outline-light btn-floating m-1\" href=\"#!\" role=\"button\"
        ><i class=\"fab fa-instagram\"></i
      ></a>

      <a class=\"btn btn-outline-light btn-floating m-1\" href=\"#!\" role=\"button\"
        ><i class=\"fab fa-linkedin-in\"></i
      ></a>

      <a class=\"btn btn-outline-light btn-floating m-1\" href=\"#!\" role=\"button\"
        ><i class=\"fab fa-github\"></i
      ></a>
    </section>
 
    <section class=\"\">
      <form action=\"\">
        <div class=\"row d-flex justify-content-center\">
          <div class=\"col-auto\">
            <p class=\"pt-2\">
              <strong>Inscrivez-vous pour notre newsletter</strong>
            </p>
          </div>
       
          <div class=\"col-md-5 col-12\">
            <div class=\"form-outline form-white mb-4\">
              <input type=\"email\" id=\"form5Example2\" class=\"form-control\" />
              <label class=\"form-label\" for=\"form5Example2\">Email address</label>
            </div>
          </div>
        
          <div class=\"col-auto\">
            <!-- Submit button -->
            <button type=\"submit\" class=\"btn btn-outline-light mb-4\">
              S'inscrire
            </button>
          </div>
        </div>
      </form>
    </section>

    <section class=\"mb-3\">
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
        repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
        eum harum corrupti dicta, aliquam sequi voluptate quas.
      </p>
    </section>
    <!-- Section: Text -->

    <!-- Section: Links -->
    <section class=\"\">
      <!--Grid row-->
      <div class=\"row\">
        
        <div class=\"col-lg-3 col-md-6 mb-4 mb-md-0\">
          <h5 class=\"text-uppercase\">Faj Xiif</h5>

          <ul class=\"list-unstyled mb-0\">
            <li>
              <a href=\"#!\" class=\"text-white\">A propos</a>
            </li>
            <li>
              <a href=\"#!\" class=\"text-white\">Nous rejoindre</a>
            </li>
            <li>
              <a href=\"#!\" class=\"text-white\">Devenir partenaire</a>
            </li>
            <li>
              <a href=\"#!\" class=\"text-white\">Investisseurs</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class=\"col-lg-3 col-md-6 mb-4 mb-md-0\">
          <h5 class=\"text-uppercase\">Aide</h5>

          <ul class=\"list-unstyled mb-0\">
            <li>
              <a href=\"#!\" class=\"text-white\">Nous contacter</a>
            </li>
            <li>
              <a href=\"#!\" class=\"text-white\">FAQ</a>
            </li>
            <li>
              <a href=\"#!\" class=\"text-white\">Plan du site</a>
            </li>
            <li>
              <a href=\"#!\" class=\"text-white\">Télécharger notre application</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class=\"col-lg-3 col-md-6 mb-4 mb-md-0\">
          <h5 class=\"text-uppercase\">Mentions légales</h5>

          <ul class=\"list-unstyled mb-0\">
            <li>
              <a href=\"#!\" class=\"text-white\">Confidentialité</a>
            </li>
            <li>
              <a href=\"#!\" class=\"text-white\">Cockies</a>
            </li>
            <li>
              <a href=\"#!\" class=\"text-white\">CGU</a>
            </li>
            <li>
              <a href=\"#!\" class=\"text-white\">Mentions légales</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class=\"text-center p-3\" style=\"background-color: rgba(0, 0, 0, 0.2);\">
    © 2020 Copyright:
    <a class=\"text-white\" href=\"https://mdbootstrap.com/\">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>

\t\t{% endblock %}
", "shared/footer.html.twig", "/Users/ndongmoussa/Desktop/localhost/symfony/faj_xiif/dev/templates/shared/footer.html.twig");
    }
}
