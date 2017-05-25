<?php

Namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity()
 */
Class Type
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Assert\NotBlank(
     *      message="You have failed!!"
     * )
     */
    private $id;
    
    /**
     * @ORM\Column(type="string", length=50, nullable=false) 
     */
    private $name;
    
    // ...
    
    /**
     * @ORM\Column(type="string", length=50, nullable=false)
     */
    private $region;
    
    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Beer", mappedBy="type")
     */
    private $makers;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->makers = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     *
     * @return Type
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
     * Set region
     *
     * @param string $region
     *
     * @return Type
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Add maker
     *
     * @param \AppBundle\Entity\Beer $maker
     *
     * @return Type
     */
    public function addMaker(\AppBundle\Entity\Beer $maker)
    {
        $this->makers[] = $maker;

        return $this;
    }

    /**
     * Remove maker
     *
     * @param \AppBundle\Entity\Beer $maker
     */
    public function removeMaker(\AppBundle\Entity\Beer $maker)
    {
        $this->makers->removeElement($maker);
    }

    /**
     * Get makers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMakers()
    {
        return $this->makers;
    }
}
