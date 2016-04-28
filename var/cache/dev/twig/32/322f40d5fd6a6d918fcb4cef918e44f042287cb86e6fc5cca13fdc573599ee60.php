<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_d03f29d8052c2bca273ef9688c3c8c593976742caa2f5b24bae30862a4df6022 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_cc805998a88f4b3e3508eb2a3d584165fcd61f4e6f672bac965f5bea02351d67 = $this->env->getExtension("native_profiler");
        $__internal_cc805998a88f4b3e3508eb2a3d584165fcd61f4e6f672bac965f5bea02351d67->enter($__internal_cc805998a88f4b3e3508eb2a3d584165fcd61f4e6f672bac965f5bea02351d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc805998a88f4b3e3508eb2a3d584165fcd61f4e6f672bac965f5bea02351d67->leave($__internal_cc805998a88f4b3e3508eb2a3d584165fcd61f4e6f672bac965f5bea02351d67_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_42e0808b4b3808c683baf7b01fc8f13bd43670b99a758bc5a9c51bf43f2c6124 = $this->env->getExtension("native_profiler");
        $__internal_42e0808b4b3808c683baf7b01fc8f13bd43670b99a758bc5a9c51bf43f2c6124->enter($__internal_42e0808b4b3808c683baf7b01fc8f13bd43670b99a758bc5a9c51bf43f2c6124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_42e0808b4b3808c683baf7b01fc8f13bd43670b99a758bc5a9c51bf43f2c6124->leave($__internal_42e0808b4b3808c683baf7b01fc8f13bd43670b99a758bc5a9c51bf43f2c6124_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4966c7f659a3065156628ed0c119694b904fe0359e325bea08c00434ac6c84c1 = $this->env->getExtension("native_profiler");
        $__internal_4966c7f659a3065156628ed0c119694b904fe0359e325bea08c00434ac6c84c1->enter($__internal_4966c7f659a3065156628ed0c119694b904fe0359e325bea08c00434ac6c84c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_4966c7f659a3065156628ed0c119694b904fe0359e325bea08c00434ac6c84c1->leave($__internal_4966c7f659a3065156628ed0c119694b904fe0359e325bea08c00434ac6c84c1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
