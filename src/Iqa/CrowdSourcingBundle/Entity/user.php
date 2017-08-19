<?php

namespace Iqa\CrowdSourcingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * user
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Iqa\CrowdSourcingBundle\Entity\userRepository")
 */
class user
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
     * @ORM\Column(name="gender_id", type="integer")
     */
    private $genderId;

    /**
     * @var integer
     *
     * @ORM\Column(name="age", type="integer")
     */
    private $age;
    
    /**
     * @var string
     *
     * @ORM\Column(name="colortest", type="string")
     */
    private $colortest;
    
    /**
     * @var string
     *
     * @ORM\Column(name="vision", type="string")
     */
    private $vision;

    /**
     * @var string
     *
     * @ORM\Column(name="displayHeight", type="integer")
     */
    private $displayHeight;
    
    /**
     * @var string
     *
     * @ORM\Column(name="viewingDistance", type="float")
     */
    private $viewingDistance;
    
    /**
     * @var string
     *
     * @ORM\Column(name="expert", type="integer")
     */
    private $expert;
    
    /**
     * @var string
     *
     * @ORM\Column(name="personalID", type="string")
     */
    private $personalID;
    
    
    
    
    
    
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
     * Set genderId
     *
     * @param integer $genderId
     * @return user
     */
    public function setGenderId($genderId)
    {
        $this->genderId = $genderId;

        return $this;
    }

    /**
     * Get genderId
     *
     * @return integer 
     */
    public function getGenderId()
    {
        return $this->genderId;
    }

    /**
     * Set age
     *
     * @param integer $age
     * @return user
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return integer 
     */
    public function getAge()
    {
        return $this->age;
    }
    
    /**
     * Set vision
     *
     * @param string $vision
     * @return user
     */
    public function setVision($value)
    {
    	$this->vision = $value;
    
    	return $this;
    }
    
    /**
     * Get vision
     *
     * @return string
     */
    public function getVision()
    {
    	return $this->vision;
    }
    
    /**
     * Set colortest
     *
     * @param string $colortest
     * @return user
     */
    public function setColortest($value)
    {
    	$this->colortest = $value;
    
    	return $this;
    }
    
    /**
     * Get colortest
     *
     * @return string
     */
    public function getColortest()
    {
    	return $this->colortest;
    }
    
    
	public function getDisplayHeight() {
		return $this->displayHeight;
	}
	public function setDisplayHeight($displayHeight) {
		$this->displayHeight = $displayHeight;
		return $this;
	}
	public function getViewingDistance() {
		return $this->viewingDistance;
	}
	public function setViewingDistance($viewingDistance) {
		$this->viewingDistance = $viewingDistance;
		return $this;
	}
	public function getExpert() {
		return $this->expert;
	}
	public function setExpert($expert) {
		$this->expert = $expert;
		return $this;
	}
	public function getPersonalID() {
		return $this->personalID;
	}
	public function setPersonalID($personalID) {
		$this->personalID = $personalID;
		return $this;
	}
	
	
	
    
        
    
    
}
