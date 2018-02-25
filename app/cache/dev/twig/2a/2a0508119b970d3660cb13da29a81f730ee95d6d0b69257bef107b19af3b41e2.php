<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_c01e56209e1f54e9f27c6a90d78a2a488590849205e4e1752d6688bcbf29e01e extends Twig_Template
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
        $__internal_c41b255f9fe694b239c8d35787407def9201a7e0751e6abf36f0ee4c148c330a = $this->env->getExtension("native_profiler");
        $__internal_c41b255f9fe694b239c8d35787407def9201a7e0751e6abf36f0ee4c148c330a->enter($__internal_c41b255f9fe694b239c8d35787407def9201a7e0751e6abf36f0ee4c148c330a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_c41b255f9fe694b239c8d35787407def9201a7e0751e6abf36f0ee4c148c330a->leave($__internal_c41b255f9fe694b239c8d35787407def9201a7e0751e6abf36f0ee4c148c330a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
