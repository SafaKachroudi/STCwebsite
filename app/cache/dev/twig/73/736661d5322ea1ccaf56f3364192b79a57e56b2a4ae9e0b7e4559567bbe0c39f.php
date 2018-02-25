<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_673ebee33e534dc0c4e4eb308eeccd781077e388b6d85c50d58f6c17c6f37c24 extends Twig_Template
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
        $__internal_1fa0af232b490aec5db74b8a2b0217dcaaaa59918e6f7b90bc5ccb1581f4d963 = $this->env->getExtension("native_profiler");
        $__internal_1fa0af232b490aec5db74b8a2b0217dcaaaa59918e6f7b90bc5ccb1581f4d963->enter($__internal_1fa0af232b490aec5db74b8a2b0217dcaaaa59918e6f7b90bc5ccb1581f4d963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_1fa0af232b490aec5db74b8a2b0217dcaaaa59918e6f7b90bc5ccb1581f4d963->leave($__internal_1fa0af232b490aec5db74b8a2b0217dcaaaa59918e6f7b90bc5ccb1581f4d963_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
