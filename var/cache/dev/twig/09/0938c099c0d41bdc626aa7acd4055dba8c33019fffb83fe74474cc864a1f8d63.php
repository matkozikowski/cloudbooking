<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_ed221f598c3d305d69d1b2fca9ff3ca7680d711782cf43930bd1b82a83755904 extends Twig_Template
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
        $__internal_bd8174438cfa7792571ecc7a9cbb006de0a2586f56b8a17b5cd35dba23310fd1 = $this->env->getExtension("native_profiler");
        $__internal_bd8174438cfa7792571ecc7a9cbb006de0a2586f56b8a17b5cd35dba23310fd1->enter($__internal_bd8174438cfa7792571ecc7a9cbb006de0a2586f56b8a17b5cd35dba23310fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_bd8174438cfa7792571ecc7a9cbb006de0a2586f56b8a17b5cd35dba23310fd1->leave($__internal_bd8174438cfa7792571ecc7a9cbb006de0a2586f56b8a17b5cd35dba23310fd1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
