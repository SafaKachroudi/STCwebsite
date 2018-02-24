<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b620a658cdf37d62ba02822fd9a1fedeba4b7fa53907e92b76df466bb7bb39ca extends Twig_Template
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
        $__internal_99f71eb067cb6ccd8c37b8b0cb7648e0b40daa8e89f3c6d7a646f6aab6d61ebb = $this->env->getExtension("native_profiler");
        $__internal_99f71eb067cb6ccd8c37b8b0cb7648e0b40daa8e89f3c6d7a646f6aab6d61ebb->enter($__internal_99f71eb067cb6ccd8c37b8b0cb7648e0b40daa8e89f3c6d7a646f6aab6d61ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99f71eb067cb6ccd8c37b8b0cb7648e0b40daa8e89f3c6d7a646f6aab6d61ebb->leave($__internal_99f71eb067cb6ccd8c37b8b0cb7648e0b40daa8e89f3c6d7a646f6aab6d61ebb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c6f1721d6e2cd395ca63f63fcf6700cd566fa524855a5f632f99b6b478071fc0 = $this->env->getExtension("native_profiler");
        $__internal_c6f1721d6e2cd395ca63f63fcf6700cd566fa524855a5f632f99b6b478071fc0->enter($__internal_c6f1721d6e2cd395ca63f63fcf6700cd566fa524855a5f632f99b6b478071fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c6f1721d6e2cd395ca63f63fcf6700cd566fa524855a5f632f99b6b478071fc0->leave($__internal_c6f1721d6e2cd395ca63f63fcf6700cd566fa524855a5f632f99b6b478071fc0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8481a69b5b456c865fe7e696f87a11e8bf8d2c2449c2d8ea01d367e34fcea4f7 = $this->env->getExtension("native_profiler");
        $__internal_8481a69b5b456c865fe7e696f87a11e8bf8d2c2449c2d8ea01d367e34fcea4f7->enter($__internal_8481a69b5b456c865fe7e696f87a11e8bf8d2c2449c2d8ea01d367e34fcea4f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8481a69b5b456c865fe7e696f87a11e8bf8d2c2449c2d8ea01d367e34fcea4f7->leave($__internal_8481a69b5b456c865fe7e696f87a11e8bf8d2c2449c2d8ea01d367e34fcea4f7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_431ba80f2bff58d3beee0b2ff741d1ce46e9857e9b6ea070ccda7f5d17243bf9 = $this->env->getExtension("native_profiler");
        $__internal_431ba80f2bff58d3beee0b2ff741d1ce46e9857e9b6ea070ccda7f5d17243bf9->enter($__internal_431ba80f2bff58d3beee0b2ff741d1ce46e9857e9b6ea070ccda7f5d17243bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_431ba80f2bff58d3beee0b2ff741d1ce46e9857e9b6ea070ccda7f5d17243bf9->leave($__internal_431ba80f2bff58d3beee0b2ff741d1ce46e9857e9b6ea070ccda7f5d17243bf9_prof);

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
