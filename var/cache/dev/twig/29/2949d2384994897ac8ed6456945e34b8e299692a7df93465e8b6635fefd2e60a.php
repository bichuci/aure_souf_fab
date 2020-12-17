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
        // line 28
        echo twig_escape_filter($this->env, twig_replace_filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 28), "BgImage", [], "any", true, true, false, 28) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 28), "BgImage", [], "any", false, false, false, 28)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 28), "BgImage", [], "any", false, false, false, 28)) : (""))), ["\\" => "/"]), "html", null, true);
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

    // line 38
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
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

    // line 48
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 49
        echo "<main class=\"container\">
        <!-- Breadcrumb -->
      <nav aria-label=\"breadcrumb\" class=\"main-breadcrumb\">
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a href=\"javascript:void(1)\">Home</a></li>
          <li class=\"breadcrumb-item\"><a href=\"javascript:void(0)\">User</a></li>
          <li class=\"breadcrumb-item active\" aria-current=\"page\">Profile Settings</li>
        </ol>
      </nav>
      <!-- /Breadcrumb -->
    </div>
    <div class=\"container\">
        <div class=\"card text-center card-top ombre\">
            <div class=\"card-header bg-imge\">
              <img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 63), "profilImage", [], "any", true, true, false, 63) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 63), "profilImage", [], "any", false, false, false, 63)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 63), "profilImage", [], "any", false, false, false, 63)) : ("/images/images.png"))), "html", null, true);
        echo "\" alt=\"Profile\">
            </div>
            <div class=\"image-upload d-flex\">
                ";
        // line 66
        if ((0 === twig_compare((isset($context["UserId"]) || array_key_exists("UserId", $context) ? $context["UserId"] : (function () { throw new RuntimeError('Variable "UserId" does not exist.', 66, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66), "id", [], "any", false, false, false, 66)))) {
            // line 67
            echo "                <div class=\"dropdown pt-2\">

                <button class=\"btn btn-outline_primary dropdown-toggle \" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"fas fa-image\"></i>
                </button>
                <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\" >
                        ";
            // line 73
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), 'form_start');
            echo "
                        ";
            // line 74
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), 'widget');
            echo "
                        <button class=\"btn btn-primary\" type=\"submit\">Envoyez !</button>
                        ";
            // line 76
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), 'form_end');
            echo "
                    </div>
                </div>
                ";
        }
        // line 80
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 80));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 81
            echo "                    <div class=\"alert alert-success\">
                        ";
            // line 82
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "
            </div>
            <div class=\"card-body bio\">
              <h5 class=\"card-title\">";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 88, $this->source); })()), "user", [], "any", false, false, false, 88), "username", [], "any", false, false, false, 88), "html", null, true);
        echo "</h5>
              <p class=\"card-text\">";
        // line 89
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 89), "bio", [], "any", true, true, false, 89) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 89), "bio", [], "any", false, false, false, 89)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 89), "bio", [], "any", false, false, false, 89), "html", null, true))) : (print (" ")));
        echo "</p>
              <a href=\"#\" class=\"btn btn-primary\">Envoyer un message</a>
                ";
        // line 91
        if ((0 === twig_compare((isset($context["UserId"]) || array_key_exists("UserId", $context) ? $context["UserId"] : (function () { throw new RuntimeError('Variable "UserId" does not exist.', 91, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 91, $this->source); })()), "user", [], "any", false, false, false, 91), "id", [], "any", false, false, false, 91)))) {
            // line 92
            echo "              <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil_settings", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 92, $this->source); })()), "user", [], "any", false, false, false, 92), "id", [], "any", false, false, false, 92)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">settings</a>
                ";
        }
        // line 94
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
        // line 122
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 122, $this->source); })()), "commentaire", [], "any", false, false, false, 122)), "html", null, true);
        echo "</td>
                      </tr>
                      <tr>
                        <td>
                            <i class=\"far fa-grin-stars\"></i>
                        </td>
                        <td>Vote</td>
                        <td>
                            ";
        // line 130
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 130, $this->source); })()), "note", [], "any", false, false, false, 130)), "html", null, true);
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
        // line 150
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 150, $this->source); })()), "user", [], "any", false, false, false, 150), "dateNaissance", [], "any", false, false, false, 150), "d/m/y"), "html", null, true);
        echo "</li>
                  <li class=\"list-group-item\"><i class=\"fas fa-map-marker-alt\"></i> Localisation : ";
        // line 151
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 151), "adresseId", [], "any", false, true, false, 151), "ville", [], "any", true, true, false, 151) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 151), "adresseId", [], "any", false, true, false, 151), "ville", [], "any", false, false, false, 151)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 151), "adresseId", [], "any", false, true, false, 151), "ville", [], "any", false, false, false, 151), "html", null, true))) : (print ("")));
        echo " </li>
                  <li class=\"list-group-item\"><i class=\"fas fa-at\"></i> e-mail : ";
        // line 152
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 152, $this->source); })()), "user", [], "any", false, false, false, 152), "email", [], "any", false, false, false, 152), "html", null, true);
        echo "</li>
                  <li class=\"list-group-item\"><i class=\"fas fa-phone\"></i> Numero de telephone : ";
        // line 153
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 153), "telephone", [], "any", true, true, false, 153) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 153), "telephone", [], "any", false, false, false, 153)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 153), "telephone", [], "any", false, false, false, 153), "html", null, true))) : (print (" ")));
        echo " </li>
                  <li class=\"list-group-item\"><i class=\"fas fa-crown\"></i> Biére favorite : ";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 154, $this->source); })()), "biere", [], "any", false, false, false, 154));
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
</main>
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
        return array (  341 => 154,  337 => 153,  333 => 152,  329 => 151,  325 => 150,  302 => 130,  291 => 122,  261 => 94,  255 => 92,  253 => 91,  248 => 89,  244 => 88,  239 => 85,  230 => 82,  227 => 81,  222 => 80,  215 => 76,  210 => 74,  206 => 73,  198 => 67,  196 => 66,  190 => 63,  174 => 49,  164 => 48,  147 => 39,  137 => 38,  117 => 28,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
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
<main class=\"container\">
        <!-- Breadcrumb -->
      <nav aria-label=\"breadcrumb\" class=\"main-breadcrumb\">
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a href=\"javascript:void(1)\">Home</a></li>
          <li class=\"breadcrumb-item\"><a href=\"javascript:void(0)\">User</a></li>
          <li class=\"breadcrumb-item active\" aria-current=\"page\">Profile Settings</li>
        </ol>
      </nav>
      <!-- /Breadcrumb -->
    </div>
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
</main>
{% endblock %}

", "profil/index.html.twig", "C:\\Users\\Stagiaire\\Desktop\\git test\\templates\\profil\\index.html.twig");
    }
}