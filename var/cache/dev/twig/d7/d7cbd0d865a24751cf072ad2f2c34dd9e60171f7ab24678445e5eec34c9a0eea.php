<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_56107642c2e4365046b63817c56d02c2dce7a2ab8cd796ecd072dfab54a93478 extends Twig_Template
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
        $__internal_c54c8f2a56a8355874a716659c3ef035b1d9e0e6b4c2fc75cd512f95ce14d26d = $this->env->getExtension("native_profiler");
        $__internal_c54c8f2a56a8355874a716659c3ef035b1d9e0e6b4c2fc75cd512f95ce14d26d->enter($__internal_c54c8f2a56a8355874a716659c3ef035b1d9e0e6b4c2fc75cd512f95ce14d26d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_c54c8f2a56a8355874a716659c3ef035b1d9e0e6b4c2fc75cd512f95ce14d26d->leave($__internal_c54c8f2a56a8355874a716659c3ef035b1d9e0e6b4c2fc75cd512f95ce14d26d_prof);

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
