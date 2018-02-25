<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_f28cde5d6baab0883923f12dd9d332bff686ef02414ac05836e1c0d103920a47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_03a1ce8c7e738debae541645a9d1bdc304aed1cf730e685ad9717671108bda62 = $this->env->getExtension("native_profiler");
        $__internal_03a1ce8c7e738debae541645a9d1bdc304aed1cf730e685ad9717671108bda62->enter($__internal_03a1ce8c7e738debae541645a9d1bdc304aed1cf730e685ad9717671108bda62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03a1ce8c7e738debae541645a9d1bdc304aed1cf730e685ad9717671108bda62->leave($__internal_03a1ce8c7e738debae541645a9d1bdc304aed1cf730e685ad9717671108bda62_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_387a8866f1e0d8b39d5f3e5299a86240122c06b6d9e2aafa59516da894479050 = $this->env->getExtension("native_profiler");
        $__internal_387a8866f1e0d8b39d5f3e5299a86240122c06b6d9e2aafa59516da894479050->enter($__internal_387a8866f1e0d8b39d5f3e5299a86240122c06b6d9e2aafa59516da894479050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_387a8866f1e0d8b39d5f3e5299a86240122c06b6d9e2aafa59516da894479050->leave($__internal_387a8866f1e0d8b39d5f3e5299a86240122c06b6d9e2aafa59516da894479050_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e2f66b039f656626cf5936f2d13e86ec1e71621422c093c4af1aa1c29eed5bf = $this->env->getExtension("native_profiler");
        $__internal_7e2f66b039f656626cf5936f2d13e86ec1e71621422c093c4af1aa1c29eed5bf->enter($__internal_7e2f66b039f656626cf5936f2d13e86ec1e71621422c093c4af1aa1c29eed5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_7e2f66b039f656626cf5936f2d13e86ec1e71621422c093c4af1aa1c29eed5bf->leave($__internal_7e2f66b039f656626cf5936f2d13e86ec1e71621422c093c4af1aa1c29eed5bf_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
