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

/* orm/listBieres.html.twig */
class __TwigTemplate_8b16afb29a733b581e419f5453f76dab34f1badef022a3aa4efe02a0e2d986fd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "orm/listBieres.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "orm/listBieres.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "orm/listBieres.html.twig", 1);
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

        echo "Liste des bières";
        
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
        echo "

<div class=\"container col-10\">
    <h2 class=\"text-center\">La liste des bières</h2>
    <div class=\"btn-group d-flex justify-content-end\">
        ";
        // line 12
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_BRASSEUR")) {
            // line 13
            echo "            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("form_biere");
            echo "\" class=\"btn btn-info \">Ajouter une bière</a>
        ";
        }
        // line 15
        echo "        <button class=\"btn btn-outline-info\">Voir mes favoris</button>
    </div>
    <div class=\"row  m-2\">
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bieres"]) || array_key_exists("bieres", $context) ? $context["bieres"] : (function () { throw new RuntimeError('Variable "bieres" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["biere"]) {
            // line 19
            echo "                <div class=\"col-lg-3\">
                    <div class=\"card\">
                        <div class=\"card-header p-0\">
                            <img src=\"./img/img3.jpg\" alt=\"Image de la bière\" class=\"card-img-top\">
                        </div>
                    </div>
                    <div class=\"card-body bg-light p-0 h-50 \">
                        <div class=\"p-2 text-center bg-light\">
                            <h4 class=\"p-2\"><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("orm_bieres_details", ["id" => twig_get_attribute($this->env, $this->source, $context["biere"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["biere"], "nom", [], "any", false, false, false, 27), "html", null, true);
            echo "</a></h4>
                            <h6 class=\"card-subtitle m-2 text-muted\"><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("orm_detailBrasserie", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["biere"], "brasserieId", [], "any", false, false, false, 28), "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\">Brassée par : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["biere"], "brasserieId", [], "any", false, false, false, 28), "nom", [], "any", false, false, false, 28), "html", null, true);
            echo "</a></h6>
                            <p class=\"text-center\">Description de la biere : ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["biere"], "description", [], "any", false, false, false, 29), "html", null, true);
            echo "</p>
                        </div>
                    </div>
                    <div class=\"pb-2 text-center bg-light\">
                        <span class=\"badge badge-pill badge-warning\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["biere"], "categorieId", [], "any", false, false, false, 33), "nom", [], "any", false, false, false, 33), "html", null, true);
            echo "</span>
                        <span class=\"badge badge-pill badge-warning\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["biere"], "brasserieId", [], "any", false, false, false, 34), "adresse", [], "any", false, false, false, 34), "ville", [], "any", false, false, false, 34), "html", null, true);
            echo "</span>
                    </div>
                    <div class=\"card-footer\">
                        <div id=\"avis\">
                            <h5>Avis</h5>
                            <i class=\"fas fa-star\"></i>
                            <i class=\"fas fa-star\"></i>
                            <i class=\"fas fa-star\"></i>
                            <i class=\"fas fa-star\"></i>
                            <i class=\"fas fa-star\"></i>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['biere'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "orm/listBieres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 48,  145 => 34,  141 => 33,  134 => 29,  128 => 28,  122 => 27,  112 => 19,  108 => 18,  103 => 15,  97 => 13,  95 => 12,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des bières{% endblock %}


{% block body %}


<div class=\"container col-10\">
    <h2 class=\"text-center\">La liste des bières</h2>
    <div class=\"btn-group d-flex justify-content-end\">
        {% if is_granted('ROLE_BRASSEUR') %}
            <a href=\"{{ path('form_biere') }}\" class=\"btn btn-info \">Ajouter une bière</a>
        {% endif %}
        <button class=\"btn btn-outline-info\">Voir mes favoris</button>
    </div>
    <div class=\"row  m-2\">
            {% for biere in bieres %}
                <div class=\"col-lg-3\">
                    <div class=\"card\">
                        <div class=\"card-header p-0\">
                            <img src=\"./img/img3.jpg\" alt=\"Image de la bière\" class=\"card-img-top\">
                        </div>
                    </div>
                    <div class=\"card-body bg-light p-0 h-50 \">
                        <div class=\"p-2 text-center bg-light\">
                            <h4 class=\"p-2\"><a href=\"{{ path('orm_bieres_details' , {'id' :biere.id} )}}\">{{biere.nom}}</a></h4>
                            <h6 class=\"card-subtitle m-2 text-muted\"><a href=\"{{ path('orm_detailBrasserie', {'id': biere.brasserieId.id})  }}\">Brassée par : {{ biere.brasserieId.nom }}</a></h6>
                            <p class=\"text-center\">Description de la biere : {{ biere.description }}</p>
                        </div>
                    </div>
                    <div class=\"pb-2 text-center bg-light\">
                        <span class=\"badge badge-pill badge-warning\">{{ biere.categorieId.nom }}</span>
                        <span class=\"badge badge-pill badge-warning\">{{ biere.brasserieId.adresse.ville }}</span>
                    </div>
                    <div class=\"card-footer\">
                        <div id=\"avis\">
                            <h5>Avis</h5>
                            <i class=\"fas fa-star\"></i>
                            <i class=\"fas fa-star\"></i>
                            <i class=\"fas fa-star\"></i>
                            <i class=\"fas fa-star\"></i>
                            <i class=\"fas fa-star\"></i>
                        </div>
                    </div>
                </div>
            {% endfor %}

    </div>
</div>

{% endblock %}
", "orm/listBieres.html.twig", "C:\\Users\\Stagiaire\\Desktop\\git test\\templates\\orm\\listBieres.html.twig");
    }
}
