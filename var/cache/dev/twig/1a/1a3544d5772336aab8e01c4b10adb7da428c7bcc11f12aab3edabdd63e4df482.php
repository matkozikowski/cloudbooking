<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_13e9078654f6a96bf4b05d4485336acf7e58bc69f8854d0767d9c5e4db71c6d3 extends Twig_Template
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
        $__internal_2955464509ab2024c4993941d409d69aa9b3efda4ea417d7c7288ff745380459 = $this->env->getExtension("native_profiler");
        $__internal_2955464509ab2024c4993941d409d69aa9b3efda4ea417d7c7288ff745380459->enter($__internal_2955464509ab2024c4993941d409d69aa9b3efda4ea417d7c7288ff745380459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_2955464509ab2024c4993941d409d69aa9b3efda4ea417d7c7288ff745380459->leave($__internal_2955464509ab2024c4993941d409d69aa9b3efda4ea417d7c7288ff745380459_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
