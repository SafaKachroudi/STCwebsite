<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_79ae781f7a16e34031cb980373a856990d536698c96880f329b6fa6636547e95 extends Twig_Template
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
        $__internal_37e43bd367ad4d971f00816fe8786e01144b62860f73937efb0d8d9271594ad1 = $this->env->getExtension("native_profiler");
        $__internal_37e43bd367ad4d971f00816fe8786e01144b62860f73937efb0d8d9271594ad1->enter($__internal_37e43bd367ad4d971f00816fe8786e01144b62860f73937efb0d8d9271594ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_37e43bd367ad4d971f00816fe8786e01144b62860f73937efb0d8d9271594ad1->leave($__internal_37e43bd367ad4d971f00816fe8786e01144b62860f73937efb0d8d9271594ad1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
