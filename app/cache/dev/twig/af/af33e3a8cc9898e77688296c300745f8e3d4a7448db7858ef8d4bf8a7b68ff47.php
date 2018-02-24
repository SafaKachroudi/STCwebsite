<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5f88c851a2ff9ef0b0e796f5ead4b0bd2475842352488a945cbc5d030613b275 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_6f4204fb16577e6157caa52a3077c0a2ebb636eab8e4b93252a8e877e5998d5c = $this->env->getExtension("native_profiler");
        $__internal_6f4204fb16577e6157caa52a3077c0a2ebb636eab8e4b93252a8e877e5998d5c->enter($__internal_6f4204fb16577e6157caa52a3077c0a2ebb636eab8e4b93252a8e877e5998d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f4204fb16577e6157caa52a3077c0a2ebb636eab8e4b93252a8e877e5998d5c->leave($__internal_6f4204fb16577e6157caa52a3077c0a2ebb636eab8e4b93252a8e877e5998d5c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2f70958fb2cb6dffd225833d95e0849eb18a4d7497fc72b8f440e79ceef330df = $this->env->getExtension("native_profiler");
        $__internal_2f70958fb2cb6dffd225833d95e0849eb18a4d7497fc72b8f440e79ceef330df->enter($__internal_2f70958fb2cb6dffd225833d95e0849eb18a4d7497fc72b8f440e79ceef330df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2f70958fb2cb6dffd225833d95e0849eb18a4d7497fc72b8f440e79ceef330df->leave($__internal_2f70958fb2cb6dffd225833d95e0849eb18a4d7497fc72b8f440e79ceef330df_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8fe6a77639fdd7d78cc6f6a43d0ef17f3251a44dd9d5e8271ea33ea58a8ba21d = $this->env->getExtension("native_profiler");
        $__internal_8fe6a77639fdd7d78cc6f6a43d0ef17f3251a44dd9d5e8271ea33ea58a8ba21d->enter($__internal_8fe6a77639fdd7d78cc6f6a43d0ef17f3251a44dd9d5e8271ea33ea58a8ba21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8fe6a77639fdd7d78cc6f6a43d0ef17f3251a44dd9d5e8271ea33ea58a8ba21d->leave($__internal_8fe6a77639fdd7d78cc6f6a43d0ef17f3251a44dd9d5e8271ea33ea58a8ba21d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_24892b4131a9655a1369e39465ee8e523e4fdce8ecaa35eecc9dc49633329ac5 = $this->env->getExtension("native_profiler");
        $__internal_24892b4131a9655a1369e39465ee8e523e4fdce8ecaa35eecc9dc49633329ac5->enter($__internal_24892b4131a9655a1369e39465ee8e523e4fdce8ecaa35eecc9dc49633329ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_24892b4131a9655a1369e39465ee8e523e4fdce8ecaa35eecc9dc49633329ac5->leave($__internal_24892b4131a9655a1369e39465ee8e523e4fdce8ecaa35eecc9dc49633329ac5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
