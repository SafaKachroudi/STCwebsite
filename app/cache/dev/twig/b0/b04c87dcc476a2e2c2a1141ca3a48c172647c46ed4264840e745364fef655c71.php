<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_920724d4d738817fb5ff7ee7c44a2c5f3663ee116012eee392078d4b20a6df33 extends Twig_Template
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
        $__internal_5dc6a2a225170289e9af1eea40b4a0fd2f5dad1fb2fb646804819fa67eba469c = $this->env->getExtension("native_profiler");
        $__internal_5dc6a2a225170289e9af1eea40b4a0fd2f5dad1fb2fb646804819fa67eba469c->enter($__internal_5dc6a2a225170289e9af1eea40b4a0fd2f5dad1fb2fb646804819fa67eba469c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_5dc6a2a225170289e9af1eea40b4a0fd2f5dad1fb2fb646804819fa67eba469c->leave($__internal_5dc6a2a225170289e9af1eea40b4a0fd2f5dad1fb2fb646804819fa67eba469c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
