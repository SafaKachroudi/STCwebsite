<?php

/* base.html.twig */
class __TwigTemplate_4afb67303538ba269e5d3859007e886a610a6ed27511a6ec9cb123302f52349c extends Twig_Template
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
        $__internal_3a505c6fe4254614fe127ef5db4916475e184d8256f5c5dbec9637d09f22e8f0 = $this->env->getExtension("native_profiler");
        $__internal_3a505c6fe4254614fe127ef5db4916475e184d8256f5c5dbec9637d09f22e8f0->enter($__internal_3a505c6fe4254614fe127ef5db4916475e184d8256f5c5dbec9637d09f22e8f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_3a505c6fe4254614fe127ef5db4916475e184d8256f5c5dbec9637d09f22e8f0->leave($__internal_3a505c6fe4254614fe127ef5db4916475e184d8256f5c5dbec9637d09f22e8f0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_537ef66d90d4d41e99e085863ba77e64f533c36e78f12602418d5faf6c2e667a = $this->env->getExtension("native_profiler");
        $__internal_537ef66d90d4d41e99e085863ba77e64f533c36e78f12602418d5faf6c2e667a->enter($__internal_537ef66d90d4d41e99e085863ba77e64f533c36e78f12602418d5faf6c2e667a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_537ef66d90d4d41e99e085863ba77e64f533c36e78f12602418d5faf6c2e667a->leave($__internal_537ef66d90d4d41e99e085863ba77e64f533c36e78f12602418d5faf6c2e667a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c69189d4439e7589bb3e8dd645a2cf488e26469ba4eaaba8eec05fe5c63b26ba = $this->env->getExtension("native_profiler");
        $__internal_c69189d4439e7589bb3e8dd645a2cf488e26469ba4eaaba8eec05fe5c63b26ba->enter($__internal_c69189d4439e7589bb3e8dd645a2cf488e26469ba4eaaba8eec05fe5c63b26ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c69189d4439e7589bb3e8dd645a2cf488e26469ba4eaaba8eec05fe5c63b26ba->leave($__internal_c69189d4439e7589bb3e8dd645a2cf488e26469ba4eaaba8eec05fe5c63b26ba_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_636697158635fa0312c1bb03309447942157b4c0bab70cc76e924767c1271a89 = $this->env->getExtension("native_profiler");
        $__internal_636697158635fa0312c1bb03309447942157b4c0bab70cc76e924767c1271a89->enter($__internal_636697158635fa0312c1bb03309447942157b4c0bab70cc76e924767c1271a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_636697158635fa0312c1bb03309447942157b4c0bab70cc76e924767c1271a89->leave($__internal_636697158635fa0312c1bb03309447942157b4c0bab70cc76e924767c1271a89_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_13907fd92a1f7c881e11c62c0e14cfe85472cefce716669433a51c623d99f573 = $this->env->getExtension("native_profiler");
        $__internal_13907fd92a1f7c881e11c62c0e14cfe85472cefce716669433a51c623d99f573->enter($__internal_13907fd92a1f7c881e11c62c0e14cfe85472cefce716669433a51c623d99f573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_13907fd92a1f7c881e11c62c0e14cfe85472cefce716669433a51c623d99f573->leave($__internal_13907fd92a1f7c881e11c62c0e14cfe85472cefce716669433a51c623d99f573_prof);

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
