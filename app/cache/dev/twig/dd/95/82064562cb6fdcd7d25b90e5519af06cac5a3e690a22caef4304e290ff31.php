<?php

/* IqaCrowdSourcingBundle:Iqa:surveyPage.html.twig */
class __TwigTemplate_dd9582064562cb6fdcd7d25b90e5519af06cac5a3e690a22caef4304e290ff31 extends Twig_Template
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
        echo " : Pre-Survey</div>
    <div id=\"TestIntroduction\" class=\"commonBox\" style=\"display: block;\">
        
        <!-- edit here if you want to change the welcome message  and instructions -->

        <div style=\"text-align:left;\">
           \t<br>
        \t<br>

\t\t\t";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["preSurveyText"]) ? $context["preSurveyText"] : $this->getContext($context, "preSurveyText")), "html", null, true);
        echo "
        \t\t                      
        \t<hr style=\"height:1px;border:none;color:#333;background-color:#333;\" />
\t\t    
        \t<br>      \t
        \t
        \t<form method=\"post\" action=\"\"> 
        \t
        \t<table id=\"table\" style=\"width:80%; font-size:90%;\">
  \t\t\t\t<tr>
\t\t\t\t    <td>Gender : </td>
\t\t\t\t    <td> 
\t\t\t\t    <select name=\"gender\" size=\"1\">
\t\t\t\t            <option value=\"0\">man</option>
\t\t\t\t            <option value=\"1\">woman</option>
      \t\t\t\t</select>
      \t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t    <td>Age : </td>
\t\t\t\t    <td>
\t\t\t\t      \t<input type=\"text\" value=\"\" name=\"age\" maxlength=\"3\" style=\"width:82px; text-align: center;\"/> 
\t\t\t\t    
";
        // line 53
        echo "\t\t\t\t    </td> 
\t\t\t\t</tr>
\t\t\t\t<tr>
";
        // line 63
        echo "\t\t\t\t</tr>
";
        // line 76
        echo "\t\t\t\t<tr>
";
        // line 79
        echo "\t\t\t\t</tr>
\t\t\t\t<tr>
";
        // line 83
        echo "\t\t\t\t</tr>\t
\t\t\t\t
\t\t\t\t<tr>
\t\t\t\t    <td>I have knowledge about video coding : </td>
\t\t\t\t    <td>
\t\t\t\t    <select name=\"expert\" size=\"1\" style=\"width:85px;\">
\t\t\t\t        <option value=\"0\">no</option>
\t\t\t\t        <option value=\"1\">yes</option>
      \t\t\t\t</select>
\t\t\t\t    </td> 
\t\t\t\t</tr>\t\t\t\t\t
\t\t\t\t
\t\t\t\t</table>
\t\t\t\t
";
        // line 101
        echo "\t\t\t\t
";
        // line 111
        echo "\t\t\t\t
\t\t\t\t
";
        // line 115
        echo "        \t<br>      \t

\t\t    <hr style=\"height:1px;border:none;color:#333;background-color:#333;\" />
\t\t    
";
        // line 120
        echo "\t\t    
";
        // line 124
        echo "\t\t    \t  
";
        // line 140
        echo "
";
        // line 149
        echo "\t            
";
        // line 171
        echo "\t\t\t    
    \t\t<p align=\"right\"><input type=\"submit\" /></p>
\t\t\t</form>
        \t
        
        
        
        
        </div>
        
    </div>
    
    </div>
    
\t<script language=\"javascript\"> 
\t
\tfunction buildVisionTest(){
\t\tdocument.getElementById(\"visionText\").remove();
\t\tdocument.getElementById(\"visionTest\").style.display = \"initial\";
\t}
\t
\t</script>
    
  
 
    
    
\t    
 ";
    }

    public function getTemplateName()
    {
        return "IqaCrowdSourcingBundle:Iqa:surveyPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 171,  145 => 149,  142 => 140,  139 => 124,  136 => 120,  130 => 115,  126 => 111,  123 => 101,  107 => 83,  103 => 79,  100 => 76,  97 => 63,  92 => 53,  66 => 19,  54 => 10,  51 => 9,  48 => 8,  40 => 4,  37 => 3,  11 => 1,);
    }
}
