<?php

/* IqaCrowdSourcingBundle:Iqa:instructionPage.html.twig */
class __TwigTemplate_43e640407197d0d77363f8ac12beb0f3d84941646a0f3592788d527801c701aa extends Twig_Template
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

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/iqacrowdsourcing/css/my.css"), "html", null, true);
        echo "\">
\t
\t";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo " 
 \t<script type=\"text/javascript\">

\tvar imgList = ";
        // line 12
        echo twig_jsonencode_filter((isset($context["imgPreload"]) ? $context["imgPreload"] : null));
        echo ";

\tvar preload = new Array();
\tfor(var i = 0; i < imgList.length; i++){
\t\timg1 = new Image();
\t\timg1.src = imgList[i].filename;

\t\timg2 = new Image();
\t\timg2.src = imgList[i].origFilename;

\t\tpreload.push(img1)
\t\tpreload.push(img2)
\t}
\t
\t</script>
 
 \t<div  id=\"Wrapper\">
\t    <div id=\"TestTitle\" class=\"commonBox\" style=\"text-align:center\">";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["surveyTitle"]) ? $context["surveyTitle"] : null), "html", null, true);
        echo "</div>
    <div id=\"TestIntroduction\" class=\"commonBox\" style=\"display: block;\">
        
        <div style=\"text-align:left\">
           \t<br>
        \t<br>
        \t";
        // line 35
        echo strtr((isset($context["instructionText"]) ? $context["instructionText"] : null), array("0x0A" => "<br>"));
        echo "
        \t            
        </div>
        <br>
        <br>
        ";
        // line 40
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "     
        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
        ";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
    </div>
    
    </div>
\t    
 ";
    }

    public function getTemplateName()
    {
        return "IqaCrowdSourcingBundle:Iqa:instructionPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 42,  97 => 41,  93 => 40,  85 => 35,  76 => 29,  56 => 12,  51 => 9,  48 => 8,  40 => 4,  37 => 3,  11 => 1,);
    }
}
