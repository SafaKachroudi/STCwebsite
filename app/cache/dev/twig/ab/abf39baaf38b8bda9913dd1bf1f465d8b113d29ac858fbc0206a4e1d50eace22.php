<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_3b7d5cdd8667b6694b45c376cc6d9d76e32945e6ce53481ba0e3fb3c9f3ce293 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_05a32a6cbc007cdccbf23dfb4db9045326b9fba8e9d3c41b24fa2d86e2fcfe3a = $this->env->getExtension("native_profiler");
        $__internal_05a32a6cbc007cdccbf23dfb4db9045326b9fba8e9d3c41b24fa2d86e2fcfe3a->enter($__internal_05a32a6cbc007cdccbf23dfb4db9045326b9fba8e9d3c41b24fa2d86e2fcfe3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05a32a6cbc007cdccbf23dfb4db9045326b9fba8e9d3c41b24fa2d86e2fcfe3a->leave($__internal_05a32a6cbc007cdccbf23dfb4db9045326b9fba8e9d3c41b24fa2d86e2fcfe3a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7c935c220363a2c1b2792bd2a7ac81a2d616367407ab7efbb2ab26e558c5874e = $this->env->getExtension("native_profiler");
        $__internal_7c935c220363a2c1b2792bd2a7ac81a2d616367407ab7efbb2ab26e558c5874e->enter($__internal_7c935c220363a2c1b2792bd2a7ac81a2d616367407ab7efbb2ab26e558c5874e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_7c935c220363a2c1b2792bd2a7ac81a2d616367407ab7efbb2ab26e558c5874e->leave($__internal_7c935c220363a2c1b2792bd2a7ac81a2d616367407ab7efbb2ab26e558c5874e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_66d8307852743ce845ac91ea8cb127a39ce7f4410fcaea8f207c179b4e776a52 = $this->env->getExtension("native_profiler");
        $__internal_66d8307852743ce845ac91ea8cb127a39ce7f4410fcaea8f207c179b4e776a52->enter($__internal_66d8307852743ce845ac91ea8cb127a39ce7f4410fcaea8f207c179b4e776a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_66d8307852743ce845ac91ea8cb127a39ce7f4410fcaea8f207c179b4e776a52->leave($__internal_66d8307852743ce845ac91ea8cb127a39ce7f4410fcaea8f207c179b4e776a52_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_beeedc3e4c9d6d57ee9eab0ab6cc5178af37048e724094def5604bed24c8bdb9 = $this->env->getExtension("native_profiler");
        $__internal_beeedc3e4c9d6d57ee9eab0ab6cc5178af37048e724094def5604bed24c8bdb9->enter($__internal_beeedc3e4c9d6d57ee9eab0ab6cc5178af37048e724094def5604bed24c8bdb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_beeedc3e4c9d6d57ee9eab0ab6cc5178af37048e724094def5604bed24c8bdb9->leave($__internal_beeedc3e4c9d6d57ee9eab0ab6cc5178af37048e724094def5604bed24c8bdb9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */