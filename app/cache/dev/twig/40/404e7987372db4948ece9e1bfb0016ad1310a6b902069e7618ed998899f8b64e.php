<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_19c1846988926ae340d3a7ecd7914cfbb74ccec13efdb30f6504bca45c7a18d6 extends Twig_Template
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
        $__internal_2fd6e7c20a680ab33f9e72dffec6632aac119e8fac4afae7b2ebd396d65149f1 = $this->env->getExtension("native_profiler");
        $__internal_2fd6e7c20a680ab33f9e72dffec6632aac119e8fac4afae7b2ebd396d65149f1->enter($__internal_2fd6e7c20a680ab33f9e72dffec6632aac119e8fac4afae7b2ebd396d65149f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_2fd6e7c20a680ab33f9e72dffec6632aac119e8fac4afae7b2ebd396d65149f1->leave($__internal_2fd6e7c20a680ab33f9e72dffec6632aac119e8fac4afae7b2ebd396d65149f1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
