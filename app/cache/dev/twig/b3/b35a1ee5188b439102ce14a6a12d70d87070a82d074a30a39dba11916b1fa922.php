<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_8d2a231befa49d3365718596c33a651c9bfe15584466568e931f4d29c77419f8 extends Twig_Template
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
        $__internal_b9d898378c39175d1441ee796c1701295f0b854b1ad8a4d41478f5d33cf57ce7 = $this->env->getExtension("native_profiler");
        $__internal_b9d898378c39175d1441ee796c1701295f0b854b1ad8a4d41478f5d33cf57ce7->enter($__internal_b9d898378c39175d1441ee796c1701295f0b854b1ad8a4d41478f5d33cf57ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_b9d898378c39175d1441ee796c1701295f0b854b1ad8a4d41478f5d33cf57ce7->leave($__internal_b9d898378c39175d1441ee796c1701295f0b854b1ad8a4d41478f5d33cf57ce7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
