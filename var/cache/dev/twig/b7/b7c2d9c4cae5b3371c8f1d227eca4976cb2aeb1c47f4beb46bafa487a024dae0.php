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

/* orm/listBieresDetails.html.twig */
class __TwigTemplate_a8ca8b6db638fa75ea07f74142ccf9d30796a3eaec08aaa58e9f34bc50c7b0e8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "orm/listBieresDetails.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "orm/listBieresDetails.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "orm/listBieresDetails.html.twig", 1);
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

        echo "Detail bière";
        
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

    <header>
        <main class=\"container\">
            <section class=\"row\">
                <!-- Carte du produit -->
                <div class=\"col-lg-8\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h2 class=\"card-title\">";
        // line 15
        (((twig_get_attribute($this->env, $this->source, ($context["bieres"] ?? null), "nom", [], "any", true, true, false, 15) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["bieres"] ?? null), "nom", [], "any", false, false, false, 15)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["bieres"] ?? null), "nom", [], "any", false, false, false, 15), "html", null, true))) : (print ("Titre non renseigné")));
        echo " </h2>
                        </div>
                        <div class=\"card-body bg-light\">
                            <p class=\"card-text\"><small class=\"text-muted\">Last updated 3 mins ago</small></p>
                        </div>
                        <img src=\"./img/img1.jpg\" class=\"card-img-bottom\" alt=\"...\">
                    </div>
                </div>
                <!-- Carte utilisateur/brasseur -->
                <div class=\"col-lg-4\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h4 class=\"card-title\">";
        // line 27
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["bieres"] ?? null), "brasserieId", [], "any", false, true, false, 27), "nom", [], "any", true, true, false, 27) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["bieres"] ?? null), "brasserieId", [], "any", false, true, false, 27), "nom", [], "any", false, false, false, 27)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["bieres"] ?? null), "brasserieId", [], "any", false, true, false, 27), "nom", [], "any", false, false, false, 27), "html", null, true))) : (print ("Nom de la brasserie non renseigné")));
        echo "</h4>
                            <h6 class=\"card-subtitle mb-2 text-muted\">";
        // line 28
        echo twig_escape_filter($this->env, ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["bieres"]) || array_key_exists("bieres", $context) ? $context["bieres"] : (function () { throw new RuntimeError('Variable "bieres" does not exist.', 28, $this->source); })()), "brasserieId", [], "any", false, false, false, 28), "adresse", [], "any", false, false, false, 28), "rue", [], "any", false, false, false, 28) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["bieres"]) || array_key_exists("bieres", $context) ? $context["bieres"] : (function () { throw new RuntimeError('Variable "bieres" does not exist.', 28, $this->source); })()), "brasserieId", [], "any", false, false, false, 28), "adresse", [], "any", false, false, false, 28), "cp", [], "any", false, false, false, 28)) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["bieres"]) || array_key_exists("bieres", $context) ? $context["bieres"] : (function () { throw new RuntimeError('Variable "bieres" does not exist.', 28, $this->source); })()), "brasserieId", [], "any", false, false, false, 28), "adresse", [], "any", false, false, false, 28), "ville", [], "any", false, false, false, 28)), "html", null, true);
        echo "</h6>
                        </div>
                        <div class=\"card-body\">
                            <p class=\"card-text\">
                                ";
        // line 32
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["bieres"] ?? null), "brasserieId", [], "any", false, true, false, 32), "description", [], "any", true, true, false, 32) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["bieres"] ?? null), "brasserieId", [], "any", false, true, false, 32), "description", [], "any", false, false, false, 32)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["bieres"] ?? null), "brasserieId", [], "any", false, true, false, 32), "description", [], "any", false, false, false, 32), "html", null, true))) : (print ("Description de brasserie non renseigné")));
        echo "
                            </p>
                            <p class=\"card-text\">
                            ";
        // line 35
        (((twig_get_attribute($this->env, $this->source, ($context["bieres"] ?? null), "description", [], "any", true, true, false, 35) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["bieres"] ?? null), "description", [], "any", false, false, false, 35)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["bieres"] ?? null), "description", [], "any", false, false, false, 35), "html", null, true))) : (print ("Description non renseigné")));
        echo "
                            </p>
                            <p>
                                <a href=\"#\" class=\"card-link\">Différents lien potentiels vers ses publications</a>
                            </p>
                            <p>
                                <a href=\"#\" class=\"card-link\">Différents lien potentiels</a>
                            </p>
                            <p>
                                <a href=\"#\" class=\"card-link\">Différents lien potentiels</a>
                            </p>
                            <div class=\"mt-2\">
                                <span class=\"badge badge-pill badge-primary\">Utilisateur</span>
                                <span class=\"badge badge-pill badge-secondary\">Brasseur</span>
                                <span class=\"badge badge-pill badge-success\">Indépendant</span>
                                <span class=\"badge badge-pill badge-danger\">Modérateur</span>
                            </div>
                        </div>
                        <div class=\"pb-2 text-center\">
                            <span class=\"badge badge-pill badge-warning\">";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["bieres"]) || array_key_exists("bieres", $context) ? $context["bieres"] : (function () { throw new RuntimeError('Variable "bieres" does not exist.', 54, $this->source); })()), "categorieId", [], "any", false, false, false, 54), "nom", [], "any", false, false, false, 54), "html", null, true);
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
                </div>
            </section>

            <!-- Carte du Produit-->
            <section class=\"mt-2\">
                <!-- Card descriptif produit -->
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3>Description du produit/Caractéristiques etc..</h3>
                    </div>
                    <div class=\"card-body\">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus ut quam minima tenetur voluptatem fugiat expedita maxime, quis voluptatibus officiis dolores atque fugit ratione libero est perspiciatis rem minus deleniti?Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, sapiente. Possimus mollitia eveniet doloremque doloribus, officiis optio quos aut ad vero ipsa a pariatur, magnam eos autem ullam deleniti illo?
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus ut quam minima tenetur voluptatem fugiat expedita maxime, quis voluptatibus officiis dolores atque fugit ratione libero est perspiciatis rem minus deleniti?Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, sapiente. Possimus mollitia eveniet doloremque doloribus, officiis optio quos aut ad vero ipsa a pariatur, magnam eos autem ullam deleniti illo?
                        </p>
                    </div>
                    <!-- Carousel des produits phares/Similaires -->
                    <div class=\"card-footer\" id=\"carousel\">
                        <article id=\"carouselProduct\">
                            <div id=\"carouselExampleFade\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\">
                                <div class=\"carousel-inner h-100\">
                                    <div class=\"carousel-item active h-100\">
                                        <img src=\"./img/img3.jpg\" class=\"d-block w-100\" alt=\"...\">
                                    </div>
                                    <div class=\"carousel-item h-100\">
                                        <img src=\"./img/img1.jpg\" class=\"d-block w-100\" alt=\"...\">
                                    </div>
                                    <div class=\"carousel-item h-100\">
                                        <img src=\"./img/img3.jpg\" class=\"d-block w-100\" alt=\"...\">
                                    </div>
                                </div>
                                <a class=\"carousel-control-prev\" href=\"#carouselExampleFade\" role=\"button\" data-slide=\"prev\">
                                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                    <span class=\"sr-only\">Previous</span>
                                </a>
                                <a class=\"carousel-control-next\" href=\"#carouselExampleFade\" role=\"button\" data-slide=\"next\">
                                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                    <span class=\"sr-only\">Next</span>
                                </a>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
        </main>
    </header>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "orm/listBieresDetails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 54,  131 => 35,  125 => 32,  118 => 28,  114 => 27,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Detail bière{% endblock %}

