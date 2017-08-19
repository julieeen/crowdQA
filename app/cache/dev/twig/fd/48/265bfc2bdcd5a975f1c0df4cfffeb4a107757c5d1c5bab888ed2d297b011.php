<?php

/* IqaCrowdSourcingBundle:Iqa:/rating/ratingViewSlider9.html.twig */
class __TwigTemplate_fd48265bfc2bdcd5a975f1c0df4cfffeb4a107757c5d1c5bab888ed2d297b011 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("IqaCrowdSourcingBundle:Iqa:baseView.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IqaCrowdSourcingBundle:Iqa:baseView.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/iqacrowdsourcing/css/jquery-ui.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/iqacrowdsourcing/css/jquery-ui-slider-pips.css"), "html", null, true);
        echo "\">
";
        // line 8
        echo "\t<link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css\">
";
        // line 10
        echo "\t
\t<script src=\"//code.jquery.com/jquery-1.10.2.js\"></script>
  \t<script src=\"//code.jquery.com/ui/1.11.2/jquery-ui.js\"></script>
  \t
  \t<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/iqacrowdsourcing/js/jquery-ui-slider-pips.js"), "html", null, true);
        echo "\"></script>
  \t
  \t
  \t<script type=\"text/javascript\">
 \t
 \tvar\tusedratingSliderLabels = ";
        // line 19
        echo twig_jsonencode_filter((isset($context["usedSliderLabel"]) ? $context["usedSliderLabel"] : $this->getContext($context, "usedSliderLabel")));
        echo ";      
\t\t\t\t\t\t
  \t</script> \t
\t
\t";
    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        // line 26
        echo "
 \t<div style=\"height:10%;\"> \t</div>
 \t<div style=\"height:70%; margin-left:70%; text-align:left\">\t
\t\t<div id=\"slider\" style=\"height:70%;\"></div>
\t\t
\t \t<div style=\"height:10%;\"> </div>
\t\t
\t\t<form action = \"\" metdod = \"post\">\t
\t\t \t<button id=\"button2\" name=\"rating\" value=\"-1\" onclick=\"error_button();\">skip this vote</button>
\t\t\t<button id=\"button\" name=\"rating\" value=\"3\" onclick=\"stopTime();\" type=\"submit\" style=\"display: none;\">submit</button>
\t\t\t
\t\t\t<input type=\"hidden\" id=\"time_tracker\" name=\"time\" value=\"-1\"/>\t\t
\t\t</form>
\t\t
    \t<br><br><div id=\"progressbar\" style=\"width:200px; height:30px;\"><div id=\"progressLabel\">";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["currentImageCount"]) ? $context["currentImageCount"] : $this->getContext($context, "currentImageCount")), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, (isset($context["totalNumberOfImages"]) ? $context["totalNumberOfImages"] : $this->getContext($context, "totalNumberOfImages")), "html", null, true);
        echo "</div></div>
\t\t
\t</div>\t\t

\t
\t<small>";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["debugText"]) ? $context["debugText"] : $this->getContext($context, "debugText")), "html", null, true);
        echo "</small>
    
    <script type=\"text/javascript\">
    bar = ";
        // line 48
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["progressBar"]) ? $context["progressBar"] : $this->getContext($context, "progressBar"))), "html", null, true);
        echo ";    
   \tif(bar){
   \t\tprogressValue= ";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["currentImageCount"]) ? $context["currentImageCount"] : $this->getContext($context, "currentImageCount")), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, (isset($context["totalNumberOfImages"]) ? $context["totalNumberOfImages"] : $this->getContext($context, "totalNumberOfImages")), "html", null, true);
        echo " *100;
   \t\t\$(\"#progressbar\").progressbar({
   \t\t  \tvalue: progressValue
   \t\t});
        \$(\"#progressbar\").show();\t\t
\t}
   \telse{
        \$(\"#progressbar\").hide();\t\t
   \t}\t
   \t
    var button = document.getElementById(\"button\");

\tfunction error_button(){
\t\tbutton.value = \"-1\";
\t\tbutton.click();
\t}
    
\t\$(\"#slider\").slider({ 
\t \t\t        min: 1, 
\t \t\t        max: 9,
\t \t\t        step : 1,
\t \t\t        orientation: \"vertical\",
\t \t\t        value: 5,
\t \t\t        
\t\t\t        change: function( event, ui ) {
\t\t\t\t        button.value = ui.value;
\t\t\t\t        button.click();      
\t \t\t       \t},
\t \t\t       \t \t \t\t       
\t \t\t    }).slider(\"pips\", {
\t \t\t        rest: \"label\",
\t \t\t        labels: usedratingSliderLabels 
    });
\t</script>
    
    
 ";
    }

    public function getTemplateName()
    {
        return "IqaCrowdSourcingBundle:Iqa:/rating/ratingViewSlider9.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 50,  110 => 48,  104 => 45,  94 => 40,  78 => 26,  75 => 25,  66 => 19,  58 => 14,  52 => 10,  49 => 8,  45 => 6,  40 => 5,  37 => 4,  11 => 1,);
    }
}
