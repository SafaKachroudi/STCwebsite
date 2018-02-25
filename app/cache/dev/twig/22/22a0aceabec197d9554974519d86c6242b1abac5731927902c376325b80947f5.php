<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_88d696bc9a203d8819ca12cc2437a67a3eee2c4322c6df57ba7b75bdbdb5d851 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_203015aab3d05698d281b45549472ab9d49005d41415829b729e60412c6f0ea0 = $this->env->getExtension("native_profiler");
        $__internal_203015aab3d05698d281b45549472ab9d49005d41415829b729e60412c6f0ea0->enter($__internal_203015aab3d05698d281b45549472ab9d49005d41415829b729e60412c6f0ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_203015aab3d05698d281b45549472ab9d49005d41415829b729e60412c6f0ea0->leave($__internal_203015aab3d05698d281b45549472ab9d49005d41415829b729e60412c6f0ea0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_91cbbc4984548378dac8b890b7b8964d978487d3506a1f1cab983c3fa7f156ee = $this->env->getExtension("native_profiler");
        $__internal_91cbbc4984548378dac8b890b7b8964d978487d3506a1f1cab983c3fa7f156ee->enter($__internal_91cbbc4984548378dac8b890b7b8964d978487d3506a1f1cab983c3fa7f156ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_91cbbc4984548378dac8b890b7b8964d978487d3506a1f1cab983c3fa7f156ee->leave($__internal_91cbbc4984548378dac8b890b7b8964d978487d3506a1f1cab983c3fa7f156ee_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_05cd9e567742f87dac519597ce54232d7afc78b0b93830f40fa2f5f0bc07bea5 = $this->env->getExtension("native_profiler");
        $__internal_05cd9e567742f87dac519597ce54232d7afc78b0b93830f40fa2f5f0bc07bea5->enter($__internal_05cd9e567742f87dac519597ce54232d7afc78b0b93830f40fa2f5f0bc07bea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_05cd9e567742f87dac519597ce54232d7afc78b0b93830f40fa2f5f0bc07bea5->leave($__internal_05cd9e567742f87dac519597ce54232d7afc78b0b93830f40fa2f5f0bc07bea5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