{% block body %}


    <header>
        <main class=\"container\">
            <section class=\"row\">
                <!-- Carte du produit -->
                <div class=\"col-lg-8\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h2 class=\"card-title\">{{ bieres.nom ?? 'Titre non renseigné'}} </h2>
                        </div>
                        <div class=\"card-body bg-light\">
                            <p class=\"card-text\"><small class=\"text-muted\">Last updated 3 mins ago</small></p>
                        </div>
                        <img src=\"./img/img1.jpg\" class=\"card-img-bottom\" alt=\"...\">
                    </div>
                </div>
                <!-- Carte utilisateur/brasseur -->
                <div class=\"col-lg-4\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h4 class=\"card-title\">{{ bieres.brasserieId.nom ?? 'Nom de la brasserie non renseigné' }}</h4>
                            <h6 class=\"card-subtitle mb-2 text-muted\">{{ bieres.brasserieId.adresse.rue ~\" \"~ bieres.brasserieId.adresse.cp ~\" \"~ bieres.brasserieId.adresse.ville }}</h6>
                        </div>
                        <div class=\"card-body\">
                            <p class=\"card-text\">
                                {{bieres.brasserieId.description ?? 'Description de brasserie non renseigné'}}
                            </p>
                            <p class=\"card-text\">
                            {{ bieres.description ?? 'Description non renseigné'}}
                            </p>
                            <p>
                                <a href=\"#\" class=\"card-link\">Différents lien potentiels vers ses publications</a>
                            </p>
                            <p>
                                <a href=\"#\" class=\"card-link\">Différents lien potentiels</a>
                            </p>
                            <p>
                                <a href=\"#\" class=\"card-link\">Différents lien potentiels</a>
                            </p>
                            <div class=\"mt-2\">
                                <span class=\"badge badge-pill badge-primary\">Utilisateur</span>
                                <span class=\"badge badge-pill badge-secondary\">Brasseur</span>
                                <span class=\"badge badge-pill badge-success\">Indépendant</span>
                                <span class=\"badge badge-pill badge-danger\">Modérateur</span>
                            </div>
                        </div>
                        <div class=\"pb-2 text-center\">
                            <span class=\"badge badge-pill badge-warning\">{{ bieres.categorieId.nom }}</span>
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
                </div>
            </section>

            <!-- Carte du Produit-->
            <section class=\"mt-2\">
                <!-- Card descriptif produit -->
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3>Description du produit/Caractéristiques etc..</h3>
                    </div>
                    <div class=\"card-body\">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus ut quam minima tenetur voluptatem fugiat expedita maxime, quis voluptatibus officiis dolores atque fugit ratione libero est perspiciatis rem minus deleniti?Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, sapiente. Possimus mollitia eveniet doloremque doloribus, officiis optio quos aut ad vero ipsa a pariatur, magnam eos autem ullam deleniti illo?
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus ut quam minima tenetur voluptatem fugiat expedita maxime, quis voluptatibus officiis dolores atque fugit ratione libero est perspiciatis rem minus deleniti?Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, sapiente. Possimus mollitia eveniet doloremque doloribus, officiis optio quos aut ad vero ipsa a pariatur, magnam eos autem ullam deleniti illo?
                        </p>
                    </div>
                    <!-- Carousel des produits phares/Similaires -->
                    <div class=\"card-footer\" id=\"carousel\">
                        <article id=\"carouselProduct\">
                            <div id=\"carouselExampleFade\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\">
                                <div class=\"carousel-inner h-100\">
                                    <div class=\"carousel-item active h-100\">
                                        <img src=\"./img/img3.jpg\" class=\"d-block w-100\" alt=\"...\">
                                    </div>
                                    <div class=\"carousel-item h-100\">
                                        <img src=\"./img/img1.jpg\" class=\"d-block w-100\" alt=\"...\">
                                    </div>
                                    <div class=\"carousel-item h-100\">
                                        <img src=\"./img/img3.jpg\" class=\"d-block w-100\" alt=\"...\">
                                    </div>
                                </div>
                                <a class=\"carousel-control-prev\" href=\"#carouselExampleFade\" role=\"button\" data-slide=\"prev\">
                                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                    <span class=\"sr-only\">Previous</span>
                                </a>
                                <a class=\"carousel-control-next\" href=\"#carouselExampleFade\" role=\"button\" data-slide=\"next\">
                                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                    <span class=\"sr-only\">Next</span>
                                </a>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
        </main>
    </header>

{% endblock %}
", "orm/listBieresDetails.html.twig", "C:\\Users\\aurel\\Desktop\\test projet biere\\aure_souf_fab\\templates\\orm\\listBieresDetails.html.twig");
    }
}
