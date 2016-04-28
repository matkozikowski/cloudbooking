<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_6d83a35a4394f768ae5249915d4a3dc91d1cbbebc825d751892e6fe89bcf57fb extends Twig_Template
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
        $__internal_2fb7b1743dabe292b3450712b98279b97195a0f9d5d4eb6ee5f16d2e446af0a8 = $this->env->getExtension("native_profiler");
        $__internal_2fb7b1743dabe292b3450712b98279b97195a0f9d5d4eb6ee5f16d2e446af0a8->enter($__internal_2fb7b1743dabe292b3450712b98279b97195a0f9d5d4eb6ee5f16d2e446af0a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_2fb7b1743dabe292b3450712b98279b97195a0f9d5d4eb6ee5f16d2e446af0a8->leave($__internal_2fb7b1743dabe292b3450712b98279b97195a0f9d5d4eb6ee5f16d2e446af0a8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
