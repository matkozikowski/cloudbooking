<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_49514e28104e8af2cbca01cd08285467c18d94a5cc8cea4d95cb5e1422fd2533 extends Twig_Template
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
        $__internal_5664eff34ec36098262fd431f0953cd389a48896950222c7276ea1dcf38d1910 = $this->env->getExtension("native_profiler");
        $__internal_5664eff34ec36098262fd431f0953cd389a48896950222c7276ea1dcf38d1910->enter($__internal_5664eff34ec36098262fd431f0953cd389a48896950222c7276ea1dcf38d1910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_5664eff34ec36098262fd431f0953cd389a48896950222c7276ea1dcf38d1910->leave($__internal_5664eff34ec36098262fd431f0953cd389a48896950222c7276ea1dcf38d1910_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
