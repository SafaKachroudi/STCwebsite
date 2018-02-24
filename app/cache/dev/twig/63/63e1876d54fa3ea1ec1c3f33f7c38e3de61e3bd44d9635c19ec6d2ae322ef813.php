<?php

/* base.html.twig */
class __TwigTemplate_1cada93543a474ef8c16ac84bae656a0200f4aa357174ff509cf7251e78a648f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab4ada1c710ad9d4b8ad7476ae3b419636fa2cd3f53c83564310a9c495753c33 = $this->env->getExtension("native_profiler");
        $__internal_ab4ada1c710ad9d4b8ad7476ae3b419636fa2cd3f53c83564310a9c495753c33->enter($__internal_ab4ada1c710ad9d4b8ad7476ae3b419636fa2cd3f53c83564310a9c495753c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_ab4ada1c710ad9d4b8ad7476ae3b419636fa2cd3f53c83564310a9c495753c33->leave($__internal_ab4ada1c710ad9d4b8ad7476ae3b419636fa2cd3f53c83564310a9c495753c33_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ab2438d6a4946ea24a8bcdf65270829d3db7735b2aead5223b1dd8f6956eda67 = $this->env->getExtension("native_profiler");
        $__internal_ab2438d6a4946ea24a8bcdf65270829d3db7735b2aead5223b1dd8f6956eda67->enter($__internal_ab2438d6a4946ea24a8bcdf65270829d3db7735b2aead5223b1dd8f6956eda67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ab2438d6a4946ea24a8bcdf65270829d3db7735b2aead5223b1dd8f6956eda67->leave($__internal_ab2438d6a4946ea24a8bcdf65270829d3db7735b2aead5223b1dd8f6956eda67_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_49987b75fa4cc355a3b0419bff37c2ba839ec219aebdd22891d77752a997adf8 = $this->env->getExtension("native_profiler");
        $__internal_49987b75fa4cc355a3b0419bff37c2ba839ec219aebdd22891d77752a997adf8->enter($__internal_49987b75fa4cc355a3b0419bff37c2ba839ec219aebdd22891d77752a997adf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_49987b75fa4cc355a3b0419bff37c2ba839ec219aebdd22891d77752a997adf8->leave($__internal_49987b75fa4cc355a3b0419bff37c2ba839ec219aebdd22891d77752a997adf8_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f45e50f40270c03d0be2eba5778248ed4bf3d9640cb6e804e105a5f86dd59f49 = $this->env->getExtension("native_profiler");
        $__internal_f45e50f40270c03d0be2eba5778248ed4bf3d9640cb6e804e105a5f86dd59f49->enter($__internal_f45e50f40270c03d0be2eba5778248ed4bf3d9640cb6e804e105a5f86dd59f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f45e50f40270c03d0be2eba5778248ed4bf3d9640cb6e804e105a5f86dd59f49->leave($__internal_f45e50f40270c03d0be2eba5778248ed4bf3d9640cb6e804e105a5f86dd59f49_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ebef2b239b2639fcf3c592fc66d899a802bde2a3ad8a64e0498c67fc7c176664 = $this->env->getExtension("native_profiler");
        $__internal_ebef2b239b2639fcf3c592fc66d899a802bde2a3ad8a64e0498c67fc7c176664->enter($__internal_ebef2b239b2639fcf3c592fc66d899a802bde2a3ad8a64e0498c67fc7c176664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ebef2b239b2639fcf3c592fc66d899a802bde2a3ad8a64e0498c67fc7c176664->leave($__internal_ebef2b239b2639fcf3c592fc66d899a802bde2a3ad8a64e0498c67fc7c176664_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
