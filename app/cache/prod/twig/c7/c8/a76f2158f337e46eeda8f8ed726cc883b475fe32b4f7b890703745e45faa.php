<?php

/* IqaCrowdSourcingBundle:Iqa:/concurrentRating/single_stim_100.html.twig */
class __TwigTemplate_c7c8a76f2158f337e46eeda8f8ed726cc883b475fe32b4f7b890703745e45faa extends Twig_Template
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
            'jsfunctions' => array($this, 'block_jsfunctions'),
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

    // line 3
    public function block_jsfunctions($context, array $blocks = array())
    {
        // line 4
        echo " \t
 \t<script>\t
 \t\tvar\tusedratingSliderLabels = ";
        // line 6
        echo twig_jsonencode_filter((isset($context["usedSliderLabel"]) ? $context["usedSliderLabel"] : null));
        echo ";      
 \t
 \t
        var start_time = new Date();
 \t\t
    \tfunction stopTime(){
    \t\tvar stop_time = new Date();
    \t\tif (stop_time < start_time) {
    \t\t\tstop_time.setDate(stop_time.getDate() + 1);
    \t\t}
    \t\tvar diff = stop_time - start_time;\t\t\t
    \t\tdocument.getElementById(\"time_tracker\").value = diff;
    \t}


\t</script>
\t
\t";
    }

    // line 24
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 25
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/iqacrowdsourcing/css/jquery-ui.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/iqacrowdsourcing/css/jquery-ui-slider-pips.css"), "html", null, true);
        echo "\">
\t
\t";
    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        // line 31
        echo "
 \t<table style=\"height:100%; width:100%\" border=\"0\" cellpadding=\"4\" align=\"center\">
    <tr >
\t    <td width=\"70%\"  align=center >
\t    \t<img id=\"pic1\" src=";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["filename"]) ? $context["filename"] : null), "html", null, true);
        echo " width=\"\" height=\"\" />
\t    </td>
\t    
        <td width=\"30%\" align=\"center\">
\t\t\t<div style=\"height:20%;\"> </div>
\t\t\t
\t\t\t<div id=\"slider\" style=\"height:50%; width:10px;\"></div>\t
\t\t\t
\t\t\t<div style=\"height:10%;\"></div> 
\t\t\t
\t\t \t<div style=\"height:20%;\"> 
\t\t\t\t
\t\t\t<form action = \"\" metdod = \"post\">
\t\t\t\t<br><br>
\t\t\t \t<button id=\"button2\" name=\"rating\" value=\"-1\" onclick=\"error_button();\">skip this vote</button>

\t\t\t \t<button id=\"button\" name=\"rating\" value=\"3\" onclick=\"stopTime();\" type=\"submit\" style=\"display: none;\">submit</button>
\t\t\t\t<input type=\"hidden\" id=\"time_tracker\" name=\"time\" value=\"-1\"/>\t\t
\t\t\t</form>
\t\t\t
\t\t\t<br><div id=\"progressbar\" style=\"width:200px; height:30px;\"><div id=\"progressLabel\">";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["currentImageCount"]) ? $context["currentImageCount"] : null), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, (isset($context["totalNumberOfImages"]) ? $context["totalNumberOfImages"] : null), "html", null, true);
        echo "</div></div>
\t\t\t
\t\t\t
\t\t \t</div>
\t\t\t\t        
        </td>
  
    </tr>\t    
       
  </table>
   
  
    <script type=\"text/javascript\">
    bar = ";
        // line 68
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["progressBar"]) ? $context["progressBar"] : null)), "html", null, true);
        echo ";    
   \tif(bar){
   \t\tprogressValue= ";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["currentImageCount"]) ? $context["currentImageCount"] : null), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, (isset($context["totalNumberOfImages"]) ? $context["totalNumberOfImages"] : null), "html", null, true);
        echo " *100;
   \t\t\$(\"#progressbar\").progressbar({
   \t\t  \tvalue: progressValue
   \t\t});
        \$(\"#progressbar\").show();\t\t
\t}
   \telse{
        \$(\"#progressbar\").hide();\t\t
   \t}\t

    var button = document.getElementById(\"button\");

\tfunction error_button(){
\t\tbutton.value = \"-1\";
\t\tbutton.click();
\t}

\t    
\tvar scale_labels = new Array(100);
    
    for (i = 0; i < scale_labels.length; i++) { 
\t\tif((i%(10)) == 0)
    \t\tscale_labels[i] = usedratingSliderLabels.shift();
\t\telse
\t\t\tscale_labels[i] = \"\";
    }\t
    
\t\$(\"#slider\").slider({ 
\t        min: 0, 
\t        max: 100,
\t        step : 1,
\t        orientation: \"vertical\",
\t        value: 50,
\t        
        change: function( event, ui ) {
\t        button.value = ui.value;
\t        button.click();      
\t       \t},
\t       \t
\t\t       
\t    }).slider(\"pips\", {
\t        rest: \"label\",
\t        labels: scale_labels, 
\t\t    step: 10
\t});
    
 \t//scale imgs block\t\t
\tvar width_dev = ";
        // line 117
        echo (isset($context["width"]) ? $context["width"] : null);
        echo " * (1/window.devicePixelRatio);
\tvar height_dev = ";
        // line 118
        echo (isset($context["height"]) ? $context["height"] : null);
        echo " * (1/window.devicePixelRatio);
\t
\tvar images = document.getElementsByTagName('img'); 
\tfor(var i = 0; i < images.length; i++) {
\t    images[i].width = width_dev;
\t    images[i].height = height_dev;
\t    
\t}

 \tpresentationDuration = ";
        // line 127
        echo twig_jsonencode_filter((isset($context["presentationDuration"]) ? $context["presentationDuration"] : null));
        echo "; 

\tfunction disableImgs(){
\t\tfor(var i = 0; i < images.length; i++) {
\t\t\timages[i].src = \"\";
\t\t    images[i].width = 0;
\t\t    images[i].height = 0;
\t\t}
\t}
 \t
 \tsetTimeout(function(){ disableImgs(); }, presentationDuration);
\t\t
  </script>
  
</div>   
    
 ";
    }

    public function getTemplateName()
    {
        return "IqaCrowdSourcingBundle:Iqa:/concurrentRating/single_stim_100.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 127,  193 => 118,  189 => 117,  137 => 70,  132 => 68,  114 => 55,  91 => 35,  85 => 31,  82 => 30,  75 => 26,  70 => 25,  67 => 24,  45 => 6,  41 => 4,  38 => 3,  11 => 1,);
    }
}
