<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_fa150a70264ece7ba762904dfdb005d6e7c3cda20bab199e7ca65fe8e73bfc8e extends Twig_Template
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
        $__internal_adb14519987eb7a8be4068db9704a32ffe202f49b6741e77adf05d6af80a71e2 = $this->env->getExtension("native_profiler");
        $__internal_adb14519987eb7a8be4068db9704a32ffe202f49b6741e77adf05d6af80a71e2->enter($__internal_adb14519987eb7a8be4068db9704a32ffe202f49b6741e77adf05d6af80a71e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_adb14519987eb7a8be4068db9704a32ffe202f49b6741e77adf05d6af80a71e2->leave($__internal_adb14519987eb7a8be4068db9704a32ffe202f49b6741e77adf05d6af80a71e2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
