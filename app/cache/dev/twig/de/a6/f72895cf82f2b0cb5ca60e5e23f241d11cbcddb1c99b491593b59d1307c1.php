<?php

/* IqaCrowdSourcingBundle:Iqa:/presentation/dcr.html.twig */
class __TwigTemplate_dea6f72895cf82f2b0cb5ca60e5e23f241d11cbcddb1c99b491593b59d1307c1 extends Twig_Template
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
\t";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/iqacrowdsourcing/css/jquery-ui.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/iqacrowdsourcing/css/jquery-ui-slider-pips.css"), "html", null, true);
        echo "\">
\t
\t";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "
 \t<div style=\"height:100px;\"></div>

\t<div align=\"center\">
  \t<table border=\"0\" cellpadding=\"4\">
        
    <tr>
    <td align=\"center\">
    \t<img id=\"pic_frame\" src=";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["refFilename"]) ? $context["refFilename"] : $this->getContext($context, "refFilename")), "html", null, true);
        echo " />
    </td>

";
        // line 26
        echo "    
    
  \t</table>
  
  \t<form method=\"post\" action=\"\" id=\"form_id\">
\t<div id=\"form\" ><input type=\"hidden\" id=\"form_wait\" name=\"form[wait]\" /></div>
\t</form>
  
    <script type=\"text/javascript\">

    // scale imgs block
\tvar width_dev = ";
        // line 37
        echo (isset($context["width"]) ? $context["width"] : $this->getContext($context, "width"));
        echo " * (1/window.devicePixelRatio);
\tvar height_dev = ";
        // line 38
        echo (isset($context["height"]) ? $context["height"] : $this->getContext($context, "height"));
        echo " * (1/window.devicePixelRatio);
    
    var images = document.getElementsByTagName('img'); 
    for(var i = 0; i < images.length; i++) {
        images[i].width = width_dev;
        images[i].height = height_dev;
        
    }

\tvar presentationDuration;\t
   \tpresentationDuration = ";
        // line 48
        echo twig_jsonencode_filter((isset($context["presentationDuration"]) ? $context["presentationDuration"] : $this->getContext($context, "presentationDuration")));
        echo ";   
   \tpresentationDuration = (presentationDuration * 2);   

\tvar off_time = 100;

\tfunction changePicture( ){
\t\tvar img = document.getElementById(\"pic_frame\");
\t\timg.src = \"\";
\t\timg.width = 0;
\t\timg.height = 0;
\t\t
\t\tsetTimeout(function(){
\t\t\timg.src= \"";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), "html", null, true);
        echo "\";
\t\t\timg.width=width_dev;
\t\t\timg.height=height_dev;
\t\t}, off_time);
\t}\t\t
    
    // change picture after presentationDuration / 2
\tsetTimeout(function(){ changePicture( ) }, (presentationDuration/2));
    
    // go to rateing after presentationDuration
 \tsetTimeout( function(){\$('#form_id').submit();}, (presentationDuration + off_time) );
    
\t\t
  </script>
  
</div>   
    
 ";
    }

    public function getTemplateName()
    {
        return "IqaCrowdSourcingBundle:Iqa:/presentation/dcr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 60,  110 => 48,  97 => 38,  93 => 37,  80 => 26,  74 => 21,  64 => 13,  61 => 12,  54 => 8,  49 => 7,  46 => 6,  41 => 4,  38 => 3,  11 => 1,);
    }
}
