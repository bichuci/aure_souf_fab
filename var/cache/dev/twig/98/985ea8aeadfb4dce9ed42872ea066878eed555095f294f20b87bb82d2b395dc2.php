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

/* base.html.twig */
class __TwigTemplate_8b8bdf4d09b51809bbafe7dfdc96664d888662ce1a4dd2e0b6e98d01828fe105 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">

        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/home.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.15.1/css/all.css\" integrity=\"sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
        <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.7.1/dist/leaflet.css\" />


        ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "    </head>
    <body>
        <header>
            <!--Nav Bar-->
            <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark \" style=\"background-color:blue\" id=\"navbartop\">
                <a class=\"navbar-brand\" href=\"#\">Projet Biere</a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav mr-auto\">
                        <li class=\"nav-item \">
                            <a class=\"nav-link\" href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_index");
        echo "\">Accueil</a>
                        </li>
                        <li class=\"nav-item \">
                            <a class=\"nav-link\" href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("orm_bieres");
        echo "\">Les bières</a>
                        </li>
                        <li class=\"nav-item \">
                            <a class=\"nav-link\" href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("orm_brasseries");
        echo "\">Les brasseries</a>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown1\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                Catégories
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                <a class=\"dropdown-item\" href=\"#\">Bières Blonde</a>
                                <a class=\"dropdown-item\" href=\"#\">Bières Brune</a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"#\">Autres Bières</a>
                            </div>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Edition</a>
                        </li>
                    </ul>

                        ";
        // line 53
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53)) {
            // line 54
            echo "                            <li class=\"nav-link disabled\"> Bonjour ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54), "username", [], "any", false, false, false, 54), "html", null, true);
            echo "</li>
                            <a class=\"nav-link text-info\" href=\"";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" id=\"navbarDropdownconnect\" role=\"button\"  aria-haspopup=\"true\" aria-expanded=\"false\">
                                Déconnexion
                            </a>

                            <a class=\"nav-link text-info\" href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil_index", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "id", [], "any", false, false, false, 59)]), "html", null, true);
            echo "\" role=\"button\">Profil</a>
                        ";
        } else {
            // line 61
            echo "                            <a class=\"nav-link text-info\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" id=\"navbarDropdownconnect\" role=\"button\"  aria-haspopup=\"true\" aria-expanded=\"false\">
                                Connexion
                            </a>

                            <a class=\"nav-link text-info\" href=\"";
            // line 65
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\" id=\"navbarDropdownconnect\" role=\"button\" aria-expanded=\"false\">
                                S'inscrire
                            </a>
                        ";
        }
        // line 69
        echo "
                        ";
        // line 70
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 71
            echo "                        <a class=\"nav-link text-info\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
            echo "\" id=\"navbarDropdownconnect\" role=\"button\" aria-expanded=\"false\">
                            Zone admin
                        </a>
                        ";
        }
        // line 75
        echo "
                <form class=\"form-inline my-2 my-lg-1\">
                    <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Recherche\" aria-label=\"Search\">
                    <button class=\"btn btn-outline-info my-2 my-sm-0\" type=\"submit\">Recherche</button>
                </form>
                </div>
            </nav>
        </header>
            ";
        // line 83
        $this->displayBlock('body', $context, $blocks);
        // line 84
        echo "        <footer class=\"bg-dark mt-5\" style=\"color:white;\">
            <section>
                <div class=\"container d-flex justify-content-around text-center\">
                    <div class=\"col-lg-4 mt-2\">
                        <h6>Mentions Légales</h6>
                        <br>
                        <br>
                        <p class=\"mt-2 text-center\"><a href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mentions_legales");
        echo "\">Lien vers les mentions légales</a></p>
                    </div>
                    <div class=\"col-lg-4 mt-2\">
                        <h6>A propos</h6>
                        <p class=\"mt-2\">Site de referencement de bières FindBiereIndicator développer dans le cadre d'une poe \"Developpeur WEB Fullstack\" et \"WEB Designer\". Fait avec le soutient de toute l'équipe de formateur et dirigeant du centre de formation <i><a href=\"http://www.dawan.fr/\"> Dawan </a></i></p>
                    </div>
                    <div class=\"col-lg-4 mt-2\">
                        <h6>Liens utiles</h6>

                        <p><a href=\"#\">Contact</a></p>

                        <p><a href=\"http://www.dawan.fr/\">Site de DAWAN</a></p>

                        <p><a href=\"https://symfony.com/\">Site de Symfony</a></p>

                        <p><a href=\"https://www.php.net/\">Site de PHP</a></p>

                    </div>
                </div>
            </section>

            <div class=\" container col-lg-8 text-center mt-2\">
                <h6 id=\"relou\" class=\"mb-2\">Réseaux sociaux</h6>
                <div id=\"con\" class=\"row\">
                    <div class=\"d-flex justify-content-around\">
                        <a href=\"\" class=\"mr-1\"><i class=\"fab fa-facebook\"></i></a>
                        <p><a href=\"https://fr-fr.facebook.com/\">Facebook</a></p>
                    </div>
                    <div class=\"d-flex justify-content-around \">
                        <a href=\"\" class=\"mr-1\"><i class=\"fab fa-instagram\"></i></a>
                        <p><a href=\"https://www.instagram.com/?hl=fr\">Instagram</a></p>
                    </div>
                    <div class=\"d-flex justify-content-around \">
                        <a href=\"\" class=\"mr-1\"><i class=\"fab fa-twitter\"></i></a>
                        <p><a href=\"https://twitter.com/?lang=fr\">Twitter</a></p>
                    </div>
                    <div class=\"d-flex justify-content-around \">
                        <a href=\"mr-2\"><i class=\"fab fa-linkedin\"></i></a>
                        <p class=\"ml-1\"><a href=\"https://fr.linkedin.com/\">Linkedin</a></p>
                    </div>
                </div>
            </div>
            <div class=\"container col-lg-3 text-center mt-2\">
                <h6>Fait avec amour par :</h6>
                <p><a href=\"#\">Soufiane Rechia</a> &copy; DAWAN</p>
                <p><a href=\"https://www.linkedin.com/in/aurelien-walter-69487717a/\">Aurelien Walter</a> &copy; DAWAN</p>
                <p><a href=\"#\">Fabien Laurent</a> &copy; DAWAN</p>
            </div>
        </footer>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
        <script src=\"https://unpkg.com/leaflet@1.7.1/dist/leaflet.js\"></script>
        <script src=\"https://kit.fontawesome.com/4119f93ec8.js\" crossorigin=\"anonymous\"></script>

    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 83
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 83,  273 => 16,  254 => 5,  186 => 91,  177 => 84,  175 => 83,  165 => 75,  157 => 71,  155 => 70,  152 => 69,  145 => 65,  137 => 61,  132 => 59,  125 => 55,  120 => 54,  118 => 53,  97 => 35,  91 => 32,  85 => 29,  71 => 17,  69 => 16,  59 => 9,  52 => 5,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>

        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">

        <link rel=\"stylesheet\" href=\"{{ asset('css/home.css') }}\">
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.15.1/css/all.css\" integrity=\"sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
        <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.7.1/dist/leaflet.css\" />


        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        <header>
            <!--Nav Bar-->
            <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark \" style=\"background-color:blue\" id=\"navbartop\">
                <a class=\"navbar-brand\" href=\"#\">Projet Biere</a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav mr-auto\">
                        <li class=\"nav-item \">
                            <a class=\"nav-link\" href=\"{{ path('home_index') }}\">Accueil</a>
                        </li>
                        <li class=\"nav-item \">
                            <a class=\"nav-link\" href=\"{{ path('orm_bieres') }}\">Les bières</a>
                        </li>
                        <li class=\"nav-item \">
                            <a class=\"nav-link\" href=\"{{ path('orm_brasseries') }}\">Les brasseries</a>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown1\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                Catégories
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                <a class=\"dropdown-item\" href=\"#\">Bières Blonde</a>
                                <a class=\"dropdown-item\" href=\"#\">Bières Brune</a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"#\">Autres Bières</a>
                            </div>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Edition</a>
                        </li>
                    </ul>

                        {% if app.user %}
                            <li class=\"nav-link disabled\"> Bonjour {{ app.user.username }}</li>
                            <a class=\"nav-link text-info\" href=\"{{ path('app_logout') }}\" id=\"navbarDropdownconnect\" role=\"button\"  aria-haspopup=\"true\" aria-expanded=\"false\">
                                Déconnexion
                            </a>

                            <a class=\"nav-link text-info\" href=\"{{ path('profil_index', {'id': app.user.id}) }}\" role=\"button\">Profil</a>
                        {% else %}
                            <a class=\"nav-link text-info\" href=\"{{ path('app_login') }}\" id=\"navbarDropdownconnect\" role=\"button\"  aria-haspopup=\"true\" aria-expanded=\"false\">
                                Connexion
                            </a>

                            <a class=\"nav-link text-info\" href=\"{{ path('app_register') }}\" id=\"navbarDropdownconnect\" role=\"button\" aria-expanded=\"false\">
                                S'inscrire
                            </a>
                        {% endif %}

                        {% if is_granted('ROLE_ADMIN') %}
                        <a class=\"nav-link text-info\" href=\"{{ path('admin_index') }}\" id=\"navbarDropdownconnect\" role=\"button\" aria-expanded=\"false\">
                            Zone admin
                        </a>
                        {% endif %}

                <form class=\"form-inline my-2 my-lg-1\">
                    <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Recherche\" aria-label=\"Search\">
                    <button class=\"btn btn-outline-info my-2 my-sm-0\" type=\"submit\">Recherche</button>
                </form>
                </div>
            </nav>
        </header>
            {% block body %}{% endblock %}
        <footer class=\"bg-dark mt-5\" style=\"color:white;\">
            <section>
                <div class=\"container d-flex justify-content-around text-center\">
                    <div class=\"col-lg-4 mt-2\">
                        <h6>Mentions Légales</h6>
                        <br>
                        <br>
                        <p class=\"mt-2 text-center\"><a href=\"{{ path('mentions_legales') }}\">Lien vers les mentions légales</a></p>
                    </div>
                    <div class=\"col-lg-4 mt-2\">
                        <h6>A propos</h6>
                        <p class=\"mt-2\">Site de referencement de bières FindBiereIndicator développer dans le cadre d'une poe \"Developpeur WEB Fullstack\" et \"WEB Designer\". Fait avec le soutient de toute l'équipe de formateur et dirigeant du centre de formation <i><a href=\"http://www.dawan.fr/\"> Dawan </a></i></p>
                    </div>
                    <div class=\"col-lg-4 mt-2\">
                        <h6>Liens utiles</h6>

                        <p><a href=\"#\">Contact</a></p>

                        <p><a href=\"http://www.dawan.fr/\">Site de DAWAN</a></p>

                        <p><a href=\"https://symfony.com/\">Site de Symfony</a></p>

                        <p><a href=\"https://www.php.net/\">Site de PHP</a></p>

                    </div>
                </div>
            </section>

            <div class=\" container col-lg-8 text-center mt-2\">
                <h6 id=\"relou\" class=\"mb-2\">Réseaux sociaux</h6>
                <div id=\"con\" class=\"row\">
                    <div class=\"d-flex justify-content-around\">
                        <a href=\"\" class=\"mr-1\"><i class=\"fab fa-facebook\"></i></a>
                        <p><a href=\"https://fr-fr.facebook.com/\">Facebook</a></p>
                    </div>
                    <div class=\"d-flex justify-content-around \">
                        <a href=\"\" class=\"mr-1\"><i class=\"fab fa-instagram\"></i></a>
                        <p><a href=\"https://www.instagram.com/?hl=fr\">Instagram</a></p>
                    </div>
                    <div class=\"d-flex justify-content-around \">
                        <a href=\"\" class=\"mr-1\"><i class=\"fab fa-twitter\"></i></a>
                        <p><a href=\"https://twitter.com/?lang=fr\">Twitter</a></p>
                    </div>
                    <div class=\"d-flex justify-content-around \">
                        <a href=\"mr-2\"><i class=\"fab fa-linkedin\"></i></a>
                        <p class=\"ml-1\"><a href=\"https://fr.linkedin.com/\">Linkedin</a></p>
                    </div>
                </div>
            </div>
            <div class=\"container col-lg-3 text-center mt-2\">
                <h6>Fait avec amour par :</h6>
                <p><a href=\"#\">Soufiane Rechia</a> &copy; DAWAN</p>
                <p><a href=\"https://www.linkedin.com/in/aurelien-walter-69487717a/\">Aurelien Walter</a> &copy; DAWAN</p>
                <p><a href=\"#\">Fabien Laurent</a> &copy; DAWAN</p>
            </div>
        </footer>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
        <script src=\"https://unpkg.com/leaflet@1.7.1/dist/leaflet.js\"></script>
        <script src=\"https://kit.fontawesome.com/4119f93ec8.js\" crossorigin=\"anonymous\"></script>

    </body>
</html>
", "base.html.twig", "C:\\Users\\Stagiaire\\Desktop\\git test\\templates\\base.html.twig");
    }
}
