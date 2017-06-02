<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity()
 */
class Region
{
     /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Assert\NotBlank()
     */
    private $id;
    
     /**
     * @ORM\Column(type="string", length=50, nullable=false)
     */
    private $name;
    
     /**
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Division")
     * @ORM\JoinColumn(name="division", referencedColumnName="id")
     */
    private $division;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->sports = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Region
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
     * Add sport
     *
     * @param \AppBundle\Entity\Sports $sport
     *
     * @return Region
     */
    public function addSport(\AppBundle\Entity\Sports $sport)
    {
        $this->sports[] = $sport;

        return $this;
    }

    /**
     * Remove sport
     *
     * @param \AppBundle\Entity\Sports $sport
     */
    public function removeSport(\AppBundle\Entity\Sports $sport)
    {
        $this->sports->removeElement($sport);
    }

    /**
     * Get sports
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSports()
    {
        return $this->sports;
    }

    /**
     * Set division
     *
     * @param \AppBundle\Entity\Division $division
     *
     * @return Region
     */
    public function setDivision(\AppBundle\Entity\Division $division = null)
    {
        $this->division = $division;

        return $this;
    }

    /**
     * Get division
     *
     * @return \AppBundle\Entity\Division
     */
    public function getDivision()
    {
        return $this->division;
    }
}
