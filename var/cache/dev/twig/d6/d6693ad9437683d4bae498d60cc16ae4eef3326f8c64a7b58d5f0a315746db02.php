<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_e8355b0026942b106754ca6cf81f665b2343c7a260bbfa7c502b9639c71c3e5a extends Twig_Template
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
        $__internal_a8ddaddb555f62d8e16f5f6a0203fdb769c0dc77d9fcfb22d85d7400dfb98921 = $this->env->getExtension("native_profiler");
        $__internal_a8ddaddb555f62d8e16f5f6a0203fdb769c0dc77d9fcfb22d85d7400dfb98921->enter($__internal_a8ddaddb555f62d8e16f5f6a0203fdb769c0dc77d9fcfb22d85d7400dfb98921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_a8ddaddb555f62d8e16f5f6a0203fdb769c0dc77d9fcfb22d85d7400dfb98921->leave($__internal_a8ddaddb555f62d8e16f5f6a0203fdb769c0dc77d9fcfb22d85d7400dfb98921_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
