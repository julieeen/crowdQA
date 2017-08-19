<?php

namespace Iqa\CrowdSourcingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * conditions
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Iqa\CrowdSourcingBundle\Entity\conditionsRepository")
 */
class conditions
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
     * @ORM\Column(name="filename", type="text")
     */
    private $filename;

    /**
     * @var integer
     *
     * @ORM\Column(name="original_id", type="integer")
     */
    private $originalId;

    /**
     * @var string
     *
     * @ORM\Column(name="parameter_name", type="text")
     */
    private $parameterName;

    /**
     * @var string
     *
     * @ORM\Column(name="parameter_value", type="decimal")
     */
    private $parameterValue;


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
     * Set filename
     *
     * @param string $filename
     * @return conditions
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string 
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set originalId
     *
     * @param integer $originalId
     * @return conditions
     */
    public function setOriginalId($originalId)
    {
        $this->originalId = $originalId;

        return $this;
    }

    /**
     * Get originalId
     *
     * @return integer 
     */
    public function getOriginalId()
    {
        return $this->originalId;
    }

    /**
     * Set parameterName
     *
     * @param string $parameterName
     * @return conditions
     */
    public function setParameterName($parameterName)
    {
        $this->parameterName = $parameterName;

        return $this;
    }

    /**
     * Get parameterName
     *
     * @return string 
     */
    public function getParameterName()
    {
        return $this->parameterName;
    }

    /**
     * Set parameterValue
     *
     * @param string $parameterValue
     * @return conditions
     */
    public function setParameterValue($parameterValue)
    {
        $this->parameterValue = $parameterValue;

        return $this;
    }

    /**
     * Get parameterValue
     *
     * @return string 
     */
    public function getParameterValue()
    {
        return $this->parameterValue;
    }
}
