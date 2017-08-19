<?php

namespace Iqa\CrowdSourcingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * config
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Iqa\CrowdSourcingBundle\Entity\configRepository")
 */
class config
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
     * @var string
     * @ORM\Id
     * @ORM\Column(name="name", type="text")
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="text")
     */
    private $value;


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
     * Set name
     *
     * @param string $name
     * @return config
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
     * Set value
     *
     * @param string $value
     * @return config
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }
}
