<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Beer
 * @package AppBundle\Entity
 *
 * @ORM\Entity()
 */
class Beer
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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Maker")
     * @ORM\JoinColumn(name="maker", referencedColumnName="id")
     */
    private $maker;
    
    /**
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Type")
     * @ORM\JoinColumn(name="type", referencedColumnName="id")
     */
    private $type;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $caloriesPerServing;


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
     * @return Beer
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
     * Set caloriesPerServing
     *
     * @param integer $caloriesPerServing
     *
     * @return Beer
     */
    public function setCaloriesPerServing($caloriesPerServing)
    {
        $this->caloriesPerServing = $caloriesPerServing;

        return $this;
    }

    /**
     * Get caloriesPerServing
     *
     * @return integer
     */
    public function getCaloriesPerServing()
    {
        return $this->caloriesPerServing;
    }

    /**
     * Set maker
     *
     * @param \AppBundle\Entity\Maker $maker
     *
     * @return Beer
     */
    public function setMaker(\AppBundle\Entity\Maker $maker = null)
    {
        $this->maker = $maker;

        return $this;
    }

    /**
     * Get maker
     *
     * @return \AppBundle\Entity\Maker
     */
    public function getMaker()
    {
        return $this->maker;
    }

    /**
     * Set type
     *
     * @param \AppBundle\Entity\Type $type
     *
     * @return Beer
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
