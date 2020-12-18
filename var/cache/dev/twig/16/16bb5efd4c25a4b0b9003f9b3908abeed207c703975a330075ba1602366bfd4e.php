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

/* profil/settings.html.twig */
class __TwigTemplate_cc691a01c3b199a95eb579e5926888cc342fa3b4459bfdeb2f5fee6b714c5aa9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/settings.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/settings.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profil/settings.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/css/profilsettings.css"), "html", null, true);
        echo ">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 9
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "
<main class=\"container\">

        <!-- Breadcrumb -->
        <nav aria-label=\"breadcrumb\" class=\"main-breadcrumb\" style=\"margin-top: 50px;\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
                <li class=\"breadcrumb-item\"><a href=\"javascript:void(0)\">User</a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Profile Settings</li>
            </ol>
        </nav>
        <!-- /Breadcrumb -->
        <main class=\"container\">
        <div class=\"d-flex justify-content-between main\">
            <div class=\"row col-sm\">
                <div class=\"card d-none d-md-block menu\">
                    <div class=\"card-header\">
                        <div class=\"text-center imageprofil\">
                            <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 31), "ProfilImage", [], "any", true, true, false, 31) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 31), "ProfilImage", [], "any", false, false, false, 31)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 31), "ProfilImage", [], "any", false, false, false, 31)) : ("/images/images.png"))), "html", null, true);
        echo "\" class=\"mx-auto img-fluid img-circle d-block\" alt=\"avatar\">
                            <h6 class=\"mt-2\">Upload a different photo</h6>
                            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formimg"]) || array_key_exists("formimg", $context) ? $context["formimg"] : (function () { throw new RuntimeError('Variable "formimg" does not exist.', 33, $this->source); })()), 'form_start');
        echo "
                            <label class=\"custom-file\">
                                <i class=\"fas fa-image\"></i>
                                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formimg"]) || array_key_exists("formimg", $context) ? $context["formimg"] : (function () { throw new RuntimeError('Variable "formimg" does not exist.', 36, $this->source); })()), "profil_image", [], "any", false, false, false, 36), 'widget');
        echo "
                            </label>
                            <button class=\"btn btn-primary\" type=\"submit\">Envoyez !</button>
                            ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formimg"]) || array_key_exists("formimg", $context) ? $context["formimg"] : (function () { throw new RuntimeError('Variable "formimg" does not exist.', 39, $this->source); })()), 'form_end');
        echo "
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Menu</h5>
                        <p class=\"card-text\">
                            <nav class=\"nav flex-column nav-pills\">
                                <a href=\"#profile\" data-toggle=\"tab\" class=\"nav-item nav-link  nav-link-faded active\"><i class=\"far fa-user\"></i> Profile Information
                                </a>
                                <a href=\"#account\" data-toggle=\"tab\" class=\"nav-item nav-link  nav-link-faded\">
                                    <i class=\"fas fa-users-cog\"></i> Account Settings
                                </a>
                                <a href=\"#security\" data-toggle=\"tab\" class=\"nav-item nav-link  nav-link-faded\">
                                    <i class=\"fas fa-shield-alt\"></i> Security
                                </a>
                                <a href=\"#notification\" data-toggle=\"tab\" class=\"nav-item nav-link  nav-link-faded\">
                                    <i class=\"far fa-bell\"></i> Notification
                                </a>
                            </nav>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-8 form\">
                <div class=\"card\">
                    <div class=\"card-header border-bottom mb-3 d-flex d-md-none\">
                        <div class=\"col-lg-4 order-lg-1 text-center imageprofil\">
                            <img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 66), "ProfilImage", [], "any", true, true, false, 66) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 66), "ProfilImage", [], "any", false, false, false, 66)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 66), "ProfilImage", [], "any", false, false, false, 66)) : ("/images/images.png"))), "html", null, true);
        echo "\" class=\"mx-auto img-fluid img-circle d-block\" alt=\"avatar\">
                            <h6 class=\"mt-2\">Upload a different photo</h6>
                            ";
        // line 68
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formimg2"]) || array_key_exists("formimg2", $context) ? $context["formimg2"] : (function () { throw new RuntimeError('Variable "formimg2" does not exist.', 68, $this->source); })()), 'form_start');
        echo "
                            <label class=\"custom-file\">
                                <i class=\"fas fa-image\"></i>
                                ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formimg2"]) || array_key_exists("formimg2", $context) ? $context["formimg2"] : (function () { throw new RuntimeError('Variable "formimg2" does not exist.', 71, $this->source); })()), "profil_image", [], "any", false, false, false, 71), 'widget');
        echo "
                            </label>
                            ";
        // line 73
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formimg2"]) || array_key_exists("formimg2", $context) ? $context["formimg2"] : (function () { throw new RuntimeError('Variable "formimg2" does not exist.', 73, $this->source); })()), 'form_end');
        echo "
                        </div>
                        <ul class=\"nav nav-tabs card-header-tabs nav-gap\" role=\"tablist\">
                            <li class=\"nav-item\">
                                <a href=\"#profile\" data-toggle=\"tab\" class=\"nav-link active\"><i class=\"far fa-user\"></i></a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"#account\" data-toggle=\"tab\" class=\"nav-link\"><i class=\"fas fa-users-cog\"></i></a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"#security\" data-toggle=\"tab\" class=\"nav-link \"><i class=\"fas fa-shield-alt\"></i></a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"#notification\" data-toggle=\"tab\" class=\"nav-link \"><i class=\"far fa-bell\"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"card-body tab-content\">
                        <div class=\"tab-pane active\" id=\"profile\">
                            <h6>Information du profile</h6>
                            <hr>
                                ";
        // line 94
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formset1"]) || array_key_exists("formset1", $context) ? $context["formset1"] : (function () { throw new RuntimeError('Variable "formset1" does not exist.', 94, $this->source); })()), 'form_start');
        echo "
                                <div class=\"form-group\">
                                    ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formset1"]) || array_key_exists("formset1", $context) ? $context["formset1"] : (function () { throw new RuntimeError('Variable "formset1" does not exist.', 96, $this->source); })()), "nom", [], "any", false, false, false, 96), 'label');
        echo "
                                    ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formset1"]) || array_key_exists("formset1", $context) ? $context["formset1"] : (function () { throw new RuntimeError('Variable "formset1" does not exist.', 97, $this->source); })()), "nom", [], "any", false, false, false, 97), 'widget', ["attr" => ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 97, $this->source); })()), "user", [], "any", false, false, false, 97), "nom", [], "any", false, false, false, 97)]]);
        echo "
                                    ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formset1"]) || array_key_exists("formset1", $context) ? $context["formset1"] : (function () { throw new RuntimeError('Variable "formset1" does not exist.', 98, $this->source); })()), "nom", [], "any", false, false, false, 98), 'help');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formset1"]) || array_key_exists("formset1", $context) ? $context["formset1"] : (function () { throw new RuntimeError('Variable "formset1" does not exist.', 101, $this->source); })()), "prenom", [], "any", false, false, false, 101), 'label');
        echo "
                                    ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formset1"]) || array_key_exists("formset1", $context) ? $context["formset1"] : (function () { throw new RuntimeError('Variable "formset1" does not exist.', 102, $this->source); })()), "prenom", [], "any", false, false, false, 102), 'widget', ["attr" => ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 102, $this->source); })()), "user", [], "any", false, false, false, 102), "prenom", [], "any", false, false, false, 102)]]);
        echo "
                                    ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formset1"]) || array_key_exists("formset1", $context) ? $context["formset1"] : (function () { throw new RuntimeError('Variable "formset1" does not exist.', 103, $this->source); })()), "prenom", [], "any", false, false, false, 103), 'help');
        echo "
                                    <small id=\"fullNameHelp\" class=\"form-text text-muted\">Vous pouvez changez votre Nom et Prenom a tout moment.</small>
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formset1"]) || array_key_exists("formset1", $context) ? $context["formset1"] : (function () { throw new RuntimeError('Variable "formset1" does not exist.', 107, $this->source); })()), "date_naissance", [], "any", false, false, false, 107), 'label');
        echo "
                                    ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formset1"]) || array_key_exists("formset1", $context) ? $context["formset1"] : (function () { throw new RuntimeError('Variable "formset1" does not exist.', 108, $this->source); })()), "date_naissance", [], "any", false, false, false, 108), 'widget', ["attr" => ["value" => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 108, $this->source); })()), "user", [], "any", false, false, false, 108), "dateNaissance", [], "any", false, false, false, 108), "Y-m-d")]]);
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formset1"]) || array_key_exists("formset1", $context) ? $context["formset1"] : (function () { throw new RuntimeError('Variable "formset1" does not exist.', 111, $this->source); })()), "bio", [], "any", false, false, false, 111), 'label');
        echo "
                                    ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formset1"]) || array_key_exists("formset1", $context) ? $context["formset1"] : (function () { throw new RuntimeError('Variable "formset1" does not exist.', 112, $this->source); })()), "bio", [], "any", false, false, false, 112), 'widget', ["attr" => ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 112, $this->source); })()), "user", [], "any", false, false, false, 112), "bio", [], "any", false, false, false, 112)]]);
        echo "
                                    ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formset1"]) || array_key_exists("formset1", $context) ? $context["formset1"] : (function () { throw new RuntimeError('Variable "formset1" does not exist.', 113, $this->source); })()), "bio", [], "any", false, false, false, 113), 'help');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formset1"]) || array_key_exists("formset1", $context) ? $context["formset1"] : (function () { throw new RuntimeError('Variable "formset1" does not exist.', 116, $this->source); })()), "username", [], "any", false, false, false, 116), 'label');
        echo "
                                    ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formset1"]) || array_key_exists("formset1", $context) ? $context["formset1"] : (function () { throw new RuntimeError('Variable "formset1" does not exist.', 117, $this->source); })()), "username", [], "any", false, false, false, 117), 'widget', ["attr" => ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 117, $this->source); })()), "user", [], "any", false, false, false, 117), "username", [], "any", false, false, false, 117)]]);
        echo "
                                    ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formset1"]) || array_key_exists("formset1", $context) ? $context["formset1"] : (function () { throw new RuntimeError('Variable "formset1" does not exist.', 118, $this->source); })()), "username", [], "any", false, false, false, 118), 'help');
        echo "
                                    <small id=\"usernameHelp\" class=\"form-text text-muted\">Après avoir changé votre nom d'utilisateur, votre ancien nom d'utilisateur devient disponible pour toute autre personne.</small>
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formset1"]) || array_key_exists("formset1", $context) ? $context["formset1"] : (function () { throw new RuntimeError('Variable "formset1" does not exist.', 122, $this->source); })()), "email", [], "any", false, false, false, 122), 'label');
        echo "
                                    ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formset1"]) || array_key_exists("formset1", $context) ? $context["formset1"] : (function () { throw new RuntimeError('Variable "formset1" does not exist.', 123, $this->source); })()), "email", [], "any", false, false, false, 123), 'widget', ["attr" => ["value" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 123), "email", [], "any", true, true, false, 123) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 123), "email", [], "any", false, false, false, 123)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 123), "email", [], "any", false, false, false, 123)) : (" "))]]);
        echo "
                                    ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formset1"]) || array_key_exists("formset1", $context) ? $context["formset1"] : (function () { throw new RuntimeError('Variable "formset1" does not exist.', 124, $this->source); })()), "email", [], "any", false, false, false, 124), 'help');
        echo "
                                </div>
                                <div class=\"form-group small text-muted\">
                                    Tous les champs de cette page sont facultatifs et peuvent être supprimés à tout moment.En les remplissant, vous nous autorisez à partager ces données partout où votre profil d'utilisateur apparaît.
                                </div>
                                <button class=\"btn btn-primary\" type=\"submit\">Envoyez !</button>
                            ";
        // line 130
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formset1"]) || array_key_exists("formset1", $context) ? $context["formset1"] : (function () { throw new RuntimeError('Variable "formset1" does not exist.', 130, $this->source); })()), 'form_end');
        echo "
                        </div>
                        <div class=\"tab-pane\" id=\"account\">
                            ";
        // line 133
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formset2"]) || array_key_exists("formset2", $context) ? $context["formset2"] : (function () { throw new RuntimeError('Variable "formset2" does not exist.', 133, $this->source); })()), 'form_start');
        echo "
                            <h6>Information complémentaire</h6>
                            <hr>
                                <div class=\"form-group\">
                                    ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formset2"]) || array_key_exists("formset2", $context) ? $context["formset2"] : (function () { throw new RuntimeError('Variable "formset2" does not exist.', 137, $this->source); })()), "adresse_id", [], "any", false, false, false, 137), "cp", [], "any", false, false, false, 137), 'label');
        echo "

                                    ";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formset2"]) || array_key_exists("formset2", $context) ? $context["formset2"] : (function () { throw new RuntimeError('Variable "formset2" does not exist.', 139, $this->source); })()), "adresse_id", [], "any", false, false, false, 139), "cp", [], "any", false, false, false, 139), 'widget', ["attr" => ["value" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 139), "AdresseId", [], "any", false, true, false, 139), "cp", [], "any", true, true, false, 139) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 139), "AdresseId", [], "any", false, true, false, 139), "cp", [], "any", false, false, false, 139)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 139), "AdresseId", [], "any", false, true, false, 139), "cp", [], "any", false, false, false, 139)) : (" "))]]);
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formset2"]) || array_key_exists("formset2", $context) ? $context["formset2"] : (function () { throw new RuntimeError('Variable "formset2" does not exist.', 142, $this->source); })()), "adresse_id", [], "any", false, false, false, 142), "ville", [], "any", false, false, false, 142), 'label');
        echo "
                                    ";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formset2"]) || array_key_exists("formset2", $context) ? $context["formset2"] : (function () { throw new RuntimeError('Variable "formset2" does not exist.', 143, $this->source); })()), "adresse_id", [], "any", false, false, false, 143), "ville", [], "any", false, false, false, 143), 'widget', ["attr" => ["value" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 143), "AdresseId", [], "any", false, true, false, 143), "ville", [], "any", true, true, false, 143) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 143), "AdresseId", [], "any", false, true, false, 143), "ville", [], "any", false, false, false, 143)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 143), "AdresseId", [], "any", false, true, false, 143), "ville", [], "any", false, false, false, 143)) : (" "))]]);
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 146
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formset2"]) || array_key_exists("formset2", $context) ? $context["formset2"] : (function () { throw new RuntimeError('Variable "formset2" does not exist.', 146, $this->source); })()), "adresse_id", [], "any", false, false, false, 146), "rue", [], "any", false, false, false, 146), 'label');
        echo "
                                    ";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formset2"]) || array_key_exists("formset2", $context) ? $context["formset2"] : (function () { throw new RuntimeError('Variable "formset2" does not exist.', 147, $this->source); })()), "adresse_id", [], "any", false, false, false, 147), "rue", [], "any", false, false, false, 147), 'widget', ["attr" => ["value" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 147), "AdresseId", [], "any", false, true, false, 147), "rue", [], "any", true, true, false, 147) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 147), "AdresseId", [], "any", false, true, false, 147), "rue", [], "any", false, false, false, 147)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 147), "AdresseId", [], "any", false, true, false, 147), "rue", [], "any", false, false, false, 147)) : (" "))]]);
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formset2"]) || array_key_exists("formset2", $context) ? $context["formset2"] : (function () { throw new RuntimeError('Variable "formset2" does not exist.', 150, $this->source); })()), "adresse_id", [], "any", false, false, false, 150), "pays", [], "any", false, false, false, 150), 'label');
        echo "
                                    ";
        // line 151
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formset2"]) || array_key_exists("formset2", $context) ? $context["formset2"] : (function () { throw new RuntimeError('Variable "formset2" does not exist.', 151, $this->source); })()), "adresse_id", [], "any", false, false, false, 151), "pays", [], "any", false, false, false, 151), 'widget', ["attr" => ["value" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 151), "AdresseId", [], "any", false, true, false, 151), "pays", [], "any", true, true, false, 151) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 151), "AdresseId", [], "any", false, true, false, 151), "pays", [], "any", false, false, false, 151)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 151), "AdresseId", [], "any", false, true, false, 151), "pays", [], "any", false, false, false, 151)) : (" "))]]);
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formset2"]) || array_key_exists("formset2", $context) ? $context["formset2"] : (function () { throw new RuntimeError('Variable "formset2" does not exist.', 154, $this->source); })()), "adresse_id", [], "any", false, false, false, 154), 'help');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 157
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formset2"]) || array_key_exists("formset2", $context) ? $context["formset2"] : (function () { throw new RuntimeError('Variable "formset2" does not exist.', 157, $this->source); })()), "telephone", [], "any", false, false, false, 157), 'label');
        echo "
                                    ";
        // line 158
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formset2"]) || array_key_exists("formset2", $context) ? $context["formset2"] : (function () { throw new RuntimeError('Variable "formset2" does not exist.', 158, $this->source); })()), "telephone", [], "any", false, false, false, 158), 'widget', ["attr" => ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 158, $this->source); })()), "user", [], "any", false, false, false, 158), "telephone", [], "any", false, false, false, 158)]]);
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formset2"]) || array_key_exists("formset2", $context) ? $context["formset2"] : (function () { throw new RuntimeError('Variable "formset2" does not exist.', 161, $this->source); })()), "biere_favorite", [], "any", false, false, false, 161), 'label');
        echo "
                                    ";
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formset2"]) || array_key_exists("formset2", $context) ? $context["formset2"] : (function () { throw new RuntimeError('Variable "formset2" does not exist.', 162, $this->source); })()), "biere_favorite", [], "any", false, false, false, 162), 'widget', ["attr" => ["value" => twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 162, $this->source); })()), "user", [], "any", false, false, false, 162), "BiereFavorite", [], "any", false, false, false, 162), ",")]]);
        echo "
                                </div>

                                <button class=\"btn btn-primary\" type=\"submit\">Envoyez !</button>
                            ";
        // line 166
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formset2"]) || array_key_exists("formset2", $context) ? $context["formset2"] : (function () { throw new RuntimeError('Variable "formset2" does not exist.', 166, $this->source); })()), 'form_end');
        echo "
                        </div>
                        <div class=\"tab-pane\" id=\"security\">
                            <h6>Securiter</h6>
                            <hr>
                            <form method=\"post\">
                                ";
        // line 172
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formdp"]) || array_key_exists("formdp", $context) ? $context["formdp"] : (function () { throw new RuntimeError('Variable "formdp" does not exist.', 172, $this->source); })()), 'form_start');
        echo "
                                <div class=\"form-group\">
                                    <h5>Changer de mot de passe</h5>
                                    <label class=\"d-block\">Ancien mot de passe</label>
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Ancien mot de passe\" name=\"old_password\">
                                    ";
        // line 177
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formdp"]) || array_key_exists("formdp", $context) ? $context["formdp"] : (function () { throw new RuntimeError('Variable "formdp" does not exist.', 177, $this->source); })()), "password", [], "any", false, false, false, 177), 'label');
        echo "
                                    ";
        // line 178
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formdp"]) || array_key_exists("formdp", $context) ? $context["formdp"] : (function () { throw new RuntimeError('Variable "formdp" does not exist.', 178, $this->source); })()), "password", [], "any", false, false, false, 178), 'widget');
        echo "
                                </div>
                                <button class=\"btn btn-primary\" type=\"submit\">Envoyez !</button>
                                ";
        // line 181
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formdp"]) || array_key_exists("formdp", $context) ? $context["formdp"] : (function () { throw new RuntimeError('Variable "formdp" does not exist.', 181, $this->source); })()), 'form_end');
        echo "
                                    <hr>
                                    <div class=\"form-group\">
                                        <label class=\"d-block text-danger\">Supprimer le compte</label>
                                        <p class=\"text-muted font-size-sm\">Une fois que vous supprimez votre compte, il n'y a plus de retour en arrière. Soyez certain.</p>
                                    </div>
                                    <button class=\"btn btn-primary\" type=\"submit\">Envoyez !</button>
                            </form>
                        </div>
                        <div class=\"tab-pane\" id=\"notification\">
                            <h6>Notifications</h6>
                            <hr>
                            <form>
                                <div class=\"form-group\">
                                    <label class=\"d-block mb-0\">Alerts</label>
                                    <div class=\"small text-muted mb-3\">Recevez des notifications d'alerte de sécurité par e-mail</div>
                                    <div class=\"custom-control custom-checkbox\">
                                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck1\" checked=\"\">
                                        <label class=\"custom-control-label\" for=\"customCheck1\">E-mail chaque fois qu'une vulnérabilité est trouvée</label>
                                    </div>
                                </div>
                                <div class=\"form-group mb-0\">
                                    <label class=\"d-block\">Notifications</label>
                                    <ul class=\"list-group list-group-sm\">
                                        <li class=\"list-group-item \">
                                            Comments
                                            <div class=\"custom-control custom-control-nolabel custom-switch ml-auto\">
                                                <input type=\"checkbox\" class=\"custom-control-input\" id=\"customSwitch1\" checked=\"\">
                                                <label class=\"custom-control-label\" for=\"customSwitch1\"></label>
                                            </div>
                                        </li>
                                        <li class=\"list-group-item \">
                                            Mises à jour des personnes
                                            <div class=\"custom-control custom-control-nolabel custom-switch ml-auto\">
                                                <input type=\"checkbox\" class=\"custom-control-input\" id=\"customSwitch2\">
                                                <label class=\"custom-control-label\" for=\"customSwitch2\"></label>
                                            </div>
                                        </li>
                                        <li class=\"list-group-item \">
                                            Rappels
                                            <div class=\"custom-control custom-control-nolabel custom-switch ml-auto\">
                                                <input type=\"checkbox\" class=\"custom-control-input\" id=\"customSwitch3\" checked=\"\">
                                                <label class=\"custom-control-label\" for=\"customSwitch3\"></label>
                                            </div>
                                        </li>
                                        <li class=\"list-group-item \">
                                            Events
                                            <div class=\"custom-control custom-control-nolabel custom-switch ml-auto\">
                                                <input type=\"checkbox\" class=\"custom-control-input\" id=\"customSwitch4\" checked=\"\">
                                                <label class=\"custom-control-label\" for=\"customSwitch4\"></label>
                                            </div>
                                        </li>
                                        <li class=\"list-group-item \">
                                            Pages que vous suivez
                                            <div class=\"custom-control custom-control-nolabel custom-switch ml-auto\">
                                                <input type=\"checkbox\" class=\"custom-control-input\" id=\"customSwitch5\">
                                                <label class=\"custom-control-label\" for=\"customSwitch5\"></label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"activity\">
            <h5 class=\"mt-2\"><span class=\"fa fa-clock-o ion-clock float-right\"></span> Recent Activity</h5>
            <table class=\"table table-striped table-dark\">
                <tbody>
                <tr>
                    <td>
                        <strong>User</strong> s'est délecté de <strong>`La Chouf`</strong>
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>User</strong> s'est délecté de <strong>`La cuvée des trolls`</strong>
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>User</strong> a aimeée <strong>`Heineken`</strong>
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>User</strong> vien de mettre 5 etoile a <strong>`La Kronenbourg`</strong>
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>User</strong> a donée sont avis sur <strong>`La Leffe`</strong>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
</main>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "profil/settings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  442 => 181,  436 => 178,  432 => 177,  424 => 172,  415 => 166,  408 => 162,  404 => 161,  398 => 158,  394 => 157,  388 => 154,  382 => 151,  378 => 150,  372 => 147,  368 => 146,  362 => 143,  358 => 142,  352 => 139,  347 => 137,  340 => 133,  334 => 130,  325 => 124,  321 => 123,  317 => 122,  310 => 118,  306 => 117,  302 => 116,  296 => 113,  292 => 112,  288 => 111,  282 => 108,  278 => 107,  271 => 103,  267 => 102,  263 => 101,  257 => 98,  253 => 97,  249 => 96,  244 => 94,  220 => 73,  215 => 71,  209 => 68,  204 => 66,  174 => 39,  168 => 36,  162 => 33,  157 => 31,  137 => 13,  127 => 12,  114 => 9,  104 => 8,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello ProfilController!{% endblock %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href={{ asset('/css/profilsettings.css') }}>

