<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_4eecac513ad921835cb04b35e421b593f648beb33d6e7a6cdd06479c28d234c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43909dc22ec2f050ab37a757c0371027f8ab4862bf83e51cd85d4983afaf29b1 = $this->env->getExtension("native_profiler");
        $__internal_43909dc22ec2f050ab37a757c0371027f8ab4862bf83e51cd85d4983afaf29b1->enter($__internal_43909dc22ec2f050ab37a757c0371027f8ab4862bf83e51cd85d4983afaf29b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_43909dc22ec2f050ab37a757c0371027f8ab4862bf83e51cd85d4983afaf29b1->leave($__internal_43909dc22ec2f050ab37a757c0371027f8ab4862bf83e51cd85d4983afaf29b1_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_75db4432709692041731a2dad9143576364406ef603c03fe97a14e30f698d613 = $this->env->getExtension("native_profiler");
        $__internal_75db4432709692041731a2dad9143576364406ef603c03fe97a14e30f698d613->enter($__internal_75db4432709692041731a2dad9143576364406ef603c03fe97a14e30f698d613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_75db4432709692041731a2dad9143576364406ef603c03fe97a14e30f698d613->leave($__internal_75db4432709692041731a2dad9143576364406ef603c03fe97a14e30f698d613_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
