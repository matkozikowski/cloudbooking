<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_3c4ff290661244a46e76fa39e8439ff2d5a739d679d8a94fc95ffabae0fd31ac extends Twig_Template
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
        $__internal_797b2606acf994d79b191ecfca4cee9b19ed1bfcb53259098dd62ccfe5f38063 = $this->env->getExtension("native_profiler");
        $__internal_797b2606acf994d79b191ecfca4cee9b19ed1bfcb53259098dd62ccfe5f38063->enter($__internal_797b2606acf994d79b191ecfca4cee9b19ed1bfcb53259098dd62ccfe5f38063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_797b2606acf994d79b191ecfca4cee9b19ed1bfcb53259098dd62ccfe5f38063->leave($__internal_797b2606acf994d79b191ecfca4cee9b19ed1bfcb53259098dd62ccfe5f38063_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
