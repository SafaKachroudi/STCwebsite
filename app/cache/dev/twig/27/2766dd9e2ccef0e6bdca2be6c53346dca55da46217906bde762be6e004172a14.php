<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_a0a0d60695f80a0101468a9bfcca7dfbf872ef3034ff71aef966b824767dd077 extends Twig_Template
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
        $__internal_018fca10561ad7aabb21d60852eef2f14b7874f34e839139550d5b25264e2516 = $this->env->getExtension("native_profiler");
        $__internal_018fca10561ad7aabb21d60852eef2f14b7874f34e839139550d5b25264e2516->enter($__internal_018fca10561ad7aabb21d60852eef2f14b7874f34e839139550d5b25264e2516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_018fca10561ad7aabb21d60852eef2f14b7874f34e839139550d5b25264e2516->leave($__internal_018fca10561ad7aabb21d60852eef2f14b7874f34e839139550d5b25264e2516_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
