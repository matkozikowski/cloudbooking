<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_8b12459ebd42db9c1e60ddc9c670549349cfe6663652233a0e90913f3ce211f9 extends Twig_Template
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
        $__internal_865c0d84e59d400bbcbfee60a475f2ab299a7ce627dc90f814a40914e9f8702a = $this->env->getExtension("native_profiler");
        $__internal_865c0d84e59d400bbcbfee60a475f2ab299a7ce627dc90f814a40914e9f8702a->enter($__internal_865c0d84e59d400bbcbfee60a475f2ab299a7ce627dc90f814a40914e9f8702a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_865c0d84e59d400bbcbfee60a475f2ab299a7ce627dc90f814a40914e9f8702a->leave($__internal_865c0d84e59d400bbcbfee60a475f2ab299a7ce627dc90f814a40914e9f8702a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
