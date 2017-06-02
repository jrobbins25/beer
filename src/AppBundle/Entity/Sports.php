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

    