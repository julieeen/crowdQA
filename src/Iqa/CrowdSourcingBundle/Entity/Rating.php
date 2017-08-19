<?php
namespace Iqa\CrowdSourcingBundle\Entity;

class Rating
{
	protected $rating;
	
	protected $ratingDuration;
	
	public function getRating()
	{
		return $this->rating;
	}

	public function setRating($rating)
	{
		$this->rating = $rating;
	}
	
	public function getRatingDuration()
	{
		return $this->ratingDuration;
	}
	
	public function setRatingDuration($value)
	{
		$this->ratingDuration = $value;
	}
}
