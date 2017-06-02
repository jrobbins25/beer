<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Sports
 * @package AppBundle\Entity
 *
 * @ORM\Entity()
 */
class Sports
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Assert\Blank(
     *     message="Dunn Dunnnn Dunnnnnnnn!!"
     * )
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50, nullable=false)
     * @Assert\NotBlank()
     * @Assert\Length(
     *     max="50"
     * )
     *  @Assert\Choice(
     *      choices = { "snowboarding", "surfing-bigwave", "surfing-smallwave", "skateboarding", "football", "baseball", "soccer", "skiing", "wakeboarding", "bungyjumping", "skydiving", "basketball", "razorscootering", "moto"},
     *      message = "Pick your sport."
     * )
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Region")
     * @ORM\JoinColumn(name="region", referencedColumnName="id")
     * @Assert\NotBlank()
     * @Assert\Valid()
     */
    private $region;
    
    /**
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Division")
     * @ORM\JoinColumn(name="division", referencedColumnName="id")
     * @Assert\NotBlank()
     * @Assert\Valid()
     */
    private $division;


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
     * @return Sports
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
     * @param \AppBundle\Entity\Region $region
     *
     * @return Sports
     */
    public function setRegion(\AppBundle\Entity\Region $region = null)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return \AppBundle\Entity\Region
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set division
     *
     * @param \AppBundle\Entity\Division $division
     *
     * @return Sports
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
