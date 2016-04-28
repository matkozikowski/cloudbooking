<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_37a70254d127084cc9667aa7d9f0a63b556a1a7601412d787b9c8aa00756b985 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14a81d41fa9b9f8764b277e5c234fc46c32b2499e4f1af97401d9e4df0d4b36c = $this->env->getExtension("native_profiler");
        $__internal_14a81d41fa9b9f8764b277e5c234fc46c32b2499e4f1af97401d9e4df0d4b36c->enter($__internal_14a81d41fa9b9f8764b277e5c234fc46c32b2499e4f1af97401d9e4df0d4b36c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_14a81d41fa9b9f8764b277e5c234fc46c32b2499e4f1af97401d9e4df0d4b36c->leave($__internal_14a81d41fa9b9f8764b277e5c234fc46c32b2499e4f1af97401d9e4df0d4b36c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_df910186be06f58ad7a7872e71c8042c97f7ed42d5ca0f88acc09131a018a3fc = $this->env->getExtension("native_profiler");
        $__internal_df910186be06f58ad7a7872e71c8042c97f7ed42d5ca0f88acc09131a018a3fc->enter($__internal_df910186be06f58ad7a7872e71c8042c97f7ed42d5ca0f88acc09131a018a3fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_df910186be06f58ad7a7872e71c8042c97f7ed42d5ca0f88acc09131a018a3fc->leave($__internal_df910186be06f58ad7a7872e71c8042c97f7ed42d5ca0f88acc09131a018a3fc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
