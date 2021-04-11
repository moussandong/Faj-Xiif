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

/* shared/table.html.twig */
class __TwigTemplate_df137a56af2ed8c1b593d200a6c518f3ca28a53c15934ac4b2cc1d10e7504ce8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/table.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/table.html.twig"));

        // line 1
        echo "<table class=\"table table-bordered\">
\t<thead class=\"thead-dark\">
\t\t<tr
\t\t\tclass=\"table\">
\t\t\t";
        // line 6
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new RuntimeError('Variable "titles" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 7
            echo "\t\t\t\t<th>
\t\t\t\t\t";
            // line 8
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "
\t\t\t\t</th>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
        // line 15
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 16
            echo "\t\t\t<tr class=\"table\">
\t\t\t\t";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new RuntimeError('Variable "titles" does not exist.', 17, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["attr"]) {
                // line 18
                echo "\t\t\t\t\t<td>
\t\t\t\t\t\t";
                // line 20
                echo "\t\t\t\t\t\t";
                if ((0 === twig_compare($context["attr"], "action"))) {
                    // line 21
                    echo "\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 21, $this->source); })()), ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 21)]), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\tshow
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    // line 24
                    if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_VOLONTEER")) {
                        // line 25
                        echo "\t\t\t\t\t\t\t\t<a class=\"btn btn-success\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["edit"]) || array_key_exists("edit", $context) ? $context["edit"] : (function () { throw new RuntimeError('Variable "edit" does not exist.', 25, $this->source); })()), ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 25)]), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\tedit
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    }
                    // line 29
                    echo "\t\t\t\t\t\t";
                } elseif ((0 === twig_compare($context["attr"], "user"))) {
                    // line 30
                    echo "\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 30, $this->source); })()), ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 30)]), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 32
                    echo "\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
                } elseif ((0 === twig_compare(                // line 33
$context["attr"], "special"))) {
                    // line 34
                    echo "\t\t\t\t\t\t\t";
                    echo ((twig_get_attribute($this->env, $this->source, $context["item"], $context["attr"], [], "any", false, false, false, 34)) ? ("Oui") : ("Non"));
                    echo "
\t\t\t\t\t\t";
                } elseif ((0 === twig_compare(                // line 35
$context["attr"], "status"))) {
                    // line 36
                    echo "\t\t\t\t\t\t\t";
                    echo ((twig_get_attribute($this->env, $this->source, $context["item"], $context["attr"], [], "any", false, false, false, 36)) ? ("Oui") : ("Non"));
                    echo "
\t\t\t\t\t\t";
                } elseif ((0 === twig_compare(                // line 37
$context["attr"], "createdAt"))) {
                    // line 38
                    echo "\t\t\t\t\t\t\t";
                    ((twig_get_attribute($this->env, $this->source, $context["item"], $context["attr"], [], "any", false, false, false, 38)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], $context["attr"], [], "any", false, false, false, 38), "d-m-Y"), "html", null, true))) : (print ("")));
                    echo "
\t\t\t\t\t\t";
                } elseif ((0 === twig_compare(                // line 39
$context["attr"], "udatedAt"))) {
                    // line 40
                    echo "\t\t\t\t\t\t\t";
                    ((twig_get_attribute($this->env, $this->source, $context["item"], $context["attr"], [], "any", false, false, false, 40)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], $context["attr"], [], "any", false, false, false, 40), "d-m-Y"), "html", null, true))) : (print ("")));
                    echo "
\t\t\t\t\t\t";
                } elseif ((0 === twig_compare(                // line 41
$context["attr"], "availability"))) {
                    // line 42
                    echo "\t\t\t\t\t\t\t";
                    echo ((twig_get_attribute($this->env, $this->source, $context["item"], $context["attr"], [], "any", false, false, false, 42)) ? ("Oui") : ("Non"));
                    echo "
\t\t\t\t\t\t";
                } else {
                    // line 44
                    echo "\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], $context["attr"], [], "any", false, false, false, 44), "html", null, true);
                    echo "
\t\t\t\t\t\t";
                }
                // line 46
                echo "
\t\t\t\t\t</td>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attr'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "\t</tbody>
</table>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "shared/table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 51,  167 => 49,  159 => 46,  153 => 44,  147 => 42,  145 => 41,  140 => 40,  138 => 39,  133 => 38,  131 => 37,  126 => 36,  124 => 35,  119 => 34,  117 => 33,  114 => 32,  109 => 30,  106 => 29,  98 => 25,  96 => 24,  89 => 21,  86 => 20,  83 => 18,  79 => 17,  76 => 16,  71 => 15,  66 => 11,  57 => 8,  54 => 7,  49 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table class=\"table table-bordered\">
\t<thead class=\"thead-dark\">
\t\t<tr
\t\t\tclass=\"table\">
\t\t\t{# title = tous les attribus de l'objet #}
\t\t\t{% for item in titles %}
\t\t\t\t<th>
\t\t\t\t\t{{ item }}
\t\t\t\t</th>
\t\t\t{% endfor %}
\t\t</tr>
\t</thead>
\t<tbody>
\t\t{# items = le nom de la class #}
\t\t{% for item in items %}
\t\t\t<tr class=\"table\">
\t\t\t\t{% for attr in titles %}
\t\t\t\t\t<td>
\t\t\t\t\t\t{# Permet d'accéder à l'attribut d'un obj dynamiquement #}
\t\t\t\t\t\t{% if attr == \"action\" %}
\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"{{ path(detail, {'id': attribute(item, \"id\")}) }}\">
\t\t\t\t\t\t\t\tshow
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% if is_granted('ROLE_VOLONTEER') %}
\t\t\t\t\t\t\t\t<a class=\"btn btn-success\" href=\"{{ path(edit, {'id': attribute(item, \"id\")}) }}\">
\t\t\t\t\t\t\t\t\tedit
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% elseif attr == \"user\" %}
\t\t\t\t\t\t\t<a href=\"{{ path(user, {'id': attribute(item, \"id\")}) }}\">
\t\t\t\t\t\t\t\t{# {{attribute(item, attr,\"firsname\")}} #}
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t{% elseif attr == \"special\" %}
\t\t\t\t\t\t\t{{ attribute(item, attr) ? 'Oui' : 'Non' }}
\t\t\t\t\t\t{% elseif attr == \"status\" %}
\t\t\t\t\t\t\t{{ attribute(item, attr) ? 'Oui' : 'Non' }}
\t\t\t\t\t\t{% elseif attr == \"createdAt\" %}
\t\t\t\t\t\t\t{{ attribute(item, attr) ? attribute(item, attr)|date('d-m-Y') : '' }}
\t\t\t\t\t\t{% elseif attr == \"udatedAt\" %}
\t\t\t\t\t\t\t{{ attribute(item, attr) ? attribute(item, attr)|date('d-m-Y') : '' }}
\t\t\t\t\t\t{% elseif attr == \"availability\" %}
\t\t\t\t\t\t\t{{ attribute(item, attr) ? 'Oui' : 'Non' }}
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t{{ attribute(item, attr) }}
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t</td>
\t\t\t\t{% endfor %}
\t\t\t</tr>
\t\t{% endfor %}
\t</tbody>
</table>
", "shared/table.html.twig", "/Users/ndongmoussa/Desktop/localhost/symfony/faj_xiif/dev/templates/shared/table.html.twig");
    }
}
