<?php

/* STCvisitorBundle:Default:index.html.twig */
class __TwigTemplate_e05fb76bdab2bd11c7a2c719874d63a0b2fd231064b608bffad3e6c5065f3a5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91105782615eec743ac8631a41ecd8b65c15b645571579065c63e6c3242493a4 = $this->env->getExtension("native_profiler");
        $__internal_91105782615eec743ac8631a41ecd8b65c15b645571579065c63e6c3242493a4->enter($__internal_91105782615eec743ac8631a41ecd8b65c15b645571579065c63e6c3242493a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "STCvisitorBundle:Default:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <title>Sesame Tech Club</title>

    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/owl.carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/owl.transitions.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/prettyPhoto.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link rel=\"shortcut icon\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/ico/robot.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/ico/apple-touch-icon-144-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/ico/apple-touch-icon-114-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/ico/apple-touch-icon-72-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/ico/apple-touch-icon-57-precomposed.png"), "html", null, true);
        echo "\">
</head>

<body id=\"home\" class=\"homepage\">
    <header id=\"header\">
        <nav id=\"main-menu\" class=\"navbar navbar-default navbar-fixed-top\" role=\"banner\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"index.html\"><img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"logo\"></a>
                </div>

                <div class=\"collapse navbar-collapse navbar-right\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"scroll active\"><a href=\"#home\">Accueil</a></li>
                        <li class=\"scroll\"><a href=\"#cta\">A propos de nous</a></li>
                        <li class=\"scroll\"><a href=\"#features\">Activités</a></li>
                        <li class=\"scroll\"><a href=\"#services\">Evenements</a></li>
                        <li class=\"scroll\"><a href=\"#portfolio\">Galerie</a></li>
                        <!--<li class=\"scroll\"><a href=\"#about\">Evenements</a></li>-->
                        <li class=\"scroll\"><a href=\"#meet-team\">Membres</a></li>
                        <li class=\"scroll\"><a href=\"#pricing\">Sign In/Up</a></li>
                        <!--<li class=\"scroll\"><a href=\"#blog\">Articles</a></li>-->
                        <li class=\"scroll\"><a href=\"#get-in-touch\">Contactez-Nous</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section id=\"main-slider\">
        <div class=\"owl-carousel\">
            ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["highlights"]) ? $context["highlights"] : $this->getContext($context, "highlights")));
        foreach ($context['_seq'] as $context["_key"] => $context["highlight"]) {
            // line 61
            echo "            <div class=\"item\" style=\"background-image: url(";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/bggg1.png"), "html", null, true);
            echo ");\">
                <div class=\"slider-inner\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"carousel-content\">
                                    <h2><span>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["highlight"], "titreHighlight", array()), "html", null, true);
            echo "</span></h2>
                                    <p>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["highlight"], "descHighlight", array()), "html", null, true);
            echo "</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['highlight'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "        </div>
    </section>

    <section id=\"cta\" class=\"wow fadeIn\">
    <div class=\"container\">
<div class=\"section-header\">
    <h2 class=\"section-title text-center wow fadeInDown\">A propos de nous</h2>
    <!--<p class=\"text-center wow fadeInDown\">Sesame Tech Club est un club crée par l'initiative d'un groupe d'étudiants de l'université Sesame <br> Notre club permet aux nouveaux étudiants de s’intégrer et de s’adapter à la vie estudiantine au sein de l’université SESAME.</p>-->
</div>

<div class=\"row\">
    <div class=\"col-sm-6 wow fadeInLeft\">
        <h3 class=\"column-title\">Video Intro</h3>
        <div class=\"embed-responsive embed-responsive-16by9\">
            <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/L2wOZkW7zIY\" frameborder=\"0\" gesture=\"media\" allow=\"encrypted-media\" allowfullscreen></iframe>
        </div>
    </div>

    <div class=\"col-sm-6 wow fadeInRight\">
        <div role=\"tabpanel\">
            <ul class=\"nav main-tab nav-justified\" role=\"tablist\">
                <li role=\"presentation\" class=\"active\">
                    <a href=\"#tab1\" role=\"tab\" data-toggle=\"tab\" aria-controls=\"tab1\" aria-expanded=\"true\">Présentation</a>
                </li>
                <li role=\"presentation\">
                    <a href=\"#tab2\" role=\"tab\" data-toggle=\"tab\" aria-controls=\"tab2\" aria-expanded=\"false\">Historique</a>
                </li>
                <li role=\"presentation\">
                    <a href=\"#tab3\" role=\"tab\" data-toggle=\"tab\" aria-controls=\"tab3\" aria-expanded=\"false\">Objectifs</a>
                </li>
            </ul>
            <div id=\"tab-content\" class=\"tab-content\">
                <div role=\"tabpanel\" class=\"tab-pane fade active in\" id=\"tab1\" aria-labelledby=\"tab1\">
                    <p>Une présentation du club.</p>
                </div>
                <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tab2\" aria-labelledby=\"tab2\">
                    <p>L'historique du club.</p>
                </div>
                <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tab3\" aria-labelledby=\"tab3\">
                    <p>Les objectifs du club.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
    </section>

    <section id=\"features\">
      <div class=\"container\">
        <div class=\"section-header\">
            <h2 class=\"section-title text-center wow fadeInDown\">Nos activités</h2>
            <p class=\"text-center wow fadeInDown\">Offrir des formations aux différents membres est parmis les objectifs de notre club <br> ça nous permet de s'améliorer </p>
        </div>

        <div class=\"row\">
            <div class=\"features\">
                <div class=\"col-md-4 col-sm-6 wow fadeInUp\" data-wow-duration=\"300ms\" data-wow-delay=\"0ms\">
                    <div class=\"media service-box\">
                        <div class=\"pull-left\">
                            <i class=\"fa fa-line-chart\"></i>
                        </div>
                        <div class=\"media-body\">
                            <h4 class=\"media-heading\">Workshops</h4>
                            <p>Workshops en développement(web et mobile) et en systèmes embarqués</p>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4 col-sm-6 wow fadeInUp\" data-wow-duration=\"300ms\" data-wow-delay=\"100ms\">
                    <div class=\"media service-box\">
                        <div class=\"pull-left\">
                            <i class=\"fa fa-cubes\"></i>
                        </div>
                        <div class=\"media-body\">
                            <h4 class=\"media-heading\">Formations</h4>
                            <p>Notre club offre des formations de soft skills et hard skills</p>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4 col-sm-6 wow fadeInUp\" data-wow-duration=\"300ms\" data-wow-delay=\"200ms\">
                    <div class=\"media service-box\">
                        <div class=\"pull-left\">
                            <i class=\"fa fa-pie-chart\"></i>
                        </div>
                        <div class=\"media-body\">
                            <h4 class=\"media-heading\">Evenements</h4>
                            <p>Organisation des événements technologiques et professionnelles</p>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4 col-sm-6 wow fadeInUp\" data-wow-duration=\"300ms\" data-wow-delay=\"300ms\">
                    <div class=\"media service-box\">
                        <div class=\"pull-left\">
                            <i class=\"fa fa-bar-chart\"></i>
                        </div>
                        <div class=\"media-body\">
                            <h4 class=\"media-heading\">Compétitions</h4>
                            <p>Des compétitions en dévéleppement</p>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4 col-sm-6 wow fadeInUp\" data-wow-duration=\"300ms\" data-wow-delay=\"400ms\">
                    <div class=\"media service-box\">
                        <div class=\"pull-left\">
                            <i class=\"fa fa-language\"></i>
                        </div>
                        <div class=\"media-body\">
                            <h4 class=\"media-heading\">Gestion de projets</h4>
                            <p>Répartition en équipes pour des projets</p>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4 col-sm-6 wow fadeInUp\" data-wow-duration=\"300ms\" data-wow-delay=\"500ms\">
                    <div class=\"media service-box\">
                        <div class=\"pull-left\">
                            <i class=\"fa fa-bullseye\"></i>
                        </div>
                        <div class=\"media-body\">
                            <h4 class=\"media-heading\">Robotique</h4>
                            <p>Notre club offre des activités en robotique</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>

    <section id=\"services\" >
      <div class=\"container\">
      <div class=\"section-header\">
          <h2 class=\"section-title text-center wow fadeInDown\">Événements</h2>
      </div>
