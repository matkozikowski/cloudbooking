<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_e288aa4e66c06f36430045084df1495aaed43c0582a1dc13464628d4acf8f447 extends Twig_Template
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
        $__internal_da92302bc7dc6f0d027ec8872d298bb135610e383390aa78f8ea4dc0a355fbfb = $this->env->getExtension("native_profiler");
        $__internal_da92302bc7dc6f0d027ec8872d298bb135610e383390aa78f8ea4dc0a355fbfb->enter($__internal_da92302bc7dc6f0d027ec8872d298bb135610e383390aa78f8ea4dc0a355fbfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_da92302bc7dc6f0d027ec8872d298bb135610e383390aa78f8ea4dc0a355fbfb->leave($__internal_da92302bc7dc6f0d027ec8872d298bb135610e383390aa78f8ea4dc0a355fbfb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
