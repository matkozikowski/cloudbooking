<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_8dd3935ba6c8660efe99e4b67e081d62f6a4584cb86a75f25a40131f9b7575ad extends Twig_Template
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
        $__internal_56504e298c423a77727b7b5fc8a1be00348a5f3e9b9a10bde6f09e1821f71607 = $this->env->getExtension("native_profiler");
        $__internal_56504e298c423a77727b7b5fc8a1be00348a5f3e9b9a10bde6f09e1821f71607->enter($__internal_56504e298c423a77727b7b5fc8a1be00348a5f3e9b9a10bde6f09e1821f71607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_56504e298c423a77727b7b5fc8a1be00348a5f3e9b9a10bde6f09e1821f71607->leave($__internal_56504e298c423a77727b7b5fc8a1be00348a5f3e9b9a10bde6f09e1821f71607_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