<div class=\"row\">
      <div class=\"col-sm-6 wow fadeInLeft\">
                <h3 class=\"column-title\">Prochains événements</h3>
                <div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingOne\">
                            <h4 class=\"panel-title\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                                    Forum d'entreprise Edition 2
                                </a>
                            </h4>
                        </div>
                        <div id=\"collapseOne\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
                            <div class=\"panel-body\">
                                Suite à notre succès du forum d'entreprise 1ere edition, nous sommes entrain d'organiser une 2ème edition qui sera dédié aux stages d'été.
                            </div>
                        </div>
                    </div>
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingTwo\">
                            <h4 class=\"panel-title\">
                                <a class=\"collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                                    IOT 2018
                                </a>
                            </h4>
                        </div>
                        <div id=\"collapseTwo\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingTwo\">
                            <div class=\"panel-body\">
                                IOT 2018 prendra lieu à SESAME en Avril.
                            </div>
                        </div>
                    </div>
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingThree\">
                            <h4 class=\"panel-title\">
                                <a class=\"collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                                    Hackaton mobile
                                </a>
                            </h4>
                        </div>
                        <div id=\"collapseThree\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingThree\">
                            <div class=\"panel-body\">
                                Un hackaton d'applications mobiles sera organisé le 20/05/2018.
                            </div>
                        </div>
                    </div>
                </div>
      </div>
      <div class=\"col-sm-6 wow fadeInLeft\">
                <h3 class=\"column-title\">Anciens événements</h3>
                <div role=\"tabpanel\">
                    <ul class=\"nav main-tab nav-justified\" role=\"tablist\">
                        <li role=\"events\" class=\"active\">
                            <a href=\"#tab4\" role=\"tab\" data-toggle=\"tab\" aria-controls=\"tab4\" aria-expanded=\"true\">2017</a>
                        </li>
                        <li role=\"events\">
                            <a href=\"#tab5\" role=\"tab\" data-toggle=\"tab\" aria-controls=\"tab5\" aria-expanded=\"false\">2016</a>
                        </li>
                        <li role=\"events\">
                            <a href=\"#tab6\" role=\"tab\" data-toggle=\"tab\" aria-controls=\"tab6\" aria-expanded=\"false\">2015</a>
                        </li>
                        <li role=\"events\">
                            <a href=\"#tab7\" role=\"tab\" data-toggle=\"tab\" aria-controls=\"tab7\" aria-expanded=\"false\">2014</a>
                        </li>
                    </ul>
                    <div id=\"tab-content\" class=\"tab-content\">
                        <div role=\"tabpanel\" class=\"tab-pane fade active in\" id=\"tab4\" aria-labelledby=\"tab4\">
                            <p>2017 events</p>
                        </div>
                        <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tab5\" aria-labelledby=\"tab5\">
                            <p>2016 events</p>
                        </div>
                        <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tab6\" aria-labelledby=\"tab6\">
                            <p>2015 events</p>
                        </div>
                        <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tab7\" aria-labelledby=\"tab7\">
                            <p>2014 events</p>
                        </div>
                    </div>
                </div>
      </div>
    </div>
