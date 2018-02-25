<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_0fe6f48810b8677ac40ead12e9e2c2c8ff792bc005e037ddcf285b22e018703b extends Twig_Template
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
        $__internal_81131bfb88ee1e36ea7919f102ad3f7621873e6e31060690ca011c8e452e5a4d = $this->env->getExtension("native_profiler");
        $__internal_81131bfb88ee1e36ea7919f102ad3f7621873e6e31060690ca011c8e452e5a4d->enter($__internal_81131bfb88ee1e36ea7919f102ad3f7621873e6e31060690ca011c8e452e5a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_81131bfb88ee1e36ea7919f102ad3f7621873e6e31060690ca011c8e452e5a4d->leave($__internal_81131bfb88ee1e36ea7919f102ad3f7621873e6e31060690ca011c8e452e5a4d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
