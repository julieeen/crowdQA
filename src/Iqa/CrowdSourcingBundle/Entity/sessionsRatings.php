<?php

namespace Iqa\CrowdSourcingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sessionsRatings
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Iqa\CrowdSourcingBundle\Entity\sessionsRatingsRepository")
 */
class sessionsRatings
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="sessionId", type="integer")
     */
    private $sessionId;

    /**
     * @var integer
     *
     * @ORM\Column(name="positionInSession", type="integer")
     */
    private $positionInSession;

    /**
     * @var integer
     *
     * @ORM\Column(name="stimulusId", type="integer")
     */
    private $stimulusId;

    /**
     * @var integer
     *
     * @ORM\Column(name="ratingValue", type="integer")
     */
    private $ratingValue;

    /**
     * @var integer
     *
     * @ORM\Column(name="ratingDuration", type="integer")
     */
    private $ratingDuration;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isOrig", type="boolean")
     */
    private $isOrig;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="trainingMode", type="boolean")
     */
    private $trainingMode;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="hiddenRef", type="boolean")
     */
    private $hiddenRef;
    
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set sessionId
     *
     * @param integer $sessionId
     * @return sessionsRatings
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;

        return $this;
    }

    /**
     * Get sessionId
     *
     * @return integer 
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * Set positionInSession
     *
     * @param integer $positionInSession
     * @return sessionsRatings
     */
    public function setPositionInSession($positionInSession)
    {
        $this->positionInSession = $positionInSession;

        return $this;
    }

    /**
     * Get positionInSession
     *
     * @return integer 
     */
    public function getPositionInSession()
    {
        return $this->positionInSession;
    }

    /**
     * Set stimulusId
     *
     * @param integer $stimulusId
     * @return sessionsRatings
     */
    public function setStimulusId($stimulusId)
    {
        $this->stimulusId = $stimulusId;

        return $this;
    }

    /**
     * Get stimulusId
     *
     * @return integer 
     */
    public function getStimulusId()
    {
        return $this->stimulusId;
    }

    /**
     * Set ratingValue
     *
     * @param integer $ratingValue
     * @return sessionsRatings
     */
    public function setRatingValue($ratingValue)
    {
        $this->ratingValue = $ratingValue;

        return $this;
    }

    /**
     * Get ratingValue
     *
     * @return integer 
     */
    public function getRatingValue()
    {
        return $this->ratingValue;
    }

    /**
     * Set ratingDuration
     *
     * @param integer $ratingDuration
     * @return sessionsRatings
     */
    public function setRatingDuration($ratingDuration)
    {
        $this->ratingDuration = $ratingDuration;

        return $this;
    }

    /**
     * Get ratingDuration
     *
     * @return integer 
     */
    public function getRatingDuration()
    {
        return $this->ratingDuration;
    }
    

    /**
     * Set isOrig
     *
     * @param boolean $isOrig
     * @return sessionsRatings
     */
    public function setIsOrig($isOrig)
    {
    	$this->isOrig = $isOrig;
    	return $this;
    }
    
    /**
     * Get isOrig
     *
     * @return boolean
     */
    public function getIsOrig()
    {
    	return $this->isOrig;
    }
    
    /**
     * Set trainingMode
     *
     * @param boolean $trainingMode
     * @return sessionsRatings
     */
    public function setTrainingMode($trainingMode)
    {
    	$this->trainingMode = $trainingMode;
    	return $this;
    }
    
    /**
     * Get trainingMode
     *
     * @return boolean
     */
    public function getTrainingMode()
    {
    	return $this->trainingMode;
    }
	public function getHiddenRef() {
		return $this->hiddenRef;
	}
	public function setHiddenRef($hiddenRef) {
		$this->hiddenRef = $hiddenRef;
		return $this;
	}
	
    
}
