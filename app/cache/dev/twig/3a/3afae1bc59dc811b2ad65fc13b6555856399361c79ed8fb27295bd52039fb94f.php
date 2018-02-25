<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_2629a6af91877a6f898488d41c04f404046e1eea61f26df6a2b427fd043faf61 extends Twig_Template
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
        $__internal_bfc5b65f96bb6f257d6706bddfab3ea7717a1f55e7c9789cc9571e3b66f6f101 = $this->env->getExtension("native_profiler");
        $__internal_bfc5b65f96bb6f257d6706bddfab3ea7717a1f55e7c9789cc9571e3b66f6f101->enter($__internal_bfc5b65f96bb6f257d6706bddfab3ea7717a1f55e7c9789cc9571e3b66f6f101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_bfc5b65f96bb6f257d6706bddfab3ea7717a1f55e7c9789cc9571e3b66f6f101->leave($__internal_bfc5b65f96bb6f257d6706bddfab3ea7717a1f55e7c9789cc9571e3b66f6f101_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
