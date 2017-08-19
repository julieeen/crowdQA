<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // iqa_crowd_sourcing_homepage
        if ($pathinfo === '/iqa') {
            return array (  '_controller' => 'Iqa\\CrowdSourcingBundle\\Controller\\IqaController::welcomeAction',  '_route' => 'iqa_crowd_sourcing_homepage',);
        }

        // iqa_crowd_sourcing_survey
        if ($pathinfo === '/survey') {
            return array (  '_controller' => 'Iqa\\CrowdSourcingBundle\\Controller\\IqaController::surveyAction',  '_route' => 'iqa_crowd_sourcing_survey',);
        }

        // iqa_crowd_sourcing_instruction
        if ($pathinfo === '/instruction') {
            return array (  '_controller' => 'Iqa\\CrowdSourcingBundle\\Controller\\IqaController::instructionAction',  '_route' => 'iqa_crowd_sourcing_instruction',);
        }

        // iqa_crowd_sourcing_rate
        if ($pathinfo === '/rate') {
            return array (  '_controller' => 'Iqa\\CrowdSourcingBundle\\Controller\\IqaController::rateAction',  '_route' => 'iqa_crowd_sourcing_rate',);
        }

        // iqa_crowd_sourcing_present
        if ($pathinfo === '/present') {
            return array (  '_controller' => 'Iqa\\CrowdSourcingBundle\\Controller\\IqaController::presentAction',  '_route' => 'iqa_crowd_sourcing_present',);
        }

        // iqa_crowd_sourcing_finish
        if ($pathinfo === '/finish') {
            return array (  '_controller' => 'Iqa\\CrowdSourcingBundle\\Controller\\IqaController::finishAction',  '_route' => 'iqa_crowd_sourcing_finish',);
        }

        // iqa_crowd_sourcing_homepage_default
        if (preg_match('#^/(?P<experimentId>[^/]++)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'iqa_crowd_sourcing_homepage_default')), array (  '_controller' => 'Iqa\\CrowdSourcingBundle\\Controller\\IqaController::welcomeAction',  'experimentId' => 'iqa',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
