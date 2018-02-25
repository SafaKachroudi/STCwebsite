<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_b5d5f53debd5a0f00d698556adff6ecd68a8027c0921fc3e2220a7287c9d2c9d extends Twig_Template
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
        $__internal_b59b23023895c76a4b57339428a25f2993557782d9b51c7f4953952e7d539af2 = $this->env->getExtension("native_profiler");
        $__internal_b59b23023895c76a4b57339428a25f2993557782d9b51c7f4953952e7d539af2->enter($__internal_b59b23023895c76a4b57339428a25f2993557782d9b51c7f4953952e7d539af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_b59b23023895c76a4b57339428a25f2993557782d9b51c7f4953952e7d539af2->leave($__internal_b59b23023895c76a4b57339428a25f2993557782d9b51c7f4953952e7d539af2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
