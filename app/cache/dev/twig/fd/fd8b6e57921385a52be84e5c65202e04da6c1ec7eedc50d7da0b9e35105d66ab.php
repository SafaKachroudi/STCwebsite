<?php

/* WebProfilerBundle:Profiler:results.html.twig */
class __TwigTemplate_7b1e89409665c1c8ba7b3c5a406793e11baf8a4482df860719d0f0efd828cef8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:results.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d95de39b5e44402222eddca1821f56aef1819c7f0186d632469be677fad1f975 = $this->env->getExtension("native_profiler");
        $__internal_d95de39b5e44402222eddca1821f56aef1819c7f0186d632469be677fad1f975->enter($__internal_d95de39b5e44402222eddca1821f56aef1819c7f0186d632469be677fad1f975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d95de39b5e44402222eddca1821f56aef1819c7f0186d632469be677fad1f975->leave($__internal_d95de39b5e44402222eddca1821f56aef1819c7f0186d632469be677fad1f975_prof);

    }

    // line 3
    public function block_summary($context, array $blocks = array())
    {
        $__internal_c5323f6c6aacffcde488b32ed07e473089d378704473ab6da74f0833b314a0ab = $this->env->getExtension("native_profiler");
        $__internal_c5323f6c6aacffcde488b32ed07e473089d378704473ab6da74f0833b314a0ab->enter($__internal_c5323f6c6aacffcde488b32ed07e473089d378704473ab6da74f0833b314a0ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 4
        echo "    <div class=\"status\">
        <div class=\"container\">
            <h2>Profile Search</h2>
        </div>
    </div>
";
        
        $__internal_c5323f6c6aacffcde488b32ed07e473089d378704473ab6da74f0833b314a0ab->leave($__internal_c5323f6c6aacffcde488b32ed07e473089d378704473ab6da74f0833b314a0ab_prof);

    }

    // line 11
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ccf03806b58c9a1bb8788c94961db76b04809618cbd1e9eefb05dd96a4e60f04 = $this->env->getExtension("native_profiler");
        $__internal_ccf03806b58c9a1bb8788c94961db76b04809618cbd1e9eefb05dd96a4e60f04->enter($__internal_ccf03806b58c9a1bb8788c94961db76b04809618cbd1e9eefb05dd96a4e60f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 12
        echo "    <h2>";
        echo twig_escape_filter($this->env, (((isset($context["tokens"]) ? $context["tokens"] : $this->getContext($context, "tokens"))) ? (twig_length_filter($this->env, (isset($context["tokens"]) ? $context["tokens"] : $this->getContext($context, "tokens")))) : ("No")), "html", null, true);
        echo " results found</h2>

    ";
        // line 14
        if ((isset($context["tokens"]) ? $context["tokens"] : $this->getContext($context, "tokens"))) {
            // line 15
            echo "        <table id=\"search-results\">
            <thead>
                <tr>
                    <th scope=\"col\" class=\"text-center\">Status</th>
                    <th scope=\"col\">IP</th>
                    <th scope=\"col\">Method</th>
                    <th scope=\"col\">URL</th>
                    <th scope=\"col\">Time</th>
                    <th scope=\"col\">Token</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tokens"]) ? $context["tokens"] : $this->getContext($context, "tokens")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 28
                echo "                    ";
                $context["css_class"] = ((((($this->getAttribute($context["result"], "status_code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["result"], "status_code", array()), 0)) : (0)) > 399)) ? ("status-error") : (((((($this->getAttribute($context["result"], "status_code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["result"], "status_code", array()), 0)) : (0)) > 299)) ? ("status-warning") : ("status-success"))));
                // line 29
                echo "
                    <tr>
                        <td class=\"text-center\">
                            <span class=\"label ";
                // line 32
                echo twig_escape_filter($this->env, (isset($context["css_class"]) ? $context["css_class"] : $this->getContext($context, "css_class")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["result"], "status_code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["result"], "status_code", array()), "n/a")) : ("n/a")), "html", null, true);
                echo "</span>
                        </td>
                        <td>
                            <span class=\"nowrap\">";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "ip", array()), "html", null, true);
                echo "</span>
                            ";
                // line 36
                if ( !(null === $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "session", array()))) {
                    // line 37
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler_search_results", twig_array_merge($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "query", array()), "all", array()), array("ip" => $this->getAttribute($context["result"], "ip", array()), "token" => $this->getAttribute($context["result"], "token", array())))), "html", null, true);
                    echo "\" title=\"Search\">
                                    <span title=\"Search\" class=\"sf-icon sf-search\">";
                    // line 38
                    echo twig_include($this->env, $context, "@WebProfiler/Icon/search.svg");
                    echo "</span>
                                </a>
                            ";
                }
                // line 41
                echo "                        </td>
                        <td>
                            ";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "method", array()), "html", null, true);
                echo "
                            ";
                // line 44
                if ( !(null === $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "session", array()))) {
                    // line 45
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler_search_results", twig_array_merge($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "query", array()), "all", array()), array("method" => $this->getAttribute($context["result"], "method", array()), "token" => $this->getAttribute($context["result"], "token", array())))), "html", null, true);
                    echo "\" title=\"Search\">
                                    <span title=\"Search\" class=\"sf-icon sf-search\">";
                    // line 46
                    echo twig_include($this->env, $context, "@WebProfiler/Icon/search.svg");
                    echo "</span>
                                </a>
                            ";
                }
                // line 49
                echo "                        </td>
                        <td class=\"break-long-words\">
                            ";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "url", array()), "html", null, true);
                echo "
                            ";
                // line 52
                if ( !(null === $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "session", array()))) {
                    // line 53
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler_search_results", twig_array_merge($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "query", array()), "all", array()), array("url" => $this->getAttribute($context["result"], "url", array()), "token" => $this->getAttribute($context["result"], "token", array())))), "html", null, true);
                    echo "\" title=\"Search\">
                                    <span title=\"Search\" class=\"sf-icon sf-search\">";
                    // line 54
                    echo twig_include($this->env, $context, "@WebProfiler/Icon/search.svg");
                    echo "</span>
                                </a>
                            ";
                }
                // line 57
                echo "                        </td>
                        <td class=\"text-small\">
                            <span class=\"nowrap\">";
                // line 59
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["result"], "time", array()), "d-M-Y"), "html", null, true);
                echo "</span>
                            <span class=\"nowrap newline\">";
                // line 60
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["result"], "time", array()), "H:i:s"), "html", null, true);
                echo "</span>
                        </td>
                        <td class=\"nowrap\"><a href=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute($context["result"], "token", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "token", array()), "html", null, true);
                echo "</a></td>
                    </tr>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 68
            echo "        <div class=\"empty\">
            <p>The query returned no result.</p>
        </div>
    ";
        }
        // line 72
        echo "
