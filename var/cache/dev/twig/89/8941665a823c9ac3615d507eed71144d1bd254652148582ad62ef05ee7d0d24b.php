<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_2dbbfd6b77acbe05ad9ade4ebcd61f5b7547a3a465d4002778cf7e36a3848efc extends Twig_Template
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
        $__internal_5ff7d5d2291698fe8a5f2561e4e87c1acf45145e35dc51afaf128c7925334fbf = $this->env->getExtension("native_profiler");
        $__internal_5ff7d5d2291698fe8a5f2561e4e87c1acf45145e35dc51afaf128c7925334fbf->enter($__internal_5ff7d5d2291698fe8a5f2561e4e87c1acf45145e35dc51afaf128c7925334fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_5ff7d5d2291698fe8a5f2561e4e87c1acf45145e35dc51afaf128c7925334fbf->leave($__internal_5ff7d5d2291698fe8a5f2561e4e87c1acf45145e35dc51afaf128c7925334fbf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
