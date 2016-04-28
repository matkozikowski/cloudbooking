<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_f34c280277a8331050daa15ed40bf854cd1c3e7777152dbf04e1ae30205a6f56 extends Twig_Template
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
        $__internal_88318e92053ba487fa545ff862c887001f2a55cc3e6503706e2a386e9bb32eaf = $this->env->getExtension("native_profiler");
        $__internal_88318e92053ba487fa545ff862c887001f2a55cc3e6503706e2a386e9bb32eaf->enter($__internal_88318e92053ba487fa545ff862c887001f2a55cc3e6503706e2a386e9bb32eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_88318e92053ba487fa545ff862c887001f2a55cc3e6503706e2a386e9bb32eaf->leave($__internal_88318e92053ba487fa545ff862c887001f2a55cc3e6503706e2a386e9bb32eaf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
