<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_be0e177df2d5fb0f99d6c3c69829a455a9e0fcd6e8a0c37c9bd95282f4c1b30d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_b85dbe2b3b2552f39cead1efb07dab66c58567bb76e2beb32b5cee075b0d83db = $this->env->getExtension("native_profiler");
        $__internal_b85dbe2b3b2552f39cead1efb07dab66c58567bb76e2beb32b5cee075b0d83db->enter($__internal_b85dbe2b3b2552f39cead1efb07dab66c58567bb76e2beb32b5cee075b0d83db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b85dbe2b3b2552f39cead1efb07dab66c58567bb76e2beb32b5cee075b0d83db->leave($__internal_b85dbe2b3b2552f39cead1efb07dab66c58567bb76e2beb32b5cee075b0d83db_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bc731f4bc611f42eadafbc2028d867d7d263285f22713ac0faa7c8974feeb23a = $this->env->getExtension("native_profiler");
        $__internal_bc731f4bc611f42eadafbc2028d867d7d263285f22713ac0faa7c8974feeb23a->enter($__internal_bc731f4bc611f42eadafbc2028d867d7d263285f22713ac0faa7c8974feeb23a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_bc731f4bc611f42eadafbc2028d867d7d263285f22713ac0faa7c8974feeb23a->leave($__internal_bc731f4bc611f42eadafbc2028d867d7d263285f22713ac0faa7c8974feeb23a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_39ef11238a7462282c7bb020951ab4d04e382a6349231041d40b571943906f98 = $this->env->getExtension("native_profiler");
        $__internal_39ef11238a7462282c7bb020951ab4d04e382a6349231041d40b571943906f98->enter($__internal_39ef11238a7462282c7bb020951ab4d04e382a6349231041d40b571943906f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_39ef11238a7462282c7bb020951ab4d04e382a6349231041d40b571943906f98->leave($__internal_39ef11238a7462282c7bb020951ab4d04e382a6349231041d40b571943906f98_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
