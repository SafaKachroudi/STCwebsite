<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_2a217f622d084b443fc90f0c06872b18b0aa801af7160f10b6bb7a0fb00fc222 extends Twig_Template
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
        $__internal_f7a146a841d1aed051587a24186177bb755906371d672723475763a2017a44f9 = $this->env->getExtension("native_profiler");
        $__internal_f7a146a841d1aed051587a24186177bb755906371d672723475763a2017a44f9->enter($__internal_f7a146a841d1aed051587a24186177bb755906371d672723475763a2017a44f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f7a146a841d1aed051587a24186177bb755906371d672723475763a2017a44f9->leave($__internal_f7a146a841d1aed051587a24186177bb755906371d672723475763a2017a44f9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
