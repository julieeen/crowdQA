<?php
namespace Iqa\CrowdSourcingBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;

class Survey
{
	protected $gender;
	protected $age;
	
	protected $lightningCondition;
	protected $viewingDistance;
	protected $displayHeight;
	
	public function getGender()
	{
		return $this->gender;
	}
	public function setGender($gender)
	{
		$this->gender = $gender;
	}
	
	public function getAge()
	{
		return $this->age;
	}
	public function setAge($age)
	{
		$this->age = $age;
	}
	
	public function getLightningCondition()
	{
		return $this->lightningCondition;
	}
	public function setLightningCondition($lightningContition)
	{
		$this->lightningContition = $lightningContition;
	}
	
	public function getViewingDistance()
	{
		return $this->viewingDistance;
	}
	public function setViewingDistance($viewingDistance)
	{
		$this->viewingDistance = $viewingDistance;
	}
	
	public function getDisplayHeight()
	{
		return $this->displayHeight;
	}
	public function setdisplayHeight($displayHeight)
	{
		$this->displayHeight = $displayHeight;
	}
	
	
	
	
	
}
