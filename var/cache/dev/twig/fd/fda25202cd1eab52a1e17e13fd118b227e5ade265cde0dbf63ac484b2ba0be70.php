<?php

/* base.html.twig */
class __TwigTemplate_701bbb47f0abb71eaa25005dc9f14704098a6c2e364c47d97a732545ba8bfd6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01d08f5422a38fd02c36c3909913c46d5546b52e771c9d93bb9eccac5e54df10 = $this->env->getExtension("native_profiler");
        $__internal_01d08f5422a38fd02c36c3909913c46d5546b52e771c9d93bb9eccac5e54df10->enter($__internal_01d08f5422a38fd02c36c3909913c46d5546b52e771c9d93bb9eccac5e54df10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

\t<title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

\t<!-- Bootstrap core CSS -->
\t<!-- Bootstrap -->
\t<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<!-- Font Awesome -->
\t<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<!-- iCheck -->
\t<link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/iCheck/skins/flat/green.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<!-- bootstrap-progressbar -->
\t<link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<!-- jVectorMap -->
\t<link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/maps/jquery-jvectormap-2.0.3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

\t<!-- Custom Theme Style -->
\t<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


\t";
        // line 27
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "\t<!--[if lt IE 9]>
\t<script src=\"../assets/js/ie8-responsive-file-warning.js\"></script>
\t<![endif]-->

\t<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
\t<!--[if lt IE 9]>
\t<script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
\t<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
\t<![endif]-->
\t<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>

<body class=\"nav-md\">
\t<div class=\"container body\">

\t\t<div class=\"main_container\">
\t\t\t<!-- page menu -->
\t\t\t<div class=\"col-md-3 left_col\">
\t\t\t\t";
        // line 46
        echo twig_include($this->env, $context, "menu.html.twig");
        echo "
\t\t\t</div>
\t\t\t<!-- /page menu -->

\t\t\t<!-- page content -->
\t\t\t<div class=\"right_col\" role=\"main\">
\t\t\t\t";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 53
        echo "\t\t\t</div>
\t\t\t<!-- /page content -->

\t\t</div>

\t</div>




\t<!-- jQuery -->
\t<script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t<!-- Bootstrap -->
\t<script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<!-- FastClick -->
\t<script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
\t<!-- NProgress -->
\t<script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/nprogress/nprogress.js"), "html", null, true);
        echo "\"></script>
\t<!-- Chart.js -->
\t<script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/Chart.js/dist/Chart.min.js"), "html", null, true);
        echo "\"></script>
\t<!-- gauge.js -->
\t<script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bernii/gauge.js/dist/gauge.min.js"), "html", null, true);
        echo "\"></script>
\t<!-- bootstrap-progressbar -->
\t<script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
\t<!-- iCheck -->
\t<script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
\t<!-- Skycons -->
\t<script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/skycons/skycons.js"), "html", null, true);
        echo "\"></script>
\t<!-- Flot -->
\t<script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/Flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/Flot/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/Flot/jquery.flot.time.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/Flot/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/Flot/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
\t<!-- Flot plugins -->
\t<script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/flot/jquery.flot.orderBars.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/flot/date.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/flot/jquery.flot.spline.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/flot/curvedLines.js"), "html", null, true);
        echo "\"></script>
\t<!-- jVectorMap -->
\t<script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/maps/jquery-jvectormap-2.0.3.min.js"), "html", null, true);
        echo "\"></script>
\t<!-- bootstrap-daterangepicker -->
\t<script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/datepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>

\t<!-- Custom Theme Scripts -->
\t<script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>

\t<!-- Flot -->
\t<script>
\t\$(document).ready(function() {
\t\tvar data1 = [
\t\t\t[gd(2012, 1, 1), 17],
\t\t\t[gd(2012, 1, 2), 74],
\t\t\t[gd(2012, 1, 3), 6],
\t\t\t[gd(2012, 1, 4), 39],
\t\t\t[gd(2012, 1, 5), 20],
\t\t\t[gd(2012, 1, 6), 85],
\t\t\t[gd(2012, 1, 7), 7]
\t\t];

\t\tvar data2 = [
\t\t\t[gd(2012, 1, 1), 82],
\t\t\t[gd(2012, 1, 2), 23],
\t\t\t[gd(2012, 1, 3), 66],
\t\t\t[gd(2012, 1, 4), 9],
\t\t\t[gd(2012, 1, 5), 119],
\t\t\t[gd(2012, 1, 6), 6],
\t\t\t[gd(2012, 1, 7), 9]
\t\t];
\t\t\$(\"#canvas_dahs\").length && \$.plot(\$(\"#canvas_dahs\"), [
\t\t\tdata1, data2
\t\t], {
\t\t\tseries: {
\t\t\t\tlines: {
\t\t\t\t\tshow: false,
\t\t\t\t\tfill: true
\t\t\t\t},
\t\t\t\tsplines: {
\t\t\t\t\tshow: true,
\t\t\t\t\ttension: 0.4,
\t\t\t\t\tlineWidth: 1,
\t\t\t\t\tfill: 0.4
\t\t\t\t},
\t\t\t\tpoints: {
\t\t\t\t\tradius: 0,
\t\t\t\t\tshow: true
\t\t\t\t},
\t\t\t\tshadowSize: 2
\t\t\t},
\t\t\tgrid: {
\t\t\t\tverticalLines: true,
\t\t\t\thoverable: true,
\t\t\t\tclickable: true,
\t\t\t\ttickColor: \"#d5d5d5\",
\t\t\t\tborderWidth: 1,
\t\t\t\tcolor: '#fff'
\t\t\t},
\t\t\tcolors: [\"rgba(38, 185, 154, 0.38)\", \"rgba(3, 88, 106, 0.38)\"],
\t\t\txaxis: {
\t\t\t\ttickColor: \"rgba(51, 51, 51, 0.06)\",
\t\t\t\tmode: \"time\",
\t\t\t\ttickSize: [1, \"day\"],
\t\t\t\t//tickLength: 10,
\t\t\t\taxisLabel: \"Date\",
\t\t\t\taxisLabelUseCanvas: true,
\t\t\t\taxisLabelFontSizePixels: 12,
\t\t\t\taxisLabelFontFamily: 'Verdana, Arial',
\t\t\t\taxisLabelPadding: 10
\t\t\t},
\t\t\tyaxis: {
\t\t\t\tticks: 8,
\t\t\t\ttickColor: \"rgba(51, 51, 51, 0.06)\",
\t\t\t},
\t\t\ttooltip: false
\t\t});

\t\tfunction gd(year, month, day) {
\t\t\treturn new Date(year, month - 1, day).getTime();
\t\t}
\t});
\t</script>
\t<!-- /Flot -->

\t<!-- jVectorMap -->
\t<script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/maps/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/maps/jquery-jvectormap-us-aea-en.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/maps/gdp-data.js"), "html", null, true);
        echo "\"></script>
\t<script>
\t\$(document).ready(function(){
\t\t\$('#world-map-gdp').vectorMap({
\t\t\tmap: 'world_mill_en',
\t\t\tbackgroundColor: 'transparent',
\t\t\tzoomOnScroll: false,
\t\t\tseries: {
\t\t\t\tregions: [{
\t\t\t\t\tvalues: gdpData,
\t\t\t\t\tscale: ['#E6F2F0', '#149B7E'],
\t\t\t\t\tnormalizeFunction: 'polynomial'
\t\t\t\t}]
\t\t\t},
\t\t\tonRegionTipShow: function(e, el, code) {
\t\t\t\tel.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
\t\t\t}
\t\t});
\t});
\t</script>
\t<!-- /jVectorMap -->

\t<!-- Skycons -->
\t<script>
\t\$(document).ready(function() {
\t\tvar icons = new Skycons({
\t\t\t\"color\": \"#73879C\"
\t\t}),
\t\tlist = [
\t\t\t\"clear-day\", \"clear-night\", \"partly-cloudy-day\",
\t\t\t\"partly-cloudy-night\", \"cloudy\", \"rain\", \"sleet\", \"snow\", \"wind\",
\t\t\t\"fog\"
\t\t],
\t\ti;

\t\tfor (i = list.length; i--;)
\t\ticons.set(list[i], list[i]);

\t\ticons.play();
\t});
\t</script>
\t<!-- /Skycons -->

\t<!-- Doughnut Chart -->
\t<script>
\t\$(document).ready(function(){
\t\tvar options = {
\t\t\tlegend: false,
\t\t\tresponsive: false
\t\t};

\t\tnew Chart(document.getElementById(\"canvas1\"), {
\t\t\ttype: 'doughnut',
\t\t\ttooltipFillColor: \"rgba(51, 51, 51, 0.55)\",
\t\t\tdata: {
\t\t\t\tlabels: [
\t\t\t\t\t\"Symbian\",
\t\t\t\t\t\"Blackberry\",
\t\t\t\t\t\"Other\",
\t\t\t\t\t\"Android\",
\t\t\t\t\t\"IOS\"
\t\t\t\t],
\t\t\t\tdatasets: [{
\t\t\t\t\tdata: [15, 20, 30, 10, 30],
\t\t\t\t\tbackgroundColor: [
\t\t\t\t\t\t\"#BDC3C7\",
\t\t\t\t\t\t\"#9B59B6\",
\t\t\t\t\t\t\"#E74C3C\",
\t\t\t\t\t\t\"#26B99A\",
\t\t\t\t\t\t\"#3498DB\"
\t\t\t\t\t],
\t\t\t\t\thoverBackgroundColor: [
\t\t\t\t\t\t\"#CFD4D8\",
\t\t\t\t\t\t\"#B370CF\",
\t\t\t\t\t\t\"#E95E4F\",
\t\t\t\t\t\t\"#36CAAB\",
\t\t\t\t\t\t\"#49A9EA\"
\t\t\t\t\t]
\t\t\t\t}]
\t\t\t},
\t\t\toptions: options
\t\t});
\t});
\t</script>
\t<!-- /Doughnut Chart -->

\t<!-- bootstrap-daterangepicker -->
\t<script>
\t\$(document).ready(function() {

\t\tvar cb = function(start, end, label) {
\t\t\tconsole.log(start.toISOString(), end.toISOString(), label);
\t\t\t\$('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
\t\t};

\t\tvar optionSet1 = {
\t\t\tstartDate: moment().subtract(29, 'days'),
\t\t\tendDate: moment(),
\t\t\tminDate: '01/01/2012',
\t\t\tmaxDate: '12/31/2015',
\t\t\tdateLimit: {
\t\t\t\tdays: 60
\t\t\t},
\t\t\tshowDropdowns: true,
\t\t\tshowWeekNumbers: true,
\t\t\ttimePicker: false,
\t\t\ttimePickerIncrement: 1,
\t\t\ttimePicker12Hour: true,
\t\t\tranges: {
\t\t\t\t'Today': [moment(), moment()],
\t\t\t\t'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
\t\t\t\t'Last 7 Days': [moment().subtract(6, 'days'), moment()],
\t\t\t\t'Last 30 Days': [moment().subtract(29, 'days'), moment()],
\t\t\t\t'This Month': [moment().startOf('month'), moment().endOf('month')],
\t\t\t\t'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
\t\t\t},
\t\t\topens: 'left',
\t\t\tbuttonClasses: ['btn btn-default'],
\t\t\tapplyClass: 'btn-small btn-primary',
\t\t\tcancelClass: 'btn-small',
\t\t\tformat: 'MM/DD/YYYY',
\t\t\tseparator: ' to ',
\t\t\tlocale: {
\t\t\t\tapplyLabel: 'Submit',
\t\t\t\tcancelLabel: 'Clear',
\t\t\t\tfromLabel: 'From',
\t\t\t\ttoLabel: 'To',
\t\t\t\tcustomRangeLabel: 'Custom',
\t\t\t\tdaysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
\t\t\t\tmonthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
\t\t\t\tfirstDay: 1
\t\t\t}
\t\t};
\t\t\$('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
\t\t\$('#reportrange').daterangepicker(optionSet1, cb);
\t\t\$('#reportrange').on('show.daterangepicker', function() {
\t\t\tconsole.log(\"show event fired\");
\t\t});
\t\t\$('#reportrange').on('hide.daterangepicker', function() {
\t\t\tconsole.log(\"hide event fired\");
\t\t});
\t\t\$('#reportrange').on('apply.daterangepicker', function(ev, picker) {
\t\t\tconsole.log(\"apply event fired, start/end dates are \" + picker.startDate.format('MMMM D, YYYY') + \" to \" + picker.endDate.format('MMMM D, YYYY'));
\t\t});
\t\t\$('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
\t\t\tconsole.log(\"cancel event fired\");
\t\t});
\t\t\$('#options1').click(function() {
\t\t\t\$('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
\t\t});
\t\t\$('#options2').click(function() {
\t\t\t\$('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
\t\t});
\t\t\$('#destroy').click(function() {
\t\t\t\$('#reportrange').data('daterangepicker').remove();
\t\t});
\t});
\t</script>
\t<!-- /bootstrap-daterangepicker -->

\t<!-- gauge.js -->
\t<script>
\tvar opts = {
\t\tlines: 12,
\t\tangle: 0,
\t\tlineWidth: 0.4,
\t\tpointer: {
\t\t\tlength: 0.75,
\t\t\tstrokeWidth: 0.042,
\t\t\tcolor: '#1D212A'
\t\t},
\t\tlimitMax: 'false',
\t\tcolorStart: '#1ABC9C',
\t\tcolorStop: '#1ABC9C',
\t\tstrokeColor: '#F0F3F3',
\t\tgenerateGradient: true
\t};
\tvar target = document.getElementById('foo'),
\tgauge = new Gauge(target).setOptions(opts);

\tgauge.maxValue = 6000;
\tgauge.animationSpeed = 32;
\tgauge.set(3200);
\tgauge.setTextField(document.getElementById(\"gauge-text\"));
\t</script>
\t<!-- /gauge.js -->

\t";
        // line 367
        $this->displayBlock('javascripts', $context, $blocks);
        // line 368
        echo "
</body>
</html>
";
        
        $__internal_01d08f5422a38fd02c36c3909913c46d5546b52e771c9d93bb9eccac5e54df10->leave($__internal_01d08f5422a38fd02c36c3909913c46d5546b52e771c9d93bb9eccac5e54df10_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_bca352151f9c8f6936349f95a50c0013bcc561e7be1da954b120c4dc0ab0e2f8 = $this->env->getExtension("native_profiler");
        $__internal_bca352151f9c8f6936349f95a50c0013bcc561e7be1da954b120c4dc0ab0e2f8->enter($__internal_bca352151f9c8f6936349f95a50c0013bcc561e7be1da954b120c4dc0ab0e2f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CloudBooking | ";
        
        $__internal_bca352151f9c8f6936349f95a50c0013bcc561e7be1da954b120c4dc0ab0e2f8->leave($__internal_bca352151f9c8f6936349f95a50c0013bcc561e7be1da954b120c4dc0ab0e2f8_prof);

    }

    // line 27
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_74613b0cc834d4ac4ac3fb1cf6d9e4f100d2060230bf400f0aedcd744910ede9 = $this->env->getExtension("native_profiler");
        $__internal_74613b0cc834d4ac4ac3fb1cf6d9e4f100d2060230bf400f0aedcd744910ede9->enter($__internal_74613b0cc834d4ac4ac3fb1cf6d9e4f100d2060230bf400f0aedcd744910ede9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_74613b0cc834d4ac4ac3fb1cf6d9e4f100d2060230bf400f0aedcd744910ede9->leave($__internal_74613b0cc834d4ac4ac3fb1cf6d9e4f100d2060230bf400f0aedcd744910ede9_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_165953fe2ba069c521c83b82e0632679746d9ccaca9806b5f78ba171a3beb503 = $this->env->getExtension("native_profiler");
        $__internal_165953fe2ba069c521c83b82e0632679746d9ccaca9806b5f78ba171a3beb503->enter($__internal_165953fe2ba069c521c83b82e0632679746d9ccaca9806b5f78ba171a3beb503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_165953fe2ba069c521c83b82e0632679746d9ccaca9806b5f78ba171a3beb503->leave($__internal_165953fe2ba069c521c83b82e0632679746d9ccaca9806b5f78ba171a3beb503_prof);

    }

    // line 367
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e4b918668b124328ed5adab5873c1bb7f03e96842475b94be04cd7a8c9b68cd1 = $this->env->getExtension("native_profiler");
        $__internal_e4b918668b124328ed5adab5873c1bb7f03e96842475b94be04cd7a8c9b68cd1->enter($__internal_e4b918668b124328ed5adab5873c1bb7f03e96842475b94be04cd7a8c9b68cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e4b918668b124328ed5adab5873c1bb7f03e96842475b94be04cd7a8c9b68cd1->leave($__internal_e4b918668b124328ed5adab5873c1bb7f03e96842475b94be04cd7a8c9b68cd1_prof);

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
        return array (  548 => 367,  537 => 52,  526 => 27,  514 => 9,  504 => 368,  502 => 367,  312 => 180,  308 => 179,  304 => 178,  222 => 99,  216 => 96,  212 => 95,  207 => 93,  202 => 91,  198 => 90,  194 => 89,  190 => 88,  185 => 86,  181 => 85,  177 => 84,  173 => 83,  169 => 82,  164 => 80,  159 => 78,  154 => 76,  149 => 74,  144 => 72,  139 => 70,  134 => 68,  129 => 66,  124 => 64,  111 => 53,  109 => 52,  100 => 46,  88 => 37,  77 => 28,  75 => 27,  69 => 24,  63 => 21,  58 => 19,  53 => 17,  48 => 15,  43 => 13,  36 => 9,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/* 	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">*/
/* 	<meta charset="utf-8">*/
/* 	<meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* 	<meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/* 	<title>{% block title %}CloudBooking | {% endblock %}</title>*/
/* */
/* 	<!-- Bootstrap core CSS -->*/
/* 	<!-- Bootstrap -->*/
/* 	<link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">*/
/* 	<!-- Font Awesome -->*/
/* 	<link href="{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">*/
/* 	<!-- iCheck -->*/
/* 	<link href="{{ asset('vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">*/
/* 	<!-- bootstrap-progressbar -->*/
/* 	<link href="{{ asset('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">*/
/* 	<!-- jVectorMap -->*/
/* 	<link href="{{ asset('css/maps/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet"/>*/
/* */
/* 	<!-- Custom Theme Style -->*/
/* 	<link href="{{ asset('css/custom.css') }}" rel="stylesheet">*/
/* */
/* */
/* 	{% block stylesheets %}{% endblock %}*/
/* 	<!--[if lt IE 9]>*/
/* 	<script src="../assets/js/ie8-responsive-file-warning.js"></script>*/
/* 	<![endif]-->*/
/* */
/* 	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/* 	<!--[if lt IE 9]>*/
/* 	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/* 	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/* 	<![endif]-->*/
/* 	<link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* </head>*/
/* */
/* <body class="nav-md">*/
/* 	<div class="container body">*/
/* */
/* 		<div class="main_container">*/
/* 			<!-- page menu -->*/
/* 			<div class="col-md-3 left_col">*/
/* 				{{ include('menu.html.twig') }}*/
/* 			</div>*/
/* 			<!-- /page menu -->*/
/* */
/* 			<!-- page content -->*/
/* 			<div class="right_col" role="main">*/
/* 				{% block body %}{% endblock %}*/
/* 			</div>*/
/* 			<!-- /page content -->*/
/* */
/* 		</div>*/
/* */
/* 	</div>*/
/* */
/* */
/* */
/* */
/* 	<!-- jQuery -->*/
/* 	<script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>*/
/* 	<!-- Bootstrap -->*/
/* 	<script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>*/
/* 	<!-- FastClick -->*/
/* 	<script src="{{ asset('vendors/fastclick/lib/fastclick.js') }}"></script>*/
/* 	<!-- NProgress -->*/
/* 	<script src="{{ asset('vendors/nprogress/nprogress.js') }}"></script>*/
/* 	<!-- Chart.js -->*/
/* 	<script src="{{ asset('vendors/Chart.js/dist/Chart.min.js') }}"></script>*/
/* 	<!-- gauge.js -->*/
/* 	<script src="{{ asset('vendors/bernii/gauge.js/dist/gauge.min.js') }}"></script>*/
/* 	<!-- bootstrap-progressbar -->*/
/* 	<script src="{{ asset('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>*/
/* 	<!-- iCheck -->*/
/* 	<script src="{{ asset('vendors/iCheck/icheck.min.js') }}"></script>*/
/* 	<!-- Skycons -->*/
/* 	<script src="{{ asset('vendors/skycons/skycons.js') }}"></script>*/
/* 	<!-- Flot -->*/
/* 	<script src="{{ asset('vendors/Flot/jquery.flot.js') }}"></script>*/
/* 	<script src="{{ asset('vendors/Flot/jquery.flot.pie.js') }}"></script>*/
/* 	<script src="{{ asset('vendors/Flot/jquery.flot.time.js') }}"></script>*/
/* 	<script src="{{ asset('vendors/Flot/jquery.flot.stack.js') }}"></script>*/
/* 	<script src="{{ asset('vendors/Flot/jquery.flot.resize.js') }}"></script>*/
/* 	<!-- Flot plugins -->*/
/* 	<script src="{{ asset('js/flot/jquery.flot.orderBars.js') }}"></script>*/
/* 	<script src="{{ asset('js/flot/date.js') }}"></script>*/
/* 	<script src="{{ asset('js/flot/jquery.flot.spline.js') }}"></script>*/
/* 	<script src="{{ asset('js/flot/curvedLines.js') }}"></script>*/
/* 	<!-- jVectorMap -->*/
/* 	<script src="{{ asset('js/maps/jquery-jvectormap-2.0.3.min.js') }}"></script>*/
/* 	<!-- bootstrap-daterangepicker -->*/
/* 	<script src="{{ asset('js/moment/moment.min.js') }}"></script>*/
/* 	<script src="{{ asset('js/datepicker/daterangepicker.js') }}"></script>*/
/* */
/* 	<!-- Custom Theme Scripts -->*/
/* 	<script src="{{ asset('js/custom.js') }}"></script>*/
/* */
/* 	<!-- Flot -->*/
/* 	<script>*/
/* 	$(document).ready(function() {*/
/* 		var data1 = [*/
/* 			[gd(2012, 1, 1), 17],*/
/* 			[gd(2012, 1, 2), 74],*/
/* 			[gd(2012, 1, 3), 6],*/
/* 			[gd(2012, 1, 4), 39],*/
/* 			[gd(2012, 1, 5), 20],*/
/* 			[gd(2012, 1, 6), 85],*/
/* 			[gd(2012, 1, 7), 7]*/
/* 		];*/
/* */
/* 		var data2 = [*/
/* 			[gd(2012, 1, 1), 82],*/
/* 			[gd(2012, 1, 2), 23],*/
/* 			[gd(2012, 1, 3), 66],*/
/* 			[gd(2012, 1, 4), 9],*/
/* 			[gd(2012, 1, 5), 119],*/
/* 			[gd(2012, 1, 6), 6],*/
/* 			[gd(2012, 1, 7), 9]*/
/* 		];*/
/* 		$("#canvas_dahs").length && $.plot($("#canvas_dahs"), [*/
/* 			data1, data2*/
/* 		], {*/
/* 			series: {*/
/* 				lines: {*/
/* 					show: false,*/
/* 					fill: true*/
/* 				},*/
/* 				splines: {*/
/* 					show: true,*/
/* 					tension: 0.4,*/
/* 					lineWidth: 1,*/
/* 					fill: 0.4*/
/* 				},*/
/* 				points: {*/
/* 					radius: 0,*/
/* 					show: true*/
/* 				},*/
/* 				shadowSize: 2*/
/* 			},*/
/* 			grid: {*/
/* 				verticalLines: true,*/
/* 				hoverable: true,*/
/* 				clickable: true,*/
/* 				tickColor: "#d5d5d5",*/
/* 				borderWidth: 1,*/
/* 				color: '#fff'*/
/* 			},*/
/* 			colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],*/
/* 			xaxis: {*/
/* 				tickColor: "rgba(51, 51, 51, 0.06)",*/
/* 				mode: "time",*/
/* 				tickSize: [1, "day"],*/
/* 				//tickLength: 10,*/
/* 				axisLabel: "Date",*/
/* 				axisLabelUseCanvas: true,*/
/* 				axisLabelFontSizePixels: 12,*/
/* 				axisLabelFontFamily: 'Verdana, Arial',*/
/* 				axisLabelPadding: 10*/
/* 			},*/
/* 			yaxis: {*/
/* 				ticks: 8,*/
/* 				tickColor: "rgba(51, 51, 51, 0.06)",*/
/* 			},*/
/* 			tooltip: false*/
/* 		});*/
/* */
/* 		function gd(year, month, day) {*/
/* 			return new Date(year, month - 1, day).getTime();*/
/* 		}*/
/* 	});*/
/* 	</script>*/
/* 	<!-- /Flot -->*/
/* */
/* 	<!-- jVectorMap -->*/
/* 	<script src="{{ asset('js/maps/jquery-jvectormap-world-mill-en.js') }}"></script>*/
/* 	<script src="{{ asset('js/maps/jquery-jvectormap-us-aea-en.js') }}"></script>*/
/* 	<script src="{{ asset('js/maps/gdp-data.js') }}"></script>*/
/* 	<script>*/
/* 	$(document).ready(function(){*/
/* 		$('#world-map-gdp').vectorMap({*/
/* 			map: 'world_mill_en',*/
/* 			backgroundColor: 'transparent',*/
/* 			zoomOnScroll: false,*/
/* 			series: {*/
/* 				regions: [{*/
/* 					values: gdpData,*/
/* 					scale: ['#E6F2F0', '#149B7E'],*/
/* 					normalizeFunction: 'polynomial'*/
/* 				}]*/
/* 			},*/
/* 			onRegionTipShow: function(e, el, code) {*/
/* 				el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');*/
/* 			}*/
/* 		});*/
/* 	});*/
/* 	</script>*/
/* 	<!-- /jVectorMap -->*/
/* */
/* 	<!-- Skycons -->*/
/* 	<script>*/
/* 	$(document).ready(function() {*/
/* 		var icons = new Skycons({*/
/* 			"color": "#73879C"*/
/* 		}),*/
/* 		list = [*/
/* 			"clear-day", "clear-night", "partly-cloudy-day",*/
/* 			"partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",*/
/* 			"fog"*/
/* 		],*/
/* 		i;*/
/* */
/* 		for (i = list.length; i--;)*/
/* 		icons.set(list[i], list[i]);*/
/* */
/* 		icons.play();*/
/* 	});*/
/* 	</script>*/
/* 	<!-- /Skycons -->*/
/* */
/* 	<!-- Doughnut Chart -->*/
/* 	<script>*/
/* 	$(document).ready(function(){*/
/* 		var options = {*/
/* 			legend: false,*/
/* 			responsive: false*/
/* 		};*/
/* */
/* 		new Chart(document.getElementById("canvas1"), {*/
/* 			type: 'doughnut',*/
/* 			tooltipFillColor: "rgba(51, 51, 51, 0.55)",*/
/* 			data: {*/
/* 				labels: [*/
/* 					"Symbian",*/
/* 					"Blackberry",*/
/* 					"Other",*/
/* 					"Android",*/
/* 					"IOS"*/
/* 				],*/
/* 				datasets: [{*/
/* 					data: [15, 20, 30, 10, 30],*/
/* 					backgroundColor: [*/
/* 						"#BDC3C7",*/
/* 						"#9B59B6",*/
/* 						"#E74C3C",*/
/* 						"#26B99A",*/
/* 						"#3498DB"*/
/* 					],*/
/* 					hoverBackgroundColor: [*/
/* 						"#CFD4D8",*/
/* 						"#B370CF",*/
/* 						"#E95E4F",*/
/* 						"#36CAAB",*/
/* 						"#49A9EA"*/
/* 					]*/
/* 				}]*/
/* 			},*/
/* 			options: options*/
/* 		});*/
/* 	});*/
/* 	</script>*/
/* 	<!-- /Doughnut Chart -->*/
/* */
/* 	<!-- bootstrap-daterangepicker -->*/
/* 	<script>*/
/* 	$(document).ready(function() {*/
/* */
/* 		var cb = function(start, end, label) {*/
/* 			console.log(start.toISOString(), end.toISOString(), label);*/
/* 			$('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));*/
/* 		};*/
/* */
/* 		var optionSet1 = {*/
/* 			startDate: moment().subtract(29, 'days'),*/
/* 			endDate: moment(),*/
/* 			minDate: '01/01/2012',*/
/* 			maxDate: '12/31/2015',*/
/* 			dateLimit: {*/
/* 				days: 60*/
/* 			},*/
/* 			showDropdowns: true,*/
/* 			showWeekNumbers: true,*/
/* 			timePicker: false,*/
/* 			timePickerIncrement: 1,*/
/* 			timePicker12Hour: true,*/
/* 			ranges: {*/
/* 				'Today': [moment(), moment()],*/
/* 				'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],*/
/* 				'Last 7 Days': [moment().subtract(6, 'days'), moment()],*/
/* 				'Last 30 Days': [moment().subtract(29, 'days'), moment()],*/
/* 				'This Month': [moment().startOf('month'), moment().endOf('month')],*/
/* 				'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]*/
/* 			},*/
/* 			opens: 'left',*/
/* 			buttonClasses: ['btn btn-default'],*/
/* 			applyClass: 'btn-small btn-primary',*/
/* 			cancelClass: 'btn-small',*/
/* 			format: 'MM/DD/YYYY',*/
/* 			separator: ' to ',*/
/* 			locale: {*/
/* 				applyLabel: 'Submit',*/
/* 				cancelLabel: 'Clear',*/
/* 				fromLabel: 'From',*/
/* 				toLabel: 'To',*/
/* 				customRangeLabel: 'Custom',*/
/* 				daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],*/
/* 				monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],*/
/* 				firstDay: 1*/
/* 			}*/
/* 		};*/
/* 		$('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));*/
/* 		$('#reportrange').daterangepicker(optionSet1, cb);*/
/* 		$('#reportrange').on('show.daterangepicker', function() {*/
/* 			console.log("show event fired");*/
/* 		});*/
/* 		$('#reportrange').on('hide.daterangepicker', function() {*/
/* 			console.log("hide event fired");*/
/* 		});*/
/* 		$('#reportrange').on('apply.daterangepicker', function(ev, picker) {*/
/* 			console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));*/
/* 		});*/
/* 		$('#reportrange').on('cancel.daterangepicker', function(ev, picker) {*/
/* 			console.log("cancel event fired");*/
/* 		});*/
/* 		$('#options1').click(function() {*/
/* 			$('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);*/
/* 		});*/
/* 		$('#options2').click(function() {*/
/* 			$('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);*/
/* 		});*/
/* 		$('#destroy').click(function() {*/
/* 			$('#reportrange').data('daterangepicker').remove();*/
/* 		});*/
/* 	});*/
/* 	</script>*/
/* 	<!-- /bootstrap-daterangepicker -->*/
/* */
/* 	<!-- gauge.js -->*/
/* 	<script>*/
/* 	var opts = {*/
/* 		lines: 12,*/
/* 		angle: 0,*/
/* 		lineWidth: 0.4,*/
/* 		pointer: {*/
/* 			length: 0.75,*/
/* 			strokeWidth: 0.042,*/
/* 			color: '#1D212A'*/
/* 		},*/
/* 		limitMax: 'false',*/
/* 		colorStart: '#1ABC9C',*/
/* 		colorStop: '#1ABC9C',*/
/* 		strokeColor: '#F0F3F3',*/
/* 		generateGradient: true*/
/* 	};*/
/* 	var target = document.getElementById('foo'),*/
/* 	gauge = new Gauge(target).setOptions(opts);*/
/* */
/* 	gauge.maxValue = 6000;*/
/* 	gauge.animationSpeed = 32;*/
/* 	gauge.set(3200);*/
/* 	gauge.setTextField(document.getElementById("gauge-text"));*/
/* 	</script>*/
/* 	<!-- /gauge.js -->*/
/* */
/* 	{% block javascripts %}{% endblock %}*/
/* */
/* </body>*/
/* </html>*/
/* */
