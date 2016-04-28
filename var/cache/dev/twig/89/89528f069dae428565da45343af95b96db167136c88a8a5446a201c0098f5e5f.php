<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_b5e5e1e13654c3f759849a7bdc69d07f9a35b04669694abd55bf7bcf668d8fab extends Twig_Template
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
        $__internal_057b9a914b6a3817c7e2661f4e57f2a6a4104b5e746c29e452282cf82b44f55b = $this->env->getExtension("native_profiler");
        $__internal_057b9a914b6a3817c7e2661f4e57f2a6a4104b5e746c29e452282cf82b44f55b->enter($__internal_057b9a914b6a3817c7e2661f4e57f2a6a4104b5e746c29e452282cf82b44f55b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_057b9a914b6a3817c7e2661f4e57f2a6a4104b5e746c29e452282cf82b44f55b->leave($__internal_057b9a914b6a3817c7e2661f4e57f2a6a4104b5e746c29e452282cf82b44f55b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
