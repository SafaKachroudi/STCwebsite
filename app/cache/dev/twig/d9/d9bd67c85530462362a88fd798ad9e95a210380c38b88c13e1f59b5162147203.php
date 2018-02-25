<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d47c0ca15043e1b303c0d9bff07c83edf08e5db35381fe9f4c731cf977b2e4d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a40ca17789ed3afe69aa7e9207c68ddfcb1ba45168167070e881bd3acce9c03 = $this->env->getExtension("native_profiler");
        $__internal_7a40ca17789ed3afe69aa7e9207c68ddfcb1ba45168167070e881bd3acce9c03->enter($__internal_7a40ca17789ed3afe69aa7e9207c68ddfcb1ba45168167070e881bd3acce9c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a40ca17789ed3afe69aa7e9207c68ddfcb1ba45168167070e881bd3acce9c03->leave($__internal_7a40ca17789ed3afe69aa7e9207c68ddfcb1ba45168167070e881bd3acce9c03_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6257324c8543f01c5f21a91342517280a73ec5482004743a2396bbbf62075594 = $this->env->getExtension("native_profiler");
        $__internal_6257324c8543f01c5f21a91342517280a73ec5482004743a2396bbbf62075594->enter($__internal_6257324c8543f01c5f21a91342517280a73ec5482004743a2396bbbf62075594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6257324c8543f01c5f21a91342517280a73ec5482004743a2396bbbf62075594->leave($__internal_6257324c8543f01c5f21a91342517280a73ec5482004743a2396bbbf62075594_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ed98578762ed1eaf8b4cef7a25a8840c91e695b02dfee8059d80925d8b9e7d19 = $this->env->getExtension("native_profiler");
        $__internal_ed98578762ed1eaf8b4cef7a25a8840c91e695b02dfee8059d80925d8b9e7d19->enter($__internal_ed98578762ed1eaf8b4cef7a25a8840c91e695b02dfee8059d80925d8b9e7d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ed98578762ed1eaf8b4cef7a25a8840c91e695b02dfee8059d80925d8b9e7d19->leave($__internal_ed98578762ed1eaf8b4cef7a25a8840c91e695b02dfee8059d80925d8b9e7d19_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_25a1bdd04c495bb58deab7c46d9d9889c0a0f8baf0cc48c51603158dce7a4236 = $this->env->getExtension("native_profiler");
        $__internal_25a1bdd04c495bb58deab7c46d9d9889c0a0f8baf0cc48c51603158dce7a4236->enter($__internal_25a1bdd04c495bb58deab7c46d9d9889c0a0f8baf0cc48c51603158dce7a4236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_25a1bdd04c495bb58deab7c46d9d9889c0a0f8baf0cc48c51603158dce7a4236->leave($__internal_25a1bdd04c495bb58deab7c46d9d9889c0a0f8baf0cc48c51603158dce7a4236_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