";
        
        $__internal_ccf03806b58c9a1bb8788c94961db76b04809618cbd1e9eefb05dd96a4e60f04->leave($__internal_ccf03806b58c9a1bb8788c94961db76b04809618cbd1e9eefb05dd96a4e60f04_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 72,  210 => 68,  205 => 65,  186 => 62,  181 => 60,  177 => 59,  173 => 57,  167 => 54,  162 => 53,  160 => 52,  156 => 51,  152 => 49,  146 => 46,  141 => 45,  139 => 44,  135 => 43,  131 => 41,  125 => 38,  120 => 37,  118 => 36,  114 => 35,  106 => 32,  101 => 29,  98 => 28,  81 => 27,  67 => 15,  65 => 14,  59 => 12,  53 => 11,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block summary %}*/
/*     <div class="status">*/
/*         <div class="container">*/
/*             <h2>Profile Search</h2>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>{{ tokens ? tokens|length : 'No' }} results found</h2>*/
/* */
/*     {% if tokens %}*/
/*         <table id="search-results">*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th scope="col" class="text-center">Status</th>*/
/*                     <th scope="col">IP</th>*/
/*                     <th scope="col">Method</th>*/
/*                     <th scope="col">URL</th>*/
/*                     <th scope="col">Time</th>*/
/*                     <th scope="col">Token</th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*                 {% for result in tokens %}*/
/*                     {% set css_class = result.status_code|default(0) > 399 ? 'status-error' : result.status_code|default(0) > 299 ? 'status-warning' : 'status-success' %}*/
/* */
/*                     <tr>*/
/*                         <td class="text-center">*/
/*                             <span class="label {{ css_class }}">{{ result.status_code|default('n/a') }}</span>*/
/*                         </td>*/
/*                         <td>*/
/*                             <span class="nowrap">{{ result.ip }}</span>*/
/*                             {% if request.session is not null %}*/
/*                                 <a href="{{ path('_profiler_search_results', request.query.all|merge({'ip': result.ip, 'token': result.token})) }}" title="Search">*/
/*                                     <span title="Search" class="sf-icon sf-search">{{ include('@WebProfiler/Icon/search.svg') }}</span>*/
/*                                 </a>*/
/*                             {% endif %}*/
/*                         </td>*/
/*                         <td>*/
/*                             {{ result.method }}*/
/*                             {% if request.session is not null %}*/
/*                                 <a href="{{ path('_profiler_search_results', request.query.all|merge({'method': result.method, 'token': result.token})) }}" title="Search">*/
/*                                     <span title="Search" class="sf-icon sf-search">{{ include('@WebProfiler/Icon/search.svg') }}</span>*/
/*                                 </a>*/
/*                             {% endif %}*/
/*                         </td>*/
/*                         <td class="break-long-words">*/
/*                             {{ result.url }}*/
/*                             {% if request.session is not null %}*/
/*                                 <a href="{{ path('_profiler_search_results', request.query.all|merge({'url': result.url, 'token': result.token})) }}" title="Search">*/
/*                                     <span title="Search" class="sf-icon sf-search">{{ include('@WebProfiler/Icon/search.svg') }}</span>*/
/*                                 </a>*/
/*                             {% endif %}*/
/*                         </td>*/
/*                         <td class="text-small">*/
/*                             <span class="nowrap">{{ result.time|date('d-M-Y') }}</span>*/
/*                             <span class="nowrap newline">{{ result.time|date('H:i:s') }}</span>*/
/*                         </td>*/
/*                         <td class="nowrap"><a href="{{ path('_profiler', { token: result.token }) }}">{{ result.token }}</a></td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     {% else %}*/
/*         <div class="empty">*/
/*             <p>The query returned no result.</p>*/
/*         </div>*/
/*     {% endif %}*/
/* */
/* {% endblock %}*/
/* */
