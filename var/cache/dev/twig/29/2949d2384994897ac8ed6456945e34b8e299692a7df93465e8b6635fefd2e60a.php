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

/* profil/index.html.twig */
class __TwigTemplate_310ba0acd77d77d71e5d84fd8c87010ee8a7deece8fef79f4825d402f948c428 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profil/index.html.twig", 1);
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

        echo "Hello ProfilController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/css/profil.css"), "html", null, true);
        echo ">
    <style>

        .label-file {
            cursor: pointer;
            color: #00b1ca;
            font-weight: bold;
        }
        .label-file:hover {
            color: #25a5c4;
        }

        .input-file {
               display: none;
           }

        .dropdown form {
            display: flex;
            flex-direction: column;
            align-items: center;

        }

        .card-header {

            background-image: url(";
        // line 30
        echo twig_escape_filter($this->env, twig_replace_filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 30), "BgImage", [], "any", true, true, false, 30) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 30), "BgImage", [], "any", false, false, false, 30)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 30), "BgImage", [], "any", false, false, false, 30)) : (""))), ["\\" => "/"]), "html", null, true);
        echo ") !important;

        }

        .image-upload{
            min-height: 50px;
        }

    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
    <script src=\"https://kit.fontawesome.com/4119f93ec8.js\" crossorigin=\"anonymous\"></script>
    <script>
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 50
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 51
        echo "<div class=\"container\" style=\"height:150vh !important;\">
        <!-- Breadcrumb -->
      <nav aria-label=\"breadcrumb\" class=\"main-breadcrumb\">
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a href=\"javascript:void(1)\">Home</a></li>
          <li class=\"breadcrumb-item\"><a href=\"javascript:void(0)\">User</a></li>
          <li class=\"breadcrumb-item active\" aria-current=\"page\">Profile Settings</li>
        </ol>
      </nav>
      <!-- /Breadcrumb -->
    <div class=\"container\">
        <div class=\"card text-center card-top ombre\">
            <div class=\"card-header bg-imge\">
              <img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 64), "profilImage", [], "any", true, true, false, 64) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 64), "profilImage", [], "any", false, false, false, 64)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 64), "profilImage", [], "any", false, false, false, 64)) : ("/images/images.png"))), "html", null, true);
        echo "\" alt=\"Profile\">
            </div>
            <div class=\"image-upload d-flex\">
                ";
        // line 67
        if ((0 === twig_compare((isset($context["UserId"]) || array_key_exists("UserId", $context) ? $context["UserId"] : (function () { throw new RuntimeError('Variable "UserId" does not exist.', 67, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67), "id", [], "any", false, false, false, 67)))) {
            // line 68
            echo "                <div class=\"dropdown pt-2\">

                    <button class=\"btn btn-outline_primary dropdown-toggle \" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"fas fa-image\"></i>
                    </button>
                    <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\" >
                        ";
            // line 74
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), 'form_start');
            echo "
                        ";
            // line 75
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), 'widget');
            echo "
                        <button class=\"btn btn-primary\" type=\"submit\">Envoyez !</button>
                        ";
            // line 77
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), 'form_end');
            echo "
                    </div>
                </div>
                ";
        }
        // line 81
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 81));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 82
            echo "                    <div class=\"alert alert-success\">
                        ";
            // line 83
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "
            </div>
            <div class=\"card-body bio\">
              <h5 class=\"card-title\">";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 89, $this->source); })()), "user", [], "any", false, false, false, 89), "username", [], "any", false, false, false, 89), "html", null, true);
        echo "</h5>
              <p class=\"card-text\">";
        // line 90
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 90), "bio", [], "any", true, true, false, 90) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 90), "bio", [], "any", false, false, false, 90)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 90), "bio", [], "any", false, false, false, 90), "html", null, true))) : (print (" ")));
        echo "</p>
              <a href=\"#\" class=\"btn btn-primary\">Envoyer un message</a>
                ";
        // line 92
        if ((0 === twig_compare((isset($context["UserId"]) || array_key_exists("UserId", $context) ? $context["UserId"] : (function () { throw new RuntimeError('Variable "UserId" does not exist.', 92, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 92, $this->source); })()), "user", [], "any", false, false, false, 92), "id", [], "any", false, false, false, 92)))) {
            // line 93
            echo "              <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil_settings", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 93, $this->source); })()), "user", [], "any", false, false, false, 93), "id", [], "any", false, false, false, 93)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">settings</a>
                ";
        }
        // line 95
        echo "            </div>
          </div>
          <div class=\"d-flex justify-content-between main\">
          <div class=\"col-lg-4\">
            <div class=\"feedback ombre\">
              <div class=\"panel\">
                <div class=\"card-header\">
                  <span class=\"panel-icon\">
                    <i class=\"fa fa-star\"></i>
                  </span>
                  <span class=\"panel-title\"> User Popularity</span>
                </div>
                <div class=\"panel-body pn\">
                  <table class=\"table mbn tc-icon-1 tc-med-2 tc-bold-last\">
                    <thead>
                      <tr class=\"hidden\">
                        <th class=\"mw30\">#</th>
                        <th>Type</th>
                        <th>nombres</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                            <i class=\"far fa-comments\"></i>
                        </td>
                        <td>Commenaitre</td>
                        <td>
                            ";
        // line 123
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 123, $this->source); })()), "commentaire", [], "any", false, false, false, 123)), "html", null, true);
        echo "</td>
                      </tr>
                      <tr>
                        <td>
                            <i class=\"far fa-grin-stars\"></i>
                        </td>
                        <td>Vote</td>
                        <td>
                            ";
        // line 131
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 131, $this->source); })()), "note", [], "any", false, false, false, 131)), "html", null, true);
        echo "</td>
                      </tr>
                      <tr>
                        <td>
                            <i class=\"fas fa-beer\"></i>
                        </td>
                        <td>Biere consomée</td>
                        <td>
                          350</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class=\"card card-gauche ombre\">
                <div class=\"card-header\">
                  A propos de moi
                </div>
                <ul class=\"list-group list-group-flush \">
                  <li class=\"list-group-item\"><i class=\"fas fa-user-clock\"></i> date de naissance : ";
        // line 151
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 151, $this->source); })()), "user", [], "any", false, false, false, 151), "dateNaissance", [], "any", false, false, false, 151), "d/m/y"), "html", null, true);
        echo "</li>
                  <li class=\"list-group-item\"><i class=\"fas fa-map-marker-alt\"></i> Localisation : ";
        // line 152
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 152), "adresseId", [], "any", false, true, false, 152), "ville", [], "any", true, true, false, 152) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 152), "adresseId", [], "any", false, true, false, 152), "ville", [], "any", false, false, false, 152)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 152), "adresseId", [], "any", false, true, false, 152), "ville", [], "any", false, false, false, 152), "html", null, true))) : (print ("")));
        echo " </li>
                  <li class=\"list-group-item\"><i class=\"fas fa-at\"></i> e-mail : ";
        // line 153
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 153, $this->source); })()), "user", [], "any", false, false, false, 153), "email", [], "any", false, false, false, 153), "html", null, true);
        echo "</li>
                  <li class=\"list-group-item\"><i class=\"fas fa-phone\"></i> Numero de telephone : ";
        // line 154
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 154), "telephone", [], "any", true, true, false, 154) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 154), "telephone", [], "any", false, false, false, 154)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 154), "telephone", [], "any", false, false, false, 154), "html", null, true))) : (print (" ")));
        echo " </li>
                  <li class=\"list-group-item\"><i class=\"fas fa-crown\"></i> Biére favorite : ";
        // line 155
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 155, $this->source); })()), "biere", [], "any", false, false, false, 155));
        foreach ($context['_seq'] as $context["_key"] => $context["biere"]) {
            (((array_key_exists("biere", $context) &&  !(null === $context["biere"]))) ? (print (twig_escape_filter($this->env, $context["biere"], "html", null, true))) : (print (" ")));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['biere'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</li>
                </ul>
            </div>
        </div>
        <div class=\"card col-lg-8 ombre activiter\" >
            <div class=\"card-body\">
              <h5 class=\"card-title\"><i class=\"fas fa-glass-cheers\"></i> Activiter recente <i class=\"fas fa-glass-cheers\"></i></h5>
              <ul class=\"timeline\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\" >Note pour X biére</a>
\t\t\t\t\t<p class=\"float-right\">Date</p>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">A commenter a X Biére</a>
\t\t\t\t\t<p class=\"float-right\">Date</p>
\t\t\t\t\t<p>Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">A noter X bare</a>
\t\t\t\t\t<p class=\"float-right\">Date</p>
\t\t\t\t\t<p>Fusce ullamcorper ligula sit amet quam accumsan aliquet. Sed nulla odio, tincidunt vitae nunc vitae, mollis pharetra velit. Sed nec tempor nibh...</p>
                </li>
                <li>
\t\t\t\t\t<a href=\"#\">Etait a X bare</a>
\t\t\t\t\t<p class=\"float-right\">Date</p>
\t\t\t\t\t<p>Fusce ullamcorper ligula sit amet quam accumsan aliquet. Sed nulla odio, tincidunt vitae nunc vitae, mollis pharetra velit. Sed nec tempor nibh...</p>
\t\t\t\t</li>
\t\t\t</ul>

            </div>
          </div>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "profil/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 155,  338 => 154,  334 => 153,  330 => 152,  326 => 151,  303 => 131,  292 => 123,  262 => 95,  256 => 93,  254 => 92,  249 => 90,  245 => 89,  240 => 86,  231 => 83,  228 => 82,  223 => 81,  216 => 77,  211 => 75,  207 => 74,  199 => 68,  197 => 67,  191 => 64,  176 => 51,  166 => 50,  149 => 41,  139 => 40,  119 => 30,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello ProfilController!{% endblock %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href={{ asset('/css/profil.css') }}>
    <style>

        .label-file {
            cursor: pointer;
            color: #00b1ca;
            font-weight: bold;
        }
        .label-file:hover {
            color: #25a5c4;
        }

        .input-file {
               display: none;
           }

        .dropdown form {
            display: flex;
            flex-direction: column;
            align-items: center;

        }

        .card-header {

            background-image: url({{asset(profil.user.BgImage ?? \"\")|replace({\"\\\\\":\"/\"}) }}) !important;

        }

        .image-upload{
            min-height: 50px;
        }

    </style>
{% endblock %}
{% block javascripts%}
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
    <script src=\"https://kit.fontawesome.com/4119f93ec8.js\" crossorigin=\"anonymous\"></script>
    <script>
    </script>

{% endblock %}

{% block body %}
<div class=\"container\" style=\"height:150vh !important;\">
        <!-- Breadcrumb -->
      <nav aria-label=\"breadcrumb\" class=\"main-breadcrumb\">
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a href=\"javascript:void(1)\">Home</a></li>
          <li class=\"breadcrumb-item\"><a href=\"javascript:void(0)\">User</a></li>
          <li class=\"breadcrumb-item active\" aria-current=\"page\">Profile Settings</li>
        </ol>
      </nav>
      <!-- /Breadcrumb -->
    <div class=\"container\">
        <div class=\"card text-center card-top ombre\">
            <div class=\"card-header bg-imge\">
              <img src=\"{{ asset(profil.user.profilImage ?? '/images/images.png') }}\" alt=\"Profile\">
            </div>
            <div class=\"image-upload d-flex\">
                {% if UserId  == profil.user.id %}
                <div class=\"dropdown pt-2\">

                    <button class=\"btn btn-outline_primary dropdown-toggle \" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"fas fa-image\"></i>
                    </button>
                    <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\" >
                        {{ form_start(form) }}
                        {{ form_widget(form) }}
                        <button class=\"btn btn-primary\" type=\"submit\">Envoyez !</button>
                        {{ form_end(form) }}
                    </div>
                </div>
                {% endif %}
                {% for message in app.flashes('success') %}
                    <div class=\"alert alert-success\">
                        {{ message }}
                    </div>
                {% endfor %}

            </div>
            <div class=\"card-body bio\">
              <h5 class=\"card-title\">{{ profil.user.username }}</h5>
              <p class=\"card-text\">{{ profil.user.bio ?? \" \" }}</p>
              <a href=\"#\" class=\"btn btn-primary\">Envoyer un message</a>
                {% if UserId  == profil.user.id %}
              <a href=\"{{ path( \"profil_settings\" , {'id' : profil.user.id}) }}\" class=\"btn btn-primary\">settings</a>
                {% endif %}
            </div>
          </div>
          <div class=\"d-flex justify-content-between main\">
          <div class=\"col-lg-4\">
            <div class=\"feedback ombre\">
              <div class=\"panel\">
                <div class=\"card-header\">
                  <span class=\"panel-icon\">
                    <i class=\"fa fa-star\"></i>
                  </span>
                  <span class=\"panel-title\"> User Popularity</span>
                </div>
                <div class=\"panel-body pn\">
                  <table class=\"table mbn tc-icon-1 tc-med-2 tc-bold-last\">
                    <thead>
                      <tr class=\"hidden\">
                        <th class=\"mw30\">#</th>
                        <th>Type</th>
                        <th>nombres</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                            <i class=\"far fa-comments\"></i>
                        </td>
                        <td>Commenaitre</td>
                        <td>
                            {{ profil.commentaire|length }}</td>
                      </tr>
                      <tr>
                        <td>
                            <i class=\"far fa-grin-stars\"></i>
                        </td>
                        <td>Vote</td>
                        <td>
                            {{ profil.note|length }}</td>
                      </tr>
                      <tr>
                        <td>
                            <i class=\"fas fa-beer\"></i>
                        </td>
                        <td>Biere consomée</td>
                        <td>
                          350</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class=\"card card-gauche ombre\">
                <div class=\"card-header\">
                  A propos de moi
                </div>
                <ul class=\"list-group list-group-flush \">
                  <li class=\"list-group-item\"><i class=\"fas fa-user-clock\"></i> date de naissance : {{ profil.user.dateNaissance|date('d/m/y') }}</li>
                  <li class=\"list-group-item\"><i class=\"fas fa-map-marker-alt\"></i> Localisation : {{ profil.user.adresseId.ville ?? \"\"}} </li>
                  <li class=\"list-group-item\"><i class=\"fas fa-at\"></i> e-mail : {{ profil.user.email }}</li>
                  <li class=\"list-group-item\"><i class=\"fas fa-phone\"></i> Numero de telephone : {{ profil.user.telephone ?? \" \"}} </li>
                  <li class=\"list-group-item\"><i class=\"fas fa-crown\"></i> Biére favorite : {% for biere in profil.biere  %}{{ biere ?? \" \" }}{% endfor %}</li>
                </ul>
            </div>
        </div>
        <div class=\"card col-lg-8 ombre activiter\" >
            <div class=\"card-body\">
              <h5 class=\"card-title\"><i class=\"fas fa-glass-cheers\"></i> Activiter recente <i class=\"fas fa-glass-cheers\"></i></h5>
              <ul class=\"timeline\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\" >Note pour X biére</a>
\t\t\t\t\t<p class=\"float-right\">Date</p>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">A commenter a X Biére</a>
\t\t\t\t\t<p class=\"float-right\">Date</p>
\t\t\t\t\t<p>Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">A noter X bare</a>
\t\t\t\t\t<p class=\"float-right\">Date</p>
\t\t\t\t\t<p>Fusce ullamcorper ligula sit amet quam accumsan aliquet. Sed nulla odio, tincidunt vitae nunc vitae, mollis pharetra velit. Sed nec tempor nibh...</p>
                </li>
                <li>
\t\t\t\t\t<a href=\"#\">Etait a X bare</a>
\t\t\t\t\t<p class=\"float-right\">Date</p>
\t\t\t\t\t<p>Fusce ullamcorper ligula sit amet quam accumsan aliquet. Sed nulla odio, tincidunt vitae nunc vitae, mollis pharetra velit. Sed nec tempor nibh...</p>
\t\t\t\t</li>
\t\t\t</ul>

            </div>
          </div>
        </div>
    </div>
</div>
{% endblock %}

", "profil/index.html.twig", "C:\\Users\\aurel\\Desktop\\test projet biere\\aure_souf_fab\\templates\\profil\\index.html.twig");
    }
}
