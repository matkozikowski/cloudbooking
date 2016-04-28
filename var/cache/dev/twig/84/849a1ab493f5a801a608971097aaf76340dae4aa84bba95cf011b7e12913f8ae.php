<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_2850fe7e93e3f3e8a2d1b57d95c9cbe31f3b3d1f1b114deedbca6e2749f4c095 extends Twig_Template
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
        $__internal_e60e8ff71fa4e59dc1826159b09524a0a1cbe85fb71c576bc0bcfca24c4d2acb = $this->env->getExtension("native_profiler");
        $__internal_e60e8ff71fa4e59dc1826159b09524a0a1cbe85fb71c576bc0bcfca24c4d2acb->enter($__internal_e60e8ff71fa4e59dc1826159b09524a0a1cbe85fb71c576bc0bcfca24c4d2acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e60e8ff71fa4e59dc1826159b09524a0a1cbe85fb71c576bc0bcfca24c4d2acb->leave($__internal_e60e8ff71fa4e59dc1826159b09524a0a1cbe85fb71c576bc0bcfca24c4d2acb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
