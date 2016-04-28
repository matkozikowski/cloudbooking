<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_2b950368740eb81f62549f9a8a9b24f7f6dab98d788c565f885837a3ac260a8c extends Twig_Template
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
        $__internal_d71a71d6168b9eadee898c06252b20dcd149dc881f4bd550b0b0956d8d655ba7 = $this->env->getExtension("native_profiler");
        $__internal_d71a71d6168b9eadee898c06252b20dcd149dc881f4bd550b0b0956d8d655ba7->enter($__internal_d71a71d6168b9eadee898c06252b20dcd149dc881f4bd550b0b0956d8d655ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d71a71d6168b9eadee898c06252b20dcd149dc881f4bd550b0b0956d8d655ba7->leave($__internal_d71a71d6168b9eadee898c06252b20dcd149dc881f4bd550b0b0956d8d655ba7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
