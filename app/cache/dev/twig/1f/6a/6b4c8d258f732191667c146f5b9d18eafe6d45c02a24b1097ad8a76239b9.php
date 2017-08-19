<?php

/* IqaCrowdSourcingBundle:Iqa:baseView.html.twig */
class __TwigTemplate_1f6a6b4c8d258f732191667c146f5b9d18eafe6d45c02a24b1097ad8a76239b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'jsfunctions' => array($this, 'block_jsfunctions'),
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
        <meta charset=\"UTF-8\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
        
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    \t
\t\t";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/iqacrowdsourcing/js/jquery-1.11.2.js"), "html", null, true);
        echo "\"></script>
 \t\t<script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/iqacrowdsourcing/js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
 \t\t<script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/iqacrowdsourcing/js/jquery-ui-slider-pips.js"), "html", null, true);
        echo "\"></script>
\t\t<link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css\">
\t\t
\t\t
\t\t<script type=\"text/javascript\">
\t\tvar start_time = new Date();
\t\t
\t\tfunction stopTime(){
\t\t\tvar stop_time = new Date();
\t\t\tif (stop_time < start_time) {
\t\t\t\tstop_time.setDate(stop_time.getDate() + 1);
\t\t\t}
\t\t\tvar diff = stop_time - start_time;\t\t\t
\t\t\tdocument.getElementById(\"time_tracker\").value = diff;
\t\t}

\t\t
  \t\t</script> 
\t\t
\t\t";
        // line 33
        $this->displayBlock('jsfunctions', $context, $blocks);
        // line 34
        echo "\t\t
 \t
\t\t<link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/iqacrowdsourcing/css/my.css"), "html", null, true);
        echo "\">
\t
\t\t<script type=\"text/javascript\">
\t\t\t\t
\t\t// kill browser back function
\t\thistory.go(1);\t

\t\t// kill zoom features
\t\t\$(document).ready(function(){
\t\t\t\$(document).keydown(function(event) {
\t\t\t\t// kill all keys
\t\t\t\t// supress + and -
\t\t\t\tif((event.which == '187') || (event.which == '189')){
\t\t\t\t    event.preventDefault();
\t\t\t\t}\t\t
\t\t\t});
\t\t})
\t\t
\t\t// kill rightclick
\t\t
\t\tfunction click (e) {
\t\t  if (!e)
\t\t    e = window.event;
\t\t  if ((e.type && e.type == \"contextmenu\") || (e.button && e.button == 2) || (e.which && e.which == 3)) {
\t\t    if (window.opera)
\t\t      window.alert(\"Sorry: Diese Funktion ist deaktiviert.\");
\t\t    return false;
\t\t  }
\t\t}
\t\tif (document.layers)
\t\t  document.captureEvents(Event.MOUSEDOWN);
\t\tdocument.onmousedown = click;
\t\tdocument.oncontextmenu = click;
\t\t
\t\t// kill text select feature
\t\t</script>
\t\t<style type=\"text/css\">
\t\t  body {
\t\t\t-webkit-user-select: none;
\t\t\t-khtml-user-select: none;
\t\t\t-moz-user-select: none;
\t\t\t-o-user-select: none;
\t\t\tuser-select: none;  
\t\t  }
\t\t</style>

\t
    </head>
    
    
    
    <body class='iqa' >
    
        ";
        // line 89
        $this->displayBlock('body', $context, $blocks);
        // line 91
        echo "        
        ";
        // line 92
        $this->displayBlock('javascripts', $context, $blocks);
        // line 94
        echo "   
   </body>
    
   <script type=\"text/javascript\">


   
   </script>
       
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Image Quality Assessment";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 33
    public function block_jsfunctions($context, array $blocks = array())
    {
        echo " ";
    }

    // line 89
    public function block_body($context, array $blocks = array())
    {
        // line 90
        echo "        ";
    }

    // line 92
    public function block_javascripts($context, array $blocks = array())
    {
        // line 93
        echo "        ";
    }

    public function getTemplateName()
    {
        return "IqaCrowdSourcingBundle:Iqa:baseView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 93,  182 => 92,  178 => 90,  175 => 89,  169 => 33,  164 => 11,  158 => 7,  144 => 94,  142 => 92,  139 => 91,  137 => 89,  81 => 36,  77 => 34,  75 => 33,  53 => 14,  49 => 13,  44 => 12,  42 => 11,  37 => 9,  32 => 7,  24 => 1,);
    }
}
