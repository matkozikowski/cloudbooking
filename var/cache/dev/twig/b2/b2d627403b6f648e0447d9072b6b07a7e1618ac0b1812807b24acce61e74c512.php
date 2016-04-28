<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_7a0c40a27429e4e7590b9bb4c157cc6878a947c1890f15c994f51a385508cd57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_b2e143508a0da160e82c9169b975a3d4e594bbd6fd6b618f2f13875b85b438c8 = $this->env->getExtension("native_profiler");
        $__internal_b2e143508a0da160e82c9169b975a3d4e594bbd6fd6b618f2f13875b85b438c8->enter($__internal_b2e143508a0da160e82c9169b975a3d4e594bbd6fd6b618f2f13875b85b438c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2e143508a0da160e82c9169b975a3d4e594bbd6fd6b618f2f13875b85b438c8->leave($__internal_b2e143508a0da160e82c9169b975a3d4e594bbd6fd6b618f2f13875b85b438c8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a94fbe670948f7688c91b1037941e57d772c725c8eec969a2f145ef784baa318 = $this->env->getExtension("native_profiler");
        $__internal_a94fbe670948f7688c91b1037941e57d772c725c8eec969a2f145ef784baa318->enter($__internal_a94fbe670948f7688c91b1037941e57d772c725c8eec969a2f145ef784baa318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_a94fbe670948f7688c91b1037941e57d772c725c8eec969a2f145ef784baa318->leave($__internal_a94fbe670948f7688c91b1037941e57d772c725c8eec969a2f145ef784baa318_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d8c803197de907b84a9a85f8a24c4e8b8122ae73024f43ef03423de0c3f316eb = $this->env->getExtension("native_profiler");
        $__internal_d8c803197de907b84a9a85f8a24c4e8b8122ae73024f43ef03423de0c3f316eb->enter($__internal_d8c803197de907b84a9a85f8a24c4e8b8122ae73024f43ef03423de0c3f316eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d8c803197de907b84a9a85f8a24c4e8b8122ae73024f43ef03423de0c3f316eb->leave($__internal_d8c803197de907b84a9a85f8a24c4e8b8122ae73024f43ef03423de0c3f316eb_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2fd2df2a5f1d37afa9294dbea11a24157b1f4fe69d0e21fcd7ce3537742bf09a = $this->env->getExtension("native_profiler");
        $__internal_2fd2df2a5f1d37afa9294dbea11a24157b1f4fe69d0e21fcd7ce3537742bf09a->enter($__internal_2fd2df2a5f1d37afa9294dbea11a24157b1f4fe69d0e21fcd7ce3537742bf09a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_2fd2df2a5f1d37afa9294dbea11a24157b1f4fe69d0e21fcd7ce3537742bf09a->leave($__internal_2fd2df2a5f1d37afa9294dbea11a24157b1f4fe69d0e21fcd7ce3537742bf09a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
