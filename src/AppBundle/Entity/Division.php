<?php

Namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity()
 */
Class Division
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Assert\NotBlank(
     *      message="Dunn Dunnnn Dunnnnnnnn!!"
     * )
     */
    private $id;
    
    /**
     * @ORM\Column(type="string", length=50, nullable=false) 
     */
    private $name;
    
    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Sports", mappedBy="division")
     */
    private $region;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->region = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Division
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
     * Add region
     *
     * @param \AppBundle\Entity\Sports $region
     *
     * @return Division
     */
    public function addRegion(\AppBundle\Entity\Sports $region)
    {
        $this->region[] = $region;

        return $this;
    }

    /**
     * Remove region
     *
     * @param \AppBundle\Entity\Sports $region
     */
    public function removeRegion(\AppBundle\Entity\Sports $region)
    {
        $this->region->removeElement($region);
    }

    /**
     * Get region
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRegion()
    {
        return $this->region;
    }
}
