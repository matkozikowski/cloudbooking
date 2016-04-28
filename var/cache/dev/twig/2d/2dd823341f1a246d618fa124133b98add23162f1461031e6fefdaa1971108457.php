<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_600e594896367c0f4a45ca4819570a3c01396b5fd53c2c1c191acc85c6eb212a extends Twig_Template
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
        $__internal_ae3c96f059110af4a29379e88e6b0ad600c93467a698e7a94d3347a065bdf194 = $this->env->getExtension("native_profiler");
        $__internal_ae3c96f059110af4a29379e88e6b0ad600c93467a698e7a94d3347a065bdf194->enter($__internal_ae3c96f059110af4a29379e88e6b0ad600c93467a698e7a94d3347a065bdf194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_ae3c96f059110af4a29379e88e6b0ad600c93467a698e7a94d3347a065bdf194->leave($__internal_ae3c96f059110af4a29379e88e6b0ad600c93467a698e7a94d3347a065bdf194_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
