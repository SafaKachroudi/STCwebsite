<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_bb530615c57026d381e4be33b8a0855d547cccb040a353278d7839cf32c1d796 extends Twig_Template
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
        $__internal_bbca0b227f8cb8256ef64ff5ee0b093601c0d8a2f0fe567e88b4481e2f206aa8 = $this->env->getExtension("native_profiler");
        $__internal_bbca0b227f8cb8256ef64ff5ee0b093601c0d8a2f0fe567e88b4481e2f206aa8->enter($__internal_bbca0b227f8cb8256ef64ff5ee0b093601c0d8a2f0fe567e88b4481e2f206aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_bbca0b227f8cb8256ef64ff5ee0b093601c0d8a2f0fe567e88b4481e2f206aa8->leave($__internal_bbca0b227f8cb8256ef64ff5ee0b093601c0d8a2f0fe567e88b4481e2f206aa8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
