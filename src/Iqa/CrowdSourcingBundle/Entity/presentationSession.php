<?php

namespace Iqa\CrowdSourcingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * presentationSession
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Iqa\CrowdSourcingBundle\Entity\presentationSessionRepository")
 */
class presentationSession
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
     * @ORM\Column(name="subject_id", type="integer")
     */
    private $subjectId;

    /**
     * @var integer
     *
     * @ORM\Column(name="viewingDistance", type="integer")
     */
    private $viewingDistance;

    /**
     * @var integer
     *
     * @ORM\Column(name="displayHeight", type="integer")
     */
    private $displayHeight;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="lightningCondition", type="integer")
     */
    private $lightningCondition;

    /**
     * @var boolean
     *
     * @ORM\Column(name="finished", type="boolean")
     */
    private $finished;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="startTime", type="datetime")
     */
    private $startTime;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="endTime", type="datetime")
     */
    private $endTime;
    
    /**
     * @var $feedback
     *
     * @ORM\Column(name="feedback", type="text")
     */
    private $feedback;


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
     * @return presentationSession
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
     * Set subjectId
     *
     * @param integer $subjectId
     * @return presentationSession
     */
    public function setSubjectId($subjectId)
    {
        $this->subjectId = $subjectId;

        return $this;
    }

    /**
     * Get subjectId
     *
     * @return integer 
     */
    public function getSubjectId()
    {
        return $this->subjectId;
    }

    /**
     * Set viewingDistance
     *
     * @param integer $viewingDistance
     * @return presentationSession
     */
    public function setViewingDistance($viewingDistance)
    {
        $this->viewingDistance = $viewingDistance;

        return $this;
    }

    /**
     * Get viewingDistance
     *
     * @return integer 
     */
    public function getViewingDistance()
    {
        return $this->viewingDistance;
    }

    /**
     * Set displayHeight
     *
     * @param integer $displayHeight
     * @return presentationSession
     */
    public function setDisplayHeight($displayHeight)
    {
    	$this->displayHeight = $displayHeight;
    
    	return $this;
    }
    
    /**
     * Get displayHeight
     *
     * @return integer
     */
    public function getDisplayHeight()
    {
    	return $this->displayHeight;
    }
    
    
    /**
     * Set lightningCondition
     *
     * @param integer $lightningCondition
     * @return presentationSession
     */
    public function setLightningCondition($lightningCondition)
    {
        $this->lightningCondition = $lightningCondition;

        return $this;
    }

    /**
     * Get lightningCondition
     *
     * @return integer 
     */
    public function getLightningCondition()
    {
        return $this->lightningCondition;
    }

    /**
     * Set finished
     *
     * @param boolean $finished
     * @return presentationSession
     */
    public function setFinished($finished)
    {
        $this->finished = $finished;

        return $this;
    }

    /**
     * Get finished
     *
     * @return boolean 
     */
    public function getFinished()
    {
        return $this->finished;
    }

    /**
     * Set startTime
     *
     * @param \DateTime $startTime
     * @return presentationSession
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * Get startTime
     *
     * @return \DateTime 
     */
    public function getStartTime()
    {
        return $this->startTime;
    }
    
    
	public function getFeedback() {
		return $this->feedback;
	}
	public function setFeedback($feedback) {
		$this->feedback = $feedback;
		return $this;
	}
	public function getEndTime() {
		return $this->endTime;
	}
	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		return $this;
	}
	
	
}
