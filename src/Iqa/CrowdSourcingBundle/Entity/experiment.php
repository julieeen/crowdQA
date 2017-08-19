<?php

namespace Iqa\CrowdSourcingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * experiment
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Iqa\CrowdSourcingBundle\Entity\experimentRepository")
 */
class experiment
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
     * @var string
     *
     * @ORM\Column(name="name", type="text")
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="procedure_id", type="integer")
     */
    private $procedureId;

    /**
     * @var integer
     *
     * @ORM\Column(name="numRepetitions", type="integer")
     */
    private $numRepetitions;
    
   /**
     * @var string
     *
     * @ORM\Column(name="welcomeMessage", type="text")
     */
    private $welcomeMessage;

    /**
     * @var string
     *
     * @ORM\Column(name="surveyTitle", type="text")
     */
    private $surveyTitle;
    
    /**
     * @var preSurveyText
     *
     * @ORM\Column(name="preSurveyText", type="text")
     */
    private $preSurveyText;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="presentationDuration", type="integer")
     */
    private $presentationDuration;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="labCondition", type="boolean")
     */
    private $labCondition;
    
    
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
     * Set name
     *
     * @param string $name
     * @return experiment
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set procedureId
     *
     * @param integer $procedureId
     * @return experiment
     */
    public function setProcedureId($procedureId)
    {
        $this->procedureId = $procedureId;

        return $this;
    }

    /**
     * Get procedureId
     *
     * @return integer 
     */
    public function getProcedureId()
    {
        return $this->procedureId;
    }

    /**
     * Set numRepetitions
     *
     * @param integer $numRepetitions
     * @return experiment
     */
    public function setNumRepetitions($numRepetitions)
    {
        $this->numRepetitions = $numRepetitions;

        return $this;
    }

    /**
     * Get numRepetitions
     *
     * @return integer 
     */
    public function getNumRepetitions()
    {
        return $this->numRepetitions;
    }
    
    
    /**
     * Set welcomeMessage
     *
     * @param string $welcomeMessage
     * @return experiment
     */
    public function setWelcomeMessage($welcomeMessage)
    {
    	$this->welcomeMessage = $welcomeMessage;
    	return $this;
    }
    
    /**
     * Get welcomeMessage
     *
     * @return string
     */
    public function getWelcomeMessage()
    {
    	return $this->welcomeMessage;
    }
    
    /**
     * Set surveyTitle
     *
     * @param string $surveyTitle
     * @return experiment
     */
    public function setSurveyTitle($surveyTitle)
    {
    	$this->surveyTitle = $surveyTitle;
    	return $this;
    }
    
    /**
     * Get surveyTitle
     *
     * @return string
     */
    public function getSurveyTitle()
    {
    	return $this->surveyTitle;
    }
    
    
    /**
     * Set preSurveyText
     *
     * @param string $preSurveyText
     * @return experiment
     */
    public function setPreSurveyText($preSurveyText)
    {
    	$this->preSurveyText = $preSurveyText;
    	return $this;
    }
    
    /**
     * Get preSurveyText
     *
     * @return string
     */
    public function getPreSurveyText()
    {
    	return $this->preSurveyText;
    }
    
    
	public function getPresentationDuration() {
		return $this->presentationDuration;
	}
	
	public function setPresentationDuration($presentationDuration) {
		$this->presentationDuration = $presentationDuration;
		return $this;
	}
	public function getLabCondition() {
		return $this->labCondition;
	}
	public function setLabCondition($labCondition) {
		$this->labCondition = $labCondition;
		return $this;
	}
	
	
}
