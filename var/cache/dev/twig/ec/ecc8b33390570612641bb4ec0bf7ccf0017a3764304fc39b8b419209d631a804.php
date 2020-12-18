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

/* orm/detailBrasserie.html.twig */
class __TwigTemplate_f338ac5ed9b7977166dfb15a9d6cfa39cbd36bc487f99399aa1211cd6c26ed4b extends Template
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
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "orm/detailBrasserie.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "orm/detailBrasserie.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "orm/detailBrasserie.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Detail de la Brasserie";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/carousel2.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"container mt-2\">
        <section class=\"row\">
            <div class=\"col-lg-8\" style=\"height:100%;\">
                <div class=\"card-header card-header-main\">
                    <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["brasserie"]) || array_key_exists("brasserie", $context) ? $context["brasserie"] : (function () { throw new RuntimeError('Variable "brasserie" does not exist.', 14, $this->source); })()), "nom", [], "any", false, false, false, 14), "html", null, true);
        echo "</h2>
                </div>
                <div class=\"card-body bg-light\">
                    <p class=\"card-text\"><small class=\"text-muted\">Last updated 3mins ago</small></p>
                </div>
                <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/skyrimmap.jpg"), "html", null, true);
        echo "\" class=\"card-img-bottom\">
            </div>

            <!-- Carte des bieres de la brasseries -->
            <div class=\"col-lg-4 card-biere\">
                <div class=\"card\" style=\"height:100%;\">
                    <div class=\"card-header card-header-main\">
                        <h4 class=\"card-title\"><a href=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["brasserie"]) || array_key_exists("brasserie", $context) ? $context["brasserie"] : (function () { throw new RuntimeError('Variable "brasserie" does not exist.', 26, $this->source); })()), "siteweb", [], "any", false, false, false, 26), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["brasserie"]) || array_key_exists("brasserie", $context) ? $context["brasserie"] : (function () { throw new RuntimeError('Variable "brasserie" does not exist.', 26, $this->source); })()), "nom", [], "any", false, false, false, 26), "html", null, true);
        echo "</a></h4>
                        <h6 class=\"card-subtitle mb-2 text-muted\" style=\"border-bottom: none;\">";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["brasserie"]) || array_key_exists("brasserie", $context) ? $context["brasserie"] : (function () { throw new RuntimeError('Variable "brasserie" does not exist.', 27, $this->source); })()), "adresse", [], "any", false, false, false, 27), "ville", [], "any", false, false, false, 27), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["brasserie"]) || array_key_exists("brasserie", $context) ? $context["brasserie"] : (function () { throw new RuntimeError('Variable "brasserie" does not exist.', 27, $this->source); })()), "adresse", [], "any", false, false, false, 27), "cp", [], "any", false, false, false, 27), "html", null, true);
        echo "</h6>
                    </div>
                    <div class=\"card-body\">

                        <p class=\"card-text\">
                            ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["brasserie"]) || array_key_exists("brasserie", $context) ? $context["brasserie"] : (function () { throw new RuntimeError('Variable "brasserie" does not exist.', 32, $this->source); })()), "description", [], "any", false, false, false, 32), "html", null, true);
        echo "
                        </p>
                        <p class=\"card-text\" style=\"overflow:auto; height:100px; padding:5px; overflow-y:hidden;\">
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur facere, fugit iusto, magnam minus nobis non, numquam obcaecati quod reprehenderit sed similique sint voluptate! Ad commodi incidunt ipsa maiores obcaecati!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, aut consectetur expedita ipsam magnam nemo provident quas repellendus. Consequuntur, debitis facilis illo iure nihil quis repellat voluptatibus. Quos sapiente, vitae! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque consequuntur deserunt harum hic, ipsa nisi quibusdam quidem quos saepe! Autem commodi consectetur fuga fugit laudantium magni nihil, perspiciatis sit ut.Cum enim itaque labore laboriosam laudantium minima nemo nulla ullam vel. Asperiores consequuntur dignissimos dolorem doloremque!Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore incidunt nisi pariatur eius magnam sed? Recusandae, esse alias assumenda optio nulla quisquam id excepturi! Reiciendis molestiae ipsam incidunt beatae deserunt!
                        </p>
                        <p>

                        <br class=\"card-text\">
                            <br>
                            ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["brasserie"]) || array_key_exists("brasserie", $context) ? $context["brasserie"] : (function () { throw new RuntimeError('Variable "brasserie" does not exist.', 41, $this->source); })()), "description", [], "any", false, false, false, 41), "html", null, true);
        echo "
                        </p>
                        <p>
                            <br>
                            <a class=\"btn btn-outline-info\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("orm_list_brasserie_biere", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["brasserie"]) || array_key_exists("brasserie", $context) ? $context["brasserie"] : (function () { throw new RuntimeError('Variable "brasserie" does not exist.', 45, $this->source); })()), "id", [], "any", false, false, false, 45)]), "html", null, true);
        echo "\" class=\"card-link\">Leurs créations</a>
                        </p>

                        <div class=\"mt-2 mb-1\">
                            <span class=\"badge badge-pill badge-primary\">Utilisateur</span>
                            <span class=\"badge badge-pill badge-secondary\">Brasseur</span>
                            <span class=\"badge badge-pill badge-success\">Indépendant</span>
                            <span class=\"badge badge-pill badge-danger\">Modérateur</span>
                        </div>
                    </div>
                    <div class=\"card-footer\">
                        <p>
                            <a href=\"";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["brasserie"]) || array_key_exists("brasserie", $context) ? $context["brasserie"] : (function () { throw new RuntimeError('Variable "brasserie" does not exist.', 57, $this->source); })()), "siteweb", [], "any", false, false, false, 57), "html", null, true);
        echo "\" class=\"card-link\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["brasserie"]) || array_key_exists("brasserie", $context) ? $context["brasserie"] : (function () { throw new RuntimeError('Variable "brasserie" does not exist.', 57, $this->source); })()), "siteweb", [], "any", false, false, false, 57), "html", null, true);
        echo "</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class=\"mt-2\">
            <!-- Card descriptif produit -->
            <div class=\"card carousel\">
                <div class=\"card-header card-header-main\">
                    <h3>Description du produit/Caractéristiques etc..</h3>
                </div>
                <div class=\"card-body\" style=\"border-bottom: none;\">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus ut quam minima tenetur voluptatem fugiat expedita maxime, quis voluptatibus officiis dolores atque fugit ratione libero est perspiciatis rem minus deleniti?Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, sapiente. Possimus mollitia eveniet doloremque doloribus, officiis optio quos aut ad vero ipsa a pariatur, magnam eos autem ullam deleniti illo?
                    </p>
                </div>
                <!-- Carousel des produits phares/Similaires -->
                <div class=\"card-footer carousel-footer\" id=\"carousel\">
                        <!-- CAROUSEL -->
                        <section class=\"infinite-carousel\">
                            <article class=\"viewport \">
                                <div class=\"list\">

                                    <!-- SLIDE -->
                                    <div class=\"card item\" id=\"card-carousel\" style=\"cursor:pointer;\">
                                        <div class=\"card-header card-header-carousel\">
                                            <img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/karadock.jpg"), "html", null, true);
        echo "\">
                                        </div>
                                    </div>

                                    <!-- SLIDE -->
                                    <div class=\"card item\" id=\"card-carousel\" style=\"cursor:pointer;\">
                                        <div class=\"card-header card-header-carousel\">
                                            <img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/perckara.jpg"), "html", null, true);
        echo "\">
                                        </div>
                                    </div>

                                    <!-- SLIDE -->
                                    <div class=\"card item\" id=\"card-carousel\" style=\"cursor:pointer;\">
                                        <div class=\"card-header card-header-carousel\">
                                            <img src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/skyrimmap.jpg"), "html", null, true);
        echo "\">
                                        </div>
                                    </div>

                                    <!-- SLIDE -->
                                    <div class=\"card item\" id=\"card-carousel\" style=\"cursor:pointer;\">
                                        <div class=\"card-header card-header-carousel\">
                                            <img src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/karadock.jpg"), "html", null, true);
        echo "\">
                                        </div>
                                    </div>

                                    <!-- SLIDE -->
                                    <div class=\"card item\" id=\"card-carousel\" style=\"cursor:pointer;\">
                                        <div class=\"card-header card-header-carousel\">
                                            <img src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/perckara.jpg"), "html", null, true);
        echo "\">
                                        </div>
                                    </div>

                                    <!-- SLIDE -->
                                    <div class=\"card item\" id=\"card-carousel\" style=\"cursor:pointer;\">
                                        <div class=\"card-header card-header-carousel\">
                                            <img src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/skyrimmap.jpg"), "html", null, true);
        echo "\">
                                        </div>
                                    </div>

                                    <!-- SLIDE -->
                                    <div class=\"card item\" id=\"card-carousel\" style=\"cursor:pointer;\">
                                        <div class=\"card-header card-header-carousel\">
                                            <img src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/karadock.jpg"), "html", null, true);
        echo "\">
                                        </div>
                                    </div>

                                    <!-- SLIDE -->
                                    <div class=\"card item\" id=\"card-carousel\" style=\"cursor:pointer;\">
                                        <div class=\"card-header card-header-carousel\">
                                            <img src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/perckara.jpg"), "html", null, true);
        echo "\">
                                        </div>
                                    </div>

                                    <!-- SLIDE -->
                                    <div class=\"card item\" id=\"card-carousel\" style=\"cursor:pointer;\">
                                        <div class=\"card-header card-header-carousel\">
                                            <img src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/skyrimmap.jpg"), "html", null, true);
        echo "\">
                                        </div>
                                    </div>

                                </div>
                            </article>

                            <!-- FLECHE DE CONTROLE -->
                            <a class=\"carousel-control-prev bg-dark pre \"  href=\"#carouselExampleControls\" style=\"width:5%;  z-index:10;\" role=\"button\" data-slide=\"prev\">
                                <!-- FLECHE -->
                                <span class=\"carousel-control-prev-icon text-danger\" aria-hidden=\"true\"></span>
                                <!-- FIN FLECHE -->
                                <span class=\"sr-only\" >Previous</span>
                            </a>
                            <a class=\"carousel-control-next bg-dark next\" style=\"width:5%; z-index:10;\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
                                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Next</span>
                            </a>
                        </section>
                </div>

            </div>
            <a href=\"";
        // line 163
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("orm_brasseries");
        echo "\" class=\"mt-1 btn btn-outline-secondary\">Retour vers la liste des brasseries</a>
        </section>
    </div>
    ";
        // line 166
        $this->displayBlock('javascripts', $context, $blocks);
        // line 197
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 166
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 167
        echo "
        <!-- Script js carousel -->
        <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/carousel.js"), "html", null, true);
        echo "\"></script>

        <script>
            \$('.infinite-carousel').infiniteCarousel({
                itemsPerMove:1,
                duration: 500
            })
        </script>

        <!-- Script MAP -->
        <script src=\"https://unpkg.com/leaflet@1.3.1/dist/leaflet.js\" integrity=\"sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==\" crossorigin=\"\"></script>
        <script type=\"text/javascript\">
            var lat = 50.6371961;
            var lon = 3.062589;
            var macarte = null;
            function initMap() {
                macarte = L.map('map').setView([lat, lon], 15);
                L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
                    attribution: 'données © <a href=\"//osm.org/copyright\">OpenStreetMap</a>/ODbL - rendu <a href=\"//openstreetmap.fr\">OSM France</a>',
                    minZoom: 1,
                    maxZoom: 20
                }).addTo(macarte);
            }
            window.onload = function(){
                initMap();
            };
        </script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "orm/detailBrasserie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 169,  354 => 167,  344 => 166,  333 => 197,  331 => 166,  325 => 163,  300 => 141,  290 => 134,  280 => 127,  270 => 120,  260 => 113,  250 => 106,  240 => 99,  230 => 92,  220 => 85,  187 => 57,  172 => 45,  165 => 41,  153 => 32,  143 => 27,  137 => 26,  127 => 19,  119 => 14,  113 => 10,  103 => 9,  90 => 7,  80 => 6,  61 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title %}Detail de la Brasserie{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/carousel2.css') }}\">
{% endblock %}
{% block body %}
    <div class=\"container mt-2\">
        <section class=\"row\">
            <div class=\"col-lg-8\" style=\"height:100%;\">
                <div class=\"card-header card-header-main\">
                    <h2>{{ brasserie.nom }}</h2>
                </div>
                <div class=\"card-body bg-light\">
                    <p class=\"card-text\"><small class=\"text-muted\">Last updated 3mins ago</small></p>
                </div>
                <img src=\"{{ asset('image/skyrimmap.jpg') }}\" class=\"card-img-bottom\">
            </div>

            <!-- Carte des bieres de la brasseries -->
            <div class=\"col-lg-4 card-biere\">
                <div class=\"card\" style=\"height:100%;\">
                    <div class=\"card-header card-header-main\">
                        <h4 class=\"card-title\"><a href=\"{{ brasserie.siteweb }}\" target=\"_blank\">{{ brasserie.nom }}</a></h4>
                        <h6 class=\"card-subtitle mb-2 text-muted\" style=\"border-bottom: none;\">{{ brasserie.adresse.ville }} - {{ brasserie.adresse.cp }}</h6>
                    </div>
                    <div class=\"card-body\">

                        <p class=\"card-text\">
                            {{brasserie.description}}
                        </p>
                        <p class=\"card-text\" style=\"overflow:auto; height:100px; padding:5px; overflow-y:hidden;\">
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur facere, fugit iusto, magnam minus nobis non, numquam obcaecati quod reprehenderit sed similique sint voluptate! Ad commodi incidunt ipsa maiores obcaecati!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, aut consectetur expedita ipsam magnam nemo provident quas repellendus. Consequuntur, debitis facilis illo iure nihil quis repellat voluptatibus. Quos sapiente, vitae! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque consequuntur deserunt harum hic, ipsa nisi quibusdam quidem quos saepe! Autem commodi consectetur fuga fugit laudantium magni nihil, perspiciatis sit ut.Cum enim itaque labore laboriosam laudantium minima nemo nulla ullam vel. Asperiores consequuntur dignissimos dolorem doloremque!Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore incidunt nisi pariatur eius magnam sed? Recusandae, esse alias assumenda optio nulla quisquam id excepturi! Reiciendis molestiae ipsam incidunt beatae deserunt!
                        </p>
                        <p>

                        <br class=\"card-text\">
                            <br>
                            {{brasserie.description}}
                        </p>
                        <p>
                            <br>
                            <a class=\"btn btn-outline-info\" href=\"{{ path('orm_list_brasserie_biere', {'id' : brasserie.id }) }}\" class=\"card-link\">Leurs créations</a>
                        </p>

                        <div class=\"mt-2 mb-1\">
                            <span class=\"badge badge-pill badge-primary\">Utilisateur</span>
                            <span class=\"badge badge-pill badge-secondary\">Brasseur</span>
                            <span class=\"badge badge-pill badge-success\">Indépendant</span>
                            <span class=\"badge badge-pill badge-danger\">Modérateur</span>
                        </div>
                    </div>
                    <div class=\"card-footer\">
                        <p>
                            <a href=\"{{ brasserie.siteweb }}\" class=\"card-link\">{{ brasserie.siteweb }}</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class=\"mt-2\">
            <!-- Card descriptif produit -->
            <div class=\"card carousel\">
                <div class=\"card-header card-header-main\">
                    <h3>Description du produit/Caractéristiques etc..</h3>
                </div>
                <div class=\"card-body\" style=\"border-bottom: none;\">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus ut quam minima tenetur voluptatem fugiat expedita maxime, quis voluptatibus officiis dolores atque fugit ratione libero est perspiciatis rem minus deleniti?Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, sapiente. Possimus mollitia eveniet doloremque doloribus, officiis optio quos aut ad vero ipsa a pariatur, magnam eos autem ullam deleniti illo?
                    </p>
                </div>
                <!-- Carousel des produits phares/Similaires -->
                <div class=\"card-footer carousel-footer\" id=\"carousel\">
                        <!-- CAROUSEL -->
                        <section class=\"infinite-carousel\">
                            <article class=\"viewport \">
                                <div class=\"list\">

                                    <!-- SLIDE -->
                                    <div class=\"card item\" id=\"card-carousel\" style=\"cursor:pointer;\">
                                        <div class=\"card-header card-header-carousel\">
                                            <img src=\"{{ asset('image/karadock.jpg') }}\">
                                        </div>
                                    </div>

                                    <!-- SLIDE -->
                                    <div class=\"card item\" id=\"card-carousel\" style=\"cursor:pointer;\">
                                        <div class=\"card-header card-header-carousel\">
                                            <img src=\"{{ asset('image/perckara.jpg') }}\">
                                        </div>
                                    </div>

                                    <!-- SLIDE -->
                                    <div class=\"card item\" id=\"card-carousel\" style=\"cursor:pointer;\">
                                        <div class=\"card-header card-header-carousel\">
                                            <img src=\"{{ asset('image/skyrimmap.jpg') }}\">
                                        </div>
                                    </div>

                                    <!-- SLIDE -->
                                    <div class=\"card item\" id=\"card-carousel\" style=\"cursor:pointer;\">
                                        <div class=\"card-header card-header-carousel\">
                                            <img src=\"{{ asset('image/karadock.jpg') }}\">
                                        </div>
                                    </div>

                                    <!-- SLIDE -->
                                    <div class=\"card item\" id=\"card-carousel\" style=\"cursor:pointer;\">
                                        <div class=\"card-header card-header-carousel\">
                                            <img src=\"{{ asset('image/perckara.jpg') }}\">
                                        </div>
                                    </div>

                                    <!-- SLIDE -->
                                    <div class=\"card item\" id=\"card-carousel\" style=\"cursor:pointer;\">
                                        <div class=\"card-header card-header-carousel\">
                                            <img src=\"{{ asset('image/skyrimmap.jpg') }}\">
                                        </div>
                                    </div>

                                    <!-- SLIDE -->
                                    <div class=\"card item\" id=\"card-carousel\" style=\"cursor:pointer;\">
                                        <div class=\"card-header card-header-carousel\">
                                            <img src=\"{{ asset('image/karadock.jpg') }}\">
                                        </div>
                                    </div>

                                    <!-- SLIDE -->
                                    <div class=\"card item\" id=\"card-carousel\" style=\"cursor:pointer;\">
                                        <div class=\"card-header card-header-carousel\">
                                            <img src=\"{{ asset('image/perckara.jpg') }}\">
                                        </div>
                                    </div>

                                    <!-- SLIDE -->
                                    <div class=\"card item\" id=\"card-carousel\" style=\"cursor:pointer;\">
                                        <div class=\"card-header card-header-carousel\">
                                            <img src=\"{{ asset('image/skyrimmap.jpg') }}\">
                                        </div>
                                    </div>

                                </div>
                            </article>

                            <!-- FLECHE DE CONTROLE -->
                            <a class=\"carousel-control-prev bg-dark pre \"  href=\"#carouselExampleControls\" style=\"width:5%;  z-index:10;\" role=\"button\" data-slide=\"prev\">
                                <!-- FLECHE -->
                                <span class=\"carousel-control-prev-icon text-danger\" aria-hidden=\"true\"></span>
                                <!-- FIN FLECHE -->
                                <span class=\"sr-only\" >Previous</span>
                            </a>
                            <a class=\"carousel-control-next bg-dark next\" style=\"width:5%; z-index:10;\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
                                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Next</span>
                            </a>
                        </section>
                </div>

            </div>
            <a href=\"{{ path('orm_brasseries') }}\" class=\"mt-1 btn btn-outline-secondary\">Retour vers la liste des brasseries</a>
        </section>
    </div>
    {%  block javascripts %}

        <!-- Script js carousel -->
        <script src=\"{{ asset('js/carousel.js') }}\"></script>

        <script>
            \$('.infinite-carousel').infiniteCarousel({
                itemsPerMove:1,
                duration: 500
            })
        </script>

        <!-- Script MAP -->
        <script src=\"https://unpkg.com/leaflet@1.3.1/dist/leaflet.js\" integrity=\"sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==\" crossorigin=\"\"></script>
        <script type=\"text/javascript\">
            var lat = 50.6371961;
            var lon = 3.062589;
            var macarte = null;
            function initMap() {
                macarte = L.map('map').setView([lat, lon], 15);
                L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
                    attribution: 'données © <a href=\"//osm.org/copyright\">OpenStreetMap</a>/ODbL - rendu <a href=\"//openstreetmap.fr\">OSM France</a>',
                    minZoom: 1,
                    maxZoom: 20
                }).addTo(macarte);
            }
            window.onload = function(){
                initMap();
            };
        </script>
    {% endblock %}

{% endblock %}
", "orm/detailBrasserie.html.twig", "C:\\Users\\aurel\\Desktop\\test projet biere\\aure_souf_fab\\templates\\orm\\detailBrasserie.html.twig");
    }
}