</div>
    </section><!--/#services-->

    <section id=\"portfolio\">
        <div class=\"container\">
            <div class=\"section-header\">
                <h2 class=\"section-title text-center wow fadeInDown\">Galerie</h2>
                <!--<p class=\"text-center wow fadeInDown\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>-->
            </div>

            <div class=\"text-center\">
                <ul class=\"portfolio-filter\">
                    <li><a class=\"active\" href=\"#\" data-filter=\"*\">Toutes les photos</a></li>
                    <li><a href=\"#\" data-filter=\".creative\">Workshops</a></li>
                    <li><a href=\"#\" data-filter=\".corporate\">Evenements</a></li>
                    <li><a href=\"#\" data-filter=\".portfolio\">Réunions</a></li>
                </ul><!--/#portfolio-filter-->
            </div>

            <div class=\"portfolio-items\">
                <div class=\"portfolio-item creative\">
                    <div class=\"portfolio-item-inner\">
                        <img class=\"img-responsive\" src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/portfolio/111.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h3>1</h3>
                            <a class=\"preview\" href=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/portfolio/111.jpg"), "html", null, true);
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class=\"portfolio-item corporate portfolio\">
                    <div class=\"portfolio-item-inner\">
                        <img class=\"img-responsive\" src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/portfolio/222.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h3>2</h3>
                            <a class=\"preview\" href=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/portfolio/222.jpg"), "html", null, true);
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class=\"portfolio-item creative\">
                    <div class=\"portfolio-item-inner\">
                        <img class=\"img-responsive\" src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/portfolio/333.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h3>3</h3>
                            <a class=\"preview\" href=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/portfolio/333.jpg"), "html", null, true);
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class=\"portfolio-item corporate\">
                    <div class=\"portfolio-item-inner\">
                        <img class=\"img-responsive\" src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/portfolio/4444.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h3>4</h3>
                            <a class=\"preview\" href=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/portfolio/4444.jpg"), "html", null, true);
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class=\"portfolio-item creative portfolio\">
                    <div class=\"portfolio-item-inner\">
                        <img class=\"img-responsive\" src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/portfolio/11.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h3>5</h3>
                            <a class=\"preview\" href=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/portfolio/11.jpg"), "html", null, true);
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class=\"portfolio-item corporate\">
                    <div class=\"portfolio-item-inner\">
                        <img class=\"img-responsive\" src=\"";
        // line 368
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/portfolio/1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h3>5</h3>
                            <a class=\"preview\" href=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/portfolio/1.jpg"), "html", null, true);
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class=\"portfolio-item creative portfolio\">
                    <div class=\"portfolio-item-inner\">
                        <img class=\"img-responsive\" src=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/portfolio/2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h3>7</h3>
                            <a class=\"preview\" href=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/portfolio/2.jpg"), "html", null, true);
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class=\"portfolio-item corporate\">
                    <div class=\"portfolio-item-inner\">
                        <img class=\"img-responsive\" src=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/portfolio/3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h3>8</h3>
                            <a class=\"preview\" href=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/portfolio/3.jpg"), "html", null, true);
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
            </div>
        </div><!--/.container-->
    </section><!--/#portfolio-->

    <section id=\"meet-team\">
        <div class=\"container\">
            <div class=\"section-header\">
                <h2 class=\"section-title text-center wow fadeInDown\">Membres</h2>
                <p class=\"text-center wow fadeInDown\">Notre club regroupe des membres de différentes spécialités</p>
            </div>
                  <div class=\"col-sm-6 wow fadeInLeft\">
                    <div id=\"carousel-testimonial\" class=\"carousel slide text-center\" data-ride=\"carousel\">
                        <!-- Wrapper for slides -->
                        <div class=\"carousel-inner\" role=\"listbox\">
                            <div class=\"item active\">
                                <p><img class=\"img-circle img-thumbnail\" src=\"";
        // line 410
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/testimonial/1.jpg"), "html", null, true);
        echo "\" alt=\"\"></p>
                                <h4>Sabri Sahli</h4>
                                <small>Fondateur de Sesame Tech Club</small>
                                <p>Etudiant en 5eme annèe Systèmes embarqués</p>
                                <ul class=\"social-icons\">
                                    <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                </ul><br>
                            </div>
                            <div class=\"item\">
                              <p><img class=\"img-circle img-thumbnail\" src=\"";
        // line 422
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/testimonial/0.jpg"), "html", null, true);
        echo "\" alt=\"\"></p>
                              <h4>Mustapha Ben Yedder</h4>
                              <small>Président de Sesame Tech Club</small>
                              <p>Etudiant en 4eme annèe Génie Logiciel</p>
                              <ul class=\"social-icons\">
                                  <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                  <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                  <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                                  <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                              </ul><br>
                            </div>
                            <div class=\"item\">
                              <p><img class=\"img-circle img-thumbnail\" src=\"";
        // line 434
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/testimonial/3.jpg"), "html", null, true);
        echo "\" alt=\"\"></p>
                              <h4>Safa Kachroudi</h4>
                              <small>Equipe Média & Sponsoring</small>
                              <p>Etudiante en 4eme annèe Génie Logiciel</p>
                              <ul class=\"social-icons\">
                                  <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                  <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                  <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                                  <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                              </ul><br>
                            </div>
                        </div>

                        <!-- Controls -->
                        <div class=\"btns\">
                            <a class=\"btn btn-primary btn-sm\" href=\"#carousel-testimonial\" role=\"button\" data-slide=\"prev\">
                                <span class=\"fa fa-angle-left\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Previous</span>
                            </a>
                            <a class=\"btn btn-primary btn-sm\" href=\"#carousel-testimonial\" role=\"button\" data-slide=\"next\">
                                <span class=\"fa fa-angle-right\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Next</span>
                            </a>
                        </div>
                    </div>
                  </div>
                    <div class=\"col-sm-6 wow fadeInRight\">
                        <h3 class=\"column-title\">Nos compétences</h3>
                        <strong>Systèmes Embarqués</strong>
                        <div class=\"progress\">
                            <div class=\"progress-bar progress-bar-primary\" role=\"progressbar\" data-width=\"85\">85%</div>
                        </div>
                        <strong>Design</strong>
                        <div class=\"progress\">
                            <div class=\"progress-bar progress-bar-primary\" role=\"progressbar\" data-width=\"70\">70%</div>
                        </div>
                        <strong>Développement Web & Mobile</strong>
                        <div class=\"progress\">
                            <div class=\"progress-bar progress-bar-primary\" role=\"progressbar\" data-width=\"90\">90%</div>
                        </div>
                        <strong>Capacité Organisationnelle</strong>
                        <div class=\"progress\">
                            <div class=\"progress-bar progress-bar-primary\" role=\"progressbar\" data-width=\"80\">80%</div>
                        </div>
                    </div>
                </div>
            <div class=\"divider\"></div>

            </div>
        </div>
    </section><!--/#meet-team-->

    <section id=\"pricing\">
        <div class=\"container\">
            <div class=\"section-header\">
                <h2 class=\"section-title text-center wow fadeInDown\">Rejoignez-Nous</h2>
                <p class=\"text-center wow fadeInDown\">Seulement les étudiants de SESAME peuvent s'inscrire. Votre demande d'inscription sera validé par le RH </p>
            </div>

            <div class=\"col-sm-6 wow fadeInLeft\">
                      <h3 class=\"column-title\">S'authentifier</h3>
                      <form id=\"main-contact-form1\" name=\"contact-form\" method=\"post\" action=\"#\">
                                <div class=\"form-group\">
                                    <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Email\" required>
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"Mot de passe\" required>
                                </div>
                                <button type=\"submit\" class=\"btn btn-primary\">Se connecter</button>
                            </form>
            </div>
            <div class=\"col-sm-6 wow fadeInLeft\">
                      <h3 class=\"column-title\">S'inscrire au club</h3>
                      <form id=\"main-contact-form2\" name=\"contact-form\" method=\"post\" action=\"#\">
                        <div class=\"form-group\">
                            <input type=\"name\" name=\"nom\" class=\"form-control\" placeholder=\"Nom\" required>
                        </div>
                        <div class=\"form-group\">
                            <input type=\"name\" name=\"prenom\" class=\"form-control\" placeholder=\"Prénom\" required>
                        </div>
                        <div class=\"form-group\">
                            <input type=\"email\" name=\"name\" class=\"form-control\" placeholder=\"Email\" required>
                        </div>
                        <div class=\"form-group\">
                            <input type=\"text\" name=\"numero\" class=\"form-control\" placeholder=\"Numéro de téléphone\" required>
                        </div>
                        <div class=\"form-group\">
                            <input type=\"password\" name=\"mdp\" class=\"form-control\" placeholder=\"Mot de passe\" required>
                        </div>
                        <div class=\"form-group\">
                            <input type=\"password\" name=\"cmdp\" class=\"form-control\" placeholder=\"Confirmer votre mot de passe\" required>
                        </div>
                        <div class=\"form-group\">
                            <input type=\"text\" name=\"classe\" class=\"form-control\" placeholder=\"Classe\" required>
                        </div>
                        <button type=\"submit\" class=\"btn btn-primary\">S'inscrire</button>
                      </form>
            </div>
        </div>
    </section><!--/#pricing-->

    <section id=\"get-in-touch\">
    </section>
    <section id=\"contact\">
    <div id=\"google-map\" style=\"height:650px\" data-latitude=\"36.8982030\" data-longitude=\"10.1923340\"></div>
    <div class=\"container-wrapper\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-4 col-sm-offset-8\">
                    <div class=\"contact-form\">
                        <h3>Contact Informations</h3>
                        <address>
                          ZI Chotrana I BP4 Parc Technologique El Ghazela <br>
                          +216 53 944 594
                        </address>

                        <form id=\"main-contact-form3\" name=\"contact-form\" method=\"post\" action=\"#\">
                            <div class=\"form-group\">
                                <input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"Nom complet\" required>
                            </div>
                            <div class=\"form-group\">
                                <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Email\" required>
                            </div>
                            <div class=\"form-group\">
                                <input type=\"text\" name=\"subject\" class=\"form-control\" placeholder=\"Objet\" required>
                            </div>
                            <div class=\"form-group\">
                                <textarea name=\"message\" class=\"form-control\" rows=\"8\" placeholder=\"Message\" required></textarea>
                            </div>
                            <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer id=\"footer\">
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-6\">
            &copy; 2018 Sesame Tech Club
        </div>
        <div class=\"col-sm-6\">
            <ul class=\"social-icons\">
                <li><a href=\"https://www.facebook.com/SesameTechClub\"><i class=\"fa fa-facebook\"></i></a></li>
                <li><a href=\"https://www.youtube.com/channel/UCpglxSgoe-9_AL6yYA1-EiQ\"><i class=\"fa fa-youtube\"></i></a></li>
                <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                <li><a href=\"#\"><i class=\"fa fa-github\"></i></a></li>
            </ul>
        </div>
    </div>
