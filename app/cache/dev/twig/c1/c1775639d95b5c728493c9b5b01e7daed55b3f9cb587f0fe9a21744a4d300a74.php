<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_3a248f947d896bd95b4fb07ac95be91422a5c743a5968ad0ebf59778f1fcd30f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_ea3a1169dc738260506b8bd82c66e855077d73ad8082d9bec07a50b6c7c0cb9d = $this->env->getExtension("native_profiler");
        $__internal_ea3a1169dc738260506b8bd82c66e855077d73ad8082d9bec07a50b6c7c0cb9d->enter($__internal_ea3a1169dc738260506b8bd82c66e855077d73ad8082d9bec07a50b6c7c0cb9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea3a1169dc738260506b8bd82c66e855077d73ad8082d9bec07a50b6c7c0cb9d->leave($__internal_ea3a1169dc738260506b8bd82c66e855077d73ad8082d9bec07a50b6c7c0cb9d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2f3bcbb5758568441a892284b27567976eae8ace763934266a8ddacc9b9cb82f = $this->env->getExtension("native_profiler");
        $__internal_2f3bcbb5758568441a892284b27567976eae8ace763934266a8ddacc9b9cb82f->enter($__internal_2f3bcbb5758568441a892284b27567976eae8ace763934266a8ddacc9b9cb82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2f3bcbb5758568441a892284b27567976eae8ace763934266a8ddacc9b9cb82f->leave($__internal_2f3bcbb5758568441a892284b27567976eae8ace763934266a8ddacc9b9cb82f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f361a70647a02b979d5b45cf15269f1bfedf45862d3f200db915f461e491cb7 = $this->env->getExtension("native_profiler");
        $__internal_2f361a70647a02b979d5b45cf15269f1bfedf45862d3f200db915f461e491cb7->enter($__internal_2f361a70647a02b979d5b45cf15269f1bfedf45862d3f200db915f461e491cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2f361a70647a02b979d5b45cf15269f1bfedf45862d3f200db915f461e491cb7->leave($__internal_2f361a70647a02b979d5b45cf15269f1bfedf45862d3f200db915f461e491cb7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_65e015c2e1770df81e5900b9a2fa3aa8038b9a4a6de4209dfd00781040c372df = $this->env->getExtension("native_profiler");
        $__internal_65e015c2e1770df81e5900b9a2fa3aa8038b9a4a6de4209dfd00781040c372df->enter($__internal_65e015c2e1770df81e5900b9a2fa3aa8038b9a4a6de4209dfd00781040c372df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_65e015c2e1770df81e5900b9a2fa3aa8038b9a4a6de4209dfd00781040c372df->leave($__internal_65e015c2e1770df81e5900b9a2fa3aa8038b9a4a6de4209dfd00781040c372df_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
