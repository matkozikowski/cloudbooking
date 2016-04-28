<?php

/* base.html.twig */
class __TwigTemplate_f6e4741d754906624da91c198d517e06ae050046f9fe7cbf0f01cf372abe2da4 extends Twig_Template
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
    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 28
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 34,  97 => 33,  91 => 28,  86 => 17,  80 => 35,  77 => 34,  75 => 33,  69 => 30,  64 => 28,  52 => 18,  50 => 17,  46 => 16,  42 => 15,  37 => 13,  23 => 1,);
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
