<?php

/* IqaCrowdSourcingBundle:Iqa:/presentation/samviq.html.twig */
class __TwigTemplate_bffcffaeb9b83195b8ea172a756be4b8c364b62b4a96515ab807b54729c942ee extends Twig_Template
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

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/iqacrowdsourcing/css/jquery-ui.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/iqacrowdsourcing/css/jquery-ui-slider-pips.css"), "html", null, true);
        echo "\">
\t
\t<link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css\">
  \t<script src=\"//code.jquery.com/jquery-1.10.2.js\"></script>
  \t<script src=\"//code.jquery.com/ui/1.11.2/jquery-ui.js\"></script>
\t
\t<script type=\"text/javascript\">
\tvar start_time = new Date();
 \t
 \tvar usedratingSliderLabels ;

 \tusedratingSliderLabels = ";
        // line 17
        echo twig_jsonencode_filter((isset($context["usedSliderLabel"]) ? $context["usedSliderLabel"] : null));
        echo ";      

\tvar def_rating = 5;\t

\tfunction stopTime(){
\t\tvar stop_time = new Date();
\t\tif (stop_time < start_time) {
\t\t\tstop_time.setDate(stop_time.getDate() + 1);
\t\t}
\t\tvar diff = stop_time - start_time;\t\t\t
\t\tdocument.getElementById(\"time_tracker\").value = diff;
\t}

\tfunction sendData(){
\t\tvar post = JSON.stringify(testSet);
\t\tdocument.getElementById(\"button\").value = post;
\t}


\tvar frame = document.getElementById(\"img\");

\tvar testSet = ";
        // line 38
        echo twig_jsonencode_filter((isset($context["filenames"]) ? $context["filenames"] : null));
        echo ";

\tvar currentPic = 0;

\t// resize all images
\tvar width_dev = ";
        // line 43
        echo (isset($context["width"]) ? $context["width"] : null);
        echo " * (1/window.devicePixelRatio);
\tvar height_dev = ";
        // line 44
        echo (isset($context["height"]) ? $context["height"] : null);
        echo " * (1/window.devicePixelRatio);
\t
\tfunction change(value){
\t\tif(currentPic == value){
\t\t\treturn;
\t\t}
\t\tcurrentPic = value;
\t\tdocument.getElementById(\"img\").src= \"\";
\t\tdocument.getElementById(\"img\").width=0;
\t\tdocument.getElementById(\"img\").height=0;
\t\t
\t\tsetTimeout(function(){loadNewPic(value)}, 100);
\t}

\tfunction loadNewPic(value){
\t\t// load picture
\t\tdocument.getElementById(\"img\").src= testSet[value]['filename'];
\t\tdocument.getElementById(\"img\").width=width_dev;
\t\tdocument.getElementById(\"img\").height=height_dev;

\t\t// load slider
\t\t\$( \"#slider\" ).slider( \"value\", testSet[value]['rating'] );
\t}\t\t
\t
  \t</script> \t
\t
\t
\t";
    }

    // line 73
    public function block_body($context, array $blocks = array())
    {
        // line 74
        echo " \t

";
        // line 77
        echo "\t<table  width=\"100%\" height=\"100%\">
\t<tr>
\t\t\t<td width=80%; height=80%>
\t\t\t<center>
\t\t\t<img id=\"img\" src=\"//:0\" width=";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : null), "html", null, true);
        echo " height=";
        echo twig_escape_filter($this->env, (isset($context["height"]) ? $context["height"] : null), "html", null, true);
        echo " />
\t\t\t</center>

\t\t\t</td>
\t\t\t<td width=20%;>

\t\t\t<div id=\"slider\" style=\"height:70%; width:10px;\"></div>
\t\t\t\t\t\t
\t\t\t</td>\t
\t</tr>
\t\t<tr>
\t\t\t<td  height=5%>
\t\t\t
\t\t\t<center>
\t\t\t<div id=\"buttonfield\"></div>
\t\t\t";
        // line 97
        echo "\t\t\t</center>
\t
";
        // line 102
        echo "\t\t\t
\t\t\t</td>
\t\t\t<td>
\t\t\t
\t\t\t\t\t<form id=\"post_form\" action = \"\" method = \"post\">\t
\t\t\t\t\t<button id=\"button\" name=\"ratings\" onclick=\"stopTime(); sendData();\" type=\"submit\">submit</button>
\t\t\t\t\t
\t\t\t\t\t<input type=\"hidden\" id=\"time_tracker\" name=\"time\" value=\"-1\"/>\t
\t\t\t\t\t";
        // line 111
        echo "\t\t\t\t\t\t\t
\t\t\t</form>
\t\t\t    <br><div id=\"progressbar\" style=\"width:200px; height:30px; bottom:0\"><div id=\"progressLabel\">";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["currentImageCount"]) ? $context["currentImageCount"] : null), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, (isset($context["totalNumberOfImages"]) ? $context["totalNumberOfImages"] : null), "html", null, true);
        echo "</div></div>
\t\t\t
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td heigth=5%>
\t\t\t</td>
\t\t\t
\t\t\t<td>
\t\t\t

\t\t\t</td>
\t\t</tr>
\t</table>
\t
\t<script type=\"text/javascript\">
\tbar = ";
        // line 129
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["progressBar"]) ? $context["progressBar"] : null)), "html", null, true);
        echo ";    
   \tif(bar){
   \t\tprogressValue= ";
        // line 131
        echo twig_escape_filter($this->env, (isset($context["currentImageCount"]) ? $context["currentImageCount"] : null), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, (isset($context["totalNumberOfImages"]) ? $context["totalNumberOfImages"] : null), "html", null, true);
        echo " * 100;
   \t\t\$( \"#progressbar\" ).progressbar({
   \t\t    value: progressValue
   \t\t});
        \$(\"#progressbar\").show();\t\t
\t}
   \telse{
        \$(\"#progressbar\").hide();\t\t
   \t}
   \t
\t\$(\"#slider\").slider({ 
\t\t        min: 0, 
\t\t        max: 10,
\t\t        value: 5,
\t\t        step : 1,
\t\t        orientation: \"vertical\",
\t\t        value: Math.ceil(usedratingSliderLabels.length/2),
\t\t        
\t\t        change: function( event, ui ) {
// \t\t        \tdocument.getElementById(\"button\").value = ui.value;
\t\t\t\t\ttestSet[currentPic]['rating'] = ui.value;
// \t\t\t\t\tdocument.getElementById(\"rating\"+currentPic).value = ui.value;    \t\t\t        \t
\t\t\t    },
\t\t\t       \t
\t\t\t\tcreate: function( event, ui ) {
\t\t    \t\tvar name = event.target.id;
\t        \t\t\$( \"#form_\" + name  ).val( Math.ceil(usedratingSliderLabels.length/2));
\t\t\t\t}
\t \t\t       
\t\t    }).slider(\"pips\", {
\t\t        rest: \"label\",
\t\t        labels: usedratingSliderLabels 
    });

\t
\tfunction addButton(id) {
\t    //Create an input type dynamically.   
\t    var element = document.createElement(\"button\");
\t    element.type = \"submit\";
\t    element.value = id;
\t    element.id = \"pic_button\"+id;
\t    element.onclick = function() {
\t       change(id);
\t    };
\t    element.innerHTML = \"Image \"+ String.fromCharCode(64+id);;
\t\tif(id == 0){
\t\t    element.innerHTML = \"Reference\";
\t\t}\t    
\t    element.sytle = \"left:50%;\";
\t    // add to place
\t    var foo = document.getElementById(\"buttonfield\");
\t    foo.appendChild(element);

// \t\t// every button get hidden input for POST
// \t\tvar hidden_input = document.createElement(\"input\");
// \t\thidden_input.type = \"hidden\";
// \t\thidden_input.id = \"rating\"+id;
// \t\thidden_input.name = \"rating[]\";
// \t\thidden_input.value = def_rating;
// \t    var foo2 = document.getElementById(\"post_form\");
// \t    foo2.appendChild(hidden_input);
\t};

\tfor (i = 0; i < testSet.length; i++) {
\t\ttestSet[i]['rating'] = def_rating;
\t\taddButton(i);
\t};

\t// set orig pic to default pic 
\tloadNewPic(0);
    
    var images = document.getElementsByTagName('img'); 
    for(var i = 0; i < images.length; i++) {
        images[i].width = width_dev;
        images[i].height = height_dev;
        
    }

    
</script>
    
 ";
    }

    public function getTemplateName()
    {
        return "IqaCrowdSourcingBundle:Iqa:/presentation/samviq.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 131,  199 => 129,  178 => 113,  174 => 111,  164 => 102,  160 => 97,  140 => 81,  134 => 77,  130 => 74,  127 => 73,  95 => 44,  91 => 43,  83 => 38,  59 => 17,  45 => 6,  40 => 5,  37 => 4,  11 => 1,);
    }
}
