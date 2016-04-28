<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_a45f7fe8c7f9ccb21fb2ecc84e4dda3901810501cd054d083a601475aa432d2f extends Twig_Template
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
        $__internal_8d18947e9991bef3bf95d31d55fd866250d1f2da1930eeacbb4728a93fecd1ac = $this->env->getExtension("native_profiler");
        $__internal_8d18947e9991bef3bf95d31d55fd866250d1f2da1930eeacbb4728a93fecd1ac->enter($__internal_8d18947e9991bef3bf95d31d55fd866250d1f2da1930eeacbb4728a93fecd1ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_8d18947e9991bef3bf95d31d55fd866250d1f2da1930eeacbb4728a93fecd1ac->leave($__internal_8d18947e9991bef3bf95d31d55fd866250d1f2da1930eeacbb4728a93fecd1ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
