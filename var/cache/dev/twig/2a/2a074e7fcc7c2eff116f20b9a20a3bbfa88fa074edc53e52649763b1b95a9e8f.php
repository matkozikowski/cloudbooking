<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_dca9b9278fb0d45d42fd7117d67813c4962c6ab58e4cca73f2f401e5af557c59 extends Twig_Template
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
        $__internal_17d8653fc0e38d19d06aee9fd8e545121b6a09fb815b0b17560171425392f4b6 = $this->env->getExtension("native_profiler");
        $__internal_17d8653fc0e38d19d06aee9fd8e545121b6a09fb815b0b17560171425392f4b6->enter($__internal_17d8653fc0e38d19d06aee9fd8e545121b6a09fb815b0b17560171425392f4b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_17d8653fc0e38d19d06aee9fd8e545121b6a09fb815b0b17560171425392f4b6->leave($__internal_17d8653fc0e38d19d06aee9fd8e545121b6a09fb815b0b17560171425392f4b6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
