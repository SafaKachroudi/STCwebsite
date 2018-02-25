<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_eb6671507e9ac36306da086c179407710c357ba9625d300a260f2b6626f6778f extends Twig_Template
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
        $__internal_0f601093ec0566569d4e24aca593917c3ece7649dc0f009f82d14d765276714d = $this->env->getExtension("native_profiler");
        $__internal_0f601093ec0566569d4e24aca593917c3ece7649dc0f009f82d14d765276714d->enter($__internal_0f601093ec0566569d4e24aca593917c3ece7649dc0f009f82d14d765276714d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_0f601093ec0566569d4e24aca593917c3ece7649dc0f009f82d14d765276714d->leave($__internal_0f601093ec0566569d4e24aca593917c3ece7649dc0f009f82d14d765276714d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
