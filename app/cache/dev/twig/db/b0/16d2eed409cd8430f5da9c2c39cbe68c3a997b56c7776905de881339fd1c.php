<?php

/* IqaCrowdSourcingBundle:Iqa:/video/doubleStimulusVideo.html.twig */
class __TwigTemplate_dbb016d2eed409cd8430f5da9c2c39cbe68c3a997b56c7776905de881339fd1c extends Twig_Template
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
\t
\t";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/iqacrowdsourcing/css/jquery-ui.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/iqacrowdsourcing/css/jquery-ui-slider-pips.css"), "html", null, true);
        echo "\">
\t
\t";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "  \t
  \t<table style=\"height:100%; width:100%\" border=\"0\" cellpadding=\"4\" align=\"center\">
    <tr >
\t    <td id=\"video_frame\" width=\"70%\"  align=center >
\t    \t
";
        // line 22
        echo "\t\t\t
\t    </td>
\t    
    </tr>\t    
       
  </table>
  \t
\t
    <form method=\"post\" action=\"\" id=\"form_id\">
\t\t<div id=\"form\" ><input type=\"hidden\" id=\"form_wait\" name=\"form[wait]\" />
\t\t</div>
\t</form>\t\t

\t<script type=\"text/javascript\">

\tvar orig_video = document.createElement('video');
\torig_video.src = \"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["refFilename"]) ? $context["refFilename"] : $this->getContext($context, "refFilename")), "html", null, true);
        echo "\";
\torig_video.width = ";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")), "html", null, true);
        echo "
\torig_video.preload = \"auto\"; 

\tvar cond_video = document.createElement('video');
\tcond_video.src = \"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), "html", null, true);
        echo "\";
\tcond_video.width = ";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")), "html", null, true);
        echo "
\tcond_video.preload = \"auto\"; 

\tvar video_frame = document.getElementById(\"video_frame\");
\tvideo_frame.appendChild(orig_video);
\torig_video.play()
\t
\torig_video.onended = function(e) {
\t\tconsole.log(\"end\");
\t\tvideo_frame.removeChild(orig_video)
\t\t
\t\tsetInterval(function () {
\t\t\tvideo_frame.appendChild(cond_video);
\t\t\tcond_video.play()
\t\t}, 2000);
\t}

\tcond_video.onended = function(e) {
    \t\$('#form_id').submit();
    };
\t \t

\t</script>
   \t
  </div>
    
 ";
    }

    public function getTemplateName()
    {
        return "IqaCrowdSourcingBundle:Iqa:/video/doubleStimulusVideo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 44,  101 => 43,  94 => 39,  90 => 38,  72 => 22,  65 => 14,  62 => 13,  55 => 9,  50 => 8,  47 => 7,  41 => 4,  38 => 3,  11 => 1,);
    }
}
