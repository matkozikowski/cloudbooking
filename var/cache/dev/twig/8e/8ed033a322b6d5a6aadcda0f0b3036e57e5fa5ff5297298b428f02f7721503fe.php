<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_3c0e20abb821a1d0d51eff9ea73d59b479d26a794c8adede17d26731a2cbd3e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_faf2e6a13e223a0f65ab349cc7f91924e7a640179944a5cfa264cbfc0e8a7c4a = $this->env->getExtension("native_profiler");
        $__internal_faf2e6a13e223a0f65ab349cc7f91924e7a640179944a5cfa264cbfc0e8a7c4a->enter($__internal_faf2e6a13e223a0f65ab349cc7f91924e7a640179944a5cfa264cbfc0e8a7c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_faf2e6a13e223a0f65ab349cc7f91924e7a640179944a5cfa264cbfc0e8a7c4a->leave($__internal_faf2e6a13e223a0f65ab349cc7f91924e7a640179944a5cfa264cbfc0e8a7c4a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_edcbb2226ceb9a79081a75c6059607145d12c3c6599fe50441ef7e02f81d37fa = $this->env->getExtension("native_profiler");
        $__internal_edcbb2226ceb9a79081a75c6059607145d12c3c6599fe50441ef7e02f81d37fa->enter($__internal_edcbb2226ceb9a79081a75c6059607145d12c3c6599fe50441ef7e02f81d37fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_edcbb2226ceb9a79081a75c6059607145d12c3c6599fe50441ef7e02f81d37fa->leave($__internal_edcbb2226ceb9a79081a75c6059607145d12c3c6599fe50441ef7e02f81d37fa_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb3b5f62245a2d1c9710fd93d9d8747a1d77c3f9d19b482f980cacbb35ce5d8c = $this->env->getExtension("native_profiler");
        $__internal_bb3b5f62245a2d1c9710fd93d9d8747a1d77c3f9d19b482f980cacbb35ce5d8c->enter($__internal_bb3b5f62245a2d1c9710fd93d9d8747a1d77c3f9d19b482f980cacbb35ce5d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bb3b5f62245a2d1c9710fd93d9d8747a1d77c3f9d19b482f980cacbb35ce5d8c->leave($__internal_bb3b5f62245a2d1c9710fd93d9d8747a1d77c3f9d19b482f980cacbb35ce5d8c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e8395a68db4033fa2fd03ab18e89a4e2e9eeaa9656fc69a562758e6f3d88cc5 = $this->env->getExtension("native_profiler");
        $__internal_1e8395a68db4033fa2fd03ab18e89a4e2e9eeaa9656fc69a562758e6f3d88cc5->enter($__internal_1e8395a68db4033fa2fd03ab18e89a4e2e9eeaa9656fc69a562758e6f3d88cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_1e8395a68db4033fa2fd03ab18e89a4e2e9eeaa9656fc69a562758e6f3d88cc5->leave($__internal_1e8395a68db4033fa2fd03ab18e89a4e2e9eeaa9656fc69a562758e6f3d88cc5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
