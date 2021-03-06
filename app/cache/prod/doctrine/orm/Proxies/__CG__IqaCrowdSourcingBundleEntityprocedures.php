<?php

namespace Proxies\__CG__\Iqa\CrowdSourcingBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class procedures extends \Iqa\CrowdSourcingBundle\Entity\procedures implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Iqa\\CrowdSourcingBundle\\Entity\\procedures' . "\0" . 'id', '' . "\0" . 'Iqa\\CrowdSourcingBundle\\Entity\\procedures' . "\0" . 'name', '' . "\0" . 'Iqa\\CrowdSourcingBundle\\Entity\\procedures' . "\0" . 'labelNames', '' . "\0" . 'Iqa\\CrowdSourcingBundle\\Entity\\procedures' . "\0" . 'presentationDuration', '' . "\0" . 'Iqa\\CrowdSourcingBundle\\Entity\\procedures' . "\0" . 'concurrentRating', '' . "\0" . 'Iqa\\CrowdSourcingBundle\\Entity\\procedures' . "\0" . 'numConCurrStim', '' . "\0" . 'Iqa\\CrowdSourcingBundle\\Entity\\procedures' . "\0" . 'useHiddenReference', '' . "\0" . 'Iqa\\CrowdSourcingBundle\\Entity\\procedures' . "\0" . 'instructionText', '' . "\0" . 'Iqa\\CrowdSourcingBundle\\Entity\\procedures' . "\0" . 'showProgressbar');
        }

        return array('__isInitialized__', '' . "\0" . 'Iqa\\CrowdSourcingBundle\\Entity\\procedures' . "\0" . 'id', '' . "\0" . 'Iqa\\CrowdSourcingBundle\\Entity\\procedures' . "\0" . 'name', '' . "\0" . 'Iqa\\CrowdSourcingBundle\\Entity\\procedures' . "\0" . 'labelNames', '' . "\0" . 'Iqa\\CrowdSourcingBundle\\Entity\\procedures' . "\0" . 'presentationDuration', '' . "\0" . 'Iqa\\CrowdSourcingBundle\\Entity\\procedures' . "\0" . 'concurrentRating', '' . "\0" . 'Iqa\\CrowdSourcingBundle\\Entity\\procedures' . "\0" . 'numConCurrStim', '' . "\0" . 'Iqa\\CrowdSourcingBundle\\Entity\\procedures' . "\0" . 'useHiddenReference', '' . "\0" . 'Iqa\\CrowdSourcingBundle\\Entity\\procedures' . "\0" . 'instructionText', '' . "\0" . 'Iqa\\CrowdSourcingBundle\\Entity\\procedures' . "\0" . 'showProgressbar');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (procedures $proxy) {
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
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', array($name));

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', array());

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setLabelNames($labelNames)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLabelNames', array($labelNames));

        return parent::setLabelNames($labelNames);
    }

    /**
     * {@inheritDoc}
     */
    public function getLabelNames()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLabelNames', array());

        return parent::getLabelNames();
    }

    /**
     * {@inheritDoc}
     */
    public function setPresentationDuration($presentationDuration)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPresentationDuration', array($presentationDuration));

        return parent::setPresentationDuration($presentationDuration);
    }

    /**
     * {@inheritDoc}
     */
    public function getPresentationDuration()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPresentationDuration', array());

        return parent::getPresentationDuration();
    }

    /**
     * {@inheritDoc}
     */
    public function setConcurrentRating($concurrentRating)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setConcurrentRating', array($concurrentRating));

        return parent::setConcurrentRating($concurrentRating);
    }

    /**
     * {@inheritDoc}
     */
    public function getConcurrentRating()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConcurrentRating', array());

        return parent::getConcurrentRating();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumConCurrStim($numConCurrStim)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumConCurrStim', array($numConCurrStim));

        return parent::setNumConCurrStim($numConCurrStim);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumConCurrStim()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumConCurrStim', array());

        return parent::getNumConCurrStim();
    }

    /**
     * {@inheritDoc}
     */
    public function setUseHiddenReference($useHiddenReference)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUseHiddenReference', array($useHiddenReference));

        return parent::setUseHiddenReference($useHiddenReference);
    }

    /**
     * {@inheritDoc}
     */
    public function getUseHiddenReference()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUseHiddenReference', array());

        return parent::getUseHiddenReference();
    }

    /**
     * {@inheritDoc}
     */
    public function setInstructionText($instructionText)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInstructionText', array($instructionText));

        return parent::setInstructionText($instructionText);
    }

    /**
     * {@inheritDoc}
     */
    public function getInstructionText()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInstructionText', array());

        return parent::getInstructionText();
    }

    /**
     * {@inheritDoc}
     */
    public function getShowProgressbar()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShowProgressbar', array());

        return parent::getShowProgressbar();
    }

    /**
     * {@inheritDoc}
     */
    public function setShowProgressbar($showProgressbar)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setShowProgressbar', array($showProgressbar));

        return parent::setShowProgressbar($showProgressbar);
    }

}
