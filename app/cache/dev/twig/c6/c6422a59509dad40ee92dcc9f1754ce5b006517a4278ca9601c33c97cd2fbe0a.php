<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_195602fda90236bfde68ed3a50b72eb5f8f353629def9dd75debafcfdce3fa61 extends Twig_Template
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
        $__internal_a69e50a9926eb89021d78be8d8991493bcf903ca02d576eb013bfbcc592125a5 = $this->env->getExtension("native_profiler");
        $__internal_a69e50a9926eb89021d78be8d8991493bcf903ca02d576eb013bfbcc592125a5->enter($__internal_a69e50a9926eb89021d78be8d8991493bcf903ca02d576eb013bfbcc592125a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_a69e50a9926eb89021d78be8d8991493bcf903ca02d576eb013bfbcc592125a5->leave($__internal_a69e50a9926eb89021d78be8d8991493bcf903ca02d576eb013bfbcc592125a5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
