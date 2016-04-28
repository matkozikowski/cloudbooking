<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_0fc2548435c2754f287b87d2c1ba437cf46117ca14e0a1dba24767e1f48ec773 extends Twig_Template
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
        $__internal_74f26303b5cb2360a6d9415cf290796efb13ff82593cf32ca67c29703f54336c = $this->env->getExtension("native_profiler");
        $__internal_74f26303b5cb2360a6d9415cf290796efb13ff82593cf32ca67c29703f54336c->enter($__internal_74f26303b5cb2360a6d9415cf290796efb13ff82593cf32ca67c29703f54336c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_74f26303b5cb2360a6d9415cf290796efb13ff82593cf32ca67c29703f54336c->leave($__internal_74f26303b5cb2360a6d9415cf290796efb13ff82593cf32ca67c29703f54336c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
