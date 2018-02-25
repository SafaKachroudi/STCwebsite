<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_903858adae8ed7416c2d0491289561eb419593c785bac57a491c8f80d6bc2e63 extends Twig_Template
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
        $__internal_469c369bb25b3274481555de290c3fbb82927d0604964d6c587f9a73583337ec = $this->env->getExtension("native_profiler");
        $__internal_469c369bb25b3274481555de290c3fbb82927d0604964d6c587f9a73583337ec->enter($__internal_469c369bb25b3274481555de290c3fbb82927d0604964d6c587f9a73583337ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_469c369bb25b3274481555de290c3fbb82927d0604964d6c587f9a73583337ec->leave($__internal_469c369bb25b3274481555de290c3fbb82927d0604964d6c587f9a73583337ec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
