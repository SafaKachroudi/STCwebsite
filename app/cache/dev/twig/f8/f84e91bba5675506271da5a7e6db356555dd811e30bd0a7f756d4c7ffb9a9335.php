<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_9a3bc5981fceede3d898f73e7de29cb2c78db6ae101187482ebbc5bca6776f0c extends Twig_Template
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
        $__internal_d7f1c7b325969312300c9c272447ccc4f613d120f8efd914002c4c0d3169f2c6 = $this->env->getExtension("native_profiler");
        $__internal_d7f1c7b325969312300c9c272447ccc4f613d120f8efd914002c4c0d3169f2c6->enter($__internal_d7f1c7b325969312300c9c272447ccc4f613d120f8efd914002c4c0d3169f2c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d7f1c7b325969312300c9c272447ccc4f613d120f8efd914002c4c0d3169f2c6->leave($__internal_d7f1c7b325969312300c9c272447ccc4f613d120f8efd914002c4c0d3169f2c6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
