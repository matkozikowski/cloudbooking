<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_60647283e9e1e9b72fc0abdaeee50e3ad290986bdc85d0c87fb89f82d4381ad2 extends Twig_Template
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
        $__internal_486303ddd4e5bd8747606f084f5f0970664605d9533fe1fd288e0cfe5945b6fa = $this->env->getExtension("native_profiler");
        $__internal_486303ddd4e5bd8747606f084f5f0970664605d9533fe1fd288e0cfe5945b6fa->enter($__internal_486303ddd4e5bd8747606f084f5f0970664605d9533fe1fd288e0cfe5945b6fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_486303ddd4e5bd8747606f084f5f0970664605d9533fe1fd288e0cfe5945b6fa->leave($__internal_486303ddd4e5bd8747606f084f5f0970664605d9533fe1fd288e0cfe5945b6fa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
