<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_887dcaf16fbfc876b6082d04b852d1b9d5cd09ee1e4ae95195c8c0aa066d14c5 extends Twig_Template
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
        $__internal_dff480b7a768a13541e19d0e94f945ecf3352ff278fe64856f06444329b239d6 = $this->env->getExtension("native_profiler");
        $__internal_dff480b7a768a13541e19d0e94f945ecf3352ff278fe64856f06444329b239d6->enter($__internal_dff480b7a768a13541e19d0e94f945ecf3352ff278fe64856f06444329b239d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_dff480b7a768a13541e19d0e94f945ecf3352ff278fe64856f06444329b239d6->leave($__internal_dff480b7a768a13541e19d0e94f945ecf3352ff278fe64856f06444329b239d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
