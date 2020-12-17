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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formset1"]) || array_key_exists("formset1", $context) ? $context["formset1"] : (function () { throw new RuntimeError('Variable "formset1" does not exist.', 93, $this->source); })()), 'form_start');
        echo "
                                <div class=\"form-group\">
                                    ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formset1"]) || array_key_exists("formset1", $context) ? $context["formset1"] : (function () { throw new RuntimeError('Variable "formset1" does not exist.', 95, $this->source); })()), "nom", [], "any", false, false, false, 95), 'label');
        echo "
                                    ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formset1"]) || array_key_exists("formset1", $context) ? $context["formset1"] : (function () { throw new RuntimeError('Variable "formset1" does not exist.', 96, $this->source); })()), "nom", [], "any", false, false, false, 96), 'widget', ["attr" => ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 96, $this->source); })()), "user", [], "any", false, false, false, 96), "nom", [], "any", false, false, false, 96)]]);
        echo "
                                    ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formset1"]) || array_key_exists("formset1", $context) ? $context["formset1"] : (function () { throw new RuntimeError('Variable "formset1" does not exist.', 97, $this->source); })()), "nom", [], "any", false, false, false, 97), 'help');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formset1"]) || array_key_exists("formset1", $context) ? $context["formset1"] : (function () { throw new RuntimeError('Variable "formset1" does not exist.', 100, $this->source); })()), "prenom", [], "any", false, false, false, 100), 'label');
        echo "
                                    ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formset1"]) || array_key_exists("formset1", $context) ? $context["formset1"] : (function () { throw new RuntimeError('Variable "formset1" does not exist.', 101, $this->source); })()), "prenom", [], "any", false, false, false, 101), 'widget', ["attr" => ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 101, $this->source); })()), "user", [], "any", false, false, false, 101), "prenom", [], "any", false, false, false, 101)]]);
        echo "
                                    ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formset1"]) || array_key_exists("formset1", $context) ? $context["formset1"] : (function () { throw new RuntimeError('Variable "formset1" does not exist.', 102, $this->source); })()), "prenom", [], "any", false, false, false, 102), 'help');
        echo "
                                    <small id=\"fullNameHelp\" class=\"form-text text-muted\">Vous pouvez changez votre Nom et Prenom a tout moment.</small>
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formset1"]) || array_key_exists("formset1", $context) ? $context["formset1"] : (function () { throw new RuntimeError('Variable "formset1" does not exist.', 106, $this->source); })()), "date_naissance", [], "any", false, false, false, 106), 'label');
        echo "
                                    ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formset1"]) || array_key_exists("formset1", $context) ? $context["formset1"] : (function () { throw new RuntimeError('Variable "formset1" does not exist.', 107, $this->source); })()), "date_naissance", [], "any", false, false, false, 107), 'widget', ["attr" => ["value" => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 107, $this->source); })()), "user", [], "any", false, false, false, 107), "dateNaissance", [], "any", false, false, false, 107), "Y-m-d")]]);
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formset1"]) || array_key_exists("formset1", $context) ? $context["formset1"] : (function () { throw new RuntimeError('Variable "formset1" does not exist.', 110, $this->source); })()), "bio", [], "any", false, false, false, 110), 'label');
        echo "
                                    ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formset1"]) || array_key_exists("formset1", $context) ? $context["formset1"] : (function () { throw new RuntimeError('Variable "formset1" does not exist.', 111, $this->source); })()), "bio", [], "any", false, false, false, 111), 'widget', ["attr" => ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 111, $this->source); })()), "user", [], "any", false, false, false, 111), "bio", [], "any", false, false, false, 111)]]);
        echo "
                                    ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formset1"]) || array_key_exists("formset1", $context) ? $context["formset1"] : (function () { throw new RuntimeError('Variable "formset1" does not exist.', 112, $this->source); })()), "bio", [], "any", false, false, false, 112), 'help');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formset1"]) || array_key_exists("formset1", $context) ? $context["formset1"] : (function () { throw new RuntimeError('Variable "formset1" does not exist.', 115, $this->source); })()), "username", [], "any", false, false, false, 115), 'label');
        echo "
                                    ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formset1"]) || array_key_exists("formset1", $context) ? $context["formset1"] : (function () { throw new RuntimeError('Variable "formset1" does not exist.', 116, $this->source); })()), "username", [], "any", false, false, false, 116), 'widget', ["attr" => ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 116, $this->source); })()), "user", [], "any", false, false, false, 116), "username", [], "any", false, false, false, 116)]]);
        echo "
                                    ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formset1"]) || array_key_exists("formset1", $context) ? $context["formset1"] : (function () { throw new RuntimeError('Variable "formset1" does not exist.', 117, $this->source); })()), "username", [], "any", false, false, false, 117), 'help');
        echo "
                                    <small id=\"usernameHelp\" class=\"form-text text-muted\">Après avoir changé votre nom d'utilisateur, votre ancien nom d'utilisateur devient disponible pour toute autre personne.</small>
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formset1"]) || array_key_exists("formset1", $context) ? $context["formset1"] : (function () { throw new RuntimeError('Variable "formset1" does not exist.', 121, $this->source); })()), "email", [], "any", false, false, false, 121), 'label');
        echo "
                                    ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formset1"]) || array_key_exists("formset1", $context) ? $context["formset1"] : (function () { throw new RuntimeError('Variable "formset1" does not exist.', 122, $this->source); })()), "email", [], "any", false, false, false, 122), 'widget', ["attr" => ["value" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 122), "email", [], "any", true, true, false, 122) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 122), "email", [], "any", false, false, false, 122)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 122), "email", [], "any", false, false, false, 122)) : (" "))]]);
        echo "
                                    ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formset1"]) || array_key_exists("formset1", $context) ? $context["formset1"] : (function () { throw new RuntimeError('Variable "formset1" does not exist.', 123, $this->source); })()), "email", [], "any", false, false, false, 123), 'help');
        echo "
                                </div>
                                <div class=\"form-group small text-muted\">
                                    Tous les champs de cette page sont facultatifs et peuvent être supprimés à tout moment.En les remplissant, vous nous autorisez à partager ces données partout où votre profil d'utilisateur apparaît.
                                </div>
                                <button class=\"btn btn-primary\" type=\"submit\">Envoyez !</button>
                            ";
        // line 129
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formset1"]) || array_key_exists("formset1", $context) ? $context["formset1"] : (function () { throw new RuntimeError('Variable "formset1" does not exist.', 129, $this->source); })()), 'form_end');
        echo "
                        </div>
                        <div class=\"tab-pane\" id=\"account\">
                            ";
        // line 132
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formset2"]) || array_key_exists("formset2", $context) ? $context["formset2"] : (function () { throw new RuntimeError('Variable "formset2" does not exist.', 132, $this->source); })()), 'form_start');
        echo "
                            <h6>Information complémentaire</h6>
                            <hr>
                                <div class=\"form-group\">
                                    ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formset2"]) || array_key_exists("formset2", $context) ? $context["formset2"] : (function () { throw new RuntimeError('Variable "formset2" does not exist.', 136, $this->source); })()), "adresse_id", [], "any", false, false, false, 136), "cp", [], "any", false, false, false, 136), 'label');
        echo "

                                    ";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formset2"]) || array_key_exists("formset2", $context) ? $context["formset2"] : (function () { throw new RuntimeError('Variable "formset2" does not exist.', 138, $this->source); })()), "adresse_id", [], "any", false, false, false, 138), "cp", [], "any", false, false, false, 138), 'widget', ["attr" => ["value" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 138), "AdresseId", [], "any", false, true, false, 138), "cp", [], "any", true, true, false, 138) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 138), "AdresseId", [], "any", false, true, false, 138), "cp", [], "any", false, false, false, 138)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 138), "AdresseId", [], "any", false, true, false, 138), "cp", [], "any", false, false, false, 138)) : (" "))]]);
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formset2"]) || array_key_exists("formset2", $context) ? $context["formset2"] : (function () { throw new RuntimeError('Variable "formset2" does not exist.', 141, $this->source); })()), "adresse_id", [], "any", false, false, false, 141), "ville", [], "any", false, false, false, 141), 'label');
        echo "
                                    ";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formset2"]) || array_key_exists("formset2", $context) ? $context["formset2"] : (function () { throw new RuntimeError('Variable "formset2" does not exist.', 142, $this->source); })()), "adresse_id", [], "any", false, false, false, 142), "ville", [], "any", false, false, false, 142), 'widget', ["attr" => ["value" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 142), "AdresseId", [], "any", false, true, false, 142), "ville", [], "any", true, true, false, 142) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 142), "AdresseId", [], "any", false, true, false, 142), "ville", [], "any", false, false, false, 142)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 142), "AdresseId", [], "any", false, true, false, 142), "ville", [], "any", false, false, false, 142)) : (" "))]]);
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 145
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formset2"]) || array_key_exists("formset2", $context) ? $context["formset2"] : (function () { throw new RuntimeError('Variable "formset2" does not exist.', 145, $this->source); })()), "adresse_id", [], "any", false, false, false, 145), "rue", [], "any", false, false, false, 145), 'label');
        echo "
                                    ";
        // line 146
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formset2"]) || array_key_exists("formset2", $context) ? $context["formset2"] : (function () { throw new RuntimeError('Variable "formset2" does not exist.', 146, $this->source); })()), "adresse_id", [], "any", false, false, false, 146), "rue", [], "any", false, false, false, 146), 'widget', ["attr" => ["value" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 146), "AdresseId", [], "any", false, true, false, 146), "rue", [], "any", true, true, false, 146) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 146), "AdresseId", [], "any", false, true, false, 146), "rue", [], "any", false, false, false, 146)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 146), "AdresseId", [], "any", false, true, false, 146), "rue", [], "any", false, false, false, 146)) : (" "))]]);
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formset2"]) || array_key_exists("formset2", $context) ? $context["formset2"] : (function () { throw new RuntimeError('Variable "formset2" does not exist.', 149, $this->source); })()), "adresse_id", [], "any", false, false, false, 149), "pays", [], "any", false, false, false, 149), 'label');
        echo "
                                    ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formset2"]) || array_key_exists("formset2", $context) ? $context["formset2"] : (function () { throw new RuntimeError('Variable "formset2" does not exist.', 150, $this->source); })()), "adresse_id", [], "any", false, false, false, 150), "pays", [], "any", false, false, false, 150), 'widget', ["attr" => ["value" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 150), "AdresseId", [], "any", false, true, false, 150), "pays", [], "any", true, true, false, 150) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 150), "AdresseId", [], "any", false, true, false, 150), "pays", [], "any", false, false, false, 150)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profil"] ?? null), "user", [], "any", false, true, false, 150), "AdresseId", [], "any", false, true, false, 150), "pays", [], "any", false, false, false, 150)) : (" "))]]);
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 153
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formset2"]) || array_key_exists("formset2", $context) ? $context["formset2"] : (function () { throw new RuntimeError('Variable "formset2" does not exist.', 153, $this->source); })()), "adresse_id", [], "any", false, false, false, 153), 'help');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formset2"]) || array_key_exists("formset2", $context) ? $context["formset2"] : (function () { throw new RuntimeError('Variable "formset2" does not exist.', 156, $this->source); })()), "telephone", [], "any", false, false, false, 156), 'label');
        echo "
                                    ";
        // line 157
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formset2"]) || array_key_exists("formset2", $context) ? $context["formset2"] : (function () { throw new RuntimeError('Variable "formset2" does not exist.', 157, $this->source); })()), "telephone", [], "any", false, false, false, 157), 'widget', ["attr" => ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 157, $this->source); })()), "user", [], "any", false, false, false, 157), "telephone", [], "any", false, false, false, 157)]]);
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 160
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formset2"]) || array_key_exists("formset2", $context) ? $context["formset2"] : (function () { throw new RuntimeError('Variable "formset2" does not exist.', 160, $this->source); })()), "biere_favorite", [], "any", false, false, false, 160), 'label');
        echo "
                                    ";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formset2"]) || array_key_exists("formset2", $context) ? $context["formset2"] : (function () { throw new RuntimeError('Variable "formset2" does not exist.', 161, $this->source); })()), "biere_favorite", [], "any", false, false, false, 161), 'widget', ["attr" => ["value" => twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 161, $this->source); })()), "user", [], "any", false, false, false, 161), "BiereFavorite", [], "any", false, false, false, 161), ",")]]);
        echo "
                                </div>

                                <button class=\"btn btn-primary\" type=\"submit\">Envoyez !</button>
                            ";
        // line 165
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formset2"]) || array_key_exists("formset2", $context) ? $context["formset2"] : (function () { throw new RuntimeError('Variable "formset2" does not exist.', 165, $this->source); })()), 'form_end');
        echo "
                        </div>
                        <div class=\"tab-pane\" id=\"security\">
                            <h6>Securiter</h6>
                            <hr>
                            <form method=\"post\">
                                ";
        // line 171
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formdp"]) || array_key_exists("formdp", $context) ? $context["formdp"] : (function () { throw new RuntimeError('Variable "formdp" does not exist.', 171, $this->source); })()), 'form_start');
        echo "
                                <div class=\"form-group\">
                                    <h5>Changer de mot de passe</h5>
                                    <label class=\"d-block\">Ancien mot de passe</label>
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Ancien mot de passe\" name=\"old_password\">
                                    ";
        // line 176
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formdp"]) || array_key_exists("formdp", $context) ? $context["formdp"] : (function () { throw new RuntimeError('Variable "formdp" does not exist.', 176, $this->source); })()), "password", [], "any", false, false, false, 176), 'label');
        echo "
                                    ";
        // line 177
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formdp"]) || array_key_exists("formdp", $context) ? $context["formdp"] : (function () { throw new RuntimeError('Variable "formdp" does not exist.', 177, $this->source); })()), "password", [], "any", false, false, false, 177), 'widget');
        echo "
                                </div>
                                <button class=\"btn btn-primary\" type=\"submit\">Envoyez !</button>
                                ";
        // line 180
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formdp"]) || array_key_exists("formdp", $context) ? $context["formdp"] : (function () { throw new RuntimeError('Variable "formdp" does not exist.', 180, $this->source); })()), 'form_end');
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
        return array (  441 => 180,  435 => 177,  431 => 176,  423 => 171,  414 => 165,  407 => 161,  403 => 160,  397 => 157,  393 => 156,  387 => 153,  381 => 150,  377 => 149,  371 => 146,  367 => 145,  361 => 142,  357 => 141,  351 => 138,  346 => 136,  339 => 132,  333 => 129,  324 => 123,  320 => 122,  316 => 121,  309 => 117,  305 => 116,  301 => 115,  295 => 112,  291 => 111,  287 => 110,  281 => 107,  277 => 106,  270 => 102,  266 => 101,  262 => 100,  256 => 97,  252 => 96,  248 => 95,  243 => 93,  219 => 72,  214 => 70,  208 => 67,  203 => 65,  173 => 38,  167 => 35,  161 => 32,  156 => 30,  137 => 13,  127 => 12,  114 => 9,  104 => 8,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
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

{% endblock %}", "profil/settings.html.twig", "C:\\Users\\Rechia\\Desktop\\Projet\\templates\\profil\\settings.html.twig");
    }
}
