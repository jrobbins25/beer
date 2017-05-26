<?php

namespace AppBundle\Service;

use AppBundle\Entity\Beer;
use AppBundle\Entity\Maker;
use AppBundle\Entity\Type;
use Doctrine\ORM\EntityManager;

class BeerService
{
    private $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function createBeer(Beer $id)
    {
        $beer = new Beer;
        $beer->setName($id->getName());
        $beer->setMaker($this->em->getRepository(Maker::class)->find($id->getMaker()->getId()));
        $beer->setType($this->em->getRepository(Type::class)->find($id->getType()->getId()));
        $beer->setCaloriesPerServing($id->getCaloriesPerServing());

        $this->em->persist($beer);
        $this->em->flush();

        return $beer;
    }

    public function updateBeer()
    {

    }

    public function deleteBeer()
    {

    }
}
