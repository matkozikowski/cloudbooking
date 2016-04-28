<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_cb20d634067d6a617d20845c7c576dee005713c7af44e5efc76d49d10736c547 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_556fa8b4c56bafa94dcf1c88af5ae3491f7f61d7ad7f8b6fb49222f6c8a3d7f1 = $this->env->getExtension("native_profiler");
        $__internal_556fa8b4c56bafa94dcf1c88af5ae3491f7f61d7ad7f8b6fb49222f6c8a3d7f1->enter($__internal_556fa8b4c56bafa94dcf1c88af5ae3491f7f61d7ad7f8b6fb49222f6c8a3d7f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_556fa8b4c56bafa94dcf1c88af5ae3491f7f61d7ad7f8b6fb49222f6c8a3d7f1->leave($__internal_556fa8b4c56bafa94dcf1c88af5ae3491f7f61d7ad7f8b6fb49222f6c8a3d7f1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2964885e9d348fa1db6cb8e44a3d798b98bbc4ffe0910dc5028618d68b1828cb = $this->env->getExtension("native_profiler");
        $__internal_2964885e9d348fa1db6cb8e44a3d798b98bbc4ffe0910dc5028618d68b1828cb->enter($__internal_2964885e9d348fa1db6cb8e44a3d798b98bbc4ffe0910dc5028618d68b1828cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2964885e9d348fa1db6cb8e44a3d798b98bbc4ffe0910dc5028618d68b1828cb->leave($__internal_2964885e9d348fa1db6cb8e44a3d798b98bbc4ffe0910dc5028618d68b1828cb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ca526730db40e58e71c074525963a28495a4c460c94a37845413cda1eeec81bc = $this->env->getExtension("native_profiler");
        $__internal_ca526730db40e58e71c074525963a28495a4c460c94a37845413cda1eeec81bc->enter($__internal_ca526730db40e58e71c074525963a28495a4c460c94a37845413cda1eeec81bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ca526730db40e58e71c074525963a28495a4c460c94a37845413cda1eeec81bc->leave($__internal_ca526730db40e58e71c074525963a28495a4c460c94a37845413cda1eeec81bc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2e8fff61b8cd54edc0614298447289cd6c7ff2fad2c5d0ecab152b5217c4efdf = $this->env->getExtension("native_profiler");
        $__internal_2e8fff61b8cd54edc0614298447289cd6c7ff2fad2c5d0ecab152b5217c4efdf->enter($__internal_2e8fff61b8cd54edc0614298447289cd6c7ff2fad2c5d0ecab152b5217c4efdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2e8fff61b8cd54edc0614298447289cd6c7ff2fad2c5d0ecab152b5217c4efdf->leave($__internal_2e8fff61b8cd54edc0614298447289cd6c7ff2fad2c5d0ecab152b5217c4efdf_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
