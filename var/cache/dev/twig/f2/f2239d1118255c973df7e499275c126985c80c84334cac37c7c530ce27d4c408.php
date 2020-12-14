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

/* orm/index.html.twig */
class __TwigTemplate_c78c8db4c8639aa48f36866c7eb86bbedc97e784072ee3cb2729fb9ea094275b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "orm/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "orm/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "orm/index.html.twig", 1);
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

        echo "Hello ORMController!";
        
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
    <body>
    <main class=\"container\">
        <article class=\"row\">
            <h1>La liste de nos bières</h1>
            <div class=\"border w-80 m-auto\" style=\"border:1px solid; height:1px;\" ></div>
            <!-- 1 EME LIGNE -->
            <!-- CARD PRODUIT -->
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <div class=\"card\">
                        <div class=\"card-header p-0\">
                            <img src=\"./img/img3.jpg\" alt=\"Image de la bière\" class=\"card-img-top\">
                        </div>
                    </div>
                    <div class=\"card-body bg-light p-0\">
                        <div class=\"p-2 text-center\">
                            <h4 class=\"p-2\"><a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("orm_index");
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bieres"]) || array_key_exists("bieres", $context) ? $context["bieres"] : (function () { throw new RuntimeError('Variable "bieres" does not exist.', 23, $this->source); })()), "nom", [], "any", false, false, false, 23), "html", null, true);
        echo "</a></h4>
                            <h6 class=\"card-subtitle m-2 text-muted\">Brassée par : (nom dynamique)</h6>
                            <p class=\"text-center\">Description de la biere : Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni impedit deserunt non laboriosam odit, aspernatur autem, quaerat, voluptatem necessitatibus fugiat maiores inventore tempora iusto minima! Adipisci nulla similique cumque recusandae.</p>
                        </div>
                        <div class=\"mt-2 pb-2 text-center\">
                            <span class=\"badge badge-pill badge-warning\">Blonde</span>
                            <span class=\"badge badge-pill badge-secondary\">Brune</span>
                            <span class=\"badge badge-pill badge-danger\">Rousse</span>
                            <span class=\"badge badge-pill badge-success\">IPA</span>
                            <span class=\"badge badge-pill badge-info\">ALE</span>
                            <span class=\"badge badge-pill badge-dark\">Stout</span>
                        </div>
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

                <!-- CARD PRODUIT -->
                <div class=\"col-lg-4\">
                    <div class=\"card\">
                        <div class=\"card-header  p-0\">
                            <img src=\"./img/img3.jpg\" alt=\"Image de la bière\" class=\"card-img-top\">
                        </div>
                    </div>
                    <div class=\"card-body bg-light p-0\">
                        <div class=\"p-2 text-center\">
                            <h4 class=\"p-2\"><a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("orm_index");
        echo "\">Nom de la bière(dynamique)</a></h4>
                            <h6 class=\"card-subtitle m-2 text-muted\">Brassée par : (nom dynamique)</h6>
                            <p class=\"text-center\">Description de la biere : Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni impedit deserunt non laboriosam odit, aspernatur autem, quaerat, voluptatem necessitatibus fugiat maiores inventore tempora iusto minima! Adipisci nulla similique cumque recusandae.</p>
                        </div>
                        <div class=\"mt-2 pb-2 text-center\">
                            <span class=\"badge badge-pill badge-warning\">Blonde</span>
                            <span class=\"badge badge-pill badge-secondary\">Brune</span>
                            <span class=\"badge badge-pill badge-danger\">Rousse</span>
                            <span class=\"badge badge-pill badge-success\">IPA</span>
                            <span class=\"badge badge-pill badge-info\">ALE</span>
                            <span class=\"badge badge-pill badge-dark\">Stout</span>
                        </div>
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

                <!-- CARD PRODUIT -->
                <div class=\"col-lg-4\">
                    <div class=\"card\">
                        <div class=\"card-header p-0\">
                            <img src=\"./img/img3.jpg\" alt=\"Image de la bière\" class=\"card-img-top\">
                        </div>
                    </div>
                    <div class=\"card-body bg-light p-0\">
                        <div class=\"p-2 text-center\">
                            <h4 class=\"p-2\"><a href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("orm_index");
        echo "\">Nom de la bière(dynamique)</a></h4>
                            <h6 class=\"card-subtitle m-2 text-muted\">Brassée par : (nom dynamique)</h6>
                            <p class=\"text-center\">Description de la biere : Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni impedit deserunt non laboriosam odit, aspernatur autem, quaerat, voluptatem necessitatibus fugiat maiores inventore tempora iusto minima! Adipisci nulla similique cumque recusandae.</p>
                        </div>
                        <div class=\"mt-2 pb-2 text-center\">
                            <span class=\"badge badge-pill badge-warning\">Blonde</span>
                            <span class=\"badge badge-pill badge-secondary\">Brune</span>
                            <span class=\"badge badge-pill badge-danger\">Rousse</span>
                            <span class=\"badge badge-pill badge-success\">IPA</span>
                            <span class=\"badge badge-pill badge-info\">ALE</span>
                            <span class=\"badge badge-pill badge-dark\">Stout</span>
                        </div>
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


            <!-- 2 EME LIGNE -->
            <!-- CARD PRODUIT -->
            <div class=\"mt-4 row\">
                <div class=\"col-lg-4\">
                    <div class=\"card\">
                        <div class=\"card-header p-0\">
                            <img src=\"./img/img3.jpg\" alt=\"Image de la bière\" class=\"card-img-top\">
                        </div>
                    </div>
                    <div class=\"card-body bg-light p-0\">
                        <div class=\"p-2 text-center\">
                            <h4 class=\"p-2\"><a href=\"";
        // line 129
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("orm_index");
        echo "\">Nom de la bière(dynamique)</a></h4>
                            <h6 class=\"card-subtitle m-2 text-muted\">Brassée par : (nom dynamique)</h6>
                            <p class=\"text-center\">Description de la biere : Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni impedit deserunt non laboriosam odit, aspernatur autem, quaerat, voluptatem necessitatibus fugiat maiores inventore tempora iusto minima! Adipisci nulla similique cumque recusandae.</p>
                        </div>
                        <div class=\"mt-2 pb-2 text-center\">
                            <span class=\"badge badge-pill badge-warning\">Blonde</span>
                            <span class=\"badge badge-pill badge-secondary\">Brune</span>
                            <span class=\"badge badge-pill badge-danger\">Rousse</span>
                            <span class=\"badge badge-pill badge-success\">IPA</span>
                            <span class=\"badge badge-pill badge-info\">ALE</span>
                            <span class=\"badge badge-pill badge-dark\">Stout</span>
                        </div>
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

                <!-- CARD PRODUIT -->
                <div class=\"col-lg-4\">
                    <div class=\"card\">
                        <div class=\"card-header p-0\">
                            <img src=\"./img/img3.jpg\" alt=\"Image de la bière\" class=\"card-img-top\">
                        </div>
                    </div>
                    <div class=\"card-body bg-light p-0\">
                        <div class=\"p-2 text-center\">
                            <h4 class=\"p-2\"><a href=\"";
        // line 163
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("orm_index");
        echo "\">Nom de la bière(dynamique)</a></h4>
                            <h6 class=\"card-subtitle m-2 text-muted\">Brassée par : (nom dynamique)</h6>
                            <p class=\"text-center\">Description de la biere : Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni impedit deserunt non laboriosam odit, aspernatur autem, quaerat, voluptatem necessitatibus fugiat maiores inventore tempora iusto minima! Adipisci nulla similique cumque recusandae.</p>
                        </div>
                        <div class=\"mt-2 pb-2 text-center\">
                            <span class=\"badge badge-pill badge-warning\">Blonde</span>
                            <span class=\"badge badge-pill badge-secondary\">Brune</span>
                            <span class=\"badge badge-pill badge-danger\">Rousse</span>
                            <span class=\"badge badge-pill badge-success\">IPA</span>
                            <span class=\"badge badge-pill badge-info\">ALE</span>
                            <span class=\"badge badge-pill badge-dark\">Stout</span>
                        </div>
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

                <!-- CARD PRODUIT -->
                <div class=\"col-lg-4\">
                    <div class=\"card\">
                        <div class=\"card-header  p-0\">
                            <img src=\"./img/img3.jpg\" alt=\"Image de la bière\" class=\"card-img-top\">
                        </div>
                    </div>
                    <div class=\"card-body bg-light p-0\">
                        <div class=\"p-2 text-center\">
                            <h4 class=\"p-2\"><a href=\"";
        // line 197
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("orm_index");
        echo "\">Nom de la bière(dynamique)</a></h4>
                            <h6 class=\"card-subtitle m-2 text-muted\">Brassée par : (nom dynamique)</h6>
                            <p class=\"text-center\">Description de la biere : Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni impedit deserunt non laboriosam odit, aspernatur autem, quaerat, voluptatem necessitatibus fugiat maiores inventore tempora iusto minima! Adipisci nulla similique cumque recusandae.</p>
                        </div>
                        <div class=\"mt-2 pb-2 text-center\">
                            <span class=\"badge badge-pill badge-warning\">Blonde</span>
                            <span class=\"badge badge-pill badge-secondary\">Brune</span>
                            <span class=\"badge badge-pill badge-danger\">Rousse</span>
                            <span class=\"badge badge-pill badge-success\">IPA</span>
                            <span class=\"badge badge-pill badge-info\">ALE</span>
                            <span class=\"badge badge-pill badge-dark\">Stout</span>
                        </div>
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
        </article>
    </main>
    </body>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "orm/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 197,  261 => 163,  224 => 129,  183 => 91,  146 => 57,  107 => 23,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello ORMController!{% endblock %}

