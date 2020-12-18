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

/* form/form_biere.html.twig */
class __TwigTemplate_e51011613d2ca523e283359f0a9569e8f2ae7f3b53ecdbf697bcb95ca27bd73f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form/form_biere.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form/form_biere.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "form/form_biere.html.twig", 1);
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

        echo "Hello FormController!";
        
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
        echo "    <div class=\"container col-lg-8 text-center\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "            <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
        <div class=\"card\" style=\"margin-top: 50px;\">
            <h1 class=\"p-2\">Formulaire d'ajout de bières</h1>
            <div style=\"height:1px; background-color:darkgoldenrod; width:80%; margin:0 auto;\"></div>

            <div style=\"width:70%; margin: 0 auto; padding: 15px;\">
                <p> Veuillez renseigner les champs ci-dessous pour l'ajout de la bière</p>
                ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_biere"]) || array_key_exists("form_biere", $context) ? $context["form_biere"] : (function () { throw new RuntimeError('Variable "form_biere" does not exist.', 17, $this->source); })()), 'form_start');
        echo "

                <div class=\"form-group m-2\">
                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_biere"]) || array_key_exists("form_biere", $context) ? $context["form_biere"] : (function () { throw new RuntimeError('Variable "form_biere" does not exist.', 20, $this->source); })()), "nom", [], "any", false, false, false, 20), 'label');
        echo "
                    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_biere"]) || array_key_exists("form_biere", $context) ? $context["form_biere"] : (function () { throw new RuntimeError('Variable "form_biere" does not exist.', 21, $this->source); })()), "nom", [], "any", false, false, false, 21), 'widget');
        echo "
                </div>

                <div class=\"form-group m-2\">
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_biere"]) || array_key_exists("form_biere", $context) ? $context["form_biere"] : (function () { throw new RuntimeError('Variable "form_biere" does not exist.', 25, $this->source); })()), "description", [], "any", false, false, false, 25), 'label');
        echo "
                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_biere"]) || array_key_exists("form_biere", $context) ? $context["form_biere"] : (function () { throw new RuntimeError('Variable "form_biere" does not exist.', 26, $this->source); })()), "description", [], "any", false, false, false, 26), 'widget');
        echo "
                </div>

                <div class=\"form-group m-2\">
                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_biere"]) || array_key_exists("form_biere", $context) ? $context["form_biere"] : (function () { throw new RuntimeError('Variable "form_biere" does not exist.', 30, $this->source); })()), "date_creation", [], "any", false, false, false, 30), 'label');
        echo "
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_biere"]) || array_key_exists("form_biere", $context) ? $context["form_biere"] : (function () { throw new RuntimeError('Variable "form_biere" does not exist.', 31, $this->source); })()), "date_creation", [], "any", false, false, false, 31), 'widget');
        echo "
                </div>

                <div class=\"form-group m-2\">
                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_biere"]) || array_key_exists("form_biere", $context) ? $context["form_biere"] : (function () { throw new RuntimeError('Variable "form_biere" does not exist.', 35, $this->source); })()), "brasserie_id", [], "any", false, false, false, 35), 'label');
        echo "
                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_biere"]) || array_key_exists("form_biere", $context) ? $context["form_biere"] : (function () { throw new RuntimeError('Variable "form_biere" does not exist.', 36, $this->source); })()), "brasserie_id", [], "any", false, false, false, 36), 'widget');
        echo "
                </div>

                <div class=\"form-group m-2\">
                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_biere"]) || array_key_exists("form_biere", $context) ? $context["form_biere"] : (function () { throw new RuntimeError('Variable "form_biere" does not exist.', 40, $this->source); })()), "categorie_id", [], "any", false, false, false, 40), 'label');
        echo "
                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_biere"]) || array_key_exists("form_biere", $context) ? $context["form_biere"] : (function () { throw new RuntimeError('Variable "form_biere" does not exist.', 41, $this->source); })()), "categorie_id", [], "any", false, false, false, 41), 'widget');
        echo "
                </div>

                <button class=\"btn btn-outline-info\">Ajouter</button>
                ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_biere"]) || array_key_exists("form_biere", $context) ? $context["form_biere"] : (function () { throw new RuntimeError('Variable "form_biere" does not exist.', 45, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
        <a class=\"btn btn-outline-secondary mt-3\" href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("orm_bieres");
        echo "\">Retour à la liste des bières</a>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "form/form_biere.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 48,  174 => 45,  167 => 41,  163 => 40,  156 => 36,  152 => 35,  145 => 31,  141 => 30,  134 => 26,  130 => 25,  123 => 21,  119 => 20,  113 => 17,  104 => 10,  95 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello FormController!{% endblock %}

{% block body %}
    <div class=\"container col-lg-8 text-center\">
        {% for message in app.flashes('success') %}
            <div class=\"alert alert-success\">{{ message }}</div>
        {% endfor %}

        <div class=\"card\" style=\"margin-top: 50px;\">
            <h1 class=\"p-2\">Formulaire d'ajout de bières</h1>
            <div style=\"height:1px; background-color:darkgoldenrod; width:80%; margin:0 auto;\"></div>

            <div style=\"width:70%; margin: 0 auto; padding: 15px;\">
                <p> Veuillez renseigner les champs ci-dessous pour l'ajout de la bière</p>
                {{ form_start(form_biere) }}

                <div class=\"form-group m-2\">
                    {{ form_label(form_biere.nom) }}
                    {{ form_widget(form_biere.nom) }}
                </div>

                <div class=\"form-group m-2\">
                    {{ form_label(form_biere.description) }}
                    {{ form_widget(form_biere.description) }}
                </div>

                <div class=\"form-group m-2\">
                    {{ form_label(form_biere.date_creation) }}
                    {{ form_widget(form_biere.date_creation) }}
                </div>

                <div class=\"form-group m-2\">
                    {{ form_label(form_biere.brasserie_id) }}
                    {{ form_widget(form_biere.brasserie_id) }}
                </div>

                <div class=\"form-group m-2\">
                    {{ form_label(form_biere.categorie_id) }}
                    {{ form_widget(form_biere.categorie_id) }}
                </div>

                <button class=\"btn btn-outline-info\">Ajouter</button>
                {{ form_end(form_biere) }}
            </div>
        </div>
        <a class=\"btn btn-outline-secondary mt-3\" href=\"{{ path('orm_bieres') }}\">Retour à la liste des bières</a>
    </div>

{% endblock %}
", "form/form_biere.html.twig", "C:\\Users\\aurel\\Desktop\\test projet biere\\aure_souf_fab\\templates\\form\\form_biere.html.twig");
    }
}
