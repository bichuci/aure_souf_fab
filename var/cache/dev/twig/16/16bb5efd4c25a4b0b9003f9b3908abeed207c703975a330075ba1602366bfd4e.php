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
        echo "<main class=\"container\">

        <!-- Breadcrumb -->
        <nav aria-label=\"breadcrumb\" class=\"main-breadcrumb\">
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
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 30), "ProfilImage", [], "any", true, true, false, 30) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 30), "ProfilImage", [], "any", false, false, false, 30)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 30), "ProfilImage", [], "any", false, false, false, 30)) : ("/images/images.png"))), "html", null, true);
        echo "\" class=\"mx-auto img-fluid img-circle d-block\" alt=\"avatar\">
                            <h6 class=\"mt-2\">Upload a different photo</h6>
                            ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formimg"]) || array_key_exists("formimg", $context) ? $context["formimg"] : (function () { throw new RuntimeError('Variable "formimg" does not exist.', 32, $this->source); })()), 'form_start');
        echo "
                            <label class=\"custom-file\">
                                <i class=\"fas fa-image\"></i>
                                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formimg"]) || array_key_exists("formimg", $context) ? $context["formimg"] : (function () { throw new RuntimeError('Variable "formimg" does not exist.', 35, $this->source); })()), "profil_image", [], "any", false, false, false, 35), 'widget');
        echo "
                            </label>
                            <button class=\"btn btn-primary\" type=\"submit\">Envoyez !</button>
                            ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formimg"]) || array_key_exists("formimg", $context) ? $context["formimg"] : (function () { throw new RuntimeError('Variable "formimg" does not exist.', 38, $this->source); })()), 'form_end');
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
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 65), "ProfilImage", [], "any", true, true, false, 65) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 65), "ProfilImage", [], "any", false, false, false, 65)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 65), "ProfilImage", [], "any", false, false, false, 65)) : ("/images/images.png"))), "html", null, true);
        echo "\" class=\"mx-auto img-fluid img-circle d-block\" alt=\"avatar\">
                            <h6 class=\"mt-2\">Upload a different photo</h6>
                            ";
        // line 67
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formimg2"]) || array_key_exists("formimg2", $context) ? $context["formimg2"] : (function () { throw new RuntimeError('Variable "formimg2" does not exist.', 67, $this->source); })()), 'form_start');
        echo "
                            <label class=\"custom-file\">
                                <i class=\"fas fa-image\"></i>
                                ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formimg2"]) || array_key_exists("formimg2", $context) ? $context["formimg2"] : (function () { throw new RuntimeError('Variable "formimg2" does not exist.', 70, $this->source); })()), "profil_image", [], "any", false, false, false, 70), 'widget');
        echo "
                            </label>
                            ";
        // line 72
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formimg2"]) || array_key_exists("formimg2", $context) ? $context["formimg2"] : (function () { throw new RuntimeError('Variable "formimg2" does not exist.', 72, $this->source); })()), 'form_end');
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
        // line 93
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), 'form_start');
        echo "
                                <div class=\"form-group\">
                                    ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "nom", [], "any", false, false, false, 95), 'label');
        echo "
                                    ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "nom", [], "any", false, false, false, 96), 'widget', ["attr" => ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 96, $this->source); })()), "user", [], "any", false, false, false, 96), "nom", [], "any", false, false, false, 96)]]);
        echo "
                                    ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "nom", [], "any", false, false, false, 97), 'help');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "prenom", [], "any", false, false, false, 100), 'label');
        echo "
                                    ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "prenom", [], "any", false, false, false, 101), 'widget', ["attr" => ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 101, $this->source); })()), "user", [], "any", false, false, false, 101), "prenom", [], "any", false, false, false, 101)]]);
        echo "
                                    ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "prenom", [], "any", false, false, false, 102), 'help');
        echo "
                                    <small id=\"fullNameHelp\" class=\"form-text text-muted\">Vous pouvez changez votre Nom et Prenom a tout moment.</small>
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "date_naissance", [], "any", false, false, false, 106), 'label');
        echo "
                                    ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "date_naissance", [], "any", false, false, false, 107), 'widget', ["attr" => ["value" => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 107, $this->source); })()), "user", [], "any", false, false, false, 107), "dateNaissance", [], "any", false, false, false, 107), "Y-m-d")]]);
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "bio", [], "any", false, false, false, 110), 'label');
        echo "
                                    ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "bio", [], "any", false, false, false, 111), 'widget', ["attr" => ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 111, $this->source); })()), "user", [], "any", false, false, false, 111), "bio", [], "any", false, false, false, 111)]]);
        echo "
                                    ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "bio", [], "any", false, false, false, 112), 'help');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "username", [], "any", false, false, false, 115), 'label');
        echo "
                                    ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "username", [], "any", false, false, false, 116), 'widget', ["attr" => ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 116, $this->source); })()), "user", [], "any", false, false, false, 116), "username", [], "any", false, false, false, 116)]]);
        echo "
                                    ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "username", [], "any", false, false, false, 117), 'help');
        echo "
                                    <small id=\"usernameHelp\" class=\"form-text text-muted\">Après avoir changé votre nom d'utilisateur, votre ancien nom d'utilisateur devient disponible pour toute autre personne.</small>
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "email", [], "any", false, false, false, 121), 'label');
        echo "
                                    ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "email", [], "any", false, false, false, 122), 'widget', ["attr" => ["value" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 122), "email", [], "any", true, true, false, 122) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 122), "email", [], "any", false, false, false, 122)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 122), "email", [], "any", false, false, false, 122)) : (" "))]]);
        echo "
                                    ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "email", [], "any", false, false, false, 123), 'help');
        echo "
                                </div>
                                <div class=\"form-group small text-muted\">
                                    Tous les champs de cette page sont facultatifs et peuvent être supprimés à tout moment.En les remplissant, vous nous autorisez à partager ces données partout où votre profil d'utilisateur apparaît.
                                </div>
                                <button class=\"btn btn-primary\" type=\"submit\">Envoyez !</button>
                        </div>
                        <div class=\"tab-pane\" id=\"account\">
                            <h6>Information complémentaire</h6>
                            <hr>
                                <div class=\"form-group\">
                                    ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "adresse_id", [], "any", false, false, false, 134), "cp", [], "any", false, false, false, 134), 'label');
        echo "

                                    ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "adresse_id", [], "any", false, false, false, 136), "cp", [], "any", false, false, false, 136), 'widget', ["attr" => ["value" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 136), "AdresseId", [], "any", false, true, false, 136), "cp", [], "any", true, true, false, 136) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 136), "AdresseId", [], "any", false, true, false, 136), "cp", [], "any", false, false, false, 136)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 136), "AdresseId", [], "any", false, true, false, 136), "cp", [], "any", false, false, false, 136)) : (" "))]]);
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "adresse_id", [], "any", false, false, false, 139), "ville", [], "any", false, false, false, 139), 'label');
        echo "
                                    ";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), "adresse_id", [], "any", false, false, false, 140), "ville", [], "any", false, false, false, 140), 'widget', ["attr" => ["value" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 140), "AdresseId", [], "any", false, true, false, 140), "ville", [], "any", true, true, false, 140) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 140), "AdresseId", [], "any", false, true, false, 140), "ville", [], "any", false, false, false, 140)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 140), "AdresseId", [], "any", false, true, false, 140), "ville", [], "any", false, false, false, 140)) : (" "))]]);
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), "adresse_id", [], "any", false, false, false, 143), "rue", [], "any", false, false, false, 143), 'label');
        echo "
                                    ";
        // line 144
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 144, $this->source); })()), "adresse_id", [], "any", false, false, false, 144), "rue", [], "any", false, false, false, 144), 'widget', ["attr" => ["value" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 144), "AdresseId", [], "any", false, true, false, 144), "rue", [], "any", true, true, false, 144) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 144), "AdresseId", [], "any", false, true, false, 144), "rue", [], "any", false, false, false, 144)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 144), "AdresseId", [], "any", false, true, false, 144), "rue", [], "any", false, false, false, 144)) : (" "))]]);
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "adresse_id", [], "any", false, false, false, 147), "pays", [], "any", false, false, false, 147), 'label');
        echo "
                                    ";
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), "adresse_id", [], "any", false, false, false, 148), "pays", [], "any", false, false, false, 148), 'widget', ["attr" => ["value" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 148), "AdresseId", [], "any", false, true, false, 148), "pays", [], "any", true, true, false, 148) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 148), "AdresseId", [], "any", false, true, false, 148), "pays", [], "any", false, false, false, 148)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 148), "AdresseId", [], "any", false, true, false, 148), "pays", [], "any", false, false, false, 148)) : (" "))]]);
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 151
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "adresse_id", [], "any", false, false, false, 151), 'help');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 154, $this->source); })()), "telephone", [], "any", false, false, false, 154), 'label');
        echo "
                                    ";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 155, $this->source); })()), "telephone", [], "any", false, false, false, 155), 'widget', ["attr" => ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 155, $this->source); })()), "user", [], "any", false, false, false, 155), "telephone", [], "any", false, false, false, 155)]]);
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 158
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 158, $this->source); })()), "biere_favorite", [], "any", false, false, false, 158), 'label');
        echo "
                                    ";
        // line 159
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "biere_favorite", [], "any", false, false, false, 159), 'widget', ["attr" => ["value" => twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 159, $this->source); })()), "user", [], "any", false, false, false, 159), "BiereFavorite", [], "any", false, false, false, 159), ",")]]);
        echo "
                                </div>

                                <button class=\"btn btn-primary\" type=\"submit\">Envoyez !</button>
                                ";
        // line 163
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 163, $this->source); })()), 'form_end');
        echo "
                        </div>
                        <div class=\"tab-pane\" id=\"security\">
                            <h6>Securiter</h6>
                            <hr>
                            <form method=\"post\">
                                ";
        // line 169
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formdp"]) || array_key_exists("formdp", $context) ? $context["formdp"] : (function () { throw new RuntimeError('Variable "formdp" does not exist.', 169, $this->source); })()), 'form_start');
        echo "
                                <div class=\"form-group\">
                                    <h5>Changer de mot de passe</h5>
                                    <label class=\"d-block\">Ancien mot de passe</label>
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Ancien mot de passe\" name=\"old_password\">
                                    ";
        // line 174
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formdp"]) || array_key_exists("formdp", $context) ? $context["formdp"] : (function () { throw new RuntimeError('Variable "formdp" does not exist.', 174, $this->source); })()), "password", [], "any", false, false, false, 174), 'label');
        echo "
                                    ";
        // line 175
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formdp"]) || array_key_exists("formdp", $context) ? $context["formdp"] : (function () { throw new RuntimeError('Variable "formdp" does not exist.', 175, $this->source); })()), "password", [], "any", false, false, false, 175), 'widget');
        echo "
                                </div>
                                <button class=\"btn btn-primary\" type=\"submit\">Envoyez !</button>
                                ";
        // line 178
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formdp"]) || array_key_exists("formdp", $context) ? $context["formdp"] : (function () { throw new RuntimeError('Variable "formdp" does not exist.', 178, $this->source); })()), 'form_end');
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
        return array (  433 => 178,  427 => 175,  423 => 174,  415 => 169,  406 => 163,  399 => 159,  395 => 158,  389 => 155,  385 => 154,  379 => 151,  373 => 148,  369 => 147,  363 => 144,  359 => 143,  353 => 140,  349 => 139,  343 => 136,  338 => 134,  324 => 123,  320 => 122,  316 => 121,  309 => 117,  305 => 116,  301 => 115,  295 => 112,  291 => 111,  287 => 110,  281 => 107,  277 => 106,  270 => 102,  266 => 101,  262 => 100,  256 => 97,  252 => 96,  248 => 95,  243 => 93,  219 => 72,  214 => 70,  208 => 67,  203 => 65,  173 => 38,  167 => 35,  161 => 32,  156 => 30,  137 => 13,  127 => 12,  114 => 9,  104 => 8,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
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
        <nav aria-label=\"breadcrumb\" class=\"main-breadcrumb\">
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
                                {{ form_start(form) }}
                                <div class=\"form-group\">
                                    {{ form_label(form.nom) }}
                                    {{ form_widget(form.nom, {'attr': {'value': profil.user.nom}}) }}
                                    {{ form_help(form.nom) }}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(form.prenom) }}
                                    {{ form_widget(form.prenom, {'attr': {'value': profil.user.prenom}}) }}
                                    {{ form_help(form.prenom) }}
                                    <small id=\"fullNameHelp\" class=\"form-text text-muted\">Vous pouvez changez votre Nom et Prenom a tout moment.</small>
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(form.date_naissance) }}
                                    {{ form_widget(form.date_naissance, {'attr' : {'value': profil.user.dateNaissance|date('Y-m-d')}}) }}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(form.bio) }}
                                    {{ form_widget(form.bio, {'attr': {'value': profil.user.bio}}) }}
                                    {{ form_help(form.bio) }}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(form.username) }}
                                    {{ form_widget(form.username, {'attr': {'value': profil.user.username}}) }}
                                    {{ form_help(form.username) }}
                                    <small id=\"usernameHelp\" class=\"form-text text-muted\">Après avoir changé votre nom d'utilisateur, votre ancien nom d'utilisateur devient disponible pour toute autre personne.</small>
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(form.email) }}
                                    {{ form_widget(form.email, {'attr': {'value': profil.user.email ?? ' '}}) }}
                                    {{ form_help(form.email) }}
                                </div>
                                <div class=\"form-group small text-muted\">
                                    Tous les champs de cette page sont facultatifs et peuvent être supprimés à tout moment.En les remplissant, vous nous autorisez à partager ces données partout où votre profil d'utilisateur apparaît.
                                </div>
                                <button class=\"btn btn-primary\" type=\"submit\">Envoyez !</button>
                        </div>
                        <div class=\"tab-pane\" id=\"account\">
                            <h6>Information complémentaire</h6>
                            <hr>
                                <div class=\"form-group\">
                                    {{ form_label(form.adresse_id.cp) }}

                                    {{ form_widget(form.adresse_id.cp, {'attr': {'value': profil.user.AdresseId.cp ?? ' '}} ) }}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(form.adresse_id.ville) }}
                                    {{ form_widget(form.adresse_id.ville, {'attr': {'value': profil.user.AdresseId.ville ?? ' '}} ) }}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(form.adresse_id.rue) }}
                                    {{ form_widget(form.adresse_id.rue, {'attr': {'value': profil.user.AdresseId.rue ?? \" \"}} ) }}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(form.adresse_id.pays) }}
                                    {{ form_widget(form.adresse_id.pays, {'attr': {'value': profil.user.AdresseId.pays ?? \" \"}} ) }}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_help(form.adresse_id) }}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(form.telephone) }}
                                    {{ form_widget(form.telephone, {'attr': {'value': profil.user.telephone}})}}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(form.biere_favorite) }}
                                    {{ form_widget(form.biere_favorite, {'attr': {'value': profil.user.BiereFavorite|join(',')}})}}
                                </div>

                                <button class=\"btn btn-primary\" type=\"submit\">Envoyez !</button>
                                {{ form_end(form) }}
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

{% endblock %}", "profil/settings.html.twig", "C:\\Users\\Stagiaire\\Desktop\\git test\\templates\\profil\\settings.html.twig");
    }
}
