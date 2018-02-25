<?php

/* ::base.html.twig */
class __TwigTemplate_68083ae3a41989353d0a89f810d6b2a31b3701e0210b31ed67486f75f8c36cde extends Twig_Template
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
        $__internal_c63dcb2379b6a03043230e5624254403ce17fd3cc171312b3ab0102bdcceeb57 = $this->env->getExtension("native_profiler");
        $__internal_c63dcb2379b6a03043230e5624254403ce17fd3cc171312b3ab0102bdcceeb57->enter($__internal_c63dcb2379b6a03043230e5624254403ce17fd3cc171312b3ab0102bdcceeb57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_c63dcb2379b6a03043230e5624254403ce17fd3cc171312b3ab0102bdcceeb57->leave($__internal_c63dcb2379b6a03043230e5624254403ce17fd3cc171312b3ab0102bdcceeb57_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bc5a520e387702235fa1bb665799317ebbb25303a70ca3e3c156e7630562288c = $this->env->getExtension("native_profiler");
        $__internal_bc5a520e387702235fa1bb665799317ebbb25303a70ca3e3c156e7630562288c->enter($__internal_bc5a520e387702235fa1bb665799317ebbb25303a70ca3e3c156e7630562288c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bc5a520e387702235fa1bb665799317ebbb25303a70ca3e3c156e7630562288c->leave($__internal_bc5a520e387702235fa1bb665799317ebbb25303a70ca3e3c156e7630562288c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a546af6ec47e745159c3afa8e7c761495f649ca693f80a5514c6255c45dbb885 = $this->env->getExtension("native_profiler");
        $__internal_a546af6ec47e745159c3afa8e7c761495f649ca693f80a5514c6255c45dbb885->enter($__internal_a546af6ec47e745159c3afa8e7c761495f649ca693f80a5514c6255c45dbb885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a546af6ec47e745159c3afa8e7c761495f649ca693f80a5514c6255c45dbb885->leave($__internal_a546af6ec47e745159c3afa8e7c761495f649ca693f80a5514c6255c45dbb885_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_012ba8e03869a4380d9469512ea8306a6ecdb58a3e8c36a0f2f7a69df706d7ae = $this->env->getExtension("native_profiler");
        $__internal_012ba8e03869a4380d9469512ea8306a6ecdb58a3e8c36a0f2f7a69df706d7ae->enter($__internal_012ba8e03869a4380d9469512ea8306a6ecdb58a3e8c36a0f2f7a69df706d7ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_012ba8e03869a4380d9469512ea8306a6ecdb58a3e8c36a0f2f7a69df706d7ae->leave($__internal_012ba8e03869a4380d9469512ea8306a6ecdb58a3e8c36a0f2f7a69df706d7ae_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f96b73d18b7f9ec8ac87e0421a514a512ad18aeacd634ef744bd6f938ccc2f36 = $this->env->getExtension("native_profiler");
        $__internal_f96b73d18b7f9ec8ac87e0421a514a512ad18aeacd634ef744bd6f938ccc2f36->enter($__internal_f96b73d18b7f9ec8ac87e0421a514a512ad18aeacd634ef744bd6f938ccc2f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f96b73d18b7f9ec8ac87e0421a514a512ad18aeacd634ef744bd6f938ccc2f36->leave($__internal_f96b73d18b7f9ec8ac87e0421a514a512ad18aeacd634ef744bd6f938ccc2f36_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
