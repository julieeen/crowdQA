<?php

namespace Proxies\__CG__\Iqa\CrowdSourcingBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class presentationSession extends \Iqa\CrowdSourcingBundle\Entity\presentationSession implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Iqa\\CrowdSourcingBundle\\Entity\\presentationSession' . "\0" . 'id', '' . "\0" . 'Iqa\\CrowdSourcingBundle\\Entity\\presentationSession' . "\0" . 'experimentId', '' . "\0" . 'Iqa\\CrowdSourcingBundle\\Entity\\presentationSession' . "\0" . 'subjectId', '' . "\0" . 'Iqa\\CrowdSourcingBundle\\Entity\\presentationSession' . "\0" . 'viewingDistance', '' . "\0" . 'Iqa\\CrowdSourcingBundle\\Entity\\presentationSession' . "\0" . 'displayHeight', '' . "\0" . 'Iqa\\CrowdSourcingBundle\\Entity\\presentationSession' . "\0" . 'lightningCondition', '' . "\0" . 'Iqa\\CrowdSourcingBundle\\Entity\\presentationSession' . "\0" . 'finished', '' . "\0" . 'Iqa\\CrowdSourcingBundle\\Entity\\presentationSession' . "\0" . 'startTime', '' . "\0" . 'Iqa\\CrowdSourcingBundle\\Entity\\presentationSession' . "\0" . 'endTime', '' . "\0" . 'Iqa\\CrowdSourcingBundle\\Entity\\presentationSession' . "\0" . 'feedback');
        }

        return array('__isInitialized__', '' . "\0" . 'Iqa\\CrowdSourcingBundle\\Entity\\presentationSession' . "\0" . 'id', '' . "\0" . 'Iqa\\CrowdSourcingBundle\\Entity\\presentationSession' . "\0" . 'experimentId', '' . "\0" . 'Iqa\\CrowdSourcingBundle\\Entity\\presentationSession' . "\0" . 'subjectId', '' . "\0" . 'Iqa\\CrowdSourcingBundle\\Entity\\presentationSession' . "\0" . 'viewingDistance', '' . "\0" . 'Iqa\\CrowdSourcingBundle\\Entity\\presentationSession' . "\0" . 'displayHeight', '' . "\0" . 'Iqa\\CrowdSourcingBundle\\Entity\\presentationSession' . "\0" . 'lightningCondition', '' . "\0" . 'Iqa\\CrowdSourcingBundle\\Entity\\presentationSession' . "\0" . 'finished', '' . "\0" . 'Iqa\\CrowdSourcingBundle\\Entity\\presentationSession' . "\0" . 'startTime', '' . "\0" . 'Iqa\\CrowdSourcingBundle\\Entity\\presentationSession' . "\0" . 'endTime', '' . "\0" . 'Iqa\\CrowdSourcingBundle\\Entity\\presentationSession' . "\0" . 'feedback');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (presentationSession $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setExperimentId($experimentId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExperimentId', array($experimentId));

        return parent::setExperimentId($experimentId);
    }

    /**
     * {@inheritDoc}
     */
    public function getExperimentId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExperimentId', array());

        return parent::getExperimentId();
    }

    /**
     * {@inheritDoc}
     */
    public function setSubjectId($subjectId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSubjectId', array($subjectId));

        return parent::setSubjectId($subjectId);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubjectId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubjectId', array());

        return parent::getSubjectId();
    }

    /**
     * {@inheritDoc}
     */
    public function setViewingDistance($viewingDistance)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setViewingDistance', array($viewingDistance));

        return parent::setViewingDistance($viewingDistance);
    }

    /**
     * {@inheritDoc}
     */
    public function getViewingDistance()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getViewingDistance', array());

        return parent::getViewingDistance();
    }

    /**
     * {@inheritDoc}
     */
    public function setDisplayHeight($displayHeight)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDisplayHeight', array($displayHeight));

        return parent::setDisplayHeight($displayHeight);
    }

    /**
     * {@inheritDoc}
     */
    public function getDisplayHeight()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDisplayHeight', array());

        return parent::getDisplayHeight();
    }

    /**
     * {@inheritDoc}
     */
    public function setLightningCondition($lightningCondition)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLightningCondition', array($lightningCondition));

        return parent::setLightningCondition($lightningCondition);
    }

    /**
     * {@inheritDoc}
     */
    public function getLightningCondition()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLightningCondition', array());

        return parent::getLightningCondition();
    }

    /**
     * {@inheritDoc}
     */
    public function setFinished($finished)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFinished', array($finished));

        return parent::setFinished($finished);
    }

    /**
     * {@inheritDoc}
     */
    public function getFinished()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFinished', array());

        return parent::getFinished();
    }

    /**
     * {@inheritDoc}
     */
    public function setStartTime($startTime)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStartTime', array($startTime));

        return parent::setStartTime($startTime);
    }

    /**
     * {@inheritDoc}
     */
    public function getStartTime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStartTime', array());

        return parent::getStartTime();
    }

    /**
     * {@inheritDoc}
     */
    public function getFeedback()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFeedback', array());

        return parent::getFeedback();
    }

    /**
     * {@inheritDoc}
     */
    public function setFeedback($feedback)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFeedback', array($feedback));

        return parent::setFeedback($feedback);
    }

    /**
     * {@inheritDoc}
     */
    public function getEndTime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEndTime', array());

        return parent::getEndTime();
    }

    /**
     * {@inheritDoc}
     */
    public function setEndTime($endTime)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEndTime', array($endTime));

        return parent::setEndTime($endTime);
    }

}
