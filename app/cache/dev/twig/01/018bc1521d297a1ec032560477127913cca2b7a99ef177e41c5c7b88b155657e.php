<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_688f4ede84f248d83c68cf4a1834521d9bbb81701b7e63a9e3a547a34e762e0b extends Twig_Template
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
        $__internal_765f894f69be189d3125173ec31ebed0d856dbda09dadb29030cb9f9dc2446d2 = $this->env->getExtension("native_profiler");
        $__internal_765f894f69be189d3125173ec31ebed0d856dbda09dadb29030cb9f9dc2446d2->enter($__internal_765f894f69be189d3125173ec31ebed0d856dbda09dadb29030cb9f9dc2446d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_765f894f69be189d3125173ec31ebed0d856dbda09dadb29030cb9f9dc2446d2->leave($__internal_765f894f69be189d3125173ec31ebed0d856dbda09dadb29030cb9f9dc2446d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
