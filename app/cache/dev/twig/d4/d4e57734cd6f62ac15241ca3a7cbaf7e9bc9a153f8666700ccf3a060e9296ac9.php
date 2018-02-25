<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_590975423ffcc4d39f83afc9419b6f265a85590a57bee7da78bdcd3f6e9e7d3a extends Twig_Template
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
        $__internal_22643c8d21bf915b4ffa5da7c1ac946c789b5afb6ea3aa600172803444ed7547 = $this->env->getExtension("native_profiler");
        $__internal_22643c8d21bf915b4ffa5da7c1ac946c789b5afb6ea3aa600172803444ed7547->enter($__internal_22643c8d21bf915b4ffa5da7c1ac946c789b5afb6ea3aa600172803444ed7547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_22643c8d21bf915b4ffa5da7c1ac946c789b5afb6ea3aa600172803444ed7547->leave($__internal_22643c8d21bf915b4ffa5da7c1ac946c789b5afb6ea3aa600172803444ed7547_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
