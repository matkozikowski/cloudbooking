<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_4a04f5b078fedbbe868699e7bdc72f2ab96acde2adbeb63cd4274afb4c45fca1 extends Twig_Template
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
        $__internal_269e5dd37be6bf19b71d18695a35c1bc3ae746a14c5f77eb009cd097f158983f = $this->env->getExtension("native_profiler");
        $__internal_269e5dd37be6bf19b71d18695a35c1bc3ae746a14c5f77eb009cd097f158983f->enter($__internal_269e5dd37be6bf19b71d18695a35c1bc3ae746a14c5f77eb009cd097f158983f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_269e5dd37be6bf19b71d18695a35c1bc3ae746a14c5f77eb009cd097f158983f->leave($__internal_269e5dd37be6bf19b71d18695a35c1bc3ae746a14c5f77eb009cd097f158983f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
