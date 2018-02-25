<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_55b4c18f9bf6f023a4b352b1f1cc41d0157c110b14a222b92f5d0490fcfb4635 extends Twig_Template
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
        $__internal_3a2d5d4bb4ec8599e15f0127b517e2559db637f3ef24da44fd98a24172e8b7b0 = $this->env->getExtension("native_profiler");
        $__internal_3a2d5d4bb4ec8599e15f0127b517e2559db637f3ef24da44fd98a24172e8b7b0->enter($__internal_3a2d5d4bb4ec8599e15f0127b517e2559db637f3ef24da44fd98a24172e8b7b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_3a2d5d4bb4ec8599e15f0127b517e2559db637f3ef24da44fd98a24172e8b7b0->leave($__internal_3a2d5d4bb4ec8599e15f0127b517e2559db637f3ef24da44fd98a24172e8b7b0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
