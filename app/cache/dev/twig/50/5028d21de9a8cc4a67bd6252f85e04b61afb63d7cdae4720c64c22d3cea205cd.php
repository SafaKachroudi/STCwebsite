<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_286ebed1b5d02e778af8856a7de2cf3a85396e58e9aacf0344768855cf0fd13f extends Twig_Template
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
        $__internal_3793e7104f4fd680b51ee367b3e2f5ef5a8c3a2e0dd930c1178407cb4616ec4d = $this->env->getExtension("native_profiler");
        $__internal_3793e7104f4fd680b51ee367b3e2f5ef5a8c3a2e0dd930c1178407cb4616ec4d->enter($__internal_3793e7104f4fd680b51ee367b3e2f5ef5a8c3a2e0dd930c1178407cb4616ec4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_3793e7104f4fd680b51ee367b3e2f5ef5a8c3a2e0dd930c1178407cb4616ec4d->leave($__internal_3793e7104f4fd680b51ee367b3e2f5ef5a8c3a2e0dd930c1178407cb4616ec4d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
