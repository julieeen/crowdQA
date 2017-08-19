<?php

/* IqaCrowdSourcingBundle:Iqa:/presentation/dcr_sp.html.twig */
class __TwigTemplate_70f973d2dee4050a82c6400866eab4784702d85fb26db4c3e571dc3be625ce07 extends Twig_Template
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
\t\tvar presentationDuration ;
        \$(document).ready(function(){
        \tpresentationDuration = ";
        // line 8
        echo twig_jsonencode_filter((isset($context["presentationDuration"]) ? $context["presentationDuration"] : $this->getContext($context, "presentationDuration")));
        echo ";                
        });

\t\t\$(function(){setTimeout( function(){\$('#form_id').submit();},presentationDuration) });


\t</script>
\t
\t";
    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 18
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/iqacrowdsourcing/css/jquery-ui.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/iqacrowdsourcing/css/jquery-ui-slider-pips.css"), "html", null, true);
        echo "\">
\t
\t
";
        // line 27
        echo "\t";
    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        // line 30
        echo "
 \t<div style=\"height: 25%\"></div>
 
\t<div align=\"center\">
  \t<table border=\"0\" cellpadding=\"4\">
\t    <tr>
\t    <td align=\"center\">
\t    </td>
\t    <td align=\"left\">
\t    \t<img id=\"pic1\" src=";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["refFilename"]) ? $context["refFilename"] : $this->getContext($context, "refFilename")), "html", null, true);
        echo " autofocus=\"autofocus\" width=";
        echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")), "html", null, true);
        echo " height=";
        echo twig_escape_filter($this->env, (isset($context["height"]) ? $context["height"] : $this->getContext($context, "height")), "html", null, true);
        echo " onchange=\"alert()\" />
\t    </td>
\t    <td align=\"center\">
\t    \t<img id=\"pic2\" src=";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), "html", null, true);
        echo " width=";
        echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")), "html", null, true);
        echo " height=";
        echo twig_escape_filter($this->env, (isset($context["height"]) ? $context["height"] : $this->getContext($context, "height")), "html", null, true);
        echo " />
\t    </td>
\t    <td align=\"center\" >
\t   \t</td>
\t    </tr>
  \t</table>
  
  \t<form method=\"post\" action=\"\" id=\"form_id\">
\t<div id=\"form\" ><input type=\"hidden\" id=\"form_wait\" name=\"form[wait]\" /></div>
\t</form>
  
    <script type=\"text/javascript\">
    
\tvar width_dev = ";
        // line 55
        echo (isset($context["width"]) ? $context["width"] : $this->getContext($context, "width"));
        echo " * (1/window.devicePixelRatio);
\tvar height_dev = ";
        // line 56
        echo (isset($context["height"]) ? $context["height"] : $this->getContext($context, "height"));
        echo " * (1/window.devicePixelRatio);
    
    var images = document.getElementsByTagName('img'); 
    for(var i = 0; i < images.length; i++) {
        images[i].width = width_dev;
        images[i].height = height_dev;
    }   
\t\t
  </script>
  
</div>   
    
 ";
    }

    public function getTemplateName()
    {
        return "IqaCrowdSourcingBundle:Iqa:/presentation/dcr_sp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 56,  122 => 55,  102 => 42,  92 => 39,  81 => 30,  78 => 29,  74 => 27,  68 => 19,  63 => 18,  60 => 17,  47 => 8,  41 => 4,  38 => 3,  11 => 1,);
    }
}
