<?php

/* ::base.html.twig */
class __TwigTemplate_f5f391c0da4db0ed394b289aa9aba498a02db219afddedcf04a532bd78007dcc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_53780f48ec417cf309c0d02567b7b360105781257bff9344b1da3dee6ad8e12e = $this->env->getExtension("native_profiler");
        $__internal_53780f48ec417cf309c0d02567b7b360105781257bff9344b1da3dee6ad8e12e->enter($__internal_53780f48ec417cf309c0d02567b7b360105781257bff9344b1da3dee6ad8e12e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

\t\t<title>Gentallela Alela! | </title>

\t\t<!-- Bootstrap core CSS -->

\t\t<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t\t<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("fonts/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "\t\t<!--[if lt IE 9]>
\t\t<script src=\"../assets/js/ie8-responsive-file-warning.js\"></script>
\t\t<![endif]-->

\t\t<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
\t\t<!--[if lt IE 9]>
\t\t  <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
\t\t  <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
\t\t<![endif]-->
        <meta charset=\"UTF-8\" />
        <title>";
        // line 28
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 35
        echo "    </body>
</html>
";
        
        $__internal_53780f48ec417cf309c0d02567b7b360105781257bff9344b1da3dee6ad8e12e->leave($__internal_53780f48ec417cf309c0d02567b7b360105781257bff9344b1da3dee6ad8e12e_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dacd7cedb8bd1965de349e967ad43cc97f7ec53ccd939d0f80de0e6007e6ffc9 = $this->env->getExtension("native_profiler");
        $__internal_dacd7cedb8bd1965de349e967ad43cc97f7ec53ccd939d0f80de0e6007e6ffc9->enter($__internal_dacd7cedb8bd1965de349e967ad43cc97f7ec53ccd939d0f80de0e6007e6ffc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_dacd7cedb8bd1965de349e967ad43cc97f7ec53ccd939d0f80de0e6007e6ffc9->leave($__internal_dacd7cedb8bd1965de349e967ad43cc97f7ec53ccd939d0f80de0e6007e6ffc9_prof);

    }

    // line 28
    public function block_title($context, array $blocks = array())
    {
        $__internal_42a7ac0e8f01d1d3d2bcad5f7c90e409b30a01cf84eae2d8b13aef464359887b = $this->env->getExtension("native_profiler");
        $__internal_42a7ac0e8f01d1d3d2bcad5f7c90e409b30a01cf84eae2d8b13aef464359887b->enter($__internal_42a7ac0e8f01d1d3d2bcad5f7c90e409b30a01cf84eae2d8b13aef464359887b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_42a7ac0e8f01d1d3d2bcad5f7c90e409b30a01cf84eae2d8b13aef464359887b->leave($__internal_42a7ac0e8f01d1d3d2bcad5f7c90e409b30a01cf84eae2d8b13aef464359887b_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba6e27fafa267b497015ed2c076bd4551cfe17d55692324b30f1963d9b09506b = $this->env->getExtension("native_profiler");
        $__internal_ba6e27fafa267b497015ed2c076bd4551cfe17d55692324b30f1963d9b09506b->enter($__internal_ba6e27fafa267b497015ed2c076bd4551cfe17d55692324b30f1963d9b09506b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ba6e27fafa267b497015ed2c076bd4551cfe17d55692324b30f1963d9b09506b->leave($__internal_ba6e27fafa267b497015ed2c076bd4551cfe17d55692324b30f1963d9b09506b_prof);

    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b80be46618ebc4549a7925ac881f4fc138d4a6653d754f6f1b7776c2f038767d = $this->env->getExtension("native_profiler");
        $__internal_b80be46618ebc4549a7925ac881f4fc138d4a6653d754f6f1b7776c2f038767d->enter($__internal_b80be46618ebc4549a7925ac881f4fc138d4a6653d754f6f1b7776c2f038767d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b80be46618ebc4549a7925ac881f4fc138d4a6653d754f6f1b7776c2f038767d->leave($__internal_b80be46618ebc4549a7925ac881f4fc138d4a6653d754f6f1b7776c2f038767d_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 34,  115 => 33,  103 => 28,  92 => 17,  83 => 35,  80 => 34,  78 => 33,  72 => 30,  67 => 28,  55 => 18,  53 => 17,  49 => 16,  45 => 15,  40 => 13,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/* 		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">*/
/* 		<meta charset="utf-8">*/
/* 		<meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* 		<meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/* 		<title>Gentallela Alela! | </title>*/
/* */
/* 		<!-- Bootstrap core CSS -->*/
/* */
/* 		<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">*/
/* */
/* 		<link href="{{ asset('fonts/css/font-awesome.min.css') }}" rel="stylesheet">*/
/* 		<link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">*/
/* 		{% block stylesheets %}{% endblock %}*/
/* 		<!--[if lt IE 9]>*/
/* 		<script src="../assets/js/ie8-responsive-file-warning.js"></script>*/
/* 		<![endif]-->*/
/* */
/* 		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/* 		<!--[if lt IE 9]>*/
/* 		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/* 		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/* 		<![endif]-->*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/* */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
