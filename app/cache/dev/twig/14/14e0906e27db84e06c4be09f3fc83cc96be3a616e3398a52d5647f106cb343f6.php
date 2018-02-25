<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_9bcbd4f6362dd882bad62816ba0c37107dd5987e07cb57992b88a8fefc1efe9d extends Twig_Template
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
        $__internal_dbd21cb3af6eabd568d28c94039a97f32721c966cbb0cdf5b5641f67d65371c0 = $this->env->getExtension("native_profiler");
        $__internal_dbd21cb3af6eabd568d28c94039a97f32721c966cbb0cdf5b5641f67d65371c0->enter($__internal_dbd21cb3af6eabd568d28c94039a97f32721c966cbb0cdf5b5641f67d65371c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_dbd21cb3af6eabd568d28c94039a97f32721c966cbb0cdf5b5641f67d65371c0->leave($__internal_dbd21cb3af6eabd568d28c94039a97f32721c966cbb0cdf5b5641f67d65371c0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
