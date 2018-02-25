<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_f4d4eb155dff2c976addb41a9b7265b4c770c39d2b4f218577112b2f45345224 extends Twig_Template
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
        $__internal_7ab1919060ee13e2b9db3955b3855b72f863acd4769d77cab097390674e629f6 = $this->env->getExtension("native_profiler");
        $__internal_7ab1919060ee13e2b9db3955b3855b72f863acd4769d77cab097390674e629f6->enter($__internal_7ab1919060ee13e2b9db3955b3855b72f863acd4769d77cab097390674e629f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_7ab1919060ee13e2b9db3955b3855b72f863acd4769d77cab097390674e629f6->leave($__internal_7ab1919060ee13e2b9db3955b3855b72f863acd4769d77cab097390674e629f6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
