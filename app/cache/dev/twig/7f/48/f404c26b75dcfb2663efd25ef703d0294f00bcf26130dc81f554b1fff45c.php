<?php

/* IqaCrowdSourcingBundle:Iqa:/concurrentRating/pc.html.twig */
class __TwigTemplate_7f48f404c26b75dcfb2663efd25ef703d0294f00bcf26130dc81f554b1fff45c extends Twig_Template
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
\tvar start_time = new Date();
\t
\tfunction stopTime(){
\t\tvar stop_time = new Date();
\t\tif (stop_time < start_time) {
\t\t\tstop_time.setDate(stop_time.getDate() + 1);
\t\t}
\t\tvar diff = stop_time - start_time;\t\t\t
\t\tdocument.getElementById(\"time_tracker\").value = diff;
\t}
\t\t\t\t
\t</script>
\t
\t";
    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 21
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/iqacrowdsourcing/css/jquery-ui.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/iqacrowdsourcing/css/jquery-ui-slider-pips.css"), "html", null, true);
        echo "\">
\t
\t";
    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        // line 27
        echo "
\t
  <table style=\"height:100%; width:100%;\" border=\"0\" cellpadding=\"4\" align=\"center\">
    <tr >
\t    <td height=80% align=\"right\" >
\t    \t<img id=\"pic1\" src=";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["refFilename"]) ? $context["refFilename"] : $this->getContext($context, "refFilename")), "html", null, true);
        echo " width=\"\" height=\"\" />
\t    </td>
\t    
\t    <td height=80% align=\"left\">
\t    \t<img id=\"pic2\" src=";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), "html", null, true);
        echo " width=\"\" height=\"\" />
\t    </td>
    </tr>\t
    
    <tr >
        <td height=\"20%\" colspan=\"2\" align=\"center\">
\t\t\t
\t\t<form action = \"\" method = \"post\">
\t\t<button id=\"button_left\" name=\"rating\" value=\"1\" onclick=\"stopTime();\" type=\"submit\" style=\"width:100px\">left</button>
\t\t<button id=\"button_right\" name=\"rating\" value=\"2\" onclick=\"stopTime();\" type=\"submit\" style=\"width:100px\">right</button>     
        
        <div style=\"height:40px;\"></div>
\t\t<button id=\"button2\" name=\"rating\" value=\"-1\" onclick=\"stopTime();\">skip this vote</button>
        
        <input type=\"hidden\" id=\"time_tracker\" name=\"time\" value=\"-1\"/>\t\t\t
    \t</form>
    \t
    \t<br><div id=\"progressbar\" style=\"width:200px; height:30px;\"><div id=\"progressLabel\">";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["currentImageCount"]) ? $context["currentImageCount"] : $this->getContext($context, "currentImageCount")), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, (isset($context["totalNumberOfImages"]) ? $context["totalNumberOfImages"] : $this->getContext($context, "totalNumberOfImages")), "html", null, true);
        echo "</div></div>
    \t
\t\t\t\t        
        </td>
  
    </tr>\t    
       
  </table>
   
  
  
  <script type=\"text/javascript\">
  bar = ";
        // line 65
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["progressBar"]) ? $context["progressBar"] : $this->getContext($context, "progressBar"))), "html", null, true);
        echo ";    
 \tif(bar){
 \t\tprogressValue= ";
        // line 67
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
  
\t//scale imgs block\t\t
\tvar width_dev = ";
        // line 78
        echo (isset($context["width"]) ? $context["width"] : $this->getContext($context, "width"));
        echo " * (1/window.devicePixelRatio);
\tvar height_dev = ";
        // line 79
        echo (isset($context["height"]) ? $context["height"] : $this->getContext($context, "height"));
        echo " * (1/window.devicePixelRatio);
\t
\tvar images = document.getElementsByTagName('img'); 
\tfor(var i = 0; i < images.length; i++) {
\t    images[i].width = width_dev;
\t    images[i].height = height_dev;
\t    
\t}

 \tpresentationDuration = ";
        // line 88
        echo twig_jsonencode_filter((isset($context["presentationDuration"]) ? $context["presentationDuration"] : $this->getContext($context, "presentationDuration")));
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
              
  </script>
  
    
 ";
    }

    public function getTemplateName()
    {
        return "IqaCrowdSourcingBundle:Iqa:/concurrentRating/pc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 88,  154 => 79,  150 => 78,  134 => 67,  129 => 65,  112 => 53,  92 => 36,  85 => 32,  78 => 27,  75 => 26,  68 => 22,  63 => 21,  60 => 20,  41 => 4,  38 => 3,  11 => 1,);
    }
}
