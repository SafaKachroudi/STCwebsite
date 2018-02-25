<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_8d0afab14f3560f10b11f2b5a82009a2ec266776aa4a6bd48c35a3946b55896f extends Twig_Template
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
        $__internal_92610d8fc6387af3222ea146a3b5d718a10be47da05c5099f54d3a0a9a515cfe = $this->env->getExtension("native_profiler");
        $__internal_92610d8fc6387af3222ea146a3b5d718a10be47da05c5099f54d3a0a9a515cfe->enter($__internal_92610d8fc6387af3222ea146a3b5d718a10be47da05c5099f54d3a0a9a515cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_92610d8fc6387af3222ea146a3b5d718a10be47da05c5099f54d3a0a9a515cfe->leave($__internal_92610d8fc6387af3222ea146a3b5d718a10be47da05c5099f54d3a0a9a515cfe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
