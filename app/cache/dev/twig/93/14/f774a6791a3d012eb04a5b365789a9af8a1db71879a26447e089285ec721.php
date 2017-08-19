<?php

/* IqaCrowdSourcingBundle:Iqa:startPage.html.twig */
class __TwigTemplate_9314f774a6791a3d012eb04a5b365789a9af8a1db71879a26447e089285ec721 extends Twig_Template
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
        echo " \t<div  id=\"Wrapper\">
\t    <div id=\"TestTitle\" class=\"commonBox\" style=\"text-align:center\">";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["surveyTitle"]) ? $context["surveyTitle"] : $this->getContext($context, "surveyTitle")), "html", null, true);
        echo "</div>
    <div id=\"TestIntroduction\" class=\"commonBox\" style=\"display: block;\">
        
        <!-- edit here if you want to change the welcome message  and instructions -->

        <div style=\"text-align:left\">
           \t<br>
        \t<br>
        
        
           <!--  At first you will be guided through a small survey that will help us to evaluate the collected quality ratings.
            The survey will be followed by the quality test. -->

        \t";
        // line 23
        echo strtr((isset($context["welcomeMessage"]) ? $context["welcomeMessage"] : $this->getContext($context, "welcomeMessage")), array("0x0A" => "<br>"));
        echo "

        </div>
        <br>
        <br>
        ";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "     
        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
    
    </div>
\t    
 ";
    }

    public function getTemplateName()
    {
        return "IqaCrowdSourcingBundle:Iqa:startPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 30,  82 => 29,  78 => 28,  70 => 23,  54 => 10,  51 => 9,  48 => 8,  40 => 4,  37 => 3,  11 => 1,);
    }
}
