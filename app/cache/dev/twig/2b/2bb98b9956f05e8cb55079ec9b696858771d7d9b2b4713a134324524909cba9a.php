<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_391fbf5cb95e5f3e75b8e47b0cbbffd58d1589af053a61ddc8d58296a627af37 extends Twig_Template
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
        $__internal_09c1910c823a729bf6306fb4529ed01c883eb0c45f45d3551d8c8c12ad1f7e8b = $this->env->getExtension("native_profiler");
        $__internal_09c1910c823a729bf6306fb4529ed01c883eb0c45f45d3551d8c8c12ad1f7e8b->enter($__internal_09c1910c823a729bf6306fb4529ed01c883eb0c45f45d3551d8c8c12ad1f7e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_09c1910c823a729bf6306fb4529ed01c883eb0c45f45d3551d8c8c12ad1f7e8b->leave($__internal_09c1910c823a729bf6306fb4529ed01c883eb0c45f45d3551d8c8c12ad1f7e8b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  34 => 5,  32 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/*         <traces>*/
/* {% for trace in exception.trace %}*/
/*             <trace>*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/*             </trace>*/
/* {% endfor %}*/
/*         </traces>*/
/* */
