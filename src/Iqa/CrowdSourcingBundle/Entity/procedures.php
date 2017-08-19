<?php

namespace Iqa\CrowdSourcingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * procedures
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Iqa\CrowdSourcingBundle\Entity\proceduresRepository")
 */
class procedures
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
     * @var string
     *
     * @ORM\Column(name="labelNames", type="text")
     */
    private $labelNames;

    /**
     * @var integer
     *
     * @ORM\Column(name="presentationDuration", type="integer")
     */
    private $presentationDuration;

    /**
     * @var boolean
     *
     * @ORM\Column(name="concurrentRating", type="boolean")
     */
    private $concurrentRating;

    /**
     * @var integer
     *
     * @ORM\Column(name="numConCurrStim", type="integer")
     */
    private $numConCurrStim;

    /**
     * @var boolean
     *
     * @ORM\Column(name="useHiddenReference", type="boolean")
     */
    private $useHiddenReference;
    
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="instructionText", type="text")
     */
    private $instructionText;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="showProgressbar", type="boolean")
     */
    private $showProgressbar;
    
    
    
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
     * @return procedures
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
     * Set labelNames
     *
     * @param string $labelNames
     * @return procedures
     */
    public function setLabelNames($labelNames)
    {
        $this->labelNames = $labelNames;

        return $this;
    }

    /**
     * Get labelNames
     *
     * @return string 
     */
    public function getLabelNames()
    {
        return $this->labelNames;
    }

    /**
     * Set presentationDuration
     *
     * @param integer $presentationDuration
     * @return procedures
     */
    public function setPresentationDuration($presentationDuration)
    {
        $this->presentationDuration = $presentationDuration;

        return $this;
    }

    /**
     * Get presentationDuration
     *
     * @return integer 
     */
    public function getPresentationDuration()
    {
        return $this->presentationDuration;
    }

    /**
     * Set concurrentRating
     *
     * @param boolean $concurrentRating
     * @return procedures
     */
    public function setConcurrentRating($concurrentRating)
    {
        $this->concurrentRating = $concurrentRating;

        return $this;
    }

    /**
     * Get concurrentRating
     *
     * @return boolean 
     */
    public function getConcurrentRating()
    {
        return $this->concurrentRating;
    }

    /**
     * Set numConCurrStim
     *
     * @param integer $numConCurrStim
     * @return procedures
     */
    public function setNumConCurrStim($numConCurrStim)
    {
        $this->numConCurrStim = $numConCurrStim;

        return $this;
    }

    /**
     * Get numConCurrStim
     *
     * @return integer 
     */
    public function getNumConCurrStim()
    {
        return $this->numConCurrStim;
    }
    

    /**
     * Set useHiddenReference
     *
     * @param boolean $useHiddenReference
     * @return procedures
     */
    public function setUseHiddenReference($useHiddenReference)
    {
    	$this->useHiddenReference = $useHiddenReference;
    
    	return $this;
    }
    
    /**
     * Get useHiddenReference
     *
     * @return boolean
     */
    public function getUseHiddenReference()
    {
    	return $this->useHiddenReference;
    }

    
    /**
     * Set instructionText
     *
     * @param string $instructionText
     * @return procedures
     */
    public function setInstructionText($instructionText)
    {
    	$this->instructionText = $instructionText;
    
    	return $this;
    }
    
    /**
     * Get instructionText
     *
     * @return string
     */
    public function getInstructionText()
    {
    	return $this->instructionText;
    }
	public function getShowProgressbar() {
		return $this->showProgressbar;
	}
	public function setShowProgressbar($showProgressbar) {
		$this->showProgressbar = $showProgressbar;
		return $this;
	}
	
        
}
