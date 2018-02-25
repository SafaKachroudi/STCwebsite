<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_4f3d9cde64e5a87348ca7ab3d75e7d9ef48f674c880a53c505ec4eb387e75b86 extends Twig_Template
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
        $__internal_f1f4b45296c4d53d87116b13e7b80d79d0a680be9112383ed0465ae52f15ef1a = $this->env->getExtension("native_profiler");
        $__internal_f1f4b45296c4d53d87116b13e7b80d79d0a680be9112383ed0465ae52f15ef1a->enter($__internal_f1f4b45296c4d53d87116b13e7b80d79d0a680be9112383ed0465ae52f15ef1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f1f4b45296c4d53d87116b13e7b80d79d0a680be9112383ed0465ae52f15ef1a->leave($__internal_f1f4b45296c4d53d87116b13e7b80d79d0a680be9112383ed0465ae52f15ef1a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
