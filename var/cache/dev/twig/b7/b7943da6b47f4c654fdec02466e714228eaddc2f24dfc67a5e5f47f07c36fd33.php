<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e4566791ba1cda86ce06960b4a270d241efef47e99952d2d1226aed247e385d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c161d59f3e31a72ed461b3e17eb03a71c39730a189a92e7939bb75064032e7da = $this->env->getExtension("native_profiler");
        $__internal_c161d59f3e31a72ed461b3e17eb03a71c39730a189a92e7939bb75064032e7da->enter($__internal_c161d59f3e31a72ed461b3e17eb03a71c39730a189a92e7939bb75064032e7da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c161d59f3e31a72ed461b3e17eb03a71c39730a189a92e7939bb75064032e7da->leave($__internal_c161d59f3e31a72ed461b3e17eb03a71c39730a189a92e7939bb75064032e7da_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_649d9ff8d89930a0888bf4091e2e36a4b199b89c554f5d880c4c92aeab66c649 = $this->env->getExtension("native_profiler");
        $__internal_649d9ff8d89930a0888bf4091e2e36a4b199b89c554f5d880c4c92aeab66c649->enter($__internal_649d9ff8d89930a0888bf4091e2e36a4b199b89c554f5d880c4c92aeab66c649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_649d9ff8d89930a0888bf4091e2e36a4b199b89c554f5d880c4c92aeab66c649->leave($__internal_649d9ff8d89930a0888bf4091e2e36a4b199b89c554f5d880c4c92aeab66c649_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_55abe96dc98654469619d6d4564424020614d84b992c1a7d3168aa26e2b3a9b2 = $this->env->getExtension("native_profiler");
        $__internal_55abe96dc98654469619d6d4564424020614d84b992c1a7d3168aa26e2b3a9b2->enter($__internal_55abe96dc98654469619d6d4564424020614d84b992c1a7d3168aa26e2b3a9b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_55abe96dc98654469619d6d4564424020614d84b992c1a7d3168aa26e2b3a9b2->leave($__internal_55abe96dc98654469619d6d4564424020614d84b992c1a7d3168aa26e2b3a9b2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d1877fbe41d575701c4cf0d1020f16ff078b0e36ef5efa7846a10f471dc0dbba = $this->env->getExtension("native_profiler");
        $__internal_d1877fbe41d575701c4cf0d1020f16ff078b0e36ef5efa7846a10f471dc0dbba->enter($__internal_d1877fbe41d575701c4cf0d1020f16ff078b0e36ef5efa7846a10f471dc0dbba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d1877fbe41d575701c4cf0d1020f16ff078b0e36ef5efa7846a10f471dc0dbba->leave($__internal_d1877fbe41d575701c4cf0d1020f16ff078b0e36ef5efa7846a10f471dc0dbba_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
