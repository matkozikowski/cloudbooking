<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_5f822d187eda10d46e5f1ae51f9720243577c8fa25ae901a05400fce4d3a970c extends Twig_Template
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
        $__internal_e18d1783810f962cf16bfbdc6032898296e42bca83130d7024b6c279496b3d9c = $this->env->getExtension("native_profiler");
        $__internal_e18d1783810f962cf16bfbdc6032898296e42bca83130d7024b6c279496b3d9c->enter($__internal_e18d1783810f962cf16bfbdc6032898296e42bca83130d7024b6c279496b3d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_e18d1783810f962cf16bfbdc6032898296e42bca83130d7024b6c279496b3d9c->leave($__internal_e18d1783810f962cf16bfbdc6032898296e42bca83130d7024b6c279496b3d9c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
