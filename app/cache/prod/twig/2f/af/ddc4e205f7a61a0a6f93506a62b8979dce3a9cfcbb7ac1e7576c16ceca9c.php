<?php

/* IqaCrowdSourcingBundle:Iqa:/concurrentRating/double_stim_sp9.html.twig */
class __TwigTemplate_2fafddc4e205f7a61a0a6f93506a62b8979dce3a9cfcbb7ac1e7576c16ceca9c extends Twig_Template
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
 \t<script>

 \tvar\tusedratingSliderLabels = ";
        // line 7
        echo twig_jsonencode_filter((isset($context["usedSliderLabel"]) ? $context["usedSliderLabel"] : null));
        echo ";      
 \t
 \t
    var start_time = new Date();
 \t\t
    function stopTime(){
    \t\tvar stop_time = new Date();
    \t\tif (stop_time < start_time) {
    \t\t\tstop_time.setDate(stop_time.getDate() + 1);
    \t\t}
    \t\tvar diff = stop_time - start_time;\t\t\t
    \t\tdocument.getElementById(\"time_tracker\").value = diff;
    }


\t</script>
\t
\t";
    }

    // line 25
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 26
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/iqacrowdsourcing/css/jquery-ui.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/iqacrowdsourcing/css/jquery-ui-slider-pips.css"), "html", null, true);
        echo "\">
\t
\t

\t";
    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        // line 34
        echo "
 <div style=\"width:100%; height: 10%;\">
 </div>
 <table style=\"height:80%; width:80%;\" border=\"0\" cellpadding=\"4\" align=\"center\">
    <tr>
\t    <td id=\"pic_frame1\" height=70% align=\"right\" >
";
        // line 41
        echo "\t    </td>
\t    
\t    <td id=\"pic_frame2\" height=70% align=\"left\">
";
        // line 45
        echo "\t    </td>
    
    \t<td width=\"20%\" align=\"left\">
\t\t\t<div style=\"height:20%;\"> </div>
\t\t\t
\t\t\t<div id=\"slider\" style=\"height:55%; width:10px;\"></div>\t
\t\t\t
\t\t\t<div style=\"height:10%;\"></div> 
\t\t\t
\t\t \t<div style=\"height:20%;\"> 
\t\t\t\t
\t\t\t<form action = \"\" metdod = \"post\">
";
        // line 58
        echo "\t\t\t \t<button id=\"button\" name=\"rating\" value=\"3\" onclick=\"stopTime();\" type=\"submit\" style=\"display: none;\">submit</button>
\t\t\t\t<input type=\"hidden\" id=\"time_tracker\" name=\"time\" value=\"-1\"/>\t\t
\t\t\t</form>
\t\t\t
\t\t    <br><div id=\"progressbar\" style=\"width:200px; height:30px;\"><div id=\"progressLabel\">";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["currentImageCount"]) ? $context["currentImageCount"] : null), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, (isset($context["totalNumberOfImages"]) ? $context["totalNumberOfImages"] : null), "html", null, true);
        echo "</div></div>
\t\t
\t\t \t</div>
\t\t\t\t        
        </td>
  
    </tr>\t          
</table>


   
  
    <script type=\"text/javascript\">
    bar = ";
        // line 75
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["progressBar"]) ? $context["progressBar"] : null)), "html", null, true);
        echo ";    
   \tif(bar){
   \t\tprogressValue= ";
        // line 77
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

    
\t\$(\"#slider\").slider({ 
\t        min: 1, 
\t        max: 9,
\t        step : 1,
\t        orientation: \"vertical\",
\t        value: 8,
\t        
        change: function( event, ui ) {
\t        button.value = ui.value;
\t        button.click();      
\t       \t},
\t       \t
\t\t       
\t    }).slider(\"pips\", {
\t        rest: \"label\",
\t        labels: usedratingSliderLabels, 
\t\t    step: 1
\t});


 \t//scale imgs block\t\t
\tvar width_dev = ";
        // line 116
        echo (isset($context["width"]) ? $context["width"] : null);
        echo " * (1/window.devicePixelRatio);
\tvar height_dev = ";
        // line 117
        echo (isset($context["height"]) ? $context["height"] : null);
        echo " * (1/window.devicePixelRatio);
\t
\t//img preload
\tvar pic1 = new Image(width_dev, height_dev);
\tpic1.src = \"";
        // line 121
        echo twig_escape_filter($this->env, (isset($context["filename"]) ? $context["filename"] : null), "html", null, true);
        echo "\";
\t
\tvar pic2 = new Image(width_dev, height_dev);
\tpic2.src = \"";
        // line 124
        echo twig_escape_filter($this->env, (isset($context["refFilename"]) ? $context["refFilename"] : null), "html", null, true);
        echo "\";

\tfunction showImages(){
\t\t// show pictures after some ms
\t\tvar frame1 = document.getElementById(\"pic_frame2\");
\t\tframe1.appendChild(pic1);
\t\t
\t\tvar frame1 = document.getElementById(\"pic_frame1\");
\t\tframe1.appendChild(pic2);
\t}

\tsetTimeout(function(){ showImages(); }, 200);

 \tpresentationDuration = ";
        // line 137
        echo twig_jsonencode_filter((isset($context["presentationDuration"]) ? $context["presentationDuration"] : null));
        echo "; 

\tfunction disableImgs(){
\t\tfor(var i = 0; i < images.length; i++) {
\t\t\timages[i].src = \"\";
\t\t\timages[i].width = 0;
\t\t\timages[i].height = 0;
\t\t}
\t}

 \tif (presentationDuration > 0)
 \t\tsetTimeout(function(){ disableImgs(); }, presentationDuration);
\t\t
  </script>
  
</div>   
    
 ";
    }

    public function getTemplateName()
    {
        return "IqaCrowdSourcingBundle:Iqa:/concurrentRating/double_stim_sp9.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 137,  205 => 124,  199 => 121,  192 => 117,  188 => 116,  144 => 77,  139 => 75,  121 => 62,  115 => 58,  101 => 45,  96 => 41,  88 => 34,  85 => 33,  76 => 27,  71 => 26,  68 => 25,  46 => 7,  41 => 4,  38 => 3,  11 => 1,);
    }
}
