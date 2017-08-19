<?php

/* IqaCrowdSourcingBundle:Iqa:/video/doubleStimulusVideo_SP.html.twig */
class __TwigTemplate_cbe4ff19e0b4705ebaaebc5a5051965cd51c8e14aa6874d2a42659c22740f278 extends Twig_Template
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
\t<script src=\"http://popcornjs.org/code/dist/popcorn-complete.js\"></script>
\t
\t";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo " 
 <table style=\"height:100%; width:100%\" border=\"0\" cellpadding=\"4\" align=\"center\">
    <tr >
\t    <td id=\"video_frame1\" height=70% align=\"right\" >

\t    </td>
\t    
\t    <td id=\"video_frame2\" height=70% align=\"left\">

\t    </td>
    
  
    </tr>\t    
       
  </table>
 
    <form method=\"post\" action=\"\" id=\"form_id\">
\t\t<div id=\"form\" >
\t\t<input type=\"hidden\" id=\"form_wait\" name=\"form[wait]\" />
\t\t</div>
\t</form>\t\t

\t<script type=\"text/javascript\">
\tvar orig_video = document.createElement('video');
\torig_video.src = \"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["refFilename"]) ? $context["refFilename"] : $this->getContext($context, "refFilename")), "html", null, true);
        echo "\";
\torig_video.width = \"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")), "html", null, true);
        echo "\"
\torig_video.preload = \"auto\"; 

\tvar cond_video = document.createElement('video');
\tcond_video.src = \"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), "html", null, true);
        echo "\";
\tcond_video.width = \"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")), "html", null, true);
        echo "\"
\tcond_video.preload = \"auto\"; 

\t
\tvar video_frame1 = document.getElementById(\"video_frame1\");
\tvar video_frame2 = document.getElementById(\"video_frame2\");
\tvideo_frame1.appendChild(orig_video);
\tvideo_frame2.appendChild(cond_video);

\tcond_video.onended = function(e) {
    \t\$('#form_id').submit();
    };   


//  *** sync code ****************************************************************
//\tfrom http://bocoup.com/weblog/html5-video-synchronizing-playback-of-two-videos/

    var videos = {
    \t    a: Popcorn(orig_video),    
    \t    b: Popcorn(cond_video), 
    \t},

    scrub = \$(\"#scrub\"),
    loadCount = 0, 
    events = \"play pause timeupdate seeking\".split(/\\s+/g);
    
    // iterate both media sources
\tPopcorn.forEach( videos, function( media, type ) {
   \t    // when each is ready... 
   \t    media.on( \"canplayall\", function() {
    \t        
   \t        // trigger a custom \"sync\" event
   \t        this.emit(\"sync\");
    \t        
   \t        // set the max value of the \"scrubber\"
   \t        scrub.attr(\"max\", this.duration() );

   \t    // Listen for the custom sync event...    
   \t    }).on( \"sync\", function() {
    \t        
   \t        // Once both items are loaded, sync events
   \t        if ( ++loadCount == 2 ) {
    \t            
   \t            // Iterate all events and trigger them on the video B
   \t            // whenever they occur on the video A
   \t            events.forEach(function( event ) {

   \t                videos.a.on( event, function() {
   \t                    
   \t                    // Avoid overkill events, trigger timeupdate manually
   \t                    if ( event === \"timeupdate\" ) {
    \t                        
   \t                        if ( !this.media.paused ) {
   \t                            return;
   \t                        } 
   \t                        videos.b.emit( \"timeupdate\" );
   \t                        
   \t                        // update scrubber
   \t                        scrub.val( this.currentTime() );
    \t                        
   \t                        return;
   \t                    }
   \t                    
   \t                    if ( event === \"seeking\" ) {
   \t                        videos.b.currentTime( this.currentTime() );
   \t                    }
   \t                    
   \t                    if ( event === \"play\" || event === \"pause\" ) {
   \t                        videos.b[ event ]();
   \t                    }
   \t                });
   \t            });
   \t        }
   \t    });
   \t});

    scrub.bind(\"change\", function() {
        var val = this.value;
        videos.a.currentTime( val );
        videos.b.currentTime( val );
    });

    // With requestAnimationFrame, we can ensure that as 
    // frequently as the browser would allow, 
    // the video is resync'ed.
    function sync() {
        if (videos.b.media.readyState === 4 ) {
            videos.b.currentTime( 
                videos.a.currentTime()        
            );        
        }
        requestAnimationFrame(sync);
    }

    sync();
    
//  *** sync code ****************************************************************
//\tfrom http://bocoup.com/weblog/html5-video-synchronizing-playback-of-two-videos/    
   \t
   \torig_video.play()
   \tcond_video.play()
   \t
\t</script>
   \t
  </div>
    
 ";
    }

    public function getTemplateName()
    {
        return "IqaCrowdSourcingBundle:Iqa:/video/doubleStimulusVideo_SP.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 45,  103 => 44,  96 => 40,  92 => 39,  66 => 15,  63 => 14,  55 => 9,  50 => 8,  47 => 7,  41 => 4,  38 => 3,  11 => 1,);
    }
}
