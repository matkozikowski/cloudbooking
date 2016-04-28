<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_9c7abd5f8a006dbaeaac3fa3701942c9197970d347be1bfd33ee0b953e558be2 extends Twig_Template
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
        $__internal_eb8df0caa119d4b635f74416202b6b36f678772bc49c0d65064e0d8c4eca323a = $this->env->getExtension("native_profiler");
        $__internal_eb8df0caa119d4b635f74416202b6b36f678772bc49c0d65064e0d8c4eca323a->enter($__internal_eb8df0caa119d4b635f74416202b6b36f678772bc49c0d65064e0d8c4eca323a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_eb8df0caa119d4b635f74416202b6b36f678772bc49c0d65064e0d8c4eca323a->leave($__internal_eb8df0caa119d4b635f74416202b6b36f678772bc49c0d65064e0d8c4eca323a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
