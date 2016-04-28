<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_6ce89b41ac7c721a7fc439c1c9655a30d6e1c814d6002433092a9dcb19c5dd60 extends Twig_Template
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
        $__internal_ea3388838976df75545c7f80b0ec7d74ff7462ef7257390e6065d2ac09d3bf9b = $this->env->getExtension("native_profiler");
        $__internal_ea3388838976df75545c7f80b0ec7d74ff7462ef7257390e6065d2ac09d3bf9b->enter($__internal_ea3388838976df75545c7f80b0ec7d74ff7462ef7257390e6065d2ac09d3bf9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_ea3388838976df75545c7f80b0ec7d74ff7462ef7257390e6065d2ac09d3bf9b->leave($__internal_ea3388838976df75545c7f80b0ec7d74ff7462ef7257390e6065d2ac09d3bf9b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
