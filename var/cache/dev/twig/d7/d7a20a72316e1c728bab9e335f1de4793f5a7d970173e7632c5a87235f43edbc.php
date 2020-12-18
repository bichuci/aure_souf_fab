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

/* orm/listBrasseries.html.twig */
class __TwigTemplate_5e6dd6f950be6db92119288d0705e1b4d7295a2ec6099911507bf2affd03f3dc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "orm/listBrasseries.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "orm/listBrasseries.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "orm/listBrasseries.html.twig", 1);
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

        echo "Hello ORMController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

<div class=\"container col-10\">
    <h2 class=\"mt-2\">La liste des brasseries</h2>
    <div class=\"btn-group d-flex justify-content-end\">
        ";
        // line 11
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_BRASSEUR")) {
            // line 12
            echo "            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("form_brasserie");
            echo "\" class=\"btn btn-info \">Ajouter une brasserie</a>
        ";
        }
        // line 14
        echo "        <button class=\"btn btn-outline-info\">Voir mes favoris</button>
    </div>

    <table class=\"mt-2 table table-dark table-striped\" style=\"height:500px; overlow:auto; overflow-y:hidden;\">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Descripion</th>
                <th>Site Web</th>
                <th>Telephone</th>
                <th>Email</th>
                <th>Adresse</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["brasseries"]) || array_key_exists("brasseries", $context) ? $context["brasseries"] : (function () { throw new RuntimeError('Variable "brasseries" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["brasserie"]) {
            // line 32
            echo "                <tr>
                    <td>";
            // line 33
            (((twig_get_attribute($this->env, $this->source, $context["brasserie"], "id", [], "any", true, true, false, 33) &&  !(null === twig_get_attribute($this->env, $this->source, $context["brasserie"], "id", [], "any", false, false, false, 33)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["brasserie"], "id", [], "any", false, false, false, 33), "html", null, true))) : (print ("Non renseigné")));
            echo "</td>
                    <td>";
            // line 34
            (((twig_get_attribute($this->env, $this->source, $context["brasserie"], "nom", [], "any", true, true, false, 34) &&  !(null === twig_get_attribute($this->env, $this->source, $context["brasserie"], "nom", [], "any", false, false, false, 34)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["brasserie"], "nom", [], "any", false, false, false, 34), "html", null, true))) : (print ("Non renseigné")));
            echo "</td>
                    <td>";
            // line 35
            (((twig_get_attribute($this->env, $this->source, $context["brasserie"], "description", [], "any", true, true, false, 35) &&  !(null === twig_get_attribute($this->env, $this->source, $context["brasserie"], "description", [], "any", false, false, false, 35)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["brasserie"], "description", [], "any", false, false, false, 35), "html", null, true))) : (print ("Non renseigné")));
            echo "</td>
                    <td>";
            // line 36
            (((twig_get_attribute($this->env, $this->source, $context["brasserie"], "siteweb", [], "any", true, true, false, 36) &&  !(null === twig_get_attribute($this->env, $this->source, $context["brasserie"], "siteweb", [], "any", false, false, false, 36)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["brasserie"], "siteweb", [], "any", false, false, false, 36), "html", null, true))) : (print ("Non renseigné")));
            echo "</td>
                    <td>";
            // line 37
            (((twig_get_attribute($this->env, $this->source, $context["brasserie"], "telephone", [], "any", true, true, false, 37) &&  !(null === twig_get_attribute($this->env, $this->source, $context["brasserie"], "telephone", [], "any", false, false, false, 37)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["brasserie"], "telephone", [], "any", false, false, false, 37), "html", null, true))) : (print ("Non renseigné")));
            echo "</td>
                    <td>";
            // line 38
            (((twig_get_attribute($this->env, $this->source, $context["brasserie"], "mail", [], "any", true, true, false, 38) &&  !(null === twig_get_attribute($this->env, $this->source, $context["brasserie"], "mail", [], "any", false, false, false, 38)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["brasserie"], "mail", [], "any", false, false, false, 38), "html", null, true))) : (print ("Non renseigné")));
            echo "</td>
                    <td>";
            // line 39
            (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["brasserie"], "adresse", [], "any", false, true, false, 39), "ville", [], "any", true, true, false, 39) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["brasserie"], "adresse", [], "any", false, true, false, 39), "ville", [], "any", false, false, false, 39)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["brasserie"], "adresse", [], "any", false, true, false, 39), "ville", [], "any", false, false, false, 39), "html", null, true))) : (print ("Non renseigné")));
            echo "</td>
                    <td class=\"btn-group\">
                        <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("orm_detailBrasserie", ["id" => twig_get_attribute($this->env, $this->source, $context["brasserie"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\" class=\"btn btn-info\">Voir le détail</a>
                        <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("orm_list_brasserie_biere", ["id" => twig_get_attribute($this->env, $this->source, $context["brasserie"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\" class=\"btn btn-outline-info\">Leurs Bières</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brasserie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </tbody>

    </table>
    <a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_index");
        echo "\" class=\"btn btn-info\">Retour à l'accueil</a>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "orm/listBrasseries.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 49,  172 => 46,  162 => 42,  158 => 41,  153 => 39,  149 => 38,  145 => 37,  141 => 36,  137 => 35,  133 => 34,  129 => 33,  126 => 32,  122 => 31,  103 => 14,  97 => 12,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello ORMController!{% endblock %}

{% block body %}


<div class=\"container col-10\">
    <h2 class=\"mt-2\">La liste des brasseries</h2>
    <div class=\"btn-group d-flex justify-content-end\">
        {% if is_granted('ROLE_BRASSEUR') %}
            <a href=\"{{ path('form_brasserie') }}\" class=\"btn btn-info \">Ajouter une brasserie</a>
        {% endif %}
        <button class=\"btn btn-outline-info\">Voir mes favoris</button>
    </div>

    <table class=\"mt-2 table table-dark table-striped\" style=\"height:500px; overlow:auto; overflow-y:hidden;\">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Descripion</th>
                <th>Site Web</th>
                <th>Telephone</th>
                <th>Email</th>
                <th>Adresse</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for brasserie in brasseries %}
                <tr>
                    <td>{{ brasserie.id ?? 'Non renseigné'}}</td>
                    <td>{{ brasserie.nom ?? 'Non renseigné'}}</td>
                    <td>{{ brasserie.description ?? 'Non renseigné'}}</td>
                    <td>{{ brasserie.siteweb ?? 'Non renseigné' }}</td>
                    <td>{{ brasserie.telephone ?? 'Non renseigné' }}</td>
                    <td>{{ brasserie.mail ?? 'Non renseigné'}}</td>
                    <td>{{ brasserie.adresse.ville ?? 'Non renseigné' }}</td>
                    <td class=\"btn-group\">
                        <a href=\"{{ path('orm_detailBrasserie', {'id': brasserie.id})  }}\" class=\"btn btn-info\">Voir le détail</a>
                        <a href=\"{{ path('orm_list_brasserie_biere', {'id' : brasserie.id }) }}\" class=\"btn btn-outline-info\">Leurs Bières</a>
                    </td>
                </tr>
            {% endfor %}
        </tbody>

    </table>
    <a href=\"{{ path('home_index') }}\" class=\"btn btn-info\">Retour à l'accueil</a>
</div>

{% endblock %}
", "orm/listBrasseries.html.twig", "C:\\Users\\aurel\\Desktop\\test projet biere\\aure_souf_fab\\templates\\orm\\listBrasseries.html.twig");
    }
}
