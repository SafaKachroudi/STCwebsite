<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_f467b2244c14287559ac105994903ce07aead9eb48957dd9cba941337ee403d8 extends Twig_Template
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
        $__internal_eefa0ac1b024bad8bc67ea49251d84668d2dab7763986046310d95dea21ab1bb = $this->env->getExtension("native_profiler");
        $__internal_eefa0ac1b024bad8bc67ea49251d84668d2dab7763986046310d95dea21ab1bb->enter($__internal_eefa0ac1b024bad8bc67ea49251d84668d2dab7763986046310d95dea21ab1bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_eefa0ac1b024bad8bc67ea49251d84668d2dab7763986046310d95dea21ab1bb->leave($__internal_eefa0ac1b024bad8bc67ea49251d84668d2dab7763986046310d95dea21ab1bb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
