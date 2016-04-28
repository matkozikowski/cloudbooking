<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_eb5ea4201a42df1693e5d28fd979b0e91f5c5024f1680ed0d6886a27140bfb4a extends Twig_Template
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
        $__internal_4721a2694399d2388ab7a7c406958a600d808b8be40ced36b01b25d2fdeee905 = $this->env->getExtension("native_profiler");
        $__internal_4721a2694399d2388ab7a7c406958a600d808b8be40ced36b01b25d2fdeee905->enter($__internal_4721a2694399d2388ab7a7c406958a600d808b8be40ced36b01b25d2fdeee905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_4721a2694399d2388ab7a7c406958a600d808b8be40ced36b01b25d2fdeee905->leave($__internal_4721a2694399d2388ab7a7c406958a600d808b8be40ced36b01b25d2fdeee905_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
