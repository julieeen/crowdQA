<?php

/* IqaCrowdSourcingBundle:Iqa:surveyPageFull.html.twig */
class __TwigTemplate_0e2a301346f0f59d2c213543aefeca6ace9f4d6569df3f368a0a09a9171c5c10 extends Twig_Template
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
        echo " : Pre-Survey</div>
    <div id=\"TestIntroduction\" class=\"commonBox\" style=\"display: block;\">
        
        <!-- edit here if you want to change the welcome message  and instructions -->

        <div style=\"text-align:left; font-size:16pt\">
           \t<br>
        \t<br>

\t\t\t";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["preSurveyText"]) ? $context["preSurveyText"] : null), "html", null, true);
        echo "
        \t\t                      
        \t<br>
        \t<br>      \t
        \t
        \t<form method=\"post\" action=\"\"> 
        \t
        \t<hr style=\"height:1px;border:none;color:#333;background-color:#333;\" />
        \t
        \t<br>      \t
        \t
        \t<table id=\"table\" style=\"width:80%; font-size:90%;\">
        \t<tr>
\t\t\t\t<td >
\t\t\t\t    Gender : 
\t\t\t\t    </td>
\t\t\t\t    <td> 
\t\t\t\t    <select name=\"gender\" size=\"1\">
\t\t\t\t        <option value=\"0\">man</option>
\t\t\t\t        <option value=\"1\">woman</option>
      \t\t\t\t</select>
      \t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t    <td>Age : </td>
\t\t\t\t    <td>\t\t  \t\t\t\t
\t\t\t\t    \t<input type=\"text\" value=\"\" name=\"age\" maxlength=\"3\" style=\"width:82px; text-align: center;\"/> 
";
        // line 57
        echo "\t\t\t\t    </td> 
\t\t\t\t</tr>
\t\t\t\t<tr>
";
        // line 67
        echo "\t\t\t\t</tr>
\t\t\t\t
\t\t\t\t<tr>
\t\t\t\t    <td>I have knowledge about video coding : </td>
\t\t\t\t    <td>
\t\t\t\t    <select name=\"expert\" size=\"1\">
\t\t\t\t        <option value=\"0\">no</option>
\t\t\t\t        <option value=\"1\">yes</option>
      \t\t\t\t</select>
\t\t\t\t    </td> 
\t\t\t\t</tr>\t\t\t\t
\t\t\t</table>
\t\t\t
\t\t\t</table>\t
\t\t\t
\t\t\t<br>
        \t<hr style=\"height:1px;border:none;color:#333;background-color:#333;\" />
\t\t\t<br>
\t\t\t\t
\t\t\t<table id=\"table\" style=\"width:100%\">
\t  \t\t\t<tr>
\t\t  \t\t\t<td style=\"width:70%\">
\t\t\t\t\t\tMaybe you recive a personal identification <br> code and if so, you should enter it here:
\t\t  \t\t\t</td>
\t\t\t\t\t<td>
\t\t  \t\t\t\t<input type=\"text\" value=\"\" name=\"personalID\" maxlength=\"15\" style=\"width:150px; text-align: center;\"/> 
\t\t  \t\t\t</td>
\t\t\t\t</tr>\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t</table>
\t\t\t
\t\t\t<br>
        \t<hr style=\"height:1px;border:none;color:#333;background-color:#333;\" />
\t\t\t<br>

\t\t\t
\t\t\t<table id=\"table\" style=\"width:100%\">
";
        // line 107
        echo "\t\t\t
