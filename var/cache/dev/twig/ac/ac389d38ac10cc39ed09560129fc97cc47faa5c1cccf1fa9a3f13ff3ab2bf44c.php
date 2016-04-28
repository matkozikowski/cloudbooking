<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f77ba85dfe0a4d0da7e64a5755df979b7dd7bde0bf2ea618ecf10bbc19aff7e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd8274965b00899ada1e28635f918aee424dc72c6bf7dd61516d3755f93a1b3a = $this->env->getExtension("native_profiler");
        $__internal_dd8274965b00899ada1e28635f918aee424dc72c6bf7dd61516d3755f93a1b3a->enter($__internal_dd8274965b00899ada1e28635f918aee424dc72c6bf7dd61516d3755f93a1b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd8274965b00899ada1e28635f918aee424dc72c6bf7dd61516d3755f93a1b3a->leave($__internal_dd8274965b00899ada1e28635f918aee424dc72c6bf7dd61516d3755f93a1b3a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_89fe00ac29135f7bf2bf17419ff689f5dcf499baaa61fc00f2706a8555533010 = $this->env->getExtension("native_profiler");
        $__internal_89fe00ac29135f7bf2bf17419ff689f5dcf499baaa61fc00f2706a8555533010->enter($__internal_89fe00ac29135f7bf2bf17419ff689f5dcf499baaa61fc00f2706a8555533010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_89fe00ac29135f7bf2bf17419ff689f5dcf499baaa61fc00f2706a8555533010->leave($__internal_89fe00ac29135f7bf2bf17419ff689f5dcf499baaa61fc00f2706a8555533010_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a70b0d29c9568358d42c05273dd00881e91b679de02d2e72819f2f6b24156be4 = $this->env->getExtension("native_profiler");
        $__internal_a70b0d29c9568358d42c05273dd00881e91b679de02d2e72819f2f6b24156be4->enter($__internal_a70b0d29c9568358d42c05273dd00881e91b679de02d2e72819f2f6b24156be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a70b0d29c9568358d42c05273dd00881e91b679de02d2e72819f2f6b24156be4->leave($__internal_a70b0d29c9568358d42c05273dd00881e91b679de02d2e72819f2f6b24156be4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac60ee61da87683bcb93675d96a6f932e90eeeda08c11f562c268744fa292378 = $this->env->getExtension("native_profiler");
        $__internal_ac60ee61da87683bcb93675d96a6f932e90eeeda08c11f562c268744fa292378->enter($__internal_ac60ee61da87683bcb93675d96a6f932e90eeeda08c11f562c268744fa292378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ac60ee61da87683bcb93675d96a6f932e90eeeda08c11f562c268744fa292378->leave($__internal_ac60ee61da87683bcb93675d96a6f932e90eeeda08c11f562c268744fa292378_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
