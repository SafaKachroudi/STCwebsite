<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0685da33a706a264509b211b1677f7aaf8aaa67c9216d9edcf6127acdd70f8ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_caf913f4c765a85481772af38886ea34e61dbeec18b596444b3bbdfe8faaae88 = $this->env->getExtension("native_profiler");
        $__internal_caf913f4c765a85481772af38886ea34e61dbeec18b596444b3bbdfe8faaae88->enter($__internal_caf913f4c765a85481772af38886ea34e61dbeec18b596444b3bbdfe8faaae88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_caf913f4c765a85481772af38886ea34e61dbeec18b596444b3bbdfe8faaae88->leave($__internal_caf913f4c765a85481772af38886ea34e61dbeec18b596444b3bbdfe8faaae88_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d1e0c028270dc3a5f5de1a53cf96f9f63d8c3087ed97d3e25296c5b8c057e680 = $this->env->getExtension("native_profiler");
        $__internal_d1e0c028270dc3a5f5de1a53cf96f9f63d8c3087ed97d3e25296c5b8c057e680->enter($__internal_d1e0c028270dc3a5f5de1a53cf96f9f63d8c3087ed97d3e25296c5b8c057e680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d1e0c028270dc3a5f5de1a53cf96f9f63d8c3087ed97d3e25296c5b8c057e680->leave($__internal_d1e0c028270dc3a5f5de1a53cf96f9f63d8c3087ed97d3e25296c5b8c057e680_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e52aac5f71f22b9c5410a83bda4f7674b367d2033dac2ef0dcf0c550eff9db2c = $this->env->getExtension("native_profiler");
        $__internal_e52aac5f71f22b9c5410a83bda4f7674b367d2033dac2ef0dcf0c550eff9db2c->enter($__internal_e52aac5f71f22b9c5410a83bda4f7674b367d2033dac2ef0dcf0c550eff9db2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e52aac5f71f22b9c5410a83bda4f7674b367d2033dac2ef0dcf0c550eff9db2c->leave($__internal_e52aac5f71f22b9c5410a83bda4f7674b367d2033dac2ef0dcf0c550eff9db2c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_249742a8379913c4e8a9f20f101a744049a020c0a5312cca6c00449abfa9878e = $this->env->getExtension("native_profiler");
        $__internal_249742a8379913c4e8a9f20f101a744049a020c0a5312cca6c00449abfa9878e->enter($__internal_249742a8379913c4e8a9f20f101a744049a020c0a5312cca6c00449abfa9878e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_249742a8379913c4e8a9f20f101a744049a020c0a5312cca6c00449abfa9878e->leave($__internal_249742a8379913c4e8a9f20f101a744049a020c0a5312cca6c00449abfa9878e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
