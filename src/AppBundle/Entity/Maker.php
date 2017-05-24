<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class Maker
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
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Beer", mappedBy="maker")
     */
    private $beers;
    
    /**
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Country")
     * @ORM\JoinColumn(name="country", referencedColumnName="id")
     */
    private $country;
    
    /**
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Type")
     * @ORM\JoinColumn(name="type", referencedColumnName="id")
     */
    private $type;
    
    
   
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->beers = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Maker
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
     * Add beer
     *
     * @param \AppBundle\Entity\Beer $beer
     *
     * @return Maker
     */
    public function addBeer(\AppBundle\Entity\Beer $beer)
    {
        $this->beers[] = $beer;

        return $this;
    }

    /**
     * Remove beer
     *
     * @param \AppBundle\Entity\Beer $beer
     */
    public function removeBeer(\AppBundle\Entity\Beer $beer)
    {
        $this->beers->removeElement($beer);
    }

    /**
     * Get beers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBeers()
    {
        return $this->beers;
    }

    /**
     * Set country
     *
     * @param \AppBundle\Entity\Country $country
     *
     * @return Maker
     */
    public function setCountry(\AppBundle\Entity\Country $country = null)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return \AppBundle\Entity\Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set type
     *
     * @param \AppBundle\Entity\Type $type
     *
     * @return Maker
     */
    public function setType(\AppBundle\Entity\Type $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \AppBundle\Entity\Type
     */
    public function getType()
    {
        return $this->type;
    }
}
