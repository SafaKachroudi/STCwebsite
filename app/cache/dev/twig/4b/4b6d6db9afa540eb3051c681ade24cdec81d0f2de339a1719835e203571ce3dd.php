<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_a4b3b2cc2921f17cc10ace321ea9760db4c6c836c4c9eea3d22cb895ab9a2cbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_c7106c387b8a9c04822d18425982d424560d959458f91e1520e91a713678edb7 = $this->env->getExtension("native_profiler");
        $__internal_c7106c387b8a9c04822d18425982d424560d959458f91e1520e91a713678edb7->enter($__internal_c7106c387b8a9c04822d18425982d424560d959458f91e1520e91a713678edb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7106c387b8a9c04822d18425982d424560d959458f91e1520e91a713678edb7->leave($__internal_c7106c387b8a9c04822d18425982d424560d959458f91e1520e91a713678edb7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_60920dd67a3bdad8745ae05042a8bc93ab87c1ac73210dbfcaaf01c28899b27c = $this->env->getExtension("native_profiler");
        $__internal_60920dd67a3bdad8745ae05042a8bc93ab87c1ac73210dbfcaaf01c28899b27c->enter($__internal_60920dd67a3bdad8745ae05042a8bc93ab87c1ac73210dbfcaaf01c28899b27c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_60920dd67a3bdad8745ae05042a8bc93ab87c1ac73210dbfcaaf01c28899b27c->leave($__internal_60920dd67a3bdad8745ae05042a8bc93ab87c1ac73210dbfcaaf01c28899b27c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b5c59a0246c59c72196217e4110a9fe323dc046998dd22c833b30c844c85d66d = $this->env->getExtension("native_profiler");
        $__internal_b5c59a0246c59c72196217e4110a9fe323dc046998dd22c833b30c844c85d66d->enter($__internal_b5c59a0246c59c72196217e4110a9fe323dc046998dd22c833b30c844c85d66d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b5c59a0246c59c72196217e4110a9fe323dc046998dd22c833b30c844c85d66d->leave($__internal_b5c59a0246c59c72196217e4110a9fe323dc046998dd22c833b30c844c85d66d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9f90ed4f59e0f10ebc0b4b7dfb5726a7c67c0b6b6216784b74ee0d7bad8d5dc0 = $this->env->getExtension("native_profiler");
        $__internal_9f90ed4f59e0f10ebc0b4b7dfb5726a7c67c0b6b6216784b74ee0d7bad8d5dc0->enter($__internal_9f90ed4f59e0f10ebc0b4b7dfb5726a7c67c0b6b6216784b74ee0d7bad8d5dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9f90ed4f59e0f10ebc0b4b7dfb5726a7c67c0b6b6216784b74ee0d7bad8d5dc0->leave($__internal_9f90ed4f59e0f10ebc0b4b7dfb5726a7c67c0b6b6216784b74ee0d7bad8d5dc0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
