<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_dd05ffd0c12dcc07388faf11f10f52b5d762506de25c08d21f2493c63dc53f46 extends Twig_Template
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
        $__internal_605a9a7bbd33367725e26b3c8bfb77615f046ec7e58abeaa5502e0ab14467c46 = $this->env->getExtension("native_profiler");
        $__internal_605a9a7bbd33367725e26b3c8bfb77615f046ec7e58abeaa5502e0ab14467c46->enter($__internal_605a9a7bbd33367725e26b3c8bfb77615f046ec7e58abeaa5502e0ab14467c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_605a9a7bbd33367725e26b3c8bfb77615f046ec7e58abeaa5502e0ab14467c46->leave($__internal_605a9a7bbd33367725e26b3c8bfb77615f046ec7e58abeaa5502e0ab14467c46_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