</div>
</footer><!--/#footer-->

    <script src=\"";
        // line 590
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 591
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 592
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://maps.google.com/maps/api/js?sensor=true"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 593
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 594
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/mousescroll.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 595
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/smoothscroll.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 596
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 597
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.isotope.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 598
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.inview.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 599
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/wow.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 600
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
        
        $__internal_91105782615eec743ac8631a41ecd8b65c15b645571579065c63e6c3242493a4->leave($__internal_91105782615eec743ac8631a41ecd8b65c15b645571579065c63e6c3242493a4_prof);

    }

    public function getTemplateName()
    {
        return "STCvisitorBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  770 => 600,  766 => 599,  762 => 598,  758 => 597,  754 => 596,  750 => 595,  746 => 594,  742 => 593,  738 => 592,  734 => 591,  730 => 590,  571 => 434,  556 => 422,  541 => 410,  519 => 391,  513 => 388,  503 => 381,  497 => 378,  487 => 371,  481 => 368,  471 => 361,  465 => 358,  455 => 351,  449 => 348,  439 => 341,  433 => 338,  423 => 331,  417 => 328,  407 => 321,  401 => 318,  157 => 76,  143 => 68,  139 => 67,  129 => 61,  125 => 60,  99 => 37,  82 => 23,  78 => 22,  74 => 21,  70 => 20,  66 => 19,  61 => 17,  57 => 16,  53 => 15,  49 => 14,  45 => 13,  41 => 12,  37 => 11,  33 => 10,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/*     <title>Sesame Tech Club</title>*/
/* */
/*     <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('css/owl.transitions.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('css/prettyPhoto.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('css/main.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">*/
/* */
/*     <link rel="shortcut icon" href="{{asset('images/ico/robot.png')}}">*/
/*     <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('images/ico/apple-touch-icon-144-precomposed.png')}}">*/
/*     <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('images/ico/apple-touch-icon-114-precomposed.png')}}">*/
/*     <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('images/ico/apple-touch-icon-72-precomposed.png')}}">*/
/*     <link rel="apple-touch-icon-precomposed" href="{{asset('images/ico/apple-touch-icon-57-precomposed.png')}}">*/
/* </head>*/
/* */
/* <body id="home" class="homepage">*/
/*     <header id="header">*/
/*         <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">*/
/*             <div class="container">*/
/*                 <div class="navbar-header">*/
/*                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/*                         <span class="sr-only">Toggle navigation</span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/*                     <a class="navbar-brand" href="index.html"><img src="{{asset('images/logo.png')}}" alt="logo"></a>*/
/*                 </div>*/
/* */
/*                 <div class="collapse navbar-collapse navbar-right">*/
/*                     <ul class="nav navbar-nav">*/
/*                         <li class="scroll active"><a href="#home">Accueil</a></li>*/
/*                         <li class="scroll"><a href="#cta">A propos de nous</a></li>*/
/*                         <li class="scroll"><a href="#features">Activités</a></li>*/
/*                         <li class="scroll"><a href="#services">Evenements</a></li>*/
/*                         <li class="scroll"><a href="#portfolio">Galerie</a></li>*/
/*                         <!--<li class="scroll"><a href="#about">Evenements</a></li>-->*/
/*                         <li class="scroll"><a href="#meet-team">Membres</a></li>*/
/*                         <li class="scroll"><a href="#pricing">Sign In/Up</a></li>*/
/*                         <!--<li class="scroll"><a href="#blog">Articles</a></li>-->*/
/*                         <li class="scroll"><a href="#get-in-touch">Contactez-Nous</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </nav>*/
/*     </header>*/
/* */
/*     <section id="main-slider">*/
/*         <div class="owl-carousel">*/
/*             {% for highlight in highlights %}*/
/*             <div class="item" style="background-image: url({{asset('images/bggg1.png')}});">*/
/*                 <div class="slider-inner">*/
/*                     <div class="container">*/
/*                         <div class="row">*/
/*                             <div class="col-sm-6">*/
/*                                 <div class="carousel-content">*/
/*                                     <h2><span>{{highlight.titreHighlight}}</span></h2>*/
/*                                     <p>{{highlight.descHighlight}}</p>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div><!--/.item-->*/
/*             {% endfor %}*/
/*         </div>*/
/*     </section>*/
/* */
/*     <section id="cta" class="wow fadeIn">*/
/*     <div class="container">*/
/* <div class="section-header">*/
/*     <h2 class="section-title text-center wow fadeInDown">A propos de nous</h2>*/
/*     <!--<p class="text-center wow fadeInDown">Sesame Tech Club est un club crée par l'initiative d'un groupe d'étudiants de l'université Sesame <br> Notre club permet aux nouveaux étudiants de s’intégrer et de s’adapter à la vie estudiantine au sein de l’université SESAME.</p>-->*/
/* </div>*/
/* */
/* <div class="row">*/
/*     <div class="col-sm-6 wow fadeInLeft">*/
/*         <h3 class="column-title">Video Intro</h3>*/
/*         <div class="embed-responsive embed-responsive-16by9">*/
/*             <iframe width="560" height="315" src="https://www.youtube.com/embed/L2wOZkW7zIY" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="col-sm-6 wow fadeInRight">*/
/*         <div role="tabpanel">*/
/*             <ul class="nav main-tab nav-justified" role="tablist">*/
/*                 <li role="presentation" class="active">*/
/*                     <a href="#tab1" role="tab" data-toggle="tab" aria-controls="tab1" aria-expanded="true">Présentation</a>*/
/*                 </li>*/
/*                 <li role="presentation">*/
/*                     <a href="#tab2" role="tab" data-toggle="tab" aria-controls="tab2" aria-expanded="false">Historique</a>*/
/*                 </li>*/
/*                 <li role="presentation">*/
/*                     <a href="#tab3" role="tab" data-toggle="tab" aria-controls="tab3" aria-expanded="false">Objectifs</a>*/
/*                 </li>*/
/*             </ul>*/
/*             <div id="tab-content" class="tab-content">*/
/*                 <div role="tabpanel" class="tab-pane fade active in" id="tab1" aria-labelledby="tab1">*/
/*                     <p>Une présentation du club.</p>*/
/*                 </div>*/
/*                 <div role="tabpanel" class="tab-pane fade" id="tab2" aria-labelledby="tab2">*/
/*                     <p>L'historique du club.</p>*/
/*                 </div>*/
/*                 <div role="tabpanel" class="tab-pane fade" id="tab3" aria-labelledby="tab3">*/
/*                     <p>Les objectifs du club.</p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* </div>*/
/*     </section>*/
/* */
/*     <section id="features">*/
/*       <div class="container">*/
/*         <div class="section-header">*/
/*             <h2 class="section-title text-center wow fadeInDown">Nos activités</h2>*/
/*             <p class="text-center wow fadeInDown">Offrir des formations aux différents membres est parmis les objectifs de notre club <br> ça nous permet de s'améliorer </p>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="features">*/
/*                 <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">*/
/*                     <div class="media service-box">*/
/*                         <div class="pull-left">*/
/*                             <i class="fa fa-line-chart"></i>*/
/*                         </div>*/
/*                         <div class="media-body">*/
/*                             <h4 class="media-heading">Workshops</h4>*/
/*                             <p>Workshops en développement(web et mobile) et en systèmes embarqués</p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">*/
/*                     <div class="media service-box">*/
/*                         <div class="pull-left">*/
/*                             <i class="fa fa-cubes"></i>*/
/*                         </div>*/
/*                         <div class="media-body">*/
/*                             <h4 class="media-heading">Formations</h4>*/
/*                             <p>Notre club offre des formations de soft skills et hard skills</p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">*/
/*                     <div class="media service-box">*/
/*                         <div class="pull-left">*/
/*                             <i class="fa fa-pie-chart"></i>*/
/*                         </div>*/
/*                         <div class="media-body">*/
/*                             <h4 class="media-heading">Evenements</h4>*/
/*                             <p>Organisation des événements technologiques et professionnelles</p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">*/
/*                     <div class="media service-box">*/
/*                         <div class="pull-left">*/
/*                             <i class="fa fa-bar-chart"></i>*/
/*                         </div>*/
/*                         <div class="media-body">*/
/*                             <h4 class="media-heading">Compétitions</h4>*/
/*                             <p>Des compétitions en dévéleppement</p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">*/
/*                     <div class="media service-box">*/
/*                         <div class="pull-left">*/
/*                             <i class="fa fa-language"></i>*/
/*                         </div>*/
/*                         <div class="media-body">*/
/*                             <h4 class="media-heading">Gestion de projets</h4>*/
/*                             <p>Répartition en équipes pour des projets</p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="500ms">*/
/*                     <div class="media service-box">*/
/*                         <div class="pull-left">*/
/*                             <i class="fa fa-bullseye"></i>*/
/*                         </div>*/
/*                         <div class="media-body">*/
/*                             <h4 class="media-heading">Robotique</h4>*/
/*                             <p>Notre club offre des activités en robotique</p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*   </section>*/
/* */
/*     <section id="services" >*/
/*       <div class="container">*/
/*       <div class="section-header">*/
/*           <h2 class="section-title text-center wow fadeInDown">Événements</h2>*/
/*       </div>*/
/* <div class="row">*/
/*       <div class="col-sm-6 wow fadeInLeft">*/
/*                 <h3 class="column-title">Prochains événements</h3>*/
/*                 <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">*/
/*                     <div class="panel panel-default">*/
/*                         <div class="panel-heading" role="tab" id="headingOne">*/
/*                             <h4 class="panel-title">*/
/*                                 <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">*/
/*                                     Forum d'entreprise Edition 2*/
/*                                 </a>*/
/*                             </h4>*/
/*                         </div>*/
/*                         <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">*/
/*                             <div class="panel-body">*/
/*                                 Suite à notre succès du forum d'entreprise 1ere edition, nous sommes entrain d'organiser une 2ème edition qui sera dédié aux stages d'été.*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="panel panel-default">*/
/*                         <div class="panel-heading" role="tab" id="headingTwo">*/
/*                             <h4 class="panel-title">*/
/*                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">*/
/*                                     IOT 2018*/
/*                                 </a>*/
/*                             </h4>*/
/*                         </div>*/
/*                         <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">*/
/*                             <div class="panel-body">*/
/*                                 IOT 2018 prendra lieu à SESAME en Avril.*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="panel panel-default">*/
/*                         <div class="panel-heading" role="tab" id="headingThree">*/
/*                             <h4 class="panel-title">*/
/*                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">*/
/*                                     Hackaton mobile*/
/*                                 </a>*/
/*                             </h4>*/
/*                         </div>*/
/*                         <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">*/
/*                             <div class="panel-body">*/
/*                                 Un hackaton d'applications mobiles sera organisé le 20/05/2018.*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*       </div>*/
/*       <div class="col-sm-6 wow fadeInLeft">*/
/*                 <h3 class="column-title">Anciens événements</h3>*/
/*                 <div role="tabpanel">*/
/*                     <ul class="nav main-tab nav-justified" role="tablist">*/
/*                         <li role="events" class="active">*/
/*                             <a href="#tab4" role="tab" data-toggle="tab" aria-controls="tab4" aria-expanded="true">2017</a>*/
/*                         </li>*/
/*                         <li role="events">*/
/*                             <a href="#tab5" role="tab" data-toggle="tab" aria-controls="tab5" aria-expanded="false">2016</a>*/
/*                         </li>*/
/*                         <li role="events">*/
/*                             <a href="#tab6" role="tab" data-toggle="tab" aria-controls="tab6" aria-expanded="false">2015</a>*/
/*                         </li>*/
/*                         <li role="events">*/
/*                             <a href="#tab7" role="tab" data-toggle="tab" aria-controls="tab7" aria-expanded="false">2014</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                     <div id="tab-content" class="tab-content">*/
/*                         <div role="tabpanel" class="tab-pane fade active in" id="tab4" aria-labelledby="tab4">*/
/*                             <p>2017 events</p>*/
/*                         </div>*/
/*                         <div role="tabpanel" class="tab-pane fade" id="tab5" aria-labelledby="tab5">*/
/*                             <p>2016 events</p>*/
/*                         </div>*/
/*                         <div role="tabpanel" class="tab-pane fade" id="tab6" aria-labelledby="tab6">*/
/*                             <p>2015 events</p>*/
/*                         </div>*/
/*                         <div role="tabpanel" class="tab-pane fade" id="tab7" aria-labelledby="tab7">*/
/*                             <p>2014 events</p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*       </div>*/
/*     </div>*/
/* </div>*/
/*     </section><!--/#services-->*/
/* */
/*     <section id="portfolio">*/
/*         <div class="container">*/
/*             <div class="section-header">*/
/*                 <h2 class="section-title text-center wow fadeInDown">Galerie</h2>*/
/*                 <!--<p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>-->*/
/*             </div>*/
/* */
/*             <div class="text-center">*/
/*                 <ul class="portfolio-filter">*/
/*                     <li><a class="active" href="#" data-filter="*">Toutes les photos</a></li>*/
/*                     <li><a href="#" data-filter=".creative">Workshops</a></li>*/
/*                     <li><a href="#" data-filter=".corporate">Evenements</a></li>*/
/*                     <li><a href="#" data-filter=".portfolio">Réunions</a></li>*/
/*                 </ul><!--/#portfolio-filter-->*/
/*             </div>*/
/* */
/*             <div class="portfolio-items">*/
/*                 <div class="portfolio-item creative">*/
/*                     <div class="portfolio-item-inner">*/
/*                         <img class="img-responsive" src="{{asset('images/portfolio/111.jpg')}}" alt="">*/
/*                         <div class="portfolio-info">*/
/*                             <h3>1</h3>*/
/*                             <a class="preview" href="{{asset('images/portfolio/111.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div><!--/.portfolio-item-->*/
/* */
/*                 <div class="portfolio-item corporate portfolio">*/
/*                     <div class="portfolio-item-inner">*/
/*                         <img class="img-responsive" src="{{asset('images/portfolio/222.jpg')}}" alt="">*/
/*                         <div class="portfolio-info">*/
/*                             <h3>2</h3>*/
/*                             <a class="preview" href="{{asset('images/portfolio/222.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div><!--/.portfolio-item-->*/
/* */
/*                 <div class="portfolio-item creative">*/
/*                     <div class="portfolio-item-inner">*/
/*                         <img class="img-responsive" src="{{asset('images/portfolio/333.jpg')}}" alt="">*/
/*                         <div class="portfolio-info">*/
/*                             <h3>3</h3>*/
/*                             <a class="preview" href="{{asset('images/portfolio/333.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div><!--/.portfolio-item-->*/
/* */
/*                 <div class="portfolio-item corporate">*/
/*                     <div class="portfolio-item-inner">*/
/*                         <img class="img-responsive" src="{{asset('images/portfolio/4444.jpg')}}" alt="">*/
/*                         <div class="portfolio-info">*/
/*                             <h3>4</h3>*/
/*                             <a class="preview" href="{{asset('images/portfolio/4444.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div><!--/.portfolio-item-->*/
/* */
/*                 <div class="portfolio-item creative portfolio">*/
/*                     <div class="portfolio-item-inner">*/
/*                         <img class="img-responsive" src="{{asset('images/portfolio/11.jpg')}}" alt="">*/
/*                         <div class="portfolio-info">*/
/*                             <h3>5</h3>*/
/*                             <a class="preview" href="{{asset('images/portfolio/11.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div><!--/.portfolio-item-->*/
/* */
/*                 <div class="portfolio-item corporate">*/
/*                     <div class="portfolio-item-inner">*/
/*                         <img class="img-responsive" src="{{asset('images/portfolio/1.jpg')}}" alt="">*/
/*                         <div class="portfolio-info">*/
/*                             <h3>5</h3>*/
/*                             <a class="preview" href="{{asset('images/portfolio/1.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div><!--/.portfolio-item-->*/
/* */
/*                 <div class="portfolio-item creative portfolio">*/
/*                     <div class="portfolio-item-inner">*/
/*                         <img class="img-responsive" src="{{asset('images/portfolio/2.jpg')}}" alt="">*/
/*                         <div class="portfolio-info">*/
/*                             <h3>7</h3>*/
/*                             <a class="preview" href="{{asset('images/portfolio/2.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div><!--/.portfolio-item-->*/
/* */
/*                 <div class="portfolio-item corporate">*/
/*                     <div class="portfolio-item-inner">*/
/*                         <img class="img-responsive" src="{{asset('images/portfolio/3.jpg')}}" alt="">*/
/*                         <div class="portfolio-info">*/
/*                             <h3>8</h3>*/
/*                             <a class="preview" href="{{asset('images/portfolio/3.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div><!--/.portfolio-item-->*/
/*             </div>*/
/*         </div><!--/.container-->*/
/*     </section><!--/#portfolio-->*/
/* */
/*     <section id="meet-team">*/
/*         <div class="container">*/
/*             <div class="section-header">*/
/*                 <h2 class="section-title text-center wow fadeInDown">Membres</h2>*/
/*                 <p class="text-center wow fadeInDown">Notre club regroupe des membres de différentes spécialités</p>*/
/*             </div>*/
/*                   <div class="col-sm-6 wow fadeInLeft">*/
/*                     <div id="carousel-testimonial" class="carousel slide text-center" data-ride="carousel">*/
/*                         <!-- Wrapper for slides -->*/
/*                         <div class="carousel-inner" role="listbox">*/
/*                             <div class="item active">*/
/*                                 <p><img class="img-circle img-thumbnail" src="{{asset('images/testimonial/1.jpg')}}" alt=""></p>*/
/*                                 <h4>Sabri Sahli</h4>*/
/*                                 <small>Fondateur de Sesame Tech Club</small>*/
/*                                 <p>Etudiant en 5eme annèe Systèmes embarqués</p>*/
/*                                 <ul class="social-icons">*/
/*                                     <li><a href="#"><i class="fa fa-facebook"></i></a></li>*/
/*                                     <li><a href="#"><i class="fa fa-twitter"></i></a></li>*/
/*                                     <li><a href="#"><i class="fa fa-google-plus"></i></a></li>*/
/*                                     <li><a href="#"><i class="fa fa-linkedin"></i></a></li>*/
/*                                 </ul><br>*/
/*                             </div>*/
/*                             <div class="item">*/
/*                               <p><img class="img-circle img-thumbnail" src="{{asset('images/testimonial/0.jpg')}}" alt=""></p>*/
/*                               <h4>Mustapha Ben Yedder</h4>*/
/*                               <small>Président de Sesame Tech Club</small>*/
/*                               <p>Etudiant en 4eme annèe Génie Logiciel</p>*/
/*                               <ul class="social-icons">*/
/*                                   <li><a href="#"><i class="fa fa-facebook"></i></a></li>*/
/*                                   <li><a href="#"><i class="fa fa-twitter"></i></a></li>*/
/*                                   <li><a href="#"><i class="fa fa-google-plus"></i></a></li>*/
/*                                   <li><a href="#"><i class="fa fa-linkedin"></i></a></li>*/
/*                               </ul><br>*/
/*                             </div>*/
/*                             <div class="item">*/
/*                               <p><img class="img-circle img-thumbnail" src="{{asset('images/testimonial/3.jpg')}}" alt=""></p>*/
/*                               <h4>Safa Kachroudi</h4>*/
/*                               <small>Equipe Média & Sponsoring</small>*/
/*                               <p>Etudiante en 4eme annèe Génie Logiciel</p>*/
/*                               <ul class="social-icons">*/
/*                                   <li><a href="#"><i class="fa fa-facebook"></i></a></li>*/
/*                                   <li><a href="#"><i class="fa fa-twitter"></i></a></li>*/
/*                                   <li><a href="#"><i class="fa fa-google-plus"></i></a></li>*/
/*                                   <li><a href="#"><i class="fa fa-linkedin"></i></a></li>*/
/*                               </ul><br>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <!-- Controls -->*/
/*                         <div class="btns">*/
/*                             <a class="btn btn-primary btn-sm" href="#carousel-testimonial" role="button" data-slide="prev">*/
/*                                 <span class="fa fa-angle-left" aria-hidden="true"></span>*/
/*                                 <span class="sr-only">Previous</span>*/
/*                             </a>*/
/*                             <a class="btn btn-primary btn-sm" href="#carousel-testimonial" role="button" data-slide="next">*/
/*                                 <span class="fa fa-angle-right" aria-hidden="true"></span>*/
/*                                 <span class="sr-only">Next</span>*/
/*                             </a>*/
/*                         </div>*/
/*                     </div>*/
/*                   </div>*/
/*                     <div class="col-sm-6 wow fadeInRight">*/
/*                         <h3 class="column-title">Nos compétences</h3>*/
/*                         <strong>Systèmes Embarqués</strong>*/
/*                         <div class="progress">*/
/*                             <div class="progress-bar progress-bar-primary" role="progressbar" data-width="85">85%</div>*/
/*                         </div>*/
/*                         <strong>Design</strong>*/
/*                         <div class="progress">*/
/*                             <div class="progress-bar progress-bar-primary" role="progressbar" data-width="70">70%</div>*/
/*                         </div>*/
/*                         <strong>Développement Web & Mobile</strong>*/
/*                         <div class="progress">*/
/*                             <div class="progress-bar progress-bar-primary" role="progressbar" data-width="90">90%</div>*/
/*                         </div>*/
/*                         <strong>Capacité Organisationnelle</strong>*/
/*                         <div class="progress">*/
/*                             <div class="progress-bar progress-bar-primary" role="progressbar" data-width="80">80%</div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             <div class="divider"></div>*/
/* */
/*             </div>*/
/*         </div>*/
/*     </section><!--/#meet-team-->*/
/* */
/*     <section id="pricing">*/
/*         <div class="container">*/
/*             <div class="section-header">*/
/*                 <h2 class="section-title text-center wow fadeInDown">Rejoignez-Nous</h2>*/
/*                 <p class="text-center wow fadeInDown">Seulement les étudiants de SESAME peuvent s'inscrire. Votre demande d'inscription sera validé par le RH </p>*/
/*             </div>*/
/* */
/*             <div class="col-sm-6 wow fadeInLeft">*/
/*                       <h3 class="column-title">S'authentifier</h3>*/
/*                       <form id="main-contact-form1" name="contact-form" method="post" action="#">*/
/*                                 <div class="form-group">*/
/*                                     <input type="email" name="email" class="form-control" placeholder="Email" required>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <input type="password" name="password" class="form-control" placeholder="Mot de passe" required>*/
/*                                 </div>*/
/*                                 <button type="submit" class="btn btn-primary">Se connecter</button>*/
/*                             </form>*/
/*             </div>*/
/*             <div class="col-sm-6 wow fadeInLeft">*/
/*                       <h3 class="column-title">S'inscrire au club</h3>*/
/*                       <form id="main-contact-form2" name="contact-form" method="post" action="#">*/
/*                         <div class="form-group">*/
/*                             <input type="name" name="nom" class="form-control" placeholder="Nom" required>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <input type="name" name="prenom" class="form-control" placeholder="Prénom" required>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <input type="email" name="name" class="form-control" placeholder="Email" required>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <input type="text" name="numero" class="form-control" placeholder="Numéro de téléphone" required>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <input type="password" name="mdp" class="form-control" placeholder="Mot de passe" required>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <input type="password" name="cmdp" class="form-control" placeholder="Confirmer votre mot de passe" required>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <input type="text" name="classe" class="form-control" placeholder="Classe" required>*/
/*                         </div>*/
/*                         <button type="submit" class="btn btn-primary">S'inscrire</button>*/
/*                       </form>*/
/*             </div>*/
/*         </div>*/
/*     </section><!--/#pricing-->*/
/* */
/*     <section id="get-in-touch">*/
/*     </section>*/
/*     <section id="contact">*/
/*     <div id="google-map" style="height:650px" data-latitude="36.8982030" data-longitude="10.1923340"></div>*/
/*     <div class="container-wrapper">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-sm-4 col-sm-offset-8">*/
/*                     <div class="contact-form">*/
/*                         <h3>Contact Informations</h3>*/
/*                         <address>*/
/*                           ZI Chotrana I BP4 Parc Technologique El Ghazela <br>*/
/*                           +216 53 944 594*/
/*                         </address>*/
/* */
/*                         <form id="main-contact-form3" name="contact-form" method="post" action="#">*/
/*                             <div class="form-group">*/
/*                                 <input type="text" name="name" class="form-control" placeholder="Nom complet" required>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <input type="email" name="email" class="form-control" placeholder="Email" required>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <input type="text" name="subject" class="form-control" placeholder="Objet" required>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <textarea name="message" class="form-control" rows="8" placeholder="Message" required></textarea>*/
/*                             </div>*/
/*                             <button type="submit" class="btn btn-primary">Envoyer</button>*/
/*                         </form>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* */
/* <footer id="footer">*/
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-sm-6">*/
/*             &copy; 2018 Sesame Tech Club*/
/*         </div>*/
/*         <div class="col-sm-6">*/
/*             <ul class="social-icons">*/
/*                 <li><a href="https://www.facebook.com/SesameTechClub"><i class="fa fa-facebook"></i></a></li>*/
/*                 <li><a href="https://www.youtube.com/channel/UCpglxSgoe-9_AL6yYA1-EiQ"><i class="fa fa-youtube"></i></a></li>*/
/*                 <li><a href="#"><i class="fa fa-linkedin"></i></a></li>*/
/*                 <li><a href="#"><i class="fa fa-github"></i></a></li>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* </footer><!--/#footer-->*/
/* */
/*     <script src="{{asset('js/jquery.js')}}"></script>*/
/*     <script src="{{asset('js/bootstrap.min.js')}}"></script>*/
/*     <script src="{{asset('http://maps.google.com/maps/api/js?sensor=true')}}"></script>*/
/*     <script src="{{asset('js/owl.carousel.min.js')}}"></script>*/
/*     <script src="{{asset('js/mousescroll.js')}}"></script>*/
/*     <script src="{{asset('js/smoothscroll.js')}}"></script>*/
/*     <script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>*/
/*     <script src="{{asset('js/jquery.isotope.min.js')}}"></script>*/
/*     <script src="{{asset('js/jquery.inview.min.js')}}"></script>*/
/*     <script src="{{asset('js/wow.min.js')}}"></script>*/
/*     <script src="{{asset('js/main.js')}}"></script>*/
/* </body>*/
/* </html>*/
/* */
