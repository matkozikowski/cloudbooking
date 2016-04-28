<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_9b8c25ffa94dabe50007d19c1942e73824d9111f7277f8bc8a69eee395b2cb94 extends Twig_Template
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
        $__internal_f7866e00eb5238b1461a840318e75e1d2300f34a3c1bef8b4bd7093d335992d9 = $this->env->getExtension("native_profiler");
        $__internal_f7866e00eb5238b1461a840318e75e1d2300f34a3c1bef8b4bd7093d335992d9->enter($__internal_f7866e00eb5238b1461a840318e75e1d2300f34a3c1bef8b4bd7093d335992d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f7866e00eb5238b1461a840318e75e1d2300f34a3c1bef8b4bd7093d335992d9->leave($__internal_f7866e00eb5238b1461a840318e75e1d2300f34a3c1bef8b4bd7093d335992d9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
