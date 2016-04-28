<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_780fe062d01d88d443acda60e82a6044ee9e41e3f08256e9d11f507405d87e36 extends Twig_Template
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
        $__internal_35e2322c7ff629dedaf1adc91db26a3bb94be0c8472d6daf26c130659cfd18ec = $this->env->getExtension("native_profiler");
        $__internal_35e2322c7ff629dedaf1adc91db26a3bb94be0c8472d6daf26c130659cfd18ec->enter($__internal_35e2322c7ff629dedaf1adc91db26a3bb94be0c8472d6daf26c130659cfd18ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_35e2322c7ff629dedaf1adc91db26a3bb94be0c8472d6daf26c130659cfd18ec->leave($__internal_35e2322c7ff629dedaf1adc91db26a3bb94be0c8472d6daf26c130659cfd18ec_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
