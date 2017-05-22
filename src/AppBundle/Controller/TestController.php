<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Beer;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Doctrine\ORM\Mapping as ORM;

class TestController extends FOSRestController

{
   /**
    * @Rest\Get(path="/beer/{id}", name="get_beer")
    */
    public function getBeerAction(Beer $id)
    {
  
        return $id;
    }

    public function postBeerAction()
    {

    }

    public function putBeerAction()
    {

    }

    public function deleteBeerAction()
    {

    }
}
