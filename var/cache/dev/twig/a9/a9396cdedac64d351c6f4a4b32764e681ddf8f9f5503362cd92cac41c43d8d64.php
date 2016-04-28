<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_0a6592dedb7272d54df42e857f190671b4dd51498a91b646e8e95d3d67d0d037 extends Twig_Template
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
        $__internal_833d4c4c5d6c6269a6e5baf48165e0302e73f555ea32f2b9c0e8fb5831218e87 = $this->env->getExtension("native_profiler");
        $__internal_833d4c4c5d6c6269a6e5baf48165e0302e73f555ea32f2b9c0e8fb5831218e87->enter($__internal_833d4c4c5d6c6269a6e5baf48165e0302e73f555ea32f2b9c0e8fb5831218e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_833d4c4c5d6c6269a6e5baf48165e0302e73f555ea32f2b9c0e8fb5831218e87->leave($__internal_833d4c4c5d6c6269a6e5baf48165e0302e73f555ea32f2b9c0e8fb5831218e87_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
