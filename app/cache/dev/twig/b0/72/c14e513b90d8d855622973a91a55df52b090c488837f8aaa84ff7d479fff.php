<?php

/* IqaCrowdSourcingBundle:Iqa:/presentation/pc.html.twig */
class __TwigTemplate_b072c14e513b90d8d855622973a91a55df52b090c488837f8aaa84ff7d479fff extends Twig_Template
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
\tvar presentationDuration ;
    \$(document).ready(function(){
        \tpresentationDuration = ";
        // line 8
        echo twig_jsonencode_filter((isset($context["presentationDuration"]) ? $context["presentationDuration"] : $this->getContext($context, "presentationDuration")));
        echo ";                
     });

\t\$(function(){
\t\tsetTimeout(function()
\t\t{
\t\t\$('#form_id').submit();}
\t,presentationDuration) }
\t);


\t
\t\t\t\t
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
        echo " \t<br>
\t<br>
\t<br>
\t<div align=\"center\">
  \t<table border=\"0\" cellpadding=\"4\">
    
    <tr>
    <td align=\"center\">
    
    
    </td>

    <td align=\"left\"><img id=\"pic1\" src=";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["refFilename"]) ? $context["refFilename"] : $this->getContext($context, "refFilename")), "html", null, true);
        echo " width=\"getwidth()\" height=\"get_heigth()\" /></td>
    
    <td align=\"center\"><img id=\"pic2\" src=";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), "html", null, true);
        echo " width=\"get_width();\" height=\"get_heigth();\" /></td>
    <td align=\"center\" >
\t\t        <form method=\"post\" action=\"\" id=\"form_id\">
\t\t\t\t<div id=\"form\" ><input type=\"hidden\" id=\"form_wait\" name=\"form[wait]\" /></div></form>
\t\t
   \t</td>
    </tr>
       
  </table>
  
  <script type=\"text/javascript\">
  
\tvar width_dev = ";
        // line 57
        echo (isset($context["width"]) ? $context["width"] : $this->getContext($context, "width"));
        echo " * (1/window.devicePixelRatio);
\tvar height_dev = ";
        // line 58
        echo (isset($context["height"]) ? $context["height"] : $this->getContext($context, "height"));
        echo " * (1/window.devicePixelRatio);

\tdocument.getElementById(\"pic1\").width = width_dev;
\tdocument.getElementById(\"pic1\").height = height_dev;
\t\t
\tdocument.getElementById(\"pic2\").width = width_dev;
\tdocument.getElementById(\"pic2\").height = height_dev;
\t\t
  </script>
  
</div>    
    
 ";
    }

    public function getTemplateName()
    {
        return "IqaCrowdSourcingBundle:Iqa:/presentation/pc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 58,  119 => 57,  104 => 45,  99 => 43,  85 => 31,  82 => 30,  75 => 26,  70 => 25,  67 => 24,  47 => 8,  41 => 4,  38 => 3,  11 => 1,);
    }
}
