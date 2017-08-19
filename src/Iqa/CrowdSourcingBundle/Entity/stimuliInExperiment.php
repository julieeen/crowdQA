<?php

namespace Iqa\CrowdSourcingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * stimuliInExperiment
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Iqa\CrowdSourcingBundle\Entity\stimuliInExperimentRepository")
 */
class stimuliInExperiment
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
     * @ORM\Column(name="experiment_id", type="integer")
     */
    private $experimentId;

    /**
     * @var integer
     *
     * @ORM\Column(name="stimulus_id", type="integer")
     */
    private $stimulusId;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="trainingMode", type="boolean")
     */
    private $trainingMode;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="samviq", type="integer")
     */
    private $samviq;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="singleRepetition", type="integer")
     */
    private $singleRepetition;
    
    
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
     * Set experimentId
     *
     * @param integer $experimentId
     * @return stimuliInExperiment
     */
    public function setExperimentId($experimentId)
    {
        $this->experimentId = $experimentId;

        return $this;
    }

    /**
     * Get experimentId
     *
     * @return integer 
     */
    public function getExperimentId()
    {
        return $this->experimentId;
    }

    /**
     * Set stimulusId
     *
     * @param integer $stimulusId
     * @return stimuliInExperiment
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
     * Set trainingMode
     *
     * @param boolean $trainingMode
     * @return stimuliInExperiment
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
	
	public function getSamviq() {
		return $this->samviq;
	}
	public function setSamviq($samviq) {
		$this->samviq = $samviq;
		return $this;
	}
	
	public function getSingleRepetition() {
		return $this->singleRepetition;
	}
	
	public function setSingleRepetition($singleRepetition) {
		$this->singleRepetition = $singleRepetition;
		return $this;
	}
	
    
    
    
}
