<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_e0c6a21379f458a4941c7bb926f9d75d5d7f726a0187a93605955f58e61e0c4a extends Twig_Template
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
        $__internal_165b7f12200f38af2fc7bdad68c37df1c45462e192441fd13ab1a749898c59be = $this->env->getExtension("native_profiler");
        $__internal_165b7f12200f38af2fc7bdad68c37df1c45462e192441fd13ab1a749898c59be->enter($__internal_165b7f12200f38af2fc7bdad68c37df1c45462e192441fd13ab1a749898c59be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_165b7f12200f38af2fc7bdad68c37df1c45462e192441fd13ab1a749898c59be->leave($__internal_165b7f12200f38af2fc7bdad68c37df1c45462e192441fd13ab1a749898c59be_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
