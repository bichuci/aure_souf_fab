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
        <h2>Formulaire d'ajout de bières</h2>
        <div style=\"height:1px; background-color:darkgoldenrod; width:100%; margin:5px;\"></div>
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            echo "            <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
        ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_biere"]) || array_key_exists("form_biere", $context) ? $context["form_biere"] : (function () { throw new RuntimeError('Variable "form_biere" does not exist.', 13, $this->source); })()), 'form_start');
        echo "

        <div class=\"form-group\">
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_biere"]) || array_key_exists("form_biere", $context) ? $context["form_biere"] : (function () { throw new RuntimeError('Variable "form_biere" does not exist.', 16, $this->source); })()), "nom", [], "any", false, false, false, 16), 'label');
        echo "
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_biere"]) || array_key_exists("form_biere", $context) ? $context["form_biere"] : (function () { throw new RuntimeError('Variable "form_biere" does not exist.', 17, $this->source); })()), "nom", [], "any", false, false, false, 17), 'widget');
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_biere"]) || array_key_exists("form_biere", $context) ? $context["form_biere"] : (function () { throw new RuntimeError('Variable "form_biere" does not exist.', 21, $this->source); })()), "description", [], "any", false, false, false, 21), 'label');
        echo "
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_biere"]) || array_key_exists("form_biere", $context) ? $context["form_biere"] : (function () { throw new RuntimeError('Variable "form_biere" does not exist.', 22, $this->source); })()), "description", [], "any", false, false, false, 22), 'widget');
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_biere"]) || array_key_exists("form_biere", $context) ? $context["form_biere"] : (function () { throw new RuntimeError('Variable "form_biere" does not exist.', 26, $this->source); })()), "date_creation", [], "any", false, false, false, 26), 'label');
        echo "
            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_biere"]) || array_key_exists("form_biere", $context) ? $context["form_biere"] : (function () { throw new RuntimeError('Variable "form_biere" does not exist.', 27, $this->source); })()), "date_creation", [], "any", false, false, false, 27), 'widget');
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_biere"]) || array_key_exists("form_biere", $context) ? $context["form_biere"] : (function () { throw new RuntimeError('Variable "form_biere" does not exist.', 31, $this->source); })()), "brasserie_id", [], "any", false, false, false, 31), 'label');
        echo "
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_biere"]) || array_key_exists("form_biere", $context) ? $context["form_biere"] : (function () { throw new RuntimeError('Variable "form_biere" does not exist.', 32, $this->source); })()), "brasserie_id", [], "any", false, false, false, 32), 'widget');
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_biere"]) || array_key_exists("form_biere", $context) ? $context["form_biere"] : (function () { throw new RuntimeError('Variable "form_biere" does not exist.', 36, $this->source); })()), "categorie_id", [], "any", false, false, false, 36), 'label');
        echo "
            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_biere"]) || array_key_exists("form_biere", $context) ? $context["form_biere"] : (function () { throw new RuntimeError('Variable "form_biere" does not exist.', 37, $this->source); })()), "categorie_id", [], "any", false, false, false, 37), 'widget');
        echo "
        </div>

    <button class=\"btn btn-outline-info\">Ajouter</button>
    </div>
    ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_biere"]) || array_key_exists("form_biere", $context) ? $context["form_biere"] : (function () { throw new RuntimeError('Variable "form_biere" does not exist.', 42, $this->source); })()), 'form_end');
        echo "
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
        return array (  171 => 42,  163 => 37,  159 => 36,  152 => 32,  148 => 31,  141 => 27,  137 => 26,  130 => 22,  126 => 21,  119 => 17,  115 => 16,  109 => 13,  106 => 12,  97 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello FormController!{% endblock %}

{% block body %}
    <div class=\"container col-lg-8 text-center\">
        <h2>Formulaire d'ajout de bières</h2>
        <div style=\"height:1px; background-color:darkgoldenrod; width:100%; margin:5px;\"></div>
        {% for message in app.flashes('success') %}
            <div class=\"alert alert-success\">{{ message }}</div>
        {% endfor %}

        {{ form_start(form_biere) }}

        <div class=\"form-group\">
            {{ form_label(form_biere.nom) }}
            {{ form_widget(form_biere.nom) }}
        </div>

        <div class=\"form-group\">
            {{ form_label(form_biere.description) }}
            {{ form_widget(form_biere.description) }}
        </div>

        <div class=\"form-group\">
            {{ form_label(form_biere.date_creation) }}
            {{ form_widget(form_biere.date_creation) }}
        </div>

        <div class=\"form-group\">
            {{ form_label(form_biere.brasserie_id) }}
            {{ form_widget(form_biere.brasserie_id) }}
        </div>

        <div class=\"form-group\">
            {{ form_label(form_biere.categorie_id) }}
            {{ form_widget(form_biere.categorie_id) }}
        </div>

    <button class=\"btn btn-outline-info\">Ajouter</button>
    </div>
    {{ form_end(form_biere) }}
{% endblock %}
", "form/form_biere.html.twig", "C:\\Users\\Stagiaire\\Desktop\\git test\\templates\\form\\form_biere.html.twig");
    }
}
