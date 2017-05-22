<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class country
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
    * @ORM\Column(type="string", length=50, nullable=false)
    */
    private $name;
  
    /**
     *@ORM\Column(type="string", length=50, nullable=false)
     */
    private $continent;
  
    /**
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Maker", mappedBy="country")
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
     * @return country
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
     * Set continent
     *
     * @param string $continent
     *
     * @return country
     */
    public function setContinent($continent)
    {
        $this->continent = $continent;

        return $this;
    }

    /**
     * Get continent
     *
     * @return string
     */
    public function getContinent()
    {
        return $this->continent;
    }

    /**
     * Add maker
     *
     * @param \AppBundle\Entity\Maker $maker
     *
     * @return country
     */
    public function addMaker(\AppBundle\Entity\Maker $maker)
    {
        $this->makers[] = $maker;

        return $this;
    }

    /**
     * Remove maker
     *
     * @param \AppBundle\Entity\Maker $maker
     */
    public function removeMaker(\AppBundle\Entity\Maker $maker)
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
