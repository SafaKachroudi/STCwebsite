<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_9ed966471b057b83b7aec81040d00fda706eb91b89a6413e38132e08f844c3a7 extends Twig_Template
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
        $__internal_2647eaa7f67023c3537976d8c017f1525409a3e375e28fe03250bca5e551492a = $this->env->getExtension("native_profiler");
        $__internal_2647eaa7f67023c3537976d8c017f1525409a3e375e28fe03250bca5e551492a->enter($__internal_2647eaa7f67023c3537976d8c017f1525409a3e375e28fe03250bca5e551492a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_2647eaa7f67023c3537976d8c017f1525409a3e375e28fe03250bca5e551492a->leave($__internal_2647eaa7f67023c3537976d8c017f1525409a3e375e28fe03250bca5e551492a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
