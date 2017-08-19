<?php

namespace Iqa\CrowdSourcingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ratingLabel
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Iqa\CrowdSourcingBundle\Entity\ratingLabelRepository")
 */
class ratingLabel
{
//     /**
//      * @var integer
//      *
//      * @ORM\Column(name="id", type="integer")
//      * @ORM\Id
//      * @ORM\GeneratedValue(strategy="AUTO")
//      */
//     private $id;

    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(name="procedure_id", type="integer")
     */
    private $procedureId;

    /**
     * @var integer
     *
     * @ORM\Column(name="proceduresLabel_id", type="integer")
     */
    private $proceduresLabelId;

    /**
     * @var string
     *
     * @ORM\Column(name="labelName", type="text")
     */
    private $labelName;


//     /**
//      * Get id
//      *
//      * @return integer 
//      */
//     public function getId()
//     {
//         return $this->id;
//     }

    /**
     * Set procedureId
     *
     * @param integer $procedureId
     * @return ratingLabel
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
     * Set proceduresLabelId
     *
     * @param integer $proceduresLabelId
     * @return ratingLabel
     */
    public function setProceduresLabelId($proceduresLabelId)
    {
        $this->proceduresLabelId = $proceduresLabelId;

        return $this;
    }

    /**
     * Get proceduresLabelId
     *
     * @return integer 
     */
    public function getProceduresLabelId()
    {
        return $this->proceduresLabelId;
    }

    /**
     * Set labelName
     *
     * @param string $labelName
     * @return ratingLabel
     */
    public function setLabelName($labelName)
    {
        $this->labelName = $labelName;

        return $this;
    }

    /**
     * Get labelName
     *
     * @return string 
     */
    public function getLabelName()
    {
        return $this->labelName;
    }
}
