<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_e02915c599874cf23ae77032ab76936790f7e7d7e56bae53f31352014e7eb8ca extends Twig_Template
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
        $__internal_63f2b751cfefeeff1f740783a3c6516cf2af394c27b1f3ffda1f30e41f55b1b4 = $this->env->getExtension("native_profiler");
        $__internal_63f2b751cfefeeff1f740783a3c6516cf2af394c27b1f3ffda1f30e41f55b1b4->enter($__internal_63f2b751cfefeeff1f740783a3c6516cf2af394c27b1f3ffda1f30e41f55b1b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_63f2b751cfefeeff1f740783a3c6516cf2af394c27b1f3ffda1f30e41f55b1b4->leave($__internal_63f2b751cfefeeff1f740783a3c6516cf2af394c27b1f3ffda1f30e41f55b1b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
