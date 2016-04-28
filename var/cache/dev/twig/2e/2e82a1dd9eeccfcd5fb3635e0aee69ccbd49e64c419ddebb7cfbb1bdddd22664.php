<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_36b733f08940be8ac59092d915d12310449b4fd233b7fd8469b70a998de19318 extends Twig_Template
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
        $__internal_ac3b9cd7dfe417f087b1513e6ba8a54f4268765c7198ec0deb1583509932c763 = $this->env->getExtension("native_profiler");
        $__internal_ac3b9cd7dfe417f087b1513e6ba8a54f4268765c7198ec0deb1583509932c763->enter($__internal_ac3b9cd7dfe417f087b1513e6ba8a54f4268765c7198ec0deb1583509932c763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_ac3b9cd7dfe417f087b1513e6ba8a54f4268765c7198ec0deb1583509932c763->leave($__internal_ac3b9cd7dfe417f087b1513e6ba8a54f4268765c7198ec0deb1583509932c763_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
