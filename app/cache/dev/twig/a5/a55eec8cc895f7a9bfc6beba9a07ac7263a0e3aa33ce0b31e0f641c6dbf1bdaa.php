<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_1291e1cef8b73c3f23a44ea8a95d6df2cb411fff555f5f71e39afd9ac5e6faaa extends Twig_Template
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
        $__internal_78775c849839fa6b4f0f7e639cc4d28b1fe58376d0165f8ae4e38acccc5e6eab = $this->env->getExtension("native_profiler");
        $__internal_78775c849839fa6b4f0f7e639cc4d28b1fe58376d0165f8ae4e38acccc5e6eab->enter($__internal_78775c849839fa6b4f0f7e639cc4d28b1fe58376d0165f8ae4e38acccc5e6eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_78775c849839fa6b4f0f7e639cc4d28b1fe58376d0165f8ae4e38acccc5e6eab->leave($__internal_78775c849839fa6b4f0f7e639cc4d28b1fe58376d0165f8ae4e38acccc5e6eab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
