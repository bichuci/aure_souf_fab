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

/* home/index.html.twig */
class __TwigTemplate_141172f19bc3f63d579549e0b2030489504c5b23893a2367427303f8b8eefbd1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        echo "Accueil";
        
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
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/carousel.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <!-- CAROUSEL -->
    <section class=\"infinite-carousel\">
        <article class=\"viewport \">
            <div class=\"list\">

                <!-- SLIDE -->
                <div class=\"card item\" id=\"card-carousel\" style=\"cursor:pointer;\">
                    <div class=\"card-header\">
                        <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/karadock.jpg"), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"card-body panel-collapse  collapse \">
                        <h4>Titre du produit</h4>
                        <h5 class='text-muted'>Brasserie</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, rem </p>
                    </div>
                    <div class=\"card-footer collapse\">
                        <a href=\"#\">Lien du produit</a>
                    </div>
                </div>

                <!-- SLIDE -->
                <div class=\"card item\" id=\"card-carousel\" style=\"cursor:pointer;\">
                    <div class=\"card-header\">
                        <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/perckara.jpg"), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"card-body panel-collapse collapse \">
                        <h4>Titre du produit</h4>
                        <h5 class='text-muted'>Brasserie</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, rem </p>
                        <a href=\"#\">Lien du produit</a>
                    </div>
                </div>

                <!-- SLIDE -->
                <div class=\"card item\" id=\"card-carousel\" style=\"cursor:pointer;\">
                    <div class=\"card-header\">
                        <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/skyrimmap.jpg"), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"card-body panel-collapse  collapse \">
                        <h4>Titre du produit</h4>
                        <h5 class='text-muted'>Brasserie</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, rem </p>
                        <a href=\"#\">Lien du produit</a>
                    </div>
                </div>

                <!-- SLIDE -->
                <div class=\"card item\" id=\"card-carousel\" style=\"cursor:pointer;\">
                    <div class=\"card-header\">
                        <img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/karadock.jpg"), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"card-body panel-collapse collapse \">
                        <h4>Titre du produit</h4>
                        <h5 class='text-muted'>Brasserie</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, rem </p>
                        <a href=\"#\">Lien du produit</a>
                    </div>
                </div>

                <!-- SLIDE -->
                <div class=\"card item\" id=\"card-carousel\" style=\"cursor:pointer;\">
                    <div class=\"card-header\">
                        <img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/perckara.jpg"), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"card-body panel-collapse collapse \">
                        <h4>Titre du produit</h4>
                        <h5 class='text-muted'>Brasserie</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, rem </p>
                        <a href=\"#\">Lien du produit</a>
                    </div>
                </div>

                <!-- SLIDE -->
                <div class=\"card item\" id=\"card-carousel\" style=\"cursor:pointer;\">
                    <div class=\"card-header\">
                        <img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/skyrimmap.jpg"), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"card-body panel-collapse collapse \">
                        <h4>Titre du produit</h4>
                        <h5 class='text-muted'>Brasserie</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, rem </p>
                        <a href=\"#\">Lien du produit</a>
                    </div>
                </div>

                <!-- SLIDE -->
                <div class=\"card item\" id=\"card-carousel\" style=\"cursor:pointer;\">
                    <div class=\"card-header\">
                        <img src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/karadock.jpg"), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"card-body panel-collapse collapse \">
                        <h4>Titre du produit</h4>
                        <h5 class='text-muted'>Brasserie</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, rem </p>
                        <a href=\"#\">Lien du produit</a>
                    </div>
                </div>

                <!-- SLIDE -->
                <div class=\"card item\" id=\"card-carousel\" style=\"cursor:pointer;\">
                    <div class=\"card-header\">
                        <img src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/perckara.jpg"), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"card-body panel-collapse collapse \">
                        <h4>Titre du produit</h4>
                        <h5 class='text-muted'>Brasserie</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, rem </p>
                        <a href=\"#\">Lien du produit</a>
                    </div>
                </div>

                <!-- SLIDE -->
                <div class=\"card item\" id=\"card-carousel\" style=\"cursor:pointer;\">
                    <div class=\"card-header\">
                        <img src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/skyrimmap.jpg"), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"card-body panel-collapse collapse \">
                        <h4>Titre du produit</h4>
                        <h5 class='text-muted'>Brasserie</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, rem </p>
                        <a href=\"#\">Lien du produit</a>
                    </div>
                </div>

            </div>
        </article>

        <!-- FLECHE DE CONTROLE -->
        <a class=\"carousel-control-prev bg-dark pre \"  href=\"#carouselExampleControls\" style=\"width:3%;  z-index:10;\" role=\"button\" data-slide=\"prev\">
            <!-- FLECHE -->
            <span class=\"carousel-control-prev-icon text-danger\" aria-hidden=\"true\"></span>
            <!-- FIN FLECHE -->
            <span class=\"sr-only\" >Previous</span>
        </a>
        <a class=\"carousel-control-next bg-dark next\" style=\"width:3%; z-index:10;\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </section>

    <!--TITRE SITE-->
    <section id=\"img-bg\">
        <section id=\"titrelocation\">
            <div id=\"titresite\">
                <div id=\"titleglobal1\" class=\" titleglobal\">
                    <h1 class=\"title1 text-center \">bienvenue sur fbi</h1>
                    <h1 class=\"title2 text-center \">find biere indicator</h1>
                    <h5 class=\"title3 text-center \"> Le site communautaire de la bière</h5>
                </div>
            </div>
        </section>
    </section>

    <!-- CARTE -->
    <div id=\"maplocation\">
        <div id=\"map\">

        </div>
    </div>
    <!-- Script js carousel -->


    ";
        // line 170
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 171
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/carouselHover.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 172
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
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 172,  323 => 171,  304 => 170,  253 => 122,  237 => 109,  221 => 96,  205 => 83,  189 => 70,  173 => 57,  157 => 44,  141 => 31,  123 => 16,  113 => 8,  103 => 7,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/carousel.css') }}\">
{% endblock %}
{% block body %}
    <!-- CAROUSEL -->
    <section class=\"infinite-carousel\">
        <article class=\"viewport \">
            <div class=\"list\">

                <!-- SLIDE -->
                <div class=\"card item\" id=\"card-carousel\" style=\"cursor:pointer;\">
                    <div class=\"card-header\">
                        <img src=\"{{ asset('image/karadock.jpg') }}\">
                    </div>
                    <div class=\"card-body panel-collapse  collapse \">
                        <h4>Titre du produit</h4>
                        <h5 class='text-muted'>Brasserie</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, rem </p>
                    </div>
                    <div class=\"card-footer collapse\">
                        <a href=\"#\">Lien du produit</a>
                    </div>
                </div>

                <!-- SLIDE -->
                <div class=\"card item\" id=\"card-carousel\" style=\"cursor:pointer;\">
                    <div class=\"card-header\">
                        <img src=\"{{ asset('image/perckara.jpg') }}\">
                    </div>
                    <div class=\"card-body panel-collapse collapse \">
                        <h4>Titre du produit</h4>
                        <h5 class='text-muted'>Brasserie</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, rem </p>
                        <a href=\"#\">Lien du produit</a>
                    </div>
                </div>

                <!-- SLIDE -->
                <div class=\"card item\" id=\"card-carousel\" style=\"cursor:pointer;\">
                    <div class=\"card-header\">
                        <img src=\"{{ asset('image/skyrimmap.jpg') }}\">
                    </div>
                    <div class=\"card-body panel-collapse  collapse \">
                        <h4>Titre du produit</h4>
                        <h5 class='text-muted'>Brasserie</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, rem </p>
                        <a href=\"#\">Lien du produit</a>
                    </div>
                </div>

                <!-- SLIDE -->
                <div class=\"card item\" id=\"card-carousel\" style=\"cursor:pointer;\">
                    <div class=\"card-header\">
                        <img src=\"{{ asset('image/karadock.jpg') }}\">
                    </div>
                    <div class=\"card-body panel-collapse collapse \">
                        <h4>Titre du produit</h4>
                        <h5 class='text-muted'>Brasserie</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, rem </p>
                        <a href=\"#\">Lien du produit</a>
                    </div>
                </div>

                <!-- SLIDE -->
                <div class=\"card item\" id=\"card-carousel\" style=\"cursor:pointer;\">
                    <div class=\"card-header\">
                        <img src=\"{{ asset('image/perckara.jpg') }}\">
                    </div>
                    <div class=\"card-body panel-collapse collapse \">
                        <h4>Titre du produit</h4>
                        <h5 class='text-muted'>Brasserie</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, rem </p>
                        <a href=\"#\">Lien du produit</a>
                    </div>
                </div>

                <!-- SLIDE -->
                <div class=\"card item\" id=\"card-carousel\" style=\"cursor:pointer;\">
                    <div class=\"card-header\">
                        <img src=\"{{ asset('image/skyrimmap.jpg') }}\">
                    </div>
                    <div class=\"card-body panel-collapse collapse \">
                        <h4>Titre du produit</h4>
                        <h5 class='text-muted'>Brasserie</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, rem </p>
                        <a href=\"#\">Lien du produit</a>
                    </div>
                </div>

                <!-- SLIDE -->
                <div class=\"card item\" id=\"card-carousel\" style=\"cursor:pointer;\">
                    <div class=\"card-header\">
                        <img src=\"{{ asset('image/karadock.jpg') }}\">
                    </div>
                    <div class=\"card-body panel-collapse collapse \">
                        <h4>Titre du produit</h4>
                        <h5 class='text-muted'>Brasserie</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, rem </p>
                        <a href=\"#\">Lien du produit</a>
                    </div>
                </div>

                <!-- SLIDE -->
                <div class=\"card item\" id=\"card-carousel\" style=\"cursor:pointer;\">
                    <div class=\"card-header\">
                        <img src=\"{{ asset('image/perckara.jpg') }}\">
                    </div>
                    <div class=\"card-body panel-collapse collapse \">
                        <h4>Titre du produit</h4>
                        <h5 class='text-muted'>Brasserie</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, rem </p>
                        <a href=\"#\">Lien du produit</a>
                    </div>
                </div>

                <!-- SLIDE -->
                <div class=\"card item\" id=\"card-carousel\" style=\"cursor:pointer;\">
                    <div class=\"card-header\">
                        <img src=\"{{ asset('image/skyrimmap.jpg') }}\">
                    </div>
                    <div class=\"card-body panel-collapse collapse \">
                        <h4>Titre du produit</h4>
                        <h5 class='text-muted'>Brasserie</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, rem </p>
                        <a href=\"#\">Lien du produit</a>
                    </div>
                </div>

            </div>
        </article>

        <!-- FLECHE DE CONTROLE -->
        <a class=\"carousel-control-prev bg-dark pre \"  href=\"#carouselExampleControls\" style=\"width:3%;  z-index:10;\" role=\"button\" data-slide=\"prev\">
            <!-- FLECHE -->
            <span class=\"carousel-control-prev-icon text-danger\" aria-hidden=\"true\"></span>
            <!-- FIN FLECHE -->
            <span class=\"sr-only\" >Previous</span>
        </a>
        <a class=\"carousel-control-next bg-dark next\" style=\"width:3%; z-index:10;\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </section>

    <!--TITRE SITE-->
    <section id=\"img-bg\">
        <section id=\"titrelocation\">
            <div id=\"titresite\">
                <div id=\"titleglobal1\" class=\" titleglobal\">
                    <h1 class=\"title1 text-center \">bienvenue sur fbi</h1>
                    <h1 class=\"title2 text-center \">find biere indicator</h1>
                    <h5 class=\"title3 text-center \"> Le site communautaire de la bière</h5>
                </div>
            </div>
        </section>
    </section>

    <!-- CARTE -->
    <div id=\"maplocation\">
        <div id=\"map\">

        </div>
    </div>
    <!-- Script js carousel -->


    {%  block javascripts %}
        <script src=\"{{ asset('js/carouselHover.js') }}\"></script>
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
", "home/index.html.twig", "C:\\Users\\Rechia\\Desktop\\Projet\\templates\\home\\index.html.twig");
    }
}
