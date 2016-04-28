<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_95d0eea994b2d66a0ca8477ba586cee0c21114de2ad16338853e567684dca2bf extends Twig_Template
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
        $__internal_95164edf6d39a26ccd7336b4e370f268ed9c094992056713cbd1b6c53144dc7e = $this->env->getExtension("native_profiler");
        $__internal_95164edf6d39a26ccd7336b4e370f268ed9c094992056713cbd1b6c53144dc7e->enter($__internal_95164edf6d39a26ccd7336b4e370f268ed9c094992056713cbd1b6c53144dc7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_95164edf6d39a26ccd7336b4e370f268ed9c094992056713cbd1b6c53144dc7e->leave($__internal_95164edf6d39a26ccd7336b4e370f268ed9c094992056713cbd1b6c53144dc7e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
