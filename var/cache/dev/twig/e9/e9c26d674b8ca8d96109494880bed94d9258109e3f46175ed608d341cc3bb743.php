<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_0917ce0087ef5aa9c577e354afddc8462e60bbb2d4c554ea2dc64d4d443ba79c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a1ebd87405444fd86b733c8048b8dba004adbe717dc1c7660040f61e82a14ddd = $this->env->getExtension("native_profiler");
        $__internal_a1ebd87405444fd86b733c8048b8dba004adbe717dc1c7660040f61e82a14ddd->enter($__internal_a1ebd87405444fd86b733c8048b8dba004adbe717dc1c7660040f61e82a14ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a1ebd87405444fd86b733c8048b8dba004adbe717dc1c7660040f61e82a14ddd->leave($__internal_a1ebd87405444fd86b733c8048b8dba004adbe717dc1c7660040f61e82a14ddd_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2d17d68aa99933499a2c3b98aa74ba04f702b9f022c7f68a5803d063ed172d5d = $this->env->getExtension("native_profiler");
        $__internal_2d17d68aa99933499a2c3b98aa74ba04f702b9f022c7f68a5803d063ed172d5d->enter($__internal_2d17d68aa99933499a2c3b98aa74ba04f702b9f022c7f68a5803d063ed172d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2d17d68aa99933499a2c3b98aa74ba04f702b9f022c7f68a5803d063ed172d5d->leave($__internal_2d17d68aa99933499a2c3b98aa74ba04f702b9f022c7f68a5803d063ed172d5d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
