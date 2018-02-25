<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_8ade989ae238bd4d433ca196a1f2df9ba21aee1cccaf90bf12d75bf258e74d77 extends Twig_Template
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
        $__internal_de1f780947a71ff614af56a4ff0e1df7de4813e8ed0125bdd5229adc5c9d5e61 = $this->env->getExtension("native_profiler");
        $__internal_de1f780947a71ff614af56a4ff0e1df7de4813e8ed0125bdd5229adc5c9d5e61->enter($__internal_de1f780947a71ff614af56a4ff0e1df7de4813e8ed0125bdd5229adc5c9d5e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_de1f780947a71ff614af56a4ff0e1df7de4813e8ed0125bdd5229adc5c9d5e61->leave($__internal_de1f780947a71ff614af56a4ff0e1df7de4813e8ed0125bdd5229adc5c9d5e61_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
