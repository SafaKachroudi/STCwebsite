<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_2f8ff86dc37d5e6e8408ffd4a5bd255e98b271b5128f4298749baafdcb65ce65 extends Twig_Template
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
        $__internal_474193a4e4106631d99ffeee46c1b6f6e41bc9ea588127f3a8f7cabb8d05cf59 = $this->env->getExtension("native_profiler");
        $__internal_474193a4e4106631d99ffeee46c1b6f6e41bc9ea588127f3a8f7cabb8d05cf59->enter($__internal_474193a4e4106631d99ffeee46c1b6f6e41bc9ea588127f3a8f7cabb8d05cf59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_474193a4e4106631d99ffeee46c1b6f6e41bc9ea588127f3a8f7cabb8d05cf59->leave($__internal_474193a4e4106631d99ffeee46c1b6f6e41bc9ea588127f3a8f7cabb8d05cf59_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
