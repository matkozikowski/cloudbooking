<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_4e10711ff4de64a19b2faf449a0c9dc51cf783e4c4cce15fd4edbf267354db69 extends Twig_Template
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
        $__internal_62f1ed1ca90b6ab51ff4136cf7fef98f0bc2642c459f1b660762d32dc11bacde = $this->env->getExtension("native_profiler");
        $__internal_62f1ed1ca90b6ab51ff4136cf7fef98f0bc2642c459f1b660762d32dc11bacde->enter($__internal_62f1ed1ca90b6ab51ff4136cf7fef98f0bc2642c459f1b660762d32dc11bacde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_62f1ed1ca90b6ab51ff4136cf7fef98f0bc2642c459f1b660762d32dc11bacde->leave($__internal_62f1ed1ca90b6ab51ff4136cf7fef98f0bc2642c459f1b660762d32dc11bacde_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
