<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_e1ac8caa4322cd04fd962b59c68fd25c86172cb2d7eab5b7d0b04cb67e6c8c23 extends Twig_Template
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
        $__internal_343ebcb276237f05d6978cffc7af687c02f05ffa569f2c398a35b96889f83517 = $this->env->getExtension("native_profiler");
        $__internal_343ebcb276237f05d6978cffc7af687c02f05ffa569f2c398a35b96889f83517->enter($__internal_343ebcb276237f05d6978cffc7af687c02f05ffa569f2c398a35b96889f83517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_343ebcb276237f05d6978cffc7af687c02f05ffa569f2c398a35b96889f83517->leave($__internal_343ebcb276237f05d6978cffc7af687c02f05ffa569f2c398a35b96889f83517_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
