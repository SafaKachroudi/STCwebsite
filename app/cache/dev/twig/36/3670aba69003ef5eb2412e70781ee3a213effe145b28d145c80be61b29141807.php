<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_6835b32536dcbae676d073fd38c38b6c1721b0111ecc9b3c6b4ba5c600bbc643 extends Twig_Template
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
        $__internal_31c0ba525dbbd53bcb060452d2959093d9d81c306b58e6b0ffd7ae2aee0cd3f3 = $this->env->getExtension("native_profiler");
        $__internal_31c0ba525dbbd53bcb060452d2959093d9d81c306b58e6b0ffd7ae2aee0cd3f3->enter($__internal_31c0ba525dbbd53bcb060452d2959093d9d81c306b58e6b0ffd7ae2aee0cd3f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_31c0ba525dbbd53bcb060452d2959093d9d81c306b58e6b0ffd7ae2aee0cd3f3->leave($__internal_31c0ba525dbbd53bcb060452d2959093d9d81c306b58e6b0ffd7ae2aee0cd3f3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
