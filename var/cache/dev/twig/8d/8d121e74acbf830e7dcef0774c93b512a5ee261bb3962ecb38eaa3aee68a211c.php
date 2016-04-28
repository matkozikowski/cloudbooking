<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_65d3deb79bfd3ce1152bebcf16d4d1e7954e7dd353189d0fa88e325c05954e0f extends Twig_Template
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
        $__internal_97eea5186831cd7a827bef28afb6291b9cf71d4692123c0d853a927eb53d1ebc = $this->env->getExtension("native_profiler");
        $__internal_97eea5186831cd7a827bef28afb6291b9cf71d4692123c0d853a927eb53d1ebc->enter($__internal_97eea5186831cd7a827bef28afb6291b9cf71d4692123c0d853a927eb53d1ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_97eea5186831cd7a827bef28afb6291b9cf71d4692123c0d853a927eb53d1ebc->leave($__internal_97eea5186831cd7a827bef28afb6291b9cf71d4692123c0d853a927eb53d1ebc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
