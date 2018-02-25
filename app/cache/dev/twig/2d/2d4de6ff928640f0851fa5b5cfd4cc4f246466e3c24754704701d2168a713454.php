<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_e7d760c44ad71dda2e08b607ab3494ad213b9aeb5e996210769f2ba81f673e2d extends Twig_Template
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
        $__internal_5dd00e5a2ef6ec5dba87dbf9dac908676c90b2a529c950b65854fee7232f4320 = $this->env->getExtension("native_profiler");
        $__internal_5dd00e5a2ef6ec5dba87dbf9dac908676c90b2a529c950b65854fee7232f4320->enter($__internal_5dd00e5a2ef6ec5dba87dbf9dac908676c90b2a529c950b65854fee7232f4320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_5dd00e5a2ef6ec5dba87dbf9dac908676c90b2a529c950b65854fee7232f4320->leave($__internal_5dd00e5a2ef6ec5dba87dbf9dac908676c90b2a529c950b65854fee7232f4320_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