\t\t\t<tr>
\t\t\t\t<td style=\"width:70%\">
\t\t\t\t\t\tLightning condition : 
\t\t\t\t\t</td>
\t\t\t\t    <td>
\t\t\t\t    <select name=\"lightningCondition\" size=\"1\">
\t\t\t\t    \t<option value=\"good\">no sunlight, no artificial light</option>
\t\t\t\t        <option value=\"normal\">low sunlight or artificial light</option>
\t\t\t\t        <option value=\"bad\">direct sunlight or bright artificial light</option>
\t\t\t\t        <option selected value=\"idk\">I don't know</option>
\t\t\t\t    </select>
\t\t\t\t</td> 
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t    <td>Display height : </td>
\t\t\t\t    <td><input type=\"text\" name=\"displayHeight\"  maxlength=\"5\" style=\"width:50px; text-align: center;\"/> mm</td> 
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t    <td>Viewing Distance : </td>
\t\t\t\t    <td><input type=\"text\"  name=\"viewingDistance\" maxlength=\"5\" style=\"width:50px; text-align: center;\"/> mm</td> 
\t\t\t</tr>
\t\t\t</table>
\t\t\t\t\t\t
\t\t\t
\t\t    <br>
        \t<hr style=\"height:1px;border:none;color:#333;background-color:#333;\" />
\t\t    \t\t    
\t\t    <br id=\"visionBlock\">
\t\t    
\t\t    <div id=\"visionText\">
\t\t\t    You can accomplish an optional vision test by clicking this <a href=\"javascript:buildVisionTest();\" >link</a>.    
\t\t    </div> 
\t\t    \t  
\t\t    <div id=\"visionTest\" style=\"display: none;\">
\t\t\t    Try to read the numbers in these pictures and enter the concatenation of them into the textfield below.
\t\t\t   \tFor example the concatenation of 33 and 44 is 3344.
\t\t\t    <br>
\t\t\t    <table style=\"width:100%; background-color:white\"\"\">
\t\t\t       \t<tr>
\t\t\t\t\t    <td><img src=\"http://upload.wikimedia.org/wikipedia/commons/4/4b/Ishihara_1.PNG\" width=\"100%\"/></td>
\t\t\t\t\t    <td><img src=\"http://upload.wikimedia.org/wikipedia/commons/c/c3/Ishihara_11.PNG\" width=\"100%\"/></td>
\t\t\t\t  \t</tr>
\t\t\t\t  \t<tr>
\t\t\t\t\t    <td><img src=\"http://upload.wikimedia.org/wikipedia/commons/a/ae/Ishihara_19.PNG\" width=\"100%\"/></td>
\t\t\t\t\t    <td><img src=\"http://upload.wikimedia.org/wikipedia/commons/f/f0/Ishihara_23.PNG\" width=\"100%\" /></td>
\t\t\t\t  \t</tr>
\t\t\t    </table>

\t            <br>
\t            <br>
\t            \tThe concatenation of the numbers is <input type=\"text\" name=\"colortest\" />
\t            <br>
\t\t   \t\t<br>
\t\t\t    <hr style=\" border-color: black;\">
\t\t    
\t\t\t    <br>
\t            
\t\t            Now try to read the letters from line 6 (green underlined) on the snellen chart.
\t\t           \tTo calibrate this test, you should measure the size of the letter E on the top. 
\t\t           \tThis size you should divide by 88 and multiplay with 6 to get the optimal distance for this test.           
\t\t            If E is 42 mm, you should be <br>( 42 / 88) x 6 = 2.8 m away from your monitor.
\t            <br>
\t            <br>
\t            \t<td align=\"center\"><img src=\"http://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Snellen_chart.svg/2000px-Snellen_chart.svg.png\" style=\"width:100%\"/></td>\t\t
\t            <br>
\t            <br>
\t            \tThe letters looks\t\t\t<select name=\"vision\" size=\"1\" value=\"\">
\t            \t       \t\t\t\t\t\t\t<option value=\"well\">well</option>
\t\t\t\t       \t\t\t\t\t\t\t\t<option value=\"blurred\">blurred</option>
\t\t\t\t       \t\t\t\t\t\t\t\t<option value=\"unreadable\">unreadable</option>\t\t\t\t       \t\t\t\t\t\t\t\t
\t            \t\t\t\t\t\t\t\t    <option selected value=\"\">whatever</option>
      \t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t    <hr style=\" border-color: black;\">
\t\t    </div>
\t\t\t    
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
        return "IqaCrowdSourcingBundle:Iqa:surveyPageFull.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 107,  101 => 67,  96 => 57,  66 => 19,  54 => 10,  51 => 9,  48 => 8,  40 => 4,  37 => 3,  11 => 1,);
    }
}
