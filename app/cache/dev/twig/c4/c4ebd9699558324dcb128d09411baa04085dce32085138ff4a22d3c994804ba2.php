<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_62cb154ffc51a8640a205c968d36c779359905acbe8fe401aee5d510f6ab5880 extends Twig_Template
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
        $__internal_339923c8b36b5d2b1811cbf01aeac921a0a3f62bd22246d69a95a76cab7e016b = $this->env->getExtension("native_profiler");
        $__internal_339923c8b36b5d2b1811cbf01aeac921a0a3f62bd22246d69a95a76cab7e016b->enter($__internal_339923c8b36b5d2b1811cbf01aeac921a0a3f62bd22246d69a95a76cab7e016b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_339923c8b36b5d2b1811cbf01aeac921a0a3f62bd22246d69a95a76cab7e016b->leave($__internal_339923c8b36b5d2b1811cbf01aeac921a0a3f62bd22246d69a95a76cab7e016b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
