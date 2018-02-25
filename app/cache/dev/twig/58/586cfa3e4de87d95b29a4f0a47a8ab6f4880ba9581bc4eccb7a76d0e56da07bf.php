<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_2ae7cecf36df026c3e67b76362639e76393a5f4f82976d57b47ef8017ab5643a extends Twig_Template
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
        $__internal_d67290b65c983df9a6bc0995e771fc3616adda26173c41dc5b76e717b732fa10 = $this->env->getExtension("native_profiler");
        $__internal_d67290b65c983df9a6bc0995e771fc3616adda26173c41dc5b76e717b732fa10->enter($__internal_d67290b65c983df9a6bc0995e771fc3616adda26173c41dc5b76e717b732fa10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_d67290b65c983df9a6bc0995e771fc3616adda26173c41dc5b76e717b732fa10->leave($__internal_d67290b65c983df9a6bc0995e771fc3616adda26173c41dc5b76e717b732fa10_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
