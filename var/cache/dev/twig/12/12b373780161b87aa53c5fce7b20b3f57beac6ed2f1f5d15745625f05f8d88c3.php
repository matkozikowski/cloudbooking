<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_83debccea83286adeb21504e47b384ad62acff16e4828e32e939f871e85dff5e extends Twig_Template
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
        $__internal_a1f853288ab8290195782d43ffa2a88e7aa4106968a73df8f6704a7730ad169f = $this->env->getExtension("native_profiler");
        $__internal_a1f853288ab8290195782d43ffa2a88e7aa4106968a73df8f6704a7730ad169f->enter($__internal_a1f853288ab8290195782d43ffa2a88e7aa4106968a73df8f6704a7730ad169f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_a1f853288ab8290195782d43ffa2a88e7aa4106968a73df8f6704a7730ad169f->leave($__internal_a1f853288ab8290195782d43ffa2a88e7aa4106968a73df8f6704a7730ad169f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