{% block body %}

    <body>
    <main class=\"container\">
        <article class=\"row\">
            <h1>La liste de nos bières</h1>
            <div class=\"border w-80 m-auto\" style=\"border:1px solid; height:1px;\" ></div>
            <!-- 1 EME LIGNE -->
            <!-- CARD PRODUIT -->
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <div class=\"card\">
                        <div class=\"card-header p-0\">
                            <img src=\"./img/img3.jpg\" alt=\"Image de la bière\" class=\"card-img-top\">
                        </div>
                    </div>
                    <div class=\"card-body bg-light p-0\">
                        <div class=\"p-2 text-center\">
                            <h4 class=\"p-2\"><a href=\"{{ path('orm_index') }}\">{{bieres.nom}}</a></h4>
                            <h6 class=\"card-subtitle m-2 text-muted\">Brassée par : (nom dynamique)</h6>
                            <p class=\"text-center\">Description de la biere : Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni impedit deserunt non laboriosam odit, aspernatur autem, quaerat, voluptatem necessitatibus fugiat maiores inventore tempora iusto minima! Adipisci nulla similique cumque recusandae.</p>
                        </div>
                        <div class=\"mt-2 pb-2 text-center\">
                            <span class=\"badge badge-pill badge-warning\">Blonde</span>
                            <span class=\"badge badge-pill badge-secondary\">Brune</span>
                            <span class=\"badge badge-pill badge-danger\">Rousse</span>
                            <span class=\"badge badge-pill badge-success\">IPA</span>
                            <span class=\"badge badge-pill badge-info\">ALE</span>
                            <span class=\"badge badge-pill badge-dark\">Stout</span>
                        </div>
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

                <!-- CARD PRODUIT -->
                <div class=\"col-lg-4\">
                    <div class=\"card\">
                        <div class=\"card-header  p-0\">
                            <img src=\"./img/img3.jpg\" alt=\"Image de la bière\" class=\"card-img-top\">
                        </div>
                    </div>
                    <div class=\"card-body bg-light p-0\">
                        <div class=\"p-2 text-center\">
                            <h4 class=\"p-2\"><a href=\"{{ path('orm_index') }}\">Nom de la bière(dynamique)</a></h4>
                            <h6 class=\"card-subtitle m-2 text-muted\">Brassée par : (nom dynamique)</h6>
                            <p class=\"text-center\">Description de la biere : Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni impedit deserunt non laboriosam odit, aspernatur autem, quaerat, voluptatem necessitatibus fugiat maiores inventore tempora iusto minima! Adipisci nulla similique cumque recusandae.</p>
                        </div>
                        <div class=\"mt-2 pb-2 text-center\">
                            <span class=\"badge badge-pill badge-warning\">Blonde</span>
                            <span class=\"badge badge-pill badge-secondary\">Brune</span>
                            <span class=\"badge badge-pill badge-danger\">Rousse</span>
                            <span class=\"badge badge-pill badge-success\">IPA</span>
                            <span class=\"badge badge-pill badge-info\">ALE</span>
                            <span class=\"badge badge-pill badge-dark\">Stout</span>
                        </div>
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

                <!-- CARD PRODUIT -->
                <div class=\"col-lg-4\">
                    <div class=\"card\">
                        <div class=\"card-header p-0\">
                            <img src=\"./img/img3.jpg\" alt=\"Image de la bière\" class=\"card-img-top\">
                        </div>
                    </div>
                    <div class=\"card-body bg-light p-0\">
                        <div class=\"p-2 text-center\">
                            <h4 class=\"p-2\"><a href=\"{{ path('orm_index') }}\">Nom de la bière(dynamique)</a></h4>
                            <h6 class=\"card-subtitle m-2 text-muted\">Brassée par : (nom dynamique)</h6>
                            <p class=\"text-center\">Description de la biere : Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni impedit deserunt non laboriosam odit, aspernatur autem, quaerat, voluptatem necessitatibus fugiat maiores inventore tempora iusto minima! Adipisci nulla similique cumque recusandae.</p>
                        </div>
                        <div class=\"mt-2 pb-2 text-center\">
                            <span class=\"badge badge-pill badge-warning\">Blonde</span>
                            <span class=\"badge badge-pill badge-secondary\">Brune</span>
                            <span class=\"badge badge-pill badge-danger\">Rousse</span>
                            <span class=\"badge badge-pill badge-success\">IPA</span>
                            <span class=\"badge badge-pill badge-info\">ALE</span>
                            <span class=\"badge badge-pill badge-dark\">Stout</span>
                        </div>
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


            <!-- 2 EME LIGNE -->
            <!-- CARD PRODUIT -->
            <div class=\"mt-4 row\">
                <div class=\"col-lg-4\">
                    <div class=\"card\">
                        <div class=\"card-header p-0\">
                            <img src=\"./img/img3.jpg\" alt=\"Image de la bière\" class=\"card-img-top\">
                        </div>
                    </div>
                    <div class=\"card-body bg-light p-0\">
                        <div class=\"p-2 text-center\">
                            <h4 class=\"p-2\"><a href=\"{{ path('orm_index') }}\">Nom de la bière(dynamique)</a></h4>
                            <h6 class=\"card-subtitle m-2 text-muted\">Brassée par : (nom dynamique)</h6>
                            <p class=\"text-center\">Description de la biere : Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni impedit deserunt non laboriosam odit, aspernatur autem, quaerat, voluptatem necessitatibus fugiat maiores inventore tempora iusto minima! Adipisci nulla similique cumque recusandae.</p>
                        </div>
                        <div class=\"mt-2 pb-2 text-center\">
                            <span class=\"badge badge-pill badge-warning\">Blonde</span>
                            <span class=\"badge badge-pill badge-secondary\">Brune</span>
                            <span class=\"badge badge-pill badge-danger\">Rousse</span>
                            <span class=\"badge badge-pill badge-success\">IPA</span>
                            <span class=\"badge badge-pill badge-info\">ALE</span>
                            <span class=\"badge badge-pill badge-dark\">Stout</span>
                        </div>
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

                <!-- CARD PRODUIT -->
                <div class=\"col-lg-4\">
                    <div class=\"card\">
                        <div class=\"card-header p-0\">
                            <img src=\"./img/img3.jpg\" alt=\"Image de la bière\" class=\"card-img-top\">
                        </div>
                    </div>
                    <div class=\"card-body bg-light p-0\">
                        <div class=\"p-2 text-center\">
                            <h4 class=\"p-2\"><a href=\"{{ path('orm_index') }}\">Nom de la bière(dynamique)</a></h4>
                            <h6 class=\"card-subtitle m-2 text-muted\">Brassée par : (nom dynamique)</h6>
                            <p class=\"text-center\">Description de la biere : Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni impedit deserunt non laboriosam odit, aspernatur autem, quaerat, voluptatem necessitatibus fugiat maiores inventore tempora iusto minima! Adipisci nulla similique cumque recusandae.</p>
                        </div>
                        <div class=\"mt-2 pb-2 text-center\">
                            <span class=\"badge badge-pill badge-warning\">Blonde</span>
                            <span class=\"badge badge-pill badge-secondary\">Brune</span>
                            <span class=\"badge badge-pill badge-danger\">Rousse</span>
                            <span class=\"badge badge-pill badge-success\">IPA</span>
                            <span class=\"badge badge-pill badge-info\">ALE</span>
                            <span class=\"badge badge-pill badge-dark\">Stout</span>
                        </div>
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

                <!-- CARD PRODUIT -->
                <div class=\"col-lg-4\">
                    <div class=\"card\">
                        <div class=\"card-header  p-0\">
                            <img src=\"./img/img3.jpg\" alt=\"Image de la bière\" class=\"card-img-top\">
                        </div>
                    </div>
                    <div class=\"card-body bg-light p-0\">
                        <div class=\"p-2 text-center\">
                            <h4 class=\"p-2\"><a href=\"{{ path('orm_index') }}\">Nom de la bière(dynamique)</a></h4>
                            <h6 class=\"card-subtitle m-2 text-muted\">Brassée par : (nom dynamique)</h6>
                            <p class=\"text-center\">Description de la biere : Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni impedit deserunt non laboriosam odit, aspernatur autem, quaerat, voluptatem necessitatibus fugiat maiores inventore tempora iusto minima! Adipisci nulla similique cumque recusandae.</p>
                        </div>
                        <div class=\"mt-2 pb-2 text-center\">
                            <span class=\"badge badge-pill badge-warning\">Blonde</span>
                            <span class=\"badge badge-pill badge-secondary\">Brune</span>
                            <span class=\"badge badge-pill badge-danger\">Rousse</span>
                            <span class=\"badge badge-pill badge-success\">IPA</span>
                            <span class=\"badge badge-pill badge-info\">ALE</span>
                            <span class=\"badge badge-pill badge-dark\">Stout</span>
                        </div>
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
        </article>
    </main>
    </body>

{% endblock %}
", "orm/index.html.twig", "C:\\Users\\Stagiaire\\Desktop\\git test\\templates\\orm\\index.html.twig");
    }
}
