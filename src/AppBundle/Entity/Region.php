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
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Sports", mappedBy="region")
     */
    private $sports;
    
     /**
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Type")
     * @ORM\JoinColumn(name="type", referencedColumnName="id")
     */
    private $division;

}
