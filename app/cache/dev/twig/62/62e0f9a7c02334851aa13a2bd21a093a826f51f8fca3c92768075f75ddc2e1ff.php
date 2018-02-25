<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_50be96cf24efc6cf0f918a2bde2e65fcd1a146376dad0d1b9ffe5c07008a992a extends Twig_Template
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
        $__internal_4828988262641b55a637b3a2b90a285fccfd77351eb251e8653e034e585048cf = $this->env->getExtension("native_profiler");
        $__internal_4828988262641b55a637b3a2b90a285fccfd77351eb251e8653e034e585048cf->enter($__internal_4828988262641b55a637b3a2b90a285fccfd77351eb251e8653e034e585048cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_4828988262641b55a637b3a2b90a285fccfd77351eb251e8653e034e585048cf->leave($__internal_4828988262641b55a637b3a2b90a285fccfd77351eb251e8653e034e585048cf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