{% endblock %}
{% block javascripts%}
    {{ parent() }}
{% endblock %}

{% block body %}

<main class=\"container\">

        <!-- Breadcrumb -->
        <nav aria-label=\"breadcrumb\" class=\"main-breadcrumb\" style=\"margin-top: 50px;\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
                <li class=\"breadcrumb-item\"><a href=\"javascript:void(0)\">User</a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Profile Settings</li>
            </ol>
        </nav>
        <!-- /Breadcrumb -->
        <main class=\"container\">
        <div class=\"d-flex justify-content-between main\">
            <div class=\"row col-sm\">
                <div class=\"card d-none d-md-block menu\">
                    <div class=\"card-header\">
                        <div class=\"text-center imageprofil\">
                            <img src=\"{{ asset(profil.user.ProfilImage ?? '/images/images.png') }}\" class=\"mx-auto img-fluid img-circle d-block\" alt=\"avatar\">
                            <h6 class=\"mt-2\">Upload a different photo</h6>
                            {{ form_start(formimg) }}
                            <label class=\"custom-file\">
                                <i class=\"fas fa-image\"></i>
                                {{ form_widget(formimg.profil_image) }}
                            </label>
                            <button class=\"btn btn-primary\" type=\"submit\">Envoyez !</button>
                            {{ form_end(formimg) }}
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Menu</h5>
                        <p class=\"card-text\">
                            <nav class=\"nav flex-column nav-pills\">
                                <a href=\"#profile\" data-toggle=\"tab\" class=\"nav-item nav-link  nav-link-faded active\"><i class=\"far fa-user\"></i> Profile Information
                                </a>
                                <a href=\"#account\" data-toggle=\"tab\" class=\"nav-item nav-link  nav-link-faded\">
                                    <i class=\"fas fa-users-cog\"></i> Account Settings
                                </a>
                                <a href=\"#security\" data-toggle=\"tab\" class=\"nav-item nav-link  nav-link-faded\">
                                    <i class=\"fas fa-shield-alt\"></i> Security
                                </a>
                                <a href=\"#notification\" data-toggle=\"tab\" class=\"nav-item nav-link  nav-link-faded\">
                                    <i class=\"far fa-bell\"></i> Notification
                                </a>
                            </nav>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-8 form\">
                <div class=\"card\">
                    <div class=\"card-header border-bottom mb-3 d-flex d-md-none\">
                        <div class=\"col-lg-4 order-lg-1 text-center imageprofil\">
                            <img src=\"{{ asset(profil.user.ProfilImage ?? '/images/images.png') }}\" class=\"mx-auto img-fluid img-circle d-block\" alt=\"avatar\">
                            <h6 class=\"mt-2\">Upload a different photo</h6>
                            {{ form_start(formimg2) }}
                            <label class=\"custom-file\">
                                <i class=\"fas fa-image\"></i>
                                {{ form_widget(formimg2.profil_image) }}
                            </label>
                            {{ form_end(formimg2) }}
                        </div>
                        <ul class=\"nav nav-tabs card-header-tabs nav-gap\" role=\"tablist\">
                            <li class=\"nav-item\">
                                <a href=\"#profile\" data-toggle=\"tab\" class=\"nav-link active\"><i class=\"far fa-user\"></i></a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"#account\" data-toggle=\"tab\" class=\"nav-link\"><i class=\"fas fa-users-cog\"></i></a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"#security\" data-toggle=\"tab\" class=\"nav-link \"><i class=\"fas fa-shield-alt\"></i></a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"#notification\" data-toggle=\"tab\" class=\"nav-link \"><i class=\"far fa-bell\"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"card-body tab-content\">
                        <div class=\"tab-pane active\" id=\"profile\">
                            <h6>Information du profile</h6>
                            <hr>
                                {{ form_start(formset1) }}
                                <div class=\"form-group\">
                                    {{ form_label(formset1.nom) }}
                                    {{ form_widget(formset1.nom, {'attr': {'value': profil.user.nom}}) }}
                                    {{ form_help(formset1.nom) }}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(formset1.prenom) }}
                                    {{ form_widget(formset1.prenom, {'attr': {'value': profil.user.prenom}}) }}
                                    {{ form_help(formset1.prenom) }}
                                    <small id=\"fullNameHelp\" class=\"form-text text-muted\">Vous pouvez changez votre Nom et Prenom a tout moment.</small>
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(formset1.date_naissance) }}
                                    {{ form_widget(formset1.date_naissance, {'attr' : {'value': profil.user.dateNaissance|date('Y-m-d')}}) }}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(formset1.bio) }}
                                    {{ form_widget(formset1.bio, {'attr': {'value': profil.user.bio}}) }}
                                    {{ form_help(formset1.bio) }}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(formset1.username) }}
                                    {{ form_widget(formset1.username, {'attr': {'value': profil.user.username}}) }}
                                    {{ form_help(formset1.username) }}
                                    <small id=\"usernameHelp\" class=\"form-text text-muted\">Après avoir changé votre nom d'utilisateur, votre ancien nom d'utilisateur devient disponible pour toute autre personne.</small>
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(formset1.email) }}
                                    {{ form_widget(formset1.email, {'attr': {'value': profil.user.email ?? ' '}}) }}
                                    {{ form_help(formset1.email) }}
                                </div>
                                <div class=\"form-group small text-muted\">
                                    Tous les champs de cette page sont facultatifs et peuvent être supprimés à tout moment.En les remplissant, vous nous autorisez à partager ces données partout où votre profil d'utilisateur apparaît.
                                </div>
                                <button class=\"btn btn-primary\" type=\"submit\">Envoyez !</button>
                            {{ form_end(formset1) }}
                        </div>
                        <div class=\"tab-pane\" id=\"account\">
                            {{ form_start(formset2) }}
                            <h6>Information complémentaire</h6>
                            <hr>
                                <div class=\"form-group\">
                                    {{ form_label(formset2.adresse_id.cp) }}

                                    {{ form_widget(formset2.adresse_id.cp, {'attr': {'value': profil.user.AdresseId.cp ?? ' '}} ) }}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(formset2.adresse_id.ville) }}
                                    {{ form_widget(formset2.adresse_id.ville, {'attr': {'value': profil.user.AdresseId.ville ?? ' '}} ) }}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(formset2.adresse_id.rue) }}
                                    {{ form_widget(formset2.adresse_id.rue, {'attr': {'value': profil.user.AdresseId.rue ?? \" \"}} ) }}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(formset2.adresse_id.pays) }}
                                    {{ form_widget(formset2.adresse_id.pays, {'attr': {'value': profil.user.AdresseId.pays ?? \" \"}} ) }}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_help(formset2.adresse_id) }}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(formset2.telephone) }}
                                    {{ form_widget(formset2.telephone, {'attr': {'value': profil.user.telephone}})}}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(formset2.biere_favorite) }}
                                    {{ form_widget(formset2.biere_favorite, {'attr': {'value': profil.user.BiereFavorite|join(',')}})}}
                                </div>

                                <button class=\"btn btn-primary\" type=\"submit\">Envoyez !</button>
                            {{ form_end(formset2) }}
                        </div>
                        <div class=\"tab-pane\" id=\"security\">
                            <h6>Securiter</h6>
                            <hr>
                            <form method=\"post\">
                                {{ form_start(formdp) }}
                                <div class=\"form-group\">
                                    <h5>Changer de mot de passe</h5>
                                    <label class=\"d-block\">Ancien mot de passe</label>
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Ancien mot de passe\" name=\"old_password\">
                                    {{ form_label(formdp.password) }}
                                    {{ form_widget(formdp.password) }}
                                </div>
                                <button class=\"btn btn-primary\" type=\"submit\">Envoyez !</button>
                                {{ form_end(formdp) }}
                                    <hr>
                                    <div class=\"form-group\">
                                        <label class=\"d-block text-danger\">Supprimer le compte</label>
                                        <p class=\"text-muted font-size-sm\">Une fois que vous supprimez votre compte, il n'y a plus de retour en arrière. Soyez certain.</p>
                                    </div>
                                    <button class=\"btn btn-primary\" type=\"submit\">Envoyez !</button>
                            </form>
                        </div>
                        <div class=\"tab-pane\" id=\"notification\">
                            <h6>Notifications</h6>
                            <hr>
                            <form>
                                <div class=\"form-group\">
                                    <label class=\"d-block mb-0\">Alerts</label>
                                    <div class=\"small text-muted mb-3\">Recevez des notifications d'alerte de sécurité par e-mail</div>
                                    <div class=\"custom-control custom-checkbox\">
                                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck1\" checked=\"\">
                                        <label class=\"custom-control-label\" for=\"customCheck1\">E-mail chaque fois qu'une vulnérabilité est trouvée</label>
                                    </div>
                                </div>
                                <div class=\"form-group mb-0\">
                                    <label class=\"d-block\">Notifications</label>
                                    <ul class=\"list-group list-group-sm\">
                                        <li class=\"list-group-item \">
                                            Comments
                                            <div class=\"custom-control custom-control-nolabel custom-switch ml-auto\">
                                                <input type=\"checkbox\" class=\"custom-control-input\" id=\"customSwitch1\" checked=\"\">
                                                <label class=\"custom-control-label\" for=\"customSwitch1\"></label>
                                            </div>
                                        </li>
                                        <li class=\"list-group-item \">
                                            Mises à jour des personnes
                                            <div class=\"custom-control custom-control-nolabel custom-switch ml-auto\">
                                                <input type=\"checkbox\" class=\"custom-control-input\" id=\"customSwitch2\">
                                                <label class=\"custom-control-label\" for=\"customSwitch2\"></label>
                                            </div>
                                        </li>
                                        <li class=\"list-group-item \">
                                            Rappels
                                            <div class=\"custom-control custom-control-nolabel custom-switch ml-auto\">
                                                <input type=\"checkbox\" class=\"custom-control-input\" id=\"customSwitch3\" checked=\"\">
                                                <label class=\"custom-control-label\" for=\"customSwitch3\"></label>
                                            </div>
                                        </li>
                                        <li class=\"list-group-item \">
                                            Events
                                            <div class=\"custom-control custom-control-nolabel custom-switch ml-auto\">
                                                <input type=\"checkbox\" class=\"custom-control-input\" id=\"customSwitch4\" checked=\"\">
                                                <label class=\"custom-control-label\" for=\"customSwitch4\"></label>
                                            </div>
                                        </li>
                                        <li class=\"list-group-item \">
                                            Pages que vous suivez
                                            <div class=\"custom-control custom-control-nolabel custom-switch ml-auto\">
                                                <input type=\"checkbox\" class=\"custom-control-input\" id=\"customSwitch5\">
                                                <label class=\"custom-control-label\" for=\"customSwitch5\"></label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"activity\">
            <h5 class=\"mt-2\"><span class=\"fa fa-clock-o ion-clock float-right\"></span> Recent Activity</h5>
            <table class=\"table table-striped table-dark\">
                <tbody>
                <tr>
                    <td>
                        <strong>User</strong> s'est délecté de <strong>`La Chouf`</strong>
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>User</strong> s'est délecté de <strong>`La cuvée des trolls`</strong>
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>User</strong> a aimeée <strong>`Heineken`</strong>
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>User</strong> vien de mettre 5 etoile a <strong>`La Kronenbourg`</strong>
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>User</strong> a donée sont avis sur <strong>`La Leffe`</strong>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
</main>

{% endblock %}", "profil/settings.html.twig", "C:\\Users\\aurel\\Desktop\\test projet biere\\aure_souf_fab\\templates\\profil\\settings.html.twig");
    }
}
