<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_1b0339569a95299ccfb5f95a02d184f87cc4000fe079be3fcad4f86605292f2e extends Twig_Template
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
        $__internal_e825f918ef9f33bab53a4445beb35ea72f2c5a5c0650327b7834a227cac09a9b = $this->env->getExtension("native_profiler");
        $__internal_e825f918ef9f33bab53a4445beb35ea72f2c5a5c0650327b7834a227cac09a9b->enter($__internal_e825f918ef9f33bab53a4445beb35ea72f2c5a5c0650327b7834a227cac09a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_e825f918ef9f33bab53a4445beb35ea72f2c5a5c0650327b7834a227cac09a9b->leave($__internal_e825f918ef9f33bab53a4445beb35ea72f2c5a5c0650327b7834a227cac09a9b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
