<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_c3862764f827555f2754804a64c8a9c9229aacabf9d5123eebc8d93a8088abef extends Twig_Template
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
        $__internal_3c37f65bdb268be404f81cd53ce3385e9b06c44550311b055893eae947e23940 = $this->env->getExtension("native_profiler");
        $__internal_3c37f65bdb268be404f81cd53ce3385e9b06c44550311b055893eae947e23940->enter($__internal_3c37f65bdb268be404f81cd53ce3385e9b06c44550311b055893eae947e23940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_3c37f65bdb268be404f81cd53ce3385e9b06c44550311b055893eae947e23940->leave($__internal_3c37f65bdb268be404f81cd53ce3385e9b06c44550311b055893eae947e23940_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
