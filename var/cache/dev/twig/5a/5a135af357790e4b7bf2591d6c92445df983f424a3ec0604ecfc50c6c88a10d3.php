<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_1d6498e19069996e9f969f0b18e384d54467b78e5a53b49f5c25618698d97136 extends Twig_Template
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
        $__internal_03a99c5746020b43abce4a9f46016d803c46bee9184077425a4fa08f0db7a7ef = $this->env->getExtension("native_profiler");
        $__internal_03a99c5746020b43abce4a9f46016d803c46bee9184077425a4fa08f0db7a7ef->enter($__internal_03a99c5746020b43abce4a9f46016d803c46bee9184077425a4fa08f0db7a7ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_03a99c5746020b43abce4a9f46016d803c46bee9184077425a4fa08f0db7a7ef->leave($__internal_03a99c5746020b43abce4a9f46016d803c46bee9184077425a4fa08f0db7a7ef_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
