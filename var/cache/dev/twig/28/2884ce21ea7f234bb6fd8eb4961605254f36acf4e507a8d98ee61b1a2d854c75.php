<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_78c4691ee2d5d3ce792ab2c5821f8c4857986d32ecca2ae2d1d43cde96bd5706 extends Twig_Template
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
        $__internal_b55a20f305e3a35ceb47cbbefd7d8b2df672bc2a01ffa0a06e428df040a05171 = $this->env->getExtension("native_profiler");
        $__internal_b55a20f305e3a35ceb47cbbefd7d8b2df672bc2a01ffa0a06e428df040a05171->enter($__internal_b55a20f305e3a35ceb47cbbefd7d8b2df672bc2a01ffa0a06e428df040a05171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b55a20f305e3a35ceb47cbbefd7d8b2df672bc2a01ffa0a06e428df040a05171->leave($__internal_b55a20f305e3a35ceb47cbbefd7d8b2df672bc2a01ffa0a06e428df040a05171_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
