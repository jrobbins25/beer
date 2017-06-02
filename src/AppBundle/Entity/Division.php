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

}
