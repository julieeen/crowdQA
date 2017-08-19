<?php

/* IqaCrowdSourcingBundle:Iqa:finishPage.html.twig */
class __TwigTemplate_d35764b8dbde81aba7761de40b5f925699fab9a7aac4443e98a21a5d845469cf extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["surveyTitle"]) ? $context["surveyTitle"] : null), "html", null, true);
        echo "</div>
    
    <div id=\"TestOutro\" class=\"commonBox\" style=\"display: block;\">
        
        <!-- edit here if you want to change the welcome message  and instructions -->

        <div style=\"text-align:center\">
           \t<br>
        \t<br>
        \t\tThank you very much for your participation!
        </div>

  <div style=\"height:100px;\"></div>
        
        
  <center>
   You had some trouble? 
   Please give us feedback :
  <br>
  <br>
  <form action = \"\" metdod = \"post\">\t
    <textarea id=\"feedback_text\" name=\"feedback\" value=\"\" rows=\"10\" cols=\"50\"></textarea><br>
    <button id=\"button\" type=\"submit\">submit</button>
 </form>
 
 
  </center>
                 
    </div>
    
    </div>
    
    
 \t";
    }

    public function getTemplateName()
    {
        return "IqaCrowdSourcingBundle:Iqa:finishPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 10,  51 => 9,  48 => 8,  40 => 4,  37 => 3,  11 => 1,);
    }
}
